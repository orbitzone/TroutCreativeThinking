
	<?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>

	<?php 
		$cssScriptPaths = [
			"/assets/css/reece-trade-outlet.css",
			"/assets/js/me/mediaelementplayer.css",
			"/assets/css/reece-my-account.css",
			"/assets/css/reece-plumbing.css"
		]; 
	   	include_once($serverBase."/includes/head/head-generic.php");
	?>	


	<style>
		.video-container {
		  position: relative;
		  padding-bottom: 56.25%;
		  padding-top: 30px;
		  height: 0;
		  overflow: hidden;
		}
		.video-container iframe,
		.video-container object,
		.video-container embed {
		  position: absolute;
		  top: 0;
		  left: 0;
		  width: 100%;
		  height: 100%;
		}
	</style>	

    <body class="no-touch bathroom-moments account-details-summary">
		<div class="ocmain-wrapper">

<!-- 			<?php
				$genericNavActiveMenuItem = "Plumbing";
			   	include_once($serverBase."/includes/nav/nav-generic.php");
			?>

			<?php
			   	include_once($serverBase."/includes/nav/nav-subnavbar.php");
			?> -->

	    <div class="content-container" style="margin-top:0px;">



			<div class="inner-wrapper">

<img class="StandAloneLogo" src="../../assets/images/MyAccount/reece-shiny-logo.png" alt="">

			    <div class="active item">
				    <article class="article-summary-main row-fluid">
				    	<div class="span8 watchLink">
							<div id="videoframe" >
								<video  style="width:100%; height:100%; border: none;  background-color:#FFFFFF;" width="100%" height="100%" bgcolor="#FFFFFF" poster="../../assets/images/MyAccount/poster.jpg" >
									<source type="video/mp4" src="../../assets/video/MyAccount/my_account_tip_one.mp4" />
								</video>
							</div>
							<br />

							<p>This new My Account feature will save you time and money every day. And it&rsquo;s really easy to use. Just look for the big green order button next to each Reece Quote.</p>


							<!-- 
							<div class="video-container">
								<iframe width="560" height="315" src="//www.youtube-nocookie.com/embed/Mn-hl4ZBjdw?rel=0" frameborder="0" allowfullscreen></iframe>
							</div> 
							-->



				    	</div>
				    	<div class="span4 MyAccountSide">
	    					<h3 class="myAccountHeader">My Account. <span>Making it easier for you to do business.</span></h3>
	    					
	    					
	    					<p>
								Developed exclusively for Reece account customers this innovative management system gives you access to product pricing, allows you to build product lists, manage your account, generate customer quotes and even order online.
							</p>

							<a class="btn btn-large" href="https://www.reece.com.au/cc/login.do">Log in to My Account <i class="icon-arrow-right"></i></a>
							<br /><br />
							<a class="btn btn-large" href="https://www.reece.com.au/cc/login.do">Learn more about My Account <i class="icon-arrow-right"></i></a>
							

							
						</div>

					</article>
			    </div>


	    




			</div>
	    </div>	


<!-- 	    <?php 
			include_once($serverBase."/includes/foot/foot-generic.php");
		?>	 -->

	</div>

<!--    	<?php
   		$mobileNavActiveMenu = array(
   			"activeMenu" => "Plumbing"
   		);
	   	include_once($serverBase."/includes/nav/nav-mobile.php");
	?>	 -->

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
			"/assets/js/reece-match-height.js",
			"/assets/js/me/mediaelement-and-player.js"
		]; 
	   	include_once($serverBase."/includes/foot/scripts.php");
	?>



 <script type="text/javascript">
if (document.images) {
    img1 = new Image();
    img1.src = "../../assets/images/ThreeDPlanner/end_frame.jpg";
}
</script> 	

<script>
	$('video').mediaelementplayer({features: ['playpause','progress','current','duration','tracks','volume','fullscreen']});
</script>


    </body>
</html>