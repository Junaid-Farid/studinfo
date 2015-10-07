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
		 
<div id="module-name">Edit Session</div>
<?php
	$id = $_GET['id'];
	$query = 'Select * from std_session where session_id = '.$id;
	$result= mysql_query($query);
	confirm_query($result);
	 while($row = mysql_fetch_array($result))
		{
			$id = $row['session_id'];
			$desc = $row['std_session_start'];
			$dept = $row['std_session_end'];
		}


?>
<div id="content">

<form id="form4" name="form4" method="post" action="process_edit_std_session.php">



    <table class="app_table">
	<tr>
		<th> <div class="_title">Details</div></th>
	</tr>
	<tr>
		<td class="form">
			<table width="100%">
				
	<tr>
				  <td class="_label">Session ID.:</td>
				  <td><label for="idno">
					<input type="text" name="idno" size="30" id="idno" class="app_txtbox" value="<?php echo $id; ?>" >
				  </label></td>
				</tr>
				
				<tr>
				  <td width="116" class="_label">Session Start Date:</td>
				  <td width="248"><input type="text" name="sday" size="30" id="sday" placeholder="[ yyyy/mm/dd ]" value="<?php echo $desc; ?>">
				  <img id="dateicon_Datepurchased_88" src="javascripts/tools/calendar/calendar.jpg" alt="Datepicker" border="0" class="app_img_button" />
				 <script type="text/javascript">
			Calendar.setup({
				inputField     :    "sday",     // id of the input field
				ifFormat       :    "%Y/%m/%d",      // format of the input field
				button         :    "dateicon_Datepurchased_88",  // trigger for the calendar (button ID)
				align          :    "Br",           // alignment (defaults to "Bl")
				singleClick    :    true
			});

			</script>
</td>
				</tr>
                <tr>
				  <td class="_label">Session End  Date:</td>
				  <td><input type="text" name="eday" size="30" id="eday" placeholder="[ yyyy/mm/dd ]" value="<?php echo $dept; ?>">
				  <img id="dateicon_Datepurchased_89" src="javascripts/tools/calendar/calendar.jpg" alt="Datepicker" border="0" class="app_img_button" />
				  &nbsp;<span class="app_field_infotext"></span>

			<script type="text/javascript">
			Calendar.setup({
				inputField     :    "eday",     // id of the input field
				ifFormat       :    "%Y/%m/%d",      // format of the input field
				button         :    "dateicon_Datepurchased_89",  // trigger for the calendar (button ID)
				align          :    "Br",           // alignment (defaults to "Bl")
				singleClick    :    true
			});

			</script>
</td>
				</tr>
				<tr>
				  
				</tr>
				<tr>
				  <td height="41">
				  </td>
				  <td><input type="reset" name="clear" value = "clear entry"  />
					<input type="submit" name="submit" value="Save data" />
				  
				</tr>
				
						</table>
			</td>
		</tr>	
   </table>
		
     </tr>
				  					
				  <tr>
					<td>
						<input type="hidden" name="id" value="<?php echo $id;?>">
					</td>
					
				  </tr>
				  
				
			</table>	
		
</form>
<?php include("includes/footer.php");?>