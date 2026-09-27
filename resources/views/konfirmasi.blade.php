<!DOCTYPE html>
<html>
<head>
    <title>Konfirmasi Laporan</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="icon-success">✓</div>
            <h2>Laporan Berhasil Dikirim</h2>
            <p class="subtitle">Terima kasih, laporan kamu sudah kami terima</p>

            <div class="result-box">
                <div class="result-item">
                    <span class="result-label">Nama Pelapor</span>
                    <span class="result-value">{{ $nama }}</span>
                </div>
                <div class="result-item">
                    <span class="result-label">Lokasi</span>
                    <span class="result-value">{{ $lokasi }}</span>
                </div>
                <div class="result-item">
                    <span class="result-label">Tinggi Genangan Air</span>
                    <span class="result-value">{{ $tinggi }} cm</span>
                </div>
            </div>

            <a href="/lapor" class="btn-link">Kembali ke Form</a>
        </div>
    </div>
</body>
</html>