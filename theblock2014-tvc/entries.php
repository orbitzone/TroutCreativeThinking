
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
              <div class="row-fluid view-entries">

                <div class="span2 tvc-main-nav"> <a href="#tvcMobileNav" class="showtvcMenu visible-phone" data-toggle="collapse">Menu</a>
                  <div class="tvcNav collapse" id="tvcMobileNav">
                    <?php
                      $tvcPage = 'entries';
                      include_once('navigation.php');
                    ?>
                  </div>
                </div><!--.nav-->


                <div class="span10">
                  
                  <div class="row-fluid">
                    <div class="inner-content">
                      <div class="span12">









                        <!--heading-->
                          <div class="row-fluid main-heading">
                            <div class="span12">
                              <h1><span class="second-color">View</span><br /> Entries</h1>
                            </div>
                          </div> 
                        <!--heading-->

                        <!--sub-heading-->
                          <div class="row-fluid sub-heading">
                            <div class="span12">
                              <p>Here are some entries we&rsquo;ve already received.</p>
                              <p><span class="second-color">Create your own entry</span> today for a chance to win your ultimate bathroom.</p>
                            </div>
                          </div> 
                        <!--sub-heading-->

                        <!--main-section-->
                          <div class="row-fluid main-section">
                            <div class="span12">
                              <!--entries container-->
                              <div class="row-fluid entries">


                                <!-- one entry -->
                                <div class="span6 one-entry">
                                  <img src="/assets/images/the-block-2014-tvc/entry1.jpg" alt=""/>
                                  <div class="entry-info">
                                    <h3> Jan and Steve <span class="second-color">NSW</span></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                  </div>
                                </div>
                                <!-- one entry -->

                                <!-- one entry -->
                                <div class="span6 one-entry">
                                  <img src="/assets/images/the-block-2014-tvc/entry1.jpg" alt=""/>
                                  <div class="entry-info">
                                    <h3> Jan and Steve <span class="second-color">NSW</span></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                  </div>
                                </div>
                                <!-- one entry -->
                              </div>
                              <div class="row-fluid entries">

                                <!-- one entry -->
                                <div class="span6 one-entry">
                                  <img src="/assets/images/the-block-2014-tvc/entry1.jpg" alt=""/>
                                  <div class="entry-info">
                                    <h3> Jan and Steve <span class="second-color">NSW</span></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                  </div>
                                </div>
                                <!-- one entry -->

                                <!-- one entry -->
                                <div class="span6 one-entry">
                                  <img src="/assets/images/the-block-2014-tvc/entry1.jpg" alt=""/>
                                  <div class="entry-info">
                                    <h3> Jan and Steve <span class="second-color">NSW</span></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                  </div>
                                </div>
                                <!-- one entry -->

                              </div>
                              <div class="row-fluid entries">

                                <!-- one entry -->
                                <div class="span6 one-entry">
                                  <img src="/assets/images/the-block-2014-tvc/entry1.jpg" alt=""/>
                                  <div class="entry-info">
                                    <h3> Jan and Steve <span class="second-color">NSW</span></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                  </div>
                                </div>
                                <!-- one entry -->

                                <!-- one entry -->
                                <div class="span6 one-entry">
                                  <img src="/assets/images/the-block-2014-tvc/entry1.jpg" alt=""/>
                                  <div class="entry-info">
                                    <h3> Jan and Steve <span class="second-color">NSW</span></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                  </div>
                                </div>
                                <!-- one entry -->



                              </div>
                              <!--entries container-->

                              <div class="row-fluid pagination-section">

                                <!-- one entry -->
                                <div class="span12">
                                  <div class="pagination tvcPagination">
                                    <ul class="pagList">
                                      <li><a class="pagingArrows" href="#"><span class="leftArrow"></span></a></li>
                                      <li class="disabled"><a class="pageNumber" href="#">1</a></li>
                                      <li class="disabled"><a class="pageNumber" href="#">2</a></li>
                                      <li class="enabled"><a class="pageNumber" href="#">3</a></li>
                                      <li><a class="pagingArrows" href="#"><span class="rightArrow"></span></a></li>
                                    </ul>
                                  </div>
                                </div>
                                <!-- one entry -->




                              </div>
                              <!--entries container-->

                              
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
          "/assets/js/reece-tvc-minisite.js",
          "/assets/js/fancybox/jquery.fancybox.js"
        ); 
        include_once($serverBase."/includes/foot/scripts.php");
    ?>      

    </body>
</html>