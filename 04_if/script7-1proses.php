<html>
<head>
    <title>Mencari Bilangan Terbesar dari 3 Bilangan</title>
</head>
<body>
    <h1>Mencari Bilangan Terbesar dari 3 Bilangan</h1>
<?php
// Mengambil input bilangan dari formulir HTML (dikirim via POST)
$bilangan1 = $_POST['bil1']; // membaca input bilangan pertama
$bilangan2 = $_POST['bil2']; // membaca input bilangan kedua
$bilangan3 = $_POST['bil3']; // membaca input bilangan ketiga

echo "<h2>Input Bilangan: $bilangan1, $bilangan2, $bilangan3</h2>";

// // cara ke - 1
// // idenya adalah mencari bilangan X yang terbesar dari bil 1 dan bil 2. Lalu X dibandingkan dengan
// // bilangan ke-3. Jika X > dari bil 3, maka X adalah max dari semua bilangan. Jika tidak, maka bil 3 sbg max nya

// Langkah 1: Mencari Max Sementara (antara bilangan 1 dan 2)
if ($bilangan1 > $bilangan2) {
    $maxSementara = $bilangan1;
} else {
    $maxSementara = $bilangan2;
}

// Langkah 2: Membandingkan Max Sementara dengan bilangan 3
if ($bilangan3 > $maxSementara) {
    $maxAkhir = $bilangan3;
} else {
    $maxAkhir = $maxSementara;
}

echo "<p><b>[CARA 1 - Max Sementara]</b> Nilai maksimum dari ".$bilangan1.", ".$bilangan2.", dan ".$bilangan3." adalah : ".$maxAkhir."</p>";

// // cara ke - 2
// // idenya adalah langsung membandingkan masing-masing bilangan dengan bilangan yang lain.
// // misal: jika bil 1 > bil 2 dan bil 1 > bil 3, maka max adalah bil 1.

if (($bilangan1 > $bilangan2) && ($bilangan1 > $bilangan3)) {
    $maxAkhir = $bilangan1;
} else {
    if (($bilangan2 > $bilangan1) && ($bilangan2 > $bilangan3)) {
        $maxAkhir = $bilangan2;
    } else {
        // Ini akan mencakup kasus di mana bilangan3 adalah yang terbesar, atau jika ada dua atau tiga bilangan yang sama besar.
        // Di sini kita berasumsi bahwa jika bukan bil1 atau bil2, maka bil3 adalah max.
        $maxAkhir = $bilangan3; 
    }
}

echo "<p><b>[CARA 2 - Perbandingan Gabungan]</b> Nilai maksimum dari ".$bilangan1.", ".$bilangan2.", dan ".$bilangan3." adalah : ".$maxAkhir."</p>";

// // cara ke - 3
// // idenya hampir sama dengan cara ke - 1, tapi tidak dengan mencari max sementara. (Menggunakan Nested If)

if ($bilangan1 > $bilangan2) {
    if ($bilangan1 > $bilangan3) {
        $maxAkhir = $bilangan1;
    } else {
        $maxAkhir = $bilangan3;
    }
} else {
    if ($bilangan2 > $bilangan3) {
        $maxAkhir = $bilangan2;
    } else {
        $maxAkhir = $bilangan3;
    }
}

echo "<p><b>[CARA 3 - Nested If]</b> Nilai maksimum dari ".$bilangan1.", ".$bilangan2.", dan ".$bilangan3." adalah : ".$maxAkhir."</p>";
?>
</body>
</html>