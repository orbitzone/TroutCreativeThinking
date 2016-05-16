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
            <div class="col-xs-12">
              <h1 style="display:block; text-align: center; padding: 40px 0 20px;">Product Pages</h1>
            </div>
            <div class="col-sm-push-1 col-sm-5 text-center">
              <h2 style="color:#0776aa; padding: 20px 0;">Trade</h2>
              <ul class="list-unstyled">
                <li style="padding: 10px 0;"><a href="trade-product-detail.php" class="btn full-width blue-button">Product Detail and Widget</a></li>
                <li style="padding: 10px 0;"><a href="trade-shopping-cart.php" class="btn full-width blue-button">Shopping Cart</a></li>
                <li style="padding: 10px 0;"><a href="trade-checkout-cart.php" class="btn full-width blue-button">Checkout Cart</a></li>
                <li style="padding: 10px 0;"><a href="trade-checkout-cart-success.php" class="btn full-width blue-button">Checkout Cart - Success</a></li>
              </ul>
            </div>
            <div class="col-sm-push-1 col-sm-5 text-center">
              <h2 style="color: #6dc8b6; padding: 20px 0;">Retail</h2>
              <ul class="list-unstyled">
                <li style="padding: 10px 0;"><a href="retail-product-detail.php" class="btn full-width green-button">Product Detail and Widget</a></li>
                <li style="padding: 10px 0;"><a href="retail-shopping-cart.php" class="btn full-width green-button">Shopping Cart</a></li>
                <li style="padding: 10px 0;"><a href="retail-checkout-cart.php" class="btn full-width green-button">Checkout Cart</a></li>
                <li style="padding: 10px 0;"><a href="retail-checkout-cart-success.php" class="btn full-width green-button">Checkout Cart - Success</a></li>
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