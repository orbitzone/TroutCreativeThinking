
	<?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>

	<?php
		$cssScriptPaths = [
			"/assets/css/reece-hvac-r.css",
			"/assets/css/reece-gas-track.css"
		];
	   	include_once($serverBase."/includes/head/head-generic.php");
	?>

    <body class="withSubNav">
		<div class="ocmain-wrapper">
			<div class="navbar navbar-fixed-top topNav">
			<?php 
				$genericNavActiveMenuItem = "HVAC-R";
			   	include_once($serverBase."/includes/nav/nav-generic.php");
			?>

			<?php 
			   	include_once($serverBase."/includes/nav/nav-subnavbar.php");
			?>
			</div>

		    <div class="content-container">
				<div class="inner-wrapper">

					<ul class="breadcrumb">
						<li><a href="#">Gas Track</a> <span class="divider">/</span></li>
						<li class="active page-branding text-brand">Store Finder</li>
					</ul>

					<div class="row-fluid">

						<aside class="gt-sidebar span3">
							<?php
								$gtNavActiveMenuItem = "Storefinder";
							   	include_once($serverBase."/includes/nav/nav-gt-nav.php");
							?>
						</aside>

						<section class="gt-content span9">

							<h3 class="headline">Victoria</h3>
							<hr>

							<div class="gt-store-finder-list clearfix">
								<div class="gt-store-finder-row row-fluid">

									<div class="vcard span4">
										<h4>Store Name</h4>
										<p class="adr">
											<span class="street-address">
												Address line number 1<br>
												Address line number 2
											</span>
											<br>
										</p>
										<span class="tel">Tel <span class="value">00 0000 0000</span></span><br>
										<span class="tel"><span class="type">Fax</span>: <span class="value">00 0000 0000</span></span>
										<a class="focus-link" href="mailto:someone@example.com">Email us</a>
									</div>
									<div class="vcard span4">
										<h4>Store Name</h4>
										<p class="adr">
											<span class="street-address">
												Address line number 1<br>
												Address line number 2
											</span>
											<br>
										</p>
										<span class="tel">Tel <span class="value">00 0000 0000</span></span><br>
										<span class="tel"><span class="type">Fax</span>: <span class="value">00 0000 0000</span></span>
										<a class="focus-link" href="mailto:someone@example.com">Email us</a>
									</div>
									<div class="vcard span4">
										<h4>Store Name</h4>
										<p class="adr">
											<span class="street-address">
												Address line number 1<br>
												Address line number 2
											</span>
											<br>
										</p>
										<span class="tel">Tel <span class="value">00 0000 0000</span></span><br>
										<span class="tel"><span class="type">Fax</span>: <span class="value">00 0000 0000</span></span>
										<a class="focus-link" href="mailto:someone@example.com">Email us</a>
									</div>

								</div>
								<div class="gt-store-finder-row row-fluid">

									<div class="vcard span4">
										<h4>Store Name</h4>
										<p class="adr">
											<span class="street-address">
												Address line number 1<br>
												Address line number 2
											</span>
											<br>
										</p>
										<span class="tel">Tel <span class="value">00 0000 0000</span></span><br>
										<span class="tel"><span class="type">Fax</span>: <span class="value">00 0000 0000</span></span>
										<a class="focus-link" href="mailto:someone@example.com">Email us</a>
									</div>
									<div class="vcard span4">
										<h4>Store Name</h4>
										<p class="adr">
											<span class="street-address">
												Address line number 1<br>
												Address line number 2
											</span>
											<br>
										</p>
										<span class="tel">Tel <span class="value">00 0000 0000</span></span><br>
										<span class="tel"><span class="type">Fax</span>: <span class="value">00 0000 0000</span></span>
										<a class="focus-link" href="mailto:someone@example.com">Email us</a>
									</div>
									<div class="vcard span4">
										<h4>Store Name</h4>
										<p class="adr">
											<span class="street-address">
												Address line number 1<br>
												Address line number 2
											</span>
											<br>
										</p>
										<span class="tel">Tel <span class="value">00 0000 0000</span></span><br>
										<span class="tel"><span class="type">Fax</span>: <span class="value">00 0000 0000</span></span>
										<a class="focus-link" href="mailto:someone@example.com">Email us</a>
									</div>

								</div>
							</div>

							<div class="gt-store-finder-list clearfix">
								<div class="gt-store-finder-row row-fluid">

									<div class="vcard span4">
										<h4>Store Name</h4>
										<p class="adr">
											<span class="street-address">
												Address line number 1<br>
												Address line number 2
											</span>
											<br>
										</p>
										<span class="tel">Tel <span class="value">00 0000 0000</span></span><br>
										<span class="tel"><span class="type">Fax</span>: <span class="value">00 0000 0000</span></span>
										<a class="focus-link" href="mailto:someone@example.com">Email us</a>
									</div>
									<div class="vcard span4">
										<h4>Store Name</h4>
										<p class="adr">
											<span class="street-address">
												Address line number 1<br>
												Address line number 2
											</span>
											<br>
										</p>
										<span class="tel">Tel <span class="value">00 0000 0000</span></span><br>
										<span class="tel"><span class="type">Fax</span>: <span class="value">00 0000 0000</span></span>
										<a class="focus-link" href="mailto:someone@example.com">Email us</a>
									</div>
									<div class="vcard span4">
										<h4>Store Name</h4>
										<p class="adr">
											<span class="street-address">
												Address line number 1<br>
												Address line number 2
											</span>
											<br>
										</p>
										<span class="tel">Tel <span class="value">00 0000 0000</span></span><br>
										<span class="tel"><span class="type">Fax</span>: <span class="value">00 0000 0000</span></span>
										<a class="focus-link" href="mailto:someone@example.com">Email us</a>
									</div>

								</div>
							</div>

							<h3 class="headline">New South Wales</h3>
							<hr>

							<div class="gt-store-finder-list clearfix">
								<div class="gt-store-finder-row row-fluid">

									<div class="vcard span4">
										<h4>Store Name</h4>
										<p class="adr">
											<span class="street-address">
												Address line number 1<br>
												Address line number 2
											</span>
											<br>
										</p>
										<span class="tel">Tel <span class="value">00 0000 0000</span></span><br>
										<span class="tel"><span class="type">Fax</span>: <span class="value">00 0000 0000</span></span>
										<a class="focus-link" href="mailto:someone@example.com">Email us</a>
									</div>
									<div class="vcard span4">
										<h4>Store Name</h4>
										<p class="adr">
											<span class="street-address">
												Address line number 1<br>
												Address line number 2
											</span>
											<br>
										</p>
										<span class="tel">Tel <span class="value">00 0000 0000</span></span><br>
										<span class="tel"><span class="type">Fax</span>: <span class="value">00 0000 0000</span></span>
										<a class="focus-link" href="mailto:someone@example.com">Email us</a>
									</div>
									<div class="vcard span4">
										<h4>Store Name</h4>
										<p class="adr">
											<span class="street-address">
												Address line number 1<br>
												Address line number 2
											</span>
											<br>
										</p>
										<span class="tel">Tel <span class="value">00 0000 0000</span></span><br>
										<span class="tel"><span class="type">Fax</span>: <span class="value">00 0000 0000</span></span>
										<a class="focus-link" href="mailto:someone@example.com">Email us</a>
									</div>

								</div>
								<div class="gt-store-finder-row row-fluid">

									<div class="vcard span4">
										<h4>Store Name</h4>
										<p class="adr">
											<span class="street-address">
												Address line number 1<br>
												Address line number 2
											</span>
											<br>
										</p>
										<span class="tel">Tel <span class="value">00 0000 0000</span></span><br>
										<span class="tel"><span class="type">Fax</span>: <span class="value">00 0000 0000</span></span>
										<a class="focus-link" href="mailto:someone@example.com">Email us</a>
									</div>
									<div class="vcard span4">
										<h4>Store Name</h4>
										<p class="adr">
											<span class="street-address">
												Address line number 1<br>
												Address line number 2
											</span>
											<br>
										</p>
										<span class="tel">Tel <span class="value">00 0000 0000</span></span><br>
										<span class="tel"><span class="type">Fax</span>: <span class="value">00 0000 0000</span></span>
										<a class="focus-link" href="mailto:someone@example.com">Email us</a>
									</div>
									<div class="vcard span4">
										<h4>Store Name</h4>
										<p class="adr">
											<span class="street-address">
												Address line number 1<br>
												Address line number 2
											</span>
											<br>
										</p>
										<span class="tel">Tel <span class="value">00 0000 0000</span></span><br>
										<span class="tel"><span class="type">Fax</span>: <span class="value">00 0000 0000</span></span>
										<a class="focus-link" href="mailto:someone@example.com">Email us</a>
									</div>

								</div>
							</div>

							<h3 class="headline">Queensland</h3>
							<hr>

							<div class="gt-store-finder-list clearfix">
								<div class="gt-store-finder-row row-fluid">

									<div class="vcard span4">
										<h4>Store Name</h4>
										<p class="adr">
											<span class="street-address">
												Address line number 1<br>
												Address line number 2
											</span>
											<br>
										</p>
										<span class="tel">Tel <span class="value">00 0000 0000</span></span><br>
										<span class="tel"><span class="type">Fax</span>: <span class="value">00 0000 0000</span></span>
										<a class="focus-link" href="mailto:someone@example.com">Email us</a>
									</div>
									<div class="vcard span4">
										<h4>Store Name</h4>
										<p class="adr">
											<span class="street-address">
												Address line number 1<br>
												Address line number 2
											</span>
											<br>
										</p>
										<span class="tel">Tel <span class="value">00 0000 0000</span></span><br>
										<span class="tel"><span class="type">Fax</span>: <span class="value">00 0000 0000</span></span>
										<a class="focus-link" href="mailto:someone@example.com">Email us</a>
									</div>
									<div class="vcard span4">
										<h4>Store Name</h4>
										<p class="adr">
											<span class="street-address">
												Address line number 1<br>
												Address line number 2
											</span>
											<br>
										</p>
										<span class="tel">Tel <span class="value">00 0000 0000</span></span><br>
										<span class="tel"><span class="type">Fax</span>: <span class="value">00 0000 0000</span></span>
										<a class="focus-link" href="mailto:someone@example.com">Email us</a>
									</div>

								</div>
								<div class="gt-store-finder-row row-fluid">

									<div class="vcard span4">
										<h4>Store Name</h4>
										<p class="adr">
											<span class="street-address">
												Address line number 1<br>
												Address line number 2
											</span>
											<br>
										</p>
										<span class="tel">Tel <span class="value">00 0000 0000</span></span><br>
										<span class="tel"><span class="type">Fax</span>: <span class="value">00 0000 0000</span></span>
										<a class="focus-link" href="mailto:someone@example.com">Email us</a>
									</div>

								</div>
							</div>

						</section>

					</div>

				</div>
		    </div>

	    <?php
			include_once($serverBase."/includes/foot/foot-generic.php");
		?>

	</div>

   	<?php
   		$mobileNavActiveMenu = array(
   			"activeMenu" => "Plumbing"
   		);
	   	include_once($serverBase."/includes/nav/nav-mobile.php");
	?>

	<?php
		$jsScriptPaths = [
			"/assets/js/jquery.lazyload.min.js",
			"/assets/js/bootstrap-collapse.js",
			"/assets/js/bootstrap-dropdown.js",
			"/assets/js/bootstrap-carousel.js",
			"/assets/js/bootstrap-transition.js",
			"/assets/js/jquery.mobile.custom.min.js",
			"/assets/js/reece-ocnav.js",
	  		"/assets/js/reece-carousel.js"
		];
	   	include_once($serverBase."/includes/foot/scripts.php");
	?>

    </body>
</html>