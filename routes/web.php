<?php

use App\Http\Controllers\ekstrakurikulerController;
use App\Http\Controllers\guruController;
use App\Http\Controllers\jabatanController;
use App\Http\Controllers\jadwaLController;
use App\Http\Controllers\kelasController;
use App\Http\Controllers\mapelController;
use App\Http\Controllers\pegawaiController;
use App\Http\Controllers\siswaController;
use App\Http\Controllers\walimuridController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('siswa', siswaController::class);
Route::resource('kelas', kelasController::class);
Route::resource('mapel', mapelController::class);
Route::resource('ekstrakurikuler', ekstrakurikulerController::class);
Route::resource('jabatan', jabatanController::class);
Route::resource('jadwal', jadwaLController::class);
Route::resource('pegawai', pegawaiController::class);
Route::resource('guru', guruController::class);
Route::resource('walimurid', walimuridController::class);
Route::get('/SiswaPdf', [siswaController::class,'siswadownloadPdf']);
Route::get('/WaliPdf', [walimuridController::class,'walidownloadPdf']);


