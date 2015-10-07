<?php require_once("includes/session.php");?>
<?php require_once("includes/functions.php");?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/dbcon.php");?>
<?php include("includes/header.php");?>
<div id="menubar">
		
<?php include("menus.php");?>
</div> 
		 
<?php 
	 $fileID = $_GET['id'];
	

	$query = "SELECT * FROM  `files` WHERE file_id = $fileID";
	$result = mysql_query($query);
	confirm_query($result);
	while ($row = mysql_fetch_array($result)){
			$f_name  = $row['file_name'];
			$f_id   = $row['file_id'] ;
			$f_title = $row['file_title'];
			$f_date = $row['file_date'];
			$f_for     = $row['file_for'];
			$f_by	= $row['file_by'];
			$f_detail		= $row['file_description'];			
		
	}

?>
		 
		 
<div id="module-name">Notice Detail</div>
<div id="content">
<form id="form4" name="form4" method="post" action="process_add_stud_sub.php">


<table class="app_table">
	<tr>
		<th> <div class="_title">Details</div></th>
	</tr>
	<tr>
		<td class="form">
		
		<table width="89%">
				<tr>
				   <td width="20%" class="_label"> Title:  </td>
					<td width="64%">
						<?php echo $f_title; ?>
					</td>
				</tr>
				<tr>
				   <td class="_label"> Notice Date: </td>
					<td>
						<?php echo $f_date;?>
					</td>
				</tr>
				<tr>
				   <td class="_label"> Notice For: </td>
					<td>
						<?php  echo $f_for; ?>
					</td>
				</tr>
				<tr>
				   <td class="_label"> Notice By:</td>
					<td>
						<?php echo $f_by; ?>
					</td>
				</tr>
				
				<tr>
				   <td class="_label">Notice Description: </td>
					<td height="50">
						<?php echo $f_detail; ?>
					</td>
		  </tr>
          <hr/>
          <tr>
            <td colspan="2" align="center" style="color:#0033FF"><strong>Download Notice</strong></td>
          </tr>
				
			<tr>
            <td colspan="2" align="center"><a href="files/<?php echo $f_name; ?>" title="Download"><img src="img_icon\Download.ico" width="30" height="30"/></a></td>
            </tr>
		</table>		
		
				
		</tr>		
</table>
</form>
<?php include("includes/footer.php");?>