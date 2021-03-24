<?php
session_start();
include 'connect.php';
$err_pass = $err_email = $err_phn = $err_wha = "";
if(isset($_POST['submit']))
{
  $username = $_POST['username'];
  $phoneno = $_POST['phoneno'];
  $whatsapp = $_POST['whatsapp'];
  $email =$_POST['email'];
  $type =$_POST['type'];
  $address = $_POST['address'];
  $password1 = md5($_POST['password1']);
  $password2 = md5($_POST['password2']);
  

  //to prevent sql injection
  $username = stripcslashes($username);
  $phoneno = stripcslashes($phoneno);
  $email = stripcslashes($email);
  $whatsapp = stripcslashes($whatsapp);
  $address = stripcslashes($address);
  $password1 = stripcslashes($password1);
  $password2 = stripcslashes($password2);

  $username = mysqli_real_escape_string($db, $username);

  $phoneno = mysqli_real_escape_string($db, $phoneno);

  $email = mysqli_real_escape_string($db, $email);

  $whatsapp = mysqli_real_escape_string($db, $whatsapp);

  $address = mysqli_real_escape_string($db, $address);

  $password1 = mysqli_real_escape_string($db, $password1);

  $password2 = mysqli_real_escape_string($db, $password2);

 // Validation
 $duplicate2=mysqli_query($db,"select * from user where whatsapp='$whatsapp'");
 $duplicate1=mysqli_query($db,"select * from user where phone_no='$phoneno'");
 $duplicate=mysqli_query($db,"select * from user where email_id='$email'");
 if (mysqli_num_rows($duplicate)>0)
 {
   $err_email = "Email already exist";
 }
 elseif(mysqli_num_rows($duplicate1)>0)
 {
   $err_phn = "Phone number already exist";
 }
 elseif(mysqli_num_rows($duplicate2)>0)
 {
   $err_wha = "WhatsApp number already exist";
 }


 elseif(!filter_var($email, FILTER_VALIDATE_EMAIL))
 {
    $err_email = "Enter a valid Email";
 }

 elseif($password1 != $password2) {
    $err_pass = "Your Password did not matched";
  }
 
  else
  {

  
  //query processing
  $sql = "insert into `user` (`username`,`password`,`phone_no`,`email_id`,`whatsapp`,`address`,`cust_type`) values ('$username','$password1','$phoneno','$email','$whatsapp','$address','$type')";

  
  
  $result=$db->query($sql);
  /*
  if(!$result)
    {
	    echo mysqli_error($db);	
    }
   */ 
 
  
  
 
  if($result)
  {
  ?>
  <script type="text/javascript">
  alert("Registration succesful");
  window.location.href = "login.php";
  </script>
  <?php
  }
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
   <?php include'header.php' ?>
    <!-- END nav -->


    <section class="ftco-section contact-section bg-light">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h3">Sign Up Here</h2>
          </div>
         
         
        </div>
        <div class="row block-9">
          <div class="col-md-12 mb-4  d-flex" style="max-width:800px;">
            <form action="<?=$_SERVER['PHP_SELF']?>" method="post" class="bg-white p-5 contact-form" style="border-color:#a9b0ab; border-style: inset; border-width: thin;">
                       <!-- <div class="form-group">
                        
                        <input type="text" name="username" placeholder="Enter your name.." class="form-control" required>
                        </div> -->
                        <div class="form-group">
                 
                        <input type="text" name="username" class="form-control" id="username" placeholder="Enter your Name" required>
                        </div>

                        <div class="form-group">
                        
                        <input type="tel" name="phoneno" placeholder="Enter your Phone number" class="form-control" required>
                        </div>
                        <div class="pass" style="color:red">

                        <?php echo "$err_phn"; ?>
                        </div>

                        <div class="form-group">
                        
                        <input type="tel" name="whatsapp" placeholder="Enter your What's App number" class="form-control" required>
                        </div>
                        <div class="pass" style="color:red">

                        <?php echo "$err_wha"; ?>
                        </div>

                        <div class="form-group">
                        
                        <input type="email" name="email" placeholder="Enter your Email Id" class="form-control" required>
                        
                        </div>
                        <div class="pass" style="color:red">

                        <?php echo "$err_email"; ?>
                        </div>

                        <div class="form-group">
                        
                        <input type="text" name="address" placeholder="Enter your Residential Address" class="form-control" required>
                        </div>

                        <div class="form-group">
                          <select class="form-control" name="type">
                            <option value="" disabled selected hidden>Select</option>
                            <option value="Buyer">Buyer</option>
                            <option value="Seller">Seller</option>
                            
                          </select> 
                        </div>
                         <div class="form-group">
                        
                        <input type="password" name="password1" placeholder="Enter your password" class="form-control" required>
                        </div>
                        <div class="form-group">
                        
                        <input type="password" name="password2" placeholder="Confirm your password" class="form-control" required>
                        
                        </div>
                        <div class="pass" style="color:red">

                        <?php echo "$err_pass"; ?>
                        </div>
                         <div class="form-group">
                        <button type="submit"name="submit" class="btn btn-primary">Sign-Up</button>
                        </div>     
                        <p>Already have an account? <a href="login.php">Sign-In Here</a></p>
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
