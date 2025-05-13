<?php



if(!isset($_SESSION['username'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

$get_lands = "select * from Lands";
$run_lands = mysqli_query($Con,$get_lands);
$count_lands = mysqli_num_rows($run_lands);

$get_lands_occupied = "select * from Lands where Occupied = '1'";
$run_lands_occupied = mysqli_query($Con,$get_lands_occupied);
$count_lands_occupied = mysqli_num_rows($run_lands_occupied);

$get_cus = "select * from customers";
$run_cus = mysqli_query($Con,$get_cus);
$count_cus = mysqli_num_rows($run_cus);

$get_emp = "select * from employee";
$run_emp = mysqli_query($Con,$get_emp);
$count_emp = mysqli_num_rows($run_emp);

?>

<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<h1 class="page-header">Dashboard</h1>

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"></i> Dashboard

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->


<div class="row"><!-- 2 row Starts -->

<div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

<div class="panel panel-primary"><!-- panel panel-primary Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<div class="row"><!-- panel-heading row Starts -->

<div class="col-xs-3"><!-- col-xs-3 Starts -->

<i class="fa fa-tasks fa-5x"> </i>

</div><!-- col-xs-3 Ends -->

<div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->

<div class="huge"> <?php echo $count_lands; ?>  </div>

<div>Total Lands</div>

</div><!-- col-xs-9 text-right Ends -->

</div><!-- panel-heading row Ends -->

</div><!-- panel-heading Ends -->

<a href="index.php?viewLands">

<div class="panel-footer"><!-- panel-footer Starts -->

<span class="pull-left"> View Details </span>

<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

<div class="clearfix"></div>

</div><!-- panel-footer Ends -->

</a>

</div><!-- panel panel-primary Ends -->

</div><!-- col-lg-3 col-md-6 Ends -->


<div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

<div class="panel panel-green"><!-- panel panel-green Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<div class="row"><!-- panel-heading row Starts -->

<div class="col-xs-3"><!-- col-xs-3 Starts -->

<i class="fa fa-money fa-5x"> </i>

</div><!-- col-xs-3 Ends -->

<div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->

<div class="huge"> <?php echo $count_lands_occupied; ?>  </div>

<div>Total Occupied Lands</div>

</div><!-- col-xs-9 text-right Ends -->

</div><!-- panel-heading row Ends -->

</div><!-- panel-heading Ends -->

<a href="index.php?overview">

<div class="panel-footer"><!-- panel-footer Starts -->

<span class="pull-left"> View Details </span>

<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

<div class="clearfix"></div>

</div><!-- panel-footer Ends -->

</a>

</div><!-- panel panel-green Ends -->

</div><!-- col-lg-3 col-md-6 Ends -->


<div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

<div class="panel panel-yellow"><!-- panel panel-yellow Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<div class="row"><!-- panel-heading row Starts -->

<div class="col-xs-3"><!-- col-xs-3 Starts -->

<i class="fa fa-user-plus fa-5x"> </i>

</div><!-- col-xs-3 Ends -->

<div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->

<div class="huge"> <?php echo $count_cus; ?>  </div>

<div>Total Customers</div>

</div><!-- col-xs-9 text-right Ends -->

</div><!-- panel-heading row Ends -->

</div><!-- panel-heading Ends -->

<a href="index.php?viewCustomer">

<div class="panel-footer"><!-- panel-footer Starts -->

<span class="pull-left"> View Details </span>

<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

<div class="clearfix"></div>

</div><!-- panel-footer Ends -->

</a>

</div><!-- panel panel-yellow Ends -->

</div><!-- col-lg-3 col-md-6 Ends -->


<div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->

<div class="panel panel-red"><!-- panel panel-red Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<div class="row"><!-- panel-heading row Starts -->

<div class="col-xs-3"><!-- col-xs-3 Starts -->

<i class="fa fa-users fa-5x"> </i>

</div><!-- col-xs-3 Ends -->

<div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->

<div class="huge"> <?php echo $count_emp; ?>  </div>

<div>Total Employees</div>

</div><!-- col-xs-9 text-right Ends -->

</div><!-- panel-heading row Ends -->

</div><!-- panel-heading Ends -->

<a href="index.php?view_orders">

<div class="panel-footer"><!-- panel-footer Starts -->

<span class="pull-left"> View Details </span>

<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>

<div class="clearfix"></div>

</div><!-- panel-footer Ends -->

</a>

</div><!-- panel panel-red Ends -->

</div><!-- col-lg-3 col-md-6 Ends -->


</div><!-- 2 row Ends -->


<br><br>

<div class="row" ><!-- 3 row Starts -->

<div class="col-lg-12" ><!-- col-lg-8 Starts -->

<div class="panel panel-primary" ><!-- panel panel-primary Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" ><!-- panel-title Starts -->

<i class="fa fa-money fa-fw" ></i> Occupied Land Details

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->
<thead>

<tr>
<th>Land Name:</th>
<th>Land Image:</th>
<th>Province:</th>
<th>City:</th>
<th>Added Employee</th>
<th>Sale Price</th>
<th>Rent Price</th>
<th>Lease Price</th>

</tr>

</thead>

<tbody><!-- tbody Starts -->

<?php

$get_lands = "select * from lands where Occupied = '1' order by LandId desc";
$run_lands = mysqli_query($Con,$get_lands);

while($row_lands=mysqli_fetch_array($run_lands)){
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

?>

<tr>

<td><?php echo $name; ?></td>

<td><img src="land_images/<?php echo $image; ?>" width="60" height="60"></td>

<td><?php echo $provincename; ?></td>
<td><?php echo $cityName; ?></td>
<td><?php echo $empname; ?></td>

<td><?php echo $salePrice; ?></td>
<td><?php echo $RentPrice; ?></td>
<td><?php echo $LeasePrice; ?></td>


</tr>

<?php } ?>


</tbody>


</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends -->


<?php } ?>
