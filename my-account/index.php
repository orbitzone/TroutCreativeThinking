
<?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>

<?php
$cssScriptPaths = [
"/assets/css/reece-trade-outlet.css",
"/assets/css/reece-nav-updated.css",
"/assets/css/reece-home.css",
"/assets/css/reece-plumbing.css",
"/assets/css/reece-my-account.css"
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
					<li class="active page-branding text-brand">My Account</li>
				</ul>
				<div class="row-fluid myAccountHero">
					<div class="span3">
						<div class="myAccountHeroLeft">
							<img src="/assets/images/my-account/guy-on-computer.png" alt="Guy on computer">
							<a href="#" class="greenBtn">Register Now</a>
							<a href="#" class="learnMore">Learn More</a>
						</div>
					</div>
					<div class="span4">
						<div class="myAccountHeroLeft">
							<h3>My <br/>Account.</h3>
							<h4>Works for <br/>you 24/7.</h4>
							<p>Developed exclusively for Reece account customers, My Account is an innovative management system gives you access to product pricing, allows you to build product lists, manage your account, generate customer quotes and even order online.</p>
						</div>
					</div>
					<div class="span5">
						<a class="vidThumbLink" href="#">
							<img src="/assets/images/my-account/tip1.jpg" alt="Tip1">
							<span class="playIcon"></span>
						</a>
					</div>

				</div>

			</div>
		</div>
		<div class="myAccountMegaFooter">
			<div class="content-container">
				<div class="inner-wrapper">
					<div class="row-fluid">
						<div class="span9">
							<h3>Discover a better way to do business</h3>
							<p>Find out how My Account can be a real asset to your business. And if you want to find out more about any particular feature simply click on any of the box to the right and you'll understand why this is a business tool you don't want to be without.</p>
						</div>
						<div class="span2 offset1">
							<a href="#" class='greenBtn'>Register Now</a>
						</div>
					</div>
					<div class="row-fluid myAccountTabs">
						<div class=""
					</div>
				</div>
			</div>
		</div>
		<!-- END CONTENT -->
		<?php
		include_once($serverBase."/includes/foot/foot-generic.php");
		?>

	</div>

<?php
$mobileNavActiveMenu = array(
	"activeMenu" => "Login"
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

		$('.playVideo').click(addVideo);

		$('#youtubeWrapper').on('hidden', function(){
			isPlayerHidden = true;
		})
		$('#youtubeWrapper').on('shown', function(){
			isPlayerHidden = false;
		})
	});

	var player;

	function addVideo(e){
		e.preventDefault();

		videoId = $(this).attr('data-video-id');
		if (isPlayerHidden){
			$('#youtubeWrapper').collapse('show');
		}
		$('html,body').animate({
			scrollTop: $('#youtubeWrapper').offset().top
		}, 200);
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
					height: '540',
					width: '900',
					videoId: videoId
				});
			}
			else{
				loadVideoById({'videoId': videoId });
			}

		}
</script>
</body>
</html>