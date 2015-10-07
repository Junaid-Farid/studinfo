<?php include("../includes/dbcon.php");?>
<?php include("../includes/header.php");?>

<div id="menubar">
		 <a href="index.php">Home</a> |
		 <a href="student_list.php">View</a> |
		 <a href="add_student.php">New Student</a> </div> 
		 
<div id="module-name">School Calendar
</div>
<div id="content">
	
<Table class="app_table" style="width:100%;">
		<tr>
	      
			
			<th align="left">Event Date</th>
			<th align="left">Event</th>
			<th align="left">Semester</th>
		
			
        </tr>
<?php

			$query = 'SHOW TABLES';
					$result = mysql_query($query, $connection) or die (mysql_error($db));
					while ($row = mysql_fetch_array($result)) {
						
						echo ($odd == true) ? ' <tr class="odd_row" > ' : ' <tr class="even_row"> ';
							$odd = !$odd;
						
						echo ' <td> ';
						echo $row['cal_date'];
						echo ' <td> ';
						echo $row['event'];
						echo ' <td> ';
						echo $row['semester'];
						
			
					}
?>
</table>

<?php include("../includes/footer.php");?>