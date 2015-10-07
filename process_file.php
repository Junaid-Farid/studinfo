<?php

	require_once('includes/dbcon.php');
    include("includes/functions.php");
	
	
if(isset($_POST['submit']) && $_FILES['txt_file']['size'] > 0)
{
	
	$fileName = rand(1000,100000)."-".$_FILES['txt_file']['name'];
	$tmpName  = $_FILES['txt_file']['tmp_name'];
	$fileSize = $_FILES['txt_file']['size'];
	$fileType = $_FILES['txt_file']['type'];
	
	$folder   ="files/";
	
	move_uploaded_file($tmpName,$folder.$fileName);
	
	$fileTitle= $_POST['txt_file_title'];
	$fileDesc= $_POST['txt_file_desc'];
	$fileFor= $_POST['txt_file_for'];
	$fileBy= $_POST['txt_file_by'];
	
	$dateTime = date('Y-m-d H:i:s', time());
	
	
	

	$query = "INSERT INTO files (file_title, file_name, file_size, file_type, file_description, file_date, file_by, file_for )".
	"VALUES ('$fileTitle','$fileName', '$fileSize', '$fileType', '$fileDesc', '$dateTime', '$fileBy', '$fileFor')";
	
	
	mysql_query($query) or die('Error, query failed'); 

	echo "<br>File $fileName uploaded<br>";
	header("location:notice_files.php");
} 
?>