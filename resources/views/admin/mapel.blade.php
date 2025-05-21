@extends('layouts.app')

{{-- @section('title', 'Dashboard Admin') --}}

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col">
            <h1>Pressensee.</h1>
            <h4 class="text-muted">Administrator</h4>
            <p class="lead">Selamat Datang.</p>
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
                            <th>KODE</th>
                            <th>MATA PELAJARAN</th>
                            <th>OPSI</th>
                        </tr>
                    </thead>
                    <tbody>
                    {{-- Contoh data statis --}}
                        @php
                            $dataMapel = [
                                ['kode' => '15619005093', 'mapel' => 'Pemrograman'],
                                ['kode' => '10201290023', 'mapel' => 'DataBase'],
                                ['kode' => '15627329273', 'mapel' => 'Sejarah'],
                                ['kode' => '14227163919', 'mapel' => 'Bahasa Indonesia'],
                                ['kode' => '12727391902', 'mapel' => 'Bahasa Inggris'],
                                ['kode' => '19283819002', 'mapel' => 'Matematika'],
                            ];
                        @endphp

                        @foreach ($dataMapel as $i => $mapel)
                        <tr>
                            <td>{{ $i + 1 }}</td>
                            <td>{{ $mapel['kode'] }}</td>
                            <td>{{ $mapel['mapel'] }}</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-info text-white">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </a>
                                <a href="#" class="btn btn-sm btn-danger">
                                    <i class="bi bi-trash"></i> Del
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
                        <label for="nip" class="form-label">KODE</label>
                        <input type="text" class="form-control" id="nisn" name="kode" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">MATA PELAJARAN</label>
                        <input type="text" class="form-control" id="nama" name="mapel" required>
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
