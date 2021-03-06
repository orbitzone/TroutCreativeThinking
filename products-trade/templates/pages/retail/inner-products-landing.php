<!--START BREAD CRUMB -->
<div class="breadcrumb-section bg-green section">
	<div class="breadcrumb-inner">
		<ul class="breadcrumbs">
			<li><a href="#">Products</a></li>
		</ul>
	</div>
</div>
<!--END BREAD CRUMB -->
<!--START POSTCODE INPUT -->
<div class="postcode-input">
	<div class="container-fluid section-container">
		<div class="row">
			<div class="col-xs-12">
				<span class="text"><b>Pricing</b>
					<span class="enter-your-postcode">Enter your postcode for current pricing. </span>
					<span class="postcode-text-wrap">Current postcode <span class="postcode-text"></span> <span class="postcode-link">(<a href="#">change</a>)</span></span>
				</span>
				<input type="text" name="userpostcode" placeholder="Postcode" class="input-medium" inputmode="numeric" minlength="4" maxlength="4" min="0" max="9999" pattern="[0-9]*">				
			</div>
		</div>
	</div>	
</div>
<!--END POSTCODE INPUT -->
<!--START PRODUCTS LANDING -->
<div class="main-section" id="products-landing">
	<?php include "templates/includes/retail/Widget.php" ?>
	<div class="products-landing-wrap">
		<div class="container-fluid section-container">
			<div class="content-wrapper with-filters">						
				<div class="content-main">
					<form action="" id="search">
						<input type="text" name="search" placeholder="Search Product">
						<button type="button" class="btn blue-button">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="20px" height="20px"><title>search</title> <circle fill-rule="evenodd" clip-rule="evenodd" fill="none" stroke="#000000" stroke-width="2.5" stroke-miterlimit="10" cx="14.6" cy="14.6" r="13.3"/> <line fill-rule="evenodd" clip-rule="evenodd" fill="none" stroke="#000000" stroke-width="2.5" stroke-linecap="round" stroke-miterlimit="10" x1="24.1" y1="24" x2="38.8" y2="38.8"/></svg>
						</button>
					</form>
					<div class="banner">
						<img src="templates/images/retail/products-landing/hero.jpg" alt="Hero"/>
					</div>
					<div class="intro">
						<p>Introduction to product category copy. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam gravida sodales aliquet. Proin nec risus sit amet nunc sollicitudin ultrices ut vel nulla. Curabitur eu dignissim velit. Praesent tincidunt non diam sit amet mattis. Nam in volutpat dui. Proin ex urna, tempor in finibus eget, convallis eu mi.</p>						
					</div>
					<?php include 'templates/includes/retail/filters.php';?>
					<!--START PEOPLE ALSO BOUGHT SECTION -->
					<div class="section latest-releases">
						<h2>Latest Releases</h2>
						<div class="latest-releases-slider slider" data-slidestoshow="4">
							<div class="slide">
								<a href="retail-product-detail.php" class="product">
									<div class="product-thumbnail">
										<img class="img-responsive" src="templates/images/retail/products-landing/product1.jpg" alt="item">
									</div>
									<div class="product-details">
										<h3 class="product-name">Milli Glance</h3>
										<p class="product-description">Basin Mixer</p>											
									</div>
									<div class="view-button">
										<span class="btn main-button">View</span>
									</div>
								</a>
							</div><!-- end slide -->
							<div class="slide">
								<a href="retail-product-detail.php" class="product">
									<div class="product-thumbnail">
										<img class="img-responsive" src="templates/images/retail/products-landing/product2.jpg" alt="item">
									</div>
									<div class="product-details">
										<h3 class="product-name">ISSY Z1 Ballerina</h3>
										<p class="product-description">800 Vanity Unit</p>											
									</div>
									<div class="view-button">
										<span class="btn main-button">View</span>
									</div>
								</a>
							</div><!-- end slide -->
							<div class="slide">
								<a href="retail-product-detail.php" class="product">
									<div class="product-thumbnail">
										<img class="img-responsive" src="templates/images/retail/products-landing/product3.jpg" alt="item">
									</div>
									<div class="product-details">
										<h3 class="product-name">Armitage Shanks</h3>
										<p class="product-description">Portman21 600 Accessible Wall Basin No Taphole</p>											
									</div>
									<div class="view-button">
										<span class="btn main-button">View</span>
									</div>
								</a>
							</div><!-- end slide -->
							<div class="slide">
								<a href="retail-product-detail.php" class="product">
									<div class="product-thumbnail">
										<img class="img-responsive" src="templates/images/retail/products-landing/product4.jpg" alt="item">
									</div>
									<div class="product-details">
										<h3 class="product-name">ISSY Z8 Butterfly</h3>
										<p class="product-description">Custom 1301-16600 Vanity Unit</p>											
									</div>
									<div class="view-button">
										<span class="btn main-button">View</span>
									</div>
								</a>
							</div><!-- end slide -->
							<div class="slide">
								<a href="retail-product-detail.php" class="product">
									<div class="product-thumbnail">
										<img class="img-responsive" src="templates/images/retail/products-landing/product1.jpg" alt="item">
									</div>
									<div class="product-details">
										<h3 class="product-name">Milli Glance</h3>
										<p class="product-description">Basin Mixer</p>											
									</div>
									<div class="view-button">
										<span class="btn main-button">View</span>
									</div>
								</a>
							</div><!-- end slide -->
							<div class="slide">
								<a href="retail-product-detail.php" class="product">
									<div class="product-thumbnail">
										<img class="img-responsive" src="templates/images/retail/products-landing/product2.jpg" alt="item">
									</div>
									<div class="product-details">
										<h3 class="product-name">ISSY Z1 Ballerina</h3>
										<p class="product-description">800 Vanity Unit</p>											
									</div>
									<div class="view-button">
										<span class="btn main-button">View</span>
									</div>
								</a>
							</div><!-- end slide -->
							<div class="slide">
								<a href="retail-product-detail.php" class="product">
									<div class="product-thumbnail">
										<img class="img-responsive" src="templates/images/retail/products-landing/product3.jpg" alt="item">
									</div>
									<div class="product-details">
										<h3 class="product-name">Armitage Shanks</h3>
										<p class="product-description">Portman21 600 Accessible Wall Basin No Taphole</p>											
									</div>
									<div class="view-button">
										<span class="btn main-button">View</span>
									</div>
								</a>
							</div><!-- end slide -->
							<div class="slide">
								<a href="retail-product-detail.php" class="product">
									<div class="product-thumbnail">
										<img class="img-responsive" src="templates/images/retail/products-landing/product4.jpg" alt="item">
									</div>
									<div class="product-details">
										<h3 class="product-name">ISSY Z8 Butterfly</h3>
										<p class="product-description">Custom 1301-16600 Vanity Unit</p>											
									</div>
									<div class="view-button">
										<span class="btn main-button">View</span>
									</div>
								</a>
							</div><!-- end slide -->						
						</div>						
					</div>
					<!--END PEOPLE ALSO BOUGHT SECTION -->
					<div class="section video">
						<a href="#" title="Watch video"  class="lightbox-video" data-video="F-kP7xe9j70">
							<img class="img-responsive" src="templates/images/retail/products-landing/video.jpg" alt="Video">
							<span class="play-button">
								<svg width="46.5px" height="46.5px" viewBox="0 0 46.5 46.5">
									<path class="ring" d="M23.2,46.5C10.4,46.5,0,36.1,0,23.3S10.4,0,23.2,0c12.8,0,23.2,10.4,23.2,23.3S36.1,46.5,23.2,46.5z M23.2,1
										C11,1,1,11,1,23.3c0,12.3,10,22.3,22.2,22.3c12.3,0,22.2-10,22.2-22.3C45.5,11,35.5,1,23.2,1z"/>
									<path class="circle" fill-rule="evenodd" clip-rule="evenodd" d="M23,5.2c10.1,0,18.3,8.2,18.3,18.3c0,10.1-8.2,18.3-18.3,18.3
										c-10.1,0-18.3-8.2-18.3-18.3C4.7,13.3,12.9,5.2,23,5.2z"/>
									<path class="icon" d="M18.2,31.8c0.1,0,0.2,0,0.3-0.1l12-7.5c0.1-0.1,0.2-0.3,0.2-0.4c0-0.2-0.1-0.3-0.2-0.4l-12-7.5
										c-0.2-0.1-0.3-0.1-0.5,0c-0.2,0.1-0.3,0.3-0.3,0.4v15c0,0.2,0.1,0.3,0.3,0.4C18.1,31.8,18.2,31.8,18.2,31.8z M18.7,17.2l10.6,6.6
										l-10.6,6.6V17.2z"/>
									</svg>
							</span>
						</a>					
					</div>
					<!--START PEOPLE ALSO BOUGHT SECTION -->
					<div class="section articles with-icon">
						<div class="title">
							<div class="icon">
									<svg width="220px" height="220px" viewBox="0 0 220 220">									 
	<path fill="#E50066" d="M110,0c60.8,0,110,49.2,110,110s-49.2,110-110,110S0,170.8,0,110S49.2,0,110,0"/>
	<path fill="#FFFFFF" d="M44.1,99.4c0-3.9-2.6-6.4-6.6-6.4h-7.7v12.8h7.7C41.9,105.8,44.1,103.6,44.1,99.4 M37.5,104.4h-6.2v-10h6.2
		c3.1,0,5.1,2,5.1,5C42.6,102.5,40.9,104.4,37.5,104.4 M37.7,90.5H27.2V118h1.5V92h9c4.5,0,7.6,2.9,7.6,7.3c0,4.6-2.9,7.5-7.7,7.5
		h-7.8V118h1.5v-9.7h6.3c5.8,0,9.1-3.4,9.1-9C46.7,93.9,43.1,90.5,37.7,90.5 M64.2,92.5c-7.5,0-10.6,5.9-10.6,11.8
		c0,5.8,3.2,11.8,10.7,11.8c7.5,0,10.6-5.9,10.6-11.8C74.9,98.5,71.7,92.5,64.2,92.5 M64.3,114.6c-6.4,0-9.1-5.3-9.1-10.3
		c0-5.1,2.7-10.3,9-10.3c6.4,0,9.1,5.3,9.1,10.3C73.3,109.3,70.6,114.6,64.3,114.6 M64.2,90c-9,0-13.4,6.8-13.4,14.2
		c0,7.5,4.4,14.3,13.5,14.3c9,0,13.4-6.8,13.4-14.2C77.7,96.8,73.2,90,64.2,90 M64.3,117c-8,0-11.9-6.1-11.9-12.8
		c0-6.6,3.9-12.7,11.8-12.7c8,0,11.9,6.1,11.9,12.8C76.1,110.9,72.3,117,64.3,117 M113.9,90.5l-7,26.2h-1.8l-6.5-23.6L92,116.7h-1.7
		l-7-26.2h-1.6l7.4,27.7h4.1L98.6,98l5.3,20.2h4.2l7.5-27.7H113.9z M97.8,92h1.7l6.5,23.5l6.6-25h-1.6L106,111l-5.2-20.5h-4.1
		l-5.5,20.5l-4.9-20.5h-1.6l6.4,25L97.8,92z M133.2,90.5h-11.1V118h11.1c8.6,0,13-6.2,13-13.8C146.2,96.7,142.1,90.5,133.2,90.5
		 M133.2,116.5h-9.6V92h9.6c7.9,0,11.5,5.6,11.5,12.2C144.7,110.9,140.8,116.5,133.2,116.5 M132.9,93.1h-8.2v22.4h8.2
		c6.9,0,10.5-4.6,10.5-11.2C143.4,97.4,139.3,93.1,132.9,93.1 M132.9,114h-6.7V94.5h6.7c5.5,0,9,3.8,9,9.7
		C141.9,110,138.9,114,132.9,114 M153.8,92h15.5v-1.5h-17V118h17.8v-1.5h-16.3L153.8,92z M169.3,94.5v-1.5h-14.4v10.2H168v-1.4h-11.6
		v-7.3H169.3z M156.4,105.7H168v-1.4h-13.2v11.2h15.2V114h-13.7L156.4,105.7L156.4,105.7L156.4,105.7z M191.4,106.5
		c3.1-1,5.5-3.5,5.5-7.8c0-5.2-3.9-8.1-8.7-8.1h-10.5V118h1.5V92h9c3.9,0,7.2,2.5,7.2,6.7c0,4.6-3.4,6.6-6.5,6.9l8.5,12.4h1.9
		L191.4,106.5z M180.4,105.6V118h1.5v-11h4.9l7.2,11h1.8l-8.3-12.4H180.4z M194.2,98.7c0-3.6-2.7-5.7-6.1-5.7h-7.7v11.7h7.5
		C191.5,104.7,194.2,102.9,194.2,98.7 M181.9,94.4h6.2c2.6,0,4.6,1.6,4.6,4.3c0,3.1-2,4.5-4.8,4.5h-5.9V94.4z M73.8,131
		c0-5.2-3.9-8.1-8.7-8.1H54.7v27.4h1.5v-26h9c3.9,0,7.2,2.5,7.2,6.7c0,4.6-3.4,6.6-6.5,6.9l8.5,12.4h1.9l-7.9-11.5
		C71.5,137.7,73.8,135.3,73.8,131 M57.3,137.9v12.4h1.5v-11h4.9l7.2,11h1.8l-8.3-12.4H57.3z M71.1,131c0-3.6-2.7-5.7-6.1-5.7h-7.7
		V137h7.5C68.4,137,71.1,135.2,71.1,131 M58.8,126.8H65c2.6,0,4.6,1.6,4.6,4.3c0,3.1-2,4.5-4.8,4.5h-5.9V126.8z M93.7,122.3
		c-9,0-13.4,6.8-13.4,14.2c0,7.5,4.4,14.3,13.5,14.3c9,0,13.4-6.8,13.4-14.2C107.1,129.1,102.7,122.3,93.7,122.3 M93.7,149.4
		c-8,0-11.9-6.1-11.9-12.8c0-6.6,3.9-12.7,11.8-12.7c8,0,11.9,6.1,11.9,12.8C105.6,143.2,101.7,149.4,93.7,149.4 M93.7,124.8
		c-7.5,0-10.6,5.9-10.6,11.8c0,5.8,3.2,11.8,10.7,11.8c7.5,0,10.6-5.9,10.6-11.8C104.3,130.8,101.1,124.8,93.7,124.8 M93.7,146.9
		c-6.4,0-9.1-5.3-9.1-10.3c0-5.1,2.7-10.3,9-10.3c6.4,0,9.1,5.3,9.1,10.3C102.8,141.7,100,146.9,93.7,146.9 M124.2,124.8
		c-7.5,0-10.6,5.9-10.6,11.8c0,5.8,3.2,11.8,10.7,11.8c7.5,0,10.6-5.9,10.6-11.8C134.9,130.8,131.7,124.8,124.2,124.8 M124.3,146.9
		c-6.4,0-9.1-5.3-9.1-10.3c0-5.1,2.7-10.3,9-10.3c6.4,0,9.1,5.3,9.1,10.3C133.3,141.7,130.6,146.9,124.3,146.9 M124.2,122.3
		c-9,0-13.4,6.8-13.4,14.2c0,7.5,4.4,14.3,13.5,14.3c9,0,13.4-6.8,13.4-14.2C137.7,129.1,133.2,122.3,124.2,122.3 M124.3,149.4
		c-8,0-11.9-6.1-11.9-12.8c0-6.6,3.9-12.7,11.8-12.7c8,0,11.9,6.1,11.9,12.8C136.1,143.2,132.3,149.4,124.3,149.4 M156.1,140.9
		l-9.8-15.1v24.5h1.5V131l7.5,11.5h2.9l7.4-11.5v19.3h1.5v-24.4l-9.6,15H156.1z M156.8,137.4l-9.3-14.5h-3.7v27.4h1.5v-26h1.4
		l10.1,15.6l10-15.6h1.5v26h1.5v-27.4H166L156.8,137.4z M89.8,78c0.7,0,1.5-0.2,2.5-0.7c1.4-0.6,2.8-1.7,4.4-3.2v-3.1
		c-1.3,1.4-2.6,2.5-3.7,3.3c-0.9,0.6-1.6,0.9-1.9,0.9c-0.7,0-1.1-1-1.1-3.1c0-0.7,0.1-1.6,0.3-2.5c0.2-1,0.4-2,0.8-3.3l0.2-0.6h3.7
		l0.4-2.1l-3.3,0l2.5-7.7l-3,0l-2.7,8c-0.4,0.1-0.8,0.1-1.1,0.2c-0.3,0.1-0.5,0.2-0.5,0.4L87,65.9l1.1-0.2l-0.3,1.1
		c-0.5,1.6-0.7,2.8-0.9,3.5c-0.1,0.7-0.2,1.5-0.2,2.5c0,1.6,0.3,2.8,0.8,3.8C88.2,77.5,88.9,78,89.8,78 M97.7,77.9h2.8l-0.1-3.3
		c0-0.7,0-1.2,0-1.5c0-0.4,0.1-0.9,0.1-1.5c1.4-1.7,2.7-3,3.9-3.9c1.2-0.9,2.1-1.4,2.7-1.4c0.4,0,0.6,0.3,0.6,0.8
		c0,0.7-0.3,1.9-1,3.7c-0.6,1.8-1,3.1-1,4.1c0,0.9,0.3,1.7,0.8,2.3c0.5,0.6,1.1,0.9,1.8,0.9c0.9,0,1.9-0.3,3-1
		c1.1-0.7,2.2-1.6,3.3-2.8v-3.1c-2.5,2.9-4.3,4.4-5.4,4.4c-0.4,0-0.6-0.3-0.6-0.8c0-0.9,0.3-2.2,0.9-3.9s0.9-3.1,0.9-4.1
		c0-1-0.2-1.7-0.5-2.3c-0.4-0.5-0.9-0.8-1.5-0.8c-0.5,0-1,0.1-1.5,0.3c-0.5,0.2-1.3,0.7-2.4,1.3c2.6-3.4,3.8-6.2,3.8-8.6
		c0-1-0.3-1.8-0.8-2.5c-0.5-0.6-1.2-1-1.9-1c-1.6,0-3.2,1.4-4.6,4.1c-1.2,2.2-2.2,5-3,8.4c-0.7,3-1,5.4-1,7.3c0,0.1,0.1,0.9,0.2,2.4
		C97.6,76.9,97.7,77.7,97.7,77.9 M102.8,59.9c1.1-2.9,2-4.3,2.8-4.3c0.5,0,0.7,0.4,0.7,1.3c0,1.3-0.4,2.8-1.3,4.6
		c-0.9,1.7-2.3,3.9-4.3,6.5C101.1,65.5,101.8,62.8,102.8,59.9 M119.1,78.1c3.5,0,7.1-1.3,10.8-4v-3c-1.9,1.7-3.6,2.8-5,3.6
		c-1.5,0.7-2.9,1.1-4.4,1.1c-0.8,0-1.5-0.4-1.8-1.1c-0.3-0.5-0.4-1.2-0.4-2v-0.1l0.8-0.3c2-0.8,3.4-1.5,4.3-2.2
		c1.7-1.2,2.5-2.6,2.5-4.3c0-1.8-1-2.7-2.9-2.7c-2,0-3.8,1-5.4,3s-2.3,4.3-2.3,7c0,1.3,0.3,2.5,1,3.5
		C116.9,77.6,117.8,78.1,119.1,78.1 M120.3,66.7c0.8-1,1.6-1.5,2.4-1.5c0.6,0,0.8,0.3,0.8,0.8c0,0.7-0.4,1.4-1.3,2.2
		c-0.9,0.7-2.1,1.4-3.6,1.9C118.9,68.8,119.4,67.7,120.3,66.7 M110,211.5l-0.7,0l0-3l0.7,0c0.7,0,1.5,0,2.2,0l0.1,3
		C111.5,211.5,110.8,211.5,110,211.5z M106.2,211.4c-1,0-2-0.1-3-0.2l0.2-3c1,0.1,2,0.1,3,0.2L106.2,211.4z M115.3,211.4l-0.2-3
		c1-0.1,2-0.1,2.9-0.2l0.2,3C117.4,211.2,116.4,211.3,115.3,211.4z M100.1,211c-1-0.1-2-0.2-3-0.3l0.4-3c1,0.1,2,0.2,2.9,0.3
		L100.1,211z M121.4,210.9l-0.3-3c1-0.1,2-0.2,2.9-0.4l0.4,3C123.4,210.6,122.4,210.8,121.4,210.9z M94.1,210.3c-1-0.2-2-0.3-3-0.5
		l0.6-2.9c1,0.2,1.9,0.3,2.9,0.5L94.1,210.3z M127.4,210l-0.5-3c1-0.2,1.9-0.4,2.9-0.5l0.6,2.9C129.4,209.6,128.4,209.8,127.4,210z
		 M88.1,209.1c-1-0.2-2-0.5-3-0.7l0.7-2.9c1,0.2,1.9,0.5,2.9,0.7L88.1,209.1z M133.4,208.8l-0.7-2.9c1-0.2,1.9-0.5,2.9-0.7l0.8,2.9
		C135.4,208.3,134.4,208.6,133.4,208.8z M82.2,207.6c-1-0.3-2-0.6-2.9-0.9l0.9-2.9c0.9,0.3,1.9,0.6,2.8,0.8L82.2,207.6z M139.3,207.2
		l-0.9-2.9c0.9-0.3,1.9-0.6,2.8-0.9l1,2.8C141.2,206.6,140.2,206.9,139.3,207.2z M76.4,205.8c-1-0.3-1.9-0.7-2.9-1.1l1.1-2.8
		c0.9,0.4,1.8,0.7,2.8,1L76.4,205.8z M145.1,205.3l-1-2.8c0.9-0.3,1.8-0.7,2.8-1.1l1.1,2.8C147,204.6,146,204.9,145.1,205.3z
		 M70.7,203.6c-0.9-0.4-1.9-0.8-2.8-1.2l1.2-2.7c0.9,0.4,1.8,0.8,2.7,1.2L70.7,203.6z M150.7,203l-1.2-2.7c0.9-0.4,1.8-0.8,2.7-1.2
		l1.3,2.7C152.5,202.2,151.6,202.6,150.7,203z M65.1,201.1c-0.9-0.5-1.8-0.9-2.7-1.4l1.4-2.6c0.9,0.5,1.7,0.9,2.6,1.3L65.1,201.1z
		 M156.2,200.4l-1.4-2.7c0.9-0.4,1.7-0.9,2.6-1.4l1.4,2.6C158,199.5,157.1,200,156.2,200.4z M59.8,198.2c-0.9-0.5-1.8-1-2.6-1.6
		l1.6-2.6c0.8,0.5,1.7,1,2.5,1.5L59.8,198.2z M161.5,197.5l-1.5-2.6c0.8-0.5,1.7-1,2.5-1.5l1.6,2.5
		C163.2,196.4,162.4,197,161.5,197.5z M54.6,195c-0.9-0.6-1.7-1.1-2.5-1.7l1.7-2.5c0.8,0.6,1.6,1.1,2.4,1.7L54.6,195z M166.6,194.2
		l-1.7-2.5c0.8-0.5,1.6-1.1,2.4-1.7l1.8,2.4C168.3,193.1,167.5,193.7,166.6,194.2z M49.6,191.5c-0.8-0.6-1.6-1.2-2.4-1.9l1.9-2.4
		c0.8,0.6,1.6,1.2,2.3,1.8L49.6,191.5z M171.6,190.7l-1.8-2.4c0.8-0.6,1.6-1.2,2.3-1.8l1.9,2.3C173.2,189.5,172.4,190.1,171.6,190.7z
		 M44.8,187.8c-0.8-0.7-1.5-1.3-2.3-2l2-2.2c0.7,0.7,1.5,1.3,2.2,1.9L44.8,187.8z M176.3,186.9l-2-2.3c0.7-0.6,1.5-1.3,2.2-2l2,2.2
		C177.8,185.5,177.1,186.2,176.3,186.9z M40.2,183.7c-0.7-0.7-1.5-1.4-2.2-2.1l2.1-2.1c0.7,0.7,1.4,1.4,2.1,2.1L40.2,183.7z
		 M180.8,182.7l-2.1-2.2c0.7-0.7,1.4-1.4,2.1-2.1l2.2,2.1C182.2,181.3,181.5,182,180.8,182.7z M35.9,179.4c-0.7-0.7-1.4-1.5-2-2.3
		l2.2-2c0.7,0.7,1.3,1.5,2,2.2L35.9,179.4z M185,178.4l-2.2-2c0.7-0.7,1.3-1.5,2-2.2l2.3,2C186.4,176.9,185.7,177.6,185,178.4z
		 M31.9,174.8c-0.6-0.8-1.3-1.6-1.9-2.4l2.4-1.8c0.6,0.8,1.2,1.5,1.9,2.3L31.9,174.8z M189,173.8l-2.3-1.9c0.6-0.8,1.2-1.5,1.8-2.3
		l2.4,1.8C190.2,172.2,189.6,173,189,173.8z M28.2,170.1c-0.6-0.8-1.2-1.6-1.8-2.5l2.5-1.7c0.6,0.8,1.1,1.6,1.7,2.4L28.2,170.1z
		 M192.7,168.9l-2.4-1.7c0.6-0.8,1.1-1.6,1.7-2.4l2.5,1.7C193.8,167.2,193.3,168.1,192.7,168.9z M24.7,165.1
		c-0.5-0.9-1.1-1.7-1.6-2.6l2.6-1.6c0.5,0.8,1,1.7,1.6,2.5L24.7,165.1z M196.1,163.8l-2.5-1.6c0.5-0.8,1-1.7,1.5-2.5l2.6,1.5
		C197.1,162.1,196.6,163,196.1,163.8z M21.6,159.9c-0.5-0.9-1-1.8-1.5-2.7l2.7-1.4c0.5,0.9,0.9,1.7,1.4,2.6L21.6,159.9z M199.1,158.6
		l-2.6-1.4c0.5-0.9,0.9-1.7,1.4-2.6l2.7,1.4C200.1,156.8,199.6,157.7,199.1,158.6z M18.7,154.5c-0.4-0.9-0.9-1.8-1.3-2.7l2.7-1.2
		c0.4,0.9,0.8,1.8,1.3,2.7L18.7,154.5z M201.9,153.1l-2.7-1.3c0.4-0.9,0.8-1.8,1.2-2.7l2.8,1.2C202.8,151.3,202.3,152.2,201.9,153.1z
		 M16.2,148.9c-0.4-0.9-0.8-1.9-1.1-2.8l2.8-1.1c0.4,0.9,0.7,1.8,1.1,2.7L16.2,148.9z M204.3,147.5l-2.8-1.1c0.4-0.9,0.7-1.8,1.1-2.8
		l2.8,1C205.1,145.6,204.7,146.6,204.3,147.5z M14.1,143.3c-0.3-1-0.7-1.9-1-2.9l2.9-0.9c0.3,0.9,0.6,1.9,0.9,2.8L14.1,143.3z
		 M206.4,141.8l-2.8-0.9c0.3-0.9,0.6-1.9,0.9-2.8l2.9,0.9C207,139.9,206.7,140.8,206.4,141.8z M12.3,137.5c-0.3-1-0.5-2-0.8-2.9
		l2.9-0.7c0.2,1,0.5,1.9,0.8,2.9L12.3,137.5z M208.1,136l-2.9-0.8c0.3-1,0.5-1.9,0.7-2.9l2.9,0.7C208.7,134,208.4,135,208.1,136z
		 M10.8,131.5c-0.2-1-0.4-2-0.6-3l3-0.5c0.2,1,0.4,1.9,0.6,2.9L10.8,131.5z M209.5,130l-2.9-0.6c0.2-1,0.4-1.9,0.5-2.9l3,0.5
		C209.9,128,209.7,129,209.5,130z M9.7,125.6c-0.2-1-0.3-2-0.4-3l3-0.4c0.1,1,0.3,2,0.4,2.9L9.7,125.6z M210.5,124l-3-0.4
		c0.1-1,0.3-2,0.4-2.9l3,0.3C210.8,122,210.7,123,210.5,124z M8.9,119.5c-0.1-1-0.2-2-0.2-3l3-0.2c0.1,1,0.1,2,0.2,2.9L8.9,119.5z
		 M211.2,118l-3-0.2c0.1-1,0.1-2,0.2-2.9l3,0.1C211.3,116,211.3,117,211.2,118z M8.6,113.4c0-1-0.1-2-0.1-3l3,0c0,1,0,2,0.1,3
		L8.6,113.4z M211.5,111.9l-3-0.1c0-0.6,0-1.2,0-1.8l0-1.1l3,0l0,1.1C211.5,110.6,211.5,111.3,211.5,111.9z M11.5,107.4l-3-0.1
		c0-1,0.1-2,0.1-3l3,0.2C11.6,105.5,11.6,106.4,11.5,107.4z M208.4,105.9c0-1-0.1-2-0.2-2.9l3-0.2c0.1,1,0.1,2,0.2,3L208.4,105.9z
		 M11.9,101.5l-3-0.3c0.1-1,0.2-2,0.3-3l3,0.3C12,99.6,11.9,100.6,11.9,101.5z M208,100c-0.1-1-0.2-2-0.3-2.9l3-0.4
		c0.1,1,0.2,2,0.3,3L208,100z M12.5,95.7l-3-0.4c0.1-1,0.3-2,0.5-3l3,0.5C12.8,93.7,12.7,94.7,12.5,95.7z M207.2,94.2
		c-0.2-1-0.3-1.9-0.5-2.9l2.9-0.6c0.2,1,0.4,2,0.5,3L207.2,94.2z M13.6,89.9l-2.9-0.6c0.2-1,0.4-2,0.7-3l2.9,0.7
		C14,87.9,13.8,88.9,13.6,89.9z M206.1,88.4c-0.2-1-0.4-1.9-0.7-2.9l2.9-0.7c0.3,1,0.5,2,0.7,3L206.1,88.4z M14.9,84.1L12,83.3
		c0.3-1,0.5-2,0.8-2.9l2.9,0.9C15.5,82.2,15.2,83.2,14.9,84.1z M204.7,82.7c-0.3-0.9-0.6-1.9-0.9-2.8l2.9-0.9c0.3,1,0.6,1.9,0.9,2.9
		L204.7,82.7z M16.7,78.4l-2.8-1c0.3-1,0.7-1.9,1-2.9l2.8,1C17.3,76.6,17,77.5,16.7,78.4z M202.8,77c-0.3-0.9-0.7-1.9-1-2.8l2.8-1.1
		c0.4,0.9,0.7,1.9,1.1,2.9L202.8,77z M18.7,72.9l-2.8-1.1c0.4-0.9,0.8-1.9,1.2-2.8l2.7,1.2C19.5,71.1,19.1,72,18.7,72.9z M200.7,71.5
		c-0.4-0.9-0.8-1.8-1.2-2.7l2.7-1.3c0.4,0.9,0.8,1.8,1.2,2.8L200.7,71.5z M21.1,67.5l-2.7-1.3c0.4-0.9,0.9-1.8,1.4-2.7l2.7,1.4
		C22,65.7,21.6,66.6,21.1,67.5z M198.2,66.2c-0.4-0.9-0.9-1.8-1.4-2.6l2.6-1.4c0.5,0.9,0.9,1.8,1.4,2.7L198.2,66.2z M23.8,62.2
		l-2.6-1.5c0.5-0.9,1-1.8,1.5-2.6l2.6,1.5C24.8,60.5,24.3,61.4,23.8,62.2z M195.5,61c-0.5-0.9-1-1.7-1.5-2.5l2.6-1.6
		c0.5,0.9,1,1.7,1.6,2.6L195.5,61z M26.9,57.1l-2.5-1.6c0.5-0.9,1.1-1.7,1.7-2.5l2.5,1.7C27.9,55.5,27.4,56.3,26.9,57.1z M192.4,56
		c-0.5-0.8-1.1-1.6-1.7-2.4l2.5-1.7c0.6,0.8,1.2,1.7,1.7,2.5L192.4,56z M30.2,52.2l-2.4-1.8c0.6-0.8,1.2-1.6,1.8-2.4l2.4,1.8
		C31.4,50.7,30.8,51.4,30.2,52.2z M189,51.1c-0.6-0.8-1.2-1.6-1.8-2.3l2.3-1.9c0.6,0.8,1.2,1.6,1.9,2.4L189,51.1z M33.8,47.6
		l-2.3-1.9c0.6-0.8,1.3-1.6,2-2.3l2.3,2C35.1,46.1,34.4,46.8,33.8,47.6z M185.3,46.5c-0.6-0.8-1.3-1.5-1.9-2.2l2.2-2
		c0.7,0.8,1.3,1.5,2,2.3L185.3,46.5z M37.7,43.1l-2.2-2c0.7-0.7,1.4-1.5,2.1-2.2l2.1,2.1C39,41.7,38.4,42.4,37.7,43.1z M181.4,42.1
		c-0.7-0.7-1.4-1.4-2.1-2.1l2.1-2.1c0.7,0.7,1.4,1.4,2.1,2.2L181.4,42.1z M41.8,38.9l-2.1-2.2c0.7-0.7,1.5-1.4,2.2-2.1l2,2.2
		C43.3,37.5,42.5,38.2,41.8,38.9z M177.2,38c-0.7-0.7-1.5-1.3-2.2-2l2-2.3c0.8,0.7,1.5,1.4,2.3,2L177.2,38z M46.2,34.9l-1.9-2.3
		c0.8-0.7,1.6-1.3,2.3-1.9l1.9,2.3C47.7,33.7,47,34.3,46.2,34.9z M172.7,34.1c-0.8-0.6-1.5-1.2-2.3-1.8l1.8-2.4
		c0.8,0.6,1.6,1.3,2.4,1.9L172.7,34.1z M50.8,31.2L49,28.9c0.8-0.6,1.6-1.2,2.5-1.8l1.7,2.5C52.4,30.1,51.6,30.7,50.8,31.2z
		 M168.1,30.4c-0.8-0.6-1.6-1.2-2.4-1.7l1.7-2.5c0.8,0.6,1.7,1.2,2.5,1.8L168.1,30.4z M55.6,27.8L54,25.3c0.8-0.6,1.7-1.1,2.6-1.6
		l1.6,2.5C57.3,26.8,56.5,27.3,55.6,27.8z M163.2,27.1c-0.8-0.5-1.7-1.1-2.5-1.6l1.5-2.6c0.9,0.5,1.7,1.1,2.6,1.6L163.2,27.1z
		 M60.7,24.7l-1.5-2.6c0.9-0.5,1.8-1,2.6-1.5l1.4,2.6C62.4,23.8,61.5,24.2,60.7,24.7z M158.1,24c-0.9-0.5-1.7-1-2.6-1.4l1.4-2.7
		c0.9,0.5,1.8,1,2.7,1.5L158.1,24z M65.8,21.9l-1.3-2.7c0.9-0.5,1.8-0.9,2.7-1.3l1.3,2.7C67.6,21.1,66.7,21.5,65.8,21.9z M152.9,21.3
		c-0.9-0.4-1.8-0.8-2.7-1.2l1.2-2.7c0.9,0.4,1.9,0.8,2.8,1.3L152.9,21.3z M71.2,19.4L70,16.7c0.9-0.4,1.9-0.8,2.8-1.2l1.1,2.8
		C73,18.7,72.1,19.1,71.2,19.4z M147.5,18.9c-0.9-0.4-1.8-0.7-2.8-1.1l1.1-2.8c1,0.4,1.9,0.7,2.8,1.1L147.5,18.9z M76.7,17.3l-1-2.8
		c1-0.3,1.9-0.7,2.9-1l0.9,2.9C78.5,16.6,77.6,16.9,76.7,17.3z M141.9,16.8c-0.9-0.3-1.9-0.6-2.8-0.9L140,13c1,0.3,1.9,0.6,2.9,0.9
		L141.9,16.8z M82.3,15.5l-0.8-2.9c1-0.3,2-0.6,2.9-0.8l0.8,2.9C84.2,14.9,83.2,15.2,82.3,15.5z M136.3,15c-0.9-0.3-1.9-0.5-2.9-0.7
		l0.7-2.9c1,0.2,2,0.5,2.9,0.8L136.3,15z M88,14L87.3,11c1-0.2,2-0.4,3-0.6l0.6,2.9C89.9,13.5,89,13.7,88,14z M130.5,13.6
		c-1-0.2-1.9-0.4-2.9-0.6l0.5-3c1,0.2,2,0.4,3,0.6L130.5,13.6z M93.8,12.8l-0.5-3c1-0.2,2-0.3,3-0.5l0.4,3
		C95.7,12.5,94.8,12.7,93.8,12.8z M124.7,12.6c-1-0.1-1.9-0.3-2.9-0.4l0.4-3c1,0.1,2,0.3,3,0.4L124.7,12.6z M99.7,12l-0.3-3
		c1-0.1,2-0.2,3-0.3l0.2,3C101.6,11.8,100.6,11.9,99.7,12z M118.9,11.9c-1-0.1-2-0.2-2.9-0.2l0.2-3c1,0.1,2,0.1,3,0.2L118.9,11.9z
		 M105.5,11.6l-0.1-3c1,0,2-0.1,3-0.1l0,3C107.5,11.5,106.5,11.6,105.5,11.6z M113,11.5c-1,0-2,0-3,0v-3c1,0,2,0,3,0L113,11.5z"/>
	</svg>

								</div>
								<h2>Stories from The Powder Room</h2>
							
						</div>						
						<div class="row">
							<div class="col-sm-6">
								<div class="article">
									<div class="article-thumbnail">
										<img src="templates/images/retail/products-landing/article.jpg" alt="Article"/>
									</div>
									<div class="article-description">
										<h3>Article Title</h3>
										<p>Sassy and chic, Milli embodies fashion - setting the standard for in Vogue  tapware design. Inspired by the beauty.</p>
									</div>
									<a href="#" class="btn black-button">Read More</a>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="article">
									<div class="article-thumbnail">
										<img src="templates/images/retail/products-landing/article.jpg" alt="Article"/>
									</div>
									<div class="article-description">
										<h3>Article Title</h3>
										<p>Sassy and chic, Milli embodies fashion - setting the standard for in Vogue  tapware design. Inspired by the beauty.</p>
									</div>
									<a href="#" class="btn black-button">Read More</a>
								</div>
							</div>
						</div>						
					</div>
					<!--END PEOPLE ALSO BOUGHT SECTION -->
					<div class="section">
						<h2>Browse by Category</h2>
						<div class="categories absolute-title">
							<div class="category">
								<a href="#" class="dark-bg">
									<img src="templates/images/retail/products-landing/bathroom.jpg" alt="Bathroom"/>
									<div class="title"><span>Bathroom</span></div>
								</a>
							</div>
							<div class="category">
								<a href="#" class="dark-bg">
									<img src="templates/images/retail/products-landing/kitchen.jpg" alt="Kitchen"/>
									<div class="title"><span>Kitchen</span></div>
								</a>
							</div>
							<div class="category">
								<a href="#">
									<img src="templates/images/retail/products-landing/laundry.jpg" alt="Laundry"/>
									<div class="title"><span>Laundry</span></div>
								</a>
							</div>
							<div class="category">
								<a href="#">
									<img src="templates/images/retail/products-landing/commercial.jpg" alt="Commercial"/>
									<div class="title"><span>Commercial</span></div>
								</a>
							</div>							
						</div>
					</div>
					<!-- Section  -->
					<div class="section brands">
						<h2>Browse by Brand</h2>
						<div class="brands-slider slider" data-slides-to-show="3">
							<div class="slide brand">
								<a href="#">
									<img src="templates/images/retail/products-landing/kado.jpg" alt="Kado"/>
									<div class="title"><span>Kado</span></div>
								</a>
							</div>
							<div class="slide brand">
								<a href="#" class="dark-bg">
									<img src="templates/images/retail/products-landing/laufen.jpg" alt="laufen"/>
									<div class="title"><span>Laufen</span></div>
								</a>
							</div>
							<div class="slide brand">
								<a href="#" class="dark-bg">
									<img src="templates/images/retail/products-landing/roca.jpg" alt="Roca"/>
									<div class="title"><span>Roca</span></div>
								</a>
							</div>
							<div class="slide brand">
								<a href="#" class="dark-bg">
									<img src="templates/images/retail/products-landing/laufen.jpg" alt="Laufen"/>
									<div class="title"><span>Laufen</span></div>
								</a>
							</div>
							<div class="slide brand">
								<a href="#" class="dark-bg">
									<img src="templates/images/retail/products-landing/roca.jpg" alt="Roca"/>
									<div class="title"><span>Roca</span></div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>			
		</div>
	</div>
</div>
<!-- START Videos Lightbox -->
	<div id="video-lightbox" class="lightbox">
			<div class="lightbox-actions"><button type="button"><svg xmlns="http://www.w3.org/2000/svg" width="67.5px" height="67.5px" viewBox="0 0 67.5 67.5"><path d="M64.8,67.5c-0.7,0-1.4-0.3-1.9-0.8L0.8,4.6c-1.1-1.1-1.1-2.8,0-3.9c1.1-1.1,2.8-1.1,3.9,0l62.1,62.1c1.1,1.1,1.1,2.8,0,3.9C66.2,67.2,65.5,67.5,64.8,67.5z"/><path d="M2.7,67.5c-0.7,0-1.4-0.3-1.9-0.8c-1.1-1.1-1.1-2.8,0-3.9L62.9,0.8c1.1-1.1,2.8-1.1,3.9,0c1.1,1.1,1.1,2.8,0,3.9L4.6,66.7C4.1,67.2,3.4,67.5,2.7,67.5z"/></svg></button></div>
			<div class="video-lightbox-container lightbox-content">
			<div class="embed-responsive embed-responsive-16by9">
				<div id="video-lightbox-container" class="embed-responsive-item"></div>
			</div>
		</div>		
	</div>
	<!-- END Videos Lightbox -->
<!--END PRODUCTS LANDING -->