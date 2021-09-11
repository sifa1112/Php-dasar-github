<?php

if (isset ($_POST['submit'])){
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $kelas = $_POST['kls'];
    $alamat = $_POST['alamat'];
}

echo "<center>";
echo "<form method ='post' action='siswa.php'>";
    echo "<table>";
    echo "<tr>";
    echo "<td><input type ='submit' name='tambah' value='Tambah siswa'></td>";
echo "</tr>";
echo "</table>";
echo "</form>";
echo "<br>";
echo "<center>";
   echo "<table border ='1' width ='600'>";
    echo "<tr>";
    echo "<th>Nama</th>";
    echo "<th>Jenis Kelamin</th>";
    echo "<th>Kelas</th>";
    echo "<th>Alamat</th>";
echo "</tr>";
echo "<tr>";
echo "<td>$nama</td>";
echo "<td>$jk</td>";
echo "<td>$kelas</td>";
echo "<td>$alamat</td>";
echo "</tr>";
echo "</table>";
echo "</center>";

?>
