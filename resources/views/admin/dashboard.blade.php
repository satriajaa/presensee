<!-- resources/views/admin/dashboard.blade.php -->
@extends('layouts.app')

{{-- @section('title', 'Dashboard Admin') --}}

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col">
            <h1>Pressensee.</h1>
            <h4 class="text-muted">Administrator</h4>
            <p class="lead">Selamat Datang.</p>
        </div>
    </div>

    <hr class="my-4">

    <div class="row mb-4">
        <div class="col shadow-sm rounded-2">
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
                    <div class="card shadow-sm border-0">
                        <div class="card-body text-end">
                            <div class="rounded-2 mb-3 d-inline-block p-2" style="background-color: #D6BBFB;">
                                    <i class="fas fa-users fa-lg" style="color: white;"></i>
                            </div>
                            <h4 class="fw-semibold mb-1">{{ $totalSiswa ?? '25' }}</h4>
                        <p class="mb-0">Total Siswa</p>
                    </div>
                </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card shadow-sm border-0">
                        <div class="card-body text-end">
                            <div class="rounded-2 mb-3 d-inline-block p-2" style="background-color: #6C49B9;">
                                    <i class="fas fa-users fa-lg" style="color: white;"></i>
                            </div>
                            <h4 class="fw-semibold mb-1">{{ $totalGuru ?? '25' }}</h4>
                        <p class="mb-0">Total Guru</p>
                    </div>
                </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card shadow-sm border-0">
                        <div class="card-body text-end">
                            <div class="rounded-2 mb-3 d-inline-block p-2" style="background-color: #2E214B;">
                                    <i class="fas fa-users fa-lg" style="color: white;"></i>
                            </div>
                            <h4 class="fw-semibold mb-1">{{ $totalKelas ?? '25' }}</h4>
                        <p class="mb-0">Total Kelas</p>
                    </div>
                </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card shadow-sm border-0">
                        <div class="card-body text-end">
                            <div class="rounded-2 mb-3 d-inline-block p-2" style="background-color: #000000;">
                                    <i class="fas fa-users fa-lg" style="color: white;"></i>
                            </div>
                            <h4 class="fw-semibold mb-1">{{ $totalMapel ?? '25' }}</h4>
                        <p class="mb-0">Total Mata Pelajaran</p>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
