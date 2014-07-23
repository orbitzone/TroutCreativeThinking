
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
                      $tvcPage = 'contact';
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
                              <h1><span class="second-color">Contact</span></h1>
                            </div>
                          </div> 
                        <!--heading-->

                        <!--sub-heading-->
                          <div class="row-fluid sub-heading">
                            <div class="span12">
                              <p>If you have a query or comment, please get in touch</p>

                            </div>
                          </div> 
                        <!--sub-heading-->


                        <!--main-section-->
                          <div class="row-fluid main-section">
                            <div class="span12">
                              <!--prizes container-->
                              <div class="row-fluid contact-us-form">
                                <div class="span10">
                                  


                                    <form enctype="multipart/form-data" action="" name="" method="post" id="submitForm">
                                      <div>
                                        <div class="row-fluid">
                                          <div class="span10">
                                            <div class="formWrapper">
                                              <input type="text" name="name" class="span12 tvcFormInput" placeholder="Your name" />
                                              <input type="text" name="email" class="span12 tvcFormInput" placeholder="Your email" />
                                              <input type="text" name="subject" class="span12 tvcFormInput" placeholder="Subject" />
                                              <textarea name="bathroom" class="wordCount span12 tvcFormInput" rows="6" placeholder="Your enquiry" ></textarea>
                                              <div class="actions">
                                                <button class="contactSubmitBtn">Send enquiry</button>
                                              </div>
                                            </div>


                                          </div>



                                      

                                        </div>
                                      </div>

                                      
                                    </form>




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