 
<?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>
<?php 
		$cssScriptPaths = [	
			"/assets/css/reece-products.css",
			"/assets/css/reece-bathrooms.css",
			"/assets/js/me/mediaelementplayer.css",
			"/assets/css/reece-3D-planner.css"
	
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
<!-- CONTENT FOR DESKTOP -->
				<div class="compatabilityWarning visible-phone visible-tablet">
					<i class="icon-warning-sign">
					</i>
					<h4>
						Compatibility Notice
					</h4>
					<p>
						The technology behind the new 3D Bathroom Planner requires a browser plugin that is not available on your current device. Please bookmark this page and visit us on your desktop computer to use the planner. 
					</p>
				</div>
				<div class="main-item">
					<div class="row-fluid">
						<div class="span12">
							<h3>
								The Reece 3D Bathroom Planner 
							</h3>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span8">

							<div id="videoframe" >
								<video  style="width:100%; height:100%; border: none;  background-color:#FFFFFF;" width="100%" height="100%" bgcolor="#FFFFFF" poster="../../assets/images/ThreeDPlanner/poster.jpg" autoplay="autoplay">
									<source type="video/mp4" src="../../assets/video/ThreeDPlanner/bathroom_planner.mp4" />
								</video>
							</div>


							<br />
							<p>
								Whether you&rsquo;re designing a brand new bathroom or planning a renovation,&nbsp;the Reece 3D Bathroom Planner will help you create the ultimate look. 
							</p>
						</div>
						<div class="span4 plannerSteps">
							<h4>
								<i class="icon-pencil">
								</i>
								&nbsp;How to plan your perfect bathroom 
							</h4>
							<div class="strip">
								<span class="badge badge-important">
									1</span><span class="step"><strong>Set up
									</strong>
									and design your room
								</span>
							</div>
							<div class="strip">
								<span class="badge badge-important">
									2</span><span class="step"><strong>Select
									</strong>
									your favourite Reece product
								</span>
							</div>
							<div class="strip">
								<span class="badge badge-important">
									3</span><span class="step"><strong>Add
									</strong>
									your finishing touches
								</span>
							</div>
							<div class="strip">
								<span class="badge badge-important">
									4</span><span class="step"><strong>Review
									</strong>
									your room in 3d
								</span>
							</div>
							<a href="http://www.reece.com.au:8080/vp" class="btn btn-danger btn-large btn-block visible-desktop" style="margin-auto">
								Start Planning 
								<i class="icon-play">
								</i>
							</a>
						</div>
					</div>
				</div>
				<div class="main-item plannerThumbs visible-desktop visible-tablet">
					<div class="row-fluid">
						<div class="span12">
							<img src="../../assets/images/ThreeDPlanner/See-the-possibilities.png" alt="">
							<p>
								For a little inspiration, check out our bathroom gallery 
							</p>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span2">
							<a data-toggle="modal" href="#myModal">
							<img src="../../assets/images/ThreeDPlanner/picture1.jpg" alt=""></a>
							</div>
							<div class="span2">
								<img src="../../assets/images/ThreeDPlanner/picture2.jpg" alt="">
								</div>
								<div class="span2">
									<img src="../../assets/images/ThreeDPlanner/picture3.jpg" alt="">
									</div>
									<div class="span2">
										<img src="../../assets/images/ThreeDPlanner/picture4.jpg" alt="">
										</div>
										<div class="span2">
											<img src="../../assets/images/ThreeDPlanner/picture5.jpg" alt="">
											</div>
											<div class="span2">
												<img src="../../assets/images/ThreeDPlanner/picture6.jpg" alt="">
												</div>
											</div>
										</div>
										<div class="main-item plannerThumbs visible-phone">
											<div class="row-fluid">
												<div class="span12">
													<img src="../../assets/images/ThreeDPlanner/See-the-possibilities.png" alt="">
													<p>
														For a little inspiration, check out our bathroom gallery 
													</p>
													<div id="winnersCarousel" class="carousel slide" data-bs-carousel="carousel" data-bs-carousel-interval="50">
														<div class="carousel-inner">
															<div class="active item">


																<img src="../../assets/images/ThreeDPlanner/picture1.jpg" alt="">
																</div>
																<div class="item">
																	<img src="../../assets/images/ThreeDPlanner/picture2.jpg" alt="">
																	</div>
																	<div class="item">
																		<img src="../../assets/images/ThreeDPlanner/picture3.jpg" alt="">
																		</div>
																		<div class="item">
																			<img src="../../assets/images/ThreeDPlanner/picture4.jpg" alt="">
																			</div>
																			<div class="item">
																				<img src="../../assets/images/ThreeDPlanner/picture5.jpg" alt="">
																				</div>
																				<div class="item">
																					<img src="../../assets/images/ThreeDPlanner/picture6.jpg" alt="">
																					</div>
																				</div>
																				<a class="carousel-control left" href="#winnersCarousel" data-slide="prev">
																					&lsaquo;
																				</a>
																				<a class="carousel-control right" href="#winnersCarousel" data-slide="next">
																					&rsaquo;
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="main-item main-item-grey">
																	<div class="row-fluid">
																		<div class="span3">
																			<img src="../../assets/images/ThreeDPlanner/2d-layout.png" alt="">
																			<br /><br />
																			</div>
																			<div class="span7">
																				<h5>
																					Visit the 2D Bathroom Planner and grab your plans. 
																				</h5>
																				<p>
																				
																					If you've used the previous version of our Bathroom Planner, you can visit this page to view your previously created plans.This tool will be retired on DD Month YYYY So, if you'd like to keep this information for your reference please log in and download or print out your plans before then. Your plans will not be usable in the new 3D Planner. 
																				</p>
																			</div>
																			<div class="span2">
																				<a href="http://www.reece.com.au:8080/vp" class="btn btn-inverse  btn-block" style="margin:auto; margin-top:20px; padding:5px; line-height:110%;">
																					Go to the <br />2D planner &nbsp;
																					<i class="icon-play">
																					</i>
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
																<div class="modal-body">
																	<img src="../../assets/images/ThreeDPlanner/gallery_image.jpg" alt="">
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
				"/assets/js/bootstrap-dropdown.js",
				"/assets/js/bootstrap-modal.js",
				"/assets/js/reece-ocnav.js",
				"/assets/js/reece-carousel.js",
				"/assets/js/me/mediaelement-and-player.js"
			]; 
		   	include_once($serverBase."/includes/foot/scripts.php");
		?>

 <script type="text/javascript">
if (document.images) {
    img1 = new Image();
    img1.src = "../../assets/images/ThreeDPlanner/end_frame.jpg";
}
</script> <script>
	$('video,audio').mediaelementplayer({
		features: [],
		iPadUseNativeControls: true,
 		 iPhoneUseNativeControls: true,

		loop: true,
		success: function (mediaElement, domObject) {
			 
			mediaElement.addEventListener('ended', function(e)
			{
				$("#videoframe").html("<img style='border:none; ' src='../../assets/images/ThreeDPlanner/end_frame.jpg' />");
			}, false);
			 			
			if($.browser.safari)
			{
			mediaElement.play();
			}
			

 
        }
	});
	
	</script> 
															</body>
														</html>
