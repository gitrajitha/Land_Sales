<?php
session_start();
if (!isset($_SESSION['uname'])) {

    echo "<script>window.open('userLogin.php','_self')</script>";
} else {
?>
  <head>

        <title>Jasmine Land Sale</title>

        <link href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" rel="stylesheet">

        <link href="styles/bootstrap.min.css" rel="stylesheet">        

        <link href="styles/style.css" rel="stylesheet">

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    </head>
<div id="content" class="container-fluid"<!--container starts-->

             <div class="row"><!--row starts-->

                <?php
    include("../admin_area/includes/db.php");
    
    
    
if (isset($_GET['land_id'])) {

    $land_id = $_GET['land_id'];

    $get_land = "select * from lands where LandId='$land_id'";
    $run_land = mysqli_query($Con, $get_land);
    $row_edit = mysqli_fetch_array($run_land);

    $landName = $row_edit['LandName'];
    $landImage = $row_edit['LandImage'];
    $cityId1 = $row_edit['CityId'];
    $empId = $row_edit['EmpId'];
    $salePrice = $row_edit['SalePrice'];
    $rentPrice = $row_edit['RentPrice'];
    $leasePrice = $row_edit['LeasePrice'];
    
    $get_citydetails = "Select * from city c inner join provinces p on c.provinceId = p.ProvinceId where c.CityId = '$cityId1'";
    $run_cities = mysqli_query($Con, $get_citydetails);
    $row_cities = mysqli_fetch_array($run_cities);
    
   $cityname = $row_cities['City'];
   $provinceName =  $row_cities['Province'];
   
   $get_empDetails = "Select * from employee  where EmpId = '$empId'";
    $run_employee = mysqli_query($Con, $get_empDetails);
    $row_employee = mysqli_fetch_array($run_employee);
    
    $empName = $row_employee['EmpName'];
    $empContact = $row_employee['ContactNo'];
       
    
}

    

    
        echo "
<br><br><br>
<div class='col-lg-6' >


<img src='../admin_area/land_images/$landImage'  width='600' height='600' >

</div>
    <div class='col-lg-6'>
  

<h1>$landName </h1>
<br><br>
<p class='price' >Province:  $provinceName </p>
<p class='price' >City:  $cityname </p>
<p class='price' >Agent Name:  $empName </p>
<p class='price' >Agent Contact:  $empContact </p>
    
<p class='price' >Sale Price: Rs. $salePrice.00 </p>
<p class='price' >Rent Price:  Rs. $rentPrice.00 </p>
<p class='price' >Lease Price:  Rs. $leasePrice.00 </p>


<br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<form method = 'POST'> 
<div class='col-lg-6'>
  <input type='submit' name='reserve' value='Reserve' class='btn btn-primary' >
 </div
</form>
    </div>

</div>

";  

                ?>
                
            </div><!--row Ends-->

        </div><!--container Ends-->
<?php
if (isset($_POST['reserve'])) {

  
    $update_reserve = "update lands set Occupied = '1' where LandId = '$land_id' ";
    $run_reserve = mysqli_query($Con, $update_reserve);

    if ($run_reserve) {
        echo "<script> alert('The Land is Reserved ')</script>";
        echo "<script> window.open('index.php','_self')</script>";
    }
}
}
?>