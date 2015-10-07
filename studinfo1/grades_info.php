<?php require_once("includes/session.php");?>
<?php require_once("includes/functions.php");?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/dbcon.php");?>
<?php include("includes/header.php");?>
<div id="menubar">
		<?php include("menus.php");?>
		</div> 
		 
<?php 
	 @$_GET['s_id'].'<br/>';
	

	$sql = 'Select * from `stud_subj_course_grades` where grades_id ='.$_GET['id']; 
	$result = mysql_query($sql);
	confirm_query($result);
	while ($row = mysql_fetch_array($result)){
			$s_id   = $row['s_id'] ;
			$s_name = $row['s_name'];
			$course = $row['course_name'];
			$yr     = $row['yr'];
			$sem	= $row['semester'];
			$sy		= $row['sy'];
			$subj	= $row['subject'];
			$grade	= $row['grades_id'];
		
	}

?>
		 
		 
<div id="module-name">Add Grades to this Subjects
</div>
<div id="content">
<form id="form4" name="form4" method="post" action="process_grade.php">


<table class="app_table">
	<tr>
		<th> <div class="_title">Details</div></th>
	</tr>
	<tr>
		<td class="form">
		
		<table width="20%">
				<tr>
				   <td class="_label"> Student ID:</td>
					<td>
						<?php echo $s_id;?>
						<input type="hidden" name="s_id" value="<?php echo $s_id;?>">
						<input type="hidden" name="course_id" value="<?php echo  $_GET['courseid'];?>">
					</td>
				</tr>
				<tr>
				   <td class="_label"> Student Name:</td>
					<td>
						<?php echo $s_name;?>
					</td>
				</tr>
				<tr>
				   <td class="_label"> Course:</td>
					<td>
						<?php echo $course;?>
					</td>
				</tr>
				<tr>
				   <td class="_label"> Year:</td>
					<td>
						<?php echo $yr;?><input type="hidden" name="yr" value="<?php echo $yr;?>">
					</td>
				</tr>
				<tr>
				   <td class="_label"> Semester:</td>
					<td>
						<?php echo $sem;?><input type="hidden" name="sem" value="<?php echo $sem;?>">
					</td>
				</tr>
				<tr>
				   <td class="_label"> Semester:</td>
					<td>
						<?php echo $sy;?><input type="hidden" name="sy" value="<?php echo $sy;?>">
					</td>
				</tr>
				
				<tr>
				   <td class="_label"> Subject:</td>
					<td>
						<?php echo $subj;?>
					</td>
				</tr>	
				<tr>
				   <td class="_label"> Input Grade:</td>
					<td>
						<input type="text" name="subjgrade" width="20" >
					</td>
				</tr>
				
				<tr>
					<td>
						<input type="hidden" name="grade_id" value="<?php echo $grade;?>">
					</td>
					<td>
					  <input type="submit" name="submit" id="Save_Subject" value="Save" />
				    </td>
				</tr>
		</table>		  	  
				
</table>
</form>
<?php include("includes/footer.php");?>