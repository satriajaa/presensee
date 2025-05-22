@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h1 class="mb-3">Jadwal Pelajaran</h1>

    {{-- Flash Message --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Tombol Tambah --}}
    <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modalTambah">+ Tambah Jadwal</button>

    {{-- Tabel Jadwal --}}
    <div class="table-responsive">
        <table class="table table-bordered align-middle text-center">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Guru</th>
                    <th>Mata Pelajaran</th>
                    <th>Kelas</th>
                    <th>Hari</th>
                    <th>Jam</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($jadwals as $i => $jadwal)
                <tr>
                    <td>{{ $i + 1 }}</td>
                    <td>{{ $jadwal->guru->name }}</td>
                    <td>{{ $jadwal->mapel->nama }}</td>
                    <td>{{ $jadwal->kelas->nama }}</td>
                    <td>{{ $jadwal->hari }}</td>
                    <td>{{ $jadwal->jam_mulai }} - {{ $jadwal->jam_selesai }}</td>
                    <td>
                        <form action="{{ route('jadwal-pelajaran.destroy', $jadwal->id) }}" method="POST"onsubmit="return confirm('Hapus jadwal ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

{{-- Modal Tambah Jadwal --}}
<div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form method="POST" action="{{ route('jadwal-pelajaran.store') }}" class="modal-content">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahLabel">Tambah Jadwal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <div class="modal-body">
                <div class="mb-2">
                    <label for="id_guru" class="form-label">Guru</label>
                    <select name="id_guru" id="id_guru" class="form-select" required>
                        <option disabled selected>Pilih Guru</option>
                        @foreach($gurus as $guru)
                            <option value="{{ $guru->id }}">{{ $guru->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-2">
                    <label for="id_mapel" class="form-label">Mata Pelajaran</label>
                    <select name="id_mapel" id="id_mapel" class="form-select" required>
                        <option disabled selected>Pilih Mapel</option>
                        @foreach($mapels as $mapel)
                            <option value="{{ $mapel->id }}">{{ $mapel->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-2">
                    <label for="id_kelas" class="form-label">Kelas</label>
                    <select name="id_kelas" id="id_kelas" class="form-select" required>
                        <option disabled selected>Pilih Kelas</option>
                        @foreach($kelas as $kls)
                            <option value="{{ $kls->id }}">{{ $kls->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-2">
                    <label class="form-label">Hari</label>
                    <select name="hari" class="form-select" required>
                        <option disabled selected>Pilih Hari</option>
                        @foreach(['Senin','Selasa','Rabu','Kamis','Jumat','Sabtu'] as $hari)
                            <option value="{{ $hari }}">{{ $hari }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-2">
                    <label for="jam_mulai" class="form-label">Jam Mulai</label>
                    <input type="time" name="jam_mulai" class="form-control" required>
                </div>
                <div class="mb-2">
                    <label for="jam_selesai" class="form-label">Jam Selesai</label>
                    <input type="time" name="jam_selesai" class="form-control" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            </div>
        </form>
    </div>
</div>
@endsection
