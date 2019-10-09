<?php
/*Pernyataan - mengeksekusi beberapa kode jika kondisi benar dan kode lain jika kondisi itu adalah palsu */
$t = date("H");
/*disini kita deklasikn $t = date tanggal.dan H adalah Hours atau jam jadi 24jam perhari */
if ($t < "20")
//jadi apakah 24<20? maka iya dan outputnya Have a good day!
 {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
    // jika salah maka outputnya Have a good night!
}
?>