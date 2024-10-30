<?php
// Daftar harga makanan dan minuman
$listmakanan = ["ayam" => 15000, "ikan" => 12000, "nasi goreng" => 15000, "mie goreng" => 13000];
$listminuman = ["es jeruk" => 5000, "es teh" => 3000, "air mineral" => 3000, "kopi" => 3000];

// Fungsi untuk mengecek apakah menu tersedia
function menutersedia($input, $listmakanan, $listminuman) {
    if (array_key_exists($input, $listmakanan)) {
        echo $input . " tersedia dengan harga Rp. " . $listmakanan[$input] . "<br>";
        return true;
    } elseif (array_key_exists($input, $listminuman)) {
        echo $input . " tersedia dengan harga Rp. " . $listminuman[$input] . "<br>";
        return true;
    } else {
        echo "Menu tidak ditemukan.<br>";
        return false;
    }
}

// Fungsi untuk menghitung total harga
function tangkapData($input, $jumlah, $listmakanan, $listminuman) {
    if (menutersedia($input, $listmakanan, $listminuman)) {
        if (array_key_exists($input, $listmakanan)) {
            $harga = $listmakanan[$input];
        } else {
            $harga = $listminuman[$input];
        }
        $total = $jumlah * $harga;
        echo "Total harga untuk " . $jumlah . " " . $input . " adalah Rp. " . $total . "<br>";
    }
}

// Mengecek apakah input dari form sudah dikirimkan
if (isset($_GET["makanan"]) && !empty($_GET["makanan"]) && isset($_GET["jumlahMakanan"]) && !empty($_GET["jumlahMakanan"])) {
    $inputMakanan = strtolower($_GET["makanan"]);
    $jumlahMakanan = intval($_GET["jumlahMakanan"]);
    tangkapData($inputMakanan, $jumlahMakanan, $listmakanan, $listminuman);
}

if (isset($_GET["minuman"]) && !empty($_GET["minuman"]) && isset($_GET["jumlahMinuman"]) && !empty($_GET["jumlahMinuman"])) {
    $inputMinuman = strtolower($_GET["minuman"]);
    $jumlahMinuman = intval($_GET["jumlahMinuman"]);
    tangkapData($inputMinuman, $jumlahMinuman, $listmakanan, $listminuman);
}
?>

