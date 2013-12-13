
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
								My Quotes
							</div>
						</div>
					</div>
					<div class="retailQuoteInner">
						<div class="retailQuoteMyQuotes">
							<ul class="progressWizzard">
								<li class="active"><a href="myquotes.php">1</a></li>
								<li><a href="selectItems.php">2</a></li>
								<li><a href="delivery.php">3</a></li>
								<li><a>4</a></li>
							</ul>
							<p class="retailQuoteMessage">Welcome John, we've listed all quotes you currently have in progress with your local Reece showroom.</p>
							<p class="retailQuoteGraytext">If you can't find a quote, please <a href="#">contact us</a> for assistance.</p>

							<div class="retailQuoteShadowBox">
								<div class="row-fluid">
									<div class="span2">
									<span class="quoteIcon">
										<span class="quoteIconInner">Q</span>
									</span>
									</div>
									<div class="span10 retailQuoteInfoWrap">
										<h3 class="retailQuoteRedHeader">Quote #123456</h3>
										<div class="row-fluid retailQuoteInfo">
											<div class="span4">
												<dl class="quoteInfodl">
													<dt>Store Name</dt>
													<dd>Reece Bathroom Life, Burwood</dd>
												</dl>
											</div>
											<div class="span4">
												<dl class="quoteInfodl">
													<dt>Contacts Number</dt>
													<dd>03 9274 0000</dd>
												</dl>
											</div>
											<div class="span4">
												<dl class="quoteInfodl">
													<dt>Expires</dt>
													<dd>2 December 2013</dd>
												</dl>
											</div>
										</div><!-- /.retailQuoteInfo -->
										<div class="row-fluid myQuoteActions">
											<div class="span4">
												<a href="#quoteMoreInfoWrap" id="showQuoteMoreInfo"  data-toggle="collapse"><i class="icon-caret-down icon-large">&nbsp;</i> SHOW MORE</a>
											</div>
											<div class="span4">
												<a href="#"><i class="icon-file icon-large">&nbsp;</i>DOWNLOAD PDF</a>
											</div>
											<div class="span4">
												<button class="retailQuoteRedBtnLarge"><i class="icon-shopping-cart icon-large">&nbsp;</i> ORDER</button>
											</div>
										</div><!-- /.myQuoteActions -->
									</div><!-- /.retailQuoteInfoWrap -->
								</div>
								<div class="collapse" id="quoteMoreInfoWrap" class="quoteMoreInfoWrap">
									<div class="quoteMoreInfo">
										<div class="row-fluid">
											<div class="span3">
												<h4 class="retailThinRedHeader">Branch Contact</h4>
												<dl class="quoteInfodl">
													<dt>Name</dt>
													<dd>Lisa Smith</dd>
													<dt>Contact Number</dt>
													<dd>03 9274 0000</dd>													
												</dl>
											</div>
											<div class="span3">
												<h4 class="retailThinRedHeader">Order Details</h4>
												<dl class="quoteInfodl">
													<dt>Job Name</dt>
													<dd>Bathroom Renovation</dd>
													<dt>Order Number</dt>
													<dd>0000 8272 6352</dd>
													<dt>Address</dt>
													<dd>118 Burwood Hwy  <br>Burwood VIC 3125</dd>
												</dl>
											</div>
											<div class="span3">
												<h4 class="retailThinRedHeader">Orders from this Quote</h4>
												<dl class="quoteInfodl">
													<dt>07 Nov 2013 </dt>
													<dd>Order No. 328985627<br>15 items<br>Reece Brunswick</dd>
													<dt>03 Nov 2013</dt>
													<dd>Order No. 328985627<br>8 items<br>Reece Brunswick</dd>
												</dl>
											</div>
											<div class="span3">
												<h4 class="retailThinRedHeader">Quote History</h4>
												<dl class="quoteInfodl">
													<dt>11 Sep 2013</dt>
													<dd>Order No. 328985627<br>Reece Brunswick</dd>
												</dl>
											</div>
										</div><!-- /.row-fluid -->
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
		<script type="text/javascript">
			$(function(){
				$('#quoteMoreInfoWrap').on('hide', function () {
					$('#showQuoteMoreInfo').html('<i class="icon-caret-down icon-large">&nbsp;</i> Show More');
				});
				$('#quoteMoreInfoWrap').on('show', function () {
					$('#showQuoteMoreInfo').html('<i class="icon-caret-up icon-large">&nbsp;</i> Show Less');
				});	
			});
		</script>
    </body>
</html>