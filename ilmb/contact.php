
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
                      $ilmbPage = 'contact';
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
                <h3 class="ilmbPageHeader"> <img src="/assets/images/ilmb/ilmb-logo.png" alt="I love my bathroom" /> <span class="pageTitle">contact</span> </h3>
                <div class="row-fluid feature-gradient">
                  <div class="inner-content">
                    <p>Please complete the form below for any enquiries or feedback relating to the competition and entry process.</p>
                    <form id="submitForm" name="contact" method="post" action="">
                      <p style="display:none;font-weight:bold;" id="error">Please complete all fields below</p>
                      <div class="formRow">
                        <label>Name</label>
                        <input type="text" name="name" class="span12 ilmbFormInput" />
                        <label>Email Address</label>
                        <input type="text" name="email" class="span12 ilmbFormInput" />
                        <label>Daytime Contact</label>
                        <input type="text" name="contact" class="span12 ilmbFormInput" />
                        <label>Enquiry</label>
                        <textarea name="enquiry" class="span12 ilmbFormInput" rows="5"></textarea>
                        <div class="actions">
                          <button class="ilmbRedBtn">Send Enquiry</button>
                        </div>
                      </div>
                    </form>
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