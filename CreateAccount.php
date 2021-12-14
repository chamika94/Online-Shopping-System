



<?php
  include 'db.php';
 /* $errors = array();
  $first_name='';
  $last_name='';
  $email='';
  $password='';*/

  if(isset($_POST['create'])){
     
  /*$first_name=$_POST['first_name'];
  $last_name=$_POST['last_name'];
  $email=$_POST['email'];
  $password=$_POST['password'];*/

     //checking required fields
   $req_fields = array('first_name','last_name','email','password');

   foreach ($req_fields as $field){
    if(empty(trim($_POST[$field]))){
        $errors[] = $field;
    }
   }
   // cheking if email address alredy exists
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $query = "SELECT * FROM user WHERE email = '{$email}' LIMIT 1";

    $result_set = mysqli_query($con, $query);

    if($result_set){
        if(mysqli_num_rows($result_set)==1){
           $errors[]='Email address already exists';
        }
    }
   
     if(empty($errors)){

        // no errors found... adding new record
          $first_name = mysqli_real_escape_string($con, $_POST['first_name']);
           $last_name = mysqli_real_escape_string($con, $_POST['last_name']);
           $password = mysqli_real_escape_string($con, $_POST['password']);
            // email address is already sanitized
            //$hashed_password = sha1($password);

           $query ="INSERT INTO user ( ";
           $query .= "first_name, last_name, email, password";
           $query .= ") VALUES (";
           $query .= "'{$first_name}', '{$last_name}', '{$email}', '{$password}'";
           $query .=")";    

           $result = mysqli_query($con, $query);

            if($result){
                //query successfull
                header('Location: login.php?user_added=successful');
            }  else{
                //$errors[]='fail';
            } 
     }
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

    <title>Create Account</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

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



    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Create Account</h3>

                    </div>


                    <div class="panel-body">

                        <form role="form" method="POST" action="CreateAccount.php">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Frist Name" name="first_name" type="text" autofocus >

                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Last Name" name="last_name" type="text"  >

                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Email" name="email" type="text" >

                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
 

<?php

 if(!empty($errors)){
     echo '<h4><font color="red">Entered Same Details Are Wrong</font></h4>';
    }
?>

                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" name="create" class="btn btn-lg btn-success btn-block">Create</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>

