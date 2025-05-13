<?php
//
//if(!isset($_SESSION['username'])){
//
//echo "<script>window.open('login.php','_self')</script>";
//
//
//} else {
?>

<?php
if (isset($_GET['editEmployee'])) {

    $edit_id = $_GET['editEmployee'];

    $get_user = "select * from employee where EmpId='$edit_id'";

    $run_edit = mysqli_query($Con, $get_user);

    $row_edit = mysqli_fetch_array($run_edit);

    $uid = $row_edit['EmpId'];
    $name = $row_edit['EmpName'];
    $contactNo = $row_edit['ContactNo'];
    $address = $row_edit['Address'];
}
?>


<!DOCTYPE html>

<html>

    <head>

        <title> Edit Users </title>


        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
        <script>tinymce.init({selector: 'textarea'});</script>

    </head>

    <body>

        <div class="row"><!-- row Starts -->

            <div class="col-lg-12"><!-- col-lg-12 Starts -->

                <ol class="breadcrumb"><!-- breadcrumb Starts -->

                    <li class="active">

                        <i class="fa fa-dashboard"> </i> Dashboard / Edit Users

                    </li>

                </ol><!-- breadcrumb Ends -->

            </div><!-- col-lg-12 Ends -->

        </div><!-- row Ends -->


        <div class="row"><!-- 2 row Starts --> 

            <div class="col-lg-12"><!--col-lg-12 starts-->

                <div class="panel panel-default"><!--panel panel-default starts-->

                    <div class="panel-heading"><!--panel-heading starts-->

                        <h3 class="panel-title">

                            <i class="fa fa-money fa-fw"></i>Edit Employee

                        </h3>

                    </div><!--panel-heading Ends-->

                    <div class="panel-body"><!--panel-body starts-->

                        <form class="form-horizontal" method="POST" enctype="multipart/form-data"><!-- form-horizantal starts-->

                            <div class="form-group"><!--form-group starts-->

                                <label class="col-md-3 control-label">Name</label>

                                <div class="col-md-6"><!--col-md-6 starts-->

                                    <input type="text" name="name" class="form-control" required value="<?php echo $name; ?>">

                                </div><!--col-md-6 Ends-->

                            </div><!--form-group Ends-->


                            <div class="form-group"><!--form-group starts-->

                                <label class="col-md-3 control-label">Contact No:</label>

                                <div class="col-md-6"><!--col-md-6 starts-->

                                    <input type="text" name="contactNo" class="form-control" required value="<?php echo $contactNo; ?>">

                                </div><!--col-md-6 Ends-->

                            </div><!--form-group Ends-->
                            
                            

                            <div class="form-group"><!--form-group starts-->

                                <label class="col-md-3 control-label">Address</label>

                                <div class="col-md-6"><!--col-md-6 starts-->

                                    <input type="text" name="address" class="form-control" required value="<?php echo $address; ?>">

                                </div><!--col-md-6 Ends-->

                            </div><!--form-group Ends-->

                            <div class="form-group" ><!-- form-group Starts -->

                                <label class="col-md-3 control-label" ></label>

                                <div class="col-md-6" >

                                    <input type="submit" name="update" value="Update Employees" class="btn btn-primary form-control" >

                                </div>

                            </div><!-- form-group Ends -->





                        </form><!-- form-horizantal Ends-->

                    </div><!--panel-body Ends-->

                </div><!--panel panel-default Ends-->

            </div><!--col-lg-12 Ends-->


        </div><!-- 2 row Ends --> 




    </body>

</html>

<?php
if (isset($_POST['update'])) {

    $name = $_POST['name'];
    $contact = $_POST['contactNo'];
    $address = $_POST['address'];


    $update_users = "update employee set EmpName = '$name', ContactNo = '$contact', Address = '$address' where EmpId = '$uid'";

    $run_users = mysqli_query($Con, $update_users);



    if ($run_users) {

        echo "<script> alert('Employee has been updated successfully') </script>";

        echo "<script>window.open('index.php?viewEmployee','_self')</script>";
    }
}
?>

<?php// } ?>
