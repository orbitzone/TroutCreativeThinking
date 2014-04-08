
	<?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>

	<?php 
	  	$cssScriptPaths = array(
	  		"/assets/css/reece-products.css",
	  		"/assets/css/reece-bathrooms.css"			
	  	); 
	  	include_once($serverBase."/includes/head/head-generic.php");
	?>		

    <body class="withHappinessSubNav">
		<div class="ocmain-wrapper">
  <div class="navbar navbar-fixed-top topNav">
    <?php
					$genericNavActiveMenuItem = "Bathrooms";
				   	include_once($serverBase."/includes/nav/nav-generic.php");
				?>
  </div>
    <?php include_once($serverBase."/includes/nav/nav-happiness.php"); ?>
		    <div class="content-container">
				<div class="inner-wrapper">

					<ul class="breadcrumb">
						<li><a href="#">Bathroom</a> <span class="divider">/</span></li>
						<li><a href="#">Brands</a> <span class="divider">/</span></li>
						<li class="active page-branding text-brand">Laufen</li>					
					</ul>

				    <!-- CONTENT FOR DESKTOP -->
				    <section class="brandPage">
				    	<h2 class="brandImageWrap">
				    		<img src="/assets/images/hz-brand/laufen-logo.png" width="230px" alt="Laufen" />
				    	</h2>
				    	<div class="brandWrap">
				    		<a id="showBrandMenu" class="visible-phone collapsed" data-toggle="collapse" href="#brandNav">Menu<span class="icon"><span class="caret"></span></span></a>
					    	<ul id="brandNav" class="brandList collapse">
					    		<li>
					    			<a href="index.php" > About Laufen</a>
					    		</li><li>
					    			<a href="designers.php" >Our Designers</a>
					    		</li><li class="active">
					    			<a href="products.php" >Products</a>
					    		</li><li>
					    			<a href="selector.php" >Selector</a>
					    		</li><li>
					    			<a href="video.php" >Video</a>
					    		</li><li>
					    			<a href="press.php" >Press</a>
					    		</li>
					    	</ul>
					    	<div class="brandContentWrap">

								<div class="brandContent" id="products">
									<ul class="brandProdRangeList">
										<li>
											<div class="productImage">
												<img src="/assets/images/hz-brand/oneilbagno.jpg" alt="Laufen" />
											</div>
											<div class="brandProdRangeLogoWrap">
												<img class="brandImg" src="/assets/images/hz-brand/rangeLogo.jpg" alt="One ILBAGNOALESSI" />
												<a class="viewRangeLink">View this Range</a>
											</div>
											<div class="brandProdRangeDesc">
												<h4>Stefano Giovannoni from Italy</h4>
												<p>
													consectetur adipiscing elit. Phasellus risus mauris, blandit non pharetra at, viverra non augue. In hac habitasse platea dictumst.
												</p>
											</div>
										</li>
										<li>
											<div class="productImage">
												<img src="/assets/images/hz-brand/palomba.jpg" alt="Laufen" />
											</div>
											
											<div class="brandProdRangeLogoWrap">
												<img class="brandImg" src="/assets/images/hz-brand/rangeLogo.jpg" alt="One ILBAGNOALESSI" />
												<a class="viewRangeLink">View this Range</a>
											</div>
											<div class="brandProdRangeDesc">
												<h4>Stefano Giovannoni from Italy</h4>
												<p>
													consectetur adipiscing elit. Phasellus risus mauris, blandit non pharetra at, viverra non augue. In hac habitasse platea dictumst.
												</p>
											</div>
										</li>
										<li>
											<div class="productImage">
												<img src="/assets/images/hz-brand/mimo.jpg" alt="Laufen" />
											</div>
											<div class="brandProdRangeLogoWrap">
												<img class="brandImg" src="/assets/images/hz-brand/rangeLogo.jpg" alt="One ILBAGNOALESSI" />
												<a class="viewRangeLink">View this Range</a>
											</div>
											<div class="brandProdRangeDesc">
												<h4>Stefano Giovannoni from Italy</h4>
												<p>
													consectetur adipiscing elit. Phasellus risus mauris, blandit non pharetra at, viverra non augue. In hac habitasse platea dictumst.
												</p>
											</div>
										</li>
										<li>
											<div class="productImage">
												<img src="/assets/images/hz-brand/laufenpro.jpg" alt="Laufen" />
											</div>
											<div class="brandProdRangeLogoWrap">
												<img class="brandImg" src="/assets/images/hz-brand/rangeLogo.jpg" alt="One ILBAGNOALESSI" />
												<a class="viewRangeLink">View this Range</a>
											</div>
											<div class="brandProdRangeDesc">
												<h4>Stefano Giovannoni from Italy</h4>
												<p>
													consectetur adipiscing elit. Phasellus risus mauris, blandit non pharetra at, viverra non augue. In hac habitasse platea dictumst.
												</p>
											</div>
										</li>
									</ul>
								</div><!-- /#products -->

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