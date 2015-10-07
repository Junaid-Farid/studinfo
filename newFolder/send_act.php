<?php require_once("includes/session.php");?>
<?php require_once("includes/functions.php");?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/dbcon.php");?>
<?php include("includes/header.php");?>
<div id="menubar">
		
<?php include("menus.php");?>
</div> 
		 
<div id="module-name">Send Activity to Student via SMS
</div>



<div id="content">

<div style="width: 500px; margin: 10px auto;">
<form id="form4" name="form4" method="post" action="process_act_sms.php">


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
							$sql = "Select * from student";
							$result = mysql_query($sql) or die;
							confirm_query($result);
							?>
							<textarea name="reciever" cols="40" rows="8"  class="app_txtbox"  'readonly="readonly"' ><?php
									while($row = mysql_fetch_array($result)){
										echo $row['s_contact'];
										echo ';';
									}
									?>
							</textarea>
						</td>
					</tr>
				 
					<tr>
					  <td class="_label">Messages :</td>
						<td>
						<?php
								$act_id = $_GET['id']; 

								$sql = 'Select * from schoolcal where cal_id='.$act_id;
								$act = mysql_query($sql) or die;
																											
																			
							?>		
							<textarea name="textsms" cols="40" rows="8"  class="app_txtbox"  'readonly="readonly"' ><?php
									
									while($stdrow = mysql_fetch_array($act)){
									
										echo $stdrow['cal_date'] . ' :: '. $stdrow['event'];
						
										}		
											
								?>	
								From :: SSG
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