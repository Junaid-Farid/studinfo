<?php require_once("includes/session.php");?>
<?php require_once("includes/functions.php");?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/dbcon.php");?>
<?php include("includes/header.php");?>

<!--ckeditor --->
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<!---end ckedor--->

<script type="text/javascript" src="javascripts/jquery.min.js"></script>
<script type="text/javascript">
			$(document).ready(function(){
			$("#course").keyup(function() {
				var course = $('#course').val();
				if(course=="")
				{
					$("#disp").html("");
				}
				else
				{
					$.ajax({
					type: "POST",
					url: "validate_course.php",
					data: "course="+ course ,
					success: function(html){
						$("#disp").html(html);
					}
				});
				return false;
				}
				});
			});
</script>

<div id="menubar">
		
<?php include("menus.php");?>
</div> 
		 
<div id="module-name">New Course
</div>
<div id="content">
<form id="form4" name="form4" method="post" action="process_add_course.php">


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
				   <td width="159" class="_label">Program  Name:</td>
				  <td width="71%"><label for="course"></label>
					 <input type="text" name="course" id="course"  class="txtbox" onblur="return allLetter();" placeholder="Enter Your Program Name!"/><span><div id="disp"></div></span>
					</td>
				</tr>				
				<tr>
				   <td class="_label">Description:</td>
				  <td><label for="course"></label>
                    <textarea name="description" class="txtbox" id="description" onblur="return description();" placeholder="Enter Program Description"></textarea><script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'description' );
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
<script type="text/javascript">

function description()
{
	des = document.form4.description;
	if(des.value == "")
	{
		alert("Description cannot be empty!");	
		des.focus();
		return false;
	}
	return true;
	
}

// This function will validate Name.  
  function allLetter()  
  {   
	  var uname = document.form4.course; 
	  if(uname.value == "") 
	  {
		alert("Name cannot be empty!");  
	  	uname.focus();
		return false;
	  }
	  
	  else
	  {
			  var letters = /^[a-zA-Z\(\)  ]*$/; 
		  if(uname.value.match(letters))  
		  {  
			  // Focus goes to next field i.e. Address.
			    
			  document.myform.description.focus();  
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
  
</script>