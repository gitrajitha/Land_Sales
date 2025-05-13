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

if(isset($_GET['deleteProvince'])){

$delete_id = $_GET['deleteProvince'];

$delete_province = "delete from provinces where ProvinceId='$delete_id'";

$run_delete = mysqli_query($Con,$delete_province);

if($run_delete){

echo "<script>alert('One Province Has been deleted')</script>";

echo "<script>window.open('index.php?viewProvinceandCities','_self')</script>";

}

}

?>

<?php// } ?>