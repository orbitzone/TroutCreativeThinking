<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js ie lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js ie lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>     <html class="no-js ie ie8 lt-ie10 lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9]>     <html class="no-js ie ie9 lt-ie10" lang="en"> <![endif]-->
<!--[if IE 10]>    <html class="no-js ie ie10" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <?php include "templates/includes/ProductsMeta.php" ?>
  <title>Reece Products</title>
  <?php include "templates/includes/ProductsHeader.php" ?>
</head>
<body
class="">
<div class="ocmain-wrapper">
  <div class="browser-message">
    <div class="content-container">
      <div class="alert alert-warning" role="alert">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <p><strong>Attention! </strong>Your browser is out of date and may not fully support all features of this website. Learn how to <a href="http://browsehappy.com/">Upgrade Your Browser</a> to ensure the best experience.</p>
      </div>
    </div>
  </div>
  <?php include "templates/includes/Navigation.php" ?>
    <?php include "templates/includes/trade/ProductsNav.php" ?>
    
  <div id="product-pages" data-section="productsCategory" class="trade">
    <?php include "templates/includes/trade/MegaNav.php" ?>
    <?php include "templates/pages/trade/inner-products-category.php" ?>
  </div>


  <?php include "templates/includes/Footer.php" ?>
</div>
<?php include "templates/includes/MobileNavigation.php" ?>
<?php include "templates/includes/ProductsFooter.php" ?>
</body>
</html>