<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lapor Fasilitas - TaniMakmur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body class="bg-light d-flex flex-column min-vh-100">

    <nav class="navbar navbar-expand-lg navbar-dark bg-success sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">🌾 Desa TaniMakmur</a>
        </div>
    </nav>

    <div class="container mt-5 mb-5 flex-grow-1">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <a href="/" class="btn btn-outline-secondary mb-4 rounded-pill px-4"><i class="bi bi-arrow-left"></i> Kembali ke Beranda</a>

                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-header bg-danger text-white rounded-top-4 py-3">
                        <h5 class="mb-0 fw-bold"><i class="bi bi-cone-striped me-2"></i> Form Pelaporan Fasilitas Desa</h5>
                    </div>
                    <div class="card-body p-4">
                        
                        @if(session('success'))
                            <div class="alert alert-success rounded-3"><i class="bi bi-check-circle-fill me-2"></i>{{ session('success') }}</div>
                        @endif

                        <form action="/lapor" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Nama Pelapor</label>
                                <input type="text" name="nama_pelapor" class="form-control form-control-lg bg-light" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Deskripsi & Lokasi Kerusakan</label>
                                <textarea name="deskripsi_kerusakan" class="form-control bg-light" rows="4" placeholder="Contoh: Jalan berlubang di RT 02 depan pos ronda..." required></textarea>
                            </div>
                            <div class="mb-4">
                                <label class="form-label fw-semibold">Upload Foto Bukti (Wajib)</label>
                                <input type="file" name="foto" class="form-control bg-light" accept="image/*" required>
                                <small class="text-muted"><i class="bi bi-cloud-arrow-up me-1"></i>Foto akan diteruskan ke tim teknis via Amazon S3.</small>
                            </div>
                            <button type="submit" class="btn btn-danger btn-lg w-100 rounded-pill fw-bold shadow-sm">Kirim Laporan Kerusakan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-3 mt-auto">
        <p class="mb-0 small">&copy; 2026 Pemerintah Desa TaniMakmur.</p>
    </footer>

</body>
</html>