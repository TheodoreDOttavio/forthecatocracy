<?php include('_doc_header.html') ?>

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
  ?>
  <!-- https://www.etsy.com/shop/ForTheCatocracy -->
  <div class="container-fluid">
    <?php include('_navigation.html') ?>

    <!-- Content Body -->
    <!-- <div class="container"> -->
      <div class="row">
        <div class="col text-center">
        <!-- https://www.paypal.com/us/cgi-bin/webscr?cmd=_flow&SESSION=ieujovNO8_KBDha0tx64a8jxDKUcXBUPnpXcVACxuIO2jCh2fx498fjWv8e&dispatch=5885d80a13c0db1f8e263663d3faee8d795bb2096d7a7643a72ab88842aa1f54&rapidsState=Merchant__ButtonDesignerFlow___StateButtonDesignerStart&rapidsStateSignature=962f6fbd187db52ec473a404831346aa974d3511 -->
        <?php
        $dirlist = getFileList("assets/photos/{$_GET['id']}");
        foreach($dirlist as $displayHtml) {
          if(substr($displayHtml['name'], -4) == ".php") {
            include("assets/photos/" . $_GET['id'] . "/" . $displayHtml['name']);
          }
        }
        ?>
        </div>
        <div class="col" style="min-height: 500px; min-width: 500px;">

        <div class="callbacks_container">
          <ul class="rslides" id="slider">

        <?php
        $dirlist = getFileList("assets/photos/{$_GET['id']}");
        foreach($dirlist as $displayImage) {
          if(substr($displayImage['name'], -10) != "-thumb.jpg" && substr($displayImage['name'], -4) == ".jpg") {
            echo "<li><img src='assets/photos/{$_GET['id']}{$displayImage['name']}' /></li>";
          }
        }
        ?>
          </ul>
        </div>
        <p class="text-center">
          This was built in a cat free environment to ensure your<br>home owner will be the first to mark it as their personal piece.
        </p>

        </div>
      </div>

    <!-- </div> -->
  </div>
</body>
</html>
