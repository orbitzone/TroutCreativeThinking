
	<?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>

	<?php 
		$cssScriptPaths = [
			"/assets/css/reece-hvac-r.css",
			"/assets/css/reece-gas-track.css"
		]; 
	   	include_once($serverBase."/includes/head/head-generic.php");
	?>		

    <body>
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
						<li class="active page-branding text-brand">Technical Data</li>
					</ul>

					<div class="row-fluid">			
						
						<aside class="gt-sidebar span3">						
							<?php 
								$gtNavActiveMenuItem = "Technical Data";
							   	include_once($serverBase."/includes/nav/nav-gt-nav.php");
							?>
						</aside>

						<section class="gt-content span9">
							<h3 class="headline">Refrigerant Pressure Temperature Chart</h3>
							<hr>
							<p>Using the drop down menus below simply select Refrigerant or Temperature
							   to find the information you need. To see the entire chart or compare different
							   gases, select Show All where appropriate.
							</p>

							<!-- DUMP WIDGET HERE -->
						
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
			"/assets/js/bootstrap-carousel.js",
			"/assets/js/bootstrap-transition.js",
			"/assets/js/jquery.mobile.custom.min.js",
			"/assets/js/reece-ocnav.js",  		
	  		"/assets/js/reece-carousel.js"
		]; 
	   	include_once($serverBase."/includes/foot/scripts.php");
	?>

    </body>
</html>