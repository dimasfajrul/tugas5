<?php
//Pernyataan - mengeksekusi beberapa kode jika salah satu kondisi benar
$t = date("H");
//date adalah tanggal,dan H adalah jam,jadi H adalah 24
if ($t < "20") {
    //maka apakah 24<20?
    echo "Have a good day!";
}
?>