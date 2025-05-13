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
                        <i class="fa fa-users"></i>Registration/Add Employee
                    </li>

                </ol><!--breadcrumb Ends-->

            </div><!--col-lg-12 Ends-->

        </div><!--row Ends-->

        <div class="row"><!--2 row starts-->

            <div class="col-lg-12"><!--col-lg-12 starts-->

                <div class="panel panel-default"><!--panel panel-default starts-->

                    <div class="panel-heading"><!--panel-heading starts-->

                        <h3 class="panel-title">

                            <i class="fa fa-money fa-fw"></i>Add Employee

                        </h3>

                    </div><!--panel-heading Ends-->

                    <div class="panel-body"><!--panel-body starts-->

                        <form class="form-horizontal" method="POST" enctype="multipart/form-data"><!-- form-horizantal starts-->

                            <div class="form-group"><!--form-group starts-->

                                <label class="col-md-2 control-label">Employee Name:</label>

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

                                    <input type="text" name="address" class="form-control" required >

                                </div><!--col-md-6 Ends-->

                            </div><!--form-group Ends-->

                            <div class="form-group" ><!-- form-group Starts -->

                                <label class="col-md-2 control-label" ></label>

                                <div class="col-md-9" >

                                    <input type="submit" name="add" value="Add Employee" class="btn btn-primary form-control" >

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
    $contactNo = $_POST['contact'];
    $addresss = $_POST['address'];

    $insert_employees = "insert into employee (EmpName,ContactNo,Address) values ('$name','$contactNo','$addresss')";
    $run_employees = mysqli_query($Con, $insert_employees);

    if ($run_employees) {
        echo "<script> alert('Employee has been inserted successfully ')</script>";
        echo "<script> window.open('index.php?viewEmployee','_self')</script>";
    }
}
?>
<?php
//} ?>