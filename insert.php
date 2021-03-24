<?php  
 //insert.php
$a=$_POST["name"];
$b=$_POST["email"];
$c=$_POST["subject"];
$d=$_POST["message"];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(!filter_var($b, FILTER_VALIDATE_EMAIL))
{

echo " <p style='color: red'> Please enter a valid email address..</p>";
}
else
{    

require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';


   

    


$mail = new PHPMailer();

//$mail->SMTPDebug = 4;

$mail->isSMTP();

$mail->Host = "smtp.gmail.com";

$mail->SMTPAuth = "true";

$mail->SMTPSecure = "tls";

$mail->Port = "587";

$mail->Username = "bhaskars464@gmail.com";

$mail->Password = "eittiwsafrbeifb1";

$mail->Subject = $c;

$mail->setFrom($b,$a);

$mail->Body = $d;

$mail->addAddress("birlawebsolutions.ghy@gmail.com");


if($mail->Send())
{    
echo "Your message has been sent.. Thank you";
}
else
{
echo "Sorry message cannot be sent";
}

$mail->smtpClose();   
    
}


  
/*

 
 if($_POST["name"] == "bhaskar")  
 {  
     
    echo "Message Saved";  
      
 }  
else
{
    echo"kjhswdvfg";
}
*/

?> 