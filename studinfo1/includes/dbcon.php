<?php
	require_once("constants.php");
	$connection = mysql_connect(DB_SERVER, DB_USER, DB_PASS);
	if (!$connection) {
		die('Not connected : ' . mysql_error());
	}
	
	$db_selected = mysql_select_db(DB_NAME, $connection);
	if (!$db_selected) {
		die ('Database Selection Failed! : ' . mysql_error());
	}
?>
