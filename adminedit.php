<?php 
include'connect.php';

if(isset($_POST['submit']))
{
	$username = $_POST['username'];
	$phoneno = $_POST['phoneno'];
	$whatsapp = $_POST['whatsapp'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$idd = $_POST['idd'];
 
	$sql="UPDATE adminproperty SET client_name='$username', client_email='$email', client_phone='$phoneno', client_whats='$whatsapp', address='$address' WHERE ap_id=$idd";
   

  
  
  $result=$db->query($sql);
 

  if($result)
  {  
	?>
	<script type="text/javascript">
	alert("Edit succesful");
    window.history.back();
	</script>
	<?php

 }

}



if(isset($_POST['submit1']))
{
	
  $pg_name = $_POST['pg_name'];
    
  $house = $_POST['house'];
  $locality = $_POST['locality'];
  $city = $_POST['city'];
  $pin = $_POST['pin'];


  $pg_gender = $_POST['pg_gender'];

  $pg_category = $_POST['pg_category'];
   
   $pg_status = $_POST['pg_status'];
 

  
  $pg_meals = $_POST['pg_meals'];
 
  
  
  $pg_atb = $_POST['pg_atb'];
  
 
  $pg_singleroom = $_POST['pg_singleroom'];
  
  
 
  $pg_sharedbed = $_POST['pg_sharedbed'];
  

  $pg_selfcooking = $_POST['pg_selfcooking'];
  

  $pg_ac = $_POST['pg_ac'];
  
  
  $pg_hotandcold = $_POST['pg_hotandcold'];
 
 
  $pg_parking = $_POST['pg_parking'];
 
  
  $pg_price = $_POST['pg_price'];
 

  $pg_details = $_POST['pg_details'];
  $idd = $_POST['idd'];

	$sql="UPDATE pg_table SET pg_name='$pg_name', house='$house', locality='$locality', city='$city',
  pin='$pin', pg_gender='$pg_gender', pg_category='$pg_category', pg_status='$pg_status', pg_meals='$pg_meals', pg_atb='$pg_atb', pg_singleroom='$pg_singleroom', pg_sharedbed='$pg_sharedbed', pg_selfcooking='$pg_selfcooking', pg_ac='$pg_ac', pg_hotandcold='$pg_hotandcold', pg_parking='$pg_parking', pg_price='$pg_price', pg_details='$pg_details' WHERE ap_id=$idd";
   

  
  
  $result=$db->query($sql);
  if($result)
  {  
	?>
	<script type="text/javascript">
	alert("Edit succesful");
    window.history.back();
	</script>
	<?php
 }

}


if(isset($_POST['submit3']))
{
  $g_id = $_POST['idd'];
  $use = $_POST['use'];
  
  $category = $_POST['cat'];

  $area = $_POST['area'];

  $house = $_POST['house'];
  $locality = $_POST['locality'];
  $city = $_POST['city'];
  $pin = $_POST['pin'];

 
  $in_fac = $_POST['in_fac'];
 

  $gym = $_POST['gym'];
  
 
  $garden = $_POST['garden'];
 

  $pool = $_POST['pool'];
 
  $generator = $_POST['generator'];

  $fire_safety = $_POST['fire_safety'];
 
  $car_parking = $_POST['car_parking'];

  $community_hall = $_POST['community_hall'];
 
  $security_main = $_POST['security_main'];
  $r_s = $_POST['want'];
  $price = $_POST['price'];
  

  $p_w = $_POST['p_w'];

  $others = $_POST['others'];
  
 
  $name = $_POST['apart_name'];


  $sql="UPDATE apartment_table SET name='$name', r_s='$r_s', reason='$use', category='$category', area='$area', house='$house', locality='$locality', city='$city', pin='$pin', in_fac='$in_fac', gym='$gym', garden='$garden', pool='$pool', generator='$generator', fire_safety='$fire_safety', car_parking='$car_parking', community_hall='$community_hall', security_main='$security_main', p_w='$p_w', price='$price', others='$others' WHERE ap_id=$g_id";
   

  
  
  $result=$db->query($sql);
  if(!$result)
  {
      echo mysqli_error($db);	
  }
 

  if($result)
  {  
	?>
	<script type="text/javascript">
	alert("Edit succesful");
    window.history.back();
	</script>
	<?php
 }


 }



 if(isset($_POST['submit4']))
 {
  $house = $_POST['house'];
  $locality = $_POST['locality'];
  $city = $_POST['city'];
  $pin = $_POST['pin'];
   $type = $_POST['type'];
   $speci = $_POST['speci'];
   $bigha = $_POST['bigha'];
   $katha = $_POST['katha'];
   $lesha = $_POST['lesha'];
   $daag = $_POST['daag'];
   $patta = $_POST['patta'];
   $price = $_POST['price'];
   
   $idd = $_POST['idd'];
  
   $sql="UPDATE plot_table SET house='$house', locality='$locality', city='$city', pin='$pin', type='$type', speci='$speci', bigha='$bigha', katha='$katha', lesha='$lesha', daag='$daag', patta='$patta', price='$price' WHERE ap_id=$idd";
    
 
   
   
   $result=$db->query($sql);
  
 
   if($result)
   {  
   ?>
   <script type="text/javascript">
   alert("Edit succesful");
     window.history.back();
   </script>
   <?php
  }



  
 
 }
 if(isset($_POST['submit5']))
 {
  $house = $_POST['house'];
  $locality = $_POST['locality'];
  $city = $_POST['city'];
  $pin = $_POST['pin'];
   $name = $_POST['name'];
   $want = $_POST['want'];
   $use = $_POST['use'];
   $rooms = $_POST['rooms'];
   $atb = $_POST['atb'];
   $rw = $_POST['rw'];
   $pf = $_POST['pf'];
   $price = $_POST['price'];
   $others = $_POST['others'];
   
   $idd = $_POST['idd'];
  
   $sql="UPDATE in_house SET name='$name', want='$want', use1='$use', house='$house', locality='$locality', city='$city', pin='$pin', rooms='$rooms', atb='$atb', rw='$rw', pf='$pf', price='$price', others='$others' WHERE ap_id=$idd";
    
 
   
   
   $result=$db->query($sql);
  
 
   if($result)
   {  
   ?>
   <script type="text/javascript">
   alert("Edit succesful");
     window.history.back();
   </script>
   <?php
  }



  
 
 } 
 
?>