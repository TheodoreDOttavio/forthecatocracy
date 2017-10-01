<?php
// echo("sent from ". $_POST['clientPhone']. "<br>The message is: ". $_POST['message']);
// mail('7186785933@myboostmobile.com', 'Catocracy-Contact', $_POST['message']);

$gpass = getenv('gpass');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
  //https://github.com/PHPMailer/PHPMailer
  $mail->SMTPDebug = 2;                        // Enable verbose debug output
  // $mail->IsSMTP();
  $mail->CharSet = 'UTF-8';

  $mail->SMTPAuth = true;                               // Enable SMTP authentication
  $mail->Host = "smtp.gmail.com";
  $mail->Username = 'teddottavio@gmail.com';
  $mail->Password = $gpass;
  $mail->SMTPSecure = 'ssl';
  $mail->Port = 465;                                    // TCP port to connect to (25 for gmail?)
  $mail->SetFrom("teddottavio@gmail.com");
  $mail->AddAddress("7186785933@myboostmobile.com");    // Add a recipient
  $mail->AddAddress("teddottavio@gmail.com");

  $mail->IsHTML(false);                                  // Set email format to HTML
  $mail->Subject = $_POST['clientPhone'];
  $mail->Body = $_POST['message'];
  $mail->Send();
  echo 'Message has been sent';
} catch (Exception $e) {
  echo ('<br>Message could not be sent.<br>');
  echo ('Mailer Error: ' . $mail->ErrorInfo);
}
?>
