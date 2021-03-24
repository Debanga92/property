<?php
include 'connect.php';

 if($_GET['ptype']=='flat1' || $_GET['ptype']=='flat2')
    {
        $sql = "select ap_id,property_id from apartment_table where locality = '".$_GET['loc']."' and price between ".$_GET['budget']."";


        $result=$db->query($sql);
        $nor=$result->num_rows;
        $rpp=12;

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

        $sqlx = "select ap_id,property_id from apartment_table where locality = '".$_GET['loc']."' and price between ".$_GET['budget']." limit " .$this_page_result. ',' .$rpp;

        $resultx=$db->query($sqlx);

    

        
       
    }

    elseif($_GET['ptype']=='pg')
    {
        $sql = "select ap_id,property_id from pg_table where locality = '".$_GET['loc']."' and pg_price between ".$_GET['budget']."";


        $result=$db->query($sql);

        $nor=$result->num_rows;
        $rpp=12;

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

        $sqlx = "select ap_id,property_id from pg_table where locality = '".$_GET['loc']."' and pg_price between ".$_GET['budget']." limit " .$this_page_result. ',' .$rpp;

        $resultx=$db->query($sqlx);

    
       
    }
    elseif($_GET['ptype']=='plot')
    {
        $sql = "select ap_id,property_id from plot_table where locality = '".$_GET['loc']."' and price between ".$_GET['budget']."";


        $result=$db->query($sql);

        $nor=$result->num_rows;
        $rpp=12;

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

        $sqlx = "select ap_id,property_id from plot_table where locality = '".$_GET['loc']."' and price between ".$_GET['budget']." limit " .$this_page_result. ',' .$rpp;

        $resultx=$db->query($sqlx);
       
    }
    elseif($_GET['ptype']=='house1' || $_GET['ptype']=='house2' )
    {
        $sql = "select ap_id,property_id from in_house where locality = '".$_GET['loc']."' and price between ".$_GET['budget']."";


        $result=$db->query($sql);

        $nor=$result->num_rows;
        $rpp=12;

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

        $sqlx = "select ap_id,property_id from in_house where locality = '".$_GET['loc']."' and price between ".$_GET['budget']." limit " .$this_page_result. ',' .$rpp;

        $resultx=$db->query($sqlx);
    }


    elseif($_GET['ptype']=='resi1' || $_GET['ptype']=='resi2' || $_POST['ptype']=='comm1' || $_POST['ptype']=='comm2')
    {
        ?>
        <script type="text/javascript">
        alert("Sorry we don't have properties of this type to display right now.. ");
        window.location.href = "index.php";
        </script>
        <?php
    }






/*    
echo $_POST['loc']; echo "<br>";
echo $_POST['ptype']; echo "<br>";
echo $_POST['budget']; echo "<br>";
$sql = "select ap_id,property_id from apartment_table where price between ".$_POST['budget']." union select ap_id,property_id from plot_table where price between ".$_POST['budget']." union select ap_id,property_id from pg_table where pg_price between ".$_POST['budget']."";

 $result = $db->query($sql);
 if(!$result)
    {
	    echo mysqli_error($db);	
    }
echo $result->num_rows;

*/


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
  <style> 
div.a {
  white-space: nowrap; 
  max-width: 350px; 
  overflow: hidden;
  text-overflow: ellipsis;
  
}



</style>
  <body>
    <?php include 'header.php'; ?>
    <!-- END nav -->

    <div class="hero-wrap">
     
      <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Property</span></p>
 <h1 class="mb-3 bread" style="color: black;">Properties</h1>          
        </div>
      </div>
    </div>


    

    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row">
                <?php


                if($resultx->num_rows==0)
                {
                  echo "<h4>Sorry, No results to be displayed..</h4>";
                }
                else
                {
                for($i=1;$i<=$resultx->num_rows;$i++)
                {
                    $row=$resultx->fetch_assoc();
                    if($row['property_id']==0)
                    {
                    $x= $row['ap_id'];
                  
                    }
                    elseif($row['ap_id']==0)
                    {
                        $x=$row['property_id'];
                    
                    }

                    
                    $sql1 = "select * from pg_table where ap_id = $x";
                    $result1 = $db->query($sql1);
               
              
 
                    $sql2 = "select * from apartment_table where ap_id=$x union select * from apartment_table where property_id=$x";
                    $result2 = $db->query($sql2);


                    $sql3 = "select * from plot_table where ap_id=$x";
                    $result3 = $db->query($sql3);


                    $sql5 = "select * from in_house where ap_id=$x";
                    $result5 = $db->query($sql5);




                if($result1->num_rows>0)
                    {
                        $sql4 = "select * from images where ap_id = $x";

                        $result4 = $db->query($sql4);
                        $row4 = $result4->fetch_assoc();
                        $row1=$result1->fetch_assoc();
                        $y=$row1['ap_id'];
                        

    		echo	'<div class="col-md-4 ftco-animate">';?>
    				<div class="properties">
    					<a href="pg_show.php?ap_id=<?php echo $y;?>" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(uploads/<?php echo $row4['image_name']?>);">
    		<?php	echo'			<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<span class="status sale">PG</span>
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="pg_show.php?ap_id='.$y.'"> '.$row1['pg_name'].' ('.$row1['pg_gender'].')</a></h3>
		    						<p> '.$row1['house'].', '.$row1['locality'].', '.$row1['city'].', '.$row1['pin'].' </p>
	    						</div>
	    						<div class="two">
	    							<span class="price">INR '.$row1['pg_price'].'</span>
    							</div>
    						</div>
    						<p><div class="a"> '.$row1['pg_details'].'</div></p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="flaticon-person"></i>For '.$row1['pg_category'].'</span>
    						
    						</p>
    					</div>
    				</div>
                </div>';
                    } 


               if($result2->num_rows>0)
                    {
                        $sql4 = "select * from images where ap_id = $x";

                        $result4 = $db->query($sql4);
                        $row4 = $result4->fetch_assoc();
                        $row2=$result2->fetch_assoc();
                        $y=$row2['ap_id'];


    		echo	'<div class="col-md-4 ftco-animate">'; ?>
    				<div class="properties">
    					<a href="apartment_show.php?ap_id=<?php echo $y;?>" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(uploads/<?php echo $row4['image_name']?>);">
    		<?php	echo'			<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<span class="status sale">'.$row2['r_s'].'</span>
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="apartment_show.php?ap_id='.$y.'">'.$row2['name'].'</a></h3>
		    						<p>'.$row2['locality'].'</p>
	    						</div>
	    						<div class="two">
	    							<span class="price">INR<br>'.$row2['price'].'</span>
    							</div>
    						</div>
    						<p><div class="a">'.$row2['others'].'</div></p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="flaticon-selection"></i> '.$row2['area'].' sqft</span>
    							<span class="ml-auto"><i class="flaticon-bed"></i> '.$row2['category'].'</span>
    							
    						</p>
    					</div>
    				</div>
                </div>';
                    } 





                 if($result3->num_rows>0)
                    {

                        $sql4 = "select * from images where ap_id = $x";

                        $result4 = $db->query($sql4);
                        $row4 = $result4->fetch_assoc();
                        $row3=$result3->fetch_assoc();
                        $y=$row3['ap_id'];

    		echo	'<div class="col-md-4 ftco-animate">'; ?>
    				<div class="properties">
    					<a href="plot_show.php?ap_id=<?php echo $y;?>" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(uploads/<?php echo $row4['image_name']?>);">
    <?php	echo'	<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<span class="status sale">Sale</span>
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="plot_show.php?ap_id='.$y.'">Plot Availabe</a></h3>
		    						<p>'.$row3['house'].', '.$row3['locality'].' '.$row3['city'].' '.$row3['pin'].' </p>
	    						</div>
	    						<div class="two">
	    							<span class="price">INR '.$row3['price'].'</span>
    							</div>
    						</div>
    						<p><div class="a">'.$row3['speci'].'</div> </p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="flaticon-selection"></i> '.$row3['bigha'].'&nbsp;Bigha '.$row3['katha'].'&nbsp;Katha  '.$row3['lesha'].'&nbsp;Lesha </span>
    				
    						</p>
    					</div>
    				</div>
                </div>';
                    } 

                    
                    if($result5->num_rows>0)
                    {

                        $sql4 = "select * from images where ap_id = $x";

                        $result4 = $db->query($sql4);
                        $row4 = $result4->fetch_assoc();
                        $row5=$result5->fetch_assoc();
                        $y=$row5['ap_id'];

    		echo	'<div class="col-md-4 ftco-animate">'; ?>
    				<div class="properties">
    					<a href="in_house_show.php?ap_id=<?php echo $y;?>" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(uploads/<?php echo $row4['image_name']?>);">
    <?php	echo'	<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<span class="status sale">'.$row5['want'].'</span>
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="in_house_show.php?ap_id='.$y.'">House Availabe</a></h3>
		    						<p>'.$row5['locality'].' </p>
	    						</div>
	    						<div class="two">
	    							<span class="price">INR '.$row5['price'].'</span>
    							</div>
    						</div>
    						<p><div class="a">'.$row5['others'].'</div> </p>
    						<hr>
    						<p class="bottom-area d-flex">
                <span><i class=""></i> '.$row5['use1'].'</span>
                <span class="ml-auto"><i class="flaticon-bed"></i> '.$row5['rooms'].' Rooms</span>
          
    						</p>
    					</div>
    				</div>
                </div>';
                    }




                }} ?>
    		</div>
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
              <?php
              for($page=1;$page<=$nop;$page++)
  	            { 
                  echo"<li><a href='form_process.php?page=".$page."&&ptype=".$_GET['ptype']."&&loc=".$_GET['loc']."&&budget=".$_GET['budget']."'>$page</a></li>";
                }
               ?> 
               <!-- <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
                <li><a href="#">&lt;</a></li> -->

              </ul>
            </div>
          </div>
        </div> 
    	</div> 
    </section>
	<?php include 'footer.php'; ?>
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