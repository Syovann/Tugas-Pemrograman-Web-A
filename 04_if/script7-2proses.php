<html>
<head>
    <title>Mencari Status Bilangan</title>
</head>
<body>
    <h1>Mencari Status Bilangan</h1>
<?php
// Mengambil input bilangan dari formulir HTML (dikirim via POST)
$bilangan = $_POST['bil'];

echo "<h2>Bilangan yang diinput: $bilangan</h2>";

// // cara ke - 1 (Menggunakan Nested If - Langsung Cetak Output)
if ($bilangan > 0) {
    echo "<p>Cara 1: Bilangan $bilangan adalah positif</p>";
} else {
    if ($bilangan < 0) {
        echo "<p>Cara 1: Bilangan $bilangan adalah negatif</p>";
    } else {
        echo "<p>Cara 1: Bilangan $bilangan adalah nol</p>";
    }
}

// // cara ke - 2 (Menggunakan Nested If - Simpan Status di Variabel)

if ($bilangan > 0) {
    $status = "positif";
} else {
    if ($bilangan < 0) {
        $status = "negatif";
    } else {
        $status = "nol";
    }
}

echo "<p>Cara 2: Bilangan $bilangan adalah bilangan $status.</p>";
?>
</body>
</html>