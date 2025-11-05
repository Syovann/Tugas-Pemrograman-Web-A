<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Pendaftaran</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>

<div class="container">
    <?php
        $nama   = $_POST['nama'];
        $tempat = $_POST['tempat'];
        $tgl    = $_POST['tgl'];
        $bln    = $_POST['bln'];
        $thn    = $_POST['thn'];
        $alamat = $_POST['alamat'];
        $jk     = $_POST['jk'];
        $asal   = $_POST['asal'];
        $uan    = $_POST['uan'];

        echo "<h2>Terimakasih $nama sudah mengisi form pendaftaran.</h2>";
        echo "<p><b>Nama Lengkap</b> : $nama</p>";
        echo "<p><b>Tempat Lahir</b> : $tempat</p>";
        echo "<p><b>Tanggal Lahir</b> : $tgl-$bln-$thn</p>";
        echo "<p><b>Alamat Rumah</b> : $alamat</p>";
        echo "<p><b>Jenis Kelamin</b> : $jk</p>";
        echo "<p><b>Asal Sekolah</b> : $asal</p>";
        echo "<p><b>Nilai UAN</b> : $uan</p>";
    ?>
</div>

</body>
</html>
