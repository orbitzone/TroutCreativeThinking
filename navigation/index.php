
	<?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>

	<?php 
		$cssScriptPaths = [
			"/assets/css/reece-trade-outlet.css",
			"/assets/css/reece-plumbing.css"
		]; 
	   	include_once($serverBase."/includes/head/head-generic.php");
	?>		

    <body class="no-touch bathroom-moments account-details-summary withSubNav">
		<div class="ocmain-wrapper">
			<div class="navbar navbar-fixed-top topNav">

				<?php
					$genericNavActiveMenuItem = "Plumbing";
				   	include_once($serverBase."/includes/nav/nav-generic.php");
				?>


			</div>
            <?php include_once($serverBase."/includes/nav/nav-subnavbar.php"); ?>
	    <div class="content-container">
			<div class="inner-wrapper">
					<div class="row-fluid">
						<h2>Navbar Gradient Designer</h2>
						<div id="stopsLabel" style="display: none;">
						</div>

						<div id="stopsColor">
							<p><input type="text" class="color" id="color0" size="6" value="CCCCCC" autocomplete="off" style="background-color: rgb(204, 204, 204); color: rgb(0, 0, 0); " onchange="UpdateSample();"></p>
							<p><input type="text" class="color" id="colorN" size="6" value="555555" autocomplete="off" style="background-color: rgb(85, 85, 85); color: rgb(255, 255, 255); " onchange="UpdateSample();"></p>
						</div>
						<div id="stopsOffset" style="display: none;">
							<input id="offset0" type="text" size="6" value="0">
							<input id="offsetN" type="text" size="6" value="1">
						</div>
						<div id="stopsButton">
						</div>


						<a href="javascript:InsertStop();">Add Stop</a>

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
			"/assets/js/bootstrap-transition.js",
			"/assets/js/jquery.mobile.custom.min.js",
			"/assets/js/reece-ocnav.js",
			"/assets/js/reece-carousel.js",
			"/assets/js/reece-match-height.js",
			"/assets/js/jscolor/jscolor.js",
			"/assets/js/gradient-picker.js",
            "/assets/js/reece-hidesubnavbar.js",
            "/assets/js/reece-signon.js"
		]; 
	   	include_once($serverBase."/includes/foot/scripts.php");
	?>
	
    </body>
</html>