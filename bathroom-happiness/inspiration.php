	<?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>
	<?php 
	  	$cssScriptPaths = array(
	  		"//cloud.typography.com/6958312/7494952/css/fonts.css",
	  		"/assets/css/reece-products.css",
	  		"css/reece-bathrooms.css",
	  		"css/reece-global.css",
	  		"css/style.css",
	  		"/assets/css/smoothness/jquery-ui-1.10.4.custom.min.css"
	  	); 
	  	include_once($serverBase."/includes/head/head-generic.php");
	?>
  <body class="inspiration">
    <div class="ocmain-wrapper">
      <div class="navbar navbar-fixed-top topNav">
      <?php
					$genericNavActiveMenuItem = "Bathrooms";
				   	include_once($serverBase."/includes/nav/nav-generic.php");
				?>
				</div>
				<?php include_once($serverBase."/includes/nav/nav-happiness.php"); ?>
      <div class="main" role="main">
      <section id="powder-room-header">
      	<div class="container-fluid">
      		<div class="row">
      			<div class="col-xs-12">
      				<div class="subscribe-wrapper">
      					<h2 class="prLogoLarge">
									<a href="#powder-room">
										<image xlink:href="/assets/images/hz-inspiration/powder-room-logo.svg" src="/assets/images/hz-inspiration/header-logo.png" width="220" height="220"/>									
									</a>
								</h2>
	      				<div class="subscribe-content">
	      				<div class="row">
	      					<div class="col-sm-4">
	      						<div class="text">The latest trends brought to you by Reece.</div>
	      					</div>
	      					<div class="col-sm-8">
	      						<div class="subscribe-box">
				      				<h3>Subscribe for weekly updates</h3>
				      				<form action="/">
				      					<input type="text" name="name" placeholder="Name"/>
				      					<input type="email" name="email" placeholder="Email"/>
				      					<button type="submit"><i class="fa fa-arrow-right"></i></button>
				      				</form>
				      			</div> 
	      					</div>
	      				</div>     				
	      				</div> 
      				</div>     				
      			</div>
      		</div>      		
      	</div>
      </section>
	      <section class="inspWall">
					<header class="inspWallHeader">
						<div class=" content-container">
							<div class="inner-wrapper clearfix">
								<div class="prLogoWrap">
									<span class="prLogoCaption">The Powder room</span>
								</div>

								<div class="inspWallFilter">

									<a href="#filterFormWrap" data-toggle="collapse">Filter by <i class="icon-star"></i><i class="icon-star-empty"></i></a>
									<div id="filterFormWrap" class="collapse">

									<form id="inspWallFilterForm">
										<ul>
											<li><label class="filterCheckboxLabel"><input type="checkbox" class="inspWallFilterInput" name="inspWallFilter" value="trends" />Trends</label></li>
											<li><label class="filterCheckboxLabel"><input type="checkbox" class="inspWallFilterInput" name="inspWallFilter" value="planning" />Planning</label></li>
											<li><label class="filterCheckboxLabel"><input type="checkbox" class="inspWallFilterInput" name="inspWallFilter" value="productNews" />Product News</label></li>
											<li><label class="filterCheckboxLabel"><input type="checkbox" class="inspWallFilterInput" name="inspWallFilter" value="designers" />Designers</label></li>
											<li><label class="filterCheckboxLabel"><input type="checkbox" class="inspWallFilterInput" name="inspWallFilter" value="waterSavings" />Water Saving</label></li>
											<li><label class="filterCheckboxLabel"><input type="checkbox" class="inspWallFilterInput" name="inspWallFilter" value="events" />Events</label></li>
											<li><label class="filterCheckboxLabel"><input type="checkbox" class="inspWallFilterInput" name="inspWallFilter" value="theBlock" />The Block</label></li>
											
											<!--<li class="filterDateLabels">
												<label class="filterDateLabel">
													<span>From</span>
													<span class="inspWallFilterDateWrap">
														<input type="date" class="inspWallFilterInput inspWallFilterDate" placeholder="mm/dd/yyyy" id="inspWallFilterFrom">
														<i class="icon-calendar"></i>
													</span>
												</label>
												<label class="filterDateLabel">
													<span>To</span>
													<span class="inspWallFilterDateWrap">
														<input type="date" class="inspWallFilterInput inspWallFilterDate" placeholder="mm/dd/yyyy" id="inspWallFilterTo">
														<i class="icon-calendar"></i>
													</span>
												</label>
											</li>-->
										</ul>
										<div class="inspWallFilterAction">
											<button type="reset" id="inspWallClearFilter">Clear</button>
											<button class="inspWallFilterActionPrimary">Apply</button>
										</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</header>
					<div class="inspWallwrapper">
						<div class=" content-container">
							<div class="inner-wrapper" id="wallContent">
								<div class="socialWallPanel caretRight landscapePanel">
	  <div class="row">
	    <div class="col-sm-8">
	      <div class="coloredPanelThumb">
	        <img src="/assets/images/hz-inspiration/kartell-blog.jpg" alt="placeholder">
	      </div>
	    </div>
	    <div class="col-sm-4">
	      <div class="inspSocialBlockContent">
	        <span class="inspSocialBlockSource pull-left">Via <span class="inspSocialBlockSourceName">powder room</span></span>
	        <span class="inspSocialBlockSource pull-right">1 h ago</span>
	        <a href="#kartell-by-laufen-australia-shores" class="socialIcon prIcon overlayLink">
	          <svg>
	            <image xlink:href="/assets/images/hz-inspiration/pen.svg" src="/assets/images/hz-inspiration/pen.png" width="50" height="50"/>
	          </svg>
	        </a>
	        <h3>Kartell by Laufen hits Australian
	shores</h3>
	        <p class="inspSocialBlockDesc">Tuesday 12 November marked the
	Kartell by Laufen pre-launch in
	Australia. The Australian
	architectural and design community
	turned out for what was a truly
	spectacular series of events.</p>
	        <a href="#kartell-by-laufen-australia-shores" class="overlayLink">read more</a>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="socialWallPanel caretLeft panelAlt landscapePanel">
	  <div class="row">
	    <div class="col-sm-8 col-sm-push-4">
	      <div class="coloredPanelThumb">
	        <img src="/assets/images/hz-inspiration/blog1.jpg" alt="placeholder">
	      </div>
	    </div>
	    <div class="col-sm-4 col-sm-pull-8">
	      <div class="inspSocialBlockContent">
	        <span class="inspSocialBlockSource pull-left">Via <span class="inspSocialBlockSourceName">Reece blog</span></span>
	        <span class="inspSocialBlockSource pull-right">Jan 15 2014</span>
	        <a  href="#dummy-blog" class="socialIcon prIcon a">
	          <svg>
	            <image xlink:href="/assets/images/hz-inspiration/pen.svg" src="/assets/images/hz-inspiration/pen.png" width="50" height="50"/>
	          </svg>
	        </a>
	        <h3>Dummy Blog</h3>
	        <p class="inspSocialBlockDesc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in neque sed tortor vehicula feugiat id eget elit. Proin semper tempor nunc sed vehicula. Nullam ut eros neque. </p>
	        <a href="#dummy-blog" class="overlayLink">read more</a>
	      </div>
	    </div>
	  </div>
	</div>
							</div>
							<div class="inner-wrapper inspBlogWrap" id="overlayContent" style="display:none">
								<a class="closeBlog" id="closeBlog"><i class="icon-remove"></i></a>
								<div id="socialOverlay"></div>
								<iframe id="inspBlogArticle" style="display:none" width="100%"  scrolling="no" frameborder="0"></iframe>
								<div class="inspBlogCommentWrap" id="disqus_thread"></div>
								<script type="text/javascript">
									/* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
									var disqus_shortname = 'reecetest'; // Required - Replace example with your forum shortname
									//var disqus_identifier = 'a unique identifier for each page where Disqus is present';
									//var disqus_title = 'a unique title for each page where Disqus is present';
									//var disqus_url = 'a unique URL for each page where Disqus is present';

									/* * * DON'T EDIT BELOW THIS LINE * * */
									(function() {
										var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
										dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
										(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
									})();
								</script>
								<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
								<a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
							</div>
						</div>
					</div>
					<div id="inspWallLoad">
						<a href="#" id="inspWallLoadLink">
							Show More <i class="icon-chevron-down"></i>
						</a>
						<span id="inspWallLoaderIcon"></span>
					</div>
				</section>
			</div>
      <!-- end .main -->
     <?php 
			   	include_once($serverBase."/includes/foot/foot-generic.php");
			?>
    </div>
    <?php
	   		$mobileNavActiveMenu = array(
	   			"activeMenu" => "Bathrooms",
	   			"activeMenuItem" => "Bathroom Moments"
	   		);
		   	include_once($serverBase."/includes/nav/nav-mobile.php");
		?>	

		<?php 
		  	$jsScriptPaths = array(
		  		"/assets/js/jquery.mobile.custom.min.js",
		  		"/assets/js/bootstrap-transition.js", 
		  		"/assets/js/bootstrap-carousel.js",
		  		"/assets/js/bootstrap-collapse.js",
		  		"/assets/js/bootstrap-tab.js",
		  		"/assets/js/bootstrap-dropdown.js",
                "/assets/js/reece-signon.js",
		  		"/assets/js/reece-ocnav.js",
		  		"/assets/js/reece-carousel.js",
		  		"/assets/js/jquery-ui-1.10.4.custom.min.js",
		  		"/assets/js/reece-inspiration.js"
		  	); 
		  	include_once($serverBase."/includes/foot/scripts.php");
		?>
  </body>
</html>