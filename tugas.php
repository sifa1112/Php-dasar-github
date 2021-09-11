<!DOCTYPE html>
<html>
    <head>
        <title>Program Bintang</title>
</head>
<body>

<form method = "POST" action = "">
    <tr>
    <td>Masukan Bintang</td>
                <td>:</td>
                <td><input type = 'text' name = 'nama' value = ""></td>
                <td></td>
            <td></td>
             <td><input type ="submit" name = "simpan" value ='SUBMIT'><br>
            
             <?php
                if (isset ($_POST['simpan'])){
                    $nama = $_POST['nama'];
                
                echo "<h4>Program segitiga bintang siku-siku</h4><br>";
             
                for ($i = 1; $i <= $nama; $i++){
                    for ($j = 1; $j <= $i; $j++){
                        echo " * ";
                    }
                    echo "<br>";
                  }

                echo "<h4>Program Ganjil Genap Menggunakan For</h4><br>";
                
                echo bilangan ($nama);
                }
                function bilangan ($nama){
                    $ganjil = 0;
                    for ($i=1; $i <=$nama; $i++){
                        if ($i%2==0){
                            echo $i."<br> ";
                            $ganjil++;
                        }
                    }
                }
                
?>
</td>
</form>
</body>
</html>                