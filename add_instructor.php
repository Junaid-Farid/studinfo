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

<script type="text/javascript" src="javascripts/gen_validatorv4.js"></script>

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
					url: "validation.php",
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
			$("#s_contact").keyup(function() {
				var s_contact = $('#s_contact').val();
				if(s_contact=="")
				{
					$("#dispContact").html("");
				}
				else
				{
					$.ajax({
					type: "POST",
					url: "validation.php",
					data: "s_contact="+ s_contact ,
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
			$("#p_email").keyup(function() {
				var p_email = $('#p_email').val();
				if(p_email=="")
				{
					$("#dispEmail").html("");
				}
				else
				{
					$.ajax({
					type: "POST",
					url: "validation.php",
					data: "p_email="+ p_email ,
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

</script>
	<?php include("menus.php");?>
		  </div>
	 
<div id="module-name">New Instructor
</div>
<div id="content">

	
				
<form  method="post" action="process_add_instructor.php" name="myform">

  <table class="app_table">
	<tr>
		<th> <div class="_title">Details</div></th>
	</tr>
	<tr>
		<td class="form">
			<table width="89%">
            <tr>
				   <td width="159" class="_label">Department:</td>
				  <td width="71%"><label for="course"></label>
					 <select name="dept_list" id="dept_list">
					  <?php
						 $sql = 'select dept_id, dept_name from `department`';
						$result = mysql_query($sql) or die (mysql_error($dbcon));
						while ($row = mysql_fetch_array($result)) {
										
								echo ' <option value="' . $row['dept_id'] .'" > ';
								echo $row['dept_name'] . '</option> ';
																
						}
					  
					 ?>
					</select>
					</td>
				</tr>
				<tr>
				  <td class="_label">Instruct Id No.:</td>
				  <td><label for="idno"></label>
					<input type="text" name="idno" size="30" id="idno" class="app_txtbox" placeholder="ID NO."  onblur="return userid_validation(2,5);"><span><div id="disp"></div></span>
				  </td>
				</tr>
	
				<tr>
				  <td class="_label" width="159">Name:    </td>
				  <td width="314"><input type="text" name="s_fullname" size="30" id="s_fullname" placeholder="Enter Your Name" class="app_txtbox" onblur="return allLetter();">
				  </td>
				</tr>
	
				<tr>
				  <td class="_label">Address:</td>
				  <td><textarea placeholder="Address" name="s_address" id="s_address" onblur="return address();"></textarea > <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 's_address' );
				
            </script>
            </td>
				</tr>
				
				
				
				<tr>
				  <td class="_label">Sex:</td>
				  <td><input type="radio" checked="checked" name="sex" id="sex" value="Male"><label class="radioLable" for="sex">Male  
					<input type="radio" name="sex" id="sex2" value="Female"><label class="radioLable" for="sex2">Female</label></td>
				</tr>
				<tr>
				  <td class="_label">Contact No:</td>
				  <td><label for="s_contact"></label>
				  <input name="s_contact" type="text" id="s_contact" size="30" placeholder="Enter Your Contact No" onblur="return phonenumber();" ><span><div id="dispContact"></div></span></td>
				</tr>
				
				
		 		
				
				
				
				
				<tr>
				  <td class="_label">Email:</td>
				  <td><label for="p_address"></label>
				  <input name="p_email" type="text" id="p_email" size="30" placeholder="Enter Your Email" onblur="return ValidateEmail()"><span><div id="dispEmail"></div></span></td>
				</tr>
				  <tr>
				  <td class="_label">Password:</td>
				  <td><label for="p_address"></label>
				  <input name="p_password" type="password" id="p_password" size="30" placeholder="Enter Your Password" onblur="return passid_validation(5, 12);"></td>
				</tr>
				<tr>
				  <td height="41">
				  </td>
				  <td><input type="reset" name="clear" value = "clear entry"  />
					<input type="submit" name="submit" value="Save data" />
				  </td><td width="40"></td>
				</tr>
				
						</table>
			</td>
		</tr>	
   </table>
    
    
</form>
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
// This function will validate Name.  
  function allLetter()  
  {   
	  var uname = document.myform.s_fullname; 
	  if(uname.value == "") 
	  {
		alert("Name cannot be empty!");  
	  	uname.focus();
		return false;
	  }
	  
	  else
	  {	
			  var letters = /^[a-zA-Z ]*$/; 
		  if(uname.value.match(letters))  
		  {  
			  // Focus goes to next field i.e. Address.
			    
			  document.myform.s_address.focus();  
			  return true;  
		  }  
		  else  
		  {  
			  alert('Username must have alphabet characters only');  
			  uname.focus();  
			  return false;  
		  }
	  }
  }
  
   // This function will validate Email.  
  function ValidateEmail()  
  {  
	  var uemail = document.myform.p_email; 
	  
	  if(uemail.value=="")
	  {
		alert("Email cann't be empty!");  
		uemail.focus();
		return false;
	  }
	   
	  else
	  {
		  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
		  if(uemail.value.match(mailformat))  
		  {  
		  	 
			  	
			  document.myform.p_password.focus(); 
			  return true;  
		  }  
		  else  
		  {  
			  alert("You have entered an invalid email address!");  
			  uemail.focus();  
			  return false;  
		  } 
	  }
  }  
  
  // This function will validate Password.  
  function passid_validation(mx,my)  
  {  
	  var passid = document.myform.p_password;  
	  var passid_len = passid.value.length;  
	  if (passid_len == 0 ||passid_len >= my || passid_len < mx)  
	  {  
		  alert("Password should not be empty / length be between "+mx+" to "+my);  
		  passid.focus();  
		  return false;  
	  }  
		  // Focus goes to next field i.e. Name.  
		  //document.document.myform.p_password.focus();  
		  return true;  
  }  
  
  
  function phonenumber()  
  {  
	  var uemail = document.myform.s_contact;
	  if(uemail.value=="")
	  {
		alert("Contact cann't be empty!");  
		uemail.focus();
		return false;
	  }
	  else
	  {
		  var mailformat = /^([0-9]{11})$/i;  
		  if(uemail.value.match(mailformat))  
		  {  
		  
		 	
			  document.myform.s_email.focus(); 
			  return true;  
		  }  
		  else  
		  {  
			  alert("You have entered a number only invalid Contact!");  
			  uemail.focus();  
			  return false;  
		  }  
	  }
  } 
  
 function address()
 {
	 if(document.myform.s_address.value == "")
	 {
		alert("Address Cann't be empty!");	 
		document.myform.s_address.focus();
		return false;
	 }
	 
	return true;
     
	 
			 
 }
  
  
 </script>

<?php include("includes/footer.php");?>