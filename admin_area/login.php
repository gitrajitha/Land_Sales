<?php

session_start();

include("includes/db.php");

?>
<!DOCTYPE HTML>
<html>

<head>

<title>Admin Login</title>

<link rel="stylesheet" href="css/bootstrap.min.css" >

<link rel="stylesheet" href="css/login.css" >

</head>

<body>

<div class="container" ><!-- container Starts -->

<form class="form-login" action="" method="post" ><!-- form-login Starts -->

<h2 class="form-login-heading" >Admin Login</h2>

<input type="text" class="form-control" name="uname" placeholder="User Name" required >

<input type="password" class="form-control" name="pass" placeholder="Password" required >

<button class="btn btn-lg btn-primary btn-block" type="submit" name="admin_login" >

Log in

</button>


</form><!-- form-login Ends -->

</div><!-- container Ends -->



</body>

</html>

<?php

if(isset($_POST['admin_login'])){

$uname = mysqli_real_escape_string($Con,$_POST['uname']);

$pass = mysqli_real_escape_string($Con,$_POST['pass']);

$get_admin = "select * from users where Username='$uname' AND Password='$pass'";

$run_admin = mysqli_query($Con,$get_admin);

$count = mysqli_num_rows($run_admin);

if($count==1){

$_SESSION['username']=$uname;
//
//$sess = $_SESSION['username'];

echo "<script>alert('You are Logged in into admin panel ')</script>";

echo "<script>window.open('index.php?overview','_self')</script>";

}
else {

echo "<script>alert('Email or Password is Wrong')</script>";

}

}

?>