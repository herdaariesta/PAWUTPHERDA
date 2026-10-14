<?php
$ukuranCookie = $_COOKIE["ukuran_terakhir"] ?? null;
$warnaCookie = $_COOKIE["warna_terakhir"] ?? null;

$pilihanValid = [
    "A4" => ["Hitam Putih", "Berwarna"],
    "F4" => ["Hitam Putih", "Berwarna"],
];

if (
    is_string($ukuranCookie)
    && is_string($warnaCookie)
    && isset($pilihanValid[$ukuranCookie])
    && in_array($warnaCookie, $pilihanValid[$ukuranCookie], true)
) {
    $ukuran_terakhir = $ukuranCookie;
    $warna_terakhir = $warnaCookie;
}
