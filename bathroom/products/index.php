
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
						<li class="active page-branding text-brand">Products</li>
					</ul>

				    <!-- CONTENT FOR MOBILE -->



				    <!-- CONTENT FOR DESKTOP -->

				    <div class="row-fluid">
						<aside class="span3">
							<div class="product-filter">
								<header class="product-filter-head hidden-phone">Product Category</header>
								<header class="product-filter-head visible-phone" data-toggle="collapse" data-target="#product-caregory">Product Category<i class="icon-angle-down icon-large pull-right"></i></header>

								<ul id="product-caregory" class="nav collapse">
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
						</aside>

						<section class="products-content span9">
							<div id="products-carousel" class="carousel slide carousel-hover hidden-phone">
						        <div class="carousel-inner">
						            
								    <div class="active item">
								        <a href="#">
								            <img src="/assets/images/products_2013/products-bathroom-be-free.jpg" alt="Be Free" />
								        </a>
								    </div>

								    <div class="item">
								        <a href="#">
								            <img src="/assets/images/products_2013/products-plumbing-fresh-approach-mobile.jpg" alt="Be Free" />
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
				"/assets/js/bootstrap-carousel.js",
				"/assets/js/bootstrap-collapse.js",
				"/assets/js/bootstrap-transition.js",
				"/assets/js/reece-ocnav.js"
			]; 
		   	include_once($serverBase."/includes/foot/scripts.php");
		?>			

    </body>
</html>