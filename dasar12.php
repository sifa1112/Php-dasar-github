<?php

$listMahasiswaJSON = '[
    {"nama" : "Sifa" },
    {"nama" : "Afna" },
    {"nama" : "Fitria" },
    {"nama" : "Sifaafnaf" }
    ]';

    $listMahasiswa = json_decode($listMahasiswaJSON);

foreach($listMahasiswa as $key => $mahasiswa){
    echo "{$key}. Nama : {$mahasiswa->nama} <br>";
}