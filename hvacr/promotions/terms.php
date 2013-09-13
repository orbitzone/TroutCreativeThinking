
	<?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>

	<?php
		$cssScriptPaths = [
			"/assets/css/reece-hvac-r.css",
			"/assets/css/reece-promotions.css"
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
				$tradeSubNavigationItem = "Promotions";
				include_once($serverBase."/includes/nav/nav-subnavbar.php");
			?>

			<div class="content-container">
				<div class="inner-wrapper">

					<ul class="breadcrumb">
						<li><a class="active" href="#">Promotions</a></li>
					</ul>

					<div class="row-fluid hitachi-bg">
						<div class="span6">
							<img src="/assets/images/promotions/hitachi-win.png" />
						</div>
						<div class="span6">
							<img src="/assets/images/promotions/hitachi-product.png" />
						</div>
					</div>

					<div class="row-fluid hitachi-intro">
					<h3>Thanks for your entry.</h3>
					</div>

					<div class="row-fluid">
						<h4>Terms &amp; Conditions</h4>
						<ol>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non ornare arcu. Curabitur dui est, semper ac faucibus vel, iaculis condimentum odio. Etiam eget felis neque. Phasellus hendrerit ante nec ante cursus eget pellentesque tortor rhoncus. Duis fermentum, nibh quis varius rhoncus, metus arcu imperdiet mi, vehicula auctor elit sem nec nulla.</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non ornare arcu. Curabitur dui est, semper ac faucibus vel, iaculis condimentum odio. Etiam eget felis neque. Phasellus hendrerit ante nec ante cursus eget pellentesque tortor rhoncus. Duis fermentum, nibh quis varius rhoncus, metus arcu imperdiet mi, vehicula auctor elit sem nec nulla.</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non ornare arcu. Curabitur dui est, semper ac faucibus vel, iaculis condimentum odio. Etiam eget felis neque. Phasellus hendrerit ante nec ante cursus eget pellentesque tortor rhoncus. Duis fermentum, nibh quis varius rhoncus, metus arcu imperdiet mi, vehicula auctor elit sem nec nulla.</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non ornare arcu. Curabitur dui est, semper ac faucibus vel, iaculis condimentum odio. Etiam eget felis neque. Phasellus hendrerit ante nec ante cursus eget pellentesque tortor rhoncus. Duis fermentum, nibh quis varius rhoncus, metus arcu imperdiet mi, vehicula auctor elit sem nec nulla.</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non ornare arcu. Curabitur dui est, semper ac faucibus vel, iaculis condimentum odio. Etiam eget felis neque. Phasellus hendrerit ante nec ante cursus eget pellentesque tortor rhoncus. Duis fermentum, nibh quis varius rhoncus, metus arcu imperdiet mi, vehicula auctor elit sem nec nulla.</li>
						</ol>
						<a href="index.php" class="btn">Back to entry form</a>
					</div>
					<div class="row-fluid">
						<img src="/assets/images/promotions/hitachi-logo.png" width="200" class="pull-right" />
					</div>
				</div>
			</div>

		<?php
			include_once($serverBase."/includes/foot/foot-generic.php");
		?>

	</div>

	<?php
		$mobileNavActiveMenu = array(
			"activeMenu" => ""
		);
		include_once($serverBase."/includes/nav/nav-mobile.php");
	?>

	<?php
		$jsScriptPaths = [
			"/assets/js/jquery.lazyload.min.js",
			"/assets/js/jquery.mobile.custom.min.js",
			"/assets/js/reece-ocnav.js",
			"/assets/js/reece-carousel.js",
			"/assets/js/reece-popover.js"
		];
		include_once($serverBase."/includes/foot/scripts.php");
	?>

	</body>
</html>