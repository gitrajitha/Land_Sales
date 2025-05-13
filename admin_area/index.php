<?php

session_start();

include("includes/db.php");

//Adding session to check whether the admin user is logged
if(!isset($_SESSION['username'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>
<!DOCTYPE html>
<html>

<head>

<title>Jasmine Land Sales</title>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link href="css/bootstrap.min.css" rel="stylesheet">

<link href="css/style.css" rel="stylesheet">

<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" >

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body>

	   
<div id="wrapper"><!-- wrapper Starts -->

<?php include("includes/sidebar.php");  ?>

<div id="page-wrapper"><!-- page-wrapper Starts -->

<div class="container-fluid"><!-- container-fluid Starts -->

<?php

if(isset($_GET['overview'])){

include("overview.php");

}

if(isset($_GET['insertUsers'])){

include("user_insert.php");

}

if(isset($_GET['viewUsers'])){

include("user_view.php");

}

if(isset($_GET['deleteUsers'])){

include("user_delete.php");

}

if(isset($_GET['editUsers'])){

include("user_edit.php");

}

if(isset($_GET['insertEmployee'])){

include("employee_insert.php");

}

if(isset($_GET['viewEmployee'])){

include("employee_view.php");

}

if(isset($_GET['editEmployee'])){

include("employee_edit.php");

}

if(isset($_GET['deleteEmployee'])){

include("employee_delete.php");

}


if(isset($_GET['viewCustomer'])){

include("customer_view.php");

}

if(isset($_GET['insertProvince'])){

include("province_insert.php");

}



if(isset($_GET['insertCitites'])){

include("city_insert.php");

}

if(isset($_GET['viewProvinceandCities'])){

include("provinceandcity_view.php");

}

if(isset($_GET['editProvince'])){

include("province_edit.php");

}

if(isset($_GET['deleteProvince'])){

include("province_delete.php");

}

if(isset($_GET['editCity'])){

include("city_edit.php");

}

if(isset($_GET['deleteCity'])){

include("city_delete.php");

}

if(isset($_GET['insertLand'])){

include("land_insert.php");

}

if(isset($_GET['viewLands'])){

include("land_view.php");

}

if(isset($_GET['editLands'])){

include("land_edit.php");

}

if(isset($_GET['deleteLands'])){

include("land_delete.php");

}

?>

</div><!-- container-fluid Ends -->

</div><!-- page-wrapper Ends -->

</div><!-- wrapper Ends -->

<script  src="js/jquery.easypiechart.js"></script> 
    
<script src="js/jquery.min.js"></script>

<script src="js/bootstrap.min.js"></script>

<script>
    $(function() {
        $('.chart').easyPieChart({
            //your options goes here
        });
    });
</script>

</body>


</html>

<?php } ?>