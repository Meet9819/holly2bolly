<?php

$to = "monitma7@gmail.com"; //$email ;

$ccEmail = "info@k-indiastar.com";

$subject = 'K-INDIA Registration : Thank you'; 

$random_hash = md5(date('r', time())); 

$headers = "From:K-INDIA : Thank you<info@k-indiastar.com>\r\nReply-To:info@k-indiastar.com\r\nCc: $ccEmail";

$headers .= "\r\nContent-type: text/html\r\n";

$message.= "<html>";

$message.= "<head>";

$message.= "<title>K-INDIA Registration : Thank you</title>";

$message.= "<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1'>";

$message.= "</head>";

$message.= "<body>";


$message .= "<p style='color: #444;font-size: 15px;line-height: 1.2em;margin-bottom: 0px;padding-bottom: 0px;'>Dear $name</p>";

$message .= "<p style='color: #444;font-size: 14px;line-height: 1.2em;margin-bottom: 0px;padding-bottom: 0px;'>Your Details are :</p>";

$message .= "<p style='color: #444;font-size: 14px;line-height: 1.2em;margin-bottom: 0px;padding-bottom: 0px;'>Username : $username</p>";

$message .= "<p style='color: #444;font-size: 14px;line-height: 1.2em;margin-bottom: 0px;padding-bottom: 0px;'>Password. : $password</p>";

$message .= "<p style='color: #444;font-size: 14px;line-height: 1.2em;margin-bottom: 0px;padding-bottom: 0px;'>Email : $email</p>";

$message .= "<p style='color: #444;font-size: 14px;line-height: 1.2em;margin-bottom: 0px;padding-bottom: 0px;'>Phone No. : $phn_no</p>";

$message .= "<p style='color: #444;font-size: 14px;line-height: 1.2em;margin-bottom: 0px;padding-bottom: 0px;'>DOB. : $dob</p>";

$message .= "<p style='color: #444;font-size: 14px;line-height: 1.2em;margin-bottom: 0px;padding-bottom: 0px;'>Experience. : $experience</p>";

$message .= "<p style='color: #444;font-size: 14px;line-height: 1.2em;margin-bottom: 0px;padding-bottom: 0px;'>Category. : $cate</p>";

$message .= "<p style='color: #444;font-size: 14px;line-height: 1.2em;margin-bottom: 0px;padding-bottom: 0px;'>Role. : $career_role</p>";

$message .= "<p style='color: #444;font-size: 14px;line-height: 1.2em;margin-bottom: 0px;padding-bottom: 0px;'>Address. : $address</p>";

$message .= "<p style='color: #444;font-size: 14px;line-height: 1.2em;margin-bottom: 0px;padding-bottom: 0px;'>Thank you for Registering With Us, We will reach you soon.</p>";

$message.= "</body>";

$message.= "</html>";

$mail_sent = @mail( $to, $subject, $message, $headers );					
?>