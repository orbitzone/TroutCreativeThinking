
<?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>

<?php
$cssScriptPaths = [
"/assets/css/reece-partner.css"
];
include_once($serverBase."/includes/head/head-generic.php");
?>

<body class="partner withSubNav">
    <div class="ocmain-wrapper">
        <div class="navbar navbar-fixed-top topNav">
            <?php
            $genericNavActiveMenuItem = "About Us";
            include_once($serverBase."/includes/nav/nav-generic.php");
            ?>

            <?php
            include_once($serverBase."/includes/nav/nav-about-us.php");
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
                                    <div class="text-cover">
                                        <p class="text">Gain instant exposure to over 400 stores Australia wide</p>
                                    </div>
                                    <img src="http://lorempixel.com/1160/522" height="522" width="1160" alt="dont forget alt text">
                                </div>
                                <div class="item">
                                    <div class="text-cover">
                                        <p class="text">Gain instant exposure to over 400 stores Australia wide</p>
                                    </div>
                                    <img src="http://lorempixel.com/1161/522" height="522" width="1160" alt="dont forget alt text">
                                </div>
                                <div class="item">
                                    <div class="text-cover">
                                        <p class="text">Gain instant exposure to over 400 stores Australia wide</p>
                                    </div>
                                    <img src="http://lorempixel.com/1162/522" height="522" width="1160" alt="dont forget alt text">
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
                                        <img class="brand-logo" src="../assets/images/aboutus/partner/thumbs/laufen-thumb.jpg" alt="Don't forget alt text">
                                    </a>
                                </div>
                                <div class="span7">
                                    <a href="#brand-expand-1">
                                        <h5 class="brand-name">Laufen</h5>
                                        <p>At the heart of Swiss bathroom culture since 1892...</p>
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
                                        <img class="brand-logo" src="../assets/images/aboutus/partner/thumbs/roca-thumb.jpg" alt="Don't forget alt text">
                                    </a>
                                </div>
                                <div class="span7">
                                    <a href="#brand-expand-2">
                                        <h5 class="brand-name">Roca</h5>
                                        <p>Roca has been shaping bathroom design for over 90 years...</p>
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
                                        <img class="brand-logo" src="../assets/images/aboutus/partner/thumbs/hideaway-thumb.jpg" alt="Don't forget alt text">
                                    </a>
                                </div>
                                <div class="span7">
                                    <a href="#brand-expand-3">
                                        <h5 class="brand-name">Hideaway</h5>
                                        <p>Hideaway in-wall systems make the perfect choice for the modern bathroom...</p>
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
                                    <img src="../assets/images/aboutus/partner/large/laufen-brand-hero.jpg" alt="ALt text">
                                </div>
                                <div class="span7">
                                    <h3 class="heading">Laufen</h3>
                                    <div class="brand-desc">
                                        <p>At the heart of Swiss bathroom culture since 1892, the LAUFEN name is synonymous with beauty, craftsmanship and perfection of form - qualities that continue to define LAUFEN as one of the world's most desired bathroom brands. Partnering with outstanding architects and designers, LAUFEN creates bathroom products that express emotion, purity and harmony, while continually pushing the limits of technical possibility to create ground-breaking new ideas expressed through ceramics.</p>
                                    </div>
                                    <div class="brand-buttons">
                                        <button class="btn btn-medium" type="button">See Laufen's Page</button>
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
                                    <img src="../assets/images/aboutus/partner/large/roca-brand-hero.jpg" alt="ALt text">
                                </div>
                                <div class="span7">
                                    <h3 class="heading">Roca</h3>
                                    <div class="brand-desc">
                                        <p>Inspired by design and driven by the passion of its Spanish heritage, Roca has been a world leader in bathroom design for over 90 years. Continually exploring new spaces and new emotions, Roca offers enhanced living through a completely new bathroom experience.</p>
                                    </div>
                                    <div class="brand-buttons">
                                        <button class="btn btn-medium" type="button">See Roca's Page</button>
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
                                    <img src="../assets/images/aboutus/partner/large/hideaway-brand-hero.jpg" alt="ALt text">
                                </div>
                                <div class="span6">
                                    <h3 class="heading">Hideaway</h3>
                                    <div class="brand-desc">
                                        <p>Hideaway gives you the freedom to create your perfect bathroom space. With a large choice of buttons available, you can play with an extensive choice of styling combinations to complete your look - which makes Hideaway a 'must have' for the modern bathroom.</p>
                                        <p>
                                            To create your ideal Hideaway suite, use the Selector Tool found on the Hideaway brand page.</p>
                                        </div>
                                        <div class="brand-buttons">
                                            <button class="btn btn-medium" type="button">See Hideaway's Page</button>
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
                                            <img class="brand-logo" src="../assets/images/aboutus/partner/thumbs/geberit-thumb.jpg" alt="Don't forget alt text">
                                        </a>
                                    </div>
                                    <div class="span7">
                                        <a href="#brand-expand-4">
                                            <h5 class="brand-name">Geberit</h5>
                                            <p>Geberit has been engineering innovative and well designed products...</p>
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
                                            <img class="brand-logo" src="../assets/images/aboutus/partner/thumbs/milli-thumb.jpg" alt="Don't forget alt text">
                                        </a>
                                    </div>
                                    <div class="span7">
                                        <a href="#brand-expand-5">
                                            <h5 class="brand-name">Milli</h5>
                                            <p> Alluring and confident, Milli captivates with its sheer beauty...</p>
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
                                            <img class="brand-logo" src="../assets/images/aboutus/partner/thumbs/mizu-thumb.jpg" alt="Don't forget alt text">
                                        </a>
                                    </div>
                                    <div class="span7">
                                        <a href="#brand-expand-6">
                                            <h5 class="brand-name">Mizu</h5>
                                            <p>Consistent with the principles of minimalist design...</p>
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
                                        <img src="../assets/images/aboutus/partner/large/geberit-brand-hero.jpg" alt="ALt text">
                                    </div>
                                    <div class="span7">
                                        <h3 class="heading">Geberit</h3>
                                        <div class="brand-desc">
                                            <p>With a rich history of innovative thinking, Geberit has grown to be a market leader throughout the world. Incorporating Swiss know-how and luxury into its advanced range of hidden cisterns and buttons, Geberit enables clean, sophisticated bathroom designs with the highest levels of sustainability.</p>
                                            <p>
                                                To create your ideal Geberit suite, use the Selector Tool on the Geberit brand page.</p>
                                            </div>
                                            <div class="brand-buttons">
                                                <button class="btn btn-medium" type="button">See Geberit's Page</button>
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
                                            <img src="../assets/images/aboutus/partner/large/milli-brand-hero.jpg" alt="ALt text">
                                        </div>
                                        <div class="span7">
                                            <h3 class="heading">Milli</h3>
                                            <div class="brand-desc">
                                                <p>Alluring and confident, Milli captivates with its sheer beauty. Embracing the style of the moment, Milli's fashion forward collection of tapware and accessories allow for total freedom of expression in the bathroom. Chic and sassy, you'll be naturally drawn to Milli.</p>
                                            </div>
                                            <div class="brand-buttons">
                                                <button class="btn btn-medium" type="button">See Milli's Page</button>
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
                                            <img src="../assets/images/aboutus/partner/large/mizu-brand-hero.jpg" alt="ALt text">
                                        </div>
                                        <div class="span6">
                                            <h3 class="heading">Mizu</h3>
                                            <div class="brand-desc">
                                                <p>Consistent with the principles of minimalist design, Mizu's clean, simple lines bring balance and harmony to the bathroom space. Just like minimalism, Mizu is defined by simples shapes, soft arcs, bold lines and elegant curves. Brought to life by four simple yet distinct ranges; Drift, Bloc, Soothe and Bliss.</p>
                                            </div>
                                            <div class="brand-buttons">
                                                <button class="btn btn-medium" type="button">See Mizu's Page</button>
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
                                 <img src="../assets/images/aboutus/partner/finance_2.jpg" alt="Don't forget alt text">
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
        "/assets/js/reece-hidesubnavbar.js",
        "/assets/js/reece-ocnav.js"
        ];
        include_once($serverBase."/includes/foot/scripts.php");
        ?>

    </body>
    </html>