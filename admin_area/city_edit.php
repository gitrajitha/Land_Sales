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
if (isset($_GET['editCity'])) {

    $edit_id = $_GET['editCity'];

    $get_city = "select * from provinces p inner join city c on c.ProvinceId = p.ProvinceId where c.CityId='$edit_id'";

    $run_edit = mysqli_query($Con, $get_city);

    $row_edit = mysqli_fetch_array($run_edit);

    $city = $row_edit['City'];
    $provinceid = $row_edit['ProvinceId'];
    $provinceName = $row_edit['Province'];
}
?>


<!DOCTYPE html>

<html>

    <head>

        <title> Edit City </title>


        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
        <script>tinymce.init({selector: 'textarea'});</script>

    </head>

    <body>

        <div class="row"><!-- row Starts -->

            <div class="col-lg-12"><!-- col-lg-12 Starts -->

                <ol class="breadcrumb"><!-- breadcrumb Starts -->

                    <li class="active">

                        <i class="fa fa-dashboard"> </i> Dashboard / Edit Cities

                    </li>

                </ol><!-- breadcrumb Ends -->

            </div><!-- col-lg-12 Ends -->

        </div><!-- row Ends -->

        <div class="panel-body"><!--panel-body starts-->

            <form class="form-horizontal" method="POST" enctype="multipart/form-data"><!-- form-horizantal starts-->

                <div class="form-group"><!--form-group starts-->

                    <label class="col-md-2 control-label">City Name:</label>

                    <div class="col-md-9"><!--col-md-6 starts-->

                        <input type="text" name="name" class="form-control" required value="<?php echo $city; ?>">

                    </div><!--col-md-6 Ends-->

                </div><!--form-group Ends-->

                <div class="form-group" ><!-- form-group Starts -->

                    <label class="col-md-2 control-label" > Province </label>

                    <div class="col-md-9" >

                        <select name="provinceid" class="form-control" >

                            <option value="<?php echo $provinceid; ?>" > <?php echo $provinceName; ?> </option>


                            <?php
                            $get_provinces = "select * from provinces where ProvinceId != '$provinceid'";

                            $run_province = mysqli_query($Con, $get_provinces);

                            while ($row_province = mysqli_fetch_array($run_province)) {

                                $p_id = $row_province['ProvinceId'];

                                $province = $row_province['Province'];

                                echo "<option value='$p_id' >$province</option>";
                            }
                            ?>


                        </select>

                    </div>

                </div><!-- form-group Ends -->



                <div class="form-group" ><!-- form-group Starts -->

                    <label class="col-md-2 control-label" ></label>

                    <div class="col-md-9" >

                        <input type="submit" name="update" value="Update City" class="btn btn-primary form-control"  >

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

    $city = $_POST['name'];
    $provinceId = $_POST['provinceid'];
    
    

    $update_city = "update city set City = '$city', ProvinceId = '$provinceId' where CityId = '$edit_id'";

    $run_city = mysqli_query($Con, $update_city);



    if ($run_city) {

        echo "<script> alert('City has been updated successfully') </script>";

        echo "<script>window.open('index.php?viewProvinceandCities','_self')</script>";
    }
}
?>

<?php // } ?>
