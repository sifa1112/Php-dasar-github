<!DOCTYPE html>
<html>
    <head>
        <title>BILANGAN</title>
</head>
<body>

<form method = "POST" action = ""  >
    <tr>
    <td>Masukan banyaknya bilangan</td>
                <td>:</td>
                <td><input type = 'text' name = 'nama' value = ""></td>
                <td></td>
            <td></td>
             <td><input type ="submit" name = "simpan" value ='SUBMIT'><br>
</tr>

</form>
</body>
</html>
<?php
echo "<br>";
if (isset ($_POST['simpan'])){
    $nama = $_POST['nama'];
    
    echo "<form method ='post' action='input.php'>";
    echo "<br>";

for ($i = 0; $i <=$nama-1; $i++) {
    
    echo "<br>Bilangan Ke- ".($i+1)."<br><input type ='text' name='bil".$i."' />";
}
echo "<br><input type ='submit' name='sumbit' value='submit'>";
echo "<input type ='hidden' name='nama' value='".$nama."'>";
echo "</form>";
}

?>