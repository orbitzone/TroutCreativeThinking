
<?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>
<!-- before head -->
<?php
$cssScriptPaths = array(
	"/assets/css/reece-products.css",
	"/assets/css/reece-bathrooms.css",
	"/assets/css/reece-bathrooms-trends.css",
	"/assets/css/smoothness/jquery-ui-1.10.4.custom.min.css"
	);
include_once($serverBase."/includes/head/head-generic.php");
?>

<body class="withHappinessSubNav">

	<div class="ocmain-wrapper">
  <div class="navbar navbar-fixed-top topNav">
    <?php
					$genericNavActiveMenuItem = "Bathrooms";
				   	include_once($serverBase."/includes/nav/nav-generic.php");
				?>
  </div>
    <?php include_once($serverBase."/includes/nav/nav-happiness.php"); ?>

		<div class="content-container">
			<div class="inner-wrapper">

				<section id="TrendsPage">

					<div class="row-fluid">
						<div class="span12 well well-small">
							Bathroom Inspiration / Trends / <a href="#">Hotel Inspired</a>
						</div>
					</div>

					<div class="row-fluid">
						<div class="span12 trendsHeader">
							<hr>
							<img src="/assets/images/trends/hotel-inspired/title_hotel_inspired.png">
							<hr>
						</div>
					</div>

					<div class="row-fluid">
						<div class="span12 trendsHeader"><br />
							<p>It's making the bathroom a true destination. Recreating the luxury experience of a high-end hotel bathroom within the home. A focus on light, space and finish throughout. Watch our video with Shayna Blaze to find out more.</p>
							<p>To explore all bathrooms with the hotel inspired look or all products on trend click buttons below.</p>

							<br />
							<a href="#" class="button">View Bathrooms</a>  <a href="#" class="button">View Products</a>
							<br /><br />

						</div>
					</div>

					<div class="row-fluid">
						<div class="span12">
							<img src="http://placehold.it/1160x650" />
						</div>
					</div>

					<div class="row-fluid">
						<div class="span8">
							<img src="http://placehold.it/800x487" />
						</div>
						<div class="span4">
							<img src="http://placehold.it/680x836" />
						</div>
					</div>

					<div class="row-fluid">
						<div class="span6">
							<img src="http://placehold.it/640x240" />
							<img src="http://placehold.it/640x240" />
							<img src="http://placehold.it/640x240" />
						</div>
						<div class="span5">
							<img src="http://placehold.it/640x880" />
						</div>
						<div class="span1">
							<img src="http://placehold.it/150x1066" />
						</div>
					</div>

					<div class="row-fluid">
						<div class="span12">
							<img src="http://placehold.it/1160x650" />
						</div>
					</div>

					<div class="row-fluid">
						<div class="span4">
							<img src="http://placehold.it/640x500" />
						</div>
						<div class="span4">
							<img src="http://placehold.it/640x500" />
						</div>
						<div class="span4">
							<img src="http://placehold.it/640x500" />
						</div>
					</div>


					<div class="row-fluid">
						<div class="span4">
							<img src="http://placehold.it/680x414" />
							<img src="http://placehold.it/680x414" />
						</div>
						<div class="span8">
							<img src="http://placehold.it/800x487" />
						</div>

					</div>

				</section>

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
		"/assets/js/reece-carousel.js",
		"/assets/js/masonry.pkgd.min.js",
		"/assets/js/jquery-ui-1.10.4.custom.min.js",
		"/assets/js/reece-inspiration.js"
		);
	include_once($serverBase."/includes/foot/scripts.php");
	?>
	<script type="text/javascript">

	</script>
</body>
</html>