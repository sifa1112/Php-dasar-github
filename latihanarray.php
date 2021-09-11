<?php
echo "1.Contoh Array Numerik";
echo "<br>";
$jurusan = ["Jurusan teknik informatika",
            "Jurusan sistem informasi",
            "Jurusan teknik komputer",
            "Jurusan manajemen informatika",

];

foreach ($jurusan as $key => $jrsn) {
    echo $jrsn . '-ada diindex ' . $key;
    echo '<br>';
}

echo "<br>";
echo "2.Contoh Array Assosiatif";
echo "<br>";
$jurusan = ["Jurusan 1" => "Teknik informatika",
           "Jurusan 2" => "Sistem informasi",
           "Jurusan 3" => "Teknik komputer",
           "Jurusan 4" => "Manajemen informatika",

];

foreach ($jurusan as $key => $jrsn) {
    echo  'Kata kunci index = ' . $key . ', Nilai = ' . $jrsn;
    echo '<br>';
}
?>
