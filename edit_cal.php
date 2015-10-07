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

<div id="module-name">Edit School Calendar
</div>
<div id="content">

							<?php 
								$id = $_GET['id'];
								$sql = 'Select * from schoolcal where cal_id ='. $id;
								$result = mysql_query($sql);
								confirm_query($result);
								while ($row = mysql_fetch_array($result)){
									
									$sem 	= $row['semester'];
									$date	= $row['cal_date'];
									$event	= $row['event'];
									$id		= $row['cal_id'];
								}

							?>
	
<form id="form4" name="form4" method="post" action="process_edit_cal.php?id=<?php echo $id;?>">

<table class="app_table" width="89%">
	<tr>
		<th> <div class="_title">Details</div></th>
	</tr>
	<tr>
		<td class="form">
			<table width="89%">
				<tr>
				
				   <td class="_label">Semester</td>
				  <td>
					<select name="sem" id="sem">
					  <option value="First">First </option>
					  <option value="Second ">Second </option>
					  <option value="Summer">Summer</option>
					</select></td>
				</tr>
				<tr>
				  <td class="_label">Event Date:</td>
				  <td><input type="text" name="edate" size="30" id="edate" value="<?php echo $date;?>">
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
					<td><textarea name="ocasion"  id="ocasion"><?php echo $event;?>
                   
                    </textarea>
                     <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'ocasion' );
            </script>
                    
					</td>
				  </tr>
				  
				  <tr>
					
					<td>
					<!--<input type="hidden" name="id" value="">-->
					</td>
					<td>					
					 <input type="submit" name="submit" value="Save" />
				   </td>
				  </tr>
				  	  
				
			</table>	
		</tr>		
</table>
</form>
<?php include("includes/footer.php");?>
