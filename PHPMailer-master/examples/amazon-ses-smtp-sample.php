<?php

/**
 * This example shows settings to use when sending via Google's Gmail servers.
 */
//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Asia/Riyadh');

require '../PHPMailerAutoload.php';

// Validate required POST data
if (empty($_POST['email']) || empty($_POST['subject']) || empty($_POST['content'])) {
    echo "Error: Missing required fields (email, subject, content).";
    return "Error: Missing required fields.";
}

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server

//Set the hostname of the mail server
$mail->Host = 'email-smtp.us-east-1.amazonaws.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;
 

//Username to use for SMTP authentication - use full email address for gmail - from iAM users
$mail->Username = "AKIAYKIT5KFRNEVPVMG7";

//Password to use for SMTP authentication
$mail->Password = "BFKmbY7mT0hhR1Zrbj27G6yekU2sAQ8TWyHOGKeGftlP";

//Set who the message is to be sent from
$mail->setFrom('contact@mehwarco.com', 'Mehwarco');
$mail->addReplyTo('contact@mehwarco.com', 'Mehwarco');

//Set proper email headers to avoid spam
$mail->XMailer = 'Mehwarco Mailer';
$mail->CharSet = 'UTF-8';
$mail->Encoding = 'base64';

//Set who the message is to be sent to
$mail->addAddress($_POST['email'], '');

//Set the subject line
$mail->Subject = $_POST['subject'];

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML($_POST['content']);

//Set plain text alternative for better deliverability
$mail->AltBody = strip_tags(str_replace(['<br>', '<br/>', '<br />', '</p>', '</h2>', '</h3>', '</h4>'], "\n", $_POST['content']));


//send the message, check for errors
if (!$mail->send()) {
    $result = "Mailer Error: " . $mail->ErrorInfo;
} else {
    $result = "Message sent!";
}
echo $result;
return $result;

