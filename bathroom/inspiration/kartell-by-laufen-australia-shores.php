  <?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>
<!-- before head -->
  <?php 
      $cssScriptPaths = array(
        "/assets/css/reece-products.css",
        "/assets/css/reece-bathrooms.css",
        "/assets/css/smoothness/jquery-ui-1.10.4.custom.min.css"
      ); 
      include_once($serverBase."/includes/head/head-generic.php");
  ?>

    <body class="withHappinessSubNav">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="inspBlogWrap">

  <h2>Kartell by Laufen Australia shores</h2>
  <p class="inspBlogDate">Monday, 15th January 2014</p>
  <?php
    $pageUrl = "http://reece-responsive.trout.com.au/bathroom/inspiration/#kartell-by-laufen-australia-shores";
    $encodedUrl = urlencode($pageUrl);
    $imageUrl = "http://placehold.it/925x415.png/eee/ccc";
    $encodedImageUrl = urlencode($imageUrl);
    $pageTitle = "Kartell by Laufen Australia shores";
    $encodedPageTitle = urlencode($pageTitle);
    ?>
  <ul class="socialShareLinks">
    <li>
      <div class="fb-like" data-href="<?= $pageUrl ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
    </li>
    <li>
      <a href="https://twitter.com/share" class="twitter-share-button" data-count="none">Tweet</a>
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></li>
    <li>
      <a href="//www.pinterest.com/pin/create/button/?url=<?= $encodedUrl ?>&media=<?= $encodedImageUrl ?>&description=<?= $encodedPageTitle ?>" data-pin-do="buttonPin" data-pin-config="none"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png" /></a>
      <script type="text/javascript" async src="//assets.pinterest.com/js/pinit.js"></script></script>
      </li>
      <li><a id="FancyButton" href="http://fancy.com/fancyit?Category=Architecture">Fancy</a><script type="text/javascript">(function(){var id="fancy-btn",d=document,f=d.getElementsByTagName("script")[0];if(!d.getElementById(id)){var s=d.createElement("script");s.id=id;s.src="//fancy.com/fancyit.js";f.parentNode.insertBefore(s,f);}})();</script></li>
    </ul>
    <p>Tuesday 12 November marked the Kartell by Laufen pre-launch in Australia. The Australian architectural and design community turned out for what was a truly spectacular series of events.</p>
    <div class="inspBlogThumbs">
      <img src="http://placehold.it/925x415.png/eee/ccc" alt="placeholder">
    </div>
    <p>Held in 3 cities over 3 days, the launch featured the creator of Kartell by Laufen, award winning international designer, Roberto Palomba. Roberto spoke of his inspiration behind the Kartell by Laufen collection and his passion for working with these two iconic brands. The full collection will be available exclusively through Reece in 2014.</p>
    <div class="row-fluid inspBlogThumbs">
      <div class="span4">
        <img src="http://placehold.it/500x300.png/eee/ccc" alt="placeholder">
      </div>
      <div class="span4">
        <img src="http://placehold.it/500x300.png/eee/ccc" alt="placeholder">
      </div>
      <div class="span4">
        <img src="http://placehold.it/500x300.png/eee/ccc" alt="placeholder">
      </div>
    </div>
    <div class="inspBlogThumbs">
      <img src="http://placehold.it/925x415.png/eee/ccc" alt="placeholder">
    </div>

    </div>

        </body>
</html>