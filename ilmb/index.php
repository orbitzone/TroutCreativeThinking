
  <?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>

  <?php 
      $cssScriptPaths = array(
        "/assets/css/reece-products.css",
        "/assets/css/reece-bathrooms.css",
        "/assets/css/reece-bathrooms-ilmb.css",
        "/assets/js/fancybox/jquery.fancybox.css"     
      ); 
      include_once($serverBase."/includes/head/head-generic.php");
  ?>    

    <body class="ilmb">
    <div class="ocmain-wrapper">
      <div class="navbar navbar-fixed-top topNav">
      <?php 
        $genericNavActiveMenuItem = "Bathrooms";
          include_once($serverBase."/includes/nav/nav-generic.php");
      ?>            

      <?php 
          include_once($serverBase."/includes/banners/banner-happyzone.php");
      ?>  
      </div>
      <div class="content-container">
        <div class="inner-wrapper ">
          <div class="main-wrapper  top-space">
            <div class="home-wrapper"> <img class="homeBannerImage" src="/assets/images/ilmb/home-bg.jpg" alt="I love my bathroom" />
              <div class="home-content-wrapper">
                <div class="home-content"> <a class="showIlmbMenu hidden-desktop" href="#ilmbMobileNav" data-toggle="collapse">Menu</a>
                  <div class="ilmbNav collapse" id="ilmbMobileNav">
                  <?php
                    $ilmbPage = 'index';
                    include ('navigation.php');
                  ?>
                  </div>
                  <div class="ilmbBanner">
                    <div class="ilmbBannerInner">
                      <div class="ilmbLogoWrap"> <img src="/assets/images/ilmb/ilmb-logo.png" alt="I love my bathroom" /> </div>
                      <div class="ilmbBannerPrize"><img src="/assets/images/ilmb/prize-badge.png" alt="$15000 worth of prizes" /></div>
                      <p class="ilmbBannerDesc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ornare velit sit amet tempor fermentum. Donec nec blandit enim. Morbi tellus nunc, iaculis facilisis accumsane.</p>
                    </div>
                  </div>
                  <div class="ilmbDates">
                    <h3>competition dates</h3>
                    <dl>
                      <dt>Comp opens</dt>
                      <dd>March 1st</dd>
                      <dt>Entries close</dt>
                      <dd>May 30th</dd>
                      <dt>Voting Opens</dt>
                      <dd>June 7th</dd>
                      <dt>Voting closes</dt>
                      <dd>June 30th</dd>
                      <dt>Winner announced</dt>
                      <dd>August 5th </dd>
                    </dl>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <?php 
          include_once($serverBase."/includes/foot/foot-generic.php");
      ?>    

    </div>

      <?php
        $mobileNavActiveMenu = array(
          "activeMenu" => "Bathrooms",
          "activeMenuItem" => "Bathroom Moments"
        );
        include_once($serverBase."/includes/nav/nav-mobile.php");
    ?>  

    <?php 
        $jsScriptPaths = array(
        "/assets/js/jquery.mobile.custom.min.js",         
          "/assets/js/jquery.lazyload.min.js",
          "/assets/js/bootstrap-transition.js", 
          "/assets/js/bootstrap-carousel.js",
          "/assets/js/bootstrap-collapse.js",
          "/assets/js/bootstrap-dropdown.js",
          "/assets/js/reece-signon.js",
          "/assets/js/reece-ocnav.js",
          "/assets/js/reece-carousel.js",
          "/assets/js/reece-ilmb-minisite.js",
          "/assets/js/fancybox/jquery.fancybox.js"
        ); 
        include_once($serverBase."/includes/foot/scripts.php");
    ?>      

    </body>
</html>