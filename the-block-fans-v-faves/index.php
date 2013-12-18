
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
			<img src="/assets/images/the-block-fans-V-faves/the-blogk-logo.png" />
		</div>
		<div class="theBlockBannerCaption">
			<h2>Love a bathroom on The Block?</h2>
			<p>Learn more about the products and inspiration behind it right here. </p>
			<a class="theBlockredBtnBig">Explore</a>
		</div>
	</div>

	<div class="theBlockSubscribe">
	<div class="theBlockSubscribeInner">
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

<!--
	<div class="row-fluid">
		<div class="span12">
			<div class="row-fluid">
				<div class="span9">
				<ul class="nav nav-couples">
					<li><a href="couple.php" title="">VIC<span>Bec &amp; George</span></a></li>
					<li><a href="couple.php" title="">NSW<span>Madi &amp; Jarrod</span></a></li>
					<li><a href="couple.php" title="">QLD<span>Trixie &amp; Johnno</span></a></li>
					<li><a href="couple.php" title="">SA<span>Alisa &amp; Lysandra</span></a></li>
				</ul>
					<div class="row-fluid top-space promos">
						<div class="span4">
							<div class="promo"> <a href="http://www.reece.com.au/bathroom-inspiration/trends/day-spa"><img src="/assets/images/the-block-skyhigh/promo-shaynna.jpg" /></a>
								<div class="copy">
									<h4>Bathroom exclusive</h4>
									<h5>from Shaynna Blaze.</h5>
									<p><a href="http://www.reece.com.au/bathroom-inspiration/trends/day-spa">Watch the video &raquo;</a></p>
								</div>
							</div>
						</div>
						<div class="span4">
							<div class="promo"> <a href="http://www.reece.com.au/bathroom-inspiration/trends"><img src="/assets/images/the-block-skyhigh/promo-trends.jpg" /></a>
								<div class="copy">
									<h4>Bathroom Trends</h4>
									<h5>Get the look</h5>
									<p><a href="http://www.reece.com.au/bathroom-inspiration/trends">See more &raquo;</a></p>
								</div>
							</div>
						</div>
						<div class="span4">
							<div class="promo"> <a href="http://www.reece.com.au/bathrooms/happy-tips/avoid-the-headbutt"><img src="/assets/images/the-block-skyhigh/promo-tip.jpg" /></a>
								<div class="copy">
									<h4>Happy Tip #1</h4>
									<h5>Avoid the headbutt</h5>
									<p><a href="http://www.reece.com.au/bathrooms/happy-tips/avoid-the-headbutt">Watch the video &raquo;</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="span3 social">
					<h4>See what people are saying&hellip;</h4>
					<div class="twitter bottom-space">
						<div class="header"> <img src="/assets/images/the-block-skyhigh/icon-twitter.png" /> </div>
						<div class="tweet">
							<div class="tweet">
								<div class="post"><a href="#">@shaynnablaze</a> excited about room 2 reveal tonight <a href="">#theblock</a></div>
								<div class="ts">10 mins ago</div>
							</div>
							<div class="tweet">
								<div><a href="#">@tiger12</a> love the freestanding bath with led lights <a href="">#theblock</a></div>
								<div class="ts">36 mins ago</div>
							</div>
							<div class="tweet">
								<div><a href="#">@lynette1808</a> I'm hooked on this show <a href="">#theblock</a></div>
								<div class="ts">1 hr ago</div>
							</div>
						</div>
					</div>
					<div class="facebook bottom-space">
						<div class="header"> <img src="/assets/images/the-block-skyhigh/icon-facebook.png" /> </div>
						<div class="status row-fluid">
							<div class="span2"> <img src="/assets/images/the-block-skyhigh/placeholder-user.png" /> </div>
							<div class="span10">
								<div class="post"><a href="#">The Block</a><br />
									Who will be the week 2 winner?</div>
								<div class="ts">10 mins ago</div>
							</div>
						</div>
						<div class="status row-fluid">
							<div class="span2"> <img src="/assets/images/the-block-skyhigh/placeholder-user.png" /> </div>
							<div class="span10">
								<div class="post"><a href="">Anthony Bologna</a><br />
									So Boho!!! Love the yellow grout used to highlight the subway tiles in the main bathroom.</div>
								<div class="ts">22 mins ago</div>
							</div>
						</div>
						<div class="status row-fluid">
							<div class="span2"> <img src="/assets/images/the-block-skyhigh/placeholder-user.png" /> </div>
							<div class="span10">
								<div class="post"><a href="">Blockette Realname</a><br />
									The bathrooms look amazing, makes me want to rennovate! </div>
								<div class="ts">1 hr ago</div>
							</div>
						</div>
						<div class="status row-fluid">
							<div class="span2"> <img src="/assets/images/the-block-skyhigh/placeholder-user.png" /> </div>
							<div class="span10">
								<div class="post"><a href="">Julia Knoll</a><br />
									Can anyone tell me, what that invisible shower was seen on the block last night. I need that in my house!</div>
								<div class="ts">2 days ago</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>-->
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