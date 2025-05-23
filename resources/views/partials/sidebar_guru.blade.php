<div class="sidebar-container">
    <!-- Brand Logo with modern accent -->
    <div class="brand-container">
        <a href="/" class="brand-logo">
            <i class="fas fa-fingerprint accent-icon"></i>
            <span class="brand-text">Pressensee</span>
            <div class="accent-bar"></div>
        </a>
    </div>

    <!-- Navigation Menu with animated items -->
    <ul class="nav-menu">
        <li class="nav-item active">
            <a href="#" class="nav-link">
                <div class="link-content">
                    <i class="fas fa-chart-pie"></i>
                    <span>Dashboard</span>
                </div>
                <div class="active-indicator"></div>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <div class="link-content">
                    <i class="fas fa-users-cog"></i>
                    <span>Guru</span>
                </div>
                <div class="hover-indicator"></div>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <div class="link-content">
                    <i class="fas fa-user-graduate"></i>
                    <span>Siswa</span>
                </div>
                <div class="hover-indicator"></div>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <div class="link-content">
                    <i class="fas fa-door-open"></i>
                    <span>Kelas</span>
                </div>
                <div class="hover-indicator"></div>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <div class="link-content">
                    <i class="fas fa-book-open"></i>
                    <span>Mata Pelajaran</span>
                </div>
                <div class="hover-indicator"></div>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <div class="link-content">
                    <i class="fas fa-calendar-check"></i>
                    <span>Presensi</span>
                </div>
                <div class="hover-indicator"></div>
            </a>
        </li>
    </ul>

    <!-- User Profile with modern card -->
    <div class="user-profile">
        <div class="profile-card">
            <div class="profile-image">
                <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?w=200" alt="Admin">
            </div>
            <div class="profile-info">
                <span class="profile-name">Admin</span>
                <span class="profile-role">Super Admin</span>
            </div>
            <div class="profile-actions">
                <button class="profile-btn">
                    <i class="fas fa-ellipsis-v"></i>
                </button>
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
}

.sidebar-container {
    width: 300px;
    height: 100vh;
    background: var(--card-bg);
    box-shadow: 10px 0 30px rgba(0,0,0,0.05);
    display: flex;
    flex-direction: column;
    padding: 30px 20px;
    position: relative;
    overflow: hidden;
    z-index: 1;
}

.sidebar-container::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 5px;
    height: 100%;
    background: linear-gradient(to bottom, var(--primary), var(--primary-light));
    z-index: -1;
}

.brand-container {
    margin-bottom: 40px;
    position: relative;
}

.brand-logo {
    display: flex;
    align-items: center;
    text-decoration: none;
    position: relative;
    padding-left: 15px;
}

.accent-icon {
    font-size: 24px;
    color: var(--primary);
    margin-right: 15px;
    transition: all 0.3s ease;
}

.brand-text {
    font-size: 22px;
    font-weight: 700;
    color: var(--text);
    letter-spacing: 1px;
    transition: all 0.3s ease;
}

.accent-bar {
    position: absolute;
    bottom: -8px;
    left: 15px;
    width: 30px;
    height: 3px;
    background: var(--accent);
    border-radius: 3px;
    transition: all 0.3s ease;
}

.brand-logo:hover .accent-icon {
    transform: rotate(15deg);
    color: var(--primary-light);
}

.brand-logo:hover .brand-text {
    color: var(--primary);
}

.brand-logo:hover .accent-bar {
    width: 50px;
    background: var(--primary-light);
}

.nav-menu {
    list-style: none;
    padding: 0;
    margin: 0;
    flex-grow: 1;
}

.nav-item {
    position: relative;
    margin-bottom: 5px;
    overflow: hidden;
}

.nav-link {
    display: flex;
    align-items: center;
    text-decoration: none;
    color: var(--text-light);
    padding: 12px 15px;
    border-radius: 8px;
    transition: all 0.3s ease;
    position: relative;
    justify-content: space-between;
}

.link-content {
    display: flex;
    align-items: center;
}

.nav-link i {
    font-size: 18px;
    margin-right: 15px;
    width: 20px;
    text-align: center;
    transition: all 0.3s ease;
}

.nav-link span {
    font-weight: 500;
    transition: all 0.3s ease;
}

.hover-indicator {
    position: absolute;
    right: -10px;
    width: 5px;
    height: 0;
    background: var(--primary);
    border-radius: 5px 0 0 5px;
    transition: all 0.3s ease;
}

.active-indicator {
    position: absolute;
    right: 0;
    width: 5px;
    height: 100%;
    background: var(--primary);
    border-radius: 5px 0 0 5px;
}

.nav-item.active .nav-link {
    color: var(--primary);
    background: rgba(123, 44, 191, 0.1);
}

.nav-item.active i {
    color: var(--primary);
}

.nav-item:hover .nav-link {
    color: var(--text);
}

.nav-item:hover i {
    transform: scale(1.1);
    color: var(--primary);
}

.nav-item:hover .hover-indicator {
    height: 70%;
}

.user-profile {
    margin-top: auto;
}

.profile-card {
    display: flex;
    align-items: center;
    background: var(--card-bg);
    padding: 15px;
    border-radius: 12px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    transition: all 0.3s ease;
    border: 1px solid rgba(0,0,0,0.03);
}

.profile-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.1);
}

.profile-image {
    width: 45px;
    height: 45px;
    border-radius: 50%;
    overflow: hidden;
    margin-right: 15px;
    border: 2px solid var(--primary-light);
}

.profile-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.profile-info {
    flex-grow: 1;
}

.profile-name {
    display: block;
    font-weight: 600;
    color: var(--text);
    margin-bottom: 2px;
}

.profile-role {
    display: block;
    font-size: 12px;
    color: var(--text-light);
}

.profile-actions {
    margin-left: 10px;
}

.profile-btn {
    background: none;
    border: none;
    color: var(--text-light);
    cursor: pointer;
    transition: all 0.3s ease;
    padding: 5px;
    border-radius: 50%;
}

.profile-btn:hover {
    color: var(--primary);
    background: rgba(123, 44, 191, 0.1);
}

/* Animation effects */
@keyframes fadeIn {
    from { opacity: 0; transform: translateX(-10px); }
    to { opacity: 1; transform: translateX(0); }
}

.nav-item {
    animation: fadeIn 0.4s ease forwards;
    opacity: 0;
}

.nav-item:nth-child(1) { animation-delay: 0.1s; }
.nav-item:nth-child(2) { animation-delay: 0.2s; }
.nav-item:nth-child(3) { animation-delay: 0.3s; }
.nav-item:nth-child(4) { animation-delay: 0.4s; }
.nav-item:nth-child(5) { animation-delay: 0.5s; }
.nav-item:nth-child(6) { animation-delay: 0.6s; }
</style>