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

<i class="fa fa-dashboard"></i> Dashboard / View Employees

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!--  1 row Ends -->

<div class="row" ><!-- 2 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<div class="panel panel-default" ><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" ><!-- panel-title Starts -->

<i class="fa fa-money fa-fw" ></i> View Employees

</h3><!-- panel-title Ends -->


</div><!-- panel-heading Ends -->

<div class="panel-body" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<thead>

<tr>
<th>Employee Name:</th>
<th>Contact No:</th>
<th>Address:</th>
<th>Edit</th>
<th>Delete</th>
</tr>

</thead>

<tbody><!-- tbody Starts -->

<?php

$get_user = "select * from employee";
$run_user = mysqli_query($Con,$get_user);

while($row_user=mysqli_fetch_array($run_user)){
$id = $row_user['EmpId'];
$name = $row_user['EmpName'];
$contact = $row_user['ContactNo'];
$address = $row_user['Address'];


?>

<tr>

<td><?php echo $name; ?></td>

<td><?php echo $contact; ?></td>

<td><?php echo $address; ?></td>

<td>

<a href="index.php?editEmployee=<?php echo $id; ?>">

<i class="fa fa-pencil"> </i> Edit

</a>

</td>

<td>

<a href="index.php?deleteEmployee=<?php echo $id; ?>">

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