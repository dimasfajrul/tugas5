<?php
/*Biasanya, ketika fungsi selesai / dieksekusi, 
semua variabel yang akan dihapus. Namun, terkadang kita ingin variabel 
lokal tidak akan dihapus. dan akan dibutuhkan  untuk pekerjaan lebih lanjut. */
function myTest() {
    static $x = 0;
    echo $x;
    $x++;
}

myTest();
myTest();
myTest();
?>