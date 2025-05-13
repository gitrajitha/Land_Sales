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
if (isset($_GET['editProvince'])) {

    $edit_id = $_GET['editProvince'];

    $get_province = "select * from provinces where ProvinceId='$edit_id'";

    $run_edit = mysqli_query($Con, $get_province);

    $row_edit = mysqli_fetch_array($run_edit);

    $pid = $row_edit['ProvinceId'];
    $name = $row_edit['Province'];
    
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

                        <i class="fa fa-dashboard"> </i> Dashboard / Edit Provinces

                    </li>

                </ol><!-- breadcrumb Ends -->

            </div><!-- col-lg-12 Ends -->

        </div><!-- row Ends -->

 <div class="panel-body"><!--panel-body starts-->

                        <form class="form-horizontal" method="POST" enctype="multipart/form-data"><!-- form-horizantal starts-->

                            <div class="form-group"><!--form-group starts-->

                                <label class="col-md-2 control-label">Province Name:</label>

                                <div class="col-md-9"><!--col-md-6 starts-->

                                    <input type="text" name="name" class="form-control" required value="<?php echo $name; ?>">

                                </div><!--col-md-6 Ends-->

                            </div><!--form-group Ends-->



                            <div class="form-group" ><!-- form-group Starts -->

                                <label class="col-md-2 control-label" ></label>

                                <div class="col-md-9" >

                                    <input type="submit" name="update" value="Update Province" class="btn btn-primary form-control"  >

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
if (isset($_POST['update'])) {

    $name = $_POST['name'];

    $update_province = "update provinces set Province = '$name' where ProvinceId = '$pid'";

    $run_province = mysqli_query($Con, $update_province);



    if ($run_province) {

        echo "<script> alert('Province has been updated successfully') </script>";

        echo "<script>window.open('index.php?viewProvinceandCities','_self')</script>";
    }
}
?>

<?php// } ?>
