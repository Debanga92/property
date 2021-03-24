<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Real Estate Properties in Assam- Buy, Sell or Rent properties</title>
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
  <button type="button" class="btn btn-default" style=" color: #000000 !important; background-color: #fff !important; font-size:14px !important;"><a href="property.php">All Properties</a></button>
  <button type="button" class="btn btn-default" style=" color: #000000 !important; background-color: #fff !important; font-size:14px !important;">Post your Ad <span style="background-color: #FFFF00 !important">Free*</span></button>
  <button type="button" class="btn btn-default" style=" color: #000000 !important; background-color: #fff !important; font-size:14px !important;">Ad Packages</button>
                  <!--<button type="button" class="btn btn-primary" style="color: #000000 !important; background-color: #fff !important; font-size:16px !important;"><img src="images/user.png" class="img-fluid" style="max-height: 16px !important; max-width: 16px !important"><a href="login.php"> Login</a></button>-->
		</li>
        
	          <!--<li class="nav-item cta"><a href="" class="nav-link ml-lg-2"><span class="icon-user"></span> Sign-In</a></li>-->
	          <!--<li class="nav-item cta cta-colored"><a href="signup.php" class="nav-link"><span class="icon-pencil"></span> Sign-Up</a></li>-->

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    <section class="ftco-search" style="background-image: url(images/website%20background%203.jpg) !important; background-repeat:no-repeat !important; background-size:cover !important;">
    	<div class="container" id="cont1" style="background-color:transparent !important;">
            <div class="btn-group-lg" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-secondary" name="buy" id="buy" onClick="populate1()">Buy</button>
  <button type="button" class="btn btn-secondary" name="rent" id="rent" onClick="populate2()">Rent</button>
  <button type="button" class="btn btn-secondary" name="projects" id="projects" onClick="populate3()">Projects</button>
		</div>
   
				<form class="search-form" name="search_form" id="search_form" action="form_process.php"  method="get">
                    
	        		<div class="row">
                        <div class="col-md align-items-end">
	        				<div class="form-group">
	        					<label for="#" style="color: #fff !important;">Location</label>
	          				<div class="form-field">
			                <input type="text" class="form-control" name="loc" id="loc" placeholder="Locality Name" required>
			              </div><div id="locList" class="locList"></div>
		              </div>
	        		</div>
                        
                        <div class="col-md align-items-end">
	        				<div class="form-group">
	        					<label for="#" style="color: #fff !important;">Property Type</label>
	        					<div class="form-field">
	          					<div class="select-wrap" id="select-wrap">
	                     
	                      <select class="form-control" name="ptype" id="ptype" style="font-size:14px !important;" onChange="populate4('ptype','budget')" required>
	                      	<option selected value="">Please select Buy/Rent/Projects first</option>
	                      </select>
	                    </div>
			              </div>
		              </div>
	        			</div>
	        			<div class="col-md align-items-end">
	        				<div class="form-group">
	        					<label for="#" style="color: #fff !important;">Budget</label>
	        					<div class="form-field">
	          					<div class="select-wrap">
	                      
	                      <select name="budget" id="budget" class="form-control" style="font-size:14px !important;" required>
                          <option selected value="" >Please select Buy/Rent/Projects first</option>

	                      </select>
	                    </div>
			              </div>
		              </div>
	        		</div>
                     <div class="col-md align-self-end">
	        				<div class="form-group">
	        					<div class="form-field">
			                <input type="submit" name="search" id="search" value="Search" class="form-control btn btn-primary" style="background-color: #fff !important; color: #000000 !important;">
			              </div>
		              </div>
	        			</div>
                        </div>
	        		
	        	</form>
			</div>
      
      </section>
    <section class="ftco-section bg-light">
      <div class="container">
      <h3 style="text-align:center !important;"> Why Choose US? </h3>
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center"><img  class="img-fluid" src="images/Free.png" style="max-height: 90px !important; max-width: 100px !important;"></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Absolutely free*</h3>
                <p>Showcase your property to thousand of potentials customers across our platform & get instant notifications from eagerly waiting buyers & sellers. Post your property absolutely Free* for 1 Month, yes you heard it right. It’s easy…& It’s simple</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center"><img  class="img-fluid" src="images/team.png" style="max-height: 100px !important; max-width: 100px !important;"></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3 mt-4">An expert friend</h3>
                <p>Propertyatease is an expert friend, who helps the user make wise property decisions. Once the users start using Propertyatease, they will acknowledge it as a much better way to search for and advertise properties compared to the traditional print classifieds.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-sel Searchf-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center"><img  class="img-fluid" src="images/easy.png" style="max-height: 90px !important; max-width: 100px !important;"></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Easy to use</h3>
                <p>Propertyatease is easy to use and has been designed keeping the users at the center stage. We do not overload the users with all the information that exists. We have incorporated advanced search functionalities, which help you find the information that you need in a non-intrusive manner and in the least possible time.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center"><img  class="img-fluid" src="images/eye.png" style="max-height: 90px !important; max-width: 100px !important;"></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Visually appealing</h3>
                <p>Propertyatease has taken great pains to conduct usability studies and we strongly believe that we appeal to the users of all ages, across geographies. We have incorporated a number of design elements that will surprise you, once you start using our services.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>
    
    <section class="ftco-section ftco-properties">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading" style="margin-top: -60px !important;">Recent Posts</span>
            <h2 class="mb-4">Recent Properties</h2>
          </div>
        </div>
        <div class="row">
    			<div class="col-md-12">
    				<div class="properties-slider owl-carousel ftco-animate">
					<?php 
                        include 'connect.php';
                        $sql = "select ap_id from adminproperty order by ap_id desc limit 6";
                        $result = $db->query($sql);


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
?>


    					<div class="item">
		    				<div class="properties">
							<a href="pg_show.php?ap_id=<?php echo $y;?>" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(uploads/<?php echo $row4['image_name']?>);">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<span class="status sale">PG</span>
		    						<div class="d-flex">
		    							<div class="one">
				    						<h3><a href="#"><?php echo $row1['locality']; ?>, <?php echo $row1['city']; ?></a></h3>
				    						<p><?php echo $row1['pg_gender']; ?></p>
			    						</div>
			    						<div class="two">
			    							<span class="price">INR <?php echo $row1['pg_price']; ?><small>/ month</small></span>
		    							</div>
		    						</div>
		    					</div>
		    				</div>
	    				</div>

						<?php }

if($result2->num_rows>0)
	{
		$sql4 = "select * from images where ap_id = $x";

		$result4 = $db->query($sql4);
		$row4 = $result4->fetch_assoc();
		$row2=$result2->fetch_assoc();
		$y=$row2['ap_id'];
?>
	    				<div class="item">
		    				<div class="properties">
							<a href="apartment_show.php?ap_id=<?php echo $y;?>" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(uploads/<?php echo $row4['image_name']?>);">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<div class="d-flex">
		    							<span class="status rent"><?php echo $row2['r_s']; ?></span>
		    							<div class="one">
				    						<h3><a href="#"><?php echo $row2['locality']; ?>, <?php echo $row2['city']; ?></a></h3>
				    						<p>Apartment</p>
			    						</div>
			    						<div class="two">
			    							<span class="price">INR <?php echo $row2['price']; ?></span>
		    							</div>
		    						</div>
		    					</div>
		    				</div>
	    				</div>
						<?php }

if($result3->num_rows>0)
	{
		$sql4 = "select * from images where ap_id = $x";

		$result4 = $db->query($sql4);
		$row4 = $result4->fetch_assoc();
		$row3=$result3->fetch_assoc();
		$y=$row3['ap_id'];
?>
	    				<div class="item">
		    				<div class="properties">
							<a href="plot_show.php?ap_id=<?php echo $y;?>" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(uploads/<?php echo $row4['image_name']?>);">	
	    					<div class="icon d-flex justify-content-center align-items-center">
		    					<span class="icon-search2"></span>
		    				</div>
		    					</a>
		    					<div class="text p-3">
		    						<span class="status sale">Sale</span>
		    						<div class="d-flex">
		    							<div class="one">
				    						<h3><a href="#"><?php echo $row3['locality']; ?>, <?php echo $row3['city']; ?></a></h3>
				    						<p>Plot</p>
			    						</div>
			    						<div class="two">
			    							<span class="price">INR <?php echo $row3['price']; ?></span>
		    							</div>
		    						</div>
		    					</div>
		    				</div>
	    				</div>
						<?php }

} ?>
    	</div>
    	</div>
    	</div>
    	</div>
    </section>

    <!--<section class="ftco-section bg-light">
    	<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Special Offers</span>
            <h2 class="mb-4">Most Recommended Properties</h2>
          </div>
        </div>    		
    	</div>
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7">
            <h2 class="mb-4" style="text-align: center !important">Most Recommended Properties in the city will be displayed here..</h2>
          </div>
        </div>
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="properties">
    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/properties-1.jpg);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<span class="status sale">Sale</span>
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="#">North Parchmore Street</a></h3>
		    						<p>Apartment</p>
	    						</div>
	    						<div class="two">
	    							<span class="price">$20,000</span>
    							</div>
    						</div>
    						<p>Far far away, behind the word mountains, far from the countries</p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="flaticon-selection"></i> 250sqft</span>
    							<span class="ml-auto"><i class="flaticon-bathtub"></i> 3</span>
    							<span><i class="flaticon-bed"></i> 4</span>
    						</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="properties">
    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/properties-2.jpg);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<span class="status sale">Sale</span>
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="#">North Parchmore Street</a></h3>
		    						<p>Apartment</p>
	    						</div>
	    						<div class="two">
	    							<span class="price">$20,000</span>
    							</div>
    						</div>
    						<p>Far far away, behind the word mountains, far from the countries</p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="flaticon-selection"></i> 250sqft</span>
    							<span class="ml-auto"><i class="flaticon-bathtub"></i> 3</span>
    							<span><i class="flaticon-bed"></i> 4</span>
    						</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="properties">
    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/properties-3.jpg);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<span class="status rent">Rent</span>
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="#">North Parchmore Street</a></h3>
		    						<p>Apartment</p>
	    						</div>
	    						<div class="two">
	    							<span class="price">$800 <small>/ month</small></span>
    							</div>
    						</div>
    						<p>Far far away, behind the word mountains, far from the countries</p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="flaticon-selection"></i> 250sqft</span>
    							<span class="ml-auto"><i class="flaticon-bathtub"></i> 3</span>
    							<span><i class="flaticon-bed"></i> 4</span>
    						</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="properties">
    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/properties-4.jpg);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<span class="status sale">Sale</span>
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="#">North Parchmore Street</a></h3>
		    						<p>Apartment</p>
	    						</div>
	    						<div class="two">
	    							<span class="price">$20,000</span>
    							</div>
    						</div>
    						<p>Far far away, behind the word mountains, far from the countries</p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="flaticon-selection"></i> 250sqft</span>
    							<span class="ml-auto"><i class="flaticon-bathtub"></i> 3</span>
    							<span><i class="flaticon-bed"></i> 4</span>
    						</p>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>-->

    <!--<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_1.jpg);">
    	<div class="container">
    		<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-4">Some fun facts</h2>
          </div>
        </div>
    		<div class="row justify-content-center">
    			<div class="col-md-10">
		    		<div class="row">
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="9000">0</strong>
		                <span>Happy Customers</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="10000">0</strong>
		                <span>Properties</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="1000">0</strong>
		                <span>Agents</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="100">0</strong>
		                <span>Awards</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>


    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 ftco-animate">
          	<div class="row ftco-animate">
		          <div class="col-md-12">
		            <div class="carousel-testimony owl-carousel ftco-owl">
		              <div class="item">
		                <div class="testimony-wrap py-4 pb-5">
		                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text text-center">
		                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Clients</span>
		                  </div>
		                </div>
		              </div>
		              <div class="item">
		                <div class="testimony-wrap py-4 pb-5">
		                  <div class="user-img mb-4" style="background-image: url(images/person_2.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text text-center">
		                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Agent</span>
		                  </div>
		                </div>
		              </div>
		              <div class="item">
		                <div class="testimony-wrap py-4 pb-5">
		                  <div class="user-img mb-4" style="background-image: url(images/person_3.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text text-center">
		                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Client</span>
		                  </div>
		                </div>
		              </div>
		              <div class="item">
		                <div class="testimony-wrap py-4 pb-5">
		                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text text-center">
		                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Client</span>
		                  </div>
		                </div>
		              </div>
		              <div class="item">
		                <div class="testimony-wrap py-4 pb-5">
		                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
		                    <span class="quote d-flex justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text text-center">
		                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Client</span>
		                  </div>
		                </div>
		              </div>
		            </div>
		          </div>
		        </div>
          </div>
        </div>
      </div>
    </section>-->

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
              <!--<h2 class="ftco-heading-2">Propertyatease Property Searching Simplified</h2>-->
              <a href="index.php"><img src="images/logo2.png" style="height: auto !important; max-width: 250px !important;"><br></a>
              <p class="mt-3" style="text-align: justify!important">Propertyatease promises to be the most preferred way of finding your dream property and is committed to help you make a wiser property decision as a buyer or a seller. </p>
                <p>Follow us on:</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-2">
                <li><a href="#"><img class="img-fluid p-2" src="images/facebook(2).png" style="border-radius: 50% !important;"></a></li>
                <li><a href="#"><img class="img-fluid p-2" src="images/twitter.png" style="border-radius: 50% !important;"></a></li>
                <li><a href="#"><img class="img-fluid p-2" src="images/linkedin.png" style="border-radius: 50% !important;"></a></li>
                <li><a href="#"><img class="img-fluid p-2" src="images/instagram-sketched2.png" style="border-radius: 50% !important;"></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 d-flex justify-content-center">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Quick Links</h2>
              <ul class="list-unstyled">
                <li><a href="index.php" class="py-2 d-block">Home</a></li>
                <li><a href="property.php" class="py-2 d-block">Property</a></li>
                <li><a href="about.html" class="py-2 d-block">About</a></li>
                <li><a href="test.html" class="py-2 d-block">Testimonials</a></li>
                <li><a href="contact.html" class="py-2 d-block">Contact</a></li>
              </ul>
            </div>
          </div>
            <div class="col-md-3 d-flex justify-content-center">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Other Useful Links</h2>
              <ul class="list-unstyled">
                <li><a href="terms.html" class="py-2 d-block">Terms &amp; Conditions</a></li>
                <li><a href="privacy.html" class="py-2 d-block">Our Privacy Policy</a></li>
                <li><a href="careers.php" class="py-2 d-block">Career at PropertyAtEase</a></li>
                <!--<li><a href="blog.html" class="py-2 d-block">Blog</a></li>
                <li><a href="contact.html" class="py-2 d-block">Contact</a></li>-->
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have Questions? Contact us at:</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><img src="images/location.png" style="max-height: 24px !important; max-width: 24px !important;" class="img-fluid mr-2"><span class="text">2nd Floor, House No: 22, Nabarun Path, Jatia, Kahilipara, PIN: 781006</span></li>
	                <li><img src="images/phone2.png" class="img-fluid mr-2" style="max-height:24px !important; max-width: 24px !important;"><span class="text">+91 9707218127</span></li>
	                <li><img src="images/mail.png" class="img-fluid mr-2" style="max-height:32px !important; max-width:32px !important;"><span class="text">contact@propertyatease.in</span></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <!--<a href="https://colorlib.com" target="_blank">-->Propertyatease
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
      
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
      <!--Scripts-->
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
  <script src="js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" defer>
      $(document).ready(function(){
        $('#loc').keyup(function(){
        var query = $(this).val();
        if(query!=''){
            $.ajax({
                url:"process.php",
                method:"POST",
                data: {query:query},
                success:function(data)
                {
                    $('#locList').fadeIn();
                    $('#locList').html(data);
                }
            });
        }
        else{
            $('#locList').fadeOut();
            $('#locList').html("");
        }
    });
    $(document).on('click', '#li1', function(){
        $('#loc').val($(this).text());
        $('#locList').fadeOut();
    });
});
 </script>
 <script type="text/javascript" defer>
     function populate1(){
		var ptype = document.getElementById('ptype');
		var budget = document.getElementById('budget');
		var i, L = ptype.options.length-1;
        budget.innerHTML="";
		for(i=L; i>=0; i--){
			ptype.options.remove(i);
			
		}
		var optionArray = ["|Please Select Property Type", "flat1|Flat or Apartment", "plot|Plot", "house1|Individual House or Villa"];
		for(var option in optionArray){
			var pair = optionArray[option].split("|");
			var newOption = document.createElement("option");
			newOption.value = pair[0];
			newOption.innerHTML = pair[1];
			ptype.options.add(newOption);
		}
	 }
	 function populate2(){
		 var ptype = document.getElementById('ptype');
		 var budget = document.getElementById('budget');
		 var i, L = ptype.options.length-1;
         budget.innerHTML="";
		 for(i=L; i>=0; i--)
		 {
			 ptype.options.remove(i);
		 }
		 var optionArray2 = ["|Please Select Property Type", "flat2|Flat or Apartment", "pg|PG", "house2|Individual House or Villa"];
		 for(var option in optionArray2){
			var pair = optionArray2[option].split("|");
			var newOption = document.createElement("option");
			newOption.value = pair[0];
			newOption.innerHTML = pair[1];
			ptype.options.add(newOption);
		}
	 }
	 function populate3(){
		 var ptype = document.getElementById('ptype');
		 var budget = document.getElementById('budget');
		 var i, L = ptype.options.length-1;
         budget.innerHTML="";
		 for(i=L; i>=0; i--)
		 {
			 ptype.options.remove(i);
		 }
		 var optionArray3 = ["|Please Select Property Type", "resi1|Residential Projects (Under Construction)", "resi2|Residential Projects (Ready to Move)", "comm1|Commercial Projects(Under Construction)", "comm2|Commercial Projects(Ready to Move)"];
		 for(var option in optionArray3){
			var pair = optionArray3[option].split("|");
			var newOption = document.createElement("option");
			newOption.value = pair[0];
			newOption.innerHTML = pair[1];
			ptype.options.add(newOption);
		}
	 }
    function populate4(){
         var ptype4 = document.getElementById('ptype');
		 var budget = document.getElementById('budget');
		 var L4 = budget.options.length-1;
         
         if(ptype4.value == ""){
             budget.innerHTML="";
         }
		 else if(ptype4.value == "flat1")
		 {
             budget.innerHTML="";
             var optionArray4 = ["|Please Select your Budget", "100000 and 1800000|1L- 18L", "1800000 and 2000000|18L-20L", "2000000 and 2500000|20L-25L", "2500000 and 3000000|25L-30L", "3000000 and 3500000|30L-35L", "3500000 and 4000000|35L-40L", "4000000 and 4500000|40L-45L", "4500000 and 5000000|45L-50L", "5000000 and 5500000|50L-55L", "5500000 and 6000000|55L-60L", "6000000 and 6500000|60L-65L", "6500000 and 7000000|65L-70L", "7000000 and 7500000|70L-75L", "7500000 and 8000000|75L-80L", "8000000 and 8500000|80L-85L", "8500000 and 9000000|85L-90L", "9000000 and 9500000|90L-95L", "9500000 and 10000000|95L-1crore", "10000000 and 20000000|1crore-2crore", "20000000 and 30000000|2crore-3crore", "30000000 and 40000000|3crore-4crore", "40000000 and 50000000|4crore-5crore", "50000000 and 60000000|5crore-6crore", "60000000 and 70000000|6crore-7crore", "70000000 and 80000000|7crore-8crore", "80000000 and 90000000|8crore-9crore", "90000000 and 100000000|9crore-10crore", "100000000 and 1000000000|10crore-100crore"];
		 }
        else if(ptype4.value == "plot"){
            budget.innerHTML="";
            var optionArray4 = ["|Please Select your Budget", "100000 and 200000|1L-2L", "200000 and 300000|2L-3L", "300000 and 400000|3L-4L", "400000 and 500000|4L-5L", "500000 and 600000|5L-6L", "600000 and 700000|6L-7L", "700000 and 800000|7L-8L", "800000 and 900000|8L-9L", "900000 and 1000000|9L-10L", "1000000 and 1500000|10L-15L", "1500000 and 2000000|15L-20L", "2000000 and 2500000|20L-25L", "2500000 and 3000000|25L-30L", "3000000 and 3500000|30L-35L", "3500000 and 4000000|35L-40L", "4000000 and 4500000|40L-45L", "4500000 and 5000000|45L-50L", "5000000 and 5500000|50L-55L", "5500000 and 6000000|55L-60L", "6000000 and 6500000|60L-65L", "6500000 and 7000000|65L-70L", "7000000 and 7500000|70L-75L", "7500000 and 8000000|75L-80L", "8000000 and 8500000|80L-85L", "8500000 and 9000000|85L-90L", "9000000 and 9500000|90L-95L", "9500000 and 10000000|95L-1Crore", "10000000 and 100000000|1crore-10crore"]; 
        }
        else if(ptype.value == "house1"){
             budget.innerHTML="";
             var optionArray4 = ["|Please Select your Budget", "100000 and 1800000|1L- 18L", "1800000 and 2000000|18L-20L", "2000000 and 2500000|20L-25L", "2500000 and 3000000|25L-30L", "3000000 and 3500000|30L-35L", "3500000 and 4000000|35L-40L", "4000000 and 4500000|40L-45L", "4500000 and 5000000|45L-50L", "5000000 and 5500000|50L-55L", "5500000 and 6000000|55L-60L", "6000000 and 6500000|60L-65L", "6500000 and 7000000|65L-70L", "7000000 and 7500000|70L-75L", "7500000 and 8000000|75L-80L", "8000000 and 8500000|80L-85L", "8500000 and 9000000|85L-90L", "9000000 and 9500000|90L-95L", "9500000 and 10000000|95L-1crore", "10000000 and 20000000|1crore-2crore", "20000000 and 30000000|2crore-3crore", "30000000 and 40000000|3crore-4crore", "40000000 and 50000000|4crore-5crore", "50000000 and 60000000|5crore-6crore", "60000000 and 70000000|6crore-7crore", "70000000 and 80000000|7crore-8crore", "80000000 and 90000000|8crore-9crore", "90000000 and 100000000|9crore-10crore", "100000000 and 1000000000|10crore-100crore"]; 
         }
        else if(ptype.value == "flat2"){
             budget.innerHTML="";
             var optionArray4 = ["|Please Select your budget", "1000 and 8000|1k-8k", "8000 and 10000|8k-10k", "10000 and 15000|10k-15k", "15000 and 20000|15k-20k", "20000 and 25000|20k-25k", "25000 and 30000|25k-30k", "30000 and 35000|30k-35k", "35000 and 40000|35k-40k", "40000 and 45000|40k-45k", "45000 and 50000|45k-50k", "50000 and 100000|50k-1L"]; 
         }
        else if(ptype.value == "pg"){
            budget.innerHTML="";
            var optionArray4 = ["|Please Select your budget", "1000 and 8000|1k-8k", "8000 and 10000|8k-10k", "10000 and 15000|10k-15k", "15000 and 20000|15k-20k", "20000 and 25000|20k-25k", "25000 and 30000|25k-30k", "30000 and 35000|30k-35k", "35000 and 40000|35k-40k", "40000 and 45000|40k-45k", "45000 and 50000|45k-50k", "50000 and 100000|50k-1L"]; 
        }
        else if(ptype.value == "house2"){
            budget.innerHTML="";
            var optionArray4 = ["|Please Select your budget", "1000 and 8000|1k-8k", "8000 and 10000|8k-10k", "10000 and 15000|10k-15k", "15000 and 20000|15k-20k", "20000 and 25000|20k-25k", "25000 and 30000|25k-30k", "30000 and 35000|30k-35k", "35000 and 40000|35k-40k", "40000 and 45000|40k-45k", "45000 and 50000|45k-50k", "50000 and 100000|50k-1L"]; 
        }
        else if(ptype4.value == "resi1"){
            budget.innerHTML="";
             var optionArray4 = ["|Please Select your Budget", "100000 and 1800000|1L- 18L", "1800000 and 2000000|18L-20L", "2000000 and 2500000|20L-25L", "2500000 and 3000000|25L-30L", "3000000 and 3500000|30L-35L", "3500000 and 4000000|35L-40L", "4000000 and 4500000|40L-45L", "4500000 and 5000000|45L-50L", "5000000 and 5500000|50L-55L", "5500000 and 6000000|55L-60L", "6000000 and 6500000|60L-65L", "6500000 and 7000000|65L-70L", "7000000 and 7500000|70L-75L", "7500000 and 8000000|75L-80L", "8000000 and 8500000|80L-85L", "8500000 and 9000000|85L-90L", "9000000 and 9500000|90L-95L", "9500000 and 10000000|95L-1crore", "10000000 and 20000000|1crore-2crore", "20000000 and 30000000|2crore-3crore", "30000000 and 40000000|3crore-4crore", "40000000 and 50000000|4crore-5crore", "50000000 and 60000000|5crore-6crore", "60000000 and 70000000|6crore-7crore", "70000000 and 80000000|7crore-8crore", "80000000 and 90000000|8crore-9crore", "90000000 and 100000000|9crore-10crore", "100000000 and 1000000000|10crore-100crore"];
        }
        else if(ptype4.value == "resi2"){
            budget.innerHTML="";
             var optionArray4 = ["|Please Select your Budget", "100000 and 1800000|1L- 18L", "1800000 and 2000000|18L-20L", "2000000 and 2500000|20L-25L", "2500000 and 3000000|25L-30L", "3000000 and 3500000|30L-35L", "3500000 and 4000000|35L-40L", "4000000 and 4500000|40L-45L", "4500000 and 5000000|45L-50L", "5000000 and 5500000|50L-55L", "5500000 and 6000000|55L-60L", "6000000 and 6500000|60L-65L", "6500000 and 7000000|65L-70L", "7000000 and 7500000|70L-75L", "7500000 and 8000000|75L-80L", "8000000 and 8500000|80L-85L", "8500000 and 9000000|85L-90L", "9000000 and 9500000|90L-95L", "9500000 and 10000000|95L-1crore", "10000000 and 20000000|1crore-2crore", "20000000 and 30000000|2crore-3crore", "30000000 and 40000000|3crore-4crore", "40000000 and 50000000|4crore-5crore", "50000000 and 60000000|5crore-6crore", "60000000 and 70000000|6crore-7crore", "70000000 and 80000000|7crore-8crore", "80000000 and 90000000|8crore-9crore", "90000000 and 100000000|9crore-10crore", "100000000 and 1000000000|10crore-100crore"];
        }
        else if(ptype4.value == "comm1"){
            budget.innerHTML="";
             var optionArray4 = ["|Please Select your Budget", "100000 and 1800000|1L- 18L", "1800000 and 2000000|18L-20L", "2000000 and 2500000|20L-25L", "2500000 and 3000000|25L-30L", "3000000 and 3500000|30L-35L", "3500000 and 4000000|35L-40L", "4000000 and 4500000|40L-45L", "4500000 and 5000000|45L-50L", "5000000 and 5500000|50L-55L", "5500000 and 6000000|55L-60L", "6000000 and 6500000|60L-65L", "6500000 and 7000000|65L-70L", "7000000 and 7500000|70L-75L", "7500000 and 8000000|75L-80L", "8000000 and 8500000|80L-85L", "8500000 and 9000000|85L-90L", "9000000 and 9500000|90L-95L", "9500000 and 10000000|95L-1crore", "10000000 and 20000000|1crore-2crore", "20000000 and 30000000|2crore-3crore", "30000000 and 40000000|3crore-4crore", "40000000 and 50000000|4crore-5crore", "50000000 and 60000000|5crore-6crore", "60000000 and 70000000|6crore-7crore", "70000000 and 80000000|7crore-8crore", "80000000 and 90000000|8crore-9crore", "90000000 and 100000000|9crore-10crore", "100000000 and 1000000000|10crore-100crore"];
        }
        else if(ptype4.value == "comm2"){
            budget.innerHTML="";
             var optionArray4 = ["|Please Select your Budget", "100000 and 1800000|1L- 18L", "1800000 and 2000000|18L-20L", "2000000 and 2500000|20L-25L", "2500000 and 3000000|25L-30L", "3000000 and 3500000|30L-35L", "3500000 and 4000000|35L-40L", "4000000 and 4500000|40L-45L", "4500000 and 5000000|45L-50L", "5000000 and 5500000|50L-55L", "5500000 and 6000000|55L-60L", "6000000 and 6500000|60L-65L", "6500000 and 7000000|65L-70L", "7000000 and 7500000|70L-75L", "7500000 and 8000000|75L-80L", "8000000 and 8500000|80L-85L", "8500000 and 9000000|85L-90L", "9000000 and 9500000|90L-95L", "9500000 and 10000000|95L-1crore", "10000000 and 20000000|1crore-2crore", "20000000 and 30000000|2crore-3crore", "30000000 and 40000000|3crore-4crore", "40000000 and 50000000|4crore-5crore", "50000000 and 60000000|5crore-6crore", "60000000 and 70000000|6crore-7crore", "70000000 and 80000000|7crore-8crore", "80000000 and 90000000|8crore-9crore", "90000000 and 100000000|9crore-10crore", "100000000 and 1000000000|10crore-100crore"];
        }
          for(var option in optionArray4){
			var pair = optionArray4[option].split("|");
			var newOption = document.createElement("option");
			newOption.value = pair[0];
			newOption.innerHTML = pair[1];
			budget.options.add(newOption);
		}
    }    
 </script>
</body>
</html>

