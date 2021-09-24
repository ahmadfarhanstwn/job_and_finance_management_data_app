<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RiwayatPekerjaan;
use Carbon\Carbon;

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
}
