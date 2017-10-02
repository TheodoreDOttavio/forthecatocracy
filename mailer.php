<?php include('_doc_header.html') ?>

<body>
  <!-- https://www.etsy.com/shop/ForTheCatocracy -->
  <div class="container-fluid">
    <?php include('_navigation.html') ?>

    <!-- Content Body -->
    <div class="container text-center">
      <?php
      use PHPMailer\PHPMailer\PHPMailer;
      use PHPMailer\PHPMailer\Exception;
      require 'vendor/autoload.php';                        //Load composer's autoloader

      //eliminate every char except 0-9
      $justNums = preg_replace("/[^0-9]/", '', $_POST['clientPhone']);

      //eliminate leading 1 if its there
      if (strlen($justNums) == 11) {
        $justNums = preg_replace("/^1/", '',$justNums);
      }

      //if we have 10 digits left, it's probably valid.
      if (strlen($justNums) == 10) {
        //https://github.com/PHPMailer/PHPMailer

        $gpass = getenv('gpass');
        $mail = new PHPMailer(true);                          // Passing `true` enables exceptions
        try {
          // $mail->SMTPDebug = 1;                               // Enable verbose debug output
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
          echo ('<h2>Error: ' . $mail->ErrorInfo . "</h2>");
          $msg = htmlspecialchars($_POST['message']);
          $phn = htmlspecialchars($_POST['clientPhone']);
          echo ("<a href='contact.php?message={$msg}&clientPhone={$phn}' class='btn btn-md btn-warning col-sm-3'>Back</a>");
        }
      } else {
        echo ("<h1 class='text-center'>Please enter a ten digit phone number</h1>");
        $msg = htmlspecialchars($_POST['message']);
        $phn = htmlspecialchars($_POST['clientPhone']);
        echo ("<a href='contact.php?message={$msg}&clientPhone={$phn}' class='btn btn-md btn-warning col-sm-3'>Back</a>");
      }
      ?>
      <a href='index.php' class='btn btn-md btn-info col-sm-3'>Home</a>
      <a href='index.php' class='btn btn-md btn-success col-sm-3'>Products</a>
    </div>
  </div>
</body>
</html>
