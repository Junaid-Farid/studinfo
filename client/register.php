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
					url: "validate_student.php",
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
					url: "validate_student.php",
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
			$("#s_email").keyup(function() {
				var s_email = $('#s_email').val();
				if(s_email=="")
				{
					$("#dispEmail").html("");
				}
				else
				{
					$.ajax({
					type: "POST",
					url: "validate_student.php",
					data: "s_email="+ s_email ,
					success: function(html){
						$("#dispEmail").html(html);
					}
				});
				return false;
				}
				});
			});
			
			//for gaurdian email
			$(document).ready(function(){
			$("#s_g_email").keyup(function() {
				var s_g_email = $('#s_g_email').val();
				if(s_g_email=="")
				{
					$("#dispEmailG").html("");
				}
				else
				{
					$.ajax({
					type: "POST",
					url: "validate_student.php",
					data: "s_g_email="+ s_g_email ,
					success: function(html){
						$("#dispEmailG").html(html);
					}
				});
				return false;
				}
				});
			});
			
</script> 
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
<form  method="post" action="process_register.php" name="myform" id="myform">

  <table class="app_table" width="570px;">
	
	<tr>
		<td class="form">
			<table width="100%">
				<tr>
				  <td class="_label">Id No. :</td>
				  <td><p>
				    <input type="text" name="idno" size="30" id="idno" class="app_txtbox"  placeholder="Registration NO" onblur="return userid_validation(5,10);">
				  </p>
                  <span><div id="disp"></div></span>
			      <p>&nbsp; </p></td>
				</tr>
                
	
				<tr>
				  <td class="_label" width="178">Name:    </td>
				  <td width="347"><p>
				    <input type="text" name="s_fullname" size="30" id="s_fullname" class="app_txtbox" placeholder="Name" onblur="return allLetter();">
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
				    <input type="text" name="bplace" size="30" id="bplace" placeholder="Birth Place"  onblur="return allLetter();">
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
				    <input name="s_contact" type="text" id="s_contact" size="30"  placeholder="Your Contact" onblur="return phonenumber();">
				  </p><span><div id="dispContact"></div></span>
			      <p>&nbsp; </p></td>
				</tr>
				<tr>
                <tr>
				  <td class="_label">Email:</td>
				  <td><p>
				    <label for="s_email"></label>
				    <input type="text" name="s_email" size="30" id="s_email" placeholder="Your Email" onblur="return ValidateEmail(this);">
				  </p><span><div id="dispEmail"></div></span>
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
				    <input name="parents" type="text" id="parents" size="30"  placeholder="Parents/Guardian Name" onblur="return allLetter();">
				  </p>
			      <p>&nbsp; </p></td>
		      </tr>
				<tr>
				  <td class="_label">Parents/Guardian Contact:</td>
				  <td><p>
				    <label for="p_address"></label>
				    <input name="p_contacts" type="text" id="p_contacts" size="30" placeholder="Parents/Guardian Contact"  onblur="return phonenumber();">
				  </p>
			      <p>&nbsp; </p></td>
				</tr>
                 <td class="_label">Guardian Email:</td>
				  <td><p>
				    <label for="s_g_email"></label>
				    <input type="text" name="s_g_email" size="30" id="s_g_email"  placeholder="Parents/Guardian Email"  onblur="return ValidateEmail(this);">
				  </p><span><div id="dispEmailG"></div></span>
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
  function ValidateEmail(txt)  
  {  
	  var uemail = document.myform.txt; 
	  
	  if(uemail.value == "")
	  {
		alert("Email cann't be empty!");  
		txt.focus();
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
 
 function age()  
  {  
	  var uemail = document.myform.s_age;
	  if(uemail.value=="")
	  {
		alert("Age cann't be empty!");  
		uemail.focus();
		return false;
	  }
	  else
	  {
		  var mailformat = /^([0-9]{2})$/i;  
		  if(uemail.value.match(mailformat))  
		  {  
		  
		 	
			  document.myform.bday.focus(); 
			  return true;  
		  }  
		  else  
		  {  
			  alert("You have entered a number only invalid Age!");  
			  uemail.focus();  
			  return false;  
		  }  
	  }
  } 
  
  
 </script>