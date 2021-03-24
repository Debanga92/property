<?php
session_start();
if(isset($_SESSION['admin_id']))
{
include 'connect.php'; 
$ap_id = $_GET['property_id'];


$err_em = $err_ext = $err_suc = "";
if(isset($_POST['submit'])) {
 


// Configure upload directory and allowed file types 
$upload_dir = 'uploads'.DIRECTORY_SEPARATOR; 
$allowed_types = array('jpg', 'png', 'jpeg'); 

// Define maxsize for files i.e 2MB 
$maxsize = 2 * 1024 * 1024; 

// Checks if user sent an empty form 
if(!empty(array_filter($_FILES['files']['name']))) { 

    // Loop through each file in files[] array 
    foreach ($_FILES['files']['tmp_name'] as $key => $value) { 
        
        $file_tmpname = $_FILES['files']['tmp_name'][$key]; 
        $file_name = $_FILES['files']['name'][$key]; 
        $file_size = $_FILES['files']['size'][$key]; 
        $file_ext = pathinfo($file_name, PATHINFO_EXTENSION); 

        // Set upload file path 
        $filepath = $upload_dir.$file_name; 

        // Check file type is allowed or not 
        if(in_array(strtolower($file_ext), $allowed_types)) { 

            // Verify file size - 2MB max 
            if ($file_size > $maxsize)		 
                $err_em = "Error: File size is larger than the allowed limit."; 

            // If file with name already exist then append time in 
            // front of name of the file to avoid overwriting of file 
            if(file_exists($filepath)) { 
                $filepath = $upload_dir.time().$file_name; 
                
                if( move_uploaded_file($file_tmpname, $filepath)) { 
                    $err_suc = "{$file_name} successfully uploaded <br />";
                   
                    $query1 = "insert into `images` (`ap_id`,`image_name`) values ('$ap_id','$file_name')";
                    $result = $db->query($query1);
                    //echo "{$file_name} successfully uploaded <br />";
                    if($result)
                        { 
                          $sql4 = "select * from pg_table where ap_id = '$ap_id'";

                          $result4 = $db->query($sql4);
            
                          $sql5 = "select * from apartment_table where ap_id = '$ap_id'";
            
                          $result5 = $db->query($sql5);
            
            
                          $sql6 = "select * from plot_table where ap_id = '$ap_id'";
            
                          $result6 = $db->query($sql6);

                          $sql7 = "select * from in_house where ap_id = '$ap_id'";

                          $result7 = $db->query($sql7);
                          
                          if($result4->num_rows>0)
                          {
                          header('location:pg1_show.php?property_id='.$ap_id.'');
                          }
                          else if($result5->num_rows>0)
                          {
                            header('location:apartment1_show.php?property_id='.$ap_id.'');
                          }
                          else if($result6->num_rows>0)
                          {
                            header('location:plot1_show.php?property_id='.$ap_id.'');
                          }
                          else if($result7->num_rows>0)
                          {
                            header('location:in_house_show1.php?property_id='.$ap_id.'');
                          }
                        }
                        else
                        {
                            $err_em = "Error Uploading File";
                        }
                                            
                } 
                else {					 
                    $err_em = "Error uploading {$file_name} <br />"; 
                } 
            } 
            else { 
            
                if( move_uploaded_file($file_tmpname, $filepath)) { 

                   
                    

                } 
                else {					 
                    $err_em = "Error uploading {$file_name} <br />"; 
                } 
            } 
        } 
        else { 
            
            // If file extention not valid 
            $err_em = "Error uploading {$file_name} "; 
            $err_ext = "({$file_ext} file type is not allowed)<br / >"; 
        } 
    } 
} 
else { 
    
    // If no files selected 
    $err_em = "No files selected";
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
   
    <!-- END nav -->
    

    <section class="ftco-section contact-section bg-light">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h3">Step 2 : Upload Images</h2>
          </div>
         
         
        </div>
        <div class="row block-9">
          <div class="col-md-12 mb-4  d-flex" style="max-width:800px;">
            <form accept-charset="UTF-8" action="" method="POST" class="bg-white p-5 contact-form" style="border-color:#a9b0ab; border-style: inset; border-width: thin;" enctype="multipart/form-data">
            <div class="form-group">
              <input type="hidden" name="idd" id="area" class="form-control" value="<?php echo $_GET['property_id']; ?>">
             </div>
        
               
                <div class="form-group mt-3">
                  <label class="mr-2">&nbsp;&nbsp; Upload your property's photos:</label>
                  <input type="file" name="files[]" multiple>
                </div>
                <div class="error" style="color:red; margin-left:10px;">
                <?php echo $err_em; "<br>" ?>
                <?php echo $err_ext; ?>
                </div>
                <div class="error" style="color:green; margin-left:10px;">
                <?php echo $err_suc; "<br>" ?>
                
                </div>
                <hr>
                <input type="submit" name="submit" value="Upload" class="btn btn-primary py-3 px-5">
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