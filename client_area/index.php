<?php
session_start();

include("../admin_area/includes/db.php");

//   include("functions/functions.php");
?>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

    <head>

        <title>Jasmine Land Sale</title>

        <link href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" rel="stylesheet">

        <link href="styles/bootstrap.min.css" rel="stylesheet">        

        <link href="styles/style.css" rel="stylesheet">

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    </head>

    <body>

        <!--        top starts-->
        <div id="top">  

            <div class="container"><!-- container starts-->

                <div class="col-md-7 "><!-- col-md-7 offer starts--> 
                    
                </div> <!--    col-md-7 ends-->
                
                <div class="col-md-5"><!--col-md-5 starts-->

                    <ul class="menu"><!--menu starts-->
                        
                        
                        <li>

                            <?php
                            if (!isset($_SESSION['uname'])) {

                                echo "<a href='UserResgistration.php' ><i class='fa fa-registered'></i> Sign Up</a>";
                            } else {                                
                            }
                            ?>

                        </li>
                        
                        <li>

                            <?php
                            if (!isset($_SESSION['uname'])) {

                                echo "<a href='userLogin.php'><i class='fa fa-sign-in'></i> Login </a>";
                         
                            } else {

                                echo "<a href='logout.php'><i class='fa fa-sign-out'></i> Logout </a>";
                            }
                            ?>

                        </li>

                    </ul><!--menu ends-->

                </div><!--col-md-5 ends-->

            </div><!-- container ends-->

        </div><!--top ends-->



        <div class="navbar navbar-default" id="navbar"><!-- navbar navbar-default starts -->

            <div class="container-fluid"><!--container statrs-->                      

                    <div class="navbar-collapse collapse right "id="search"><!--navbar-collapse collapse right starts-->
                       
                    </div><!--navbar-collapse collapse right ends-->



                </div><!-- navbar-collapse collapse Ends--> 

            </div><!--container Ends-->

        </div><!-- navbar navbar-default Ends -->





        <div id="content" class="container-fluid"<!--container starts-->

             <div class="row"><!--row starts-->

                <?php
    $get_lands = "select * from lands order by LandId desc limit 0,8";

    $run_lands = mysqli_query($Con, $get_lands);

    while ($row_lands = mysqli_fetch_array($run_lands)) {

        $pro_id = $row_lands['LandId'];

        $pro_title = $row_lands['LandName'];    

        $pro_img1 = $row_lands['LandImage'];

        $pro_label = $row_lands['Occupied'];

        $pro_country = $row_lands['CityId'];

        $pro_price = $row_lands['SalePrice'];
         $product_price = "Rs.$pro_price.00";
      

        if ($pro_label == '0') {
            $product_label ="";
        } else {
            
            $product_label = "

<a class='label sale' href='#' style='color:black;'>

<div class='thelabel'>Occupied</div>

<div class='label-background'> </div>

</a>

";
        }

    
        $pro_title = substr($pro_title, 0, 35);
        echo "

<div class='col-md-3 col-sm-6 center-responsive' >

<div class='product' >

<a href='details.php?pro_id=$pro_id' >

<img src='../admin_area/land_images/$pro_img1' class='img-responsive' width='600' height='600' >

</a>

<div class='text' >

<h3>$pro_title ...</h3>

<p class='price' > $product_price </p>

<p class='buttons' >
      ";
        if  ($pro_label == '0' ) {
          echo "
<a href='view_details.php?land_id=$pro_id' class='btn btn-default' >View details</a>
        ";}else{
            echo "
   <br><br>
        ";
        }
        
        echo "

</p>

</div>

$product_label 
    

</div>

</div>

";
    }

                ?>

            </div><!--row Ends-->

        </div><!--container Ends-->


        <?php
        //include("includes/footer.php");
        ?>
<!--  <script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>-->

        <script src="js/jquery.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="plugins/greensock/TweenMax.min.js"></script>
        <script src="plugins/greensock/TimelineMax.min.js"></script>
        <script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
        <script src="plugins/greensock/animation.gsap.min.js"></script>
        <script src="plugins/greensock/ScrollToPlugin.min.js"></script>
        <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
        <script src="plugins/slick-1.8.0/slick.js"></script>
        <script src="plugins/easing/easing.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>
