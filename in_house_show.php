<?php

include'connect.php';

$p_id =  $_GET['ap_id'];



$sql = "select * from in_house where ap_id = $p_id";

$result = $db->query($sql);

$row=$result->fetch_assoc();



$sql1 = "select * from images where ap_id = $p_id";
$result1 = $db->query($sql1);

$sql2 = "select * from adminproperty where ap_id = $p_id";
$result2 = $db->query($sql2);
$row2=$result2->fetch_assoc();

?>






<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PropertyAtEase</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <? include 'header.php';?>
    <!-- END nav -->

    <div class="hero-wrap">
      
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-3 bread" style="color:black;">Property Single</h1>
          </div>
        </div>
      </div>
    </div>


    <section class="ftco-section">
      <div class="container">
        <div class="row">
		<div class="col-md-12 Properties-single mt-4 mb-5 ftco-animate">
                 <h3>Seller Details:</h3>
         
			
              <div class="details">
              <p class="d-flex mb-3">Name :- <?php echo $row2['client_name'] ?></p>
              <p class="d-flex mt-3 mb-3">Phone Number :- <?php echo $row2['client_phone'] ?></p>
			  <?php          if(!empty($row2['client_email']))
                    {                ?>
              <p class="d-flex mt-3">Email-Id :- <?php echo $row2['client_email'] ?></p>
                <?php 
                }      
                   if(!empty($row2['client_whats'])){  
                ?>
              <p class="d-flex mt-3">What's App Number :- <?php echo $row2['client_whats'] ?></p>
                <?php }  ?>
              <p class="d-flex mt-3">Address :- <?php echo $row2['address'] ?></p>
              </div>
              
						
              
        </div>
          <div class="col-lg-8">
          	<div class="row">
          		<div class="col-md-12 ftco-animate">
          			<div class="single-slider owl-carousel">
						  
						  <?php for($i=1;$i<=$result1->num_rows;$i++)
						  {
							  $row1=$result1->fetch_assoc();
							  
							 
						   ?>
          				<div class="item">
          					<div class="properties-img" style="background-image: url(uploads/<?php echo $row1['image_name']?>);"></div>
						  </div>
						<?php } ?>
						  
          			</div>
          		</div>
                  <div class="col-md-12 Properties-single mt-4 mb-5 ftco-animate">
				  
                  <h2><?php echo $row['name']; ?></h2>
                 
                  <p class="rate mb-4">
                      <span class="loc"><a href="#"><i class="icon-map"><?php echo $row['house']?>, <?php echo $row['locality']?>, <?php echo $row['city']?>, <?php echo $row['pin']?></i></a></span>
                        </p>
                        
                        <div class="d-md-flex mt-5 mb-5">
                            <ul>
              <?php echo '<li><span>Property For:  </span> '.$row['want'].'</li>
                            <li><span>Category:  </span> '.$row['use1'].'</li>
                            <li><span>Number of Rooms:  </span> '.$row['rooms'].'</li>
                            <li><span>Attached Toilet and Bathroom:  </span> '.$row['atb'].'</li>
                            <li><span>Running Water: </span> '.$row['rw'].'</li>
                            <li><span>Parking Facilities:  </span> '.$row['pf'].'</li>
                            <li><span>Price:  </span> '.$row['price'].'</li>
                            <li><span>Others:  </span> '.$row['others'].'</li>
                            </ul>
                        </div>   ';
                    ?>	
              </div>
          

          	</div>
          </div> 
      </div>
    </section> <!-- .section -->
	<?php include 'footer.php';?>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>