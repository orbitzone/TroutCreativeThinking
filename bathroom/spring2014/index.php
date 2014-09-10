
	<?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>

	<?php 
		$cssScriptPaths = [
			"/assets/css/reece-products.css",
			"/assets/css/reece-bathrooms.css",
			"/assets/css/reece-spring2014.css"			
		]; 
	   	include_once($serverBase."/includes/head/head-generic.php");
	?>		

    <body class="spring2014 withHappinessSubNav">
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





				    	
			    	<!--div class="products-list">
					    <div class="row-fluid">

					    	<div class="product-block span5 offset1">
					    		<a href="#"><img src="/assets/images/products_2013/products-bathroom-winter-warmers-product-1.jpg" /></a>
								<div class="product-info">
									<h4>
										<a class="product-title" href="#">Product</a>
										<span class="product-desc">Freestanding bath</span>
										<span class="product-price">$xxx.xx</span>
									</h4>
								</div>							    		
					    	</div>
					    	<div class="product-block span5">
					    		<a href="#"><img src="/assets/images/products_2013/products-bathroom-winter-warmers-product-1.jpg" /></a>
								<div class="product-info">
									<h4>
										<a class="product-title" href="#">Product</a>
										<span class="product-desc">Freestanding bath</span>
										<span class="product-price">$xxx.xx</span>
									</h4>
								</div>							    		
					    	</div>					    							    							    	
					    </div>
					</div-->									


				    	


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
				"/assets/js/reece-carousel.js"
			]; 
		   	include_once($serverBase."/includes/foot/scripts.php");
		?>			

    </body>
</html>