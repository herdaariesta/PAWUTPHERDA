<?php
if (!isset($_SESSION["total"])) {
    echo "<p>Belum ada pekerjaan cetak.</p>";
} else {
    echo "<p>Ukuran kertas: " . htmlspecialchars($_SESSION["ukuran"], ENT_QUOTES, "UTF-8") . "</p>";
    echo "<p>Warna cetak: " . htmlspecialchars($_SESSION["warna"], ENT_QUOTES, "UTF-8") . "</p>";
    echo "<p>Jumlah halaman: " . (int) $_SESSION["halaman"] . "</p>";
    echo "<p>Jumlah rangkap: " . (int) $_SESSION["rangkap"] . "</p>";
    echo "<p>Tarif per halaman: Rp" . number_format((int) $_SESSION["tarif"], 0, ",", ".") . "</p>";
    echo "<h2>Total biaya: Rp" . number_format((int) $_SESSION["total"], 0, ",", ".") . "</h2>";
}
