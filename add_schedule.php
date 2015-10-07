<?php require_once("includes/session.php");?>
<?php require_once("includes/functions.php");?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/dbcon.php");?>
<?php include("includes/header.php");?>

<?php

if(isset($_POST['submit']))
{
			$dept = $_POST['dept_list'];
			$course = $_POST['course_list'];
		    $session = $_POST['session_list'];
			$sems = $_POST['sems_list'];
			$subj = $_POST['subj_list'];
			$instructor = $_POST['inst_list'];
			$room = $_POST['room_list'];
			$day = $_POST['day_list'];
		
			$t_start = $_POST['time_start'];
			$t_end = $_POST['time_end'];
			
	

					if ($t_start ==''){
					?>
					<script type="text/javascript">
						alert("Start Time Cannot be null!");
						window.location = "add_schedule.php";
					</script>
					<?php
					}elseif($t_end==''){
					?>
					<script type="text/javascript">
						alert("End Time Cannot be null!");
					    window.location = "add_schedule.php";
					</script>
					
					
					<?php
					
				     	$query = "INSERT INTO schedule (room_id,dept_id, course_id, subject_id, instruct_id, day_id, time_s, time_e, session_id, semester_id) VALUES ('".$room."','".$dept."','".$course."','".$subj."','".$instructor."','".$day."','".$t_start."','".$t_end."','".$session."','".$sems."')";
								
						echo $query;
						$result = mysql_query($query);
						confirm_query($result);
						 
						$t_end = $_POST['time_ed'];
						?> 
						 <script type="text/javascript">
							alert("Successfully added.");
						    //window.location = "add_schedule.php";
						 </script>
						<?php
					}
	
}
?>
   
      

<script type="text/javascript" src="timePicker/src/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="timePicker/src/jquery-ui.css" />



<link rel="stylesheet" type="text/css" href="javascripts/tools/calendar/css/calendar-win2k-cold-1.css" /> 
<link rel="stylesheet" type="text/css" href="javascripts/tools/monthpicker/css/monthpicker.css" /> 
<link rel="stylesheet" type="text/css" href="javascripts/tools/popup/popup_win.css" /> 
<link rel="stylesheet" type="text/css" href="modules/mod_custommod/css/custommod.css" /> 
<script type="text/javascript" language="javascript" src="javascripts/application.js"></script> 
<script type="text/javascript" language="javascript" src="javascripts/tools/calendar/calendar.js"></script> 
<script type="text/javascript" language="javascript" src="javascripts/tools/calendar/lang/calendar-en.js"></script> 

<script type="text/javascript" language="javascript" src="javascripts/tools/calendar/calendar-setup.js"></script> 
<script type="text/javascript" language="javascript" src="javascripts/tools/monthpicker/monthpicker.js"></script> 

<link rel="stylesheet" type="text/css" href="timePicker/src/jquery.ptTimeSelect.css" />
<script type="text/javascript" src="timePicker/src/jquery.ptTimeSelect.js"></script>

<!--ckeditor --->
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<!---end ckedor--->

<div id="menubar">

</script>
	<?php include("menus.php");?>
		  </div>
	 
<div id="module-name">New Schedule
</div>
<div id="content">

	
				
<form  method="post" action="process_add_schedule.php" enctype="multipart/form-data" name="form4" id="form4"> 

  <table class="app_table">
	<tr>
		<th> <div class="_title">Details</div></th>
	</tr>
	<tr>
		<td class="form">
			<table width="89%">
				<tr>
				  <td class="_label">Department:</td>
				  <td><label for="schedule_dept"></label>
                  <select name="dept_list" id="dept_list">
					  <?php
						 $sql = 'select dept_id, dept_name from `department`';
						$result = mysql_query($sql) or die (mysql_error($dbcon));
						while ($row = mysql_fetch_array($result)) {
										
								echo ' <option value="' . $row['dept_id'] .'" > ';
								echo $row['dept_name'] . '</option> ';
																
						}
					  
					 ?>
					</select>
					
				  </td>
				</tr>
	
				<tr>
				  <td class="_label" width="159">Program:    </td>
				  <td width="159">
                  <select name="course_list" id="course_list">
					  <?php
						 $sql = 'select course_id, course_name from `course`';
						$result = mysql_query($sql) or die (mysql_error($dbcon));
						while ($row = mysql_fetch_array($result)) {
										
								echo ' <option value="' . $row['course_id'] .'" > ';
								echo $row['course_name'] . '</option> ';
																
						}
					  
					 ?>
					</select>
				  </td>
				</tr>
	
				<tr>
				  <td class="_label">Session:</td>
				  <td>
                   <select name="session_list" id="session_list">
					  <?php
						 $sql = 'Select std_sessioin_id, std_session_start, std_session_end from `std_session`';
						$result = mysql_query($sql) or die (mysql_error($dbcon));
						while ($row = mysql_fetch_array($result)) {
										
								echo ' <option value="' . $row['std_sessioin_id'] .'" > ';
								echo $row['std_session_start'] . '<---<strong>TO</strong>--->' .$row['std_session_end'] .'</option> ';
																
						}
					  
					 ?>
					</select>			 </td>
				</tr>
				<tr>
				  <td class="_label">Semester:</td>
				  <td>
                  <select name="sems_list" id="sems_list">
					  <?php
						 $sql = 'select * from `semester`';
						$result = mysql_query($sql) or die (mysql_error($dbcon));
						while ($row = mysql_fetch_array($result)) {
										
								echo ' <option value="' . $row['sem_id'] .'" > ';
								echo $row['semester'] . '</option> ';
																
						}
					  
					 ?>
					</select>
                  </td>
				</tr>
				<tr>
				  <td class="_label">Subject:</td>
				  <td>
                  <select name="subj_list" id="subj_list">
					  <?php
						 $sql = 'Select subj_id, subject from `subjects`';
						$result = mysql_query($sql) or die (mysql_error($dbcon));
						while ($row = mysql_fetch_array($result)) {
										
								echo ' <option value="' . $row['subj_id'] .'" > ';
								echo $row['subject'].'</option> ';
																
						}
					  
					 ?>
					</select>		
                
				  </td>
				</tr>
				<tr>
				  <td class="_label">Instructor:</td>
				  <td>
                  <select name="inst_list" id="inst_list">
					  <?php
						 $sql = 'select instruct_primary, name from `instructor`';
						$result = mysql_query($sql) or die (mysql_error($dbcon));
						while ($row = mysql_fetch_array($result)) {
										
								echo ' <option value="' . $row['instruct_primary'] .'" > ';
								echo $row['name'] . '</option> ';
																
						}
					  
					 ?>
					</select>
                  </td>
				</tr>
				<tr>
				  <td class="_label">Room:</td>
				  <td>
                  <select name="room_list" id="room_list">
					  <?php
						 $sql = 'select * from `room`';
						$result = mysql_query($sql) or die (mysql_error($dbcon));
						while ($row = mysql_fetch_array($result)) {
										
								echo ' <option value="' . $row['room_id'] .'" > ';
								echo $row['room_name'] . ' '. $row['room_desc'].'</option> ';
																
						}
					  
					 ?>
					</select>
                  
                  </td>
				</tr>
				<tr>
				  <td class="_label">Day:</td>
				  <td><label for="schedule_day"></label>
				  <select name="day_list" id="day_list">
					  <?php
						 $sql = 'select * from `day`';
						$result = mysql_query($sql) or die (mysql_error($dbcon));
						while ($row = mysql_fetch_array($result)) {
										
								echo ' <option value="' . $row['day_id'] .'" > ';
								echo $row['day_name'] . '</option> ';
																
						}
					  
					 ?>
					</select>
                  
                  </td>
				</tr>
				<tr>
				<td class="_label">Time Start:</td>
				  <td><label for="sy"></label>
                  <div id="t_s">
			      <input name="time_start" type="text" id="time_start" size="30" placeholder="Select Lecture Time Start" onblur="return startTime();" /></div>
                  <script type="text/javascript">
        $(document).ready(function(){
            // find the input fields and apply the time select to them.
            $('#t_s input').ptTimeSelect();
        });
    </script>
                 
                  </td>
				 
				</tr>
				<tr>
				   <td class="_label">Time End:</td>
				  <td><label for="sem"></label>
                  <div id="t_e">
			      <input name="time_end" type="text" id="time_end" size="30" placeholder="Select Lecture Time End" onblur="return emptyTime();"/></div>
                  <script type="text/javascript">
        $(document).ready(function(){
            // find the input fields and apply the time select to them.
            $('#t_e input').ptTimeSelect();
        });
    </script>
                  </td>
				  
				</tr>
				<tr>
				  <td height="41">
				  </td>
				  <td><input type="reset" name="clear" value = "clear entry"  />
					<input type="submit" name="submit" id="submit" value="Save data" />
				  </td><td width="3"></td>
				</tr>
				
						</table>
			</td>
		</tr>	
   </table>
    
    
</form>

 
<?php include("includes/footer.php");?>
<script type="text/javascript">
function startTime()
{
	start = document.form4.time_start;
	if(start.value == "")	
	{
		alert("Lecture Start Time cann't be Empty!");
		return false;
	}
	else
	{
		document.form4.time_end.focus();
		return true;
	}
}

function emptyTime()
{
	end = document.form4.time_end;
	if(end.value == "")	
	{
		alert("Lecture End Time cann't be Empty!");
		return false;
	}
	else
	{
		return true;
	}
}

</script>