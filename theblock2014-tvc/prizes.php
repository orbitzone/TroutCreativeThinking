
  <?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>

  <?php 
      $cssScriptPaths = array(
        "/assets/css/reece-products.css",
        "/assets/css/reece-bathrooms.css",
        "/assets/css/reece-the-block-2014-tvc.css",
        "/assets/js/fancybox/jquery.fancybox.css"     
      ); 
      include_once($serverBase."/includes/head/head-the-block-tvc.php");
  ?>    

    <body class="tvc withHappinessSubNav">

    <div class="ocmain-wrapper">
  <div class="navbar navbar-fixed-top topNav">
    <?php
          $genericNavActiveMenuItem = "Bathrooms";
            include_once($serverBase."/includes/nav/nav-generic.php");
        ?>
  </div>
    <?php include_once($serverBase."/includes/nav/nav-the-block-tvc.php"); ?>
        <div class="content-container">
          <div class="inner-wrapper ">
            <div class="main-wrapper  top-space">
              <div class="row-fluid">

                <div class="span2 tvc-main-nav"> <a href="#tvcMobileNav" class="showtvcMenu visible-phone" data-toggle="collapse">Menu</a>
                  <div class="tvcNav collapse" id="tvcMobileNav">
                    <?php
                      $tvcPage = 'prizes';
                      include_once('navigation.php');
                    ?>
                  </div>
                </div><!--.nav-->


                <div class="span10">
                  
                  <div class="row-fluid prizes-page">
                    <div class="inner-content">
                      <div class="span12">









                        <!--heading-->
                          <div class="row-fluid main-heading">
                            <div class="span12">
                              <h1><span class="second-color">Prizes</span></h1>
                            </div>
                          </div> 
                        <!--heading-->

                        <!--sub-heading-->
                          <div class="row-fluid sub-heading">
                            <div class="span12">
                              <p>The prize includes everything you need to create your ultimate bathroom</p>
                            </div>
                          </div> 
                        <!--sub-heading-->

                        <!--main-image-->
                          <div class="row-fluid main-image">
                            <div class="span12">
                              <img src="/assets/images/the-block-2014-tvc/prize-hero.jpg" alt=""/>
                            </div>
                          </div> 
                        <!--main-image-->

                        <!--main-section-->
                          <div class="row-fluid main-section">
                            <div class="span12">
                              <!--prizes container-->
                              <div class="row-fluid prizes-section with-ruler">
                                <div class="span5 prize-name">
                                  <div class="prize-wrapper">
                                    <p>$10,000 Reece voucher</p>
                                  </div>
                                </div>
                                <div class="span7 prize-description">
                                  <div class="prize-wrapper">
                                    <p>Choose from thousands of products designed to help you create the perfect bathroom.</p>
                                  </div>
                                </div>

                              </div>
                              <!--prizes container-->

                              <!--prizes container-->
                              <div class="row-fluid prizes-section with-ruler">
                                <div class="span5 prize-name">
                                  <div class="prize-wrapper">
                                    <p>$5000 cash</p>
                                  </div>
                                </div>
                                <div class="span7 prize-description">
                                  <div class="prize-wrapper">
                                    <p>To help cover all the extra costs such as tradespeople to complete your renovation</p>
                                  </div>
                                </div>

                              </div>
                              <!--prizes container-->

                              <!--prizes container-->
                              <div class="row-fluid prizes-section">
                                <div class="span5 prize-name">
                                  <div class="prize-wrapper">
                                    <p>A 3D design consultation with Reece</p>
                                  </div>
                                </div>
                                <div class="span7 prize-description">
                                  <div class="prize-wrapper">
                                    <p>Our bathroom consultant will help you create the ultimate look using the Reece 3D planner.</p>
                                  </div>
                                </div>

                              </div>
                              <!--prizes container-->
                              
                            </div>
                          </div> 
                        <!--main-section-->


                      </div>

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
          "/assets/js/reece-ocnav.js",
          "/assets/js/reece-carousel.js",
          "/assets/js/fancybox/jquery.fancybox.js"
        ); 
        include_once($serverBase."/includes/foot/scripts.php");
    ?>      

    </body>
</html>