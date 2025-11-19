<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Saldo Tabungan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-6">
    <div class="bg-white shadow-2xl rounded-2xl p-8 w-full max-w-xl">
        <h1 class="text-3xl font-bold mb-6 text-center text-blue-600">Hitung Saldo Tabungan</h1>

        <form method="POST" class="space-y-4">
            <div>
                <label class="block font-semibold mb-1">Saldo Awal (Rp)</label>
                <input type="number" name="saldo_awal" required class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-400">
            </div>

            <div>
                <label class="block font-semibold mb-1">Lama Menabung (bulan)</label>
                <input type="number" name="bulan" required class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-400">
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white p-3 rounded-lg font-semibold hover:bg-blue-700 transition">Hitung Saldo</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $saldo = $_POST['saldo_awal'];
            $bulan = $_POST['bulan'];

            for ($i = 1; $i <= $bulan; $i++) {
                $bunga = ($saldo < 1100000) ? 0.03 : 0.04;
                $saldo += $saldo * $bunga;  // hitung bunga
                $saldo -= 9000; // biaya admin
            }

            echo "<div class='mt-6 p-4 bg-green-100 border border-green-300 rounded-xl'>";
            echo "<h2 class='text-xl font-bold text-green-700'>Hasil Perhitungan:</h2>";
            echo "<p class='mt-2 text-gray-700'>Saldo akhir setelah <span class='font-semibold'>{$bulan}</span> bulan adalah:</p>";
            echo "<p class='text-2xl font-bold text-green-800 mt-2'>Rp " . number_format($saldo, 0, ',', '.') . "</p>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
