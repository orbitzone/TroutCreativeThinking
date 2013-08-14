
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
						<li class="active page-branding text-brand">Project Gallery</li>
					</ul>

					<div class="row-fluid">			
						
						<aside class="gt-sidebar span3">						
							<?php 
								$gtNavActiveMenuItem = "Project Gallery";
							   	include_once($serverBase."/includes/nav/nav-gt-nav.php");
							?>
						</aside>

						<section class="gt-content span9">
							<h3 class="headline">Project Gallery</h3>
								
							<hr>
							<div class="row-fluid">
								<div class="span4">
									<img src="http://placehold.it/400x250" alt="Placeholder">
									<h4>Project name goes here</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipinsncing elit. Ut semper ac faucibus vel, iaculis condimentum odio.</p>
									<a class="focus-link" href="#">Read more</a>
									<div class="gt-product-block r407c" href="#">R407C</div>
								</div>
								<div class="span4">
									<img src="http://placehold.it/400x250" alt="Placeholder">
									<h4>Project name goes here</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipinsncing elit. Ut semper ac faucibus vel, iaculis condimentum odio.</p>
									<a class="focus-link" href="#">Read more</a>
									<div class="gt-product-block r507a" href="#">R407C</div>
								</div>
								<div class="span4">
									<img src="http://placehold.it/400x250" alt="Placeholder">
									<h4>Project name goes here</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipinsncing elit. Ut semper ac faucibus vel, iaculis condimentum odio.</p>
									<a class="focus-link" href="#">Read more</a>
									<div class="gt-product-block r410a" href="#">R407C</div>
								</div>								
							</div>
							<hr>
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