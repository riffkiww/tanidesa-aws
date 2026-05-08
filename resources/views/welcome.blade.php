<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Resmi Desa TaniMakmur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    
    <style>
        /* Desain untuk Banner Utama (Hero Section) */
        .hero-section {
            /* Menggunakan gambar pemandangan sawah/desa dari Unsplash */
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1596423735880-5c6fa2cb46e0?q=80&w=1920&auto=format&fit=crop') no-repeat center center;
            background-size: cover;
            color: white;
            padding: 120px 0;
        }
        .feature-icon {
            font-size: 2.5rem;
            color: #198754;
        }
    </style>
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-success sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">🌾 Desa TaniMakmur</a>
            <span class="navbar-text text-light d-none d-md-block">
                Sistem Informasi & Pelayanan Publik
            </span>
        </div>
    </nav>

    <section class="hero-section text-center shadow">
        <div class="container">
            <h1 class="display-4 fw-bold mb-3">Selamat Datang di Portal Desa TaniMakmur</h1>
            <p class="lead mb-4">Mewujudkan Desa Digital yang Mandiri, Sejahtera, dan Berwawasan Lingkungan melalui Inovasi Teknologi.</p>
            <a href="#layanan" class="btn btn-warning btn-lg fw-bold px-4 rounded-pill shadow-sm">Jelajahi Layanan Kami</a>
        </div>
    </section>

    <section class="container mt-5 pt-4">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4">
                <h2 class="fw-bold mb-3">Mengenal TaniMakmur</h2>
                <p class="text-muted" style="text-align: justify;">
                    Desa TaniMakmur adalah pelopor percontohan <strong>"Smart Village"</strong> yang memadukan kearifan lokal sektor pertanian dengan kecanggihan teknologi informasi. Berada di dataran tinggi yang sejuk dan subur, mayoritas warga kami adalah pahlawan pangan yang kini terhubung secara digital. Melalui portal <strong>TaniDesa</strong> ini, kami berkomitmen memberikan pelayanan prima tanpa birokrasi yang rumit.
                </p>
                <div class="row mt-4">
                    <div class="col-6">
                        <h5 class="fw-bold"><i class="bi bi-cloud-check text-success"></i> Berbasis Cloud</h5>
                        <p class="small text-muted">Infrastruktur arsip desa didukung oleh teknologi komputasi awan yang terjamin keamanannya.</p>
                    </div>
                    <div class="col-6">
                        <h5 class="fw-bold"><i class="bi bi-stopwatch text-success"></i> Cepat & Transparan</h5>
                        <p class="small text-muted">Pengajuan surat dan pelaporan warga diproses secara real-time dan dapat dilacak kapan saja.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 text-center">
                <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?q=80&w=800&auto=format&fit=crop" alt="Pemandangan Desa" class="img-fluid rounded-4 shadow-lg border border-4 border-white">
            </div>
        </div>
    </section>

    <section id="layanan" class="bg-white py-5 mt-5 border-top">
        <div class="container text-center">
            <h2 class="fw-bold mb-2">Layanan Elektronik (E-Desa)</h2>
            <p class="text-muted mb-5">Pilih layanan mandiri yang Anda butuhkan hari ini.</p>

            <div class="row justify-content-center gap-4">
                <div class="col-md-3">
                    <div class="card shadow p-4 h-100 border-0 rounded-4 bg-light text-center transition-hover">
                        <i class="bi bi-file-earmark-text feature-icon mb-3 text-primary"></i>
                        <h5 class="fw-bold">Pengajuan Surat</h5>
                        <p class="text-muted small">Urus Surat Domisili, Usaha, dan lainnya langsung dari rumah tanpa antre.</p>
                        <a href="/pengajuan" class="btn btn-outline-primary mt-auto rounded-pill">Ajukan Sekarang</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow p-4 h-100 border-0 rounded-4 bg-light text-center">
                        <i class="bi bi-cone-striped feature-icon mb-3 text-danger"></i>
                        <h5 class="fw-bold">Lapor Fasilitas</h5>
                        <p class="text-muted small">Temukan jalan berlubang atau irigasi mampet? Laporkan beserta bukti fotonya.</p>
                        <a href="/pengaduan" class="btn btn-danger mt-auto rounded-pill shadow-sm">Buat Laporan</a> 
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow p-4 h-100 border-0 rounded-4 bg-light text-center">
                        <i class="bi bi-search feature-icon mb-3 text-warning"></i>
                        <h5 class="fw-bold">Cek Status</h5>
                        <p class="text-muted small">Pantau sejauh mana laporan atau pengajuan surat Anda diproses oleh perangkat desa.</p>
                        <a href="/status" class="btn btn-warning mt-auto rounded-pill shadow-sm">Lacak Status</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white text-center py-4 mt-auto">
        <div class="container">
            <p class="mb-0">&copy; 2026 Pemerintah Desa TaniMakmur. Dibangun menggunakan Laravel & Amazon Web Services.</p>
        </div>
    </footer>

</body>
</html>