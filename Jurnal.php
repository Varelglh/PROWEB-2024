<?php
//Meminta Pilihan User
echo "Pilih salah satu opsi berikut."."<br>";
echo "1.Untuk Menampilkan Rata-Rata. "."<br>" ;
echo "2.Untuk Menampilkan Penjumlahan. "."<br>" ;
echo "3.Untuk Menampilkan Rata-rata dan Penjumlahan"."<br>";
echo "4.Keluar"."<br>";

$pilihan = 3;
$angka1=1;
$angka2=2;
$angka3=3;
$angka4=4;
$angka5=-5;

$Penjumlahan= $angka1+$angka2+$angka3+$angka4+$angka5;
$ratarata=$Penjumlahan/5;


if($angka1 >= 0 && $angka2 >=0 && $angka3 >=0 && $angka4 >=0 && $angka5 >=0){
    if($pilihan==1){  
        echo "Rara-rata kamu adalah :".$ratarata."<br>" ;
    }
    elseif($pilihan==2){  
        echo "Penjumlahan Kamu adalah :".$Penjumlahan."<br>";
    }
    elseif($pilihan==3){ 
        echo "Penjumlahan kamu adalah :".$Penjumlahan."<br>";
        echo "Rata Rata Kamu adalah :".$ratarata."<br>";
    }
    else{
        echo "Angka Negatif tidak di izinkan";
    }
}else{
    echo "Rata Rata Penjumlahan kamu : Angka Tidak Valid";

}

?>

