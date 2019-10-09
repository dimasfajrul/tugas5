<!DOCTYPE html>
<html>
<body>
<!--Array asosiatif - Array dengan kunci bernama
-->
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
/*$age['Peter'] = "35";
$age['Ben'] = "37";
$age['Joe'] = "43"; */
foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
?>

</body>
</html>
