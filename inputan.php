<!DOCTYPE html>
<html>
    <head>
        <title>HASIL INPUT</title>
</head>
<body>
<center><h2>Daftar</h2></center>

<?php


if (isset ($_POST['simpan'])){
    $nama = $_POST['nama'];
    $tanggal = $_POST['tanggal'];
    $identitas = $_POST['no'];
    $tipe = $_POST['tipe'];
    $durasi = $_POST['durasi'];
    $superior = 850000;
    $deluxe = 950000;
    $juniorsuite = 1400000;

    
     
echo "<tr>";
echo "<td>Nama Tamu</td>";
echo "<td>:</td>";
echo "<td> $nama</td>";
echo "</tr>";
echo "<br>";

echo "<tr>";
echo "<td>Tanggal Menginap</td>";
echo "<td>:</td>";
echo "<td> $tanggal</td>";
echo "</tr>";
echo "<br>";

echo "<tr>";
echo "<td>No Identitas</td>";
echo "<td>:</td>";
echo "<td>$identitas</td>";
echo "</tr>";
echo "<br>";

}if ($tipe == "Superior"){
    echo "<tr>";
    echo "<td>Tipe Kamar</td>";
    echo "<td>:</td>";
    echo "<td>$tipe</td>";
    echo "</tr>";
    echo "<br>";
    
    echo "Harga :Rp.$superior";
}elseif  ($tipe == "Deluxe"){
    echo "<tr>";
    echo "<td>Tipe Kamar</td>";
    echo "<td>:</td>";
    echo "<td>$tipe</td>";
    echo "</tr>";
    echo "<br>";
    
    echo "<br>";
    echo "Harga :Rp.$deluxe";
}else {
    echo "Harga :Rp.$juniorsuite";
}
    echo "<tr>";
    echo "<br>";
    echo "<td>Durasi</td>";
    echo "<td>:</td>";
    echo "<td>$durasi malam</td>";
    echo "</tr>";
    echo "<br>";

    if ($tipe == 'Superior'){
        $total = $durasi * $superior;
        echo "Total yang harus dibayar = $total";
    }elseif ($tipe == 'Duluxe'){
        $total = $durasi * $dulaxe;
        echo "Total yang harus dibayar = $total";
}else{
    $total = $durasi * $juniorsuite;
    echo "Total yang harus dibayar = $total";
}
if ($total >= 1700000 && $total  <= 2500000){
    $diskon = $total * (15/100);
    $total = $total - $diskon;
    echo "<br>";
    echo "Anda mendapatkan diskon sebesar 15% <br>";
    echo "Maka harus membayar :$total ";
}elseif ($total >=2500000){
    $diskon =  $total * (25/100);
    $total = $total - $diskon;
    echo "<br>";
    echo "Anda mendapatkan diskon sebesar 25% <br>";
    echo "Maka harus membayar :$total ";
}else{
    echo "<br>";
    echo "Tidak ada diskon";
}
?>

 <a href="tugas2.php">INPUT KEMBALI</a>
</body>
</html>