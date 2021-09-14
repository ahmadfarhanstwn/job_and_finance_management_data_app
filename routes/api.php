<?php

use App\Http\Controllers\API\HargaJasaController;
use App\Http\Controllers\API\KeuanganController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\PekerjaanAktifController;
use App\Http\Controllers\API\PengeluaranController;
use App\Http\Controllers\API\PenggunaController;
use App\Http\Controllers\API\RiwayatPekerjaanController;
use App\Models\RiwayatPekerjaan;

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
Route::post("logout", [UserController::class, "logout"])->middleware(
    "auth:sanctum"
);

Route::post("getUser", [UserController::class, "get"]);
Route::post("add", [PekerjaanAktifController::class, "add"]);
Route::get("get", [PekerjaanAktifController::class, "get"]);
Route::get("getJumlahPekerjaan", [
    PekerjaanAktifController::class,
    "getJumlah",
]);
Route::get("show/{id}", [PekerjaanAktifController::class, "show"]);
Route::post("update/{id}", [PekerjaanAktifController::class, "update"]);
Route::delete("delete/{id}", [PekerjaanAktifController::class, "delete"]);
Route::post("selesai/{id}", [PekerjaanAktifController::class, "selesai"]);
Route::get("mendekatiDeadline", [
    PekerjaanAktifController::class,
    "mendekatiDeadline",
]);
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
Route::post("search", [HargaJasaController::class, "search"]);
Route::get("getPengeluaran", [PengeluaranController::class, "get"]);
Route::post("addPengeluaran", [PengeluaranController::class, "add"]);
Route::get("pengeluaranBulanIni", [
    PengeluaranController::class,
    "pengeluaranBulanIni",
]);
Route::get("exportPengeluaran", [PengeluaranController::class, "exportExcel"]);
Route::get("getRiwayat", [RiwayatPekerjaanController::class, "get"]);
Route::get("getTodayIncome", [
    RiwayatPekerjaanController::class,
    "todaysIncome",
]);
Route::get("getMonthlyIncome", [
    RiwayatPekerjaanController::class,
    "thisMonthIncome",
]);
Route::get("getMonthlyClient", [
    RiwayatPekerjaanController::class,
    "thisMonthClient",
]);
Route::get("getKeuangan", [KeuanganController::class, "get"]);
Route::get("exportKeuangan", [KeuanganController::class, "exportExcel"]);
Route::get("getPengguna", [PenggunaController::class, "get"]);
