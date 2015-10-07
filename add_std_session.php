<?php require_once("includes/session.php");?>
<?php require_once("includes/functions.php");?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/dbcon.php");?>
<?php include("includes/header.php");?>

<link rel="stylesheet" type="text/css" href="javascripts/tools/calendar/css/calendar-win2k-cold-1.css" /> 
<link rel="stylesheet" type="text/css" href="javascripts/tools/monthpicker/css/monthpicker.css" /> 
<link rel="stylesheet" type="text/css" href="javascripts/tools/popup/popup_win.css" /> 
<link rel="stylesheet" type="text/css" href="modules/mod_custommod/css/custommod.css" /> 

<link href="javascripts/customAlert.css" rel="stylesheet">
<script src="javascripts/customAlert.js" language="javascript"></script>



<script type="text/javascript" language="javascript" src="javascripts/application.js"></script> 
<script type="text/javascript" language="javascript" src="javascripts/tools/calendar/calendar.js"></script> 
<script type="text/javascript" language="javascript" src="javascripts/tools/calendar/lang/calendar-en.js"></script> 
<script type="text/javascript" language="javascript" src="javascripts/tools/calendar/calendar-setup.js"></script> 
<script type="text/javascript" language="javascript" src="javascripts/tools/monthpicker/monthpicker.js"></script> 
<div id="menubar">

</script>

<!--auto check if already exist--->

<script type="text/javascript" src="javascripts/jquery.min.js"></script>
<script type="text/javascript">
			$(document).ready(function(){
			$("#idno").keyup(function() {
				var idno = $('#idno').val();
				if(idno=="")
				{
					$("#disp").html("");
				}
				else
				{
					$.ajax({
					type: "POST",
					url: "validate_std_session.php",
					data: "idno="+ idno ,
					success: function(html){
						$("#disp").html(html);
					}
				});
				return false;
				}
				});
			});
			
			//for cantact
			$(document).ready(function(){
			$("#sday").keyup(function() {
				var sday = $('#sday').val();
				if(sday=="")
				{
					$("#dispContact").html("");
				}
				else
				{
					$.ajax({
					type: "POST",
					url: "validate_std_session.php",
					data: "sday="+ sday ,
					success: function(html){
						$("#dispContact").html(html);
					}
				});
				return false;
				}
				});
			});
			
			//for email
			
			$(document).ready(function(){
			$("#eday").keyup(function() {
				var eday = $('#eday').val();
				if(eday=="")
				{
					$("#dispEmail").html("");
				}
				else
				{
					$.ajax({
					type: "POST",
					url: "validate_std_session.php",
					data: "eday="+ eday ,
					success: function(html){
						$("#dispEmail").html(html);
					}
				});
				return false;
				}
				});
			});
			
			
</script>

<!---end auto check----->


	<?php include("menus.php");?>
		  </div>
	 
<div id="module-name">New Session
</div>
<div id="content">

	
				
<form  method="post" action="process_add_std_session.php">

  <table class="app_table">
	<tr>
		<th> <div class="_title">Details</div></th>
	</tr>
	<tr>
		<td class="form">
			<table width="100%">
				
	<tr>
				  <td class="_label">Session ID.:</td>
				  <td><label for="idno"></label>
					<input type="text" name="idno" size="30" id="idno" class="app_txtbox"  onblur="return userid_validation(2,5);" placeholder="Enter Session ID"><span><div id="disp"></div></span>
				  </td>
				</tr>
				
				<tr>
				  <td width="116" class="_label">Session Start Date:</td>
				  <td width="248"><input type="text" name="sday" size="30" id="sday" placeholder="[ yyyy/mm/dd ]">
				  <img id="dateicon_Datepurchased_88" src="javascripts/tools/calendar/calendar.jpg" alt="Datepicker" border="0" class="app_img_button" /><span><div id="dispContact"></div></span>
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
				  <td><input type="text" name="eday" size="30" id="eday" placeholder="[ yyyy/mm/dd ]">
				  <img id="dateicon_Datepurchased_89" src="javascripts/tools/calendar/calendar.jpg" alt="Datepicker" border="0" class="app_img_button" /><span><div id="dispEmail"></div></span>
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
				  </td><td width="51"></td>
				</tr>
				
						</table>
			</td>
		</tr>	
   </table>
    
    
</form>
<?php include("includes/footer.php");?>
<script language="JavaScript" type="text/javascript">
// This function will validate User id.  
  function userid_validation(mx,my)  
  {  
  		
		
	  var uid = document.myform.idno; 
	  var uid_len = uid.value.length;  
	  if (uid_len == 0 || uid_len >= my || uid_len < mx)  
	  {  
		  alert("User Id should not be empty / length be between "+mx+" to "+my);  
		  uid.focus();  
		  return false;  
	  }  
		  //ajax call to php check
		  
		  
		  
		  // Focus goes to next field i.e. Password.
		
		    
		  document.myform.s_fullname.focus();  
		  return true;  
  } 
  </script>