<?php include('_doc_header.html') ?>

<body>
  <!-- https://www.etsy.com/shop/ForTheCatocracy -->
  <div class="container-fluid">
    <?php include('_navigation.html') ?>

    <!-- Content Body -->
    <div class="container">
      <div class="row">
        <h1>Handmade scratching posts<br>for prestigious feline homes.</h1>
      </div>
      <hr>
      <div class="row">
        These designs came about after making a few cat scratching posts for friends.
        We wanted all natural fibers instead of carpeting.
        Next I tipped the post itself back and curved it like a tree base to help your home owner reach out.
        Instead of attaching the post to a wall, or adding a heavy base I designed a wider base with legs that is a little more stable for clawing.
        The natural fiber rope is attached with simple U-shaped nails and no glue so it can be replaced.
        The rear legs are flush to the back wall in case your space is limited or need to sneak them behind another piece of furniture.
        Finally the construction follows classic furniture design for added strength and long life.
        I hope your kitties will enjoy the look and the feel of these in their home!
      </div>
      <hr>
      <div class="row">
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

    <!-- <img src="assets/images/header.jpg" alt=""></img> -->

  </div>

</body>

</html>
