<?php
//if (!isset($_SESSION['username'])) {
//
//    echo "<script>window.open('login.php','_self')</script>";
//} else {
?>
<!DOCTYPE html>
<?php

session_start();
include("../admin_area/includes/db.php");
?>
<html>
    <head>
        
        <title>Login</title>

        <link href="styles/bootstrap.min.css" rel="stylesheet">        

        <link href="styles/style.css" rel="stylesheet">

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">


    </head>

    <body>

 
        <div class="row"><!--2 row starts-->

            <div class="col-lg-12"><!--col-lg-12 starts-->

                <div class="panel panel-default"><!--panel panel-default starts-->

                    <div class="panel-heading"><!--panel-heading starts-->

                        <h3 class="panel-title">

                            <i class="fa fa-users fa-fw"></i>User Login

                        </h3>

                    </div><!--panel-heading Ends-->

                    <div class="panel-body"><!--panel-body starts-->

                        <form class="form-horizontal" method="POST" enctype="multipart/form-data"><!-- form-horizantal starts-->

                            <div class="form-group"><!--form-group starts-->

                                <label class="col-md-2 control-label">User Name</label>

                                <div class="col-md-9"><!--col-md-6 starts-->

                                    <input type="text" name="name" class="form-control" required>

                                </div><!--col-md-6 Ends-->

                            </div><!--form-group Ends-->


                         
                            
                              <div class="form-group"><!--form-group starts-->

                                <label class="col-md-2 control-label">Password: </label>

                                <div class="col-md-9"><!--col-md-6 starts-->

                                    <input type="Password" name="pass" class="form-control" required>

                                </div><!--col-md-6 Ends-->

                            </div><!--form-group Ends-->



                            <div class="form-group" ><!-- form-group Starts -->

                                <label class="col-md-2 control-label" ></label>

                                <div class="col-md-9" >

                                    <input type="submit" name="add" value="Login" class="btn btn-primary form-control" >

                                </div>

                            </div><!-- form-group Ends -->

                        </form><!-- form-horizantal Ends-->

                    </div><!--panel-body Ends-->

                </div><!--panel panel-default Ends-->

            </div><!--col-lg-12 Ends-->

        </div><!--2 row Ends-->





    </body>
</html>

<?php
if (isset($_POST['add'])) {

 
$uname = $_POST['name'];

$pass = $_POST['pass'];

$get_admin = "select * from customers where Username='$uname' AND Password='$pass'";

$run_admin = mysqli_query($Con,$get_admin);

$count = mysqli_num_rows($run_admin);

if($count==1){

$_SESSION['uname']=$uname;

echo "<script>alert('You are Logged....... ')</script>";

echo "<script>window.open('index.php','_self')</script>";

}
else {

echo "<script>alert('Email or Password is Wrong')</script>";

}
}
?>
<?php
//} ?>