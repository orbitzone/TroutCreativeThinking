
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
					<h2 class="designerLooksHeader">Designer Looks</h2>
				</div><!-- /.inner-wrapper -->
			</div><!-- /.content-container -->	
			<hr class="doubleRedLine">
			<div class="content-container">
				<div class="inner-wrapper">
					<p class="designerLooksText">Have you ever wondered what the bathrooms of leading design commentators look like? We were curious, so we asked the editors of Australia’s best-selling design and home decorating publications to tell us about their dream bathrooms. </p>
					<p class="designerLooksText">We partnered each editor with an architect or designer and together they visualised the editor's dream bathroom. Keep an eye on the Bathroom Inspiration page as further dream bathrooms are released. </p>

					<ul class="designerLooksList">
						<?php for($i=0;$i<=10;$i++){?>
						<li>
							<a href="designerlooks.php">
							<img src="http://placehold.it/750x500.png/eee/eee" alt="placeholder">
							<span class="designerName">
								Name Surname
							</span>
							<span class="designName">
								Publication Name
							</span>
							</a>
						</li>
						<?php } ?>
					</ul><!-- /.designerLooksList -->
				</div><!-- /.inner-wrapper -->
			</div><!-- /.content-container -->

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
		  		"/assets/js/reece-carousel.js",
		  		"/assets/js/jquery.ba-resize.min.js"
		  		
		  	); 
		  	include_once($serverBase."/includes/foot/scripts.php");
		?>

    </body>
</html>