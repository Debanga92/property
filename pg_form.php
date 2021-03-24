<?php
session_start();

$id = $_SESSION['user_id'];
$p_id = $_GET['property_id'];


include 'connect.php';
$err_pass = $err_email = "";
if(isset($_POST['submit']))
{
  if(isset($_POST['pg_name']))
  { $pg_name = $_POST['pg_name'];
    $pg_name = stripcslashes($pg_name);
  

  $pg_name = mysqli_real_escape_string($db, $pg_name);
  }
  if(isset($_POST['pg_address']))
  {
  $pg_address = $_POST['pg_address'];
  $pg_address = stripcslashes($pg_address);
  

  $pg_address = mysqli_real_escape_string($db, $pg_address);
  }
  if(isset($_POST['pg_gender']))
  {
  $pg_gender = $_POST['pg_gender'];
  $pg_gender = stripcslashes($pg_gender);
  

  $pg_gender = mysqli_real_escape_string($db, $pg_gender);
  }
  if(isset($_POST['pg_category']))
  {
  $pg_category = $_POST['pg_category'];
  
  }
  if(isset($_POST['pg_status']))
  {
  $pg_status = $_POST['pg_status'];
 
  }
  if(isset($_POST['pg_meals']))
  {
  $pg_meals = $_POST['pg_meals'];
 
  }
  if(isset($_POST['pg_atb']))
  {
  $pg_atb = $_POST['pg_atb'];
  
  }
  if(isset($_POST['pg_singleroom']))
  {
  $pg_singleroom = $_POST['pg_singleroom'];
  
  }
  if(isset($_POST['pg_sharedbed']))
  {
  $pg_sharedbed = $_POST['pg_sharedbed'];
  
  }
  if(isset($_POST['pg_selfcooking']))
  {
  $pg_selfcooking = $_POST['pg_selfcooking'];
  
  }
  if(isset($_POST['pg_ac']))
  {
  $pg_ac = $_POST['pg_ac'];
  
  }
  if(isset($_POST['pg_hotandcold']))
  {
  $pg_hotandcold = $_POST['pg_hotandcold'];
 
  }
  if(isset($_POST['pg_parking']))
  {
  $pg_parking = $_POST['pg_parking'];
 
  }
  if(isset($_POST['pg_price']))
  {
  $pg_price = $_POST['pg_price'];
  $pg_price = stripcslashes($pg_price);
  

  $pg_price = mysqli_real_escape_string($db, $pg_price);
  }
  if(isset($_POST['pg_details']))
  {
  $pg_details = $_POST['pg_details'];
  $pg_details = stripcslashes($pg_details);
  

  $pg_details = mysqli_real_escape_string($db, $pg_details);
  }

  
 
$g_id = $_POST['idd'];

 

 

  //to prevent sql injection
 // $type = stripcslashes($type);
  

//  $type = mysqli_real_escape_string($db, $type);

 // echo $type; 

 // Validation
 

  //query processing
   
  $sql = "insert into `pg_table` (`property_id`,`pg_name`,`pg_address`,`pg_gender`,`pg_category`,`pg_status`,`pg_meals`,`pg_atb`,`pg_singleroom`,`pg_sharedbed`,`pg_selfcooking`,`pg_ac`,`pg_hotandcold`,`pg_parking`,`pg_price`,`pg_details`) values ('$g_id','$pg_name','$pg_address','$pg_gender','$pg_category','$pg_status','$pg_meals','$pg_atb','$pg_singleroom','$pg_sharedbed','$pg_selfcooking','$pg_ac','$pg_hotandcold','$pg_parking','$pg_price','$pg_details')";

  
  
  $result=$db->query($sql);
 
  
  
 
  if($result)
  {  
    
    header('location:pg_image.php?property_id='.$g_id.'');
 }

} 

?>  








<!DOCTYPE html>
<html lang="en">
  <head>
    <title>propertyAtEase</title>
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
   <?php include'header.php' ?>
    <!-- END nav -->



    <style>
        ::placeholder{
            color: #999999 !important;
            }
        select,
     select option {
       color: #000000 !important;
     }
     
     select:invalid,
     select option[value=""] {
       color: #999999 !important;
     }
     [hidden] {
       display: none !important;
     }
          </style>






    <section class="ftco-section contact-section bg-light">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h3">Step 2 : Enter details of your Ad</h2>
          </div>
         
         
        </div>
        <div class="row block-9">
          <div class="col-md-12 mb-4  d-flex" style="max-width:800px;">
            <form action="<?=$_SERVER['PHP_SELF']?>" method="post" class="bg-white p-5 contact-form" style="border-color:#a9b0ab; border-style: inset; border-width: thin;">
            <h5 class="mb-4">Select Property Type:</h5>
                        
            <div class="form-group">
              <input type="hidden" name="idd" id="area" class="form-control" value="<?php echo $p_id; ?>">
             </div>        
                <div class="form-group">
                 
                  <input type="text" name="pg_name" class="form-control" id="prop_name" placeholder="Enter your Property's Name" required>
                </div>
                <div class="form-group">
                 
                  <input type="text" name="pg_address" class="form-control" id="prop_address" placeholder="Enter your Property's address" required>
                </div>
                <div class="form-group">
                  
                  <select class="form-control" id="prop_type" name="pg_gender" required>
                  <option value="" disabled selected hidden>Gender</option>
                  <option value="Boys">Boy's</option>
                  <option value="Girls">Girl's</option>
                  
                  </select>
                </div>
                <div class="form-group">
                  
                  <select class="form-control" id="prop_type" name="pg_category" required>
                  <option value="" disabled selected hidden>Paying Guest is for</option>
                  <option value="Students">Students</option>
                  <option value="Working Person" >Working Person</option>
                  <option value="Both">Both</option>
                  
                  </select>
                </div>
                 <div class="form-group">
                  
                  <select class="form-control" id="prop_status" name="pg_status" required>
                  <option value="" disabled selected hidden>Paying Guest Type</option>
                  <option value="Standard">Standard</option>
                  <option value="Luxury" >Luxury</option>
                  </select>
                </div>
                <div class="form-group">
                    <h6 class="mb-3">Meals Provided</h6>
                    <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="pg_meals" id="inlineRadio1" value="Yes" required>
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="pg_meals" id="inlineRadio2" value="No">
                    <label class="form-check-label" for="inlineRadio2">No</label>
                    </div>
                   
                </div>  
                <div class="form-group">
                    <h6 class="mb-3">Attached Toilet Bathroom</h6>
                    <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="pg_atb" id="inlineRadio1" value="Yes">
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="pg_atb" id="inlineRadio2" value="No">
                    <label class="form-check-label" for="inlineRadio2">No</label>
                    </div>
                   
                </div>
                <div class="form-group">
                    <h6 class="mb-3">Single Room</h6>
                    <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="pg_singleroom" id="inlineRadio1" value="Yes">
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="pg_singleroom" id="inlineRadio2" value="No">
                    <label class="form-check-label" for="inlineRadio2">No</label>
                    </div>
                   
                </div>
                <div class="form-group">
                    <h6 class="mb-3">Shared Bed</h6>
                    <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="pg_sharedbed" id="inlineRadio1" value="Yes">
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="pg_sharedbed" id="inlineRadio2" value="No">
                    <label class="form-check-label" for="inlineRadio2">No</label>
                    </div>
                   
                </div>
                <div class="form-group">
                    <h6 class="mb-3">Self Cooking Facilities</h6>
                    <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="pg_selfcooking" id="inlineRadio1" value="Yes">
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="pg_selfcooking" id="inlineRadio2" value="No">
                    <label class="form-check-label" for="inlineRadio2">No</label>
                    </div>
                   
                </div>
                <div class="form-group">
                    <h6 class="mb-3">AC Facilities</h6>
                    <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="pg_ac" id="inlineRadio1" value="Yes">
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="pg_ac" id="inlineRadio2" value="No">
                    <label class="form-check-label" for="inlineRadio2">No</label>
                    </div>
                   
                </div>
                <div class="form-group">
                    <h6 class="mb-3">Hot and Cold Water</h6>
                    <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="pg_hotandcold" id="inlineRadio1" value="Yes">
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="pg_hotandcold" id="inlineRadio2" value="No">
                    <label class="form-check-label" for="inlineRadio2">No</label>
                    </div>
                   
                </div>
                <div class="form-group">
                    <h6 class="mb-3">Parking Facilities</h6>
                    <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="pg_parking" id="inlineRadio1" value="Yes">
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="pg_parking" id="inlineRadio2" value="No">
                    <label class="form-check-label" for="inlineRadio2">No</label>
                    </div>
                   
                </div>  
                <div class="form-group">
                 
                 <input type="text" name="pg_price" class="form-control" id="prop_price" placeholder="Enter your Price" required>
               </div>
               <div class="form-group">
               <textarea type="textarea" name="pg_details" rows = "5" col = "10" maxlength = "400" class="form-control" id="pg_details" placeholder="Enter PG Description(Not more than 400 characters)" required></textarea>
               
               </div>
                         
                         <div class="form-group">
                        <button type="submit"name="submit" class="btn btn-primary">Next ></button>
                        </div> 
                            
                        
                    </form>
                    
          
          </div>
          

        <!--  <div class="col-md-6 d-flex">
          	<div id="map" class="bg-white"></div>
          </div> -->
        </div>
      </div>
    </section>
		
   

   <?php include'footer.php' ?>
    
  

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
