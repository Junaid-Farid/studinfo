<? error_reporting(0); ?>
<?php require_once("includes/session.php");?>
<?php require_once("includes/functions.php");?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/dbcon.php");?>

<div id="menubar">
	 
<div id="module-name">List of Student
</div>
<div id="content">
    
		<Table class="app_table" style="width:100%;">
				<tr>
					<th align="left">Student Id</th>
					<th align="left">Student Name</th>
					<th align="left">Address</th>
					<th align="left">Age</th>
					<th align="left">Birth Day</th>
					<th align="left">Birth Place</th>
					<th align="left">Sex</th>
					<th align="left">Course</th>
					<th align="left">SY</th>
									

					</tr>
		<?php
		
		$stdid = $_GET['id'];
				
		 $query = "SELECT * FROM student WHERE s_id = '".$stdid."' ";
							$result = mysql_query($query, $connection);
							confirm_query($result);
							while ($row = mysql_fetch_array($result)) {
							echo ' <tr class="odd_row" > ';
							
								echo ' <td> ';
								echo '<a href="?id='.$row['s_id'].'" class="app_listitem_key">'.$row['s_id'].'</a>';
								echo ' <td> ';
								echo $row['s_name'];
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
							
					
							}

		?>
			</table>
		
<?php include("includes/footer.php");?>