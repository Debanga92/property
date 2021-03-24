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
  <style>
  div.a {
  white-space: nowrap; 
  max-width: 350px; 
  overflow: hidden;
  text-overflow: ellipsis;
  
}
</style>
  <body>
    <div class="top">
    	<div class="container">
    		<div class="row d-flex align-items-center">
    			<div class="col">
    				<p class="social d-flex">
    					<a href="#"><img src="images/facebook(2).png" class="img-fluid mb-2" style="max-height: 16px !important; max-width:16px !important;"></a>
    					<a href="#"><img src="images/twitter.png" class="img-fluid mb-2" style="max-height: 16px !important; max-width:16px !important;"></a>
    					<a href="#"><img src="images/instagram-sketched.png" class="img-fluid mb-2" style="max-height: 16px !important; max-width:16px !important;"></a>
						<a href="#"><img src="images/linkedin.png" class="img-fluid mb-2" style="max-height: 16px !important; max-width:16px !important;"></a>
    				</p>
    			</div>
    			<div class="col d-flex justify-content-end">
    				<p class="num mb-2" style="font-size:16px !important;"><img src="images/phone(3).png" class="img-fluid mb-1 mr-2" style="max-height: 16px !important; max-width: 16px !important;"><b>+91 9707218127</b></p>
    			</div>
    		</div>
    	</div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
        <div class="row d-flex align-items-center">
	      <a class="navbar-brand" href="index.php"><img src="images/logo.png" style="max-height: 100px !important; max-width: 250px !important; z-index: 1 !important;"></a></div>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	       <ul class="navbar-nav ml-auto">
	         <!-- <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="property.html" class="nav-link">Property</a></li>
	          <li class="nav-item"><a href="agents.html" class="nav-link">Agents</a></li>
	          <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="test.html" class="nav-link">Testimonials</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li> -->
              
              <li class="btn-group-lg nav-item p-1" role="group">
  <!--<button type="button" class="btn btn-default" style=" color: #000000 !important; background-color: #fff !important; font-size: 14px !important;">Search Property</button>-->
  <button type="button" class="btn btn-default" style=" color: #000000 !important; background-color: #fff !important; font-size:14px !important;">Post your Ad <span style="background-color: #FFFF00 !important">Free*</span></button>
  <button type="button" class="btn btn-default" style=" color: #000000 !important; background-color: #fff !important; font-size:14px !important;">Ad Packages</button>
  <!--<button type="button" class="btn btn-primary" style="color: #000000 !important; background-color: #fff !important; font-size:16px !important;"><img src="images/user.png" class="img-fluid" style="max-height: 16px !important; max-width: 16px !important"> Login</button>-->
		</li>
        
	          <!--<li class="nav-item cta"><a href="" class="nav-link ml-lg-2"><span class="icon-user"></span> Sign-In</a></li>-->
	          <!--<li class="nav-item cta cta-colored"><a href="signup.php" class="nav-link"><span class="icon-pencil"></span> Sign-Up</a></li>-->

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
    		<?php	echo'	<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<span class="status sale">PG</span>
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="pg_show.php?ap_id='.$y.'"> '.$row1['pg_name'].' ('.$row1['pg_gender'].')</a></h3>
		    						<p> '.$row1['locality'].' </p>
	    						</div>
	    						<div class="two">
	    							<span class="price">INR '.$row1['pg_price'].'</span>
    							</div>
    						</div>
    						<p><div class="a"> '.$row1['pg_details'].'</div></p>
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
    		<?php	echo'<div class="icon d-flex justify-content-center align-items-center">
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
    						<p><div class="a">'.$row2['others'].'</div></p>
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
    						<p><div class="a">'.$row3['speci'].'</div> </p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="flaticon-selection"></i> '.$row3['bigha'].'&nbsp;Bigha '.$row3['katha'].'&nbsp;Katha  '.$row3['lesha'].'&nbsp;Lesha </span>
    				
    						</p>
    					</div>
    				</div>
                </div>';
                    }
                } ?>
    		</div>
          <!--<div class="row mt-5" style="background-color: red;">
          <div class="col text-center">
            <div class="block-27">
             <!-- <ul>
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
        </div>-->
    	</div>
    </section>
<?php include 'footer.php'; ?>
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