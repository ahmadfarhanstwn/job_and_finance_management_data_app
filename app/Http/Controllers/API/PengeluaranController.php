<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengeluaran;
use App\Models\Keuangan;
use Carbon\Carbon;
use App\Exports\PengeluaranExport;
use Maatwebsite\Excel\Facades\Excel;

class PengeluaranController extends Controller
{
    public function get()
    {
        $data = Pengeluaran::paginate(5)->toArray();
        return response()->json([
            "success" => true,
            "data" => $data,
        ]);
    }

    public function add(Request $request)
    {
        $pengeluaran = new Pengeluaran([
            "nama_pengeluaran" => $request->nama_pengeluaran,
            "detail_pengeluaran" => $request->detail_pengeluaran,
            "kategori_pengeluaran" => $request->kategori_pengeluaran,
            "jumlah_pengeluaran" => $request->jumlah_pengeluaran,
            "penanggungjawab" => $request->penanggungjawab,
        ]);
        $pengeluaran->save();

        $negativeNumber = -1 * $request->jumlah_pengeluaran;

        $keuangan = new Keuangan([
            "nama_transaksi" => $request->nama_pengeluaran,
            "keterangan_transaksi" => "Pengeluaran",
            "jumlah_transaksi" => $negativeNumber,
        ]);
        $keuangan->save();

        return response()->json("Data Pengeluaran Berhasil Ditambahkan");
    }

    public function pengeluaranBulanIni()
    {
        $pengeluaran = Pengeluaran::whereYear("created_at", Carbon::now()->year)
            ->whereMonth("created_at", Carbon::now()->month)
            ->sum("jumlah_pengeluaran");

        return response()->json($pengeluaran);
    }

    public function exportExcel()
    {
        // prettier-ignore
        return Excel::download(new PengeluaranExport, 'data-pengeluaran.xlsx');
    }
}
