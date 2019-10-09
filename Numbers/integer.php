<?php
//Integer adalah angka tanpa bagian desimal.
$x = 5985; //deklaarasi var $x dengan value integer

var_dump(is_int($x));
//is_int untuk memeriksa apakah jenis variabel adalah integer
$x = 59.85; //deklaarasi var $x dengan value integer
var_dump(is_int($x));
/* Output
bool(false)
bool(false)
*/
?>