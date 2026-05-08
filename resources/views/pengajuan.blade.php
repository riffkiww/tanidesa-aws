<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengajuan Surat - TaniMakmur</title>
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
                    <div class="card-header bg-primary text-white rounded-top-4 py-3">
                        <h5 class="mb-0 fw-bold"><i class="bi bi-file-earmark-text me-2"></i> Form Pengajuan Surat Desa</h5>
                    </div>
                    <div class="card-body p-4">
                        
                        @if(session('success'))
                            <div class="alert alert-success rounded-3"><i class="bi bi-check-circle-fill me-2"></i>{{ session('success') }}</div>
                        @endif

                        <form action="/ajukan-surat" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label fw-semibold">NIK (Nomor Induk Kependudukan)</label>
                                <input type="text" name="nik" class="form-control form-control-lg bg-light" placeholder="Masukkan 16 digit NIK" maxlength="16" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" class="form-control form-control-lg bg-light" placeholder="Sesuai KTP" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Pilih Jenis Surat</label>
                                <select name="jenis_surat" class="form-select form-select-lg bg-light" required>
                                    <option value="" selected disabled>-- Silakan Pilih --</option>
                                    <option value="Surat Keterangan Domisili">Surat Keterangan Domisili</option>
                                    <option value="Surat Keterangan Usaha">Surat Keterangan Usaha</option>
                                    <option value="Surat Keterangan Tidak Mampu">Surat Keterangan Tidak Mampu</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label class="form-label fw-semibold">Upload Foto KTP (Wajib)</label>
                                <input type="file" name="foto_ktp" class="form-control bg-light" accept="image/*" required>
                                <small class="text-muted"><i class="bi bi-shield-lock me-1"></i>KTP Anda dienkripsi dan disimpan aman di AWS Cloud.</small>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg w-100 rounded-pill fw-bold shadow-sm">Kirim Pengajuan</button>
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