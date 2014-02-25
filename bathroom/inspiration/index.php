
	<?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>
<!-- before head -->
	<?php 
	  	$cssScriptPaths = array(
	  		"/assets/css/reece-products.css",
	  		"/assets/css/reece-bathrooms.css",
	  		"/assets/css/smoothness/jquery-ui-1.10.4.custom.min.css"
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
			<section class="inspirationBannerWrap">
				<div class="inspirationBannerImageWrap">
					<img src="/assets/images/hz-inspiration/Boho-2.jpg" alt="Boho" />
				</div>
				<div class="inspirationBannerTextWrap">
					<div class="content-container">
						<div class="inner-wrapper">
							<div class="inspirationBannerText">
								<h2><a href = "#">Bathroom Gallery</a></h2>
								<h3>Trends, ideas and stories to inspire</h3>
								<p class="inspirationBannerCaption">
									A collection of amazing bathrooms that demonstrate what you can achieve with a little imagination and quality Reece products.
								</p>
								<div>
									<a class="inspirationBannerViewLink" href="#">VIEW THE GALLERY</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<div class="content-container">
				<div class="inner-wrapper">
					<section class="inspirationPagePanels">
						<div class="row-fluid">
							<div class="span4">
								<div class="coloredPanel panelTeal portraitPanel caretBottom">
									<div class="coloredPanelThumb">
										<img src="/assets/images/hz-inspiration/portrait.jpg" alt="Boho" />
									</div>
									<div class="coloredPanelText">
										<h3><a href = "#">Designer Looks</a></h3>
										<p>
											Take a journey as we partner with worlds best designers and editor to bring you innovative bathroom ideas from the best in the industry.
										</p>
										<div>
											<a class="coloredPanelLink" href="#">VIEW THE GALLERY</a>
										</div>
									</div>
								</div>
							</div>
							<div class="span8">
								<div class="coloredPanel panelLightPurple landscapePanel panelAlt caretLeft">
									<div class="row-fluid">
										<div class="span7">
											<div class="coloredPanelThumb">
												<img src="/assets/images/hz-inspiration/landscape1.jpg" alt="Boho" />
											</div>
										</div>
										<div class="span5">
											<div class="coloredPanelText">
												<h3><a href = "#">Bathroom Trends</a></h3>
												<p>
													Here are 12 trends set to make a big impact in the coming seasons.
												</p>
												<div>
													<a class="coloredPanelLink" href="#">EXPLORE TRENDS!</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="coloredPanel panelLightPink landscapePanel caretRight">
									<div class="row-fluid">
										<div class="span7">
											<div class="coloredPanelThumb">
												<img src="/assets/images/hz-inspiration/landscape2.jpg" alt="Boho" />
											</div>
										</div>
										<div class="span5">
											<div class="coloredPanelText">
												<h3>
													<a href = "#">Reece at SiD</a>
												</h3>
												<p>
													See the winning entries and highlights from The Reece Bathroom Innovation Award 2013.
												</p>
												<div>
													<a class="coloredPanelLink" href="#">SEE HIGHLIGHTS</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>

			<section class="inspWall">

				<header class="inspWallHeader">
				<span  id="powder-room" ></span>
					<div class=" content-container">
						<div class="inner-wrapper clearfix">
							<div class="prLogoWrap">
								<h2 class="prLogoLarge">
									<a href="#powder-room">
										<svg>
											<image xlink:href="/assets/images/hz-inspiration/powder-room-logo.svg" src="/assets/images/hz-inspiration/header-logo.png" width="220" height="220"/>
										</svg>
									</a>
								</h2>
								<span class="prLogoCaption">Latest trends brought to you by Reece.</span>
							</div>

							<div class="inspWallFilter">

								<a href="#filterFormWrap" data-toggle="collapse">Sort by <i class="icon-star"></i><i class="icon-star-empty"></i></a>
								<div id="filterFormWrap" class="collapse">

								<form id="inspWallFilterForm">
									<ul>
										<li><label class="filterCheckboxLabel"><input type="checkbox" class="inspWallFilterInput" name="inspWallFilter" value="trends" />Trends</label></li>
										<li><label class="filterCheckboxLabel"><input type="checkbox" class="inspWallFilterInput" name="inspWallFilter" value="planning" />Planning</label></li>
										<li><label class="filterCheckboxLabel"><input type="checkbox" class="inspWallFilterInput" name="inspWallFilter" value="productNews" />Product News</label></li>
										<li><label class="filterCheckboxLabel"><input type="checkbox" class="inspWallFilterInput" name="inspWallFilter" value="designers" />Designers</label></li>
										<li><label class="filterCheckboxLabel"><input type="checkbox" class="inspWallFilterInput" name="inspWallFilter" value="waterSavings" />Water Saving</label></li>
										<li><label class="filterCheckboxLabel"><input type="checkbox" class="inspWallFilterInput" name="inspWallFilter" value="events" />Events</label></li>
										<li><label class="filterCheckboxLabel"><input type="checkbox" class="inspWallFilterInput" name="inspWallFilter" value="theBlock" />The Block</label></li>
										
										<!--<li class="filterDateLabels">
											<label class="filterDateLabel">
												<span>From</span>
												<span class="inspWallFilterDateWrap">
													<input type="date" class="inspWallFilterInput inspWallFilterDate" placeholder="mm/dd/yyyy" id="inspWallFilterFrom">
													<i class="icon-calendar"></i>
												</span>
											</label>
											<label class="filterDateLabel">
												<span>To</span>
												<span class="inspWallFilterDateWrap">
													<input type="date" class="inspWallFilterInput inspWallFilterDate" placeholder="mm/dd/yyyy" id="inspWallFilterTo">
													<i class="icon-calendar"></i>
												</span>
											</label>
										</li>-->
									</ul>
									<div class="inspWallFilterAction">
										<button type="reset" id="inspWallClearFilter">Clear</button>
										<button class="inspWallFilterActionPrimary">Apply</button>
									</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</header>
				<div class="inspWallwrapper">
					<div class=" content-container">
						<div class="inner-wrapper" id="wallContent">
							<?php include ('wall.php') ?>
						</div>
						<div class="inner-wrapper inspBlogWrap" id="overlayContent" style="display:none">
							<a class="closeBlog" id="closeBlog"><i class="icon-remove"></i></a>
							<div id="socialOverlay"></div>
							<iframe id="inspBlogArticle" style="display:none" width="100%"  scrolling="no" frameborder="0"></iframe>
							<div class="inspBlogCommentWrap" id="disqus_thread"></div>
							<script type="text/javascript">
								/* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
								var disqus_shortname = 'reecetest'; // Required - Replace example with your forum shortname
								//var disqus_identifier = 'a unique identifier for each page where Disqus is present';
								//var disqus_title = 'a unique title for each page where Disqus is present';
								//var disqus_url = 'a unique URL for each page where Disqus is present';

								/* * * DON'T EDIT BELOW THIS LINE * * */
								(function() {
									var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
									dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
									(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
								})();
							</script>
							<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
							<a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
						</div>
					</div>
				</div>
				<div id="inspWallLoad">
					<a href="#" id="inspWallLoadLink">
						Show More <i class="icon-chevron-down"></i>
					</a>
					<span id="inspWallLoaderIcon"></span>
				</div>
			</section>

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
                "/assets/js/reece-signon.js",
		  		"/assets/js/reece-ocnav.js",
		  		"/assets/js/reece-carousel.js",
		  		"/assets/js/jquery-ui-1.10.4.custom.min.js",
		  		"/assets/js/reece-inspiration.js"
		  	); 
		  	include_once($serverBase."/includes/foot/scripts.php");
		?>
		<script type="text/javascript">

		</script>
    </body>
</html>