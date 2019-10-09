<html>
<body>
<!--PHP $ _POST secara luas digunakan untuk mengumpulkan data formulir setelah 
mengirimkan formulir HTML dengan metode = "post". $ _POST juga banyak digunakan untuk lulus variabel.-->
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <!--Name menggunakan tipe data text-->
  <input type="submit">
  <!--input menggunakan tipe dapa submit-->
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['fname'];
    if (empty($name)) {
        echo "Name is empty";
        //jika tidak memasukkan nama atau kosong maka muncul name is empety
    } else {
        echo $name;
        //dan kalau telah diiisi maka akan muncul nama  yang tadi sudah diisi
    }
}
?>

</body>
</html>