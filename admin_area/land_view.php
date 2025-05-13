<?php

//
//if(!isset($_SESSION['username'])){
//
//echo "<script>window.open('login.php','_self')</script>";
//
//}
//
//else {

?>


<div class="row"><!--  1 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<ol class="breadcrumb" ><!-- breadcrumb Starts -->
 
<li class="active" >

<i class="fa fa-dashboard"></i> Dashboard / View Lands

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!--  1 row Ends -->

<div class="row" ><!-- 2 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<div class="panel panel-default" ><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" ><!-- panel-title Starts -->

<i class="fa fa-money fa-fw" ></i> View Lands

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
<th>Edit</th>
<th>Delete</th>
</tr>

</thead>

<tbody><!-- tbody Starts -->

<?php

$get_lands = "select * from lands order by LandId desc";
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

<td>

<a href="index.php?editLands=<?php echo $id; ?>">

<i class="fa fa-pencil"> </i> Edit

</a>

</td>

<td>

<a href="index.php?deleteLands=<?php echo $id; ?>">

<i class="fa fa-trash-o"> </i> Delete

</a>

</td>
</tr>

<?php } ?>


</tbody>


</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->




<?php //} ?>