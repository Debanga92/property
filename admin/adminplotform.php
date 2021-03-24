<?php
session_start();
if(isset($_SESSION['admin_id']))
{


include 'includes/connect.php';
$err_pass = $err_email = "";
if(isset($_POST['submit']))
{
  if(isset($_POST['loc']))
  {
  $loc = $_POST['loc'];
  $loc = stripcslashes($loc);
  

  $loc = mysqli_real_escape_string($db, $loc);
  }

  if(isset($_POST['type']))
  { $type = $_POST['type'];
    $type = stripcslashes($type);
  

  $type = mysqli_real_escape_string($db, $type);
  }
  if(isset($_POST['speci']))
  {
  $speci = $_POST['speci'];
  $speci = stripcslashes($speci);
  

  $speci = mysqli_real_escape_string($db, $speci);
  }
  if(isset($_POST['bigha']))
  {
  $bigha = $_POST['bigha'];
  $bigha = stripcslashes($bigha);
  

  $bigha = mysqli_real_escape_string($db, $bigha);
  }
 
  if(isset($_POST['katha']))
  {
  $katha = $_POST['katha'];
  $katha = stripcslashes($katha);
  

  $katha = mysqli_real_escape_string($db, $katha);
  }
  if(isset($_POST['lesha']))
  {
  $lesha = $_POST['lesha'];
  $lesha = stripcslashes($lesha);
  

  $lesha = mysqli_real_escape_string($db, $lesha);
  }
  if(isset($_POST['daag']))
  {
  $daag = $_POST['daag'];
  $daag = stripcslashes($daag);
  

  $daag = mysqli_real_escape_string($db, $daag);
  }
  if(isset($_POST['patta']))
  {
  $patta = $_POST['patta'];
  $patta = stripcslashes($patta);
  

  $patta = mysqli_real_escape_string($db, $patta);
  }

  $g_id = $_POST['idd'];
 
  if(isset($_POST['price']))
  {
  $price = $_POST['price'];
  $price = stripcslashes($price);
  

  $price = mysqli_real_escape_string($db, $price);
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


 

 

  //to prevent sql injection
 // $type = stripcslashes($type);
  

//  $type = mysqli_real_escape_string($db, $type);

 // echo $type; 

 // Validation
 

  //query processing
   
  $sql = "insert into `plot_table` (`ap_id`,`house`,`locality`,`city`,`pin`,`type`,`speci`,`bigha`,`katha`,`lesha`,`daag`,`patta`,`price`) values ('$g_id','$house','$locality','$city','$pin','$type','$speci','$bigha','$katha','$lesha','$daag','$patta','$price')";

  
  
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
    <link rel="stylesheet" href="css/styles.css">
   
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
             <p>Address of the plot:-</p>
          <div class="form-group">
            <input type="text" name="house" id="loc" class="form-control" placeholder="Enter house number or street name" required>
            </div>
            <div class="form-group">
            <input type="text" name="locality" id="loc" class="form-control" placeholder="Enter locality" required>
            </div>
            <div class="form-group">
            <input type="text" name="city" id="loc" class="form-control" placeholder="Enter city" required>
            </div>
            <div class="form-group">
            <input type="text" name="pin" id="loc" class="form-control" placeholder="Enter PIN" required>
            </div>
            <div class="form-group">
            <label>Type of Land:</label><br>
            <label class="radio-inline">
              <input type="radio" name="type" value="Myadi" required> Myadi&nbsp;&nbsp;&nbsp;&nbsp;
            </label>
            <label class="radio-inline">
              <input type="radio" name="type" value="Non-Myadi"> Non-Myadi&nbsp;&nbsp;&nbsp;&nbsp;
            </label>
            <label class="radio-inline">
              <input type="radio" name="type" value="Other"> Other
            </label>
            </div>
            <div class="form-group">
            <input type="text" name="speci" id="speci" class="form-control" placeholder="Please specify">
            </div>
            
            
            <div class="form-group">
            <label>Measurement of Land:</label><br>
            </div>
            <div class="row">
            <div class="col-md-4 form-group">
            <input type="text" name="bigha" class="form-control" id="bigha" placeholder="Bigha"></div>
             <div class="col-md-4 form-group">
            <input type="text" name="katha" class="form-control" id="katha" placeholder="Katha"></div>
            <div class="col-md-4 form-group">
            <input type="text" name="lesha" class="form-control" id="lesha" placeholder="Lesha"></div>
            </div>
            <div class="form-group">
            <label>If Miyadi, provide Daag Number and Patta Number:</label><br></div>
            <div class="row">
            <div class="col-md-4 form-group">
            <input type="text" name="daag" class="form-control" id="daag" placeholder="Enter Daag Number" required></div>
             <div class="col-md-4 form-group">
            <input type="text" name="patta" class="form-control" id="patta" placeholder="Enter Patta Number" required></div>
            </div>
            <div class="form-group">
            <input type="text" name="price" id="loc" class="form-control" placeholder="Enter Price of your plot" required>
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