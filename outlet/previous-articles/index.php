
	<?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>

	<?php 
		$cssScriptPaths = [
			"/assets/css/reece-trade-outlet.css",
			"/assets/css/reece-plumbing.css"
		]; 
	   	include_once($serverBase."/includes/head/head-generic.php");
	?>		

    <body class="no-touch bathroom-moments account-details-summary withSubNav">
		<div class="ocmain-wrapper">
			<div class="navbar navbar-fixed-top topNav">
			<?php
				$genericNavActiveMenuItem = "Plumbing";
			   	include_once($serverBase."/includes/nav/nav-generic.php");
			?>

			<?php
			   	include_once($serverBase."/includes/nav/nav-subnavbar.php");
			?>
			</div>

	    <div class="content-container">
			<div class="inner-wrapper">

				<div class="article-banner-outlet row-fluid">
					<img class="banner-logo pull-left" src="/assets/images/outlet_2013/outlet-banner-logo.png" alt="Outlet">
				</div>

				<div class="news-alert-block">
					<span class="news-alert-block-title">Latest issue / #138 / <b>Aug 2013</b></span>
					<a class="btn btn-highlight-alternate btn-mini" href="#">Download PDF</a>
					<a class="btn btn-highlight-alternate btn-mini" href="#">Previous issues</a>
				</div>				

				<div class="trade-navigation clearfix">
					<span class="pull-left nav-guide"><b>What are you interested in?</b></span>
					<ul class="pull-right">
						<li><a href="#">All Stories</a></li>
						<li class="plumbing"><a href="#">Plumbing</a></li>
						<li class="irrigation"><a href="#">Irrigation</a></li>
						<li class="civil"><a href="#">Civil</a></li>
						<li class="hvacr"><a href="#">HVAC-R</a></li>
					</ul>
				</div>	

				<ul class="breadcrumb">
					<li><a href="#">Outlet</a> <span class="divider">/</span></li>
					<li class="active page-branding text-brand">Previous Issues</li>
				</ul>

				<div class="previous-articles accordion" id="previous-articles-accordion">
					<div class="accordion-group">
						<div class="active accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#previous-articles-accordion" href="#previous-articles-one">
							2012
							</a>
						</div>
						<div id="previous-articles-one" class="accordion-body collapse in">
							<div class="accordion-inner">
								<div class="row-fluid">
									<div class="previous-article span2">
										<img src="/assets/images/outlet_2013/outlet-previous-article.jpg" alt="Outlet Article">
										<span class="previous-article-tag">Jan 2012</span>
									</div>
									<div class="previous-article span2">
										<img src="/assets/images/outlet_2013/outlet-previous-article.jpg" alt="Outlet Article">
										<span class="previous-article-tag">Feb 2012</span>
									</div>		
									<div class="previous-article span2">
										<img src="/assets/images/outlet_2013/outlet-previous-article.jpg" alt="Outlet Article">
										<span class="previous-article-tag">March 2012</span>
									</div>	
									<div class="previous-article span2">
										<img src="/assets/images/outlet_2013/outlet-previous-article.jpg" alt="Outlet Article">
										<span class="previous-article-tag">Apr 2012</span>
									</div>
									<div class="previous-article span2">
										<img src="/assets/images/outlet_2013/outlet-previous-article.jpg" alt="Outlet Article">
										<span class="previous-article-tag">May 2012</span>
									</div>
									<div class="previous-article span2">
										<img src="/assets/images/outlet_2013/outlet-previous-article.jpg" alt="Outlet Article">
										<span class="previous-article-tag">June 2012</span>
									</div>
								</div>
								<div class="row-fluid">
									<div class="previous-article span2">
										<img src="/assets/images/outlet_2013/outlet-previous-article.jpg" alt="Outlet Article">
										<span class="previous-article-tag">July 2012</span>
									</div>
									<div class="previous-article span2">
										<img src="/assets/images/outlet_2013/outlet-previous-article.jpg" alt="Outlet Article">
										<span class="previous-article-tag">Aug 2012</span>
									</div>		
									<div class="previous-article span2">
										<img src="/assets/images/outlet_2013/outlet-previous-article.jpg" alt="Outlet Article">
										<span class="previous-article-tag">Sep 2012</span>
									</div>	
									<div class="previous-article span2">
										<img src="/assets/images/outlet_2013/outlet-previous-article.jpg" alt="Outlet Article">
										<span class="previous-article-tag">Oct 2012</span>
									</div>
									<div class="previous-article span2">
										<img src="/assets/images/outlet_2013/outlet-previous-article.jpg" alt="Outlet Article">
										<span class="previous-article-tag">Nov 2012</span>
									</div>	
									<div class="previous-article span2">
										<img src="/assets/images/outlet_2013/outlet-previous-article.jpg" alt="Outlet Article">
										<span class="previous-article-tag">Dec 2012</span>
									</div>										
								</div>								
							</div>
						</div>
					</div>
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#previous-articles-accordion" href="#previous-articles-two">
							2011
							</a>
						</div>
						<div id="previous-articles-two" class="accordion-body collapse">
							<div class="accordion-inner">
								<div class="row-fluid">
									<div class="previous-article span2">
										<img src="/assets/images/outlet_2013/outlet-previous-article.jpg" alt="Outlet Article">
										<span class="previous-article-tag">July 2011</span>
									</div>
									<div class="previous-article span2">
										<img src="/assets/images/outlet_2013/outlet-previous-article.jpg" alt="Outlet Article">
										<span class="previous-article-tag">Aug 2011</span>
									</div>									
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#previous-articles-accordion" href="#previous-articles-three">
							2010
							</a>
						</div>
						<div id="previous-articles-three" class="accordion-body collapse">
							<div class="accordion-inner">
								<div class="row-fluid">
									<div class="previous-article span2">
										<img src="/assets/images/outlet_2013/outlet-previous-article.jpg" alt="Outlet Article">
										<span class="previous-article-tag">July 2010</span>
									</div>
									<div class="previous-article span2">
										<img src="/assets/images/outlet_2013/outlet-previous-article.jpg" alt="Outlet Article">
										<span class="previous-article-tag">Aug 2010</span>
									</div>									
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#previous-articles-accordion" href="#previous-articles-four">
							2009
							</a>
						</div>
						<div id="previous-articles-four" class="accordion-body collapse">
							<div class="accordion-inner">
								<div class="row-fluid">
									<div class="previous-article span2">
										<img src="/assets/images/outlet_2013/outlet-previous-article.jpg" alt="Outlet Article">
										<span class="previous-article-tag">July 2009</span>
									</div>
									<div class="previous-article span2">
										<img src="/assets/images/outlet_2013/outlet-previous-article.jpg" alt="Outlet Article">
										<span class="previous-article-tag">Aug 2009</span>
									</div>
									<div class="previous-article span2">
										<img src="/assets/images/outlet_2013/outlet-previous-article.jpg" alt="Outlet Article">
										<span class="previous-article-tag">Aug 2009</span>
									</div>		
									<div class="previous-article span2">
										<img src="/assets/images/outlet_2013/outlet-previous-article.jpg" alt="Outlet Article">
										<span class="previous-article-tag">Aug 2009</span>
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
   			"activeMenu" => "Plumbing"
   		);
	   	include_once($serverBase."/includes/nav/nav-mobile.php");
	?>	

	<?php 
		$jsScriptPaths = [
			"/assets/js/jquery.lazyload.min.js", 
			"/assets/js/mediaelement-and-player.min.js",
			"/assets/js/bootstrap-collapse.js",
			"/assets/js/bootstrap-dropdown.js",
			"/assets/js/bootstrap-transition.js",
			"/assets/js/jquery.mobile.custom.min.js",
			"/assets/js/reece-ocnav.js",
			"/assets/js/reece-collapse.js"

		]; 
	   	include_once($serverBase."/includes/foot/scripts.php");
	?>

    </body>
</html>