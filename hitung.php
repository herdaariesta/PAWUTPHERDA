<?php
$ukuran = $_POST["ukuran"] ?? "";
$warna = $_POST["warna"] ?? "";
$halaman = $_POST["halaman"] ?? "";
$rangkap = $_POST["rangkap"] ?? "";

$tarif = 0;
$total = 0;
$valid = false;
$pesan = "Perhitungan belum dibuat.";

$tarifCetak = [
    "A4" => [
        "Hitam Putih" => 500,
        "Berwarna" => 1500,
    ],
    "F4" => [
        "Hitam Putih" => 700,
        "Berwarna" => 1800,
    ],
];

$halamanValid = is_scalar($halaman)
    ? filter_var((string) $halaman, FILTER_VALIDATE_INT, ["options" => ["min_range" => 1]])
    : false;
$rangkapValid = is_scalar($rangkap)
    ? filter_var((string) $rangkap, FILTER_VALIDATE_INT, ["options" => ["min_range" => 1]])
    : false;

if ($halamanValid === false || $rangkapValid === false) {
    $pesan = "Jumlah halaman dan rangkap harus berupa bilangan bulat lebih dari 0.";
} elseif (
    !is_string($ukuran)
    || !is_string($warna)
    || !isset($tarifCetak[$ukuran][$warna])
) {
    $pesan = "Ukuran kertas atau warna cetak tidak valid.";
} else {
    $halaman = (int) $halamanValid;
    $rangkap = (int) $rangkapValid;
    $tarif = $tarifCetak[$ukuran][$warna];
    $valid = true;
    $pesan = "Perhitungan berhasil.";
}

if ($valid) {
    $total = $tarif * $halaman * $rangkap;
}
