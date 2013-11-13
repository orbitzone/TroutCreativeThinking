
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
						<li class="pull-right visible-desktop">
							<div class="dropdown locationDropDown  pull-right">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">
									<i class="icon-map-marker icon">&nbsp;</i>
									<span class="location">Collingwood 3066</span>
									<span class="caret"></span>
								</a>
								<div class="dropdown-menu">
								<input type="text" placeholder="New Location">
									<ul>
										<li><a href="#">Collingwood</a></li>
										<li><a href="#">Richmond</a></li>
										<li><a href="#">Hawthorn</a></li>
										<li><a href="#">Toorak</a></li>
									</ul>						
								</div>
							</div>						
							<form class="headerNavSearchForm">
								<label for="headerSearchInput"><i class="icon-search icon">&nbsp;</i></label>
								<input type="search" id="headerSearchInput" placeholder="Search">
							</form>
						</li>
					</ul>

				    <!-- CONTENT FOR DESKTOP -->
				    <section class="brandPage">
				    	<h2 class="brandImageWrap">
				    		<img src="/assets/images/hz-brand/laufen-logo.png" alt="Laufen" />
				    	</h2>
				    	
						<div id="productCarousel" class="carousel slide">
						  <ol class="carousel-indicators">
						    <li data-target="#productCarousel" data-slide-to="0" class="active"></li>
						    <li data-target="#productCarousel" data-slide-to="1"></li>
						  </ol>
						  <!-- Carousel items -->
						  <div class="carousel-inner">
						    <div class="active item"><img src="/assets/images/hz-brand/brandCarousel1.jpg" alt="Laufen" /></div>
						    <div class="item"><img src="/assets/images/hz-brand/brandCarousel2.jpg" alt="Laufen" /></div>
						  </div>
						  <!-- Carousel nav -->
						  <a class="carousel-control left" href="#productCarousel" data-slide="prev">&lsaquo;</a>
						  <a class="carousel-control right" href="#productCarousel" data-slide="next">&rsaquo;</a>
						</div>				    	
				    	<div class="brandWrap">
				    		<a id="showBrandMenu" class="visible-phone collapsed" data-toggle="collapse" href="#brandNav">Menu<span class="icon"><span class="caret"></span></span></a>
					    	<ul id="brandNav" class="brandList collapse">
					    		<li class="active">
					    			<a href="index.php" > About Laufen</a>
					    		</li><li>
					    			<a href="designers.php" >Our Designers</a>
					    		</li><li>
					    			<a href="products.php" >Products</a>
					    		</li><li>
					    			<a href="selector.php" >Selector</a>
					    		</li><li>
					    			<a href="video.php" >Video</a>
					    		</li><li>
					    			<a href="press.php" >Press</a>
					    		</li>
					    	</ul>
					    	<div class="brandContentWrap">
								<div class="brandContent" id="about">
									<div class="brandIntro">
										<h3>Creating Bathroom Culture Since 1892</h3>
										<p>
											At the heart of Swiss bathroom culture since 1892, the LAUFEN name is synonymous with beauty, craftsmanship and perfection of form qualities that continue to define LAUFEN as one of the world’s most desired bathroom brands. Partnering with outstanding architects and designers, LAUFEN creates bathroom products that express emotion, purity and harmony, while continually pushing the limits of technical possibility to create ground-breaking new ideas expressed through ceramics.
										</p>
									</div>
									<div class="row-fluid brandFeatures">
										<div class="span6">
											<article class="brandFeatureDesc">
												<h4 class="brandPageHeader">Swissness</h4>
												<p>‘Swissness’ is a word that defines LAUFEN’s innovative approach to creating beautiful bathroom ceramics. It stands for many different things, but always embraces the concepts of outstanding quality, superb design, precise engineering and a passion 
												for environmental sustainability.</p>

												<h4 class="brandPageHeader">Quality</h4>
												<p>LAUFEN continually pushes the limits of technical possibility to create ground-breaking new ideas expressed through ceramics. Sophisticated production processes are balanced with a human touch. Each piece is hand finished to ensure the highest standards of finish are achieved.</p>

												<h4 class="brandPageHeader">Design</h4>
												<p>At LAUFEN, design is at the heart of every product. LAUFEN 
												treats ceramics as an art form, collaborating with many of the world’s leading international architects and designers to make exciting new concepts a reality. Each design is brought to life 
												using only natural raw materials such as china clay and quartz.</p>
											</article>
										</div>

										<div class="span6">

											<div id="aboutBrandCarousel" class="carousel slide">
											  <!-- Carousel items -->
												<div class="carousel-inner">
													<div class="active item">
														<div class="brandCarouselWrap">
															<div class="videoThumbWrap">
																	<a class="videoThumb" title="Watch Video" href="http://www.youtube.com/embed/JnHXACIzeKk?rel=0" target="_blank">
																		<img src="http://www.reece.com.au/assets/pages/thumbnails/video-thumb-three-pillars.jpg" alt="Im her number one" />
																		<span class="playIconWrap">
																			<i class="icon-play icon-large"></i>
																		</span>
																	</a>
																<span class="videoThumbSubBrand">Pillars</span>
																<h4 class="brandPageHeader">Lorem Libero Vulputate </h4>
																<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
															</div>
															<div class="introBrochureDownloadWrap">
																<a class="introBrochureDownload" href="#">
																	<img src="/assets/images/hz-brand/brochure-front.png" alt="brochure" />
																	<span class="introBrochureDownloadText">
																		<i class="icon-download icon-large"></i>
																		<strong class="brandPageHeader">Laufen Brochures</strong>
																		<small>Download pdf document</small>																		
																	</span>
																</a>
															</div>
														</div>	
													</div>
													<div class="item">
														<div class="brandCarouselWrap">
															<div class="videoThumbWrap">
																	<a class="videoThumb" title="Watch Video" href="http://www.youtube.com/embed/231_3HKnAl4?rel=0" target="_blank">
																		<img src="http://www.reece.com.au/assets/pages/thumbnails/video-thumb-overview.jpg" alt="Im her number one" />
																		<span class="playIconWrap">
																			<i class="icon-play icon-large"></i>
																		</span>
																	</a>
																<span class="videoThumbSubBrand">Pillars</span>
																<h4 class="brandPageHeader">Lorem Libero Vulputate </h4>
																<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
															</div>
															<div class="introBrochureDownloadWrap">
																<a class="introBrochureDownload" href="#">
																	<img src="/assets/images/hz-brand/brochure-front.png" alt="brochure" />
																	<span class="introBrochureDownloadText">
																		<i class="icon-download icon-large"></i>
																		<strong class="brandPageHeader">Laufen Brochures</strong>
																		<small>Download pdf document</small>																		
																	</span>
																</a>
															</div>
														</div>													
													</div>
													<div class="item">
														<div class="brandCarouselWrap">
															<div class="videoThumbWrap">
																	<a class="videoThumb" title="Watch Video" href="http://www.youtube.com/embed/MeJRi35fh9Y?rel=0 " target="_blank">
																		<img src="http://www.reece.com.au/assets/pages/thumbnails/video-thumb-designers2.jpg" alt="Im her number one" />
																		<span class="playIconWrap">
																			<i class="icon-play icon-large"></i>
																		</span>
																	</a>
																<span class="videoThumbSubBrand">Pillars</span>
																<h4 class="brandPageHeader">Lorem Libero Vulputate </h4>
																<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
															</div>
															<div class="introBrochureDownloadWrap">
																<a class="introBrochureDownload" href="#">
																	<img src="/assets/images/hz-brand/brochure-front.png" alt="brochure" />
																	<span class="introBrochureDownloadText">
																		<i class="icon-download icon-large"></i>
																		<strong class="brandPageHeader">Laufen Brochures</strong>
																		<small>Download pdf document</small>																		
																	</span>
																</a>
															</div>
														</div>													
													</div>
												</div>
												<ol class="carousel-indicators">
													<li data-target="#aboutBrandCarousel" data-slide-to="0" class="active"></li>
													<li data-target="#aboutBrandCarousel" data-slide-to="1"></li>
													<li data-target="#aboutBrandCarousel" data-slide-to="2"></li>
												</ol>  
											</div>
										</div>
									</div>
								</div><!-- /#about -->
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
		<script type="text/javascript">
			$(function(){
				$('.carousel').carousel();
			})
		</script>
    </body>
</html>