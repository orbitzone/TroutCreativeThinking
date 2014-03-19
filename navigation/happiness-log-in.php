<?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>
<?php
$cssScriptPaths = [
"/assets/css/reece-trade-outlet.css",
"/assets/css/reece-nav-updated.css",
"/assets/css/reece-home.css",
"/assets/css/reece-bathrooms.css"
];
include_once($serverBase."/includes/head/head-generic.php");
?>

<body class="no-touch bathroom-moments account-details-summary withHappinessSubNav">
  <div class="ocmain-wrapper">
    <div class="navbar navbar-fixed-top topNav">
      <?php
      $genericNavActiveMenuItem = "Bathrooms";
      include_once($serverBase."/includes/nav/nav-generic.php");
      ?>

    </div>
    <?php include_once($serverBase."/includes/nav/nav-happiness.php"); ?>


    <div class="content-container">
      <div class="inner-wrapper">


        <ul class="breadcrumb">
          <li><a href="#">Bathrooms</a>  <span class="divider">/</span></li>
          <li class="active page-branding text-brand">Login</li>
        </ul>




        <div class="loginColumn">

          <h2>Login to Happiness</h2>

          <article class="article-summary-main row-fluid">
            <div class="span4 loginBox red">
              <form>
                <div class="controls">
                  <h4>Bathroom login</h4>
                  <input type="text" id="inputEmail" placeholder="Username">
                  <input type="password" id="inputPassword" placeholder="Password">
                  <button type="submit" class="btn">Login</button>
                  <a class="forgotten" href="#">Forgot username/password?</a><br />


                </div>

              </form>
            </div>
            <div class="span8 loginBox grey">
              <form>
                <div class="controls">
                  <br />
                  <div class="row-fluid">

                    </div>


                    <div class="span8"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nunc odio.</p>
                                     <input type="text" id="inputName" placeholder="Name">
                                        <input type="text" id="inputPhone" placeholder="Phone">
                                        <input type="email" id="inputEmail" placeholder="Email">
                                        <input type="text" id="inputPassword" placeholder="Business Postcode">
                                        <button type="submit" class="btn">Register</button></div>
                                      </div>
                                    </div>
                                  </form>
                                </div>

                                </article>
                              </div>







                              <div class="loginColumn">
                                <article class=" row-fluid">
                                  <div class="span5 loginBox grey">
                                    <form>
                                      <div class="controls">
                                        <h3>Spotlight: Kartell by Laufen</h3>
                                        <div class="flex-video widescreen"><iframe src="//www.youtube.com/embed/Q-a1dahV-QM?rel=0&wmode=transparent&showinfo=0&modestbranding=1&controls=2" frameborder="0" allowfullscreen></iframe></div>
                                      </div>

                                    </form>
                                  </div>

                                  <div class="span7 loginBox">
                                    <h3>What's Hot</h3>
                                    <div class="row-fluid">
                                      <div class="span4"><img src="../assets/images/hz/login/hot/block.jpg" /><p>Some text about the tip</p></div>
                                      <div class="span4"><img src="../assets/images/hz/login/hot/hotel.jpg" /><p>Some text about the tip</p></div>
                                      <div class="span4"><img src="../assets/images/hz/login/hot/laufen.jpg" /><p>Some text about the tip</p></div>
                                    </div>
                                    <div class="row-fluid">
                                      <div class="span4"><img src="../assets/images/hz/login/hot/3dplanner.jpg" /><p>Some text about the tip</p></div>
                                      <div class="span4"><img src="../assets/images/hz/login/hot/ilmb.jpg" /><p>Some text about the tip</p></div>
                                      <div class="span4"><img src="../assets/images/hz/login/hot/palomba.jpg" /><p>Some text about the tip</p></div>
                                    </div>
                                    <br /><br /><br /><br />
                                  </div>
                                </article>
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
                        "activeMenu" => "Plumbing"
                        );
                      include_once($serverBase."/includes/nav/nav-mobile.php");
                      ?>
                      <?php
                      $jsScriptPaths = [
                      "/assets/js/jquery.lazyload.min.js",
                      "/assets/js/bootstrap-collapse.js",
                      "/assets/js/bootstrap-carousel.js",
                      "/assets/js/bootstrap-dropdown.js",
                      "/assets/js/bootstrap-transition.js",
                      "/assets/js/jquery.mobile.custom.min.js",
                      "/assets/js/reece-ocnav.js",
                      "/assets/js/reece-carousel.js",
                      "/assets/js/reece-match-height.js",
                      "/assets/js/reece-hidesubnavbar.js",
                      "/assets/js/reece-signon.js"
                      ];
                      include_once($serverBase."/includes/foot/scripts.php");
                      ?>
                    </body>
                    </html>