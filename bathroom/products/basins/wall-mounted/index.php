
	<?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>

	<?php 
		$cssScriptPaths = [
			"/assets/css/reece-products.css",
			"/assets/css/reece-bathrooms.css"			
		]; 
	   	include_once($serverBase."/includes/head/head-generic.php");
	?>		

    <body>
		<div class="ocmain-wrapper">

			<?php 
				$genericNavActiveMenuItem = "Bathrooms";
			   	include_once($serverBase."/includes/nav/nav-generic.php");
			?>				    

		   	<?php 
				$happyZoneNavActiveMenuItem = "Bathroom Moments";
			   	include_once($serverBase."/includes/banners/banner-happyzone.php");
			?>	

		    <div class="content-container">
				<div class="inner-wrapper">

					<ul class="breadcrumb">
						<li><a href="#">Bathroom</a> <span class="divider">/</span></li>
						<li><a href="<?php print $pageLinks['Bathroom Products']; ?>">Products</a> <span class="divider">/</span></li>
						<li><a href="<?php print $pageLinks['Bathroom Basins']; ?>">Basins</a> <span class="divider">/</span></li>
						<li class="active page-branding text-brand">Laufen ILBAGNOALESSI One</li>
					</ul>

				    <!-- CONTENT FOR DESKTOP -->

					<section class="products-content-single">
						<div class="row-fluid">
							<div class="span7">
								<h2>Laufen ILBAGNOALESSI One</h2>
								<h3>Wall Basin 1600</h3>

		
								<div id="product-shots-carousel" class="carousel slide">
									
									<div class="carousel-inner">
										<div class="active item" data-slide-number="0"><img src="/assets/images/products_2013/products-product-shot-1.jpg" alt="Laufen ILBAGNOALESSI One" /></div>
										<div class="item" data-slide-number="1"><img src="/assets/images/products_2013/products-product-shot-1.jpg" alt="Laufen ILBAGNOALESSI One" /></div>
										<div class="item" data-slide-number="2"><img src="/assets/images/products_2013/products-product-shot-1.jpg" alt="Laufen ILBAGNOALESSI One" /></div>
									</div>

								</div>

								<ul class="thumbnails carousel-controls-mini">
									<li>
										<a class="thumbnail" href="#product-shots-carousel" data-carousel-slide="0">
											<img src="/assets/images/products_2013/products-product-shot-1.jpg" alt="Laufen ILBAGNOALESSI One" />
										</a>
									</li>
									<li>
										<a class="thumbnail" href="#product-shots-carousel" data-carousel-slide="1">
											<img src="/assets/images/products_2013/products-product-shot-1.jpg" alt="Laufen ILBAGNOALESSI One" />
										</a>
									</li>
									<li>
										<a class="thumbnail" href="#product-shots-carousel" data-carousel-slide="2">
											<img src="/assets/images/products_2013/products-product-shot-1.jpg" alt="Laufen ILBAGNOALESSI One" />
										</a>
									</li>
									<li>
										<a class="thumbnail" href="#product-shots-carousel" data-carousel-slide="0">
											<img src="/assets/images/products_2013/products-product-shot-1.jpg" alt="Laufen ILBAGNOALESSI One" />
										</a>
									</li>
									<li>
										<a class="thumbnail" href="#product-shots-carousel" data-carousel-slide="1">
											<img src="/assets/images/products_2013/products-product-shot-1.jpg" alt="Laufen ILBAGNOALESSI One" />
										</a>
									</li>
									<li>
										<a class="thumbnail" href="#product-shots-carousel" data-carousel-slide="2">
											<img src="/assets/images/products_2013/products-product-shot-1.jpg" alt="Laufen ILBAGNOALESSI One" />
										</a>
									</li>																			
								</ul>

							</div>
							<div class="span5">
								<h3>
									$2245.00
								</h3>
								<p><small>gst inclusive</small></p>

								<hr>

								<p>The gentle, rounded shapes of ILBAGNOALESSI One reflect the work of nature itself - inspired by the idea of a stone that has been smoothed by water over time.</p>
								<p>The gentle, rounded shapes of ILBAGNOALESSI One reflect the work of nature itself.</p>

								<p>The gentle, rounded shapes of ILBAGNOALESSI One reflect.</p>

								<div class="row-fluid">
									<div class="span7 text-center">
		
										<div class="image-center">
										<!-- <img src="/assets/images/products_2013/products-three-year-warranty.jpg" />
											<img src="/assets/images/products_2013/products-three-year-warranty.jpg" />
											<img src="/assets/images/products_2013/products-three-year-warranty.jpg" />
											<img src="/assets/images/products_2013/products-three-year-warranty.jpg" /> -->
											<!-- <img src="/assets/images/products_2013/products-seven-year-warranty.jpg" /> -->
											<img src="/assets/images/products_2013/products-warranty-collection.jpg" />
										</div>

									</div>
									<div class="span5 text-right">
										<div class="dropdown">
											<button type="button" data-toggle="dropdown" class="btn text-left btn-large btn-block">Variations <i class="caret pull-right"></i></button>
											<div class="product-variation-list dropdown-menu">

												<div class="row-fluid">
													<div class="product-variation-block span6">
												    	<div class="product-block">
															<a href="#"><img src="/assets/images/products_2013/products-bathroom-latest-product-1.jpg" /></a>
															<div class="product-info">
																<h4>
																	<a class="product-title" href="#">Product</a>
																	<span class="product-desc">Description</span>
																	<span class="product-price">$xxx.xx</span>
																</h4>
															</div>
												    	</div>
													</div>
													<div class="product-variation-block span6">
												    	<div class="product-block">
															<a href="#"><img src="/assets/images/products_2013/products-bathroom-latest-product-1.jpg" /></a>
															<div class="product-info">
																<h4>
																	<a class="product-title" href="#">Product</a>
																	<span class="product-desc">Description</span>
																	<span class="product-price">$xxx.xx</span>
																</h4>
															</div>
												    	</div>
													</div>													
												</div>
											</div>
										</div>

										<button type="button" class="btn btn-cart btn-large btn-block">Add to Cart</button>
										<button type="button" class="btn btn-large btn-block">Add to My List</button>
										
										<div class="btn-bar btn-block">
											<small>Share</small>
											<div class="btn-group">
												<a class="btn btn-small"><i class="icon-facebook"></i></a>
												<a class="btn btn-small" href="#"><i class="icon-twitter"></i></a>
												<a class="btn btn-small" href="#"><i class="icon-pinterest"></i></a>
											</div>
										</div>

									</div>									
								</div>

							</div>									
						</div>

					</section>

					<ul class="products-tab-nav hidden-phone">
						<li class="active"><a href="#details" data-toggle="tab">Details</a></li>
						<li><a href="#video" data-toggle="tab">Video</a></li>
						<li><a href="#tech-info" data-toggle="tab">Tech Info</a></li>
						<li><a href="#product-archive" data-toggle="tab">Product Archive</a></li>
						<li><a href="#faqs" data-toggle="tab">FAQs</a></li>
						<li><a href="#in-store" data-toggle="tab">In Store</a></li>
						<li><a href="#reviews" data-toggle="tab">Reviews</a></li>
					</ul>

					<div id="accordion" class="products-tabs tab-content clearfix">
						<a class="products-collapse-nav accordion-toggle visible-phone" data-toggle="collapse" data-parent="#accordion" href="#details">
							Details
						</a>
					
						<div class="accordion tab-pane in collapse active" id="details">
							<div class="accordion-inner">
								<div class="products-tab">
									<ul class="nav nav-list">
										<li class="nav-header">Features</li>
										<li><a href="#">Laufen Clean Coat - abrasion resistant finish.</a></li>
										<li><a href="#">Reduces cleaning effort, increases product life and improves hygiene.</a></li>
										<li><a href="#">One tap hole.</a></li>
										<li><a href="#">Also available with no tap hole.</a></li>
										<li class="nav-header">Finish</li>
										<li><a href="#">White.</a></li>
										<li><a href="#">Vitreous china</a></li>
									</ul>
								</div>
								<div class="products-tab">
									<ul class="nav nav-list">
										<li class="nav-header">Tech Info</li>
										<li><a href="#">Width: 1600mm.</a></li>
										<li><a href="#">Depth: 350/500mm.</a></li>
										<li><a href="#">Height: 165mm.</a></li>
										<li><a href="#">Capacity: 7.5L.</a></li>
									</ul>
									<a class="muted" href="#">More information</a>
								</div>
								<div class="products-tab">
									<img src="/assets/images/products_2013/products-pdf-sample.jpg" alt="Download PDF" />
									<a class="btn btn-inverse">Download <b class="caret"></b></a>
								</div>																		
							</div>
						</div>

						<a class="products-collapse-nav accordion-toggle visible-phone" data-toggle="collapse" data-parent="#accordion" href="#video">
							Video
						</a>

						<div class="accordion tab-pane fade collapse" id="video">
							<div class="accordion-inner">
								<div class="products-tab">
									<ul class="nav nav-list">
										<li class="nav-header">Features</li>
										<li><a href="#">Laufen Clean Coat - abrasion resistant finish.</a></li>
										<li><a href="#">Reduces cleaning effort, increases product life and improves hygiene.</a></li>
										<li><a href="#">One tap hole.</a></li>
										<li><a href="#">Also available with no tap hole.</a></li>
									</ul>
								</div>
								<div class="products-tab">
									<ul class="nav nav-list">
										<li class="nav-header">Tech Info</li>
										<li><a href="#">Width: 1600mm.</a></li>
										<li><a href="#">Depth: 350/500mm.</a></li>
									</ul>
									<a class="muted" href="#">More information</a>
								</div>
								<div class="products-tab">
									<img src="/assets/images/products_2013/products-pdf-sample.jpg" alt="Download PDF" />
									<a class="btn btn-inverse">Download <b class="caret"></b></a>
								</div>																		
							</div>							
						</div>					
					</div>  

					<hr>

					<h2>You may also need</h2>
			    	<div class="products-list">
					    <div class="row-fluid">
					    	<div class="product-block span4">
					    		<span class="page-branding sale-branding"></span>
								<a href="#"><img src="/assets/images/products_2013/products-bathroom-sample-product500x300.jpg" /></a>
								<div class="product-info">
									<h4>
										<a class="product-title" href="#">Product</a>
										<span class="product-desc">Description</span>
										<span class="product-price">$xxx.xx</span>
									</h4>
								</div>
					    	</div>
					    	<div class="product-block span4">
					    		<a href="#"><img src="/assets/images/products_2013/products-bathroom-sample-product500x300.jpg" /></a>
								<div class="product-info">
									<h4>
										<a class="product-title" href="#">Product</a>
										<span class="product-desc">Description</span>
										<span class="product-price">$xxx.xx</span>
									</h4>
								</div>							    		
					    	</div>
					    	<div class="product-block span4">
					    		<a href="#"><img src="/assets/images/products_2013/products-bathroom-sample-product500x300.jpg" /></a>
								<div class="product-info">
									<h4>
										<a class="product-title" href="#">Product</a>
										<span class="product-desc">Description</span>
										<span class="product-price">$xxx.xx</span>
									</h4>
								</div>							    		
					    	</div>				    							    							    	
					    </div>
					</div>	
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
			$jsScriptPaths = [
				"/assets/js/jquery.mobile.custom.min.js",
				"/assets/js/bootstrap-transition.js", 
				"/assets/js/bootstrap-carousel.js",
				"/assets/js/bootstrap-collapse.js",
				"/assets/js/bootstrap-tab.js",
				"/assets/js/bootstrap-dropdown.js",
				"/assets/js/reece-ocnav.js",
				"/assets/js/reece-carousel.js"
			]; 
		   	include_once($serverBase."/includes/foot/scripts.php");
		?>				

    </body>
</html>