<?php require_once("includes/session.php");?>
<?php require_once("includes/functions.php");?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/dbcon.php");?>
<?php include("includes/header.php");?>
<div id="menubar">
		
<?php include("menus.php");?>
</div> 
		 
<div id="module-name">List of Users
</div>
<div id="content">
	
<Table class="app_table" style="width:100%;">
		<tr>
	      
			
			<th align="left">Name of user</th>
			<th align="left">Username</th>
			<th align="left">User Type</th>
			<th align="center">Option</th>
			
		
			
        </tr>
<?php
		$PHP_SELF = $_SERVER["PHP_SELF"]; 
	    $rec_limit = 5;
		$query = 'SELECT * FROM  `users`';
		$result = mysql_query($query);
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
				
		 $query = "SELECT * FROM users ".
					"LIMIT  $offset, $rec_limit";
					$result = mysql_query($query);
					confirm_query($result);
					while ($row = mysql_fetch_array($result)) {
						
						echo (@$odd == true) ? ' <tr class="odd_row" > ' : ' <tr class="even_row"> ';
							@$odd = !$odd;
						
						echo ' <td> ';
						echo $row['users_name'];			
						echo ' <td> ';
						echo $row['uname'];
						echo ' <td> ';
						echo $row['utype'];
						echo ' <td align="center"> ';
						echo '<a href="process_del_user.php?id='.$row['user_id'].'" class="app_listitem_key">[Delete Entry]</a>';
						echo '<a href="edit_user.php?id='.$row['user_id'].'" class="app_listitem_key">[Edit Entry]</a>';
			
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