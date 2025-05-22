@extends('layouts.app')

{{-- @section('title', 'Dashboard Admin') --}}

@section('content')
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col">
                <h1>Pressensee.</h1>
                <h4 class="text-muted">Jadwal</h4>
            </div>
        </div>
        <div class="card shadow-sm">
            <div class="card-body">
                {{-- Tombol Tambah --}}
                <div class="mb-3">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahJadwalModal">
                        + Tambah
                    </button>

                </div>

                {{-- Tabel --}}
                <div class="table-responsive">
                    <table class="table table-bordered table-striped align-middle text-center">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>NAMA GURU</th>
                                <th>MATA PELAJARAN</th>
                                <th>KELAS</th>
                                <th>SEMESTER</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- Contoh data statis --}}
                            @php
                                $dataJadwal = [
                                    [
                                        'nama' => 'Satria Arya S.Pd',
                                        'mapel' => 'Bahasa Inggris',
                                        'kelas' => 'GEOMATIKA',
                                        'semester' => 'Ganjil',
                                    ],
                                    [
                                        'nama' => 'Fachri Ahmad S.Pd',
                                        'mapel' => 'Bahasa Indonesia',
                                        'kelas' => 'MESIN',
                                        'semester' => 'Ganjil',
                                    ],
                                    [
                                        'nama' => 'Raffael Aditya',
                                        'mapel' => 'Matematika',
                                        'kelas' => 'TKP',
                                        'semester' => 'Genap',
                                    ],
                                    [
                                        'nama' => 'Suffrotun Nasa S.Pd',
                                        'mapel' => 'Informatika',
                                        'kelas' => 'XI RPL 2',
                                        'semester' => 'Ganjil',
                                    ],
                                    [
                                        'nama' => 'Nhayzaline S.Pd',
                                        'mapel' => 'Sejarah',
                                        'kelas' => 'DPIB 1',
                                        'semester' => 'Genap',
                                    ],
                                    [
                                        'nama' => 'Rizka Dwi S.Pd',
                                        'mapel' => 'Pemrograman',
                                        'kelas' => 'XI RPL 1',
                                        'semester' => 'Genap',
                                    ],
                                ];
                            @endphp

                            @foreach ($dataJadwal as $i => $jadwal)
                                <tr>
                                    <td>{{ $i + 1 }}</td>
                                    <td>{{ $jadwal['nama'] }}</td>
                                    <td>{{ $jadwal['mapel'] }}</td>
                                    <td>{{ $jadwal['kelas'] }}</td>
                                    <td>{{ $jadwal['semester'] }}</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-info text-white">
                                            <i class="bi bi-pencil-square"></i> Edit
                                        </a>
                                        <a href="#" class="btn btn-sm btn-danger">
                                            <i class="bi bi-trash"></i> Delete
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Jadwal -->
    <div class="modal fade" id="tambahJadwalModal" tabindex="-1" aria-labelledby="tambahJadwalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content shadow-sm">
                <form action="{{ route('jadwal.store') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahJadwalLabel">Form Elements</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="guru" class="form-label">Guru Mata Pelajaran</label>
                                <select name="guru" id="guru" class="form-select shadow-sm">
                                    <option selected disabled>Pilih</option>
                                    <option value="Fatmawati S.Pd">Fatmawati S.Pd</option>
                                    <option value="Fachri Ahmad S.Pd">Fachri Ahmad S.Pd</option>
                                    <!-- Tambahkan guru lain -->
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="mapel" class="form-label">Mata Pelajaran</label>
                                <select name="mapel" id="mapel" class="form-select shadow-sm">
                                    <option selected disabled>Pilih</option>
                                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                    <option value="Matematika">Matematika</option>
                                    <!-- Tambahkan mapel lain -->
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label d-block">Hari</label>
                                @foreach (['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum\'at'] as $hari)
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="hari"
                                            id="hari-{{ $hari }}" value="{{ $hari }}">
                                        <label class="form-check-label"
                                            for="hari-{{ $hari }}">{{ $hari }}</label>
                                    </div>
                                @endforeach
                            </div>
                            <div class="col-md-6">
                                <label for="kelas" class="form-label">Kelas</label>
                                <select name="kelas" id="kelas" class="form-select shadow-sm">
                                    <option selected disabled>Pilih</option>
                                    <option value="XI RPL 1">XI RPL 1</option>
                                    <option value="XI RPL 2">XI RPL 2</option>
                                    <!-- Tambahkan kelas lain -->
                                </select>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="jam_mulai" class="form-label">Jam Mulai</label>
                                    <input type="time" name="jam_mulai" id="jam_mulai" class="form-control shadow-sm"
                                        required>
                                </div>
                                <div class="col-md-6">
                                    <label for="jam_selesai" class="form-label">Jam Selesai</label>
                                    <input type="time" name="jam_selesai" id="jam_selesai" class="form-control shadow-sm"
                                        required>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn text-white" style="background-color: #7B61FF;">Simpan</button>
                        <button type="button" class="btn text-white" style="background-color: #FDCB00;"
                            data-bs-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    </div>

    </div>


    </div>
@endsection
