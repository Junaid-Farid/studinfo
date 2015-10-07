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

<div id="menubar">
		
<?php include("menus.php");?>
</div>

<div id="module-name">Add File for general notice</div>
<div id="content">

<form action="process_file.php" method="post" enctype="multipart/form-data" name="form4" id="form4">


<table class="app_table">
	<tr>
		<th> <div class="_title">File Details </div></th>
	</tr>
	<tr>
		<td class="form">
			<table width="100%">
            <tr>
				   <td width="23%" class="_label">File Title:</td>
				  <td width="77%"><input name="txt_file_title" type="text" id="txt_file_title" value="" size="50" placeholder="Notice Title"  onblur="return allLetter();"/></td>
				</tr>
                <tr>
				   <td width="23%" class="_label">Description:</td>
				  <td width="77%"><textarea name="txt_file_desc" id="txt_file_desc" placeholder="Notice Detail" onblur="return address();"></textarea>
                  <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'txt_file_desc' );
            </script></td>
				</tr>
            
				<tr>
				   <td width="23%" class="_label">By:</td>
				  <td width="77%">
                  <input name="txt_file_by" type="text" id="txt_file_by" value="" size="50" placeholder="Who Create Notice!" onblur="return byCheck();" />
                  
                  </td>
				</tr>
                <tr>
				   <td width="23%" class="_label">Notice For:</td>
				  <td width="77%">
                  <select name="txt_file_for" id="txt_file_for">
					  <option value="general">General </option>
					  <option value="teacher">Student </option>
                      <option value="teacher">Teacher </option>
                      
					</select>
                  </td>
				</tr>
                  
                  <tr>
					<td width="23%" class="_label">Upload:</td>
					<td ><input type="file" name="txt_file" id="txt_file"  placeholder="Select File"/></td>
				  </tr>
				  
				  <tr>
					<td></td>
					<td>
					  <input type="submit" name="submit" value="Upload" />
				   </td>
				  </tr>
				  	  
				
			</table>	
	</tr>		
</table>
</form>
<?php include("includes/footer.php");?>
<script language="JavaScript" type="text/javascript">
 
// This function will validate Name.  
  function allLetter()  
  {   
	  var uname = document.form4.txt_file_title; 
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
			    
			  document.form4.txt_file_desc.focus();  
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
	  var uemail = document.form4.p_email; 
	  
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
		  	 
			  	
			  document.form4.p_password.focus(); 
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
 
 function byCheck()
 {
	by = document.form4.txt_file_by;
	var letters = /^[a-zA-Z\-\_\(\) ]*$/;
	if(by.value == "")
	{
		alert("By field cann't be empty!");	
		by.focus();
		return false;
	}
	else
	{
		document.form4.txt_file_for.focus();
		return true;
	}
 }
  
  
  
 </script>
