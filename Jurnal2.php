<?php
$listharga=["apel"=>10000,"pisang"=>5000,"mangga"=>15000];
$input = strtolower(readline("Masukan Nama buah(apel,pisang,mangga) : "));
function buah($input,$listharga){
foreach($listharga as $buah=>$harga){
    if($input = $buah){
        return true ;
     
    }
return false ;    
}
}
$buahtersedia=buah($input,$listharga);
echo $buahtersedia;

if($buahtersedia == true){
    $harga=$listharga[$input];
    $jumlah=readline("Masukan Jumlah buah : ");
    $total=$jumlah*$harga;
    echo "Total harga untuk ".$jumlah." ".$input." adalah"." ".$total;
}else{
    "Buah tidak di temukan";
}
?>