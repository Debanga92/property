<?php
session_start();
if(isset($_SESSION['admin_id']))
{
include'includes/connect.php';
$sql1 = "SELECT * FROM adminproperty ";
$result1=$db->query($sql1);
$nor=$result1->num_rows;
$rpp=3;

$nop=ceil($nor/$rpp);

if(!isset($_GET['page']))
{
	$page=1;
}
else
{
	$page=$_GET['page'];
}

$this_page_result=($page-1)*$rpp;
$sql = "SELECT * FROM adminproperty limit " .$this_page_result. ',' .$rpp;

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
      <form>
        <div class="row">
        <div class="form-group">
	       <div class="form-field mr-3">
			     <input type="text" class="form-control" name="client_name" id="client_name" placeholder="Enter Client Name..." required>
           </div><div id="clientList" class="clientList"></div>
           
       </div>
        <div class="form-group">
	       <div class="form-field">
			 <input type="submit" name="search" id="search" value="Search" class="form-control btn btn-primary" style="background-color: #fff !important; color: #000000 !important;">
           </div>
        </div>
        </div>
       </form>
        <div class="col-md-8 d-flex justify-content-start">
            <h5>Properties you have posted:</h5>
        </div>
     <?php 
          for($i=1;$i<=$result->num_rows;$i++)
          {
            $row=$result->fetch_assoc();
            $sql1 = "select * from pg_table where ap_id=".$row['ap_id']."";
            $sql2 = "select * from apartment_table where ap_id=".$row['ap_id']."";
            $sql3 = "select * from plot_table where ap_id=".$row['ap_id']."";
            $sql4 = "select * from in_house where ap_id=".$row['ap_id']."";

            $result1=$db->query($sql1);
            $result2=$db->query($sql2);
            $result3=$db->query($sql3);
            $result4=$db->query($sql4);

            
          if($result1->num_rows>0)
          {
        ?>

        <div class="row mt-3">
            <div class="col col-md-4 d-flex justify-content-center" style="border-style: inset; border-width: thin; padding: 10px;">
                <p style="font-size: small;">Verification from <?php echo $row['client_name']; ?>&nbsp;(<?php echo $row['property_type']; ?>)</p>
            </div>
            <div class="col col-md-3 d-flex justify-content-center" style="border-style: inset; border-width: thin; padding: 10px;">
              <a class="btn btn-primary" href="pg1_show.php?property_id=<?php echo $row['ap_id'];?>" role="button">View</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             
            </div>

        </div>
        <?php
          }
        
          if($result2->num_rows>0)
          {
        ?>

        <div class="row mt-3">
            <div class="col col-md-4 d-flex justify-content-center" style="border-style: inset; border-width: thin; padding: 10px;">
                <p style="font-size: small;">Verification from <?php echo $row['client_name']; ?>&nbsp;(<?php echo $row['property_type']; ?>)</p>
            </div>
            <div class="col col-md-3 d-flex justify-content-center" style="border-style: inset; border-width: thin; padding: 10px;">
              <a class="btn btn-primary" href="apartment1_show.php?property_id=<?php echo $row['ap_id'];?>"  role="button">View</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             
            </div>

        </div>
        <?php
          }
          if($result3->num_rows>0)
          {
        ?>

        <div class="row mt-3">
            <div class="col col-md-4 d-flex justify-content-center" style="border-style: inset; border-width: thin; padding: 10px;">
                <p style="font-size: small;">Verification from <?php echo $row['client_name']; ?>&nbsp;(<?php echo $row['property_type']; ?>)</p>
            </div>
            <div class="col col-md-3 d-flex justify-content-center" style="border-style: inset; border-width: thin; padding: 10px;">
              <a class="btn btn-primary" href="plot1_show.php?property_id=<?php echo $row['ap_id'];?>"  role="button">View</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             
            </div>

        </div>
        <?php
          }
          if($result4->num_rows>0)
          {
        ?>

        <div class="row mt-3">
            <div class="col col-md-4 d-flex justify-content-center" style="border-style: inset; border-width: thin; padding: 10px;">
                <p style="font-size: small;">Verification from <?php echo $row['client_name']; ?>&nbsp;(<?php echo $row['property_type']; ?>)</p>
            </div>
            <div class="col col-md-3 d-flex justify-content-center" style="border-style: inset; border-width: thin; padding: 10px;">
              <a class="btn btn-primary" href="in_house_show1.php?property_id=<?php echo $row['ap_id'];?>"  role="button">View</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             
            </div>

        </div>
        <?php
          }
        
        
        
        }
        ?>
        <div class="col-md-6 mt-5 d-flex justify-content-center">
        <?php
        for($page=1;$page<=$nop;$page++)
        { 
        ?>
        <div class="page" style="border-radius: 10%; width: 20px; height: 20px; padding-bottom: 20px !important; padding-left: 5px; margin: 5px; background: #fff;
          border: 2px solid #666; color: #666; text-align: center;">
        <?php 
        echo"<a href='admin_panel.php?page=".$page."'>$page</a>&nbsp;&nbsp;";
        ?>
        </div>
        <?php
        }
        ?>
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
        <?php }
        else{
          header('location:index.php');
        } ?>
<script type="text/javascript">
$(document).ready(function(){
    $('#client_name').keyup(function(){
        var query = $(this).val();
        if(query!=''){
            $.ajax({
                url:"process2.php",
                method:"POST",
                data: {query:query},
                success:function(data)
                {
                    $('#clientList').fadeIn();
                    $('#clientList').html(data);
                }
            });
        }
        else{
            $('#clientList').fadeOut();
            $('#clientList').html("");
        }
    });
    $(document).on('click', '#li2', function(){
        $('#client_name').val($(this).text());
        $('#clientList').fadeOut();
    });
});
</script>