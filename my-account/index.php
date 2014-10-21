
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
							<a href="#" class="learnMore scrollToLink" data-target="#myAccountMegaFooter">Learn More</a>
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
						<a class="vidThumbLink playVideo" href="#" data-video-id="Xxmz6u2r8v4" data-videoTitle="My Account">
							<img src="/assets/images/my-account/my-account-video-poster.jpg" alt="Tip1">
							<span class="playIcon"></span>
						</a>
					</div>
				</div>

			</div>
		</div>
		<div id="myAccountMegaFooter" class="myAccountMegaFooter">
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
					<ul class="myAccountTabs">
						<li>
							<a class="greenTab active" href="#tabContentWhyMyAccount">
								<span class="tabHeading">Why My account</span>
								<span class="tabInfo"></span>
							</a>
						</li>
						<li>
							<a class="greenTab" href="#tabContentMyTips">
								<span class="tabHeading">My Tips</span>
								<span class="tabInfo">This collection of videos will help you get the most out My Account and its features</span>
							</a>
						</li>
						<li>
							<a class="greenTab" href="#tabContentDownloads">
								<span class="tabHeading">Downloads</span>
								<span class="tabInfo">Download the handy My Account User Guide that covers the whole system</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<ul id="myAccountTabContentWrap">
				<li id="tabContentWhyMyAccount" class="myAccountTabContent active">
					<div id="whyMyAccountAccordion">
						<div class="accordion-group">
							<div class="accordionHeader" data-target="#myAccountAccordion1" data-toggle="collapse" data-parent="#whyMyAccountAccordion">
								<div class="content-container">
									<div class="inner-wrapper">
										<span class="accordionIcon iconManageAccount"></span><span class="accordionHdText">Set up &amp; Manage your Account</span>
									</div>
								</div>
							</div>
							<div id="myAccountAccordion1" class="collapse">
								<div class="content-container">
									<div class="inner-wrapper">
										<div class="accordionContent">
											<div class="row-fluid">
												<div class="span6">
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non nisl vitae diam porttitor egestas. Duis eget fringilla sem. Sed quis hendrerit tortor, at congue arcu. Phasellus quis euismod orci, ut interdum ex. Etiam nec lobortis augue.</p>
													<p>Morbi sed est iaculis, finibus lacus et, varius libero. Pellentesque porttitor ligula enim, quis imperdiet nulla condimentum at. Donec interdum pretium posuere. Fusce ultrices lacinia ante sed suscipit. In dignissim placerat pretium. Cras convallis mi in pharetra interdum. Donec ut lacus vitae sapien mattis mollis non ac arcu.</p>
													<ul>
														<li>Morbi sed est iaculis, finibus lacus et, varius libero.</li>
														<li>Pellentesque porttitor ligula enim, quis imperdiet nulla condimentum at.</li>
														<li>Donec interdum pretium posuere. Fusce ultrices lacinia ante sed suscipit.</li>
														<li>In dignissim placerat pretium. Cras convallis mi in pharetra interdum. </li>
													</ul>
												</div>
												<div class="span5 offset1">
													<a class="vidThumbLink playVideo" href="#" data-video-id="Xxmz6u2r8v4" data-videoTitle="My Account">
														<img src="/assets/images/my-account/tip2.jpg" alt="Tip1">
														<span class="playIcon"></span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-group">
							<div class="accordionHeader" data-target="#myAccountAccordion2" data-toggle="collapse"  data-parent="#whyMyAccountAccordion">
								<div class="content-container">
									<div class="inner-wrapper">
										<span class="accordionIcon iconProductPricing"></span><span class="accordionHdText">Products &amp; pricing at your finger tips</span>
									</div>
								</div>
							</div>
							<div id="myAccountAccordion2" class="collapse">
								<div class="content-container">
									<div class="inner-wrapper">
										<div class="accordionContent">
											<div class="row-fluid">
												<div class="span6">
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non nisl vitae diam porttitor egestas. Duis eget fringilla sem. Sed quis hendrerit tortor, at congue arcu. Phasellus quis euismod orci, ut interdum ex. Etiam nec lobortis augue.</p>
													<p>Morbi sed est iaculis, finibus lacus et, varius libero. Pellentesque porttitor ligula enim, quis imperdiet nulla condimentum at. Donec interdum pretium posuere. Fusce ultrices lacinia ante sed suscipit. In dignissim placerat pretium. Cras convallis mi in pharetra interdum. Donec ut lacus vitae sapien mattis mollis non ac arcu.</p>
													<ul>
														<li>Morbi sed est iaculis, finibus lacus et, varius libero.</li>
														<li>Pellentesque porttitor ligula enim, quis imperdiet nulla condimentum at.</li>
														<li>Donec interdum pretium posuere. Fusce ultrices lacinia ante sed suscipit.</li>
														<li>In dignissim placerat pretium. Cras convallis mi in pharetra interdum. </li>
													</ul>
												</div>
												<div class="span5 offset1">
													<a class="vidThumbLink playVideo" href="#" data-video-id="Xxmz6u2r8v4" data-videoTitle="My Account">
														<img src="/assets/images/my-account/tip2.jpg" alt="Tip1">
														<span class="playIcon"></span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-group">
							<div class="accordionHeader" data-target="#myAccountAccordion3" data-toggle="collapse"  data-parent="#whyMyAccountAccordion">
								<div class="content-container">
									<div class="inner-wrapper">
										<span class="accordionIcon iconQuotesOnline"></span><span class="accordionHdText">View Reece quotes online</span>
									</div>
								</div>
							</div>
							<div id="myAccountAccordion3" class="collapse">
								<div class="content-container">
									<div class="inner-wrapper">
										<div class="accordionContent">
											<div class="row-fluid">
												<div class="span6">
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non nisl vitae diam porttitor egestas. Duis eget fringilla sem. Sed quis hendrerit tortor, at congue arcu. Phasellus quis euismod orci, ut interdum ex. Etiam nec lobortis augue.</p>
													<p>Morbi sed est iaculis, finibus lacus et, varius libero. Pellentesque porttitor ligula enim, quis imperdiet nulla condimentum at. Donec interdum pretium posuere. Fusce ultrices lacinia ante sed suscipit. In dignissim placerat pretium. Cras convallis mi in pharetra interdum. Donec ut lacus vitae sapien mattis mollis non ac arcu.</p>
													<ul>
														<li>Morbi sed est iaculis, finibus lacus et, varius libero.</li>
														<li>Pellentesque porttitor ligula enim, quis imperdiet nulla condimentum at.</li>
														<li>Donec interdum pretium posuere. Fusce ultrices lacinia ante sed suscipit.</li>
														<li>In dignissim placerat pretium. Cras convallis mi in pharetra interdum. </li>
													</ul>
												</div>
												<div class="span5 offset1">
													<a class="vidThumbLink playVideo" href="#" data-video-id="Xxmz6u2r8v4" data-videoTitle="My Account">
														<img src="/assets/images/my-account/tip2.jpg" alt="Tip1">
														<span class="playIcon"></span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-group">
							<div class="accordionHeader" data-target="#myAccountAccordion4" data-toggle="collapse"  data-parent="#whyMyAccountAccordion">
								<div class="content-container">
									<div class="inner-wrapper">
										<span class="accordionIcon iconItemisedQuotes"></span><span class="accordionHdText">Create professional itemised quotes</span>
									</div>
								</div>
							</div>
							<div id="myAccountAccordion4" class="collapse">
								<div class="content-container">
									<div class="inner-wrapper">
										<div class="accordionContent">
											<div class="row-fluid">
												<div class="span6">
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non nisl vitae diam porttitor egestas. Duis eget fringilla sem. Sed quis hendrerit tortor, at congue arcu. Phasellus quis euismod orci, ut interdum ex. Etiam nec lobortis augue.</p>
													<p>Morbi sed est iaculis, finibus lacus et, varius libero. Pellentesque porttitor ligula enim, quis imperdiet nulla condimentum at. Donec interdum pretium posuere. Fusce ultrices lacinia ante sed suscipit. In dignissim placerat pretium. Cras convallis mi in pharetra interdum. Donec ut lacus vitae sapien mattis mollis non ac arcu.</p>
													<ul>
														<li>Morbi sed est iaculis, finibus lacus et, varius libero.</li>
														<li>Pellentesque porttitor ligula enim, quis imperdiet nulla condimentum at.</li>
														<li>Donec interdum pretium posuere. Fusce ultrices lacinia ante sed suscipit.</li>
														<li>In dignissim placerat pretium. Cras convallis mi in pharetra interdum. </li>
													</ul>
												</div>
												<div class="span5 offset1">
													<a class="vidThumbLink playVideo" href="#" data-video-id="Xxmz6u2r8v4" data-videoTitle="My Account">
														<img src="/assets/images/my-account/tip2.jpg" alt="Tip1">
														<span class="playIcon"></span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-group">
							<div class="accordionHeader" data-target="#myAccountAccordion5" data-toggle="collapse"  data-parent="#whyMyAccountAccordion">
								<div class="content-container">
									<div class="inner-wrapper">
										<span class="accordionIcon iconQuotesIntoOrders"></span><span class="accordionHdText">Turn quotes into orders online</span>
									</div>
								</div>
							</div>
							<div id="myAccountAccordion5" class="collapse">
								<div class="content-container">
									<div class="inner-wrapper">
										<div class="accordionContent">
											<div class="row-fluid">
												<div class="span6">
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non nisl vitae diam porttitor egestas. Duis eget fringilla sem. Sed quis hendrerit tortor, at congue arcu. Phasellus quis euismod orci, ut interdum ex. Etiam nec lobortis augue.</p>
													<p>Morbi sed est iaculis, finibus lacus et, varius libero. Pellentesque porttitor ligula enim, quis imperdiet nulla condimentum at. Donec interdum pretium posuere. Fusce ultrices lacinia ante sed suscipit. In dignissim placerat pretium. Cras convallis mi in pharetra interdum. Donec ut lacus vitae sapien mattis mollis non ac arcu.</p>
													<ul>
														<li>Morbi sed est iaculis, finibus lacus et, varius libero.</li>
														<li>Pellentesque porttitor ligula enim, quis imperdiet nulla condimentum at.</li>
														<li>Donec interdum pretium posuere. Fusce ultrices lacinia ante sed suscipit.</li>
														<li>In dignissim placerat pretium. Cras convallis mi in pharetra interdum. </li>
													</ul>
												</div>
												<div class="span5 offset1">
													<a class="vidThumbLink playVideo" href="#" data-video-id="Xxmz6u2r8v4" data-videoTitle="My Account">
														<img src="/assets/images/my-account/tip2.jpg" alt="Tip1">
														<span class="playIcon"></span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-group">
							<div class="accordionHeader" data-target="#myAccountAccordion6" data-toggle="collapse"  data-parent="#whyMyAccountAccordion">
								<div class="content-container">
									<div class="inner-wrapper">
										<span class="accordionIcon iconOrderOnline"></span><span class="accordionHdText">Order online when it suits you</span>
									</div>
								</div>
							</div>
							<div id="myAccountAccordion6" class="collapse">
								<div class="content-container">
									<div class="inner-wrapper">
										<div class="accordionContent">
											<div class="row-fluid">
												<div class="span6">
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non nisl vitae diam porttitor egestas. Duis eget fringilla sem. Sed quis hendrerit tortor, at congue arcu. Phasellus quis euismod orci, ut interdum ex. Etiam nec lobortis augue.</p>
													<p>Morbi sed est iaculis, finibus lacus et, varius libero. Pellentesque porttitor ligula enim, quis imperdiet nulla condimentum at. Donec interdum pretium posuere. Fusce ultrices lacinia ante sed suscipit. In dignissim placerat pretium. Cras convallis mi in pharetra interdum. Donec ut lacus vitae sapien mattis mollis non ac arcu.</p>
													<ul>
														<li>Morbi sed est iaculis, finibus lacus et, varius libero.</li>
														<li>Pellentesque porttitor ligula enim, quis imperdiet nulla condimentum at.</li>
														<li>Donec interdum pretium posuere. Fusce ultrices lacinia ante sed suscipit.</li>
														<li>In dignissim placerat pretium. Cras convallis mi in pharetra interdum. </li>
													</ul>
												</div>
												<div class="span5 offset1">
													<a class="vidThumbLink playVideo" href="#" data-video-id="Xxmz6u2r8v4" data-videoTitle="My Account">
														<img src="/assets/images/my-account/tip2.jpg" alt="Tip1">
														<span class="playIcon"></span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-group">
							<div class="accordionHeader" data-target="#myAccountAccordion7" data-toggle="collapse"  data-parent="#whyMyAccountAccordion">
								<div class="content-container">
									<div class="inner-wrapper">
										<span class="accordionIcon iconSimpleSecure"></span><span class="accordionHdText">Simple, secure payment system</span>
									</div>
								</div>
							</div>
							<div id="myAccountAccordion7" class="collapse">
								<div class="content-container">
									<div class="inner-wrapper">
										<div class="accordionContent">
											<div class="row-fluid">
												<div class="span6">
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non nisl vitae diam porttitor egestas. Duis eget fringilla sem. Sed quis hendrerit tortor, at congue arcu. Phasellus quis euismod orci, ut interdum ex. Etiam nec lobortis augue.</p>
													<p>Morbi sed est iaculis, finibus lacus et, varius libero. Pellentesque porttitor ligula enim, quis imperdiet nulla condimentum at. Donec interdum pretium posuere. Fusce ultrices lacinia ante sed suscipit. In dignissim placerat pretium. Cras convallis mi in pharetra interdum. Donec ut lacus vitae sapien mattis mollis non ac arcu.</p>
													<ul>
														<li>Morbi sed est iaculis, finibus lacus et, varius libero.</li>
														<li>Pellentesque porttitor ligula enim, quis imperdiet nulla condimentum at.</li>
														<li>Donec interdum pretium posuere. Fusce ultrices lacinia ante sed suscipit.</li>
														<li>In dignissim placerat pretium. Cras convallis mi in pharetra interdum. </li>
													</ul>
												</div>
												<div class="span5 offset1">
													<a class="vidThumbLink playVideo" href="#" data-video-id="Xxmz6u2r8v4" data-videoTitle="My Account">
														<img src="/assets/images/my-account/tip2.jpg" alt="Tip1">
														<span class="playIcon"></span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li id="tabContentMyTips" class="myAccountTabContent">
					<div class="content-container">
						<div class="inner-wrapper">
							<div class="row-fluid myTipsDesc">
								<div class="span3">
									<a class="vidThumbLink playVideo" href="#" data-video-id="REmfHIGdyIA" data-videoTitle="My Tip #1 Online Ordering">
										<img src="/assets/images/my-account/tip1.jpg" alt="Tip1">
										<span class="playIcon"></span>
									</a>
									<h4><a href="">My Tip #1 Online Ordering</a></h4>
									<p>This overview will give you the general idea of how My Account can be a real asset to your business. And if you want to find out more about any particular feature simple click on a to the right and you’ll understand wwithout.</p>
								</div>
								<div class="span3 offset1">
									<a class="vidThumbLink playVideo" href="#" data-video-id="vzv09M75uQM" data-videoTitle="My Tip #2 Click + Collect">
										<img src="/assets/images/my-account/tip2.jpg" alt="Tip1">
										<span class="playIcon"></span>
									</a>
									<h4><a href="">My Tip #2 Click + Collect</a></h4>
									<p>This overview will give you the general idea of how My Account can be a real asset to your business. And if you want to find out more about any particular feature simple click on any of</p>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li id="tabContentDownloads" class="myAccountTabContent">
					<div class="content-container">
						<div class="inner-wrapper">
							<ul class="myAccountDownloads">
								<li>
									<a href="#">
										<img src="/assets/images/my-account/my-account-pdf-cover.jpg" alt="Tip1">
										<span class="downloadText">
											Download PDF
										</span>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="/assets/images/my-account/user-guide-pdf-cover.jpg" alt="Tip1">
										<span class="downloadText">
											Download PDF
										</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</li>
			</ul>
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
"/assets/js/bootstrap-modal.js",
"/assets/js/reece-signon.js",
"/assets/js/jquery.mobile.custom.min.js",
"/assets/js/reece-ocnav.js",
"/assets/js/reece-carousel.js",
"/assets/js/reece-hidesubnavbar.js",
"/assets/js/reece-match-height.js"
];
include_once($serverBase."/includes/foot/scripts.php");
?>
<div class="modal hide fade" id="myAccountModal">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3 id="myAccountModalHD">My Account</h3>
  </div>
  <div class="modal-body">
    <div id="myAccountYoutubePlayer"></div>
  </div>
</div>

<script type="text/javascript">

</script>
<script>
	var player;
	videoId = 'Xxmz6u2r8v4';
	jQuery(function(){
		var isregisterFormShown;

		$('.playVideo').click(addVideo);

		$('#myAccountModal').on('hidden', function(){
			player.stopVideo()
		})
		//This code loads the IFrame Player API code asynchronously.
		var tag = document.createElement('script');
		tag.src = "https://www.youtube.com/iframe_api";
		var firstScriptTag = document.getElementsByTagName('script')[0];
		firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
	});


	function addVideo(e){
		e.preventDefault();

		videoId = $(this).attr('data-video-id');
		videoTitle = $(this).attr('data-videoTitle');
		$('#myAccountModal').modal('show');
		$('#myAccountModalHD').html(videoTitle);
		if(player) {player.loadVideoById({'videoId': videoId });}
	}
	// This function creates an <iframe> (and YouTube player)
	//    after the API code downloads.
	function onYouTubeIframeAPIReady() {
		if (typeof player === 'undefined') {
			player = new YT.Player('myAccountYoutubePlayer', {
				height: '320',
				width: '520',
				videoId: videoId
			});
		}
		else{
			loadVideoById({'videoId': videoId });
		}

	}
</script>
<script type="text/javascript">
	(function($){
		$('.myAccountTabs .greenTab').click(function(e){
			e.preventDefault();
			$this = $(this);
			$('.myAccountTabs .greenTab').removeClass('active');
			$this.addClass('active');
			$('#myAccountTabContentWrap li.myAccountTabContent').removeClass('active');
			$($this.attr('href')).addClass('active');
		});

		$('#whyMyAccountAccordion').on('show', function (e) {
			$(e.target).parent('.accordion-group').addClass('active');
		});

		$('#whyMyAccountAccordion').on('hide', function (e) {
			$(e.target).parent('.accordion-group').removeClass('active');
		});

		$('.scrollToLink').click(function(e){
			e.preventDefault();
			target = $($(this).attr('data-target'));
			$('html,body').animate({
				scrollTop: target.offset().top - $('.subnavbar').height()
			}, 2000);
		})

	})(jQuery)
</script>
</body>
</html>