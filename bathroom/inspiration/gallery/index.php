
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
					<div id="galleryCarousel" class="carousel slide" data-bs-carousel="carousel">
						<div class="carousel-inner">
							<div class="active item">
								<img src="http://placehold.it/1440x700.png/999/000" alt="placeholder">
							</div>
							<div class="item">
								<img src="http://placehold.it/1440x700.png/999/000" alt="placeholder">
							</div>
						</div>
						<!-- Carousel nav -->
						<a class="carousel-control left" href="#galleryCarousel" data-slide="prev">&lsaquo;</a>
						<a class="carousel-control right" href="#galleryCarousel" data-slide="next">&rsaquo;</a>
					</div><!-- /.carousel -->
					<div class="row-fluid">
						<div class="span3">
							<div class="galleryFilter">
								<h3> Gallery Filter </h3>
								<h4>Style</h4>
								<ul class="filterList">
									<li><label class="checkbox"><input type="checkbox" name="style" value="Classic">Classic</label></li>
									<li><label class="checkbox"><input type="checkbox" name="style" value="Contemporary">Contemporary</label></li>
									<li><label class="checkbox"><input type="checkbox" name="style" value="Colourful">Colourful</label></li>
									<li><label class="checkbox"><input type="checkbox" name="style" value="Family">Family Space</label></li>
									<li><label class="checkbox"><input type="checkbox" name="style" value="View">Room with a View</label></li>
									<li><label class="checkbox"><input type="checkbox" name="style" value="Retreat">Retreat</label></li>
									<li><label class="checkbox"><input type="checkbox" name="style" value="CompetitionWinners">Previous Competition Winners</label></li>
								</ul>
								<h4>Trends</h4>
								<ul class="filterList">
									<li><label class="checkbox"><input type="checkbox" name="style" value="Classic">Hotel Inspired</label></li>
									<li><label class="checkbox"><input type="checkbox" name="style" value="Contemporary">Black &amp; White</label></li>
									<li><label class="checkbox"><input type="checkbox" name="style" value="Colourful">Powder Room</label></li>
									<li><label class="checkbox"><input type="checkbox" name="style" value="Family">Organic</label></li>
									<li><label class="checkbox"><input type="checkbox" name="style" value="View">Neoclassic</label></li>
									<li><label class="checkbox"><input type="checkbox" name="style" value="Retreat">Retreat</label></li>
									<li><label class="checkbox"><input type="checkbox" name="style" value="CompetitionWinners">Previous Competition Winners</label></li>
								</ul>							
								<h4>Features</h4>
								<ul class="filterList last">
									<li><label class="checkbox"><input type="checkbox" name="style" value="Ensuite">Ensuite</label></li>
									<li><label class="checkbox"><input type="checkbox" name="style" value="Bathtub">Bathtub</label></li>
									<li><label class="checkbox"><input type="checkbox" name="style" value="Twin Basins">Twin Basins</label></li>
									<li><label class="checkbox"><input type="checkbox" name="style" value="Twin Showers">Twin Showers</label></li>
									<li><label class="checkbox"><input type="checkbox" name="style" value="Heated Towel rails">Heated Towel rails</label></li>
								</ul>								
							</div><!-- /.galleryFilter -->
						</div>
						<div class="span9">
							<ul class="galleryThumbList">
							<?php for ($i = 1; $i < 13 ; $i++) { ?>
								<li class="galleryThumbItem">
									<figure>
										<img src="http://placehold.it/750x500.png/999/000" alt="placeholder">
										<figcaption>
											<strong class="galleryThumbPlace">Elsternwick</strong>
											<span class="galleryThumbState">Victoria</span>
										</figcaption>
									</figure>



								</li>
								<?php } ?>
							</ul>
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
		  		"/assets/js/reece-carousel.js",
		  	); 
		  	include_once($serverBase."/includes/foot/scripts.php");
		?>
		<script type="text/javascript">
			$('.galleryThumbList li.galleryThumbItem').click(function(){

				$('.galleryThumbList li.galleryThumbItem').removeClass('active').css({'margin-bottom':'0px'});
				$('#galleryDetailPage').remove();
				$(this).addClass('active');
				$(this).append('<div id="galleryDetailPage" class="galleryDetailPage"></div>')
				$('#galleryDetailPage').click(function(e){
					e.stopPropagation();
				})
				$( "#galleryDetailPage" ).load( "detailspage.php", function(){
					fixThumbHeight();
					$( "#galleryDetailPage img").load(fixThumbHeight);
					$('.carousel').carousel();
					$('#galleryThumbTabs3 a').click(function(e){
						e.preventDefault();
						$(this).tab('show');
					});
				});
				
			})

			function fixThumbHeight(){
				console.log($('li.galleryThumbItem.active .galleryDetailPage').height());
				$('li.galleryThumbItem.active').css({'margin-bottom':$('li.galleryThumbItem.active .galleryDetailPage').height()});;
			}
		</script>
    </body>
</html>