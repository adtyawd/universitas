<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\MonitorController;
use App\Http\Controllers\PesertaController;
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

    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::get('/storage-link', function () {
    $targetStorage = storage_path('app/public');
    $linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/file_uploaded';
    symlink($targetStorage, $linkFolder);
});
