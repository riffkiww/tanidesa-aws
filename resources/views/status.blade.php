<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Status - TaniMakmur</title>
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
        <a href="/" class="btn btn-outline-secondary mb-4 rounded-pill px-4"><i class="bi bi-arrow-left"></i> Kembali ke Beranda</a>
        
        <div class="card shadow-lg border-0 rounded-4">
            <div class="card-header bg-warning text-dark rounded-top-4 py-3">
                <h5 class="mb-0 fw-bold"><i class="bi bi-search me-2"></i> Lacak Status Laporan Masyarakat</h5>
            </div>
            <div class="card-body p-4">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>No</th>
                                <th>Nama Pelapor</th>
                                <th>Detail Laporan</th>
                                <th>Status</th>
                                <th>Lampiran</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($semua_laporan as $index => $laporan)
                            <tr>
                                <td class="fw-bold text-muted">{{ $index + 1 }}</td>
                                <td class="fw-semibold">{{ $laporan->nama_pelapor }}</td>
                                <td>{{ $laporan->deskripsi_kerusakan }}</td>
                                <td>
                                    <span class="badge bg-secondary rounded-pill px-3 py-2">{{ $laporan->status }}</span>
                                </td>
                                <td>
                                    <a href="{{ Storage::disk('s3')->url($laporan->foto_path) }}" target="_blank" class="btn btn-sm btn-outline-primary rounded-pill px-3">
                                        <i class="bi bi-image me-1"></i> Lihat Foto
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @if($semua_laporan->isEmpty())
                    <div class="text-center text-muted my-4">
                        <i class="bi bi-inbox fs-1"></i>
                        <p class="mt-2">Belum ada laporan yang masuk.</p>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-3 mt-auto">
        <p class="mb-0 small">&copy; 2026 Pemerintah Desa TaniMakmur.</p>
    </footer>

</body>
</html>