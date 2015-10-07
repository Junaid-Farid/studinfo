<?php
require_once('includes/dbcon.php');
include("includes/functions.php");

if(isset($_POST['uname']))
{
	$name=mysql_real_escape_string($_POST['uname']);
	$query = 'select uname from users where uname="'.$name.'"';
	
	
	$rs=mysql_query($query);
	
	$row=mysql_num_rows($rs);
	if($row==0)
	{
		echo "<span style='color:green;'>Available</span>";
	}
	else
	{
		echo "<span style='color:red;'>Already exist</span>";
	}
}

?>