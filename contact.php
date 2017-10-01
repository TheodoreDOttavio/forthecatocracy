<?php include('_doc_header.html') ?>

<body>
  <!-- https://www.etsy.com/shop/ForTheCatocracy -->
  <div class="container-fluid">
    <?php include('_navigation.html') ?>

    <!-- Content Body -->
    <div class="container">
      <h1>Email</h1>
      <p><a href="mailto:teddottavio@gmail.com">teddottavio@gmail.com</a>
    </div>
    <div class="container">
      <h1>Txt</h1>
      <form action="mailer.php" method="POST">
        <p><input type="text" name="clientPhone" value="000 555-1234" />&nbsp;Your phone number
        <p><textarea name="message"></textarea>
        <p><input type="submit" value="Send it" />
      </form>
    </div>
  </div>
</body>
</html>
