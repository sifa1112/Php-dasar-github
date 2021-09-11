<?php
$nilai = [
    [90,50,10,47],
    [80,90,50,78],
    [20,30,40,98],
    [79,89,90,80],
];
echo $nilai[2][1] ."<br>";
echo $nilai[3][2] ."<br>";
echo $nilai[3][2] ."<br>";
?>

if ($nilai[$i] >= 90 && $nilai[$i] < 101){
	echo "A";
}elseif ($nilai[$i] >= 80 && $nilai[$i] < 91){
	echo "B";
}elseif ($nilai[$i] >= 70 && $nilai[$i] < 81){
	echo "C";
}elseif ($nilai[$i] >= 60 && $nilai[$i] < 71){
	echo "D";
}elseif ($nilai[$i] >= 50 && $nilai[$i] < 0){
	echo "E";
}else{
	echo "Nilai Tidak Ada";
}