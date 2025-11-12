<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Jam Kerja - Perusahaan XXX</title>
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
            width: 360px;
        }

        h2 {
            color: #001f3f;
            margin-bottom: 25px;
            font-weight: 600;
        }

        label {
            font-size: 15px;
            color: #001f3f;
        }

        input[type=number] {
            width: 90%;
            padding: 12px;
            margin: 20px 0;
            border: 2px solid #001f3f;
            border-radius: 10px;
            font-size: 16px;
            text-align: center;
        }

        input[type=submit] {
            background-color: #001f3f;
            color: #fdf5e6;
            padding: 12px 25px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
            box-shadow: 0 4px 8px rgba(0,0,0,0.3);
        }

        input[type=submit]:hover {
            background-color: #003366;
            transform: scale(1.05);
        }

        footer {
            position: absolute;
            bottom: 15px;
            font-size: 13px;
            color: #fdf5e6;
        }
    </style>
</head>
<body>
    <div class="card">
        <h2>💼 Hitung Upah Mingguan</h2>
        <form action="hasil.php" method="post">
            <label for="jam">Masukkan jumlah jam kerja per minggu:</label><br>
            <input type="number" id="jam" name="jam" min="0" required><br>
            <input type="submit" value="Hitung Upah">
        </form>
    </div>
    <footer>© 2025 PT.Pannjang Umur</footer>
</body>
</html>
