<?php
require('EmailService.php');


/******************************************************
 * Receiver Configuration
 */
$address = "xinerd@qq.com"; // recipient email
$mail->AddAddress($address, "uml"); // Add a recipient

/******************************************************
 * Email Content
 */
$mail->IsHTML(true); // Set email format to HTML

$mail->Subject = "#91513f2015 Verify your Smarter Investor ID!";
$mail->Body =
'Dear <b>user</b>!
<br/><br/>
You recently
signed up <a href="http://www.cs.uml.edu/~xming" target="_blank">Smarter Investor</a>!<br/>
To verify this email address belongs to you, click the link below and then sign in using your
Smartr Investor ID and password.
<br/><br/>

Why you received this email.
#91513f2015 requests verification whenever an email address is selected as an Smarter Investor ID.
Your Smarter Investor ID cannot be used until you verify it.
<br/><br/>
UML Support
<br/>


'; //Email body

//$mail->AddAttachment('xx.xls','my attachment.xls'); // Add attachments and name
//$mail->AddEmbeddedImage("logo.jpg", "my-attach", "logo.jpg"); //set image

if (!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}