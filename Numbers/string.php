<!DOCTYPE html>
<html>
<body>
<!--PHP is_numeric () fungsi dapat digunakan untuk menemukan apakah suatu 
variabel numerik. fungsi mengembalikan nilai true jika variabel adalah angka atau string numerik, 
false jika tidak.-->
<?php
// Check if the variable is numeric   
$x = 5985;
var_dump(is_numeric($x));

echo "<br>";

$x = "5985";
var_dump(is_numeric($x));

echo "<br>";

$x = "59.85" + 100;
var_dump(is_numeric($x));

echo "<br>";

$x = "Hello";
//"hello" bukan numeric
var_dump(is_numeric($x));
?>  
<!--
    output
bool(true)
bool(true)
bool(true)
bool(false)
-->

</body>
</html>
