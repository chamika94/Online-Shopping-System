
<?php

include 'db.php';

$id = $_GET['id'];

$select = "SELECT * FROM `product` WHERE id = '$id'";
$result  = mysqli_query($con, $select);

$rowdata = mysqli_fetch_assoc($result);



?>
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

    <title>Admin Panel</title>

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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                <a class="navbar-brand" href="index.php">Admin Panel</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->             
               
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                      
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">


                 
                        <li>
                            <a href="product-list.php"><i class="fa fa-table fa-fw"></i> Product list</a>
                        </li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Product management</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    
                    <form class="form-horizontal" method="POST" action="update.php" enctype="multipart/form-data">
                        <fieldset>

                        <!-- Form Name -->
                        <legend>Edit Product</legend>

                        <!-- Text input-->
                       <!-- <div class="form-group">
                          <label class="col-md-4 control-label" for="name"></label>  
                          <div class="col-md-4">
                          
                          <img style="width: 50%;" src="<?php echo $rowdata['pic']; ?>">


                          </div>
                        </div>-->

                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="name">Product Categary</label>  
                          <div class="col-md-4">

 


<select name="name" value="<?php echo $rowdata['name']; ?>">
  <option ><?php echo $rowdata['name']; ?></option>
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

                          <!--<input id="name" name="name" type="text" placeholder="Product Name" class="form-control input-md" required="" value="<?php echo $rowdata['name']; ?>">-->
                            
                          </div>
                        </div>


                        <div class="form-group">
                          <label class="col-md-4 control-label" for="phone_number">Product Name</label>  
                          <div class="col-md-4">
                          <input id="product_name" name="product_name" type="text" placeholder="Product Name" class="form-control input-md" required="" value="<?php echo $rowdata['product_name']; ?>">
                            
                          </div>
                        </div>  


                        <div class="form-group">
                          <label class="col-md-4 control-label" for="district">District</label>  
                          <div class="col-md-4">

<select name="district" value="<?php echo $rowdata['district']; ?>">
  <option ><?php echo $rowdata['district']; ?></option>
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

                         <!-- <input id="district" name="district" type="text" placeholder="District" class="form-control input-md" required="" value="<?php echo $rowdata['district']; ?>">-->
                            
                          </div>
                        </div>




                        <div class="form-group">
                          <label class="col-md-4 control-label" for="phone_number">Phone number</label>  
                          <div class="col-md-4">
                          <input id="phone_number" name="phone_number" type="text" placeholder="Phone number" class="form-control input-md" required="" value="<?php echo $rowdata['phone_number']; ?>">
                            
                          </div>
                        </div>                        

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="phone_number">Owner Name</label>  
                          <div class="col-md-4">
                          <input id="owner_name" name="owner_name" type="text" placeholder="Owner Name" class="form-control input-md" required="" value="<?php echo $rowdata['owner_name']; ?>">
                            
                          </div>
                        </div>

                        <!-- Textarea -->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="description">Product Description</label>
                          <div class="col-md-4">                     
                            <textarea class="form-control" rows="5" id="description" name="description"><?php echo $rowdata['info']; ?></textarea>
                          </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="price">Price</label>  
                          <div class="col-md-4">
                          <input id="price" name="price" type="text" placeholder="Price" class="form-control input-md" required="" value="<?php echo $rowdata['price']; ?>">
                            
                          </div>
                        </div>

                        <input type="hidden" name="hid" value="<?php echo $id; ?>">

                      

                        <?php

                        if (isset($_GET['status'])) {

                            if ($_GET['status'] == "done") {
                            ?>


                        <div class="form-group">
                          <label class="col-md-4 control-label" for="image">Status</label>
                          <div class="col-md-4">
                           <div class="alert alert-success" role="alert">
                              Product Update Successfully !
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
                            <button id="submit" name="submit" class="btn btn-warning">UPDATE</button>
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
