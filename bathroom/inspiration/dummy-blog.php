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

    <body style="padding-top:0">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="inspBlogWrap">

  <h2>Lorem ipsum dolor sit amet</h2>
  <p class="inspBlogDate">Monday, 15th January 2014</p>
  <?php
    $pageUrl = "http://reece-responsive.trout.com.au/bathroom/inspiration/#lorem-ipsum-dolor";
    $encodedUrl = urlencode($pageUrl);
    $imageUrl = "http://placehold.it/925x415.png/eee/ccc";
    $encodedImageUrl = urlencode($imageUrl);
    $pageTitle = "Lorem ipsum dolor sit amet";
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
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget consequat urna. Nam luctus vulputate nulla quis dictum. Aenean pellentesque, elit in vulputate auctor, risus nisi iaculis sem, et commodo libero nulla vel metus. Quisque quis lectus quam. Phasellus quis faucibus libero. Suspendisse ac odio diam.</p>
    <div class="inspBlogThumbs">
      <img src="http://placehold.it/925x415.png/eee/ccc" alt="placeholder">
    </div>
    <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sollicitudin faucibus aliquet. Pellentesque nibh justo, malesuada vitae convallis ut, commodo fermentum velit. Morbi nibh sem, feugiat non tempus ac, pretium at nisl. Praesent a diam interdum diam pulvinar sollicitudin at aliquet nisl.</p>
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