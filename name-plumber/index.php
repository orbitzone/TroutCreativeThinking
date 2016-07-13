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

  <title>Reece - Name the plumber</title>

  <link rel="shortcut icon" href="images/icons/favicon.ico">
  <link rel="apple-touch-icon" href="images/icons/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="images/icons/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="images/icons/apple-touch-icon-114x114.png">
  <script src='javascript/modernizr-2.6.2.js' type='text/javascript'></script>
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
  <link rel="stylesheet" type="text/css" href="css/reece-global.css" />
  <link rel="stylesheet" type="text/css" href="css/name-plumber.css" />
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

    <!-- Name Plumber -->
    <div id="reece-name-plumber">
      <div class="name-plumber-hero">
        <div class="content-container">
          <div class="inner-wrapper">
            <div class="row">
              <div class="col-sm-5 col-sm-push-7 col-xs-12 little-bloke-container">
                <img class="img-responsive" src="images/little-bloke.png" alt="Little bloke" />
              </div>
              <div class="col-sm-7 col-sm-pull-5 col-xs-12 little-bloke-heading">
                <h1>Give this little<br/>bloke a name</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="content-container">
        <div class="inner-wrapper">
          <div class="row intro-section">
            <div class="intro-image">
              <img class="img-responsive" src="images/animated-bloke-new.gif" alt="Animated bloke" />
            </div>
            <div class="col-sm-push-6 col-sm-6 col-xs-12">
              <div class="intro-text">
                <h2>There's no doubt you've all seen this little bloke appear here and there over the years.</h2>
                <p>He’s been the face of My Account, he’s told you about our delivery app and of course for the past few years he’s promoted the footy tipping competition across the country. And they’re just the highlights. But even after all those achievements there is one thing missing for our mate—a name.</p>
                <h4 class="blue-text">Now it's time to correct that wrong and give him a name that suit his status.</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="reece-blue-ribbon">
        <h3>Simply click one of these four names and make him a happy man.</h3>
      </div>
      <div id="name-chooser">
        <div class="content-container">
          <div class="inner-wrapper">
            <div class="card-wrap">
              <div class="name-card" id="plumber-name-1" data-name="Robbo" data-id="1">
                <img src="images/plumb_1.png" data-alt="images/plumb_party.png" class="img-responsive" alt="Robbo" />
                <span class="vote-percentage"><strong class="vote-value"></strong></span>
                <strong class="name-option">
                  Robbo
                </strong>
              </div>
            </div>
            <div class="card-wrap">
              <div class="name-card" id="plumber-name-2" data-name="Stevo" data-id="2">
                <img src="images/plumb_2.png" data-alt="images/plumb_party.png" class="img-responsive" alt="Stevo" />
                <span class="vote-percentage"><strong class="vote-value"></strong></span>
                <strong class="name-option">
                  Stevo
                </strong>
              </div>
            </div>
            <div class="card-wrap">
              <div class="name-card" id="plumber-name-3" data-name="Jonno" data-id="3">
                <img src="images/plumb_3.png" data-alt="images/plumb_party.png" class="img-responsive" alt="Jonno" />
                <span class="vote-percentage"><strong class="vote-value"></strong></span>
                <strong class="name-option">
                  Jonno
                </strong>
              </div>
            </div>
            <div class="card-wrap">
              <div class="name-card" id="plumber-name-4" data-name="Tommo" data-id="4">
                <img src="images/plumb_2.png" data-alt="images/plumb_party.png" class="img-responsive" alt="Tommo" />
                 <span class="vote-percentage"><strong class="vote-value"></strong></span>
                <strong class="name-option">
                  Tommo
                </strong>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include "templates/Includes/Footer.php" ?>
  
  </div><!-- /.ocmain-wrapper -->

  <?php include "templates/Includes/MobileNavigation.php" ?>
  
  <!-- /col-sm-6 -->
  <script type="text/javascript" src="javascript/jquery-1.11.2.min.js"></script>
  <script type="text/javascript" src="javascript/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="javascript/bootstrap.min.js"></script>
  <script type="text/javascript" src="javascript/vendor/jquery.touchSwipe.min.js"></script>
  <script type="text/javascript" src="javascript/vendor/slick.min.js"></script>
  <script type="text/javascript" src="javascript/reece-ocnav.js"></script>
  <script type="text/javascript" src="javascript/reece-gallery.js"></script>
  <script type="text/javascript" src="javascript/name-plumber.min.js"></script>

</body>
</html>