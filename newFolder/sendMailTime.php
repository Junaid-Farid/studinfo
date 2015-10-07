<?php
$servername		=	"127.0.0.1"; // 127.0.0.1
	$username		= "root";
	$password		= "";
	$database		= "test";
	
	
	$link		     	=	mysql_connect($servername, $username, $password);
	
						 mysql_select_db($database, $link);
			
							
/*---send mail---*/
$sql = " SELECT *, TIMEDIFF(date, NOW()) FROM `timetable` WHERE TIMEDIFF(date, NOW()) = 1";
$query = mysql_query($sql);
$emailBody = "It working now";
while($row = mysql_fetch_assoc($query))
{
   $emailBody .= "Name: ".$row['Name']."; Address: ".$row['Address']."; Data: ".$row['Data']."; Email: ".$row['email']." \n";
}




/*----send mail end----*/

include 'class.smtp.php';
require 'class.phpmailer.php';
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = 'smtp';
$mail->SMTPAuth = true;
$mail->Host = 'smtp.gmail.com'; // "ssl://smtp.gmail.com" didn't worked
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
// or try these settings (worked on XAMPP and WAMP):
// $mail->Port = 587;
// $mail->SMTPSecure = 'tls';
 
 
$mail->Username = "attiquetaunsvi1@gmail.com";
$mail->Password = "khan201515";
 
$mail->IsHTML(true); // if you are going to send HTML formatted emails
$mail->SingleTo = true; // if you want to send a same email to multiple users. multiple emails will be sent one-by-one.
 
$mail->From = "attiquetaunsvi1@gmail.com";
$mail->FromName = "Muhammad Attique";
 
$mail->addAddress("junaid.ahmed.infome@gmail.com","User 1");
$mail->addAddress("junaid.ahmed.infome@gmail.com","User 2");
 
$mail->addCC("user.3@ymail.com","User 3");
$mail->addBCC("user.4@in.com","User 4");
 
$mail->Subject = "Testing PHPMailer with localhost";
$mail->Body = "Hi,<br /><br />This system is working perfectly.";
 
if(!$mail->Send())
    echo "Message was not sent <br />PHPMailer Error: " . $mail->ErrorInfo;
else
    echo "Message has been sent";


?>



