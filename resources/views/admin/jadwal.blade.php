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
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahGuruModal">
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
                                ['nama' => 'Satria Arya S.Pd', 'mapel' => 'Bahasa Inggris', 'kelas' => 'GEOMATIKA', 'semester' => 'Ganjil'],
                                ['nama' => 'Fachri Ahmad S.Pd', 'mapel' => 'Bahasa Indonesia', 'kelas' => 'MESIN', 'semester' => 'Ganjil'],
                                ['nama' => 'Raffael Aditya', 'mapel' => 'Matematika', 'kelas' => 'TKP', 'semester' => 'Genap'],
                                ['nama' => 'Suffrotun Nasa S.Pd', 'mapel' => 'Informatika', 'kelas' => 'XI RPL 2', 'semester' => 'Ganjil'],
                                ['nama' => 'Nhayzaline S.Pd', 'mapel' => 'Sejarah', 'kelas' => 'DPIB 1', 'semester' => 'Genap'],
                                ['nama' => 'Rizka Dwi S.Pd', 'mapel' => 'Pemrograman', 'kelas' => 'XI RPL 1', 'semester' => 'Genap'],
                            ];
                        @endphp

                        @foreach ($dataJadwal as $i => $jadwal)
                        <tr>
                            <td>{{ $i + 1 }}</td>
                            <td>{{ $jadwal['nama'] }}</td>
                            <td>{{ $jadwal['mapel'] }}</td>
                            td>{{ $jadwal['kelas'] }}</td>
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

{{-- Modal Tambah Guru --}}
<div class="modal fade" id="tambahGuruModal" tabindex="-1" aria-labelledby="tambahGuruLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahGuruLabel">Tambah Guru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nip" class="form-label">Nama Guru</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Mata Pelajaran</label>
                        <input type="text" class="form-control" id="mapel" name="mapel" required>
                    </div>
                </div>
                <div class="mb-3">
                        <label for="nip" class="form-label">Kelas</label>
                        <input type="text" class="form-control" id="kelas" name="kelas" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Semester</label>
                        <input type="text" class="form-control" id="semester" name="semester" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

</div>


</div>

@endsection
