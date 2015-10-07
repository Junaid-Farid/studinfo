<? error_reporting(0); ?>
<?php require_once("includes/session.php");?>
<?php require_once("includes/functions.php");?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/dbcon.php");?>
<?php include("includes/header.php");?>
<div id="menubar">

	<?php include("menus.php");?>
		  </div>

		 </div>
				
		 
<div id="module-name">List of Student
</div>
<div id="content">
	<?php $PHP_SELF = $_SERVER["PHP_SELF"]; ?>
    
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
		$rec_limit = 5;
		$sql = 'SELECT * FROM stud_course';
		$result = mysql_query($sql);
		confirm_query($result);
		$rec_count = mysql_num_rows($result);
		$rec_count = @$row[0];
						
				if( isset($_GET{'page'} ) )
				{
				   $page = $_GET{'page'} + 1;
				   $offset = $rec_limit * $page ;
				}
				else
				{
				   $page = 0;
				   $offset = 0;
				}
				$left_rec = $rec_count - ($page * $rec_limit);
				
		 $query = "SELECT * FROM stud_course ".
					"LIMIT  $offset, $rec_limit";
							$result = mysql_query($query, $connection);
							confirm_query($result);
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
			<table class="app_table" style="width:100%;" >
				<tr>
					<td align="center">
		<?php
												
					if( $page > 0 )
					{
					   $last = $page - 2;
					   echo @"<a href=\"$PHP_SELF?page=$last\">Prev</a> |";
					   echo @"<a href=\"$PHP_SELF?page=$page\">Next</a>";
					}
					else if( $page == 0 )
					{
					   echo "<a href=\"$PHP_SELF?page=$page\">Next</a>";
					}
					else if( $left_rec < $rec_limit )
					{
					   $last = $page - 2;
					   echo "<a href=\"$PHP_SELF?page=$last\">Prev</a>";
					}


		?>
					</td>
				</tr>
			</table>
		
<?php include("includes/footer.php");?>