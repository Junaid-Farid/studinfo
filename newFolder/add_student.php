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
<div id="menubar">

</script>
	<?php include("menus.php");?>
		  </div>
	 
<div id="module-name">New Student
</div>
<div id="content">

	
				
<form  method="post" action="process_add_student.php">

  <table class="app_table">
	<tr>
		<th> <div class="_title">Details</div></th>
	</tr>
	<tr>
		<td class="form">
			<table width="50%">
				<tr>
				  <td class="_label">Id No.:</td>
				  <td><label for="idno">
					<input type="text" name="idno" size="30" id="idno" class="app_txtbox" >
				  </label></td>
				</tr>
	
				<tr>
				  <td class="_label" width="117">Name:    </td>
				  <td width="413"><input type="text" name="s_fullname" size="30" id="s_fullname" class="app_txtbox">
				  </td>
				</tr>
	
				<tr>
				  <td class="_label">Address:</td>
				  <td><input type="text" name="s_address" size="30" id="s_address"></td>
				</tr>
				<tr>
				  <td class="_label">Age:</td>
				  <td><input type="text" name="s_age" size="30" id="s_age" ></td>
				</tr>
				<tr>
				  <td class="_label">Birth Date:</td>
				  <td><input type="text" name="bday" size="30" id="bday">
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
				  <td><input type="text" name="bplace" size="30" id="bplace" ></td>
				</tr>
				<tr>
				  <td class="_label">Sex:</td>
				  <td><input type="radio" checked="checked" name="sex" id="sex" value="Male"><label for="sex">Male  
					<input type="radio" name="sex" id="sex2" value="Female">Female</label></td>
				</tr>
				<tr>
				  <td class="_label">Contact:</td>
				  <td><label for="s_contact"></label>
				  <input name="s_contact" type="text" id="s_contact" size="30" ></td>
				</tr>
				<tr>
				<td class="_label">School Year:</td>
				  <td><label for="sy"></label>
					<select name="sy" id="sy">
					  <option value="2011-2015">2011-2015</option>
					  <option value="2012-2016">2012-2016</option>
					  <option value="2013-2017">2013-2017</option>
					  <option value="2014-2018">2014-2018</option>
				  </select></td>
				 
				</tr>
				<tr>
				   <td class="_label">Semester</td>
				  <td><label for="sem"></label>
					<select name="sem" id="sem">
					  <option value="First">1st </option>
					  <option value="Second ">2nd </option>
                      <option value="Third ">3rd </option>
                      <option value="Fourth ">4th </option>
                      <option value="Fifth ">5th </option>
                      <option value="Sixth ">6th </option>
                      <option value="Seventh ">7th </option>
                      <option value="Eighth ">8th </option>
			<option value="Summer">Summer</option>
			</select></td>
				  
				</tr>
		 		<tr>
				  <td class="_label">Department:</td>
				  <td><label for="dept"></label>
					<select name="dept">
					 <?php
						 $sql = 'Select dept_id,dept_name from `department`';
						$result = mysql_query($sql) or die (mysql_error($dbcon));
						while ($row = mysql_fetch_array($result)) {
										
								echo ' <option value="' . $row['dept_id'] .'" > ';
								echo $row['dept_name'] . ' </option> ';
																
						}
					  
					 ?>
				  </select></td>
				</tr> -->
				<tr>
				   <td class="_label">Course:</td>
				  <td><label for="course"></label>
					<select name="course">
					 <?php
						$sql = 'Select * from `course`';
						$result = mysql_query($sql);
						while($row = mysql_fetch_array($result)){
							
								echo ' <option value="' . $row['course_id'] .'" > ';
								echo $row['course_name'] . ' </option> ';
												
						}
					 
					 ?>
				  </select> </td>
				</tr>
				<tr>
				   <td class="_label">Year:</td>
				  <td><label for="yr"></label>
					<select name="yr" id="course">
					  <option value="1">1st</option>
					  <option value="2">Second</option>
					  <option value="3">Third</option>
					  <option value="4">Fourth</option>
					  <option value="5">Fifth</option>
				  </select> </td>
				</tr>
				<tr>
				  <td class="_label">Status:</td>
				  <td><label for="status"></label>
					<label for="status"></label>
					<select name="status" id="status">
					  <option value="---Select---">---Select---</option>
					  <option value="Single">Single</option>
					  <option value="Marriage">Marriage</option>
				  </select></td>
				</tr>
				<tr>
				  <td class="_label">Parents/Guardian:</td>
				  <td><label for="parents"></label>
				  <input name="parents" type="text" id="parents" size="30" ></td>
				   </tr>
				<tr>
				  <td class="_label">Contact:</td>
				  <td><label for="p_address"></label>
				  <input name="p_contacts" type="text" id="p_contacts" size="30"></td>
				</tr>
				  <tr>
				  <td class="_label">Address:</td>
				  <td><label for="p_address"></label>
				  <input name="p_address" type="text" id="p_address" size="30"></td>
				</tr>
				<tr>
				  <td height="41">
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