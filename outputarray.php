<!DOCTYPE html>
<html>
<head>
<title>Cetak Nilai</title>
</head>
<fieldset border="3">
<body><h2 align="center">Form Cetak Nilai Siswa<br>SMK ASSALAAM BANDUNG<br>Thn 2021/2022</h2>
<form method = "POST" action= "outputarray.php">
<br></br>
<center>
<table border = "1">
        <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type = 'text' name = 'nama'></td>
            </tr>   
        <tr>
                <td>Nis</td>
                <td>:</td>
                <td><input type = 'text' name = 'nis'></td>
            </tr>      
</table>
<center>
<table border="1">
<br>
<br>
<br>
<tr>
<td>No</td>
<td colspan="10" align="center">Mata Pelajaran</td>
<td>Nilai</td>
</tr>
<tr>
<td align="center">1</td>
<td colspan="10">Pendidikan Agama Islam</td>
<td><input type='text' name='nilai1'></td>
</tr>
<tr>
<td align="center">2</td>
<td colspan="10">PPKN</td>
<td><input type='text' name='nilai2'></td>
</tr>
<tr>
<td align="center">3</td>
<td colspan="10">Bahasa Indonesia</td>
<td><input type='text' name='nilai3'></td>
</tr>
<tr>
<td align="center">4</td>
<td colspan="10">Matematika</td>
<td><input type='text' name='nilai4'></td>
</tr>
<tr>
<td align="center">5</td>
<td colspan="10">Bahasa Inggris</td>
<td><input type='text' name='nilai5'></td>
</tr>
<tr>
<td align="center">6</td>
<td colspan="10">Produk Kreatif Dan Komunikatif</td>
<td><input type='text' name='nilai6'></td>
</tr>
<tr>
<td align="center">7</td>
<td colspan="10">Al Qur`an</td>
<td><input type='text' name='nilai7'></td>
</tr>
<tr>
<td align="center">8</td>
<td colspan="10">Bimbingan Konseling</td>
<td><input type='text' name='nilai8'></td>
</tr>
<tr>
<td align="center">9</td>
<td colspan="10">Produktif RPL</td>
<td><input type='text' name='nilai9'></td>
</tr>
<tr>
<td align="center">10</td>
<td colspan="10">Produktif TKJ</td>
<td><input type='text' name='nilai10'></td>
</tr>
</table>
<br>
<br>
<input align="center" type="submit" name ="cetak" value='CETAK NILAI'></input>
</center>
</fieldset>
</form>
</body>
</html>