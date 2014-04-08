
	<?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>

	<?php 
		$cssScriptPaths = [
			"/assets/css/reece-products.css",
			"/assets/css/reece-bathrooms.css"			
		]; 
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
						<li><a href="#">Bathroom</a> <span class="divider">/</span></li>
						<li class="active page-branding text-brand">Brands</li>
					</ul>

				    <!-- CONTENT FOR MOBILE -->

			    	<div id="products-mobile-carousel" data-bs-carousel="carousel" data-bs-carousel-interval="0" class="carousel slide visible-phone">
				    	<div class="carousel-inner">
				    		<div class="item">
								<a href="#">
									<img src="http://placehold.it/730x500" alt="Place holder">
								</a>
				    		</div>
				    		<div class="item active">
								<a href="#">
									<img src="http://placehold.it/730x500" alt="Place holder">
								</a>
				    		</div>
				    	</div>

						<a class="carousel-control left" href="#products-mobile-carousel" data-slide="prev">‹</a>
						<a class="carousel-control right" href="#products-mobile-carousel" data-slide="next">›</a>
		    		</div>

				    <!-- CONTENT FOR DESKTOP -->

				    <div class="row-fluid">

						<aside class="span3">
							<form id="filter-form" class="product-filter dynamic-filter" method="POST">
								<header class="product-filter-head">Product Category</header>
								<ul id="product-type" class="nav clearfix">
									<li><label for="accessories"><input id="accessories" name="accessories" value="accessories" type="checkbox">Accessories</label></li>
									<li><label for="toilets"><input id="toilets" name="toilets" value="toilets" type="checkbox">Toilets</label></li>
									<li><label for="basins"><input id="basins" name="basins" value="basins" type="checkbox">Basins</label></li>
									<li><label for="tapware"><input id="tapware" name="tapware" value="tapware" type="checkbox">Tapware</label></li>
									<li><label for="baths-and-spas"><input id="baths-and-spas" name="baths-and-spas" value="baths-and-spas" type="checkbox">Baths & Spas</label></li>
									<li><label for="showers"><input id="showers" name="showers" value="showers" type="checkbox">Showers</label></li>
									<li><label for="vanity-furniture"><input id="vanity-furniture" name="vanity-furniture" value="vanity-furniture" type="checkbox">Vanity Furniture</label></li>
									<li><label for="wastes"><input id="wastes" name="wastes" value="wastes" type="checkbox">Wastes</label></li>
									<li><label for="commercial"><input id="commercial" name="commercial" value="commercial" type="checkbox">Commercial</label></li>
								</ul>
							</form>								
						</aside>

						<section class="products-content span9">

							<div id="products-content" class="collapse in">

								<h2>Brands</h2>
								<div id="products-carousel" class="carousel slide carousel-hover hidden-phone" data-bs-carousel="carousel" data-bs-carousel-interval="0">
							        <div class="carousel-inner">
							            
									    <div class="active item">
									        <a href="/the-block">
									            <img src="http://placehold.it/970x334" alt="Place holder">
									        </a>
									    </div>

									    <div class="item">
									        <a href="/the-block">
									            <img src="http://placehold.it/970x334" alt="Place holder">
									        </a>
									    </div>
							            
							        </div>
							        <!-- Carousel nav -->
							        <a class="carousel-control left" href="#products-carousel" data-slide="prev">‹</a>
							        <a class="carousel-control right" href="#products-carousel" data-slide="next">›</a>
							    </div>

								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

							</div>						    

						    <div id="item-list" class="brands-list">

							    <div class="row-fluid">
							    	<div class="brand-block span6">
										<h3 class="brand-title">
											<a href="#">Laufen</a>
										</h3>							    		
										<a class="brand-media" href="#"><img src="http://placehold.it/165x165"></a>
										<p>
											At the heart of Swiss bathroom culture since 1892, the LAUFEN name is synonymous with beauty, craftsmanship and perfection of form – qualities that continue to define LAUFEN as one of the world’s most desired bathroom brands.
											Partnering with outstanding architects and designers.
										</p>
							    	</div>
							    	<div class="brand-block span6">
										<h3 class="brand-title">
											<a href="#">Roca</a>
										</h3>								    		
							    		<a class="brand-media" href="#"><img src="http://placehold.it/165x165"></a>					    		
										<p>
											A new bathroom experience - Inspired by design and driven by the passion of its Spanish heritage, Roca has been shaping bathroom design for over 90 years. A world leader operating in over 135 markets, Roca is always at the 
											forefront of bathroom trends.
										</p>					    		
							    	</div>				    							    							    	
							    </div>

							    <div class="row-fluid">
							    	<div class="brand-block span6">
										<h3 class="brand-title">
											<a href="#">Caroma</a>
										</h3>							    		
										<a class="brand-media" href="#"><img src="http://placehold.it/165x165"></a>
										<p>
											Caroma's two basin ranges can bring their own personalities to your bathroom. The Pearl collection of toilets, baths and basins is beautiful, sophisticated and created to deliver outstanding performance. 
										</p>
							    	</div>
							    	<div class="brand-block span6">
										<h3 class="brand-title">
											<a href="#">Whitestone</a>
										</h3>								    		
							    		<a class="brand-media" href="#"><img src="http://placehold.it/165x165"></a>					    		
										<p>
											White Stone is intensely focused on the challenge of innovation and design. Our answer is the creation of splendidly unique wash-basins.
										</p>					    		
							    	</div>				    							    							    	
							    </div>

							    <div class="row-fluid">
							    	<div class="brand-block span6">
										<h3 class="brand-title">
											<a href="#">Axa</a>
										</h3>							    		
										<a class="brand-media" href="#"><img src="http://placehold.it/165x165"></a>
										<p>
											Crafted within its Civita Castellana studios in Italy, Axa by Unoceramica takes bathroom product design in a bold new direction - a series of strikingly innovative pieces. Each defined by beautiful forms and 
											stunning lines. Embrace the spirit of Italian design.
										</p>
							    	</div>
							    	<div class="brand-block span6">
										<h3 class="brand-title">
											<a href="#">Kado</a>
										</h3>								    		
							    		<a class="brand-media" href="#"><img src="http://placehold.it/165x165"></a>					    		
										<p>
											Kado basins set the standard in modern design. Characterised by lines as natural as the water that flows through them, the Kado basin collection continues an outstanding tradition of inspired design. Each 
											individual piece has been effortlessly sculpted, awakening the spirit with each new day.
										</p>					    		
							    	</div>				    							    							    	
							    </div>		
							    
							    <div class="row-fluid">
							    	<div class="brand-block span6">
										<h3 class="brand-title">
											<a href="#">Alape</a>
										</h3>							    		
										<a class="brand-media" href="#"><img src="http://placehold.it/165x165"></a>
										<p>
											Alape brings more than 100 years of manufacturing experience to the creation of each piece of bathroom design. Since pioneering glassed steel enamelling for basins in the 1920s Alape have gone on to become a 
											world leader in the development of this technology.
										</p>
							    	</div>
							    	<div class="brand-block span6">
										<h3 class="brand-title">
											<a href="#">Porcher</a>
										</h3>								    		
							    		<a class="brand-media" href="#"><img src="http://placehold.it/165x165"></a>					    		
										<p>
											Building and renovating can be full of surprises. But when it comes to your new bathroom, there is one thing you can always rely on - Porcher.
										</p>					    		
							    	</div>				    							    							    	
							    </div>		

							    <div class="row-fluid">
							    	<div class="brand-block span6">
										<h3 class="brand-title">
											<a href="#">Posh</a>
										</h3>							    		
										<a class="brand-media" href="#"><img src="http://placehold.it/165x165"></a>
										<p>
											Sometimes the bathroom is your only escape in a busy home. And while you're there, you want it to be as relaxing and comfortable as possible. Posh toilets and basins offer you just that. Inviting designs that you can enjoy everyday.
										</p>
							    	</div>
							    	<div class="brand-block span6">
										<h3 class="brand-title">
											<a href="#">Sonia</a>
										</h3>								    		
							    		<a class="brand-media" href="#"><img src="http://placehold.it/165x165"></a>					    		
										<p>
											When outstanding craftsmanship and creativity come together, the result is always impressive. From the famous spanish design studios of sonia come examples of such excellence.
										</p>					    		
							    	</div>				    							    							    	
							    </div>

							    <div class="row-fluid">
							    	<div class="brand-block span6">
										<h3 class="brand-title">
											<a href="#">Ideal Standard</a>
										</h3>							    		
										<a class="brand-media" href="#"><img src="http://placehold.it/165x165"></a>
										<p>
											There are few things in life more satisfying than being relaxed in your own space - feeling like you belong. And you deserve that feeling everyday. As Europe's leading bathroom brand, Ideal Standard’s vision has always been to create 
											individual spaces that offer the freedom of personal expression. 
										</p>
							    	</div>
							    	<div class="brand-block span6">
										<h3 class="brand-title">
											<a href="#">Omvivo</a>
										</h3>								    		
							    		<a class="brand-media" href="#"><img src="http://placehold.it/165x165"></a>					    		
										<p>
											A collection of elegant bathroom pieces from Omvivo, designed to turn an everyday routine into a luxurious experience. This exclusive range offers the ultimate in design and quality for both contemporary and classic bathrooms, producing 
											a beautiful and unique environment every time.
										</p>				    		
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
				"/assets/js/micro-template.js",
				"/assets/js/reece-ajax-filter.js",
				"/assets/js/reece-ocnav.js",
				"/assets/js/reece-carousel.js",
				"/assets/js/reece-products.js"
			]; 
		   	include_once($serverBase."/includes/foot/scripts.php");
		?>		

		<script type="text/html" id="filter_block_template">

	    	<div class="brand-block span6">
				<h3 class="brand-title">
					<a href="#"><%=title%></a>
				</h3>							    		
				<a class="brand-media" href="#"><img src="<%=media%>"></a>
				<p>
					<%=content%>
				</p>
	    	</div>

		</script>					

    </body>
</html>