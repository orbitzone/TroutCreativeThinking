
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
							<h2 class="retailQuoteBannerText">
								Quote Details
							</h2>
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
											<td data-th="Include"><div class="quoteCartTableContent"><a class="quoteCheckIcon"></a></div></td>
											<td data-th="Product Details">
													<div class="quoteProductInfo">
														<div class="quoteProductInfoThumb">
															<img src="http://placehold.it/180x120.png/eee/eee" alt="placeholder">
														</div>
														<div class="quoteProductInfoDesc">Product Name
															<span class="retailQuoteGraytext">Product Description</span>
															<span class="retailQuoteGraytext">#Code</span>
															<span class="retailQuoteGraytext"><a href="#">Product Details</a></span>
														</div>
													</div>
											</td>
											<td data-th="Quantity">
											<div class="quantityHistoryContent">
												<span class="quoteQuantity">3</span>
												<div class="quantityHistoryWrap dropdown">
													<a herf="#"class="dropdown-toggle" data-toggle="dropdown">Quantity History <span class="caret"></span></a>
													<div class="dropdown-menu">
														<ul class="quantityHistoryInfo">
															<li>Quoted <span class="retailQuoteGraytext">6</span></li>
															<li>Ordered <span class="retailQuoteGraytext">2</span></li>
															<li class="remaining">Remaining <span class="quantityHistoryRemaining">4</span></li>
														</ul>

														<div class="quantityHistoryAction clearfix">
															<a class="quantityHistoryOrderNone" href="#">Order None</a>
															<a class="quantityHistoryOrderAll" href="#">Order All</a>
														</div>
													</div>
												</div>
											</div>
											</td>
											<td data-th="Unit Cost"><div class="quoteCartTableContent">$300.12</div></td>
											<td data-th="Sub Cost"><div class="quoteCartTableContent">$1,200.48</div></td>
										</tr>
										<tr>
											<td data-th="Include"><div class="quoteCartTableContent"><a class="quoteCheckIcon"></a></div></td>
											<td data-th="Product Details">
													<div class="quoteProductInfo">
														<div class="quoteProductInfoThumb">
															<img src="http://placehold.it/180x120.png/eee/eee" alt="placeholder">
														</div>
														<div class="quoteProductInfoDesc">Product Name
															<span class="retailQuoteGraytext">Product Description</span>
															<span class="retailQuoteGraytext">#Code</span>
															<span class="retailQuoteGraytext"><a href="#">Product Details</a></span>
														</div>
													</div>
											</td>
											<td data-th="Quantity">
											<div class="quantityHistoryContent">
												<span class="quoteQuantity">1</span>
												<div class="quantityHistoryWrap dropdown">
													<a herf="#"class="dropdown-toggle" data-toggle="dropdown">Quantity History <span class="caret"></span></a>
													<div class="dropdown-menu">
														<ul class="quantityHistoryInfo">
															<li>Quoted <span class="retailQuoteGraytext">6</span></li>
															<li>Ordered <span class="retailQuoteGraytext">2</span></li>
															<li class="remaining">Remaining <span class="quantityHistoryRemaining">4</span></li>
														</ul>
														<div class="quantityHistoryAction clearfix">
															<a class="quantityHistoryOrderNone" href="#">Order None</a>
															<a class="quantityHistoryOrderAll" href="#">Order All</a>
														</div>
													</div>
												</div>
											</div>
											</td>
											<td data-th="Unit Cost"><div class="quoteCartTableContent">$300.12</div></td>
											<td data-th="Sub Cost"><div class="quoteCartTableContent">$1,200.48</div></td>
										</tr>									
										<tr>
											<td data-th="Include"><a class="quoteCheckIcon quoteUnchecked"></a></td>
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
		<script type="text/javascript">
			$(function(){
				$('.quoteCartTable tbody .quoteCheckIcon').click(function(){
					$(this).toggleClass('quoteUnchecked');
				});
				$('.dropdown-toggle').dropdown();


				$('.quantityHistoryOrderNone').click(function(e){
					e.preventDefault();
					$(this).closest('.quantityHistoryContent').find('.quoteQuantity').html('0');
				})

				$('.quantityHistoryOrderAll').click(function(e){
					e.preventDefault();
					$(this).closest('.quantityHistoryContent').find('.quoteQuantity').html($(this).closest('.quantityHistoryContent').find('.quantityHistoryRemaining').html());
				})
			});
		</script>
    </body>
</html>