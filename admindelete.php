<?php
session_start();
if(isset($_SESSION['admin_id']))
{
include'connect.php';


$p_id =  $_POST['idd'];


$sql1 = "select * from pg_table where ap_id = $p_id";
$result1 = $db->query($sql1);
               
              
 
$sql2 = "select * from apartment_table where ap_id=$p_id";
$result2 = $db->query($sql2);


$sql3 = "select * from plot_table where ap_id=$p_id";
$result3 = $db->query($sql3);

$sql4 = "select * from in_house where ap_id=$p_id";
$result4 = $db->query($sql4);

if($result1->num_rows>0)
{
 $sql5 = "DELETE FROM adminproperty WHERE ap_id=$p_id";

 $sql6 = "DELETE FROM pg_table WHERE ap_id=$p_id";
 $sql7 = "DELETE FROM images WHERE ap_id=$p_id";
 $result5 = $db->query($sql5);
 $result6 = $db->query($sql6);

 $result7 = $db->query($sql7);
 if($result5 || $result6 || $result7)
 {
    ?>
    <script type="text/javascript">
    alert("Property Deleted");
    window.location.href = "admin_panel.php";
    </script>
    <?php
 }

}
elseif($result2->num_rows>0)
{
    $sql5 = "DELETE FROM adminproperty WHERE ap_id=$p_id";

    $sql6 = "DELETE FROM apartment_table WHERE ap_id=$p_id";
    $sql7 = "DELETE FROM images WHERE ap_id=$p_id";
    $result5 = $db->query($sql5);
    $result6 = $db->query($sql6);
   
    $result7 = $db->query($sql7);
    if($result5 || $result6 || $result7)
    {
       ?>
       <script type="text/javascript">
       alert("Property Deleted");
       window.location.href = "admin_panel.php";
       </script>
       <?php
    }
   
}
elseif($result3->num_rows>0)
{
    $sql5 = "DELETE FROM adminproperty WHERE ap_id=$p_id";

    $sql6 = "DELETE FROM plot_table WHERE ap_id=$p_id";
    $sql7 = "DELETE FROM images WHERE ap_id=$p_id";
    $result5 = $db->query($sql5);
    $result6 = $db->query($sql6);
   
    $result7 = $db->query($sql7);
    if($result5 || $result6 || $result7)
    {
       ?>
       <script type="text/javascript">
       alert("Property Deleted");
       window.location.href = "admin_panel.php";
       </script>
       <?php
    }
   
}
elseif($result4->num_rows>0)
{
    $sql5 = "DELETE FROM adminproperty WHERE ap_id=$p_id";

    $sql6 = "DELETE FROM in_house WHERE ap_id=$p_id";
    $sql7 = "DELETE FROM images WHERE ap_id=$p_id";
    $result5 = $db->query($sql5);
    $result6 = $db->query($sql6);
   
    $result7 = $db->query($sql7);
    if($result5 || $result6 || $result7)
    {
       ?>
       <script type="text/javascript">
       alert("Property Deleted");
       window.location.href = "admin_panel.php";
       </script>
       <?php
    }
   
}
else
{
    header ('location:index.php');
}






?>







<?php 
}
else
{
  header('location:index.php');
}


?>