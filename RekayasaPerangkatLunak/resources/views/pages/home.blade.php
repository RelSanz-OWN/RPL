<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPL Center | Rekayasa Perangkat Lunak</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --primary: #2563eb;
            --primary-dark: #1d4ed8;
            --secondary: #8b5cf6;
            --accent: #0ea5e9;
            --light: #f8fafc;
            --dark: #0f172a;
            --gray: #64748b;
            --success: #10b981;
            --nav: #16032cff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f1f5f9;
            color: var(--dark);
            line-height: 1.6;
            overflow-x: hidden;
        }

        h1,
        h2,
        h3,
        h4 {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header Styles */
        header {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            padding: 15px 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .logo i {
            font-size: 2rem;
            color: #ffd43b;
        }

        .logo-text {
            font-size: 1.5rem;
            font-weight: 700;
            letter-spacing: -0.5px;
        }

        .logo-text span {
            color: #ffd43b;
        }

        /* SUBMENU DROPDOWN (Bawaan sebelumnya tetap) */


        .dropdown-content {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background: #0f1528ff;
            min-width: 180px;
            flex-direction: column;
            gap: 1;
            padding: 10px 20px;
            border-radius: 6px;
            z-index: 100;
        }

        .dropdown:hover .dropdown-content {
            display: flex;
        }

        /* SUBMENU (di dalam Karir) */
        .dropdown-sub {
            position: relative;
            z-index: 500;
        }

        .dropdown-submenu {
            display: none;
            position: absolute;
            top: 0;
            left: 100%;
            /* keluar ke kanan */
            background: #0f1528ff;
            min-width: 160px;
            padding: 10px 0;
            border-radius: 6px;
            z-index: 501;
        }

        .dropdown-submenu li a {
            padding: 10px 15px;
            display: block;
        }

        .dropdown-sub:hover .dropdown-submenu {
            display: block;
        }

        dl,
        ol,
        ul {
            margin-bottom: 0 !important;
        }


        nav ul {
            display: flex;
            list-style: none;
            gap: 30px;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            padding: 8px 0;
            position: relative;
        }

        nav a:hover {
            color: var(--primary-dark);
        }

      


        nav a:hover::after {
            width: 100%;
        }

        .mobile-menu {
            display: none;
            font-size: 1.5rem;
            cursor: pointer;
        }



        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(15, 23, 42, 0.85), rgba(15, 23, 42, 0.9)), url('https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=1500') center/cover no-repeat;
            height: 100vh;
            display: flex;
            align-items: center;
            color: white;
            text-align: center;
            padding-top: 70px;
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .hero p {
            font-size: 1.3rem;
            margin-bottom: 30px;
            opacity: 0.9;
        }

        .btn {
            display: inline-block;
            background: linear-gradient(135deg, var(--accent), var(--secondary));
            color: white;
            padding: 14px 32px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        }

        /* Section Styles */
        section {
            padding: 100px 0;
        }

        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-header h2 {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 20px;
            position: relative;
            display: inline-block;
        }

        .section-header h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 70px;
            height: 4px;
            background: var(--accent);
            border-radius: 2px;
        }

        .section-header p {
            max-width: 700px;
            margin: 20px auto 0;
            font-size: 1.1rem;
            color: var(--gray);
        }

        /* Card Grid */
        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .card-img {
            height: 200px;
            background-color: var(--accent);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            color: white;
        }

        .card-content {
            padding: 25px;
        }

        .card h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: var(--primary);
        }

        .card p {
            color: var(--gray);
            margin-bottom: 20px;
        }

        /* About Section */
        .about {
            background-color: white;
        }

        .about-content {
            display: flex;
            align-items: center;
            gap: 50px;
        }

        .about-text {
            flex: 1;
        }

        .about-text h2 {
            color: var(--primary);
            font-size: 2.5rem;
            margin-bottom: 25px;
        }

        .about-text p {
            margin-bottom: 20px;
            font-size: 1.1rem;
        }

        .about-features {
            margin-top: 30px;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .feature {
            display: flex;
            gap: 15px;
        }

        .feature i {
            color: var(--accent);
            font-size: 1.5rem;
            margin-top: 5px;
        }

        .feature h4 {
            margin-bottom: 5px;
            color: var(--primary);
        }

        .about-visual {

            position: relative;
            height: 40vh;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border-radius: 20px;
            display: flex;
            align-items: center;
            padding: 0 20px 0;
            color: white;
            font-size: 20px;
            font-weight: 200;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        @media screen {}

        /* Stats Section */
        .stats {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            text-align: center;
        }

        .stats-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
        }

        .stat-item {
            padding: 30px;
        }

        .stat-item i {
            font-size: 3rem;
            margin-bottom: 20px;
            color: rgba(255, 255, 255, 0.9);
        }

        .stat-item .number {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .stat-item .label {
            font-size: 1.2rem;
            opacity: 0.9;
        }

        /* Timeline */
        .timeline {
            position: relative;
            max-width: 800px;
            margin: 0 auto;
        }

        .timeline::after {
            content: '';
            position: absolute;
            width: 6px;
            background-color: var(--accent);
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -3px;
            border-radius: 3px;
        }

        .timeline-item {
            position: relative;
            width: 50%;
            padding: 20px 40px;
            margin-bottom: 50px;
        }

        .timeline-item:nth-child(odd) {
            left: 0;
        }

        .timeline-item:nth-child(even) {
            left: 50%;
        }

        .timeline-content {
            background: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .timeline-content::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            background: white;
            top: 30px;
            transform: rotate(45deg);
        }

        .timeline-item:nth-child(odd) .timeline-content::after {
            right: -10px;
        }

        .timeline-item:nth-child(even) .timeline-content::after {
            left: -10px;
        }

        .timeline-content h3 {
            color: var(--primary);
            margin-bottom: 10px;
        }

        .timeline-content .date {
            color: var(--accent);
            font-weight: 600;
            margin-bottom: 15px;
            display: block;
        }

        /* Footer */
        footer {
            background: var(--dark);
            color: white;
            padding: 70px 0 30px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 50px;
        }

        .footer-column h3 {
            font-size: 1.4rem;
            margin-bottom: 25px;
            position: relative;
            display: inline-block;
        }

        .footer-column h3::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 40px;
            height: 3px;
            background: var(--accent);
        }

        .footer-column p {
            color: #cbd5e1;
            margin-bottom: 20px;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 12px;
        }

        .footer-links a {
            color: #cbd5e1;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: var(--accent);
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            border-radius: 50%;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background: var(--accent);
            transform: translateY(-3px);
        }

        .copyright {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #94a3b8;
            font-size: 0.9rem;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .hero h1 {
                font-size: 3rem;
            }

            .about-content {
                flex-direction: column;
            }

            .about-visual {
                height: 13vh;
            }

            .timeline::after {
                left: 31px;
            }

            .timeline-item {
                width: 100%;
                padding-left: 70px;
                padding-right: 25px;
                left: 0 !important;
            }

            .timeline-item:nth-child(even) .timeline-content::after {
                left: -10px;
            }
        }

        @media (max-width: 768px) {
            .dropdown-submenu {
                position: absolute;
                left: 40%;
            }


            .hero h1 {
                font-size: 2.5rem;
            }

            .hero p {
                font-size: 1.1rem;
            }

            .m {
                position: absolute;
                top: 70%;
                right: 7%;
                background: #0f1528ff;
                min-width: 180px;
                flex-direction: column;
                visibility: hidden;
                gap: 1;
                padding: 10px 20px;
                border-radius: 6px;
                /* sembunyi */
                opacity: 0;
                transition: all 0.3s ease;

            }

            .m.show {
                visibility: visible;
                /* tampil */
                opacity: 1;
                /* penuh */
            }

            .mobile-menu {
                display: block;
            }

            .about-features {
                grid-template-columns: 1fr;
            }

            .section-header h2 {
                font-size: 2rem;
            }
        }

        @media (max-width: 576px) {
            .hero {
                height: 100vh;
            }

            .hero h1 {
                font-size: 2rem;
            }

            .section-header h2 {
                font-size: 1.8rem;
            }

            .card-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header>
        <div class="container header-container">
            <div class="logo">
                <i class="fas fa-laptop-code"></i>
                <div class="logo-text">RPL<span>Center</span></div>
            </div>
            <nav>
                <ul id="konten" class="m">
                    <li class="">
                        <a href="#home">Beranda</a>
                    </li>

                    <li class="dropdown">
                        <a href="#home">Tentang ▾</a>
                        <ul class="dropdown-content">
                            <li><a href="#">Tentang Kami</a></li>
                            <li><a href="#">Partner</a></li>
                            <li><a href="#">Tim Kami</a></li>
                            <li class="dropdown-sub">
                                <a href="#">Karir ▸</a>
                                <ul class="dropdown-submenu">
                                    <li><a href="#">Magang</a></li>
                                    <li><a href="#">Full-time</a></li>
                                    <li><a href="#">Freelance</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#materi">Galeri</a></li>
                    <li><a href="#proses">Proses</a></li>
                    <li><a href="#kontak">Kontak</a></li>
                </ul>
            </nav>

            <div id="btn" class="mobile-menu">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <div class="hero-content">
                <h1>Menguasai Seni Rekayasa Perangkat Lunak</h1>
                <p>Pelajari prinsip, metodologi, dan praktik terbaik dalam pengembangan perangkat lunak untuk
                    menciptakan solusi teknologi yang andal dan inovatif.</p>
                <a href="#materi" class="btn">Mulai Belajar</a>
            </div>
        </div>
    </section>

    <!-- Materi Section -->
    <section id="materi">
        <div class="container">
            <div class="section-header">
                <h2>Materi Utama</h2>
                <p>Pelajari konsep-konsep fundamental dalam rekayasa perangkat lunak yang akan membekali Anda dengan
                    pengetahuan untuk membangun sistem perangkat lunak berkualitas tinggi.</p>
            </div>
            <div class="card-grid">
                <div class="card">
                    <div class="card-img" style="background: linear-gradient(135deg, #0ea5e9, #8b5cf6);">
                        <i class="fas fa-sitemap"></i>
                    </div>
                    <div class="card-content">
                        <h3>Analisis Kebutuhan</h3>
                        <p>Identifikasi kebutuhan pengguna dan sistem untuk menentukan fitur dan fungsionalitas yang
                            harus disediakan oleh perangkat lunak.</p>
                        <a href="#" class="btn">Pelajari Lebih Lanjut</a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-img" style="background: linear-gradient(135deg, #8b5cf6, #ec4899);">
                        <i class="fas fa-drafting-compass"></i>
                    </div>
                    <div class="card-content">
                        <h3>Desain Arsitektur</h3>
                        <p>Membuat struktur sistem yang menentukan komponen, hubungan antar komponen, dan
                            prinsip-prinsip desain yang digunakan.</p>
                        <a href="#" class="btn">Pelajari Lebih Lanjut</a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-img" style="background: linear-gradient(135deg, #ec4899, #f59e0b);">
                        <i class="fas fa-code"></i>
                    </div>
                    <div class="card-content">
                        <h3>Implementasi & Pengujian</h3>
                        <p>Menerjemahkan desain menjadi kode yang berfungsi dan memastikan perangkat lunak bekerja
                            sesuai spesifikasi melalui berbagai teknik pengujian.</p>
                        <a href="#" class="btn">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about" id="about">
        <div class="container">
            <div class="about-content">
                <div class="about-text">
                    <h2>Apa Itu Rekayasa Perangkat Lunak?</h2>
                    <p>Rekayasa Perangkat Lunak (RPL) adalah disiplin ilmu yang menerapkan prinsip-prinsip rekayasa
                        untuk pengembangan perangkat lunak dengan tujuan menghasilkan produk yang dapat diandalkan,
                        efisien, dan efektif dalam memenuhi kebutuhan pengguna.</p>
                    <p>RPL mencakup penerapan pendekatan sistematis, disiplin, dan terukur terhadap pengembangan,
                        pengoperasian, dan pemeliharaan perangkat lunak.</p>

                    <div class="about-features">
                        <div class="feature">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <h4>Metodologi Terstruktur</h4>
                                <p>Pendekatan sistematis dalam pengembangan perangkat lunak</p>
                            </div>
                        </div>
                        <div class="feature">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <h4>Kualitas Terjamin</h4>
                                <p>Menghasilkan produk dengan kualitas tinggi dan andal</p>
                            </div>
                        </div>
                        <div class="feature">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <h4>Manajemen Proyek</h4>
                                <p>Perencanaan, pengawasan, dan kontrol pengembangan</p>
                            </div>
                        </div>
                        <div class="feature">
                            <i class="fas fa-check-circle"></i>
                            <div>
                                <h4>Dokumentasi Lengkap</h4>
                                <p>Pencatatan proses dan produk untuk pemeliharaan</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="about-visual">
                    <div class="visual-content">
                        <i class="fas fa-cogs"></i>
                        <h3>Software Engineering Lifecycle</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats">
        <div class="container">
            <div class="stats-container">
                <div class="stat-item">
                    <i class="fas fa-user-graduate"></i>
                    <div class="number">95%</div>
                    <div class="label">Tingkat Penyerapan Kerja</div>
                </div>
                <div class="stat-item">
                    <i class="fas fa-chart-line"></i>
                    <div class="number">30%</div>
                    <div class="label">Pertumbuhan Industri</div>
                </div>
                <div class="stat-item">
                    <i class="fas fa-laptop-code"></i>
                    <div class="number">500+</div>
                    <div class="label">Teknologi Terkini</div>
                </div>
                <div class="stat-item">
                    <i class="fas fa-globe"></i>
                    <div class="number">10K+</div>
                    <div class="label">Perusahaan Software</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Proses Section -->
    <section id="proses">
        <div class="container">
            <div class="section-header">
                <h2>Proses Pengembangan</h2>
                <p>Pahami tahapan-tahapan kritis dalam siklus hidup pengembangan perangkat lunak untuk memastikan
                    keberhasilan proyek.</p>
            </div>

            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-content">
                        <span class="date">Tahap 1</span>
                        <h3>Analisis Kebutuhan</h3>
                        <p>Mengumpulkan dan menganalisis kebutuhan stakeholder untuk menentukan apa yang harus dibangun.
                            Melibatkan wawancara, survei, dan studi kelayakan.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content">
                        <span class="date">Tahap 2</span>
                        <h3>Desain Sistem</h3>
                        <p>Membuat desain arsitektur, menentukan komponen sistem, antarmuka pengguna, dan struktur data.
                            Membuat blueprint untuk implementasi.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content">
                        <span class="date">Tahap 3</span>
                        <h3>Implementasi</h3>
                        <p>Menerjemahkan desain menjadi kode program. Pengembang menulis kode sesuai spesifikasi dengan
                            menggunakan bahasa pemrograman yang sesuai.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content">
                        <span class="date">Tahap 4</span>
                        <h3>Pengujian</h3>
                        <p>Melakukan berbagai jenis pengujian (unit, integrasi, sistem, penerimaan) untuk menemukan dan
                            memperbaiki bug sebelum rilis.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content">
                        <span class="date">Tahap 5</span>
                        <h3>Pemeliharaan</h3>
                        <p>Memperbaiki bug yang ditemukan setelah rilis, meningkatkan kinerja, dan menambahkan fitur
                            baru berdasarkan umpan balik pengguna.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="kontak">
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>RPL Center</h3>
                    <p>Platform pembelajaran Rekayasa Perangkat Lunak terkemuka yang menyediakan materi komprehensif dan
                        praktis untuk membangun karir di bidang pengembangan perangkat lunak.</p>
                    <div class="social-links">
                        <a href="{{ route('admin.dashboard') }}"><i class="fab fa-facebook-f"></i></a>
                        <a href="home.html"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <div class="footer-column">
                    <h3>Materi Belajar</h3>
                    <ul class="footer-links">
                        <li><a href="#">Analisis Kebutuhan</a></li>
                        <li><a href="#">Desain Arsitektur</a></li>
                        <li><a href="#">Pemrograman Lanjut</a></li>
                        <li><a href="#">Pengujian Perangkat Lunak</a></li>
                        <li><a href="#">Manajemen Proyek</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h3>Metodologi</h3>
                    <ul class="footer-links">
                        <li><a href="#">Waterfall</a></li>
                        <li><a href="#">Agile</a></li>
                        <li><a href="#">Scrum</a></li>
                        <li><a href="#">Kanban</a></li>
                        <li><a href="#">Extreme Programming</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h3>Kontak Kami</h3>
                    <ul class="footer-links">
                        <li><i class="fas fa-map-marker-alt"></i> Jl. Teknologi No. 123, Jakarta</li>
                        <li><i class="fas fa-phone"></i> (021) 555-0123</li>
                        <li><i class="fas fa-envelope"></i> info@rplcenter.id</li>
                        <li><i class="fas fa-clock"></i> Senin-Jumat: 9:00 - 17:00</li>
                    </ul>
                </div>
            </div>

            <div class="copyright">
                <p>&copy; 2025 RPL Center. Hak Cipta Dilindungi. Dibuat dengan ❤️ untuk pendidikan Rekayasa Perangkat
                    Lunak</p>
            </div>
        </div>
    </footer>

    <script>
        const btn = document.getElementById("btn");
        const menu = document.getElementById("konten");
        const home = document.getElementById("home")
        // Toggle buka/tutup saat klik tombol
        btn.addEventListener("click", (e) => {
            e.stopPropagation(); // supaya klik di tombol tidak dianggap klik "luar"
            menu.classList.toggle("show");
        });

        // Tutup menu jika klik di luar menu dan tombol
        document.addEventListener("click", (e) => {
            if (!menu.contains(e.target) && !btn.contains(e.target)) {
                menu.classList.remove("show");
            }
        });

        // Smooth scrolling untuk anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);

                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Animasi saat scroll
        document.addEventListener('DOMContentLoaded', function () {
            const observerOptions = {
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, observerOptions);

            // Tambahkan kelas ke elemen yang ingin dianimasikan
            document.querySelectorAll('.card, .about-visual, .stat-item, .timeline-item').forEach(el => {
                el.classList.add('animate-on-scroll');
                observer.observe(el);
            });

            // Tambahkan style untuk animasi
            const style = document.createElement('style');
            style.textContent = `
                .animate-on-scroll {
                    opacity: 0;
                    transform: translateY(30px);
                    transition: opacity 0.6s ease-out, transform 0.6s ease-out;
                }
                
                .animate-on-scroll.visible {
                    opacity: 1;
                    transform: translateY(0);
                }
                
                .timeline-item:nth-child(odd) { transition-delay: 0.1s; }
                .timeline-item:nth-child(even) { transition-delay: 0.2s; }
            `;
            document.head.appendChild(style);
        });
    </script>
</body>

</html>