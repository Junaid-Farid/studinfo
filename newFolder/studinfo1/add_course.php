<?php require_once("includes/session.php");?>
<?php require_once("includes/functions.php");?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/dbcon.php");?>
<?php include("includes/header.php");?>
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
			<table width="50%">
				<tr>
				   <td class="_label">Course  Name</td>
				  <td><label for="course"></label>
					 <input type="text" name="course" id="course"  class="txtbox"/>
					</td>
				</tr>				
				<tr>
				   <td class="_label">Description</td>
				  <td><label for="course"></label>
                    <textarea name="description" cols="30" rows="4" class="txtbox" id="description"></textarea>
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