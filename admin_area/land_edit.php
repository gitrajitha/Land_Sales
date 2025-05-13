<?php
//if (!isset($_SESSION['username'])) {
//
//    echo "<script>window.open('login.php','_self')</script>";
//} else {
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Edit Lands</title>




        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
        <script>tinymce.init({selector: 'textarea'});</script>

    </head>

    <body>


        <?php
        if (isset($_GET['editLands'])) {

            $edit_id = $_GET['editLands'];

            $get_land = "select * from lands where LandId='$edit_id'";

            $run_lands = mysqli_query($Con, $get_land);

            $row_lands = mysqli_fetch_array($run_lands);
            $id = $row_lands['LandId'];
            $name = $row_lands['LandName'];
            $image = $row_lands['LandImage'];
            $salePrice = $row_lands['SalePrice'];
            $RentPrice = $row_lands['RentPrice'];
            $LeasePrice = $row_lands['LeasePrice'];

            $cityId = $row_lands['CityId'];
            $empId = $row_lands['EmpId'];

//To get City name and the Province name
            $get_city = "Select * from city c inner join provinces p on c.ProvinceId = p.ProvinceId where CityId = '$cityId' ";
            $run_city = mysqli_query($Con, $get_city);
            $row_city = mysqli_fetch_array($run_city);
            $cityName = $row_city['City'];
            $provincename = $row_city['Province'];

//To get the Employee name.
            $get_emp = "Select * from employee where EmpId = '$empId' ";
            $run_emp = mysqli_query($Con, $get_emp);

            $row_emp = mysqli_fetch_array($run_emp);
            $empname = $row_emp['EmpName'];
        }
        ?>

        <div class="row"><!--row starts-->

            <div class="col-lg-12"><!--col-lg-12 starts-->

                <ol class="breadcrumb"><!--breadcrumb starts-->

                    <li class="active">
                        <i class="fa fa-users"></i>Registration/Edit Lands
                    </li>

                </ol><!--breadcrumb Ends-->

            </div><!--col-lg-12 Ends-->

        </div><!--row Ends-->

        <div class="row"><!--2 row starts-->

            <div class="col-lg-12"><!--col-lg-12 starts-->

                <div class="panel panel-default"><!--panel panel-default starts-->

                    <div class="panel-heading"><!--panel-heading starts-->

                        <h3 class="panel-title">

                            <i class="fa fa-money fa-fw"></i>Edit Lands

                        </h3>

                    </div><!--panel-heading Ends-->

                    <div class="panel-body"><!--panel-body starts-->

                        <form class="form-horizontal" method="POST" enctype="multipart/form-data"><!-- form-horizantal starts-->

                            <div class="form-group"><!--form-group starts-->

                                <label class="col-md-2 control-label">Land Name:</label>

                                <div class="col-md-9"><!--col-md-6 starts-->

                                    <input type="text" name="name" class="form-control" required value="<?php echo $name ?>">

                                </div><!--col-md-6 Ends-->

                            </div><!--form-group Ends-->

                            <div class="form-group"><!--form-group starts-->

                                <label class="col-md-2 control-label">Land Image:</label>

                                <div class="col-md-9"><!--col-md-6 starts-->

                                    <input type="file" name="land_img" class="form-control"  value="<?php echo $image; ?>">
                                    <br><img src="land_images/<?php echo $image; ?>" width="70" height="70" >
                                </div><!--col-md-6 Ends-->

                            </div><!--form-group Ends-->



                            <div class="form-group"><!--form-group starts-->

                                <label class="col-md-2 control-label">City</label>

                                <div class="col-md-9"><!--col-md-6 starts-->

                                    <select name="city" class="form-control">

                                       <option value="<?php echo $cityId; ?>" > <?php echo $cityName; ?> </option>

                                        <?php
                                        $get_city = "select * from City where CityId != '$cityId'";
                                        $run_city = mysqli_query($Con, $get_city);
                                        while ($row_city = mysqli_fetch_array($run_city)) {
                                            $c_id = $row_city['CityId'];
                                            $c_name = $row_city['City'];

                                            echo"<option value='$c_id'>$c_name</option>";
                                        }
                                        ?>

                                    </select>

                                </div><!--col-md-6 Ends-->

                            </div><!--form-group Ends-->


                            <div class="form-group"><!--form-group starts-->

                                <label class="col-md-2 control-label">Employee</label>

                                <div class="col-md-9"><!--col-md-6 starts-->

                                    <select name="employee" class="form-control">

                                       <option value="<?php echo $empId; ?>" > <?php echo $empname; ?> </option>

                                        <?php
                                        $get_emp = "select * from employee where EmpId != '$empId'";
                                        $run_emp = mysqli_query($Con, $get_emp);
                                        while ($row_emp = mysqli_fetch_array($run_emp)) {
                                            $e_id = $row_emp['EmpId'];
                                            $e_name = $row_emp['EmpName'];

                                            echo"<option value='$e_id'>$e_name</option>";
                                        }
                                        ?>

                                    </select>

                                </div><!--col-md-6 Ends-->

                            </div><!--form-group Ends-->

                            <div class="form-group"><!--form-group starts-->

                                <label class="col-md-2 control-label">Sale Price:</label>

                                <div class="col-md-9"><!--col-md-6 starts-->

                                    <input type="text" name="salePrice" class="form-control" required value="<?php echo $salePrice; ?>">

                                </div><!--col-md-6 Ends-->

                            </div><!--form-group Ends-->
                            <div class="form-group"><!--form-group starts-->

                                <label class="col-md-2 control-label">Rent Price:</label>

                                <div class="col-md-9"><!--col-md-6 starts-->

                                    <input type="text" name="rentPrice" class="form-control" required value="<?php echo $RentPrice; ?>">

                                </div><!--col-md-6 Ends-->

                            </div><!--form-group Ends-->

                            <div class="form-group"><!--form-group starts-->

                                <label class="col-md-2 control-label">Lease Price:</label>

                                <div class="col-md-9"><!--col-md-6 starts-->

                                    <input type="text" name="leasePrice" class="form-control" required value="<?php echo $LeasePrice; ?>">

                                </div><!--col-md-6 Ends-->

                            </div><!--form-group Ends-->


                            <div class="form-group" ><!-- form-group Starts -->

                                <label class="col-md-2 control-label" ></label>

                                <div class="col-md-9" >

                                    <input type="submit" name="update" value="Update Land" class="btn btn-primary form-control" >

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

    $land_img = $_FILES['land_img']['name'];
    $temp_name = $_FILES['land_img']['tmp_name'];
    if($land_img == NULL){
        $land_img = $image;
    }
    move_uploaded_file($temp_name, "land_images/$land_img");


    $city = $_POST['city'];
    $employee = $_POST['employee'];
    $salePrice = $_POST['salePrice'];
    $rentPrice = $_POST['rentPrice'];
    $leasePrice = $_POST['leasePrice'];
   
   $update_lands = "update lands set LandName = '$name', LandImage = '$land_img',CityId = '$city', EmpId = '$employee', SalePrice ='$salePrice',"
           . " RentPrice = '$rentPrice' , LeasePrice = '$leasePrice' where LandId = '$edit_id'";


    $run_lands = mysqli_query($Con, $update_lands);

    if ($run_lands) {
        echo "<script> alert('Land has been Updated successfully ')</script>";
        echo "<script> window.open('index.php?viewLands','_self')</script>";
    }
}
?>

<?php
//} ?>