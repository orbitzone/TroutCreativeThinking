
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
					<div class=" content-container">
						<div class="inner-wrapper clearfix">
							<div class="prLogoWrap">
								<span class="prLogoLarge"></span>
								Latest trends brought to you by Reece.
							</div>
							<div class="inspWallFilter dropdown">
								<a data-toggle="dropdown" href="#">Filter Articles <i class="icon-star-empty"></i></a>
								<ul class="dropdown-menu">
									<li><label><input type="checkbox" name="inspWallFilter" value="productNews" />Product News</label></li>
									<li><label><input type="checkbox" name="inspWallFilter" value="waterSavings" />Water Saving</label></li>
									<li><label><input type="checkbox" name="inspWallFilter" value="theBlock" />The Block</label></li>
									<li><label><input type="checkbox" name="inspWallFilter" value="events" />Events</label></li>
									<li><label><input type="checkbox" name="inspWallFilter" value="trends" />Trends</label></li>
									<li><label><input type="checkbox" name="inspWallFilter" value="designers" />Designers</label></li>
									<li><label><input type="checkbox" name="inspWallFilter" value="planning" />Planning</label></li>
								</ul>
							</div>
						</div>
					</div>
				</header>
				<div class="inspWallwrapper">
					<div class=" content-container">
						<div class="inner-wrapper" id="wallContent">
							<?php include ('wall.php') ?>
						</div>
					</div>
					<div id="inspWallLoad">
						<a href="#" id="inspWallLoadLink">
							Load More <i class="icon-chevron-down"></i>
						</a>
						<span id="inspWallLoaderIcon"></span>
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
		<script type="text/javascript">
		function populateWall(data){
			$('#wallContent').html(data);
		}

		$(function(){

			/* Script for Filtering content */
			var inspFilterArray = [];
			$('input[name="inspWallFilter"]').change(function(){
				$(this).parent('label').toggleClass('checked');
				inspFilterArray = [];
				$.each($('input[name="inspWallFilter"]:checked'),function(){
					inspFilterArray.push(this.value)
				});
				data = {filter:JSON.stringify(inspFilterArray)};
				$.get('wall.php',data,populateWall);
			});
			/* Load More */
			$('#inspWallLoadLink').click(function(e){
				e.preventDefault();
				$('#inspWallLoadLink').hide();
				$('#inspWallLoaderIcon').addClass('show');
			});

		});
		</script>
    </body>
</html>