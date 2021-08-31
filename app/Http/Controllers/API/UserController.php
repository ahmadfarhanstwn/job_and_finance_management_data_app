<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Pengguna;

class UserController extends Controller
{
    public function register(Request $request)
    {
        try {
            $user = new User();
            $user->nama = $request->nama;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->role = $request->role;
            $user->jabatan = $request->jabatan;
            $user->save();

            $success = true;
            $message = "User Berhasil Registrasi";
        } catch (\Illuminate\Database\QueryException $ex) {
            $success = false;
            $message = $ex->getMessage();
        }

        $response = [
            "success" => $success,
            "message" => $message,
        ];

        $pengguna = new Pengguna([
            "nama_pengguna" => $request->nama,
            "jabatan" => $request->jabatan,
            "email" => $request->email,
            "role" => $request->role,
        ]);
        $pengguna->save();

        return response()->json($response);
    }

    public function login(Request $request)
    {
        $input = [
            "email" => $request->email,
            "password" => $request->password,
        ];

        if (Auth::attempt($input)) {
            $success = true;
            $message = "User Berhasil Login";
        } else {
            $success = false;
            $message = "User Gagal Login";
        }

        $response = [
            "success" => $success,
            "message" => $message,
        ];

        return response()->json($response);
    }

    public function logout()
    {
        try {
            Session::flush();
            $success = true;
            $message = "Logout Berhasil";
        } catch (\Illuminate\Database\QueryException $ex) {
            $success = false;
            $message = $ex->getMessage();
        }

        $response = [
            "success" => $success,
            "message" => $message,
        ];

        return response()->json($response);
    }
}
