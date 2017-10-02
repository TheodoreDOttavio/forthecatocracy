<?php include('_doc_header.html') ?>

<body>
  <!-- https://www.etsy.com/shop/ForTheCatocracy -->
  <div class="container-fluid">
    <?php include('_navigation.html') ?>

    <!-- Content Body -->
    <div class="container">
      <hr>
      <div class="row">
        <div class="col text-left">
          <h1>Email</h1>
        </div>
        <div class="col text-right">
          <h2><a href="mailto:teddottavio@gmail.com" class="btn btn-md btn-success col-sm-8">teddottavio@gmail.com</a></h2>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col text-left">
          <h1>Txt Message</h1>
        </div>
        <div class="col text-right">
          <form action="mailer.php" method="POST">
            <b>Your phone number:</b>&nbsp;<input type="text" name="clientPhone" class="col-sm-5" value='<?php echo($_GET['clientPhone']); ?>' >
            <br><textarea name="message" rows="4" class="col-sm-12"><?php echo($_GET['message']); ?></textarea>
            <br><input type="submit" value="Send a txt" class="btn btn-md btn-success col-sm-8" />
          </form>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col text-left">
          <h1>Etsy Shop</h1>
        </div>
        <div class="col text-right">
          <a href="https://www.etsy.com/shop/ForTheCatocracy" class="btn btn-md btn-info col-sm-8">Visit on Etsy</a>
        </div>
      </div>
  </div>
</body>
</html>
