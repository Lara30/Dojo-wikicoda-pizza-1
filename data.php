<? php

//Connecting to sql db.
$connect = mysqli_connect("my host","my user","my passwrod","my db");
//Sending form data to sql db.
mysqli_query($connect,"INSERT INTO posts (category, title, contents, tags)
VALUES ('$_POST[post_category]', '$_POST[post_title]', '$_POST[post_contents]', '$_POST[post_tags]')";



$pizza1 = $_POST['pizza1'];
$pizza2 = $_POST['pizza2'];
$pizza3 = $_POST['pizza3'];
$pizza4 = $_POST['pizza4'];
$pizza5 = $_POST['pizza5'];
$pizza6 = $_POST['pizza6'];

$name = $_POST['name'];
$tel = $_POST['tel'];
$address = $_POST['address'];





$sql = "INSERT INTO Directory_Services
        VALUES ('$name', '$tel', '$address', now(), '$pizza1', '$pizza2', '$pizza3', '$pizza4', '$pizza5', '$pizza6')";






 ?>
