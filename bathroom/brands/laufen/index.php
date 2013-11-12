
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
				    	<div class="brandTabWrap">
					    	<ul class="brandTabList">
					    		<li class="active">
					    			<a href="#about" data-toggle="tab"> About Laufen</a>
					    		</li><li>
					    			<a href="#designers" data-toggle="tab">Our Designers</a>
					    		</li><li>
					    			<a href="#products" data-toggle="tab">Products</a>
					    		</li><li>
					    			<a href="#selector" data-toggle="tab">Selector</a>
					    		</li><li>
					    			<a href="#video" data-toggle="tab">Video</a>
					    		</li><li>
					    			<a href="#press" data-toggle="tab">Press</a>
					    		</li>
					    	</ul>
					    	<div class="tab-content brandTabContentWrap">
								<div class="tab-pane fade in active" id="about">
									<div class="brandTabIntro">
										<h3>Creating Bathroom Culture Since 1892</h3>
										<p>
											At the heart of Swiss bathroom culture since 1892, the LAUFEN name is synonymous with beauty, craftsmanship and perfection of form qualities that continue to define LAUFEN as one of the world’s most desired bathroom brands. Partnering with outstanding architects and designers, LAUFEN creates bathroom products that express emotion, purity and harmony, while continually pushing the limits of technical possibility to create ground-breaking new ideas expressed through ceramics.
										</p>
									</div>
									<div class="row-fluid brandTabFeatures">
										<div class="span6">
											<article class="brandTabFeatureDesc">
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
										</div>

										<div class="span6">
											<div class="brandTabCarouselWrap">
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
								</div><!-- /#about -->
								<div class="tab-pane fade" id="designers">
									<div class="brandTabIntro">
										<h3>Designed Like No Other</h3>
										<p>Partnering with outstanding architects and designers, LAUFEN creates bathroom products that express emotion, purity and harmony.</p>									
									</div>
									<?php
										for($i=0; $i <3; $i++){
											?>
											<article class="designerInfoWrap">
												<div class="row-fluid">
													<div class="span4">
														<div class="designerInfoThumb">
															<img src="/assets/images/hz-brand/stefano.jpg" alt="Stefano" />
															<a class="viewRangeLink">
																View this Range
															</a>
														</div>													
													</div>
													<div class="span8">
														<div class="designerInfoContent">
															<h4>Stefano Giovannoni</h4>
															<div>
																<p>
																	The expressive creations of award winning designer and architect, Stefano Giovannoni, have cast a spell over the design world for many years. His works even form part of a permanent archive at the Museum of Modern Art in New York. Stefano has collaborated with many famous names and none bigger than Alessi – the king of designer homewares. For Alberto Alessi, Giovannoni is one of the few designers capable of combining the extraordinary with the popular. This is indeed the reason why he commissioned him to develop ALESSI’s first complete bathroom collection in conjunction with Laufen - ILBAGNOALESSI One. Characterised by organic forms that each speak the same sensuous design language, ILBAGNOALESSI One is a winner of Europe’s prestigious Design Plus Award. The gentle, rounded shapes of ILBAGNOALESSI One reflect the work of nature itself – inspired by the idea of a stone that has been smoothed by water over time.
																</p>
																<p>
																	<img src="/assets/images/hz-brand/rangeLogo.jpg" alt="Stefano" />
																</p>
																<p>
																	The works of award winning designer, Stefano Giovannoni, tell stories that fascinate and enthral with their beautiful narrative qualities.
																</p>
															</div>
														</div>									    		
													</div>														
												</div>
											</article>
											<?php
										}
									?>
								</div><!-- /#designers -->
								<div class="tab-pane fade" id="products">
									<p>Products</p>
								</div><!-- /#products -->
								<div class="tab-pane fade" id="selector">
									<p>Selector</p>
								</div><!-- /#selector -->
								<div class="tab-pane fade" id="video">
									<div class="brandTabIntro">
										<h3>Video</h3>
									</div>
									<?php
										for($i=0; $i <3; $i++){
											?>
											<div class="row-fluid">

												<?php
													for($j=0; $j <3; $j++){
														?>
														<div class="span4">
															<img src="http://reece.trout.com.au/responsive_2012/assets/images/moments/still-number-one-thumb.jpg" alt="Im her number one">
														</div>
														<?php
													}
												?>											
											</div>
											<?php
										}
									?>
								</div><!-- /#video -->
								<div class="tab-pane fade" id="press">
									<div class="brandTabIntro">
										<h3>In the Press</h3>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit vivamus feugiat nisl a erat adipiscing bibendum. 
										</p>										
									</div>
									<ul class="brandPressReleases">										
									<?php
										for($j=0; $j < 5; $j++){
											?>
											<li>
												<div class="brandPressDate">
													<time datetime="2013-11"><span>Nov</span><span>2013</span></time>
												</div>
												<div class="brandPressDesc">
													<h4>Inside Out Magazine</h4>
													<p>Products lorem ipsum dolor sit amet, consectetur adipiscing elit vivamus feugiat.</p>
												</div>
												<div class="brandPressDownloadLink">
													<a href="#" class="brandPressDownloadLink"><i class="icon-download icon-large"></i> Download PDF</a>
												</div>
											</li>
											<?php
										}
									?>
									</ul>									
								</div><!-- /#press -->
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
				$('.carousel').carousel()
				$('a[data-toggle="tab"]').on('shown', function (e) {
					var targetEl = e.target;
					if(targetEl.href.substring(targetEl.href.indexOf('#')+1) == "about")
					{
						$('#productCarousel').show();
					}
					else
					{
						$('#productCarousel').hide();
					}
				})				
			})
		</script>
    </body>
</html>