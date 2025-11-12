<?php
if (isset($_POST['tahun'])) {
    $tahun = $_POST['tahun'];

    if (($tahun % 4 == 0 && $tahun % 100 != 0) || ($tahun % 400 == 0)) {
        echo "<div class='kabisat'>🌕 Tahun $tahun adalah Tahun Kabisat!</div>";
    } else {
        echo "<div class='bukan'>🌑 Tahun $tahun bukan Tahun Kabisat.</div>";
    }
}
?>
