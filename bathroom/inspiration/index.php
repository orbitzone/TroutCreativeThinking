
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
			<section class="inspirationBannerWrap">
				<div class="inspirationBannerImageWrap">
					<img src="/assets/images/hz-inspiration/Boho-2.jpg" alt="Boho" />
				</div>
				<div class="inspirationBannerTextWrap">
					<div class="content-container">
						<div class="inner-wrapper">
							<div class="inspirationBannerText">
								<h2>Bathroom Gallery</h2>
								<h3>Trends, ideas and stories to inspire</h3>

								<p class="inspirationBannerCaption">
									A collection of amazing bathrooms that demonstrate what you can achieve with a little imagination and quality Reece products.
								</p>
								<div>
									<a class="inspirationBannerViewLink">VIEW THE GALLERY</a>
								</div>
							</div>
						</div>
					</div>				
				</div>
			</section>
		    <div class="content-container">
				<div class="inner-wrapper">
				    <section class="inspirationPage">
				    
				    </section>

				</div>
		    </div>
		    <section class="inspirationBathroomFiles">
		    	<h2>
		    		The Bathroom Files
		    	</h2>
		    	<div class="content-container">
					<div class="inner-wrapper">
						<section class="inspirationPage">
							<div class="row-fluid inspirationSocialPanelWrap">
								<div class="span4">
									<div class="socialPanel">
										<div class="socialPaneltext">
											<h3>
												<i class="icon-facebook icon-large"></i>
											</h3>
											<p>
												Another finalist in the #Bathroom #Innovation Award - a #toilet that will only flush when the seat is down. This aims to reduce the spread of infection and bacteria. It would also make sure the toilet seat is always down - looking at you, boys!
											</p>
											<span class="inspirationCaretBottom">
												<span class="inspirationCaretShadow"></span>
											</span>
										</div>
										<div class="socialPanelThumb">
											<img src="/assets/images/hz-inspiration/FBImage.jpg" alt="FB" />
										</div>										
									</div>
								</div>
								<div class="span4">
									<div class="socialPanel pinterestPanel">
										<div class="socialPanelThumb">
											<img src="/assets/images/hz-inspiration/PinterestImage.jpg" alt="Pinterest" />
										</div>
										<div class="socialPaneltext">
											<span class="inspirationCaretTop">
											</span>
											<i class="icon-pinterest icon-large"></i>
										</div>
									</div>
									<div class="socialPanel">
										<div class="socialPaneltext">
											<h3>
												<i class="icon-twitter icon-large"></i>
												<small>@reecebathrooms</small>
											</h3>

											<p>
												Another great student finalist from the Reece Bathroom Innovation Award! The ultimate showering experience by...
											</p>
											<a href="#" class="socialPanelLink">
												Follow Us
											</a>
										</div>
									</div>
								</div>
								<div class="span4">
									<div class="socialPanel">
										<div class="socialPaneltext">
											<h3>
												Watch
											</h3>
											<p>
												Recreating the luxury experience of a high-end hotel bathroom within the home. Watch our video with Shayna Blaze to find out more.
											</p>
											<span class="inspirationCaretBottom">
												<span class="inspirationCaretShadow"></span>
											</span>											
										</div>
										<div class="socialPanelThumb">
											<a href="#">
												<img src="/assets/images/hz-inspiration/youtubeImage.jpg" alt="Youtube" />
											</a>
										</div>
									</div>								
								</div>
							</div>
						</section>
					</div>
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
		  		"/assets/js/reece-ocnav.js",
		  		"/assets/js/reece-carousel.js",
		  	); 
		  	include_once($serverBase."/includes/foot/scripts.php");
		?>
    </body>
</html>