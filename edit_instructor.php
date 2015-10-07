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
<script type="text/javascript">
CKEDITOR.editorConfig = function( config ) {
	config.language = 'es';
	config.uiColor = '#F7B42C';
	config.height = 100;
	config.toolbarCanCollapse = true;
};
</script>
 
<div id="menubar">
		
<?php include("menus.php");?>
</div> 
		 
<div id="module-name">Edit Instructor
</div>
<div id="content">

	<?php	 
			$id = $_GET['id'];
			$query='Select * from instructor where instruc_id ='.$id;
			$result=mysql_query($query);
			confirm_query($result);
			 while($row = mysql_fetch_array($result)){
				$people_id = $row['instruc_id'];
				$name =$row['name'];
				$s_address = $row['address'];
				$sex = $row['sex'];
				$scontact = $row['instruct_contact'];
				$instrauct_email=$row['email_add'];
							
			}
	?>
				
<form  method="post" action="process_edit_instructor.php">

  <table class="app_table">
	<tr>
		<th> <div class="_title">Details</div></th>
	</tr>
	<tr>
		<td class="form">
			<table width="93%">
				<tr>
				  <td class="_label">Id No.:</td>
				  <td><label for="idno">
					<input type="text" name="idno" size="30" id="idno" class="app_txtbox" value="<?php  echo $people_id;?>">
				  </label></td>
				</tr>
	
				<tr>
				  <td class="_label" width="96">Name:    </td>
				  <td width="209"><input type="text" name="s_fullname" size="30" id="s_fullname" value="<?php echo $name; ?>" />
				  </td>
				</tr>
	
				<tr>
				  <td class="_label">Address:</td>
				  <td><textarea name="s_address" cols="30" rows="4" id="s_address"><?php echo $s_address; ?></textarea>
                  <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 's_address' );
            </script>
                  </td>
				</tr>
				
				<tr>
				  <td class="_label">Sex:</td>
				  <td><input type="radio" name="sex" id="sex" value="Male"><label for="sex">Male  
					<input type="radio" name="sex" id="sex2" value="Female">Female</label></td>
				</tr>
				<tr>
				  <td class="_label">Contact:</td>
				  <td><label for="instruct_email"></label>
				  <input name="s_contact" type="text" id="s_contact" size="30" value="<?php echo $scontact; ?>"></td>
				</tr>
                
                <tr>
				  <td class="_label">Email:</td>
				  <td><label for="instruct_email"></label>
				  <input name="instruct_email" type="text" id="instruct_email" size="30" value="<?php echo $instrauct_email; ?>"></td>
				</tr>
				
				
				<tr>
	<!--			  <td class="_label">Department:</td>
				  <td><label for="dept"></label>
					<select name="dept" id="dept">
					  <?php 
						/* $sql ='Select * from department';
						$result = mysql_query($sql);
						while ($row = mysql_fetch_array($result)){
												
								echo '<option value="'. $row['dept_id'].'">';
								echo  $row['dept_name'] . '</option>';
						
						
						}
				   */
					  ?>
				  </select></td>
				</tr>
	-->			
				
				
				
				
				  
				<tr>
				  <td height="41"><input type="hidden" name="key" value=<?php echo $people_id;?>>
				  </td>
				  <td><input type="reset" name="clear" value = "clear entry"  />
					<input type="submit" name="submit" value="Save data" />
				  </td><td width="80"></td>
				</tr>
				
						</table>
			</td>
		</tr>	
   </table>
    
    
</form>
<?php include("includes/footer.php");?>