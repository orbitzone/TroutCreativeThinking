
	<?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>

	<?php 
		$cssScriptPaths = [
			"/assets/css/reece-hvac-r.css",
			"/assets/css/reece-gas-track.css"
		]; 
	   	include_once($serverBase."/includes/head/head-generic.php");
	?>		

    <body>

		<figure class="gt-banner-ig-mobile">
			<a data-toggle="tooltip" data-placement="right" href="#" data-original-title="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore" class="gt-ig-person"></a>
			<a data-toggle="tooltip" data-placement="bottom" href="#" data-original-title="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore" class="gt-ig-store"></a>
			<a data-toggle="tooltip" data-placement="bottom" href="#" data-original-title="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore" class="gt-ig-bottle"></a>
			<a data-toggle="tooltip" data-placement="left" href="#" data-original-title="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore" class="gt-ig-scan"></a>
			<a data-toggle="tooltip" data-placement="left" href="#" data-original-title="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore" class="gt-ig-screen"></a>
			<a data-toggle="tooltip" data-placement="top" href="#" data-original-title="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore" class="gt-ig-truck"></a>
			<h2 class="gt-ig-caption">
				How<br>
				GasTrack<br>
				works<br>
				for you.
			</h2>								
		</figure>

	</div>

	<?php 
		$jsScriptPaths = [
			"/assets/js/jquery.lazyload.min.js",
			"/assets/js/bootstrap-transition.js",
			"/assets/js/bootstrap-collapse.js",
			"/assets/js/bootstrap-dropdown.js",
			"/assets/js/bootstrap-carousel.js",
			"/assets/js/bootstrap-tooltip.js",
			"/assets/js/jquery.mobile.custom.min.js",
			"/assets/js/reece-ocnav.js",  		
	  		"/assets/js/reece-carousel.js",
	  		"/assets/js/reece-tooltip.js"
		]; 
	   	include_once($serverBase."/includes/foot/scripts.php");
	?>

    </body>
</html>