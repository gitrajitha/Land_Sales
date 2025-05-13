<?php
//if (!isset($_SESSION['username'])) {
//
//    echo "<script>window.open('login.php','_self')</script>";
//} else {
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Add Lands</title>




        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
        <script>tinymce.init({selector: 'textarea'});</script>

    </head>

    <body>

        <div class="row"><!--row starts-->

            <div class="col-lg-12"><!--col-lg-12 starts-->

                <ol class="breadcrumb"><!--breadcrumb starts-->

                    <li class="active">
                        <i class="fa fa-users"></i>Registration/Add Lands
                    </li>

                </ol><!--breadcrumb Ends-->

            </div><!--col-lg-12 Ends-->

        </div><!--row Ends-->

        <div class="row"><!--2 row starts-->

            <div class="col-lg-12"><!--col-lg-12 starts-->

                <div class="panel panel-default"><!--panel panel-default starts-->

                    <div class="panel-heading"><!--panel-heading starts-->

                        <h3 class="panel-title">

                            <i class="fa fa-money fa-fw"></i>Add Lands

                        </h3>

                    </div><!--panel-heading Ends-->

                    <div class="panel-body"><!--panel-body starts-->

                        <form class="form-horizontal" method="POST" enctype="multipart/form-data"><!-- form-horizantal starts-->

                            <div class="form-group"><!--form-group starts-->

                                <label class="col-md-2 control-label">Land Name:</label>

                                <div class="col-md-9"><!--col-md-6 starts-->

                                    <input type="text" name="name" class="form-control" required>

                                </div><!--col-md-6 Ends-->

                            </div><!--form-group Ends-->

                            <div class="form-group"><!--form-group starts-->

                                <label class="col-md-2 control-label">Land Image:</label>

                                <div class="col-md-9"><!--col-md-6 starts-->

                                    <input type="file" name="land_img" class="form-control" required>

                                </div><!--col-md-6 Ends-->

                            </div><!--form-group Ends-->



                            <div class="form-group"><!--form-group starts-->

                                <label class="col-md-2 control-label">City</label>

                                <div class="col-md-9"><!--col-md-6 starts-->

                                    <select name="cityId" class="form-control">

                                        <option>Select City</option>

                                        <?php
                                        $get_city = "select * from City";
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

                                        <option>Select Employee</option>

                                        <?php
                                        $get_emp = "select * from employee";
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

                                    <input type="text" name="salePrice" class="form-control" required>

                                </div><!--col-md-6 Ends-->

                            </div><!--form-group Ends-->
                               <div class="form-group"><!--form-group starts-->

                                <label class="col-md-2 control-label">Rent Price:</label>

                                <div class="col-md-9"><!--col-md-6 starts-->

                                    <input type="text" name="rentPrice" class="form-control" required>

                                </div><!--col-md-6 Ends-->

                            </div><!--form-group Ends-->
                            
                               <div class="form-group"><!--form-group starts-->

                                <label class="col-md-2 control-label">Lease Price:</label>

                                <div class="col-md-9"><!--col-md-6 starts-->

                                    <input type="text" name="leasePrice" class="form-control" required>

                                </div><!--col-md-6 Ends-->

                            </div><!--form-group Ends-->


                            <div class="form-group" ><!-- form-group Starts -->

                                <label class="col-md-2 control-label" ></label>

                                <div class="col-md-9" >

                                    <input type="submit" name="add" value="Add Land" class="btn btn-primary form-control" >

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
     
    $land_img = $_FILES['land_img']['name'];
    $temp_name = $_FILES['land_img']['tmp_name'];
    move_uploaded_file($temp_name, "land_images/$land_img");
    
    
    $cityId = $_POST['cityId'];
    $employee = $_POST['employee'];
    $salePrice = $_POST['salePrice'];
    $rentPrice = $_POST['rentPrice'];
    $leasePrice = $_POST['leasePrice'];
    


        $insert_lands = "insert into lands (LandName,LandImage,CityId,EmpId,SalePrice,RentPrice,LeasePrice,Occupied)"
                . " values ('$name','$land_img','$cityId','$employee','$salePrice','$rentPrice','$leasePrice','0')";



        $run_lands = mysqli_query($Con, $insert_lands);

    if ($run_lands) {
        echo "<script> alert('New Land has been inserted successfully ')</script>";
        echo "<script> window.open('index.php?viewLands','_self')</script>";
    }
}
?>
<?php
//} ?>