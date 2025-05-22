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
                                <th>NIP/NUPTK</th>
                                <th>Nama Guru</th>
                                <th>Email</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- Contoh data statis --}}
                            @php
                                $dataGuru = [
                                    [
                                        'nip' => '15619005093',
                                        'nama' => 'Satria Arya S.Pd',
                                        'email' => 'sbcdfvd@gmail.com',
                                    ],
                                    [
                                        'nip' => '10201290023',
                                        'nama' => 'Fachri Ahmad S.Pd',
                                        'email' => 'bcdfvd@gmail.com',
                                    ],
                                    ['nip' => '15627329273', 'nama' => 'Raffael Aditya', 'email' => 'bcdfvd@gmail.com'],
                                    [
                                        'nip' => '14227163919',
                                        'nama' => 'Suffrotun Nasa S.Pd',
                                        'email' => 'bcdfvd@gmail.com',
                                    ],
                                    [
                                        'nip' => '12727391902',
                                        'nama' => 'Nhayzaline S.Pd',
                                        'email' => 'sbcdfvd@gmail.com',
                                    ],
                                    [
                                        'nip' => '19283819002',
                                        'nama' => 'Rizka Dwi S.Pd',
                                        'email' => 'sbcdfvd@gmail.com',
                                    ],
                                ];
                            @endphp

                            @foreach ($dataGuru as $i => $guru)
                                <tr>
                                    <td>{{ $i + 1 }}</td>
                                    <td>{{ $guru['nip'] }}</td>
                                    <td>{{ $guru['nama'] }}</td>
                                    <td>{{ $guru['email'] }}</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-info text-white">
                                            <i class="bi bi-pencil-square"></i> Edit
                                        </a>
                                        <!-- Tombol Edit -->
                                        <button class="btn btn-sm btn-info" data-bs-toggle="modal"
                                            data-bs-target="#editModal{{ $guru->id }}">
                                            Edit
                                        </button>

                                        <!-- Modal Edit -->
                                        <div class="modal fade" id="editModal{{ $guru->id }}" tabindex="-1"
                                            aria-labelledby="editModalLabel{{ $guru->id }}" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <form action="{{ route('guru.update', $guru->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="editModalLabel{{ $guru->id }}">
                                                                Edit Data Guru</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Tutup"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="mb-3">
                                                                <label for="nip{{ $guru->id }}"
                                                                    class="form-label">NIP/NUPTK</label>
                                                                <input type="text" class="form-control"
                                                                    id="nip{{ $guru->id }}" name="nip"
                                                                    value="{{ $guru->nip }}" required>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="nama{{ $guru->id }}"
                                                                    class="form-label">Nama Guru</label>
                                                                <input type="text" class="form-control"
                                                                    id="nama{{ $guru->id }}" name="nama"
                                                                    value="{{ $guru->nama }}" required>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="email{{ $guru->id }}"
                                                                    class="form-label">Email</label>
                                                                <input type="email" class="form-control"
                                                                    id="email{{ $guru->id }}" name="email"
                                                                    value="{{ $guru->email }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Batal</button>
                                                            <button type="submit" class="btn btn-primary">Simpan
                                                                Perubahan</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

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
                            <label for="nip" class="form-label">NIP/NUPTK</label>
                            <input type="text" class="form-control" id="nip" name="nip" required>
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Guru</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Guru</label>
                            <input type="email" class="form-control" id="email" name="email" required>
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
