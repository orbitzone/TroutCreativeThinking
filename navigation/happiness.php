<?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>
<?php
		$cssScriptPaths = [
			"/assets/css/reece-trade-outlet.css",
			"/assets/css/reece-nav-updated.css",
      "/assets/css/reece-home.css",
			"/assets/css/reece-bathrooms.css"
		];
	   	include_once($serverBase."/includes/head/head-generic.php");
	?>

<body class="no-touch bathroom-moments account-details-summary withHappinessSubNav">
<div class="ocmain-wrapper">
  <div class="navbar navbar-fixed-top topNav">
    <?php
					$genericNavActiveMenuItem = "Bathrooms";
				   	include_once($serverBase."/includes/nav/nav-generic.php");
				?>

  </div>
    <?php include_once($serverBase."/includes/nav/nav-happiness.php"); ?>
  <div class="row-fluid">
    <div id="headCarousel" class="carousel  slide" data-bs-carousel="carousel" data-bs-carousel-interval="0">
      <div class="carousel-inner">
        <div class="item active"> <a href="/bathroom-sale">
        	<img src="http://www.reece.com.au/assets/pages/thumbnails/bathroom-day-spa-sale.jpg" alt="Sale-boho" class="hidden-phone">
        	<img src="http://www.reece.com.au/assets/pages/thumbnails/happiness-zone-dayspa-mobile.jpg" alt="Sale-boho" class="visible-phone"> </a>
        </div>
      </div>
    </div>
  </div>
  <div class="content-container">
    <div class="inner-wrapper">
      <div id="landingTiles" class="top-space">
        <div class="row-fluid hidden-tablet">
          <div class="tile-1811 span3 bottom-space "> <a href="/bathrooms/products"></a> <img src="http://www.reece.com.au/assets/Uploads/discover-620x275.jpg" alt="Discover Products">
            <div class="caption">
              <h4>Discover Products</h4>
              <hr>
              <p>Browse over 1500 products designed to help you create the perfect bathroom</p>
            </div>
          </div>
          <div class="tile-1812 span3 bottom-space alt1"> <a href="http://www.reece.com.au/bathroom-inspiration"></a> <img src="http://www.reece.com.au/assets/Uploads/inspired-620x275.jpg" alt="Be Inspired">
            <div class="caption">
              <h4>Be Inspired</h4>
              <hr>
              <p>Checkout the photo gallery for all the latest looks and hottest bathroom trends</p>
            </div>
          </div>
          <div class="tile-1813 span3 bottom-space alt2"> <a href="/bathrooms/happy-tips"></a> <img src="http://www.reece.com.au/assets/Uploads/tips-620x275.jpg" alt="Happy Tips">
            <div class="caption">
              <h4>Happy Tips</h4>
              <hr>
              <p>Simple solutions to help make your bathroom a happy place</p>
            </div>
          </div>
          <div class="tile-1810 span3 bottom-space alt3"> <a href="/laufen"></a> <img src="http://www.reece.com.au/assets/Uploads/laufen-hz2.jpg" alt="Laufen">
            <div class="caption">
              <h4>Laufen</h4>
              <hr>
              <p>At the heart of Swiss bathroom culture since 1892, discover Laufen.</p>
            </div>
          </div>
        </div>
        <div class="row-fluid visible-tablet">
          <div class="tile-1811 span6 bottom-space "> <a href="/bathrooms/products"></a> <img src="http://www.reece.com.au/assets/Uploads/discover-620x275.jpg" alt="Discover Products">
            <div class="caption">
              <h4>Discover Products</h4>
              <hr>
              <p>Browse over 1500 products designed to help you create the perfect bathroom</p>
            </div>
          </div>
          <div class="tile-1812 span6 bottom-space alt1"> <a href="http://www.reece.com.au/bathroom-inspiration"></a> <img src="http://www.reece.com.au/assets/Uploads/inspired-620x275.jpg" alt="Be Inspired">
            <div class="caption">
              <h4>Be Inspired</h4>
              <hr>
              <p>Checkout the photo gallery for all the latest looks and hottest bathroom trends</p>
            </div>
          </div>
        </div>
        <div class="row-fluid visible-tablet">
          <div class="tile-1813 span6 bottom-space alt2"> <a href="/bathrooms/happy-tips"></a> <img src="http://www.reece.com.au/assets/Uploads/tips-620x275.jpg" alt="Happy Tips">
            <div class="caption">
              <h4>Happy Tips</h4>
              <hr>
              <p>Simple solutions to help make your bathroom a happy place</p>
            </div>
          </div>
          <div class="tile-1810 span6 bottom-space alt3"> <a href="/laufen"></a> <img src="http://www.reece.com.au/assets/Uploads/laufen-hz2.jpg" alt="Laufen">
            <div class="caption">
              <h4>Laufen</h4>
              <hr>
              <p>At the heart of Swiss bathroom culture since 1892, discover Laufen.</p>
            </div>
          </div>
        </div>
        <div class="row-fluid visible-tablet"> </div>
      </div>
    </div>
  </div>
  <?php
			include_once($serverBase."/includes/foot/foot-generic.php");
		?>
</div>
<?php
   		$mobileNavActiveMenu = array(
   			"activeMenu" => "Plumbing"
   		);
	   	include_once($serverBase."/includes/nav/nav-mobile.php");
	?>
<?php
		$jsScriptPaths = [
			"/assets/js/jquery.lazyload.min.js",
			"/assets/js/bootstrap-collapse.js",
			"/assets/js/bootstrap-carousel.js",
			"/assets/js/bootstrap-dropdown.js",
			"/assets/js/bootstrap-transition.js",
			"/assets/js/jquery.mobile.custom.min.js",
			"/assets/js/reece-ocnav.js",
			"/assets/js/reece-carousel.js",
			"/assets/js/reece-match-height.js",
            "/assets/js/reece-hidesubnavbar.js",
            "/assets/js/reece-signon.js"
		];
	   	include_once($serverBase."/includes/foot/scripts.php");
	?>
</body>
</html>