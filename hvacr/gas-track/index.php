
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
						<li class="active page-branding text-brand">Project Range</li>
					</ul>

					<div class="row-fluid">			
						
						<aside class="gt-sidebar span3">						
							<?php 
								$gtNavActiveMenuItem = "Project Range";
							   	include_once($serverBase."/includes/nav/nav-gt-nav.php");
							?>
						</aside>

						<section class="gt-content span9">

							<figure class="gt-banner-ig">
								<h2 class="gt-ig-heading">
									How GasTrack
									works for you.
								</h2>

								<a data-toggle="tooltip" data-placement="right" href="#" data-original-title="You need to be a Reece hvac-r customer and ARC registered." class="gt-ig-person"></a>
								<div class="gt-ig-caption left visible-phone">You need to be a Reece hvac-r customer and ARC registered.</div>

								<div id="gt-ig-items" class="gt-ig-items collapse">
									<a data-toggle="tooltip" data-placement="bottom" href="#" data-original-title="61 convenient locations stock a full range of Refrigerant Gases and Re-Claim bottles." class="gt-ig-store"></a>
									<div class="gt-ig-caption right visible-phone">61 convenient locations stock a full range of Refrigerant Gases and Re-Claim bottles.</div>
									<a data-toggle="tooltip" data-placement="bottom" href="#" data-original-title="Purchase the refrigerant from your selected Reece hvac-r branch." class="gt-ig-bottle"></a>
									<div class="gt-ig-caption left visible-phone">Purchase the refrigerant from your selected Reece hvac-r branch.</div>
									<a data-toggle="tooltip" data-placement="left" href="#" data-original-title="Bottles are scanned with a unique code creating a history of the bottles’ life from purchase to return." class="gt-ig-scan"></a>
									<div class="gt-ig-caption right visible-phone">Bottles are scanned with a unique code creating a history of the bottles’ life from purchase to return.</div>
									<a data-toggle="tooltip" data-placement="left" href="#" data-original-title="Each scan records quantity, bottle number, size, Refrigerant gas, your order and job number and who purchased the cylinder." class="gt-ig-screen"></a>
									<div class="gt-ig-caption left visible-phone">Each scan records quantity, bottle number, size, Refrigerant gas, your order and job number and who purchased the cylinder.</div>
									<a data-toggle="tooltip" data-placement="top" href="#" data-original-title="We can deliver cylinders with our Reece Rapid Delivery. No need to leave site." class="gt-ig-truck"></a>
									<div class="gt-ig-caption right visible-phone">We can deliver cylinders with our Reece Rapid Delivery. No need to leave site.</div>
									<a data-toggle="tooltip" data-placement="bottom" href="#" data-original-title="Return Bottle and collect replacement." class="gt-ig-store visible-phone"></a>
									<div class="gt-ig-caption left visible-phone">Return Bottle and collect replacement.</div>								

									<img class="gt-ig-map" src="/assets/images/gastrack_2013/gas-track-infographic-bg.jpg" src="Gas Track Infographic">
								</div>

								<button type="button" class="btn btn-highlight btn-large visible-phone" data-toggle="collapse" data-target="#gt-ig-items">Next <i class="icon-chevron-down"></i></button>

							</figure>


<!-- 							<button type="button" class="visible-phone" data-toggle="collapse" data-target="#gt-navigation">
								Navigation
							</button>
							 
							<ul id="gt-navigation" class="gt-navigation nav nav-pills nav-stacked collapse">

								<?php foreach ($gtNavigationItems as $item) : ?>

									<?php if ($item == $gtNavActiveMenuItem) : ?>
										<li class="active"><a href="#"><?php print $item; ?></a></li>
									<?php else : ?>
										<li><a href="#"><?php print $item; ?></a></li>
									<?php endif; ?>

								<?php endforeach; ?>

							</ul> -->


							<h3 class="headline">GasTrack Range</h3>
							<hr>
							<div class="gt-product-range-list clearfix">

								<!-- DESKTOP NAVIGATION -->

								<div class="gt-product-range-row row-fluid hidden-phone">
									<div class="span3">
										<a href="#">
											<img src="/assets/images/gastrack_2013/gas-track-product-r22.png" alt="r22">
										</a>
									</div>
									<div class="span3">
										<a href="#">
											<img src="/assets/images/gastrack_2013/gas-track-product-r407f.png" alt="r407f">
										</a>
									</div>
									<div class="span3">
										<a href="#">
											<img src="/assets/images/gastrack_2013/gas-track-product-r134a.png" alt="r134a">
										</a>
									</div>
									<div class="span3">
										<a href="#">
											<img src="/assets/images/gastrack_2013/gas-track-product-r410a.png" alt="r410a">
										</a>
									</div>																								
								</div>
								<div class="gt-product-range-row row-fluid hidden-phone">
									<div class="span3">
										<a href="#">
											<img src="/assets/images/gastrack_2013/gas-track-product-r404a.png" alt="r404a">
										</a>											
									</div>
									<div class="span3">
										<a href="#">
											<img src="/assets/images/gastrack_2013/gas-track-product-r438a.png" alt="r438a">
										</a>											
									</div>
									<div class="span3">
										<a href="#">
											<img src="/assets/images/gastrack_2013/gas-track-product-r407c.png" alt="r407c">
										</a>										
									</div>
									<div class="span3">
										<a href="#">
											<img src="/assets/images/gastrack_2013/gas-track-product-r507a.png" alt="r507a">
										</a>											
									</div>																								
								</div>								

								<!-- MOBILE NAVIGATION -->

								<div id="gt-products-mobile-carousel" data-bs-carousel="carousel" data-bs-carousel-interval="0" class="carousel slide visible-phone">
							    	<div class="carousel-inner">
							    		<div class="item active">
											<a href="#">
												<img src="/assets/images/gastrack_2013/gas-track-product-r22.png" alt="r22">
											</a>
							    		</div>
							    		<div class="item">
											<a href="#">
												<img src="/assets/images/gastrack_2013/gas-track-product-r134a.png" alt="r134a">
											</a>
							    		</div>
							    		<div class="item">
											<a href="#">
												<img src="/assets/images/gastrack_2013/gas-track-product-r407f.png" alt="r407f">
											</a>
							    		</div>		
							    		<div class="item">
											<a href="#">
												<img src="/assets/images/gastrack_2013/gas-track-product-r410a.png" alt="r410a">
											</a>
							    		</div>
							    		<div class="item">
											<a href="#">
												<img src="/assets/images/gastrack_2013/gas-track-product-r404a.png" alt="r404a">
											</a>
							    		</div>
							    		<div class="item">
											<a href="#">
												<img src="/assets/images/gastrack_2013/gas-track-product-r438a.png" alt="r438a">
											</a>
							    		</div>		
							    		<div class="item">
											<a href="#">
												<img src="/assets/images/gastrack_2013/gas-track-product-r407c.png" alt="r407c">
											</a>
							    		</div>
							    		<div class="item">
											<a href="#">
												<img src="/assets/images/gastrack_2013/gas-track-product-r507a.png" alt="r507a">
											</a>
							    		</div>			    										    									    							    		
							    	</div>
							    	<a class="carousel-control left" href="#gt-products-mobile-carousel" data-slide="prev">‹</a>
							    	<a class="carousel-control right" href="#gt-products-mobile-carousel" data-slide="next">›</a>
					    		</div>

							</div>	

							<hr>

							<h3 class="headline">Latest GasTrack news</h3>

							<div class="gt-latest-news">
								<div class="row-fluid">
									<div class="gt-latest-news-block span6">
										<div class="media">
											<a class="pull-left" href="#">
												<img class="media-object" src="http://placehold.it/150x160" alt="Placeholder">
											</a>
											<div class="media-body">
												<h4 class="media-heading">Latest GasTrack news</h4>
												<p>Ribus vid quae sunt prorenima dipicab ius. Pariae. Ut ute is qui cuptatiis ariatium eiciissequi ut reperi ommo vendi venist ea ipid quuntem.</p>
												<a class="focus-link" href="#">Read more</a>
											</div>
										</div>
									</div>
									<div class="gt-latest-news-block span6">
										<div class="media">
											<a class="pull-left" href="#">
												<img class="media-object" src="http://placehold.it/150x160" alt="Placeholder">
											</a>
											<div class="media-body">
												<h4 class="media-heading">Latest GasTrack news</h4>
												<p>Ribus vid quae sunt prorenima dipicab ius. Pariae. Ut ute is qui cuptatiis ariatium eiciissequi ut reperi ommo vendi venist ea ipid quuntem.</p>
												<a class="focus-link" href="#">Read more</a>
											</div>
										</div>
									</div>
								</div>

								<div class="row-fluid">
									<div class="gt-latest-news-block span6">
										<div class="media">
											<a class="pull-left" href="#">
												<img class="media-object" src="http://placehold.it/150x160" alt="Placeholder">
											</a>
											<div class="media-body">
												<h4 class="media-heading">Latest GasTrack news</h4>
												<p>Ribus vid quae sunt prorenima dipicab ius. Pariae. Ut ute is qui cuptatiis ariatium eiciissequi ut reperi ommo vendi venist ea ipid quuntem.</p>
												<a class="focus-link" href="#">Read more</a>
											</div>
										</div>
									</div>
									<div class="gt-latest-news-block span6">
										<div class="media">
											<a class="pull-left" href="#">
												<img class="media-object" src="http://placehold.it/150x160" alt="Placeholder">
											</a>
											<div class="media-body">
												<h4 class="media-heading">Latest GasTrack news</h4>
												<p>Ribus vid quae sunt prorenima dipicab ius. Pariae. Ut ute is qui cuptatiis ariatium eiciissequi ut reperi ommo vendi venist ea ipid quuntem.</p>
												<a class="focus-link" href="#">Read more</a>
											</div>
										</div>
									</div>
								</div>							

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