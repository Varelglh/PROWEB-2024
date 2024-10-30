<?php
// List harga buah
$listharga = ["apel" => 10000, "pisang" => 5000, "mangga" => 15000];

// Fungsi untuk mengecek apakah buah tersedia di daftar harga
function buahTersedia($input, $listharga) {
    foreach ($listharga as $buah => $harga) {
        if ($input === $buah) { // Gunakan === untuk perbandingan
            return true;
        }
    }
    return false; // Diletakkan di luar loop agar benar
}

// Tangkap data buah dari input GET
if (isset($_GET['Buah']) && isset($_GET['jumlahBuah'])) {
    function tangkapData($listharga) {
        // Mendapatkan data dari query string
        $input = strtolower($_GET['Buah']);
        $jumlah = $_GET['jumlahBuah'];
        
        // Mengecek apakah buah tersedia
        if (buahTersedia($input, $listharga)) {
            $harga = $listharga[$input];
            $total = $jumlah * $harga;
            echo "Total harga untuk " . $jumlah . " " . $input . " adalah Rp " . $total ;
        } else {
            echo "Buah tidak ditemukan.";
        }
    }

    // Panggil fungsi tangkapData
    tangkapData($listharga);
}
?>

