
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

		<% require css    <div class="ocmain-wrapper">
  <div class="navbar navbar-fixed-top topNav">
    <?php
          $genericNavActiveMenuItem = "Bathrooms";
            include_once($serverBase."/includes/nav/nav-generic.php");
        ?>
  </div>
    <?php include_once($serverBase."/includes/nav/nav-happiness.php"); ?>
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
                <div class="row-fluid">
                  <div class="inner-content">
                    <form enctype="multipart/form-data" action="" name="GABform" method="post" id="submitForm">
                      <div class="feature-gradient">
                        <p>Simply fill in your details, upload your images and tell us in 25 words or less, what inspired the look. The owner of the bathroom judged the most inspiring will WIN $5,000 cash.</p>
                        <div class="row-fluid">
                          <div class="span6">
                            <label>Name:</label>
                            <input type="text" name="name" class="span12 ilmbFormInput" />
                            <label>Daytime Contact:</label>
                            <input type="text" name="contact" class="span12 ilmbFormInput" />
                            <label>Tradesperson's Name:</label>
                            <input type="text" name="tradesperson" class="span12 ilmbFormInput" />
                          </div>
                          <div class="span6">
                            <label>Mobile Number:</label>
                            <input type="text" name="mobile" class="span12 ilmbFormInput" />
                            <label>Address:</label>
                            <input type="text" name="address" class="span12 ilmbFormInput" />
                            <label>Email:</label>
                            <input type="text" name="email" class="span12 ilmbFormInput" />
                          </div>
                        </div>
                      </div>
                      <div class="row-fluid">
                        <div class="span12">
                          <hr>
                          <h3>Select the style that best describes your bathroom</h3>
                        </div>
                      </div>
                      <div class="row-fluid">
                        <div class="span6">
                          <label class="radio">
                            <input type="radio" name="style_select" value="classic" />
                            Classic</label>
                          <label class="radio">
                            <input type="radio" name="style_select" value="family" />
                            Family</label>
                          <label class="radio">
                            <input type="radio" name="style_select" value="contemp" />
                            Contemporary</label>
                        </div>
                        <div class="span6">
                          <label class="radio">
                            <input type="radio" name="style_select" value="colourful" />
                            Colourful</label>
                          <label class="radio">
                            <input type="radio" name="style_select" value="retreat" />
                            Retreat</label>
                          <label class="radio">
                            <input type="radio" name="style_select" value="view" />
                            Room with a view</label>
                        </div>
                      </div>
                      <div class="row-fluid">
                        <div class="span12">
                          <hr>
                          <h3>Attach photos</h3>
                        </div>
                      </div>
                      <div class="row-fluid">
                        <div class="span6">
                          <label>Photo 1:
                            <input type="file" size="30" name="file1" class="uploadImg" id="subFile1">
                          </label>
                          <label>Photo 2:
                            <input type="file" size="30" name="file1" class="uploadImg" id="subFile2">
                          </label>
                        </div>
                        <div class="span6">
                          <label>Photo 3:
                            <input type="file" size="30" name="file1" class="uploadImg" id="subFile3">
                          </label>
                          <label>Photo 4:
                            <input type="file" size="30" name="file1" class="uploadImg" id="subFile4">
                          </label>
                        </div>
                      </div>
                      <div class="row-fluid">
                        <div class="span12">
                          <hr>
                          <h3>What inspired the look?</h3>
                          <p class="section" id="inspDesc">In 25 words or less, please explain what inspired the look of your bathroom.</p>
                          <textarea name="inspiration" class="wordCount span12 ilmbFormInput" rows="5"></textarea>
                          <div style="" id="subInsp_count"></div>
                        </div>
                      </div>
                      <div class="row-fluid">
                        <div class="actions">
                          <button class="ilmbRedBtn">Submit your bathroom</button>
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