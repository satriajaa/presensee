@extends('layouts.app')

@section('content')
<div class="dashboard-container">
    <!-- Header Section -->
    <div class="dashboard-header">
        <div class="header-content">
            <h1 class="gradient-text">Pressensee<span class="text-accent">.</span></h1>
            <div class="admin-badge">
                <span class="badge-icon"><i class="fas fa-shield-alt"></i></span>
                <span>Administrator</span>
            </div>
            <p class="welcome-message">Selamat Datang di Sistem Presensi Digital</p>
        </div>
        <div class="header-actions">
            <button class="action-btn notification-btn">
                <i class="fas fa-bell"></i>
                <span class="notification-badge">3</span>
            </button>
            <button class="action-btn profile-btn">
                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Admin">
            </button>
        </div>
    </div>

    <!-- School Info Card -->
    <div class="school-card glassmorphism">
        <div class="school-logo">
            <img src="{{ asset('images/favicon.png') }}" alt="SMKN 4 Logo">
        </div>
        <div class="school-info">
            <h2>SMKN 4 KOTA TANGERANG</h2>
            <p class="school-address">
                <i class="fas fa-map-marker-alt"></i>
                Jl. Veteran No. 1 A Babakan, Tangerang Kota Tangerang - Banten
            </p>
            <div class="school-stats">
                <div class="stat-item">
                    <i class="fas fa-calendar-day"></i>
                    <span>{{ \Carbon\Carbon::now()->isoFormat('dddd, D MMMM YYYY') }}</span>
                </div>
                <div class="stat-item">
                    <i class="fas fa-clock"></i>
                    <span id="live-clock">{{ \Carbon\Carbon::now()->format('H:i:s') }}</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats Grid -->
    <div class="stats-grid">
        <div class="stat-card gradient-purple">
            <div class="stat-icon">
                <i class="fas fa-user-graduate"></i>
            </div>
            <div class="stat-info">
                <h3>{{ $totalSiswa ?? '0' }}</h3>
                <p>Total Siswa</p>
            </div>
            <div class="stat-trend">
                <i class="fas fa-arrow-up"></i>
                <span>12%</span>
            </div>
        </div>

        <div class="stat-card gradient-blue">
            <div class="stat-icon">
                <i class="fas fa-chalkboard-teacher"></i>
            </div>
            <div class="stat-info">
                <h3>{{ $totalGuru ?? '0' }}</h3>
                <p>Total Guru</p>
            </div>
            <div class="stat-trend">
                <i class="fas fa-arrow-up"></i>
                <span>5%</span>
            </div>
        </div>

        <div class="stat-card gradient-orange">
            <div class="stat-icon">
                <i class="fas fa-door-open"></i>
            </div>
            <div class="stat-info">
                <h3>{{ $totalKelas ?? '0' }}</h3>
                <p>Total Kelas</p>
            </div>
            <div class="stat-trend">
                <i class="fas fa-arrow-right"></i>
                <span>2%</span>
            </div>
        </div>

        <div class="stat-card gradient-green">
            <div class="stat-icon">
                <i class="fas fa-book-open"></i>
            </div>
            <div class="stat-info">
                <h3>{{ $totalMapel ?? '0' }}</h3>
                <p>Mata Pelajaran</p>
            </div>
            <div class="stat-trend">
                <i class="fas fa-arrow-up"></i>
                <span>8%</span>
            </div>
        </div>
    </div>

    <!-- Recent Activity Section -->
    <div class="activity-section">
        <div class="section-header">
            <h2>Aktivitas Terkini</h2>
            <a href="#" class="view-all">Lihat Semua <i class="fas fa-chevron-right"></i></a>
        </div>
        <div class="activity-list">
            <div class="activity-item">
                <div class="activity-icon">
                    <i class="fas fa-user-check"></i>
                </div>
                <div class="activity-content">
                    <p><strong>Andi Setiawan</strong> melakukan presensi masuk</p>
                    <small>Kelas XII RPL 1 - 08:15:23</small>
                </div>
            </div>
            <div class="activity-item">
                <div class="activity-icon">
                    <i class="fas fa-user-times"></i>
                </div>
                <div class="activity-content">
                    <p><strong>Budi Santoso</strong> terlambat melakukan presensi</p>
                    <small>Kelas XII TKJ 2 - 08:30:45</small>
                </div>
            </div>
            <div class="activity-item">
                <div class="activity-icon">
                    <i class="fas fa-exclamation-triangle"></i>
                </div>
                <div class="activity-content">
                    <p><strong>5 siswa</strong> belum melakukan presensi pagi</p>
                    <small>Kelas XI MM 1 - 09:00:00</small>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
:root {
    --primary: #7B2CBF;
    --primary-dark: #5A189A;
    --primary-light: #9D4EDD;
    --accent: #FF9E00;
    --text: #2B2D42;
    --text-light: #8D99AE;
    --bg: #F8F9FA;
    --card-bg: #FFFFFF;
    --shadow: 0 10px 30px rgba(0,0,0,0.05);
    --glass: rgba(255, 255, 255, 0.8);
}

.dashboard-container {
    padding: 2rem;
    background-color: var(--bg);
    min-height: 100vh;
}

/* Header Styles */
.dashboard-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 2rem;
}

.header-content h1 {
    font-size: 2.5rem;
    font-weight: 800;
    margin-bottom: 0.5rem;
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.text-accent {
    color: var(--accent);
}

.admin-badge {
    display: inline-flex;
    align-items: center;
    background: rgba(123, 44, 191, 0.1);
    padding: 0.5rem 1rem;
    border-radius: 50px;
    font-size: 0.9rem;
    font-weight: 500;
    color: var(--primary);
}

.badge-icon {
    margin-right: 0.5rem;
    color: var(--primary);
}

.welcome-message {
    color: var(--text-light);
    margin-top: 0.5rem;
}

.header-actions {
    display: flex;
    gap: 1rem;
}

.action-btn {
    background: none;
    border: none;
    cursor: pointer;
    position: relative;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
}

.action-btn:hover {
    background: rgba(0,0,0,0.05);
}

.notification-btn {
    color: var(--text-light);
}

.notification-badge {
    position: absolute;
    top: -5px;
    right: -5px;
    background: #FF4757;
    color: white;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    font-size: 0.7rem;
    display: flex;
    align-items: center;
    justify-content: center;
}

.profile-btn img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    object-fit: cover;
    border: 2px solid var(--primary-light);
}

/* School Card */
.school-card {
    display: flex;
    background: var(--glass);
    backdrop-filter: blur(10px);
    border-radius: 20px;
    padding: 2rem;
    margin-bottom: 2rem;
    box-shadow: var(--shadow);
    border: 1px solid rgba(255, 255, 255, 0.2);
    transition: transform 0.3s ease;
}

.school-card:hover {
    transform: translateY(-5px);
}

.school-logo {
    width: 100px;
    height: 100px;
    margin-right: 2rem;
    display: flex;
    align-items: center;
    justify-content: center;
}

.school-logo img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
}

.school-info h2 {
    font-size: 1.8rem;
    font-weight: 700;
    margin-bottom: 0.5rem;
    color: var(--text);
}

.school-address {
    color: var(--text-light);
    margin-bottom: 1.5rem;
    display: flex;
    align-items: center;
}

.school-address i {
    margin-right: 0.5rem;
    color: var(--primary);
}

.school-stats {
    display: flex;
    gap: 2rem;
}

.stat-item {
    display: flex;
    align-items: center;
    color: var(--text-light);
}

.stat-item i {
    margin-right: 0.5rem;
    color: var(--primary);
}

/* Stats Grid */
.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1.5rem;
    margin-bottom: 2rem;
}

.stat-card {
    background: white;
    border-radius: 15px;
    padding: 1.5rem;
    box-shadow: var(--shadow);
    display: flex;
    flex-direction: column;
    transition: transform 0.3s ease;
    position: relative;
    overflow: hidden;
}

.stat-card:hover {
    transform: translateY(-5px);
}

.stat-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 5px;
    height: 100%;
}

.gradient-purple {
    background: linear-gradient(135deg, rgba(123, 44, 191, 0.1) 0%, rgba(157, 78, 221, 0.1) 100%);
}

.gradient-purple::before {
    background: linear-gradient(to bottom, var(--primary), var(--primary-light));
}

.gradient-blue {
    background: linear-gradient(135deg, rgba(32, 140, 252, 0.1) 0%, rgba(0, 112, 243, 0.1) 100%);
}

.gradient-blue::before {
    background: linear-gradient(to bottom, #208CFC, #0070F3);
}

.gradient-orange {
    background: linear-gradient(135deg, rgba(255, 158, 0, 0.1) 0%, rgba(255, 123, 0, 0.1) 100%);
}

.gradient-orange::before {
    background: linear-gradient(to bottom, #FF9E00, #FF7B00);
}

.gradient-green {
    background: linear-gradient(135deg, rgba(0, 184, 132, 0.1) 0%, rgba(0, 148, 106, 0.1) 100%);
}

.gradient-green::before {
    background: linear-gradient(to bottom, #00B884, #00946A);
}

.stat-icon {
    width: 50px;
    height: 50px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1rem;
    color: white;
    font-size: 1.2rem;
}

.gradient-purple .stat-icon {
    background: linear-gradient(135deg, var(--primary), var(--primary-light));
}

.gradient-blue .stat-icon {
    background: linear-gradient(135deg, #208CFC, #0070F3);
}

.gradient-orange .stat-icon {
    background: linear-gradient(135deg, #FF9E00, #FF7B00);
}

.gradient-green .stat-icon {
    background: linear-gradient(135deg, #00B884, #00946A);
}

.stat-info h3 {
    font-size: 1.8rem;
    font-weight: 700;
    margin-bottom: 0.25rem;
    color: var(--text);
}

.stat-info p {
    color: var(--text-light);
    font-size: 0.9rem;
}

.stat-trend {
    margin-top: auto;
    display: flex;
    align-items: center;
    font-size: 0.9rem;
    color: #00B884;
}

.stat-trend i {
    margin-right: 0.25rem;
}

.gradient-orange .stat-trend {
    color: #FF9E00;
}

/* Activity Section */
.activity-section {
    background: white;
    border-radius: 20px;
    padding: 2rem;
    box-shadow: var(--shadow);
}

.section-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1.5rem;
}

.section-header h2 {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--text);
}

.view-all {
    color: var(--primary);
    text-decoration: none;
    font-size: 0.9rem;
    display: flex;
    align-items: center;
}

.view-all i {
    margin-left: 0.25rem;
    font-size: 0.7rem;
}

.activity-list {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.activity-item {
    display: flex;
    padding: 1rem;
    border-radius: 12px;
    transition: all 0.3s ease;
}

.activity-item:hover {
    background: rgba(0,0,0,0.02);
}

.activity-icon {
    width: 40px;
    height: 40px;
    border-radius: 10px;
    background: rgba(123, 44, 191, 0.1);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 1rem;
    color: var(--primary);
    flex-shrink: 0;
}

.activity-content {
    flex-grow: 1;
}

.activity-content p {
    margin-bottom: 0.25rem;
    color: var(--text);
}

.activity-content small {
    color: var(--text-light);
    font-size: 0.8rem;
}

/* Responsive Design */
@media (max-width: 768px) {
    .dashboard-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 1rem;
    }
    
    .header-actions {
        width: 100%;
        justify-content: flex-end;
    }
    
    .school-card {
        flex-direction: column;
        text-align: center;
    }
    
    .school-logo {
        margin-right: 0;
        margin-bottom: 1.5rem;
        width: 80px;
        height: 80px;
        margin-left: auto;
        margin-right: auto;
    }
    
    .school-stats {
        flex-direction: column;
        gap: 1rem;
    }
    
    .stats-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<script>
// Live Clock
function updateClock() {
    const now = new Date();
    const timeString = now.toLocaleTimeString('id-ID', {
        hour: '2-digit',
        minute: '2-digit',
        second: '2-digit'
    });
    document.getElementById('live-clock').textContent = timeString;
}

setInterval(updateClock, 1000);
updateClock();
</script>
@endsection