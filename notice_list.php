<?php require_once("includes/session.php");?>
<?php require_once("includes/functions.php");?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/dbcon.php");?>
<?php include("includes/header.php");?>
<div id="menubar">
		
<?php include("menus.php");?>
</div> 
		 
<div id="module-name">Notices
</div>
<div id="content">
	
<Table class="app_table" style="width:100%;">
		<tr>
	      
			
			<th align="left">Title</th>
			<th align="left">Notice Date</th>
			<th align="left">Detail</th>            
            <th align="left">Download</th>
            <th align="left">Notice For</th>
			<th align="left">Notice By</th>
			<th align="left">Option</th>
			
		
			
        </tr>
<?php
		$PHP_SELF = $_SERVER["PHP_SELF"]; 
	    $rec_limit = 15;
		$sql = 'SELECT * FROM  `files` ORDER BY file_date DESC';
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
				
				

			$query = "SELECT * FROM  `files` ORDER BY file_date DESC LIMIT  $offset, $rec_limit";
					$result = mysql_query($query);
					confirm_query($result);
					while ($row = mysql_fetch_array($result)) {
						
						echo (@$odd == true) ? ' <tr class="odd_row" > ' : ' <tr class="even_row"> ';
							@$odd = !$odd;
						
						echo ' <td> ';
						echo '<a href="edit_notice.php?id='.$row['file_id'].'" class="app_listitem_key">'.$row['file_title'].'</a>';			
						echo ' <td> ';
						echo $row['file_date'];
						echo ' <td> ';
						echo '<a href="notice_detail.php?id='.$row['file_id'].'" class="app_listitem_key"><img src="img_icon\Document.ico" width="30" height="30"/></a>';
						
						
						echo ' <td> ';
						echo '<a href="files/'.$row['file_name'].'" title="Download"><img src="img_icon\Download.ico" width="30" height="30"/></a>';
						echo ' <td> ';
						
						echo $row['file_for'];
						echo ' <td> ';
						echo $row['file_by'];
						echo ' <td> ';
						
						if ($_SESSION['usertype']=='Administrator' || $_SESSION['usertype']=='Registrar'){
						
						echo ' <a href="process_del_notice.php?id='.$row['file_id'].'" class="app_listitem_key" title="Delete"><img src="img_icon\Trash.ico" width="30" height="30"/></a>';

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
