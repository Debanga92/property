<html lang="en">
  <head>
  		<style>
        	#ul2{
				list-style-type: none;
			}
			#li2{
				cursor: pointer;
				color: #000000;
				margin-left: -38px;
				
			}
			#li2:hover{
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
    $query = "SELECT client_name FROM adminproperty WHERE client_name LIKE '".$_POST["query"]."%'";
    $result = mysqli_query($db, $query);
    $output = '<ul id="ul2" class="bg-white">';

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_array($result)){
        $output .='<li id="li2">'.$row["client_name"].'</li>';
    }
}
    else{
        $output .='<li>Client Not Found</li>';
    }
    $output .='</ul>';
    echo $output;
}
?>