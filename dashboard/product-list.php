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


            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <!--<li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                        </li>-->
                     <!--   <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Add new product</a>
                        </li>-->
                 
                        
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
                    <h1 class="page-header">Product List</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>





            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    
                   <table class="table table-striped">
                      <thead>
 
                      </thead>
                      <tbody>

                        <?php 

                        include 'db.php';

                        $sql = "SELECT * FROM `product`ORDER BY `date_released` DESC";
                        $result = mysqli_query($con , $sql);

                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>








 <table width="100%" class="table table-bordered">
          <tr>
            <td colspan="3"> 

               <div class="col-md-12">
                 <div class="col-md-12">
                 
                  <div class="blog-news-title">
                    <h2><?php echo $row['name']; ?></h2>
                    <h4>District : <?php echo $row['district']; ?></h4>
                    <h4>Product Name : <?php echo $row['product_name']; ?></h4>
                  </div>
                  <div class="blog-news-details">
                    <p>Discription        :     <?php echo $row['info']; ?></p>
                  </div>

                  <div class="blog-news-details">
                    <p>Owner : <?php echo $row['owner_name']; ?></p>
                    
                  </div>

                  <div class="blog-news-details">
                    <p>Tel : <?php echo $row['phone_number']; ?></p>
                    
                  </div>
                  <div class="blog-news-details">
                    <p>Rs : <?php echo $row['price']; ?></p>
                  </div>


                   <div class="blog-news-details">
                    <p>Date : <?php echo date("F d, Y", strtotime($row['date_released']))?></p>
                    
                  </div>


                   <div class="blog-news-details">
                                <a class="btn btn-info btn-sm" href="product-edit.php?id=<?php echo $row['id']; ?>">Edit Product</a>
                                <a class="btn btn-danger btn-sm" href="product-delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                    
                  </div>                  

             
                </div>
                <h1 class="page-header"></h1>
              </div>
            </td>
          </tr>
        </table>



                            <?php

                        }



                        ?>

                        
                      
                      </tbody>
                    </table>

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
