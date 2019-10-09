<!DOCTYPE html>
<html>
<body>

<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);//array semacam asosiatif dalam urutan, menurut kunci

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
    //dan akan urut sesuai key atau nama
}
?>
<!--
    outputnya
    Key=Ben, Value=37
Key=Joe, Value=43
Key=Peter, Value=35
-->

</body>
</html>
