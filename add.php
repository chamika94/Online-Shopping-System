<?php

include 'db.php';

$name = $_POST['name'];
$comment = $_POST['comment'];
$id = $_POST['hid'];

$query = "INSERT INTO `comments`(`name`,`comment`, `id`) VALUES ('$name','$comment','$id')";
$result = mysqli_query($con , $query);

header('Location: products.php');

?>