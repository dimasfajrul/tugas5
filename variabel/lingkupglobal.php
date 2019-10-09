<?php
//variabel dideklarasikan di luar fungsi itu berarti lingkup global
$x = 5; // global scope

function myTest() {
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";
/*maka outputnya seperti ini

Notice: Undefined variable: x in C:\xampp\htdocs\tugas5\variabel\lingkupglobal.php on line 6
Variable x inside function is:

Variable x outside function is: 5*/
?>