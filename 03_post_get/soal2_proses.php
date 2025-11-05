<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pecahan Uang</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>

<div class="container">
    <h1>Hasil Pecahan Uang</h1>

    <?php
    if (isset($_POST['jumlah'])) {
        $jumlah = $_POST['jumlah'];

        $pecahan = [100000, 50000, 20000, 5000, 100, 50];
        $hasil = [];

        $sisa = $jumlah;
        foreach ($pecahan as $p) {
            $hasil[$p] = intdiv($sisa, $p);
            $sisa %= $p;
        }

        echo "<p>Total uang: <b>Rp " . number_format($jumlah, 0, ',', '.') . "</b></p>";
        echo "<table>";
        echo "<tr><th>Pecahan</th><th>Jumlah Lembar</th></tr>";
        
        foreach ($hasil as $uang => $lembar) {
            echo "<tr><td>Rp " . number_format($uang, 0, ',', '.') . "</td><td>$lembar lembar</td></tr>";
        }

        echo "</table>";
    }
    ?>

    <a href="soal2.html" class="back-btn">Kembali</a>
</div>

</body>
</html>
