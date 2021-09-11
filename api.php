<?php

$url = "https://api.kawalcorona.com/";

$ch = curl_init();

curl_setopt($ch,CURLOPT_URL,$url);

curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);

$datacovid = curl_exec($ch);

curl_close($ch);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="width=device-width,initial-scale=1.0">
        <title>Document</title>
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
    <legend>Data Covid</legend>
    <table border=1>
        <tr>
            <th>No</th>
            <th>Negara</th>
            <th>Positif</th>
            <th>Meninggal</th>
            <th>Sembuh</th>
</tr>
<?php

$no =1;
$data = json_decode($datacovid);
foreach ($data as $covid){
    ?>
    <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $covid->attributes->Country_Region;?></td>
        <td><?php echo $covid->attributes->Confirmed;?></td>
        <td><?php echo $covid->attributes->Deaths;?></td>
        <td><?php echo $covid->attributes->Recovered;?></td>
</tr>
<?php
}?>
</table>
</fieldset>
</body>
</html>
