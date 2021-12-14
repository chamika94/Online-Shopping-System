<?php

include 'db.php';



$name = $_POST['name'];
$product_name = $_POST['product_name'];
$district = $_POST['district'];
$phone_number = $_POST['phone_number'];
$owner_name = $_POST['owner_name'];
$description = $_POST['description'];
$price = $_POST['price'];
$id = $_POST['hid'];

$query = "UPDATE `product` SET `name`='$name',`product_name`='$product_name',`district`='$district',`phone_number`='$phone_number',`owner_name`='$owner_name',`info`='$description',`price`='$price' WHERE `id`= '$id'";
$result = mysqli_query($con , $query);

header('Location: product-list.php');

?>