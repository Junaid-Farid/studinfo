<?php require_once("includes/session.php");?>
<?php require_once("includes/functions.php");?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/dbcon.php");?>
<?php include("includes/header.php");?>
<div id="menubar">
		
<?php include("menus.php");?>
</div> 
		 
<?php 
	 $fileID = $_GET['file_id'];
	

	$query = "SELECT * FROM  `files` WHERE file_id = $fileID";
	$result = mysql_query($query);
	confirm_query($result);
	while ($row = mysql_fetch_array($result)){
			$file  = $row['file_name'];
			$file_name   = $row['file_title'] ;
			$file_desc = $row['file_description'];
			$fileDate = $row['file_date'];
			$fileBy     = $row['file_by'];
			$FileFor	= $row['file_for'];
			
			
					
		
	}
	//header for displaying pdf file in browser
	header("Content-type: application/pdf"); 
	//then show with the echo variable name
	
	
	
	

?>
		 
		 
<div id="module-name">Notice Detail</div>
<div id="content">
<form id="form4" name="form4" method="post" action="process_add_stud_sub.php" enctype="multipart/form-data">


<table class="app_table">
	<tr>
		<th> <div class="_title">Details</div></th>
	</tr>
	<tr>
		<td class="form">
		
		<table width="89%">
				<tr>
				   <td width="20%" class="_label"> Notice Title:  </td>
					<td width="64%">
						<?php echo $file_name; ?>
					</td>
				</tr>
				<tr>
				   <td class="_label"> Notice Desc: </td>
					<td>
						<?php echo $file_desc;?>
					</td>
				</tr>
				<tr>
				   <td class="_label"> Date: </td>
					<td>
						<?php  echo $fileDate;	?>
					</td>
				</tr>
				<tr>
				   <td class="_label"> Notice By:</td>
					<td>
						<?php echo $fileBy;	?>
					</td>
				</tr>
				<tr>
				   <td height="42" class="_label"> Notice For:</td>
					<td>
						<?php echo $FileFor; ?>
					</td>
				</tr>
				<tr>
                
                <td><?php echo 'files/'.$file; ?></td>
				   
		  </tr>
				
			
		</table>		
		
				
		</tr>		
</table>
</form>
<?php include("includes/footer.php");?>