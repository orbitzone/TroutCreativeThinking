
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
								Login to Online Ordering
							</h2>
						</div>
					</div>
					<div class="retailQuoteInner">
						<div class="retailQuoteLogin">
							<div class="row-fluid">
								<div class="span6">
									<p class="retailQuoteMessage"> Online ordering is currently only available to customers who receive a quote in-store. </p>

									<ul class="retailQuotePointers">
										<li>Please login to your existing account, or register to create a new one below.</li>
										<li>After logging in, we'll look up a list of your current quotes based on your verified email address.</li>
										<li>You can then enter delivery details and pay online for all or part of your quote.</li>
									</ul>
								</div>
								<div class="span5 offset1">

									<form id="retailQuoteForm" class="retailQuoteForm">
										<h4 class="retailQuoteRedHeader">Login</h4>
										<p class="retailQuoteMessage">Welcome back to online ordering, enter your details below to access your quotes.</p>
										<div class="controls">
										<input placeholder="Email Address" type="email">
										</div>
										<div class="controls">
										<input placeholder="Password" type="password">
										</div>
										<a href="forgot.php" class="forgotPassword">Forgot your password</a>
										<button class="retailQuoteRedBtn pull-right">Login</button>
									</form>
								</div>
							</div>

							<div class="createAccount">
								<h4 class="retailQuoteRedHeader">Create a new account</h4>
								<p class="retailQuoteMessage">It only takes a few minutes to sign up for an online customer account.</p>
								<p class="retailQuoteGraytext">If you've already received a quote in-store and provided your email address to the showroom consultant, we'll verify that email account in order to provide access to your quotes.</p>
								<button class="retailQuoteRedBtn">Register Now</button>
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
                "/assets/js/reece-signon.js",
		  		"/assets/js/reece-ocnav.js",
		  		"/assets/js/reece-carousel.js",
		  	); 
		  	include_once($serverBase."/includes/foot/scripts.php");
		?>
		<!-- Script to redirect for the demo only -->
		<script type="text/javascript">
		$(function(){
			$('#retailQuoteForm').submit(function(e){
				e.preventDefault();
				window.location='myquotes.php';
			})
		});
		</script>
    </body>
</html>