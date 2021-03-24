<?php
session_start();
if(isset($_SESSION['admin_id']))
{
include'includes/connect.php';


$p_id =  $_GET['property_id'];



$sql = "select * from plot_table where ap_id = $p_id";

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
          <li class="nav-item"><a href="admin_view.php" class="nav-link">View</a></li>
         
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
              
						  <!--<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
              -->
        </div>
		
          		<div class="col-md-12 ftco-animate">
              <div class="mb-3 d-flex justify-content-end">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">
										Edit Image
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
				  
          			<h2></h2>
					  <div class="d-flex justify-content-end">
					  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
										Edit Property Details
										</button>
					</div>
          			<p class="rate mb-4">
          				<span class="loc"><a href="#"><i class="icon-map"><?php echo $row['house']?>, <?php echo $row['locality']?>, <?php echo $row['city']?>, <?php echo $row['pin']?></i></a></span>
    						</p>
    						<p><?php echo $row['type']?>&nbsp;&nbsp;<?php echo $row['speci']?></p>
    						<div class="d-md-flex mb-5">
    							<ul>
            <?php	echo	'
                    <li><span>Price: </span> '.$row['price'].'</li>
	    							<li><span>Bigha: </span> '.$row['bigha'].',&nbsp;<span>Katha: </span> '.$row['katha'].',&nbsp;<span>Lesha: </span> '.$row['lesha'].'</li>
	    							
	    							<li><span>Daag Number: </span> '.$row['daag'].'</li>
	    							<li><span>Patta Number: </span> '.$row['patta'].'</li>
                   
    						</div>   ';
    					?>	
          		</div>
          
          	</div>
          </div> <!-- .col-md-8 -->
      
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
                  <input type="text" name="house" value="<?php echo $row['house']; ?>" id="loc" class="form-control" placeholder="Enter the House Number or Street Name">
              </div>
              <div class="form-group">
                  <input type="text" name="locality" value="<?php echo $row['locality']; ?>" id="loc" class="form-control" placeholder="Enter the locality">
              </div>
              <div class="form-group">
                  <input type="text" name="city" value="<?php echo $row['city']; ?>" id="loc" class="form-control" placeholder="Enter City">
              </div>
              <div class="form-group">
                  <input type="text" name="pin" value="<?php echo $row['pin']; ?>" id="loc" class="form-control" placeholder="Enter PIN Number">
              </div>
            <div class="form-group">
            <label>Type of Land:</label><br>
            <label class="radio-inline">
              <input type="radio" name="type" value="Myadi"<?php if($row['type']=="Myadi"){ echo "checked";}?>> Myadi&nbsp;&nbsp;&nbsp;&nbsp;
            </label>
            <label class="radio-inline">
              <input type="radio" name="type" value="Non-Myadi"<?php if($row['type']=="Non-Myadi"){ echo "checked";}?>> Non-Myadi&nbsp;&nbsp;&nbsp;&nbsp;
            </label>
            <label class="radio-inline">
              <input type="radio" name="type" value="Other"<?php if($row['type']=="Other"){ echo "checked";}?>> Other
            </label>
            </div>
            <div class="form-group">
            <input type="text" name="speci" id="speci" value="<?php echo $row['speci']; ?>" class="form-control" placeholder="Please specify">
            </div>
            
            
            <div class="form-group">
            <label>Measurement of Land:</label><br>
            </div>
            <div class="row">
            <div class="col-md-4 form-group">
            <input type="text" name="bigha" class="form-control" id="bigha" placeholder="Bigha" value="<?php echo $row['bigha']; ?>"></div>
             <div class="col-md-4 form-group">
            <input type="text" name="katha" class="form-control" id="katha" placeholder="Katha" value="<?php echo $row['katha']; ?>"></div>
            <div class="col-md-4 form-group">
            <input type="text" name="lesha" class="form-control" id="lesha" placeholder="Lesha" value="<?php echo $row['lesha']; ?>"></div>
            </div>
            <div class="form-group">
            <label>If Miyadi, provide Daag Number and Patta Number:</label><br></div>
            <div class="row">
            <div class="col-md-4 form-group">
            <input type="text" name="daag" class="form-control" id="daag" placeholder="Enter Daag Number" value="<?php echo $row['daag']; ?>"></div>
             <div class="col-md-4 form-group">
            <input type="text" name="patta" class="form-control" id="patta" placeholder="Enter Patta Number" value="<?php echo $row['patta']; ?>"></div>
            </div>
            <div class="form-group">
            <input type="text" name="price" id="price" value="<?php echo $row['price']; ?>" class="form-control" placeholder="Enter Price">
            </div>
            
            <div class="form-group">
              <button type="submit"name="submit4" class="btn btn-primary">Save Changes</button>
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
      
                $sql1 = "select * from images where ap_id = $p_id";
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