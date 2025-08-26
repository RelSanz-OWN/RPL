<!DOCTYPE html>
<html lang="en">
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
            color: #ffd43b;
        }




        nav a:hover::after {
            width: 100%;
        }

        .mobile-menu {
            display: none;
            font-size: 1.5rem;
            cursor: pointer;
        }

        .view {
            background-image: linear-gradient(rgba(15, 23, 42, 0.85), rgba(15, 23, 42, 0.9)), url('https://ids.ac.id/wp-content/uploads/2023/01/5-1024x576.jpg');
            display: flex;
            height: 58vh;
            align-items: center;
            padding-top: 70px;
            color: white;
        }

        .view {
            text-align: center;
            justify-content: center;
        }

        .batas{
            background: white;
            display: flex;
            height: 80vh;
            align-items: center;

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
     <header>
        <div class="container header-container">
            <div class="logo">
                <i class="fas fa-laptop-code"></i>
                <div class="logo-text">RPL<span>Center</span></div>
            </div>
            <nav>
                <ul id="konten" class="m">
                    <li class="">
                        <a href="{{ route('pages.home') }}">Beranda</a>
                    </li>

                    <li class="dropdown">
                        <a href="#home">Tentang ▾</a>
                        <ul class="dropdown-content">
                            <li><a href="#tentang">Tentang Kami</a></li>
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
    
</body>
</html>