<?php require_once("includes/session.php");?>
<?php require_once("includes/functions.php");?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/dbcon.php");?>
<?php include("includes/header.php");?>
<div id="menubar">
		
<?php include("menus.php");?>
</div> 
		 
<?php 
	 $event_id = $_GET['id'];
	

	$query = "SELECT * FROM  `schoolcal` WHERE cal_id = $event_id";
	$result = mysql_query($query);
	confirm_query($result);
	while ($row = mysql_fetch_array($result)){
			$s_id   = $row['cal_id'] ;
			$event_name = $row['event'];
			$event_date = $row['cal_date'];
			$event_des     = $row['event_description'];
			$sem	= $row['semester'];
			$event_dept_id		= $row['cal_dept_id'];
			$event_course_id		= $row['cal_course_id'];			
		
	}

?>
		 
		 
<div id="module-name">Event Detail</div>
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
				   <td width="20%" class="_label"> Event Name:  </td>
					<td width="64%">
						<?php echo $event_name; ?>
					</td>
				</tr>
				<tr>
				   <td class="_label"> Event Date: </td>
					<td>
						<?php echo $event_date;?>
					</td>
				</tr>
				<tr>
				   <td class="_label"> Department: </td>
					<td>
						<?php  
						$sql = 'SELECT dept_name FROM  `department` WHERE dept_id = "'.$event_dept_id.'"';
						$rs = mysql_query($sql);
						confirm_query($rs);
						$rw = mysql_fetch_array($rs);
						//end of department
						echo $rw['dept_name'];
						
						?>
					</td>
				</tr>
				<tr>
				   <td class="_label"> Course:</td>
					<td>
						<?php 
						$sql = 'SELECT course_name FROM  `course` WHERE course_id = "'.$event_course_id.'"';
						$rs = mysql_query($sql);
						confirm_query($rs);
						$rw = mysql_fetch_array($rs);
						//end of department
						echo $rw['course_name'];
						?>
					</td>
				</tr>
				<tr>
				   <td height="42" class="_label"> Semester:</td>
					<td>
						<?php echo $sem; ?>
					</td>
				</tr>
				<tr>
				   <td class="_label">Description Detail: </td>
					<td height="50">
						<?php echo $event_des; ?>
					</td>
		  </tr>
				
			
		</table>		
		
				
		</tr>		
</table>
</form>
<?php include("includes/footer.php");?>