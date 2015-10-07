<?php
    $key=$_GET['key'];
    $array = array();
    $con=mysql_connect("localhost","root","");
    $db=mysql_select_db("studinfosms",$con);
    $query=mysql_query("SELECT a.cal_date, a.event, a.event_description, a.semester, b.dept_name, b.dept_description,  c.course_name, c.description FROM schoolcal a, department b, course c where a.cal_date LIKE '%{$key}%' or a.event LIKE '%{$key}%' or  a.event_description LIKE '%{$key}%' or a.semester LIKE '%{$key}%' or b.dept_name LIKE '%{$key}%' or b.dept_description LIKE '%{$key}%' or  c.course_name LIKE '%{$key}%' or c.description LIKE '%{$key}%'");
    while($row=mysql_fetch_assoc($query))
    {
      $array[] = $row['event'].$row['event_description'].$row['cal_date'].$row['course_name'];
    }
    echo json_encode($array);
?>
