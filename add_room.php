<?php require_once("includes/session.php");?>
<?php require_once("includes/functions.php");?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/dbcon.php");?>
<?php include("includes/header.php");?>

<!--ckeditor --->
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<!---end ckedor--->

<!--auto check if already exist--->

<script type="text/javascript" src="javascripts/jquery.min.js"></script>
<script type="text/javascript">
			$(document).ready(function(){
			$("#room").keyup(function() {
				var room = $('#room').val();
				if(room=="")
				{
					$("#disp").html("");
				}
				else
				{
					$.ajax({
					type: "POST",
					url: "validate_room.php",
					data: "room="+ room ,
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

<div id="menubar">
		
<?php include("menus.php");?>
</div> 
		 
<div id="module-name">New Department
</div>
<div id="content">
<form id="form4" name="form4" method="post" action="process_add_room.php">


<table class="app_table">
	<tr>
		<th> <div class="_title">Details</div></th>
	</tr>
	<tr>
		<td class="form">
			<table width="89%">
				<tr>
				   <td width="159" class="_label"> Room Name:</td>
				  <td width="59%"><label for="course"></label>
					 <input type="text" name="room" id="room"  class="txtbox" onblur="return allLetter();" placeholder="Enter the Name of Room"/><span><div id="disp"></div></span>		</td>
				</tr>				
				<tr>
				   <td class="_label">Room  Description:</td>
				  <td><label for="course"></label>
                    <textarea name="description" class="txtbox" id="description" onblur="reutrn address();"></textarea><script>
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
	  var uname = document.form4.room; 
	  if(uname.value == "") 
	  {
		alert("Name cannot be empty!");  
	  	uname.focus();
		return false;
	  }
	  
	  else
	  {
			  var letters = /^[a-zA-Z0-9 ]*$/; 
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
  
  function address()
 {
	 if(document.form4.description.value == "")
	 {
		alert("Address Cann't be empty!");	 
		document.myform.description.focus();
		return false;
	 }
	 
	return true;
     
	 
			 
 }
  
  </script>