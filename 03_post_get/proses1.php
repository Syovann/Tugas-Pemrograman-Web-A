<?php
// File: proses1.php

// Mengambil nilai dari field input 'bil1' dan 'bil2' yang dikirim melalui metode POST
$bilangan1 = $_POST['bil1'];
$bilangan2 = $_POST['bil2'];

// Menampilkan nilai yang diterima
echo "<p>Anda telah memasukkan bilangan pertama = " . $bilangan1 . ".</p>";
echo "<p>Anda telah memasukkan bilangan kedua = " . $bilangan2 . ".</p>";

?>