<?php require_once("includes/session.php");?>
<?php require_once("includes/functions.php");?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/dbcon.php");?>
<?php include("includes/header.php");?>
<div id="menubar">
		
<?php include("menus.php");?>
</div> 
		 
<?php 
	 $_GET['s_id'];
	

	$sql = 'Select * from stud_course where s_id ='.$_GET['s_id']; 
	$result = mysql_query($sql);
	while ($row = mysql_fetch_array($result)){
			$s_id   = $row['s_id'] ;
			$s_name = $row['s_name'];
			$course = $row['course_name'];
			$yr     = $row['yr'];
			$sem	= $row['semester'];
			$sy		= $row['sy'];
			
		
	}

?>
		 
		 
<div id="module-name">Add Subject to be Enrolled
</div>
<div id="content">
<form id="form4" name="form4" method="post" action="process_add_stud_sub.php">


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
				
			
		</table>		
		
			<table width="89%">
				<tr>
				   <td width="42" class="_label"> Subject 1:</td>
					<td>
						<Select name = "subj1" id = "subj1" class = "app_txtbox" width="100">
								<option value="">---Select Subject---</option>
							 <?php 
								$sql = 'Select * from subjects where course_id = '.$_GET['courseid'];
								$result = mysql_query($sql);
								while($row = mysql_fetch_array($result)){
									echo ' <option value="'. $row['subj_code'].'"> ';
									echo $row['subject'] . ' </option> '; 
								}
							 
							 ?>
						</select>
					</td>
                    	<tr>
					  <td class="_label"> Marks: </td>
					<td width="346">
					  <input type="text" name="std_grade" id="std_grade"  class="txtbox"/>
					</td>
				
                    </tr>
								  <tr>
					<td></td>
					<td>
					  <input type="submit" name="submit" id="Save_Subject" value="Save" />
				   </td>
				  </tr>
				  	  
				
			</table>	
		</tr>		
</table>
</form>
<?php include("includes/footer.php");?>