<nav class="navbar navbar-expand-lg navbar-dark bg-purple">
    <div class="container-fluid">
        <!-- Brand & Logo -->
        <a class="navbar-brand" href="#">
            <div class="d-flex align-items-center">
                <img src="{{ asset('images/favicon.png') }}" alt="Logo" class="navbar-logo me-2">
                <div class="d-flex flex-column">
                    <span class="navbar-school">SMKN 4 KOTA TANGERANG</span>
                    <small class="navbar-address">Jl. Veteran No. 1 A Babakan</small>
                </div>
            </div>
        </a>

        <!-- Mobile Toggle -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navigation Items -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <!-- Notification Bell -->
                <li class="nav-item dropdown me-3">
                    <a class="nav-link position-relative" href="#" role="button">
                        <i class="fas fa-bell"></i>
                        <span class="badge-notification">3</span>
                    </a>
                </li>

                <!-- User Profile -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown">
                        <div class="profile-avatar me-2">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Admin">
                        </div>
                        <div class="profile-info">
                            <span class="profile-name">Admin</span>
                            <small class="profile-role">Administrator</small>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-sign-out-alt me-2"></i>Logout
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
.bg-purple {
    background: linear-gradient(135deg, #5A189A 0%, #7B2CBF 100%);
    box-shadow: 0 4px 20px rgba(90, 24, 154, 0.3);
}

.navbar-brand {
    padding: 0.5rem 0;
}

.navbar-logo {
    width: 40px;
    height: 40px;
    border-radius: 8px;
    object-fit: contain;
}

.navbar-school {
    font-weight: 600;
    font-size: 1.1rem;
    letter-spacing: 0.5px;
}

.navbar-address {
    font-size: 0.75rem;
    opacity: 0.9;
}

.nav-link {
    color: rgba(255,255,255,0.9) !important;
    transition: all 0.3s ease;
    padding: 0.5rem 1rem !important;
    border-radius: 8px;
}

.nav-link:hover {
    background: rgba(255,255,255,0.1);
    transform: translateY(-2px);
}

.badge-notification {
    position: absolute;
    top: 2px;
    right: 2px;
    background: #FF9E00;
    color: white;
    width: 18px;
    height: 18px;
    border-radius: 50%;
    font-size: 0.6rem;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
}

.profile-avatar {
    width: 36px;
    height: 36px;
    border-radius: 50%;
    overflow: hidden;
    border: 2px solid rgba(255,255,255,0.2);
}

.profile-avatar img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.profile-name {
    font-weight: 500;
    display: block;
}

.profile-role {
    font-size: 0.75rem;
    opacity: 0.8;
    display: block;
}

.dropdown-menu {
    border: none;
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    border-radius: 12px;
    margin-top: 10px;
}

.dropdown-item {
    padding: 0.75rem 1.5rem;
    transition: all 0.3s ease;
    color: #5A189A;
    font-weight: 500;
}

.dropdown-item:hover {
    background: #f8f9fa;
    color: #5A189A;
    padding-left: 1.75rem;
}

@media (max-width: 992px) {
    .navbar-school {
        font-size: 1rem;
    }
    
    .navbar-address {
        display: none;
    }
    
    .profile-info {
        display: none;
    }
}
</style>