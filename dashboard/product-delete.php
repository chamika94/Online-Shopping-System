<?php

include 'db.php';

$id = $_GET['id'];

$sql = "DELETE FROM `product` WHERE id = '$id'";
$result = mysqli_query($con , $sql);

header('Location: product-list.php?product_deleted')

?>