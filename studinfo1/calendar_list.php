<?php require_once("includes/session.php");?>
<?php require_once("includes/functions.php");?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/dbcon.php");?>
<?php include("includes/header.php");?>
<div id="menubar">
		
<?php include("menus.php");?>
</div> 
		 
<div id="module-name">School Calendar
</div>
<div id="content">
	
<Table class="app_table" style="width:100%;">
		<tr>
	      
			
			<th align="left">Event Date</th>
			<th align="left">Event</th>
			<th align="left">Semester</th>
			<th align="left">Option</th>
			
		
			
        </tr>
<?php

			$query = 'SELECT * FROM  `schoolcal` ORDER BY cal_date ASC';
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
						echo $row['semester'];
						echo ' <td> ';
						echo '<a href="send_act.php?id='.$row['cal_id'].'" class="app_listitem_key">[Send to Students]</a>';
						if ($_SESSION['usertype']=='Administrator' || $_SESSION['usertype']=='Registrar'){
						
						echo '<a href="process_del_act.php?id='.$row['cal_id'].'" class="app_listitem_key">[Delete Entry]</a>';

						}
						
			
					}
?>
</table>
<?php //include_layout_template('admin_footer.php');?>
<?php include("includes/footer.php");?>
