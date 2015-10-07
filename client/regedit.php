<?php include("header.php")?>
<?php require_once("includes/session.php");?>
<?php require_once("includes/functions.php");?>
<?php require_once("includes/dbcon.php");?>

<link rel="stylesheet" type="text/css" href="javascripts/tools/calendar/css/calendar-win2k-cold-1.css" /> 
<link rel="stylesheet" type="text/css" href="javascripts/tools/monthpicker/css/monthpicker.css" /> 
<link rel="stylesheet" type="text/css" href="javascripts/tools/popup/popup_win.css" /> 
<link rel="stylesheet" type="text/css" href="modules/mod_custommod/css/custommod.css" /> 
<script type="text/javascript" language="javascript" src="javascripts/application.js"></script> 
<script type="text/javascript" language="javascript" src="javascripts/tools/calendar/calendar.js"></script> 
<script type="text/javascript" language="javascript" src="javascripts/tools/calendar/lang/calendar-en.js"></script> 
<script type="text/javascript" language="javascript" src="javascripts/tools/calendar/calendar-setup.js"></script> 
<script type="text/javascript" language="javascript" src="javascripts/tools/monthpicker/monthpicker.js"></script> 

		 
<div id="module-name" style="margin:50px; margin-left:200px; margin-right:0px;"><h1 style="color:red">Edit Student</h1>
</div>
<div id="content" style="margin:50px; margin-left:200px; padding:12px;">

	<?php	 
			$id = 2224;
			$query='Select * from student where s_id='.$id;
			$result=mysql_query($query);
			confirm_query($result);
			 while($row = mysql_fetch_array($result)){
				$people_id = $row['s_id'];
				$name =$row['s_name'];
				$s_address = $row['s_address'];
				$s_age = $row['s_age'];
				$bday = $row['s_bday'];
				$bplace = $row['s_bplace'];
				$sex = $row['sex'];
				$scontact = $row['s_contact'];
				$semail = $_POST['s_email'];
			    $spassword = $_POST['s_password'];
				$course = $row['course_id'];
				@$status = $row['status'];
				$parents = $row['s_guardian'];
				$p_contacts = $row['s_guardian_contact'];               $pemail = $_POST['s_g_email'];
				$p_address = $row['s_guardian_add'];
				$sy = $row['sy'];
				$sem = $row['semester'];
				$key=$row['key'];
				$yr = $row['yr'];
							
			}
	?>
				
<form  method="post" action="process_edit_student.php">

  <table class="app_table" width="600px" style="mar">
	<tr>
		<th> <div class="_title">Details</div></th>
	</tr>
	<tr>
		<td class="form">
			<table width="100%">
				<tr>
				  <td class="_label">Id No.:</td>
				  <td><label for="idno">
					<input type="text" name="idno" size="30" id="idno" class="app_txtbox" value="<?php  echo $people_id;?>">
				  </label></td>
				</tr>
	
				<tr>
				  <td class="_label" width="206">Name:    </td>
				  <td width="374"><input type="text" name="s_fullname" size="30" id="s_fullname" value="<?php echo $name; ?>" />
				  </td>
				</tr>
	
				<tr>
				  <td class="_label">Address:</td>
				  <td><input type="text" name="s_address" size="30" id="s_address" value="<?php echo $s_address; ?>"/></td>
				</tr>
				<tr>
				  <td class="_label">Age:</td>
				  <td><input type="text" name="s_age" size="30" id="s_age" value="<?php echo $s_age; ?>"></td>
				</tr>
				<tr>
				  <td class="_label">Birth Date:</td>
				  <td><input type="text" name="bday" size="30" id="bday" value="<?php echo $bday; ?>">
				  <img id="dateicon_Datepurchased_88" src="javascripts/tools/calendar/calendar.jpg" alt="Datepicker" border="0" class="app_img_button" />
				  &nbsp;<span class="app_field_infotext">[ yyyy/mm/dd ]</span>

			<script type="text/javascript">
			Calendar.setup({
				inputField     :    "bday",     // id of the input field
				ifFormat       :    "%Y/%m/%d",      // format of the input field
				button         :    "dateicon_Datepurchased_88",  // trigger for the calendar (button ID)
				align          :    "Br",           // alignment (defaults to "Bl")
				singleClick    :    true
			});

			</script>
</td>
				</tr>
				<tr>
				  <td class="_label">Birth Place:</td>
				  <td><input type="text" name="bplace" size="30" id="bplace" value="<?php echo $bplace; ?>"></td>
				</tr>
				<tr>
				  <td class="_label">Sex:</td>
				  <td><input type="radio" name="sex" id="sex" value="Male"><label for="sex">Male  
					<input type="radio" name="sex" id="sex2" value="Female">Female</label></td>
				</tr>
				<tr>
				  <td class="_label">Contact:</td>
				  <td><label for="s_contact"></label>
				  <input name="s_contact" type="text" id="s_contact" size="30" value="<?php echo $scontact; ?>"></td>
				</tr>
                <tr>
				  <td class="_label">Email:</td>
				  <td><label for="s_email"></label>
				  <input name="s_email" type="text" id="s_email" size="30" value="<?php echo $semail; ?>"></td>
				</tr>
                 <td class="_label">Password:</td>
				  <td><label for="s_password"></label>
				  <input name="s_password" type="text" id="s_password" size="30" value="<?php echo $spassword; ?>"></td>
				<tr>
				<td class="_label">School Year:</td>
				  <td><label for="yr"></label>
					<select name="sy" id="sy">
					<option value="<?php echo $sy;?>"><?php echo $sy;?></option>
		
					  <option value="2011-2015">2011-2015</option>
					  <option value="2012-2016">2012-2016</option>
					  <option value="2013-2017">2013-2017</option>
					  <option value="2014-2018">2014-2018</option>
				  </select></td>
				 
				</tr>
				<tr>
				   <td class="_label">Semester</td>
				  <td>
					<select name="sem" id="sem">
						  <option value="<?php echo $sem; ?>"><?php echo $sem; ?></option>
						  	  <option value="First">1st </option>
					  <option value="Second ">2nd </option>
                      <option value="Third ">3rd </option>
                      <option value="Fourth ">4th </option>
                      <option value="Fifth ">5th </option>
                      <option value="Sixth ">6th </option>
                      <option value="Seventh ">7th </option>
                      <option value="Eighth ">8th </option>
					</select>
				</td>
				  
				</tr>
				<tr>
	<!--			  <td class="_label">Department:</td>
				  <td><label for="dept"></label>
					<select name="dept" id="dept">
					  <?php 
						/* $sql ='Select * from department';
						$result = mysql_query($sql);
						while ($row = mysql_fetch_array($result)){
												
								echo '<option value="'. $row['dept_id'].'">';
								echo  $row['dept_name'] . '</option>';
						
						
						}
				   */
					  ?>
				  </select></td>
				</tr>
	-->			<tr>
				   <td class="_label">Course:</td>
				  <td><label for="course"></label>
					<select name="course" id="course">
						<option value= "<?php echo $course ;?>"><?php 
					
									$sql = 'Select * from course where course_id='.$course;
									$result = mysql_query($sql);
									confirm_query($result);
									while ($row = mysql_fetch_array($result)){
										echo $row['course_name'];
																	
									}
									?>
						</option>
					  <?php 
						$sql ='Select * from course';
						$result = mysql_query($sql);
						confirm_query($result);
						while ($row = mysql_fetch_array($result)){
												
								echo '<option value="'. $row['course_id'].'">';
								echo  $row['course_name'] . '</option>';
						
						}
				  
					  ?>
				  </select> </td>
				  
				</tr>
				<tr>
				   <td class="_label">Year:</td>
				  <td><label for="yr"></label>
					<select name="yr" id="course">
					<?php
					if ($yr == 1){
						echo '<option value="1">1st</option>';
						echo '<option value="2">Second</option>';
						echo '<option value="3">Third</option>';
						echo ' <option value="4">Fourth</option>';
						echo ' <option value="5">Fifth</option>';				
						
					}elseif($yr == 2){
						echo '<option value="2">Second</option>';
						echo '<option value="1">1st</option>';
						echo '<option value="3">Third</option>';
						echo ' <option value="4">Fourth</option>';
						echo ' <option value="5">Fifth</option>';				
						
					}elseif($yr == 3){
						echo '<option value="3">Third</option>';
						echo '<option value="1">1st</option>';
						echo '<option value="2">Second</option>';
						echo ' <option value="4">Fourth</option>';
						echo ' <option value="5">Fifth</option>';	
					
					}elseif($yr == 4){
						echo ' <option value="4">Fourth</option>';
						echo ' <option value="5">Fifth</option>';	
						echo '<option value="1">1st</option>';
						echo '<option value="2">Second</option>';
						echo '<option value="3">Third</option>';
					
					}elseif($yr == 5){
						echo ' <option value="5">Fifth</option>';
						echo ' <option value="4">Fourth</option>';
						echo '<option value="3">Third</option>';
						echo '<option value="2">Second</option>';
						echo '<option value="1">1st</option>';
					}?>
					
								 
				  </select>
				
				  </td>
				</tr>
				<tr>
				  <td class="_label">Status:</td>
				  <td><label for="status"></label>
					<select name="status" id="status">
						 <?php
						 
							echo '<option value="Single">Single</option>';
														
				
							echo ' <option value="Marriage">Marriage</option>';
							
					
						  
						  ?>
				    </select></td>
				</tr>
				<tr>
				  <td class="_label">Parents/Guardian Name:</td>
				  <td><label for="parents"></label>
				  <input name="parents" type="text" id="parents" size="30" value = "<?php echo $parents;?>"></td>
				   </tr>
				<tr>
				  <td class="_label">Parents/Guardian Contact:</td>
				  <td><label for="p_address"></label>
				  <input name="p_contacts" type="text" id="p_contacts" size="30" value = "<?php echo $p_contacts;?>"></td>
				</tr>
                <tr>
				  <td class="_label">Parents/Guardian Email:</td>
				  <td><label for="s_g_email"></label>
				  <input name="s_g_email" type="text" id="s_g_email" size="30" value="<?php echo $pemail; ?>"></td>
				</tr>
				  <tr>
				  <td class="_label">Parents/Guardian Address:</td>
				  <td><label for="p_address"></label>
				  <input name="p_address" type="text" id="p_address" size="30" value = "<?php echo $p_address;?>"></td>
				</tr>
				<tr>
				  <td height="41"><input type="hidden" name="key" value=<?php echo $key;?>>
				  </td>
				  <td><input type="reset" name="clear" value = "clear entry"  />
					<input type="submit" name="submit" value="Save data" />
				  </td><td width="-2"></td>
				</tr>
				
						</table>
			</td>
		</tr>	
   </table>
    
    
</form>
</div>

<?php include("footer.php");?>
