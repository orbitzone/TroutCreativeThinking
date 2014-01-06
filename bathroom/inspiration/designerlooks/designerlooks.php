
	<?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>

	<?php 
	  	$cssScriptPaths = array(
	  		"/assets/css/reece-products.css",
	  		"/assets/css/reece-bathrooms.css"		
	  	); 
	  	include_once($serverBase."/includes/head/head-generic.php");
	?>		

    <body>
		<div class="ocmain-wrapper">
			<div class="navbar navbar-fixed-top topNav">
			<?php 
				$genericNavActiveMenuItem = "Bathrooms";
			   	include_once($serverBase."/includes/nav/nav-generic.php");
			?>
		   	<?php 
				$happyZoneNavActiveMenuItem = "Inspiration";
			   	include_once($serverBase."/includes/banners/banner-happyzone.php");
			?>
			</div>
			<div class="content-container">
				<div class="inner-wrapper">
					<ul class="breadcrumb">
						<li><a href="#">Bathroom</a> <span class="divider">/</span></li>
						<li><a href="#">Happiness Zone</a> <span class="divider">/</span></li>
						<li class="active page-branding text-brand">Designer Looks</li>
					</ul>
					<div class="row-fluid">
						<div class="span9">
							<h2 class="designerLooksHeader">Designer Looks</h2>
						</div>
						<div class="span3 designerLooksIndexLink">
							<a href="index.php">More Designer Bathrooms</a>
						</div>
					</div>
					
				</div><!-- /.inner-wrapper -->
			</div><!-- /.content-container -->	
			<hr class="doubleRedLine">



			<div class="content-container">
				<div class="inner-wrapper">
					<div id="designerLooksCarousel" class="carousel slide" data-bs-carousel="carousel">
						<div class="carousel-inner">
							<div class="active item">
								<img src="http://placehold.it/1440x700.png/ccc/aaa" alt="placeholder">
							</div>
							<div class="item">
								<img src="http://placehold.it/1440x700.png/ccc/aaa" alt="placeholder">
							</div>
						</div>
						<!-- Carousel nav -->
						<a class="carousel-control left" href="#designerLooksCarousel" data-slide="prev">&lsaquo;</a>
						<a class="carousel-control right" href="#designerLooksCarousel" data-slide="next">&rsaquo;</a>
					</div><!-- /.carousel -->
				</div>
			</div>

			<?php 
			   	include_once($serverBase."/includes/foot/foot-generic.php");
			?>
		</div>		

	   	<?php
	   		$mobileNavActiveMenu = array(
	   			"activeMenu" => "Bathrooms",
	   			"activeMenuItem" => "Bathroom Moments"
	   		);
		   	include_once($serverBase."/includes/nav/nav-mobile.php");
		?>	

		<?php 
		  	$jsScriptPaths = array(
		  		"/assets/js/jquery.mobile.custom.min.js",
		  		"/assets/js/bootstrap-transition.js", 
		  		"/assets/js/bootstrap-carousel.js",
		  		"/assets/js/bootstrap-collapse.js",
		  		"/assets/js/bootstrap-tab.js",
		  		"/assets/js/bootstrap-dropdown.js",
		  		"/assets/js/reece-ocnav.js",
		  		"/assets/js/reece-carousel.js"		  		
		  	); 
		  	include_once($serverBase."/includes/foot/scripts.php");
		?>

    </body>
</html>