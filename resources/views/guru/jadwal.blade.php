@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h3 class="mb-4">Jadwal</h3>

    @php
        $jadwals = [
            (object)[
                'mapel' => 'Bahasa Indonesia',
                'hari' => 'Senin',
                'jamKe' => '1',
                'waktu' => '08.00 - 09.00',
                'kelas' => 'XI RPL 1',
                'id' => 1
            ],
            (object)[
                'mapel' => 'Matematika',
                'hari' => 'Selasa',
                'jamKe' => '2',
                'waktu' => '09.00 - 10.00',
                'kelas' => 'XI RPL 2',
                'id' => 2
            ],
            (object)[
                'mapel' => 'Matematika',
                'hari' => 'Selasa',
                'jamKe' => '2',
                'waktu' => '09.00 - 10.00',
                'kelas' => 'XI RPL 2',
                'id' => 2
            ],
            (object)[
                'mapel' => 'Matematika',
                'hari' => 'Selasa',
                'jamKe' => '2',
                'waktu' => '09.00 - 10.00',
                'kelas' => 'XI RPL 2',
                'id' => 2
            ],
            (object)[
                'mapel' => 'Matematika',
                'hari' => 'Selasa',
                'jamKe' => '2',
                'waktu' => '09.00 - 10.00',
                'kelas' => 'XI RPL 2',
                'id' => 2
            ],
            (object)[
                'mapel' => 'Matematika',
                'hari' => 'Selasa',
                'jamKe' => '2',
                'waktu' => '09.00 - 10.00',
                'kelas' => 'XI RPL 2',
                'id' => 2
            ],
            (object)[
                'mapel' => 'Matematika',
                'hari' => 'Selasa',
                'jamKe' => '2',
                'waktu' => '09.00 - 10.00',
                'kelas' => 'XI RPL 2',
                'id' => 2
            ],
        ];
    @endphp

    <div class="d-flex flex-wrap gap-4">
        @foreach ($jadwals as $jadwal)
            <x-jadwal-card
                :mapel="$jadwal->mapel"
                :hari="$jadwal->hari"
                :jamKe="$jadwal->jamKe"
                :waktu="$jadwal->waktu"
                :kelas="$jadwal->kelas"
                :linkIsiAbsen="route('absen.isi', $jadwal->id)"
                :linkRekapAbsen="route('absen.rekap', $jadwal->id)"
            />
        @endforeach
    </div>

    <a href="{{ route('dashboard') }}" class="btn btn-secondary mt-4">
        ‹ Kembali
    </a>
</div>
@endsection
