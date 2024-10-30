<?php
$listharga=["apel"=>10000,"pisang"=>5000,"mangga"=>15000];
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

function tangkapData($buah) {
    $buah = strtolower($_GET['Buah']);
    $jumlah_buah = $_GET['jumlah-Buah'];

if($buahtersedia == true){
    $harga=$listharga[$input];
    $total=$jumlah*$harga;
    echo "Total harga untuk ".$jumlah." ".$input." adalah"." ".$total;
}else{
    "Buah tidak di temukan";
}