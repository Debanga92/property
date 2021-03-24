<?php
session_start();
if(isset($_SESSION['admin_id']))
{
include'includes/connect.php';

$p_id =  $_GET['property_id'];



$sql = "select * from apartment_table where property_id = '$p_id'";

$result = $db->query($sql);

$row=$result->fetch_assoc();



$sql1 = "select * from images where property_id = $p_id";
$result1 = $db->query($sql1);


$sqla = "SELECT * FROM `property` WHERE p_id = '$p_id'";
$resulta = $db->query($sqla);
if(!$resulta)
{
    echo mysqli_error($db);	
}
$rowa=$resulta->fetch_assoc();





$sql2 = "select * from user where user_id = ".$rowa['user_id']."";
$result2 = $db->query($sql2);


   

$row2=$result2->fetch_assoc();



if(isset($_POST['submitt'])) {
 


  // Configure upload directory and allowed file types 
  $upload_dir = 'uploads'.DIRECTORY_SEPARATOR; 
  $allowed_types = array('jpg', 'png', 'jpeg'); 
  
  // Define maxsize for files i.e 2MB 
  $maxsize = 2 * 1024 * 1024; 
  
  // Checks if user sent an empty form 
  if(!empty(array_filter($_FILES['files']['name']))) { 
  
      // Loop through each file in files[] array 
      foreach ($_FILES['files']['tmp_name'] as $key => $value) { 
          
          $file_tmpname = $_FILES['files']['tmp_name'][$key]; 
          $file_name = $_FILES['files']['name'][$key]; 
          $file_size = $_FILES['files']['size'][$key]; 
          $file_ext = pathinfo($file_name, PATHINFO_EXTENSION); 
  
          // Set upload file path 
          $filepath = $upload_dir.$file_name; 
  
          // Check file type is allowed or not 
          if(in_array(strtolower($file_ext), $allowed_types)) { 
  
              // Verify file size - 2MB max 
              if ($file_size > $maxsize)		 
                  $err_em = "Error: File size is larger than the allowed limit."; 
  
              // If file with name already exist then append time in 
              // front of name of the file to avoid overwriting of file 
              if(file_exists($filepath)) { 
                  $filepath = $upload_dir.time().$file_name; 
                  
                  if( move_uploaded_file($file_tmpname, $filepath)) { 
                      $err_suc = "{$file_name} successfully uploaded <br />";
                     
                      $query1 = "insert into `images` (`p_id`,`image_name`) values ('$p_id','$file_name')";
                      $result = $db->query($query1);
                      //echo "{$file_name} successfully uploaded <br />";
                            
                  } 
                  else {					 
                      $err_em = "Error uploading {$file_name} <br />"; 
                  } 
              } 
              else { 
              
                  if( move_uploaded_file($file_tmpname, $filepath)) { 
  
                     
                      
  
                  } 
                  else {					 
                      $err_em = "Error uploading {$file_name} <br />"; 
                  } 
              } 
          } 
          else { 
              
              // If file extention not valid 
              $err_em = "Error uploading {$file_name} "; 
              $err_ext = "({$file_ext} file type is not allowed)<br / >"; 
          } 
      } 
  } 
  else { 
      
      // If no files selected 
      $err_em = "No files selected";
  } 
  } 

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
        <div class="col-md-12 ftco-animate">
          <h3>User Details:</h3>
            <div class="d-flex justify-content-end">
            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">Edit User Details</button> 
            </div>
			  <p class="rate mb-4"></p>
              <div class="details" style="margin-top: -40px;">
              <p class="d-flex mb-3">Name :- <?php echo $row2['username'] ?></p>
              <p class="d-flex mt-3 mb-3">Phone Number :- <?php echo $row2['phone_no'] ?></p>
              <p class="d-flex mt-3">Email-Id :- <?php echo $row2['email_id'] ?></p>
              <p class="d-flex mt-3">What's App Number :- <?php echo $row2['whatsapp'] ?></p>
              <p class="d-flex mt-3">Address :- <?php echo $row2['address'] ?></p>
              </div>
              
						 
        </div>

          		<div class="col-md-12 ftco-animate">
              <div class="mb-3 d-flex justify-content-end">
					      <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal2">
										Edit Image Details
										</button>
					      </div>
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

             
          			<h2><?php echo $row['name']?></h2>
                      <div class="d-flex justify-content-end">
					      <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal1">Edit Property Details</button>
										
										
				</div>
          			<p class="rate mb-4">
          				<span class="loc"><a href="#"><i class="icon-map"><?php echo $row['house']?>&nbsp;&nbsp;<?php echo $row['locality']?>&nbsp;&nbsp;<?php echo $row['city']?>&nbsp;&nbsp;<?php echo $row['pin']?></i></a></span>
    						</p>
    						<p><?php echo $row['others']?></p>
    						<div class="d-md-flex mt-5 mb-5">
    							<ul>
                    <?php echo '<li><span>Property For:  </span> '.$row['r_s'].'</li>
                                <li><span>Category:  </span> '.$row['category'].'</li>
                                <li><span>Area:  </span> '.$row['area'].'</li>
                                <li><span>Intercomm Facilities:  </span> '.$row['in_fac'].'</li>
                                <li><span>Gym: </span> '.$row['gym'].'</li>
                                <li><span>Garden:  </span> '.$row['garden'].'</li>
                                <li><span>24*7 Water Supply:  </span> '.$row['p_w'].'</li>
	    						</ul>
	    						<ul class="ml-md-5">
                                <li><span>Swimming Pool:  </span> '.$row['pool'].'</li>
                                <li><span>24*7 Power Backup:  </span> '.$row['generator'].'</li>
                                <li><span>Shared Fire Safety:  </span> '.$row['fire_safety'].'</li>
                                <li><span>Car Parking:  </span> '.$row['car_parking'].'</li>
                                <li><span>Community Hall:  </span> '.$row['community_hall'].'</li>
                                <li><span>Security Maintenence:  </span> '.$row['security_main'].'</li>
                                <li><span>Price:  </span> '.$row['price'].'</li>
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
              <input type="hidden" name="idd" id="area" class="form-control" value="<?php echo $_GET['property_id']; ?>">
             </div>
             <div class="form-group">
              <input type="text" name="apart_name" id="name" value="<?php echo $row['name']; ?>" class="form-control" placeholder="Enter the Name of your property">
             </div>
             <div class="form-group">
            
            <select class="form-control" id="use" name="want" required>
            <option value="<?php echo $row['r_s']; ?>" selected>What do you want to do?</option>
            <option value="Rent" id="resi">Rent</option>
            <option value="Sale" id="comm" >Sale</option>
           
            </select>
          <div class="form-group">
            
            <select class="form-control" id="use" name="use">
            <option value="<?php echo $row['reason']; ?>" selected>Why do you want to rent/sell your property?</option>
            <option value="Residential Use" id="resi">For Residential use</option>
            <option value="Commercial Use" id="comm" >For Commercial use</option>
            <option value="Industrial Use" id="ind">For Industrial use</option>
            <option value="Mixed Use" id="mix" >For Mixed-Use</option>
            <option value="Special Purpose" id="sp">Special Purpose</option>
            </select>
          </div>
          <div class="form-group">
            <select class="form-control" id="cat" name="cat">
            <option value="<?php echo $row['category']; ?>" selected>Select your Property category</option>
            <option value="1BHK" id="1bhk" name="1bhk">1 BHK</option>
            <option value="2BHK" id="2bhk" name="2bhk" >2 BHK</option>
            <option value="3BHK" id="3bhk" name="3bhk">3 BHK</option>
            <option value="Villa" id="villa" name="villa" >Villa</option>
            <option value="Independent Flat" id="indfl">Independent Flat</option>
            </select>
            </div>
              <div class="form-group">
              <input type="text" name="area" value="<?php echo $row['area']; ?>" id="area" class="form-control" placeholder="Enter the carpet area of your property">
             </div>
              <div class="form-group">
              <input type="text" name="loc" value="<?php echo $row['location']; ?>" id="loc" class="form-control" placeholder="Enter the location of your property">
                  </div>
                  <div class="form-group">
                    <h6 class="mb-3">Intercomm Facility</h6>
                    <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="in_fac" id="inlineRadio1" value="Yes"<?php if($row['in_fac']=="Yes"){ echo "checked";}?>>
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="in_fac" id="inlineRadio2" value="No"<?php if($row['in_fac']=="No"){ echo "checked";}?>>
                    <label class="form-check-label" for="inlineRadio2">No</label>
                    </div>
                   
                </div>  
                <div class="form-group">
                    <h6 class="mb-3">Indoor Gym</h6>
                    <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="gym" id="inlineRadio1" value="Yes"<?php if($row['gym']=="Yes"){ echo "checked";}?>>
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="gym" id="inlineRadio2" value="No"<?php if($row['gym']=="No"){ echo "checked";}?>>
                    <label class="form-check-label" for="inlineRadio2">No</label>
                    </div>
                   
                </div>
                <div class="form-group">
                    <h6 class="mb-3">Landscape Garden</h6>
                    <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="garden" id="inlineRadio1" value="Yes"<?php if($row['garden']=="Yes"){ echo "checked";}?>>
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="garden" id="inlineRadio2" value="No"<?php if($row['garden']=="No"){ echo "checked";}?>>
                    <label class="form-check-label" for="inlineRadio2">No</label>
                    </div>
                   
                </div>
                <div class="form-group">
                    <h6 class="mb-3">Swimming Pool</h6>
                    <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="pool" id="inlineRadio1" value="Yes"<?php if($row['pool']=="Yes"){ echo "checked";}?>>
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="pool" id="inlineRadio2" value="No"<?php if($row['pool']=="No"){ echo "checked";}?>>
                    <label class="form-check-label" for="inlineRadio2">No</label>
                    </div>
                   
                </div>
                <div class="form-group">
                    <h6 class="mb-3">24*7 Power Backup</h6>
                    <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="generator" id="inlineRadio1" value="Yes"<?php if($row['generator']=="Yes"){ echo "checked";}?>>
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="generator" id="inlineRadio2" value="No"<?php if($row['generator']=="No"){ echo "checked";}?>>
                    <label class="form-check-label" for="inlineRadio2">No</label>
                    </div>
                   
                </div>
                <div class="form-group">
                    <h6 class="mb-3">Fire Safety Provison</h6>
                    <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="fire_safety" id="inlineRadio1" value="Yes"<?php if($row['fire_safety']=="Yes"){ echo "checked";}?>>
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="fire_safety" id="inlineRadio2" value="No"<?php if($row['fire_safety']=="No"){ echo "checked";}?>>
                    <label class="form-check-label" for="inlineRadio2">No</label>
                    </div>
                   
                </div>
                <div class="form-group">
                    <h6 class="mb-3">Car Parking Space</h6>
                    <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="car_parking" id="inlineRadio1" value="Yes"<?php if($row['car_parking']=="Yes"){ echo "checked";}?>>
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="car_parking" id="inlineRadio2" value="No"<?php if($row['car_parking']=="No"){ echo "checked";}?>>
                    <label class="form-check-label" for="inlineRadio2">No</label>
                    </div>
                   
                </div>
                <div class="form-group">
                    <h6 class="mb-3">Community Hall</h6>
                    <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="community_hall" id="inlineRadio1" value="Yes"<?php if($row['community_hall']=="Yes"){ echo "checked";}?>>
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="community_hall" id="inlineRadio2" value="No"<?php if($row['community_hall']=="No"){ echo "checked";}?>>
                    <label class="form-check-label" for="inlineRadio2">No</label>
                    </div>
                   
                </div>  
                <div class="form-group">
                    <h6 class="mb-3">Security And Maintenence</h6>
                    <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="security_main" id="inlineRadio1" value="Yes"<?php if($row['security_main']=="Yes"){ echo "checked";}?>>
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="security_main" id="inlineRadio2" value="No"<?php if($row['security_main']=="No"){ echo "checked";}?>>
                    <label class="form-check-label" for="inlineRadio2">No</label>
                    </div>
                   
                </div>  
                <div class="form-group">
                    <h6 class="mb-3">24*7 Water Supply</h6>
                    <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="p_w" id="inlineRadio1" value="Yes"<?php if($row['p_w']=="Yes"){ echo "checked";}?>>
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="p_w" id="inlineRadio2" value="No"<?php if($row['p_w']=="No"){ echo "checked";}?>>
                    <label class="form-check-label" for="inlineRadio2">No</label>
                    </div>
                   
                </div>  
                <div class="form-group">
                <input type="text" name="price" value="<?php echo $row['price']; ?>" id="others" class="form-control" placeholder="Price">
             </div>
                <div class="form-group">
                <input type="text" name="others" value="<?php echo $row['others']; ?>" id="others" class="form-control" placeholder="Others? Please specify...">
             </div>
             <div class="form-group">
              <button type="submit" name="submit3" class="btn btn-primary">Next ></button>
             </div> 
            </div>
            </form>
                    
      </div>
      <div class="modal-footer">
      
      </div>
    </div>
  </div>
</div>
<!--2nd Modal End -->
<!-- 3rd Modal Start -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Images</h5>
	
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php 
      
                $sql1 = "select * from images where property_id = $p_id";
                $result1 = $db->query($sql1);
      
      
                for($i=1;$i<=$result1->num_rows;$i++)
                  {
                    $row1=$result1->fetch_assoc();
                    
                  
                  ?>
                  <img src="uploads/<?php echo $row1['image_name']?>" style="max-height:80px;">
                  <p><a href="adminimagedelete.php?op=delete&file_name=<?php echo $row1['image_name']; ?>">Delete</a></p>
          
						<?php } ?>
              <form action="" method="post" enctype="multipart/form-data">
                                  
                   <div class="form-group mt-3">
                       <label class="mr-2">&nbsp;&nbsp; Upload your property's photos:</label>
                        <input type="file" name="files[]" multiple>
                  </div>     
                  <input type="submit" name="submitt" value="Upload" class="btn btn-primary">
        
              </form>
      </div>
      
    </div>
  </div>
</div>
<!-- 3rd Modal End -->

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
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