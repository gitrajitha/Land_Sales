<?php
//if (!isset($_SESSION['username'])) {
//
//    echo "<script>window.open('login.php','_self')</script>";
//} else {
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Add City</title>




        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
        <script>tinymce.init({selector: 'textarea'});</script>

    </head>

    <body>

        <div class="row"><!--row starts-->

            <div class="col-lg-12"><!--col-lg-12 starts-->

                <ol class="breadcrumb"><!--breadcrumb starts-->

                    <li class="active">
                        <i class="fa fa-users"></i>Registration/Add City
                    </li>

                </ol><!--breadcrumb Ends-->

            </div><!--col-lg-12 Ends-->

        </div><!--row Ends-->

        <div class="row"><!--2 row starts-->

            <div class="col-lg-12"><!--col-lg-12 starts-->

                <div class="panel panel-default"><!--panel panel-default starts-->

                    <div class="panel-heading"><!--panel-heading starts-->

                        <h3 class="panel-title">

                            <i class="fa fa-money fa-fw"></i>Add Cities

                        </h3>

                    </div><!--panel-heading Ends-->

                    <div class="panel-body"><!--panel-body starts-->

                        <form class="form-horizontal" method="POST" enctype="multipart/form-data"><!-- form-horizantal starts-->

                            <div class="form-group"><!--form-group starts-->

                                <label class="col-md-2 control-label">City Name:</label>

                                <div class="col-md-9"><!--col-md-6 starts-->

                                    <input type="text" name="name" class="form-control" required>

                                </div><!--col-md-6 Ends-->

                            </div><!--form-group Ends-->
                            
                                <div class="form-group"><!--form-group starts-->

                                    <label class="col-md-2 control-label">Province</label>

                                    <div class="col-md-9"><!--col-md-6 starts-->

                                        <select name="province" class="form-control">

                                            <option>Select Province</option>

                                            <?php
                                            $get_province = "select * from Provinces";
                                            $run_province = mysqli_query($Con, $get_province);
                                            while ($row_province = mysqli_fetch_array($run_province)) {
                                                $p_id = $row_province['ProvinceId'];
                                                $p_name = $row_province['Province'];

                                                echo"<option value='$p_id'>$p_name</option>";
                                            }
                                            ?>

                                        </select>

                                    </div><!--col-md-6 Ends-->

                                </div><!--form-group Ends-->


                            <div class="form-group" ><!-- form-group Starts -->

                                <label class="col-md-2 control-label" ></label>

                                <div class="col-md-9" >

                                    <input type="submit" name="add" value="Add City" class="btn btn-primary form-control" >

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
    $province = $_POST['province'];

    $insert_cities = "insert into city (City,ProvinceId) values ('$name',$province)";
    $run_cities = mysqli_query($Con, $insert_cities);

    if ($run_cities) {
        echo "<script> alert('New City has been inserted successfully ')</script>";
        echo "<script> window.open('index.php?viewProvinceandCities','_self')</script>";
    }
}
?>
<?php
//} ?>