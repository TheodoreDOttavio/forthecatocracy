<!doctype html>
<!--[if lte IE 9]>
<html lang="en" class="oldie">
<![endif]-->
<!--[if gt IE 9]><!-->
<html lang="en">
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <title>Furniture for the Catocracy</title>

  <link rel="stylesheet" href="assets/stylesheets/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/stylesheets/font-awesome.min.css" />
  <link rel="stylesheet" href="assets/stylesheets/catocracy.css" />

  <script type="text/javascript" src="assets/javascripts/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="assets/javascripts/catocracy.js"></script>

</head>

<body>
  <!-- https://www.etsy.com/shop/ForTheCatocracy -->
  <div class="container-fluid">
    <?php include('_navigation.html') ?>

    <!-- Content Body -->
    <div class="container">
      <h1>eMail</h1>
      <a href="mailto:teddottavio@gmail.com">teddottavio@gmail.com</a>
    </div>
    <div class="container">
      <h1>Text Message:</h1>
      <form action="mailer.php" method="POST">
        <input type="text" name="clientPhone" value="000 555-1234" />
        <textarea name="message"></textarea>
        <br><input type="submit" value="Send" />
      </form>
    </div>


  </div>

</body>

</html>
