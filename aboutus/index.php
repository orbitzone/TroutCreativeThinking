
    <?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>

    <?php 
        $cssScriptPaths = [
            "/assets/css/reece-aboutus.css",    
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

                <?php 
                    include_once($serverBase."/includes/nav/nav-subnavbar.php");
                ?>  


            </div>
            <div class="content-container">
                <div class="inner-wrapper">
                    <h3>About Us</h3>
                    <section class="row-fluid">
                        <div class="span12">Banner</div>
                    </section>
                    <section class="row-fluid">
                        <div class="span8">
                            <h4>Australia’s leading supplier of plumbing and bathroom products</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sollicitudin ligula eu diam dapibus, eget laoreet orci egestas. Aenean rhoncus erat non condimentum commodo.  Lorem ipsum dolor sit amet, consectetur adipiscing sollicitudin ligula eu diam dapibus, elit.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing sollicitudin ligula eu diam dapibus, elit. Sed sollicitudin ligula eu diam dapibus, eget laoreet orci egestas. Aenean rhoncus erat non condimentum commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sollicitudin ligula eu diam dapibus, eget laoreet orci egestas. Aenean rhoncus erat non condimentum commodo.  Lorem ipsum dolor sit amet, consectetur adipiscing sollicitudin ligula eu diam dapibus, elit.  Lorem ipsum dolor sit amet, consectetur adipiscing sollicitudin ligula eu diam dapibus, elit.</p>
                        </div>

                        <div class="span4">Actrol...</div>
                    </section>

                    <section class="row-fluid">
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
                            <div class="span6">Sustainability...</div>
                            <div class="span6">Careers..gg.</div>
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
                "activeMenu" => "Bathrooms",
                "activeMenuItem" => "Bathroom Moments"
            );
            include_once($serverBase."/includes/nav/nav-mobile.php");
        ?>  

        <?php 
            $jsScriptPaths = [
                "/assets/js/jquery.mobile.custom.min.js",
                "/assets/js/bootstrap-transition.js", 
                "/assets/js/bootstrap-carousel.js",             
                "/assets/js/bootstrap-collapse.js",
                "/assets/js/bootstrap-dropdown.js",
                "/assets/js/micro-template.js",
                "/assets/js/reece-ajax-filter.js",
                "/assets/js/reece-ocnav.js",
                "/assets/js/reece-carousel.js",
                "/assets/js/reece-products.js"
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