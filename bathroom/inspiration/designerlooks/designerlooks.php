
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
				$happyZoneNavActiveMenuItem = "Inspiration";
			   	include_once($serverBase."/includes/banners/banner-happyzone.php");
			?>
			</div>
			<div class="content-container">
				<div class="inner-wrapper">
					<ul class="breadcrumb">
						<li><a href="#">Bathroom</a> <span class="divider">/</span></li>
						<li><a href="#">Happiness Zone</a> <span class="divider">/</span></li>
						<li class="active page-branding text-brand">Designer Looks</li>
					</ul>
					<div class="row-fluid">
						<div class="span9">
							<h2 class="designerLooksHeader">Designer Looks</h2>
						</div>
						<div class="span3 designerLooksIndexLink">
							<a href="index.php">More Designer Bathrooms</a>
						</div>
					</div>
					
				</div><!-- /.inner-wrapper -->
			</div><!-- /.content-container -->	
			<hr class="doubleRedLine">
			<div class="content-container">
				<div class="inner-wrapper">
					<div class="designerLooksIntro">
						<div class="designerLooksIntroThumb">
							<img src="http://placehold.it/300x300.png/ccc/aaa" alt="placeholder">
						</div>
						<div class="designerLooksIntroText">
							<h3 class="designerLooksIntroName">See Richard Waller’s dream bathroom</h3>
							<h4 class="designerLooksIntroRole">Former Editor of Inside Out</h4>
							<p class="designerLooksIntroDesc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis molestie porta mi et congue. Proin tristique, velit vestibulum faucibus semper, est orci mattis elit, a porta erat turpis vitae libero. </p>
						</div>
					</div>
					<div id="designerLooksCarousel" class="carousel slide" data-bs-carousel="carousel">
						<div class="carousel-inner">
							<div class="active item">
								<img src="http://placehold.it/1440x700.png/ccc/aaa" alt="placeholder">
							</div>
							<div class="item">
								<img src="http://placehold.it/1440x700.png/ccc/aaa" alt="placeholder">
							</div>
						</div>
						<!-- Carousel nav -->
						<a class="carousel-control left" href="#designerLooksCarousel" data-slide="prev">&lsaquo;</a>
						<a class="carousel-control right" href="#designerLooksCarousel" data-slide="next">&rsaquo;</a>
					</div><!-- /.carousel -->


					<h3 class="designerLooksStoryHead">The Design Story</h3>
					<div class="designerLooksStory">
						<div class="designerLooksEditorContent">
							<div class="designerLooksEditorThumb">
								<img src="http://placehold.it/300x300.png/ccc/aaa" alt="placeholder">
							</div>
							<div class="designerLooksEditorInfo">
								<h4 class="designerLooksStoryName">Richard Waller</h4>
								<h5 class="designerLooksStoryRole">Former Editor of Inside Out</h5>
							</div>
							<p>“When the idea of creating my own ‘daream bathroom’ first arose, one name immediately sprung to mind: the visionary Sydney architect, Ian Moore. I’ve always admired his perspective on design and knew he would be able to turn my vision of a bathroom space that connects the inside and out into a work of art. I’m delighted with the way Ian has brought this conceptual bathroom to glorious virtual life.”</p>
							<p>Read more about Richard and Ian’s journey in the March/April Inside Out issue featuring the Kitchen and Bathroom special which is out now.</p>
						</div>
						<div class="designerLooksArchitectContent">
							<div class="designerLooksArchitectInfo">
								<h4 class="designerLooksStoryName">Ian Moore</h4>
								<h5 class="designerLooksStoryRole">Architect</h5>
							</div>
							<p>“This room has been designed in response to Richard’s brief for a space that connects inside and out. A large single sheet of glass allows total integration of the courtyard into the bathroom space. Materials were chosen for their longevity, timelessness and minimal maintenance: light-grey for flooring, seamless warm grey for the walls, a wall of mirror to reflect the landscaped courtyard and frameless sliding-glass doors. One element of surprise is a lilac-lined interior to the mirrored storage cabinets – a special request from Richard to incorporate his favourite colour in a discreet manner.” </p>
							<p>Ian Moore is director and principal architect of his own award-winning practice, Ian Moore Architects. Visit www.ianmoorearchitects.com or contact Ian Moore Architects via email, info@ianmoorearchitects.com, or phone, 02 8354 1887</p>
						</div>
					</div>

					<div class="row-fluid designerLooksWorkImages">
						<div class="span4">
							<img src="http://placehold.it/700x500.png/ccc/aaa" alt="placeholder">
						</div>
						<div class="span4">
							<img src="http://placehold.it/700x500.png/ccc/aaa" alt="placeholder">
						</div>
						<div class="span4">
							<img src="http://placehold.it/700x500.png/ccc/aaa" alt="placeholder">
						</div>
					</div>


					<h3 class="designerLooksStoryHead">Products Used</h3>

					<div class="row-fluid">
						<div class="span6">
							<div class="designerLooksProductsAccordion" id="designerLooksProducts">
								<div class="accordion-group">
									<div class="accordion-heading">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#designerLooksProducts" href="#collapse1">
											1. Alape Metaphor 750 Above Counter Basin
										</a>
									</div>
									<div id="collapse1" class="accordion-body collapse in">
										<div class="accordion-inner">
											<a href="http://www.reece.com.au/bathrooms/products/9502507">
												<img src="http://www.reece.com.au/products/showroom_main/9502507.jpg" alt="Kado Lure Freestanding Oval Bath Black">
											</a>
										</div>
									</div>
								</div><!-- /.accordion-group -->
								<div class="accordion-group">
									<div class="accordion-heading">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#designerLooksProducts" href="#collapse2">
											2. Sussex Pol 150 Wall Bath Set
										</a>
									</div>
									<div id="collapse2" class="accordion-body collapse">
										<div class="accordion-inner">
											<a href="http://www.reece.com.au/bathrooms/products/2262206">
											  <img src="http://www.reece.com.au/products/showroom_main/2262206.jpg" alt="Sussex Pol Floor Mount Mixer - Handshower in Black/Chrome">
											</a>
										</div>
									</div>
								</div><!-- /.accordion-group -->
								<div class="accordion-group">
									<div class="accordion-heading">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#designerLooksProducts" href="#collapse3">
											3. Axa Uno Wall Hung Inwall Toilet Pan
										</a>
									</div>
									<div id="collapse3" class="accordion-body collapse">
										<div class="accordion-inner">
											<a href="http://www.reece.com.au/bathrooms/products/9502795">
											<img src="http://www.reece.com.au/products/showroom_main/9502795.jpg" alt="Alape White WTPR Wall Basin with shelf">
											</a>
										</div>
									</div>
								</div><!-- /.accordion-group -->
								<div class="accordion-group">
									<div class="accordion-heading">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#designerLooksProducts" href="#collapse4">
											4. Alape Metaphor 750 Above Counter Basin
										</a>
									</div>
									<div id="collapse4" class="accordion-body collapse">
										<div class="accordion-inner">
											<a href="http://www.reece.com.au/bathrooms/products/2262315">
											  <img src="http://www.reece.com.au/products/showroom_main/2262315.jpg" alt="Nobili New Road Basin Mixer Black Chrome">
											</a>
										</div>
									</div>
								</div><!-- /.accordion-group -->
							</div>
						</div>
						<div class="span6">
							<img src="http://placehold.it/700x700.png/ccc/aaa" alt="placeholder">
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
		  	$jsScriptPaths = array(
		  		"/assets/js/jquery.mobile.custom.min.js",
		  		"/assets/js/bootstrap-transition.js", 
		  		"/assets/js/bootstrap-carousel.js",
		  		"/assets/js/bootstrap-collapse.js",
		  		"/assets/js/bootstrap-tab.js",
		  		"/assets/js/bootstrap-dropdown.js",
		  		"/assets/js/reece-ocnav.js",
		  		"/assets/js/reece-carousel.js"		  		
		  	); 
		  	include_once($serverBase."/includes/foot/scripts.php");
		?>

    </body>
</html>