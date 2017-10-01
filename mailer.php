<?php
// echo("sent from ". $_POST['clientPhone']. "<br>The message is: ". $_POST['message']);
// mail('7186785933@myboostmobile.com', 'Catocracy-Contact', $_POST['message']);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
  //https://github.com/PHPMailer/PHPMailer
  $mail->SMTPDebug = 2;                        // Enable verbose debug output
  $mail->IsSMTP();
  $mail->CharSet = 'UTF-8';

  $mail->SMTPAuth = true;                               // Enable SMTP authentication
  $mail->Host     = "teddottavio@gmail.com";            // SMTP server example
  $mail->Username = 'teddottavio';                      // SMTP username
  $mail->Password = getenv('gpass');                    // SMTP password
  $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
  $mail->Port = 25;                                     // TCP port to connect to
  $mail->addAddress('7186785933@myboostmobile.com');    // Add a recipient

  $mail->isHTML(false);                                  // Set email format to HTML
  $mail->Subject = $_POST['clientPhone'];
  $mail->Body = $_POST['message'];
  $mail->send();
  echo 'Message has been sent';
} catch (Exception $e) {
  echo 'Message could not be sent.';
  echo 'Mailer Error: ' . $mail->ErrorInfo;
}
?>
