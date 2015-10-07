<?php require_once("includes/session.php");?>
<?php require_once("includes/functions.php");?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/dbcon.php");?>
<?php include("header.php");?>
<link rel="stylesheet" type="text/css" href="css/eroti.css" />

<!---fb comment--->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=1044506765565837";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<!---end fb comment---->
<?php 
	 $event_id = $_GET['id'];
	

	$query = "SELECT * FROM  `schoolcal` WHERE cal_id = $event_id";
	$result = mysql_query($query);
	confirm_query($result);
	while ($row = mysql_fetch_array($result)){
			$s_id   = $row['cal_id'] ;
			$event_name = $row['event'];
			$event_date = $row['cal_date'];
			$event_des     = $row['event_description'];
			$sem	= $row['semester'];
			$event_dept_id		= $row['cal_dept_id'];
			$event_course_id		= $row['cal_course_id'];			
		
	}

?>
<div class="content" style="width:305.816">
			<div class="container">
            <br/><br/>
            <h3 class="heading_style">Activity Detail</h3>
<form id="form4" name="form4" method="post" action="process_add_stud_sub.php">


<table class="app_table">
	<tr>
		<th> <div class="_title">Details</div></th>
	</tr>
	<tr>
		<td class="form">
		
		<table width="89%">
				<tr>
				   <td width="20%" class="_label"> Event Name:  </td>
					<td width="64%">
						<?php echo $event_name; ?>
					</td>
				</tr>
				<tr>
				   <td class="_label"> Event Date: </td>
					<td>
						<?php echo $event_date;?>
					</td>
				</tr>
				<tr>
				   <td class="_label"> Department: </td>
					<td>
						<?php  
						$sql = 'SELECT dept_name FROM  `department` WHERE dept_id = "'.$event_dept_id.'"';
						$rs = mysql_query($sql);
						confirm_query($rs);
						$rw = mysql_fetch_array($rs);
						//end of department
						echo $rw['dept_name'];
						
						?>
					</td>
				</tr>
				<tr>
				   <td class="_label"> Course:</td>
					<td>
						<?php 
						$sql = 'SELECT course_name FROM  `course` WHERE course_id = "'.$event_course_id.'"';
						$rs = mysql_query($sql);
						confirm_query($rs);
						$rw = mysql_fetch_array($rs);
						//end of department
						echo $rw['course_name'];
						?>
					</td>
				</tr>
				<tr>
				   <td height="42" class="_label"> Semester:</td>
					<td>
						<?php echo $sem; ?>
					</td>
				</tr>
				<tr>
				   <td class="_label">Description Detail: </td>
					<td height="50">
						<?php echo $event_des; ?>
					</td>
		  </tr>
				
			
		</table>		
		
			<hr>	
		</tr>	
        <br/>
        <br/>
        <tr>	
        <td colspan="2">
        <!---facebook comment box--->
                        
      <div class="fb-comments" data-href="https://www.facebook.com/pages/Uni-Swift-Info/975972449127318" data-width="670" data-numposts="5"></div>
                        
                        
                        <!---end facebook comment box---->
        </td>
        </tr>
        
</table>
</form>
</div>
</div>
 
<?php include("footer.php");?>