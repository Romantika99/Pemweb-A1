<?php
function kosong($kosong){
    $kosong="Merah";
    echo "$kosong";
}
function tampilan($nama, $warna){
    echo "$nama"; echo "<br>";
    $karakter=strlen($nama);
    $harga=0;
    if($karakter<=10){
        $harga=$karakter*300;
    }elseif($karakter<=20){
        $harga=$karakter*500;
    }else{
        $harga=$karakter*700;
    }
    echo "Rp. $harga"; echo "<br>";
    if(empty($warna)){
        kosong($warna);
    }else{
        echo "$warna";
    }
}
tampilan("Aulia Belsasar","");

?>