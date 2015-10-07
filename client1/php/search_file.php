<?php
    $key=$_GET['key'];
    $array = array();
    $con=mysql_connect("localhost","root","");
    $db=mysql_select_db("studinfosms",$con);
    $query=mysql_query("SELECT cal_date, event, event_description, semester  FROM schoolcal   where cal_date LIKE '%{$key}%' or event LIKE '%{$key}%' or event_description LIKE '%{$key}%' or semester LIKE '%{$key}%'");
    while($row=mysql_fetch_assoc($query))
    {
      $array[] = $row['cal_date']." ".$row['event']." ".$row['event_description'];
    }
    echo json_encode($array);
?>
