 
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
							<img src="http://placehold.it/1014x422" alt="videoPlaceholder">
								<br />
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
								<a href="http://www.reece.com.au:8080/vp" class="btn btn-danger btn-large btn-block" style="margin-auto">
									Start Planning! 
									<i class="icon-play">
									</i>
								</a>
							</div>
						</div>
					</div>
					<div class="main-item">
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
								<img src="../../assets/images/ThreeDPlanner/thumb.jpg" alt="">
								</div>
								<div class="span2">
									<img src="../../assets/images/ThreeDPlanner/thumb.jpg" alt="">
									</div>
									<div class="span2">
										<img src="../../assets/images/ThreeDPlanner/thumb.jpg" alt="">
										</div>
										<div class="span2">
											<img src="../../assets/images/ThreeDPlanner/thumb.jpg" alt="">
											</div>
											<div class="span2">
												<img src="../../assets/images/ThreeDPlanner/thumb.jpg" alt="">
												</div>
												<div class="span2">
													<img src="../../assets/images/ThreeDPlanner/thumb.jpg" alt="">
													</div>
												</div>
											</div>
											<div class="main-item main-item-grey">
												<div class="row-fluid">
													<div class="span2">
														<img src="../../assets/images/ThreeDPlanner/2d-layout.png" alt="">
														</div>
														<div class="span8">
															<h5>
																Visit the 2D Bathroom Planner and grab your plans. 
															</h5>
															<p>
																If you've used the previous version of our Bathroom Planner, you can visit this page to view your previously created plans.This tool will be retired on DD Month YYYY So, if you'd like to keep this information for your reference please log in and download or print out your plans before then. Your plans will not be usable in the new 3D Planner. 
															</p>
														</div>
														<div class="span2">
															<a href="http://www.reece.com.au:8080/vp" class="btn btn-inverse  btn-block" style="margin-auto">
																Go to the 2D planner 
																<i class="icon-play">
																</i>
															</a>
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
				"/assets/js/reece-ocnav.js",
				"/assets/js/micro-template.js",
				"/assets/js/reece-ajax-content-loader.js",
				"/assets/js/reece-carousel.js"
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
									</body>
								</html>
