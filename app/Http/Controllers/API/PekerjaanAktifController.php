<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PekerjaanAktif;
use App\Models\RiwayatPekerjaan;
use App\Models\Keuangan;
use Symfony\Component\HttpKernel\Event\ResponseEvent;

class PekerjaanAktifController extends Controller
{
    //mendapatkan semua data
    public function get()
    {
        $data = PekerjaanAktif::orderBy("deadline", "asc")
            ->orderBy("created_at", "asc")
            ->paginate(4);

        return response()->json(
            [
                "success" => true,
                "message" => "List Data Pekerjaan Aktif",
                "data" => $data,
            ],
            200
        );
    }

    public function mendekatiDeadline()
    {
        $data = PekerjaanAktif::orderBy("deadline", "asc")
            ->orderBy("created_at", "asc")
            ->paginate(5);

        return response()->json($data);
    }

    public function getJumlah()
    {
        $jumlah = PekerjaanAktif::count();
        return response()->json($jumlah);
    }

    //menambahkan data baru
    public function add(Request $request)
    {
        try {
            $user = new PekerjaanAktif();
            $user->nama_pekerjaan = $request->nama_pekerjaan;
            $user->deskripsi_pekerjaan = $request->deskripsi_pekerjaan;
            $user->nama_pelanggan = $request->nama_pelanggan;
            $user->kontak_pelanggan = $request->kontak_pelanggan;
            $user->harga = $request->harga;
            $user->deadline = $request->deadline;
            $user->status = $request->status;
            $user->save();

            $success = true;
            $message = "Data berhasil diinputkan";
        } catch (\Illuminate\Database\QueryException $ex) {
            $success = false;
            $message =
                "Gagal Melakukan Input. Cek kembali data yang anda inputkan";
        }

        $response = [
            "success" => $success,
            "message" => $message,
        ];

        // $pekerjaanBaru = new PekerjaanAktif([
        //     "nama_pekerjaan" => $request->nama_pekerjaan,
        //     "deskripsi_pekerjaan" => $request->deskripsi_pekerjaan,
        //     "nama_pelanggan" => $request->nama_pelanggan,
        //     "kontak_pelanggan" => $request->kontak_pelanggan,
        //     "harga" => $request->harga,
        //     "deadline" => $request->deadline,
        //     "status" => $request->status,
        // ]);
        // $pekerjaanBaru->save();

        return response()->json($response);
    }

    //menampilkan data yang akan diupdate
    public function show($id)
    {
        $pekerjaan = PekerjaanAktif::find($id);
        return response()->json([
            "success" => true,
            "message" => "Data Yang Akan Diupdate",
            "data" => $pekerjaan,
        ]);
    }

    //mengupdate data
    public function update($id, Request $request)
    {
        $pekerjaan = PekerjaanAktif::find($id);
        $pekerjaan->update($request->all());

        return response()->json("Data Pekerjaan Telah Berhasil Diupdate");
    }

    //menghapus data
    public function delete($id)
    {
        $pekerjaan = PekerjaanAktif::find($id);
        $pekerjaan->delete();

        return response()->json("Data Pekerjaan Telah Berhasil Dihapus");
    }

    //jika pekerjaan telah selesai
    public function selesai($id, Request $request)
    {
        //save ke tabel riwayat_pekerjaan
        $riwayatPekerjaan = new RiwayatPekerjaan([
            "nama_pekerjaan" => $request->nama_pekerjaan,
            "deskripsi_pekerjaan" => $request->deskripsi_pekerjaan,
            "nama_pelanggan" => $request->nama_pelanggan,
            "kontak_pelanggan" => $request->kontak_pelanggan,
            "harga" => $request->harga,
            "tanggal_datang" => $request->tanggal_datang,
            "tanggal_selesai" => $request->tanggal_selesai,
        ]);
        $riwayatPekerjaan->save();

        $nama_transaksi =
            $request->nama_pekerjaan . " atas nama " . $request->nama_pelanggan;

        //save ke tabel keuangan
        $keuangan = new Keuangan([
            "nama_transaksi" => $nama_transaksi,
            "keterangan_transaksi" => "Pemasukan",
            "jumlah_transaksi" => $request->harga,
        ]);
        $keuangan->save();

        //hapus data
        $hapusData = PekerjaanAktif::find($id);
        $hapusData->delete();

        return response()->json(
            "Data Telah Ditambahkan Ke Riwayat dan Dihapus dari Pekerjaan Aktif"
        );
    }
}
