<!DOCTYPE html>
<html>
<body>

<?php
//array diindeks adalah Array dengan indeks numerik
$cars = array("Volvo", "BMW", "Toyota");
//atau
/*$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota"; */
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
}
?>
<!--outputnya
Volvo
BMW
Toyota
-->

</body>
</html>
