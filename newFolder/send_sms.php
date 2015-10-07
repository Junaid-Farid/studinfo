<?php require_once("includes/session.php");?>
<?php require_once("includes/functions.php");?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/dbcon.php");?>
<?php include("includes/header.php");?>
<div id="menubar">
		
<?php include("menus.php");?>
</div> 
		 
<div id="module-name">Student Filter
</div>



<div id="content">

<div style="width: 500px; margin: 10px auto;">
<form id="form4" name="form4" method="post" action="process_sms.php?id=<?php echo $_GET['id'];?>">


<table class="app_table">
	<tr>
		<th> <div class="_title">Compose Message</div></th>
	</tr>
	<tr>
		<td class="form">
			<table width="100%">
					<tr>
					  <td class="_label">Recipient :</td>
						<td>
						<?php

								$stud_id = $_GET['id']; 

								$sql = 'Select * from student where s_id='.$stud_id;
								$result = mysql_query($sql) or die;
								while ($row = mysql_fetch_array($result)){
								
									$recipient = $row['s_guardian_contact'];
								}
						?>
							<input type="text" name="reciever" size="30" class="app_txtbox" value="<?php echo $recipient;?> ">
						</td>
					</tr>
				 
					<tr>
					  <td class="_label">Messages :</td>
						<td>
						<?php
									$stud_id = $_GET['id']; 
									
									
									$stdql = 'Select * from student where s_id ='. $stud_id;	
									$student = mysql_query($stdql) or die;
									
									
											$sql = 'SELECT  `grades_id` ,  `s_id` ,  `grades`.`subj_id` ,`subject`, `grades` ,  `sy` ,  `grades`.`semester` ,  `grades`.`yr` 
														FROM  `grades` 
														LEFT JOIN  `subjects` ON  `grades`.`subj_id` =  `subjects`.`subj_id` 
														WHERE  `s_id` ='.$stud_id;
											$result = mysql_query($sql) or die;
											
																			
							?>		
							<textarea name="textsms" cols="40" rows="8"  class="app_txtbox"  'readonly="readonly"' ><?php
									
									while($stdrow = mysql_fetch_array($student)){
									
										echo 'Grades of Mr/Ms. '.$stdrow['s_name'] . '::      ';
							
									
									}		
												while ($row = mysql_fetch_array($result)){
														$subj = $row['subject'];
														$grades = $row['grades'];
														
														if ($grades == 0 ){
															$grades == 'inc';
														}else{
															$grades == $grades;
														}
																					
														echo $subj . ' :' . $grades .', ';
												}
								?>	
								From :: Shool Registrar
							</textarea>
						</td>
					</tr>
					
					<tr>					
					   <td align="Right">
						<td>
							<input type="submit" name="submit" id="send" value="Send"/>
							
						</td>
					   </td>
				  </tr>
			</table>	
		</td>
	</tr>		
</table>
		
</div>
</form>


<?php include("includes/footer.php");?>