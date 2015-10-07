<?php
require_once('includes/dbcon.php');


if(isset($_GET['search_text'])) {
	echo $search_text = $_GET['search_text'];
		
}
if (!empty($search_text)){
 $query = "SELECT a.cal_date, a.event, a.event_description, a.semester, b.dept_name, b.dept_description,  c.course_name, c.description FROM schoolcal a, department b, course c where a.cal_date LIKE '%{$search_text}%' or a.event LIKE '%{$search_text}%' or  a.event_description LIKE '%{$search_text}%' or a.semester LIKE '%{$search_text}%' or b.dept_name LIKE '%{$search_text}%' or b.dept_description LIKE '%{$search_text}%' or  c.course_name LIKE '%{$search_text}%' or c.description LIKE '%{$search_text}%'";
 
 $query_run = mysql_query($query);
 
 while($query_row = mysql_fetch_array($query_run)){
	 echo $event = $query_row['event']."\n";
	 
}
}
?>