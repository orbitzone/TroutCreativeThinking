
    <?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>

    <?php 
        $cssScriptPaths = [
            "/assets/css/reece-partner.css"   
        ]; 
        include_once($serverBase."/includes/head/head-generic.php");
    ?>      

    <body class="partner">
        <div class="ocmain-wrapper">
            <div class="navbar navbar-fixed-top topNav">
                <?php 
                    $genericNavActiveMenuItem = "About Us";
                    include_once($serverBase."/includes/nav/nav-generic.php");
                ?>

            </div>
            <div class="content-container">
                <div class="inner-wrapper">

                    <ul class="breadcrumb">
                        <li><a href="#">About us</a> <span class="divider">/</span></li>
                        <li class="active page-branding text-brand">Partner with Reece</li>
                    </ul>

                    <h3>Partner With Reece</h3>
                    <section class="row-fluid">
                        <div class="span12">
                            <div id="carousel-partner" class="carousel slide" data-ride="carousel">

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                      <img src="http://placehold.it/1163x523&text=Slide-1" alt="dont forget alt text">
                                    </div>
                                    <div class="item">
                                      <img src="http://placehold.it/1163x523&text=Slide-two" alt="dont forget alt text">
                                    </div>
                                </div>

                                <!-- Controls -->

                                <a class="carousel-control left" href="#carousel-partner" data-slide="prev">&lsaquo;</a>
                                <a class="carousel-control right" href="#carousel-partner" data-slide="next">&rsaquo;</a>

                            </div>


                        </div>
                    </section>
                    
                    <section class="why-partner">
                        <div class="why-partner-intro">
                            <h4>Why Partner With Reece</h4>
                            <p>Sed sollicitudin ligula eu diam dapibus, eget laoreet orci egestas. Aenean rhoncus erat non condimentum commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        </div>
                        <!--ROW 1 Brands-->
                        <div class="row-fluid why-partner-brands">
                            <!--Brand start-->
                            <article class="span4 brand brand-1">
                                <div class="row-fluid">
                                    <div class="span5">
                                        <a href="#brand-expand-1">
                                            <img class="brand-logo" src="http://placehold.it/120x145" alt="Don't forget alt text">
                                        </a>
                                    </div>
                                    <div class="span7">
                                        <a href="#brand-expand-1">
                                            <h5 class="brand-name">Brand one</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <button class="btn btn-medium" type="button">Read more</button>
                                        </a>
                                     </div>
                                </div>
                            </article>
                            <!--end brand-->
                            <!--Brand start-->
                            <article class="span4 brand brand-2">
                                <div class="row-fluid">
                                    <div class="span5">
                                        <a href="#brand-expand-2">
                                            <img class="brand-logo" src="http://placehold.it/120x145" alt="Don't forget alt text">
                                        </a>
                                    </div>
                                    <div class="span7">
                                        <a href="#brand-expand-2">
                                            <h5 class="brand-name">Brand two</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <button class="btn btn-medium" type="button">Read more</button>
                                        </a>
                                     </div>
                                </div>
                            </article>
                            <!--end brand-->
                            <!--Brand start-->
                            <article class="span4 brand brand-3">
                                <div class="row-fluid">
                                    <div class="span5">
                                        <a href="#brand-expand-3">
                                            <img class="brand-logo" src="http://placehold.it/120x145" alt="Don't forget alt text">
                                        </a>
                                    </div>
                                    <div class="span7">
                                        <a href="#brand-expand-3">
                                            <h5 class="brand-name">Brand three</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <button class="btn btn-medium" type="button">Read more</button>
                                        </a>
                                     </div>
                                </div>
                            </article>
                            <!--end brand-->
                        </div>

                        <div class="collapsible-brands hidden-phone">
                            <!--collapsible brand 1-->
                            <div class="brand-expand" data-brand-number="brand-expand-1">
                                <div class="row-fluid">
                                    <div class="span5">
                                        <img src="http://placehold.it/500x410" alt="ALt text">
                                    </div>
                                    <div class="span7">
                                        <h3 class="heading">Brand One</h3>
                                        <div class="brand-desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sollicitudin ligula eu diam dapibus, eget laoreet orci egestas. Aenean rhoncus erat non condimentum commodo. Lorem ipsum dolor sit amet, consectetur adipiscing sollicitudin ligula eu diam dapibus, elit. </p>
                                            <p>Sed sollicitudin ligula eu diam dapibus, eget laoreet orci egestas. Aenean rhoncus erat non condimentum commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sollicitudin ligula eu diam dapibus, eget laoreet orci egestas. Aenean rhoncus erat non condimentum commodo.  Lorem ipsum dolor sit amet, consectetur adipiscing sollicitudin ligula eu diam dapibus, elit.  Lorem ipsum dolor sit amet, consectetur adipiscing sollicitudin ligula eu diam dapibus, elit.</p>
                                        </div>
                                        <div class="brand-buttons">
                                            <button class="btn btn-medium" type="button">See Brand 1 Page</button>
                                            <button class="btn btn-medium" type="button">See Reece Finance Reports</button>
                                        </div>
                                        <a class="brand-close">x</a>
                                    </div>
                                </div>
                            </div>
                            <!--collapsible brand 2-->
                            <div class="brand-expand" data-brand-number="brand-expand-2">
                                <div class="row-fluid">
                                    <div class="span5">
                                        <img src="http://placehold.it/500x410" alt="ALt text">
                                    </div>
                                    <div class="span7">
                                        <h3 class="heading">Brand Two</h3>
                                        <div class="brand-desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sollicitudin ligula eu diam dapibus, eget laoreet orci egestas. Aenean rhoncus erat non condimentum commodo. Lorem ipsum dolor sit amet, consectetur adipiscing sollicitudin ligula eu diam dapibus, elit. </p>
                                        </div>
                                        <div class="brand-buttons">
                                            <button class="btn btn-medium" type="button">See Brand 2 Page</button>
                                            <button class="btn btn-medium" type="button">See Reece Finance Reports</button>
                                        </div>
                                        <a class="brand-close">x</a>
                                    </div>
                                </div>
                            </div>                        

                            <!--collapsible brand 3-->
                            <div class="brand-expand" data-brand-number="brand-expand-3">
                                <div class="row-fluid">
                                    <div class="span5">
                                        <img src="http://placehold.it/500x410" alt="ALt text">
                                    </div>
                                    <div class="span6">
                                        <h3 class="heading">Brand Three</h3>
                                        <div class="brand-desc">
                                            <p>Sed sollicitudin ligula eu diam dapibus, eget laoreet orci egestas. Aenean rhoncus erat non condimentum commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sollicitudin ligula eu diam dapibus, eget laoreet orci egestas. Aenean rhoncus erat non condimentum commodo.  Lorem ipsum dolor sit amet, consectetur adipiscing sollicitudin ligula eu diam dapibus, elit.  Lorem ipsum dolor sit amet, consectetur adipiscing sollicitudin ligula eu diam dapibus, elit.</p>
                                        </div>
                                        <div class="brand-buttons">
                                            <button class="btn btn-medium" type="button">See Brand 3 Page</button>
                                            <button class="btn btn-medium" type="button">See Reece Finance Reports</button>
                                        </div>
                                        <a class="brand-close">X</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--ROW 2 Brands-->
                        <div class="row-fluid why-partner-brands">
                            <!--Brand start-->
                            <article class="span4 brand brand-4">
                                <div class="row-fluid">
                                    <div class="span5">
                                        <a href="#brand-expand-4">
                                            <img class="brand-logo" src="http://placehold.it/120x145" alt="Don't forget alt text">
                                        </a>
                                    </div>
                                    <div class="span7">
                                        <a href="#brand-expand-4">
                                            <h5 class="brand-name">Brand four</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <button class="btn btn-medium" type="button">Read more</button>
                                        </a>
                                     </div>
                                </div>
                            </article>
                            <!--end brand-->
                            <!--Brand start-->
                            <article class="span4 brand brand-5">
                                <div class="row-fluid">
                                    <div class="span5">
                                        <a href="#brand-expand-5">
                                            <img class="brand-logo" src="http://placehold.it/120x145" alt="Don't forget alt text">
                                        </a>
                                    </div>
                                    <div class="span7">
                                        <a href="#brand-expand-5">
                                            <h5 class="brand-name">Brand five</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <button class="btn btn-medium" type="button">Read more</button>
                                        </a>
                                     </div>
                                </div>
                            </article>
                            <!--end brand-->
                            <!--Brand start-->
                            <article class="span4 brand brand-6">
                                <div class="row-fluid">
                                    <div class="span5">
                                        <a href="#brand-expand-6">
                                            <img class="brand-logo" src="http://placehold.it/120x145" alt="Don't forget alt text">
                                        </a>
                                    </div>
                                    <div class="span7">
                                        <a href="#brand-expand-6">
                                            <h5 class="brand-name">Brand six</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                            <button class="btn btn-medium" type="button">Read more</button>
                                        </a>
                                     </div>
                                </div>
                            </article>
                            <!--end brand-->
                        </div>

                        <div class="collapsible-brands hidden-phone">
                            <!--collapsible brand 4-->
                            <div class="brand-expand" data-brand-number="brand-expand-4">
                                <div class="row-fluid">
                                    <div class="span5">
                                        <img src="http://placehold.it/500x410" alt="ALt text">
                                    </div>
                                    <div class="span7">
                                        <h3 class="heading">Brand four</h3>
                                        <div class="brand-desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sollicitudin ligula eu diam dapibus, eget laoreet orci egestas. Aenean rhoncus erat non condimentum commodo. Lorem ipsum dolor sit amet, consectetur adipiscing sollicitudin ligula eu diam dapibus, elit. </p>
                                            <p>Sed sollicitudin ligula eu diam dapibus, eget laoreet orci egestas. Aenean rhoncus erat non condimentum commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sollicitudin ligula eu diam dapibus, eget laoreet orci egestas. Aenean rhoncus erat non condimentum commodo.  Lorem ipsum dolor sit amet, consectetur adipiscing sollicitudin ligula eu diam dapibus, elit.  Lorem ipsum dolor sit amet, consectetur adipiscing sollicitudin ligula eu diam dapibus, elit.</p>
                                        </div>
                                        <div class="brand-buttons">
                                            <button class="btn btn-medium" type="button">See Brand 4 Page</button>
                                            <button class="btn btn-medium" type="button">See Reece Finance Reports</button>
                                        </div>
                                        <a class="brand-close">x</a>
                                    </div>
                                </div>
                            </div>
                            <!--collapsible brand 5-->
                            <div class="brand-expand" data-brand-number="brand-expand-5">
                                <div class="row-fluid">
                                    <div class="span5">
                                        <img src="http://placehold.it/500x410" alt="ALt text">
                                    </div>
                                    <div class="span7">
                                        <h3 class="heading">Brand five</h3>
                                        <div class="brand-desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sollicitudin ligula eu diam dapibus, eget laoreet orci egestas. Aenean rhoncus erat non condimentum commodo. Lorem ipsum dolor sit amet, consectetur adipiscing sollicitudin ligula eu diam dapibus, elit. </p>
                                            <p>Sed sollicitudin ligula eu diam dapibus, eget laoreet orci egestas. Aenean rhoncus erat non condimentum commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sollicitudin ligula eu diam dapibus, eget laoreet orci egestas. Aenean rhoncus erat non condimentum commodo.  Lorem ipsum dolor sit amet, consectetur adipiscing sollicitudin ligula eu diam dapibus, elit.  Lorem ipsum dolor sit amet, consectetur adipiscing sollicitudin ligula eu diam dapibus, elit.</p>
                                        </div>
                                        <div class="brand-buttons">
                                            <button class="btn btn-medium" type="button">See Brand 5 Page</button>
                                            <button class="btn btn-medium" type="button">See Reece Finance Reports</button>
                                        </div>
                                        <a class="brand-close">x</a>
                                    </div>
                                </div>
                            </div>                        

                            <!--collapsible brand 6-->
                            <div class="brand-expand" data-brand-number="brand-expand-6">
                                <div class="row-fluid">
                                    <div class="span5">
                                        <img src="http://placehold.it/500x410" alt="ALt text">
                                    </div>
                                    <div class="span6">
                                        <h3 class="heading">Brand Six</h3>
                                        <div class="brand-desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sollicitudin ligula eu diam dapibus, eget laoreet orci egestas. Aenean rhoncus erat non condimentum commodo. Lorem ipsum dolor sit amet, consectetur adipiscing sollicitudin ligula eu diam dapibus, elit. </p>
                                            <p>Sed sollicitudin ligula eu diam dapibus, eget laoreet orci egestas. Aenean rhoncus erat non condimentum commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sollicitudin ligula eu diam dapibus, eget laoreet orci egestas. Aenean rhoncus erat non condimentum commodo.  Lorem ipsum dolor sit amet, consectetur adipiscing sollicitudin ligula eu diam dapibus, elit.  Lorem ipsum dolor sit amet, consectetur adipiscing sollicitudin ligula eu diam dapibus, elit.</p>
                                        </div>
                                        <div class="brand-buttons">
                                            <button class="btn btn-medium" type="button">See Brand 6 Page</button>
                                            <button class="btn btn-medium" type="button">See Reece Finance Reports</button>
                                        </div>
                                        <a class="brand-close">x</a>
                                    </div>
                                </div>
                            </div>
                        </div>                    
                    </section>

                </div>
            </div>

            <div class="grey-bg">
                <div class="content-container">
                    <div class="inner-wrapper">
                    
                        <h4>Finance</h4>
                        <section class="row-fluid">
                            <div class="span6">  
                               <img src="http://placehold.it/580x164" alt="Don't forget alt text">
                            </div>  
                            <div class="span6">
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
                "/assets/js/bootstrap-dropdown.js",
                "/assets/js/reece-signon.js",
                "/assets/js/reece-partner.js",         
                "/assets/js/reece-ocnav.js"
            ]; 
            include_once($serverBase."/includes/foot/scripts.php");
        ?>                       

    </body>
</html>