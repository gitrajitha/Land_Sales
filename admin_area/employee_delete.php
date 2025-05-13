<?php

//
//
//
//if(!isset($_SESSION['username'])){
//
//echo "<script>window.open('login.php','_self')</script>";
//
//}
//
//else {

?>

<?php

if(isset($_GET['deleteEmployee'])){

$delete_id = $_GET['deleteEmployee'];

$delete_user = "delete from employee where EmpId='$delete_id'";

$run_delete = mysqli_query($Con,$delete_user);

if($run_delete){

echo "<script>alert('One Employee Has been deleted')</script>";

echo "<script>window.open('index.php?viewEmployee','_self')</script>";

}

}

?>

<?php// } ?>