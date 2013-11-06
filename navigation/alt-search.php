<?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>
<?php 
		$cssScriptPaths = [
			"/assets/css/reece-trade-outlet.css",
			"/assets/css/reece-nav-updated.css",
			"http://www.reece.com.au/new/css/products.css"
		]; 
	   	include_once($serverBase."/includes/head/head-generic.php");
	?>
<style>
.headerNavSearchForm input{
  background: #fff;
  top: -1px;
  padding: 1px 5px;
  color: #333
}
</style>
<body class="no-touch bathroom-moments account-details-summary withSubNav">
<div class="ocmain-wrapper">
  <div class="navbar navbar-fixed-top topNav">
    <?php
						$genericNavActiveMenuItem = "Plumbing";
					   	include_once($serverBase."/includes/nav/nav-generic.php");
					?>
    <?php
					   	include_once($serverBase."/includes/nav/nav-subnavbar.php");
					?>
  </div>
  <div class="content-container">
    <div class="inner-wrapper">
      <div id="main" class="plumbing " style="padding-top:10px;"  >
        <style>

  .all {background:#707070;color:#ffffff}

  .all a {color:#ffffff !important}



  .all:hover {background:#dedede;}

  .all a:hover{color:#3f3f3f !important;}

</style>
        <div id="leftMenu" style="float:left;width:220px;">
          <h2 class="prodnav-head">Plumbing</h2>
          <ul id="nav-bathrooms" class="prodnav">
            <li><a href="/plumbing/products/hot_water_units" >Hot Water Units</a></li>
            <li><a href="/plumbing/products/rainwater_tanks" >Rainwater Tanks</a></li>
            <li><a href="/plumbing/products/hydronic_heating" >Hydronic Heating</a></li>
            <li><a href="/plumbing/products/pipe_%26_fittings" >Pipe & Fittings</a></li>
            <li><a href="/plumbing/products/clips_%26_pipe_supports" >Clips & Pipe Supports</a></li>
            <li><a href="/plumbing/products/valves" >Valves</a></li>
            <li><a href="/plumbing/products/pumps" >Pumps</a></li>
            <li><a href="/plumbing/products/flashing" >Flashing</a></li>
            <li><a href="/plumbing/products/tools_and_hardware" >Tools and Hardware</a></li>
            <li><a href="/plumbing/products/workwear" >Workwear</a></li>
            <li><a href="/plumbing/products/macerators" >Macerators</a></li>
            <li><a href="/plumbing/products/water_filters" >Water Filters</a></li>
            <li><a href="/plumbing/products/air_conditioning_units" >Air Conditioning Units</a></li>
            <li><a href="/plumbing/products/ducting_%26_ventilation" >Ducting & Ventilation</a></li>
            <li><a href="/plumbing/products/fire_service" >Fire Service</a></li>
            <li><a href="/plumbing/products/tap_%26_cistern_spares" >Tap & Cistern Spares</a></li>
            <li><a href="/plumbing/products/gas_spares" >Gas Spares</a></li>
            <li><a href="/plumbing/products/trade_bathroom_ware" >Trade Bathroom Ware</a></li>
            <li><a href="/plumbing/products/material_safety_data_sheets" >Material Safety Data Sheets</a></li>
          </ul>
          <div id="clearance" class="prodnav-btn"><a href="/bathrooms/products" style="font-size:13px;">Bathroom & Kitchen Products</a></div>
          <div class="prodnav-btn plumnavbtn" style="margin-top:10px"><a href="/plumbing/products/quality-guarantee"  style='font-size:13px'>Product Quality Guarantee</a></div>
        </div>
        <div class="rightCol">
          <br clear="all">
          <h2>Plumbing News</h2>
          <div id="newProducts">
            <div class="item"> <a href="/outlet"><img src="http://www.reece.com.au//new/images/plumbingcounter/outlet_small/2013Nov_sml.png"/>
              <h3>Outlet Nov 2013</h3>
              The latest on <br />
              plumbing industry <br />
              news and views.</a> </div>
            <div class="item"> <a href="/plumbing/promotions"><img src="http://www.reece.com.au/products/showroom_thumb/7627467.jpg" alt="" />
              <h3>Plumbing Promotion</h3>
              View the Monthly<br />
              Plumbing Promotion</a> </div>
          </div>
        </div>
        <div id="products">
          <h2>Plumbing Products</h2>
          <p>For over 80 years Reece have supplied plumbers with a huge range of quality plumbing products. From pipes and fittings to tools and hot water units, we've got everything you need to get the job done. Here is just a selection of our product range for you to view.</p>
          <p><img src="http://www.reece.com.au/new/productMenus/plumbing/banner.jpg" width="530" height="230" /></p>
          <div class="warrantyBlock">
            <div id="badgeCycle">
              <div class="cItem"> <img src="http://www.reece.com.au/new/images/prodTemplate/ProductWarranty/title-badge.png"> </div>
            </div>
            <div class="textBlock"> <span>Our Product Quality Guarantee</span><br>
              We stand behind the quality of the products we sell. Read more about our product testing, replacement warranties and after sales care. And remember, to receive the full benefit of our quality Guarantee, ensure the products are installed by a licensed plumber. <br>
              <a style="color: #FFFFFF;" href="/plumbing/products/quality-guarantee">Learn more here &raquo;</a>
            </div>
          </div>
        </div>
        <br clear="all" />
        <br clear="all" />
      </div>
    </div>
  </div>
  <?php 
			include_once($serverBase."/includes/foot/foot-generic.php");
		?>
</div>
<?php
   		$mobileNavActiveMenu = array(
   			"activeMenu" => "Plumbing"
   		);
	   	include_once($serverBase."/includes/nav/nav-mobile.php");
	?>




<?php 
		$jsScriptPaths = [
			"/assets/js/jquery.lazyload.min.js", 
			"/assets/js/bootstrap-collapse.js",
			"/assets/js/bootstrap-carousel.js",
			"/assets/js/bootstrap-dropdown.js",
      "/assets/js/bootstrap-modal.js",
			"/assets/js/bootstrap-transition.js",
			"/assets/js/jquery.mobile.custom.min.js",
			"/assets/js/reece-ocnav.js",
			"/assets/js/reece-carousel.js",
			"/assets/js/reece-match-height.js"
		]; 
	   	include_once($serverBase."/includes/foot/scripts.php");
	?>
</body>
</html>