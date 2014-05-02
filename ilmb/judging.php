<?php include_once($_SERVER['DOCUMENT_ROOT'] . "/includes/variables/variables.php"); ?>

<?php
$cssScriptPaths = array(
    "/assets/css/reece-products.css",
    "/assets/css/reece-bathrooms.css",
    "/assets/css/reece-bathrooms-ilmb.css",
    "/assets/js/fancybox/jquery.fancybox.css"
);
include_once($serverBase . "/includes/head/head-generic.php");
?>

<body class="ilmb withHappinessSubNav">

<div class="ocmain-wrapper">
    <div class="navbar navbar-fixed-top topNav">
        <?php
        $genericNavActiveMenuItem = "Bathrooms";
        include_once($serverBase . "/includes/nav/nav-generic.php");
        ?>
    </div>
    <?php include_once($serverBase . "/includes/nav/nav-happiness.php"); ?>
    <div class="content-container">
        <div class="inner-wrapper ">
            <ul class="breadcrumb">
                <li><a href="index.php">Home</a><span class="divider"> / </span></li>
                <li class="active page-branding text-brand"> Vote &amp; Win</li>
            </ul>
            <div class="main-wrapper  top-space">
                <div class="row-fluid">
                    <div class="span4"><a href="#ilmbMobileNav" class="showIlmbMenu visible-phone"
                                          data-toggle="collapse">Menu</a>

                        <div class="ilmbNav collapse" id="ilmbMobileNav">
                            <?php
                            $ilmbPage = 'judging';
                            include_once('navigation.php');
                            ?>
                        </div>
                        <div class="ilmbDates hidden-phone">
                            <h3>competition dates</h3>
                            <dl>
                                <dt>Comp opens</dt>
                                <dd>March 1st</dd>
                                <dt>Entries close</dt>
                                <dd>May 30th</dd>
                                <dt>Voting Opens</dt>
                                <dd>June 7th</dd>
                                <dt>Voting closes</dt>
                                <dd>June 30th</dd>
                                <dt>Winner announced</dt>
                                <dd>August 5th</dd>
                            </dl>
                        </div>
                    </div>
                    <div class="span8">
                        <h3 class="ilmbPageHeader"><img src="/assets/images/ilmb/ilmb-logo.png"
                                                        alt="I love my bathroom"/>
                        <span class="pageTitle">Judging</span>
                        </h3>
                        <hr>
                        <div class="row-fluid">
                            <div class="inner-content">
                                <div class="span12">
                                    <h3>Judging<br/>
                                        <small>Submit your bathroom
                                        </small>
                                    </h3>
                                    <p>The inspiring bathroom winner will be chosen by a judging panel compromising of
                                        representatives from Reece, Australia’s leading supplier of bathroom
                                        products.</p>

                                    <p>Our judges are looking for:</p>
                                    <ul>
                                        <li>Overall look and layout</li>
                                        <li>Inspired design</li>
                                        <li>Product selection</li>
                                        <li>Use of space</li>
                                        <li>Clever ideas</li>
                                        <li>An interesting description of why your bathroom is special to you</li>
                                    </ul>
                                    <h4>Vote & Win</h4>

                                    <p>The two voting winners will also be chosen by the same judging panel. The panel
                                        will
                                        be looking for the most interesting descriptions of why the bathroom you picked
                                        is
                                        so special.</p>
                                    <hr/>
                                    <h3>Expert Panel</h3>
                                </div>

                                <div class="judge">
                                    <img src="../assets/images/ilmb/judges/lisa_green_lg.jpg" alt="Lisa Green"
                                         class="judge-large"/>
                                    <h4>Lisa Green <br>
                                        <small>H&G EDITOR IN CHIEF
                                        </small>
                                    </h4>
                                    <p>Over seven years as editor in chief of Australian House & Garden, Lisa Green has
                                        firmly established H&G as the leading aspirational homes magazine in Australia.
                                        Uniquely positioned to soak up design, Lisa loves sharing the latest innovations
                                        with readers across multiple brand platforms.</p>
                                </div>
                                <div class="judge">
                                    <img src="../assets/images/ilmb/judges/clare_cousins_lg.jpg" alt="Clare Cousins"
                                         class="judge-large"/>
                                    <h4>Clare Cousins<br>
                                        <small>ARCHITECT
                                        </small>
                                    </h4>
                                    <p>Clare Cousins founded her Melbourne practice, Clare Cousins Architects (CCA), in
                                        2005 and has won many industry awards, most recently, the AIA National Emerging
                                        Architect of 2013. Clare leads an energetic design team, resulting in innovative
                                        yet pragmatic design outcomes.</p>
                                </div>
                                <div class="judge">
                                    <img src="../assets/images/ilmb/judges/brent_mickan_lg.jpg" alt="Brett Mickan"
                                         class="judge-large"/>
                                    <h4>Brett Mickan
                                        <br>
                                        <small>INTERIOR DESIGNER
                                        </small>
                                    </h4>
                                    <p>Brett Mickan has been working in the design field for over 20 years in numerous
                                        cities around the world, from New York to Lisbon. He has worked in many aspects
                                        of design including film, exhibitions, yacht interiors, commercial and
                                        residential, always infusing spaces with his passion for colour.</p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </div>

        </div>
    </div>

    <?php
    include_once($serverBase . "/includes/foot/foot-generic.php");
    ?>

</div>

<?php
$mobileNavActiveMenu = array(
    "activeMenu" => "Bathrooms",
    "activeMenuItem" => "Bathroom Moments"
);
include_once($serverBase . "/includes/nav/nav-mobile.php");
?>

<?php
$jsScriptPaths = array(
    "/assets/js/jquery.mobile.custom.min.js",
    "/assets/js/jquery.lazyload.min.js",
    "/assets/js/bootstrap-transition.js",
    "/assets/js/bootstrap-carousel.js",
    "/assets/js/bootstrap-collapse.js",
    "/assets/js/bootstrap-dropdown.js",
    "/assets/js/reece-ocnav.js",
    "/assets/js/reece-carousel.js",
    "/assets/js/reece-ilmb-minisite.js",
    "/assets/js/fancybox/jquery.fancybox.js"
);
include_once($serverBase . "/includes/foot/scripts.php");
?>
<script type="text/javascript">

    $(document).ready(function () {
        $("a.fancybox").fancybox({
            title: null,
            maxWidth: 1200,
            minHeight: 600
        });

        $("a.fancybox-vote").fancybox({
            title: null,
            maxWidth: 1200,
            minHeight: 600
        });

        $("a.fancybox-vote").click(function (e) {
            $("#entry-name").val($(this).attr("title"));
        });


    });

</script>
</body>
</html>                           