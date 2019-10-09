<?php
/*$ GLOBALS adalah PHP variabel global super yang digunakan 
\untuk mengakses variabel global dari mana saja di script PHP 
(juga dari dalam fungsi atau metode). */
$x = 75;
$y = 25;
 
function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    //maka ? = 75 + 25
    //jadi outputnya 100
}
 
addition();
echo $z;
?>