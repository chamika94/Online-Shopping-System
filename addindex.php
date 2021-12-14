<?php

session_start();

if(!isset($_SESSION['userID'])) {
    header('Location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en"> 

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My Account</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">My Account</a>
            </div>
            <!-- /.navbar-header -->



            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                     
                           <li><a href="products.php"><i class="fa fa-sign-out fa-fw"></i> Products</a>
                        </li> 
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>                        
                    </ul>
                </div>
            </div>
        </nav>

        <div id="page-wrapper">

            <div class="row">
                <div class="col-lg-12">
                    
                    <form class="form-horizontal" method="POST" action="add-product.php" enctype="multipart/form-data">
                        <fieldset>

                        <!-- Form Name -->
                        <legend>Add Product</legend>

                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="name">Product Categary</label>  
                          <div class="col-md-4">
                         <!-- <input id="name" name="name" type="text" placeholder="Product Name" class="form-control input-md" required="">-->
<select name="name">
  <option >Products</option>
  <option >Fish Trade</option>
  <option > Aqua Culture</option>
  <option >Technical</option>
  <option >Agriculture</option>
  <option >Food</option>
  <option >BeutyCulture</option>
  <option >Photography</option>
  <option >Aperal</option>
  <option >Animal Husbandry</option>
  <option >Land and Houses</option>
  <option >Infomation Technology</option>
  <option >Construction</option>
  <option >Other Trade</option>
</select>
                            
                          </div>
                        </div>



                        <div class="form-group">
                          <label class="col-md-4 control-label" for="product_name">Product Name</label>  
                          <div class="col-md-4">
                          <input id="product_name" name="product_name" type="text" placeholder="Product Name" class="form-control input-md" required="">
                            
                          </div>
                        </div>


                        <div class="form-group">
                          <label class="col-md-4 control-label" for="district">District</label>  
                          <div class="col-md-4">
                         <!-- <input id="distict" name="district" type="text" placeholder="District" class="form-control input-md" required="">-->

<select name="district">
  <option >District</option>
  <option >Anuradhapura</option>
  <option >Ampara</option>
  <option >Badulla</option>
  <option >Baticaloa</option>
  <option >Colombo</option>
  <option >Galle</option>
  <option >Gampaha</option>
  <option >Hambantota</option>
  <option >Jaffna</option>
  <option >kalutara</option>
  <option >kurunegala</option>
  <option >kilinochchi</option>
  <option >kandy</option>
  <option >Mannar</option>
  <option >Matale</option>
  <option >Matara</option>
  <option >Monaragala</option>
  <option >Mullaitivu</option>
  <option >Nuwara-Eliya</option>
  <option >Polonnaruwa</option>
  <option >Puttalam</option>
  <option >Ratnapura</option>
  <option >Trincomalee</option>
  <option >Vavuniya</option>

</select>
                            
                          </div>
                        </div>


                        <div class="form-group">
                          <label class="col-md-4 control-label" for="phone_number">Phone number</label>  
                          <div class="col-md-4">
                          <input id="phone_number" name="phone_number" type="text" placeholder="Phone number" class="form-control input-md" required="">
                            
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="owner_name">Owner Name</label>  
                          <div class="col-md-4">
                          <input id="owner_name" name="owner_name" type="text" placeholder="Owner Name" class="form-control input-md" required="">
                            
                          </div>
                        </div>



                        <!-- Textarea -->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="description">Product Description</label>
                          <div class="col-md-4">                     
                            <textarea class="form-control" rows="5" id="description" name="description" placeholder="Short Description"></textarea>
                          </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="price">Price</label>  
                          <div class="col-md-4">
                          <input id="price" name="price" type="text" placeholder="Price" class="form-control input-md" required="">
                            
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="date_released">Date Released</label>
                          <div class="col-md-4">
                          <input type="date" class="form-control" name="date_released" required="required"/>
                        </div>
                        </div>

                        <!-- File Button --> 
                        <div class="form-group">
                          <h4 style="width: 100%;padding:8px;margin-bottom:8px; background-color: yellow;"><font color="red">Following Image File size must be excately 2 MB.If not can't show your photos</font></h4>
                          <div class="col-md-4">
                            
                          </div>
                        </div>     
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="image">Front Image</label>
                          <div class="col-md-4">
                            <input id="image" name="image" class="input-file" type="file">
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="image1">Other Product Image</label>
                          <div class="col-md-4">
                            <input id="image1" name="image1" class="input-file" type="file">
                          </div>
                        </div>


                        <div class="form-group">
                          <label class="col-md-4 control-label" for="image2">Other Product Image</label>
                          <div class="col-md-4">
                            <input id="image2" name="image2" class="input-file" type="file">
                          </div>
                        </div>



                        <div class="form-group">
                          <label class="col-md-4 control-label" for="image3">Other Product Image</label>
                          <div class="col-md-4">
                            <input id="image3" name="image3" class="input-file" type="file">
                          </div>
                        </div>





                        <?php

                        if (isset($_GET['status'])) {

                            if ($_GET['status'] == "done") {
                            ?>


                        <div class="form-group">
                          <label class="col-md-4 control-label" for="image">Status</label>
                          <div class="col-md-4">
                           <div class="alert alert-success" role="alert">
                              Product Added Successfully !
                            </div>
                          </div>
                        </div>

                            <?php
                        }else {
                             ?>


                        <div class="form-group">
                          <label class="col-md-4 control-label" for="image">Status</label>
                          <div class="col-md-4">
                           <div class="alert alert-danger" role="alert">
                              Error !
                            </div>
                          </div>
                        </div>

                            <?php

                        }
}
                        ?>

                        <!-- Button -->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="submit"></label>
                          <div class="col-md-4">
                            <button id="submit" name="submit" class="btn btn-primary">ADD PRODUCT</button>
                          </div>
                        </div>

                        </fieldset>
                        </form>


                </div>
            </div>
            
           
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="vendor/raphael/raphael.min.js"></script>
    <script src="vendor/morrisjs/morris.min.js"></script>
    <script src="data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
