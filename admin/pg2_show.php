<?php
session_start();
include'includes/connect.php';
if(isset($_SESSION['admin_id']))
{

$p_id =  $_GET['property_id'];



$sql = "select * from pg_table where ap_id = $p_id";

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
    

	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" style="color: white;">WELCOME ADMIN</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="#" class="nav-link">New Properties</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Add Property</a></li>
          <li class="nav-item"><a href="#" class="nav-link">View</a></li>
         
          <li class="nav-item cta"><a href="adminlogout.php" class="nav-link ml-lg-2"><span class="icon-user"></span> Logout</a></li>
         

        </ul>
      </div>
    </div>
  </nav>
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
          <div class="col-lg-8">
          	<div class="row">
			  <div class="col-md-12 Properties-single mt-4 mb-5 ftco-animate">
          <h3>User Details:</h3>
          <div class="d-flex justify-content-end">
		  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
										Edit User Details
										</button>          </div>
					<p class="rate mb-4">
						
              </p>
              <div class="details" style="margin-top: -40px;">
              <p class="d-flex mb-3">Name :- <?php echo $row2['client_name'] ?></p>
              <p class="d-flex mt-3 mb-3">Phone Number :- <?php echo $row2['client_phone'] ?></p>
              <p class="d-flex mt-3">Email-Id :- <?php echo $row2['client_email'] ?></p>
              <p class="d-flex mt-3">What's App Number :- <?php echo $row2['client_whats'] ?></p>
              <p class="d-flex mt-3">Address :- <?php echo $row2['address'] ?></p>
              </div>
              
						  <!--<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
              -->
        </div>
		
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
						  <!--
          				<div class="item">
          					<div class="properties-img" style="background-image: url(images/properties-2.jpg);"></div>
          				</div>
          				<div class="item">
							  <div class="properties-img" style="background-image: url(images/properties-3.jpg);"></div>
							  
						  </div>
-->
          			</div>
          		</div>
				  
          		<div class="col-md-12 Properties-single mt-4 mb-5 ftco-animate">
				  
          			<h2><?php echo $row['pg_name']; ?></h2>
					  <div class="d-flex justify-content-end">
					  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
										Edit Property Details
										</button>
					</div>
          			<p class="rate mb-4">
          				<span class="loc"><a href="#"><i class="icon-map"><?php echo $row['pg_address']?></i></a></span>
    						</p>
    						<p><?php echo $row['pg_details']?></p>
    						<div class="d-md-flex mb-5">
    							<ul>
						<?php	echo	'<li><span>Monthly Rental: </span> '.$row['pg_price'].'&nbsp; INR</li>
	    							<li><span>Gender: </span> '.$row['pg_gender'].'</li>
	    							<li><span>Category: </span> '.$row['pg_category'].'</li>
	    							<li><span>Status: </span> '.$row['pg_status'].'</li>
	    							<li><span>Meals: </span> '.$row['pg_meals'].'</li>
                    <li><span>Single Room: </span> '.$row['pg_singleroom'].'</li>
	    						</ul>
	    						<ul class="ml-md-5">
								<li><span>Attached Toilet and Bathroom: </span> '.$row['pg_atb'].'</li>
								<li><span>Hot and Cold Water: </span> '.$row['pg_hotandcold'].'</li>
								<li><span>Shared Bed: </span> '.$row['pg_sharedbed'].'</li>
								<li><span>Self Cooking: </span> '.$row['pg_selfcooking'].'</li>
				<li><span>Parking Facilities: </span> '.$row['pg_parking'].'</li>
	    						</ul>
    						</div>   ';
    					?>	
          		</div>
          	<!--	<div class="col-md-12 properties-single ftco-animate mb-5 mt-4">
          			<h3 class="mb-4">Take A Tour</h3>
          			<div class="block-16">
		              <figure>
		                <img src="images/properties-6.jpg" alt="Image placeholder" class="img-fluid">
		                <a href="https://vimeo.com/45830194" class="play-button popup-vimeo"><span class="icon-play"></span></a>
		              </figure>
		            </div>
          		</div>-->

          	<!--	<div class="col-md-12 properties-single ftco-animate mb-5 mt-4">
          			<h4 class="mb-4">Review &amp; Ratings</h4>
          			<div class="row">
          				<div class="col-md-6">
          					<form method="post" class="star-rating">
										  <div class="form-check">
												<input type="checkbox" class="form-check-input" id="exampleCheck1">
												<label class="form-check-label" for="exampleCheck1">
													<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i> 100 Ratings</span></p>
												</label>
										  </div>
										  <div class="form-check">
									      <input type="checkbox" class="form-check-input" id="exampleCheck1">
									      <label class="form-check-label" for="exampleCheck1">
									    	   <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i> 30 Ratings</span></p>
									      </label>
										  </div>
										  <div class="form-check">
									      <input type="checkbox" class="form-check-input" id="exampleCheck1">
									      <label class="form-check-label" for="exampleCheck1">
									      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 5 Ratings</span></p>
									     </label>
										  </div>
										  <div class="form-check">
										    <input type="checkbox" class="form-check-input" id="exampleCheck1">
									      <label class="form-check-label" for="exampleCheck1">
									      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 0 Ratings</span></p>
									      </label>
										  </div>
										  <div class="form-check">
									      <input type="checkbox" class="form-check-input" id="exampleCheck1">
									      <label class="form-check-label" for="exampleCheck1">
									      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 0 Ratings</span></p>
										    </label>
										  </div>
										</form>
          				</div>
          			</div>
          		</div> -->
          		<!--<div class="col-md-12 properties-single ftco-animate mb-5 mt-5">
          			<h4 class="mb-4">Related Properties</h4>
          			<div class="row">
          				<div class="col-md-6 ftco-animate">
				    				<div class="properties">
				    					<a href="property-single.html" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/properties-1.jpg);">
				    						<div class="icon d-flex justify-content-center align-items-center">
				    							<span class="icon-search2"></span>
				    						</div>
				    					</a>
				    					<div class="text p-3">
				    						<span class="status sale">Sale</span>
				    						<div class="d-flex">
				    							<div class="one">
						    						<h3><a href="property-single.html">North Parchmore Street</a></h3>
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
				    			<div class="col-md-6 ftco-animate">
				    				<div class="properties">
				    					<a href="property-single.html" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/properties-2.jpg);">
				    						<div class="icon d-flex justify-content-center align-items-center">
				    							<span class="icon-search2"></span>
				    						</div>
				    					</a>
				    					<div class="text p-3">
				    						<span class="status sale">Sale</span>
				    						<div class="d-flex">
				    							<div class="one">
						    						<h3><a href="property-single.html">North Parchmore Street</a></h3>
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
          		</div> -->

          	</div>
          </div> <!-- .col-md-8 -->
        <!--  <div class="col-lg-4 sidebar ftco-animate">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon fa fa-search"></span>
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>
            <div class="sidebar-box ftco-animate">
              <div class="categories">
                <h3>Categories</h3>
                <li><a href="#">Properties <span>(12)</span></a></li>
                <li><a href="#">Home <span>(22)</span></a></li>
                <li><a href="#">House <span>(37)</span></a></li>
                <li><a href="#">Villa <span>(42)</span></a></li>
                <li><a href="#">Apartment <span>(14)</span></a></li>
                <li><a href="#">Condominium <span>(140)</span></a></li>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Recent Blog</h3>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Tag Cloud</h3>
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">dish</a>
                <a href="#" class="tag-cloud-link">menu</a>
                <a href="#" class="tag-cloud-link">food</a>
                <a href="#" class="tag-cloud-link">sweet</a>
                <a href="#" class="tag-cloud-link">tasty</a>
                <a href="#" class="tag-cloud-link">delicious</a>
                <a href="#" class="tag-cloud-link">desserts</a>
                <a href="#" class="tag-cloud-link">drinks</a>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Paragraph</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
            </div>
          </div>
        </div> -->
      </div>
    </section> <!-- .section -->
		
	

   

<!-- 1st Modal Start -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit User Details</h5>
	
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <form action="adminedit.php" method="post">
                        <div class="form-group">
                        
                        <input type="hidden" name="idd" value="<?php echo $_GET['property_id']; ?>"  placeholder="Enter your name.." class="form-control" required>
                        </div> 
                        <div class="form-group">
                 
                        <input type="text" name="username" value="<?php echo $row2['client_name'] ?>" class="form-control" id="username" placeholder="Enter Name of client" required>
                        </div>

                        <div class="form-group">
                        
                        <input type="tel" name="phoneno" value="<?php echo $row2['client_phone'] ?>"  placeholder="Enter Phone number of client" class="form-control" required>
                        </div>
                        
                        <div class="form-group">
                        
                        <input type="tel" name="whatsapp" value="<?php echo $row2['client_whats'] ?>"  placeholder="Enter What's App number of client" class="form-control" required>
                        </div>
                        

                        <div class="form-group">
                        
                        <input type="email" name="email" value="<?php echo $row2['client_email'] ?>"  placeholder="Enter Email Id of client" class="form-control" required>
                        
                        </div>
                      

                        <div class="form-group">
                        
                        <input type="text" name="address" value="<?php echo $row2['address'] ?>"  placeholder="Enter Residential Address of client" class="form-control" required>
                        </div>

                     
                   
                        
                         <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary">Save Changes</button>
                        </div>     
                        
                    </form>
      </div>
      
    </div>
  </div>
</div>
    <!--1st Modal End -->
	<!-- 2nd Modal Start -->
	<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Property DEtails</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <form action="adminedit.php" method="post">
            
                        
            <div class="form-group">
              <input type="hidden" name="idd" id="area" class="form-control" value="<?php echo $_GET['property_id'] ?>">
             </div>        
                <div class="form-group">
                 
                  <input type="text" name="pg_name" value="<?php echo $row['pg_name']; ?>" class="form-control" id="prop_name" placeholder="Enter your Property's Name">
                </div>
                <div class="form-group">
                 
                  <input type="text" name="pg_address" value="<?php echo $row['pg_address']; ?>" class="form-control" id="prop_address" placeholder="Enter your Property's address">
                </div>
                <div class="form-group">
                  
                  <select class="form-control" id="prop_type" name="pg_gender" >
                  <option value="<?php echo $row['pg_gender']; ?>" selected>Gender</option>
                  <option value="Boys">Boy's</option>
                  <option value="Girls">Girl's</option>
                  
                  </select>
                </div>
                <div class="form-group">
                  
                  <select class="form-control" id="prop_type" name="pg_category">
                  <option value="<?php echo $row['pg_category']; ?>" selected>Paying Guest is for</option>
                  <option value="Students">Students</option>
                  <option value="Working Person" >Working Person</option>
                  <option value="Both">Both</option>
                  
                  </select>
                </div>
                 <div class="form-group">
                  
                  <select class="form-control" id="prop_status" name="pg_status">
                  <option value="<?php echo $row['pg_status']; ?>" selected>Paying Guest Type</option>
                  <option value="Standard">Standard</option>
                  <option value="Luxury" >Luxury</option>
                  </select>
                </div>
                <div class="form-group">
                    <h6 class="mb-3">Meals Provided</h6>
                    <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="pg_meals"  id="inlineRadio1" value="Yes"<?php if($row['pg_meals']=="Yes"){ echo "checked";}?>>
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="pg_meals"  id="inlineRadio2" value="No"<?php if($row['pg_meals']=="No"){ echo "checked";}?>>
                    <label class="form-check-label" for="inlineRadio2">No</label>
                    </div>
                   
                </div>
                <div class="form-group">
                    <h6 class="mb-3">Attached Toilet Bathroom</h6>
                    <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="pg_atb" id="inlineRadio1" value="Yes"<?php if($row['pg_atb']=="Yes"){ echo "checked";}?>>
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="pg_atb" id="inlineRadio2" value="No"<?php if($row['pg_atb']=="No"){ echo "checked";}?>>
                    <label class="form-check-label" for="inlineRadio2">No</label>
                    </div>
                   
                </div>
                <div class="form-group">
                    <h6 class="mb-3">Single Room</h6>
                    <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="pg_singleroom" id="inlineRadio1" value="Yes"<?php if($row['pg_singleroom']=="Yes"){ echo "checked";}?>>
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="pg_singleroom" id="inlineRadio2" value="No"<?php if($row['pg_singleroom']=="No"){ echo "checked";}?>>
                    <label class="form-check-label" for="inlineRadio2">No</label>
                    </div>
                   
                </div>
                <div class="form-group">
                    <h6 class="mb-3">Shared Bed</h6>
                    <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="pg_sharedbed"  id="inlineRadio1" value="Yes"<?php if($row['pg_sharedbed']=="Yes"){ echo "checked";}?>>
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="pg_sharedbed"  id="inlineRadio2" value="No"<?php if($row['pg_sharedbed']=="No"){ echo "checked";}?>>
                    <label class="form-check-label" for="inlineRadio2">No</label>
                    </div>
                   
                </div>
                <div class="form-group">
                    <h6 class="mb-3">Self Cooking Facilities</h6>
                    <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="pg_selfcooking"  id="inlineRadio1" value="Yes"<?php if($row['pg_selfcooking']=="Yes"){ echo "checked";}?>>
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="pg_selfcooking"  id="inlineRadio2" value="No"<?php if($row['pg_selfcooking']=="No"){ echo "checked";}?>>
                    <label class="form-check-label" for="inlineRadio2">No</label>
                    </div>
                   
                </div>
                <div class="form-group">
                    <h6 class="mb-3">AC Facilities</h6>
                    <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="pg_ac"  id="inlineRadio1" value="Yes"<?php if($row['pg_ac']=="Yes"){ echo "checked";}?>>
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="pg_ac" id="inlineRadio2" value="No"<?php if($row['pg_ac']=="No"){ echo "checked";}?>>
                    <label class="form-check-label" for="inlineRadio2">No</label>
                    </div>
                   
                </div>
                <div class="form-group">
                    <h6 class="mb-3">Hot and Cold Water</h6>
                    <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="pg_hotandcold"  id="inlineRadio1" value="Yes"<?php if($row['pg_hotandcold']=="Yes"){ echo "checked";}?>>
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="pg_hotandcold"  id="inlineRadio2" value="No"<?php if($row['pg_hotandcold']=="No"){ echo "checked";}?>>
                    <label class="form-check-label" for="inlineRadio2">No</label>
                    </div>
                   
                </div>
                <div class="form-group">
                    <h6 class="mb-3">Parking Facilities</h6>
                    <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="pg_parking"  id="inlineRadio1" value="Yes"<?php if($row['pg_parking']=="Yes"){ echo "checked";}?>>
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="pg_parking" id="inlineRadio2" value="No"<?php if($row['pg_parking']=="No"){ echo "checked";}?>>
                    <label class="form-check-label" for="inlineRadio2">No</label>
                    </div>
                   
                </div>  
                <div class="form-group">
                 
                 <input type="text" name="pg_price" value="<?php echo $row['pg_price']; ?>" class="form-control" id="prop_price" placeholder="Enter your Price">
               </div>
               <div class="form-group">
               <input type="text" name="pg_details" value="<?php echo $row['pg_details']; ?>" rows = "5" col = "10" maxlength = "400" class="form-control" id="pg_details" placeholder="Enter PG Description(Not more than 400 characters)">
               
               </div>
                         
                <div class="form-group">
                	<button type="submit" name="submit1" class="btn btn-primary">Save Changes</button>
                </div> 
                            
                        
             </form>
      </div>
      <div class="modal-footer">
      
      </div>
    </div>
  </div>
</div>
<!--2nd Modal End -->
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
<?php 
}
else
{
  header('location:index.php');
}


?>