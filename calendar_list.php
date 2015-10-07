<?php require_once("includes/session.php");?>
<?php require_once("includes/functions.php");?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/dbcon.php");?>
<?php include("includes/header.php");?>
<div id="menubar">
		
<?php include("menus.php");?>
</div> 
		 
<div id="module-name">Events
</div>
<div id="content">
	
<Table class="app_table" style="width:100%;">
		<tr>
	      
			
			<th align="left">Event Name</th>
			<th align="left">Event Date</th>
			<th align="left">Detail</th>            
            <th align="left">Department</th>
            <th align="left">Class</th>
			<th align="left">Semester</th>
			<th align="left">Option</th>
			
		
			
        </tr>
<?php
		$PHP_SELF = $_SERVER["PHP_SELF"]; 
	    $rec_limit = 5;
		$sql = 'SELECT * FROM  `schoolcal` ORDER BY cal_date ASC';
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
				
				

			$query = "SELECT * FROM  `schoolcal` ORDER BY cal_date ASC LIMIT  $offset, $rec_limit";
					$result = mysql_query($query);
					confirm_query($result);
					while ($row = mysql_fetch_array($result)) {
						
						echo (@$odd == true) ? ' <tr class="odd_row" > ' : ' <tr class="even_row"> ';
							@$odd = !$odd;
						
						echo ' <td> ';
						echo '<a href="edit_cal.php?id='.$row['cal_id'].'" class="app_listitem_key">'.$row['event'].'</a>';			
						echo ' <td> ';
						echo $row['cal_date'];
						echo ' <td> ';
						echo '<a href="event_detail.php?id='.$row['cal_id'].'" class="app_listitem_key"><img src="img_icon\Document.ico" width="30" height="30"/></a>';
						//sql for deprtment
						$sql = 'SELECT dept_name FROM  `department` WHERE dept_id = "'.$row['cal_dept_id'].'"';
						$rs = mysql_query($sql);
						confirm_query($rs);
						$rw = mysql_fetch_array($rs);
						//end of department
						echo ' <td> ';
						echo $rw['dept_name'];
						echo ' <td> ';
						//sql for deprtment
						$sql = 'SELECT course_name FROM  `course` WHERE course_id = "'.$row['cal_course_id'].'"';
						$rs = mysql_query($sql);
						confirm_query($rs);
						$rw = mysql_fetch_array($rs);
						//end of department
						echo $rw['course_name'];
						echo ' <td> ';
						echo $row['semester'];
						echo ' <td> ';
						echo '<a href="send_act_email.php?id='.$row['cal_id'].'" class="app_listitem_key" title="Send To Student"><img src="img_icon\Mail.ico" width="30" height="30"/></a> ';
						if ($_SESSION['usertype']=='Administrator' || $_SESSION['usertype']=='Registrar'){
						
						echo ' <a href="process_del_act.php?id='.$row['cal_id'].'" class="app_listitem_key" title="Delete"><img src="img_icon\Trash.ico" width="30" height="30"/></a>';

						}
						
			
					}
?>
</table>

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

<?php //include_layout_template('admin_footer.php');?>
<?php include("includes/footer.php");?>
