<?php

$err = '';
session_start();
include 'connect.php';
$err_name = $err_email = "";
if(isset($_POST['submit']))
{
  $email = $_POST['email'];
  $password = md5($_POST['password']);
  //to prevent sql injection
  $email = stripcslashes($email);
  $password = stripcslashes($password);

  $email = mysqli_real_escape_string($db, $email);

  $password = mysqli_real_escape_string($db, $password);

  //query processing


  $sql = "select * from user where email_id = '$email' and password = '$password'";

  $result = $db->query($sql);
  $row=$result->fetch_assoc();

  if($result->num_rows<=0)
  {
    $err = "Invalid Email or Password";
  }
  else
  {
  if($row['cust_type'] == 'Seller')
    {
      $_SESSION['user_id']=$row['user_id'];
      header('location:seller_profile.php');
  
    }
    else if($row['cust_type'] == 'Buyer')
    {
      $_SESSION['user_id']=$row['user_id'];
      header('location:#');
  
    }
  }
  
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Royal Estate - Free Bootstrap 4 Template by Colorlib</title>
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
            <h2 class="h3">Sign In Here</h2>
          </div>
         
         
        </div>
        <div class="row block-9">
          <div class="col-md-12 mb-4  d-flex" style="max-width:800px;">
            <form method="post" action="<?=$_SERVER['PHP_SELF']?>" class="bg-white p-5 contact-form" style="border-style: inset; border-color:#a9b0ab; border-width:thin;">
              <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="Your Email" required>
              </div>
              <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Your Password" required>
              </div>
             <?php echo $err;?>
              <div class="form-group">
                <input type="submit" name="submit" value="Sign In" class="btn btn-primary py-3 px-5">
              </div>
                <p>Do not have an account? <a href="register.php">Sign Up here..</a></p>
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