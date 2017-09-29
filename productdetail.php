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
    <div class="container">
        <!-- https://www.paypal.com/us/cgi-bin/webscr?cmd=_flow&SESSION=ieujovNO8_KBDha0tx64a8jxDKUcXBUPnpXcVACxuIO2jCh2fx498fjWv8e&dispatch=5885d80a13c0db1f8e263663d3faee8d795bb2096d7a7643a72ab88842aa1f54&rapidsState=Merchant__ButtonDesignerFlow___StateButtonDesignerStart&rapidsStateSignature=962f6fbd187db52ec473a404831346aa974d3511 -->

        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="VGAYKR78Z7KZG">
        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>

        <div class="callbacks_container">
          <ul class="rslides" id="slider">

        <?php
        function getFileList($dir) {
          $retval = array();

          // add trailing delimiter if needed
          if(substr($dir, -1) != "/") $dir .= "/";

          // open pointer to directory and read list of files
          $d = @dir($dir) or die("getFileList: Failed opening directory $dir for reading");
          while(false !== ($entry = $d->read())) {
            // skip hidden files
            if($entry[0] == ".") continue;
            // "name" => "$dir$entry"
            if(is_dir("$dir$entry")) {
              $retval[] = array(
                "name" => "$entry/"
              );
            } elseif(is_readable("$dir$entry")) {
              $retval[] = array(
                "name" => "$entry"
              );
            }
          }
          $d->close();

          return $retval;
        }

        $dirlist = getFileList("assets/photos/{$_GET['id']}");
        foreach($dirlist as $displayImage) {
          if(substr($displayImage['name'], -10) != "-thumb.jpg") {
            echo "<li><img src='assets/photos/{$_GET['id']}/{$displayImage['name']}' /></li>";
          }
        }
        ?>
          </ul>
        </div>
    </div>

  </div>

</body>

</html>
