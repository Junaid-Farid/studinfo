<?php require_once("includes/session.php");?>
<?php require_once("includes/functions.php");?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/dbcon.php");?>
<?php include("includes/header.php");?>
<div id="menubar">

</script>
	<?php include("menus.php");?>
		  </div>
</div> 
		 
<div id="module-name">Student Filter
</div>



<div id="content">

<div style="width: 500px; margin: 10px auto;">
<form id="form4" name="form4" method="post" action="process_student_filter.php">


<table class="app_table">
	<tr>
		<th> <div class="_title">Query Options</div></th>
	</tr>
	<tr>
		<td class="form">
			<table width="100%">
					<tr>
					  <td class="_label">Student Id :</td>
						<td>
							<select id="idno" name="idno">
                            <?php 
									$sql = 'Select s_id from stud_course';
									$result = mysql_query($sql);
									confirm_query($result);
									while($row = mysql_fetch_array($result)){
										echo ' <option selected="selected" value="'. $row['s_id'].'"> ';
										echo $row['s_id'] . ' </option> '; 
									}
								 
								 ?>
                               </select>
                            
						</td>
					</tr>
				 
					<tr>
					  <td class="_label">Student Name :</td>
						<td>
							<select id= "studname" name="studname">
                             <?php 
									$sql = 'Select s_name from stud_course';
									$result = mysql_query($sql);
									confirm_query($result);
									while($row = mysql_fetch_array($result)){
										echo ' <option selected="selected" value="'. $row['s_name'].'"> ';
										echo $row['s_name'] . ' </option> '; 
									}
								 
								 ?>
                               </select>
						</td>
					</tr>
					<tr>
					  <td class="_label">Department :</td>
						<td>
							<select id="dept" name="dept" >
                              <?php 
									$sql = 'Select course_name from stud_course';
									$result = mysql_query($sql);
									confirm_query($result);
									while($row = mysql_fetch_array($result)){
										echo ' <option selected="selected" value="'. $row['course_name'].'"> ';
										echo $row['course_name'] . ' </option> '; 
									}
								 
								 ?>
                               </select>
						</td>
					</tr>
		
					<tr><td>					</td>
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
<div id="module-name">Details
</div>

	<form id="form4" name="form4" method="post" action="">
	<Table class="app_table" style="width:100%;">
				<tr>
					<th align="left">Student Id</th>
					<th align="left">Student Name</th>
					<th align="left">Address</th>
					<th align="left">Sex</th>
					<th align="left">Department</th>
					<!--<th align="left">SY</th>-->
					<th align="left">Contact No.</th>
					<th align="left">Student Grades</th>
					<th align="left">Subjects Enrolled</th>

					</tr>
<?php
$PHP_SELF = $_SERVER["PHP_SELF"];
						$rec_limit = 5;
	
						$query = 'SELECT * FROM stud_course';
						
						$result = mysql_query($query);
						
							$result = mysql_query($query);
							confirm_query($result);
							$count = mysql_num_rows($result);
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
				
				$query = "SELECT * FROM stud_course ".
					"LIMIT  $offset, $rec_limit";
					$result = mysql_query($query);
					
							while ($row = mysql_fetch_array($result)) {
							echo (@$odd == true) ? ' <tr class="odd_row" > ' : ' <tr class="even_row"> ';
							@$odd = !$odd;
								echo ' <td> ';
								echo '<a href="edit_student.php?id='.$row['s_id'].'" class="app_listitem_key">'.$row['s_id'].'</a>';
								echo ' <td> ';
								echo $row['s_name'];
								echo ' <td> ';
								echo $row['s_address'];
												
								echo ' <td> ';
								echo $row['sex'];
								echo ' <td> ';
								echo $row['course_name'];
								echo ' </td> ';
								echo ' <td> ';
								echo $row['s_guardian_contact'];
								echo'<input type="hidden" name="contact[]" value='.$row['s_guardian_contact'].' class="txtbox">';
										//$row['s_id'];
										$sql = "SELECT * 
													FROM  `grades` 
													WHERE  `s_id` =".$row['s_id'];
										$results = mysql_query($sql) or die;
										
										echo ' <td> ';	
										
										
										  $total = 0;
										
											 while($rows = mysql_fetch_array($results)){
												 
														$subj = $rows['subj_code'];
														$grades = $rows['grades'];
														
														if ($grades == 0 ){
															$grades == 'inc';
														}else{
															$grades == $grades;
														}
														$total = $total + $grades;
														
													}
											echo $total;
											echo '<br/>';
											
											echo '  from: School registrar';		
																
								
								echo ' <td align="left"> ';
								echo ' <a href="add_grades.php?s_id='.$row['s_id'].'&courseid='.$row['course_id'].'" title="Add Subject"><img src="img_icon\Plus.ico" width="30" height="30"/></a>';
								echo ' <a href="stud_subj_list.php?s_id='.$row['s_id'].'&courseid='.$row['course_id'].'" title="View"><img src="img_icon\Document.ico" width="30" height="30"/></a>';

							}
		?>
					<tr>
						<td colspan="10" align="center">
							<!--<input type="submit" name="submit" align = "center" value="Send Grades to students" />-->
						</td>
					</tr>
	</table>
    	<table class="app_table" style="width:100%;" >
				<tr>
					<td align="center">
		<?php
												
					if( $page > 0 )
					{
					   $last = $page - 2;
					   echo @"<a href=\"$PHP_SELF?page=$last\" title='Previous'><img src=\"img_icon\\previous.ico\" width='30' height='30'/></a>  ";
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
 
 </form>
 <br/> <br/> <br/>
<?php include("includes/footer.php");?>
