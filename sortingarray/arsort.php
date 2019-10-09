<!DOCTYPE html>
<html>
<body>

<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($age);//array semacam asosiatif dalam urutan, menurut nilai

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
    //kalo arsort kebalikan dari asort,jika asort dari kecil ke besar maka arsort dari besar dan kecil
    //sama sama menurt nilai
}
?>
<!--
    outputnya
    Key=Joe, Value=43
Key=Ben, Value=37
Key=Peter, Value=35
-->
</body>
</html>
