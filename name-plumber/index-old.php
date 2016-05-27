<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js ie lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js ie lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>     <html class="no-js ie ie8 lt-ie10 lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9]>     <html class="no-js ie ie9 lt-ie10" lang="en"> <![endif]-->
<!--[if IE 10]>    <html class="no-js ie ie10" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">

  <meta name="viewport" content="initial-scale=1.0">

  <title>Reece BS3 Template</title>

  <link rel="shortcut icon" href="images/icons/favicon.ico">
  <link rel="apple-touch-icon" href="images/icons/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="images/icons/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="images/icons/apple-touch-icon-114x114.png">

  <script src='javascript/modernizr-2.6.2.js' type='text/javascript'></script>

  <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
  <link rel="stylesheet" type="text/css" href="css/reece-global.css" />
</head>

<body class="">

  <div class="ocmain-wrapper">

    <div class="browser-message">
      <div class="content-container">
        <div class="alert alert-warning" role="alert">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <p><strong>Attention! </strong>Your browser is out of date and may not fully support all features of this website. Learn how to <a href="http://browsehappy.com/">Upgrade Your Browser</a> to ensure the best experience.</p>
        </div>
      </div>
    </div>

    <?php include "templates/Includes/Navigation.php" ?>

    <!-- reece-b3-gallery -->
    <div class="content-container gutterad-min-height reece-b3-gallery">
      <div class="inner-wrapper">
        <div class="row reece-b3-gallery-header">
          <div class="col-md-9 col-sm-12">
            <h1>Garden Title / name 1</h1>
            <div class="social-share">
              <a href="http://www.facebook.com/sharer.php?u={url}&amp;title={text}">
                <i class="fa fa-facebook"></i>
              </a>
              <a href="https://twitter.com/share?url={url}&amp;text={text}&amp;via={via}&amp;hashtags={hashtags}">
                <i class="fa fa-twitter"></i>
              </a>
              <a href="https://pinterest.com/pin/create/button/?url={imagesrc}&amp;media={image}&amp;description={description}">
                <i class="fa fa-pinterest"></i>
              </a>
            </div>
          </div>
          <div class="col-md-3 col-sm-12"></div>
        </div>
        <div class="row">
          <div class="col-md-9 col-sm-12">
            <div class="row">
              <div class="col-md-12">
                <div id="carousel" class="carousel slide" data-ride="carousel" data-interval="7000">
                  <div class="carousel-inner">
                    <div class="item active">
                      <img alt="product description" src="images/gallery/article-image1.jpg">
                    </div>
                    <div class="item">
                      <img alt="product description" src="images/gallery/article-image2.jpg">
                    </div>
                    <div class="item">
                      <img alt="product description" src="images/gallery/article-image3.jpg">
                    </div>
                    <div class="item">
                      <img alt="product description" src="images/gallery/article-image4.jpg">
                    </div>
                    <div class="item">
                      <img alt="product description" src="images/gallery/article-image5.jpg">
                    </div>
                    <div class="item">
                      <img alt="product description" src="images/gallery/article-image6.jpg">
                    </div>
                    <div class="item">
                      <img alt="product description" src="images/gallery/article-image3.jpg">
                    </div>
                    <div class="item">
                      <img alt="product description" src="images/gallery/article-image7.jpg">
                    </div>
                  </div>
                  <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  </a>
                  <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  </a>
                </div>
                <div class="clearfix">
                  <div id="thumbcarousel" class="carousel slide" data-interval="false">
                    <div class="carousel-inner">
                      <div class="item active">
                        <div data-target="#carousel" data-slide-to="0" class="thumb"><img alt="product description" src="images/gallery/thumbs/article-image1.jpg"></div>
                        <div data-target="#carousel" data-slide-to="1" class="thumb"><img alt="product description" src="images/gallery/thumbs/article-image2.jpg"></div>
                        <div data-target="#carousel" data-slide-to="2" class="thumb"><img alt="product description" src="images/gallery/thumbs/article-image3.jpg"></div>
                        <div data-target="#carousel" data-slide-to="3" class="thumb last"><img alt="product description" src="images/gallery/thumbs/article-image4.jpg"></div>
                      </div><!-- /item -->
                      <div class="item">
                        <div data-target="#carousel" data-slide-to="4" class="thumb"><img alt="product description" src="images/gallery/thumbs/article-image5.jpg"></div>
                        <div data-target="#carousel" data-slide-to="5" class="thumb"><img alt="product description" src="images/gallery/thumbs/article-image6.jpg"></div>
                        <div data-target="#carousel" data-slide-to="6" class="thumb"><img alt="product description" src="images/gallery/thumbs/article-image3.jpg"></div>
                        <div data-target="#carousel" data-slide-to="7" class="thumb last"><img alt="product description" src="images/gallery/thumbs/article-image7.jpg"></div>
                      </div><!-- /item -->
                    </div><!-- /carousel-inner -->
                    <a class="left carousel-control" href="#thumbcarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#thumbcarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                  </div><!-- /thumbcarousel -->
                </div><!-- /clearfix -->
              </div>
            </div>
            <div class="row inspiration-plans">
              <div class="col-md-12">
                <span class="button button-dark display-plans pull-right">
                  <span class="view-plan">View plan</span>
                  <span class="hide-plan">Hide plan</span>
                </span>
              </div>
              <div class="col-md-12 plans-wrapper">
                <img src="images/gallery/article-image1.jpg">
              </div>
            </div>
            <div class="row gallery-details">
              <div class="col-md-12">
                <h4>Garden title / name</h4>
                <p>Western Australia</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <!-- products used -->
                <div class="products-used">
                  <div class="row products-used-header">
                    <div class="col-md-9 col-sm-12">
                      <h3>Products Used</h3>
                    </div>
                    <div class="col-md-3 col-sm-12">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <a href="http://www.reece.com.au/irrigation/products/1522540" class="thumbnail">
                            <img src="images/products/product-smartline.png" alt="product 1">
                            <div class="caption">
                              <h4>Weathermatic SmartLine</h4>
                            </div>
                          </a>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <a href="http://www.reece.com.au/irrigation/products/1522602" class="thumbnail">
                            <img src="images/products/product-weather-station.png" alt="product 2">
                            <div class="caption">
                              <h4>Weathermatic SLW5 Weather Station</h4>
                            </div>
                          </a>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <a href="http://www.reece.com.au/irrigation/products/1542488" class="thumbnail">
                            <img src="images/products/product-dripline.png" alt="product 3">
                            <div class="caption">
                              <h4>EnKi Dripline</h4>
                            </div>
                          </a>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <a href="http://www.reece.com.au/irrigation/products/1522682" class="thumbnail">
                            <img src="images/products/product-prs-spray.png" alt="product 4">
                            <div class="caption">
                              <h4>Weathermatic PRS spray</h4>
                            </div>
                          </a>
                        </div>
                      </div><!-- /row -->
                    </div><!-- /col-md-12 -->
                  </div><!-- /row -->
                </div>
              </div>
            </div><!-- /row -->
          </div><!-- /col-md-9 col-sm-12 -->
          <!-- Related Products -->
          <div class="col-md-3 col-sm-12 related-products">
            <div class="row well">
              <h4>Related gardens</h4>
              <div class="col-md-12 col-sm-6 col-xs-12">
                <a href="#" class="thumbnail">
                  <div class="mask"><img src="images/gallery/article-image6.jpg" alt="product 1"></div>
                  <div class="caption">
                    <h6>Garden title</h6>
                    <p>Western Australia</p>
                  </div>
                </a>
              </div>
              <div class="col-md-12 col-sm-6 col-xs-12">
                <a href="#" class="thumbnail">
                  <div class="mask"><img src="images/gallery/article-image5.jpg" alt="product 2"></div>
                  <div class="caption">
                    <h6>Garden title</h6>
                    <p>Western Australia</p>
                  </div>
                </a>
              </div>
              <div class="col-md-12 col-sm-6 col-xs-12">
                <a href="#" class="thumbnail">
                  <div class="mask"><img src="images/gallery/article-image7.jpg" alt="product 3"></div>
                  <div class="caption">
                    <h6>Garden title</h6>
                    <p>Western Australia</p>
                  </div>
                </a>
              </div>
            </div>
          </div><!-- /col-md-3 col-sm-12 -->  
        </div><!-- /row -->
    </div><!-- /inner-wrapper -->
    </div><!-- /.container -->

  <?php include "templates/Includes/Footer.php" ?>
  
  </div><!-- /.ocmain-wrapper -->

  <?php include "templates/Includes/MobileNavigation.php" ?>
  
  <!-- /col-sm-6 -->
  <script type="text/javascript" src="javascript/jquery-1.11.2.min.js"></script>
  <script type="text/javascript" src="javascript/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="javascript/bootstrap.min.js"></script>
  <script type="text/javascript" src="javascript/vendor/jquery.touchSwipe.min.js"></script>
  <script type="text/javascript" src="javascript/reece-ocnav.js"></script>
  <script type="text/javascript" src="javascript/reece-gallery.js"></script>

</body>
</html>