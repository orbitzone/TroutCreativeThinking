
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
                      $tvcPage = 'index';
                      include_once('navigation.php');
                    ?>
                  </div>
                </div><!--.nav-->
                <div class="span10">
                  
                  <div class="row-fluid">
                    <div class="inner-content">
                      <div class="span12">
                        <!--heading-->
                          <div class="row-fluid main-heading homepage">
                            <div class="span5 offset7">
                              <h1><span class="second-color">Win</span> your<br /> ultimate <br />bathroom</h1>
                              <div class="enter-button"><a href="#" class="linkSubmit">Enter now</a></div>
                            </div>
                          </div> 
                        <!--heading-->

                        <!--homepage video section-->
                          <div class="row-fluid homepage-video">
                            <div class="span4 video-image">
                              <a href="#"><img src="/assets/images/the-block-2014-tvc/video.jpg" alt="" class="video"/></a>
                              
                            </div>
                            <div class="span8">
                              <p class="primary-text">Reece are giving you the chance to create your perfect bathroom with $10,000 worth of Reece products and $5000 cash up for grabs as well as a 3D design consultation to bring your bathroom renovation to life.</p>

                              <p class="secondary-text">Tell us what bathroom happiness means to you for a chance to win the bathroom of your dreams.</p>
                            </div>
                          </div> 
                        <!--homepage video section-->
                        <!--main-section-->
                          <div class="row-fluid main-section">
                            
                            <div class="span12">

                              <!--competition details section-->
                              <div class="competition-details">
                                <div class="row-fluid">
                                  <div class="span4">
                                    <h5 class="comp-main-heading"><a id="submit"></a>Competition dates</h5>
                                  </div>
                                  <div class="span8">
                                    <div class="row-fluid">
                                      <div class="span4">
                                        <h5>Comp opens</h5>
                                        <p>July 28</p>
                                      </div>
                                      <div class="span4">
                                        <h5>Entries close</h5>
                                        <p>October 31</p>
                                      </div>
                                      <div class="span4">
                                        <h5>Winner Announced</h5>
                                        <p>Month 00</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!--competition details section-->
                              <!--forms container-->
                              <div class="row-fluid">
                                <div class="span12 homepage-form">
                                  <img src="/assets/images/the-block-2014-tvc/enter-now.png" alt="Enter now" class="enter-now"/>
                                  <h2>3 simple steps to enter</h2>
                                  


                                    <form enctype="multipart/form-data" action="" name="" method="post" id="submitForm">
                                      <div class="formSections">                                       
                                        <div class="row-fluid homepage-input">
                                          <div class="span4 description">
                                            <h3>Describe</h3>
                                            <p>In 50 words or less, tell us what bathroom happiness means to you</p>
                                            
                                          </div>
                                          <div class="span8 input-section">
                                            <textarea name="bathroom" class="wordCount span12 tvcFormInput inputFullWidth" rows="5" placeholder="Describe your bathroom"></textarea>
                                            <div class="completionCheck">
                                              <label class="checkbox completionCheckCheckbox"><input type="checkbox" name="18month" value="18month" class="checkbox"> YES</label>
                                            <p class="completionCheckStatement">Will your bathroom renovation be completed in the next 18 months?</p> 
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="formSections">
                                        <div class="row-fluid homepage-input">
                                          <div class="span4 description">
                                            <h3>Photograph</h3>
                                            <p>Take a photo of your current bathroom</p>
                                          </div>
                                          <div class="span8 input-section">
                                            <div class="drag-drop inputFullWidth">Drag your jpeg here to upload</div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="formSections">
                                        <div class="row-fluid homepage-input">
                                          <div class="span4 description">
                                            <h3>Details</h3>
                                            <p>Enter your details</p>
                                          </div>
                                          <div class="span8 input-section">
                                            <input type="text" name="name" class="span12 tvcFormInput inputFullWidth" placeholder="Your name" />
                                            <input type="text" name="email" class="span12 tvcFormInput inputFullWidth" placeholder="Your email" />
                                            <input type="text" name="phone" class="span12 tvcFormInput inputFullWidth" placeholder="Your phone number" />
                                            <input type="text" name="address" class="span12 tvcFormInput inputFullWidth" placeholder="Your address" />
                                            <input type="text" name="city" class="span12 tvcFormInput inputFullWidth" placeholder="Your city" />
                                            <div class="row-fluid form-inner">
                                              <div class="span6">
                                                <input type="text" name="state" class="span12 tvcFormInput inputHalfWidth" placeholder="Your state" /><br />
                                              </div>
                                              <div class="span6">
                                                <input type="text" name="zip-code" class="span12 tvcFormInput inputHalfWidth" placeholder="Your zip code" /><br />
                                              </div>
                                            </div>
                                            <div class="row-fluid form-inner">
                                              <div class="span6">
                                                <label class="checkbox"> <input type="checkbox" name="terms" value="terms" class="checkbox"> I accept terms and conditions</label>
                                              </div>
                                              <div class="span6 input-section">
                                                <label class="checkbox"> <input type="checkbox" name="subscribe" value="subscribe" class="checkbox"> I would like to receive further email from Reece</label>
                                              </div>
                                            </div>
                                            <div class="row-fluid form-inner">
                                              <div class="span6">
                                                <div class="actions"><button class="homepageSubmitBtn">Submit</button></div>
                                              </div>
                                              <div class="span6">
                                                <a class="criteriaLink" data-toggle="collapse" href="#termsConditions">Entry and Judging Criteria <span class="caret"></span></a>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </form>
                                </div>
                              </div>
                              <!--forms container-->

                              <!--terms and conditions-->
                              <div id="termsConditions" class="row-fluid terms-conditions collapse">
                                <div class="span12">
                                  <div class="criteria-wrapper">
                                    <h2>Entry criteria</h2>
                                    <ul>
                                      <li><p>Entrants need to describe in 50 words or less, what bathroom happiness means to them or their family.</p></li>
                                      <li><p>Entrants must submit a photo of their current bathroom. (maximum of 1 photo only)</p></li>
                                      <li><p>Entrants must be ready to renovate their bathroom in the next 18 months.</p></li>
                                      <li><p>Entrants must provide permission for their bathroom renovation to be filmed, photographed and documented.</p>
                                        <p>This material may be used as part of ongoing Reece promotions.</p></li>
                                      <li><p>Entrants grant permission to receive Reece promotional updates by email.</p></li>
                                      <li><p>Entries must be submitted by 5pm EST, 31 October 2014 to be eligible for consideration.</p></li>
                                    </ul>
                                    <br />
                                     <h2>Judging criteria</h2>
                                    <p>Submissions will be judged on creativity and originality by a Reece Panel.</p>
                                  </div>
                                </div>
                                
                              </div>
                              <!--terms and conditions-->


                              <!--banner ad-->
                              <div class="row-fluid block-banner-ad">
                                <div class="span12">
                                  <img src="/assets/images/the-block-2014-tvc/block-banner-ad.jpg" alt=""/>
                                </div>
                                
                              </div>
                              <!--banner ad-->


                              
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
          "/assets/js/placeholder.js",
          "/assets/js/fancybox/jquery.fancybox.js"
        ); 
        include_once($serverBase."/includes/foot/scripts.php");
    ?>      
<script type="text/javascript">
  $(function(){
    $('.linkSubmit').click(function(e){
      e.preventDefault();
      $('html, body').animate({scrollTop: $("#submit").offset().top}, 1000);
    })
  })
</script>
    </body>
</html>