
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
              <div class="row-fluid">
                <div class="span4">
                <a href="#ilmbMobileNav" class="showIlmbMenu visible-phone" data-toggle="collapse">Menu</a>
                  <div class="ilmbNav collapse" id="ilmbMobileNav">
                    <?php
                      $ilmbPage = 'prizes';
                      include_once('navigation.php');
                    ?>
                  </div>
                  <div class="ilmbDates hidden-phone">
                    <h3>competition dates</h3>
                    <dl>
                      <dt>Comp opens</dt>
                      <dd>March 1</dd>
                      <dt>Entries close</dt>
                      <dd>May 30th</dd>
                      <dt>Voting Opens</dt>
                      <dd>June 7th</dd>
                      <dt>Voting closes</dt>
                      <dd>June 30th.</dd>
                      <dt>Winner announced</dt>
                      <dd>August 5 </dd>
                    </dl>
                  </div>
                </div>
                <div class="span8">
                  <h3 class="ilmbPageHeader">
                    <img src="/assets/images/ilmb/ilmb-logo.png" alt="I love my bathroom" />
                    <span class="pageTitle">prizes</span>
                  </h3>
                  <div class="row-fluid top-space">
                    <div class="inner-content">
                      <div class="row-fluid bottom-space">
                        <div class="span6">
                          <div class="prizeBanner">
                            <span class="prizeBannertext">
                              enter to win
                            </span>
                            <span class="prizeBannerAmount">
                              $5000
                            </span>
                          </div>
                        </div>
                        <div class="span6">
                          <h3>Entrants</h3>
                          <p>The competition winner will receive a prize of $5,000 cash! Enter from 4th February 2013.</p>
                        </div>
                      </div>
                      <hr>
                      <div class="row-fluid bottom-space">
                        <div class="span6">
                          <div class="prizeBanner">
                            <span class="prizeBannertext">
                              vote to share
                            </span>
                            <span class="prizeBannerAmount">
                              $10000
                            </span>
                          </div>
                        </div>
                        <div class="span6">
                          <h3>Voters</h3>
                          <p>Two voting winners will each receive a $5,000 voucher that can be used at any Reece branch.</p>
                        </div>
                      </div>
                      <hr>
                      <div class="row-fluid">
                        <p>The winners will be announced on <strong>3 June 2013</strong>.</p>
                        <p>All winning bathrooms will be featured in the July issue of House & Garden magazine.</p>
                      </div>
                      <h3 class="ilmbPageHeader">
                        <span class="pageTitle">
                          Judging
                        </span>
                      </h3>
                      <h4>Submit Your Bathroom</h4>
                      <p>The inspiring bathroom winner will be chosen by a judging panel comprising of representatives from Reece,
                        Australia's leading supplier of bathroom products.</p>
                        Our judges are looking for:
                      <ul>
                        <li>overall look and layout</li>
                        <li>inspired design</li>
                        <li>product selection</li>
                        <li>use of space</li>
                        <li>clever ideas</li>
                        <li>an interesting description of why your bathroom is special to you</li>
                      </ul>
                      <h4>Vote &amp; Win</h4>
                      <p>The two voting winners will also be chosen by the same judging panel. The judges will be looking for the most interesting descriptions of why the bathroom you selected is so special.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="ilmbDates visible-phone">
                <h3>competition dates</h3>
                <dl>
                  <dt>Comp opens</dt>
                  <dd>March 1</dd>
                  <dt>Entries close</dt>
                  <dd>May 30th</dd>
                  <dt>Voting Opens</dt>
                  <dd>June 7th</dd>
                  <dt>Voting closes</dt>
                  <dd>June 30th.</dd>
                  <dt>Winner announced</dt>
                  <dd>August 5 </dd>
                </dl>
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
          "/assets/js/reece-ilmb-minisite.js",
          "/assets/js/fancybox/jquery.fancybox.js"
        ); 
        include_once($serverBase."/includes/foot/scripts.php");
    ?>      

    </body>
</html>