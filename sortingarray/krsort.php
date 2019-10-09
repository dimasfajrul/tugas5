<!DOCTYPE html>
<html>
<body>

<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age);//array semacam asosiatif dalam urutan, menurut kunci


foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
    //kalau krsort kebalikan dari ksort ,jika krsort dari abjad  besar ke kcil
    //dan ksort dari abjad kecil ke besar
}
?>
<!--outputnya
Key=Peter, Value=35
Key=Joe, Value=43
Key=Ben, Value=37-->
</body>
</html>
