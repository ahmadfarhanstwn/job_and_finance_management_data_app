<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HargaJasa extends Model
{
    use HasFactory;

    protected $fillable = [
        "kode_pekerjaan",
        "nama_pekerjaan",
        "deskripsi_pekerjaan",
        "biaya_pekerjaan",
        "estimasi_waktu_pengerjaan",
    ];
}
