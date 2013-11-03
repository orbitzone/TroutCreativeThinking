
	<?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>

	<?php 
		$cssScriptPaths = [
			"/assets/css/reece-trade-outlet.css",
			"/assets/css/reece-nav-updated.css"
		]; 
	   	include_once($serverBase."/includes/head/head-generic.php");
	?>		

    <body class="no-touch bathroom-moments account-details-summary">
		<div class="ocmain-wrapper">

			<?php
				$genericNavActiveMenuItem = "Plumbing";
			   	include_once($serverBase."/includes/nav/nav-generic.php");
			?>

	    <div class="content-container">
			<div class="inner-wrapper">
<br><br><br><br><br><br><br><br>        
					<div class="row-fluid">
						<h2>Lorem ipsum dolor sit</h2>
						<div>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur volutpat pulvinar neque, quis congue turpis. Suspendisse sit amet tristique leo. Quisque auctor ac elit vel adipiscing. Aliquam erat volutpat. Donec eu dolor id odio malesuada semper sed vitae magna. Mauris convallis ac eros et ultricies. Vivamus eu odio eu nulla tincidunt rhoncus. Vivamus faucibus lectus id turpis laoreet, et pretium odio tincidunt. Duis ac elit sagittis, malesuada magna eget, lacinia ante.
							</p>
							<p>
								Vivamus posuere erat in mollis feugiat. Nullam facilisis lacus vel massa aliquam, id eleifend diam posuere. Praesent sollicitudin sapien nibh, ut commodo nibh scelerisque sit amet. Vivamus bibendum mauris eget nulla tempor, sit amet ornare lorem vulputate. Phasellus tincidunt, dolor id molestie luctus, nunc lorem dignissim nisi, ut tempor turpis tellus quis nisl. Curabitur accumsan et enim sit amet luctus. Ut condimentum lobortis vestibulum. Maecenas in interdum dolor, a feugiat felis. Cras eu laoreet tortor, non cursus ante.
							</p>
							<p>
								Fusce porttitor erat et eros feugiat, ut fermentum ante eleifend. Nullam commodo nisi nec velit laoreet porta. Aliquam erat dolor, porta non lectus nec, dapibus malesuada turpis. Vivamus placerat ut urna at viverra. Suspendisse fringilla metus vel mi fermentum viverra. Donec aliquet urna eros, congue molestie purus mollis non. Aliquam luctus sit amet eros quis sollicitudin. Vestibulum quis quam nisi. Suspendisse dictum rhoncus augue, non aliquet massa elementum et. Suspendisse sed vestibulum lorem, nec rhoncus felis. Fusce vitae sapien ullamcorper, fermentum eros at, faucibus mi. Nulla quis lectus felis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam ut nulla ac sapien dignissim fringilla id a urna. Fusce ultrices sit amet turpis in fringilla.
							</p>
							<p>
								Praesent luctus pretium placerat. Aenean quis augue luctus nisi tristique tristique vitae a ipsum. Proin est arcu, dapibus sed pellentesque sit amet, aliquam non dolor. Nam non ligula quis magna aliquet tincidunt. Morbi dignissim, nulla sed vestibulum fringilla, nunc massa luctus urna, et porttitor eros nulla feugiat mauris. Aenean vitae velit sed eros aliquet malesuada. Nulla non blandit elit. Proin in mauris in augue volutpat feugiat. Ut in turpis at ante pellentesque lobortis sit amet non augue. Etiam vehicula pretium neque, tincidunt semper ipsum accumsan eu. Morbi commodo posuere mauris, a porta magna vehicula a. Curabitur eget neque dolor. Duis dictum sit amet est quis venenatis. Aliquam neque nibh, placerat sit amet consequat in, tristique in mauris.
							</p>
							<p>
								Suspendisse potenti. Praesent tellus orci, euismod id sem in, molestie lobortis erat. Proin sagittis eget massa nec auctor. Vivamus augue ipsum, ultrices pharetra blandit molestie, aliquam in tellus. In at fringilla metus. Sed aliquet venenatis diam et pulvinar. Vivamus lobortis euismod tempor. Phasellus nec aliquet enim. Nunc ultricies erat ante, non scelerisque odio accumsan nec.
							</p>
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
   			"activeMenu" => "Plumbing"
   		);
	   	include_once($serverBase."/includes/nav/nav-mobile.php");
	?>	

	<?php 
		$jsScriptPaths = [
			"/assets/js/jquery.lazyload.min.js", 
			"/assets/js/bootstrap-collapse.js",
			"/assets/js/bootstrap-carousel.js",
			"/assets/js/bootstrap-dropdown.js",
			"/assets/js/bootstrap-transition.js",
			"/assets/js/jquery.mobile.custom.min.js",
			"/assets/js/reece-ocnav.js",
			"/assets/js/reece-carousel.js",
			"/assets/js/reece-match-height.js"
		]; 
	   	include_once($serverBase."/includes/foot/scripts.php");
	?>
	
    </body>
</html>