
	<?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>

	<?php 
		$cssScriptPaths = [
			"/assets/css/reece-trade-outlet.css",
			"/assets/css/reece-plumbing.css",
		];
		$cssPrintStyle = "/assets/css/reece-print.css";

	   	include_once($serverBase."/includes/head/head-generic.php");
	?>		

    <body class="no-touch bathroom-moments account-details-summary">

		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=117948834972391";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>

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

				<div class="article-banner row-fluid">
					<div class="span6">
						<h2 class="article-banner-title">Outlet</h2>
						<h3>The Official Reece Customer Update</h3>
					</div>
					<div class="span6">
						<h3>What are you intrested in?</h3>

						<ul class="trade-navigation nav nav-tabs pull-right">
							<li class="active"><a href="#">All Stories</a></li>
							<li class="plumbing"><a href="#">Plumbing</a></li>
							<li class="irrigation"><a href="#">Irrigation</a></li>
							<li class="civil"><a href="#">Civil</a></li>
							<li class="hvacr"><a href="#">HVAC-R</a></li>
						</ul>

					</div>
				</div>

				<hr>

				<div class="row-fluid">
				    <article class="article-main span8">
						<h3>Latest News > Article Title</h3>
				    	<img src="/assets/images/trade_2013/trade_article_sample.jpg" alt="Trade sample" />
				    	<div class="row-fluid">
				    		<div class="span9">
						    	<h2 class="headline article-headline">Reece Tool Catalogue</h2>
						    	<small class="page-branding text-brand">1 June 2013</small>
								<p class="lead">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit.
									Ut non ornare arcu. Curabitur dui est, semper ac
									faucibus vel, iaculis condimentum odio. Etiam eget felis
									neque. Phasellus hendrerit ante nec ante cursus eget
									pellentesque tortor rhoncus. Duis fermentum, nibh quis
									varius rhoncus, metus arcu imperdiet mi, vehicula
									auctor elit sem nec nulla.	
								</p>				    	
		    					<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non ornare arcu.
									Curabitur dui est, semper ac faucibus vel, iaculis condimentum odio. Etiam
									eget felis neque. Phasellus hendrerit ante nec ante cursus eget
									pellentesque tortor rhoncus. Duis fermentum, nibh quis varius rhoncus,
									metus arcu imperdiet mi, vehicula auctor elit sem nec nulla.
								</p>
								<img class="article-media" src="http://placehold.it/1030x350" alt="Trade Sample Mini" />
		    					<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non ornare arcu.
									Curabitur dui est, semper ac faucibus vel, iaculis condimentum odio. Etiam
									eget felis neque. Phasellus hendrerit ante nec ante cursus eget
									pellentesque tortor rhoncus. Duis fermentum, nibh quis varius rhoncus,
									metus arcu imperdiet mi, vehicula auctor elit sem nec nulla.
								</p>
							</div>
							<ul class="article-actions span3">
								<li><a href="javascript:window.print()" class="btn btn-large btn-block"><i class="icon-print"></i> Print</a></li>
								<li><a href="#" type="button" class="btn btn-large btn-block"><i class="icon-share-sign"></i> Share</a></li>
								<li><a href="#" class="label">Plumbing</a><a href="#" class="label">Catalogue</a><a href="#" class="label">Tool</a><a href="#" class="label">Media</a><a href="#" class="label">Tag Six</a><a href="#" class="label">Tag Five</a></li>
							</ul>
						</div>

						<div class="fb-comments" data-href="http://reece-responsive.trout.com.au/outlet/article"></div>

					</article>

					<aside class="span4">
						<h3>Recommended Stories</h3>
						<div class="recommended-stories">
							<article class="article">
								<a href="#"><img src="http://placehold.it/480x200" alt="Trade Sample Mini" /></a>
								<small>9 June 2013</small>
								<h3>Worldskills team 2013 – Meet Alex De Koeyer</h3>
								<p>
									The best, brightest young tradies compete for a world title.
								</p>
								<a class="read-more page-branding text-brand" href="#">Read More<i class="icon-arrow-right"></i></a>
							</article>

							<article class="article">
								<a href="#"><img src="http://placehold.it/480x200" alt="Trade Sample Mini" /></a>
		    					<small>20 May 2013</small>
		    					<h3>Conex launches hot new fitting</h3>
		    					<p>
									Conex Bänninger has just added a new fitting to their quality range of products.
								</p>
								<a class="read-more page-branding text-brand" href="#">Read More<i class="icon-arrow-right"></i></a>
							</article>

							<article class="article">
								<a href="#"><img src="http://placehold.it/480x200" alt="Trade Sample Mini" /></a>
			    				<small>1 May 2013</small>
			    				<h3>The peace of mind in having the right connections</h3>
			    				<p>
									Conex Bänninger has just added a new fitting to their quality range of products.
								</p>
								<a class="read-more page-branding text-brand" href="#">Read More<i class="icon-arrow-right"></i></a>
							</article>	
						</div>
					</aside>
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