
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
              <li class="active page-branding text-brand"> Vote &amp; Win</li>
            </ul>
            <div class="main-wrapper  top-space">
              <div class="row-fluid">
                <div class="span4"> <a href="#ilmbMobileNav" class="showIlmbMenu visible-phone" data-toggle="collapse">Menu</a>
                  <div class="ilmbNav collapse" id="ilmbMobileNav">
                    <?php
                      $ilmbPage = 'vote';
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
                  <h3 class="ilmbPageHeader"> <img src="/assets/images/ilmb/ilmb-logo.png" alt="I love my bathroom" /> <span class="pageTitle">Vote &amp; Win</span> </h3>
                  <div class="row-fluid feature-gradient">
                    <div class="inner-content">
                      <p>From May 1 you can view the inspiring bathroom entries. Simply cast your vote, and explain, in 25 words or less,
                        what you love about the bathroom you&rsquo;ve selected. The best two entries will each receive a $5,000 Reece voucher to
                        spend on the bathroom products of your choice.</p>
                      <p class="highlight"> Register now and we&rsquo;ll send you a reminder email when voting opens so you don&rsquo;t miss out.<br />
                      </p>
                      <form action="" method="post" name="voteRegister" id="submitForm">
                        <div class="row-fluid">
                          <label>Name:</label>
                          <input type="text" name="name" class="span12 ilmbFormInput" />
                          <label>Email:</label>
                          <input type="text" name="email" class="span12 ilmbFormInput" />
                          <div class="actions">
                            <input type="submit" name="submit" value="Register" class="btn ilmbRedBtn" />
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