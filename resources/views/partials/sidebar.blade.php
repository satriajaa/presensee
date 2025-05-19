<!-- resources/views/partials/sidebar.blade.php -->
<div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px; height: 100vh;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <span class="fs-4">Pressensee</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="" class="nav-link active" style="background: #5A189A" aria-current="page">
                <i class="fas fa-tachometer-alt me-2"></i>
                Dashboard
            </a>
        </li>
        <li>
            <a href="#" class="nav-link link-dark">
                <i class="fas fa-users me-2"></i>
                Siswa
            </a>
        </li>
        <li>
            <a href="#" class="nav-link link-dark">
                <i class="fas fa-chalkboard-teacher me-2"></i>
                Guru
            </a>
        </li>
        <li>
            <a href="#" class="nav-link link-dark">
                <i class="fas fa-door-open me-2"></i>
                Kelas
            </a>
        </li>
        <li>
            <a href="#" class="nav-link link-dark">
                <i class="fas fa-book me-2"></i>
                Mata Pelajaran
            </a>
        </li>
        <li>
            <a href="#" class="nav-link link-dark">
                <i class="fas fa-calendar-check me-2"></i>
                Presensi
            </a>
        </li>
    </ul>
    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://via.placeholder.com/32" alt="Admin" width="32" height="32" class="rounded-circle me-2">
            <strong>Admin</strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
        </ul>
    </div>
</div>
