
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
            <li><a href="#slideHistoryIntro">Reece Timeline</a></li>
            <li><a href="#slide1954">1954</a></li>
            <li><a href="#slide1976">1976</a></li>
            <li><a href="#slide1997">1997</a></li>
            <li><a href="#slide1998">1998</a></li>
        </ul>
    </div>

    <section id="slideHistoryIntro">
      <div class="content-container">
        <img src="/assets/images/aboutus/history/logo-reece.png" alt=" " class="reece-logo"
        data-0="opacity: 1"
        data-100="opacity:0.1"
        >
        <h1>Reece Timeline</h1>
        <p
        data-anchor-target="#slideHistoryIntro"
        data-100-bottom="opacity: .3"
        data-bottom="opacity:1"
        >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac leo bibendum, suscipit sapien vitae, posuere nulla. Duis vitae neque urna. Cras in sem eu risus blandit congue in et odio. Sed non congue tellus, vel facilisis tortor.</p>
        <img src="/assets/images/aboutus/history/img-drop.png" alt=" " class="water-drop"
        data-anchor-target="#slideHistoryIntro"
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
    <!-- /#slide1954 -->
    <section id="slide1976">
      <div class="content-container">
        <h2 class="year">1976</h2>
        <p class="yearDescription">The first Reece warehouse becomes operational in Ringwood.</p>
      </div>
      <div class="stage">
        <div class="utes"
            data-target-anchor="#slide1976"
            data-800-top="right:-100%"
            data-700-top="right:-90%"
            data-top="right:80%"
        >
        </div>
        <div class="wareHouse"
            data-target-anchor="#slide1976"
            data-700-top="bottom:-110px"
            data-500-top="bottom:100px"
        >
        </div>
        <div class="ground">
        </div>
      </div>
    </section>
    <!-- /#slide1976 -->
    <section id="slide1997">
      <div class="content-container">
        <h2 class="year">1997</h2>
        <p class="yearDescription">Reece enters the South Australian, Western Australian and Northern Territory markets following its acquisitions of Plumbing World and Bridglands.</p>
        <div class="water"
        data-target-anchor="#slide1997"
        data-700-top="background-position: -1400px 100%"
        data-600-top="background-position: -1400px 100%"
        data-500-top="background-position: -1100px 100%"
        data-400-top="background-position: -800px 100%"
        data-300-top="background-position: -500px 100%"
        data-200-top="background-position: -300px 100%"
        >
          <div class="pipes"
            data-target-anchor="#slide1997"
            data-501-top="background-position: 0 0"
            data-500-top="background-position: 0 33.334%"
            data-401-top="background-position: 0 33.334%"
            data-400-top="background-position: 0 66.667%"
            data-301-top="background-position: 0 66.667%"
            data-300-top="background-position: 0 100%"
            >
          </div>
        </div>
        <div class="mapwrap">
          <div class="map"
          data-target-anchor="#slide1997"
          data-751-top="background-position: 0 0"
          data-750-top="background-position: 0 33.334%"
          data-651-top="background-position: 0 33.334%"
          data-650-top="background-position: 0 66.667%"
          data-551-top="background-position: 0 66.667%"
          data-550-top="background-position: 0 100%"
          >
          </div>
        </div>
      </div>
    </section>
    <!-- /#slide1997 -->
    <section id="slide1998">
      <div class="content-container">
        <h2 class="year">1998</h2>
        <p class="yearDescription">
Reece opens its fist 'Irrigation' outlet, dedicated to providing a specialised service for irrigation contractors, landscape gardeners and growers.</p>
        <div id="sprinkler1998Wrap" >
          <div class="buildingwrap">
            <!-- Building -->
            <div class="building"
              data-target-anchor="#slide1998"
              data-bottom="background-position:0 -33%"
              data--20-bottom="background-position:0 0"
              data--79-bottom="background-position:0 0"
              data--80-bottom="background-position:0 33.33%"
              data--89-bottom="background-position:0 33.33%"
              data--90-bottom="background-position:0 66.66%"
              data--109-bottom="background-position:0 66.66%"
              data--110-bottom="background-position:0 100%" 
            >
            </div>
          </div>
          <div class="sprinklerItem">
          <!-- Water -->
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="800px" height="320px">
              <path style="fill: none; stroke: #fff; stroke-width: 3px; stroke-linecap: round; stroke-linejoin: miter; stroke-miterlimit: 4; stroke-opacity: 1; stroke-dasharray:5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 1000px; stroke-dashoffset: 870px"
              data-target-anchor="#slide1998"
              data-30-bottom="stroke-dashoffset:870px"
              data--20-bottom="stroke-dashoffset:0px"
              d="M50,200 c 0 0,160 -140,340 -146 c 350 -6 ,350 260,350 264"  ></path>
              <path style="fill: none; stroke: #fff; stroke-width: 3px; stroke-linecap: round; stroke-linejoin: miter; stroke-miterlimit: 4; stroke-opacity: 1; stroke-dasharray:5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 1000px; stroke-dashoffset: 870px"
              data-target-anchor="#slide1998"
              data-30-bottom="stroke-dashoffset:870px"
              data--20-bottom="stroke-dashoffset:0px"
              d="M50,200 c 0 0,160 -120,330 -126 c 320 -6 ,320 260,320 264"  ></path>
              <path style="fill: none; stroke: #fff; stroke-width: 3px; stroke-linecap: round; stroke-linejoin: miter; stroke-miterlimit: 4; stroke-opacity: 1; stroke-dasharray:5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 1000px; stroke-dashoffset: 870px"
              data-target-anchor="#slide1998"
              data-30-bottom="stroke-dashoffset:870px"
              data--20-bottom="stroke-dashoffset:0px"
              d="M50,200 c 0 0,160 -100,320 -106 c 290 -6 ,290 260,290 264"  ></path>
              <path style="fill: none; stroke: #fff; stroke-width: 3px; stroke-linecap: round; stroke-linejoin: miter; stroke-miterlimit: 4; stroke-opacity: 1; stroke-dasharray:5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 1000px; stroke-dashoffset: 870px"
              data-target-anchor="#slide1998"
              data-30-bottom="stroke-dashoffset:870px"
              data--20-bottom="stroke-dashoffset:0px"
              d="M50,200 c 0 0,160 -80,310 -86 c 260 -6 ,260 260,260 264"  ></path>
              <path style="fill: none; stroke: #fff; stroke-width: 3px; stroke-linecap: round; stroke-linejoin: miter; stroke-miterlimit: 4; stroke-opacity: 1; stroke-dasharray:5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 5px 1000px; stroke-dashoffset: 870px"
              data-target-anchor="#slide1998"
              data-30-bottom="stroke-dashoffset:870px"
              data--20-bottom="stroke-dashoffset:0px"
              d="M50,200 c 0 0,160 -60,300 -66 c 230 -6 ,230 260,230 264"  ></path>
            </svg>
          </div>
          <div class="sprinklerItem"
            data-target-anchor="#slide1998"
            data-50-bottom="top:160px"
            data-30-bottom="top:0px"
            >
            <!-- Sprinkler -->
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="800px" height="320px">
            <polygon transform="translate(0,160)"  fill="#231F20" points="0,0 45,0 45,20 40,20 40,30 50,30 50,50 40,50 40,160 5,160 5,20 0,20 "></polygon>
            </svg>
          </div>
        </div>
      </div>
      <div class="grass">
      </div>
    </section>
    <!-- /#slide1998 -->
    <section id="slide2005">
      <div class="content-container">
        <h2 class="year">2005</h2>
        <p class="yearDescription">Reece achieves annual sales of $1 billion AUD for the first time.</p>
      </div>
      <div class="register">
        <div class="registerDisplay">
        <div class="registerDisplayScreen">
          <div
            data-target-anchor="#slide1998"
            data-0-bottom="margin-top:180px"
            data--20-bottom="margin-top:60px"
          class="registerBn"><span class="caretWrap"></span>bn</div>
          <div class="register1"
            data-target-anchor="#slide1998"
            data--40-bottom="margin-top:180px"
            data--70-bottom="margin-top:60px"
          ><span class="caretWrap"></span>1</div>
          <div class="registerScreenGlass">
          </div>
        </div>
        </div>
        <div class="registerBase">
          <div class="registerBaseGroves">
          <span></span>
          </div>
        </div>

      </div>
    </section>
    <!-- /#slide2005 -->

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
<script type="text/javascript">
    $(function(){
        var s = skrollr.init([smoothScrolling=true,smoothScrollingDuration=2000]);
    });
</script>

</body>
</html>