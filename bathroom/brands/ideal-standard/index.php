
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
						<li><a href="<?php print $pageLinks['Bathroom Products']; ?>">Brands</a> <span class="divider">/</span></li>
						<li class="active page-branding text-brand">Ideal Standard</li>
					</ul>

				    <!-- CONTENT FOR DESKTOP -->

					<section class="products-content">
						<img src="http://placehold.it/1600x459" alt="Laufen">
						<p class="product-lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</section>

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

			    	<h3>Basins</h3>
				    	
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

				    <hr>

			    	<h3>Toilets</h3>
				    	
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