<?php
//Sebuah Boolean mewakili dua kemungkinan: TRUE atau FALSE.
//kita masukan variabel
$var1=100;
$var2=50;

if($var1 > $var2)
{
 echo"Nilai $var1 lebih besar dari $var2";
 echo "<br>";
 var_dump($var1 > $var2);
}
else
 echo"Nilai $var1 lebih kecil dari $var2";
 /*maka hasilnya
 Nilai 100 lebih besar dari 50
bool(true) */
?>