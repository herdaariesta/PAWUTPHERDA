<?php
$masaBerlakuCookie = time() + (2 * 24 * 60 * 60);

setcookie("ukuran_terakhir", $ukuran, $masaBerlakuCookie, "/");
setcookie("warna_terakhir", $warna, $masaBerlakuCookie, "/");
