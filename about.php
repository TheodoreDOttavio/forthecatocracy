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
  <link rel="stylesheet" href="assets/stylesheets/responsiveslides.css" />
  <link rel="stylesheet" href="assets/stylesheets/catocracy.css" />

  <script type="text/javascript" src="assets/javascripts/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="assets/javascripts/responsiveslides.min.js"></script>
  <script>
  // Slideshow
  $(function () {
    $("#slider").responsiveSlides({
      auto: true,
      pager: false,
      nav: true,
      speed: 800,
      namespace: "callbacks"
    });
  });
  </script>
</head>

<body>
  <!-- https://www.etsy.com/shop/ForTheCatocracy -->
  <div class="container-fluid">
    <?php include('_navigation.html') ?>

    <!-- Content Body -->
    <!-- Slideshow -->
    <div id="wrapper">

    <div class="callbacks_container">
      <ul class="rslides" id="slider">
        <li>
          <img src="assets/photos/gallery/2017-05-25-1476.jpg" alt="">
          <p class="caption">Elevated food bowls are not for every cat. These are recessed to prevent knocking them around.</p>
        </li>
        <li>
          <img src="assets/photos/gallery/20170313_162536.jpg" alt="">
          <p class="caption">Rough cutting the curved legs.</p>
        </li>
        <li>
          <img src="assets/photos/gallery/20170515_170355.jpg" alt="">
          <p class="caption">Ready for refinishing.</p>
        </li>
        <li>
          <img src="assets/photos/gallery/04-15-07-0022-r.jpg" alt="">
          <p class="caption">She doesn't do sawdust.</p>
        </li>
        <li>
          <img src="assets/photos/gallery/2017-05-25-1458.jpg" alt="">
          <p class="caption">Attaching the top to the skirt.</p>
        </li>
        <li>
          <img src="assets/photos/gallery/2017-05-25-1462.jpg" alt="">
          <p class="caption">Nails can be replaced and prevent unraveling as your royalty frays the fibers.</p>
        </li>
        <li>
          <img src="assets/photos/gallery/2016-05-11-0637.jpg" alt="">
          <p class="caption">Hand planes...</p>
        </li>
      </ul>
    </div>

    </div>



  </div>

</body>

</html>
