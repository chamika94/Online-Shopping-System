<?php

include 'db.php';

   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file_name);
         //echo "Success";

         $imagepath = "images/".$file_name;

      }else{
        // print_r($errors);
      }
   }







   if(isset($_FILES['image1'])){
      $errors= array();
      $file_name = $_FILES['image1']['name'];
      $file_size =$_FILES['image1']['size'];
      $file_tmp =$_FILES['image1']['tmp_name'];
      $file_type=$_FILES['image1']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image1']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images1/".$file_name);
         //echo "Success";

         $imagepath1 = "images1/".$file_name;

      }else{
        // print_r($errors);
      }
   }


   if(isset($_FILES['image2'])){
      $errors= array();
      $file_name = $_FILES['image2']['name'];
      $file_size =$_FILES['image2']['size'];
      $file_tmp =$_FILES['image2']['tmp_name'];
      $file_type=$_FILES['image2']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image2']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images2/".$file_name);
         //echo "Success";

         $imagepath2 = "images2/".$file_name;

      }else{
        // print_r($errors);
      }
   }



   if(isset($_FILES['image3'])){
      $errors= array();
      $file_name = $_FILES['image3']['name'];
      $file_size =$_FILES['image3']['size'];
      $file_tmp =$_FILES['image3']['tmp_name'];
      $file_type=$_FILES['image3']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image3']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images3/".$file_name);
         //echo "Success";

         $imagepath3 = "images3/".$file_name;

      }else{
        // print_r($errors);
      }
   }






$name = $_POST['name'];
$product_name = $_POST['product_name'];
$district = $_POST['district'];
$phone_number = $_POST['phone_number'];
$owner_name = $_POST['owner_name'];
$description = $_POST['description'];
$price = $_POST['price'];
$date_released = $_POST['date_released'];

$query = "INSERT INTO `product`(`name`,`product_name`,`district`, `phone_number`,`owner_name`,`info`, `pic`,`pic1`,`pic2`,`pic3`,`price`,`date_released`) VALUES ('$name','$product_name','$district','$phone_number','$owner_name','$description', '$imagepath','$imagepath1','$imagepath2','$imagepath3', '$price','$date_released')";
$result = mysqli_query($con , $query);

header('Location: products.php?status=done');

?>