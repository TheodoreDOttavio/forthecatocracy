<?php
echo("sent from ". $_POST['clientPhone']. "<br>The message is: ". $_POST['message']);
// mail('7186785933@myboostmobile.com', 'Catocracy-Contact', $_POST['message']);

//https://github.com/PHPMailer/PHPMailer
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->CharSet = 'UTF-8';

$mail->Host       = "teddottavio@gmail.com"; // SMTP server example
$mail->SMTPDebug  = 0;                       // enables SMTP debug information (for testing)
$mail->SMTPAuth   = true;                    // enable SMTP authentication
$mail->Port       = 25;                      // set the SMTP port for the GMAIL server
$mail->Username   = "teddottavio";
$mail->Password   = getenv('gpass');
$mail->isHTML(false);                                  // Set email format to HTML
$mail->Subject = $_POST['clientPhone'];
$mail->AltBody = $_POST['message'];
?>
