<?php
include'connect.php';
session_start();


  $id = $_SESSION['user_id'];
$sql = "select * from user where user_id = '$id'";

$result = $db->query($sql);
$row=$result->fetch_assoc();



$sql1 = "select * from property where user_id = '$id'";

$result1 = $db->query($sql1);









?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Property At Ease</title>
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
   
    <div class="top">
    	<div class="container">
    		<div class="row d-flex align-items-center">
    			<div class="col">
    				<p class="social d-flex">
    					<a href="#"><span class="icon-facebook"></span></a>
    					<a href="#"><span class="icon-twitter"></span></a>
    					<a href="#"><span class="icon-google"></span></a>
							<a href="#"><span class="icon-pinterest"></span></a>
    				</p>
    			</div>
    			<div class="col d-flex justify-content-end">
    				<p class="num"><span class="icon-phone"></span> + 1700 12345 6789</p>
    			</div>
    		</div>
    	</div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Royal<span>estate</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
	          <li class="nav-item active"><a href="property.html" class="nav-link">Property</a></li>
	          <li class="nav-item"><a href="agents.html" class="nav-link">Agents</a></li>
	          <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
	          <li class="nav-item cta"><a href="logout.php" class="nav-link ml-lg-2"><span class="icon-user"></span> Logout</a></li>
	         <!-- <li class="nav-item cta cta-colored"><a href="contact.html" class="nav-link"><span class="icon-pencil"></span> Sign-Up</a></li> -->

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    


    <section class="ftco-section">
      <div class="container">
		  <div class="col-md-12 d-flex justify-content-center" style="margin-bottom: 20px;;">
			  <h2>Your Profile</h2>
      </div>
      <div class="d-flex justify-content-end">
      <a class="btn btn-primary" href="form1.php" role="button">Add Property</a>
      
          </div>
      
        <div class="row">
          <div class="col-lg-8">
          	<div class="row">
				<div class="col-md-12 Properties-single mt-4 mb-5 ftco-animate">
          <h3>Personal Details:</h3>
          <div class="d-flex justify-content-end">
            <button type="button" class="btn btn-info">Edit</button> 
          </div>
					<p class="rate mb-4">
						
              </p>
              <div class="details" style="margin-top: -40px;">
              <p class="d-flex mb-3">Name :- <?php echo $row['username'] ?></p>
              <p class="d-flex mt-3 mb-3">Phone Number :- <?php echo $row['phone_no'] ?></p>
              <p class="d-flex mt-3">Email-Id :- <?php echo $row['email_id'] ?></p>
              <p class="d-flex mt-3">What's App Number :- <?php echo $row['whatsapp'] ?></p>
              <p class="d-flex mt-3">Address :- <?php echo $row['address'] ?></p>
              </div>
              
						  <!--<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
              -->
        </div>
        <div class="col-md-12 Properties-single mt-4 mb-5 ftco-animate">
          <?php
           if($result1->num_rows>0)
           {
           echo '<h3 class="mb-4" style="font-weight: 300; color: black;">Properties you have posted:</h3>';
           }
           ?>
           </div>
       
        <?php
            for($i=1;$i<=$result1->num_rows;$i++)
            {

              $row1=$result1->fetch_assoc();
              $x = $row1['p_id'];
              $sql4 = "select * from pg_table where property_id = '$x'";

              $result4 = $db->query($sql4);

              $sql5 = "select * from apartment_table where property_id = '$x'";

              $result5 = $db->query($sql5);


              $sql6 = "select * from plot_table where property_id = '$x'";

              $result6 = $db->query($sql6);


              if($result4->num_rows>0)
              {

              $sql2 = "select * from images where property_id = $x";

              $result2 = $db->query($sql2);

             
              $row4=$result4->fetch_assoc(); 
       
              echo '   <div class="col-md-12 Properties-single mt-4 mb-5 ftco-animate">
           
              <h3 class="mb-4" style="font-weight: 300; color: black;"></h3>
                <h5> '.$row4['pg_name'].'</h5>
                <div class="d-flex justify-content-end">
                  <button type="button" class="btn btn-info">Edit</button> 
                </div>
            
          			<p class="rate mb-4">
          				<span class="loc"><a href="#"><i class="icon-map"></i> '.$row4['pg_address'].'</a></span>
    						</p>
    						<p>'.$row4['pg_details'].'</p>
    						<div class="d-md-flex mt-5 mb-5">
    							<ul>
                  <li><span>Price: </span> '.$row4['pg_price'].'</li>
	    							<li><span>Gender: </span> '.$row4['pg_gender'].'</li>
	    							<li><span>Category: </span> '.$row4['pg_category'].'</li>
	    							<li><span>Status: </span> '.$row4['pg_status'].'</li>
	    							<li><span>Meals: </span> '.$row4['pg_meals'].'</li>
                    <li><span>Single Room: </span> '.$row4['pg_singleroom'].'</li>
	    						</ul>
	    						<ul class="ml-md-5">
	    							<li><span>Attached Toilet and Bathroom: </span> '.$row4['pg_atb'].'</li>
	    							<li><span>Hot and Cold Water: </span> '.$row4['pg_hotandcold'].'</li>
	    							<li><span>Shared Bed: </span> '.$row4['pg_sharedbed'].'</li>
	    							<li><span>Self Cooking: </span> '.$row4['pg_selfcooking'].'</li>
                    <li><span>Parking Facilities: </span> '.$row4['pg_parking'].'</li>
	    						</ul>
    						</div>
    						<!--<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p> -->
          </div>';
          ?>
				  <div class="col-md-12 ftco-animate">
					<div class="single-slider owl-carousel">
          <?php
          for($j=1;$j<=$result2->num_rows;$j++)
          {
           
            $row2=$result2->fetch_assoc(); 
           ?>  
            	<div class="item">
							<div class="properties-img" style="background-image: url(uploads/<?php echo $row2['image_name']?>);"></div>
						</div>
          <?php }?>
        
					
					<!--	<div class="item">
							<div class="properties-img" style="background-image: url(images/properties-3.jpg);"></div>
						</div> -->
					</div>
          
				</div>

        <?php
        
          }
        
        
          if($result5->num_rows>0)
          {

          $sql2 = "select * from images where property_id = $x";

          $result2 = $db->query($sql2);

         
          $row5=$result5->fetch_assoc(); 
   
          echo '   <div class="col-md-12 Properties-single mt-4 mb-5 ftco-animate">
       
          <h3 class="mb-4" style="font-weight: 300; color: black;"></h3>
            <h5> '.$row5['name'].'</h5>
            <div class="d-flex justify-content-end">
              <button type="button" class="btn btn-info">Edit</button> 
            </div>
        
            <p class="rate mb-4">
              <span class="loc"><a href="#"><i class="icon-map"></i> '.$row5['reason'].'</a></span>
            </p>
            <p>'.$row5['others'].'</p>
            <div class="d-md-flex mt-5 mb-5">
              <ul>
              <li><span>Category:  </span> '.$row5['category'].'</li>
                <li><span>Area:  </span> '.$row5['area'].'</li>
                <li><span>Location: </span> '.$row5['location'].'</li>
                <li><span>Intercomm Facilities:  </span> '.$row5['in_fac'].'</li>
                <li><span>Gym: </span> '.$row5['gym'].'</li>
                <li><span>Garden:  </span> '.$row5['garden'].'</li>
                <li><span>24*7 Power Backup and Water Supply:  </span> '.$row5['p_w'].'</li>
              </ul>
              <ul class="ml-md-5">
                <li><span>Swimming Pool:  </span> '.$row5['pool'].'</li>
                <li><span>Generator:  </span> '.$row5['generator'].'</li>
                <li><span>Shared Fire Safety:  </span> '.$row5['fire_safety'].'</li>
                <li><span>Car Parking:  </span> '.$row5['car_parking'].'</li>
                <li><span>Community Hall:  </span> '.$row5['community_hall'].'</li>
                <li><span>Security Maintenence:  </span> '.$row5['security_main'].'</li>
              </ul>
            </div>
            <!--<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p> -->
      </div>';
      ?>
      <div class="col-md-12 ftco-animate">
      <div class="single-slider owl-carousel">
      <?php
      for($j=1;$j<=$result2->num_rows;$j++)
      {
       
        $row2=$result2->fetch_assoc(); 
       ?>  
          <div class="item">
          <div class="properties-img" style="background-image: url(uploads/<?php echo $row2['image_name']?>);"></div>
        </div>
      <?php }?>
    
      
      <!--	<div class="item">
          <div class="properties-img" style="background-image: url(images/properties-3.jpg);"></div>
        </div> -->
      </div>
      
    </div>

    <?php
    
      }
      
         
      if($result6->num_rows>0)
      {

      $sql2 = "select * from images where property_id = $x";

      $result2 = $db->query($sql2);

     
      $row6=$result6->fetch_assoc(); 

      echo '   <div class="col-md-12 Properties-single mt-4 mb-5 ftco-animate">
   
      <h3 class="mb-4" style="font-weight: 300; color: black;"></h3>
        <h5> My Plot</h5>
        <div class="d-flex justify-content-end">
          <button type="button" class="btn btn-info">Edit</button> 
        </div>
    
        <p class="rate mb-4">
          <span class="loc"><a href="#"><i class="icon-map"></i> '.$row6['location'].'</a></span>
        </p>
        <p></p>
        <div class="d-md-flex mt-5 mb-5">
          <ul>
          <li><span>Type: </span> '.$row6['type'].'</li>
            <li><span>Specification: </span> '.$row6['speci'].'</li>
            <li><span>Bigha: </span> '.$row6['bigha'].'</li>
            <li><span>Katha: </span> '.$row6['katha'].'</li>
            <li><span>Lesha: </span> '.$row6['lesha'].'</li>
          </ul>
          <ul class="ml-md-5">
            <li><span>Daag Number: </span> '.$row6['daag'].'</li>
            <li><span>Patta Number: </span> '.$row6['patta'].'</li>
          </ul>
        </div>
        <!--<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p> -->
  </div>';
  ?>
  <div class="col-md-12 ftco-animate">
  <div class="single-slider owl-carousel">
  <?php
  for($j=1;$j<=$result2->num_rows;$j++)
  {
   
    $row2=$result2->fetch_assoc(); 
   ?>  
      <div class="item">
      <div class="properties-img" style="background-image: url(uploads/<?php echo $row2['image_name']?>);"></div>
    </div>
  <?php }?>

  
  <!--	<div class="item">
      <div class="properties-img" style="background-image: url(images/properties-3.jpg);"></div>
    </div> -->
  </div>
  
</div>

<?php

  }   
        
        
        }
            
        
            ?>








        
          		

          		
        

          	</div>
          </div> <!-- .col-md-8 -->
          <!--
          <div class="col-lg-4 sidebar ftco-animate">
            <div class="sidebar-box d-flex justify-content-end" style="float:right;">
          

            </div>
        -->

            
          </div>
        </div>
      </div>
    </section> <!-- .section -->
		
		

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Royalestate</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Buy</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Home For Sale</a></li>
                <li><a href="#" class="py-2 d-block">Open Houses</a></li>
                <li><a href="#" class="py-2 d-block">New Listing</a></li>
                <li><a href="#" class="py-2 d-block">Recently Reduce</a></li>
                <li><a href="#" class="py-2 d-block">Off-Market Homes</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Sell</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Sell Your Home</a></li>
                <li><a href="#" class="py-2 d-block">Get A Home Valuation</a></li>
                <li><a href="#" class="py-2 d-block">Local Home Prices</a></li>
                <li><a href="#" class="py-2 d-block">Guides &amp; Rules</a></li>
                <li><a href="#" class="py-2 d-block">Others</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

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