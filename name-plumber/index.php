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

  <style type="text/css">

    #reece-plumber-select
    {
      position: relative;
    }

    .reece-b3-gallery-header div
    {
      /*border: 1px dotted red;*/
    }
    .plumber-vote-outer
    {
      width: 225px;
      height: 376px;
      box-shadow: 0px 0px 16px #aaa;
      float:left;
      margin-right: 32px;
      cursor: pointer;
      /*border: 1px solid #d0d1d3;*/
      border: 3px solid white;
      background-color: white;

      position: relative;
    }

    .plumber-vote-outer input
    {
      display: block;
      width: 225px;
      height: 100%;
      cursor: pointer;
      /*visibility: hidden;*/
      position: absolute;
      z-index: 6809;
      opacity: 0.0;
    }

    .plumber-vote-outer input:active
    {
      /*border: 2px solid blue;*/
    }

    .plumber-heading
    {
      background-color: #d1d2d4;
      color: white;
      margin-left: 18px;
      margin-right: 18px;
      height: 106px;
      line-height: 100px;
      text-align: center;
      font-size: 20px;
    }

    .plumber-vote-outer.active
    {
      border: 3px solid #052f55;
    }

    .plumber-vote-outer.active .plumber-heading
    {
      background-color: #052f55;
    }

    .reece-blue-ribbon
    {
      background-color: #052f55;
      color: white;
      text-align: center;
    }

    .container-fluid {
      padding-left: 15px;
      padding-right: 15px;
      margin-left: auto;
      margin-right: auto;
    }

.container-full {
  margin: 0 auto;
  width: 100%;
}

  .nice-work-container
  {
    width: 256px;
    float: left;
    /*display: none;*/
    color: #052f55;
    font-weight: bold;

    padding-top: 23px;
    /*padding-left: 20px;*/
    font-size: 16px; 
    line-height: 20px;
    visibility: hidden;
  }

  #reece-plumber-select .choose-plumber-row
  {
    /*padding-left: 256px;*/
    margin-top: 88px;
  }

  #reece-plumber-select .choose-plumber-selections/*, */
  /*#reece-plumber-select .nice-work-outer*/
  {
    margin-left: 80px;
  }

  #overlay
  {
    width: 1440px;
    height: 1847px;
    position: absolute;
    left: -120px;
    top: -135px;
    opacity: 0.1;
    background-image: url('images/overlay.jpg');
    z-index: 6809;
  }

  #reece-plumber-select .little-bloke-container img
  {
    margin-left: -22px;
    margin-top: -12px;
  }
  #reece-plumber-select .little-bloke-heading h1
  {
    color: #052f55;
    font-size: 57px;
    text-align: right;
    float: right;
    padding-top: 80px;
    padding-right:57px;
    font-weight: bold;
  }

  #reece-plumber-select .animated-dude-container
  {
    padding-left: 173px;
    padding-top: 45px;
  }
  #reece-plumber-select .animated-dude-text
  {
    padding-top: 22px;
    padding-right: 135px;
    padding-left: 0;
  }
  #reece-plumber-select .animated-dude-text h2
  {
    color: #052f55;
    line-height: 38px;
  }

  #reece-plumber-select .animated-dude-text p
  {
    color: #343434;
  }
  #reece-plumber-select .animated-dude-text p.something-blue-correct-wrong
  {
    color: #052f55;
  }
  #reece-plumber-select .animated-dude-text h2,
  #reece-plumber-select .animated-dude-text p  
  {
  }

  #reece-plumber-select .reece-blue-ribbon
  {
    height: 114px;
    line-height: 104px;
  }

  #reece-plumber-select .reece-blue-ribbon h3
  {
    font-size: 23px;
    line-height: 119px;
  }

  #reece-plumber-select .reece-select-plumber-header
  {
    background-color: #e7e7e9;
  }

  .plumber-triangle
  {
    width: 0;
    height: 0;
    border-top: 100px solid #052f55;
    border-left: 100px solid transparent;

    position: absolute;
    top: 0;
    right: 0;
    z-index: 1;
  }
  .triangle-text
  {
    padding-top: 11px;
    position: absolute;
    top: 0;
    right: 0;
    color: white;
    z-index: 1;
  }
  .triangle-text > .plumber-percent
  {
    margin-right: 3px;
    text-align: super;
    vertical-align: top;
  }
  .triangle-text > .pb-percent-value
  {
    font-size: 26px;
  }


  </style>

    <div class="content-container gutterad-min-height reece-b3-gallery" id="reece-plumber-select">
      <!-- <div id="overlay"></div> -->
      <div class="inner-wrapper">
        <div class="row reece-select-plumber-header">
          <div class="col-md-5 col-md-push-7 col-sm-12 little-bloke-container">
            <img src="images/little-bloke.png" alt="Little bloke" />
          </div>
          <div class="col-md-7 col-md-pull-5 col-sm-12 little-bloke-heading">
            <h1>Give this little<br/>bloke a name</h1>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-sm-12 animated-dude-container">
            <img src="images/animated-bloke.gif" alt="Animated bloke" />
          </div>
          <div class="col-md-6 col-sm-12 animated-dude-text">
            <h2>There's no doubt you've all seen this little bloke appear here and there over the years.</h2>
            <p>He’s been the face of My Account, he’s told you about our delivery app and of course for the past few years he’s promoted the footy tipping competition across the country. And they’re just the highlights. But even after all those achievements there is one thing missing for our mate—a name.</p>
            <p class="something-blue-correct-wrong"><strong>Now it's time to correct that wrong and give him a name that suit his status.</strong></p>
          </div>
        </div>

        <div class="container-full row reece-blue-ribbon">
          <div class="1container-fluid 1col-md-12 1col-sm-12">
            <h3>Simply click one of these four names and make him a happy man.</h3>
          </div>
        </div>

        <div class="row reece-b3-gallery-header choose-plumber-row">
          <div class="col-md-12 col-sm-12 choose-plumber-selections">
            <div class="plumber-vote-outer">
              <input type="radio" name="plumber-name" value="plumber-robbo" />
                <img src="images/plumb_a.png" alt="robbo" />
                <div class="plumber-heading">
                  <span>Robbo</span>
                </div>
              <div class="plumber-triangle">
              </div>
              <div class="triangle-text">
                <span class="pb-percent-value" id="votes1"></span><span class="plumber-percent">%</span>
              </div>
            </div>
            <div class="plumber-vote-outer">
              <input type="radio" name="plumber-name" value="plumber-stevo" />
                <img src="images/plumb_a.png" alt="stevo" />
                <div class="plumber-heading">
                  <span>Stevo</span>
                </div>
              <div class="plumber-triangle">
              </div>
              <div class="triangle-text">
                <span class="pb-percent-value" id="votes2"></span><span class="plumber-percent">%</span>
              </div>
            </div>
            <div class="plumber-vote-outer">
              <input type="radio" name="plumber-name" value="plumber-jonno" />
                <img src="images/plumb_a.png" alt="jonno" />
                <div class="plumber-heading">
                  <span>Jonno</span>
              </div>
              <div class="plumber-triangle">
              </div>
              <div class="triangle-text">
                <span class="pb-percent-value" id="votes2"></span><span class="plumber-percent">%</span>
              </div>
            </div>
            <div class="plumber-vote-outer">
              <input type="radio" name="plumber-name" value="plumber-tommo" />
                <img src="images/plumb_a.png" alt="tommo" />
                <div class="plumber-heading">
                  <span>Tommo</span>
                </div>
            <div class="plumber-triangle">
            </div>
            <div class="triangle-text">
              <span class="pb-percent-value" id="votes4"></span><span class="plumber-percent">%</span>
            </div>
          </div>
          <div class="col-md-12 col-sm-12 nice-work-outer">
            <div class="nice-work-container" id="plumber-robbo">
              Nice work<br/>
              You've chosen Robbo
            </div>
            <div class="nice-work-container" id="plumber-stevo">
              Nice work<br/>
              You've chosen Stevo
            </div>
            <div class="nice-work-container" id="plumber-jonno">
              Nice work<br/>
              You've chosen Jonno
            </div>
            <div class="nice-work-container" id="plumber-tommo">
              Nice work<br/>
              You've chosen Tommo
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






  <script type="text/javascript" charset="utf-8" async defer>
    var hasSelected = false;
    $(document).ready(function(){
      $('.plumber-vote-outer input').on('click',function(e){
        console.log('e: ',e,$(this).index(),$('.plumber-vote-outer input:selected').index(),$(this).val());

        if(hasSelected)
        {
          return;
        }
        console.log("Selected ",$(this),$('#'+$(this).val()));

        var votesOne = '–';
        var votesTwo = '–';
        var votesThree = '–';
        var votesFour = '–';

        $('#'+$(this).val()).css({'visibility':'visible'});
        $(this).closest('.plumber-vote-outer').addClass('active');

        // $.post( 'http://example.com/',
        //   {
        //     "vote": $(this).val(),
        //     "IP": 
        //   },
        //  [, data ] [, success ] [, dataType ] );

        // Actual numbers placed here—A Foreman
        votesOne = '–';
        votesTwo = '–';
        votesThree = '–';
        votesFour = '–';


        $('#votes1').html(votesOne);
        $('#votes2').html(votesTwo);
        $('#votes3').html(votesThree);
        $('#votes4').html(votesFour);

        hasSelected = true;
      });
    });
    
  </script>







</body>
</html>