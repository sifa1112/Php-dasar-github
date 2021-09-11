<?php
$perusahaan = [
    'Nama' => 'Sifa Afna',
    'Umur' => '16 TAHUN',
    'Alamat' => 'Kp. Leuwidulang',
    'Hobi' => ['Mendengarkan Musik','Menyanyi'],
    'Media Sosial' => ['Instagram' => 'sifaafnaf',
    'Facebook' => 'Sifaaaa']
];

echo "<pre>";
print_r($perusahaan);

echo "<br>";
echo "Pemanggilan Array 2 Dimensi";
echo "<br>";
echo $perusahaan['Hobi'][1]."<br>";
echo $perusahaan['Media Sosial']['Instagram'];