
	<?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>

	<?php 
	  	$cssScriptPaths = array(
	  		"/assets/css/reece-products.css",
	  		"/assets/css/reece-bathrooms.css",
	  		"/assets/css/reece-bathrooms-the-block-fansVfaves.css"		
	  	); 
	  	include_once($serverBase."/includes/head/head-generic.php");
	?>		

    <body class="fansVFaves">
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
					<div class="main-wrapper">
						<div class="theBlockBanner">
							<div class="theBlockLogoWrap">
								<img alt="The Block" src="/assets/images/the-block-fans-V-faves/the-block-logo.png" />
							</div>
							<div class="theBlockBannerCaption">
								<h2>Love a bathroom on The Block?</h2>
								<p>Learn more about the products and inspiration behind it right here. </p>
								<a class="theBlockredBtn theBlockredBtnBig" id="exploreBtn">Explore</a>
							</div>
						</div>
						<div class="theBlockSubscribe theBlockShadowBlocks  shadowRight shadowLeft">
							<div class="theBlockShadowBlocksInner">
								<form class="row-fluid">
									<div class="span4">
										<label>Subscribe for updates </label>
									</div>
									<div class="span3">
										<input type="text"  placeholder="Name">
									</div>
									<div class="span3">
										<input type="email" placeholder="Email">
									</div>
									<div class="span2">
										<button class="theBlockredBtn" type="submit">Submit</button>
									</div>
								</form>
							</div>
						</div>
						<div class="row-fluid">
							<div class="span9">
								<div class="nav-couples theBlockShadowBlocks shadowRight">
									<div class="theBlockShadowBlocksInner">
										<h3>Contestants</h3>
										<ul class="clearfix">
											<li>
												<a href="couple.php" title="">
													<img src="/assets/images/the-block-fans-V-faves/team1-coming-soon.png" alt="Couple" />
													<h4 class="coupleNames">Brad &amp; Dale</h4>
												</a>
												<p class="coupleDesc">Previously competing against each other, funny men Brand and Dale have formed a dynamic duo for their return.</p>
											</li>
											<li>
												<a href="couple.php" title="">
													<img src="/assets/images/the-block-fans-V-faves/team2-coming-soon.png" alt="Couple" />
													<h4 class="coupleNames">Chantelle &amp; Steve</h4>
												</a>
												<p class="coupleDesc">With no previous renovating experience, Victorian couple Chantelle &amp; Steve are hoping to succeed on enthusiasm alone.</p>
											</li>
											<li>
												<a href="couple.php" title="">
													<img src="/assets/images/the-block-fans-V-faves/team3-coming-soon.png" alt="Couple" />
													<h4 class="coupleNames">Kyal &amp; Kara</h4>
												</a>
												<p class="coupleDesc">Hailing from the Sunshine coast, seasoned renovators Kyal &amp; Kara are the new young guns of the series.</p>
											</li>
											<li>
												<a href="couple.php" title="">
													<img src="/assets/images/the-block-fans-V-faves/team4-coming-soon.png" alt="Couple" />
													<h4 class="coupleNames">Alisa &amp; Lysandra</h4>
												</a>
												<p class="coupleDesc">A powerful combination of creativity and cunning, twins Alisa &amp; Lysandra spell double trouble for the other couples.</p>
											</li>
										</ul>
										</div>
								</div><!-- /.nav-couples -->
							</div><!-- /.span9 -->
							<div class="span3">
								<div class="theBlockShadowBlocks theBlocksocialFeed shadowLeft">
									<div class="theBlockShadowBlocksInner">
										<div id="twitterWidget">
											<a class="twitter-timeline" href="https://twitter.com/ReeceBathrooms" data-widget-id="332270994104401920">Tweets by @ReeceBathrooms</a>
											<script>!function(d, s, id) {
												var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
												if (!d.getElementById(id)) {
													js = d.createElement(s);
													js.id = id;
													js.src = p + "://platform.twitter.com/widgets.js";
													fjs.parentNode.insertBefore(js, fjs);
												}
											}(document, "script", "twitter-wjs");</script>									
										</div>
										<div class="fb-like-box" data-href="http://www.facebook.com/ReeceBathrooms" data-width="360" data-height="500" data-show-faces="false" data-stream="true" data-show-border="false" data-header="false"></div>

									</div>
								</div>
							</div><!-- /.span3 -->
						</div><!-- /.row-fluid -->

						<div class="row-fluid">
							<div class="span9">
								<div class="theBlockHomeBannerLarge theBlockHomeBanner theBlockShadowBlocks shadowRight">
									<div class="theBlockShadowBlocksInner">
										<img src="/assets/images/the-block-fans-V-faves/homeBanner1.jpg" />
										<div class="bannerTextWrap">
											<h4 class="bannerText">Check out our new 3D Planner </h4>
											<p>Stay tuned for interactive versions of all The Block bathrooms as they're revealed</p>
											<a href="#" class="theBlockredBtn theBlockredBtnSmall">Explore</a>
										</div>
									</div>
								</div>
							</div>
							<div class="span3">
								<div class="theBlockHomeBannerSmall theBlockHomeBanner theBlockShadowBlocks shadowLeft">
									<div class="theBlockShadowBlocksInner">
										<img src="/assets/images/the-block-fans-V-faves/homeBanner2.jpg" />
										<div class="bannerTextWrap">
											<h4 class="bannerText">Shaynna talks bathroom trends</h4>
											<a href="#" class="theBlockredBtn theBlockredBtnSmall">Watch</a>
										</div>
									</div>
								</div>
							</div>
						</div><!-- /.row-fluid -->

					</div><!-- /.main-wrapper -->

				</div><!-- /.inner-wrapper -->
		    </div><!-- /.content-container -->

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
		  		"/assets/js/jquery.lazyload.min.js",
		  		"/assets/js/bootstrap-transition.js", 
		  		"/assets/js/bootstrap-carousel.js",
		  		"/assets/js/bootstrap-collapse.js",
		  		"/assets/js/bootstrap-dropdown.js",
		  		"/assets/js/reece-ocnav.js",
		  		"/assets/js/reece-carousel.js",
		  		"/assets/js/fancybox/jquery.fancybox.js",
		  		"/assets/js/placeholder.js",
		  		"/assets/js/reece-the-block-skyhigh.js"

		  	); 
		  	include_once($serverBase."/includes/foot/scripts.php");
		?>			
		<script type="text/javascript">
			$(function(){
				$('#exploreBtn').click(exploreClicked);
			});

			function exploreClicked(){
				var exploreScroll = $('.nav-couples').offset().top;
				var navBarHeight = $('.navbar').height();
				if($( window ).width()>980){
					exploreScroll = exploreScroll - navBarHeight;
				}
				$('body,html').animate({scrollTop: exploreScroll}, 400);				
			}
		</script>
    </body>
</html>