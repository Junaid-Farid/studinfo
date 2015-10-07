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

//message variable 
$msg   = "";
 
 
$mail->Username = "attiquetaunsvi1@gmail.com";
$mail->Password = "khan201515";
 
$mail->IsHTML(true); // if you are going to send HTML formatted emails
$mail->SingleTo = true; // if you want to send a same email to multiple users. multiple emails will be sent one-by-one.

$mail->From = "attiquetaunsvi1@gmail.com";
$mail->FromName = "Muhammad Attique";

//send email whent the button is clicked
 
if(isset($_POST['submit']))
{
	$subject = $_POST['e_subject'];
	$message = $_POST['e_message'];
	
		$sql = "Select s_email from student";
		$result = mysql_query($sql) or die;
		confirm_query($result);	
			
		while($row = mysql_fetch_array($result))
		{
			$to =  $row['s_email'];

			$mail->addAddress($to ,"User 1");
			  
			$mail->Subject = $subject ;
			$mail->Body =$message ;
			 
			if(!$mail->Send())
				$msg   = "Message was not sent <br />PHPMailer Error: " . $mail->ErrorInfo;
			else
				$msg   = "Message has been sent";
				header("location:calendar_list.php");
		}
	}
	
	?>


<div id="menubar">
		
<?php include("menus.php");?>
</div> 

		 
<div id="module-name">Send Infor<p align="center" style="color:#F00"><?php echo $msg; ?></p> </div>

<div id="content">
<form id="form4" name="form4" method="post" action="">

<table class="app_table">
	<tr>
		<th> <div class="_title">Email</div></th>
	</tr>
	<tr>
    
		<td class="form">
        
			<table width="89%">
            <tr>
				   <td width="159" class="_label">To:</td>
				  
							
                   
                  <td>
					<textarea name="reciever" cols="40" rows="8"  class="app_txtbox"  'readonly="readonly"' >
					 <?php 
							$sql = "Select * from student";
							$result = mysql_query($sql) or die;
							confirm_query($result);
							
									while($row = mysql_fetch_array($result)){
										echo $row['s_email'];
										echo ';';
									}
					?> 
                         </textarea>
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
                  
                  
                    <textarea name="e_message" class="txtbox" id="e_message">
                    <?php
								$act_id = $_GET['id']; 

								$sql = 'Select * from schoolcal where cal_id='.$act_id;
								$act = mysql_query($sql) or die;
																											
																			
							
									
									while($stdrow = mysql_fetch_array($act)){
									
										echo $stdrow['cal_date'] . ' :: '. $stdrow['event'];
						
										}		
											
								?>	
								From :: Dept
                    
                    </textarea>
					<script>
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

