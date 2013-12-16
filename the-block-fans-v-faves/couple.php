
	<?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>

	<?php 
	  	$cssScriptPaths = array(
	  		"/assets/css/reece-products.css",
	  		"/assets/css/reece-bathrooms.css",
	  		"/assets/css/reece-bathrooms-the-block-fansVfaves.css"		
	  	); 
	  	include_once($serverBase."/includes/head/head-generic.php");
	?>		

    <body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>    
		<div class="ocmain-wrapper">
			<div class="navbar navbar-fixed-top topNav">
			<?php 
				$genericNavActiveMenuItem = "Bathrooms";
					include_once($serverBase."/includes/nav/nav-generic.php");
			?>
			<?php 
					include_once($serverBase."/includes/banners/banner-happyzone.php");
			?>	
			</div>
		    <div class="content-container">
				<div class="inner-wrapper">
				<!-- content here -->
					<div class="main-wrapper">
						<div class="row-fluid sub-header">
							<div class="span3 block-logo"> <a href="index.php"><img src="/assets/images/the-block-skyhigh/the-block-logo.jpg" /></a></div>
							<div class="span9">
								<h2>Reece on The Block</h2>
								<h3 class="pull-right">The biggest Block EVER is here, this time we are going higher than ever before!</h3>
							</div>
						</div>
						<div class="couple-profile">
							<h2>VIC – Bec &amp; George</h2>
							<p>Bio about the team to go here Or sed et vitas volorro vidigenis sundae possusciam reptatia pra nuscimi, sinimagnihic tes demque et iusae vit unditem.</p>
							<div class="row-fluid">
								<div class="span4 bottom-space"> <img src="http://placehold.it/320x200" /> </div>
								<div class="span4 bottom-space"> <img src="http://placehold.it/320x200" /> </div>
								<div class="span4 bottom-space"> <img src="http://placehold.it/320x200" /> </div>
							</div>
						</div>
						<div class="row-fluid">
							<div class="span7" id="room-thumbs">
								<h2> Room 1 </h2>
								<div id="MediaView"> <img class="heroImage" src="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_1.jpg">
									<div class="row-fluid room-caption bottom-space">
										<div class="span12">
											<p class="caption"> Caption 1 </p>
										</div>
									</div>
								</div>
								<div class="row-fluid">
									<div class="span4 bottom-space"> <a href="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_2.jpg" class="thumbnail" title="Caption 2"><img src="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_2.jpg"></a> </div>
									<div class="span4 bottom-space"> <a href="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_3.jpg" class="thumbnail" title="Caption 3"><img src="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_3.jpg"></a> </div>
									<div class="span4 bottom-space"> <a href="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_4.jpg" class="thumbnail" title="Caption 4"><img src="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_4.jpg"></a> </div>
								</div>
								<div class="row-fluid">
									<div class="span4 bottom-space"> <a href="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_1.jpg" class="thumbnail" title="Caption 1"><img src="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_1.jpg"></a> </div>
									<div class="span4 bottom-space"> <a href="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_PLAN.png" class="thumbnail" title="Floor Plan"><img src="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_PLAN.png"></a> </div>
								</div>
							</div>
							<div class="span5 related">
								<h3> Products featured in this bathroom </h3>
								<ul class="thumbnails media-thumbnails">
									<li class="span4"> <a href="http://www.reece.com.au/bathrooms/products/ideal-standard-tonic-toilet-roll-holder" title="more" class="thumbnail"><img src="http://www.reece.com.au/assets/product-images/_resampled/SetSize300300-9500978.jpg" alt="thumb"></a>
										<h6 class="hidden-phone"> Ideal Standard Tonic Toilet Roll Holder </h6>
									</li>
									<li class="span4"> <a href="http://www.reece.com.au/bathrooms/products/ideal-standard-tonic-glass-shelf" title="more" class="thumbnail"><img src="http://www.reece.com.au/assets/product-images/_resampled/SetSize300300-9500981.jpg" alt="thumb"></a>
										<h6 class="hidden-phone"> Ideal Standard Tonic Glass Shelf </h6>
									</li>
									<li class="span4"> <a href="http://www.reece.com.au/bathrooms/products/caroma-pearl-btw-inwall-toilet-pan" title="more" class="thumbnail"><img src="http://www.reece.com.au/assets/product-images/_resampled/SetSize300300-9503593.jpg" alt="thumb"></a>
										<h6 class="hidden-phone"> Caroma Pearl BTW Inwall Toilet Pan </h6>
									</li>
									<li class="span4"> <a href="http://www.reece.com.au/bathrooms/products/methven-aroha-shower-mixer" title="more" class="thumbnail"><img src="http://www.reece.com.au/assets/product-images/_resampled/SetSize300300-2285431.jpg" alt="thumb"></a>
										<h6 class="hidden-phone"> Methven Aroha Shower Mixer </h6>
									</li>
								</ul>
							</div>
						</div>
						<div class="row-fluid">
							<div class="span7" id="room-thumbs">
								<h2> Room 2 </h2>
								<div id="MediaView"> <img class="heroImage" src="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_1.jpg">
									<div class="row-fluid room-caption bottom-space">
										<div class="span12">
											<p class="caption"> Caption 1 </p>
										</div>
									</div>
								</div>
								<div class="row-fluid">
									<div class="span4 bottom-space"> <a href="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_2.jpg" class="thumbnail" title="Caption 2"><img src="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_2.jpg"></a> </div>
									<div class="span4 bottom-space"> <a href="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_3.jpg" class="thumbnail" title="Caption 3"><img src="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_3.jpg"></a> </div>
									<div class="span4 bottom-space"> <a href="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_4.jpg" class="thumbnail" title="Caption 4"><img src="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_4.jpg"></a> </div>
								</div>
								<div class="row-fluid">
									<div class="span4 bottom-space"> <a href="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_1.jpg" class="thumbnail" title="Caption 1"><img src="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_1.jpg"></a> </div>
									<div class="span4 bottom-space"> <a href="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_PLAN.png" class="thumbnail" title="Floor Plan"><img src="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_PLAN.png"></a> </div>
								</div>
							</div>
							<div class="span5 related">
								<h3> Products featured in this bathroom </h3>
								<ul class="thumbnails media-thumbnails">
									<li class="span4"> <a href="http://www.reece.com.au/bathrooms/products/ideal-standard-tonic-toilet-roll-holder" title="more" class="thumbnail"><img src="http://www.reece.com.au/assets/product-images/_resampled/SetSize300300-9500978.jpg" alt="thumb"></a>
										<h6 class="hidden-phone"> Ideal Standard Tonic Toilet Roll Holder </h6>
									</li>
									<li class="span4"> <a href="http://www.reece.com.au/bathrooms/products/ideal-standard-tonic-glass-shelf" title="more" class="thumbnail"><img src="http://www.reece.com.au/assets/product-images/_resampled/SetSize300300-9500981.jpg" alt="thumb"></a>
										<h6 class="hidden-phone"> Ideal Standard Tonic Glass Shelf </h6>
									</li>
									<li class="span4"> <a href="http://www.reece.com.au/bathrooms/products/caroma-pearl-btw-inwall-toilet-pan" title="more" class="thumbnail"><img src="http://www.reece.com.au/assets/product-images/_resampled/SetSize300300-9503593.jpg" alt="thumb"></a>
										<h6 class="hidden-phone"> Caroma Pearl BTW Inwall Toilet Pan </h6>
									</li>
									<li class="span4"> <a href="http://www.reece.com.au/bathrooms/products/methven-aroha-shower-mixer" title="more" class="thumbnail"><img src="http://www.reece.com.au/assets/product-images/_resampled/SetSize300300-2285431.jpg" alt="thumb"></a>
										<h6 class="hidden-phone"> Methven Aroha Shower Mixer </h6>
									</li>
								</ul>
							</div>
						</div>
						<div class="row-fluid">
							<div class="span7" id="room-thumbs">
								<h2> Room 3 </h2>
								<div id="MediaView"> <img class="heroImage" src="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_1.jpg">
									<div class="row-fluid room-caption bottom-space">
										<div class="span12">
											<p class="caption"> Caption 1 </p>
										</div>
									</div>
								</div>
								<div class="row-fluid">
									<div class="span4 bottom-space"> <a href="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_2.jpg" class="thumbnail" title="Caption 2"><img src="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_2.jpg"></a> </div>
									<div class="span4 bottom-space"> <a href="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_3.jpg" class="thumbnail" title="Caption 3"><img src="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_3.jpg"></a> </div>
									<div class="span4 bottom-space"> <a href="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_4.jpg" class="thumbnail" title="Caption 4"><img src="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_4.jpg"></a> </div>
								</div>
								<div class="row-fluid">
									<div class="span4 bottom-space"> <a href="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_1.jpg" class="thumbnail" title="Caption 1"><img src="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_1.jpg"></a> </div>
									<div class="span4 bottom-space"> <a href="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_PLAN.png" class="thumbnail" title="Floor Plan"><img src="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_PLAN.png"></a> </div>
								</div>
							</div>
							<div class="span5 related">
								<h3> Products featured in this bathroom </h3>
								<ul class="thumbnails media-thumbnails">
									<li class="span4"> <a href="http://www.reece.com.au/bathrooms/products/ideal-standard-tonic-toilet-roll-holder" title="more" class="thumbnail"><img src="http://www.reece.com.au/assets/product-images/_resampled/SetSize300300-9500978.jpg" alt="thumb"></a>
										<h6 class="hidden-phone"> Ideal Standard Tonic Toilet Roll Holder </h6>
									</li>
									<li class="span4"> <a href="http://www.reece.com.au/bathrooms/products/ideal-standard-tonic-glass-shelf" title="more" class="thumbnail"><img src="http://www.reece.com.au/assets/product-images/_resampled/SetSize300300-9500981.jpg" alt="thumb"></a>
										<h6 class="hidden-phone"> Ideal Standard Tonic Glass Shelf </h6>
									</li>
									<li class="span4"> <a href="http://www.reece.com.au/bathrooms/products/caroma-pearl-btw-inwall-toilet-pan" title="more" class="thumbnail"><img src="http://www.reece.com.au/assets/product-images/_resampled/SetSize300300-9503593.jpg" alt="thumb"></a>
										<h6 class="hidden-phone"> Caroma Pearl BTW Inwall Toilet Pan </h6>
									</li>
									<li class="span4"> <a href="http://www.reece.com.au/bathrooms/products/methven-aroha-shower-mixer" title="more" class="thumbnail"><img src="http://www.reece.com.au/assets/product-images/_resampled/SetSize300300-2285431.jpg" alt="thumb"></a>
										<h6 class="hidden-phone"> Methven Aroha Shower Mixer </h6>
									</li>
								</ul>
							</div>
						</div>

<div class="">
	<h4> Other Teams </h4>
	<div class="row-fluid">
	<div class="related-room bottom-space span3"> <a href="#"><img src="http://placehold.it/400x200"></a>
		<div >
			<h4><a href="#"> Team 1 </a></h4>

		</div>
	</div>
	<div class="related-room bottom-space span3"> <a href="#"><img src="http://placehold.it/400x200"></a>
		<div >
			<h4> <a href="#">Team 2</a></h4>
		</div>
	</div>
	<div class="related-room bottom-space span3"> <a href="#"><img src="http://placehold.it/400x200"></a>
		<div >
			<h4> <a href="#">Team 3 </a></h4>

		</div>
	</div>
	<div class="related-room bottom-space span3"> <a href="#"><img src="http://placehold.it/400x200"></a>
		<div >
			<h4> <a href="#">Team 4</a> </h4>

		</div>
	</div>
	</div>
</div>																	
						<div class="bottom-space">
							<div class="fb-comments" data-href="http://example.com/comments" data-numposts="1" data-colorscheme="light"></div>
						</div>
					</div>


				</div>
		    </div>

			<?php 
			   	include_once($serverBase."/includes/foot/foot-generic.php");
			?>		

		</div>

	   	<?php
		   	include_once($serverBase."/includes/nav/nav-mobile.php");
		?>	

		<?php 
		  	$jsScriptPaths = array(
				"/assets/js/jquery.mobile.custom.min.js",		  		
		  		"/assets/js/jquery.lazyload.min.js",
		  		"/assets/js/bootstrap-transition.js", 
		  		"/assets/js/bootstrap-carousel.js",
		  		"/assets/js/bootstrap-collapse.js",
		  		"/assets/js/bootstrap-dropdown.js",
		  		"/assets/js/reece-ocnav.js",
		  		"/assets/js/reece-carousel.js",
		  		"/assets/js/fancybox/jquery.fancybox.js",
		  		"/assets/js/reece-the-block-skyhigh.js"		  		
		  	); 
		  	include_once($serverBase."/includes/foot/scripts.php");
		?>			

    </body>
</html>