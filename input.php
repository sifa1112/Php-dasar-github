<?php

$nama = $_POST['nama'];
for ($i=0; $i <= $nama - 1; $i++)
{
$bilangan[$i] = $_POST['bil'.$i];
}
$jumlah = 0;
for ($i=0; $i <= $nama - 1; $i++)
{
$jumlah += $bilangan[$i];
}
$ratarata = $jumlah/$nama;
for ($i=0; $i <= $nama - 1; $i++)
{
    echo "Bilangan ke-".($i+1)." =".$bilangan[$i]."<br>";
}
echo "<br>Rata-ratanya adalah : ".$ratarata;

?>

