<?php
//if (!isset($_SESSION['username'])) {
//
//    echo "<script>window.open('login.php','_self')</script>";
//} else {
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Add Users</title>




        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
        <script>tinymce.init({selector: 'textarea'});</script>

    </head>

    <body>

        <div class="row"><!--row starts-->

            <div class="col-lg-12"><!--col-lg-12 starts-->

                <ol class="breadcrumb"><!--breadcrumb starts-->

                    <li class="active">
                        <i class="fa fa-users"></i>Registration/Add Users
                    </li>

                </ol><!--breadcrumb Ends-->

            </div><!--col-lg-12 Ends-->

        </div><!--row Ends-->

        <div class="row"><!--2 row starts-->

            <div class="col-lg-12"><!--col-lg-12 starts-->

                <div class="panel panel-default"><!--panel panel-default starts-->

                    <div class="panel-heading"><!--panel-heading starts-->

                        <h3 class="panel-title">

                            <i class="fa fa-money fa-fw"></i>Add users

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

                                <label class="col-md-2 control-label" > Username </label>

                                <div class="col-md-9" >

                                    <input type="text" name="uname" class="form-control" required >

                                </div>

                            </div><!-- form-group Ends -->  

                            <div class="form-group"><!--form-group starts-->

                                <label class="col-md-2 control-label">Password</label>

                                <div class="col-md-9"><!--col-md-6 starts-->

                                    <input type="password" name="pass" class="form-control" required>

                                </div><!--col-md-6 Ends-->

                            </div><!--form-group Ends-->

                            <div class="form-group" ><!-- form-group Starts -->

                                <label class="col-md-2 control-label" ></label>

                                <div class="col-md-9" >

                                    <input type="submit" name="add" value="Add Users" class="btn btn-primary form-control" >

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
    $username = $_POST['uname'];
    $password = $_POST['pass'];

    $insert_users = "insert into users (name,username,password) values ('$name','$username','$password')";
    $run_users = mysqli_query($Con, $insert_users);

    if ($run_users) {
        echo "<script> alert('User has been inserted successfully ')</script>";
        echo "<script> window.open('index.php?viewUsers','_self')</script>";
    }
}
?>
<?php
//} ?>