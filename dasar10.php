<?php

$json = '{
    "nama" : "Sifa Afna",
    "domisili" : "Bandung",
    "usia" : 23,
    "wni" : true,
    "hobi" : [
        "Menyanyi", "Mendengarkan Musik", "Bertamasya"
        ]
    }';

    $mahasiswa = json_decode($json);
 
    echo "Nama : {$mahasiswa->nama} <br>";
    echo "Domisili : {$mahasiswa->domisili} <br>";

    echo "Hobi : " . implode(",", $mahasiswa->hobi);

    