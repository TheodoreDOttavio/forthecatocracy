<?php include('_doc_header.html') ?>

<body>
  <!-- https://www.etsy.com/shop/ForTheCatocracy -->
  <div class="container-fluid">
    <?php include('_navigation.html') ?>

    <!-- Content Body -->
    <div class="container">
      <hr>
      <div class="row">
        <h1>Email</h1>
        <a href="mailto:teddottavio@gmail.com">teddottavio@gmail.com</a>
      </div>
      <hr>
      <div class="row">
        <h1>Txt</h1>
        <form action="mailer.php" method="POST">
          <br><input type="text" name="clientPhone" value="000 555-1234" />&nbsp;Your phone number
          <br><textarea name="message" rows="4" cols="80"></textarea>
          <br><input type="submit" value="Send it" />
        </form>
      </div>
  </div>
</body>
</html>
