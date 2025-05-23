@extends('layouts.app')

@section('content')
<div class="container">
    <h4>Absensi Siswa - {{ $jadwal->mapel->nama }} | Kelas: {{ $jadwal->kelas->nama }}</h4>
    <form method="POST" action="{{ route('absensi.simpan', $jadwal->id) }}">
        @csrf
        <table class="table table-bordered mt-3">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>NISN</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Absen</th>
                </tr>
            </thead>
            <tbody>
                @foreach($siswa as $index => $s)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $s->nisn }}</td>
                    <td>{{ $s->nama }}</td>
                    <td>{{ $s->jenis_kelamin }}</td>
                    <td>
                        @php
                            $current = $absensiDetails[$s->id]->status ?? '';
                        @endphp
                        @foreach(['H' => 'Hadir', 'I' => 'Izin', 'S' => 'Sakit', 'A' => 'Alpa', 'D' => 'Dispensasi'] as $key => $label)
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status[{{ $s->id }}]" id="status_{{ $s->id }}_{{ $key }}" value="{{ $key }}" {{ $current == $key ? 'checked' : '' }}>
                                <label class="form-check-label" for="status_{{ $s->id }}_{{ $key }}">{{ $key }}</label>
                            </div>
                        @endforeach
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <button type="submit" class="btn btn-primary">Simpan Absensi</button>
        <a href="{{ route('jadwal.guru') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection