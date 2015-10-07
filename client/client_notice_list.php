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
  
<Table class="app_table" style="width:100%;">
		<tr>
	      
			
			<th align="left">Title</th>
			<th align="left">Notice Date</th>
			<th align="left">Detail</th>            
            <th align="left">Download</th>
            <th align="left">Notice For</th>
			<th align="left">Notice By</th>
			
		
			
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
						echo $row['file_title'];			
						echo ' <td> ';
						echo $row['file_date'];
						echo ' <td> ';
						echo '<a href="client_notice_detail.php?id='.$row['file_id'].'" class="app_listitem_key"><img src="img_icon\Document.ico" width="30" height="30"/></a>';
						
						
						echo ' <td> ';
						echo '<a href="../files/'.$row['file_name'].'" title="Download"><img src="img_icon\Download.ico" width="30" height="30"/></a>';
						echo ' <td> ';
						
						echo $row['file_for'];
						echo ' <td> ';
						echo $row['file_by'];
						echo ' </td> ';
						
												
			
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