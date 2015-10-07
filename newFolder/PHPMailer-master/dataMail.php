<?php
        
		ob_start();
		//connection
		$servername		=	"127.0.0.1"; // 127.0.0.1
	$username		=  "root";
	$password		= "";
	$database		= "test";
	
	
	$link		     	=	mysql_connect($servername, $username, $password);
	
					echo	mysql_select_db($database, $link);
							
		
		//end connection
		
		
		
		
        //smtp detail start
		include 'class.smtp.php';
        require 'class.phpmailer.php';
        $mail=new PHPMailer();
        $mail->IsSMTP(); // telling the class to use SMTP

        $mail->SMTPAuth   = true;                  // enable SMTP authentication

        //SMTP detail from here 
        //$mail->SMTPSecure = "ssl";
        $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
        $mail->Port       = 587;                   // set the SMTP port for the GMAIL server
        $mail->Username   = "attiquetaunsvi1@gmail.com";  
        $mail->Password   = "khan201515";    
        //$mail->SMTPDebug=1;
        //SMTP deatil end
        //smtp mail end
       $query = mysql_query ( "SELECT * FROM timetable" );
	   echo $query;
    	while($row = mysql_fetch_object($query))
        {    
			$strMessage = "<tr>
			<td width=193 height=40 class=rightstyle>Voucher Number : </td>
			<td width=229 class=leftstyle> $row->name </td>
			<td width=234 class=rightstyle>Reference Number : </td>
			<td width=234 class=leftstyle> $row->address </td>
			<td width=234 class=rightstyle>Email : </td>
			<td width=234 class=leftstyle> $row->email </td>
		  </tr>";
        }

       // $flgSend = @mail($strTo,$strSubject,$strMessage,$strHeader);  // @ = No show error //  
        $mail->FromName = "M Attique";
        $mail->From = "attiquetaunsvi1@gmail.com";
        $mail->ContentType ="text/html";
        $mail->AddAddress('junaid.ahmed.infome@gmail.com');//mail will be send on this email
        $mail->Subject='customer vouchersag';      
        $mail->Body = $strMessage;

        if($mail->Send())
        {
        echo "mail send.";
        }  
        else  
        {  
        echo "Cannot send mail.";  
        }
       
        ob_flush();
     ?>