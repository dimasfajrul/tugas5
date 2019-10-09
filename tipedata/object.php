<?php
/*Sebuah objek adalah tipe data yang menyimpan data dan informasi tentang cara mengolah data tersebut.

Dalam PHP, sebuah objek harus secara eksplisit dinyatakan. */
class Car {
    function Car() {
        $this->model = "VW";
    }
}

// create an object
$herbie = new Car();

// show object properties
//disini kita echo atau tampilkan function yang kita sudah buat diatas
echo $herbie->model;
?>