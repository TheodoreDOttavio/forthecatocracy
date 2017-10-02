<?php include('_doc_header.html') ?>

<link rel="stylesheet" href="assets/stylesheets/responsiveslides.css" />
<script type="text/javascript" src="assets/javascripts/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="assets/javascripts/responsiveslides.min.js"></script>
<script>
// Slideshow
$(function () {
  $("#slider").responsiveSlides({
    auto: true,
    pager: false,
    nav: true,
    speed: 1200,
    namespace: "callbacks"
  });
});
</script>

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
          <img src="assets/photos/gallery/2016-12-01-3598-shop.jpg" alt="">
          <p class="caption">The workshop</p>
        </li>
        <li>
          <img src="assets/photos/gallery/IMG_20170313_162536.jpg" alt="">
          <p class="caption">Rough cutting the curved legs.</p>
        </li>
        <li>
          <img src="assets/photos/gallery/2017-05-25-1462.jpg" alt="">
          <p class="caption">Nails can be replaced and prevent unraveling as your royalty frays the fibers.</p>
        </li>
        <li>
          <img src="assets/photos/gallery/2017-10-01-1723.jpg" alt="">
          <p class="caption">Rough cutting the table skirt.</p>
        </li>
        <li>
          <img src="assets/photos/gallery/04-15-07-0022-r.jpg" alt="">
          <p class="caption">Lady Bug doesn't do sawdust.</p>
        </li>
        <li>
          <img src="assets/photos/gallery/2017-10-01-1722.jpg" alt="">
          <p class="caption">Refining the skirt for a tight fit.</p>
        </li>
        <li>
          <img src="assets/photos/gallery/2017-05-25-1459.jpg" alt="">
          <p class="caption">Attaching the top to the skirt.</p>
        </li>
        <li>
          <img src="assets/photos/gallery/2016-05-11-0637.jpg" alt="">
          <p class="caption">Hand planes...</p>
        </li>
        <li>
          <img src="assets/photos/gallery/IMG_20170509_154932.jpg" alt="">
          <p class="caption">Ready for refinishing.</p>
        </li>
        <li>
          <img src="assets/photos/gallery/06-19-07-0015.jpg" alt="">
          <p class="caption">Lady Bug is theatrical.</p>
        </li>
      </ul>
    </div>

    </div>



  </div>
</body>
</html>
