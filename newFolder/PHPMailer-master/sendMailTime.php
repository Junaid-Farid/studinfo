<meta http-equiv="refresh" content="5; URL=http://localhost/PHPMailer-master/sendMailTime.php">
<script type="text/javascript" language="javascript">
	setTimeout(function(){
   window.location.reload(1);
}, 5000);
</script>
<?php
$servername		=	"127.0.0.1"; // 127.0.0.1
	$username		= "root";
	$password		= "";
	$database		= "test";
	
	
	$link		     	=	mysql_connect($servername, $username, $password);
	
						 mysql_select_db($database, $link);
						 //smtp detail start
		include 'class.smtp.php';
        require 'class.phpmailer.php';
        $mail=new PHPMailer();
        $mail->IsSMTP(); // telling the class to use SMTP

        $mail->SMTPAuth   = true;                  // enable SMTP authentication

        //SMTP detail from here 
        //$mail->SMTPSecure = "ssl";
        $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
        $mail->Port       = 587;                   // set the SMTP port for the GMAIL server
        $mail->Username   = "attiquetaunsvi1@gmail.com";  
        $mail->Password   = "khan201515";    
        //$mail->SMTPDebug=1;
        //SMTP deatil end
        //smtp mail end
			
							
							
/*---send mail---*/
$query = "SELECT * FROM `timetable` WHERE time = CURRENT_TIME ";

$sql = mysql_query($query);

$user = 0;
$emailBody = "It working nowdgagda";
while($row = mysql_fetch_assoc($sql))
{
	
   $emailBody .= "Name: ".$row['name']."; Address: ".$row['address']."; Data: ".$row['data']."; Email: ".$row['email']." \n";
   $mail->IsHTML(true); // if you are going to send HTML formatted emails
$mail->SingleTo = true; // if you want to send a same email to multiple users. multiple emails will be sent one-by-one.
 
$mail->From = "attiquetaunsvi1@gmail.com";
$mail->FromName = "Muhammad Attique";
 
$mail->addAddress($row['email'],"User 1");
 
$mail->addCC("user.3@ymail.com","User 3");
$mail->addBCC("user.4@in.com","User 4");
 
$mail->Subject = "Testing PHPMailer with localhost";
$mail->Body = $emailBody;
 
if(!$mail->Send())
    echo "Message was not sent <br />PHPMailer Error: " . $mail->ErrorInfo;
else
    echo $user. " Message has been sent <br/>";
	
$user = $user + 1;
}

?>



