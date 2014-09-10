
	<?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>

	<?php 
		$cssScriptPaths = [
			"/assets/css/reece-products.css",
			"/assets/css/reece-bathrooms.css",
			"/assets/css/reece-spring2014.css"			
		]; 
	   	include_once($serverBase."/includes/head/head-generic.php");
	?>		

    <body class="3 withHappinessSubNav">
		<div class="ocmain-wrapper">
  <div class="navbar navbar-fixed-top topNav">
    <?php
					$genericNavActiveMenuItem = "Bathrooms";
				   	include_once($serverBase."/includes/nav/nav-generic.php");
				?>
  </div>
    <?php include_once($serverBase."/includes/nav/nav-happiness.php"); ?>
		    <div class="content-container">
				<div class="inner-wrapper">





				    	
			    	<section class="spring-header container">
			    		<div class="row-fluid">
					    	<div class="span12">
					    		

					    		<div class="header-wrap">

					    			<div class="header-image">
					    				<img src="/assets/images/spring2014/main-banner.jpg" />	
					    			</div>
					    			<div class="header-text">
					    				<h1>The Spring Bathroom</h1>
					    				<div class="launch-button"><a href="http://mag.reece.com.au/spring">
					    					<span class="launch">Launch</span>
					    					<span class="lookbook">Digital lookbook</span>
					    				</a></div>

					    			</div>

					    		</div>

					    	</div>
					    </div>

					</section>			





			    	<section class="spring-subscribe container">
					    <div class="row-fluid">
					    	<div class="span12">
					    		<form id="subscribe-box">
					    			<div class="subscribe-wrap">
						    			<label>Subscribe for updates</label>

						    			<input class="h-name" type="text" name="name" placeholder="Name">

						    			<input  class="h-email" type="email" name="email" placeholder="Email">

						    			<input  class="h-postcode" type="text" name="postcode" placeholder="Postcode">

						    			<input  class="h-submit" type="submit" name="submit">
						    			<div class="clear"></div>
						    		</div>


					    		</form>	
					    		<div class="clear"></div>			    		
					    	</div>
					    </div>
					</section>	







			    	<section class="spring-intro container">
			    		<section class="row-fluid title">
					    	<div class="span10 offset1">
								<h2>Renovate. Refresh. Rejoice.</h2>
					    	</div>
					    </section>
					    
					    <section class="row-fluid intro">
					    	<div class="span10 offset1">
					    		<p>There is no better time to begin creating your new bathroom than in Spring. To help you along the journey to new bathroom happiness, we&rsquo;ve put together a collection of tips and inspiration.</p>
					    	</div>
					    </section>
					</section>	


			    	<section class="spring-items image-left container">
					    <section class="row-fluid">
					    	<div class="span10 offset1">

					    		<div class="image-box">
									<img src="/assets/images/spring2014/item1.jpg" alt="[The 7 steps to bathroom happiness]" />
					    		</div>
						    	<div class="text-box"><div class="text-wrap">
						    		<h3>The 7 steps to bathroom happiness</h3>
						    			<p>There is no better time to begin creating your new bathroom than in Spring. To help you along the journey to new bathroom happiness, we&rsquo;ve put together a collection of tips and inspiration.</p>
						    			<a href="http://mag.reece.com.au/spring/3" class="box-link1">Learn more</a>
						    	</div></div>
						    	<div class="clear"></div>
					    	</div>
					    </section>
					</section>	

			    	<section class="spring-items image-right container">
					    <section class="row-fluid">
					    	<div class="span10 offset1">

					    		<div class="image-box">
									<img src="/assets/images/spring2014/item2.jpg" alt="[Latest Trends]" />
					    		</div>
						    	<div class="text-box"><div class="text-wrap">
						    		<h3>Latest Trends</h3>
					    			<p>Economy of colour &amp; clean lines help minimise to create clarity and space.</p>
					    			<a href="http://mag.reece.com.au/spring/4" class="box-link2">Explore</a>
						    	</div></div>
						    	<div class="clear"></div>
					    	</div>
					    </section>
					</section>	

			    	<section class="spring-items image-left container">
					    <section class="row-fluid">
					    	<div class="span10 offset1">

					    		<div class="image-box">
									<img src="/assets/images/spring2014/item3.jpg" alt="Mini Makeover" />
					    		</div>
						    	<div class="text-box"><div class="text-wrap">
									<h3>Mini Makeover</h3>
					    			<p>This Spring, you can create a new look and feel for your bathroom without a major renovation. Our design experts show you how with these clever mini makeovers.</p>
					    			<a href="http://mag.reece.com.au/spring/8" class="box-link3">Refresh</a>
						    	</div></div>
						    	<div class="clear"></div>
					    	</div>
					    </section>
					</section>	

			    	<section class="spring-items image-right container">
					    <section class="row-fluid">
					    	<div class="span10 offset1">

					    		<div class="image-box">
									<img src="/assets/images/spring2014/item4.jpg" alt="[Easy updates]" />
					    		</div>
						    	<div class="text-box"><div class="text-wrap">
						    		<h3>Easy updates</h3>
					    			<p>Our collection of hand picked must-have products can inject new life in your bathroom this Spring. A little change can make a big impact. </p>
					    			<a href="http://mag.reece.com.au/spring/7" class="box-link4">Refresh</a>
						    	</div></div>
						    	<div class="clear"></div>
					    	</div>
					    </section>
					</section>	








				    	


				</div>
		    </div>

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
			$jsScriptPaths = [
				"/assets/js/jquery.mobile.custom.min.js",
				"/assets/js/bootstrap-transition.js", 
				"/assets/js/bootstrap-carousel.js",
				"/assets/js/bootstrap-collapse.js",
				"/assets/js/bootstrap-dropdown.js",
				"/assets/js/reece-ocnav.js",
				"/assets/js/reece-carousel.js",
				"/assets/js/bootstrap-modal.js"
			]; 
		   	include_once($serverBase."/includes/foot/scripts.php");
		?>			




 

		<div id="spring-modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="top-section">


		    

		    <div class="main-modal-image">

			
		    <div class="popup-image"><img src="/assets/images/spring2014/popup-main.jpg" /></div>

		    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><img class="close-image" src="/assets/images/spring2014/close-button.jpg" /></button>

		    </div>



		  </div>
		  <div class="middle-section">
		    <h2>The Spring Bathroom</h2>
		    <p>
			Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Nullam quis risus eget urna mollis ornare vel eu leo. Nullam quis risus eget urna mollis ornare vel eu leo.
		    </p>
		  </div>
		  <div class="bottom-section">
			<form>
    			

    			<input class="m-name" type="text" name="name" placeholder="Name">

    			<input class="m-email" type="email" name="email" placeholder="Email">

    			<input class="m-postcode" type="text" name="postcode" placeholder="Postcode"><br />

    			<input class="m-submit" type="submit" name="submit">


    		</form>	
		  </div>
		</div>

		<script type="text/javascript">
			$(window).load(function(){
		        $('#spring-modal').modal('show');
		    });
		</script>


    </body>
</html>