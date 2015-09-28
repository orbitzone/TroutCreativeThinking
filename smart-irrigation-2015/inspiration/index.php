<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js ie lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js ie lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>     <html class="no-js ie ie8 lt-ie10 lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9]>     <html class="no-js ie ie9 lt-ie10" lang="en"> <![endif]-->
<!--[if IE 10]>    <html class="no-js ie ie10" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<?php include "../templates/Includes/SmartIrrigation2015Meta.php" ?>
<title>Reece Smart Irrigation</title>
<?php include "../templates/Includes/SmartIrrigation2015Header.php" ?>

</head>

<body class="smart-irrigation-2015">

<div class="ocmain-wrapper">

  <div class="browser-message">
    <div class="content-container">
      <div class="alert alert-warning" role="alert">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <p><strong>Attention! </strong>Your browser is out of date and may not fully support all features of this website. Learn how to <a href="http://browsehappy.com/">Upgrade Your Browser</a> to ensure the best experience.</p>
      </div>
    </div>
  </div>

  <?php include "../templates/Includes/Navigation.php" ?>
      <div id="main">
        <div id="main-content" >
          <div class="main-heading-section">
            <div class="section-row">
              <div class="divide-1-1">
                <div class="inner-content">
                  <h1>Inspiration</h1>
                </div>
              </div>
              <div class="clear"></div>
            </div>
          </div>
          <div class="section-row content-with-sidebar">
          <div class="content-right-withsidebar content-withsidebar">
              <div id="inspiration-list" class="inspiration-articles box-section">
                <div class="section-row">
                  <div id="results-inspiration" class="section-row match-height">
                  </div>
                  <div class="section-row">
                    <div class="divide-1-1 text-center inner-spacing-bottom">
                      <a id="load-inspiration" href="#" class="button button-dark">Load more</a>
                    </div>
                    <script id="load-template" type="text/x-handlebars-template">
                      {{#each results}}
                      <div class="divide-1-3 new-item">
                        <div class="inner-content hover-item background-white">
                          <div class="hoveroverlay">
                            <div class="image-area slide-thumbnail new-slide">
                              {{#each thumbnaillist}}
                              <div>
                                <a href="{{../link}}">
                                  <img src="{{this}}">
                                </a>
                              </div>
                              {{/each}}
                            </div>
                          </div>
                          <a href="{{link}}">
                            <span class="text-area">
                              <h4>{{title}}</h4>    
                              <p>{{text}}</p>
                            </span>
                          </a>
                        </div>
                      </div>
                      {{/each}}
                    </script>
                    <div class="clear"></div>
                  </div>
                  <div class="clear"></div>
                </div>
              </div>
            </div>
            <aside class="sidebar-left sidebar">
              <div class="inner-content">
                <h4>Categories</h4>
                <form>
                <ul class="filterList">
                  <li>
                    <label class="checkbox"><input type="checkbox" value="item1">Filter item 1</label>
                  </li>
                  <li>
                    <label class="checkbox"><input type="checkbox" value="item2">Filter item 2</label>
                  </li>
                  <li>
                    <label class="checkbox"><input type="checkbox" value="item3">Filter item 3</label>
                  </li>
                  <li>
                    <label class="checkbox"><input type="checkbox" value="item4">Filter item 4</label>
                  </li>
                  <li>
                    <label class="checkbox"><input type="checkbox" value="item5">Filter item 5</label>
                  </li>
                </ul>
                </form>
              </div>
            </aside>
            <div class="clear"></div>
          </div>
        </div>
      </div><!--#main-->


    <?php include "../templates/Includes/Footer.php" ?>
</div>

<?php include "../templates/Includes/MobileNavigation.php" ?>

<script type="text/javascript" src="javascript/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="javascript/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="javascript/bootstrap.min.js"></script>
<script type="text/javascript" src="javascript/reece-ocnav.js"></script>
<?php include "../templates/Includes/SmartIrrigation2015Footer.php" ?>


        </body>
</html>