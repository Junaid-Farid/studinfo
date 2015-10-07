<?php 
//Connect to database
 
	mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("studinfosms") or die(mysql_error());
$sql = "SELECT s_email FROM student";

//test
mail( "junaid.ahmed.infome@gmail.com", "Subject:testing", "Message from JunaidAhmed", "From:junaid.ahmed.infome@gmail.com" );
//end test


	$res = mysql_query($sql) or die(mysql_error());
	while( $row = mysql_fetch_assoc($res) )
	{
	 $area = $row['s_email']. ", ";  
			
	// read the list of emails from the file.
	$email_list = $area;
	
	// count how many emails there are.
	$total_emails = count($email_list);
	
	// go through the list and trim off the newline character.
	for ($counter=0; $counter<$total_emails; $counter++) {
   $email_list[$counter] = trim($email_list[$counter]);
   }
 
	$to = $email_list;
 
	echo $to;
	}
if (isset($_REQUEST['email']))
//if "email" is filled out, send email
	  {
	  //send email
	  
	  $email = $_REQUEST['email'] ; 
	  
	  $subject = $_REQUEST['subject'] ;
	  $message = $_REQUEST['message'] ;
	  mail( "junaid.ahmed.infome@gmail.com", "Subject: $subject",
	  $message, "From: $email" );
	  echo "Thank you for using our mail form";
	  }
	else
	//if "email" is not filled out, display the form
	  {
	  echo "<form method='post' action='send_email.php'>
	  Subject: <input name='subject' type='text' /><br />
	  Message:<br />
	  <textarea name='message' rows='15' cols='40'>
	  </textarea><br />
	  <input type='submit' />
	  </form>";
	  }
?>