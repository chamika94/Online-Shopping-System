
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Products</title>

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

     <link id="switcher" href="assets/css/theme-color/green-theme.css" rel="stylesheet">




</head>

<body>

    <div>

      
			    <nav class="navbar navbar-default" role="navigation">  
			      <div class="container">
			        <div class="navbar-header">
			          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
			          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			            <span class="sr-only">Toggle navigation</span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			          </button>
			          <!-- LOGO -->              
			            
			          <!-- IMG BASED LOGO  -->
			           <a class="navbar-brand" href="index.php">Self Employee</a>
			        </div>
			        <div id="navbar" class="navbar-collapse collapse">
			          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
			            <!--<li class="active"><a href="index1.php">Home</a></li>-->
			            
			            <li><a href="addindex.php">MY ACCOUNT</a></li>
			            <li><a href="index.php">HOME</a></li>
			             <li ><a href="dashboard/index.php">ADMIN</a></li>

			          </ul>                     
			        </div><!--/.nav-collapse -->
			      </div>     
			    </nav>
 
  <section id="service">
    <div class="container">
            <div class="row">
                <div class="col-lg-12"  style=" width: 100%;padding:8px;margin-bottom:8px;">
                    <form method="POST" class="form-inline" action="products.php">
                         <div class="row">
                         
                          <div class="col-lg-6">
                          <select name="name" style=" width: 100%;padding:8px;margin-bottom:8px;">
                            <option >Product Category</option>
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
                                <br>
                          <select name="date" style="width: 100%;padding:8px;margin-bottom:8px;"  >
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
                            <div class="col-lg-6">
                           <button class="btn btn-info btn-sm" name="filter" style="width: 100%;padding:6px;margin-bottom:8px;" ><span class="glyphicon glyphicon-search"></span> Filter</button>
                           
                           <a href="products.php" class="btn btn-warning"  style="width: 100%;padding:6px;margin-bottom:8px;" ><span class="glyphicon glyphicon-refresh"></span> All Products</a>                         
                         </div>
                        </div>    
                    </form>
              </div>
            </div>
<br>

<?php
    include 'db.php';
    if(ISSET($_POST['filter'])){
        $date = $_POST['date'];
        $name = $_POST['name'];
        $query = mysqli_query($con, "SELECT * FROM `product` WHERE `district` = '$date' And `name` = '$name' ORDER BY `date_released` DESC") or die(mysqli_error());
        while($row = mysqli_fetch_array($query)){
?>

<!--//-----Fetch filter data ----//--> 
             
<div class="row">
  <div class="col-lg-12" style="border:1px solid #ccc; border-radius:15px; padding:8px; margin-bottom:5px; background-color:;">
      
      <div class="col-lg-6">
         <div style="border:1px solid #ccc; padding:1px; margin-bottom:2px;border-radius:15px; ">    
            <img style="border-radius:15px"src="<?php echo $row['pic']; ?>" alt="" class="img-responsive" >
          </div>   
      </div>

      <div class="col-lg-6"> 

            <div class="blog-news-title"  >
              <h2>Rs - <?php echo $row['price']; ?></h2>
            </div>

            <div class="blog-news-details">
              <p>Date : <?php echo date("F d, Y", strtotime($row['date_released']))?></p>
            </div>

            <div style="border:1px solid #ccc; padding:0px; margin-bottom:16px; ">                         
                <li class="dropdown"><i class="fa fa-sign-out fa-fw"></i>
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">More photos <i class="fa fa-caret-down"></i></a>
                    <ul class="dropdown-menu dropdown-user">
                      <div style="border:1px solid #ccc; padding:2px; margin-bottom:16px; ">  
                        <li><img src="<?php echo $row['pic1']; ?>" alt="" class="img-responsive" >
                        </li>
                        <br>
                        <li><img src="<?php echo $row['pic2']; ?>" alt="" class="img-responsive" >
                        </li>
                        <br>
                        <li><img src="<?php echo $row['pic3']; ?>" alt="" class="img-responsive" >
                        </li>
                      </div>
                    </ul>
                </li>
            </div>

            <div style="border:1px solid #ccc; padding:0px; margin-bottom:16px; "> 
                  <li class="dropdown"><i class="fa fa-sign-out fa-fw"></i>           
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Discription <i class="fa fa-caret-down"></i></a>
                     <ul class="dropdown-menu dropdown-user">
                      <li>
                        <div class="blog-news-title" >
                          <h2 style="margin-left: 20%;"> <?php echo $row['product_name']; ?></h2>
                        </div>                      
                        <div class="blog-news-details"style=" border-radius:15px; padding:10px; margin-bottom:16px;">
                           <p>Discription :  <?php echo $row['info']; ?></p>
                        </div>
                      </li>
                    </ul>
                  </li> 
            </div>

            <div style="border:1px solid #ccc; padding:0px; margin-bottom:16px; ">                         
              <li class="dropdown"><i class="fa fa-sign-out fa-fw"></i>
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Contacts <i class="fa fa-caret-down"></i></a>
                  <ul class="dropdown-menu dropdown-user">
                    <li>
                      <div class="blog-news-details"style=" border-radius:5px; padding:16px; margin-bottom:16px;">
                        <p>Owner : <?php echo $row['owner_name']; ?></p>
                        <p>Tel : <?php echo $row['phone_number']; ?></p>
                        <p>District : <?php echo $row['district']; ?></p>
                      </div>
                    </li>
                  </ul>
              </li>
            </div>
                   <div class="blog-news-details">
                                <a class="btn btn-info btn-sm" href="newpage.php?id=<?php echo $row['id']; ?>">More Information</a>
                  </div>  
                    <br>
                  <div class="blog-news-details">
                     <a href="addindex.php" class="btn btn-warning">ADD PRODUCT</a> 
                  </div>                
    </div>
    
  </div>
</div>

<!--//-----End fetch filter data ----//--> 

<?php
        }
    }else{
?>
<?php
        $query = mysqli_query($con, "SELECT * FROM `product` ORDER BY `date_released` DESC") or die(mysqli_error());
        while($row = mysqli_fetch_array($query)){
?>
  <!--//-----Fetch data ----//-->       
<div class="row">
  <div class="col-lg-12" style="border:1px solid #ccc; border-radius:15px; padding:8px; margin-bottom:5px; background-color:;">
      
      <div class="col-lg-6">
         <div style="border:1px solid #ccc; padding:1px; margin-bottom:2px;border-radius:15px;">    
            <img style="border-radius:15px"src="<?php echo $row['pic']; ?>" alt="" class="img-responsive" >
          </div>   
      </div>

      <div class="col-lg-6"> 

            <div class="blog-news-title"  >
              <h2>Rs - <?php echo $row['price']; ?></h2>
            </div>

            <div class="blog-news-details">
              <p>Date : <?php echo date("F d, Y", strtotime($row['date_released']))?></p>
            </div>

            <div style="border:1px solid #ccc; padding:0px; margin-bottom:16px; ">                         
                <li class="dropdown"><i class="fa fa-sign-out fa-fw"></i>
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">More photos <i class="fa fa-caret-down"></i></a>
                    <ul class="dropdown-menu dropdown-user">
                      <div style="border:1px solid #ccc; padding:2px; margin-bottom:16px; ">  
                        <li><img src="<?php echo $row['pic1']; ?>" alt="" class="img-responsive" >
                        </li>
                        <br>
                        <li><img src="<?php echo $row['pic2']; ?>" alt="" class="img-responsive" >
                        </li>
                        <br>
                        <li><img src="<?php echo $row['pic3']; ?>" alt="" class="img-responsive" >
                        </li>
                      </div>
                    </ul>
                </li>
            </div>

            <div style="border:1px solid #ccc; padding:0px; margin-bottom:16px; "> 
                  <li class="dropdown"><i class="fa fa-sign-out fa-fw"></i>           
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Discription <i class="fa fa-caret-down"></i></a>
                     <ul class="dropdown-menu dropdown-user">
                      <li>
                        <div class="blog-news-title" >
                          <h2 style="margin-left: 20%;"> <?php echo $row['product_name']; ?></h2>
                        </div>                      
                        <div class="blog-news-details"style=" border-radius:15px; padding:10px; margin-bottom:16px;">
                           <p>Discription :  <?php echo $row['info']; ?></p>
                        </div>
                      </li>
                    </ul>
                  </li> 
            </div>

            <div style="border:1px solid #ccc; padding:0px; margin-bottom:16px; ">                         
              <li class="dropdown"><i class="fa fa-sign-out fa-fw"></i>
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Contacts <i class="fa fa-caret-down"></i></a>
                  <ul class="dropdown-menu dropdown-user">
                    <li>
                      <div class="blog-news-details"style=" border-radius:5px; padding:16px; margin-bottom:16px;">
                        <p>Owner : <?php echo $row['owner_name']; ?></p>
                        <p>Tel : <?php echo $row['phone_number']; ?></p>
                        <p>District : <?php echo $row['district']; ?></p>
                      </div>
                    </li>
                  </ul>
              </li>
            </div>
                   <div class="blog-news-details">
                     <a class="btn btn-info btn-sm" href="newpage.php?id=<?php echo $row['id']; ?>">More Information</a>
                  </div>
                  <br>
                  <div class="blog-news-details">
                     <a href="addindex.php"class="btn btn-lg btn-success btn-block"style=" border-radius:18px; padding:10px; margin-bottom:0px;"><i class="fa fa-sign-out fa-fw"></i> POST ADD</a> 
                  </div>
    </div>

  </div>
</div>

<!--//-----End fetch data ----//-->  

<?php
        }
?>
<?php
    }
?>   

</div>
               
  </section>
      
        <!-- /#page-wrapper -->

    
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
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>

</html>
