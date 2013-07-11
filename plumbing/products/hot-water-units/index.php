
	<?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>

	<?php 
		$cssScriptPaths = [
			"/assets/css/reece-products.css",
			"/assets/css/reece-plumbing.css"			
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
			   	include_once($serverBase."/includes/nav/nav-subnavbar.php");
			?>	

		    <div class="content-container">
				<div class="inner-wrapper">

					<ul class="breadcrumb">
						<li><a href="#">Bathroom</a> <span class="divider">/</span></li>
						<li><a href="<?php print $pageLinks['Bathroom Products']; ?>">Products</a> <span class="divider">/</span></li>
						<li class="active page-branding text-brand">Hot Water Units</li>
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

							<div class="product-filter">
								<header class="product-filter-head hidden-phone">Product Category</header>
								<header class="product-filter-head visible-phone" data-toggle="collapse" data-target="#product-caregory">Product Category<i class="icon-angle-down icon-large pull-right"></i></header>

								<ul id="product-caregory" class="nav collapse">									
									<li class="filter-options"><a class="page-branding text-brand" href="#">Hot Water Units</a><a data-toggle="collapse" href="#product-caregory-sub">Change</a></li>
								</ul>

								<ul id="product-caregory-sub" class="subnav collapse">
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

							<div class="product-filter">
								<header class="product-filter-head hidden-phone">Product Type</header>
								<header class="product-filter-head visible-phone" data-toggle="collapse" data-target="#product-type">Product Type<i class="icon-angle-down icon-large pull-right"></i></header>

								<ul id="product-type" class="nav collapse">
									<li><a href="#">Continuous flow</a></li>
									<li><a href="#">Electric Storage</a></li>
									<li><a href="#">Gas Storage</a></li>
									<li><a href="#">Evacuated Tube Solar</a></li>
									<li><a href="#">Solar - Gas Boosted</a></li>
									<li><a href="#">Solar - Electric Boosted</a></li>
								</ul>
							</div>	

							<div class="product-filter">
								<header class="product-filter-head hidden-phone">Brand</header>
								<header class="product-filter-head visible-phone" data-toggle="collapse" data-target="#trends">Brand<i class="icon-angle-down icon-large pull-right"></i></header>

								<ul id="trends" class="nav collapse">
									<li><a href="#">Thermann</a></li>
									<li><a href="#">Everhot</a></li>
								</ul>
							</div>							

						</aside>

						<section class="products-content span9">
							<h2>Hot Water Units</h2>
							<div id="products-carousel" class="carousel slide carousel-hover hidden-phone">
						        <div class="carousel-inner">
						            
								    <div class="active item">
								        <a href="/the-block">
								            <img src="/assets/images/products_2013/products-bathroom-be-free.jpg" alt="Be Free" />
								        </a>
								    </div>

								    <div class="item">
								        <a href="/the-block">
								            <img src="/assets/images/products_2013/products-bathroom-be-free.jpg" alt="Be Free" />
								        </a>
								    </div>
						            
						        </div>
						        <!-- Carousel nav -->
						        <a class="carousel-control left" href="#products-carousel" data-slide="prev">‹</a>
						        <a class="carousel-control right" href="#products-carousel" data-slide="next">›</a>
						    </div>

						    <p>The hot water unit is the engine room of every bathroom. That’s why we want to ensure you have the right hot water unit to suit your customers needs. Whether you’re looking for a gas storage, continuous flow or solar unit or even a heat pump we’ve got you covered.</p>

						    <div class="sort-filter clearfix">
								<div class="dropdown pull-right">
									<a class="dropdown-toggle" id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="/page.html">
										Sort by
										<b class="caret"></b>
									</a>
									<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
										<li role="filter"><a href="#">Price</a></li>
										<li role="filter"><a href="#">Most Popular</a></li>
										<li role="filter"><a href="#">Newest Releases</a></li>
										<li role="filter"><a href="#">Our Picks</a></li>									
									</ul>
								</div>
								<hr>
						    </div>

					    	<div class="products-list">
							    <div class="row-fluid">
							    	<div class="product-block span3">
							    		<span class="page-branding sale-branding"></span>
										<a href="#"><img src="/assets/images/products_2013/products-plumbing-hot-water-units-1.jpg" /></a>
										<div class="product-info">
											<h4>
												<a class="product-title" href="#">Caroma Pearl</a>
												<span class="product-desc">Freestanding bath</span>
												<span class="product-price">$xxx.xx</span>
											</h4>
										</div>
							    	</div>
							    	<div class="product-block span3">
							    		<a href="#"><img src="/assets/images/products_2013/products-plumbing-hot-water-units-1.jpg" /></a>
										<div class="product-info">
											<h4>
												<a class="product-title" href="#">Caroma Pearl</a>
												<span class="product-desc">Freestanding bath</span>
												<span class="product-price">$xxx.xx</span>
											</h4>
										</div>							    		
							    	</div>
							    	<div class="product-block span3">
							    		<a href="#"><img src="/assets/images/products_2013/products-plumbing-hot-water-units-1.jpg" /></a>
										<div class="product-info">
											<h4>
												<a class="product-title" href="#">Caroma Pearl</a>
												<span class="product-desc">Freestanding bath</span>
												<span class="product-price">$xxx.xx</span>
											</h4>
										</div>							    		
							    	</div>
							    	<div class="product-block span3">
							    		<a href="#"><img src="/assets/images/products_2013/products-plumbing-hot-water-units-1.jpg" /></a>
										<div class="product-info">
											<h4>
												<a class="product-title" href="#">Caroma Pearl</a>
												<span class="product-desc">Freestanding bath</span>
												<span class="product-price">$xxx.xx</span>
											</h4>
										</div>							    		
							    	</div>					    							    							    	
							    </div>
							    <div class="row-fluid">
							    	<div class="product-block span3">
										<a href="#"><img src="/assets/images/products_2013/products-plumbing-hot-water-units-1.jpg" /></a>
										<div class="product-info">
											<h4>
												<a class="product-title" href="#">Caroma Pearl</a>
												<span class="product-desc">Freestanding bath</span>
												<span class="product-price">$xxx.xx</span>
											</h4>
										</div>
							    	</div>
							    	<div class="product-block span3">
							    		<a href="#"><img src="/assets/images/products_2013/products-plumbing-hot-water-units-1.jpg" /></a>
										<div class="product-info">
											<h4>
												<a class="product-title" href="#">Caroma Pearl</a>
												<span class="product-desc">Freestanding bath</span>
												<span class="product-price">$xxx.xx</span>
											</h4>
										</div>							    		
							    	</div>
							    	<div class="product-block span3">
							    		<a href="#"><img src="/assets/images/products_2013/products-plumbing-hot-water-units-1.jpg" /></a>
										<div class="product-info">
											<h4>
												<a class="product-title" href="#">Caroma Pearl</a>
												<span class="product-desc">Freestanding bath</span>
												<span class="product-price">$xxx.xx</span>
											</h4>
										</div>							    		
							    	</div>
							    	<div class="product-block span3">
							    		<a href="#"><img src="/assets/images/products_2013/products-plumbing-hot-water-units-1.jpg" /></a>
										<div class="product-info">
											<h4>
												<a class="product-title" href="#">Caroma Pearl</a>
												<span class="product-desc">Freestanding bath</span>
												<span class="product-price">$xxx.xx</span>
											</h4>
										</div>							    		
							    	</div>					    							    							    	
							    </div>

							    <a class="more-products-button" href="javascript:void(0)">Show more units</span><span class="more-products-information">Viewing 1 - 25 of 350</span></a>

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
			$jsScriptPaths = [
				"/assets/js/jquery.lazyload.min.js",
				"/assets/js/bootstrap-transition.js", 
				"/assets/js/bootstrap-carousel.js",
				"/assets/js/bootstrap-collapse.js",
				"/assets/js/bootstrap-dropdown.js",
				"/assets/js/reece-ocnav.js",
				"/assets/js/reece-ajax-content-loader.js"
			]; 
		   	include_once($serverBase."/includes/foot/scripts.php");
		?>			

    </body>
</html>