
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
						<li><a href="#">My account</a> <span class="divider">/</span></li>
						<li class="active page-branding text-brand">Login</li>
						<li class="locationAnSearch">
							
						</li>
					</ul>
					<div class="retailQuoteBanner">
						<img src="/assets/images/hz-quote-order/quote-banner.jpg" alt="banner" />
						<div class="retailQuoteBannerTextWrap">
							<div class="retailQuoteBannerText">
								Quote Details
							</div>
						</div>
					</div>
					<div class="retailQuoteInner">
						<div class="">
							<ul class="progressWizzard">
								<li><a href="myquotes.php">1</a></li>
								<li><a href="selectItems.php">2</a></li>
								<li class="active"><a href="delivery.php">3</a></li>
								<li><a>4</a></li>
							</ul>
							<h2 class="retailQuoteRedHeader">Delivery Options</h2>

							<div class="retailQuoteShadowBox">
								<div class="retailQuoteDeliveryWrap">
									<div class="row-fluid">
										<div class="span8">
											<h3 class="retailThinRedHeader">Select your delivery process</h3>
											<p class="retailQuoteMessage">How would you like to receive your goods?</p>
											<div class="">
												<div class="">
													Delivery
												</div>
												<div class="">
													Pick Up
												</div>
											</div>
										</div>
										<div class="span4">
											<div class="retailQuoteOrderSummary">
												<h4 class="retailThinRedHeader">
													Order Summary
												</h4>
												<dl>
													<dt>Product Total</dt>
													<dd>$1505.95</dd>
													<dt>Delivery</dt>
													<dd>$50</dd>
												</dl>
												<dl class="summaryGrandTotal">
													<dt>Grand Total</dt>
													<dd>$1555.95</dd>
												</dl>
											</div>
										</div>
									</div>
									<div >
										<p class="retailQuoteGraytext">Delivery will incur a cost $50 per delivery. Some more copy on delivery. This is when you need to order it, we will ensure it comes in this time frame etc.</p>
										<hr>
										<div id="retailQuoteDeliveryOptions" class="row-fluid">
											<div class="span6">
												<dl>
													<dt>Quote Branch</dt>
													<dd>123 Fake Street</dd>
												</dl>

												<h4 class="retailQuoteRedHeader">Delivery Contact Details</h4>
												<form class="retailQuoteForm">
													<div class="controls">
														<input placeholder="Name" type="text">
													</div>
													<div class="controls">
														<input placeholder="Number" type="text">
													</div>													
												</form>
											</div>
											<div class="span6">
												<dl>
													<dt>Order Number</dt>
													<dd>123 Fake Street</dd>
												</dl>
												<h4 class="retailQuoteRedHeader">Delivery Address</h4>
												<form class="retailQuoteForm">
													<div class="controls">
														<input placeholder="Address" type="text">
													</div>
													<div class="controls">
														<input placeholder="Suburb" type="text">
													</div>													
												</form>
											</div>
										</div><!-- /#retailQuoteDeliveryOptions -->
										<div class="row-fluid">
											<div class="span3">
												<h5 class="retailThinRedHeader">Quote Branch </h5>
												<p class="retailQuoteGraytext">Bathroom Life Burwood</p>
											</div>
											<div class="span3">
												<h5 class="retailThinRedHeader">Pick Up Branch</h5>
												<p class="retailQuoteGraytext">Bathroom Life Burwood<br>118 Burwood Highway, Burwood<br>Victoria, 3125<br>9274 0000</p>
												<a href="">Change</a>
											</div>
										</div>
										<div class="clearfix">
										<button class="retailQuoteRedBtnLarge pull-right"><i class="icon-shopping-cart icon-large">&nbsp;</i> Proceed to Payment</button>
										</div>
									</div>
								</div>
							</div><!-- /.retailQuoteShadowBox -->
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
    </body>
</html>