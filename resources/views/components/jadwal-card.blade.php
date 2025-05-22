@props([
    'mapel',
    'hari',
    'jamKe',
    'waktu',
    'kelas',
    'linkIsiAbsen',
    'linkRekapAbsen'
])

<div class="card shadow-sm mb-4" style="min-width: 280px;">
    <div class="card-body">
        <h5 class="card-title">{{ $mapel }}</h5>
        <hr>
        <p class="mb-1">› <strong>Hari:</strong> {{ $hari }}</p>
        <p class="mb-1">› <strong>Jam ke:</strong> {{ $jamKe }}</p>
        <p class="mb-1">› <strong>Waktu:</strong> {{ $waktu }}</p>
        <p class="mb-3">› <strong>Kelas:</strong> {{ $kelas }}</p>

        <div class="d-grid gap-2">
            <a href="{{ $linkIsiAbsen }}" class="btn btn-sm text-white" style="background-color: #a076f9;">
                <i class="bi bi-journal-check me-1"></i> Isi Absen
            </a>
            <a href="{{ $linkRekapAbsen }}" class="btn btn-sm text-white" style="background-color: #241b2f;">
                <i class="bi bi-clipboard-data me-1"></i> Rekap Absen
            </a>
        </div>
    </div>
</div>
