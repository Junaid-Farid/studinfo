<?php include("header.php");?>
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
<style>


app_table, input[type="text"],select, input[type="password"] {
	width: 250px;
	height:30px;
	
}
app_table, input[type="submit"]:hover, input[type="reset"]:hover {
	background-color:#e21737;
	
}
._label{
	font-weight:bold;
	
}
</style>
	 
<div id="module-name" style="margin:50px; margin-left:200px; padding:12px;"><h1 style="color:red">Registration</h1>
</div>
<div id="content" style="margin:50px; margin-left:200px; padding:12px;" >
<form  method="post" action="process_register.php">

  <table class="app_table" width="570px;">
	<tr>
		<th width="400"> <div class="_title">Details</div></th>
	</tr>
	<tr>
		<td class="form">
			<table width="100%">
				<tr>
				  <td class="_label">Id No. :</td>
				  <td><p>
				    <input type="text" name="idno" size="30" id="idno" class="app_txtbox"  placeholder="ID NO">
				  </p>
			      <p>&nbsp; </p></td>
				</tr>
                
	
				<tr>
				  <td class="_label" width="178">Name:    </td>
				  <td width="347"><p>
				    <input type="text" name="s_fullname" size="30" id="s_fullname" class="app_txtbox" placeholder="Name">
				  </p>
			      <p>&nbsp; </p></td>
				</tr>
                <br/>
	
				<tr>
				  <td class="_label">Address:</td>
				  <td><p>
				    <input type="text" name="s_address" size="30" id="s_address" placeholder="Address">
				  </p>
			      <p>&nbsp; </p></td>
				</tr>
                <br/>
				<tr>
				  <td class="_label">Age:</td>
				  <td><p>
				    <input type="text" name="s_age" size="30" id="s_age" placeholder="Age" >
				  </p>
			      <p>&nbsp; </p></td>
				</tr>
				<tr>
				  <td class="_label">Birth Date:</td>
				  <td><p>
				    <input type="text" name="bday" size="30" id="bday" placeholder="[ yyyy/mm/dd ]">
				    <img id="dateicon_Datepurchased_88" src="javascripts/tools/calendar/calendar.jpg" alt="Datepicker" border="0" class="app_img_button" /></p>
				    <p>
				    &nbsp;<span class="app_field_infotext"></span>
				    
				    <script type="text/javascript">
			Calendar.setup({
				inputField     :    "bday",     // id of the input field
				ifFormat       :    "%Y/%m/%d",      // format of the input field
				button         :    "dateicon_Datepurchased_88",  // trigger for the calendar (button ID)
				align          :    "Br",           // alignment (defaults to "Bl")
				singleClick    :    true
			});

			      </script>
		          </p></td>
				</tr>
				<tr>
				  <td class="_label">Birth Place:</td>
				  <td><p>
				    <input type="text" name="bplace" size="30" id="bplace" placeholder="Birth Place">
				  </p>
			      <p>&nbsp; </p></td>
				</tr>
                <br/>
				<tr>
				  <td class="_label">Sex:</td>
				  <td><input type="radio" checked="checked" name="sex" id="sex" value="Male"><label for="sex">Male  
					<input type="radio" name="sex" id="sex2" value="Female">Female<br>
				  </label></td>
				</tr>
				<tr>
				  <td class="_label">Contact:</td>
				  <td><p>
				    <label for="s_contact"></label>
				    <input name="s_contact" type="text" id="s_contact" size="30"  placeholder="Your Contact">
				  </p>
			      <p>&nbsp; </p></td>
				</tr>
				<tr>
                <tr>
				  <td class="_label">Email:</td>
				  <td><p>
				    <label for="s_email"></label>
				    <input type="text" name="s_email" size="30" id="s_email" placeholder="Your Email">
				  </p>
			      <p>&nbsp; </p></td>
				</tr>
                 <td class="_label">Password:</td>
				  <td><p>
				    <label for="s_password"></label>
				    <input type="password" name="s_password" size="30" id="s_password"  placeholder="Password">
				  </p>
			       <p>&nbsp; </p></td>
				</tr>
                
				<td class="_label">School Year:</td>
				  <td><p>
				    <label for="sy"></label>
				    <select name="sy" id="sy">
				      <?php
						 $sql = 'Select std_session_start, std_session_end from `std_session`';
						$result = mysql_query($sql) or die (mysql_error($dbcon));
						while ($row = mysql_fetch_array($result)) {
										
								echo ' <option value="' . $row['session_id'] .'" > ';
								echo $row['std_session_start'] . '<---<strong>TO</strong>--->' .$row['std_session_end'] .'</option> ';
																
						}
					  
					 ?>
			        </select>
				  </p>
			      <p>&nbsp; </p></td>
				 
				</tr>
				<tr>
				   <td class="_label">Semester</td>
				  <td><p>
				    <label for="sem"></label>
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
			        </select>
				  </p>
			      <p>&nbsp; </p></td>
				  
				</tr>
		 		<tr>
				  <td class="_label">Department:</td>
				  <td><p>
				    <label for="dept"></label>
				    <select name="dept">
				      <?php
						 $sql = 'Select dept_id,dept_name from `department`';
						$result = mysql_query($sql) or die (mysql_error($dbcon));
						while ($row = mysql_fetch_array($result)) {
										
								echo ' <option value="' . $row['dept_id'] .'" > ';
								echo $row['dept_name'] . ' </option> ';
																
						}
					  
					 ?>
			        </select>
				  </p>
			      <p>&nbsp; </p></td>
				</tr> 
				<tr>
				   <td class="_label">Course:</td>
				  <td><p>
				    <label for="course"></label>
				    <select name="course">
				      <?php
						$sql = 'Select * from `course`';
						$result = mysql_query($sql);
						while($row = mysql_fetch_array($result)){
							
								echo ' <option value="' . $row['course_id'] .'" > ';
								echo $row['course_name'] . ' </option> ';
												
						}
					 
					 ?>
			        </select>
				  </p>
			      <p>&nbsp; </p></td>
				</tr>
				<tr>
				   <td class="_label">Year:</td>
				  <td><p>
				    <label for="yr"></label>
				    <select name="yr" id="course">
				      <option value="1">1st</option>
				      <option value="2">Second</option>
				      <option value="3">Third</option>
				      <option value="4">Fourth</option>
				      <option value="5">Fifth</option>
			        </select>
				  </p>
			      <p>&nbsp; </p></td>
				</tr>
				<tr>
				  <td class="_label">Status:</td>
				  <td><p>
				    <label for="status"></label>
				    <select name="status" id="status">
				      <option value="---Select---">---Select---</option>
				      <option value="Single">Single</option>
				      <option value="Marriage">Marriage</option>
			        </select>
				  </p>
			      <p>&nbsp; </p></td>
				</tr>
				<tr>
				  <td class="_label">Parents/Guardian Name:</td>
				  <td><p>
				    <label for="parents"></label>
				    <input name="parents" type="text" id="parents" size="30"  placeholder="Parents/Guardian Name">
				  </p>
			      <p>&nbsp; </p></td>
		      </tr>
				<tr>
				  <td class="_label">Parents/Guardian Contact:</td>
				  <td><p>
				    <label for="p_address"></label>
				    <input name="p_contacts" type="text" id="p_contacts" size="30" placeholder="Parents/Guardian Contact">
				  </p>
			      <p>&nbsp; </p></td>
				</tr>
                 <td class="_label">Guardian Email:</td>
				  <td><p>
				    <label for="s_g_email"></label>
				    <input type="text" name="s_g_email" size="30" id="s_g_email"  placeholder="Parents/Guardian Email">
				  </p>
			       <p>&nbsp; </p></td>
				</tr>
				  <tr>
				  <td class="_label">Address:</td>
				  <td><p>
				    <label for="p_address"></label>
				    <input name="p_address" type="text" id="p_address" size="30" placeholder="Parents/Guardian Address">
				  </p>
				    <p>&nbsp; </p></td>
				</tr>
				<tr>
				  <td height="41">
				  </td>
				  <td><br/><input class="hvr-shutter-in-horizontal" type="reset" name="clear" value = "clear entry"   style="border:none;"/>
					<input class="hvr-shutter-in-horizontal" style="border:none;"  type="submit" name="submit" value="Save data" />
				  </td><td width="23"></td>
				</tr>
				
						</table>
			</td>
		</tr>	
   </table>
</form>
</div>
<?php include("footer.php");?>