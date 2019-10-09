<?php
//Pernyataan - mengeksekusi kode yang berbeda selama lebih dari dua kondisi
$t = date("H");
/*Output "Selamat pagi!" jika waktu saat ini kurang dari 10, 
dan "Have a good day!" jika waktu saat ini kurang dari 20. 
Jika tidak, akan menampilkan "Have a good night!": */
if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
?>
