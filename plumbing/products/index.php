
	<?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>

	<?php 
	  	$cssScriptPaths = array(
	  		"/assets/css/reece-products.css",
	  		"/assets/css/reece-plumbing.css"			
	  	); 
	  	include_once($serverBase."/includes/head/head-generic.php");
	?>		

    <body>
		<div class="ocmain-wrapper">

			<?php 
				$genericNavActiveMenuItem = "Bathrooms";
			   	include_once($serverBase."/includes/nav/nav-generic.php");
			?>				    

			<?php 
			   	include_once($serverBase."/includes/nav/nav-subnavbar.php");
			?>				

		    <div class="content-container">
				<div class="inner-wrapper">

					<ul class="breadcrumb">
						<li><a href="#">Bathroom</a> <span class="divider">/</span></li>
						<li class="active page-branding text-brand">Products</li>
					</ul>					

				    <!-- CONTENT FOR MOBILE -->

				    	<div id="products-mobile-carousel" class="carousel slide visible-phone">
					    	<div class="carousel-inner">
					    		<div class="item">
									<a href="#">
										<img src="/assets/images/products_2013/products-plumbing-fresh-approach-mobile.jpg" alt="Fresh Approach" />
									</a>
					    		</div>
					    		<div class="item active">
									<a href="#">
										<img src="/assets/images/products_2013/products-plumbing-fresh-approach-mobile.jpg" alt="Fresh Approach" />
									</a>
					    		</div>
					    	</div>

							<a class="carousel-control left" href="#products-mobile-carousel" data-slide="prev">‹</a>
							<a class="carousel-control right" href="#products-mobile-carousel" data-slide="next">›</a>
			    		</div>

			    	<!-- CONTENT FOR DESKTOP -->

				    <div class="row-fluid">
						<aside class="span3">

							<div class="product-filters-wrap">
								<div class="product-filter">
									<header class="product-filter-head visible-phone" data-toggle="collapse" data-target="#product-filters">Product Category<i class="icon-angle-down icon-large pull-right"></i></header>
									<header class="product-filter-head hidden-phone">Product Category</header>
									<div id="product-filters" class="product-filters collapse">
										<ul id="product-caregory" class="nav">
									<li><a href="#">Hot Water Units</a></li>
									<li><a href="#">Rainwater Tanks</a></li>
									<li><a href="#">Hydronic Heating</a></li>
									<li><a href="#">Pipe & Fittings</a></li>
									<li><a href="#">Clips & Pipe Supports</a></li>
									<li><a href="#">Valves</a></li>
									<li><a href="#">Pumps</a></li>
									<li><a href="#">Flashing</a></li>
									<li><a href="#">Tools & Hardware</a></li>
									<li><a href="#">Workware & Safety Gear</a></li>
									<li><a href="#">Macerators</a></li>
									<li><a href="#">Water Filters</a></li>
									<li><a href="#">Air Conditioning Units</a></li>
									<li><a href="#">Ducting and Ventilation</a></li>
									<li><a href="#">Fire Services</a></li>
									<li><a href="#">Tap & Cistern Spares</a></li>
									<li><a href="#">Gas Spares</a></li>
									<li><a href="#">Trade Bathroom ware</a></li>
										</ul>	
									</div>
								</div>																
							</div>	

						</aside>

						<section class="products-content span9">
							<div id="products-carousel" class="carousel slide carousel-hover hidden-phone">
						        <div class="carousel-inner">
						            
								    <div class="active item">
								        <a href="/the-block">
								            <img src="/assets/images/products_2013/products-plumbing-fresh-approach.jpg" alt="Fresh Approach" />
								        </a>
								    </div>

								    <div class="item">
								        <a href="/the-block">
								            <img src="/assets/images/products_2013/products-plumbing-fresh-approach.jpg" alt="Fresh Approach" />
								        </a>
								    </div>
						            
						        </div>
						        <!-- Carousel nav -->
						        <a class="carousel-control left" href="#products-carousel" data-slide="prev">‹</a>
						        <a class="carousel-control right" href="#products-carousel" data-slide="next">›</a>
						    </div>

					    	<h3>Latest Releases</h3>
							<div id="latest-releases-carousel" class="carousel slide top-carousel-control">
						        <div class="carousel-inner">

						        	<div class="active item">					    	
								    	<div class="products-list">
										    <div class="row-fluid">
										    	<div class="product-block span3">
													<a href="#"><img src="/assets/images/products_2013/products-plumbing-latest-releases-1.jpg" /></a>
													<div class="product-info">
														<h4>
															<a class="product-title" href="#">Product</a>
															<span class="product-desc">Description</span>
															<span class="product-price">$xxx.xx</span>
														</h4>
													</div>
										    	</div>
										    	<div class="product-block span3">
										    		<a href="#"><img src="/assets/images/products_2013/products-plumbing-latest-releases-1.jpg" /></a>
													<div class="product-info">
														<h4>
															<a class="product-title" href="#">Product</a>
															<span class="product-desc">Description</span>
															<span class="product-price">$xxx.xx</span>
														</h4>
													</div>							    		
										    	</div>
										    	<div class="product-block span3">
										    		<a href="#"><img src="/assets/images/products_2013/products-plumbing-latest-releases-1.jpg" /></a>
													<div class="product-info">
														<h4>
															<a class="product-title" href="#">Product</a>
															<span class="product-desc">Description</span>
															<span class="product-price">$xxx.xx</span>
														</h4>
													</div>							    		
										    	</div>
										    	<div class="product-block span3">
										    		<a href="#"><img src="/assets/images/products_2013/products-plumbing-latest-releases-1.jpg" /></a>
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

						        	<div class="item">
								    	<div class="products-list">
										    <div class="row-fluid">
										    	<div class="product-block span3">
													<a href="#"><img src="/assets/images/products_2013/products-plumbing-latest-releases-1.jpg" /></a>
													<div class="product-info">
														<h4>
															<a class="product-title" href="#">Thermann</a>
															<span class="product-desc">Description</span>
															<span class="product-price">$100.00</span>
														</h4>
													</div>
										    	</div>
										    	<div class="product-block span3">
										    		<a href="#"><img src="/assets/images/products_2013/products-plumbing-latest-releases-1.jpg" /></a>
													<div class="product-info">
														<h4>
															<a class="product-title" href="#">Product</a>
															<span class="product-desc">Description</span>
															<span class="product-price">$xxx.xx</span>
														</h4>
													</div>							    		
										    	</div>
										    	<div class="product-block span3">
										    		<a href="#"><img src="/assets/images/products_2013/products-plumbing-latest-releases-1.jpg" /></a>
													<div class="product-info">
														<h4>
															<a class="product-title" href="#">Product</a>
															<span class="product-desc">Description</span>
															<span class="product-price">$xxx.xx</span>
														</h4>
													</div>							    		
										    	</div>
										    	<div class="product-block span3">
										    		<a href="#"><img src="/assets/images/products_2013/products-plumbing-latest-releases-1.jpg" /></a>
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
								<a class="carousel-control left page-branding text-brand" href="#latest-releases-carousel" data-slide="prev">‹</a>
					        	<a class="carousel-control right page-branding text-brand" href="#latest-releases-carousel" data-slide="next">›</a>	
							</div>

							<hr>

					    	<h3>Popular Products</h3>
					    	<div class="products-list">
							    <div class="row-fluid">
							    	<div class="product-block span3">
										<a href="#"><img src="/assets/images/products_2013/products-plumbing-popular-product-1.jpg" /></a>
							    	</div>
							    	<div class="product-block span3">
							    		<a href="#"><img src="/assets/images/products_2013/products-plumbing-popular-product-1.jpg" /></a>
							    	</div>
							    	<div class="product-block span3">
							    		<a href="#"><img src="/assets/images/products_2013/products-plumbing-popular-product-1.jpg" /></a>
							    	</div>
							    	<div class="product-block span3">
							    		<a href="#"><img src="/assets/images/products_2013/products-plumbing-popular-product-1.jpg" /></a>
							    	</div>						    							    							    	
							    </div>

							    <div class="row-fluid">
							    	<div class="product-block span3">
										<a href="#"><img src="/assets/images/products_2013/products-plumbing-popular-product-1.jpg" /></a>
							    	</div>
							    	<div class="product-block span3">
							    		<a href="#"><img src="/assets/images/products_2013/products-plumbing-popular-product-1.jpg" /></a>
							    	</div>
							    	<div class="product-block span3">
							    		<a href="#"><img src="/assets/images/products_2013/products-plumbing-popular-product-1.jpg" /></a>
							    	</div>
							    	<div class="product-block span3">
							    		<a href="#"><img src="/assets/images/products_2013/products-plumbing-popular-product-1.jpg" /></a>
							    	</div>						    							    							    	
							    </div>	
							</div>							

						    <hr>

					    	<h3>Hot Water Season</h3>
							<div id="winter-warmers-carousel" class="carousel slide top-carousel-control">
						        <div class="carousel-inner">

						        	<div class="active item">					    	
								    	<div class="products-list">
										    <div class="row-fluid">
										    	<div class="product-block span3">
													<a href="#"><img src="/assets/images/products_2013/products-plumbing-hot-water-season-1.jpg" /></a>
													<div class="product-info">
														<h4>
															<a class="product-title" href="#">Product</a>
															<span class="product-desc">Description</span>
															<span class="product-price">$xxx.xx</span>
														</h4>
													</div>
										    	</div>
										    	<div class="product-block span3">
										    		<a href="#"><img src="/assets/images/products_2013/products-plumbing-hot-water-season-1.jpg" /></a>
													<div class="product-info">
														<h4>
															<a class="product-title" href="#">Product</a>
															<span class="product-desc">Description</span>
															<span class="product-price">$xxx.xx</span>
														</h4>
													</div>							    		
										    	</div>
										    	<div class="product-block span3">
										    		<a href="#"><img src="/assets/images/products_2013/products-plumbing-hot-water-season-1.jpg" /></a>
													<div class="product-info">
														<h4>
															<a class="product-title" href="#">Product</a>
															<span class="product-desc">Description</span>
															<span class="product-price">$xxx.xx</span>
														</h4>
													</div>							    		
										    	</div>
										    	<div class="product-block span3">
										    		<a href="#"><img src="/assets/images/products_2013/products-plumbing-hot-water-season-1.jpg" /></a>
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

						        	<div class="item">					    	
								    	<div class="products-list">
										    <div class="row-fluid">
										    	<div class="product-block span3">
													<a href="#"><img src="/assets/images/products_2013/products-plumbing-hot-water-season-1.jpg" /></a>
													<div class="product-info">
														<h4>
															<a class="product-title" href="#">Product</a>
															<span class="product-desc">Description</span>
															<span class="product-price">$xxx.xx</span>
														</h4>
													</div>
										    	</div>
										    	<div class="product-block span3">
										    		<a href="#"><img src="/assets/images/products_2013/products-plumbing-hot-water-season-1.jpg" /></a>
													<div class="product-info">
														<h4>
															<a class="product-title" href="#">Product</a>
															<span class="product-desc">Description</span>
															<span class="product-price">$xxx.xx</span>
														</h4>
													</div>							    		
										    	</div>
										    	<div class="product-block span3">
										    		<a href="#"><img src="/assets/images/products_2013/products-plumbing-hot-water-season-1.jpg" /></a>
													<div class="product-info">
														<h4>
															<a class="product-title" href="#">Product</a>
															<span class="product-desc">Description</span>
															<span class="product-price">$xxx.xx</span>
														</h4>
													</div>							    		
										    	</div>
										    	<div class="product-block span3">
										    		<a href="#"><img src="/assets/images/products_2013/products-plumbing-hot-water-season-1.jpg" /></a>
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
								<a class="carousel-control left page-branding text-brand" href="#winter-warmers-carousel" data-slide="prev">‹</a>
					        	<a class="carousel-control right page-branding text-brand" href="#winter-warmers-carousel" data-slide="next">›</a>	
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
	   			"activeMenu" => "Bathrooms",
	   			"activeMenuItem" => "Bathroom Moments"
	   		);
		   	include_once($serverBase."/includes/nav/nav-mobile.php");
		?>

		<?php 
		  	$jsScriptPaths = array(
		  		"/assets/js/jquery.lazyload.min.js", 
		  		"/assets/js/bootstrap-carousel.js",
		  		"/assets/js/bootstrap-collapse.js",
		  		"/assets/js/bootstrap-transition.js",
		  		"/assets/js/reece-ocnav.js",
				"/assets/js/reece-carousel.js"		  		
		  	); 
		  	include_once($serverBase."/includes/foot/scripts.php");
		?>			

    </body>
</html>