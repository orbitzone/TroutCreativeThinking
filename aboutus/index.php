
    <?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>

    <?php 
        $cssScriptPaths = [
            "/assets/css/reece-aboutus.css"   
        ]; 
        include_once($serverBase."/includes/head/head-generic.php");
    ?>      

    <body class="withSubNav about-us">
        <div class="ocmain-wrapper">
            <div class="navbar navbar-fixed-top topNav">
                <?php 
                    $genericNavActiveMenuItem = "About Us";
                    include_once($serverBase."/includes/nav/nav-generic.php");
                ?>  

                


            </div>
            <?php 
                include_once($serverBase."/includes/nav/nav-subnavbar.php");
            ?>  
            <div class="content-container">
                <div class="inner-wrapper">
                    <h3>About Us</h3>
                    <section class="row-fluid">
                        <div class="span12">
                            <div id="about-us-carousel" class="carousel hidden-phone">
                                <div class="carousel-links">
                                    <h5 class="heading">Our Businesses</h5>
                                    <ol class="carousel-indicators">
                                        <li data-target="#about-us-carousel" data-slide-to="0" class="carousel-link-item active plumbing">Plumbing</li>
                                        <li data-target="#about-us-carousel" data-slide-to="1" class="carousel-link-item bathrooms">Bathrooms</li>
                                        <li data-target="#about-us-carousel" data-slide-to="2" class="carousel-link-item irrigation">Irrigation</li>
                                        <li data-target="#about-us-carousel" data-slide-to="3" class="carousel-link-item civil">Civil</li>
                                        <li data-target="#about-us-carousel" data-slide-to="4" class="carousel-link-item hvac-r">hvac-r</li>
                                        <li data-target="#about-us-carousel" data-slide-to="5" class="carousel-link-item onsite">Onsite</li>
                                    </ol>
                                </div>
                                <!-- Carousel items -->
                                <div class="carousel-inner">
                                    <div class="active item plumbing">
                                        <img src="/assets/images/aboutus/banner-plumbing.jpg" alt=" " class="bg-image">
                                        <div class="content">
                                            <h1>Plumbing</h1>
                                            <p>Thousands of plumbers turn to Reece because of our reputation for “having what you need, when you need it, where you need it.” It's all about delivering the best service possible. A commitment we live by every day.</p>
                                            <a class="coloredPanelLink" href="#">Discover more</a>
                                        </div>
                                    </div>
                                    <div class="item bathrooms">
                                        <img src="/assets/images/aboutus/banner-bathroom.jpg" alt=" " class="bg-image">
                                        <div class="content">
                                            <h1>Bathrooms</h1>
                                            <p>Lipsum sit dolor amet igo what you need, when you need it, where you need it.” It's all about delivering the best service possible. A commitment we live by every day.</p>
                                            <a class="coloredPanelLink" href="#">Discover more</a>
                                        </div>
                                    </div>
                                    <div class="item irrigation">
                                        <img src="/assets/images/aboutus/banner-plumbing.jpg" alt=" " class="bg-image">
                                        <div class="content">
                                            <h1>Irrigation</h1>
                                            <p>Lipsum sit dolor amet igo what you need, when you need it, where you need it.” It's all about delivering the best service possible. A commitment we live by every day.</p>
                                            <a class="coloredPanelLink" href="#">Discover more</a>
                                        </div>
                                    </div>
                                    <div class="item civil">
                                        <img src="/assets/images/aboutus/banner-plumbing.jpg" alt=" " class="bg-image">
                                        <div class="content">
                                            <h1>Civil</h1>
                                            <p>Lipsum sit dolor amet igo what you need, when you need it, where you need it.” It's all about delivering the best service possible. A commitment we live by every day.</p>
                                            <a class="coloredPanelLink" href="#">Discover more</a>
                                        </div>
                                    </div>
                                    <div class="item hvac-r">
                                        <img src="/assets/images/aboutus/banner-plumbing.jpg" alt=" " class="bg-image">
                                        <div class="content">
                                            <h1>HVAC-R</h1>
                                            <p>Lipsum sit dolor amet igo what you need, when you need it, where you need it.” It's all about delivering the best service possible. A commitment we live by every day.</p>
                                            <a class="coloredPanelLink" href="#">Discover more</a>
                                        </div>
                                    </div>
                                    <div class="item onsite">
                                        <img src="/assets/images/aboutus/banner-plumbing.jpg" alt=" " class="bg-image">
                                        <div class="content">
                                            <h1>Onsite</h1>
                                            <p>Lipsum sit dolor amet igo what you need, when you need it, where you need it.” It's all about delivering the best service possible. A commitment we live by every day.</p>
                                            <a class="coloredPanelLink" href="#">Discover more</a>
                                        </div>
                                    </div>
                                </div>
                            <!-- Carousel nav
                            <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                            <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
                             -->
                            </div>

                            <div id="about-us-carousel-mobile" class="carousel hidden-desktop slide">
                                
                                <!-- Carousel items -->
                                <div class="carousel-inner">
                                    <div class="active item plumbing">
                                        <div class="content">
                                            <h1>Plumbing</h1>
                                            <p>Thousands of plumbers turn to Reece because of our reputation for “having what you need, when you need it, where you need it.” It's all about delivering the best service possible. A commitment we live by every day.</p>
                                            <a class="coloredPanelLink" href="#">Discover more</a>
                                        </div>
                                    </div>
                                    <div class="item bathrooms">
                                        <div class="content">
                                            <h1>Bathrooms</h1>
                                            <p>Lipsum sit dolor amet igo what you need, when you need it, where you need it.” It's all about delivering the best service possible. A commitment we live by every day.</p>
                                            <a class="coloredPanelLink" href="#">Discover more</a>
                                        </div>
                                    </div>
                                    <div class="item irrigation">
                                        <div class="content">
                                            <h1>Irrigation</h1>
                                            <p>Lipsum sit dolor amet igo what you need, when you need it, where you need it.” It's all about delivering the best service possible. A commitment we live by every day.</p>
                                            <a class="coloredPanelLink" href="#">Discover more</a>
                                        </div>
                                    </div>
                                    <div class="item civil">
                                        <div class="content">
                                            <h1>Civil</h1>
                                            <p>Lipsum sit dolor amet igo what you need, when you need it, where you need it.” It's all about delivering the best service possible. A commitment we live by every day.</p>
                                            <a class="coloredPanelLink" href="#">Discover more</a>
                                        </div>
                                    </div>
                                    <div class="item hvac-r">
                                        <div class="content">
                                            <h1>HVAC-R</h1>
                                            <p>Lipsum sit dolor amet igo what you need, when you need it, where you need it.” It's all about delivering the best service possible. A commitment we live by every day.</p>
                                            <a class="coloredPanelLink" href="#">Discover more</a>
                                        </div>
                                    </div>
                                    <div class="item onsite">
                                        <div class="content">
                                            <h1>Onsite</h1>
                                            <p>Lipsum sit dolor amet igo what you need, when you need it, where you need it.” It's all about delivering the best service possible. A commitment we live by every day.</p>
                                            <a class="coloredPanelLink" href="#">Discover more</a>
                                        </div>
                                    </div>
                                </div>
                            
                                <a class="carousel-control left" href="#about-us-carousel-mobile" data-slide="prev">&lsaquo;</a>
                                <a class="carousel-control right" href="#about-us-carousel-mobile" data-slide="next">&rsaquo;</a>
                             
                            </div>

                        </div>
                    </section>
                    <section class="row-fluid">
                        <div class="span8">
                            <h4>Australia’s leading supplier of plumbing and bathroom products</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sollicitudin ligula eu diam dapibus, eget laoreet orci egestas. Aenean rhoncus erat non condimentum commodo.  Lorem ipsum dolor sit amet, consectetur adipiscing sollicitudin ligula eu diam dapibus, elit.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing sollicitudin ligula eu diam dapibus, elit. Sed sollicitudin ligula eu diam dapibus, eget laoreet orci egestas. Aenean rhoncus erat non condimentum commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sollicitudin ligula eu diam dapibus, eget laoreet orci egestas. Aenean rhoncus erat non condimentum commodo.  Lorem ipsum dolor sit amet, consectetur adipiscing sollicitudin ligula eu diam dapibus, elit.  Lorem ipsum dolor sit amet, consectetur adipiscing sollicitudin ligula eu diam dapibus, elit.</p>
                        </div>

                        <div class="span4 actrol">
                            <div class="inside">
                                <h4>A Cool New Addition For Reece</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sollicitudin ligula eu diam dapibus, eget laoreet orci egestas. Aenean rhoncus erat non condimentum commodo.  Lorem ipsum dolor sit amet, consectetur adipiscing elit.  Sed sollicitudin ligula eu diam dapibus, eget laoreet orci egestas. </p>
                            </div>
                        </div>
                    </section>

                    <section class="row-fluid middle-section">
                        <div class="span4">
                            <img src="http://placehold.it/357x195" alt="don't forget alt text!">
                            <h4>History</h4>
                            <p>Sed sollicitudin ligula eu diam dapibus, eget laoreet orci egestas. Aenean rhoncus erat non condimentum commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        </div>
                        <div class="span4">
                            <img src="http://placehold.it/357x195" alt="don't forget alt text!">
                            <h4>Partner with us</h4>
                            <p>Sed sollicitudin ligula eu diam dapibus, eget laoreet orci egestas. Aenean rhoncus erat non condimentum commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        </div>
                        <div class="span4">
                            <img src="http://placehold.it/357x195" alt="don't forget alt text!">
                            <h4>Finance</h4>
                            <p>Sed sollicitudin ligula eu diam dapibus, eget laoreet orci egestas. Aenean rhoncus erat non condimentum commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        </div>
                    </section>

                </div>
            </div>

            <div class="grey-bg">
                <div class="content-container">
                    <div class="inner-wrapper">
                        <section class="row-fluid">
                            <div class="span6">
                                <h4>Sustainability</h4>
                                <img src="http://placehold.it/550x135" alt="Don't forget alt text">
                                <p>Sed sollicitudin ligula eu diam dapibus, eget laoreet orci egestas. Aenean rhoncus erat non condimentum commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                <a class="read-more page-branding text-brand" href="#">Read More<i class="icon-arrow-right"></i></a>
                            </div>
                            <div class="span6">
                                <h4>Careers</h4>
                                <img src="http://placehold.it/550x135" alt="Don't forget alt text">
                                <p>Sed sollicitudin ligula eu diam dapibus, eget laoreet orci egestas. Aenean rhoncus erat non condimentum commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                <a class="read-more page-branding text-brand" href="#">Read More<i class="icon-arrow-right"></i></a>
                            </div>
                        </section>
                    </div>
                </div>
            </div>

            <?php 
                include_once($serverBase."/includes/foot/foot-generic.php");
            ?>      

        </div>      

        <?php
            $mobileNavActiveMenu = array(
                "activeMenu" => "About Us"
            );
            include_once($serverBase."/includes/nav/nav-mobile.php");
        ?>  

        <?php 
            $jsScriptPaths = [
                "/assets/js/jquery.mobile.custom.min.js",
                "/assets/js/bootstrap-transition.js", 
                "/assets/js/bootstrap-carousel.js",
                "/assets/js/reece-aboutus.js",         
                "/assets/js/reece-ocnav.js",
                "/assets/js/reece-signon.js",
                "/assets/js/reece-hidesubnavbar.js"
                // "/assets/js/bootstrap-collapse.js",
                // "/assets/js/bootstrap-dropdown.js"
                //"/assets/js/micro-template.js",
                //"/assets/js/reece-ajax-filter.js",
                //"/assets/js/reece-carousel.js",
                //"/assets/js/reece-products.js"
            ]; 
            include_once($serverBase."/includes/foot/scripts.php");
        ?>      

        <script type="text/html" id="filter_block_template">

            <div class="brand-block span6">
                <h3 class="brand-title">
                    <a href="#"><%=title%></a>
                </h3>                                       
                <a class="brand-media" href="#"><img src="<%=media%>"></a>
                <p>
                    <%=content%>
                </p>
            </div>

        </script>                   

    </body>
</html>