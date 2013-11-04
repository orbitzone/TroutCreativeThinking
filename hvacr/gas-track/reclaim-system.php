
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
							<h3 class="headline">At Reece hvac-r, we’ll recycle your refrigerant, so you’re 100% compliant.</h3>
							<hr>
							<p class="lead">Every Reece hvac-r branch now offers a full Refrigerant Reclamation and Recycling Service. We take all the hassle out of recycling refrigerant, so you stay legally compliant. And best of all, our service is fast, safe and free.</p>
							<p>Legislation in Australia prohibits the venting of refrigerants into the atmosphere. To make it easy for you to operate sustainably, the Reece hvac-r network now supplies <b>Reclaim</b> and <b>Pump Down</b> cylinders so you can capture refrigerant and return it to us for recycling - which is great for the environment and ultimately helps to protect your business reputation.</p>
 							
 							<div class="well">
 								<p><b>Reclaim</b> cylinders are used for the sole purpose of returning used and/or contaminated refrigerant for responsible disposal.</p>
 							</div>
 							<div class="well">
 								<p><b>Pump Down</b> cylinders are guaranteed to be internally clean and can be used for temporary refrigerant storage while a system is being serviced or repaired.</p>
 							 </div>
 							
 							<h4 class="section-head">We make refrigerant recycling easy.</h4>
 							<p>Reece hvac-r provides you with everything you need to meet the requirements of the Australia and New Zealand Refrigerant Handling Code of Practice 2007. Our comprehensive service includes:</p>
 							<ul>
 								<li>Complete refrigerant lifecycle stewardship.</li>
 								<li>Dedicated <b>Reclaim</b> and <b>Pump Down</b> cylinders are available through our branches to recover used and contaminated refrigerant. You can source and return cylinders during normal Reece HVAC-R business hours.</li>
 								<li><b>Reclaim</b> and <b>Pump Down</b> cylinders have specialised dual outlet valves, allowing reclaim of refrigerant by pump or push/pull.</li>
 								<li>Our service network provides access to a fully equipped laboratory able to offer customers a refrigerant analysis service to test for acidity, moisture, purity, etc.</li>
 								<li>Cyltrak® cylinder tracking technology ensures that cylinders are regularly serviced and maintained for optimum safety.</li>
 							</ul>
 							
 							<h4 class="section-head">Usage Instructions</h4>
 							<ul>
 								<li>Reclaim and Pump down cylinders should never be used to reclaim ammonia (R717).</li>
 								<li>Reclaim and Pump down cylinders should not be used to reclaim flammable hydrocarbon refrigerants such as R600a, R290, R1270.</li>
 								<li>Reclaim and Pump down cylinders should never be filled above the specified maximum fill weight.</li>
 								<li>Always apply the valve caps after reclaiming refrigerant into a cylinder.</li>
 								<li>Best practice suggests that refrigerants should not be mixed.</li>
 							</ul>
 							<p><b>For information on recycling large volumes, i.e. above 150kg, please contact us on 00 000 000.</b></p>
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