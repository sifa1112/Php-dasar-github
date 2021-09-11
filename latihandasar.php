<!DOCTYPE html>
<html>
    <head>
        <title>Konser Amal</title>
</head>

<body>
    <center><h2>Konser Amal Assalaam Bahagia<hr></h2></center>
    <form action = "hasil.php" method = "POST">
        <table>
            <tr>
            <td>Nama Pemesan</td>
                <td>:</td>
                <td><input type = 'text' name = 'nama' value = ""></td>
</tr>

<tr>
            <td>Kode Studio</td>
            <td>:</td>
            <td>
            <select name = "kodestudio">
                <option value ="Studio1">Studio 1</option>
                <option value ="Studio2">Studio 2</option>
                </select>
</td><td>
</tr>

<tr>
<td>Jenis Kelas</td>
                <td>:</td>
                <td>
                <input type = "radio" name = 'jenis' value = 'VIP'>VIP
                <input type = "radio" name = 'jenis' value = 'Festifal'>Festifal</td>
</tr>
<tr>
<td>Jumlah Tiket</td>
                <td>:</td>
                <td><input type = 'text' name = 'tiket'></td>
</tr>
<tr>
             <td></td>
            <td></td>
             <td><input type ="submit" name = "simpan" value ='Tampil'>
             <input type ="reset" name = "reset" value ='BATAL'></td>
</tr>

</table>
</form>


<?php


if (isset ($_POST['simpan'])){
    $namapemesan = $_POST['nama'];
    $kodestudio = $_POST['kodestudio'];
    $jenis = $_POST['jenis'];
    $jenis2 = $_POST['jenis2'];
    $tiket = $_POST['tiket'];
    
    echo "Nama Pemesan = $namapemesan <br>Kode Studio = $kodestudio <br>Jenis Kelas = $jenis <br>Jumlah Tiket = $tiket";
}
?>
</body>
</html>