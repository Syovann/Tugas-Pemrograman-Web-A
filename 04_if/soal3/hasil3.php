<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Upah Golongan</title>
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

        p {
            font-size: 16px;
            margin: 10px 0;
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
        <h2>💰 Hasil Perhitungan Upah</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $jamKerja = $_POST["jam"];
            $golongan = $_POST["golongan"];
            $upahLembur = 3000;
            $batasJam = 48;

            // Tentukan upah per jam berdasarkan golongan
            switch ($golongan) {
                case "A":
                    $upahNormal = 4000;
                    break;
                case "B":
                    $upahNormal = 5000;
                    break;
                case "C":
                    $upahNormal = 6000;
                    break;
                case "D":
                    $upahNormal = 7500;
                    break;
                default:
                    $upahNormal = 0;
            }

            if ($jamKerja <= $batasJam) {
                $total = $jamKerja * $upahNormal;
                echo "<p>Golongan: <b>$golongan</b></p>";
                echo "<p>Jam kerja: <b>$jamKerja jam</b></p>";
                echo "<p>Tidak ada jam lembur.</p>";
            } else {
                $jamLembur = $jamKerja - $batasJam;
                $total = ($batasJam * $upahNormal) + ($jamLembur * $upahLembur);
                echo "<p>Golongan: <b>$golongan</b></p>";
                echo "<p>Jam kerja normal: <b>$batasJam jam</b></p>";
                echo "<p>Jam lembur: <b>$jamLembur jam</b></p>";
            }

            echo "<h3>Total Upah: Rp " . number_format($total, 0, ',', '.') . "</h3>";
        } else {
            echo "<p>Silakan masukkan data terlebih dahulu melalui form.</p>";
        }
        ?>
        <a href="index3.php">⬅ Kembali</a>
    </div>
</body>
</html>
