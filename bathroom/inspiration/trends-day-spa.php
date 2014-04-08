
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

					<ul class="breadcrumb">
						<li><a href="#">Bathroom Inspiration</a> <span class="divider">/</span></li><li><a href="#">Trends</a> <span class="divider">/</span></li>
						<li class="active page-branding text-brand">Day Spa</li>
					</ul>

				<section id="TrendsPage">
				<!--
					<div class="row-fluid">
						<div class="span12 trendsHeader">
							<hr>
							<img src="/assets/images/trends/day-spa/title_day_spa.png">
							<hr>
						</div>
					</div>

					<div class="row-fluid">
						<div class="span12 trendsHeader"><br />
							<p>A wellness oasis that insulates you from the stress of the outside world. Warm tones. Natural materials with a soothing touch. Enjoy tranquility surrounded by feel good things.</p>
							<p>To explore all bathrooms with the day spa look or all products on trend click buttons below.</p>

							<br />
							<a href="#" class="button">View Bathrooms</a>  <a href="#" class="button">View Products</a>
							<br /><br />

						</div>
					</div>
					-->
					<div class="row-fluid trendOverlayHeaderWrap">
						<div class="span12">
						<img src="/assets/images/trends/day-spa/3.jpg">
							<div class="trendOverlayHeader">
								<div class="trendOverlayHeaderInner">
									<!--<div class="trendOverlayHeaderCaption">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod dapibus nunc vel sagittis. Nam mattis ligula massa, ultrices placerat nulla ultricies in. Ut purus libero, laoreet vitae velit in, vestibulum fermentum ipsum.
									</div>-->
									<div class="trendOverlayHeaderText">
									<p><img src="/assets/images/trends/day-spa/title_day_spa.png"></p>
									<p>A wellness oasis that insulates you from the stress of the outside world. Warm tones. Natural materials with a soothing touch. Enjoy tranquility surrounded by feel good things.</p>
									<p>Explore all bathrooms with the day spa look or all products on trend.</p>
									<p class="trendsHeader"><a href="#" class="button">View Bathrooms</a>  <a href="#" class="button">View Products</a></p>

									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row-fluid">
						<div class="span4 productBlock">
							<img src="/assets/images/trends/day-spa/2.jpg">
							
								<div class="productOverlay">
									<a href="#" class="btn-productOverlay">View in bathroom gallery</a> <br />
									<a href="#" class="btn-productOverlay"><i class="icon-share icon">&nbsp;</i>Share</a>
								</div>
							
						</div>
						<div class="span8 ">

							<img src="/assets/images/trends/day-spa/1.jpg">
						<div class="productBlockWithOverlay">
							<div class="productBlockWithOverlay">
								<div class="productOverlay">
									<a href="#" class="btn-productOverlay">View in bathroom gallery</a> <br />
									<a href="#" class="btn-productOverlay"><i class="icon-share icon">&nbsp;</i>Share</a>
								</div>
							</div>
						</div>
<div class="overlayCaption overlayCaptionLeft"><h3>Lorem ipsum dolor</h3>Lorem ipsum dolor sit amet.</div>
							
						</div>
					</div>

					<div class="row-fluid">
					<!--
						<div class="span6 productBlock fadeUP">
							<img src="/assets/images/trends/day-spa/4.jpg">
								<p><strong>LAUFEN
								</strong><br>
								pro A Wall Basin 1050</p>
								<div class="productOverlay">
									<a href="#" class="btn-productOverlay">See more Mixers</a> <br />
									<a href="#" class="btn-productOverlay"><i class="icon-share icon">&nbsp;</i>Share</a>
								</div>
						</div>
						<div class="span4 productBlock fadeUP">
							<img src="/assets/images/trends/day-spa/5.jpg">
								<p class="productWidth"><strong>Milli Cube
								</strong><br>
								1025 x 850  Heated Wall Rail</p>
								<div class="productOverlay">
									<a href="#" class="btn-productOverlay">See more Towel Racks</a> <br />
									<a href="#" class="btn-productOverlay"><i class="icon-share icon">&nbsp;</i>Share</a>
								</div>
						</div>-->
						<div class="span10 fadeUP">
							<img src="/assets/images/trends/day-spa/water-therapy.jpg">
						</div>
						<div class="span2 fadeUP">
							<img src="/assets/images/trends/day-spa/6.jpg">
						</div>
					</div>

					<div class="row-fluid">
						<div class="span9 productBlock fadeUP">
							<img src="/assets/images/trends/day-spa/7.jpg">
							<div class="productOverlay">
								<a href="#" class="btn-productOverlay">View in bathroom gallery</a> <br />
								<a href="#" class="btn-productOverlay"><i class="icon-share icon">&nbsp;</i>Share</a>
							</div>
						</div>
						<div class="span3 fadeUP">
							<img class="overlayImage" src="/assets/images/trends/day-spa/tap.jpg">
						</div>
					</div>

					<div class="row-fluid">
						<div class="span8 overlayCaptionWrap fadeUP">
							<img src="/assets/images/trends/day-spa/8.jpg">
							<div class="overlayCaption"><h3>Lorem ipsum dolor sit amet</h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tincidunt libero at est fringilla ultrices. Sed nec dignissim massa. Quisque et facilisis mauris, vel consectetur tellus. Ut mollis dui risus, vel auctor justo imperdiet vitae. Duis at vulputate ligula. Integer pellentesque metus risus, vitae viverra metus eleifend mattis.</div>
						</div>
						<div class="span4 productBlock fadeUP">
							<img src="/assets/images/trends/day-spa/9.jpg">
															<p><strong>AXA Uno
								</strong><br>
								BTW Close Coupled Toilet Suite</p>
								<div class="productOverlay">
									<a href="#" class="btn-productOverlay">See more Toilets</a> <br />
									<a href="#" class="btn-productOverlay"><i class="icon-share icon">&nbsp;</i>Share</a>
								</div>
						</div>
					</div>

					<div class="row-fluid">
						<div class="span4 productBlock  fadeUP">
							<img src="/assets/images/trends/day-spa/10.jpg">
							<img src="/assets/images/trends/day-spa/11.jpg">
							<img src="/assets/images/trends/day-spa/12.jpg">
															<p><strong>Kado Lure
								</strong><br>
								1760 Freestanding Oval Bath White</p>
								<div class="productOverlay">
									<a href="#" class="btn-productOverlay">See more Baths</a> <br />
									<a href="#" class="btn-productOverlay"><i class="icon-share icon">&nbsp;</i>Share</a>
								</div>
						</div>
						<div class="span8 overlayCaptionWrap fadeUP">
							<img src="/assets/images/trends/day-spa/13.jpg">
							<div class="overlayCaption"><h3>Lorem ipsum dolor sit amet</h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tincidunt libero at est fringilla ultrices. Sed nec dignissim massa. </div>
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
		"/assets/js/jquery-ui-1.10.4.custom.min.js",
		"/assets/js/reece-inspiration.js"
		);
	include_once($serverBase."/includes/foot/scripts.php");
	?>

<script type='text/javascript'>//<![CDATA[
$(function(){
	tiles = $("#TrendsPage .row-fluid .fadeUP");

	$(window).scroll(function(d,h) {
		tiles.each(function(i) {
			a = $(this).offset().top + $(this).height()/2;
			b = $(window).scrollTop() + $(window).height();
			if (a < b) $(this).fadeTo(500,1);
		});
	});

});//]]>

</script>
</body>
</html>