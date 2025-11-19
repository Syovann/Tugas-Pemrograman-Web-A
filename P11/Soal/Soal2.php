<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasangan Nilai x, y, z</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 min-h-screen flex items-center justify-center p-6 text-gray-100">
    <div class="bg-gray-800 shadow-2xl rounded-2xl p-8 w-full max-w-xl border border-blue-300/20">
        <h1 class="text-3xl font-bold mb-6 text-center text-blue-300">Hitung Pasangan x, y, z</h1>
        <p class="text-gray-300 text-center mb-6">Mencari seluruh pasangan bilangan asli yang memenuhi persamaan:<br>
        <span class="font-semibold text-xl text-blue-200">x + y + z = 25</span></p>

        <form method="POST" class="text-center mb-4">
            <button name="hitung_xyz" class="bg-blue-300 hover:bg-blue-400 text-gray-900 font-semibold px-6 py-3 rounded-lg transition">
                Tampilkan Pasangan
            </button>
        </form>

        <?php
        if (isset($_POST['hitung_xyz'])) {
            echo "<div class='mt-6 p-4 bg-gray-700 border border-blue-300/30 rounded-xl max-h-[400px] overflow-y-auto'>";
            echo "<h2 class='text-xl font-bold text-blue-300 mb-3'>Hasil Pasangan Nilai:</h2>";

            $total = 0;
            
            for ($x = 1; $x < 25; $x++) {
                for ($y = 1; $y < 25; $y++) {
                    $z = 25 - ($x + $y);
                    if ($z > 0) {
                        echo "<p class='text-blue-100'>x = $x, y = $y, z = $z</p>";
                        $total++;
                    }
                }
            }

            echo "<p class='mt-4 text-lg font-semibold text-blue-200'>Jumlah penyelesaian: $total</p>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>