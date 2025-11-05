<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Saldo Akhir</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <header>
            <h1>💰 Hasil Perhitungan Saldo Akhir Anda 💵</h1>
        </header>

        <div class="result-card">
            <?php
            // Membaca input dari form
            // Menggunakan isset dan casting (float/int) untuk keamanan dan validasi
            $saldo_awal = isset($_POST['saldo_awal']) ? (float)$_POST['saldo_awal'] : 0;
            $bunga_persen = isset($_POST['bunga']) ? (float)$_POST['bunga'] : 0;
            $lama_bulan = isset($_POST['bulan']) ? (int)$_POST['bulan'] : 0;

            // Pastikan input valid (angka non-negatif)
            if ($saldo_awal >= 0 && $bunga_persen >= 0 && $lama_bulan >= 0) {
                // Konversi bunga dari persen ke desimal (Contoh: 0.25% menjadi 0.0025)
                $bunga_desimal = $bunga_persen / 100;

                // Menghitung Saldo Akhir (Rumus Bunga Majemuk)
                // Saldo Akhir = Saldo Awal * (1 + Bunga)^Bulan
                $saldo_akhir = $saldo_awal * pow((1 + $bunga_desimal), $lama_bulan);

                // Format output
                $saldo_awal_formatted = number_format($saldo_awal, 0, ',', '.');
                $bunga_persen_formatted = number_format($bunga_persen, 2, ',', '.');
                // Saldo akhir dibulatkan 2 angka di belakang koma untuk mata uang
                $saldo_akhir_formatted = number_format($saldo_akhir, 2, ',', '.'); 

                // --- Tampilan Ringkasan Input ---
                echo "<div class='input-summary'>";
                echo "<h2>Data yang Dimasukkan:</h2>";
                echo "<ul>";
                echo "<li>Saldo Awal: <span>Rp. " . $saldo_awal_formatted . "</span></li>";
                echo "<li>Bunga Per Bulan: <span>" . $bunga_persen_formatted . "%</span></li>";
                echo "<li>Lama Menabung: <span>" . $lama_bulan . " Bulan</span></li>";
                echo "</ul>";
                echo "</div>";

                // --- Tampilan Hasil Akhir ---
                echo "<div class='final-result'>";
                echo "<h2>SALDO AKHIR TABUNGAN ANDA</h2>";
                echo "<p class='saldo-value'>Rp. " . $saldo_akhir_formatted . " ✨</p>"; // Menambahkan emoji bintang
                echo "</div>";

                // Menerapkan contoh dari soal: Saldo Awal 1.000.000, Bunga 0.25%, 11 Bulan
                if ($saldo_awal == 1000000 && $bunga_persen == 0.25 && $lama_bulan == 11) {
                    $contoh_hasil = 1000000 * pow((1 + 0.0025), 11);
                    $contoh_formatted = number_format($contoh_hasil, 2, ',', '.');
                    echo "<p class='example-note'>*Catatan: Sesuai contoh, Saldo Akhir adalah Rp. " . $contoh_formatted . ".</p>";
                }
            } else {
                 // --- Tampilan Pesan Error ---
                 echo "<p class='error-message'>Data input tidak valid. Pastikan semua nilai adalah angka positif (Rp. atau %).</p>";
            }
            ?>
            <a href="soal1.html" class="btn primary back-button">← Hitung Lagi</a>
        </div>
    </div>
</body>

</html>