@extends('layouts.app')

@section('content')
<div class="jadwal-container">
    <!-- Header with interactive elements -->
    <div class="jadwal-header">
        <div class="header-content">
            <h1 class="gradient-text">Jadwal Mengajar</h1>
            <p class="subtitle">Manajemen waktu pembelajaran harian</p>
        </div>
        <div class="header-actions">
            <div class="date-navigator">
                <button class="nav-btn"><i class="fas fa-chevron-left"></i></button>
                <span class="current-week">Minggu Ini</span>
                <button class="nav-btn"><i class="fas fa-chevron-right"></i></button>
            </div>
            <button class="action-btn primary">
                <i class="fas fa-plus"></i>
                <span>Tambah Jadwal</span>
            </button>
        </div>
    </div>

    <!-- Schedule Cards Grid -->
    <div class="schedule-grid">
        @php
            $jadwals = [
                (object)[
                    'mapel' => 'Bahasa Indonesia',
                    'hari' => 'Senin',
                    'jamKe' => '1',
                    'waktu' => '08.00 - 09.00',
                    'kelas' => 'XI RPL 1',
                    'id' => 1,
                    'status' => 'completed'
                ],
                (object)[
                    'mapel' => 'Matematika',
                    'hari' => 'Selasa',
                    'jamKe' => '2',
                    'waktu' => '09.00 - 10.00',
                    'kelas' => 'XI RPL 2',
                    'id' => 2,
                    'status' => 'upcoming'
                ],
                (object)[
                    'mapel' => 'Pemrograman Web',
                    'hari' => 'Rabu',
                    'jamKe' => '3',
                    'waktu' => '10.00 - 11.30',
                    'kelas' => 'XI RPL 1',
                    'id' => 3,
                    'status' => 'missed'
                ],
                (object)[
                    'mapel' => 'Basis Data',
                    'hari' => 'Kamis',
                    'jamKe' => '4',
                    'waktu' => '13.00 - 14.30',
                    'kelas' => 'XI RPL 2',
                    'id' => 4,
                    'status' => 'upcoming'
                ],
                (object)[
                    'mapel' => 'PPKN',
                    'hari' => 'Jumat',
                    'jamKe' => '5',
                    'waktu' => '08.00 - 09.30',
                    'kelas' => 'XI RPL 1',
                    'id' => 5,
                    'status' => 'upcoming'
                ],
                (object)[
                    'mapel' => 'Bahasa Inggris',
                    'hari' => 'Sabtu',
                    'jamKe' => '6',
                    'waktu' => '09.00 - 10.30',
                    'kelas' => 'XI RPL 2',
                    'id' => 6,
                    'status' => 'upcoming'
                ]
            ];
        @endphp

        @foreach($jadwals as $jadwal)
        <div class="schedule-card status-{{ $jadwal->status }}">
            <div class="card-header">
                <span class="day-badge">{{ $jadwal->hari }}</span>
                <span class="time-slot">{{ $jadwal->waktu }}</span>
                <span class="status-indicator"></span>
            </div>
            <div class="card-body">
                <h3 class="subject-name">{{ $jadwal->mapel }}</h3>
                <div class="class-info">
                    <i class="fas fa-door-open"></i>
                    <span>{{ $jadwal->kelas }}</span>
                </div>
                <div class="session-info">
                    <i class="fas fa-clock"></i>
                    <span>Sesi ke-{{ $jadwal->jamKe }}</span>
                </div>
            </div>
            <div class="card-footer">
                <a href="{{ route('absen.isi', $jadwal->id) }}" class="action-btn primary small">
                    <i class="fas fa-edit"></i> Isi Absen
                </a>
                <a href="{{ route('absen.rekap', $jadwal->id) }}" class="action-btn secondary small">
                    <i class="fas fa-chart-bar"></i> Rekap
                </a>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Floating Action Button -->
    <div class="fab-container">
        <button class="fab-btn">
            <i class="fas fa-calendar-plus"></i>
        </button>
    </div>

    <!-- Back Button -->
    <a href="{{ route('dashboard') }}" class="back-btn">
        <i class="fas fa-arrow-left"></i> Kembali ke Dashboard
    </a>
</div>

<style>
:root {
    --primary: #7B2CBF;
    --primary-dark: #5A189A;
    --primary-light: #9D4EDD;
    --accent: #FF9E00;
    --success: #00B884;
    --warning: #FF9E00;
    --danger: #FF4757;
    --text: #2B2D42;
    --text-light: #8D99AE;
    --bg: #F8F9FA;
    --card-bg: #FFFFFF;
    --shadow: 0 10px 30px rgba(0,0,0,0.05);
    --radius: 16px;
}

.jadwal-container {
    padding: 2rem;
    background-color: var(--bg);
    min-height: 100vh;
}

/* Header Styles */
.jadwal-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    margin-bottom: 2rem;
    flex-wrap: wrap;
    gap: 1rem;
}

.header-content h1 {
    font-size: 2.2rem;
    font-weight: 800;
    margin-bottom: 0.25rem;
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.subtitle {
    color: var(--text-light);
    font-size: 1rem;
}

.header-actions {
    display: flex;
    align-items: center;
    gap: 1.5rem;
}

.date-navigator {
    display: flex;
    align-items: center;
    background: white;
    border-radius: 50px;
    padding: 0.5rem;
    box-shadow: var(--shadow);
}

.nav-btn {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    border: none;
    background: none;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    color: var(--text-light);
    transition: all 0.3s ease;
}

.nav-btn:hover {
    background: rgba(0,0,0,0.05);
    color: var(--primary);
}

.current-week {
    padding: 0 1rem;
    font-weight: 500;
    color: var(--text);
}

.action-btn {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.75rem 1.5rem;
    border-radius: 50px;
    border: none;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.3s ease;
}

.action-btn.primary {
    background: var(--primary);
    color: white;
    box-shadow: 0 4px 15px rgba(123, 44, 191, 0.3);
}

.action-btn.primary:hover {
    background: var(--primary-dark);
    transform: translateY(-2px);
}

.action-btn.secondary {
    background: white;
    color: var(--primary);
    border: 1px solid var(--primary-light);
}

.action-btn.secondary:hover {
    background: rgba(123, 44, 191, 0.05);
}

.action-btn.small {
    padding: 0.5rem 1rem;
    font-size: 0.85rem;
}

/* Schedule Grid */
.schedule-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 1.5rem;
    margin-bottom: 3rem;
}

.schedule-card {
    background: var(--card-bg);
    border-radius: var(--radius);
    overflow: hidden;
    box-shadow: var(--shadow);
    transition: all 0.3s ease;
    display: flex;
    flex-direction: column;
    position: relative;
}

.schedule-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.1);
}

.card-header {
    padding: 1rem 1.5rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: rgba(123, 44, 191, 0.05);
    position: relative;
}

.day-badge {
    background: var(--primary);
    color: white;
    padding: 0.25rem 0.75rem;
    border-radius: 50px;
    font-size: 0.8rem;
    font-weight: 600;
}

.time-slot {
    font-weight: 600;
    color: var(--text);
}

.status-indicator {
    position: absolute;
    top: 0;
    right: 0;
    width: 6px;
    height: 100%;
}

.status-completed .status-indicator {
    background: var(--success);
}

.status-upcoming .status-indicator {
    background: var(--primary);
}

.status-missed .status-indicator {
    background: var(--danger);
}

.card-body {
    padding: 1.5rem;
    flex-grow: 1;
}

.subject-name {
    font-size: 1.3rem;
    font-weight: 700;
    margin-bottom: 1rem;
    color: var(--text);
}

.class-info, .session-info {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    color: var(--text-light);
    margin-bottom: 0.5rem;
}

.class-info i {
    color: var(--primary);
}

.session-info i {
    color: var(--accent);
}

.card-footer {
    padding: 1rem 1.5rem;
    display: flex;
    gap: 0.75rem;
    border-top: 1px solid rgba(0,0,0,0.05);
}

/* Status Styling */
.status-completed {
    border-left: 4px solid var(--success);
}

.status-upcoming {
    border-left: 4px solid var(--primary);
}

.status-missed {
    border-left: 4px solid var(--danger);
}

/* Floating Action Button */
.fab-container {
    position: fixed;
    bottom: 2rem;
    right: 2rem;
}

.fab-btn {
    width: 56px;
    height: 56px;
    border-radius: 50%;
    background: var(--primary);
    color: white;
    border: none;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 10px 25px rgba(123, 44, 191, 0.4);
    cursor: pointer;
    transition: all 0.3s ease;
}

.fab-btn:hover {
    background: var(--primary-dark);
    transform: scale(1.1) translateY(-5px);
}

.fab-btn i {
    font-size: 1.5rem;
}

/* Back Button */
.back-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    color: var(--primary);
    text-decoration: none;
    font-weight: 500;
    padding: 0.75rem 1.5rem;
    border-radius: 50px;
    transition: all 0.3s ease;
    background: white;
    box-shadow: var(--shadow);
    margin-top: 1rem;
}

.back-btn:hover {
    background: rgba(123, 44, 191, 0.1);
    transform: translateX(-5px);
}

/* Responsive Design */
@media (max-width: 768px) {
    .jadwal-header {
        flex-direction: column;
        align-items: flex-start;
    }
    
    .header-actions {
        width: 100%;
        flex-direction: column;
        gap: 1rem;
        align-items: flex-start;
    }
    
    .date-navigator {
        order: 2;
    }
    
    .schedule-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<script>
// Simple animation for cards when they load
document.addEventListener('DOMContentLoaded', function() {
    const cards = document.querySelectorAll('.schedule-card');
    cards.forEach((card, index) => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
        card.style.transition = 'all 0.5s ease ' + (index * 0.1) + 's';
        
        setTimeout(() => {
            card.style.opacity = '1';
            card.style.transform = 'translateY(0)';
        }, 100);
    });
});
</script>
@endsection