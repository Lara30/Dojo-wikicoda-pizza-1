
<?php
$dbh = new PDO('mysql:host=localhost;dbname=wikicoda-pizza', $root, $jedi);




$pizza1 = $_POST['pizza1'];
$pizza2 = $_POST['pizza2'];
$pizza3 = $_POST['pizza3'];
$pizza4 = $_POST['pizza4'];
$pizza5 = $_POST['pizza5'];
$pizza6 = $_POST['pizza6'];

$name = $_POST['name'];
$tel = $_POST['tel'];
$address = $_POST['address'];


$sql = "INSERT INTO Directory_Services(Name, Phone, Address, Date, Pizza1, Pizza2, Pizza3, Pizza4, Pizza5, Pizza6)
        VALUES ($name, $tel, $address, now(), $pizza1, $pizza2, $pizza3, $pizza4, $pizza5, $pizza6)";

 ?>
