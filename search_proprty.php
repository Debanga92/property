<?php
include 'connect.php';

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
	          <li class="nav-item cta"><a href="contact.html" class="nav-link ml-lg-2"><span class="icon-user"></span> Sign-In</a></li>
	          <li class="nav-item cta cta-colored"><a href="contact.html" class="nav-link"><span class="icon-pencil"></span> Sign-Up</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <div class="hero-wrap">
     
      <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Property</span></p>
 <h1 class="mb-3 bread" style="color: black;">Properties</h1>          
        </div>
      </div>
    </div>

    <?php 
    $sql = "select ap_id from adminproperty ";
    $result = $db->query($sql);

    
    
    ?>
    

    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row">
                <?php
                if($result->num_rows==0)
                {
                  echo "<h4>Sorry, No results to be displayed..</h4>";
                }
                else
                {
                for($i=1;$i<=$result->num_rows;$i++)
                {
                    $row=$result->fetch_assoc();
                    $x= $row['ap_id'];
                    
                    $sql1 = "select * from pg_table where ap_id = $x";
                    $result1 = $db->query($sql1);
               
              
 
                    $sql2 = "select * from apartment_table where ap_id=$x";
                    $result2 = $db->query($sql2);


                    $sql3 = "select * from plot_table where ap_id=$x";
                    $result3 = $db->query($sql3);






                    if($result1->num_rows>0)
                    {
                        $sql4 = "select * from images where ap_id = $x";

                        $result4 = $db->query($sql4);
                        $row4 = $result4->fetch_assoc();
                        $row1=$result1->fetch_assoc();
                        $y=$row1['ap_id'];
                        

    		echo	'<div class="col-md-4 ftco-animate">';?>
    				<div class="properties">
    					<a href="pg_show.php?ap_id=<?php echo $y;?>" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(uploads/<?php echo $row4['image_name']?>);">
    		<?php	echo'			<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<span class="status sale">PG</span>
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="pg_show.php?ap_id='.$y.'"> '.$row1['pg_name'].' ('.$row1['pg_gender'].')</a></h3>
		    						<p> '.$row1['pg_address'].' </p>
	    						</div>
	    						<div class="two">
	    							<span class="price">INR '.$row1['pg_price'].'</span>
    							</div>
    						</div>
    						<p> '.$row1['pg_details'].'</p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="flaticon-person"></i>For '.$row1['pg_category'].'</span>
    						
    						</p>
    					</div>
    				</div>
                </div>';
                    }


                    if($result2->num_rows>0)
                    {
                        $sql4 = "select * from images where ap_id = $x";

                        $result4 = $db->query($sql4);
                        $row4 = $result4->fetch_assoc();
                        $row2=$result2->fetch_assoc();
                        $y=$row2['ap_id'];


    		echo	'<div class="col-md-4 ftco-animate">'; ?>
    				<div class="properties">
    					<a href="apartment_show.php?ap_id=<?php echo $y;?>" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(uploads/<?php echo $row4['image_name']?>);">
    		<?php	echo'			<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<span class="status sale">'.$row2['r_s'].'</span>
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="apartment_show.php?ap_id='.$y.'">'.$row2['name'].'</a></h3>
		    						<p>'.$row2['locality'].'</p>
	    						</div>
	    						<div class="two">
	    							<span class="price">INR<br>'.$row2['price'].'</span>
    							</div>
    						</div>
    						<p>'.$row2['others'].'</p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="flaticon-selection"></i> '.$row2['area'].' sqft</span>
    							<span class="ml-auto"><i class="flaticon-bed"></i> '.$row2['category'].'</span>
    							
    						</p>
    					</div>
    				</div>
                </div>';
                    }





                    if($result3->num_rows>0)
                    {

                        $sql4 = "select * from images where ap_id = $x";

                        $result4 = $db->query($sql4);
                        $row4 = $result4->fetch_assoc();
                        $row3=$result3->fetch_assoc();
                        $y=$row3['ap_id'];

    		echo	'<div class="col-md-4 ftco-animate">'; ?>
    				<div class="properties">
    					<a href="plot_show.php?ap_id=<?php echo $y;?>" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(uploads/<?php echo $row4['image_name']?>);">
    <?php	echo'	<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<span class="status sale">Sale</span>
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="plot_show.php?ap_id='.$y.'">Plot Availabe</a></h3>
		    						<p>'.$row2['locality'].' </p>
	    						</div>
	    						<div class="two">
	    							<span class="price">INR '.$row3['price'].'</span>
    							</div>
    						</div>
    						<p>'.$row3['speci'].' </p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="flaticon-selection"></i> '.$row3['bigha'].'&nbsp;Bigha '.$row3['katha'].'&nbsp;Katha  '.$row3['lesha'].'&nbsp;Lesha </span>
    				
    						</p>
    					</div>
    				</div>
                </div>';
                    }





                }  }?>
    		</div>
   <!-- <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div> -->
    	</div>
    </section>
		


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