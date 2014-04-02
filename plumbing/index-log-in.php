
<?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>

<?php
$cssScriptPaths = [
"/assets/css/reece-trade-outlet.css",
"/assets/css/reece-nav-updated.css",
"/assets/css/reece-home.css",
"/assets/css/reece-plumbing.css"
];
include_once($serverBase."/includes/head/head-generic.php");
?>

<body class="withSubNav">
	<div class="ocmain-wrapper">
		<div class="navbar navbar-fixed-top topNav">
			<?php
			$genericNavActiveMenuItem = "Contact Us";
			include_once($serverBase."/includes/nav/nav-generic.php");
			?>
		</div>
		<?php
		include_once($serverBase."/includes/nav/nav-about-us.php");
		?>
		<div class="content-container">
			<div class="inner-wrapper">
				<ul class="breadcrumb">
					<li><a href="#">My Account</a>  <span class="divider">/</span></li>
					<li class="active page-branding text-brand">Login</li>
				</ul>

				<div class="myAccountLoginWrap">
					<div class="myAccountLoginWrapHeader">
					<div class="row-fluid">
					</div>
						<h2>Discover a better way of doing business</h2>
						<p>
							Developed exclusively for Reece account customers this innovative management system gives you access to product pricing, allows you to build product lists, manage your account, generate customer quotes and even order online.<br /><br />
						</p>
					</div>
					<div class="row-fluid myAccountLoginWrapGray">
						<div class="span4">
								<form id="registerForm">
								<h3>Register for My Account</h3>
									<div class="controls">
										<input type ="text" id="reeceAccount" placeholder="Account Number"> <span href="#" id="accountNumberHelp" class="accountNumberHelp" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="Popover on right">?</span>
										<input type="email" id="inputEmail" placeholder="Email">
											<div class="collapse" id="registerFormCollapsed">
												<input type="text" id="inputName" placeholder="Name">
												<input type="text" id="username" placeholder="Username">
												<input type="text" id="inputPhone" placeholder="Phone">
												<input type="text" id="inputPassword" placeholder="Business Postcode">
											</div>
											<button type="submit" class="loginBtn">Register</button>
									</div>
								</form>
						</div><!-- /.span4 -->
						<div class="span4">
						<h4>Apply for a Reece Trade account</h4>
						<ul class="unstyled" id="applySteps">
							<li>
								<p>You need to be a Reece account customer to use “My Account”. Download an application.</p>
								<a href="#">Download Application <span class="arrowIcon">&rsaquo;</span></a>
							</li>
							<li>
								<p>If you have filled out the application, scan it and upload it or take it to your nearest Reece branch.</p>
								<a href="#">Upload Application <span class="arrowIcon">&rsaquo;</span></a>
							</li>
						</ul>
						</div><!-- /.span4 -->
						<div class="span4">
						<form class="loginBlueForm">
						<h4>Login</h4>
							<div class="controls">
								<input type="text" id="inputEmail" placeholder="Username">
								<input type="password" id="inputPassword" placeholder="Password">
								<div class="actions">
								<button type="submit" class="loginBtn">Login</button>
								</div>
							</div>
						</form>
						</div><!-- /.span4 -->
					</div><!-- /.myAccountLoginWrapGray -->
					<div class="myAccountLoginFooter">
						<h3>How My Account works for your business</h3>
						<div id="youtubeWrapper" class="youtubeWrapper collapse1">
							<div id="registerYoutubePlayer">
							</div>
						</div>
						<div class="row-fluid">
							<div class="span3">
								<p>This overview will give you the general idea of how My Account can be a real asset to your business. And if you want to find out more about any particular feature simple click on any of the box to the right and you’ll understand why this is a business tool you don’t want to be without.</p>
							</div>
							<div class="span3">
								<figure>
								<a class="playVideo" href="#" data-video-id="Xxmz6u2r8v4">
									<img src="../assets/images/MyAccount/my-account.jpg" />
									<figcaption>
										Overview of My Account
									</figcaption>
								</a>
								</figure>
							</div>
							<div class="span3">
								<figure>
								<a class="playVideo" href="#" data-video-id="M7lc1UVf-VE">
									<img src="../assets/images/MyAccount/order.jpg" />
									<figcaption>
										Online Ordering
									</figcaption>
								</a>
								</figure>
							</div>
							<div class="span3">
								<figure>
								<a class="playVideo" href="#" data-video-id="Xxmz6u2r8v4">
									<img src="../assets/images/MyAccount/clickandcollect.jpg" />
									<figcaption>
										Click and Collect
									</figcaption>
									</a>
								</figure>
							</div>

						</div>
					</div>
				</div><!-- /.myAccountLoginWrap -->
<!--
				<div class="loginColumn">
<section class="flipContainer">
  <div id="card">
					<h2>Login to a better way of doing business</h2>

  </div>
</section>

					<article class="article-summary-main row-fluid">
					<div class="span9 loginBox grey hideForm">
					<h3>My Account</h3>
						<div class="row-fluid">
							<div class="span5">
								<form>
									<div class="controls">
										
										<div class="row-fluid">
											<div class="span3"><img src="../assets/images/MyAccount/man-register.png" />
											</div>
											<div class="span8 offset1"><p>Existing Reece account customers fill in your details for access to “My Account”.</p>
												<div class="formUp"><input type="text" id="inputName" placeholder="Name">
													<input type="text" id="inputPhone" placeholder="Phone">
													<input type="email" id="inputEmail" placeholder="Email">
													<input type="text" id="inputPassword" placeholder="Business Postcode">
													<button type="submit" class="btn">Register
													</button>
												</div>
											</div>
										</div>
									</div>
								</form>
								</div>
							<div class="span7">
							<h4>Apply for a Reece Account</h4>
								<div class="row-fluid">
									<div class="span6">
									<p>You need to be a Reece account customer to use “My Account”. Download an application.</p>
									<br/><br/>
									<button type="submit" class="btn">Download Application</button>
									</div>
									<div class="span6">
									<p>If you have filled out the application, scan it and upload it or take it to your nearest Reece branch.</p><br/>
									<button type="submit" class="btn">Upload Application</button>
									</div>
								</div>
							</div>
						</div>

					</div>
					<div class="span3 loginBox blue">
						<form>
							<div class="controls">
								<h4>Login to My Account</h4>
								<input type="text" id="inputEmail" placeholder="Username">
								<input type="password" id="inputPassword" placeholder="Password">
								<button type="submit" class="btn">Login</button>
								<a class="forgotten" href="#">Forgot username/password?</a><br />
							</div>
						</form>
					</div>
				</article> 
			</div>
			<div class="loginColumn">
			<h3>How My Account works for your business</h3>
			
			<br/>
				<article class=" row-fluid">
					<div class="span6">
						<div class="controls">
							<div class="flex-video widescreen"><iframe src="//www.youtube.com/embed/Xxmz6u2r8v4?rel=0&wmode=transparent&showinfo=0&modestbranding=1&controls=2" frameborder="0" allowfullscreen></iframe></div>
							<p>This overview will give you the general idea of how My Account can be a real asset to your business. And if you want to find out more about any particular feature simple click on any of the box to the right and you’ll understand why this is a business tool you don’t want to be without.</p>

						</div>
					</div>
					<div class="span3"><img src="../assets/images/MyAccount/order.jpg" /><p>Some text about the tip</p></div>
					<div class="span3"><img src="../assets/images/MyAccount/clickandcollect.jpg" /><p>Some text about the tip</p></div>

				</article>
			</div>-->




			<!-- END CONTENT -->

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
"/assets/js/bootstrap-tooltip.js",
"/assets/js/bootstrap-popover.js",
"/assets/js/reece-signon.js",
"/assets/js/jquery.mobile.custom.min.js",
"/assets/js/reece-ocnav.js",
"/assets/js/reece-carousel.js",
"/assets/js/reece-hidesubnavbar.js",
"/assets/js/reece-match-height.js"
];
include_once($serverBase."/includes/foot/scripts.php");
?>
<script>
	var videoId = 'Xxmz6u2r8v4';
	var isPlayerHidden = true;
	jQuery(function(){
		var isregisterFormShown;
		$('#registerForm input').focus(function(){
			if(!isregisterFormShown){
				$('#registerFormCollapsed').collapse('show');
				isregisterFormShown = true;
			}
		});
		$('#registerForm input').blur(function(){
			window.setTimeout( function(){
			if ($('#registerForm input:focus:visible')){
				console.log('still in focus');
			}
			else{
				console.log('blurred');
			} }, 1000 );
		});

		$('#registerFormCollapsed').on('shown', function () {
			isregisterFormShown = true;
		});

		$('.playVideo').click(addVideo);

		$('#youtubeWrapper').on('hidden', function(){
			isPlayerHidden = true;
		})
		$('#youtubeWrapper').on('shown', function(){
			isPlayerHidden = false;
		})

		$('#accountNumberHelp').popover().click(function(e){
			e.stopPropagation();
		});
		$(document).click(function(){
			$('#accountNumberHelp').popover('hide');
		});
	});

	var player;

	function addVideo(e){
		e.preventDefault();

		videoId = $(this).attr('data-video-id');
		if (isPlayerHidden){
			$('#youtubeWrapper').collapse('show');
		}
		// 2. This code loads the IFrame Player API code asynchronously.
		var tag = document.createElement('script');

		tag.src = "https://www.youtube.com/iframe_api";

		var firstScriptTag = document.getElementsByTagName('script')[0];
		firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
		if(player) {player.loadVideoById({'videoId': videoId });}
	}
		// 3. This function creates an <iframe> (and YouTube player)
		//    after the API code downloads.
		function onYouTubeIframeAPIReady() {
			if (typeof player === 'undefined') {
				player = new YT.Player('registerYoutubePlayer', {
					height: '390',
					width: '640',
					videoId: videoId,
					events: {
						'onReady': onPlayerReady,
						'onStateChange': onPlayerStateChange
					}
				});
			}
			else{
				loadVideoById({'videoId': videoId });
			}

		}

		// 4. The API will call this function when the video player is ready.
		function onPlayerReady(event) {
		  event.target.playVideo();
		}

		// 5. The API calls this function when the player's state changes.
		//    The function indicates that when playing a video (state=1),
		//    the player should play for six seconds and then stop.
		var done = false;
		function onPlayerStateChange(event) {
			/*
		  if (event.data == YT.PlayerState.PLAYING && !done) {
		    setTimeout(stopVideo, 6000);
		    done = true;
		  }*/
		}
		function stopVideo() {
		  player.stopVideo();
		}
</script>
</body>
</html>