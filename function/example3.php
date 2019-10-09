<?php declare(strict_types=1); // strict requirement
//PHP Nilai Argumen default
function setHeight(int $minheight = 50) {
    echo "The height is : $minheight <br>";
}
/*Jika kita memanggil fungsi setHeight ()
 tanpa argumen dibutuhkan nilai default sebagai argumen */
setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80);
?>