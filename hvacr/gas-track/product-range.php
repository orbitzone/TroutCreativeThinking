
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
						<li class="active page-branding text-brand">Product Range</li>
					</ul>

					<div class="row-fluid">			
						
						<aside class="gt-sidebar span3">						
							<?php 
								$gtNavActiveMenuItem = "Project Range";
							   	include_once($serverBase."/includes/nav/nav-gt-nav.php");
							?>
						</aside>

						<section class="gt-content span9">
							<h3 class="headline">Product Range</h3>
							<hr>
							<div class="gt-product-range-list clearfix">

								<!-- DESKTOP NAVIGATION -->

								<div class="gt-product-range-row row-fluid hidden-phone">
									<div class="span3">
										<a data-toggle="collapse" data-parent="#product-range-content" href="#product-category-r22">
											<img src="/assets/images/gastrack_2013/gas-track-product-r22.png" alt="r22">
										</a>
									</div>
									<div class="span3">
										<a data-toggle="collapse" data-parent="#product-range-content" href="#product-category-r407f">
											<img src="/assets/images/gastrack_2013/gas-track-product-r407f.png" alt="r407f">
										</a>
									</div>
									<div class="span3">
										<img src="/assets/images/gastrack_2013/gas-track-product-r134a.png" alt="r134a">
									</div>
									<div class="span3">
										<img src="/assets/images/gastrack_2013/gas-track-product-r410a.png" alt="r410a">
									</div>																								
								</div>
								<div class="gt-product-range-row row-fluid hidden-phone">
									<div class="span3">
										<img src="/assets/images/gastrack_2013/gas-track-product-r404a.png" alt="r404a">
									</div>
									<div class="span3">
										<img src="/assets/images/gastrack_2013/gas-track-product-r438a.png" alt="r438a">
									</div>
									<div class="span3">
										<img src="/assets/images/gastrack_2013/gas-track-product-r407c.png" alt="r407c">
									</div>
									<div class="span3">
										<img src="/assets/images/gastrack_2013/gas-track-product-r507a.png" alt="r507a">
									</div>																								
								</div>								

								<!-- MOBILE NAVIGATION -->

								<div id="gt-products-mobile-carousel" data-bs-carousel="carousel" data-bs-carousel-interval="0" class="carousel slide visible-phone">
							    	<div class="carousel-inner">
							    		<div class="item active">
											<a data-toggle="collapse" data-parent="#product-range-content" href="#product-category-r22">
												<img src="/assets/images/gastrack_2013/gas-track-product-r22.png" alt="r22">
											</a>
							    		</div>
							    		<div class="item">
											<a data-toggle="collapse" data-parent="#product-range-content" href="#product-category-r407f">
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

							<div id="product-range-content">
								<div class="accordion-group">
									<div id="product-category-r22" class="product-range-content in collapse">
										<div class="gt-product-block r22"><b>R22 - Methane Series Refrigerant</b/> HCFC (partly chlorinated) (single component)</div>
										<div class="row-fluid">
											<div class="span6">
												<p>R22 is a HCFC and is partly chlorinated and has ozone depleting potential. R22 is compatible with mineral oil. Import quotas 
												   apply and it will be phased out (as other chlorinated refrigerants have been) over the next 10 years. This means that 
												   availability will become unreliable in future.
												</p>
												<dl class="dl-horizontal">
													<dt>Replaces</dt>
													<dd>R505 (Replaces R12 in some applications)</dd>
													<dt>Name</dt>
													<dd>Chlorodifluoromethane</dd>
													<dt>Applications</dt>
													<dd>Medium & low temperature commercial equipment, large commercial & industrial equipment, mobile refrigeration and air conditioning.</dd>																				
												</dl>
												<hr>
												<a class="media-file" href="#">
													<img src="http://placehold.it/80x110" alt="PDF">
													<span>MSDA Sheets <br>PDF</span>
												</a>
												<a class="media-file" href="#">
													<img src="http://placehold.it/80x110" alt="PDF">
													<span>Pressure Chart <br>PDF</span>
												</a>
											</div>
											<div class="span6">
												<hr class="visible-phone">
												<h4 class="headline">Import quotas apply, <br>mineral oil compatible</h4>
												<table class="table table-striped">
													<tbody>
														<tr>
															<td>ODP</td>
															<td>Temp Glide °C (-15/30)</td>
														</tr>
														<tr>
															<td>0.055</td>
															<td>0</td>
														</tr>
														<tr>
															<td>GWP (100 yrs)</td>
															<td>Safety Classification</td>
														</tr>
														<tr>
															<td>1,700</td>
															<td>A1</td>
														</tr>
													</tbody>
												</table>										
											</div>									
										</div>
									</div>
								</div>

								<div class="accordion-group">
									<div id="product-category-r407f" class="product-range-content collapse">
										<div class="gt-product-block r407f"><b>R407F - Methane Series Refrigerant</b/> HCFC (partly chlorinated) (single component)</div>
										<div class="row-fluid">
											<div class="span6">
												<p>R407F iLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore 
												   enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
												   labore et dolore magna aliqua.
												</p>
												<dl class="dl-horizontal">
													<dt>Lorem</dt>
													<dd>Lorem ipsum dolor sit amet</dd>
													<dt>Lorem</dt>
													<dd>adipisicing</dd>
													<dt>Adipisicing</dt>
													<dd>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</dd>																				
												</dl>
												<hr>												
												<a class="media-file" href="#">
													<img src="http://placehold.it/80x110" alt="PDF">
													<span>Lorem ipsum <br>PDF</span>
												</a>
												<a class="media-file" href="#">
													<img src="http://placehold.it/80x110" alt="PDF">
													<span>Lorem ipsum <br>PDF</span>
												</a>
											</div>
											<div class="span6">
												<hr class="visible-phone">
												<h4 class="headline">Lorem ipsum dolor, <br>consectetur adipisicing</h4>
												<table class="table table-striped">
													<tbody>
														<tr>
															<td>Tempor</td>
															<td>Magna aliqua °C (-15/30)</td>
														</tr>
														<tr>
															<td>0.021</td>
															<td>1</td>
														</tr>
														<tr>
															<td>GWP (100 yrs)</td>
															<td>Safety Classification</td>
														</tr>
														<tr>
															<td>1,700</td>
															<td>A1</td>
														</tr>
													</tbody>
												</table>										
											</div>									
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