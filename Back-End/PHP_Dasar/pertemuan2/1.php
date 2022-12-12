<?php
$nama = "irsya";

echo "Helo ,orang kaya namany $nama";

//operator aritmatika 

echo "<br>";
$x = 20;
$y = 40;

echo $x - $y;

//penggabungan string /concatenation / concat
$nama_depan = "alvan";
$nama_belakang = "irsya";
echo "<br>";
echo $nama_depan . " " . $nama_belakang;

echo "<br>";
//Assignment
$x = 1;
$x .= 5;
echo $x; 


// && = benar semua
// || = salah satu benar 
//! = salah semua
echo "<br>";

$x = 30;
var_dump($x < 40 || $x % 2 == 0);
?>