
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
								<img alt="The Block" src="/assets/images/the-block-fans-V-faves/the-blogk-logo.png" />
							</div>
							<div class="theBlockBannerCaption">
								<h2>Love a bathroom on The Block?</h2>
								<p>Learn more about the products and inspiration behind it right here. </p>
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
					</div>

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