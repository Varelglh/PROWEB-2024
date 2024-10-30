<?php
if (isset($_GET['petarungA']) && isset($_GET['petarungB'])) {
    $timA = ["Andre" => 80, "Berli" => 80, "Charlie" => 67, "Desmond" => 88, "Erina" => 95];
    $timB = ["Farah" => 75, "Gerry" => 89, "Hesti" => 76, "Indra" => 61, "Jordan" => 96];

    $petarungA = ucfirst(strtolower($_GET['petarungA'])); 
    $petarungB = ucfirst(strtolower($_GET['petarungB'])); 

    function petarungTersedia($input, $timA, $timB) {
        if (array_key_exists($input, $timA) || array_key_exists($input, $timB)) {
            return true;
        } else {
            echo "Pemain " . $input . " tidak tersedia<br>";
            return false;
        }
    }

    function tanding($petarungA, $petarungB, $timA, $timB) {
        if (petarungTersedia($petarungA, $timA, $timB) && petarungTersedia($petarungB, $timA, $timB)) {

            $kekuatanA = array_key_exists($petarungA, $timA) ? $timA[$petarungA] : $timB[$petarungA];
            $kekuatanB = array_key_exists($petarungB, $timA) ? $timA[$petarungB] : $timB[$petarungB];

            echo $petarungA . " (Kekuatan: " . $kekuatanA . ") vs " . $petarungB . " (Kekuatan: " . $kekuatanB . ")<br>";

            if ($kekuatanA > $kekuatanB) {
                $sisaKekuatan = $kekuatanA - $kekuatanB;
                echo "Pemenangnya adalah " . $petarungA . " dengan sisa kekuatan: " . $sisaKekuatan . "<br>";
            } elseif ($kekuatanB > $kekuatanA) {
                $sisaKekuatan = $kekuatanB - $kekuatanA;
                echo "Pemenangnya adalah " . $petarungB . " dengan sisa kekuatan: " . $sisaKekuatan . "<br>";
            } else {
                echo "Pertandingan berakhir seri.<br>";
            }
        }
    }

    tanding($petarungA, $petarungB, $timA, $timB);
}
?>
</body>
</html>
