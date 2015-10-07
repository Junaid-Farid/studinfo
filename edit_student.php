<?php require_once("includes/session.php");?>
<?php require_once("includes/functions.php");?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/dbcon.php");?>
<?php include("includes/header.php");?>
<link rel="stylesheet" type="text/css" href="javascripts/tools/calendar/css/calendar-win2k-cold-1.css" /> 
<link rel="stylesheet" type="text/css" href="javascripts/tools/monthpicker/css/monthpicker.css" /> 
<link rel="stylesheet" type="text/css" href="javascripts/tools/popup/popup_win.css" /> 
<link rel="stylesheet" type="text/css" href="modules/mod_custommod/css/custommod.css" /> 
<script type="text/javascript" language="javascript" src="javascripts/application.js"></script> 
<script type="text/javascript" language="javascript" src="javascripts/tools/calendar/calendar.js"></script> 
<script type="text/javascript" language="javascript" src="javascripts/tools/calendar/lang/calendar-en.js"></script> 
<script type="text/javascript" language="javascript" src="javascripts/tools/calendar/calendar-setup.js"></script> 
<script type="text/javascript" language="javascript" src="javascripts/tools/monthpicker/monthpicker.js"></script> 
<!--ckeditor --->
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<!---end ckedor--->
<script type="text/javascript">
CKEDITOR.editorConfig = function( config ) {
	config.language = 'es';
	config.uiColor = '#F7B42C';
	config.height = 100;
	config.toolbarCanCollapse = true;
};
</script>

<div id="menubar">
		
<?php include("menus.php");?>
</div> 
		 
<div id="module-name">Edit Student
</div>
<div id="content">

	<?php	 
			$id = $_GET['id'];
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
				$course = $row['course_id'];
				@$status = $row['status'];
				$parents = $row['s_guardian'];
				$p_contacts = $row['s_guardian_contact'];
				$p_address = $row['s_guardian_add'];
				$sy = $row['sy'];
				$sem = $row['semester'];
				$key=$row['key'];
				$yr = $row['yr'];
							
			}
	?>
				
<form  method="post" action="process_edit_student.php">

  <table class="app_table">
	<tr>
		<th> <div class="_title">Details</div></th>
	</tr>
	<tr>
		<td class="form">
			<table width="89%">
				<tr>
				  <td class="_label">Id No.:</td>
				  <td><label for="idno">
					<input type="text" name="idno" size="30" id="idno" class="app_txtbox" value="<?php  echo $people_id;?>">
				  </label></td>
				</tr>
	
				<tr>
				  <td class="_label" width="117">Name:    </td>
				  <td width="413"><input type="text" name="s_fullname" size="30" id="s_fullname" value="<?php echo $name; ?>" />
				  </td>
				</tr>
	
				<tr>
				  <td class="_label">Address:</td>
				  <td><textarea name="s_address" cols="30" id="s_address"><?php echo $s_address; ?></textarea>
                  <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 's_address' );
            </script>
                  
                  </td>
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
	<td class="_label">Department:</td>
				  <td><label for="dept"></label>
					<select name="dept" id="dept">
					  <?php $sql ='Select * from department';
						$result = mysql_query($sql);
						while ($row = mysql_fetch_array($result)){
												
								echo '<option value="'. $row['dept_id'].'">';
								echo  $row['dept_name'] . '</option>';
						
						
						}
				   
					  ?>
				  </select></td>
				</tr>
		<tr>
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
				  <td class="_label">Parents/Guardian:</td>
				  <td><label for="parents"></label>
				  <input name="parents" type="text" id="parents" size="30" value = "<?php echo $parents;?>"></td>
				   </tr>
				<tr>
				  <td class="_label">Contact:</td>
				  <td><label for="p_address"></label>
				  <input name="p_contacts" type="text" id="p_contacts" size="30" value = "<?php echo $p_contacts;?>"></td>
				</tr>
				  <tr>
				  <td class="_label">Address:</td>
				  <td><label for="p_address"></label>
				  <input name="p_address" type="text" id="p_address" size="30" value = "<?php echo $p_address;?>"></td>
				</tr>
				<tr>
				  <td height="41"><input type="hidden" name="key" value=<?php echo $key;?>>
				  </td>
				  <td><input type="reset" name="clear" value = "clear entry"  />
					<input type="submit" name="submit" value="Save data" />
				  </td><td width="1"></td>
				</tr>
				
						</table>
			</td>
		</tr>	
   </table>
    
    
</form>
<?php include("includes/footer.php");?>