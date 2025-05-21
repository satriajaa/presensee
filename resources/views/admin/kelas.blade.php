@extends('layouts.app')

{{-- @section('title', 'Dashboard Admin') --}}

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col">
            <h1>Pressensee.</h1>
            <h4 class="text-muted">Data Kelas</h4>
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
                            <th>NAMA KELAS</th>
                            <th>WALI KELAS</th>
                            <th>OPSI</th>
                        </tr>
                    </thead>
                    <tbody>
                    {{-- Contoh data statis --}}
                        @php
                            $dataKelas = [
                                ['nk' => 'XI RPL 1', 'wk' => 'Satria Arya S.Pd'],
                                ['nk' => 'XI RPL 2', 'wk' => 'Fachri Ahmad S.Pd'],
                                ['nk' => 'XI RPL 3', 'wk' => 'Raffael Aditya'],
                                ['nk' => 'XI MESIN 1', 'wk' => 'Suffrotun Nasa S.Pd'],
                                ['nk' => 'XI MESIN 2', 'wk' => 'Nhayzaline S.Pd',],
                                ['nk' => 'XI LISTRIK 1', 'wk' => 'Rizka Dwi S.Pd'],
                            ];
                        @endphp

                        @foreach ($dataKelas as $i => $kelas)
                        <tr>
                            <td>{{ $i + 1 }}</td>
                            <td>{{ $kelas['nk'] }}</td>
                            <td>{{ $kelas['wk'] }}</td>
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
                        <label for="nip" class="form-label">Nama Kelas</label>
                        <input type="text" class="form-control" id="nisn" name="nk" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Wali Kelas</label>
                        <input type="text" class="form-control" id="nama" name="wk" required>
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
