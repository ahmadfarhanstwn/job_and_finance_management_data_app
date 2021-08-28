<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PekerjaanAktif extends Model
{
    use HasFactory;

    protected $fillable = [
        "nama_pekerjaan",
        "deskripsi_pekerjaan",
        "nama_pelanggan",
        "kontak_pelanggan",
        "harga",
        "deadline",
        "status",
    ];
}
