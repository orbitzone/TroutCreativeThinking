
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

    <body class="ilmb withHappinessSubNav">

		<div class="ocmain-wrapper">
  <div class="navbar navbar-fixed-top topNav">
    <?php
          $genericNavActiveMenuItem = "Bathrooms";
            include_once($serverBase."/includes/nav/nav-generic.php");
        ?>
  </div>
    <?php include_once($serverBase."/includes/nav/nav-happiness.php"); ?>
        <div class="content-container">
          <div class="inner-wrapper ">
            <ul class="breadcrumb">
              <li><a href="index.php">Home</a><span class="divider"> / </span></li>
              <li class="active page-branding text-brand"> past winners</li>
            </ul>
            <div class="main-wrapper  top-space">
              <div class="row-fluid">
                <div class="span4">
                <a href="#ilmbMobileNav" class="showIlmbMenu visible-phone" data-toggle="collapse">Menu</a>
                  <div class="ilmbNav collapse" id="ilmbMobileNav">
                    <?php
                      $ilmbPage = 'previous';
                      include_once('navigation.php');
                    ?>
                  </div>
                  <div class="ilmbDates hidden-phone">
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
                <div class="span8">
                  <h3 class="ilmbPageHeader">
                    <img src="/assets/images/ilmb/ilmb-logo.png" alt="I love my bathroom" />
                    <span class="pageTitle">past winners</span>
                  </h3>
                  <div class="row-fluid">
                    <div class="inner-content">
                      <ul class="thumbnails">
                        <li class="span12">
                          <a href="winner.php" class="ilmbReadStoryLink ajax-load">READ FULL STORY</a>
                          <h4 class="ilmbThumbHd">
                            <strong class="ilmbEntryName">EntryName</strong>
                            <small class="ilmbEntryPlace">Melbourne VIC</small>
                          </h4>
                          <div class="ilmbThumb">
                            <img src="../assets/images/ilmb/bathroom-placeholder.jpg" alt="thumbnail">
                            <div class="ilmbWinnerBadge">
                              <span class="ilmbYear">2013</span>
                              WINNER
                            </div>
                          </div>
                        </li>
                        <li class="span6 flush">
                          <a href="#" class="ilmbReadStoryLink">VIEW MORE</a>
                          <h4 class="ilmbThumbHd">
                            <strong class="ilmbEntryName">EntryName</strong>
                            <small class="ilmbEntryPlace">Melbourne VIC</small>
                          </h4>
                          <div class="ilmbThumb">
                            <img src="../assets/images/ilmb/bathroom-placeholder.jpg" alt="thumbnail">
                            <div class="ilmbWinnerBadge">
                              <span class="ilmbYear">2012</span>
                              WINNER
                            </div>
                          </div>
                        </li>
                        <li class="span6">
                          <a href="#" class="ilmbReadStoryLink">VIEW MORE</a>
                          <h4 class="ilmbThumbHd">
                            <strong class="ilmbEntryName">EntryName</strong>
                            <small class="ilmbEntryPlace">Melbourne VIC</small>
                          </h4>
                          <div class="ilmbThumb">
                            <img src="../assets/images/ilmb/bathroom-placeholder.jpg" alt="thumbnail">
                            <div class="ilmbWinnerBadge">
                              <span class="ilmbYear">2011</span>
                              WINNER
                            </div>
                          </div>
                        </li>
                        <li class="span6 flush">
                          <a href="#" class="ilmbReadStoryLink">VIEW MORE</a>
                          <h4 class="ilmbThumbHd">
                            <strong class="ilmbEntryName">EntryName</strong>
                            <small class="ilmbEntryPlace">Melbourne VIC</small>
                          </h4>
                          <div class="ilmbThumb">
                            <img src="../assets/images/ilmb/bathroom-placeholder.jpg" alt="thumbnail">
                            <div class="ilmbWinnerBadge">
                              <span class="ilmbYear">2010</span>
                              WINNER
                            </div>
                          </div>
                        </li>
                        <li class="span6">
                          <a href="#" class="ilmbReadStoryLink">VIEW MORE</a>
                          <h4 class="ilmbThumbHd">
                            <strong class="ilmbEntryName">EntryName</strong>
                            <small class="ilmbEntryPlace">Melbourne VIC</small>
                          </h4>
                          <div class="ilmbThumb">
                            <img src="../assets/images/ilmb/bathroom-placeholder.jpg" alt="thumbnail">
                            <div class="ilmbWinnerBadge">
                              <span class="ilmbYear">2009</span>
                              WINNER
                            </div>
                          </div>
                        </li>
                        <li class="span6 flush">
                          <a href="#" class="ilmbReadStoryLink">VIEW MORE</a>
                          <h4 class="ilmbThumbHd">
                            <strong class="ilmbEntryName">EntryName</strong>
                            <small class="ilmbEntryPlace">Melbourne VIC</small>
                          </h4>
                          <div class="ilmbThumb">
                            <img src="../assets/images/ilmb/bathroom-placeholder.jpg" alt="thumbnail">
                            <div class="ilmbWinnerBadge">
                              <span class="ilmbYear">2008</span>
                              WINNER
                            </div>
                          </div>
                        </li>
                        <li class="span6">
                          <a href="#" class="ilmbReadStoryLink">VIEW MORE</a>
                          <h4 class="ilmbThumbHd">
                            <strong class="ilmbEntryName">EntryName</strong>
                            <small class="ilmbEntryPlace">Melbourne VIC</small>
                          </h4>
                          <div class="ilmbThumb">
                            <img src="../assets/images/ilmb/bathroom-placeholder.jpg" alt="thumbnail">
                            <div class="ilmbWinnerBadge">
                              <span class="ilmbYear">2007</span>
                              WINNER
                            </div>
                          </div>
                        </li>
                        <li class="span6 flush">
                          <a href="#" class="ilmbReadStoryLink">VIEW MORE</a>
                          <h4 class="ilmbThumbHd">
                            <strong class="ilmbEntryName">EntryName</strong>
                            <small class="ilmbEntryPlace">Melbourne VIC</small>
                          </h4>
                          <div class="ilmbThumb">
                            <img src="../assets/images/ilmb/bathroom-placeholder.jpg" alt="thumbnail">
                            <div class="ilmbWinnerBadge">
                              <span class="ilmbYear">2006</span>
                              WINNER
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="ilmbDates visible-phone">
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