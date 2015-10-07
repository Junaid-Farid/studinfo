<?php include("includes/dbcon.php");?>
<?php include("includes/functions.php");?>
<?php

		$reciever 	= $_POST['reciever'];
		$msg 		= $_POST['textsms'];
		$smstype 	= "SMS:TEXT";
		$stud_id 	= $_GET['id'];
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
				window.location = "send_sms.php?id=<?php echo $stud_id; ?>";
			</script>
<?php
		}

 
?>