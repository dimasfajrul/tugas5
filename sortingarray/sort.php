<!DOCTYPE html>
<html>
<body>

<?php
$cars = array("Volvo", "BMW", "Toyota");
//sort() - array semacam dalam urutan menaik
sort($cars);

$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
    echo $cars[$x];
    echo "<br>";
}
?>
<!--maka outpunya akkan urut sesuai abjad
BMW
Toyota
Volvo-->
</body>
</html>
