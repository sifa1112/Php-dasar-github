<!DOCTYPE html>
<html>
    <head>
        <title>HOTEL</title>
</head>
<body>
    <center><h2>Data Penginapan<hr></h2></center>
    <form action = "inputan.php" method = "POST">
        <table>
            <tr>
            <td>Nama Tamu</td>
                <td>:</td>
                <td><input type = 'text' name = 'nama' value = ""></td>
</tr>
<tr>
            <td>Tanggal Menginap</td>
                <td>:</td>
                <td><input type = 'date' name = 'tanggal'></td>
</tr>
<tr>
    <td>No Identitas</td>
    <td>:</td>
    <td><input type = 'text' name = 'no'></td>
</tr>
<tr>
            <td>Tipe Kamar</td>
            <td>:</td>
            <td>
            <select name = "tipe">
                <option value ="Superior">Superior</option>
                <option value ="Deluxe">Deluxe</option>
                <option value ="Junior Suite">Junior Suite</option>
                </select>
</td><td>
</tr>
<tr>
    <td>Durasi Penginapan</td>
    <td>:</td>
    <td><input type = 'text' name = 'durasi'></td>
</tr>
<td></td>
            <td></td>
             <td><input type ="submit" name = "simpan" value ='SUBMIT'><br>
</table>
</form>

<?php

if (isset ($_POST['simpan'])){
    $nama = $_POST['nama'];
    $tanggal = $_POST['tanggal'];
    $identitas = $_POST['no'];
    $tipe = $_POST['tipe'];
    $durasi = $_POST['durasi'];
    
    echo "Nama Tamu = $nama <br>Tanggal Menginap = $tanggal <br>No Identitas = $identitas <br>Tipe Kamar= $tipe <br>Durasi Penginapan = $durasi<br>";
}
?>
</body>
</html>