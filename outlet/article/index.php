
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

				<div class="article-banner-outlet row-fluid">
					<img class="banner-logo pull-left" src="/assets/images/outlet_2013/outlet-banner-logo.png" alt="Outlet">
					<div class="banner-branding-block page-branding box-brand pull-right">
						<h3 class="banner-branding-title">Plumbing</h3>
					</div>
				</div>		

				<ul class="breadcrumb">
					<li class="active page-branding text-brand">Latest News</li>
				</ul>

				<div class="row-fluid">
				    <article class="article-main span9">
				    	<img src="/assets/images/trade_2013/trade_article_sample.jpg" alt="Trade sample" />
				    	<div class="row-fluid">
				    		<div class="span9">
						    	<h2 class="article-title">Reece Tool Catalogue</h2>
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

								<li>
									<div class="btn-group btn-block">
									    <a class="btn btn-large btn-block" data-toggle="dropdown" href="/bathrooms/happy-tips/avoid-the-headbutt#">
									        <i class="icon-share-alt"></i> Share
									        <span class="caret"></span>
									    </a>
	
									    <ul class="dropdown-menu">
									        <li><a href="http://www.facebook.com/share.php?u=http://www.reece.com.au/bathrooms/happy-tips/avoid-the-headbutt" onclick="return fbs_click()" title="Facebook" rel="nofollow"><i class="icon-facebook icon-large"></i> Facebook</a></li>
									        <li><a href="https://twitter.com/intent/tweet?url=http://www.reece.com.au/bathrooms/happy-tips/avoid-the-headbutt" title="Twitter" data-count="none"><i class="icon-twitter icon-large"></i> Twitter</a></li>
									        <li><a href="/bathrooms/happy-tips/avoid-the-headbutt#" class="pinterest"><i class="icon-pinterest icon-large"></i> Pinterest</a></li>
									    </ul>    
									</div>
								</li>

								<li><a href="#" class="label">Plumbing</a><a href="#" class="label">Catalogue</a><a href="#" class="label">Tool</a><a href="#" class="label">Media</a><a href="#" class="label">Tag Six</a><a href="#" class="label">Tag Five</a></li>
							</ul>
						</div>

						<div class="fb-comments" data-href="http://reece-responsive.trout.com.au/outlet/article"></div>

					</article>

		    		<aside class="recent-stories span3">

						<div class="article-summary-secondary article-sidebar">

							<h3 class="article-topic-heading">Recommended Stories</h3>

							<article class="article">
								<a class="article-image" href="#"><img src="http://placehold.it/480x250" alt="Trade Sample Mini"></a>
			    				<div class="article-body">
				    				<small class="page-branding text-brand">1 June 2013</small>
				    				<h3>The peace of mind in having the right connections</h3>

									<a class="read-more page-branding text-brand" href="#">Read More<i class="icon-arrow-right"></i></a>
								</div>
							</article>

							<article class="article"> 
								<a class="article-image" href="#"><img src="http://placehold.it/480x250" alt="Trade Sample Mini"></a>
			    				<div class="article-body">
				    				<small class="page-branding text-brand">1 July 2013</small>
				    				<h3>Rothenberger World Series Competition</h3>
									<a class="read-more page-branding text-brand" href="#">Read More<i class="icon-arrow-right"></i></a>
								</div>
							</article>

							<article class="article">
								<a class="article-image" href="#"><img src="http://placehold.it/480x250" alt="Trade Sample Mini"></a>
			    				<div class="article-body">
				    				<small class="page-branding text-brand">11 September 2013</small>
				    				<h3>Where did my warranty go?</h3>
									<a class="read-more page-branding text-brand" href="#">Read More<i class="icon-arrow-right"></i></a>
								</div>
							</article>

							<article class="article">
								<a class="article-image" href="#"><img src="http://placehold.it/480x250" alt="Trade Sample Mini"></a>
			    				<div class="article-body">
				    				<small class="page-branding text-brand">1 June 2013</small>
				    				<h3>The peace of mind in having the right connections</h3>
									<a class="read-more page-branding text-brand" href="#">Read More<i class="icon-arrow-right"></i></a>
								</div>
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