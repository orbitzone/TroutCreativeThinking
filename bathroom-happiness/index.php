<?php
  $title = "Reece - Bathroom Happiness";
 include_once('templates/includes/reece-head.php');?>
  <body class="homepage bathroom-happiness">
    <div class="ocmain-wrapper">
      <?php include_once("templates/includes/reece-header.php");?>
      <div class="main" role="main">
        <!-- intro section -->
        <div class="section-intro">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6">
                <div class="panel panel-search hidden-md hidden-lg">
                <form action="http://www.reece.com.au/bathrooms/products">
                  <div class="search-input">
                    <input type="text" placeholder="Product Search"/>
                  </div>
                  <div class="search-submit">
                    <button type="submit"><i class="icon-search"></i></button>
                  </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="row">
              <!-- large/middle col (shower img) -->
              <div class="col-md-6 col-md-push-3">
                <div class="panel panel-hero">
                  <a href="inspiration.php">
                    <div class="image">
                      <img src="images/homepage/get-inspired-bathroom.png" alt="get inspired bathroom">
                    </div>
                    <h2 class="intro-text">
                      it's time to<br>
                      create a bathroom<br/>
                      you love
                    </h2>
                    <div class="experience">
                      Experience a new <br/>world of inspiration
                    </div>
                    <div class="arrow-link">
                        <div class="arrow-link-label">Get Inspired</div>
                        <div class="arrow-right">
                          <span class="arrow-link-icon"><i class="arrow-link-icon icon-arrow-right"></i></span>
                        </div>
                    </div>
                  </a>
                </div>
              </div>
              <!-- left col (find inspiration img) -->
              <div class="col-md-3 col-sm-6 col-md-pull-6">
                <a href="inspiration.php" class="panel panel-link panel-find-inspiration">
                  <div class="background-div"></div>
                  <div class="text-overlay">
                    <div class="text-overlay-line-1">Find</div> 
                    <div class="text-overlay-line-2">Inspiration</div>
                    <div class="arrow-link">
                      <span class="arrow-link-icon"><i class="arrow-link-icon icon-arrow-right"></i></span>
                    </div>
                  </div>
                </a>
                <div class="panel panel-slideshow shop-tapware" data-section="shop-tapware">
                  <div class="slideshow-container">
                    <div class="slide">
                      <div class="slide-content">
                        <a href="#">
                          <div class="slide-image">
                            <img src="images/products/milli-axon-mixer.jpg" alt="Milli Axon Basin Mixer" />
                          </div>
                          <div class="slide-text">
                            <div class="product-name">
                              Milli Axon
                            </div>
                            <p class="product-description">
                              Basin Mixer Rose Gold/Black
                            </p>
                            <p class="product-price">
                              $699.99 <span class="product-price-gst">gst inc</span>
                            </p>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="slide">
                      <div class="slide-content">
                        <a href="#">
                          <div class="slide-image">
                            <img src="images/products/milli-axon-mixer.jpg" alt="Milli Axon Basin Mixer" />
                          </div>
                          <div class="slide-text">
                            <div class="product-name">
                              Milli Axon
                            </div>
                            <p class="product-description">
                              Basin Mixer Rose Gold/Black
                            </p>
                            <p class="product-price">
                              $699.99 <span class="product-price-gst">gst inc</span>
                            </p>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="slideshow-buttons"></div>
                  <div class="slideshow-label">
                    <a href="http://www.reece.com.au/bathrooms/products/bathroom/tapware">Shop Tapware</a>
                  </div>
                </div>
              </div>
              <!-- right col (shop products img) -->
              <div class="col-md-3 col-sm-6">
                <div class="panel panel-search hidden-xs hidden-sm">
                  <form action="http://www.reece.com.au/bathrooms/products">
                  <div class="search-input">
                    <input type="text" name="keyword" placeholder="Product Search"/>
                  </div>
                  <div class="search-submit">
                    <button type="submit"><i class="icon-search"></i></button>
                  </div>
                  </form>
                </div>
                <a href="http://www.reece.com.au/bathrooms/products" class="panel-link panel panel-shop-products">
                  <div class="background-div"></div>
                  <div class="text-overlay">
                    <div class="text-overlay-line-1">Shop</div> 
                    <div class="text-overlay-line-2">Products</div>
                    <div class="arrow-link">
                      <span class="arrow-link-icon"><i class="arrow-link-icon icon-arrow-right"></i></span>
                    </div>
                  </div>                  
                </a>
                <div class="panel panel-slideshow shop-showers"  data-section="shop-showers">
                  <div class="slideshow-container">
                    <div class="slide">
                      <div class="slide-content">
                        <a href="#">
                          <div class="slide-image">
                            <img src="images/products/teknobili-overhead-shower.jpg" alt="Milli Axon Basin Mixer" />
                          </div>
                          <div class="slide-text">
                            <div class="product-name">
                              Teknobili Up
                            </div>
                            <p class="product-description">
                              Blade Overhead Shower
                            </p>
                            <p class="product-price">
                              $2519.99 <span class="product-price-gst">gst inc</span>
                            </p>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="slide">
                      <div class="slide-content">
                        <a href="#">
                          <div class="slide-image">
                            <img src="images/products/teknobili-overhead-shower.jpg" alt="Milli Axon Basin Mixer" />
                          </div>
                          <div class="slide-text">
                            <div class="product-name">
                              Teknobili Up
                            </div>
                            <p class="product-description">
                              Blade Overhead Shower
                            </p>
                            <p class="product-price">
                              $2519.99 <span class="product-price-gst">gst inc</span>
                            </p>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="slideshow-buttons"></div>
                  <div class="slideshow-label">
                    <a href="http://www.reece.com.au/bathrooms/products/bathroom/showers">Shop Showers</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- "The Block" section -->
        <div class="section-the-block">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12">
                <div class="the-block-bathroom">
                  <a href="http://www.reece.com.au/the-block">
                    <div class="image the-block-dean-shay">
                      <img src="images/homepage/the-block-dean-shay.png" alt="The Block - Congratulations Dean and Shay"/>
                    </div>
                    <div class="image the-block-edge">
                      <img src="images/homepage/the-block-edge.png"/>
                      <div class="arrow-link">
                          <span class="arrow-link-icon"><i class="arrow-link-icon icon-arrow-right"></i></span>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- nav blocks section -->
        <div class="section-nav-blocks">
          <div class="container-fluid">
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-3">
                <a href="http://www.reece.com.au/storefinder" class="nav-link">
                  <div class="nav-block store-finder">
                    <img src="images/nav/nav-map-icon.png" alt="store finder icon"/>              
                  </div>
                  <div class="nav-block-label">Find Your Nearest Store</div>
                  <div class="overlay">
                    <div class="overlay-text">
                      <div class="overlay-text-1">Find Your Nearest</div>
                      <div class="overlay-text-2">Store</div>  
                      <div class="arrow-link">
                          <span class="arrow-link-icon"><i class="arrow-link-icon icon-arrow-right"></i></span>
                      </div>
                    </div>                    
                  </div>
                </a>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3">
                <a href="http://www.reece.com.au/bathrooms/inspiration#powder-room" class="nav-link">
                  <div class="nav-block the-powder-room">
                    <img src="images/nav/nav-powder-room.png"/>                    
                  </div>
                  <div class="nav-block-label">Read Blog</div>
                  <div class="overlay">
                    <div class="overlay-text">
                      <div class="overlay-text-1">Read</div>
                      <div class="overlay-text-2">Blog</div>  
                      <div class="arrow-link">
                          <span class="arrow-link-icon"><i class="arrow-link-icon icon-arrow-right"></i></span>
                      </div>
                    </div>                    
                  </div>
                </a>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3">
                <a href="http://www.reece.com.au/bathrooms/3d-bathroom-planner" class="nav-link">
                  <div class="nav-block planning">
                  </div>
                  <div class="nav-block-label">Start Planning</div>
                  <div class="overlay">
                    <div class="overlay-text">
                      <div class="overlay-text-1">Start</div>
                      <div class="overlay-text-2">Planning</div>  
                      <div class="arrow-link">
                          <span class="arrow-link-icon"><i class="arrow-link-icon icon-arrow-right"></i></span>
                      </div>
                    </div>                    
                  </div>
                </a>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3">
                <a href="http://www.reece.com.au/bathrooms/brands" class="nav-link">
                  <div class="nav-block brands">                  
                  </div>
                  <div class="nav-block-label">Explore Brands</div>
                  <div class="overlay">
                    <div class="overlay-text">
                      <div class="overlay-text-1">Explore</div>
                      <div class="overlay-text-2">Brands</div>  
                      <div class="arrow-link">
                          <span class="arrow-link-icon"><i class="arrow-link-icon icon-arrow-right"></i></span>
                      </div>
                    </div>                    
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- subsbribe form section -->
        <div class="section-subscribe-form">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12">
                <form name="subscribe-form" class="subscribe-form">
                  <span class="subscribe-form-title">Subscribe for updates</span>
                  <span class="name-wrapper">
                    <input type="text" name="name" placeholder="Name" required/>
                  </span>
                  <span class="submit-wrapper">
                    <input type="email" name="email" placeholder="Email" required/>
                    <span class="subscribe-submit">
                      <button type="submit"><i class="icon-arrow-right"></i></button>
                    </span>
                  </span>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end .main -->
      <?php include_once("templates/includes/reece-footer.php");?>    
    </div>
  </body>
</html>