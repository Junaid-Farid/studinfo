<?php require_once("client/php/includes/session.php");?>
<?php require_once("client/php/includes/functions.php");?>
<?php confirm_logged_in(); ?>
<?php require_once("client/php/includes/dbcon.php");?>
<?php include("client/php/includes/header.php");?>
<div id="menubar">
		 	
<?php include("client/php/menus.php");?>
</div> 
<div id="module-name">List of Course
</div>

<div id="content">
		<Table class="app_table" style="width:100%;">
		<tr>
	      	
			
			<th align="left">Department Name</th>
			<th align="left">Description</th>
			<th align="left">Option</th>
			
			
					
        </tr>
<?php
		$PHP_SELF = $_SERVER["PHP_SELF"]; 
	    $rec_limit = 5;
		$sql = 'Select * from course';
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
				
		 $sql = "SELECT * FROM course ".
					"LIMIT  $offset, $rec_limit";
		
		
		
		$result = mysql_query($sql);
		confirm_query($result);
					while ($row = mysql_fetch_array($result)) {
						
						echo (@$odd == true) ? ' <tr class="odd_row" > ' : ' <tr class="even_row"> ';
							@$odd = !$odd;
						echo ' <td> ';
						echo '<a href="edit_dept.php?id='.$row['course_id'].'" class="app_listitem_key">'.$row['course_name'].'</a>';
						echo ' <td> ';
						echo $row['description'];
						if ($_SESSION['usertype']=='Administrator' || $_SESSION['usertype']=='Registrar'){
							echo ' <td> ';
							echo '<a href="process_del_dept.php?id='.$row['course_id'].'" class="app_listitem_key">[Delete Entry]</a>';

						}
			
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

<?php include("client/php/includes/footer.php");?>