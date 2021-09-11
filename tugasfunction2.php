<!DOCTYPE html>
<html>
    <head>
        <title>FORMULIR BIODATA</title>
</head>
<body>

<form method = "POST" action = "">

<fieldset>
        <legend>BIODATA</legend>
        <table>
            <tr>
            <td>Nama</td>
                <td>:</td>
                <td><input type = 'text' name = 'nama' value = ""></td>
</tr>
<tr>
<td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                <input type = "radio" name = 'jenis' value = 'Laki-laki'>LAKI-LAKI
                <input type = "radio" name = 'jenis' value = 'Perempuan'>PEREMPUAN</td>
</tr>
<tr>
            <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type = 'date' name = 'ttl' value = ""></td>
</tr>
<tr>
            <td>Agama</td>
            <td>:</td>
            <td>
            <select name = "agama">
                <option value ="Islam">Islam</option>
                <option value ="Kristen">Kristen</option>
                <option value ="Hindu">Hindu</option>
                <option value ="Bundha">Budha</option>
                </select>
</td><td>
</tr>
<tr>
<td>Alamat</td>
                <td>:</td>
                <td>
                <textarea cols="50" rows="6" name = 'alamat'></textarea>
                </td>
</tr>
<tr>
<td>Hobi</td>
                <td>:</td>
                <td>
                <input type = "checkbox" name = 'hobi[]' value = 'Menyanyi'>Menyanyi
                <input type = "checkbox" name = 'hobi[]' value = 'Menari'>Menari
                <input type = "checkbox" name = 'hobi[]' value = 'Mendengarkan Musik'>Mendengarkan Musik
                <input type = "checkbox" name = 'hobi[]' value = 'Membaca'>Membaca
                <input type = "checkbox" name = 'hobi[]' value = 'Menulis'>Menulis
                <input type = "checkbox" name = 'hobi[]' value = 'Melukis'>Melukis
</td>
</tr>
</fieldset>

<td><input type ="submit" name = "simpan" value ='SUBMIT'></td>


</body>
</html>

<?php
if (isset ($_POST['simpan'])){
    $nama = $_POST['nama'];
    $jenis = $_POST['jenis'];
    $ttl = $_POST['ttl'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $hobi = $_POST['hobi'];

}
function biodata($nama, $jenis, $ttl, $agama, $alamat, $hobi){
    echo "<tr>";
    echo "<td>";
    echo "<b>";
    echo "Nama : ".$nama. "<br>";
    echo "Jenis Kelamin : ".$jenis. "<br>";
    echo "Tanggal Lahir : ".$ttl. "<br>";
    echo "Agama : ".$agama. "<br>";
    echo "Alamat : ".$alamat. "<br>";
    echo "Hobi : ";
    foreach ($hobi as $hb){
        echo "<li>".$hb ."</li>";
    }
    echo "</b>";
    echo "</td>";
    echo "</tr>";
}

biodata($_POST['nama'],$_POST['jenis'],$_POST['ttl'],$_POST['agama'],$_POST['alamat'],$hobi);
?>
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