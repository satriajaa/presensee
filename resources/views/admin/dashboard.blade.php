<!-- resources/views/admin/dashboard.blade.php -->
@extends('layouts.app')

@section('title', 'Dashboard Admin')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col">
            <h1>Pressensee.</h1>
            <h2 class="text-muted">Administrator</h2>
            <p class="lead">Selamat Datang.</p>
        </div>
    </div>

    <hr class="my-4">

    <div class="row mb-4">
        <div class="col">
            <h3 class="text-center">SMKN 4 KOTA TANGERANG</h3>
            <p class="text-center">Jl. Veteran No. 1 A Babakan, Tangerang Kota Tangerang - Banten</p>
        </div>
    </div>

    <hr class="my-4">

    <div class="row mb-4">
        <div class="col">
            <h3>Jumlah Pelajaran</h3>
            <div class="row mt-3">
                <div class="col-md-3 mb-3">
                    <div class="card bg-primary text-white">
                        <div class="card-body">
                            <h5 class="card-title">Total Siswa</h5>
                            <p class="card-text display-6">{{ $totalSiswa ?? '0' }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card bg-success text-white">
                        <div class="card-body">
                            <h5 class="card-title">Total Guru</h5>
                            <p class="card-text display-6">{{ $totalGuru ?? '0' }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card bg-info text-white">
                        <div class="card-body">
                            <h5 class="card-title">Total Kelas</h5>
                            <p class="card-text display-6">{{ $totalKelas ?? '0' }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card bg-warning text-dark">
                        <div class="card-body">
                            <h5 class="card-title">Total Mata Pelajaran</h5>
                            <p class="card-text display-6">{{ $totalMapel ?? '0' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
