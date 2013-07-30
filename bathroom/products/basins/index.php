
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
						<li class="active page-branding text-brand">Basins</li>
					</ul>

				    <!-- CONTENT FOR MOBILE -->

				    	<div id="products-mobile-carousel" data-bs-carousel="carousel" data-bs-carousel-interval="0" class="carousel slide visible-phone">
					    	<div class="carousel-inner">
					    		<div class="item">
									<a href="#">
										<img src="/assets/images/products_2013/products-plumbing-be-free-mobile.jpg" alt="Fresh Approach" />
									</a>
					    		</div>
					    		<div class="item active">
									<a href="#">
										<img src="/assets/images/products_2013/products-plumbing-be-free-mobile.jpg" alt="Fresh Approach" />
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
									<li class="filter-options"><a class="page-branding text-brand" href="#">Basins</a><a data-toggle="collapse" href="#product-caregory-sub">Change</a></li>
								</ul>

								<ul id="product-caregory-sub" class="subnav collapse">
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

							<div class="product-filter">
								<header class="product-filter-head hidden-phone">Product Type</header>
								<header class="product-filter-head visible-phone" data-toggle="collapse" data-target="#product-type">Product Type<i class="icon-angle-down icon-large pull-right"></i></header>

								<ul id="product-type" class="nav collapse">
									<li><a href="#">Counter</a></li>
									<li><a href="#">Wall Mounted</a></li>
									<li><a href="#">Floor Mounted</a></li>
									<li><a href="#">Semi Recessed</a></li>
								</ul>
							</div>	

							<div class="product-filter">
								<header class="product-filter-head hidden-phone">Trends</header>
								<header class="product-filter-head visible-phone" data-toggle="collapse" data-target="#trends">Trends<i class="icon-angle-down icon-large pull-right"></i></header>

								<ul id="trends" class="nav collapse">
									<li><a href="#">Day Spa</a></li>
									<li><a href="#">Hotel Inspired</a></li>
								</ul>
							</div>	

							<div class="product-filter">
								<header class="product-filter-head hidden-phone">Width</header>
								<header class="product-filter-head visible-phone" data-toggle="collapse" data-target="#width">Width<i class="icon-angle-down icon-large pull-right"></i></header>

								<ul id="width" class="nav collapse">
									<li><a href="#">< 500mm</a></li>
									<li><a href="#">500 - 700mm</a></li>
									<li><a href="#">> 700mm</a></li>									
								</ul>
							</div>	

							<div class="product-filter">
								<header class="product-filter-head hidden-phone">Taphones</header>
								<header class="product-filter-head visible-phone" data-toggle="collapse" data-target="#tapholes">Tapholes<i class="icon-angle-down icon-large pull-right"></i></header>

								<ul id="tapholes" class="nav collapse">
									<li><a href="#">0</a></li>
									<li><a href="#">1</a></li>
									<li><a href="#">2+</a></li>									
								</ul>
							</div>															

						</aside>

						<section class="products-content span9">
							<h2>Basins</h2>
							<div id="products-carousel" class="carousel slide carousel-hover hidden-phone" data-bs-carousel="carousel" data-bs-carousel-interval="0" >
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

						    <p>Your basin forms a natural centre piece in your bathroom and it will see plenty of use - so quality is as important as design. There are many practical and beautiful basins available. From the family friendly Posh range to the innovative and designer Alape collection, it is well worth taking the time to consider your ideal basin.</p>

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
										<a href="#"><img src="/assets/images/products_2013/products-bathroom-latest-product-1.jpg" /></a>
										<div class="product-info">
											<h4>
												<a class="product-title" href="#">Product</a>
												<span class="product-desc">Description</span>
												<span class="product-price">$xxx.xx</span>
											</h4>
										</div>
							    	</div>
							    	<div class="product-block span3">
							    		<a href="#"><img src="/assets/images/products_2013/products-bathroom-latest-product-1.jpg" /></a>
										<div class="product-info">
											<h4>
												<a class="product-title" href="#">Product</a>
												<span class="product-desc">Description</span>
												<span class="product-price">$xxx.xx</span>
											</h4>
										</div>							    		
							    	</div>
							    	<div class="product-block span3">
							    		<a href="#"><img src="/assets/images/products_2013/products-bathroom-latest-product-1.jpg" /></a>
										<div class="product-info">
											<h4>
												<a class="product-title" href="#">Product</a>
												<span class="product-desc">Description</span>
												<span class="product-price">$xxx.xx</span>
											</h4>
										</div>							    		
							    	</div>
							    	<div class="product-block span3">
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
							    <div class="row-fluid">
							    	<div class="product-block span3">
										<a href="#"><img src="/assets/images/products_2013/products-bathroom-latest-product-1.jpg" /></a>
										<div class="product-info">
											<h4>
												<a class="product-title" href="#">Product</a>
												<span class="product-desc">Description</span>
												<span class="product-price">$xxx.xx</span>
											</h4>
										</div>
							    	</div>
							    	<div class="product-block span3">
							    		<a href="#"><img src="/assets/images/products_2013/products-bathroom-latest-product-1.jpg" /></a>
										<div class="product-info">
											<h4>
												<a class="product-title" href="#">Product</a>
												<span class="product-desc">Description</span>
												<span class="product-price">$xxx.xx</span>
											</h4>
										</div>							    		
							    	</div>
							    	<div class="product-block span3">
							    		<a href="#"><img src="/assets/images/products_2013/products-bathroom-latest-product-1.jpg" /></a>
										<div class="product-info">
											<h4>
												<a class="product-title" href="#">Product</a>
												<span class="product-desc">Description</span>
												<span class="product-price">$xxx.xx</span>
											</h4>
										</div>							    		
							    	</div>
							    	<div class="product-block span3">
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

							    <a data-load-content="products" class="more-products-button" href="javascript:void(0)">Show more basins</span><span class="more-products-information">Viewing 1 - 25 of 350</span></a>

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
				"/assets/js/jquery.mobile.custom.min.js",
				"/assets/js/bootstrap-transition.js", 
				"/assets/js/bootstrap-carousel.js",
				"/assets/js/bootstrap-collapse.js",
				"/assets/js/bootstrap-dropdown.js",
				"/assets/js/reece-ocnav.js",
				"/assets/js/micro-template.js",
				"/assets/js/reece-ajax-content-loader.js",
				"/assets/js/reece-carousel.js"
			]; 
		   	include_once($serverBase."/includes/foot/scripts.php");
		?>

		<script type="text/html" id="product_block_template">

			<div class="product-block span3">
				<a href="#">
					<img src="<%=image%>">
				</a>
				<h4>
					<a class="product-title" href="#"><%=productTitle%></a>
					<span class="product-desc"><%=productDesc%></span>
					<span class="product-price"><%=productPrice%></span>
				</h4>
			</div>

		</script>				

    </body>
</html>