<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\PekerjaanAktif;
use App\Models\Pengeluaran;
use Illuminate\Http\Request;
use App\Models\RiwayatPekerjaan;
use Carbon\Carbon;
use Carbon\CarbonPeriod;

class RiwayatPekerjaanController extends Controller
{
    public function get()
    {
        $data = RiwayatPekerjaan::paginate(5)->toArray();

        return response()->json([
            "success" => true,
            "data" => $data,
        ]);
    }

    public function todaysIncome()
    {
        $income = RiwayatPekerjaan::whereDate("created_at", Carbon::now())->sum(
            "harga"
        );

        return response()->json($income);
    }

    public function thisMonthIncome()
    {
        $income = RiwayatPekerjaan::whereYear("created_at", Carbon::now()->year)
            ->whereMonth("created_at", Carbon::now()->month)
            ->sum("harga");

        return response()->json($income);
    }

    public function thisMonthClient()
    {
        $client = RiwayatPekerjaan::whereYear("created_at", Carbon::now()->year)
            ->whereMonth("created_at", Carbon::now()->month)
            ->count();

        return response()->json($client);
    }

    public function getJumlahPemasukan()
    {
        $startDate = Carbon::now()->subDays(30);
        $endDate = Carbon::now();
        $pemasukan = RiwayatPekerjaan::whereBetween("created_at", [
            $startDate,
            $endDate,
        ])
            ->select([
                PekerjaanAktif::raw("date(created_at) as date"),
                PekerjaanAktif::raw("CAST(sum(harga) AS INTEGER) as daily"),
                PekerjaanAktif::raw("count(harga) as count"),
            ])
            ->groupBy("date")
            ->get()
            ->keyBy("date");

        $period = new CarbonPeriod($startDate, "1 day", $endDate);

        foreach ($period as $date) {
            $dateString = $date->toDateString();

            if (!$pemasukan->has($dateString)) {
                $pemasukan->put($dateString, [
                    "date" => $dateString,
                    "daily" => 0,
                    "count" => 0,
                ]);
            }
        }

        $pemasukan = $pemasukan
            ->values()
            ->sortBy("date")
            ->toArray();

        $data = [];
        $label = [];
        $jumlahPekerjaan = [];

        foreach ($pemasukan as $key => $value) {
            array_push($data, $pemasukan[$key]["daily"]);
            array_push($label, $pemasukan[$key]["date"]);
            array_push($jumlahPekerjaan, $pemasukan[$key]["count"]);
        }

        return response()->json([
            "success" => true,
            "data" => $data,
            "jumlah" => $jumlahPekerjaan,
            "labels" => $label,
        ]);
    }
}
