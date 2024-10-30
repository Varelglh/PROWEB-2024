<?php

$makanan = array(
    "pecel" => 10000,
    "nasi kuning" => 12000,
    "nasi goreng" => 15000,
    "spaghetti" => 20000
);

$minuman = array(
    "air mineral" => 3000, 
    "cendol" => 5000,
    "es kopi" => 7000,
    "es teh" => 2500
);

function tangkapData($makananArray, $minumanArray) {
    $makanan = strtolower($_GET['makanan']);
    $minuman = strtolower($_GET['minuman']);
    $jumlah_makanan = $_GET['jumlah-makanan'];
    $jumlah_minuman = $_GET['jumlah-minuman'];

    $total_makanan = 0;
    $total_minuman = 0;

    if(array_key_exists($makanan, $makananArray)) {
        $total_makanan = $makananArray[$makanan] * $jumlah_makanan; 
    }

    if(array_key_exists($minuman, $minumanArray)) {
        $total_minuman = $minumanArray[$minuman] * $jumlah_minuman;
    }

    $total = $total_makanan + $total_minuman;

    echo "Makanan yang anda pilih: ".$makanan."<br>";
    echo "Harga Makanan: Rp" . $total_makanan ."<br>";
    echo "Jumlah Makanan yang anda pilih: " .$jumlah_makanan."<br>";
    echo "Minuman yang anda pilih: ".$minuman."<br>";
    echo "Jumlah Minuman yang anda pilih: " .$jumlah_minuman."<br>";
    echo "Harga Minuman: Rp" . $total_minuman . "<br>";
    echo "Total Harga dari Makanan dan Minuman: Rp" . $total;
}

tangkapData($makanan, $minuman);

?>
