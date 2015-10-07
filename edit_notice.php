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
<?php	 
			$id = $_GET['id'];
			$query='Select * from files where file_id ='.$id;
			$result=mysql_query($query);
			confirm_query($result);
			 while($row = mysql_fetch_array($result)){
				$f_id = $row['file_id'];
				$f_title = $row['file_title'];
				$f_name =$row['file_name'];
				$f_type = $row['file_type'];
				$f_size = $row['file_size'];
				$f_desc = $row['file_description'];
				$f_by = $row['file_by'];
				$f_for = $row['file_for'];
							
			}
			
	?>

<div id="module-name">Add File for general notice</div>
<div id="content">

<form action="process_edit_file.php" method="post" enctype="multipart/form-data" name="form4" id="form4">


<table class="app_table">
	<tr>
		<th> <div class="_title">File Details </div></th>
	</tr>
	<tr>
		<td class="form">
			<table width="100%">
            <tr>
				   <td width="23%" class="_label">File Title:</td>
				  <td width="77%"><input name="txt_file_title" type="text" id="txt_file_title" value="<?php echo $f_title; ?>" size="50" /></td>
				</tr>
                <tr>
				   <td width="23%" class="_label">Description:</td>
				  <td width="77%"><textarea name="txt_file_desc" id="txt_file_desc"><?php echo $f_desc; ?></textarea>
                  <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'txt_file_desc' );
            </script></td>
				</tr>
            
				<tr>
				   <td width="23%" class="_label">By:</td>
				  <td width="77%">
                  <input name="txt_file_by" type="text" id="txt_file_by" value="<?php echo $f_by; ?>" size="50" />
                  
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
					<td ><input type="file" name="txt_file" id="txt_file" value="<?php echo $f_name; ?>" /> <?php echo $f_name; ?></td>
				  </tr>
				  
				  <tr>
					<td><input name="notice_id" type="hidden" value="<?php echo $id; ?>" /></td>
					<td>
					  <input type="submit" name="submit" value="Update" />
				   </td>
				  </tr>
				  	  
				
			</table>	
	</tr>		
</table>
</form>
<?php include("includes/footer.php");?>
