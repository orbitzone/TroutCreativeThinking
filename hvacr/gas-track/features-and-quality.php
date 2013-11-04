
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
						<li class="active page-branding text-brand">Features & Quality</li>
					</ul>

					<div class="row-fluid">			

						<aside class="gt-sidebar span3">	
							<?php 
								$gtNavActiveMenuItem = "Features & Quality";
							   	include_once($serverBase."/includes/nav/nav-gt-nav.php");
							?>
						</aside>

						<section class="gt-content span9">
							<h3 class="headline">A total quality approach to gas tracking and recycling.</h3>
							<hr>
							<p class="lead">Reece hvac-r is a leading supplier of refrigerants to the refrigeration and air conditioning markets. We recognise our responsibility in managing safety, quality and environmental matters that form an integral part of our business.</p>
							<p>We are committed to continuous improvement of our safety, quality and environmental performance through the involvement of our people, customers, contractors and suppliers.</p>
							<p>We build strategic partnerships with our customers and we’re always looking to provide a total package solution to them, including a comprehensive product portfolio, inventory management, cylinder fleet management, technical support and ancillary services.</p>
							<p>We work with our Refrigerant Gas provider to ensure you are provided with benchmark standards in product ‘life cycle’ employing sophisticated reclamation, recovery, cylinder management and laboratory facilities and we are fully committed to the sustainability of the environment. And we achieve this in a number of ways.</p>

							<h4 class="section-head">Product Integrity</h4>
							<ul>
								<li>All bulk product imported into Australia are tested through an on-site laboratory prior to decanting into bulk storage or cylinders.</li>
								<li>All cylinders are externally cleaned upon return and internally cleaned if the refill protection device (RPD) is missing.</li>
								<li>Automated filling equipment is used to fill cylinders and generate cylinder labeling.</li>
								<li>Following filling, each cylinder is leak tested before shrink wrapping is applied to the valve.</li>
								<li>All cylinders are guaranteed to be dispatched within test date.</li>
							</ul>

							<h4 class="section-head">Reece hvac-r provides refrigerant gas compliance to the following certifications:</h4>
							<ul>
								<li>AS/NZS ISO 9001:2008 (Quality)</li>
								<li>AS/NZS 4801:2001 (Safety)</li>
								<li>AS/NZS ISO 14001:2004</li>
							</ul>

							<h4 class="section-head">(Environmental)</h4>
							<ul>
								<li>AS 2337.1: 2004 (Test Station for Inspection & Testing of Gas Cylinders or Vessels)</li>
							</ul>
							<p>With integrated management system regularly audited and certified by NCSI, a third party certification body.</p>

							<h4 class="section-head">Cylinder Tracking</h4>
							<ul>
								<li>All cylinders are individually bar-coded.</li>
								<li>Reece hvac-r tracks its cylinder fleet from dispatch to return via our in-house tracking system GasTrack.</li>
								<li>Data on each cylinder is maintained throughout its 10 year test period, including the logging of any warranty issues (etc).</li>
							</ul>
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
			"/assets/js/bootstrap-transition.js",
			"/assets/js/jquery.mobile.custom.min.js",
			"/assets/js/reece-ocnav.js"

		]; 
	   	include_once($serverBase."/includes/foot/scripts.php");
	?>

    </body>
</html>