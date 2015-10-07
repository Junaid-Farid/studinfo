<?php require_once("includes/session.php");?>
<?php require_once("includes/functions.php");?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/dbcon.php");?>
<?php include("includes/header.php");?>
<?php
?>
<div id="menubar">
	<?php include("menus.php");?>
</div> 
		 
		 
<div id="module-name">Details
</div>
	<form id="form4" name="form4" method="post" action="">
	<Table class="app_table" style="width:100%;">
				<tr>
					<th align="left">Student Id</th>
					<th align="left">Student Name</th>
					<th align="left">Address</th>
					<th align="left">Age</th>
					<th align="left">Sex</th>
					<th align="left">Department</th>
					<th align="left">SY</th>
					<th align="left">Contact No.</th>
					<th align="left">Student Grades</th>
					<th align="left">Subjects Enrolled</th>

					</tr>
<?php
	
		
		$s_id = $_POST['idno'];
		$studname = $_POST['studname'];
		$dept	= $_POST['dept'];
		
		if($s_id != '' && $studname != '' && $dept != '')
		{
			$query = "SELECT * FROM stud_course where s_id = '" . $s_id . "'AND s_name='".$studname."' AND course_name = '". $dept ."'" ;
		}
		
		else if($s_id != '' && $studname == '' && $dept == '')
		{
			$query = "SELECT * FROM stud_course where s_id = '" . $s_id . "'";
		}
		else if($s_id == '' && $studname != '' && $dept == '' )
		{
			 $query = "SELECT * FROM stud_course where s_name like '%". $studname ."%'";
		}
		else if($s_id == '' && $studname == '' && $dept != '' ){
			 $query = "SELECT * FROM stud_course where course_name = '". $dept ."'";
		}
		else{
		 $query = "SELECT * FROM stud_course 
						where s_id = '%" . $s_id . "%'
						OR s_name like '%". $studname ."%' 
						OR course_name = '". $dept ."'";
		
		}
							$result = mysql_query($query);
							confirm_query($result);
							$count = mysql_num_rows($result);
							while ($row = mysql_fetch_array($result)) {
							echo (@$odd == true) ? ' <tr class="odd_row" > ' : ' <tr class="even_row"> ';
							@$odd = !$odd;
								echo ' <td> ';
								echo '<a href="edit_student.php?id='.$row['s_id'].'" class="app_listitem_key">'.$row['s_id'].'</a>';
								echo ' <td> ';
								echo $row['s_name'];
								echo ' <td> ';
								echo $row['s_address'];
								
								echo ' <td> ';
								echo $row['s_age'];
												
								echo ' <td> ';
								echo $row['sex'];
								echo ' <td> ';
								echo $row['course_name'];
								echo ' <td> ';
								echo $row['sy'];
								echo ' <td> ';
								echo $row['s_guardian_contact'];
								echo'<input type="hidden" name="contact[]" value='.$row['s_guardian_contact'].' class="txtbox">';
										//$row['s_id'];
										$sql = "SELECT * 
													FROM  `grades` 
													WHERE  `s_id` =".$row['s_id'];
										$results = mysql_query($sql) or die;
										
										echo ' <td> ';	
										
										
										  $total = 0;
										
											 while($rows = mysql_fetch_array($results)){
												 
														$subj = $rows['subj_code'];
														$grades = $rows['grades'];
														
														if ($grades == 0 ){
															$grades == 'inc';
														}else{
															$grades == $grades;
														}
														$total = $total + $grades;
														
													}
											echo $total;
											echo '<br/>';
											
											echo '  from: School registrar';		
										echo '</textarea>';						
								
								echo ' <td align="left"> ';
								echo ' <a href="add_grades.php?s_id='.$row['s_id'].'&courseid='.$row['course_id'].'">[Add]</a>';
								echo ' <a href="stud_subj_list.php?s_id='.$row['s_id'].'&courseid='.$row['course_id'].'">[View]</a>';

							}
		?>
					<tr>
						<td colspan="10" align="center">
							<input type="submit" name="submit" align = "center" value="Send Grades to students" />
						</td>
					</tr>
	</table>
 
 </form>


<?php include("includes/footer.php");?>