<?php
//PHP Argumen Fungsi
//Argumen ditentukan setelah nama fungsi, dalam tanda kurung.
function familyName($fname) {
    echo "$fname Refsnes.<br>";
}
/*Contoh berikut memiliki fungsi dengan satu argumen ($ fname).
 Ketika fungsi familyName () dipanggil, kami juga menyampaikan nama (misalnya Jani), 
 dan nama yang digunakan di dalam fungsi, yang output beberapa nama pertama yang berbeda,
  tapi nama belakang yang sama */
familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");
?>