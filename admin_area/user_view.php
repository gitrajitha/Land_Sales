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

<i class="fa fa-dashboard"></i> Dashboard / View Users

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!--  1 row Ends -->

<div class="row" ><!-- 2 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<div class="panel panel-default" ><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" ><!-- panel-title Starts -->

<i class="fa fa-money fa-fw" ></i> View Users

</h3><!-- panel-title Ends -->


</div><!-- panel-heading Ends -->

<div class="panel-body" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<thead>

<tr>
<th>Name:</th>
<th>User Name:</th>
<th>User Edit</th>
<th>User Delete</th>
</tr>

</thead>

<tbody><!-- tbody Starts -->

<?php

$get_user = "select * from users";
$run_user = mysqli_query($Con,$get_user);

while($row_user=mysqli_fetch_array($run_user)){
$id = $row_user['UserId'];
$name = $row_user['Name'];
$username = $row_user['Username'];

?>

<tr>

<td><?php echo $name; ?></td>

<td><?php echo $username; ?></td>

<td>

<a href="index.php?editUsers=<?php echo $id; ?>">

<i class="fa fa-pencil"> </i> Edit

</a>

</td>

<td>

<a href="index.php?deleteUsers=<?php echo $id; ?>">

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