<?php

    $url = "https://api.kawalcorona.com/sembuh/";
    // persiapkan curl / init curl
    $ch = curl_init();
    // set url
    curl_setopt($ch, CURLOPT_URL, $url);
    // return the transfer as a string
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // $output contains the output string
    $dataCovid = curl_exec($ch);
    // tutup curl
    curl_close($ch);
    // menampilkan hasil curl
    // echo $output;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GLOBAL SEMBUH</title>
</head>
<body>
<center>
        <nav>
            <a href="json-indonesia.php">Data Indonesia</a> |
            <a href="json-provinsi.php">Data Provinsi</a> |
            <a href="global-positif.php">Data Global Positif</a> |
            <a href="global-sembuh.php">Data Global Sembuh</a> |
            <a href="global-meninggal.php">Data Global Meninggal</a> 



</nav>
</center>
    <fieldset>
        <legend>Data Covid Global Sembuh</legend>
        <table border=1>
            <?php
     $data = json_decode($dataCovid);
     foreach ($data as $covid => $sembuh){
    ?>
            <tr>
                <td><?php echo $sembuh;?></td>
            </tr>
            <?php
}?>
        </table>
    </fieldset>
</body>
</html>