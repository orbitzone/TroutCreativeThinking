
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
						<li><a href="#">Brands</a> <span class="divider">/</span></li>
						<li class="active page-branding text-brand">Laufen</li>
					</ul>

				    <!-- CONTENT FOR DESKTOP -->

					<section class="products-content">
						<img src="/assets/images/products_2013/products-laufen-banner.jpg" alt="Laufen" />
						<p class="product-lead">At the heart of Swiss bathroom culture since 1892, the LAUFEN name is synonymous with beauty, craftsmanship and perfection of form – qualities that continue to define LAUFEN as one of the world’s most desired bathroom brands. Partnering with outstanding architects and designers, LAUFEN creates bathroom products that express emotion, purity and harmony, while continually pushing the limits of technical possibility to create ground-breaking new ideas expressed through ceramics.</p>
					</section>

					<hr>

					<ul class="product-section-lead-links row-fluid text-center">
						<li class="span3 active"><a href="#">About Laufen</a></li>
						<li class="span3"><a href="#">Designers</a></li>
						<li class="span3"><a href="#">Ranges</a></li>
						<li class="span3"><a href="#">Products</a></li>
					</ul>

					<div class="row-fluid">
						<div class="span3">
							<img src="/assets/images/products_2013/products-image-cross.jpg" alt="Laufen" />
						</div>
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
						<div class="span3">
							<a class="item-thumb item-video" href="bathroom-moments/sub" title="Watch Video"><img src="http://reece.trout.com.au/responsive_2012/assets/images/moments/still-number-one-thumb.jpg" alt="Im her number one"><span class="video-title">LAUFEN: 3 Pillars</span></a>
							<a class="item-thumb item-video" href="bathroom-moments/sub" title="Watch Video"><img src="http://reece.trout.com.au/responsive_2012/assets/images/moments/still-number-one-thumb.jpg" alt="Im her number one"><span class="video-title">LAUFEN: 3 Pillars</span></a>
							<a class="item-thumb item-video" href="bathroom-moments/sub" title="Watch Video"><img src="http://reece.trout.com.au/responsive_2012/assets/images/moments/still-number-one-thumb.jpg" alt="Im her number one"><span class="video-title">LAUFEN: 3 Pillars</span></a>
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
				"/assets/js/bootstrap-tab.js",
				"/assets/js/bootstrap-dropdown.js",
				"/assets/js/reece-ocnav.js",
				"/assets/js/reece-ajax-content-loader.js",
				"/assets/js/reece-carousel.js",
			]; 
		   	include_once($serverBase."/includes/foot/scripts.php");
		?>				

		<script>  
			$(document).ready(function() {  
			   $(".carousel").swiperight(function() {  
			      $(".carousel").carousel('prev');  
			    });  
			   $(".carousel").swipeleft(function() {  
			      $(".carousel").carousel('next');  
			   });  
			});  
		</script> 

    </body>
</html>