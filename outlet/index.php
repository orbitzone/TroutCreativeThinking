
	<?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>

	<?php 
		$cssScriptPaths = [
			"/assets/css/reece-trade-outlet.css",
			"/assets/css/reece-plumbing.css"
		]; 
	   	include_once($serverBase."/includes/head/head-generic.php");
	?>		

    <body class="no-touch bathroom-moments account-details-summary">
		<div class="ocmain-wrapper">

			<?php
				$genericNavActiveMenuItem = "Plumbing";
			   	include_once($serverBase."/includes/nav/nav-generic.php");
			?>

			<?php
			   	include_once($serverBase."/includes/nav/nav-subnavbar.php");
			?>

	    <div class="content-container">
			<div class="inner-wrapper">

				<div class="article-banner-outlet row-fluid">
					<img class="banner-logo pull-left" src="/assets/images/outlet_2013/outlet-banner-logo.png" alt="Outlet">
					<div class="banner-news-alert-block pull-right">
						<img src="/assets/images/outlet_2013/outlet-previous-article.jpg" alt="Outlet Article">
						<span class="banner-news-alert-title"><b>Latest issue</b></span>
						<span class="banner-news-alert-title">#138 Aug 2013</span>
						
						<a class="btn btn-highlight btn-mini" href="#">Download PDF</a>
						<a class="btn btn-highlight btn-mini" href="#">Previous issues</a>
					</div>
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
					<li class="active page-branding text-brand">Outlet</li>
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
								<li><i class="icon-arrow-right"></i><h3><a href="#">Worldskills team 2013 - Meet Alex De Koeyer.</a></h3></li>
								<li><i class="icon-arrow-right"></i><h3><a href="#">Conex launches hot new fitting.</a></h3></li>
								<li><i class="icon-arrow-right"></i><h3><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h3></li>
								<li><i class="icon-arrow-right"></i><h3><a href="#">Incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.</a></h3></li>
								<li><i class="icon-arrow-right"></i><h3><a href="#">Et dolore magna aliqua. Ut enim ad minim veniam, quis.</a></h3></li>
								<li><i class="icon-arrow-right"></i><h3><a href="#">Ut labore et dolore magna aliqua. Ut enim ad.</a></h3></li>
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
						<h3>In the Pipeline</h3>
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
			"/assets/js/bootstrap-transition.js",
			"/assets/js/jquery.mobile.custom.min.js",
			"/assets/js/reece-ocnav.js",
			"/assets/js/reece-match-height.js"

		]; 
	   	include_once($serverBase."/includes/foot/scripts.php");
	?>

    </body>
</html>