<?php

include 'db.php';

$id = $_GET['id'];

$select = "SELECT * FROM `product` WHERE id = '$id'";
$result  = mysqli_query($con, $select);

$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

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

    
        <!-- Navigation -->
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
                 <a class="navbar-brand" href="index.php"> <i class="fa fa-phone"></i> <?php echo $row['phone_number']; ?></a>
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
      <!-- End Navigation -->
      
  <section id="service">
    <div class="container">
       <div class="row"style="border:1px solid #ccc; border-radius:15px; padding:8px; margin-bottom:5px; background-color:;">
 
      <div class="col-lg-6">
          <div style="border:1px solid #ccc; padding:1px; margin-bottom:2px;border-radius:15px; ">    
            <img style="border-radius:15px"src="<?php echo $row['pic']; ?>" alt="" class="img-responsive" >
          </div>

          <div class="blog-news-title"  >
                <h3><?php echo $row['name']; ?> : <?php echo $row['product_name']; ?></h3>

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
      </div>

      <div class="col-lg-6"> 
            <div class="blog-news-title"  >
              <h2>Rs - <?php echo $row['price']; ?></h2>
            </div>

            <div class="blog-news-details">
              <p>Date : <?php echo date("F d, Y", strtotime($row['date_released']))?></p>
            </div>

         <div class="blog-news-title"  >
                
                <p>Owner : <?php echo $row['owner_name']; ?></p>
                <p>Tel : <?php echo $row['phone_number']; ?></p>
                <p>District : <?php echo $row['district']; ?></p>
          </div> 
            <div class="blog-news-title"  >
              <p>Discription :  <?php echo $row['info']; ?></p>
            </div>
      </div>
</div>        
              <div class="row">
                <div class="col-lg-12">
                  <!--Start form-->
                    <form class="form-horizontal" method="POST" action="add.php" enctype="multipart/form-data">
                        <fieldset>                        
                            <div class="form-group">
                              <label class="col-md-4 control-label" for="name"></label>  
                              <div class="col-md-4">
                              <input id="name" name="name" type="text" placeholder="Your name" class="form-control input-md" required="" value="">
                              </div>
                            </div>
                        <!-- Textarea -->
                            <div class="form-group">
                              <label class="col-md-4 control-label" for="comment"></label>
                              <div class="col-md-4">                     
                                <textarea class="form-control" rows="5" id="comment" name="comment"placeholder="Write a comment here......"></textarea>
                              </div>
                            </div>
                            <input type="hidden" name="hid" value="<?php echo $id; ?>">
                            <!-- Button -->
                            <div class="form-group">
                              <label class="col-md-4 control-label" for="submit"></label>
                              <div class="col-md-4">
                                <button id="submit" name="submit" class="btn btn-info btn-sm">ADD COMMENT</button>
                              </div>
                            </div>
                      </fieldset>
                   </form>
                 <!--End form-->  
              </div>
           </div>
<?php

$id = $_GET['id'];

$query = mysqli_query($con, "SELECT * FROM `comments` WHERE `id` = '$id'  ORDER BY `comment_id` DESC") or die(mysqli_error());
  while($row = mysqli_fetch_array($query)){

?>

<div class="row">
  <div class="col-lg-12" style="border:1px solid #ccc; border-radius:15px; padding:8px; margin-bottom:5px; background-color:#E0F8F7;">
     <img style="border:0px solid #ccc; border-radius:50px;"src="assets/images/default_avatar.gif">
     <h5 style="font-weight: bold;">Submit by  : <?php echo $row['name']; ?> at <?php echo $row['date']; ?></h5>
     <p>Comment : <?php echo $row['comment']; ?></p>
  </div>
</div>

<?php 
}
?>

 </div>
</section>
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
