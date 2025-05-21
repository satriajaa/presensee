<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presensee | Smart Attendance System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #7B2CBF;
            --primary-light: #9D4EDD;
            --primary-dark: #5A189A;
            --secondary: #E0AAFF;
            --accent: #C77DFF;
            --dark: #10002B;
            --light: #F8F0FF;
            --text: #3A0CA3;
            --gradient: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: var(--light);
            color: var(--dark);
            line-height: 1.7;
            overflow-x: hidden;
        }

         /* Preloader Styles */
   /* Preloader Styles */
 .preloader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: var(--light);
        z-index: 9999;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: opacity 1s ease;
    }

    .loader {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    .spinner {
        width: 70px;
        height: 70px;
        border: 6px solid var(--secondary);
        border-top-color: var(--primary);
        border-radius: 50%;
        animation: spin 2s linear infinite;
        margin-bottom: 25px;
    }

    .loading-text {
        color: var(--primary);
        font-weight: 600;
        font-size: 1.4rem;
        margin-top: 20px;
        letter-spacing: 1px;
        animation: pulse 2s ease-in-out infinite;
        text-align: center;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    @keyframes pulse {
        0%, 100% {
            opacity: 1;
            transform: scale(1);
        }
        50% {
            opacity: 0.7;
            transform: scale(0.98);
        }
    }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        header {
            background-color: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 5px 30px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            z-index: 1000;
        }

        header.scrolled {
            padding: 10px 0;
            box-shadow: 0 5px 20px rgba(123, 44, 191, 0.2);
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
        }

        .logo {
            font-size: 28px;
            font-weight: 700;
            color: var(--primary);
            display: flex;
            align-items: center;
            text-decoration: none;
        }

        .logo i {
            margin-right: 10px;
            color: var(--accent);
            font-size: 32px;
        }

        .nav-links {
            display: flex;
            list-style: none;
        }

        .nav-links li {
            margin-left: 30px;
            position: relative;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--dark);
            font-weight: 500;
            position: relative;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background-color: var(--accent);
        }

        .nav-links a:hover {
            color: var(--primary);
        }

        .cta-button {
            background: var(--gradient);
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 50px;
            font-weight: 600;
            cursor: pointer;
            box-shadow: 0 5px 15px rgba(123, 44, 191, 0.3);
        }

        .cta-button:hover {
            box-shadow: 0 8px 25px rgba(123, 44, 191, 0.4);
        }

        .mobile-menu {
            display: none;
            font-size: 24px;
            cursor: pointer;
            color: var(--primary);
        }

        /* Hero Section */
        .hero {
            padding: 200px 0 120px;
            background: var(--light);
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 80%;
            height: 200%;
            background: radial-gradient(circle, rgba(123, 44, 191, 0.1) 0%, rgba(123, 44, 191, 0) 70%);
            z-index: 0;
        }

        .hero-content {
            position: relative;
            z-index: 1;
            max-width: 600px;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            color: var(--dark);
            line-height: 1.2;
            background: linear-gradient(to right, var(--primary), var(--text));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 40px;
            color: #555;
        }

        .hero-buttons {
            display: flex;
            gap: 20px;
        }

        .secondary-button {
            background-color: transparent;
            color: var(--primary);
            border: 2px solid var(--primary);
            padding: 12px 25px;
            border-radius: 50px;
            font-weight: 600;
            cursor: pointer;
        }

        .secondary-button:hover {
            background-color: var(--primary);
            color: white;
            box-shadow: 0 5px 15px rgba(123, 44, 191, 0.3);
        }

        .hero-image {
            position: absolute;
            right: 0;
            top: 55%;
            transform: translateY(-50%);
            width: 50%;
            max-width: 700px;
        }

          .hero-image img {
        width: 80%;
        height: auto;
        border-radius: 20px;
        filter: drop-shadow(0 20px 30px rgba(0, 0, 0, 0.2));
    }

        /* Stats Section */
        .stats {
            padding: 100px 0;
            background-color: white;
            position: relative;
        }

        .stats::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100px;
            background: linear-gradient(to bottom, white, var(--light));
            z-index: 1;
        }

        .stats-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 30px;
            position: relative;
            z-index: 2;
        }

        .stat-card {
            text-align: center;
            flex: 1;
            min-width: 200px;
            padding: 40px 30px;
            border-radius: 20px;
            background-color: white;
            box-shadow: 0 10px 30px rgba(123, 44, 191, 0.1);
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            background: var(--gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 10px;
        }

        .stat-label {
            font-size: 1rem;
            color: #666;
            font-weight: 500;
        }

        /* About Section */
        .about {
            padding: 120px 0;
            background-color: var(--light);
            position: relative;
            overflow: hidden;
        }

        .about::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100px;
            background: linear-gradient(to bottom, var(--light), white);
            z-index: 1;
        }

        .section-title {
            text-align: center;
            margin-bottom: 70px;
            font-size: 2.5rem;
            color: var(--dark);
            position: relative;
        }

        .section-title::after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background: var(--gradient);
            margin: 15px auto 0;
            border-radius: 2px;
        }

        .about-content {
            display: flex;
            align-items: center;
            gap: 80px;
            position: relative;
            z-index: 2;
        }

        .about-text {
            flex: 1;
        }

        .about-text h3 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: var(--dark);
            line-height: 1.3;
        }

        .about-text p {
            margin-bottom: 30px;
            color: #555;
            font-size: 1.1rem;
        }

        .features-list {
            list-style: none;
            margin-bottom: 40px;
        }

        .features-list li {
            margin-bottom: 20px;
            display: flex;
            align-items: flex-start;
        }

        .features-list i {
            color: var(--accent);
            margin-right: 15px;
            font-size: 1.5rem;
            margin-top: 3px;
            flex-shrink: 0;
        }

        .features-list span {
            font-size: 1.1rem;
        }

        .about-image {
            flex: 1;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(123, 44, 191, 0.2);
            position: relative;
        }

        .about-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(123, 44, 191, 0.1);
            z-index: 1;
        }

        .about-image img {
            width: 100%;
            height: auto;
            display: block;
        }

        /* Features Section */
        .features {
            padding: 120px 0;
            background-color: white;
            position: relative;
        }

        .features::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100px;
            background: linear-gradient(to bottom, white, var(--light));
            z-index: 1;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            position: relative;
            z-index: 2;
        }

        .feature-card {
            background-color: white;
            border-radius: 20px;
            padding: 40px 30px;
            box-shadow: 0 10px 30px rgba(123, 44, 191, 0.1);
        }

        .feature-icon {
            font-size: 3rem;
            color: var(--accent);
            margin-bottom: 25px;
            background: var(--gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .feature-title {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: var(--dark);
        }

        .feature-description {
            color: #666;
            margin-bottom: 20px;
            font-size: 1.05rem;
        }

        /* CTA Section */
        .cta {
            padding: 150px 0;
            background: var(--gradient);
            color: white;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .cta::before {
            content: '';
            position: absolute;
            top: -100px;
            left: -100px;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0) 70%);
            border-radius: 50%;
        }

        .cta::after {
            content: '';
            position: absolute;
            bottom: -100px;
            right: -100px;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0) 70%);
            border-radius: 50%;
        }

        .cta-content {
            position: relative;
            z-index: 1;
            max-width: 800px;
            margin: 0 auto;
        }

        .cta h2 {
            font-size: 2.8rem;
            margin-bottom: 20px;
            line-height: 1.3;
        }

        .cta p {
            max-width: 700px;
            margin: 0 auto 40px;
            font-size: 1.2rem;
            opacity: 0.9;
        }

        .cta-button.white {
            background-color: white;
            color: var(--primary);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        .cta-button.white:hover {
            background-color: var(--light);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        /* Footer */
        footer {
            background-color: var(--dark);
            color: white;
            padding: 100px 0 30px;
            position: relative;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 50px;
            margin-bottom: 60px;
            position: relative;
            z-index: 1;
        }

        .footer-column h3 {
            font-size: 1.3rem;
            margin-bottom: 25px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-column h3::after {
            content: '';
            display: block;
            width: 40px;
            height: 3px;
            background: var(--gradient);
            position: absolute;
            bottom: 0;
            left: 0;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 15px;
        }

        .footer-links a {
            color: #ccc;
            text-decoration: none;
            font-size: 0.95rem;
        }

        .footer-links a:hover {
            color: white;
            padding-left: 5px;
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 25px;
        }

        .social-links a {
            color: white;
            background-color: rgba(255, 255, 255, 0.1);
            width: 45px;
            height: 45px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .social-links a:hover {
            background: var(--gradient);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #aaa;
            font-size: 0.9rem;
            position: relative;
            z-index: 1;
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .hero h1 {
                font-size: 2.8rem;
            }

            .hero-image {
                width: 45%;
            }

            .about-content {
                gap: 50px;
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                position: fixed;
                top: 80px;
                left: 0;
                width: 100%;
                background-color: white;
                flex-direction: column;
                align-items: center;
                padding: 30px 0;
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
                transform: translateY(-150%);
                z-index: 999;
            }

            .nav-links.active {
                transform: translateY(0);
            }

            .nav-links li {
                margin: 15px 0;
            }

            .mobile-menu {
                display: block;
            }

            .hero {
                padding: 180px 0 80px;
                text-align: center;
            }

            .hero-content {
                max-width: 100%;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .hero-buttons {
                justify-content: center;
            }

            .hero-image {
                position: relative;
                width: 100%;
                max-width: 500px;
                margin: 50px auto 0;
                transform: none;
                right: auto;
                top: auto;
            }

            .about-content {
                flex-direction: column;
            }

            .section-title {
                font-size: 2rem;
            }
        }

        @media (max-width: 576px) {
            .hero h1 {
                font-size: 2rem;
            }

            .hero p {
                font-size: 1rem;
            }

            .hero-buttons {
                flex-direction: column;
                gap: 15px;
            }

            .stat-card {
                min-width: 100%;
            }

            .section-title {
                font-size: 1.8rem;
            }

            .feature-card {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>

<div class="preloader">
    <div class="loader">
        <div class="spinner"></div>
        <p>Memuat Sistem Presensi...</p>
    </div>
</div>
    <!-- Header -->
    <header id="header">
        <div class="container">
            <nav>
                <a href="#" class="logo">
                    <i class="fas fa-user-check"></i>
                    <span>Presensee</span>
                </a>
                <ul class="nav-links">
                    <li><a href="#features">Features</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#stats">Stats</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <button class="cta-button">Get Started</button>
                <div class="mobile-menu">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Make your presence felt without the hassle</h1>
                <p>Revolutionize school attendance with our smart, automated system that saves time and improves accuracy. Focus on education while we handle the logistics.</p>
                <div class="hero-buttons">
                    <button class="cta-button">Start Free Trial</button>
                    <button class="secondary-button">Learn More</button>
                </div>
            </div>
            <div class="image">
                <img src="https://images.unsplash.com/photo-1588072432836-e10032774350?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1472&q=80" alt="">
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats" id="stats">
        <div class="container">
            <div class="stats-container">
                <div class="stat-card">
                    <div class="stat-number">50,000+</div>
                    <div class="stat-label">Students</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">96%</div>
                    <div class="stat-label">Attendance Rate</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">15</div>
                    <div class="stat-label">Schools</div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about" id="about">
        <div class="container">
            <h2 class="section-title">About Our School</h2>
            <div class="about-content">
                <div class="about-text">
                    <h3>Absen School Attendance</h3>
                    <p>Our cutting-edge system transforms traditional attendance tracking into a seamless, automated process that benefits administrators, teachers, and parents alike.</p>
                    <ul class="features-list">
                        <li>
                            <i class="fas fa-bolt"></i>
                            <span><strong>Realtime Attendance</strong> - Track attendance as it happens with live updates</span>
                        </li>
                        <li>
                            <i class="fas fa-robot"></i>
                            <span><strong>Smart automated system</strong> - Reduce manual work and human errors</span>
                        </li>
                        <li>
                            <i class="fas fa-chart-line"></i>
                            <span><strong>Attendance Reports</strong> - Generate detailed analytics with one click</span>
                        </li>
                    </ul>
                    <button class="cta-button">Learn How It Works</button>
                </div>
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="School attendance system">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features" id="features">
        <div class="container">
            <h2 class="section-title">Flexible Use Available on any device</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-magic"></i>
                    </div>
                    <h3 class="feature-title">Automated</h3>
                    <p class="feature-description">Our smart system automatically records attendance using advanced technology, eliminating manual processes and reducing errors.</p>
                    <button class="secondary-button">See Demo</button>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-user-shield"></i>
                    </div>
                    <h3 class="feature-title">Guardian Contact</h3>
                    <p class="feature-description">Automatically notify guardians when students are absent or late to class, keeping everyone informed in real-time.</p>
                    <button class="secondary-button">Learn More</button>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-chart-pie"></i>
                    </div>
                    <h3 class="feature-title">Detailed Stats</h3>
                    <p class="feature-description">Generate comprehensive attendance reports with visual analytics to identify trends and improve student accountability.</p>
                    <button class="secondary-button">View Samples</button>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to transform your school's attendance system?</h2>
                <p>Join thousands of educational institutions already using Presensee to simplify attendance tracking and improve student accountability.</p>
                <button class="cta-button white" style="color: white;">Get Started Today</button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact">
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>Presensee</h3>
                    <p style="color: #aaa; margin-bottom: 20px;">Making school attendance simple, smart, and effective.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="footer-column">
                    <h3>Product</h3>
                    <ul class="footer-links">
                        <li><a href="#">Features</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">Demo</a></li>
                        <li><a href="#">Updates</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Company</h3>
                    <ul class="footer-links">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Press</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Support</h3>
                    <ul class="footer-links">
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 Presensee. All rights reserved.</p>
            </div>
        </div>

  <script>
    // Tambahkan delay minimal 3 detik
    window.addEventListener('load', function() {
        const minimumDisplayTime = 3000; // 3 detik
        const startTime = Date.now();

        const remainingTime = minimumDisplayTime - (Date.now() - startTime);

        setTimeout(() => {
            const preloader = document.querySelector('.preloader');
            preloader.classList.add('hidden');

            setTimeout(() => {
                preloader.style.display = 'none';
            }, 1000);
        }, remainingTime > 0 ? remainingTime : 0);
    });
</script>
    </footer>
