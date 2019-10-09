<!DOCTYPE html>
<html>
<body>

<?php
$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);//rsort() - array semacam agar descending

$arrlength = count($numbers);//maka kebalikan dari sort,jika rsort dari besar ke kecil
for($x = 0; $x < $arrlength; $x++) {
    echo $numbers[$x];
    echo "<br>";
}
?>
<!--maka outputnya
22
11
6
4
2-->
</body>
</html>
