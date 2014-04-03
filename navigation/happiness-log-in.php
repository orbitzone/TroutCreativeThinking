<?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>
<?php
$cssScriptPaths = [
"/assets/css/reece-trade-outlet.css",
"/assets/css/reece-nav-updated.css",
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
        <div class="myAccountLoginWrap">
          <div class="myAccountLoginWrapHeader">
          <div class="row-fluid">
          </div>
            <h2>Login to Happiness</h2>
            <!--<p>
              Developed exclusively for Reece account customers this innovative management system gives you access to product pricing, allows you to build product lists, manage your account, generate customer quotes and even order online.<br /><br />
            </p>-->
          </div>
          <div class="row-fluid myAccountLoginWrapGray">
            <div class="span8">
            <h3>Register</h3>
            <div class="row-fluid">
                <form id="registerForm" class="span4">
                  <div class="controls">
                    <input type="text" id="username" placeholder="Username">
                  </div>
                  <div class="controls">
                    <input type="email" id="inputEmail" placeholder="Email Address">
                  </div>
                  <div class="controls">
                    <input type="password" id="inputPassword" placeholder="Password">
                  </div>

                  <div class="actions">
                    <button type="submit" class="largeBtn">Register</button>
                  </div>
                </form>
            <div class="span7">
            <div class="applySteps">
              <h4 class="darkBlueLightHd">Sign up and enjoy a host of privileges.</h4>
              <ul class="applySteps" id="applySteps">
                <li>Receive updates and special offers on our latest products
                </li>
                <li>Get invitations to exclusive in-store events
                </li>
                <li>Access pricing information for your local branch
                </li>
                <li>Save your 3D planner designs and share them with others
                </li>
              </ul>
            </div>
            </div><!-- /.span4 -->
              </div>
            </div><!-- /.span4 -->
            <div class="span4">
            <form class="loginRedForm loginColoredForm">
            <h3>Login</h3>
              <div class="controls">
                <input type="text" id="inputEmail" placeholder="Username">
              </div>
              <div class="controls">
                <input type="password" id="inputPassword" placeholder="Password">
              </div>
              <div class="actions">
                <button type="submit" class="largeBtn">Login</button>
              </div>
              <div class="forgotLinks">
                <a class='pull-left' href="#">Forgot Username / Password ?</a>
              </div>
            </form>
            </div><!-- /.span4 -->
          </div><!-- /.myAccountLoginWrapGray -->
          <div class="myAccountLoginFooter">
            
            <div class="row-fluid">
              
              <div class="span4 bottom-space" style="background:#eee">
              <div style="background:#eee; padding:20px 20px">
                <a class="playVideo" href="#" data-video-id="Q-a1dahV-QM"><img src="/assets/images/MyAccount/kartelthumb.jpg" alt="Discover Products"></a>
                <h3>Spotlight: Kartell by Laufen</h3>
              </div>
              </div>
              <div class="span8">
                <div id="landingTiles">
                  <div class="row-fluid ">
                    <div class="tile-1811 span4 bottom-space ">
                      <a href="http://www.reece.com.au/bathrooms/products">
                        <img src="http://www.reece.com.au/assets/Uploads/discover-620x275.jpg" alt="Discover Products">
                      </a>
                      <div class="caption"><h4>Discover Products</h4><hr>
                        <p>Browse over 1500 products designed to help you create the perfect bathroom</p>
                      </div>
                    </div>
                    <div class="tile-1812 span4 bottom-space alt1 ">
                      <a href="http://www.reece.com.au/bathroom-inspiration">
                        <img src="http://www.reece.com.au/assets/Uploads/inspired-620x275.jpg" alt="Be Inspired">
                      </a>
                      <div class="caption"><h4>Be Inspired</h4><hr>
                        <p>Checkout the photo gallery for all the latest looks and hottest bathroom trends</p>
                      </div>
                    </div>
                    <div class="tile-1810 span4 bottom-space alt2 ">
                      <a href="http://www.reece.com.au/bathrooms/3d-bathroom-planner">
                        <img src="http://www.reece.com.au/assets/pages/thumbnails/3d-bathroom-planner-online-free.png" alt="Start Planning">
                      </a>
                      <div class="caption"><h4>Start Planning</h4><hr>
                        <p>Create the ultimate look with this easy to use 3D Bathroom Planner.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="youtubeWrapper" class="youtubeWrapper collapse">
              <div class="row-fluid">
                <div class="span9">
                  <div id="registerYoutubePlayer">
                  </div>
                </div>
              </div>
            </div>
          </div><!-- /.myAccountLoginFooter -->
        </div><!-- /.myAccountLoginWrap -->
      </div><!-- /.inner-wrapper -->
    </div><!-- /.content-container -->
  <?php
  include_once($serverBase."/includes/foot/foot-generic.php");
  ?>
</div>
<?php
$mobileNavActiveMenu = array(
  "activeMenu" => "Bathrooms"
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

<script>
  var videoId = 'Q-a1dahV-QM';
  var isPlayerHidden = true;
  var player;
    jQuery(function(){
    var isregisterFormShown;

    $('.playVideo').click(addVideo);

    $('#youtubeWrapper').on('hidden', function(){
      isPlayerHidden = true;
    })
    $('#youtubeWrapper').on('shown', function(){
      isPlayerHidden = false;
    })
  });

  function addVideo(e){
    e.preventDefault();

    videoId = $(this).attr('data-video-id');
    if (isPlayerHidden){
      $('#youtubeWrapper').collapse('show');
    }
    $('html,body').animate({
      scrollTop: $('#youtubeWrapper').offset().top
    }, 200);
    // 2. This code loads the IFrame Player API code asynchronously.
    var tag = document.createElement('script');

    tag.src = "https://www.youtube.com/iframe_api";

    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
    if(player) {player.loadVideoById({'videoId': videoId });}
  }
    // 3. This function creates an <iframe> (and YouTube player)
    //    after the API code downloads.
    function onYouTubeIframeAPIReady() {
      if (typeof player === 'undefined') {
        player = new YT.Player('registerYoutubePlayer', {
          height: '540',
          width: '900',
          videoId: videoId
        });
      }
      else{
        loadVideoById({'videoId': videoId });
      }

    }
</script>
</body>
</html>