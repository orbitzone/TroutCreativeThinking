
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
                <div class="span4"> <a href="#ilmbMobileNav" class="showIlmbMenu visible-phone" data-toggle="collapse">Menu</a>
                  <div class="ilmbNav collapse" id="ilmbMobileNav">
                    <?php
                      $ilmbPage = 'submit';
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
                  <h3 class="ilmbPageHeader"> <img src="/assets/images/ilmb/ilmb-logo.png" alt="I love my bathroom" /> <span class="pageTitle">Submit your bathroom</span> </h3>
                  <div class="row-fluid feature-gradient">
                    <div class="inner-content">
                      <p class="highlight">To enter the Reece Beautiful Bathroom Competition, you need to provide:</p>
                      <ul>
                        <li>A completed entry form (submit online or mail us one).</li>
                        <li>Tell us in 25 words or less why your bathroom is special to you.</li>
                        <li>Provide photographs if you have them.</li>
                      </ul>
                      <div class="row-fluid bottom-space">
                        <div class="span6 top-space"><a href="submit-online.php" class="btn btn-block btn-large ajax-load ilmbRedBtn" title="Submit entry online"><i class="icon-globe"></i> Submit entry online</a></div>
                        <div class="span6 top-space"><a href="submit-mail.php" class="btn btn-block btn-large ajax-load ilmbRedBtn" title="Enter by Mail"><i class="icon-envelope"></i> Enter by mail</a></div>
                      </div>
                      <hr>
                      <h3>Not ready to enter yet?</h3>
                      <p>If you're still working on your dream bathroom. register your details below and we'll send you a reminder before entries close on 19 April.</p>
                      <form action="" method="post" name="voteRegister" id="submitForm">
                        <div class="row-fluid">
                          <label>Name:</label>
                          <input type="text" name="name" class="span12 ilmbFormInput" />
                          <label>Email:</label>
                          <input type="text" name="email" class="span12 ilmbFormInput" />
                          <div class="actions">
                            <button class="ilmbRedBtn">Remind Me</button>
                          </div>
                        </div>
                      </form>
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
          "/assets/js/reece-ilmb-minisite.js",
          "/assets/js/fancybox/jquery.fancybox.js"
        ); 
        include_once($serverBase."/includes/foot/scripts.php");
    ?>      

    </body>
</html>