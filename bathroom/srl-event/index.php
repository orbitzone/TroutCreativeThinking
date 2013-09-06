 
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
	<div id="srlEventWrapper" class="ocmain-wrapper">
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

				<div class="row-fluid  srl-titleBar">


					<div class="span8">
						<p>School of Real Living</p>
					</div>


					<div class="span4">
						<div class="btn-group pull-right">
						  <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						    View Past Events
						    <span class="caret"></span>
						  </a>
							  <ul class="dropdown-menu">
							   <li><a href="#">link 1</a></li>
							   <li><a href="#">link 2</a></li>
							   <li><a href="#">link 3</a></li>
							  </ul>
						</div>
					</div>
				</div>


				<div class="row-fluid">
					<div class="span12 srl-header">
						<div>
							<img src="../../assets/images/srl-event/slr-header.jpg">
						</div>
					</div>
				</div>

				<div class="row-fluid">
					<div class="span6 srl-content">
						<img class="creatingHeading" src="../../assets/images/srl-event/creating-bathroom-happiness.png" alt="Creating Bathroom Happiness">
					
							<p><span>The School of Real Living was held on Wednesday 14th August at B2 Studios in Sydney. Hosted by Deb Bibby, Real Living Editor.</span></p>

							<p>Real living readers were treated to expert advice from &lsquo;The Block&rsquo; stars Madi and Jarrod along with some handy tips for creating Bathroom Happiness from the Reece team. After the presentations, readers got the opportunity to spend one-on-one time with Madi and Jarrod, along with Reece experts and editor Deb Bibby, to help solve their bathroom dilemas.</p>

							<p>As they sought advice, they were able to create their own bathroom mood boards as inspiration for their dream bathrooms. 4 winners were awarded prizes from Reece, Endota and Real Living.</p>
						<br />
						<div class="video-container">
							<iframe src="//player.vimeo.com/video/73103931?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
						</div>
					</div>

					<div class="span6 srl-gallery">
						<img src="../../assets/images/srl-event/gallery.png" alt="Gallery">
						<div class="row-fluid">

							<div class="span4">
								<a href="#" class="showWindow" data-large="../../assets/images/srl-event/gallery/image_1.jpg">
									<img src="../../assets/images/srl-event/thumbs/thumb_1.jpg" alt="">
                            	</a>
									<a href="#" class="showWindow" data-large="../../assets/images/srl-event/gallery/image_4.jpg">
									<img src="../../assets/images/srl-event/thumbs/thumb_4.jpg" alt="">
                            	</a>
									<a href="#" class="showWindow" data-large="../../assets/images/srl-event/gallery/image_7.jpg">
									<img src="../../assets/images/srl-event/thumbs/thumb_7.jpg" alt="">
                            	</a>
							</div>
							<div class="span4">
								<a href="#" class="showWindow" data-large="../../assets/images/srl-event/gallery/image_2.jpg">
									<img src="../../assets/images/srl-event/thumbs/thumb_2.jpg" alt="">
                            	</a>
									<a href="#" class="showWindow" data-large="../../assets/images/srl-event/gallery/image_5.jpg">
									<img src="../../assets/images/srl-event/thumbs/thumb_5.jpg" alt="">
                            	</a>
									<a href="#" class="showWindow" data-large="../../assets/images/srl-event/gallery/image_8.jpg">
									<img src="../../assets/images/srl-event/thumbs/thumb_8.jpg" alt="">
                            	</a>
							</div>
							<div class="span4">
								<a href="#" class="showWindow" data-large="../../assets/images/srl-event/gallery/image_3.jpg">
									<img src="../../assets/images/srl-event/thumbs/thumb_3.jpg" alt="">
                            	</a>
									<a href="#" class="showWindow" data-large="../../assets/images/srl-event/gallery/image_6.jpg">
									<img src="../../assets/images/srl-event/thumbs/thumb_6.jpg" alt="">
                            	</a>
									<a href="#" class="showWindow" data-large="../../assets/images/srl-event/gallery/image_9.jpg">
									<img src="../../assets/images/srl-event/thumbs/thumb_9.jpg" alt="">
                            	</a>
							</div>

						</div>	


						
					
					</div>




				</div>

				<br />

				<div class="row-fluid">

					<div class="span6">



	                    <div id="TipsCarousel1" class="carousel slide" data-bs-carousel="carousel" data-bs-carousel-interval="3000" >
                          <div class="carousel-inner">
                            <div class="active item"><img src="../../assets/images/srl-event/tip-1.jpg" alt=""></div>
                            <div class="item"><img src="../../assets/images/srl-event/tip-3.jpg" alt=""></div>
                          </div>
                          <a class="carousel-control left" href="#TipsCarousel1" data-slide="prev">&lsaquo;</a>
                          <a class="carousel-control right" href="#TipsCarousel1" data-slide="next">&rsaquo;</a>
                        </div>



						</div>

					<div class="span6">
						
							<div id="TipsCarousel2" class="carousel slide" data-bs-carousel="carousel" data-bs-carousel-interval="3000" >
	                          <div class="carousel-inner">
	                            <div class="active item"><img src="../../assets/images/srl-event/tip-1.jpg" alt=""></div>
	                            <div class="item"><img src="../../assets/images/srl-event/tip-3.jpg" alt=""></div>
	                          </div>
	                          <a class="carousel-control left" href="#TipsCarousel2" data-slide="prev">&lsaquo;</a>
	                          <a class="carousel-control right" href="#TipsCarousel2" data-slide="next">&rsaquo;</a>
	                        </div>
					
					</div>
				</div>





			</div>	
		</div>													








<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-body">

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
				"/assets/js/modal-window-fix.js",
				"/assets/js/reece-ocnav.js",
				"/assets/js/reece-carousel.js"
			]; 
		   	include_once($serverBase."/includes/foot/scripts.php");
		?>
																</body>
															</html>
