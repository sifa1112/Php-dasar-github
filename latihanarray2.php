<?php
echo "1.Input Array Menggunakan Perintah PRINT_R()";
echo "<br>";
$array = [];
$array[] = 'Indonesia';
$array[] = 'Malaysia';
$array[] = 'Singapura';
$array[] = 'Brunei Darussalam';
$array[] = 'Filipina';
echo '<pre>';
print_r($array);

echo "<br>";
echo "2.Output array assosiatif";
echo "<br>";
$negara = ["Indonesia " => 'Jakarta',
            "Malaysia " => 'Kuala Lumpur',
            "Singapura " => 'Singapura',
            "Thailand " => 'Bangkok' ,
            "Filipina " => 'Manila',

];

foreach ($negara as $key => $value) {
    echo  '<li>Ibukota ' . $key . 'adalah ' . $value;
    echo '<br>';
}
?>
