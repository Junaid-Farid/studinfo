<?php
    $key=$_GET['key'];
    $array = array();
    $con=mysql_connect("localhost","root","");
    $db=mysql_select_db("studinfosms",$con);
    $query=mysql_query("SELECT event FROM schoolcal  where event LIKE '%{$key}%'");
    while($row=mysql_fetch_assoc($query))
    {
      $array[] = $row['event'];
    }
    echo json_encode($array);
?>
