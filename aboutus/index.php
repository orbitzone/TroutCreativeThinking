
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
        include_once($serverBase."/includes/nav/nav-about-us.php");
        ?>
        <div class="content-container">
            <div class="inner-wrapper">


                <ul class="breadcrumb">
                    <li class="active page-branding text-brand">About Us</li>
                </ul>




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
                                    <img src="/assets/images/aboutus/home/banner-plumbing.jpg" alt=" " class="bg-image">
                                    <div class="content">
                                        <h1>Plumbing</h1>
                                        <p>Thousands of plumbers turn to Reece because of our reputation for “having what you need, when you need it, where you need it.” It's all about delivering the best service possible. A commitment we live by every day.</p>
                                        <a class="coloredPanelLink" href="/plumbing/">Discover more</a>
                                    </div>
                                </div>
                                <div class="item bathrooms">
                                    <img src="/assets/images/aboutus/home/banner-bathroom.jpg" alt=" " class="bg-image">
                                    <div class="content">
                                        <h1>Bathrooms</h1>
                                        <p>The home of bathroom happiness, Reece offers Australia’s largest range of beautiful products matched with the very best advice for creating your perfect bathroom.</p>
                                        <a class="coloredPanelLink" href="/navigation/happiness.php">Discover more</a>
                                    </div>
                                </div>
                                <div class="item irrigation">
                                    <img src="/assets/images/aboutus/home/banner-irrigation.jpg" alt=" " class="bg-image">
                                    <div class="content">
                                        <h1>Irrigation</h1>
                                        <p>From turf to piping, lighting to pumps, Reece Irrigation offers an extensive selection of high quality products to service the landscape, commercial and agricultural industries.</p>
                                        <a class="coloredPanelLink" href="/irrigation/">Discover more</a>
                                    </div>
                                </div>
                                <div class="item civil">
                                    <img src="/assets/images/aboutus/home/banner-civil.jpg" alt=" " class="bg-image">
                                    <div class="content">
                                        <h1>Civil</h1>
                                        <p>The underground pipe network specialists, Reece Civil can help you source and specify the right products for water, gas, sewer, telecommunications, electrical and fire services.</p>
                                        <a class="coloredPanelLink" href="/civil/">Discover more</a>
                                    </div>
                                </div>
                                <div class="item hvac-r">
                                    <img src="/assets/images/aboutus/home/banner-hvacr-2.jpg" alt=" " class="bg-image">
                                    <div class="content">
                                        <h1>HVAC-R</h1>
                                        <p>With a network of dedicated outlets nationally, Reece HVAC-R offers unrivalled service, support, stock and spare parts for all type of heating, refrigeration, ventilation and climate solutions.</p>
                                        <a class="coloredPanelLink" href="/hvacr/">Discover more</a>
                                    </div>
                                </div>
                                <div class="item onsite">
                                    <img src="/assets/images/aboutus/home/onsite.jpg" alt=" " class="bg-image">
                                    <div class="content">
                                        <h1>Onsite</h1>
                                        <p>A specialist business focused on product needs of large domestic builders, commercial plumbers and developers, Reece Onsite helps to drive the success of our customers through end-to-end supply solutions.</p>
                                        <a class="coloredPanelLink" href="/onsite/">Discover more</a>
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
                                    <a class="coloredPanelLink" href="/plumbing/">Discover more</a>
                                </div>
                            </div>
                            <div class="item bathrooms">
                                <div class="content">
                                    <h1>Bathrooms</h1>
                                    <p>Lipsum sit dolor amet igo what you need, when you need it, where you need it.” It's all about delivering the best service possible. A commitment we live by every day.</p>
                                    <a class="coloredPanelLink" href="/navigation/happiness.php">Discover more</a>
                                </div>
                            </div>
                            <div class="item irrigation">
                                <div class="content">
                                    <h1>Irrigation</h1>
                                    <p>Lipsum sit dolor amet igo what you need, when you need it, where you need it.” It's all about delivering the best service possible. A commitment we live by every day.</p>
                                    <a class="coloredPanelLink" href="/irrigation/">Discover more</a>
                                </div>
                            </div>
                            <div class="item civil">
                                <div class="content">
                                    <h1>Civil</h1>
                                    <p>Lipsum sit dolor amet igo what you need, when you need it, where you need it.” It's all about delivering the best service possible. A commitment we live by every day.</p>
                                    <a class="coloredPanelLink" href="/civil/">Discover more</a>
                                </div>
                            </div>
                            <div class="item hvac-r">
                                <div class="content">
                                    <h1>HVAC-R</h1>
                                    <p>Lipsum sit dolor amet igo what you need, when you need it, where you need it.” It's all about delivering the best service possible. A commitment we live by every day.</p>
                                    <a class="coloredPanelLink" href="/hvacr/">Discover more</a>
                                </div>
                            </div>
                            <div class="item onsite">
                                <div class="content">
                                    <h1>Onsite</h1>
                                    <p>Lipsum sit dolor amet igo what you need, when you need it, where you need it.” It's all about delivering the best service possible. A commitment we live by every day.</p>
                                    <a class="coloredPanelLink" href="/onsite/">Discover more</a>
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
                    <p>The Reece business began in 1919 when Harold Joseph Reece commenced selling hardware products from the back of his truck. Today, Reece is a major public company and Australia's most successful supplier of plumbing and bathroom products. We have over 400 stores across Australia with over 3500 staff and thousands of products. </p>

                </div>

                <div class="span4 actrol">
                    <div class="inside">
                        <h4>A Cool New Addition For Reece</h4>
                        <p>Reece Australia Limited (‘Reece’) is pleased to announce the signing of a binding share sale agreement for the purchase of 100% of the shares in Actrol Parts Holdings Pty Ltd and its subsidiaries consisting of Actrol Parts and AC Components (trading as Metalflex and Air Plus) (together ‘Actrol Group’).</p>
                    </div>
                </div>
            </section>

            <section class="row-fluid middle-section">
                <div class="span4">
                    <a href="/aboutus/history.php">
                        <img src="../assets/images/aboutus/home/history.jpg" alt="don't forget alt text!">
                    </a>
                    <h4>History</h4>
                    <p>For 85 years Reece has provided products and a dedicated service to plumbers. We're proud of the reputation we have earned over that time for "having what you need, when you need it, where you need it." </p>
                </div>
                <div class="span4">
                    <a href="/aboutus/partner.php">
                        <img src="../assets/images/aboutus/home/partner.jpg" alt="don't forget alt text!">
                    </a>
                    <h4>Partner with us</h4>
                    <p>Some of the world's best brands can only be found at Reece. 

This is a reflection of Reece's international reputation for professionalism, quality and marketing ability. 

Reece has achieved outstanding results with a range of exclusive products in the retail, trade and specialised markets. </p>
                </div>
                <div class="span4">
                    <a href="/aboutus/finance.php">
                        <img src="../assets/images/aboutus/partner/finance_357.jpg" alt="don't forget alt text!">
                    </a>
                    <h4>Finance</h4>
                    <p>Reece is a public company that has enjoyed a long history of exceptional financial performance. A major factor contributing to this success has been the leadership provided by a strong, decisive and stable management team. Reece is committed to good corporate governance and to the continued creation of shareholder value. </p>
                </div>
            </section>

        </div>
    </div>

    <div class="grey-bg">
        <div class="content-container about-footer-module">
            <div class="inner-wrapper">
                <section class="row-fluid">
                    <div class="span6">
                        <h4>Sustainability</h4>
                        <img src="../assets/images/aboutus/home/sustainability.jpg" alt="Don't forget alt text">
                        <p>Sed sollicitudin ligula eu diam dapibus, eget laoreet orci egestas. Aenean rhoncus erat non condimentum commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        <a class="read-more page-branding text-brand" href="#">Read More<i class="icon-arrow-right"></i></a>
                    </div>
                    <div class="span6">
                        <h4>Careers</h4>
                        <a href="/aboutus/contact.php">
                            <img src="../assets/images/aboutus/home/careers.jpg" alt="Don't forget alt text">
                        </a>
                        <p>Sed sollicitudin ligula eu diam dapibus, eget laoreet orci egestas. Aenean rhoncus erat non condimentum commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        <a class="read-more page-branding text-brand" href="/aboutus/contact.php">Read More<i class="icon-arrow-right"></i></a>
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

</body>
</html>