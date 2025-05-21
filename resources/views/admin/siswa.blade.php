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
                            <th>NISN</th>
                            <th>NAMA</th>
                            <th>KELAS</th>
                            <th>JENIS KELAMIN</th>
                            <th>OPSI</th>
                        </tr>
                    </thead>
                    <tbody>
                    {{-- Contoh data statis --}}
                        @php
                            $dataSiswa = [
                                ['nisn' => '15619005093', 'nama' => 'Satria Arya S.Pd', 'kelas' => 'XI RPL 1', 'jk' => 'Laki-laki'],
                                ['nisn' => '10201290023', 'nama' => 'Fachri Ahmad S.Pd', 'kelas' => 'XI RPL 1', 'jk' => 'Laki-laki'],
                                ['nisn' => '15627329273', 'nama' => 'Raffael Aditya', 'kelas' => 'XI RPL 1', 'jk' => 'Laki-laki'],
                                ['nisn' => '14227163919', 'nama' => 'Suffrotun Nasa S.Pd', 'kelas' => 'XI RPL 1', 'jk' => 'Perempuan'],
                                ['nisn' => '12727391902', 'nama' => 'Nhayzaline S.Pd', 'kelas' => 'XI RPL 1', 'jk' => 'Perempuan'],
                                ['nisn' => '19283819002', 'nama' => 'Rizka Dwi S.Pd', 'kelas' => 'XI RPL1', 'jk' => 'Perempuan'],
                            ];
                        @endphp

                        @foreach ($dataSiswa as $i => $siswa)
                        <tr>
                            <td>{{ $i + 1 }}</td>
                            <td>{{ $siswa['nisn'] }}</td>
                            <td>{{ $siswa['nama'] }}</td>
                            <td>{{ $siswa['kelas'] }}</td>
                            <td>{{ $siswa['jk'] }}</td>
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
                        <label for="nip" class="form-label">NISN</label>
                        <input type="text" class="form-control" id="nisn" name="nisn" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Siswa</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Kelas</label>
                        <input type="email" class="form-control" id="kelas" name="kelas" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Jenis Kelamin</label>
                        <input type="email" class="form-control" id="jk" name="jk" required>
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
