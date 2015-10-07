<?php require_once("includes/session.php");?>
<?php require_once("includes/functions.php");?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/dbcon.php");?>
<?php include("includes/header.php");?>

<!--auto check if already exist--->

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
					url: "validate_department.php",
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

<!---end auto check----->

<!--ckeditor --->
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<!---end ckedor--->
<div id="menubar">
		
<?php include("menus.php");?>
</div> 
		 
<div id="module-name">New Department
</div>
<div id="content">
<form id="form4" name="form4" method="post" action="process_add_department.php">


<table class="app_table">
	<tr>
		<th> <div class="_title">Details</div></th>
	</tr>
	<tr>
		<td class="form">
			<table width="89%">
				<tr>
				   <td width="159" class="_label">Department  Name:</td>
				  <td width="59%"><label for="course"></label>
					 <input type="text" name="course" id="course"  class="txtbox" onblur="return allLetter() ;" placeholder="Enter Department!"/><span><div id="disp"></div></span>
					</td>
				</tr>				
				<tr>
				   <td class="_label">Department Description:</td>
				  <td><label for="course"></label>
                    <textarea name="description" rows="3" cols="47" class="txtbox" id="description"></textarea><script>
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
			  var letters = /^[a-zA-Z ]*$/; 
		  if(uname.value.match(letters))  
		  {  
			  // Focus goes to next field i.e. Address.
			    
			  document.form4.description.focus();  
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