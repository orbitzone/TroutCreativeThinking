
	<?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>

	<?php 
	  	$cssScriptPaths = array(
	  		"/assets/css/reece-products.css",
	  		"/assets/css/reece-bathrooms.css"			
	  	); 
	  	include_once($serverBase."/includes/head/head-generic.php");
	?>		

    <body>
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
						<li><a href="#">Brands</a> <span class="divider">/</span></li>
						<li class="active page-branding text-brand">Laufen</li>
					</ul>

				    <!-- CONTENT FOR DESKTOP -->
				    <section class="brandPage">
				    	<h2 class="brandImageWrap">
				    		<img src="/assets/images/laufen-logo.png" alt="Laufen" />
				    	</h2>
				    	<img src="/assets/images/hz-brand/brandCarousel1.jpg" alt="Laufen" />
				    	<div class="brandTabWrap">
					    	<ul class="brandTabList">
					    		<li class="active">
					    			<a> About Laufen</a>
					    		</li><li>
					    			<a>Our Designers</a>
					    		</li><li>
					    			<a>Products</a>
					    		</li><li>
					    			<a>Selector</a>
					    		</li><li>
					    			<a> Video</a>
					    		</li><li>
					    			<a>Press</a>
					    		</li>				    						    						    						    						    		
					    	</ul>
					    	<div class="brandTabContentWrap">
					    		<div class="brandTabContent">
					    			<div class="brandTabIntro">
							    		<h3>Creating Bathroom Culture Since 1892</h3>
							    		<p>
							    			At the heart of Swiss bathroom culture since 1892, the LAUFEN name is synonymous with beauty, craftsmanship and perfection of form qualities that continue to define LAUFEN as one of the world’s most desired bathroom brands. Partnering with outstanding architects and designers, LAUFEN creates bathroom products that express emotion, purity and harmony, while continually pushing the limits of technical possibility to create ground-breaking new ideas expressed through ceramics.
							    		</p>
						    		</div>
						    		<div class="row-fluid brandTabFeatures">
										<article class="span6">
											<h4>Swissness</h4>
											<p>‘Swissness’ is a word that defines LAUFEN’s innovative approach to creating beautiful bathroom ceramics. It stands for many different things, but always embraces the concepts of outstanding quality, superb design, precise engineering and a passion 
											for environmental sustainability.</p>

											<h4>Quality</h4>
											<p>LAUFEN continually pushes the limits of technical possibility to create ground-breaking new ideas expressed through ceramics. Sophisticated production processes are balanced with a human touch. Each piece is hand finished to ensure the highest standards of finish are achieved.</p>

											<h4>Design</h4>
											<p>At LAUFEN, design is at the heart of every product. LAUFEN 
											treats ceramics as an art form, collaborating with many of the world’s leading international architects and designers to make exciting new concepts a reality. Each design is brought to life 
											using only natural raw materials such as china clay and quartz.</p>
										</article>
										<div class="span6">
											<div class="introVideoWrap">
												<a title="Watch Video">
													<img src="http://reece.trout.com.au/responsive_2012/assets/images/moments/still-number-one-thumb.jpg" alt="Im her number one">
												</a>
												<span class="">Pillars</span>
												<h5>Lorem Libero Vulputate </h5>
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
											</div>
											<div class="introBrochureWrap">
												<a href="#">
													<i class="icon-download icon-large"></i>
													<strong>Laufen Brochures</strong>
													<small>Download pdf document</small>
												</a>
												
											</div>

										</div>				    		
						    		</div>
					    		</div>
					    	</div>
				    	</div>
				    </section>

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
		  		"/assets/js/bootstrap-transition.js", 
		  		"/assets/js/bootstrap-carousel.js",
		  		"/assets/js/bootstrap-collapse.js",
		  		"/assets/js/bootstrap-tab.js",
		  		"/assets/js/bootstrap-dropdown.js",
		  		"/assets/js/reece-ocnav.js",
		  		"/assets/js/reece-carousel.js",
		  	); 
		  	include_once($serverBase."/includes/foot/scripts.php");
		?>				

    </body>
</html>