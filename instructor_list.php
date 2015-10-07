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
				
		 
<div id="module-name">List of Instructor
</div>
<div id="content">
	<?php $PHP_SELF = $_SERVER["PHP_SELF"]; ?>
    
		<Table class="app_table" style="width:100%;">
				<tr>
					<th align="left">Instructor Id</th>
					<th align="left">Instructor Name</th>
					<th align="left">Address</th>
					<th align="left">Sex</th>
					<th align="left">Email</th>
                    <th align="left">Contact</th>
                    <th align="left">Department</th>
                    <th align="left">Option</th>
									

					</tr>
		<?php
		$rec_limit = 5;
		$sql = 'SELECT * FROM instructor';
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
				
		 $query = "SELECT * FROM instructor ".
					"LIMIT  $offset, $rec_limit";
							$result = mysql_query($query, $connection);
							confirm_query($result);
							while ($row = mysql_fetch_array($result)) {
							echo (@$odd == true) ? ' <tr class="odd_row" > ' : ' <tr class="even_row"> ';
							@$odd = !$odd;
								echo ' <td> ';
								echo '<a href="edit_instructor.php?id='.$row['instruc_id'].'" class="app_listitem_key" title="Edit">'.$row['instruc_id'].'</a>';
								echo ' <td> ';
								echo $row['name'];
								echo ' <td> ';
								echo $row['address'];
								echo ' <td> ';
								echo $row['sex'];
								echo ' <td> ';
								echo $row['email_add'];
								echo ' <td> ';
								echo $row['instruct_contact'];
								echo ' <td> ';
								$qry = 'select dept_name from `department` where  dept_id = "'.$row['dept_id'].'"';
						
						$rslt = mysql_query($qry) or die (mysql_error($dbcon));
						while ($rs = mysql_fetch_array($rslt)) {
								
								echo $rs['dept_name'];
						}
								
								if ($_SESSION['usertype']=='Administrator' || $_SESSION['usertype']=='Registrar'){
							echo ' <td> ';
							echo '<a href="process_del_instructor.php?id='.$row['instruc_id'].'" class="app_listitem_key" title="Delete"><img src="img_icon\Trash.ico" width="30" height="30"/></a>';

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
					   echo @"<a href=\"$PHP_SELF?page=$last\" title='Previous'><img src=\"img_icon\\previous.ico\" width='30' height='20'/></a>  ";
					   echo @"<a href=\"$PHP_SELF?page=$page\" title='Next'><img src=\"img_icon\\next.ico\" width='30' height='20'/></a>";
					}
					else if( $page == 0 )
					{
					   echo "<a href=\"$PHP_SELF?page=$page\" title='Next'><img src=\"img_icon\\next.ico\" width='30' height='20'/></a>";
					}
					else if( $left_rec < $rec_limit )
					{
					   $last = $page - 2;
					   echo "<a href=\"$PHP_SELF?page=$last\" title='Previous'><img src=\"img_icon\\previous.ico\" width='30' height='20'/></a>";
					}


		?>
					</td>
				</tr>
			</table>
		
<?php include("includes/footer.php");?>