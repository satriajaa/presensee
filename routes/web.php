<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
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
