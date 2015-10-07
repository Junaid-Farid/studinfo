<?php require_once("includes/session.php");?>
<?php require_once("includes/functions.php");?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/dbcon.php");?>
<?php include("includes/header.php");?>
<div id="menubar">
		 	
<?php include("menus.php");?>
</div> 
<div id="module-name">List of Session</div>

<div id="content">
		<Table class="app_table" style="width:100%;">
		<tr>
	      	
			
			<th align="left">Session ID</th>
			<th align="left">Session Start</th>
            <th align="left">Session End</th>
			<th align="left">Option</th>
			
			
					
        </tr>
<?php
		$PHP_SELF = $_SERVER["PHP_SELF"]; 
	    $rec_limit = 5;
		$sql = 'Select * from std_session';
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
				
		 $sql = "SELECT * FROM std_session ".
					"LIMIT  $offset, $rec_limit";
		
		
		
		$result = mysql_query($sql);
		confirm_query($result);
					while ($row = mysql_fetch_array($result)) {
						
						echo (@$odd == true) ? ' <tr class="odd_row" > ' : ' <tr class="even_row"> ';
							@$odd = !$odd;
						echo ' <td> ';
						echo '<a href="edit_std_session.php?id='.$row['session_id'].'" class="app_listitem_key">'.$row['session_id'].'</a>';
						echo '<td>';
						echo $row['std_session_start'];
						echo '</td>';
						echo ' <td> ';
						echo $row['std_session_end'];
						if ($_SESSION['usertype']=='Administrator' || $_SESSION['usertype']=='Registrar'){
							echo ' <td> ';
							echo '<a href="process_del_std_session.php?id='.$row['session_id'].'" class="app_listitem_key" title="Delete"><img src="img_icon\Trash.ico" width="30" height="30"/></a>';

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
					   echo @"<a href=\"$PHP_SELF?page=$last\" title='Previous'><img src=\"img_icon\\previous.ico\" width='30' height='30'/></a> ";
					   echo @"<a href=\"$PHP_SELF?page=$page\" title='Next'><img src=\"img_icon\\next.ico\" width='30' height='30'/></a>";
					}
					else if( $page == 0 )
					{
					   echo "<a href=\"$PHP_SELF?page=$page\" title='Next'><img src=\"img_icon\\next.ico\" width='30' height='30'/></a>";
					}
					else if( $left_rec < $rec_limit )
					{
					   $last = $page - 2;
					   echo "<a href=\"$PHP_SELF?page=$last\" title='Previous'><img src=\"img_icon\\previous.ico\" width='30' height='30'/></a>";
					}


		?>
					</td>
				</tr>
			</table>

<?php include("includes/footer.php");?>