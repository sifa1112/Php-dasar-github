<?php

function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam. ", ";
    echo "Perkenalkan, nama saya ".$nama. "<br>";
    echo "Senang berkenalan dengan anda<br>";
}

perkenalan("Sifa", "Haii");

echo "<hr>";

$saya = "Safna";
$ucapansalam = "OIIII";

perkenalan($saya, $ucapansalam);
?>