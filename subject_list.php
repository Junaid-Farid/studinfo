<?php require_once("includes/session.php");?>
<?php require_once("includes/functions.php");?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/dbcon.php");?>
<?php include("includes/header.php");?>
<div id="menubar">
<?php include("menus.php");?>
</div> 
<div id="module-name">Subjects Filter
</div>



<div id="content">

<div style="width: 500px; margin: 10px auto;">
<form id="form4" name="form4" method="post" action="subject_list.php">


<table class="app_table">
	<tr>
		<th> <div class="_title">Query Options</div></th>
	</tr>
	<tr>
		<td class="form">
			<table width="100%">
					<tr>
					  <td class="_label">Program :</td>
						
												
						<td>
						   <select name="course" id="course">
								 <?php 
									$sql = 'Select * from course';
									$result = mysql_query($sql);
									confirm_query($result);
									while($row = mysql_fetch_array($result)){
										echo ' <option selected="selected" value="'. $row['course_id'].'"> ';
										echo $row['course_name'] . ' </option> '; 
									}
								 
								 ?>
						</select>
						</td>
				    </tr>
						
					<tr>
					  <td class="_label">Year:</td>
					  <td><label for="yr"></label>
						<select name="yr" id="course">
						   <?php 
									$sql = 'Select DISTINCT yr from subjects';
									$result = mysql_query($sql);
									confirm_query($result);
									while($row = mysql_fetch_array($result)){
										echo ' <option selected="selected" value="'. $row['yr'].'"> ';
										echo $row['yr'] . ' </option> '; 
									}
								 
								 ?>
                                 
					  </select> </td>
					</tr>
					<tr>
					   <td class="_label">Semester:</td>
					  <td><label for="sem"></label>
						<select name="sem" id="sem">
						  <?php 
									$sql = 'Select DISTINCT semester from subjects';
									$result = mysql_query($sql);
									confirm_query($result);
									while($row = mysql_fetch_array($result)){
										echo ' <option selected="selected" value="'. $row['semester'].'"> ';
										echo $row['semester'] . ' </option> '; 
									}
								 
								 ?>
						</select>
                        </td>
					</tr>
					
					
					<tr>	<td>				</td>
					   <td align="left">
						
							<input type="submit" name="submit" id="seacrh" value="Search"/>
							<input type="reset" name="reset" id="reset" value="Reset"/>
						
					   </td>
				  </tr>
				  
				
			</table>	
		</td>
	</tr>		
</table>


</form>
</div>
				 
<div id="module-name">List of Subjects
</div>
	
<div id="content">
<div style="font-size:14px; padding:4px; margin:4px; font-weight:bold; letter-spacing:1px; line-height:30px; margin-left:13px;">
	<?php
	if(isset($_POST['submit'])){
		 $course_id = $_POST['course']; 
		 $yr   	   = $_POST['yr']; 
		 $sem 	   = $_POST['sem']; 
		
			$sql = "Select * from course where course_id = " . $course_id;
			$result = mysql_query($sql);
			confirm_query($result);
				while($row = mysql_fetch_array($result)){
					echo '<STRONG> Program : ' . $row['description'] . '<br/>';
					if  ($yr == 1){
						echo '<STRONG> FIRST YEAR';
					}elseif($yr == 2){
						echo '<STRONG> SECOND YEAR';
					}elseif($yr == 3){
						echo '<STRONG> THIRD YEAR';
					}elseif($yr == 4){
						echo '<STRONG> FOURTH YEAR';
					}elseif($yr == 5){
						echo '<STRONG> FIFTH YEAR';
					}
					
					echo '<STRONG> <br/>'. $sem .' Semester';
					echo '<br/>';
					echo '<a href="add_subject.php">[ADD SUBJECT]</a>';	
				}
				
				
				if($course_id == ''){
					$query = "SELECT * FROM subjects";
				}else{
					$query = "SELECT * FROM subjects where course_id = '{$course_id}' AND yr = '{$yr}' AND semester = '{$sem}' ";
				}
	}	
	
	?></div>
		<Table class="app_table" style="width:100%;">
		<tr>
	      	
			<th align="left">Name</th>
			<th align="left">Descriptive Title</th>
			<th align="left">Unit(s)</th>
			<th align="left">Pre-Requisites</th>
            <th align="left">Operation</th>
					
        </tr>
<?php
	
	  $PHP_SELF = $_SERVER["PHP_SELF"];
	  $rec_limit = 15;
	  $query = "SELECT * FROM subjects";				
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
		$query = "SELECT * FROM subjects ".
					"LIMIT  $offset, $rec_limit";
		$result = mysql_query($query);
		confirm_query($result);
					while ($row = mysql_fetch_array($result)) {
						
						echo (@$odd == true) ? ' <tr class="odd_row" > ' : ' <tr class="even_row"> ';
							@$odd = !$odd;
						echo ' <td> ';
						echo '<a href="edit_subject.php?id='.$row['subj_code'].'" class="app_listitem_key">'.$row['subject'].'</a>';
						echo ' <td> ';
						echo $row['description'];
						echo ' <td> ';
						echo $row['unit'];
						echo ' <td> ';
						echo $row['pre'];
						echo '<td>';
						echo '<a href="process_del_subject.php?id='.$row['subj_code'].'" class="app_listitem_key" title="Delete"><img src="img_icon\Trash.ico" width="30" height="30"/></a>';
						
						
			
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

<?php include("includes/footer.php");?>