<?php

namespace App\Imports;

use App\Models\HargaJasa;
use Maatwebsite\Excel\Concerns\ToModel;

class HargaJasaImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new HargaJasa([
            "kode_pekerjaan" => $row[0],
            "nama_pekerjaan" => $row[1],
            "deskripsi_pekerjaan" => $row[2],
            "biaya_pekerjaan" => $row[3],
            "estimasi_waktu_pengerjaan" => $row[4],
        ]);
    }
}
