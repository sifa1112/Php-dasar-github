<?php

function hitung($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam. ", <br>";
    echo "Perkenalkan, nama saya ".$nama. "<br>";
    echo "Saya berusia" . hitung(2004, 2021) ." tahun<br>";
    echo "Senang berkenalan dengan anda<br>";
}
perkenalan("Sifaafnaf");
?>