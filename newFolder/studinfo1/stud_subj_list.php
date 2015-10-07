<?php require_once("includes/session.php");?>
<?php require_once("includes/functions.php");?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/dbcon.php");?>
<?php include("includes/header.php");?>

<div id="menubar">
		
<?php include("menus.php");?>
</div> 
		 
<div id="module-name">Subject Enrolled

</div>

<div id="content">
	
	<?php
		
		$stud_id = $_GET['s_id'];
		$stud_course = $_GET['course_id'];
		
		$sql = 'Select * from stud_course where s_id='.$stud_id;
		$result = mysql_query($sql) or die;
		while ($row = mysql_fetch_array($result)){
			
			echo '<table>';
			echo '<tr>';
				echo '<td>';
					echo '<STRONG>Student Name    </td><td>:<STRONG> ' .$row['s_name']. '</STRONG> <br/>';
				echo '</td>';
			echo '</tr>';
			
			echo '<tr>';
				echo '<td>';
					echo '<STRONG>Age             </td><td>:<STRONG> ' .$row['s_age']. '</STRONG><br/>';
				echo '</td>';	
			echo '</tr>';
			echo '<tr>';
				echo '<td>';
					echo '<STRONG>Address         </td><td>:<STRONG> ' .$row['s_address']. '</STRONG><br/>';
				echo '</tr>';
			echo '</tr>';
			echo '<tr>';
				echo '<td>';
					echo '<STRONG>Department      </td><td>:<STRONG> ' .$row['course_name']. '</STRONG><br/>';
				echo '</td>';
			echo '</tr>';
			echo '<tr>';
				echo '<td>';
					echo '<STRONG>Parent\Guardian </td><td>:<STRONG> ' .$row['s_guardian']. '</STRONG><br/>';
				echo '</td>';
			echo '</tr>';
			echo '<tr>';
				echo '<td>';
						echo '<STRONG>Address         </td><td>:<STRONG> ' .$row['s_guardian_add']. '</STRONG><br/>';
				echo '</td>';
			echo '</tr>';
			echo '<tr>';
				echo '<td>';
					echo '<STRONG>Contact No.     </td><td>:<STRONG> ' .$row['s_guardian_contact']. '</STRONG><br/>';
				echo '</td>';
			echo '</tr>';
			echo '<tr>';
			if ($_SESSION['usertype']!='Teacher'){
				echo '<td colspan="2" align = "center">';
					echo '<a href = "send_sms.php?id='.$row['s_id'].'">[Send Grades Via SMS]</a>';
				echo '</td>';
			}	
			echo '</tr>';
			echo '</table>';
		}
		
	?>
	
		<Table class="app_table" style="width:100%;">
		<tr>
	      	
			<th align="left">Subject</th>
			<th align="left">Sy</th>
			<th align="left">Year</th>
			<th align="left">Semester</th>
			<th align="left">Grade</th>
			<th align="left">Remarks</th>
			<th align="left">Options</th>
			
			
        </tr>
<?php
 $query = 'SELECT * FROM  `grades` where s_id='.$stud_id;
					$result = mysql_query($query, $connection) or die (mysql_error());
					while ($row = mysql_fetch_array($result)) {
						
						echo (@$odd == true) ? ' <tr class="odd_row" > ' : ' <tr class="even_row"> ';
							@$odd = !$odd;
						$subj_Code = $row['subj_code'];
						$sql = 'SELECT * FROM subjects where subj_code='.$subj_Code;
						$rs  = mysql_query($sql);
						while($rows = mysql_fetch_array($rs)){
							echo ' <td> ';
							echo $rows['subject'];
							echo ' <td> ';	
						}
						
						echo $row['sy'];
						echo ' <td> ';
						echo $row['yr'];
						echo ' <td> ';
						echo $row['semester'];
						
						echo ' <td> ';
						if($row['grades']==0){
						echo 'NA';
						}else{
						echo $row['grades'];
						}
						echo ' <td> ';
						if ($row['grades']==0 ){
						echo 'NA';
						}elseif($row['grades'] < 75){
						
						echo 'Failed';
						}else{
						echo 'Passed';
						}
						
						echo ' <td> ';
						echo ' <a href="grades_info.php?id='.$row['grades_id'].'">[Add grades]</a>';
						
						
					}
?>
	</table>

<?php include("includes/footer.php");?>