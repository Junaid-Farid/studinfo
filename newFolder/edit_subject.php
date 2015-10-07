<?php require_once("includes/session.php");?>
<?php require_once("includes/functions.php");?>
<?php require_once("includes/dbcon.php");?>
<?php include("includes/header.php");?>
<div id="menubar">
	<?php include("menus.php");?></div> 
		 
<div id="module-name">Edit Subject
</div>

<?php
	$id = $_GET['id'];
	$query = 'Select * from subjects where subj_code = '.$id;
	$result= mysql_query($query);
	while($row = mysql_fetch_array($result))
		{
			$subj = $row['subject'];
			$desc = $row['description'];
			$unit = $row['unit'];
			  $id = $row['subj_code'];
			 $pre = $row['pre'];
		}


?>
<div id="content">

<form id="form4" name="form4" method="post" action="process_edit_subject.php">


<table class="app_table">
	<tr>
		<th> <div class="_title">Details</div></th>
	</tr>
	<tr>
		<td class="form">
			<table width="50%">
				
				<tr>
				   <td class="_label">Course</td>
				  <td><label for="course"></label>
					<select name="course" id="sem">
					 <?php 
						$sql = 'Select * from course';
						$result = mysql_query($sql);
						while($row = mysql_fetch_array($result)){
							echo ' <option value="'. $row['course_id'].'"> ';
							echo $row['course_name'] . ' </option> '; 
						}
					 
					 ?>
					</select></td>
				</tr>				
				  <tr>
				   <td class="_label">Year:</td>
				  <td><label for="yr"></label>
					<select name="yr" id="course">
					  <option value="1">1st</option>
					  <option value="2">Second</option>
					  <option value="3">Third</option>
					  <option value="4">Fourth</option>
					  <option value="5">Fifth</option>
				  </select> </td>
				  </tr>
				  <tr>
				   <td class="_label">Semester</td>
				  <td><label for="sem"></label>
					<select name="sem" id="sem">
					  <option value="First">1st </option>
					  <option value="Second ">2nd </option>
                      <option value="Third ">3rd </option>
                      <option value="Fourth ">4th </option>
                      <option value="Fifth ">5th </option>
                      <option value="Sixth ">6th </option>
                      <option value="Seventh ">7th </option>
                      <option value="Eighth ">8th </option>
					  <option value="Summer">Summer</option>
					</select></td>
				  
				</tr>

				<tr>
					  <td class="_label">Subject:</td>
					<td width="428">
					  <label for="subj"></label>
					  <input type="text" name="subj" id="subj"  class="txtbox" value="<?php echo $subj;?>"/>
					</td>
				  </tr>
				  <tr>
					<td class="_label">Description:</td>
					<td>
					  <label for="subjdesc"></label>
					  <input name="subjdesc" type="text" id="subjdesc" size="40" value="<?php echo $desc; ?>" />
					</td>
				  </tr>
				  <tr>
					<td class="_label">Units:</td>
					<td>
					  <label for="subjunit"></label>
					  <input   type="text" name="subjunit" id="subjunit" value="<?php  echo $unit;?>" />
					</td>
				  </tr>
				  				 <tr>
					<td class="_label">Pre-Requisites:</td>
					<td>
					  <label for="subjunit"></label>
					  <select name="pre" id="pre">
					  <option value="<?php echo  $pre;?>">
						<?php echo  $pre;?></option>
					     <?php 
						$sql = 'Select * from subjects';
						$result = mysql_query($sql);
						while($row = mysql_fetch_array($result)){
							echo ' <option value="'. $row['subject'].'"> ';
							echo $row['subject'] . ' </option> '; 
						}
					 
					 ?>
					</select>
					</td>
				  <tr>
					<td>
						<input type="hidden" name="id" value="<?php echo $id;?>">
					</td>
					<td>
					  <input type="submit" name="submit" id="Save_Subject" value="Save" />
				   </td>
				  </tr>
				  
				
			</table>	
		</tr>		
</table>
</form>
<?php include("includes/footer.php");?>