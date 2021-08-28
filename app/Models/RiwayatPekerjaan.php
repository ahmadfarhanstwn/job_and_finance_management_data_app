<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatPekerjaan extends Model
{
    use HasFactory;

    protected $fillable = [
        "nama_pekerjaan",
        "deskripsi_pekerjaan",
        "nama_pelanggan",
        "kontak_pelanggan",
        "harga",
        "tanggal_datang",
        "tanggal_selesai",
    ];
}
