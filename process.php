<html lang="en">
  <head>
  		<style>
        	#ul1{
				list-style-type: none;
			}
			#li1{
				cursor: pointer;
				color: #000000;
				margin-left: -38px;
				
			}
			#li1:hover{
				color: #fff;
				background-color: #0078d7;
				margin-left: -38px;
			}
        </style>
  </head>
  <body></body>
</html>
<?php
include 'connect.php';
if(isset($_POST["query"])){
    $output = '';
    $query = "SELECT loc_name FROM locality WHERE loc_name LIKE '".$_POST["query"]."%'";
    $result = mysqli_query($db, $query);
    $output = '<ul id="ul1" class="bg-white">';

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_array($result)){
        $output .='<li id="li1">'.$row["loc_name"].'</li>';
    }
}
    else{
        $output .='<li>Location Not Found</li>';
    }
    $output .='</ul>';
    echo $output;
}
?>