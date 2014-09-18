
<?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>

<?php 
$cssScriptPaths = [
"/assets/css/reece-products.css",
"/assets/css/reece-bathrooms.css",
"/assets/css/reece-hitachi-summer.css"
]; 
include_once($serverBase."/includes/head/head-generic.php");
?>		

<body>
	<div class="ocmain-wrapper">
		<div class="navbar navbar-fixed-top topNav">
			<?php
			$genericNavActiveMenuItem = "Bathrooms";
			include_once($serverBase."/includes/nav/nav-generic.php");
			?>
		</div>
		<div class="hitachi">
			<div class="content-container">
				<div class="inner-wrapper">
					<div class="hitachi-header">
						<h1 class="hitachi-header-title">Hitachi Summer Rewards</h1>
					</div>
					<div class="hitachi-content">
						<div class="hitachi-content-header">
							<p>
								<span class="hitachi-text-med">Buy 5 or more</span> 
								<span class="hitachi-text-body">Hitachi Air Conditioners in October and November and be rewarded with a</span>
								<span class="hitachi-text-med">voucher valued</span> 
								<span class="hitachi-text-divider">
									<span class="hitachi-text-sm">from</span> 
									<span class="hitachi-text-lg">$200</span> 
									<span class="hitachi-text-sm">to</span>
									<span class="hitachi-text-lg">$1000</span>
								</span>
							</p>
							<p><a href="#rewards">Discover Rewards</a></p>
						</div>
					</div>
				</div>
			</div>
			<p class="hitachi-terms"><a href="#">Terms &amp; conditions</a></p>
		</div>
		<?php 
		include_once($serverBase."/includes/foot/foot-generic.php");
		?>		
	</div>
	
	<?php 
	$jsScriptPaths = [
	"/assets/js/jquery.mobile.custom.min.js",
	"/assets/js/bootstrap-transition.js", 
	"/assets/js/bootstrap-carousel.js",
	"/assets/js/bootstrap-collapse.js",
	"/assets/js/bootstrap-dropdown.js",
	"/assets/js/reece-ocnav.js",
	"/assets/js/reece-carousel.js",
	"/assets/js/bootstrap-modal.js",
	"/assets/js/placeholders.min.js"
	]; 
	include_once($serverBase."/includes/foot/scripts.php");
	?>
</body>
</html>