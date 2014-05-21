<?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>
<?php 
    $cssScriptPaths = [
      "/assets/css/reece-trade-outlet.css",
      "/assets/js/me/mediaelementplayer.css",
      "/assets/css/reece-my-account.css",
      "/assets/css/reece-plumbing.css"
    ]; 
      include_once($serverBase."/includes/head/head-generic.php");
  ?>

<body class="no-touch bathroom-moments account-details-summary">
<div class="ocmain-wrapper">
  <div class="content-container">
    <div class="inner-wrapper">
      <div class="myTipsHeader">
        <h1 class="logo"><img class="StandAloneLogo" src="../../assets/images/MyAccount/reece-shiny-logo.png" alt="Reece Logo"></h1>
        <h2>My Tips</h2>
      </div>
      <div class="myTipsContent">
        
        <h3>My Account. <small>Works for you 24/7.</small></h3>
        <div class="row-fluid">
          <div class="span6">
            <p>Developed exclusively for Reece account customers this innovative management system gives you access to product pricing, allows you to build product lists, manage your account, generate customer quotes and even order online</p>
          </div>
          <div class="span6">
            <a class="myTipBtn" href="https://www.reece.com.au/cc/login.do">Login to My Account</a>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class="youtubeWrapper">
    <div class="content-container">
      <div class="inner-wrapper">
    <iframe id="youtubeVideo" width="853" height="480" src="//www.youtube.com/embed/vzv09M75uQM" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
  </div>
  <div class="videoGallery">
    <div class="content-container">
      <div class="inner-wrapper">
        <div class="row-fluid videoThumbs">
          <div class="span4">
            <div class="videoThumb">
              <a class="vidThumbLink" data-youtubeVidId="REmfHIGdyIA" href="https://www.youtube.com/watch?v=REmfHIGdyIA" target="_blank">
                <img src="../../assets/images/MyAccount/tip1.jpg" alt="Tip1">
                <span class="playIcon"></span>
              </a>
              <h4>My Tip #1 - Online Ordering</h4>
              <p>This new My Account feature will save you time and money every day. And it’s really easy to use. Just look for the big green order button next to each Reece Quote.</p>
            </div>
          </div>
          <div class="span4">
            <div class="videoThumb">
              <a class="vidThumbLink" data-youtubeVidId="vzv09M75uQM" href="https://www.youtube.com/watch?v=vzv09M75uQM" target="_blank">
                <img src="../../assets/images/MyAccount/tip2.jpg" alt="Tip2">
                <span class="playIcon"></span>
              </a>
              <h4>My Tip #2 - Click + Collect</h4>
              <p>Designed to save you time, Click + Collect speeds up the pick up process by allowing you to order products 24/7 and then pick them up from your selected branch.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="aboutMyAccount">
    <div class="content-container">
      <div class="inner-wrapper">
        <div class="row-fluid">
          <div class="span6">
            <h3>Learn More about My Account</h3>
            <p>Discover features in detail, watch walkthrough demonstrations and more.</p>
          </div>
          <div class="span6">
          <a class="myTipBtn" href="http://www.reece.com.au/myaccountexplained">Visit My Account Explained</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php 
    $jsScriptPaths = [
      "/assets/js/jquery.lazyload.min.js", 
      "/assets/js/bootstrap-collapse.js",
    ]; 
      include_once($serverBase."/includes/foot/scripts.php");
  ?>
<script type="text/javascript">
  $(function(){
    $('.vidThumbLink').click(function(e){
      e.preventDefault();
      $('#youtubeVideo').attr({'src':'//www.youtube.com/embed/'+$(this).attr('data-youtubeVidId')});
      $('html,body').animate({
        scrollTop: $('#youtubeVideo').offset().top - 50
      }, 200);
    });
  });
</script> 

</body>
</html>