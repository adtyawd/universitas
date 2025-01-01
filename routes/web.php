<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\MonitorController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\TblAlumniController;
use App\Http\Controllers\TblJlhMahasiswaBerprestasiController;
use App\Http\Controllers\TblJlhMahasiswaController;
use App\Http\Controllers\TblPengabdianMasyarakatController;
use App\Http\Controllers\TblProdukInovasiController;
use App\Http\Controllers\TblPublikasiPenelitianController;
use App\Http\Controllers\TblTenagaPendidikController;
use App\Http\Controllers\UndianController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LandingPageController::class, 'index']);
Route::redirect('/home', '/dashboard');

Route::get('/daftar', [PesertaController::class, 'pendaftaran']);
Route::post('/daftar', [PesertaController::class, 'store']);

Route::post('/daftar-peserta/generated-qrcode', [PesertaController::class, 'generatedQr']);
Route::get('/daftar-peserta/load-data', [PesertaController::class, 'loadData']);

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginCheck']);
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/undian', [UndianController::class, 'index']);
    Route::get('/load-number', [UndianController::class, 'generateNumber']);

    Route::get('/monitor', [MonitorController::class, 'index']);
    Route::get('/monitor/check', [MonitorController::class, 'getUser']);

    Route::get('/daftar-peserta', [PesertaController::class, 'index']);
    Route::get('/daftar-peserta/edit-data', [PesertaController::class, 'edit']);
    Route::post('/daftar-peserta/update-data', [PesertaController::class, 'update']);
    Route::post('/daftar-peserta/delete-data', [PesertaController::class, 'delete']);
    Route::get('/daftar-peserta/detail-peserta/{id}', [PesertaController::class, 'detail']);
    Route::post('/daftar-peserta/status-daftar', [PesertaController::class, 'statusDaftar']);

    Route::get('/daftar-admin', [AdminController::class, 'index']);
    Route::post('/daftar-admin/store-admin', [AdminController::class, 'store']);
    Route::get('/daftar-admin/edit-data', [AdminController::class, 'edit']);
    Route::post('/daftar-admin/update-data', [AdminController::class, 'update']);
    Route::post('/daftar-admin/update-password', [AdminController::class, 'updatePassword']);
    Route::post('/daftar-admin/delete-data', [AdminController::class, 'delete']);

    Route::get('/daftar-jlhmhs', [TblJlhMahasiswaController::class, 'index']);
    Route::post('/daftar-jlhmhs/store-admin', [TblJlhMahasiswaController::class, 'store']);
    Route::get('/daftar-jlhmhs/edit-data', [TblJlhMahasiswaController::class, 'edit']);
    Route::post('/daftar-jlhmhs/update-data', [TblJlhMahasiswaController::class, 'update']);
    Route::post('/daftar-jlhmhs/delete-data', [TblJlhMahasiswaController::class, 'delete']);

    Route::get('/daftar-jlhmhs-berprestasi', [TblJlhMahasiswaBerprestasiController::class, 'index']);
    Route::post('/daftar-jlhmhs-berprestasi/store-admin', [TblJlhMahasiswaBerprestasiController::class, 'store']);
    Route::get('/daftar-jlhmhs-berprestasi/edit-data', [TblJlhMahasiswaBerprestasiController::class, 'edit']);
    Route::post('/daftar-jlhmhs-berprestasi/update-data', [TblJlhMahasiswaBerprestasiController::class, 'update']);
    Route::post('/daftar-jlhmhs-berprestasi/delete-data', [TblJlhMahasiswaBerprestasiController::class, 'delete']);

    Route::get('/daftar-dosen', [TblTenagaPendidikController::class, 'index']);
    Route::post('/daftar-dosen/store-admin', [TblTenagaPendidikController::class, 'store']);
    Route::get('/daftar-dosen/edit-data', [TblTenagaPendidikController::class, 'edit']);
    Route::post('/daftar-dosen/update-data', [TblTenagaPendidikController::class, 'update']);
    Route::post('/daftar-dosen/delete-data', [TblTenagaPendidikController::class, 'delete']);

    Route::get('/daftar-penelitian', [TblPublikasiPenelitianController::class, 'index']);
    Route::post('/daftar-penelitian/store-admin', [TblPublikasiPenelitianController::class, 'store']);
    Route::get('/daftar-penelitian/edit-data', [TblPublikasiPenelitianController::class, 'edit']);
    Route::post('/daftar-penelitian/update-data', [TblPublikasiPenelitianController::class, 'update']);
    Route::post('/daftar-penelitian/delete-data', [TblPublikasiPenelitianController::class, 'delete']);

    Route::get('/daftar-inovasi', [TblProdukInovasiController::class, 'index']);
    Route::post('/daftar-inovasi/store-admin', [TblProdukInovasiController::class, 'store']);
    Route::get('/daftar-inovasi/edit-data', [TblProdukInovasiController::class, 'edit']);
    Route::post('/daftar-inovasi/update-data', [TblProdukInovasiController::class, 'update']);
    Route::post('/daftar-inovasi/delete-data', [TblProdukInovasiController::class, 'delete']);

    Route::get('/daftar-pengabdian', [TblPengabdianMasyarakatController::class, 'index']);
    Route::post('/daftar-pengabdian/store-admin', [TblPengabdianMasyarakatController::class, 'store']);
    Route::get('/daftar-pengabdian/edit-data', [TblPengabdianMasyarakatController::class, 'edit']);
    Route::post('/daftar-pengabdian/update-data', [TblPengabdianMasyarakatController::class, 'update']);
    Route::post('/daftar-pengabdian/delete-data', [TblPengabdianMasyarakatController::class, 'delete']);

    Route::get('/daftar-alumni', [TblAlumniController::class, 'index']);
    Route::post('/daftar-alumni/store-admin', [TblAlumniController::class, 'store']);
    Route::get('/daftar-alumni/edit-data', [TblAlumniController::class, 'edit']);
    Route::post('/daftar-alumni/update-data', [TblAlumniController::class, 'update']);
    Route::post('/daftar-alumni/delete-data', [TblAlumniController::class, 'delete']);

    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::get('/storage-link', function () {
    $targetStorage = storage_path('app/public');
    $linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/file_uploaded';
    symlink($targetStorage, $linkFolder);
});
