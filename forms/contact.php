<?php
require 'PHPMailer/class.phpmailer.php';

if(isset($_POST['send']))
{     
            $name=$_POST['name'];
            $email=$_POST['email'];
            $msg=$_POST['message'];
            $subject=$_POST['subject'];
    
            $mail = new PHPMailer(true); 

        	$mail->IsSMTP();                           
        	$mail->SMTPAuth   = false;                 
        	$mail->Port       = 25;                    
        	$mail->Host       = "localhost"; 
        	$mail->Username   = "inquiry@siege.co.in";   
        	$mail->Password   = "Gowtham143@";            
        
        	$mail->IsSendmail();  
        
        	$mail->From       = "SIEGE";
        	$mail->FromName   = "siege.co.in";
        
        	$mail->AddAddress($email);
            $mail->Subject  = "Thank you $name for contacting us!";
        	$mail->WordWrap   = 80;

            $mail->MsgHTML($msg+"Thank you $name for contacting us!");
        	$mail->IsHTML(true); 
                 
            if(!$mail->Send())
            {
                   echo "Mail Not Sent";
            }
            else
            {
               	echo '<script language="javascript">';
    	        echo 'alert("Thank You Contacting Us We Will Response You As Early Possible")';
    	        echo '</script>';
         
            } 
        	
}        	    
        
