
	<?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>

	<?php 
	  	$cssScriptPaths = array(
	  		"/assets/css/reece-products.css",
	  		"/assets/css/reece-bathrooms.css",
	  		"/assets/css/reece-the-block-skyhigh.css"		
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
					include_once($serverBase."/includes/banners/banner-happyzone.php");
			?>	
			</div>
		    <div class="content-container">
				<div class="inner-wrapper">
				<!-- content here -->
<div class="main-wrapper">
	<div class="row-fluid sub-header">
		<div class="span3 block-logo"> <a href="index.php"><img src="/assets/images/the-block-skyhigh/the-block-logo.jpg" /></a> </div>
		<div class="span9">
			<h2> Reece on The Block </h2>
			<h3 class="pull-right"> The biggest Block EVER is here, this time we are going higher than ever before! </h3>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12 bottom-space">
			<div class="row-fluid">
				<ul class="nav nav-couples">
					<li class="vic"><a href="couple-all-rooms.php" title="">VIC<span>Bec &amp; George</span></a></li>
					<li class="nsw inactive"><a href="couple-all-rooms.php" title="">NSW<span>Madi &amp; Jarrod</span></a></li>
					<li class="qld inactive"><a href="couple-all-rooms.php" title="">QLD<span>Trixie &amp; Johnno</span></a></li>
					<li class="sa inactive"><a href="couple-all-rooms.php" title="">SA<span>Alisa &amp; Lysandra</span></a></li>
					<li class="wa inactive"><a href="couple-all-rooms.php" title="">WA<span>Kim &amp; Matt</span></a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="span12 visible-phone hidden-desktop bottom-space"> <a class="back" href="couple-all-rooms.php">Back to Bec &amp; George</a> </div>
	<div class="row-fluid bottom-space">
		<div class="span9 couple-profile vic bg-vic">
			<div class="row-fluid">
				<div class="span9">
					<h2> VIC – Bec &amp; George </h2>
				</div>
				<div class="span3 hidden-phone"> <a class="back" href="couple-all-rooms.php">Back to Bec &amp; George</a> </div>
			</div>
			<p> Bio about the team to go here Or sed et vitas volorro vidigenis sundae possusciam reptatia pra nuscimi, sinimagnihic tes demque et iusae vit unditem. </p>
			<div class="row-fluid">
				<div class="span4 bottom-space"> <img src="http://placehold.it/320x200" /> </div>
				<div class="span4 bottom-space"> <img src="http://placehold.it/320x200" /> </div>
				<div class="span4 bottom-space"> <img src="http://placehold.it/320x200" /> </div>
			</div>
		</div>
		<div class="span3"> <a href="#qa" class="qa-trigger"><img src="/assets/images/the-block-skyhigh/qa-circle-vic.png" /></a> </div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<div class="row-fluid">
				<div class="span9" id="room-thumbs">
					<h2> Room 2 - Ensuite </h2>
					<div id="MediaView"> <img class="heroImage" src="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_1.jpg" />
						<div class="row-fluid room-caption bottom-space">
							<div class="span12">
								<p class="caption"> Caption 1 </p>
							</div>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span4 bottom-space"> <a href="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_2.jpg" class="thumbnail" title="Caption 2"><img src="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_2.jpg" /></a> </div>
						<div class="span4 bottom-space"> <a href="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_3.jpg" class="thumbnail" title="Caption 3"><img src="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_3.jpg" /></a> </div>
						<div class="span4 bottom-space"> <a href="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_4.jpg" class="thumbnail" title="Caption 4"><img src="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_4.jpg" /></a> </div>
					</div>
					<div class="row-fluid">
						<div class="span4 bottom-space"> <a href="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_1.jpg" class="thumbnail" title="Caption 1"><img src="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_1.jpg" /></a> </div>
						<div class="span4 bottom-space"> <a href="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_PLAN.png" class="thumbnail" title="Floor Plan"><img src="/assets/images/the-block-skyhigh/rooms/week1/vic/GB_APT3_WEEK1_PLAN.png" /></a> </div>
					</div>
					<div class="row-fluid">
						<h3> Products featured in this bathroom </h3>
						<ul class="thumbnails media-thumbnails">
							<li class="span3"> <a href="http://www.reece.com.au/bathrooms/products/ideal-standard-tonic-toilet-roll-holder" title="more" class="thumbnail"><img src="http://www.reece.com.au/assets/product-images/_resampled/SetSize300300-9500978.jpg" alt="thumb"></a>
								<h6 class="hidden-phone"> Ideal Standard Tonic Toilet Roll Holder </h6>
							</li>
							<li class="span3"> <a href="http://www.reece.com.au/bathrooms/products/ideal-standard-tonic-glass-shelf" title="more" class="thumbnail"><img src="http://www.reece.com.au/assets/product-images/_resampled/SetSize300300-9500981.jpg" alt="thumb"></a>
								<h6 class="hidden-phone"> Ideal Standard Tonic Glass Shelf </h6>
							</li>
							<li class="span3"> <a href="http://www.reece.com.au/bathrooms/products/caroma-pearl-btw-inwall-toilet-pan" title="more" class="thumbnail"><img src="http://www.reece.com.au/assets/product-images/_resampled/SetSize300300-9503593.jpg" alt="thumb"></a>
								<h6 class="hidden-phone"> Caroma Pearl BTW Inwall Toilet Pan </h6>
							</li>
							<li class="span3"> <a href="http://www.reece.com.au/bathrooms/products/methven-aroha-shower-mixer" title="more" class="thumbnail"><img src="http://www.reece.com.au/assets/product-images/_resampled/SetSize300300-2285431.jpg" alt="thumb"></a>
								<h6 class="hidden-phone"> Methven Aroha Shower Mixer </h6>
							</li>
						</ul>
					</div>
					<div class="row-fluid voting top-space bottom-space">
						<div class="span9">
							<h5> How did you like the winning room? Give us your vote. </h5>
						</div>
						<div class="span3"> <a href=""><i class="icon-thumbs-up"> </i></a> <a href=""><i class="icon-thumbs-down"> </i></a> </div>
					</div>
					<div class="row-fluid">
						<div class="span12">
							<h5> Tell us what you think. </h5>
							<div class="fb-comments" data-href="http://facebook.com/theblock" data-width="800" data-num-posts="5"> </div>
						</div>
					</div>
					<div class="row-fluid top-space promos">
						<div class="span4">
							<div class="promo"> <a href="http://www.reece.com.au/bathroom-inspiration/trends/day-spa"><img src="/assets/images/the-block-skyhigh/promo-shaynna.jpg" /></a>
								<div class="copy">
									<h4> Bathroom exclusive </h4>
									<h5> from Shaynna Blaze. </h5>
									<p> <a href="http://www.reece.com.au/bathroom-inspiration/trends/day-spa">Watch the video &raquo;</a> </p>
								</div>
							</div>
						</div>
						<div class="span4">
							<div class="promo"> <a href="http://www.reece.com.au/bathroom-inspiration/trends"><img src="/assets/images/the-block-skyhigh/promo-trends.jpg" /></a>
								<div class="copy">
									<h4> Bathroom Trends </h4>
									<h5> Get the look </h5>
									<p> <a href="http://www.reece.com.au/bathroom-inspiration/trends">See more &raquo;</a> </p>
								</div>
							</div>
						</div>
						<div class="span4">
							<div class="promo"> <a href="http://www.reece.com.au/bathrooms/happy-tips/avoid-the-headbutt"><img src="/assets/images/the-block-skyhigh/promo-tip.jpg" /></a>
								<div class="copy">
									<h4> Happy Tip #1 </h4>
									<h5> Avoid the headbutt </h5>
									<p> <a href="http://www.reece.com.au/bathrooms/happy-tips/avoid-the-headbutt">Watch the video &raquo;</a> </p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="span3 related">
					<h4> See the other teams amazing ensuites </h4>
					<div class="related-room bottom-space"> <a href="#"><img src="http://placehold.it/400x200" /></a>
						<div class="copy bg-nsw">
							<h4> NSW </h4>
							<h5> Ensuite </h5>
							<p> <a href="room.php">See Bathroom &raquo;</a> </p>
						</div>
					</div>
					<div class="related-room bottom-space"> <a href="#"><img src="http://placehold.it/400x200" /></a>
						<div class="copy bg-qld">
							<h4> QLD </h4>
							<h5> Ensuite </h5>
							<p> <a href="room.php">See Bathroom &raquo;</a> </p>
						</div>
					</div>
					<div class="related-room bottom-space"> <a href="#"><img src="http://placehold.it/400x200" /></a>
						<div class="copy bg-sa">
							<h4> SA </h4>
							<h5> Ensuite </h5>
							<p> <a href="room.php">See Bathroom &raquo;</a> </p>
						</div>
					</div>
					<div class="related-room bottom-space"> <a href="#"><img src="http://placehold.it/400x200" /></a>
						<div class="copy bg-wa">
							<h4> WA </h4>
							<h5> Ensuite </h5>
							<p> <a href="room.php">See Bathroom &raquo;</a> </p>
						</div>
					</div>
				</div>
			</div>
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