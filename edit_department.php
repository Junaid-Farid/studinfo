<?php require_once("includes/session.php");?>
<?php require_once("includes/functions.php");?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/dbcon.php");?>
<?php include("includes/header.php");?>

<!--ckeditor --->
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<!---end ckedor--->

<div id="menubar">
		
<?php include("menus.php");?>
</div> 
		 
<div id="module-name">Edit Department</div>
<?php
	$id = $_GET['id'];
	$query = 'Select * from department where dept_id = '.$id;
	$result= mysql_query($query);
	confirm_query($result);
	 while($row = mysql_fetch_array($result))
		{
			$dept = $row['dept_name'];
			$desc = $row['dept_description'];
			$id = $row['dept_id'];
		}


?>
<div id="content">

<form id="form4" name="form4" method="post" action="process_edit_department.php">


<table class="app_table">
	<tr>
		<th> <div class="_title">Details</div></th>
	</tr>
	<tr>
		<td class="form">
			<table width="89%">
				
				<tr>
				   <td class="_label">Department:</td>
				  <td><input type="text" name="dept" id="dept"  class="txtbox" value="<?php echo $dept;?>"/> </td>
				</tr>				
				<td class="_label">Description:</td>
					<td><textarea name="deptdesc" cols="40" rows="4" id="deptdesc"><?php echo $desc;?></textarea>
                    <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'deptdesc' );
            </script>
					</td>
				  </tr>
				  					</td>
				  <tr>
					<td>
						<input type="hidden" name="id" value="<?php echo $id;?>">
					</td>
					<td>
					  <input type="submit" name="submit" id="Save_Subject" value="Save" />
				   </td>
				  </tr>
				  
				
			</table>	
		</tr>		
</table>
</form>
<?php include("includes/footer.php");?>