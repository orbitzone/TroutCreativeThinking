
	<?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>

	<?php 
		$cssScriptPaths = [
			"/assets/css/reece-trade-outlet.css",
			"/assets/css/reece-hvac-r.css"
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
					<div class="banner-branding-block page-branding box-brand pull-right">
						<h3 class="banner-branding-title">Hvac-r</h3>
					</div>
				</div>

				<div class="news-alert-block">
					<span class="news-alert-block-title">Latest issue / #138 / <b>Aug 2013</b></span>
					<a class="btn btn-highlight-alternate btn-mini" href="#">Download PDF</a>
					<a class="btn btn-highlight-alternate btn-mini" href="#">Previous issues</a>
				</div>					

				<ul class="breadcrumb">
					<li><a href="#">Outlet</a> <span class="divider">/</span></li>
					<li class="active page-branding text-brand">Hvac-r</li>
				</ul>				

				<div class="row-fluid">
				    <article class="latest-news span6">
				    	<img src="/assets/images/trade_2013/trade_article_sample.jpg" alt="Trade sample" />
    					<h3>The smart way to keep your business moving</h3>
    					<small class="page-branding text-brand">1 June 2013</small>
    					<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non ornare arcu. Curabitur dui est, semper ac faucibus vel, iaculis condimentum odio. Etiam eget felis neque. Phasellus hendrerit ante nec ante cursus eget pellentesque tortor rhoncus. Duis
						</p>
						<a class="read-more page-branding text-brand" href="#">Read More<i class="icon-arrow-right"></i></a>
					</article>

					<div class="span6">
						<div class="article-summary-secondary row-fluid">
							<article class="article span4">
								<a href="#"><img src="http://placehold.it/480x250" alt="Trade Sample Mini" /></a>
								<small class="page-branding text-brand">9 June 2013</small>
								<h3>Worldskills team 2013 – Meet Alex De Koeyer</h3>
								<p>
									The best, brightest young tradies compete for a world title.
								</p>
								<a class="read-more page-branding text-brand" href="#">Read More<i class="icon-arrow-right"></i></a>
							</article>

							<article class="article span4">
								<a href="#"><img src="http://placehold.it/480x250" alt="Trade Sample Mini" /></a>
		    					<small class="page-branding text-brand">20 May 2013</small>
		    					<h3>Conex launches hot new fitting</h3>
		    					<p>
									Conex Bänninger has just added a new fitting to their quality range of products.
								</p>
								<a class="read-more page-branding text-brand" href="#">Read More<i class="icon-arrow-right"></i></a>
							</article>

							<article class="article span4">
								<a href="#"><img src="http://placehold.it/480x250" alt="Trade Sample Mini" /></a>
			    				<small class="page-branding text-brand">1 May 2013</small>
			    				<h3>The peace of mind in having the right connections</h3>
			    				<p>
									Conex Bänninger has just added a new fitting to their quality range of products.
								</p>
								<a class="read-more page-branding text-brand" href="#">Read More<i class="icon-arrow-right"></i></a>
							</article>	
						</div>
						<div class="latest-news-list article-summary-secondary row-fluid">
							<article class="article span4">
								<a href="#"><img src="http://placehold.it/480x250" alt="Trade Sample Mini" /></a>
								<small class="page-branding text-brand">9 June 2013</small>
								<h3>Worldskills team 2013 – Meet Alex De Koeyer</h3>
								<p>
									The best, brightest young tradies compete for a world title.
								</p>
								<a class="read-more page-branding text-brand" href="#">Read More<i class="icon-arrow-right"></i></a>
							</article>

							<article class="article span4">
								<a href="#"><img src="http://placehold.it/480x250" alt="Trade Sample Mini" /></a>
		    					<small class="page-branding text-brand">20 May 2013</small>
		    					<h3>Conex launches hot new fitting</h3>
		    					<p>
									Conex Bänninger has just added a new fitting to their quality range of products.
								</p>
								<a class="read-more page-branding text-brand" href="#">Read More<i class="icon-arrow-right"></i></a>
							</article>

							<article class="article span4">
								<a href="#"><img src="http://placehold.it/480x250" alt="Trade Sample Mini" /></a>
			    				<small class="page-branding text-brand">1 May 2013</small>
			    				<h3>The peace of mind in having the right connections</h3>
			    				<p>
									Conex Bänninger has just added a new fitting to their quality range of products.
								</p>
								<a class="read-more page-branding text-brand" href="#">Read More<i class="icon-arrow-right"></i></a>
							</article>	
						</div>

						<a class="more-articles" href="#">More articles</a>

					</div>
				</div>	

				<hr>

				<div data-resize-group="article" class="row-fluid">
					<div class="span4">
						<div data-resize="height" class="article-summary-list">
							<h3 class="article-topic-heading">What's Hot</h3>
							<ul class="nav">
								<li><h3><a href="#">Worldskills team 2013 - Meet Alex De Koeyer. <i class="icon-arrow-right"></i></a></h3></li>
								<li><h3><a href="#">Conex launches hot new fitting. <i class="icon-arrow-right"></i></a></h3></li>
								<li><h3><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <i class="icon-arrow-right"></i></a></h3></li>
								<li><h3><a href="#">Incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis. <i class="icon-arrow-right"></i></a></h3></li>
							</ul>
						</div>
					</div>

					<div class="span8">
						<div data-resize="height" class="article-summary-secondary">
							<h3 class="article-topic-heading">Industry Focus</h3>

							<div class="row-fluid">
								<article class="article span4">
									<a href="#"><img src="http://placehold.it/480x250" alt="Trade Sample Mini" /></a>
									<small class="page-branding text-brand">9 June 2013</small>
									<h3>Worldskills team 2013 – Meet Alex De Koeyer</h3>
									<p>
										The best, brightest young tradies compete for a world title.
									</p>
									<a class="read-more page-branding text-brand" href="#">Read More<i class="icon-arrow-right"></i></a>
								</article>

								<article class="article span4">
									<a href="#"><img src="http://placehold.it/480x250" alt="Trade Sample Mini" /></a>
			    					<small class="page-branding text-brand">20 May 2013</small>
			    					<h3>Conex launches hot new fitting</h3>
			    					<p>
										Conex Bänninger has just added a new fitting to their quality range of products.
									</p>
									<a class="read-more page-branding text-brand" href="#">Read More<i class="icon-arrow-right"></i></a>
								</article>

								<article class="article span4">
									<a href="#"><img src="http://placehold.it/480x250" alt="Trade Sample Mini" /></a>
			    					<small class="page-branding text-brand">20 May 2013</small>
			    					<h3>Conex launches hot new fitting</h3>
			    					<p>
										Conex Bänninger has just added a new fitting to their quality range of products.
									</p>
									<a class="read-more page-branding text-brand" href="#">Read More<i class="icon-arrow-right"></i></a>
								</article>								

							</div>

						</div>
					</div>
				</div>

				<div data-resize-group="gateway" class="article-gateway row-fluid">
					<article data-resize="height" class="article span3">
						<h3>In The Pipeline</h3>
						<p>Keeping you up-to-date on a wide range of products.</p>
						<a href="#"><img src="http://placehold.it/480x250" alt="Trade Sample Mini" /></a>
						<p>
							Featured Product:
							<span>Raupiano Plus 87° Bends</span>
						</p>
						<a class="btn btn-inverse" href="#">Archive</a>
					</article>

					<article data-resize="height" class="article span3">
						<h3>The Crack</h3>
						<p>Fun stories from the world of plumbing</p>
						<a href="#"><img src="http://placehold.it/480x250" alt="Trade Sample Mini" /></a>
						<p>
							Featured Story:
							<span>A moo stuck in the loo</span>
						</p>
						<a class="btn btn-inverse" href="#">Archive</a>
					</article>

					<article data-resize="height" class="article span3">
						<h3>Price Changes</h3>
						<p>The latest monthly price changes for 2013</p>
						<a href="#"><img src="http://placehold.it/480x250" alt="Trade Sample Mini" /></a>
						<p>
							Month:
							<span>August 2013</span>
						</p>
						<a class="btn btn-inverse" href="#">Details</a>
					</article>

					<article data-resize="height" class="article span3">
						<h3>New Stores</h3>
						<p>Latest stores added to the reece network.</p>
						<a href="#"><img src="http://placehold.it/480x250" alt="Trade Sample Mini" /></a>
						<a class="btn btn-inverse" href="#">Details</a>
					</article>						
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
            "/assets/js/reece-signon.js",
			"/assets/js/bootstrap-transition.js",
			"/assets/js/jquery.mobile.custom.min.js",
			"/assets/js/reece-ocnav.js",
			"/assets/js/matchMedia.js",			
			"/assets/js/reece-match-height.js"

		]; 
	   	include_once($serverBase."/includes/foot/scripts.php");
	?>

    </body>
</html>