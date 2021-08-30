<?php

use App\Http\Controllers\API\HargaJasaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\PekerjaanAktifController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post("login", [UserController::class, "login"]);
Route::post("register", [UserController::class, "register"]);
Route::post("add", [PekerjaanAktifController::class, "add"]);
Route::get("get", [PekerjaanAktifController::class, "get"]);
Route::get("show/{id}", [PekerjaanAktifController::class, "show"]);
Route::post("update/{id}", [PekerjaanAktifController::class, "update"]);
Route::delete("delete/{id}", [PekerjaanAktifController::class, "delete"]);
Route::post("selesai/{id}", [PekerjaanAktifController::class, "selesai"]);
Route::get("getHarga", [HargaJasaController::class, "get"]);
Route::get("getNama", [HargaJasaController::class, "getNama"]);
Route::get("getHargaNama/{kode_pekerjaan}", [
    HargaJasaController::class,
    "getHarga",
]);
Route::post("addHarga", [HargaJasaController::class, "add"]);
Route::get("showHarga/{id}", [HargaJasaController::class, "show"]);
Route::post("updateHarga/{id}", [HargaJasaController::class, "update"]);
Route::delete("deleteHarga/{id}", [HargaJasaController::class, "delete"]);
Route::post("import", [HargaJasaController::class, "import"]);
