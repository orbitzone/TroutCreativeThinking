
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


				<div class="loginColumn">
					<h2>Welcome to My Account</h2>
					<p>
						Developed exclusively for Reece account customers this innovative management system gives you access to product pricing, allows you to build product lists, manage your account, generate customer quotes and even order online.<br /><br />
					</p>
					<article class="article-summary-main row-fluid">
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
						<div class="span4 loginBox grey hideForm">
							<form>
								<div class="controls">
									<h4>Register interest</h4>
									<div class="row-fluid">
										<div class="span3"><img src="../assets/images/MyAccount/man-register.png" />
										</div>
										<div class="span9"><p>Fill in your details and your branch manager will be in touch about signing up to My Account.</p>
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
						<div class="span5 loginBox grey">
<h4>Apply for a Reece Account</h4>
							<div class="row-fluid">
								<div class="span9">
								<p>You need to be a Reece account customer to use “My Account”. Download an application.</p>
								</div>
								<div class="span3">
									<button type="submit" class="btn">Download Application</button>
								</div>
							</div>

							<br />

							<div class="row-fluid">
								<div class="span9">
								<p>If you have filled out the application, scan it and upload it or take it to your nearest Reece ranch.</p>
								</div>
								<div class="span3">
									<button type="submit" class="btn">Upload Application</button>
								</div>
							</div>




						</div>
					</div>
				</article>
			</div>
			<div class="loginColumn">
				<article class=" row-fluid">
					<div class="span5 loginBox grey">
						<div class="controls">
							<h3>How My Account works for your business</h3>
							<div class="flex-video widescreen"><iframe src="//www.youtube.com/embed/Xxmz6u2r8v4?rel=0&wmode=transparent&showinfo=0&modestbranding=1&controls=2" frameborder="0" allowfullscreen></iframe></div>
							<p>This overview will give you the general idea of how My Account can be a real asset to your business. And if you want to find out more about any particular feature simple click on any of the box to the right and you’ll understand why this is a business tool you don’t want to be without.</p>

						</div>
					</div>
					<div class="span7 loginBox">
						<h3>My Tips</h3>
						<div class="row-fluid">
							<div class="span4"><img src="../assets/images/MyAccount/order.jpg" /><p>Some text about the tip</p></div>
							<div class="span4"><img src="../assets/images/MyAccount/clickandcollect.jpg" /><p>Some text about the tip</p></div>
							<div class="span4"><img src="../assets/images/MyAccount/search.jpg" /><p>Some text about the tip</p></div>
						</div>
						<div class="row-fluid">
							<div class="span4"><img src="../assets/images/MyAccount/quickpay.jpg" /><p>Some text about the tip</p></div>
							<div class="span4"><img src="../assets/images/MyAccount/plain.jpg" /><p>Some text about the tip</p></div>
							<div class="span4"><img src="../assets/images/MyAccount/plain.jpg" /><p>Some text about the tip</p></div>
						</div>
						<br /><br /><br /><br />
					</div>
				</article>
			</div>




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
"/assets/js/reece-signon.js",
"/assets/js/jquery.mobile.custom.min.js",
"/assets/js/reece-ocnav.js",
"/assets/js/reece-carousel.js",
"/assets/js/reece-hidesubnavbar.js",
"/assets/js/reece-match-height.js"
];
include_once($serverBase."/includes/foot/scripts.php");
?>

</body>
</html>