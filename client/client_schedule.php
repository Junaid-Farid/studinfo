<?php
 include("header.php"); 
 require_once("includes/functions.php");
 require_once("includes/dbcon.php");
?>
<link rel="stylesheet" type="text/css" href="css/eroti.css" />
<div class="content" style="width:305.816">
			<div class="container">
            <br/><br/>
       <div id="content">

<div id="module-name">
<div style="margin:50px;"></div>
</div>
<div id="module-name" style="text-align:center; font-size:40px">The Islamia University of Bahawalpur
<img src="img_icon/iub.jpg" align="left" width="150" height="150"/><p align="center" style="font-size:25px;"> Department of Computer Science & IT </p>
<p align="center" style="font-size:25px;"> TIME TABLE </p>
<p align="center" style="font-size:33px;">   </p>
</div>

	<div style="width: 500px; margin: 10px auto;">
<form id="form4" name="form4" method="post" action="client_schedule.php">


<table class="app_table">
	<tr>
		<th> <div class="_title"><p align="center">Select Class</p></div></th>
	</tr>
	<tr>
		<td class="form">
			<table width="100%">
					<tr>
					  <td class="_label">Program :</td>
						
												
						<td>
						   <select name="course" id="course">
								 <?php 
									$sql = 'Select DISTINCT course_id from schedule';
									$result = mysql_query($sql);
									confirm_query($result);
									while($row = mysql_fetch_array($result)){
											$query  = 'SELECT course_id, course_name FROM course WHERE course_id ="'.$row['course_id'].'"';
									
									$rs = mysql_query($query);
									confirm_query($rs);
									while($rs = mysql_fetch_array($rs)){
										echo ' <option selected="selected"  value="'. $row['course_id'].'"> ';
										echo $rs['course_name'] . ' </option> ';
									}
								}
								 
								 ?>
						</select>
						</td>
				    </tr>
						
					<tr>
					  <td class="_label">Session:</td>
					  <td><label for="yr"></label>
						<select name="yr" id="course">
						  <?php 
									$sql = 'Select DISTINCT session_id from schedule';
									$result = mysql_query($sql);
									confirm_query($result);
									while($row = mysql_fetch_array($result)){
											$query  = 'SELECT std_sessioin_id, std_session_start, std_session_end FROM std_session WHERE std_sessioin_id ="'.$row['session_id'].'"';
									
									$rs = mysql_query($query);
									confirm_query($rs);
									while($rs = mysql_fetch_array($rs)){
										echo ' <option selected="selected" value="'. $row['session_id'].'"> ';
										echo $rs['std_session_start'] .'--to--'.$rs['std_session_end'] . ' </option> ';
									}
								}
								 
								 ?>
                                 
					  </select> </td>
					</tr>
					<tr>
					   <td class="_label">Semester:</td>
					  <td><label for="sem"></label>
						<select name="sem" id="sem">
						  <?php 
									$sql = 'Select DISTINCT semester_id from schedule';
									$result = mysql_query($sql);
									confirm_query($result);
									while($row = mysql_fetch_array($result)){
											$query  = 'SELECT sem_id, semester FROM semester WHERE sem_id ="'.$row['semester_id'].'"';
									
									$rs = mysql_query($query);
									confirm_query($rs);
									while($rs = mysql_fetch_array($rs)){
										echo ' <option selected="selected" value="'. $row['semester_id'].'"> ';
										echo $rs['semester'] . ' </option> ';
									}
								}
								 
								 ?>
						</select>
                        </td>
					</tr>
					
					
					<tr>	<td>				</td>
					   <td align="left">
						
							<input type="submit" name="submit" id="seacrh" value="Search"/>
							<input type="reset" name="reset" id="reset" value="Reset"/>
						
					   </td>
				  </tr>
				  
				
			</table>	
		</td>
	</tr>		
</table>


</form>
</div>

<div id="module-name">
</div>
<div id="content">
<div style="font-size:17px; padding:4px; margin:4px; font-weight:bold; letter-spacing:1px; line-height:30px; margin-left:13px; color:#03F">
	<?php
	if(isset($_POST['submit'])){
		 $course_id = $_POST['course']; 
		 $yr   	   = $_POST['yr']; 
		 $sem 	   = $_POST['sem']; 
		
			$sql = "Select * from course where course_id = " . $course_id;
			$result = mysql_query($sql);
			confirm_query($result);
				while($row = mysql_fetch_array($result)){
					echo '<STRONG> Program : ' . $row['description'] . '<br/>';
					
					$q_sess  = 'SELECT std_sessioin_id, std_session_start, std_session_end FROM std_session WHERE std_sessioin_id ="'.$yr.'"';
					$sess_result = mysql_query($q_sess);
					confirm_query($sess_result);
					while($sess_row = mysql_fetch_array($sess_result))
					{
						echo $sess_row['std_session_start'] .'--to--'.$sess_row['std_session_end'];
					}
						
						echo '<br/><STRONG>'. $sem .' Semester';
						echo '<br/>';
					
				}
				
				
		
	
	?></div>
		<Table class="app_table" style="width:100%;">
        <tr class="odd_row">
        	<td align="left"><p style="font-weight:bold; font-size:19px">Time</p></td>
            <td align="left"><p style="font-weight:bold; font-size:19px">Day</p></td>
            <td align="left"><p style="font-weight:bold; font-size:19px">Room</p></td>
            <td align="left"><p style="font-weight:bold; font-size:19px">Subject</p></td>
            <td align="left"><p style="font-weight:bold; font-size:19px">Instructor</p></td>
        </tr>
<?php
	
	 $sql_query = 'SELECT * FROM schedule WHERE course_id ="'.$course_id.'" AND session_id = "'.$yr.'" AND semester_id ="'.$sem.'"';
				
				$q_result = mysql_query($sql_query);
				confirm_query($result);
				while($q_row = mysql_fetch_array($q_result))
				{	
						
						echo (@$odd == true) ? ' <tr class="odd_row" > ' : ' <tr class="even_row"> ';
							@$odd = !$odd;
						echo ' <td align="left"> ';
						echo $q_row['time_s'].' - '.$q_row['time_e'];
						echo '</td>';
						echo ' <td> ';
						
						// for day
						// for subject
						$q_day = 'SELECT day_id, day_name FROM day WHERE day_id ="'.$q_row['day_id'].'"';
						$q_day_rs = mysql_query($q_day);
						confirm_query($q_day_rs);
						while($q_day_row = mysql_fetch_array($q_day_rs))
						{
								echo $q_day_row['day_name'];
						}
						echo ' </td> ';
						echo '<td>';
						//for room
						
						$q_room = 'SELECT * FROM room WHERE room_id ="'.$q_row['room_id'].'"';
							$q_room_rs = mysql_query($q_room);
							confirm_query($q_room_rs);
							while($q_room_row = mysql_fetch_array($q_room_rs))
							{
									echo $q_room_row['room_name'].' '.' ( '.$q_room_row['room_desc'].' )';
							}
						echo ' </td> ';
						echo '<td>';
						
						// for subject
						$q_subj = 'SELECT subj_id, subject FROM subjects WHERE subj_id ="'.$q_row['subject_id'].'"';
						$q_subj_rs = mysql_query($q_subj);
						confirm_query($q_subj_rs);
						while($q_subj_row = mysql_fetch_array($q_subj_rs))
						{
								echo $q_subj_row['subject'];
						}
						echo ' </td> ';
						echo ' <td> ';
						
						// for instructor
						$q_instruct = 'SELECT instruct_primary, name FROM instructor WHERE instruct_primary ="'.$q_row['instruct_id'].'"';
						$q_instruct_rs = mysql_query($q_instruct);
						confirm_query($q_subj_rs);
						while($q_instruct_row = mysql_fetch_array($q_instruct_rs))
						{
								echo $q_instruct_row['name'];
						}
						echo ' </td> ';
						
						echo '</tr>';
			
					}
					
	}
?>

	</table>
    </table>
                    
                    
                    <!---end of latest activity--->
                    </div>
                
		         
					<span style="margin:1px; padding:1px;"></span>
                    
                    
                    
		  <div class="clearfix"> </div>
                    
				</div>
               
                
				<!---->
				
				<div class="grid-bottom">
                
       </div>
       </div>
		<?php
	include("footer.php");
?>