<?php
//The do...whileLoop akan selalu mengeksekusi blok kode sekali, maka ia akan memeriksa kondisi, dan ulangi loop sementara kondisi yang ditentukan benar.
$x = 1;

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);
/*pertama menetapkan $ x variabel untuk 1 ($ x = 1). 
Kemudian, do while akan menulis beberapa output, 
dan kemudian kenaikan variabel $ x dengan 1. 
Kemudian kondisi diperiksa (adalah $ x kurang dari atau sama dengan 5?), 
Dan loop akan terus berjalan selama $ x kurang dari atau sama dengan 5 */
?>