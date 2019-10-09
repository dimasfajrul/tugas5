<!DOCTYPE html>
<html>
<body>

<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);// array semacam asosiatif dalam urutan, menurut nilai

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
    //maka akan urut sesuai umur/value nya dan diikuti nama/key
}
?>
<!--
    outputnya
Key=Peter, Value=35
Key=Ben, Value=37
Key=Joe, Value=43
-->
</body>
</html>
