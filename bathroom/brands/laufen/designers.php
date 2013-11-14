
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
				    	<div class="brandWrap">
				    		<a id="showBrandMenu" class="visible-phone collapsed" data-toggle="collapse" href="#brandNav">Menu<span class="icon"><span class="caret"></span></span></a>
					    	<ul id="brandNav" class="brandList collapse">
					    		<li>
					    			<a href="index.php" > About Laufen</a>
					    		</li><li class="active">
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

								<div class="brandContent" id="designers">
									<div class="brandIntro">
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
														</div>													
													</div>
													<div class="span8">
														<div class="designerInfoContent">
															<h4>Stefano Giovannoni</h4>
															<div>
																<p>
																	The expressive creations of award winning designer and architect, Stefano Giovannoni, have cast a spell over the design world for many years. His works even form part of a permanent archive at the Museum of Modern Art in New York. Stefano has collaborated with many famous names and none bigger than Alessi – the king of designer homewares. For Alberto Alessi, Giovannoni is one of the few designers capable of combining the extraordinary with the popular. This is indeed the reason why he commissioned him to develop ALESSI’s first complete bathroom collection in conjunction with Laufen - ILBAGNOALESSI One. Characterised by organic forms that each speak the same sensuous design language, ILBAGNOALESSI One is a winner of Europe’s prestigious Design Plus Award. The gentle, rounded shapes of ILBAGNOALESSI One reflect the work of nature itself – inspired by the idea of a stone that has been smoothed by water over time.
																</p>
															<div class="brandProdRangeLogoWrap">
																<img class="brandImg" src="/assets/images/hz-brand/rangeLogo.jpg" alt="One ILBAGNOALESSI" />
																<a class="viewRangeLink" href="#">View this Range</a>
															</div>
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