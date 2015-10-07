<?php
 include("header.php"); 
 require_once("includes/functions.php");
 require_once("includes/dbcon.php");
?>
<link rel="stylesheet" type="text/css" href="css/eroti.css" />
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="typeahead.min.js"></script>
    <script>
    $(document).ready(function(){
    $('input.typeahead').typeahead({
        name: 'typeahead',
        remote:'search_file.php?key=%QUERY',
        limit : 10
    });
});
    </script>
    <style type="text/css">
.bs-example{
	font-family: sans-serif;
	position: relative;
	margin: 100px;
	margin-left:110px;
}
.typeahead, .tt-query, .tt-hint {
	border: 2px solid #CCCCCC;
	border-radius: 4px;
	font-size: 20px;
	height: 60px;
	line-height: 30px;
	outline: medium none;
	padding: 8px 12px;
	width: 400px;
}
.typeahead {
	background-color: #FFFFFF;
}
.typeahead:focus {
	border: 2px solid #0097CF;
}
.tt-query {
	box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
}
.tt-hint {
	color: #999999;
}
.tt-dropdown-menu {
	background-color: #FFFFFF;
	border: 1px solid rgba(0, 0, 0, 0.2);
	border-radius: 4px;
	box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
	margin-top: 12px;
	padding: 8px 0;
	width: 700px;
}
.tt-suggestion {
	font-size: 18px;
	line-height: 24px;
	padding: 3px 20px;
}
.tt-suggestion.tt-is-under-cursor {
	background-color: #0097CF;
	color: #FFFFFF;
}
.tt-suggestion p {
	margin: 0;
}
.app_table td, th{
	padding-left:3px;
	padding-right:3px;
	padding-bottom:10px;
	padding-top:10px;
}
form input[type="submit"]{
	background:#e21737;
	color:#fff;
	font-size:1.1em;
	border:none;
	width:100px;
	height:59px;
	outline:none;
	font-weight: 600;
	padding:0.6em 1em;
	transition: 0.5s all;
	-webkit-transition: 0.5s all;
	-moz-transition: 0.5s all;
	-o-transition: 0.5s all;
}
form input[type="submit"]:hover{
	background:#0b648f;
}
</style>
  
  
   
  
<div class="content" style="width:305.816">


		<div class="container">
        <br/><br/><br/>
        <form name="s_by_name" id="s_by_name" action="latest_activities.php" enctype="multipart/form-data" method="post">
        <table><tr><td>
        <input type="text" name="typeahead" id="typeahead" class="typeahead tt-query" autocomplete="off" spellcheck="false" placeholder="Search Activity"></td><td>
        <input type="submit" name="s_by_name" id="s_by_name" /></td></tr></table>
        </form>
   
            <br/><br/>
            <h3 class="heading_style">Latest Activities </h3>
  <table class="app_table" id="tbl">
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
				
			if(isset($_POST['s_by_name']))
			{
				$s_event_name = trim($_POST['typeahead']);
				$query = "SELECT * FROM  `schoolcal` WHERE event ='".$s_event_name."'";
			}	
			else
			{

				$query = "SELECT * FROM  `schoolcal` ORDER BY cal_date ASC LIMIT  $offset, $rec_limit";
					
			}
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