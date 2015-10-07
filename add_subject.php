<?php require_once("includes/session.php");?>
<?php require_once("includes/functions.php");?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/dbcon.php");?>
<?php include("includes/header.php");?>

<script type="text/javascript" src="javascripts/jquery.min.js"></script>
<script type="text/javascript">
			$(document).ready(function(){
			$("#subj_name").keyup(function() {
				var subj_name = $('#subj_name').val();
				if(subj_name=="")
				{
					$("#disp").html("");
				}
				else
				{
					$.ajax({
					type: "POST",
					url: "validate_subject.php",
					data: "subj_name="+ subj_name ,
					success: function(html){
						$("#disp").html(html);
					}
				});
				return false;
				}
				});
			});
			
			
			//for subject name
			$(document).ready(function(){
			$("#subj").keyup(function() {
				var subj = $('#subj').val();
				if(subj=="")
				{
					$("#dispContact").html("");
				}
				else
				{
					$.ajax({
					type: "POST",
					url: "validate_subject.php",
					data: "subj="+ subj ,
					success: function(html){
						$("#dispContact").html(html);
					}
				});
				return false;
				}
				});
			});
			
			
</script>

<!---end auto check----->


<div id="menubar">
		
<?php include("menus.php");?>
 </div> 
		 
<div id="module-name">New Subject
</div>
<div id="content">
<form id="form4" name="form4" method="post" action="process_add_subject.php">


<table class="app_table">
	<tr>
		<th> <div class="_title">Details</div></th>
	</tr>
	<tr>
		<td class="form">
			<table width="89%">
				<tr>
				   <td width="159" class="_label">Course</td>
				  <td><label for="course"></label>
					<select name="course" id="sem">
					 <?php 
						$sql = 'Select * from course';
						$result = mysql_query($sql);
						while($row = mysql_fetch_array($result)){
							echo ' <option value="'. $row['course_id'].'"> ';
							echo $row['course_name'] . ' </option> '; 
						}
					 
					 ?>
					</select></td>
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
					  <td class="_label">Subject Code:</td>
					<td width="379">
					  <label for="subj"></label>
					  <input type="text" name="subj" id="subj"  class="txtbox" onblur="return allLetterNum(9);" placeholder="Enter Subject Code!"/><span><div id="dispContact"></div></span>
					</td>
				</tr>
                
                <tr>
					  <td class="_label">Subject Name: </td>
					<td width="379">
					  <label for="subj_name"></label>
					  <input type="text" name="subj_name" id="subj_name"  class="txtbox" onblur="return allLetter();" placeholder="Enter Subject Name!"/><span><div id="disp"></div></span>
					</td>
				</tr>
				  <tr>
					<td class="_label">Descriptive Title:</td>
					<td>
					  <label for="subjdesc"></label>
					  <input name="subjdesc" type="text" id="subjdesc" size="40" onblur="return description();" placeholder="Enter Description"/>
					</td>
				  </tr>
				  <tr>
					<td class="_label">Credit Hours:</td>
					<td>
					  <label for="subjunit"></label>
					  <input   type="text" name="subjunit" id="subjunit" onblur="return creditHour(3,4);" placeholder="Enter Credit Hour of That Subject!"/>
					</td>
				  </tr>
				 <tr>
					<td class="_label">Pre-Requisites:</td>
					<td>
					  <label for="subjunit"></label>
					  <select name="pre" id="pre">
					    <option value="None">None</option>
					 <?php 
						$sql = 'Select * from subjects';
						$result = mysql_query($sql);
						while($row = mysql_fetch_array($result)){
							echo ' <option value="'. $row['subject'].'"> ';
							echo $row['subject'] . ' </option> '; 
						}
					 
					 ?>
					</select>
					</td>
				  </tr>
				  <tr>
					<td></td>
					<td>
					  <input type="submit" name="submit" id="Save_Subject" value="Save" />
				   </td>
				  </tr>
				  	  
				
			</table>	
		</tr>		
</table>
</form>
<?php include("includes/footer.php");?>
<script type="text/javascript">

// This function will validate Name.  
  function allLetter()  
  {   
	  var uname = document.form4.subj_name; 
	  if(uname.value == "") 
	  {
		alert("Subject Name cannot be empty!");  
	  	uname.focus();
		return false;
	  }
	  
	  else
	  {
			  var letters = /^[a-zA-Z ]*$/; 
		  if(uname.value.match(letters))  
		  {  
			  // Focus goes to next field i.e. Address.
			    
			  document.form4.subjdesc.focus();  
			  return true;  
		  }  
		  else  
		  {  
			  alert('Subject Name must have alphabet characters only');  
			  uname.focus();  
			  return false;  
		  }
	  }
  }
  
  function allLetterNum(mx)  
  {   
	  var uname = document.form4.subj; 
	  var len = uname.value.length;
	  if(uname.value == "") 
	  {
		alert("Subj Code cannot be empty!");  
	  	uname.focus();
		return false;
	  }
	  else if(len != mx)
	  {
		alert("Subj Code contain " + mx + " character! ");  
	  	uname.focus();
		return false;	  
	  }
	  
	  else
	  {
		  var letters = /^([a-zA-Z0-9\s\_\-]+)$/; 
		  if(uname.value.match(letters))  
		  {  
			  // Focus goes to next field i.e. Address.
			    
			  document.form4.subj_name.focus();  
			  return true;  
		  }  
		  else  
		  {  
			  alert('Subject Code must have alphanumeric characters only');  
			  uname.focus();  
			  return false;  
		  }
	  }
  }
  

//function to check the empty field

	function checkEmtpy(txt)
	{
		var name = document.form4.txt;
		if(name.value == "")	
		{
			alert(name + " cannot be empty!");	
			name.focus();
			return false;
		}
		return true;
	}
	
	
	// credit hour
	function creditHour(mx,my)  
  {  
  		
		
	  var uid = document.form4.subjunit; 
	  var uid_len = uid.value.length;  
	  if (uid_len == 0 || uid_len >= my || uid_len < mx)  
	  {  
		  alert("Credit Hour should not be empty / length be between "+mx+" to "+my);  
		  uid.focus();  
		  return false;  
	  }  
		  //ajax call to php check
		  
		  
	else{  
		  // Focus goes to next field i.e. Password.
		 var letters = /^([0-9\-]+)$/; 
		  if(uid.value.match(letters))  
		  {  
			  // Focus goes to next field i.e. Address.
			    
			  document.form4.pre.focus();  
			  return true;  
		  }  
		  else  
		  {  
			  alert('Credit Hour must have numeric only');  
			  uname.focus();  
			  return false;  
		  }
		    
		}
  }
  
function description()
{
	var des = document.form4.subjdesc;
	letters = /^([a-zA-Z0-9\s\_\-]+)$/;
	if(des.value == "")
	{
		alert("Descriptive title cannot be empty!");	
		des.focus();
	}
	else if(des.value.match(letters))
	{
		return true;
	}
	else
	{
		alert("Description should contain alphanumeric spaces, dashes etc");	
		des.focus();
		return false;
	}
	
	
		
}
</script>