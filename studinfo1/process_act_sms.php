<?php include("includes/dbcon.php");?>
<?php include("includes/functions.php");?>
<?php

		$reciever 	= $_POST['reciever'];
		$msg 		= $_POST['textsms'];
		$smstype 	= "SMS:TEXT";
		
 		$query = "insert into ozekimessageout (receiver,msgtype,msg,status)
										values ('" . $reciever . "', '" . $smstype . "', '" . $msg . "', 'send')";
        $result = mysql_query($query) or die;
        if (!$result)
        {
            echo (mysql_error() . "<br>");
            return false;
        }else{
		?>
			  	
			<script type="text/javascript">
				alert("Message Sent!");
				window.location = "calendar_list.php";
			</script>
<?php
		}

 
?>