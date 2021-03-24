<?php
include 'includes/connect.php';

if($_GET['op']=="delete")
{

    $del_img = $_GET['file_name'];
    $sql = "DELETE FROM images WHERE image_name = '$del_img'";
    $result = $db->query($sql);
    if(!$result)
    {
	    echo mysqli_error($db);	
    }

    if($result)
    {
        ?>
        <script>
        alert('Image deleted successfully');
        
        window.history.back();
        
        </script>


        <?php
        unlink("uploads/$del_name");
    }
}

?>