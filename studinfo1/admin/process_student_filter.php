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
	<form id="form4" name="form4" method="post" action="process_send_all_grades.php">
	<Table class="app_table" style="width:100%;">
				<tr>
					<th align="left">Student Id</th>
					<th align="left">Student Name</th>
					<th align="left">Address</th>
					<th align="left">Age</th>
					<th align="left">Birth Day</th>
					<th align="left">Birth Place</th>
					<th align="left">Sex</th>
					<th align="left">Department</th>
					<th align="left">SY</th>
					<th align="center">Subjects Enrolled</th>

					</tr>
		<?php
	$s_id = $_POST['idno'];
	$studname = $_POST['studname'];
	$dept	= $_POST['dept'];

	if($s_id != '' && $studname == '' && $dept == ''){
		$query = "SELECT * FROM stud_course 
		where s_id = '" . $s_id . "'";
	}elseif($s_id == '' && $studname != '' && $dept == '' ){
		 $query = "SELECT * FROM stud_course 
					where s_name like '%". $studname ."%'";
	}elseif($s_id == '' && $studname == '' && $dept != '' ){
		 $query = "SELECT * FROM stud_course 
					where course_name = '". $dept ."'";
	}else{
	 $query = "SELECT * FROM stud_course 
					where s_id = '%" . $s_id . "%'
					OR s_name like '%". $studname ."%' 
					OR course_name = '". $dept ."'";
	
	}
				
							$result = mysql_query($query);
							confirm_query($result);
						echo	$count = mysql_num_rows($result);
							while ($row = mysql_fetch_array($result)) {
							
							echo ($odd == true) ? ' <tr class="odd_row" > ' : ' <tr class="even_row"> ';
							$odd = !$odd;
								echo ' <td> ';
								echo '<a href="edit_student.php?id='.$row['s_id'].'" class="app_listitem_key">'.$row['s_id'].'</a>';
								echo ' <td> ';
								echo '<input type="text" name= "student" value='.$row['s_name'].' class="txtbox">';
								echo ' <td> ';
								echo $row['s_address'];
								echo ' <td> ';
								echo $row['s_age'];
								echo ' <td> ';
								echo $row['s_bday'];
								echo ' <td> ';
								echo $row['s_bplace'];
								echo ' <td> ';
								echo $row['sex'];
								echo ' <td> ';
								echo $row['course_name'];
								echo ' <td> ';
								echo $row['sy'];
								echo ' <td align="center"> ';
								echo ' <a href="add_grades.php?s_id='.$row['s_id'].'&courseid='.$row['course_id'].'">[Add]</a>';
								echo ' <a href="stud_subj_list.php?s_id='.$row['s_id'].'&courseid='.$row['course_id'].'">[View]</a>';
					
							}
		?>
	</table>
 <input type="submit" name="submit" value="Save" />
 </form>


<?php include("includes/footer.php");?>