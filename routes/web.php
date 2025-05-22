<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\JadwalPelajaranController;
Route::get('/', function () {
    return view('welcome');
});




Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

Route::get('/dataguru/admin', function () {
    return view('admin.guru');
});
Route::get('/datasiswa/admin', function () {
    return view('admin.siswa');
});
Route::get('/datakelas/admin', function () {
    return view('admin.kelas');
});
Route::get('/datamapel/admin', function () {
    return view('admin.mapel');
});
Route::get('/datajadwal/admin', function () {
    return view('admin.jadwal');
});
Route::post('/jadwal/store', [JadwalPelajaranController::class, 'store'])->name('jadwal.store');


Route::get('/dashboardguru', function () {
    return view('guru.dashboard');
});
Route::get('/jadwalguru', function () {
    return view('guru.jadwal');
});
Route::get('/absenguru', function () {
    return view('guru.absen');
});
Route::get('/absen/{id}/isi', [AbsensiController::class, 'isi'])->name('absen.isi');

Route::get('/absen/{id}/rekap', [AbsensiController::class, 'rekap'])->name('absen.rekap');
