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

<i class="fa fa-dashboard"></i> Dashboard / View Provinces and Cities

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!--  1 row Ends -->

<div class="row" ><!-- 2 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<div class="panel panel-default" ><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" ><!-- panel-title Starts -->

<i class="fa fa-money fa-fw" ></i> View Provinces

</h3><!-- panel-title Ends -->


</div><!-- panel-heading Ends -->

<div class="panel-body" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<thead>

<tr>
<th>Province Name:</th>
<th> Edit</th>
<th> Delete</th>
</tr>

</thead>

<tbody><!-- tbody Starts -->

<?php

$get_province = "select * from provinces";
$run_province = mysqli_query($Con,$get_province);

while($row_province=mysqli_fetch_array($run_province)){
$id = $row_province['ProvinceId'];
$name = $row_province['Province'];


?>

<tr>

<td><?php echo $name; ?></td>


<td>

<a href="index.php?editProvince=<?php echo $id; ?>">

<i class="fa fa-pencil"> </i> Edit

</a>

</td>

<td>

<a href="index.php?deleteProvince=<?php echo $id; ?>">

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



<div class="row" ><!-- 2 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<div class="panel panel-default" ><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" ><!-- panel-title Starts -->

<i class="fa fa-money fa-fw" ></i> View Cities

</h3><!-- panel-title Ends -->


</div><!-- panel-heading Ends -->

<div class="panel-body" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<thead>

<tr>
<th>City Name:</th>
<th>Province Name:</th>
<th> Edit</th>
<th> Delete</th>
</tr>

</thead>

<tbody><!-- tbody Starts -->

<?php

$get_city = "select * from city c inner join provinces p on c.ProvinceId = p.ProvinceId";
$run_city = mysqli_query($Con,$get_city);

while($row_city=mysqli_fetch_array($run_city)){
$id = $row_city['CityId'];
$cityname = $row_city['City'];
$province = $row_city['Province'];


?>

<tr>

<td><?php echo $cityname; ?></td>
<td><?php echo $province; ?></td>


<td>

<a href="index.php?editCity=<?php echo $id; ?>">

<i class="fa fa-pencil"> </i> Edit

</a>

</td>

<td>

<a href="index.php?deleteCity=<?php echo $id; ?>">

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