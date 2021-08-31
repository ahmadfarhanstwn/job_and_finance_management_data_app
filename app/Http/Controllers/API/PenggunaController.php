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
}
