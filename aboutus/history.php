<?php //error_reporting(0); ?>
<?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>

<?php
	$cssScriptPaths = [
		"/assets/css/reece-history.css"
	];
	include_once($serverBase."/includes/head/head-generic.php");
?>

<body class="withSubNav history" data-spy="scroll" data-target=".nav-history">
	<div class="ocmain-wrapper">
		<div class="navbar navbar-fixed-top topNav">
			<?php
				$genericNavActiveMenuItem = "About Us";
				include_once($serverBase."/includes/nav/nav-generic.php");
			?>
		</div>


		<?php
		include_once($serverBase."/includes/nav/nav-about-us.php");
		?>


		<!--<div class="nav-history">
			<ul class="nav">
				<li><a href="#slideHistoryIntro">Reece Timeline</a></li>
				<li><a href="#slide1954">1954</a></li>
				<li><a href="#slide1976">1976</a></li>
				<li><a href="#slide1997">1997</a></li>
				<li><a href="#slide1998">1998</a></li>
				<li><a href="#slide2005">2005</a></li>
			</ul>
		</div>-->

		<header id="slideHistoryIntro">
			<div class="content-container">
				<img src="/assets/images/aboutus/history/logo-reece.png" alt=" " class="reece-logo"
				>
				<h1>Reece Timeline</h1>
				<p
				data-anchor-target="#slideHistoryIntro"
				data-100-bottom="opacity: .3"
				data-bottom="opacity:1"
				>Scroll down to experience some of our most significant moments over the last 90+ years.</p>
				<h2 class="year">1919 - 2014</h2>
				<p class="scroll">Scroll</p>
				<!-- <img src="/assets/images/aboutus/history/img-drop.png" alt=" " class="water-drop"
				data-anchor-target="#slideHistoryIntro"
				data-top-top="top: 0%"
				data-center-bottom="top: 60%; opacity: 1"
				data--200-top-bottom="opacity: 0; top: 80%"
				> -->

			</div>
		</header>

		<div id="timeline"><!-- Inject appropriate html with js --></div>

		<?php
			include_once($serverBase."/includes/foot/foot-generic.php");
		?>

	</div>

	<?php
		$mobileNavActiveMenu = array(
			"activeMenu" => "About Us"
		);
		include_once($serverBase."/includes/nav/nav-mobile.php");
	?>

	<?php
		$jsScriptPaths = [
			"/assets/js/bootstrap-transition.js",
			"/assets/js/bootstrap-carousel.js",
			"/assets/js/bootstrap-dropdown.js",
			"/assets/js/reece-signon.js",
			"/assets/js/jquery.mobile.custom.min.js",
			"/assets/js/bootstrap-scrollspy.js",
			"/assets/js/reece-ocnav.js",
			"/assets/js/skrollr.min.js",
			"/assets/js/reece-hidesubnavbar.js",
			"/assets/js/reece-history.js",
			"/assets/js/waypoints.js"
		];
		include_once($serverBase."/includes/foot/scripts.php");
	?>
	<script type="text/javascript">

		// Keep this here
		$(document).on('ready', function() {

			var Timeline = function() {
				window.TT = this;
				TT.hasTouch = Modernizr.touch;
				TT.smallScreen = $(window).width() < 1000; // 1000px == min-width of large slides
				TT.isiPad = navigator.userAgent.match(/iPad/i) != null;
				TT.minHeight = 800;
				TT.maxHeight = 1050;
				TT.container = $('#timeline');
				TT.navCurrentBlock = 0;
				TT.navBlocksCount = 5;
				TT.ajax = {
					full: 'history/ajax-history-full.php',
					small: 'history/ajax-history-images.php',
					nav: 'history/ajax-history-small.php'
				};
				TT.skrollrConfig = {
					smoothScrolling : true,
					smoothScrollingDuration: 2000
					// mobileCheck : function() {
					// 	return false; // disable for mobile
					// }
				};

				// Init
				TT.GetHTML();

			};
			Timeline.prototype.SkrollrSetup = function () {
				if (TT.smallScreen || TT.hasTouch || TT.isiPad) return;
				TT.skrollr = skrollr.init(TT.skrollrConfig);
			};
			Timeline.prototype.SetHeights = function () {
				var win_height = $(window).height()*0.8;
				if (win_height > TT.minHeight && win_height < TT.maxHeight) {
					TT.container.find('section').css('min-height', win_height);
				}
			};
			Timeline.prototype.SlideEvents = function () {
				TT.container.find('section').each(function() {
					$(this).waypoint(function() {
						var data = {
							id: $(this).attr('id')
						}
						$(window).trigger('Timeline:newSlide', data);
					});
				});
			};
			Timeline.prototype.NavChange = function () {
				$(window).on('Timeline:newSlide', function (event, data) {
					var nav = TT.container.find('.history-section-nav');
					var links = nav.find('a');
					var link = nav.find('a[href="#' + data['id'] + '"]');
					var block = link.parents('[class*="count-"]');
					var block = block.attr('class').replace('count-', '');
					if (block != TT.navCurrentBlock || TT.navCurrentBlock == 0) {
						var data = {
							block: block
						};
						$(window).trigger('Timeline:newBlock', data);
					}
					links.removeClass('active');
					link.addClass('active');

				});
			};
			Timeline.prototype.NavButtons = function () {
				var buttons = TT.container.find('.history-section-nav .nav');
				buttons.each(function() {
					$(this).on('click', function (event) {
						var current = TT.navCurrentBlock;
						event.preventDefault();
						if ($(this).hasClass('previous')) {
							var data = {
								block: ((current-1 > 0) ? current-1 : 0)
							};
						}
						if ($(this).hasClass('next')) {
							var data = {
								block: ((current+1 <= TT.navBlocksCount) ? current+1 : TT.navBlocksCount)
							};
						}
						$(window).trigger('Timeline:newBlock', data);
					});
				});
			};
			Timeline.prototype.NavSlide = function () {
				$(window).on('Timeline:newBlock', function (event, data) {
					var nav = TT.container.find('.history-section-nav');
					var i = parseInt(data['block']);
					nav.attr('data-current-block', 'count-' + i);
					TT.navCurrentBlock = i;
				});
			};
			Timeline.prototype.GetHTML = function() {
				if (TT.hasTouch || TT.smallScreen || TT.isiPad) {
					$.get(TT.ajax.small).done(
						function (data, textStatus, jqXHR) {
							TT.container.empty().html(data);
						}
					);
				}
				else {
					$.get(TT.ajax.full).done(
						function (data, textStatus, jqXHR) {
							$(TT.container).empty().html(data);
						}
					)
					.then(
						function() {
							// TT.SetHeights();
							$.get(TT.ajax.nav).done(
								function (data, textStatus, jqXHR) {
									TT.container.append(data);
								}
							).then(
								function () {
									TT.SlideEvents();
									TT.NavChange();
									TT.NavSlide();
									TT.NavButtons();
									TT.NextAction();
								}
							);
						}
					)
					.then(
						function() {
							TT.SkrollrSetup();
						}
					);
				}
			};
			Timeline.prototype.NextAction = function () {
				$('.historyNextBtn').click(function(e){
					e.preventDefault();
					var target = $($(e.target).attr('href'));
					$('html,body').animate({
						scrollTop: target.offset().top
					}, 2000);
				});
			};
			// Init timeline object
			var timeline = new Timeline();
		});
	</script>

</body>
</html>