 
<?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>
<?php 
		$cssScriptPaths = [	
			"/assets/css/reece-products.css",
			"/assets/css/reece-bathrooms.css",
			"/assets/css/reece-srl-event.css"
	
		]; 
	   	include_once($serverBase."/includes/head/head-generic.php");
	?>
<body>
	<div id="ThreeDPlannerWrapper" class="ocmain-wrapper">
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
				<div class="row-fluid">
					<div class="span12 srl-header">
						<div class="">
							<img src="http://placehold.it/1200x500">
						</div>
					</div>
				</div>

				<div class="row-fluid">
					<div class="span6 srl-content">
						<img class="creatingHeading" src="../../assets/images/srl-event/creating-bathroom-happiness.png" alt="Creating Bathroom Happiness">
					
							<p><span>The School of Real Living was held on Wednesday 14th August at B2 Studios in Sydney. Hosted by Deb Bibby, Real Living Editor.</span></p>

							<p>Real living Readers were treated to expert advice from &lsquo;The Block&rsquo; stars Madi and Jarrod along with some handy tips for creating Bathroom Happiness from the Reece team. After the presentations, readers got the opportunity to spend one-on-one time with Madi and Jarrod, along with Reece experts and editor Deb Bibby, to help solve their bathroom dilemas.</p>

							<p>As they sought advice, they were able to create their own bathroom mood boards as inspiration for their dream bathrooms. 4 winners were awarded prizes from Reece, Endota and Real Living.</p>
						<br />
						<div class="video-container">
							<iframe src="//player.vimeo.com/video/13880959?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
						</div>
					</div>

					<div class="span6 srl-gallery">
						<img src="../../assets/images/srl-event/gallery.png" alt="Gallery">
						<div class="row-fluid">

							<div class="span4">
								<a data-toggle="modal" href="#galleryPic1"><img src="http://placehold.it/300x300" alt></a>
								<img src="http://placehold.it/300x300" alt>
								<img src="http://placehold.it/300x300" alt>
							</div>
							<div class="span4">
								<img src="http://placehold.it/300x300" alt>
								<img src="http://placehold.it/300x300" alt>
								<img src="http://placehold.it/300x300" alt>
							</div>
							<div class="span4">
								<img src="http://placehold.it/300x300" alt>
								<img src="http://placehold.it/300x300" alt>
								<img src="http://placehold.it/300x300" alt>
							</div>
						</div>	

					</div>

				</div>

			</div>	
		</div>													








																	<div id="galleryPic1" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

																		<div class="modal-body">
																			content
																			</div>
																		</div>

																	</div>	
<?php 
			   	include_once($serverBase."/includes/foot/foot-generic.php");
			?>
																
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
				"/assets/js/bootstrap-dropdown.js",
				"/assets/js/bootstrap-modal.js",
				"/assets/js/reece-ocnav.js",
				"/assets/js/reece-carousel.js"
			]; 
		   	include_once($serverBase."/includes/foot/scripts.php");
		?>
																</body>
															</html>