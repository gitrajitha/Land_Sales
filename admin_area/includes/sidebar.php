<?php


//check whether the user is logged
//if(!isset($_SESSION['username'])){
//
//echo "<script>window.open('login.php','_self')</script>";
//
//}
//
//else {




?>


<nav class="navbar navbar-inverse navbar-fixed-top" ><!-- navbar navbar-inverse navbar-fixed-top Starts -->

<div class="navbar-header" ><!-- navbar-header Starts -->

<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse" ><!-- navbar-ex1-collapse Starts -->


<span class="sr-only" >Toggle Navigation</span>

<span class="icon-bar" ></span>

<span class="icon-bar" ></span>

<span class="icon-bar" ></span>


</button><!-- navbar-ex1-collapse Ends -->

<a class="navbar-brand" href="index.php?overview" >Jasmine Home Lands</a>


</div><!-- navbar-header Ends -->

<div class="collapse navbar-collapse navbar-ex1-collapse"><!-- collapse navbar-collapse navbar-ex1-collapse Starts -->

<ul class="nav navbar-nav side-nav"><!-- nav navbar-nav side-nav Starts -->

    
    <br><br> 

<li><!-- li Starts -->

<a href="index.php?overview">

<i class="fa fa-fw fa-dashboard"></i> DashBoard

</a>

</li><!-- li Ends -->

<li><!-- li Starts -->

<a href="#" data-toggle="collapse" data-target="#lands">

<i class="fa fa-fw fa-table"></i> Manage Lands

<i class="fa fa-fw fa-caret-down"></i>


</a>

<ul id="lands" class="collapse">

<li>
<a href="index.php?insertProvince"> Add Provinces </a>
</li>

<li>
<a href="index.php?insertCitites"> Add Cities </a>
</li>

<li>
<a href="index.php?viewProvinceandCities"> View Provinces & Cities </a>
</li>

<li>
<a href="index.php?insertLand"> Add Lands </a>
</li>

<li>
<a href="index.php?viewLands"> View Lands </a>
</li>

</ul>

</li><!-- li Ends -->

<li><!-- li Starts -->

<a href="index.php?viewCustomer">

<i class="fa fa-fw fa-user-md"></i> View Customers

</a>

</li><!-- li Ends -->

<li><!-- li Starts -->

<a href="#" data-toggle="collapse" data-target="#employees">

<i class="fa fa-fw fa-user"></i> Manage Employees

<i class="fa fa-fw fa-caret-down"></i>


</a>

<ul id="employees" class="collapse">

<li>
<a href="index.php?insertEmployee"> Add Employees </a>
</li>

<li>
<a href="index.php?viewEmployee"> View Employees </a>
</li>

</ul>

</li><!-- li Ends -->

<li><!-- li Starts -->

<a href="#" data-toggle="collapse" data-target="#users">

<i class="fa fa-fw fa-users"></i> Manage Users

<i class="fa fa-fw fa-caret-down"></i>


</a>

<ul id="users" class="collapse">

<li>
<a href="index.php?insertUsers"> Add Users </a>
</li>

<li>
<a href="index.php?viewUsers"> View Users </a>
</li>

</ul>

</li><!-- li Ends -->


<li><!-- li Starts -->

<a href="logout.php">

<i class="fa fa-fw fa-power-off"></i> Log Out

</a>

</li><!-- li Ends -->

</ul><!-- nav navbar-nav side-nav Ends -->

</div><!-- collapse navbar-collapse navbar-ex1-collapse Ends -->

</nav><!-- navbar navbar-inverse navbar-fixed-top Ends -->

<?php// } ?>