<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>HeyOne - Solusi Digital untuk Klinik Hewan Anda</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="HeyOne, klinik hewan, pet clinic, veterinary, CAATIS" name="keywords">
    <meta content="Platform digital terpadu untuk manajemen klinik hewan dan pet shop" name="description">

    <!-- Favicon -->
    <link href="{{ asset('assets/img/favicon.ico') }}" rel="icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;700&family=Work+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- Icon Font -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries -->
    <link href="{{ asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    
    <!-- Leaflet Maps -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

    <!-- Bootstrap -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-xl navbar-dark px-lg-5 py-3 sticky-top" id="mainNav">
        <div class="container-fluid">
            <a href="#home" class="navbar-brand ms-4 ms-lg-0">
                <h2 class="mb-0 text-primary text-uppercase">
                    <i class="fas fa-paw me-2"></i>HeyOne
                </h2>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto p-4 p-lg-0">
                    <a href="#home" class="nav-item nav-link active">Home</a>
                    <a href="#about" class="nav-item nav-link">About</a>
                    <a href="#feature" class="nav-item nav-link">Features</a>
                    <a href="#stats" class="nav-item nav-link">Stats</a>
                    <a href="#map" class="nav-item nav-link">Our Clinics</a>
                    <a href="#prices" class="nav-item nav-link">Prices</a>
                    <a href="#contact" class="nav-item nav-link">Contact</a>
                </div>
                <div class="d-none d-xl-flex">
                    <a class="btn btn-outline-primary border-2" style="margin-right: 0.5rem;" href="https://caatis.telkomuniversity.ac.id/" target="_blank">
                        Visit CAATIS
                    </a>
                    <div class="dropdown">
                        <a class="btn btn-outline-primary border-2 dropdown-toggle"
                           href="#"
                           id="registrasiDropdown"
                           role="button"
                           data-bs-toggle="dropdown"
                           aria-expanded="false">
                            Registrasi
                        </a>
                    
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="registrasiDropdown">
                            <li>
                                <a class="dropdown-item" href="http://127.0.0.1:8001" target="_blank">
                                    Registrasi Customer
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="http://127.0.0.1:8002" target="_blank">
                                    Registrasi Clinic
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Mobile-only nav buttons -->
                <div class="d-xl-none px-4 pb-3 d-flex flex-column gap-2">
                    <a class="btn btn-outline-primary border-2 w-100" href="https://caatis.telkomuniversity.ac.id/" target="_blank">
                        Visit CAATIS
                    </a>
                    <a class="btn btn-outline-primary border-2 w-100" href="http://127.0.0.1:8001" target="_blank">
                        Registrasi Customer
                    </a>
                    <a class="btn btn-outline-primary border-2 w-100" href="http://127.0.0.1:8002" target="_blank">
                        Registrasi Clinic
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Hero Section Start -->
    <section id="home" class="p-0">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('assets/img/carousel-1.jpg') }}" alt="HeyOne Hero">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="title mx-2 mx-md-5 px-2 px-md-5 animated slideInDown">
                            <div class="title-center">
                                <h5 class="text-white">Welcome to HeyOne</h5>
                                <h1 class="display-1 text-white">Solusi Digital Klinik Hewan</h1>
                            </div>
                        </div>
                        <p class="fs-5 mb-5 text-white animated slideInDown px-3">
                            Platform terpadu untuk manajemen klinik hewan profesional.<br class="d-none d-md-inline">
                            Kelola pasien, jadwal, transaksi, dan rekam medis dengan mudah.
                        </p>
                        <div class="animated slideInDown d-flex flex-wrap justify-content-center gap-2">
                            <a href="#about" class="btn btn-primary border-2 py-3 px-5">Pelajari Lebih Lanjut</a>
                            <a href="#contact" class="btn btn-outline-light border-2 py-3 px-5">Hubungi Kami</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('assets/img/carousel-2.jpg') }}" alt="HeyOne Features">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="title mx-2 mx-md-5 px-2 px-md-5 animated slideInDown">
                            <div class="title-center">
                                <h5 class="text-white">Trusted by Clinics</h5>
                                <h1 class="display-1 text-white">Mudah, Cepat, Terpercaya</h1>
                            </div>
                        </div>
                        <p class="fs-5 mb-5 text-white animated slideInDown px-3">
                            Bergabunglah dengan klinik-klinik terpercaya yang telah menggunakan HeyOne.<br class="d-none d-md-inline">
                            Tingkatkan efisiensi dan kualitas layanan Anda hari ini.
                        </p>
                        <div class="animated slideInDown">
                            <a href="#map" class="btn btn-primary border-2 py-3 px-5">Lihat Klinik Kami</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- About Section Start -->
    <section id="about" class="container-fluid py-3">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-7 pb-0 pb-lg-5">
                    <div class="pb-0 pb-lg-5">
                        <div class="title wow fadeInUp" data-wow-delay="0.1s">
                            <div class="title-left">
                                <h5>Tentang Kami</h5>
                                <h1>Apa itu HeyOne?</h1>
                            </div>
                        </div>
                        <p class="mb-4 wow fadeInUp" data-wow-delay="0.2s" style="font-size: 18px; color: #555; line-height: 1.6; margin-bottom: 40px; text-align: justify;">
                          <strong style="color: #00596d;">HeyOne</strong> adalah platform digital yang membantu klinik hewan, dokter,
                          dan pemilik hewan peliharaan dalam mencatat data kesehatan hewan, memantau jadwal perawatan,
                          serta mengelola informasi pemilik dan pasien dengan mudah. HeyOne memiliki total
                           <strong style="color: #00596d;">{{ $totalClinics }} klinik</strong> terdaftar, dan terdapat <strong style="color: #00596d;">{{ $totalDoctors }} dokter hewan</strong> yang siap melayani 
                           kebutuhan kesehatan hewan peliharaan Anda. HeyOne juga sudah memiliki total <strong style="color: #00596d;">{{ $totalCustomers }} pengguna</strong> terdaftar dan
                           <strong style="color: #00596d;">{{ $totalPets }} hewan peliharaan</strong> yang telah ditangani dengan penuh kasih sayang. Dari sisi klinik, HeyOne memberikan solusi lengkap untuk manajemen data pelanggan, jadwal praktek dokter, 
                           rekam medis digital, hingga transaksi pembayaran yang terintegrasi.
                        </p>

                        <p class="mb-4 wow fadeInUp" data-wow-delay="0.3s">
                        </p>
                        <ul class="list-group list-group-flush mb-5 wow fadeInUp" data-wow-delay="0.4s">
                            <li class="list-group-item bg-transparent text-body border-secondary ps-0">
                                <i class="fa fa-check-circle text-primary me-2"></i>
                                <strong>Digital System</strong> - Tidak perlu lagi spreadsheet manual
                            </li>
                            <li class="list-group-item bg-transparent text-body border-secondary ps-0">
                                <i class="fa fa-check-circle text-primary me-2"></i>
                                <strong>Tracking Transaksi</strong> - Daftar transaksi terorganisir dengan rapi
                            </li>
                            <li class="list-group-item bg-transparent text-body border-secondary ps-0">
                                <i class="fa fa-check-circle text-primary me-2"></i>
                                <strong>Multi-Cabang</strong> - Kelola banyak cabang klinik dalam 1 sistem
                            </li>
                            <li class="list-group-item bg-transparent text-body border-secondary ps-0">
                                <i class="fa fa-check-circle text-primary me-2"></i>
                                <strong>Rekam Medis Digital</strong> - History vaksinasi dan pemeriksaan lengkap
                            </li>
                        </ul>
                        <div class="row wow fadeInUp" data-wow-delay="0.5s">
                            <div class="col-md-6 mb-3">
                                <a href="#contact" class="btn btn-primary py-3 w-100">Request Demo</a>
                            </div>
                            <div class="col-md-6 mb-3">
                                <a href="https://caatis.telkomuniversity.ac.id/" target="_blank" class="btn btn-outline-primary border-2 py-3 w-100">
                                    About CAATIS
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.6s">
                    <img class="img-fluid rounded" src="{{ asset('assets/img/about.png') }}" alt="About HeyOne">
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Feature Start -->
<section id="feature">
    <div class="container-fluid feature py-5">
        <div class="container py-5">

            {{-- Heading --}}
            <div class="text-center mb-5">
                <div class="title wow fadeInUp" data-wow-delay="0.1s">
                    <div class="title-center">
                        <h5>Our Fiture</h5>
                        <h1>Fitur Utama HeyOne</h1>
                    </div>
                </div>
                <p class="text-muted">
                    Fitur-Fitur yang disediakan oleh HeyOne demi kenyamanan Anda
                </p>
            </div>

            {{-- Fitur 1 - kiri (icon kiri, teks kanan) --}}
            <div class="service-item service-item-left mb-4">
                <div class="row g-0 align-items-center">
                    <div class="col-lg-3">
                        <div class="service-img p-5 wow fadeInRight" data-wow-delay="0.2s">
                            <div class="feature-circle d-flex align-items-center justify-content-center">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="service-text px-5 px-lg-0 py-lg-5 wow fadeInRight" data-wow-delay="0.5s">
                            <h3 class="mb-3">Manajemen Data Pelanggan</h3>
                            <p class="feature-desc mb-0">
                                HeyONE membantu klinik menyimpan data pemilik hewan dan hewan peliharaan dalam satu profil terstruktur,
                                mulai dari identitas, kontak, hingga riwayat kunjungan dan lokasi. Dengan data yang rapi, staff tidak perlu
                                mencari manual dan pelayanan ke pelanggan bisa lebih cepat dan konsisten.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Fitur 2 - kanan (icon kanan, teks kiri) --}}
            <div class="service-item service-item-right mb-4">
                <div class="row g-0 align-items-center">
                    <div class="col-lg-3 order-lg-1 text-lg-end">
                        <div class="service-img p-5 wow fadeInLeft" data-wow-delay="0.2s">
                            <div class="feature-circle d-flex align-items-center justify-content-center">
                                <i class="fas fa-calendar-check"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="service-text px-5 px-lg-0 py-lg-5 text-lg-end wow fadeInLeft" data-wow-delay="0.5s">
                            <h3 class="mb-3">Manajemen Jadwal &amp; Appointment</h3>
                            <p class="feature-desc mb-0">
                                Dokter dan staff dapat mengatur jadwal praktik, menerima booking appointment online,
                                serta meng-enroll dokter ke cabang klinik tertentu. Jadwal yang tersinkron otomatis
                                membantu mengurangi bentrok jadwal dan memudahkan pelanggan memilih waktu yang paling sesuai.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Fitur 3 - kiri --}}
            <div class="service-item service-item-left mb-4">
                <div class="row g-0 align-items-center">
                    <div class="col-lg-3">
                        <div class="service-img p-5 wow fadeInRight" data-wow-delay="0.2s">
                            <div class="feature-circle d-flex align-items-center justify-content-center">
                                <i class="fas fa-file-medical"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="service-text px-5 px-lg-0 py-lg-5 wow fadeInRight" data-wow-delay="0.5s">
                            <h3 class="mb-3">Manajemen Transaksi</h3>
                            <p class="feature-desc mb-0">
                                Setiap kunjungan tercatat sebagai rekam medis digital lengkap dengan riwayat vaksinasi, tindakan,
                                dan transaksi pembayaran baik per item maupun total. Laporan keuangan dan riwayat perawatan dapat
                                dipantau dengan rapi sehingga keputusan klinik bisa diambil berdasarkan data yang jelas.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Fitur 4 - kanan --}}
            <div class="service-item service-item-right mb-4">
                <div class="row g-0 align-items-center">
                    <div class="col-lg-3 order-lg-1 text-lg-end">
                        <div class="service-img p-5 wow fadeInLeft" data-wow-delay="0.2s">
                            <div class="feature-circle d-flex align-items-center justify-content-center">
                                <i class="fas fa-clinic-medical"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="service-text px-5 px-lg-0 py-lg-5 text-lg-end wow fadeInLeft" data-wow-delay="0.5s">
                            <h3 class="mb-3">Multi-Klinik Support</h3>
                            <p class="feature-desc mb-0">
                                HeyONE mendukung banyak cabang klinik dalam satu sistem terpusat, sehingga pemilik usaha dapat
                                memantau performa tiap cabang tanpa perlu berpindah aplikasi. Penempatan dokter ke klinik tertentu
                                juga dapat diatur dengan mudah sehingga operasional antar cabang tetap terkontrol.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Feature End -->

    <!-- Statistics Section Start -->
    <section id="stats" class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <div class="title wow fadeInUp" data-wow-delay="0.1s">
                    <div class="title-center">
                        <h5>Our Impact</h5>
                        <h1>HeyOne dalam Angka</h1>
                    </div>
                </div>
                <p class="text-muted">Kepercayaan dari pengguna adalah prioritas kami</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="stats-item text-center">
                        <i class="fas fa-hospital fa-3x mb-3 text-white"></i>
                        <h2 class="counter" data-target="{{ $totalClinics }}">0</h2>
                        <p class="text-uppercase">Klinik Terdaftar</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="stats-item text-center">
                        <i class="fas fa-user-doctor fa-3x mb-3 text-white"></i>
                        <h2 class="counter" data-target="{{ $totalDoctors }}">0</h2>
                        <p class="text-uppercase">Dokter Hewan</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="stats-item text-center">
                        <i class="fas fa-users fa-3x mb-3 text-white"></i>
                        <h2 class="counter" data-target="{{ $totalCustomers }}">0</h2>
                        <p class="text-uppercase">Pelanggan Aktif</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="stats-item text-center">
                        <i class="fas fa-paw fa-3x mb-3 text-white"></i>
                        <h2 class="counter" data-target="{{ $totalPets }}">0</h2>
                        <p class="text-uppercase">Hewan Terdaftar</p>
                    </div>
                </div>
                <!-- <div class="container py-3">
                    <div class="alert alert-warning">
                        <strong>Debug Info:</strong><br>
                        Total Pets dari Controller: {{ $totalPets }}<br>
                        Jumlah array pets: {{ count($pets) }}<br>
                        Data Pets: <pre>{{ print_r($pets, true) }}</pre>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- Statistics Section End -->

    <!-- Clinics Map Section Start -->
    <section id="map" class="container-fluid py-5">
        <div class="container py-5">
            <!-- <div class="text-center mb-5">
                <div class="title wow fadeInUp" data-wow-delay="0.1s">
                    <div class="title-center">
                        <h5>Our Partners</h5>
                        <h1>Klinik yang Menggunakan HeyOne</h1>
                    </div>
                </div>
                <p class="text-muted">Temukan klinik hewan terpercaya di dekat Anda yang telah menggunakan HeyOne</p>
            </div> -->
            <div class="wow fadeInUp" data-wow-delay="0.3s">
                <div id="map"></div>
            </div>
        </div>
    </section>
    <!-- Clinics Map Section End -->

    <!-- CAATIS / Team Start -->
    <!-- <section id="caatis">
        <div class="container-fluid about-caatis py-5">
            <div class="container py-5">

                <div class="text-center mb-5">
                    <div class="title wow fadeInUp" data-wow-delay="0.1s">
                        <div class="title-center">
                            <h5>Our Team</h5>
                            <h1>Tentang CAATIS</h1>
                        </div>
                    </div>
                </div>
                <div class="row g-4 align-items-center"> -->
                    <!-- Kartu Logo CAATIS -->
                    <!-- <div class="col-lg-5">
                        <div class="about-caatis-card text-center text-lg-start">
                            <div class="about-caatis-logo-wrapper mx-auto mx-lg-0 mb-3">
                                {{-- ganti path logo sesuai file-mu --}}
                                <img src="{{ asset('assets/img/logo-caatis.png') }}" alt="Logo CAATIS" class="img-fluid">
                            </div>
                            
                            <strong>
                                <p class="about-caatis-tag mb-1">
                                    Center of Excellence – Technological Society
                                </p>
                                <p class="about-caatis-subtag mb-0">
                                    Telkom University
                                </p>
                            </strong>
                        </div>
                    </div> -->

                    <!-- Deskripsi CAATIS -->
                    <!-- <div class="col-lg-7">
                        <h1 class="display-5 mb-3" style="color: #01aed6;">CAATIS sebagai Rumah Inovasi HeyOne</h1>

                        <p class="mb-4" style="color:black; text-align: justify;">
                            CAATIS (Center of Excellence – Technological Society) resmi berdiri pada 21 Desember 2022
                            dan menghimpun peneliti dari tujuh fakultas di Telkom University untuk mendorong inovasi lintas
                            disiplin. CAATIS mengelola laboratorium inovasi untuk riset, diskusi, pengukuran, dan kajian produk,
                            laboratorium implementasi untuk penerapan dan pemanfaatan produk yang telah dikembangkan,
                            memfasilitasi program pertukaran mahasiswa, serta menangani berbagai proyek eksternal bersama mitra
                            industri dan institusi akademik.
                        </p>

                        <div class="about-caatis-cta">
                            <a href="https://caatis.telkomuniversity.ac.id/" target="_blank" rel="noopener"
                            class="btn btn-outline-primary about-caatis-btn">
                                Kunjungi Website CAATIS
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- CAATIS / Team End -->

    <!-- Pricing Start -->
    <section id="prices">
        <div class="container-fluid pricing-section py-5" style="background: #01aed6;">
            <div class="container py-5">

                <div class="text-center mb-5">
                    <div class="title white wow fadeInUp" data-wow-delay="0.1s">
                        <div class="title-center">
                            <h5 class="text-white">Our Prices</h5>
                            <h1 class="text-white">Paket HeyOne untuk Klinik Hewan</h1>
                        </div>
                    </div>
                    <p class="text-white">Pilih paket sesuai kebutuhan klinikmu. Semua paket sudah termasuk update & dukungan sistem.</p>
                </div>

                <div class="row g-4 align-items-stretch">
                    <!-- Starter -->
                    <div class="col-md-6 col-lg-4">
                        <div class="pricing-card h-100">
                            <span class="pricing-badge">Starter</span>
                            <div class="pricing-icon mb-3">
                                <i class="fas fa-paw"></i>
                            </div>
                            <h3 class="mb-1">Starter Clinic</h3>
                            <p class="pricing-tagline">Untuk klinik kecil yang baru go-digital.</p>

                            <div class="pricing-price">
                                <span class="currency">Rp</span>
                                <span class="amount">149.000</span>
                                <span class="period">/bulan</span>
                            </div>

                            <ul class="pricing-features">
                                <li>1 klinik</li>
                                <li>Maksimal 2 dokter</li>
                                <li>Manajemen customer & hewan</li>
                                <li>Jadwal & appointment basic</li>
                            </ul>

                            <a href="#" class="btn btn-outline-primary w-100">
                                Pilih Paket Ini
                            </a>
                        </div>
                    </div>

                    <!-- Growth (Popular) -->
                    <div class="col-md-6 col-lg-4">
                        <div class="pricing-card popular h-100">
                            <span class="pricing-badge badge-popular">Paling Populer</span>
                            <div class="pricing-icon mb-3">
                                <i class="fas fa-clinic-medical"></i>
                            </div>
                            <h3 class="mb-1">Growth Clinic</h3>
                            <p class="pricing-tagline">Untuk klinik dengan beberapa dokter atau cabang.</p>

                            <div class="pricing-price">
                                <span class="currency">Rp</span>
                                <span class="amount">299.000</span>
                                <span class="period">/bulan</span>
                            </div>

                            <ul class="pricing-features">
                                <li>Hingga 3 klinik</li>
                                <li>Maksimal 8 dokter</li>
                                <li>Appointment online & rekam medis digital</li>
                                <li>History vaksinasi & transaksi pembayaran</li>
                                <li>Support pengingat via WhatsApp*</li>
                            </ul>

                            <a href="#" class="btn btn-primary w-100">
                                Pilih Paket Growth
                            </a>
                        </div>
                    </div>

                    <!-- Enterprise -->
                    <div class="col-md-6 col-lg-4">
                        <div class="pricing-card h-100">
                            <span class="pricing-badge">Enterprise</span>
                            <div class="pricing-icon mb-3">
                                <i class="fas fa-crown"></i>
                            </div>
                            <h3 class="mb-1">Enterprise Clinic</h3>
                            <p class="pricing-tagline">Untuk grup klinik besar yang butuh fleksibilitas penuh.</p>

                            <div class="pricing-price">
                                <span class="currency">Rp</span>
                                <span class="amount">599.000</span>
                                <span class="period">/bulan</span>
                            </div>

                            <ul class="pricing-features">
                                <li>Klinik & dokter tanpa batas*</li>
                                <li>Semua fitur HeyOne</li>
                                <li>Prioritas support</li>
                                <li>Pendampingan setup & training awal</li>
                            </ul>

                            <a href="#" class="btn btn-outline-primary w-100">
                                Hubungi Sales
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Pricing End -->
    
<!-- CTA Buttons Section Start -->
<section id="cta-buttons" class="py-5" style="background: #f0fbff;">
    <div class="container py-3">
        <div class="text-center mb-4 wow fadeInUp" data-wow-delay="0.1s">
            <h2 style="color: #01aed6;">Mulai Gunakan HeyOne Sekarang</h2>
            <p class="text-muted">Pilih aksi yang sesuai dengan kebutuhanmu</p>
        </div>
        <div class="row g-3 justify-content-center wow fadeInUp" data-wow-delay="0.2s">
            <div class="col-12 col-sm-10 col-md-4">
                <a href="#" class="btn-cta-custom btn-cta-solid w-100">
                    <i class="fas fa-download me-2"></i>Download Aplikasi untuk Dokter
                </a>
            </div>
            <div class="col-12 col-sm-10 col-md-4">
                <a href="http://127.0.0.1:8001/register" target="_blank" class="btn-cta-custom btn-cta-outline w-100">
                    <i class="fas fa-user-plus me-2"></i>Registrasi Customer
                </a>
            </div>
            <div class="col-12 col-sm-10 col-md-4">
                <a href="http://127.0.0.1:8001/" target="_blank" class="btn-cta-custom btn-cta-outline w-100">
                    <i class="fas fa-sign-in-alt me-2"></i>Login Customer
                </a>
            </div>
        </div>
    </div>
</section>
<!-- CTA Buttons Section End -->

    <!-- Contact/CTA Section Start -->
    <section id="contact" class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="title">
                        <div class="title-left">
                            <h5>Contact Us</h5>
                            <h1>Tertarik Menggunakan HeyOne?</h1>
                        </div>
                    </div>
                    <p class="mb-4" style="color: #01aed6;">
                        Kami siap membantu Anda meningkatkan kualitas layanan klinik hewan dengan sistem digital terpadu. 
                        Hubungi kami untuk demo gratis atau konsultasi.
                    </p>
                    <div class="bg-white p-4 rounded shadow">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-envelope fa-2x text-primary me-3"></i>
                            <div>
                                <h6 class="mb-0">Email</h6>
                                <p class="mb-0 text-muted"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="89e1ecf0e6e7ecc9eae8e8fde0faa7e0ed">[email&#160;protected]</a></p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-phone fa-2x text-primary me-3"></i>
                            <div>
                                <h6 class="mb-0">Phone</h6>
                                <p class="mb-0 text-muted">+62 812-3456-7890</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-map-marker-alt fa-2x text-primary me-3"></i>
                            <div>
                                <h6 class="mb-0">Address</h6>
                                <a href="https://maps.app.goo.gl/Bu3kS3unbbmLq6XV9" target="_blank" class="text-primary">
                                    Telkom University, Bandung, Indonesia
                                </a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-globe fa-2x text-primary me-3"></i>
                            <div>
                                <h6 class="mb-0">Website</h6>
                                <a href="https://caatis.telkomuniversity.ac.id/" target="_blank" class="text-primary">
                                    caatis.telkomuniversity.ac.id
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-white p-5 rounded shadow">
                        <h4 class="mb-4 text-primary">Kontak Informasi</h4>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Nama Anda">
                                        <label for="name">Nama Anda</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Email">
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="clinic" placeholder="Nama Klinik">
                                        <label for="clinic">Nama Klinik (Opsional)</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Pesan Anda" id="message" style="height: 150px"></textarea>
                                        <label for="message">Pesan Anda</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">
                                        <i class="fas fa-paper-plane me-2"></i>Kirim Pesan
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact/CTA Section End -->

    <!-- Footer Start -->
    <footer class="footer py-5">
        <div class="container text-center py-5">
            <a href="#home">
                <h1 class="display-4 mb-3 text-white text-uppercase">
                    <i class="fas fa-paw me-2"></i>HeyOne
                </h1>
            </a>
            <p class="text-white mb-4">
                Solusi Digital Terpadu untuk Klinik Hewan Modern
            </p>
            <div class="d-flex justify-content-center mb-4">
                <a class="btn btn-lg-square btn-outline-light border-2 m-1" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-lg-square btn-outline-light border-2 m-1" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-lg-square btn-outline-light border-2 m-1" href="#"><i class="fab fa-instagram"></i></a>
                <a class="btn btn-lg-square btn-outline-light border-2 m-1" href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <p class="text-white-50 mb-2">&copy; 2024 HeyOne. All Rights Reserved.</p>
            <p class="text-white-50 mb-0">
                Developed by <a class="text-white" href="https://caatis.telkomuniversity.ac.id/" target="_blank">CAATIS Telkom University</a>
            </p>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary border-2 btn-lg-square back-to-top">
        <i class="bi bi-arrow-up"></i>
    </a>

    <!-- JavaScript Libraries -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    
    <!-- Leaflet Maps -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Custom Scripts -->
    <script>
        // Counter Animation
        document.addEventListener('DOMContentLoaded', function() {
            const counters = document.querySelectorAll('.counter');
            const speed = 200;

            counters.forEach(counter => {
                const updateCount = () => {
                    const target = +counter.getAttribute('data-target');
                    const count = +counter.innerText;
                    const inc = target / speed;

                    if (count < target) {
                        counter.innerText = Math.ceil(count + inc);
                        setTimeout(updateCount, 1);
                    } else {
                        counter.innerText = target;
                    }
                };
                updateCount();
            });
        });

        // Leaflet Map - Static Map (No Zoom, No Drag)
document.addEventListener('DOMContentLoaded', function() {
    var clinics = @json($clinics ?? []);
    console.log("Total clinics:", clinics.length);

    // Bounds Kota Bandung + Kabupaten Bandung
    var bandungBounds = L.latLngBounds(
        L.latLng(-7.2500, 107.3500), // SW corner (Kabupaten Bandung Selatan)
        L.latLng(-6.7500, 107.9000)  // NE corner (Kabupaten Bandung Utara)
    );
    
    // Initialize map centered on Bandung with ALL interactions disabled
    var map = L.map('map', {
        center: [-6.914744, 107.609810], // Center of Bandung
        zoom: 13, // Zoom level 11 untuk cover Kota & Kabupaten Bandung
        minZoom: 13,
        maxZoom: 13,
        maxBounds: bandungBounds,
        maxBoundsViscosity: 1.0,
        zoomControl: false,      // Disable zoom buttons
        dragging: false,         // Disable dragging
        touchZoom: false,        // Disable touch zoom
        doubleClickZoom: false,  // Disable double click zoom
        scrollWheelZoom: false,  // Disable scroll wheel zoom
        boxZoom: false,          // Disable box zoom
        keyboard: false,         // Disable keyboard navigation
        tap: false               // Disable tap
    });

    // Add tile layer
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {     
        maxZoom: 19,
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    // Custom icon menggunakan CDN Leaflet resmi agar tidak hilang
    var clinicIcon = L.icon({
        iconUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/images/marker-icon.png',
        iconRetinaUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/images/marker-icon-2x.png',
        shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/images/marker-shadow.png',
        iconSize: [25, 41],
        iconAnchor: [12, 41],
        popupAnchor: [1, -34],
        shadowSize: [41, 41]
    });

    // Add markers for each clinic
    clinics.forEach(function(clinic) {
        if (clinic.latitude && clinic.longitude) {
            // Build popup content
            var logoHtml = '';
            if (clinic.clinic_logo_url) {
                logoHtml = `<img src="${clinic.clinic_logo_url}" 
                                alt="${clinic.name}" 
                                class="clinic-logo" 
                                onerror="this.style.display='none'">`;
            }
            
            var popupContent = `
                <div class="clinic-popup">
                    ${logoHtml}
                    <h6>${clinic.name || 'Nama tidak tersedia'}</h6>
                    <p><i class="fas fa-map-marker-alt text-primary"></i> ${clinic.address || 'Alamat tidak tersedia'}</p>
                    ${clinic.contact ? `<p><i class="fas fa-phone text-primary"></i> ${clinic.contact}</p>` : ''}
                    ${clinic.email ? `<p><i class="fas fa-envelope text-primary"></i> ${clinic.email}</p>` : ''}
                </div>
            `;
            
            L.marker([clinic.latitude, clinic.longitude], { icon: clinicIcon })
                .addTo(map)
                .bindPopup(popupContent, {
                    maxWidth: 300,
                    minWidth: 200,
                    className: 'custom-popup'
                });
        }
    });
});
    </script>
</body>
</html>