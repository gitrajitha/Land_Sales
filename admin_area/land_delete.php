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

if(isset($_GET['deleteLands'])){

$delete_id = $_GET['deleteLands'];

$delete_user = "delete from lands where LandId='$delete_id'";

$run_delete = mysqli_query($Con,$delete_user);

if($run_delete){

echo "<script>alert('One Land Has been deleted')</script>";

echo "<script>window.open('index.php?viewLands','_self')</script>";

}

}

?>

<?php// } ?>