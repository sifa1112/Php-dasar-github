<!DOCTYPE html>
<html>
    <head>
        <title>FORMULIR PERHITUNGAN</title>
</head>
<body>

<form method = "POST" action = "">

<fieldset>
        <legend>LINGKARAN</legend>
        <table border=1>
    Masukan Jari-Jari : 
                <input type = 'number' name = 'jari'><h>
            <input type ="submit" name = "simpan" value ='SUBMIT'>
</fieldset>
</body>
</html>
<?php
echo "<br>";
if (isset($_POST['simpan'])){
    function luas($jari, $phi=3.14){
       $jari **= 2;
       $luas = $jari * $phi;
        return $luas;
    }

    function keliling($jari, $phi=3.14){
        $keliling = ($jari * $phi) * 2;
         return $keliling;
     }

     echo "Jari - jari = " . $_POST['jari'];
     echo "<br>";
     echo "Luasnya = " . luas($_POST['jari']);
     echo "<br>";
     echo "Kelilingnya = " . keliling($_POST['jari']);
}
?>
</fieldset>
</body>
</html>


