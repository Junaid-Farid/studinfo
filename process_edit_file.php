<?php

	require_once('includes/dbcon.php');
    include("includes/functions.php");
	$id = $_POST['notice_id'];
	
if(isset($_POST['submit']))
{
	
	if(($_FILES['txt_file']['name']=='') || (empty($_FILES['txt_file']['name'])))
	{
		$fileTitle= $_POST['txt_file_title'];
		$fileDesc= $_POST['txt_file_desc'];
		$fileFor= $_POST['txt_file_for'];
		$fileBy= $_POST['txt_file_by'];
		
		$dateTime = date('Y-m-d H:i:s', time());	
		
		
		$query = "UPDATE files SET
				 file_title = '$fileTitle',
				 file_description =  '$fileDesc',
				 file_date =  '$dateTime',
				 file_by =  '$fileBy',
				 file_for  = '$fileFor' WHERE file_id = '$id'";
		
		
		
		mysql_query($query) or die('Error, query failed'); 
	
		header("location:notice_list.php");
	
	}
	
	else if (($_FILES['txt_file']['name']!='') || (!empty($_FILES['txt_file']['name'])))
	{
		$fileTitle= $_POST['txt_file_title'];
		$fileDesc= $_POST['txt_file_desc'];
		$fileFor= $_POST['txt_file_for'];
		$fileBy= $_POST['txt_file_by'];
		
		$dateTime = date('Y-m-d H:i:s', time());	
	
		//deleting the file 
		$query		= "select file_name from files where file_id = ".$id;
		
		$rs			= mysql_query($query);
		$row		= mysql_fetch_array($rs);
		$delFile	= $row['file_name'];
		
		unlink("files/".$delFile);
		//end of of the deleting file
		
		
		$fileName = rand(1000,100000)."-".$_FILES['txt_file']['name'];
		$tmpName  = $_FILES['txt_file']['tmp_name'];
		$fileSize = $_FILES['txt_file']['size'];
		$fileType = $_FILES['txt_file']['type'];
		
		
		
		$folder   ="files/";
		
		move_uploaded_file($tmpName,$folder.$fileName);
		
		$query = "UPDATE files SET
				 file_title = '$fileTitle',
				 file_name = '$fileName',
				 file_size = '$fileSize',
				 file_type = '$fileType',
				 file_description =  '$fileDesc',
				 file_date =  '$dateTime',
				 file_by =  '$fileBy',
				 file_for  = '$fileFor' WHERE file_id = '$id'";
	
		
		
		mysql_query($query) or die('Error, query failed'); 
	
		header("location:notice_list.php");
		
		
		
		
	}
} 
?>