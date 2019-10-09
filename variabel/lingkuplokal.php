<?php
function myTest() {
    $x = 5; // local scope
    echo "<p>Variable x inside function is: $x</p>";
}
myTest();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";
/*maka outputnya seperti ini 
Variable x inside function is: 5


Notice: Undefined variable: x in C:\xampp\htdocs\tugas5\variabel\lingkuplokal.php on line 9
Variable x outside function is:*/
?>