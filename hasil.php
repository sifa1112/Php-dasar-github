<!DOCTYPE html>
<html>
    <head>
        <title>HASIL REGISTER</title>
</head>
<body>
<center><h2>Konser Amal Assalaam Bahagia<hr></h2></center>

<?php


if (isset($_POST['simpan'])){
$namapemesan = $_POST['nama'];
$kodestudio = $_POST['kodestudio'];
$jenis = $_POST['jenis'];
$tiket = $_POST['tiket'];
$total1 = $tiket * 500000;
$total2 = $tiket * 250000;


echo "<tr>";
echo "<td>Nama Pemesan</td>";
echo "<td>:</td>";
echo "<td> $namapemesan </td>";
echo "</tr>";
echo "<br>";

}if ($kodestudio == "Studio1"){
    echo "<tr>";
    echo "<td>Kode Studio</td>";
    echo "<td>:</td>";
    echo "<td>$kodestudio</td>";
    echo "</tr>";
    echo "<br>";
    
    echo "<tr>";
    echo "<td>Bintang Tamu</td>";
    echo "<td>:</td>";
    echo "<td>OPICK</td>";
    echo "</tr>";
    echo "<br>";
}elseif ($kodestudio == "Studio2"){
    echo "<tr>";
    echo "<td>Kode Studio</td>";
    echo "<td>:</td>";
    echo "<td>$kodestudio</td>";
    echo "</tr>";
    echo "<br>";
    
    echo "<tr>";
    echo "<td>Bintang Tamu</td>";
    echo "<td>:</td>";
    echo "<td>Raihan</td>";
    echo "</tr>";
    echo "<br>";
}if ($jenis == "VIP"){
    echo "<tr>";
    echo "<td>Jenis Kelas</td>";
    echo "<td>:</td>";
    echo "<td>$jenis</td>";
    echo "</tr>";
    echo "<br>";


    echo "<tr>";
    echo "<td>Harga</td>";
    echo "<td>:</td>";
    echo "500000";
    echo "</tr>";
    echo "<br>";


    echo "<tr>";
    echo "<td>Jumlah Beli</td>";
    echo "<td>:</td>";
    echo "$tiket";
    echo "</tr>";
    echo "<br>";

    echo "<tr>";
    echo "<td>Total</td>";
    echo "<td>:</td>";
    echo "$total1";
    echo "</tr>";
    echo "<br>";



}else{
    echo "<tr>";
    echo "<td>Jenis Kelas</td>";
    echo "<td>:</td>";
    echo "$jenis";
    echo "</tr>";
    echo "<br>";


    echo "<tr>";
    echo "<td>Harga</td>";
    echo "<td>:</td>";
    echo "250000";
    echo "</tr>";
    echo "<br>";


    echo "<tr>";
    echo "<td>Jumlah Beli</td>";
    echo "<td>:</td>";
    echo "$tiket";
    echo "</tr>";
    echo "<br>";

    echo "<tr>";
    echo "<td>Total</td>";
    echo "<td>:</td>";
    echo "$total2";
    echo "</tr>";
    echo "<br>";

}

?>

 <a href="latihandasar.php">INPUT KEMBALI</a>
</body>
</html>