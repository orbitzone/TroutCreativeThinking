
	<?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>

	<?php 
	  	$cssScriptPaths = array(
	  		"/assets/css/reece-products.css",
	  		"/assets/css/reece-bathrooms.css"			
	  	); 
	  	include_once($serverBase."/includes/head/head-generic.php");
	?>		

    <body class="withSubNav">
		<div class="ocmain-wrapper">
		<div class="navbar navbar-fixed-top topNav">
			<?php 
				$genericNavActiveMenuItem = "Bathrooms";
			   	include_once($serverBase."/includes/nav/nav-generic.php");
			?>				    

		   	<?php 
				$happyZoneNavActiveMenuItem = "Bathroom Moments";
			   	include_once($serverBase."/includes/banners/banner-happyzone.php");
			?>	
			</div>
		    <div class="content-container">
				<div class="inner-wrapper">

					<ul class="breadcrumb">
						<li><a href="#">Bathroom</a> <span class="divider">/</span></li>
						<li class="active page-branding text-brand">Products</li>
					</ul>

				    <!-- CONTENT FOR MOBILE -->

				    	<div id="products-mobile-carousel" class="carousel slide visible-phone">
					    	<div class="carousel-inner">
					    		<div class="item active">
									<a href="#">
										<img src="http://placehold.it/730x500" alt="Place holder" />
									</a>
					    		</div>
					    		<div class="item">
									<a href="#">
										<img src="http://placehold.it/730x500" alt="Place holder" />
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
											<li><a href="#">Accessories</a></li>
											<li><a href="#">Toilets</a></li>
											<li><a href="#">Basins</a></li>
											<li><a href="#">Tapware</a></li>
											<li><a href="#">Baths & Spas</a></li>
											<li><a href="#">Showers</a></li>
											<li><a href="#">Vanity Furniture</a></li>
											<li><a href="#">Wastes</a></li>
											<li><a href="#">Commercial</a></li>
										</ul>	
									</div>
								</div>																
							</div>	
							
						</aside>

						<section class="products-content span9">
							<div id="products-carousel" class="carousel slide carousel-hover hidden-phone">
						        <div class="carousel-inner">
						            
								    <div class="active item">
								        <a href="#">
								            <img src="http://placehold.it/970x334" alt="Place holder" />
								        </a>
								    </div>

								    <div class="item">
								        <a href="#">
								            <img src="http://placehold.it/970x334" alt="Place holder" />
								        </a>
								    </div>
						            
						        </div>
						        <!-- Carousel nav -->
						        <a class="carousel-control left" href="#products-carousel" data-slide="prev">‹</a>
						        <a class="carousel-control right" href="#products-carousel" data-slide="next">›</a>
						    </div>

					    	<h3>Popular Products</h3>
					    	<div class="products-list">
							    <div class="row-fluid">
							    	<div class="product-block span3">
										<a href="#"><img src="/assets/images/products_2013/products-bathroom-popular-product-1-dark.jpg" /></a>
							    	</div>
							    	<div class="product-block span3">
							    		<a href="#"><img src="/assets/images/products_2013/products-bathroom-popular-product-1-dark.jpg" /></a>
							    	</div>
							    	<div class="product-block span3">
							    		<a href="#"><img src="/assets/images/products_2013/products-bathroom-popular-product-1-dark.jpg" /></a>
							    	</div>
							    	<div class="product-block span3">
							    		<a href="#"><img src="/assets/images/products_2013/products-bathroom-popular-product-1-dark.jpg" /></a>
							    	</div>						    							    							    	
							    </div>

							    <div class="row-fluid">
							    	<div class="product-block span3">
										<a href="#"><img src="/assets/images/products_2013/products-bathroom-popular-product-1.jpg" /></a>
							    	</div>
							    	<div class="product-block span3">
							    		<a href="#"><img src="/assets/images/products_2013/products-bathroom-popular-product-1.jpg" /></a>
							    	</div>
							    	<div class="product-block span3">
							    		<a href="#"><img src="/assets/images/products_2013/products-bathroom-popular-product-1.jpg" /></a>
							    	</div>
							    	<div class="product-block span3">
							    		<a href="#"><img src="/assets/images/products_2013/products-bathroom-popular-product-1.jpg" /></a>
							    	</div>
							    </div>	
							</div>

						    <hr>

					    	<h3>Latest Releases</h3>
							<div id="latest-releases-carousel" class="carousel slide custom-carousel-control">
						        <div class="carousel-inner">

						        	<div class="active item">					    	
								    	<div class="products-list">
										    <div class="row-fluid">
										    	<div class="product-block span3">
													<a href="#"><img src="/assets/images/products_2013/products-bathroom-latest-product-1.jpg" /></a>
													<div class="product-info">
														<h4>
															<a class="product-title" href="#">Product</a>
															<span class="product-desc">Freestanding bath</span>
															<span class="product-price">$xxx.xx</span>
														</h4>
													</div>
										    	</div>
										    	<div class="product-block span3">
										    		<a href="#"><img src="/assets/images/products_2013/products-bathroom-latest-product-1.jpg" /></a>
													<div class="product-info">
														<h4>
															<a class="product-title" href="#">Product</a>
															<span class="product-desc">Freestanding bath</span>
															<span class="product-price">$xxx.xx</span>
														</h4>
													</div>							    		
										    	</div>
										    	<div class="product-block span3">
										    		<a href="#"><img src="/assets/images/products_2013/products-bathroom-latest-product-1.jpg" /></a>
													<div class="product-info">
														<h4>
															<a class="product-title" href="#">Product</a>
															<span class="product-desc">Freestanding bath</span>
															<span class="product-price">$xxx.xx</span>
														</h4>
													</div>							    		
										    	</div>
										    	<div class="product-block span3">
										    		<a href="#"><img src="/assets/images/products_2013/products-bathroom-latest-product-1.jpg" /></a>
													<div class="product-info">
														<h4>
															<a class="product-title" href="#">Product</a>
															<span class="product-desc">Freestanding bath</span>
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
													<a href="#"><img src="/assets/images/products_2013/products-bathroom-latest-product-1.jpg" /></a>
													<div class="product-info">
														<h4>
															<a class="product-title" href="#">Product</a>
															<span class="product-desc">Freestanding bath</span>
															<span class="product-price">$xxx.xx</span>
														</h4>
													</div>
										    	</div>
										    	<div class="product-block span3">
										    		<a href="#"><img src="/assets/images/products_2013/products-bathroom-latest-product-1.jpg" /></a>
													<div class="product-info">
														<h4>
															<a class="product-title" href="#">Product</a>
															<span class="product-desc">Freestanding bath</span>
															<span class="product-price">$xxx.xx</span>
														</h4>
													</div>							    		
										    	</div>
										    	<div class="product-block span3">
										    		<a href="#"><img src="/assets/images/products_2013/products-bathroom-latest-product-1.jpg" /></a>
													<div class="product-info">
														<h4>
															<a class="product-title" href="#">Product</a>
															<span class="product-desc">Freestanding bath</span>
															<span class="product-price">$xxx.xx</span>
														</h4>
													</div>							    		
										    	</div>				    							    							    	
										    </div>
										</div>	
									</div>									

								</div>
								<a class="carousel-control top left page-branding text-brand" href="#latest-releases-carousel" data-slide="prev">‹</a>
					        	<a class="carousel-control top right page-branding text-brand" href="#latest-releases-carousel" data-slide="next">›</a>	
							</div>

						    <hr>

					    	<h3>Winter Warmers - Heated Towel Rails</h3>
							<div id="winter-warmers-carousel" class="carousel slide custom-carousel-control">
						        <div class="carousel-inner">

						        	<div class="active item">					    	
								    	<div class="products-list">
										    <div class="row-fluid">
										    	<div class="product-block span3">
													<a href="#"><img src="/assets/images/products_2013/products-bathroom-winter-warmers-product-1.jpg" /></a>
													<div class="product-info">
														<h4>
															<a class="product-title" href="#">Product</a>
															<span class="product-desc">Freestanding bath</span>
															<span class="product-price">$xxx.xx</span>
														</h4>
													</div>
										    	</div>
										    	<div class="product-block span3">
										    		<a href="#"><img src="/assets/images/products_2013/products-bathroom-winter-warmers-product-1.jpg" /></a>
													<div class="product-info">
														<h4>
															<a class="product-title" href="#">Product</a>
															<span class="product-desc">Freestanding bath</span>
															<span class="product-price">$xxx.xx</span>
														</h4>
													</div>							    		
										    	</div>
										    	<div class="product-block span3">
										    		<a href="#"><img src="/assets/images/products_2013/products-bathroom-winter-warmers-product-1.jpg" /></a>
													<div class="product-info">
														<h4>
															<a class="product-title" href="#">Product</a>
															<span class="product-desc">Freestanding bath</span>
															<span class="product-price">$xxx.xx</span>
														</h4>
													</div>							    		
										    	</div>
										    	<div class="product-block span3">
										    		<a href="#"><img src="/assets/images/products_2013/products-bathroom-winter-warmers-product-1.jpg" /></a>
													<div class="product-info">
														<h4>
															<a class="product-title" href="#">Product</a>
															<span class="product-desc">Freestanding bath</span>
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
													<a href="#"><img src="/assets/images/products_2013/products-bathroom-winter-warmers-product-1.jpg" /></a>
													<div class="product-info">
														<h4>
															<a class="product-title" href="#">Product</a>
															<span class="product-desc">Freestanding bath</span>
															<span class="product-price">$xxx.xx</span>
														</h4>
													</div>
										    	</div>
										    	<div class="product-block span3">
										    		<a href="#"><img src="/assets/images/products_2013/products-bathroom-winter-warmers-product-1.jpg" /></a>
													<div class="product-info">
														<h4>
															<a class="product-title" href="#">Product</a>
															<span class="product-desc">Freestanding bath</span>
															<span class="product-price">$xxx.xx</span>
														</h4>
													</div>							    		
										    	</div>				    							    							    	
										    </div>
										</div>	
									</div>									

								</div>
								<a class="carousel-control top left page-branding text-brand" href="#winter-warmers-carousel" data-slide="prev">‹</a>
					        	<a class="carousel-control top right page-branding text-brand" href="#winter-warmers-carousel" data-slide="next">›</a>	
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
				"/assets/js/jquery.mobile.custom.min.js",		  		
		  		"/assets/js/jquery.lazyload.min.js",
		  		"/assets/js/bootstrap-transition.js", 
		  		"/assets/js/bootstrap-carousel.js",
		  		"/assets/js/bootstrap-collapse.js",
		  		"/assets/js/reece-ocnav.js",
		  		"/assets/js/reece-carousel.js"
		  	); 
		  	include_once($serverBase."/includes/foot/scripts.php");
		?>			

    </body>
</html>