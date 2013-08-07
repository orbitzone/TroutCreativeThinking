
	<?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>

	<?php 
		$cssScriptPaths = [
			"/assets/css/reece-trade-outlet.css",
			"/assets/css/reece-hvac-r.css",
			"/assets/css/reece-gas-track.css"
		]; 
	   	include_once($serverBase."/includes/head/head-generic.php");
	?>		

    <body class="no-touch bathroom-moments account-details-summary">
		<div class="ocmain-wrapper">

			<?php 
				$genericNavActiveMenuItem = "HVAC-R";
			   	include_once($serverBase."/includes/nav/nav-generic.php");
			?>

			<?php 
			   	include_once($serverBase."/includes/nav/nav-subnavbar.php");
			?>

		    <div class="content-container">
				<div class="inner-wrapper">

					<ul class="breadcrumb">
						<li><a href="#">Gas Track</a> <span class="divider">/</span></li>
						<li class="active page-branding text-brand">Project Gallery</li>
					</ul>

					<div class="row-fluid">			
						<aside class="gas-track-sidebar span3">						
							<img src="/assets/images/gastrack_2013/gas-track-logo.png">
							<h2 class="headline tagline">The quick & easy way to track all your refrigerant gas purchases</h2>
							<ul class="gas-track-navigation nav nav-pills nav-stacked">
								<li><a href="#">Features & Quality</a></li>
								<li><a href="#">Reclaim System</a></li>
								<li><a href="#">Project Gallery</a></li>
								<li><a href="#">Product Range</a></li>
								<li><a href="#">Technical Data</a></li>
								<li><a href="#">Storefinder</a></li>
							</ul>						
						</aside>
						<section class="gas-track-content span9">
							<h3 class="headline pull-left">Project Gallery</h3>
							<a class="btn btn-highlight pull-right" href="#">View by Gas Type <i class="icon-caret-right icon-large"></i></a>
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
   			"activeMenu" => "Plumbing"
   		);
	   	include_once($serverBase."/includes/nav/nav-mobile.php");
	?>	

	<?php 
		$jsScriptPaths = [
			"/assets/js/jquery.lazyload.min.js",
			"/assets/js/bootstrap-collapse.js",
			"/assets/js/bootstrap-dropdown.js",
			"/assets/js/bootstrap-transition.js",
			"/assets/js/jquery.mobile.custom.min.js",
			"/assets/js/reece-ocnav.js"

		]; 
	   	include_once($serverBase."/includes/foot/scripts.php");
	?>

    </body>
</html>