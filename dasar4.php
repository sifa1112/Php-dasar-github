<!DOCTYPE html>
<html>
    <head>
        <title>Form sederhana</title>
</head>
<body>
    <h2>Form Sedehana</h2>
    <form method = "POST" action = "">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type = 'text' name = 'nama'></td>
</tr>

            <tr>
                <td>Umur</td>
                <td>:</td>
                <td><input type = 'text' name = 'umur'></td>
</tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type = 'text' name = 'alamat'></td>
</tr>

            <tr>
             <td></td>
            <td></td>
             <td><input type ="submit" name = "simpan" value ='KIRIM'></td>
</tr>
</table>
</form>

</body>
</html>

<?php

if (isset ($_POST['simpan'])){
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $alamat = $_POST['alamat'];

    echo "Nama = $nama <br>Umur = $umur <br>Alamat = $alamat";
}


?>