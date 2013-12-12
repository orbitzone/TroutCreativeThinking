
	<?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>

	<?php 
	  	$cssScriptPaths = array(
	  		"/assets/css/reece-products.css",
	  		"/assets/css/reece-bathrooms.css"		
	  	); 
	  	include_once($serverBase."/includes/head/head-generic.php");
	?>		

    <body>
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

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
								<img src="http://placehold.it/1440x700.png/ccc/aaa" alt="placeholder">
							</div>
							<div class="item">
								<img src="http://placehold.it/1440x700.png/ccc/aaa" alt="placeholder">
							</div>
						</div>
						<!-- Carousel nav -->
						<a class="carousel-control left" href="#galleryCarousel" data-slide="prev">&lsaquo;</a>
						<a class="carousel-control right" href="#galleryCarousel" data-slide="next">&rsaquo;</a>
					</div><!-- /.carousel -->
					<div class="row-fluid">
						<div class="span3">
							<div class="galleryFilter">
								<h3>
								<a class="showFilter show-mobile" data-toggle="collapse" href="#galleryFilter">
								 <span class="icon-bar"></span>
								 <span class="icon-bar"></span>
								 <span class="icon-bar"></span>	
								</a>
								Gallery Filter </h3>
								<div id="galleryFilter" class="collapse">
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
								</div>								
							</div><!-- /.galleryFilter -->
						</div>
						<div class="span9">
							<ul class="galleryThumbList">
							<?php for ($i = 1; $i < 13 ; $i++) {

								if( $i%3 == 1){
									?>
									<li class="galleryThumbItem clearFloat">
									<?php
								}else{
								?>
								<li class="galleryThumbItem">
								<?php } ?>
									<figure>
										<img src="http://placehold.it/750x500.png/ccc/aaa" alt="placeholder">
										<figcaption>
											<strong class="galleryThumbPlace">Elsternwick</strong>
											<span class="galleryThumbState">Victoria</span>
										</figcaption>
									</figure>

								</li>
								<?php } ?>
							</ul>
							<div class="fb-comments" data-href="http://example.com/comments" data-numposts="1" data-colorscheme="light"></div>
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
			var $ajaxURL = "detailspage.php";
			$('.galleryThumbList li.galleryThumbItem figure').click(function(){
				if ( $(this).parent('li').hasClass('active') ) return;// avoid reload
				$('.galleryThumbList li.galleryThumbItem').removeClass('active').css({'margin-bottom':'0px'});// Remove the active class and the margin used to display details
				$('#galleryDetailPage').remove(); // Removing the details
				$('#thumbCaretWrap').remove(); // Removing the caret
				var $thisEl = $(this).parent('li.galleryThumbItem');
				$thisEl.addClass('active').append('<div id="thumbCaretWrap"><span class="caret"></span></div><div id="galleryDetailPage" class="galleryDetailPage"></div>');
				$.get($ajaxURL,function(data){
					$("#galleryDetailPage").html(data);// load data
					$( window ).resize(fixThumbHeight);// fix height on resize
					$( "#galleryDetailPage img").load(fixThumbHeight);// Fix height after all images load
					$('#galleryDetailPage .galleryThumbTabs a').click(function(e){// initiate tabs
						e.preventDefault();
						$(this).tab('show');
					});
					$('#galleryDetailPage .galleryThumbTabs a').on('shown', fixThumbHeight);
					$('.carousel').carousel(); // initiate carousel after ajax content load
					/* function from bootstrap-carousel.js after ajax content load */
					$('#galleryDetailPage').on('click.carousel.data-api', '[data-slide]', function (e) {
						var $this = $(this), href
						  , $target = $($this.attr('data-target') || (href = $this.attr('href')) && href.replace(/.*(?=#[^\s]+$)/, '')) //strip for ie7
						  , options = $.extend({}, $target.data(), $this.data())
						  , slideIndex
						$target.carousel(options)
						if (slideIndex = $this.attr('data-slide-to')) {
						  $target.data('carousel').pause().to(slideIndex).cycle()
						}
						e.preventDefault()
					});										
				});				
			});
			function fixThumbHeight(){
				$('li.galleryThumbItem.active').css({'margin-bottom':$('li.galleryThumbItem.active .galleryDetailPage').height()});;
			}
		</script>
    </body>
</html>