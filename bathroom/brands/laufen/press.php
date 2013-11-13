
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
		    <div class="content-container">
				<div class="inner-wrapper">

					<ul class="breadcrumb">
						<li><a href="#">Bathroom</a> <span class="divider">/</span></li>
						<li><a href="#">Brands</a> <span class="divider">/</span></li>
						<li class="active page-branding text-brand">Laufen</li>
						<li class="pull-right visible-desktop">
							<div class="dropdown locationDropDown  pull-right">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">
									<i class="icon-map-marker icon">&nbsp;</i>
									<span class="location">Collingwood 3066</span>
									<span class="caret"></span>
								</a>
								<div class="dropdown-menu">
								<input type="text" placeholder="New Location">
									<ul>
										<li><a href="#">Collingwood</a></li>
										<li><a href="#">Richmond</a></li>
										<li><a href="#">Hawthorn</a></li>
										<li><a href="#">Toorak</a></li>
									</ul>						
								</div>
							</div>						
							<form class="headerNavSearchForm">
								<label for="headerSearchInput"><i class="icon-search icon">&nbsp;</i></label>
								<input type="search" id="headerSearchInput" placeholder="Search">
							</form>
						</li>						
					</ul>

				    <!-- CONTENT FOR DESKTOP -->
				    <section class="brandPage">
				    	<h2 class="brandImageWrap">
				    		<img src="/assets/images/hz-brand/laufen-logo.png" alt="Laufen" />
				    	</h2>
				    	<div class="brandWrap">
				    		<a id="showBrandMenu" class="visible-phone collapsed" data-toggle="collapse" href="#brandNav">Menu<span class="icon"><span class="caret"></span></span></a>
					    	<ul id="brandNav" class="brandList collapse">
					    		<li>
					    			<a href="index.php" > About Laufen</a>
					    		</li><li>
					    			<a href="designers.php" >Our Designers</a>
					    		</li><li>
					    			<a href="products.php" >Products</a>
					    		</li><li>
					    			<a href="selector.php" >Selector</a>
					    		</li><li>
					    			<a href="video.php" >Video</a>
					    		</li><li class="active">
					    			<a href="press.php" >Press</a>
					    		</li>
					    	</ul>
					    	<div class="brandContentWrap">
								<div class="brandContent" id="press">
									<div class="brandIntro">
										<h3>In the Press</h3>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit vivamus feugiat nisl a erat adipiscing bibendum. 
										</p>										
									</div>
									<ul class="brandPressReleases">										
									<?php
										for($j=0; $j < 5; $j++){
											?>
											<li>
												<div class="brandPressDate">
													<time datetime="2013-11"><span>Nov</span><span>2013</span></time>
												</div>
												<div class="brandPressDesc">
													<h4>Inside Out Magazine</h4>
													<p>Products lorem ipsum dolor sit amet, consectetur adipiscing elit vivamus feugiat.</p>
												</div>
												<div class="brandPressDownloadLink">
													<a href="#" class="brandPressDownloadLink"><i class="icon-download icon-large"></i> Download PDF</a>
												</div>
											</li>
											<?php
										}
									?>
									</ul>									
								</div><!-- /#press -->

							</div>
				    	</div>
				    </section>

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
    </body>
</html>