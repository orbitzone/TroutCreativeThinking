
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
						<div class="retailQuoteCart">
							<ul class="progressWizzard">
								<li><a href="myquotes.php">1</a></li>
								<li class="active"><a href="selectItems.php">2</a></li>
								<li><a href="delivery.php">3</a></li>
								<li><a>4</a></li>
							</ul>
							<h2 class="retailQuoteRedHeader">Quote #123456</h2>
							<p class="retailQuoteMessage">Select items from this quote to submit an order to Reece.</p>
							<div class="retailQuoteShadowBox">
								<table class="quoteCartTable">
									<thead>
										<tr>
											<th>Include</th>
											<th>Product Details</th>
											<th>Quantity</th>
											<th>Unit Cost</th>
											<th>Sub Cost</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<td colspan="5"><a class="quoteCheckIcon quoteRemove">Clear Order</a></td>
										</tr>
										<tr>
											<td colspan="3"></td>
											<td> Includes GST</td>
											<td> <span class="GST">$136.42</span> </td>
										</tr>
										<tr>
											<td colspan="3"></td>
											<td> <strong>Total</strong></td>
											<td>$1,500.60 </td>
										</tr>										
									</tfoot>
									<tbody>
										<tr>
											<td data-th="Include"><a><span class="quoteCheckIcon"></span></a></td>
											<td data-th="Product Details">
												Product Name
											</td>
											<td data-th="Quantity">
												<span class="quoteQuantity">4</span>
												<div class="quantityHistoryWrap">
													<a herf="#">Quanity History <span class="caret"></span></a>

												</div>
											</td>
											<td data-th="Unit Cost">$300.12</td>
											<td data-th="Sub Cost">$1,200.48</td>
										</tr>
										<tr>
											<td data-th="Include"><a><span class="quoteCheckIcon quoteUnchecked"></span></a></td>
											<td data-th="Product Details">Product Name</td>
											<td data-th="Quantity"><span class="quoteQuantity">4</span></td>
											<td data-th="Unit Cost">$300.12</td>
											<td data-th="Sub Cost">$1,200.48</td>
										</tr>										
									</tbody>
								</table>
								<div class="clearfix">
									<button class="retailQuoteRedBtnLarge pull-right"><i class="icon-shopping-cart icon-large">&nbsp;</i> Checkout</button>
								</div>
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