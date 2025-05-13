<?php
//if (!isset($_SESSION['username'])) {
//
//    echo "<script>window.open('login.php','_self')</script>";
//} else {
?>
<!DOCTYPE html>
<?php
include("../admin_area/includes/db.php");
?>
<html>
    <head>
        
        <title>Register</title>

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

                            <i class="fa fa-users fa-fw"></i>User Registration

                        </h3>

                    </div><!--panel-heading Ends-->

                    <div class="panel-body"><!--panel-body starts-->

                        <form class="form-horizontal" method="POST" enctype="multipart/form-data"><!-- form-horizantal starts-->

                            <div class="form-group"><!--form-group starts-->

                                <label class="col-md-2 control-label">Name</label>

                                <div class="col-md-9"><!--col-md-6 starts-->

                                    <input type="text" name="name" class="form-control" required>

                                </div><!--col-md-6 Ends-->

                            </div><!--form-group Ends-->


                            <div class="form-group" ><!-- form-group Starts -->

                                <label class="col-md-2 control-label" > Contact No: </label>

                                <div class="col-md-9" >

                                    <input type="text" name="contact" class="form-control" required >

                                </div>

                            </div><!-- form-group Ends -->  

                            <div class="form-group"><!--form-group starts-->

                                <label class="col-md-2 control-label">Address: </label>

                                <div class="col-md-9"><!--col-md-6 starts-->

                                    <input type="text" name="address" class="form-control" required>

                                </div><!--col-md-6 Ends-->

                            </div><!--form-group Ends-->
                            
                              <div class="form-group"><!--form-group starts-->

                                <label class="col-md-2 control-label">UserName: </label>

                                <div class="col-md-9"><!--col-md-6 starts-->

                                    <input type="text" name="uname" class="form-control" required>

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

                                    <input type="submit" name="add" value="Register" class="btn btn-primary form-control" >

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

    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $username = $_POST['uname'];
    $password = $_POST['pass'];

    $insert_users = "insert into customers (CusName,CusContactNo,CusAddress,Username,password) values ('$name','$contact','$address','$username','$password')";
    $run_users = mysqli_query($Con, $insert_users);

    if ($run_users) {
        echo "<script> alert('Registered successfully ')</script>";
        echo "<script> window.open('index.php?viewUsers','_self')</script>";
    }
}
?>
<?php
//} ?>