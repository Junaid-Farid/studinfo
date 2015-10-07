<?php
 include("header.php"); 
 require_once("includes/functions.php");
 require_once("includes/dbcon.php");
?>
<link rel="stylesheet" type="text/css" href="css/eroti.css" />
<div class="content" style="width:305.816">
			<div class="container">
            <br/><br/>
            <h3 class="heading_style">Latest Activities </h3>
  <table class="app_table">
		<tr>
	      
			
			<th align="left">Event Name</th>
			<th align="left">Event Date</th>
			<th align="left">Detail</th>            
            <th align="left">Department</th>
            <th align="left">Class</th>
			<th align="left">Semester</th>
		
			
        </tr>
<?php
		$PHP_SELF = $_SERVER["PHP_SELF"]; 
	    $rec_limit = 15;
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
						echo $row['event'];			
						echo ' <td> ';
						echo $row['cal_date'];
						echo ' <td> ';
						echo '<a  id="read_more_id_goes_here" class="links"  href="event_detail.php?id='.$row['cal_id'].'" class="app_listitem_key">Read More</a>';
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
						
						
			
					}
?>
</table>

</table>
			<table class="app_table">
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
                    
                    
                    <!---end of latest activity--->
                    </div>
                
		         
					<span style="margin:1px; padding:1px;"></span>
                    
                    
                    
		  <div class="clearfix"> </div>
                    
				</div>
               
                
				<!---->
				
				<div class="grid-bottom">
                
       </div>
       </div>
		<?php
	include("footer.php");
?>