<?php require_once("includes/session.php");?>
<?php require_once("includes/functions.php");?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/dbcon.php");?>
<?php include("includes/header.php");?>

<!--ckeditor --->
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<!---end ckedor--->

<?php
include ("php_mailer/class.smtp.php");
require ("php_mailer/class.phpmailer.php");
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

//send email whent the button is clicked
 
if(isset($_POST['submit']))
{
	$to      = $_POST['e_to'];
	$subject = $_POST['e_subject'];
	$message = $_POST['e_message'];
	
	

 
	$mail->addAddress($to ,"User 1");
	$mail->addAddress($to ,"User 2");
	 
	 
	$mail->Subject = $subject ;
	$mail->Body =$message ;
	 
	if(!$mail->Send())
		echo "Message was not sent <br />PHPMailer Error: " . $mail->ErrorInfo;
	else
		echo "Message has been sent";
}
	
	?>


<div id="menubar">
		
<?php include("menus.php");?>
</div> 
		 
<div id="module-name">New Department
</div>
<div id="content">
<form id="form4" name="form4" method="post" action="send_emails.php">


<table class="app_table">
	<tr>
		<th> <div class="_title">Email</div></th>
	</tr>
	<tr>
		<td class="form">
			<table width="89%">
            <tr>
				   <td width="159" class="_label">To:</td>
				  <td width="59%"><label for="course"></label>
					 <input type="text" name="e_to" id="e_to"  class="txtbox"/>
					</td>
				</tr>
				<tr>
				   <td width="159" class="_label">Subject:</td>
				  <td width="59%"><label for="course"></label>
					 <input type="text" name="e_subject" id="e_subject"  class="txtbox"/>
					</td>
				</tr>				
				<tr>
				   <td class="_label">Message:</td>
				  <td><label for="course"></label>
                    <textarea name="e_message" class="txtbox" id="e_message"></textarea><script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'e_message' );
            </script>
					</td>
				</tr>
							 
				  <tr>
					<td></td>
					<td>
					  <input type="submit" name="submit" value="Send" />
				   </td>
				  </tr>
				  	  
				
			</table>	
		</tr>		
</table>
</form>



<?php include("includes/footer.php");?>

