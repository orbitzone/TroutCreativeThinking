
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
						<div class="span7">
							<h2 class="designerLooksHeader">Designer Looks</h2>
						</div>
						<div class="span5 designerLooksIndexLink">
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
							<img src="/assets/images/cameron-bruhn/cameron-bruhn.jpg" alt="Cameron Bruhn">
						</div>
						<div class="designerLooksIntroText">
							<h3 class="designerLooksIntroName">See Cameron Bruhn’s dream bathroom</h3>
							<h4 class="designerLooksIntroRole">Editorial Director, Architecture Media</h4>
							<p class="designerLooksIntroDesc">Architecture Media is one of Australia’s leading publishers of print and online publications covering architecture, design and building and product services with titles including Architecture Australia, Houses, Artichoke and Selector.</p>
						</div>
					</div>
					<div id="designerLooksCarousel" class="carousel slide designerLooksCarousel" data-bs-carousel="carousel">
						<h3 class="carouselTitle"><a href="#designerLooksStoryHead">Cameron Bruhn’s Vision</a></h3>
						<h4 class="viewProductsLink"><a href="#designerLooksProducts">View Products &nbsp;<i class="icon-caret-right icon-large">&nbsp;</i></a></h4>
						<div class="carousel-inner">
							<div class="active item">
								<img src="/assets/images/cameron-bruhn/04_Bathhouse.jpg" alt="Bathhouse 1">
							</div>
							<div class="item">
								<img src="/assets/images/cameron-bruhn/05_Bathhouse.jpg" alt="Bathhouse 2">
							</div>
							<div class="item">
								<img src="/assets/images/cameron-bruhn/08_Powder-Room.jpg" alt="Powder room">
							</div>
							<div class="item">
								<img src="/assets/images/cameron-bruhn/03_Courtyard.jpg" alt="Courtyard">
							</div>
						</div>
						<ol class="carousel-indicators">
							<li data-target="#designerLooksCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#designerLooksCarousel" data-slide-to="1"></li>
							<li data-target="#designerLooksCarousel" data-slide-to="2"></li>
							<li data-target="#designerLooksCarousel" data-slide-to="3"></li>
						</ol>						
						<!-- Carousel nav -->
						<a class="carousel-control left" href="#designerLooksCarousel" data-slide="prev">&lsaquo;</a>
						<a class="carousel-control right" href="#designerLooksCarousel" data-slide="next">&rsaquo;</a>
					</div><!-- /.carousel -->


					<h3 id="designerLooksStoryHead" class="designerLooksStoryHead">The Design Story</h3>
					<div class="designerLooksStory">
						<div class="designerLooksEditorContent">
							<div class="designerLooksEditorThumb">
								<img src="/assets/images/cameron-bruhn/magazine-covers.png" alt="Architecture Media Magazines">
							</div>
							<div class="designerLooksEditorInfo">
								<h4 class="designerLooksStoryName">Cameron Bruhn</h4>
								<h5 class="designerLooksStoryRole">Editorial Director</h5>
								<h5 class="designerLooksStoryRole">Architecture Media</h5>
							</div>
							<p>“On weekends, I like to entertain and socialise with friends in the garden. In thinking about my dream bathroom, I started to think about the way a garden is used. Could a yard be re-imagined as a public space, complete with a bathroom? This is the idea I wanted to explore.</p>
							<p>If you overlay the way a backyard garden is used each day with the amenities of public space, one thing emerges for me – the need for a garden to have its own ‘facilities' that make it independent to the house. This is how I came to the idea of incorporating an Australian icon - the dunny block - but reimagined for my dream bathroom. My project is in three parts: an outdoor bath (I visited a Japanese onsen last year and loved it), storage for firewood and garden tools, and a toilet. In addition, the bathroom could also incorporate the other “bits” of garden life, like the clothesline and bin store.</p>
							<p>To resolve all this, Brisbane-based architects Owen and Vokes and Peters designed a bathhouse pavilion set in the garden, with a small courtyard at its centre. Its design successfully provides a space for many different uses – private soaks in the tub, entertaining friends on a Sunday afternoon or tidying up the garden tools.”</p>
							
						</div>
						<div class="designerLooksArchitectContent">
							<div class="designerLooksArchitectInfo">
								<h4 class="designerLooksStoryName">Aaron Peters</h4>
								<h5 class="designerLooksStoryRole">Architect</h5>
								<h5 class="designerLooksStoryRole">Owen and Vokes and Peters</h5>
							</div>
							<p>“Cameron is a fellow who likes to entertain, preferably in the garden. His brief to us placed particular emphasis on establishing a strong connection to nature and recalled his experiences visiting Japanese onsen bathhouses while on holiday. Therefore, it seemed possible that Cameron’s ‘dream’ bathroom could in fact be a bathhouse pavilion set in the garden. We combined this bathhouse with a tool shed and firewood store to create a small courtyard for entertaining guests. The bathing pavilion faces away from the courtyard with a low-slung opening framing a view of the garden; a perfect spot to lean back in the tub and unwind.”</p>
							<p class="companyInfo">Owen and Vokes and Peters are a small architectural practice located in Brisbane. Founded in 2003, the practice specialises in boutique commercial, residential and institutional projects.</p>
							<p>Visit <a href="http://www.owenandvokesandpeters.com">www.owenandvokesandpeters.com</a></p>
						</div>
					</div>

					<div class="row-fluid designerLooksWorkImages">
						<div class="span4">
							<img src="/assets/images/cameron-bruhn/mood_01.jpg" alt="placeholder">
						</div>
						<div class="span4">
							<img src="/assets/images/cameron-bruhn/mood_02.jpg" alt="placeholder">
						</div>
						<div class="span4">
							<img src="/assets/images/cameron-bruhn/mood_03.jpg" alt="placeholder">
						</div>
					</div>


					<h3 class="designerLooksStoryHead">Products Used</h3>

					<div class="row-fluid">
						<div class="span6">
							<div class="designerLooksProductsAccordion" id="designerLooksProducts">
								<div class="accordion-group">
									<div class="accordion-heading">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#designerLooksProducts" href="#collapse1">
											<i class="icon-chevron-down">&nbsp;</i> 1. Hydrotherm Milan Floor to Ceiling Heated Rail
										</a>
									</div>
									<div id="collapse1" class="accordion-body collapse ">
										<div class="accordion-inner">
											<a href="http://www.reece.com.au/bathrooms/products/119548">
												<img src="http://www.reece.com.au/products/showroom_main/119548.jpg" alt="Hydrotherm Milan Floor to Ceiling Heated Rail">
											</a>
											<div class="accordionAction">
											<a target="_blank" href="http://www.reece.com.au/bathrooms/products/119548" class="btn">Product Details</a>
											</div>
										</div>
									</div>
								</div><!-- /.accordion-group -->
								<div class="accordion-group">
									<div class="accordion-heading">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#designerLooksProducts" href="#collapse2">
											<i class="icon-chevron-down">&nbsp;</i> 2. Kartell by Laufen Tangerine Orange Stool
										</a>
									</div>
									<div id="collapse2" class="accordion-body collapse">
										<div class="accordion-inner">
											<a href="http://www.reece.com.au/bathrooms/products/9504571">
											  <img src="/assets/images/cameron-bruhn/Kartell-Laufen-Stool-Tangerine-Orange.jpg" alt="Kartell by Laufen Tangerine Orange Stool">
											</a>
											<div class="accordionAction">
											<a target="_blank" href="http://www.reece.com.au/bathrooms/products/9504571" class="btn">Product Details</a>
											</div>
										</div>
									</div>
								</div><!-- /.accordion-group -->
								<div class="accordion-group">
									<div class="accordion-heading">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#designerLooksProducts" href="#collapse3">
											<i class="icon-chevron-down">&nbsp;</i> 3. Posh Solus 1780 Freestanding Bath
										</a>
									</div>
									<div id="collapse3" class="accordion-body collapse">
										<div class="accordion-inner">
											<a href="http://www.reece.com.au/bathrooms/products/9504385">
											<img src="http://www.reece.com.au/products/showroom_main/9504385.jpg" alt="Posh Solus 1780 Freestanding Bath">
											</a>
											<div class="accordionAction">
											<a target="_blank" href="http://www.reece.com.au/bathrooms/products/9504385" class="btn">Product Details</a>
											</div>
										</div>
									</div>
								</div><!-- /.accordion-group -->
								<div class="accordion-group">
									<div class="accordion-heading">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#designerLooksProducts" href="#collapse4">
											<i class="icon-chevron-down">&nbsp;</i> 4. Sussex Scala Floor Bath Mixer Square
										</a>
									</div>
									<div id="collapse4" class="accordion-body collapse">
										<div class="accordion-inner">
											<a href="http://www.reece.com.au/bathrooms/products/2262413">
											  <img src="http://www.reece.com.au/products/showroom_main/2262413.jpg" alt="Sussex Scala Floor Bath Mixer Square">
											</a>
											<div class="accordionAction">
											<a target="_blank" href="http://www.reece.com.au/bathrooms/products/2262413" class="btn">Product Details</a>
											</div>
										</div>
									</div>
								</div><!-- /.accordion-group -->
								<div class="accordion-group">
									<div class="accordion-heading">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#designerLooksProducts" href="#collapse5">
											<i class="icon-chevron-down">&nbsp;</i> 5. Ideal Standard Tonic  BTW Close Coupled Toilet Suite
										</a>
									</div>
									<div id="collapse5" class="accordion-body collapse">
										<div class="accordion-inner">
											<a href="http://www.reece.com.au/bathrooms/products/9502996">
											  <img src="http://www.reece.com.au/products/showroom_main/9502996.jpg" alt="Ideal Standard Tonic  BTW Close Coupled Toilet Suite">
											</a>
											<div class="accordionAction">
											<a target="_blank" href="http://www.reece.com.au/bathrooms/products/9502996" class="btn">Product Details</a>
											</div>
										</div>
									</div>
								</div><!-- /.accordion-group -->
								<div class="accordion-group">
									<div class="accordion-heading">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#designerLooksProducts" href="#collapse6">
											<i class="icon-chevron-down">&nbsp;</i> 6. White Stone Hox Mini Above/Wall Basin Right
										</a>
									</div>
									<div id="collapse6" class="accordion-body collapse">
										<div class="accordion-inner">
											<a href="http://www.reece.com.au/bathrooms/products/9500530">
											  <img src="http://www.reece.com.au/products/showroom_main/9500530.jpg" alt="White Stone Hox Mini Above/Wall Basin Right">
											</a>
											<div class="accordionAction">
											<a target="_blank" href="http://www.reece.com.au/bathrooms/products/9500530" class="btn">Product Details</a>
											</div>
										</div>
									</div>
								</div><!-- /.accordion-group -->
								<div class="accordion-group">
									<div class="accordion-heading">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#designerLooksProducts" href="#collapse7">
											<i class="icon-chevron-down">&nbsp;</i> 7. Mizu Drift Basin Mixer
										</a>
									</div>
									<div id="collapse7" class="accordion-body collapse">
										<div class="accordion-inner">
											<a href="http://www.reece.com.au/bathrooms/products/9502955">
											  <img src="http://www.reece.com.au/products/showroom_main/9502955.jpg" alt="Mizu Drift Basin Mixer">
											</a>
											<div class="accordionAction">
											<a target="_blank" href="http://www.reece.com.au/bathrooms/products/9502955" class="btn">Product Details</a>
											</div>
										</div>
									</div>
								</div><!-- /.accordion-group -->
								<div class="accordion-group">
									<div class="accordion-heading">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#designerLooksProducts" href="#collapse8">
											<i class="icon-chevron-down">&nbsp;</i> 8. Mizu Bottle Trap 40mm Round Bottle Trap
										</a>
									</div>
									<div id="collapse8" class="accordion-body collapse">
										<div class="accordion-inner">
											<a href="http://www.reece.com.au/bathrooms/products/2261992">
											  <img src="http://www.reece.com.au/products/showroom_main/2261992.jpg" alt="Mizu Bottle Trap 40mm Round Bottle Trap">
											</a>
											<div class="accordionAction">
											<a  target="_blank" href="http://www.reece.com.au/bathrooms/products/2261992" class="btn">Product Details</a>
											</div>
										</div>
									</div>
								</div><!-- /.accordion-group -->
							</div>
						</div>
						<div class="span6">
							<img src="/assets/images/cameron-bruhn/floor-plan-dotted.jpg" alt="floor plan" usemap="#prodmap" id="floorplan">
							<map name="prodmap" id="productmap">
								<area shape="circle" coords="558,130,20" class="accordion-toggle area1" data-toggle="collapse" data-parent="#designerLooksProducts" href="#collapse1" title="1. Hydrotherm Milan Floor to Ceiling Heated Rail">
								<area shape="circle" coords="537,378,20" class="accordion-toggle area2" data-toggle="collapse" data-parent="#designerLooksProducts" href="#collapse2" title="2. Kartell by Laufen Tangerine Orange Stool">
								<area shape="circle" coords="582,351,20" class="accordion-toggle area3" data-toggle="collapse" data-parent="#designerLooksProducts" href="#collapse3" title="3. Posh Solus 1780 Freestanding Bath">
								<area shape="circle" coords="597,304,20" class="accordion-toggle area4" data-toggle="collapse" data-parent="#designerLooksProducts" href="#collapse4" title="4. Sussex Scala Floor Bath Mixer Square">
								<area shape="circle" coords="331,431,20" class="accordion-toggle area5" data-toggle="collapse" data-parent="#designerLooksProducts" href="#collapse5" title="5. Ideal Standard Tonic  BTW Close Coupled Toilet Suite">
								<area shape="circle" coords="481,444,20" class="accordion-toggle area6" data-toggle="collapse" data-parent="#designerLooksProducts" href="#collapse6" title="6. White Stone Hox Mini Above/Wall Basin Right">
								<area shape="circle" coords="423,389,20" class="accordion-toggle area7" data-toggle="collapse" data-parent="#designerLooksProducts" href="#collapse7" title="7. Mizu Drift Basin Mixer">
								<area shape="circle" coords="468,389,20" class="accordion-toggle area8" data-toggle="collapse" data-parent="#designerLooksProducts" href="#collapse8" title="8. Mizu Bottle Trap 40mm Round Bottle Trap">
							</map>
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
		  		"/assets/js/jquery.ImageMaps.min.js"		  		
		  	); 
		  	include_once($serverBase."/includes/foot/scripts.php");
		?>
		<script type="text/javascript">
			$(function(){
				$('#designerLooksProducts .accordion-body').on('hide', function () {
					$(this).parent('.accordion-group').find('i.icon-chevron-up').removeClass('icon-chevron-up').addClass('icon-chevron-down')
				});
				$('#designerLooksProducts .accordion-body').on('show', function () {
					$(this).parent('.accordion-group').find('i.icon-chevron-down').removeClass('icon-chevron-down').addClass('icon-chevron-up')
				});	

				//makes hotspots responsive
				$('#floorplan').rwdImageMaps();

			});		
		</script>		

    </body>
</html>