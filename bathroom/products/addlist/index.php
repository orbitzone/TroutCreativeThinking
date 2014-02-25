
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
					$happyZoneNavActiveMenuItem = "Products";
				   	include_once($serverBase."/includes/banners/banner-happyzone.php");
				?>	
			</div>
		    <div class="content-container">
				<div class="inner-wrapper">
					<ul class="breadcrumb">
						<li><a href="#">Bathroom</a> <span class="divider">/</span></li>
						<li><a href="#">My Account</a> <span class="divider">/</span></li>
						<li class="active page-branding text-brand">Quote Details</li>
					</ul>
					<h2>My Product List</h2>
					<div class="myProductList">
						<table class="myProductListTable">
							<thead>
								<tr>
									<th>Product</th>
									<th>Product Details</th>
									<th>WELS</th>
									<th>Finish</th>
									<th>Warranty</th>
									<th>Technical</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody>

								<tr>
									<td data-th="Product" class="myProductThumb" rowspan="2"><img src="/assets/images/hz-products/hideaway.jpg" alt="hideaway"></td>
									<td class="productDetailsTd" data-th="Product Details">
										<div class="productDetails">
											<h3 class="myProductName">Hideaway</h3>
											<span class="myProductDesc">Urinal with Sensor Flush</span>
											<small class="myProductId"># 5415125</small>
											<p class="myProductSummary">It reflects the work of nature itself - inspired by the idea of a stone that has been smoothed by water over time</p>
										</div>
									</td>
									<td class="myProductStar" data-th="WELS">
										<i class="icon-star">&nbsp;</i><i class="icon-star">&nbsp;</i><i class="icon-star">&nbsp;</i><i class="icon-star">&nbsp;</i><i class="icon-star">&nbsp;</i>
									</td>
									<td data-th="Finish">White</td>
									<td data-th="Warranty">15 year</td>
									<td class="myProductTechnical" data-th="Technical">1500 X 680 mm</td>
									<td class="myProductPrice" data-th="Price">$ 2,450.00</td>
								</tr>
								<tr>
									<td class="myProductActions" colspan="6">
										<ul class="myProductActionsList">
											<li><a href="#"><i class="icon-edit icon-large">&nbsp;</i></a></li>
											<li><a href="#"><i class="icon-trash icon-large">&nbsp;</i></a></li>
											<li><a class="myProductActionsInfo" href="#">Brand Info &nbsp;<i class="icon-chevron-right">&nbsp;</i></a></li>
										</ul>

									</td>
								</tr>
								<tr class="spacerRow">
									<td colspan="7"></td>
								</tr>
								<tr>
									<td data-th="Product" class="myProductThumb" rowspan="2"><img src="/assets/images/hz-products/hideaway.jpg" alt="hideaway"></td>
									<td class="productDetailsTd" data-th="Product Details">
										<div class="productDetails">
											<h3 class="myProductName">Hideaway</h3>
											<span class="myProductDesc">Urinal with Sensor Flush</span>
											<small class="myProductId"># 5415125</small>
											<p class="myProductSummary">It reflects the work of nature itself - inspired by the idea of a stone that has been smoothed by water over time</p>
										</div>
									</td>
									<td class="myProductStar" data-th="WELS">
										<i class="icon-star">&nbsp;</i><i class="icon-star">&nbsp;</i><i class="icon-star">&nbsp;</i><i class="icon-star">&nbsp;</i><i class="icon-star">&nbsp;</i>
									</td>
									<td data-th="Finish">White</td>
									<td data-th="Warranty">15 year</td>
									<td class="myProductTechnical" data-th="Technical">1500 X 680 mm</td>
									<td class="myProductPrice" data-th="Price">$ 2,450.00</td>
								</tr>
								<tr>
									<td class="myProductActions" colspan="6">
										<ul class="myProductActionsList">
											<li><a href="#"><i class="icon-edit icon-large">&nbsp;</i></a></li>
											<li><a href="#"><i class="icon-trash icon-large">&nbsp;</i></a></li>
											<li><a class="myProductActionsInfo" href="#">Brand Info &nbsp;<i class="icon-chevron-right">&nbsp;</i></a></li>
										</ul>

									</td>
								</tr>
								<tr class="spacerRow">
									<td colspan="7"></td>
								</tr>
								<tr>
									<td data-th="Product" class="myProductThumb" rowspan="2"><img src="/assets/images/hz-products/hideaway.jpg" alt="hideaway"></td>
									<td class="productDetailsTd" data-th="Product Details">
										<div class="productDetails">
											<h3 class="myProductName">Hideaway</h3>
											<span class="myProductDesc">Urinal with Sensor Flush</span>
											<small class="myProductId"># 5415125</small>
											<p class="myProductSummary">It reflects the work of nature itself - inspired by the idea of a stone that has been smoothed by water over time</p>
										</div>
									</td>
									<td class="myProductStar" data-th="WELS">
										<i class="icon-star">&nbsp;</i><i class="icon-star">&nbsp;</i><i class="icon-star">&nbsp;</i><i class="icon-star">&nbsp;</i><i class="icon-star">&nbsp;</i>
									</td>
									<td data-th="Finish">White</td>
									<td data-th="Warranty">15 year</td>
									<td class="myProductTechnical" data-th="Technical">1500 X 680 mm</td>
									<td class="myProductPrice" data-th="Price">$ 2,450.00</td>
								</tr>
								<tr>
									<td class="myProductActions" colspan="6">
										<ul class="myProductActionsList">
											<li><a href="#"><i class="icon-edit icon-large">&nbsp;</i></a></li>
											<li><a href="#"><i class="icon-trash icon-large">&nbsp;</i></a></li>
											<li><a class="myProductActionsInfo" href="#">Brand Info &nbsp;<i class="icon-chevron-right">&nbsp;</i></a></li>
										</ul>

									</td>
								</tr>
								<tr class="spacerRow">
									<td colspan="7"></td>
								</tr>
								<tr>
									<td data-th="Product" class="myProductThumb" rowspan="2"><img src="/assets/images/hz-products/hideaway.jpg" alt="hideaway"></td>
									<td class="productDetailsTd" data-th="Product Details">
										<div class="productDetails">
											<h3 class="myProductName">Hideaway</h3>
											<span class="myProductDesc">Urinal with Sensor Flush</span>
											<small class="myProductId"># 5415125</small>
											<p class="myProductSummary">It reflects the work of nature itself - inspired by the idea of a stone that has been smoothed by water over time</p>
										</div>
									</td>
									<td class="myProductStar" data-th="WELS">
										<i class="icon-star">&nbsp;</i><i class="icon-star">&nbsp;</i><i class="icon-star">&nbsp;</i><i class="icon-star">&nbsp;</i><i class="icon-star">&nbsp;</i>
									</td>
									<td data-th="Finish">White</td>
									<td data-th="Warranty">15 year</td>
									<td class="myProductTechnical" data-th="Technical">1500 X 680 mm</td>
									<td class="myProductPrice" data-th="Price">$ 2,450.00</td>
								</tr>
								<tr>
									<td class="myProductActions" colspan="6">
										<ul class="myProductActionsList">
											<li><a href="#"><i class="icon-edit icon-large">&nbsp;</i></a></li>
											<li><a href="#"><i class="icon-trash icon-large">&nbsp;</i></a></li>
											<li><a class="myProductActionsInfo" href="#">Brand Info &nbsp;<i class="icon-chevron-right">&nbsp;</i></a></li>
										</ul>

									</td>
								</tr>
								<tr class="spacerRow">
									<td colspan="7"></td>
								</tr>
								<tr>
									<td data-th="Product" class="myProductThumb" rowspan="2"><img src="/assets/images/hz-products/hideaway.jpg" alt="hideaway"></td>
									<td class="productDetailsTd" data-th="Product Details">
										<div class="productDetails">
											<h3 class="myProductName">Hideaway</h3>
											<span class="myProductDesc">Urinal with Sensor Flush</span>
											<small class="myProductId"># 5415125</small>
											<p class="myProductSummary">It reflects the work of nature itself - inspired by the idea of a stone that has been smoothed by water over time</p>
										</div>
									</td>
									<td class="myProductStar" data-th="WELS">
										<i class="icon-star">&nbsp;</i><i class="icon-star">&nbsp;</i><i class="icon-star">&nbsp;</i><i class="icon-star">&nbsp;</i><i class="icon-star">&nbsp;</i>
									</td>
									<td data-th="Finish">White</td>
									<td data-th="Warranty">15 year</td>
									<td class="myProductTechnical" data-th="Technical">1500 X 680 mm</td>
									<td class="myProductPrice" data-th="Price">$ 2,450.00</td>
								</tr>
								<tr>
									<td class="myProductActions" colspan="6">
										<ul class="myProductActionsList">
											<li><a href="#"><i class="icon-edit icon-large">&nbsp;</i></a></li>
											<li><a href="#"><i class="icon-trash icon-large">&nbsp;</i></a></li>
											<li><a class="myProductActionsInfo" href="#">Brand Info &nbsp;<i class="icon-chevron-right">&nbsp;</i></a></li>
										</ul>

									</td>
								</tr>
								<tr class="spacerRow">
									<td colspan="7"></td>
								</tr>
								<tr>
									<td data-th="Product" class="myProductThumb" rowspan="2"><img src="/assets/images/hz-products/hideaway.jpg" alt="hideaway"></td>
									<td class="productDetailsTd" data-th="Product Details">
										<div class="productDetails">
											<h3 class="myProductName">Hideaway</h3>
											<span class="myProductDesc">Urinal with Sensor Flush</span>
											<small class="myProductId"># 5415125</small>
											<p class="myProductSummary">It reflects the work of nature itself - inspired by the idea of a stone that has been smoothed by water over time</p>
										</div>
									</td>
									<td class="myProductStar" data-th="WELS">
										<i class="icon-star">&nbsp;</i><i class="icon-star">&nbsp;</i><i class="icon-star">&nbsp;</i><i class="icon-star">&nbsp;</i><i class="icon-star">&nbsp;</i>
									</td>
									<td data-th="Finish">White</td>
									<td data-th="Warranty">15 year</td>
									<td class="myProductTechnical" data-th="Technical">1500 X 680 mm</td>
									<td class="myProductPrice" data-th="Price">$ 2,450.00</td>
								</tr>
								<tr>
									<td class="myProductActions" colspan="6">
										<ul class="myProductActionsList">
											<li><a href="#"><i class="icon-edit icon-large">&nbsp;</i></a></li>
											<li><a href="#"><i class="icon-trash icon-large">&nbsp;</i></a></li>
											<li><a class="myProductActionsInfo" href="#">Brand Info &nbsp;<i class="icon-chevron-right">&nbsp;</i></a></li>
										</ul>

									</td>
								</tr>
								<tr class="spacerRow">
									<td colspan="7"></td>
								</tr>
								<tr>
									<td data-th="Product" class="myProductThumb" rowspan="2"><img src="/assets/images/hz-products/hideaway.jpg" alt="hideaway"></td>
									<td class="productDetailsTd" data-th="Product Details">
										<div class="productDetails">
											<h3 class="myProductName">Hideaway</h3>
											<span class="myProductDesc">Urinal with Sensor Flush</span>
											<small class="myProductId"># 5415125</small>
											<p class="myProductSummary">It reflects the work of nature itself - inspired by the idea of a stone that has been smoothed by water over time</p>
										</div>
									</td>
									<td class="myProductStar" data-th="WELS">
										<i class="icon-star">&nbsp;</i><i class="icon-star">&nbsp;</i><i class="icon-star">&nbsp;</i><i class="icon-star">&nbsp;</i><i class="icon-star">&nbsp;</i>
									</td>
									<td data-th="Finish">White</td>
									<td data-th="Warranty">15 year</td>
									<td class="myProductTechnical" data-th="Technical">1500 X 680 mm</td>
									<td class="myProductPrice" data-th="Price">$ 2,450.00</td>
								</tr>
								<tr>
									<td class="myProductActions" colspan="6">
										<ul class="myProductActionsList">
											<li><a href="#"><i class="icon-edit icon-large">&nbsp;</i></a></li>
											<li><a href="#"><i class="icon-trash icon-large">&nbsp;</i></a></li>
											<li><a class="myProductActionsInfo" href="#">Brand Info &nbsp;<i class="icon-chevron-right">&nbsp;</i></a></li>
										</ul>

									</td>
								</tr>
								<tr class="spacerRow">
									<td colspan="7"></td>
								</tr>
								<tr>
									<td data-th="Product" class="myProductThumb" rowspan="2"><img src="/assets/images/hz-products/hideaway.jpg" alt="hideaway"></td>
									<td class="productDetailsTd" data-th="Product Details">
										<div class="productDetails">
											<h3 class="myProductName">Hideaway</h3>
											<span class="myProductDesc">Urinal with Sensor Flush</span>
											<small class="myProductId"># 5415125</small>
											<p class="myProductSummary">It reflects the work of nature itself - inspired by the idea of a stone that has been smoothed by water over time</p>
										</div>
									</td>
									<td class="myProductStar" data-th="WELS">
										<i class="icon-star">&nbsp;</i><i class="icon-star">&nbsp;</i><i class="icon-star">&nbsp;</i><i class="icon-star">&nbsp;</i><i class="icon-star">&nbsp;</i>
									</td>
									<td data-th="Finish">White</td>
									<td data-th="Warranty">15 year</td>
									<td class="myProductTechnical" data-th="Technical">1500 X 680 mm</td>
									<td class="myProductPrice" data-th="Price">$ 2,450.00</td>
								</tr>
								<tr>
									<td class="myProductActions" colspan="6">
										<ul class="myProductActionsList">
											<li><a href="#"><i class="icon-edit icon-large">&nbsp;</i></a></li>
											<li><a href="#"><i class="icon-trash icon-large">&nbsp;</i></a></li>
											<li><a class="myProductActionsInfo" href="#">Brand Info &nbsp;<i class="icon-chevron-right">&nbsp;</i></a></li>
										</ul>

									</td>
								</tr>
											
							</tbody>
						</table>
					</div><!-- /.myProductList -->
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
		  		"/assets/js/jquery.lazyload.min.js",
		  		"/assets/js/bootstrap-transition.js", 
		  		"/assets/js/bootstrap-carousel.js",
		  		"/assets/js/bootstrap-collapse.js",
		  		"/assets/js/bootstrap-dropdown.js",
                "/assets/js/reece-signon.js",
		  		"/assets/js/reece-ocnav.js",
		  		"/assets/js/reece-carousel.js"
		  	); 
		  	include_once($serverBase."/includes/foot/scripts.php");
		?>			

    </body>
</html>