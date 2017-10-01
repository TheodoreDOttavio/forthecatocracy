<?php include('_doc_header.html') ?>

<script type="text/javascript" src="assets/javascripts/jquery-3.2.1.min.js"></script>

<body>
  <!-- https://www.etsy.com/shop/ForTheCatocracy -->
  <div class="container-fluid">
    <?php include('_navigation.html') ?>

    <!-- Content Body -->
    <div class="container">
      <div class="row">

        <!-- <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
          <input type="hidden" name="cmd" value="_s-xclick">
          <input type="hidden" name="hosted_button_id" value="LKDDG282TCVRY">
          <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
          <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form> -->

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
                "name" => "$entry/",
                "type" => filetype("$dir$entry"),
                "size" => 0,
                "lastmod" => filemtime("$dir$entry")
              );
            } elseif(is_readable("$dir$entry")) {
              $retval[] = array(
                "name" => "$entry",
                "type" => mime_content_type("$dir$entry"),
                "size" => filesize("$dir$entry"),
                "lastmod" => filemtime("$dir$entry")
              );
            }
          }
          $d->close();

          return $retval;
        }

        $dirlist = getFileList("assets/photos/");
        foreach($dirlist as $productdir) {
          if($productdir['name'] != "gallery/") {
            $product = getFileList("assets/photos/{$productdir['name']}");
            foreach($product as $thumb) {
              if(substr($thumb['name'], -10) == "-thumb.jpg") {
                // echo "{$thumb['name']}\n";
                echo "<span class='mx-auto d-block'><a href='productdetail.php?id={$productdir['name']}' >";
                echo "<img class='rounded' src='assets/photos/{$productdir['name']}/{$thumb['name']}' />";
                echo "</span></a>";
              }
            }
          }
        }
        ?>
      </div>
    </div>

  </div>

</body>

</html>
