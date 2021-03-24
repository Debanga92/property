<?php
session_start();

if(isset($_SESSION['admin_id']))
{

include 'includes/connect.php';





if(isset($_POST['submit']))
{
  $g_id = $_POST['idd'];
  if(isset($_POST['use']))
  { $use = $_POST['use'];
    $use = stripcslashes($use);
  

  $use = mysqli_real_escape_string($db, $use);
  }
  if(isset($_POST['name']))
  { $name = $_POST['name'];
    $name = stripcslashes($name);
  

  $name = mysqli_real_escape_string($db, $name);
  }
  if(isset($_POST['want']))
  {
  $want = $_POST['want'];
  $want = stripcslashes($want);
  

  $want = mysqli_real_escape_string($db, $want);
  }
  if(isset($_POST['house']))
  {
  $house = $_POST['house'];
  $house = stripcslashes($house);
  

  $house = mysqli_real_escape_string($db, $house);
  }

  if(isset($_POST['locality']))
  {
  $locality = $_POST['locality'];
  $locality = stripcslashes($locality);
  

  $locality = mysqli_real_escape_string($db, $locality);
  }

  if(isset($_POST['city']))
  {
  $city = $_POST['city'];
  $city = stripcslashes($city);
  

  $city = mysqli_real_escape_string($db, $city);
  }

  if(isset($_POST['pin']))
  {
  $pin = $_POST['pin'];
  $pin = stripcslashes($pin);
  

  $pin = mysqli_real_escape_string($db, $pin);
  }


  if(isset($_POST['rw']))
  {
  $rw = $_POST['rw'];
 
  }
  if(isset($_POST['atb']))
  {
  $atb = $_POST['atb'];
  
  }
  if(isset($_POST['pf']))
  {
  $pf = $_POST['pf'];
 
  }
  
 
  if(isset($_POST['rooms']))
  {
  $rooms = $_POST['rooms'];
  $rooms = stripcslashes($rooms);
  

  $rooms = mysqli_real_escape_string($db, $rooms);
  }
  
  if(isset($_POST['others']))
  {
  $others = $_POST['others'];
  $others = stripcslashes($others);
  

  $others = mysqli_real_escape_string($db, $others);
  }
 
  if(isset($_POST['price']))
  {
  $price = $_POST['price'];
  $price = stripcslashes($price);
  

  $price = mysqli_real_escape_string($db, $price);
  }
  
  

  
 

 

  //to prevent sql injection
 // $type = stripcslashes($type);
  

//  $type = mysqli_real_escape_string($db, $type);

 // echo $type; 

 // Validation
 

  //query processing
   
  $sql = "insert into `in_house` (`ap_id`,`name`,`want`,`use1`,`house`,`locality`,`city`,`pin`,`rooms`,`atb`,`rw`,`pf`,`price`,`others`) values ('$g_id','$name','$want','$use','$house','$locality','$city','$pin','$rooms','$atb','$rw','$pf','$price','$others')";

  
  
  $result=$db->query($sql);
 
  
 
  if($result)
  {  

    
    header('location:admin_image.php?property_id='.$g_id.'');
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
            <h2 class="h3"> Enter details of your Ad</h2>
          </div>
         
         
        </div>
        <div class="row block-9">
          <div class="col-md-12 mb-4  d-flex" style="max-width:800px;">
          <form action="<?=$_SERVER['PHP_SELF']?>" method="post" class="bg-white p-5 contact-form" style="border-color:#a9b0ab; border-style: inset; border-width: thin;">
          <div class="form-group">
              <input type="hidden" name="idd" id="area" class="form-control" value="<?php echo $_GET['property_id']; ?>">
             </div>
             <div class="form-group">
              <input type="text" name="name" id="name" class="form-control" placeholder="Enter the Name of your property">
             </div>
            
             <div class="form-group">
            
            <select class="form-control" id="use" name="want" required>
            <option value="" disabled selected hidden>What do you want to do?</option>
            <option value="Rent" id="resi">Rent</option>
            <option value="Sale" id="comm" >Sale</option>
           
            </select>
          </div>
          <div class="form-group">
            
            <select class="form-control" id="use" name="use" required>
            <option value="" disabled selected hidden>Why do you want to rent/sell your property?</option>
            <option value="Residential Use" id="resi">For Residential use</option>
            <option value="Commercial Use" id="comm" >For Commercial use</option>
            <option value="Industrial Use" id="ind">For Industrial use</option>
            <option value="Mixed Use" id="mix" >For Mixed-Use</option>
            <option value="Special Purpose" id="sp">Special Purpose</option>
            </select>
          </div>
         
             
             <p>Address of property:</p>
              <div class="form-group">
              <input type="text" name="house" id="loc" class="form-control" placeholder="House Number and Street Name">
              </div>
              <div class="form-group">
              <input type="text" name="locality" id="loc" class="form-control" placeholder="Locality(Example: Dispur, Ganeshguri,Maligaon etc)">
              </div>
              <div class="form-group">
              <input type="text" name="city" id="loc" class="form-control" placeholder="City">
              </div>
              <div class="form-group">
              <input type="text" name="pin" id="loc" class="form-control" placeholder="PIN">
              </div>
              Facilities:
              <div class="form-group">
              <input type="text" name="rooms" id="area" class="form-control" placeholder="Enter the number of rooms">
             </div>
                  <div class="form-group">
                    <h6 class="mb-3">Attached Toilet Bathroom</h6>
                    <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="atb" id="inlineRadio1" value="Yes" required>
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="atb" id="inlineRadio2" value="No">
                    <label class="form-check-label" for="inlineRadio2">No</label>
                    </div>
                   
                </div>  
                <div class="form-group">
                    <h6 class="mb-3">Running Water</h6>
                    <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="rw" id="inlineRadio1" value="Yes">
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="rw" id="inlineRadio2" value="No">
                    <label class="form-check-label" for="inlineRadio2">No</label>
                    </div>
                   
                </div>
                <div class="form-group">
                    <h6 class="mb-3">Parking Facilities</h6>
                    <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="pf" id="inlineRadio1" value="Yes">
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline col-md-3">
                    <input class="form-check-input" type="radio" name="pf" id="inlineRadio2" value="No">
                    <label class="form-check-label" for="inlineRadio2">No</label>
                    </div>
                   
                </div>
               
                <div class="form-group">
                <input type="text" name="price" id="price" class="form-control" placeholder="Price of the house?">
             </div>
                <div class="form-group">
                <input type="text" name="others" id="others" class="form-control" placeholder="Others special facilities..">
             </div>
             <div class="form-group">
              <button type="submit"name="submit" class="btn btn-primary">Next ></button>
             </div> 
            </div>
            </form>
                    
          
          </div>
          

        <!--  <div class="col-md-6 d-flex">
          	<div id="map" class="bg-white"></div>
          </div> -->
        </div>
      </div>
    </section>
		
   


    
  

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