<?php require_once("includes/session.php");?>
<?php require_once("includes/functions.php");?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/dbcon.php");?>
<?php include("includes/header.php");?>
<div id="menubar">
		
<?php include("menus.php");?>
</div> 
		 
<div id="module-name">Edit Room</div>
<?php
	$id = $_GET['id'];
	$query = 'Select * from room where room_id = '.$id;
	$result= mysql_query($query);
	confirm_query($result);
	 while($row = mysql_fetch_array($result))
		{
			$room = $row['room_name'];
			$rm_desc = $row['room_desc'];
			$id = $row['room_id'];
		}


?>
<div id="content">

<form id="form4" name="form4" method="post" action="process_edit_room.php">


<table class="app_table">
	<tr>
		<th> <div class="_title">Details</div></th>
	</tr>
	<tr>
		<td class="form">
			<table width="50%">
				
				<tr>
				   <td class="_label">Room Name</td>
				  <td><input type="text" name="dept" id="dept"  class="txtbox" value="<?php echo $room;?>"/> </td>
				</tr>				
				<td class="_label">Room Description:</td>
					<td><textarea name="deptdesc" cols="40" rows="4" id="deptdesc"><?php echo $rm_desc;?></textarea>
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