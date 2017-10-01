<?php include('_doc_header.html') ?>

<body>
  <!-- https://www.etsy.com/shop/ForTheCatocracy -->
  <div class="container-fluid">
    <?php include('_navigation.html') ?>

    <!-- Content Body -->
    <div class="container">
      <?php
      //https://github.com/PHPMailer/PHPMailer
      use PHPMailer\PHPMailer\PHPMailer;
      use PHPMailer\PHPMailer\Exception;
      require 'vendor/autoload.php';                        //Load composer's autoloader

      $gpass = getenv('gpass');
      $mail = new PHPMailer(true);                          // Passing `true` enables exceptions
      try {
        $mail->SMTPDebug = 2;                               // Enable verbose debug output
        $mail->IsSMTP();
        $mail->CharSet = 'UTF-8';

        $mail->SMTPAuth = true;                             // Enable SMTP authentication
        $mail->Host = "smtp.gmail.com";
        $mail->Username = 'teddottavio@gmail.com';
        $mail->Password = $gpass;
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;                                  // TCP port to connect to (25 for gmail?)
        $mail->SetFrom("teddottavio@gmail.com");
        $mail->AddAddress("7186785933@myboostmobile.com");  // Add a recipient
        $mail->AddAddress("teddottavio@gmail.com");

        $mail->IsHTML(false);                               // Set email format to HTML
        $mail->Subject = $_POST['clientPhone'];
        $mail->Body = $_POST['message'];
        $mail->Send();
        echo '<h1>Your message has been sent</h1>';
      } catch (Exception $e) {
        echo ('<h1>Message could not be sent</h1>');
        echo ('<p>Mailer Error: ' . $mail->ErrorInfo . "</p>");
      }
      ?>
    </div>
  </div>
</body>
</html>
