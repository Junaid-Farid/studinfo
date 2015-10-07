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
<script type="text/javascript" language="javascript" src="javascripts/tools/monthpicker/monthpicker.js"></script> </script>

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<link rel="stylesheet" href="minified/themes/default.min.css" type="text/css" media="all" />
<script type="text/javascript" src="minified/jquery.sceditor.bbcode.min.js"></script>


<!--ckeditor --->
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<!---end ckedor--->


<script>
$(function() {
    // Replace all textarea's
    // with SCEditor
    $("textarea").sceditor({
        plugins: "bbcode",
	style: "minified/jquery.sceditor.default.min.css"
    });
});
</script>


<div id="menubar">

<?php include("menus.php");?>
</div>

<div id="module-name">Add Activity
</div>
<div id="content">

<form id="form4" name="form4" method="post" action="process_calendar.php">


<table class="app_table">
	<tr>
		<th> <div class="_title">Details</div></th>
	</tr>
	<tr>
		<td class="form">
			<table width="100%">
            <tr>
				   <td width="22%" class="_label">Department:</td>
				  <td width="78%">
					<select name="dept_list" id="dept_list">
					  <?php
						 $sql = 'select dept_id, dept_name from `department`';
						$result = mysql_query($sql) or die (mysql_error($dbcon));
						while ($row = mysql_fetch_array($result)) {
										
								echo ' <option value="' . $row['dept_id'] .'" > ';
								echo $row['dept_name'] . '</option> ';
																
						}
					  
					 ?>
					</select></td>
				</tr>
                <tr>
				   <td width="22%" class="_label">Class:</td>
				  <td width="78%">
					<select name="course_list" id="course_list">
					<?php
						 $sql = 'select course_id, course_name from `course`';
						$result = mysql_query($sql) or die (mysql_error($dbcon));
						while ($row = mysql_fetch_array($result)) {
										
								echo ' <option value="' . $row['course_id'] .'" > ';
								echo $row['course_name'] . '</option> ';
																
						}
					  
					 ?>
					</select></td>
				</tr>
            
				<tr>
				   <td width="22%" class="_label">Semester:</td>
				  <td width="78%">
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
				  <td class="_label">Event Date:</td>
				  <td><input type="text" name="edate" size="30" id="edate" placeholder="Select Date">
				  <img id="dateicon_Datepurchased_88" src="javascripts/tools/calendar/calendar.jpg" alt="Datepicker" border="0" class="app_img_button" />
				  &nbsp;<span class="app_field_infotext">[ yyyy/mm/dd ]</span>

			<script type="text/javascript">
			Calendar.setup({
				inputField     :    "edate",     // id of the input field
				ifFormat       :    "%Y/%m/%d",      // format of the input field
				button         :    "dateicon_Datepurchased_88",  // trigger for the calendar (button ID)
				align          :    "Br",           // alignment (defaults to "Bl")
				singleClick    :    true
			});

			</script>
</td>
				</tr>
				  <tr>
					<td class="_label">Ocasion:</td>
					<td><input name="ocasion" type="text" id="ocasion" value="" size="50" onblur="return allLetter();" placeholder="Event Name" />
					</td>
				  </tr>
                  
                  <tr>
					<td height="141" class="_label">Ocasion Detail:</td>
					<td><textarea name="ocasion_detail" id="ocasion_detail" placeholder="Event Detail" onblur="return detail();"></textarea>
                     <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'ocasion_detail' );
            </script>
					</td>
				  </tr>
				  
				  <tr>
					<td></td>
					<td>
					  <input type="submit" name="submit" value="Save" />
				   </td>
				  </tr>
				  	  
				
			</table>	
		</tr>		
</table>
</form>
<?php include("includes/footer.php");?>
<script language="JavaScript" type="text/javascript">
// This function will validate User id.  
 
// This function will validate Name.  
  function allLetter()  
  {   
	  var uname = document.form4.ocasion; 
	  if(uname.value == "") 
	  {
		alert("Name cannot be empty!");  
	  	uname.focus();
		return false;
	  }
	  
	  else
	  {	
			  var letters = /^[a-zA-Z0-9\-\_\(\) ]*$/; 
		  if(uname.value.match(letters))  
		  {  
			  // Focus goes to next field i.e. Address.
			    
			  document.form4.ocasion_detail.focus();  
			  return true;  
		  }  
		  else  
		  {  
			  alert('Event must have alphanumeric characters only');  
			  uname.focus();  
			  return false;  
		  }
	  }
  }
  
   
 
  
 function detail()
 {
	 if(document.form4.ocasion_detail.value == "")
	 {
		alert("Detail Cann't be empty!");	
		return false;
	 }
	 
	return true;
     
	 
			 
 }
  
  
 </script>
