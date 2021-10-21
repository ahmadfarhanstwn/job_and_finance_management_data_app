<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengguna;

class PenggunaController extends Controller
{
    public function get()
    {
        $data = Pengguna::all()->toArray();

        return response()->json($data);
    }

    public function getUser()
    {
        $dataNama = Pengguna::pluck("nama_pengguna")->toArray();

        return response()->json([
            "success" => true,
            "message" => "Data Nama Pekerjaan",
            "data" => $dataNama,
        ]);
    }
}
