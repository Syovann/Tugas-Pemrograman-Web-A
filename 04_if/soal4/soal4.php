<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bulan dan Jumlah Hari - Soal 4</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            transition: all 0.3s ease;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #001f3f 40%, #fdf5e6 100%);
            color: #001f3f;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(20px);}
            to {opacity: 1; transform: translateY(0);}
        }

        .card {
            background-color: #fdf5e6;
            border-radius: 20px;
            padding: 50px 40px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.25);
            text-align: center;
            width: 420px;
        }

        h2 {
            color: #001f3f;
            margin-bottom: 20px;
            font-weight: 600;
        }

        h3 {
            background-color: #001f3f;
            color: #fdf5e6;
            padding: 12px;
            border-radius: 10px;
            margin-top: 25px;
            display: inline-block;
        }

        a {
            display: inline-block;
            margin-top: 25px;
            background-color: #001f3f;
            color: #fdf5e6;
            padding: 10px 20px;
            border-radius: 10px;
            text-decoration: none;
            font-weight: 600;
            box-shadow: 0 4px 8px rgba(0,0,0,0.3);
        }

        a:hover {
            background-color: #003366;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <div class="card">
        <h2>📅 Jumlah Hari dalam Bulan Ini</h2>
        <?php
        $bulan = date("n"); // Ambil bulan saat ini (1-12)
        $tahun = date("Y"); // Ambil tahun sekarang
        $namaBulan = "";
        $jumlahHari = 0;

        switch ($bulan) {
            case 1:
                $namaBulan = "Januari";
                $jumlahHari = 31;
                break;
            case 2:
                $namaBulan = "Februari";
                // Cek tahun kabisat
                $jumlahHari = ($tahun % 4 == 0 && ($tahun % 100 != 0 || $tahun % 400 == 0)) ? 29 : 28;
                break;
            case 3:
                $namaBulan = "Maret";
                $jumlahHari = 31;
                break;
            case 4:
                $namaBulan = "April";
                $jumlahHari = 30;
                break;
            case 5:
                $namaBulan = "Mei";
                $jumlahHari = 31;
                break;
            case 6:
                $namaBulan = "Juni";
                $jumlahHari = 30;
                break;
            case 7:
                $namaBulan = "Juli";
                $jumlahHari = 31;
                break;
            case 8:
                $namaBulan = "Agustus";
                $jumlahHari = 31;
                break;
            case 9:
                $namaBulan = "September";
                $jumlahHari = 30;
                break;
            case 10:
                $namaBulan = "Oktober";
                $jumlahHari = 31;
                break;
            case 11:
                $namaBulan = "November";
                $jumlahHari = 30;
                break;
            case 12:
                $namaBulan = "Desember";
                $jumlahHari = 31;
                break;
        }

        echo "<p>Bulan saat ini adalah: <b>$namaBulan $tahun</b></p>";
        echo "<h3>Jumlah hari: $jumlahHari</h3>";
        ?>
        <a href="index3.php">⬅ Kembali ke Soal 3</a>
    </div>
</body>
</html>
