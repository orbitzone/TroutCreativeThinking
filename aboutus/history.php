
<?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>

<?php
$cssScriptPaths = [
"/assets/css/reece-history.css"
];
include_once($serverBase."/includes/head/head-generic.php");
?>

<body class="withSubNav history" data-spy="scroll" data-target=".nav-history">
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


        <div class="nav-history">
            <ul class="nav">
                <li><a href="#slide-1">Title</a></li>
                <li><a href="#slide1954">1910</a></li>
                <li><a href="#slide1997">1920</a></li>
                <li><a href="#slide1998">1950</a></li>
            </ul>
        </div>

        <section id="slide-1">
            <div class="content-container">
                <img src="/assets/images/aboutus/history/logo-reece.png" alt=" " class="reece-logo"
                data-0="opacity: 1"
                data-100="opacity:0.1"
                >
                <h1>Reece Timeline</h1>
                <p
                data-anchor-target="#slide-1"
                data-100-bottom="opacity: .3"
                data-bottom="opacity:1"
                >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac leo bibendum, suscipit sapien vitae, posuere nulla. Duis vitae neque urna. Cras in sem eu risus blandit congue in et odio. Sed non congue tellus, vel facilisis tortor.</p>
                <img src="/assets/images/aboutus/history/img-drop.png" alt=" " class="water-drop"
                data-anchor-target="#slide-1"
                data-top-top="top: 0%"
                data-center-bottom="top: 60%; opacity: 1"
                data--200-top-bottom="opacity: 0; top: 80%"
                >

            </div>
        </section>
        <section id="slide1954">
            <div class="content-container">
                <h2 class="year">1954</h2>
                <p class="yearDescription">Reece is listed on the Australian Stock Exchange.</p>
            </div>
            <div class="tickerWrapper"
            style="position:relative"
            >
                <div class="ticker"
                data-bottom="background-position: -100% 0"
                data-top="background-position: 100% 0"
                >
                </div>
            </div>
        </section>
        <section id="slide1997">
            <div class="content-container">
                <h2 class="year">1997</h2>
                <p class="yearDescription">Reece enters the South Australian, Western Australian and Northern Territory markets following its acquisitions of Plumbing World and Bridglands.</p>
                <div class="water"
                data-900="background-position: -1400px 100%"
                data-1150="background-position: -1100px 100%"
                data-1250="background-position: -800px 100%"
                data-1350="background-position: -500px 100%"
                data-1450="background-position: -300px 100%"
                >
                    <div class="pipes"
                data-1149="background-position: 0 0"
                data-1150="background-position: 0 33.334%"
                data-1249="background-position: 0 33.334%"
                data-1250="background-position: 0 66.667%"
                data-1349="background-position: 0 66.667%"
                data-1350="background-position: 0 100%"
                    >
                    </div>
                </div>
                <div class="mapwrap">
                <div class="map"
                data-1149="background-position: 0 0"
                data-1150="background-position: 0 33.334%"
                data-1249="background-position: 0 33.334%"
                data-1250="background-position: 0 66.667%"
                data-1349="background-position: 0 66.667%"
                data-1350="background-position: 0 100%"
                >

                </div>
                </div>
            </div>
        </section>
        <section id="slide1998">
        <div class="content-container">
        <h2 class="year">1998</h2>
        <p class="yearDescription">
Reece opens its fist 'Irrigation' outlet, dedicated to providing a specialised service for irrigation contractors, landscape gardeners and growers.</p>
            <div id="sprinkler1998Wrap" >
            <div class="buildingwrap">
                <div class="building"
                data-1940="background-position:0 -33%"
                data-1969="background-position:0 0"
                data-1980="background-position:0 33.33%"
                data-1999="background-position:0 33.33%"
                data-2000="background-position:0 66.66%"
                data-2019="background-position:0 66.66%"
                data-2020="background-position:0 100%"
                >
                </div>
            </div>
            <div class="sprinklerItem">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="800px" height="320px">
              <path style="fill: none; stroke: #fff; stroke-width: 3px; stroke-linecap: round; stroke-linejoin: miter; stroke-miterlimit: 4; stroke-opacity: 1; stroke-dasharray:5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 1000px; stroke-dashoffset: 870px" data-1800="stroke-dashoffset:870px" data-1850="stroke-dashoffset:0px"
              d="M50,200 c 0 0,160 -140,340 -146 c 350 -6 ,350 260,350 264"  ></path>
              <path style="fill: none; stroke: #fff; stroke-width: 3px; stroke-linecap: round; stroke-linejoin: miter; stroke-miterlimit: 4; stroke-opacity: 1; stroke-dasharray:5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 1000px; stroke-dashoffset: 870px" data-1820="stroke-dashoffset:870px" data-1870="stroke-dashoffset:0px"
              d="M50,200 c 0 0,160 -120,330 -126 c 320 -6 ,320 260,320 264"  ></path>
              <path style="fill: none; stroke: #fff; stroke-width: 3px; stroke-linecap: round; stroke-linejoin: miter; stroke-miterlimit: 4; stroke-opacity: 1; stroke-dasharray:5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 1000px; stroke-dashoffset: 870px" data-1840="stroke-dashoffset:870px" data-1890="stroke-dashoffset:0px"
              d="M50,200 c 0 0,160 -100,320 -106 c 290 -6 ,290 260,290 264"  ></path>
              <path style="fill: none; stroke: #fff; stroke-width: 3px; stroke-linecap: round; stroke-linejoin: miter; stroke-miterlimit: 4; stroke-opacity: 1; stroke-dasharray:5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 1000px; stroke-dashoffset: 870px" data-1860="stroke-dashoffset:870px" data-1910="stroke-dashoffset:0px"
              d="M50,200 c 0 0,160 -80,310 -86 c 260 -6 ,260 260,260 264"  ></path>
              <path style="fill: none; stroke: #fff; stroke-width: 3px; stroke-linecap: round; stroke-linejoin: miter; stroke-miterlimit: 4; stroke-opacity: 1; stroke-dasharray:5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 1000px; stroke-dashoffset: 870px" data-1880="stroke-dashoffset:870px" data-1930="stroke-dashoffset:0px"
              d="M50,200 c 0 0,160 -60,300 -66 c 230 -6 ,230 260,230 264"  ></path>
            </svg>
            </div>
            <div class="sprinklerItem" data-1700="top:160px" data-1750="top:0">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="800px" height="320px">
            <polygon transform="translate(0,160)"  fill="#231F20" points="0,0 45,0 45,20 40,20 40,30 50,30 50,50 40,50 40,160 5,160 5,20 0,20 "></polygon>
            </svg>
            </div>
            </div>
        </div>
        <div class="grass">
        </div>
        </section>
<!--
    <section id="slide-2"
        data-bottom-top="left: -80%"
        data-center-top="left: 0";
        >
        <div class="content-container">
            <h1>1910</h1>
            <h2>Harold Joseph Reece begins selling goods from the back of his truck.</h2>

        </div>
    </section>

    <section id="slide-3">
         <div class="wave"
         data-bottom-top="background-position: 0px 0px"
         data-top-top="background-position: 500px 0px"
         data-anchor-target="#slide-3"
         ></div>
         <div class="content-container">

             <h1>1920</h1>
             <h2>Lorem ipsum sit dolor amet concesteur.</h2>
         </div>
    </section>


 <section id="slide-4">
     <div class="wave"
     data-bottom-top="background-position: 0px 0px"
     data-top-top="background-position: 500px 0px"
     data-anchor-target="#slide-4"
     ></div>
     <div class="content-container">


         <h1>1950</h1>
         <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac leo bibendum, suscipit sapien vitae, posuere nulla. Duis vitae neque urna. Cras in sem eu risus blandit congue in et odio.</h2>
     </div>
 </section>
-->

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
"/assets/js/bootstrap-transition.js",
"/assets/js/bootstrap-carousel.js",
"/assets/js/bootstrap-dropdown.js",
"/assets/js/reece-signon.js",
"/assets/js/jquery.mobile.custom.min.js",
"/assets/js/bootstrap-scrollspy.js",
"/assets/js/reece-ocnav.js",
"/assets/js/skrollr.min.js",
"/assets/js/reece-hidesubnavbar.js",
"/assets/js/reece-history.js"


];
include_once($serverBase."/includes/foot/scripts.php");
?>

</body>
</html>>