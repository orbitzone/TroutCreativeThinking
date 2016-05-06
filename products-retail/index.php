<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js ie lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js ie lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>     <html class="no-js ie ie8 lt-ie10 lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9]>     <html class="no-js ie ie9 lt-ie10" lang="en"> <![endif]-->
<!--[if IE 10]>    <html class="no-js ie ie10" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <?php include "templates/Includes/ProductsMeta.php" ?>
  <title>Reece Products</title>
  <?php include "templates/Includes/ProductsHeader.php" ?>
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
    <?php include "templates/Includes/Navigation.php" ?>
    
    
    <section id="product-pages">
      <?php include "templates/Includes/ProductsNav.php" ?>
      
      <section class="main-section" id="checkout-success">
        <div class="container-fluid section-container">
          <div class="row">
            <div class="col-xs-8 col-xs-offset-2">
            <br><br><br>
              <h1>Product pages</h1>
              <ul style="padding-left:16px;">
                <li><a href="product-detail.php">Product Detail and Widget</a></li>
                <li><a href="shopping-cart.php">Shopping Cart</a></li>
                <li><a href="checkout-cart.php">Checkout Cart</a></li>
                <li><a href="checkout-cart-success.php">Checkout Cart - Success</a></li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <?php include "templates/Includes/Footer.php" ?>
    </div>
    <?php include "templates/Includes/MobileNavigation.php" ?>
    <?php include "templates/Includes/ProductsFooter.php" ?>
  </body>
</html>