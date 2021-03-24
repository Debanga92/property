<?php
session_start();
if(isset($_SESSION['admin_id']))
{
include'connect.php';
$sql = "SELECT * FROM property WHERE status = 0 ";
$result=$db->query($sql);


?>



<!DOCTYPE html>
<html lang="en">
<head>
        <title>PropertyAtEase(Admin)</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    
        <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.css">
        
        
    
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
          <li class="nav-item"><a href="admin_view.php" class="nav-link">For Approval</a></li>
         
          <li class="nav-item cta"><a href="adminlogout.php" class="nav-link ml-lg-2"><span class="icon-user"></span> Logout</a></li>
         

        </ul>
      </div>
    </div>
  </nav>
  
    <section class="ftco-section contact-section bg-light">
    
    <div class="container">
      <div class="col-md-4 d-flex justify-content-end" style="float: right;">
        <a class="btn btn-primary" href="adminadduser.php" role="button">Add Property</a>
      </div>
        <div class="col-md-8 d-flex justify-content-start">
            <h5>Properties for approval:</h5>
        </div>
     <?php 
          for($i=1;$i<=$result->num_rows;$i++)
          {
              
            $row=$result->fetch_assoc();
            $sqla = "select * from user where user_id=".$row['user_id']."";
            $sql1 = "select * from pg_table where property_id=".$row['p_id']."";
            $sql2 = "select * from apartment_table where property_id=".$row['p_id']."";
            $sql3 = "select * from plot_table where property_id=".$row['p_id']."";
            $result1=$db->query($sql1);
            $result2=$db->query($sql2);
            $result3=$db->query($sql3);
            $resulta=$db->query($sqla);
            $rowa = $resulta->fetch_assoc();

            
          if($result1->num_rows>0)
          {
        ?>

        <div class="row mt-3">
            <div class="col col-md-4 d-flex justify-content-center" style="border-style: inset; border-width: thin; padding: 10px;">
                <p style="font-size: small;">Verification from <?php echo $rowa['username']; ?>&nbsp;(<?php echo $row['type']; ?>)</p>
            </div>
            <div class="col col-md-3 d-flex justify-content-center" style="border-style: inset; border-width: thin; padding: 10px;">
              <a class="btn btn-primary" href="pg2_show.php?property_id=<?php echo $row['p_id'];?>"  role="button">View</a>
            </div>

        </div>
        <?php
          }
        
          if($result2->num_rows>0)
          {
        ?>

        <div class="row mt-3">
            <div class="col col-md-4 d-flex justify-content-center" style="border-style: inset; border-width: thin; padding: 10px;">
                <p style="font-size: small;">Verification from <?php echo $rowa['username']; ?>&nbsp;(<?php echo $row['type']; ?>)</p>
            </div>
            <div class="col col-md-3 d-flex justify-content-center" style="border-style: inset; border-width: thin; padding: 10px;">
              <a class="btn btn-primary" href="apartment2_show.php?property_id=<?php echo $row['p_id'];?>"  role="button">View</a>
             
            </div>

        </div>
        <?php
          }
          if($result3->num_rows>0)
          {
        ?>

        <div class="row mt-3">
            <div class="col col-md-4 d-flex justify-content-center" style="border-style: inset; border-width: thin; padding: 10px;">
                <p style="font-size: small;">Verification from <?php echo $rowa['username']; ?>&nbsp;(<?php echo $row['type']; ?>)</p>
            </div>
            <div class="col col-md-3 d-flex justify-content-center" style="border-style: inset; border-width: thin; padding: 10px;">
              <a class="btn btn-primary" href="plot2_show.php?property_id=<?php echo $row['p_id'];?>"  role="button">View</a> 
            </div>

        </div>
        <?php
          }
        
        
        
        }
        
      ?>
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
        <?php }
        else{
          header('location:index.php');
        } ?>