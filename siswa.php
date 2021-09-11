<!DOCTYPE html>
<html>
<head>
	
        <title>DATA</title>
</head>
<body style = 'margin : 20px; font : 16px arial;'>
    <center><h2>Registrasi siswa baru</h2></center>
    <form method = "POST" action = "datasiswa.php">
        <center>
        <table border = '1' cellspacing = '1' cellpanding = '10' style ='border' : #aaa; color : #101; font-family : arial; font-size : 12px;'>
            <tr>
            <td>Nama Siswa</td>
                <td width = '5' align = 'center'>:</td>
                <td><input type = 'text' placeholder ='Nama Siswa' name = 'nama'></td>
</tr>
<tr>
            <td>Jenis Kelamin</td>
                <td>:</td>
                <td><input type = 'radio' name = 'jk' value = 'Perempuan'>Perempuan
                <input type = "radio" placeholder ='Jenis Kelamin' name = 'jk' value = 'Laki-laki'>Laki-laki</td>
</tr>
<tr>
    <td>Kelas</td>
    <td width ='5' align ='center'>:</td>
    <td><input type = 'text' placeholder ='Kelas' name = 'kls'></td>
</tr>
<tr>
    <td>Alamat</td>
    <td width ='5' align ='center'>:</td>
    <td><textarea name = 'alamat' placeholder = 'Alamat'></textarea></td>
</tr>
<tr>
<form method = "POST" action = "datasiswa.php">
    <td colspan = '3' align = 'center'>
    <input type ='submit' name='submit' value='Submit'>
    <input type ='reset' name='reset' value='Reset'></td>
    </tr>
</table>
<a href = 'data.php'> Kembali </a>
    </form>
    </body>
    </html>