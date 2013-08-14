 
<?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>
<?php 
		$cssScriptPaths = [	
			"/assets/css/reece-products.css",
			"/assets/css/reece-bathrooms.css",
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

<i  class="icon-warning-sign"></i>

<h4>Compatibility Notice</h4>
<p>The technology behind the new 3D Bathroom Planner requires a browser plugin that is not available on your current device. Please bookmark this page and visit us on your desktop computer to use the planner.
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





	<div id="videoframe">     
	<video style="width:100%; height:auto" width="744" height="310" autoplay>
		<source type="video/mp4"  src="../../assets/video/ThreeDPlanner/bathroom_planner.mp4" />
	</video></div>













					
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
										1</span><strong>Set up
									</strong>
									and design your room
								</div>
								<div class="strip">
									<span class="badge badge-important">
										2</span><strong>Select
									</strong>
									your favourite Reece product
								</div>
								<div class="strip">
									<span class="badge badge-important">
										3</span><strong>Add
									</strong>
									your finishing touches
								</div>
								<div class="strip">
									<span class="badge badge-important">
										4</span><strong>Review
									</strong>
									your room in 3d
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
								<h3>
									See the possibilities 
								</h3>
								<p>
									For a little inspiration, check out our bathroom gallery 
								</p>
							</div>
						</div>
						<div class="row-fluid">
							<div class="span2">
								  <a data-toggle="modal" href="#myModal" ><img src="../../assets/images/ThreeDPlanner/thumb.jpg" alt=""></a>
								</div>
								<div class="span2">
									 <a data-toggle="modal" href="#myModal" ><img src="../../assets/images/ThreeDPlanner/thumb.jpg" alt=""></a>
									</div>
									<div class="span2">
										 <a data-toggle="modal" href="#myModal" ><img src="../../assets/images/ThreeDPlanner/thumb.jpg" alt=""></a>
										</div>
										<div class="span2">
											 <a data-toggle="modal" href="#myModal" ><img src="../../assets/images/ThreeDPlanner/thumb.jpg" alt=""></a>
											</div>
											<div class="span2">
												 <a data-toggle="modal" href="#myModal" ><img src="../../assets/images/ThreeDPlanner/thumb.jpg" alt=""></a>
												</div>
												<div class="span2">
													 <a data-toggle="modal" href="#myModal" ><img src="../../assets/images/ThreeDPlanner/thumb.jpg" alt=""></a>
													</div>
												</div>
											</div>

					<div class="main-item plannerThumbs visible-phone">
						<div class="row-fluid">
							<div class="span12">
								<h3>
									See the possibilities 
								</h3>
								<p>
									For a little inspiration, check out our bathroom gallery 
								</p>




                         <div id="winnersCarousel" class="carousel slide" data-bs-carousel="carousel" data-bs-carousel-interval="50" >

                          <div class="carousel-inner">
                            <div class="active item"><img src="../../assets/images/ThreeDPlanner/gallery_image.jpg" alt=""></div>
                            <div class="item"><img src="../../assets/images/ThreeDPlanner/gallery_image.jpg" alt=""></div>
                          </div>
                          <a class="carousel-control left" href="#winnersCarousel" data-slide="prev">&lsaquo;</a>
                          <a class="carousel-control right" href="#winnersCarousel" data-slide="next">&rsaquo;</a>
                        </div>




							</div>
						</div>
					

											</div>










											<div class="main-item main-item-grey visible-desktop">
												<div class="row-fluid">
													<div class="span3">
														<img src="../../assets/images/ThreeDPlanner/2d-layout.png" style="margin:auto; margin-top:20px;" alt="">
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
															<a href="http://www.reece.com.au:8080/vp" class="btn btn-inverse  btn-block" style="margin:auto; margin-top:20px;">
																Go to the 2D planner 
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
				"/assets/js/micro-template.js",
				"/assets/js/reece-ajax-content-loader.js",
				"/assets/js/reece-carousel.js",
				"/assets/js/me/mediaelement-and-player.js"
			]; 
		   	include_once($serverBase."/includes/foot/scripts.php");
		?>
<script type="text/html" id="product_block_template">

			<div class="product-block span3">
				<a href="#">
					<img src="<%=image%>">
				</a>
				<h4>
					<a class="product-title" href="#"><%=productTitle%>
</a>
					<span class="product-desc"><%=productDesc%>
</span>
					<span class="product-price"><%=productPrice%>
</span>
				</h4>
			</div>

		</script> 




<script type="text/javascript">
if (document.images) {
    img1 = new Image();
    img1.src = "../../assets/images/ThreeDPlanner/end_frame.jpg";
}
</script>





	<script>
	$('video,audio').mediaelementplayer({
		features: [],
		iPadUseNativeControls: false,
   		iPhoneUseNativeControls: false,
   		iPadForceNativeControls:false,
   		iPhoneForceNativeControls:false,
		loop: false,
		success: function (mediaElement, domObject) { 
			mediaElement.addEventListener('ended', function(e)
			{
				$("#videoframe").html("<img style='border:none;' src='../../assets/images/ThreeDPlanner/end_frame.jpg' usemap='#Map' />");
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
