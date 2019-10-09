<html>

<body>
    <!--$ _REQUEST digunakan untuk mengumpulkan data setelah mengirimkan formulir HTML.-->
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Name: <input type="text" name="fname">
        <!--pada name kita pake type data text-->
        <input type="submit">
        <!--lalu pada input memakai tipe data submit-->
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $name = $_REQUEST['fname'];
        if (empty($name)) {
            echo "Name is empty";
        } else {
            echo $name;
        }
    }
    ?>
    <!--
    bentuk dengan field input dan sebuah tombol submit.
     Ketika pengguna mengirimkan data dengan mengklik "Submit", 
     bentuk data dikirim ke file yang ditentukan dalam atribut aksi <form> tag. 
         Dalam contoh ini, kita arahkan ke file ini sendiri untuk data formulir 
         pengolahan. Jika Anda ingin menggunakan file PHP lain untuk memproses data 
         formulir, menggantikan dengan nama file pilihan Anda. Kemudian, 
         kita bisa menggunakan super variabel global $ _REQUEST untuk mengumpulkan 
         nilai dari field input
-->
</body>

</html>