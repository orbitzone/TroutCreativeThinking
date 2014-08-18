
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

		<section id="slideHistoryIntro">
			<div class="content-container">
				<img src="/assets/images/aboutus/history/logo-reece.png" alt=" " class="reece-logo"
				data-0="opacity: 1"
				data-100="opacity:0.1"
				>
				<h1>Reece Timeline</h1>
				<p
				data-anchor-target="#slideHistoryIntro"
				data-100-bottom="opacity: .3"
				data-bottom="opacity:1"
				>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac leo bibendum, suscipit sapien vitae, posuere nulla. Duis vitae neque urna. Cras in sem eu risus blandit congue in et odio. Sed non congue tellus, vel facilisis tortor.</p>
				<img src="/assets/images/aboutus/history/img-drop.png" alt=" " class="water-drop"
				data-anchor-target="#slideHistoryIntro"
				data-top-top="top: 0%"
				data-center-bottom="top: 60%; opacity: 1"
				data--200-top-bottom="opacity: 0; top: 80%"
				>

			</div>
		</section>

		<?php
			$backgrounds = array(
				"1919"=>"bgBlue",
				"1920"=>"bgLightBrown",
				"1922"=>"bgBrown",
				"1954"=>"bgTurquoise",
				"1969"=>"bgStripedBrown",
				"1970"=>"bgBlue",
				"1976-1"=>"bgDarkBlue",
				"1976-2"=>"bgDarkBlue",
				"1978-1"=>"bgBlue",
				"1978-2"=>"bgTurquoiseDark",
				"1986"=>"bgBlue",
				"1987-1"=>"bgDarkerBlue",
				"1987-2"=>"",
				"1987-3"=>"bgBlue",
				"1988"=>"bgTurquoiseDark",
				"1990s"=>"bgGreyDark",
				"1993"=>"bgDarkBlue",
				"1994"=>"bgTurquoiseLight",
				"1997"=>"bgDarkBrown",
				"1998-1"=>"bgBlue",
				"1998-2"=>"bgLightBrown",
				"2000-1"=>"bgTurquoiseLight",
				"2000-2"=>"bgLightBrown",
				"2000-3"=>"bgNightBlue",
				"2001"=>"bgDarkBlue",
				"2003"=>"bgBlue",
				"2004"=>"bgBlue",
				"2005-1"=>"bgDarkBrown",
				"2005-2"=>"bgNightBlue",
				"2006"=>"bgBlue",
				"2006-2"=>"bgDarkerBlue",
				"2007-1"=>"bgGreenLight",
				"2007-2"=>"bgBlue",
				"2007-3"=>"bgNightBlue",
				"2008"=>"bgBlue",
				"2009-1"=>"bgDarkBrown",
				"2009-2"=>"bgPurple",
				"2010"=>"bgBrown",
				"2011"=>"bgGreyDark",
				"2012-1"=>"bgBlue",
				"2012-2"=>"bgGreyLight",
				"2012-3"=>"bgBlueLight",
				"2012-4"=>"bgBlue",
				"2014-1"=>"bgGreenLight"
			);
			$location = 'history/panels/';
			foreach (new DirectoryIterator($location) as $file) {
				$file_name = $file->getFilename();
				if ($file_name[0] == ".") continue;
				if($file->isDot()) continue;
				$year = str_replace('.html', '', $file->getBasename());
				echo '<section id="slide'.$year.'" class="'.$backgrounds[$year].'">';
				include($location.$file_name);
				echo '</section>';
			}
		?>

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
			"/assets/js/reece-history.js"
		];
		include_once($serverBase."/includes/foot/scripts.php");
	?>
	<script type="text/javascript">
		var SkrollrSetup = function () {
			var min_height = 800;
			var win_height = $(window).height()*0.8;
			if (win_height > min_height) {
				$('section').css('min-height', win_height);
			}
			var s = skrollr.init({
				smoothScrolling : true,
				smoothScrollingDuration: 2000,
				keyframe: function(element, name, direction) {
        			// console.log(element, name, direction);
        		}
    		});
		};
		$(document).on('ready', function() {
			SkrollrSetup();
		});
		$(window).on('resize', function() {
			SkrollrSetup();
		});
	</script>

</body>
</html>