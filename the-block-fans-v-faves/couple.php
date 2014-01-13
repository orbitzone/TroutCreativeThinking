
	<?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>

	<?php 
	  	$cssScriptPaths = array(
	  		"/assets/css/reece-products.css",
	  		"/assets/css/reece-bathrooms.css",
	  		"/assets/css/reece-bathrooms-the-block-fansVfaves.css"		
	  	); 
	  	include_once($serverBase."/includes/head/head-generic.php");
	?>		

    <body  class="fansVFaves">
    <div id="fb-root"></div>
	<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id))
		    return;
		js = d.createElement(s);
		js.id = id;
		js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
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
						<div class="backLink">
							<a href="/the-block-fans-v-faves"><i class="icon-caret-left icon-large">&nbsp;</i> <span>Back</span></a>
						</div>
						<div class="couplePageHeader">
							<div class="couplePageTheBlockLogo">
								<a href="/the-block-fans-v-faves"><img src="/assets/images/the-block-fans-V-faves/the-block-logo.png" /></a>
							</div>
							<div class="coupleProfile">						
								<div class="theBlockShadowBlocks shadowRight shadowLeft">
									<div class="theBlockShadowBlocksInner">
										<div class="coupleProfileThumb">
											<img src="/assets/images/the-block-fans-V-faves/couple1.jpg" alt="Couple" />
										</div>
										<div class="coupleProfileText">
											<h4 class="coupleNames">Name &amp; Name</h4>
											<p class="coupleCaption">Learn more about the products and inspiration behind it right here.</p>
											<p class="coupleDesc">orem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus cursus lectus, nec blandit nisie.orem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus cursus lectus, nec blandit nisie.</p>
										</div>
									</div>
								</div><!-- /.couple-profile -->							
							</div>
						</div>

								<div class="theBlockShadowBlocks shadowRight shadowLeft room-thumbs">
									<span class="roomSNo">1</span>
									<div class="theBlockShadowBlocksInner">

										<h2> Lorem ipsum dolor sit amet</h2>
										<div class="row-fluid">
											<div class="span10">
												<div class="MediaView hidden-phone">
													<img class="heroImage" src="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_1.jpg">
												</div>											
											</div>
											<div class="span2">
												<ul class="heroThumbs">
													<li><a href="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_1.jpg" class="thumbnail active" title="Caption 4"><img src="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_1.jpg"></a></li>
													<li><a href="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_2.jpg" class="thumbnail" title="Caption 2"><img src="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_2.jpg"></a></li>
													<li><a href="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_3.jpg" class="thumbnail" title="Caption 3"><img src="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_3.jpg"></a></li>
													<li><a href="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_4.jpg" class="thumbnail" title="Caption 4"><img src="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_4.jpg"></a></li>
													<li><a href="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_PLAN.png" class="thumbnail" title="Floor Plan"><img src="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_PLAN.png"></a> </li>													
												</ul>										
											</div>
										</div>
										<div class="featuredInBathroom">
											<h3> Products featured in this bathroom </h3>
											<ul class="thumbnails media-thumbnails">
												<li> <a href="http://www.reece.com.au/bathrooms/products/ideal-standard-tonic-toilet-roll-holder" title="more" class="thumbnail"><img src="http://www.reece.com.au/assets/product-images/_resampled/SetSize300300-9500978.jpg" alt="thumb"></a>
													<h6> Ideal Standard Tonic <small>Toilet Roll Holder </small></h6>
												</li>
												<li> <a href="http://www.reece.com.au/bathrooms/products/ideal-standard-tonic-glass-shelf" title="more" class="thumbnail"><img src="http://www.reece.com.au/assets/product-images/_resampled/SetSize300300-9500981.jpg" alt="thumb"></a>
													<h6> Ideal Standard Tonic <small>Glass Shelf</small> </h6>
												</li>
												<li> <a href="http://www.reece.com.au/bathrooms/products/caroma-pearl-btw-inwall-toilet-pan" title="more" class="thumbnail"><img src="http://www.reece.com.au/assets/product-images/_resampled/SetSize300300-9503593.jpg" alt="thumb"></a>
													<h6> Caroma Pearl BTW Inwall <small>Toilet Pan </small></h6>
												</li>
												<li> <a href="http://www.reece.com.au/bathrooms/products/methven-aroha-shower-mixer" title="more" class="thumbnail"><img src="http://www.reece.com.au/assets/product-images/_resampled/SetSize300300-2285431.jpg" alt="thumb"></a>
													<h6> Methven Aroha <small>Shower Mixer </small></h6>
												</li>
												<li> <a href="http://www.reece.com.au/bathrooms/products/ideal-standard-tonic-toilet-roll-holder" title="more" class="thumbnail"><img src="http://www.reece.com.au/assets/product-images/_resampled/SetSize300300-9500978.jpg" alt="thumb"></a>
													<h6> Ideal Standard Tonic <small>Toilet Roll Holder </small></h6>
												</li>
												<li> <a href="http://www.reece.com.au/bathrooms/products/ideal-standard-tonic-glass-shelf" title="more" class="thumbnail"><img src="http://www.reece.com.au/assets/product-images/_resampled/SetSize300300-9500981.jpg" alt="thumb"></a>
													<h6> Ideal Standard Tonic <small>Glass Shelf </small></h6>
												</li>
												<li> <a href="http://www.reece.com.au/bathrooms/products/caroma-pearl-btw-inwall-toilet-pan" title="more" class="thumbnail"><img src="http://www.reece.com.au/assets/product-images/_resampled/SetSize300300-9503593.jpg" alt="thumb"></a>
													<h6> Caroma Pearl BTW <small>Inwall Toilet Pan </small></h6>
												</li>
												<li> <a href="http://www.reece.com.au/bathrooms/products/methven-aroha-shower-mixer" title="more" class="thumbnail"><img src="http://www.reece.com.au/assets/product-images/_resampled/SetSize300300-2285431.jpg" alt="thumb"></a>
													<h6> Methven Aroha <small>Shower Mixer </small></h6>
												</li>												
											</ul>										
										</div>

									</div>
								</div>

								<div class="theBlockShadowBlocks shadowRight shadowLeft room-thumbs">
								<span class="roomSNo">2</span>
									<div class="theBlockShadowBlocksInner">
										<h2> Lorem ipsum dolor sit amet</h2>
										<div class="row-fluid">
											<div class="span10">
												<div class="MediaView hidden-phone">
													<img class="heroImage" src="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_1.jpg">
												</div>											
											</div>
											<div class="span2">
												<ul class="heroThumbs">
													<li><a href="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_1.jpg" class="thumbnail active" title="Caption 4"><img src="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_1.jpg"></a></li>
													<li><a href="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_2.jpg" class="thumbnail" title="Caption 2"><img src="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_2.jpg"></a></li>
													<li><a href="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_3.jpg" class="thumbnail" title="Caption 3"><img src="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_3.jpg"></a></li>
													<li><a href="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_4.jpg" class="thumbnail" title="Caption 4"><img src="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_4.jpg"></a></li>
													<li><a href="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_PLAN.png" class="thumbnail" title="Floor Plan"><img src="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_PLAN.png"></a> </li>													
												</ul>										
											</div>
										</div>
										<div class="featuredInBathroom">
											<h3> Products featured in this bathroom </h3>
											<ul class="thumbnails media-thumbnails">
												<li> <a href="http://www.reece.com.au/bathrooms/products/ideal-standard-tonic-toilet-roll-holder" title="more" class="thumbnail"><img src="http://www.reece.com.au/assets/product-images/_resampled/SetSize300300-9500978.jpg" alt="thumb"></a>
													<h6> Ideal Standard Tonic <small>Toilet Roll Holder</small> </h6>
												</li>
												<li> <a href="http://www.reece.com.au/bathrooms/products/ideal-standard-tonic-glass-shelf" title="more" class="thumbnail"><img src="http://www.reece.com.au/assets/product-images/_resampled/SetSize300300-9500981.jpg" alt="thumb"></a>
													<h6> Ideal Standard Tonic <small>Glass Shelf </small></h6>
												</li>
												<li> <a href="http://www.reece.com.au/bathrooms/products/caroma-pearl-btw-inwall-toilet-pan" title="more" class="thumbnail"><img src="http://www.reece.com.au/assets/product-images/_resampled/SetSize300300-9503593.jpg" alt="thumb"></a>
													<h6> Caroma Pearl BTW <small>Inwall Toilet Pan </small></h6>
												</li>
												<li> <a href="http://www.reece.com.au/bathrooms/products/methven-aroha-shower-mixer" title="more" class="thumbnail"><img src="http://www.reece.com.au/assets/product-images/_resampled/SetSize300300-2285431.jpg" alt="thumb"></a>
													<h6> Methven Aroha <small>Shower Mixer </small></h6>
												</li>
											</ul>										
										</div>

									</div>
								</div>

								<div class="theBlockShadowBlocks shadowRight shadowLeft room-thumbs">
								<span class="roomSNo">3</span>
									<div class="theBlockShadowBlocksInner">
										<h2> Lorem ipsum dolor sit amet</h2>
										<div class="row-fluid">
											<div class="span10">
												<div class="MediaView hidden-phone">
													<img class="heroImage" src="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_1.jpg">
												</div>											
											</div>
											<div class="span2">
												<ul class="heroThumbs">
													<li><a href="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_1.jpg" class="thumbnail active" title="Caption 4"><img src="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_1.jpg"></a></li>
													<li><a href="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_2.jpg" class="thumbnail" title="Caption 2"><img src="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_2.jpg"></a></li>
													<li><a href="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_3.jpg" class="thumbnail" title="Caption 3"><img src="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_3.jpg"></a></li>
													<li><a href="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_4.jpg" class="thumbnail" title="Caption 4"><img src="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_4.jpg"></a></li>
													<li><a href="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_PLAN.png" class="thumbnail" title="Floor Plan"><img src="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_PLAN.png"></a> </li>													
												</ul>										
											</div>
										</div>
										<div class="featuredInBathroom">
											<h3> Products featured in this bathroom </h3>
											<ul class="thumbnails media-thumbnails">
												<li> <a href="http://www.reece.com.au/bathrooms/products/ideal-standard-tonic-toilet-roll-holder" title="more" class="thumbnail"><img src="http://www.reece.com.au/assets/product-images/_resampled/SetSize300300-9500978.jpg" alt="thumb"></a>
													<h6> Ideal Standard Tonic <small>Toilet Roll Holder</small> </h6>
												</li>
												<li> <a href="http://www.reece.com.au/bathrooms/products/ideal-standard-tonic-glass-shelf" title="more" class="thumbnail"><img src="http://www.reece.com.au/assets/product-images/_resampled/SetSize300300-9500981.jpg" alt="thumb"></a>
													<h6> Ideal Standard Tonic <small>Glass Shelf </small></h6>
												</li>
												<li> <a href="http://www.reece.com.au/bathrooms/products/caroma-pearl-btw-inwall-toilet-pan" title="more" class="thumbnail"><img src="http://www.reece.com.au/assets/product-images/_resampled/SetSize300300-9503593.jpg" alt="thumb"></a>
													<h6> Caroma Pearl BTW <small>Inwall Toilet Pan </small></h6>
												</li>
												<li> <a href="http://www.reece.com.au/bathrooms/products/methven-aroha-shower-mixer" title="more" class="thumbnail"><img src="http://www.reece.com.au/assets/product-images/_resampled/SetSize300300-2285431.jpg" alt="thumb"></a>
													<h6> Methven Aroha <small>Shower Mixer </small></h6>
												</li>
											</ul>											
										</div>

									</div>
								</div>


						<div class="theBlockShadowBlocks otherTeams shadowRight shadowLeft">
							<div class="theBlockShadowBlocksInner">
								<h2> Other Teams </h2>
								<div class="row-fluid">
									<div class="relatedTeam span4">
										<a href="#">
											<img src="http://placehold.it/300x300.png/eee/eee" alt="placeholder">
											<h4 class="coupleNames">Name &amp; Name</h4>
										</a>
									</div>
									<div class="relatedTeam span4">
										<a href="#">
											<img src="http://placehold.it/300x300.png/eee/eee" alt="placeholder">
											<h4 class="coupleNames">Name &amp; Name</h4>
										</a>
									</div>
									<div class="relatedTeam span4">
										<a href="#">
											<img src="http://placehold.it/300x300.png/eee/eee" alt="placeholder">
											<h4 class="coupleNames">Name &amp; Name</h4>
										</a>
									</div>
								</div>
							</div>
						</div><!-- /.theBlockShadowBlocks -->
						<div class="theBlockShadowBlocks facebookComments shadowRight shadowLeft">
							<div class="theBlockShadowBlocksInner">
								<h3>Tell us what you think.</h3>
								<div data-num-posts="5" data-width="800" data-href="http://facebook.com/theblock" class="fb-comments fb_iframe_widget" fb-xfbml-state="rendered"><span style="height: 160px; width: 800px;"><iframe scrolling="no" id="f2265cc8311d02a" name="f61d36228c180a" style="border: medium none; overflow: hidden; height: 160px; width: 800px;" class="fb_ltr" src="https://www.facebook.com/plugins/comments.php?api_key=206534019454541&amp;locale=en_US&amp;sdk=joey&amp;channel_url=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D24%23cb%3Df24c6e959cdc8e2%26origin%3Dhttp%253A%252F%252Freece.trout.com.au%252Ffc9f3b8d6aa2ca%26domain%3Dreece.trout.com.au%26relation%3Dparent.parent&amp;numposts=5&amp;width=800&amp;href=http%3A%2F%2Ffacebook.com%2Ftheblock"></iframe></span></div>
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