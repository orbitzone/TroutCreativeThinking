
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
					<!--<div class="span3">
						<div class="myAccountHeroLeft">
							<img src="/assets/images/my-account/guy-on-computer.png" alt="Guy on computer">
							<a href="#" class="greenBtn">Register Now</a>
							<a href="#" class="learnMore scrollToLink" data-target="#myAccountMegaFooter">Learn More</a>
						</div>
					</div>-->
					<div class="span7">
						<div class="myAccountHeroLeft">
							<h3>My Account.</h3>
							<h4>Works for you 24/7.</h4>
							<p>Developed exclusively for Reece account customers, My Account is an innovative management system that gives you access to product pricing, allows you to build product lists, manage your account, generate customer quotes and even order online.</p>
							<a href="#" class="greenBtn">Register Now</a>
							<a href="#" class="learnMore scrollToLink" data-target="#myAccountMegaFooter">Learn More</a>
						</div>
					</div>
					<div class="span4 offset1">
						<a class="vidThumbLink playVideo" href="#" data-toggle="modal" data-target="#myAccountModal">
							<img src="/assets/images/my-account/guy-on-computer.png" alt="Guy on computer">
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
							<h3>Discover a better way to do business.</h3>
							<p>My Account can be a real asset for your business, saving you time everyday. Here you can find out how to get the most out of this handy online tool. And if you’d like to know more about any particular feature, simply click on any of the boxes below. Pretty soon you’ll understand why this is a business tool you don’t want to be without.</p>
						</div>
						<div class="span2 offset1">
							<a href="#" class='greenBtn'>Register Now</a>
						</div>
					</div>
					<ul class="myAccountTabs">
						<li>
							<a class="greenTab active" href="#tabContentWhyMyAccount">
								<span class="tabHeading">Why My Account</span>
								<span class="tabInfo">Find out how hard My Account can work for you and your business success.</span>
							</a>
						</li>
						<li>
							<a class="greenTab" href="#tabContentMyTips">
								<span class="tabHeading">My Tips</span>
								<span class="tabInfo">This collection of videos will help you get the most out of My Account and its features</span>
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
										<div class="accordionHeaderInner">
											<h4>My Products</h4>
											<p>Today more than ever you need to be responsive to your customers’ needs. So you need to be able to cost products and present solutions as fast as possible.</p>
										</div>
										<p>
											<a class="showLink">See More</a>
											<a class="hideLink">See Less</a>
										</p>
									</div>
								</div>
							</div>
							<div id="myAccountAccordion1" class="collapse">
								<div class="content-container">
									<div class="inner-wrapper">
										<div class="accordionContent">
											<div class="row-fluid">
												<div class="span8">
													<h3><span class="iconMyAccount iconMyAccountSearch"></span>Search</h3>
													<ul>
														<li>You can search for products 24/7.</li>
														<li>Select from various sorting and viewing options including line, list or grid view.</li>
														<li>Images are included with product descriptions to help with quick identification and selection.</li>
														<li>Refine your search by recent purchases, categories or brands to help you find exactly what you're after.</li>
														<li>Switch between your price and the Competitive Market Price (CMP).</li>
													</ul>
												</div>
												<div class="span3 offset1">
													<a class="thumbImage" href="../assets/images/my-account/thumbs/search.jpg" title="Search">
														<img src="../assets/images/my-account/thumbs/search.jpg" alt="Search">
													</a>
												</div>
											</div>
											<div class="row-fluid">
												<div class="span8">
													<h3><span class="iconMyAccount iconMyAccountList"></span>Product Lists</h3>
													<ul>
														<li>Create or manage product lists.</li>
														<li>Easily add products or increase quantities to existing product lists.</li>
														<li>Download, print, save or e-mail your lists for checking or confirmation.</li>
														<li>Turn a product list into a quote or order in seconds.</li>
														<li>Lists display both CMP and retail pricing to help cost jobs effectively.</li>
													</ul>
												</div>
												<div class="span3 offset1">
													<a class="thumbImage" href="../assets/images/my-account/thumbs/product-list.jpg" title="Product Lists">
														<img src="../assets/images/my-account/thumbs/product-list.jpg" alt="Product Lists">
													</a>
												</div>
											</div>
											<div class="row-fluid">
												<div class="span8">
													<h3><span class="iconMyAccount iconMyAccountQuotes"></span>Reece Quotes</h3>
													<ul>
														<li>Request a quote at your Reece branch via phone or in-store. Your quote will then be sent to you via My Account.</li>
														<li>Turn a quote into an online</li>
														<li>Save, print or email the quotes.</li>
														<li>All quotes are stored and filed for future reference.</li>
													</ul>
												</div>
												<div class="span3 offset1">
													<a class="thumbImage" href="../assets/images/my-account/thumbs/quotes.jpg" title="Reece Quotes">
														<img src="../assets/images/my-account/thumbs/quotes.jpg" alt="Reece Quotes">
													</a>
												</div>
											</div>
											<div class="row-fluid">
												<div class="span8">
													<h3><span class="iconMyAccount iconMyAccountOrders"></span>Online Orders</h3>
													<ul>
														<li>Quickly convert your quotes or product lists to orders.</li>
														<li>Automated confirmation your order has been received via SMS or email.</li>
														<li>Place your order overnight for next day pick up. Same day ordering and delivery is also available.</li>
														<li>Choose to pick up your order at any Reece branch or have it delivered to site.</li>
														<li>Your orders are stored for easy reference.</li>
													</ul>
												</div>
												<div class="span3 offset1">
													<a class="thumbImage" href="../assets/images/my-account/thumbs/Orders.jpg" title="Online Orders">
														<img src="../assets/images/my-account/thumbs/Orders.jpg" alt="Online Orders">
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-group">
							<div class="accordionHeader" data-target="#myAccountAccordion2" data-toggle="collapse" data-parent="#whyMyAccountAccordion">
								<div class="content-container">
									<div class="inner-wrapper">
										<div class="accordionHeaderInner">
											<h4>My Reece Account</h4>
											<p>A big part of having a successful business is hard work. However, all that hard work can go to waste if you’re not keeping track of your cashflow. Knowing what you owe and when, will help you plan for the future.</p>
										</div>
										<p>
											<a class="showLink">See More</a>
											<a class="hideLink">See Less</a>
										</p>
									</div>
								</div>
							</div>
							<div id="myAccountAccordion2" class="collapse">
								<div class="content-container">
									<div class="inner-wrapper">
										<div class="accordionContent">
											<div class="row-fluid">
												<div class="span8">
													<h3><span class="iconMyAccount iconMyAccountStatement"></span>Statements</h3>
													<ul>
														<li>Download your statements for each month.</li>
														<li>Keep a record of all previous statements.</li>
													</ul>
												</div>
												<div class="span3 offset1">
													<a class="thumbImage" href="../assets/images/my-account/thumbs/statements.jpg" title="Statements">
														<img src="../assets/images/my-account/thumbs/statements.jpg" alt="Statements">
													</a>
												</div>
											</div>
											<div class="row-fluid">
												<div class="span8">
													<h3><span class="iconMyAccount iconMyAccountInvoiceSearch"></span>Invoice Search</h3>
													<ul>
														<li>Easy to use search feature.</li>
														<li>Track your invoices to pay and review payment history in real time.</li>
														<li>Search for invoices by order number or job name.</li>
														<li>Download your invoices.</li>
													</ul>
												</div>
												<div class="span3 offset1">
													<a class="thumbImage" href="../assets/images/my-account/thumbs/invoice-search.jpg" title="Invoice Search">
														<img src="../assets/images/my-account/thumbs/invoice-search.jpg" alt="Invoice Search">
													</a>
												</div>
											</div>
											<div class="row-fluid">
												<div class="span8">
													<h3><span class="iconMyAccount iconMyAccountBalance"></span>Balance &amp; QuickPay</h3>
													<ul>
														<li>View and pay your account balance by														  what's overdue and what's current. Or														  pay your entire account with a click of														  a button.</li>
														<li>QuickPay is a secure, fast and easy														  way to pay your account online.</li>
														<li>You can pay with either credit card
														  or direct debit.</li>
													</ul>
												</div>
												<div class="span3 offset1">
													<a class="thumbImage" href="../assets/images/my-account/thumbs/balance.jpg" title="Balance">
														<img src="../assets/images/my-account/thumbs/balance.jpg" alt="Balance">
													</a>
													<a class="thumbImage" href="../assets/images/my-account/thumbs/quick-pay.jpg" title="QuickPay">
														<img src="../assets/images/my-account/thumbs/quick-pay.jpg" alt="QuickPay">
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-group">
							<div class="accordionHeader" data-target="#myAccountAccordion3" data-toggle="collapse" data-parent="#whyMyAccountAccordion">
								<div class="content-container">
									<div class="inner-wrapper">
										<div class="accordionHeaderInner">
											<h4>My Business Tools</h4>
											<p>You can always spot a good tradesman by the tools they use. And it shouldn’t end with the right wrench, you also need the right business tools that reflect your professionalism.</p>
										</div>
										<p>
											<a class="showLink">See More</a>
											<a class="hideLink">See Less</a>
										</p>
									</div>
								</div>
							</div>
							<div id="myAccountAccordion3" class="collapse">
								<div class="content-container">
									<div class="inner-wrapper">
										<div class="accordionContent">
											<div class="row-fluid">
												<div class="span8">
													<h3><span class="iconMyAccount iconMyAccountMyQuote"></span>My Quotes</h3>
													<ul>
														<li>Create professional looking quotes that														  you can modify to suit your business.</li>
														<li>Customise your quotes with your labour and expenses.</li>
														<li>Customise your quote with headings and blank space to ensure readability.</li>
														<li>Add your mark up and your total price will be updated automatically.</li>
														<li>All pricing information on hand (CMP / your price) to quickly build an accurate quote.</li>
														<li>Pricing is always up to date.</li>
														<li>Export your quote as a PDF to send to your customers.</li>
														<li>Turn your quote into an order anytime.</li>
														<li>All quotes are stores and filed for future reference.</li>
													</ul>
												</div>
												<div class="span3 offset1">
													<a class="thumbImage" href="../assets/images/my-account/thumbs/my-quotes.jpg" title="My Quotes" >
														<img src="../assets/images/my-account/thumbs/my-quotes.jpg" alt="My Quotes">
													</a>
												</div>
											</div>
											<div class="row-fluid">
												<div class="span8">
													<h3><span class="iconMyAccount iconMyAccountBusinessTraining"></span>Business Training</h3>
													<ul>
														<li>The Achieving Business Success Series has been created to give
														  you the tools you need to help
														  manage your business smarter
													  and more efficiently.</li>
														<li>The information, tips and business
														  tools are designed to assist
														  business owners increase their
														  potential earning capacity and
														  improve their overall quality
														  of lifestyle.</li>
														<li>Get started with free online
														  training modules</li>
													</ul>
												</div>
												<div class="span3 offset1">
													<a class="thumbImage" class="thumbImage" href="../assets/images/my-account/thumbs/business-training.jpg" title="Business Training">
														<img src="../assets/images/my-account/thumbs/business-training.jpg" alt="Business Training">
													</a>
													<a class="thumbImage" class="thumbImage" href="../assets/images/my-account/thumbs/business-video.jpg" title="Business Training">
														<img src="../assets/images/my-account/thumbs/business-video.jpg" alt="Business Training">
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
									<a class="vidThumbLink playVideo" href="#" data-toggle="modal" data-target="#myAccountModal2">
										<img src="/assets/images/my-account/tip1.jpg" alt="Tip1">
										<span class="playIcon"></span>
									</a>
									<h4><a class="vidThumbLink playVideo" href="#"  data-toggle="modal" data-target="#myAccountModal2">My Tip #1 Online Ordering</a></h4>
									<p>You can now place orders online 24/7 with My Account. This short video shows you just how easy it is.</p>
								</div>
								<div class="span3 offset1">
									<a class="vidThumbLink playVideo" href="#"  data-toggle="modal" data-target="#myAccountModal3">
										<img src="/assets/images/my-account/tip2.jpg" alt="Tip1">
										<span class="playIcon"></span>
									</a>
									<h4><a class="vidThumbLink playVideo" href="#"  data-toggle="modal" data-target="#myAccountModal3">My Tip #2 Click + Collect</a></h4>
									<p>Place orders online and pick up from the branch closest to where you’re working. Watch this video to learn how.</p>
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
  <div class="modal-body" id="myAccountYoutubePlayerWrap">
    <div class="myAccountYoutubePlayer">
    	<iframe width="560" height="315"  data-url="https://www.youtube.com/embed/Xxmz6u2r8v4?rel=0&autoplay=1" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>
</div>
<div class="modal hide fade" id="myAccountModal2">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3 id="myAccountModalHD">My Tip #1 Online Ordering</h3>
  </div>
  <div class="modal-body" id="myAccountYoutubePlayerWrap">
    <div class="myAccountYoutubePlayer">
    	<iframe width="560" height="315" data-url="https://www.youtube.com/embed/REmfHIGdyIA?rel=0&autoplay=1" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>
</div>
<div class="modal hide fade" id="myAccountModal3">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3 id="myAccountModalHD">My Tip #2 Click + Collect</h3>
  </div>
  <div class="modal-body" id="myAccountYoutubePlayerWrap">
    <div class="myAccountYoutubePlayer">
    	<iframe width="560" height="315" data-url="https://www.youtube.com/embed/vzv09M75uQM?rel=0&autoplay=1" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>
</div>

<div class="modal hide fade" id="myAccountImageModal">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3 id="myAccountModalImageHD">&nbsp;</h3>
  </div>
  <div class="modal-body" id="myAccountModalImageWrap">
  </div>
</div>

<script type="text/javascript">

</script>
<script>
	$('.modal').bind('show', function () {
		var url = $(this).find('iframe').data('url'); 
	 	$(this).find('iframe').attr('src', url);
	 });
	$('.modal').bind('hide', function () {
	 	$(this).find('iframe').attr('src', '');

	 });
</script>
<script type="text/javascript">
	(function($){
		/* My Account tabs */
		$('.myAccountTabs .greenTab').click(function(e){
			e.preventDefault();
			$this = $(this);
			$('.myAccountTabs .greenTab').removeClass('active');
			$this.addClass('active');
			$('#myAccountTabContentWrap li.myAccountTabContent').removeClass('active');
			$($this.attr('href')).addClass('active');
		});
		/* Why My Account Accordion */
		$('#whyMyAccountAccordion').on('show', function (e) {
			$parent = $(e.target).parent('.accordion-group');
			$parent.addClass('active');
		});
		$('#whyMyAccountAccordion').on('shown', function (e) {
			$parent = $(e.target).parent('.accordion-group');
			$('html,body').animate({scrollTop: $parent.offset().top-$('.subnavbar.fixed').height()},'slow');
		});

		$('#whyMyAccountAccordion').on('hide', function (e) {
			$(e.target).parent('.accordion-group').removeClass('active');
		});
		/* Inner links Scroll */
		$('.scrollToLink').click(function(e){
			e.preventDefault();
			target = $($(this).attr('data-target'));
			$('html,body').animate({
				scrollTop: target.offset().top - $('.subnavbar').height()
			}, 2000);
		})
		/* Why My Account Thumbs */
		$('#tabContentWhyMyAccount .thumbImage').click(function(e){
			e.preventDefault();
			var thumbTarget = $(e.target).closest('a');
			$('#myAccountModalImageHD').html(thumbTarget.attr('title'));
			$('#myAccountModalImageWrap').html('<img src="'+thumbTarget.attr('href')+'" alt="'+thumbTarget.attr('title')+'" />');
			$('#myAccountImageModal').modal();
		});

	})(jQuery)
</script>
</body>
</html>