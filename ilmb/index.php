
	<?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>

	<?php 
	  	$cssScriptPaths = array(
	  		"/assets/css/reece-products.css",
	  		"/assets/css/reece-bathrooms.css",
	  		"/assets/css/reece-bathrooms-ilmb.css",
	  		"/assets/js/fancybox/jquery.fancybox.css"			
	  	); 
	  	include_once($serverBase."/includes/head/head-generic.php");
	?>		

    <body class="ilmb">
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

<div class="main-wrapper">
	<div class="row-fluid top-space">
		<div class="span12 ajax-target" id="AjaxTargetWrapper">
			<div id="AjaxTarget">
			<!-- INITIAL HOME CONTENT -->
				<div class="row-fluid">
					<div class="span12 home-wrapper">
					<img class="visible-desktop" src="/assets/images/ilmb/home-main.jpg" alt="I love my bathroom" />
					<img class="hidden-desktop" src="/assets/images/ilmb/home-devices.jpg" alt="I love my bathroom" />
						<div class="home-content">
							<div class="bottom-space home-menu">
								<div class="btn-group">
									<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
										<span class="hidden-phone">Competition</span> Menu
										<span class="caret"></span>
									</a>
									<ul class="dropdown-menu pull-right">
										<li class="active"><a href="sub/home.html" title="Home" class="ajax-load">Home</a></li>
										<li><a href="sub/winner.html" title="Winner" class="ajax-load">2013 Winner</a></li>
										<li><a href="sub/previous.html" title="Previous Winners" class="ajax-load">Previous Winners</a></li>
										<li><a href="sub/prizes.html" title="Prizes" class="ajax-load">Prizes</a></li>
										<li><a href="sub/judging.html" title="Judging" class="ajax-load">Judging</a></li>
										<li><a href="sub/terms.html" title="Terms &amp; Conditions" class="ajax-load">Terms &amp; Conditions</a></li>
										<li><a href="sub/contact.html" title="Contact" class="ajax-load">Contact</a></li>
										<li><a href="sub/submit.html" title="Submit Your Bathroom" class="ajax-load"><i class="icon-heart"></i> Submit Your Bathroom</a></li>
										<li><a href="sub/voting.html" title="Vote &amp; Win" class="ajax-load"><i class="icon-thumbs-up"></i> Vote &amp; Win</a></li>
									</ul>
								</div>
							</div>
						<div class="scroll-content">
							<p class="lead">Inside and out, this incredible creation by Kerrie and Gerard Maggs, takes beautiful bathroom design further than ever before.</p>
							<hr>
							<h3><i class="icon-thumbs-up"></i> Vote to win</h3>
							<p>Register to vote. You could win a <br />$5,000 Reece Voucher</p>
							<a href="sub/voting.html" class="ajax-load btn btn-danger" title="Vote to win">Vote Now</a>
							<hr>
							<h3><i class="icon-calendar"></i> Key Dates</h3>
							<p><strong>1 May 2013</strong> - Voting Opens</p>
							<p><strong>26 May 2013</strong> - Voting Closes</p>
							<p><strong>3 Jun 2013</strong> - Winners Announced</p>
						</div>
						</div>
					</div>
				</div>
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
		  		"/assets/js/jquery.lazyload.min.js",
		  		"/assets/js/bootstrap-transition.js", 
		  		"/assets/js/bootstrap-carousel.js",
		  		"/assets/js/bootstrap-collapse.js",
		  		"/assets/js/bootstrap-dropdown.js",
		  		"/assets/js/reece-ocnav.js",
		  		"/assets/js/reece-carousel.js",
		  		"/assets/js/reece-ilmb-minisite.js",
		  		"/assets/js/fancybox/jquery.fancybox.js"
		  	); 
		  	include_once($serverBase."/includes/foot/scripts.php");
		?>			

    </body>
</html>