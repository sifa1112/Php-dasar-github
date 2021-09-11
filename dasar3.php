<?php

echo "PROGRAM LAMPU LALU LINTAS<br>";

$lampu = "kuning";
switch ($lampu){
    case "merah";
         echo "anda harus berhenti";
         break;

    case "kuning";
        echo "anda harus siap-siap";
        break;
    
    case "hijau";
        echo "anda harus maju";
        break;
    default;
        echo "LAMPU LALU LINTAS ERROR";
}