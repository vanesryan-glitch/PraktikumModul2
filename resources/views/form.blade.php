<!DOCTYPE html>
<html>
<head>
    <title>Form Lapor Banjir</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container">
        <div class="card">
            <h2>Form Pelaporan Banjir</h2>
            <p class="subtitle">Laporkan kejadian banjir di sekitar kamu</p>

            <form action="/lapor" method="POST">
                @csrf

                <div class="form-group">
                    <label>Nama Pelapor</label>
                    <input type="text" name="nama" placeholder="Masukkan nama kamu" required>
                </div>

                <div class="form-group">
                    <label>Lokasi Kejadian</label>
                    <input type="text" name="lokasi" placeholder="Contoh: Kecamatan Baleendah" required>
                </div>

                <div class="form-group">
                    <label>Tinggi Genangan Air (cm)</label>
                    <input type="number" name="tinggi" placeholder="Contoh: 30" required>
                </div>

                <button type="submit">Kirim Laporan</button>
            </form>
        </div>
    </div>
</body>
</html>