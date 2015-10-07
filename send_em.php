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
	$to      = $_POST['e_to'];
	$subject = $_POST['e_subject'];
	$message = $_POST['e_message'];
	
	

 
	$mail->addAddress($to ,"User 1");
	$mail->addAddress($to ,"User 2");
	 
	 
	$mail->Subject = $subject ;
	$mail->Body =$message ;
	 
	if(!$mail->Send())
		$msg   = "Message was not sent <br />PHPMailer Error: " . $mail->ErrorInfo;
	else
		$msg   = "Message has been sent";
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
				  <td width="59%"><label for="course"></label>
                  <?php

								$stud_id = $_GET['id']; 

								$sql = 'Select * from student where s_id='.$stud_id;
								$result = mysql_query($sql) or die;
								while ($row = mysql_fetch_array($result)){
								
									$recipient = $row['s_g_email'];
								}
						?>
							
                  
                  
					 <input type="text" name="e_to" id="e_to"  class="txtbox" value="<?php echo $recipient;?> "/>
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
                  
                  <?php
									$stud_id = $_GET['id']; 
									
									
									$stdql = 'Select * from student where s_id ='. $stud_id;	
									$student = mysql_query($stdql) or die;
									
									
											$sql = 'SELECT  `grades_id` ,  `s_id` ,  `grades`.`subj_code` ,`subject`, `grades` ,  `sy` ,  `grades`.`semester` ,  `grades`.`yr` 
														FROM  `grades` 
														LEFT JOIN  `subjects` ON  `grades`.`subj_code` =  `subjects`.`subj_code` 
														WHERE  `s_id` ='.$stud_id;
										
											$result = mysql_query($sql) or die;
											
																			
							?>
                    <textarea name="e_message" class="txtbox" id="e_message">
                    
                    	<Table class="app_table" style="width:100%;">
                        <tr>
                            
                            <th align="left">Subject</th>
                            <th align="left">Sy</th>
                            <th align="left">Year</th>
                            <th align="left">Semester</th>
                            <th align="left">Grade</th>
                            <th align="left">Remarks</th>
                            
                            
                        </tr>
                    
                    <?php
									
									while($stdrow = mysql_fetch_array($student)){
									
										echo 'Grades of Mr/Ms. '.$stdrow['s_name'] . '::      ';
							
									
									}		
												
 $query = 'SELECT * FROM  `grades` where s_id='.$stud_id;
					$result = mysql_query($query, $connection) or die (mysql_error());
					while ($row = mysql_fetch_array($result)) {
						
						echo (@$odd == true) ? ' <tr class="odd_row" > ' : ' <tr class="even_row"> ';
							@$odd = !$odd;
						$subj_Code = $row['subj_code'];
						$sql = 'SELECT * FROM subjects where subj_code='.$subj_Code;
						$rs  = mysql_query($sql);
						$rows = mysql_fetch_array($rs);
						echo ' <td> ';
						echo $rows['subject'];
						echo ' <td> ';	
						
						
						echo $row['sy'];
						echo ' <td> ';
						echo $row['yr'];
						echo ' <td> ';
						echo $row['semester'];
						
						echo ' <td> ';
						if($row['grades']==0){
						echo 'NA';
						}else{
						echo $row['grades'];
						}
						echo ' <td> ';
						if ($row['grades']==0 ){
						echo 'NA';
						}elseif($row['grades'] < 75){
						
						echo 'Failed';
						}else{
						echo 'Passed';
						}
						
						
						
						
					}
								?>	
                                </table>
								From ::  Registrar
                    
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

