
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

				<div class="article-headline row-fluid">
					<div class="span6">
						<h2 class="article-headline-title">Outlet</h2>
						<h3>The Official Reece Customer Update</h3>
					</div>
					<div class="span6">
						<h3>What are you intrested in?</h3>
					</div>
				</div>

				<div class="row-fluid">
				    <article class="article-main span6">
				    	<img src="/assets/images/trade_2013/trade_article_sample.jpg" alt="Trade sample" />
    					<h3>Reece Tool Catalogue</h3>
    					<hr>
    					<small class="page-branding text-brand">1 June 2013</small>
    					<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non ornare arcu. Curabitur dui est, semper ac faucibus vel, iaculis condimentum odio. Etiam eget felis neque. Phasellus hendrerit ante nec ante cursus eget pellentesque tortor rhoncus. Duis
						</p>
						<a class="read-more page-branding text-brand page-branding text-brand" href="#">Read More<i class="icon-arrow-right"></i></a>		    		
					</article>

					<div class="span6">
						<div class="article-secondary row-fluid">
							<article class="article span4">
								<a href="#"><img src="http://placehold.it/480x250" alt="Trade Sample Mini" /></a>
								<small>9 June 2013</small>
								<h3>Worldskills team 2013 – Meet Alex De Koeyer</h3>
								<p>
									The best, brightest young tradies compete for a world title.
								</p>
								<a class="read-more page-branding text-brand page-branding text-brand" href="#">Read More<i class="icon-arrow-right"></i></a>
							</article>

							<article class="article span4">
								<a href="#"><img src="http://placehold.it/480x250" alt="Trade Sample Mini" /></a>
		    					<small>20 May 2013</small>
		    					<h3>Conex launches hot new fitting</h3>
		    					<p>
									Conex Bänninger has just added a new fitting to their quality range of products.
								</p>
								<a class="read-more page-branding text-brand page-branding text-brand" href="#">Read More<i class="icon-arrow-right"></i></a>
							</article>

							<article class="article span4">
								<a href="#"><img src="http://placehold.it/480x250" alt="Trade Sample Mini" /></a>
			    				<small>1 May 2013</small>
			    				<h3>The peace of mind in having the right connections</h3>
			    				<p>
									Conex Bänninger has just added a new fitting to their quality range of products.
								</p>
								<a class="read-more page-branding text-brand page-branding text-brand" href="#">Read More<i class="icon-arrow-right"></i></a>
							</article>	
						</div>
						<div class="article-secondary row-fluid">
							<article class="article span4">
								<a href="#"><img src="http://placehold.it/480x250" alt="Trade Sample Mini" /></a>
								<small>9 June 2013</small>
								<h3>Worldskills team 2013 – Meet Alex De Koeyer</h3>
								<p>
									The best, brightest young tradies compete for a world title.
								</p>
								<a class="read-more page-branding text-brand page-branding text-brand" href="#">Read More<i class="icon-arrow-right"></i></a>
							</article>

							<article class="article span4">
								<a href="#"><img src="http://placehold.it/480x250" alt="Trade Sample Mini" /></a>
		    					<small>20 May 2013</small>
		    					<h3>Conex launches hot new fitting</h3>
		    					<p>
									Conex Bänninger has just added a new fitting to their quality range of products.
								</p>
								<a class="read-more page-branding text-brand page-branding text-brand" href="#">Read More<i class="icon-arrow-right"></i></a>
							</article>

							<article class="article span4">
								<a href="#"><img src="http://placehold.it/480x250" alt="Trade Sample Mini" /></a>
			    				<small>1 May 2013</small>
			    				<h3>The peace of mind in having the right connections</h3>
			    				<p>
									Conex Bänninger has just added a new fitting to their quality range of products.
								</p>
								<a class="read-more page-branding text-brand page-branding text-brand" href="#">Read More<i class="icon-arrow-right"></i></a>
							</article>	
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

		]; 
	   	include_once($serverBase."/includes/foot/scripts.php");
	?>

    </body>
</html>