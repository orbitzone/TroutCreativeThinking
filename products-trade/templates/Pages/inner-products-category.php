<!--START BREAD CRUMB -->
<div class="breadcrumb-section bg-mid-grey section">
	<div class="breadcrumb-inner">
		<ul class="breadcrumbs">
			<li><a href="#">Products</a></li>
		</ul>
	</div>
</div>
<!--END BREAD CRUMB -->
<!--START PRICING BAR -->
<!--<div class="bg-light-blue section pricing">
	<div class="pricing-inner">
		<ul class="list-inline">
			<li><b>Pricing</b> Enter your postcode for current pricing. </li>
			<li class="postcode"><input type="number" name="userpostcode" placeholder="Postcode" minlength="4" maxlength="4" min="0" max="9999" pattern="[0-9]*" /></li>
		</ul>		
	</div>
</div>-->
<!--END PRICING BAR -->
<!--START PRODUCTS CATEGORY -->
<div class="main-section" id="products-category">
	<?php include "templates/Includes/Widget.php" ?>
	<div class="product-category-wrap">
		<!--START PRODUCT HERO SECTION -->
		<div class="section product-hero-section">
			<div class="container-fluid section-container">
				<div class="content-wrapper">
					<section class="category-content" role="main">
						<form action="" id="search">
							<input type="text" name="search" placeholder="Search Product">
							<button type="button" class="btn blue-button">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="20px" height="20px"><title>search</title> <circle fill-rule="evenodd" clip-rule="evenodd" fill="none" stroke="#000000" stroke-width="2.5" stroke-miterlimit="10" cx="14.6" cy="14.6" r="13.3"/> <line fill-rule="evenodd" clip-rule="evenodd" fill="none" stroke="#000000" stroke-width="2.5" stroke-linecap="round" stroke-miterlimit="10" x1="24.1" y1="24" x2="38.8" y2="38.8"/></svg>
							</button>
						</form>
						<div class="banner">
							<img src="templates/images/products-category/banner.jpg" alt="reece"/>
						</div>
						<div class="intro">
							<p>Introduction to product category copy. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam gravida sodales aliquet. Proin nec risus sit amet nunc sollicitudin ultrices ut vel nulla. Curabitur eu dignissim velit.</p>
							<a href="#">Learn More</a>
						</div>					
						<aside class="sidebar" role="complementary">
						<div class="trade-lists">
							<div class="list">
								<h3>Hot Lists</h3>
								<ul class="list-links list-unstyled">
									<li><a href="">Last 30 Days</a></li>
									<li><a href="">Top Rated</a></li>
									<li><a href="">Most Popular</a></li>
									<li><a href="">Last 60 Days</a></li>
									<li><a href="">Last 90 Days</a></li>
									<li><a href="">Top 5</a></li>
									<li><a href="">Top 100</a></li>
								</ul>
								<ul class="list-actions list-unstyled">
									<li><a href="#" class="see-all">See All</a></li>
								</ul>
							</div>
							<div class="list">
								<h3>Your Lists</h3>
								<ul class="list-unstyled">
									<li><a href="">123 Newry St</a></li>
									<li><a href="">86 Castles Rd</a></li>
									<li><a href="">Most Popular</a></li>
									<li><a href="">Plumbing Ideas</a></li>
									<li><a href="">160 Oxford St</a></li>
									<li><a href="">Client name</a></li>
								</ul>
								<ul class="list-actions list-unstyled">
									<li><a href="#" class="see-all">See All</a></li>
								</ul>
							</div>						
						</div>
						<div class="filters">
							<div class="filter">
								<h3>Filters</h3>
								<ul class="list-links list-unstyled">
									<li><a href="#" class="current"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20px" height="14.8px" viewBox="0 0 20 14.8">
											<path d="M2.5,4.9l7.5,7.4l-2.5,2.5L0,7.4L2.5,4.9z M17.5,0L20,2.5L7.5,14.8L5,12.3L17.5,0z"/>
										</svg></span>Valves</a></li>
									<li><a href="#" class="current"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20px" height="14.8px" viewBox="0 0 20 14.8">
											<path d="M2.5,4.9l7.5,7.4l-2.5,2.5L0,7.4L2.5,4.9z M17.5,0L20,2.5L7.5,14.8L5,12.3L17.5,0z"/>
										</svg></span>Pumps</a></li>
									<li><a href="#"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20px" height="14.8px" viewBox="0 0 20 14.8">
											<path d="M2.5,4.9l7.5,7.4l-2.5,2.5L0,7.4L2.5,4.9z M17.5,0L20,2.5L7.5,14.8L5,12.3L17.5,0z"/>
										</svg></span>Pipes &amp; Fittings</a></li>
									<li><a href="#"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20px" height="14.8px" viewBox="0 0 20 14.8">
											<path d="M2.5,4.9l7.5,7.4l-2.5,2.5L0,7.4L2.5,4.9z M17.5,0L20,2.5L7.5,14.8L5,12.3L17.5,0z"/>
										</svg></span>Hot Water Units</a></li>					

								</ul>
								<ul class="list-actions list-unstyled">
									<li><a href="#" class="clear-all">Clear All</a></li>
								</ul>
							</div>
							<div class="filter">
								<h3>Brand</h3>
								<ul class="list-links list-unstyled">
									<li><a href="#" class="current"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20px" height="14.8px" viewBox="0 0 20 14.8">
											<path d="M2.5,4.9l7.5,7.4l-2.5,2.5L0,7.4L2.5,4.9z M17.5,0L20,2.5L7.5,14.8L5,12.3L17.5,0z"/>
										</svg></span>Therman</a></li>
									<li><a href="#"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20px" height="14.8px" viewBox="0 0 20 14.8">
											<path d="M2.5,4.9l7.5,7.4l-2.5,2.5L0,7.4L2.5,4.9z M17.5,0L20,2.5L7.5,14.8L5,12.3L17.5,0z"/>
										</svg></span>Auspex</a></li>
									<li><a href="#"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20px" height="14.8px" viewBox="0 0 20 14.8">
											<path d="M2.5,4.9l7.5,7.4l-2.5,2.5L0,7.4L2.5,4.9z M17.5,0L20,2.5L7.5,14.8L5,12.3L17.5,0z"/>
										</svg></span>Rehau</a></li>
									<li><a href="#"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20px" height="14.8px" viewBox="0 0 20 14.8">
											<path d="M2.5,4.9l7.5,7.4l-2.5,2.5L0,7.4L2.5,4.9z M17.5,0L20,2.5L7.5,14.8L5,12.3L17.5,0z"/>
										</svg></span>Conex</a></li>
									<li><a href="#"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20px" height="14.8px" viewBox="0 0 20 14.8">
											<path d="M2.5,4.9l7.5,7.4l-2.5,2.5L0,7.4L2.5,4.9z M17.5,0L20,2.5L7.5,14.8L5,12.3L17.5,0z"/>
										</svg></span>Wolfen</a></li>
									<li><a href="#"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20px" height="14.8px" viewBox="0 0 20 14.8">
											<path d="M2.5,4.9l7.5,7.4l-2.5,2.5L0,7.4L2.5,4.9z M17.5,0L20,2.5L7.5,14.8L5,12.3L17.5,0z"/>
										</svg></span>Vada</a></li>
								</ul>
								<ul class="list-actions list-unstyled">
									<li><a href="#" class="show-more">Show More</a></li>
									<li><a href="#" class="clear-all">Clear All</a></li>
								</ul>
							</div>
							<div class="filter">
								<h3>Sub-Brand</h3>
								<ul class="list-links list-unstyled">
									<li><a href="#"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20px" height="14.8px" viewBox="0 0 20 14.8">
											<path d="M2.5,4.9l7.5,7.4l-2.5,2.5L0,7.4L2.5,4.9z M17.5,0L20,2.5L7.5,14.8L5,12.3L17.5,0z"/>
										</svg></span>Arc</a></li>
									<li><a href="#"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20px" height="14.8px" viewBox="0 0 20 14.8">
											<path d="M2.5,4.9l7.5,7.4l-2.5,2.5L0,7.4L2.5,4.9z M17.5,0L20,2.5L7.5,14.8L5,12.3L17.5,0z"/>
										</svg></span>Lorem</a></li>
									<li><a href="#"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20px" height="14.8px" viewBox="0 0 20 14.8">
											<path d="M2.5,4.9l7.5,7.4l-2.5,2.5L0,7.4L2.5,4.9z M17.5,0L20,2.5L7.5,14.8L5,12.3L17.5,0z"/>
										</svg></span>Ipsum</a></li>
									<li><a href="#"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20px" height="14.8px" viewBox="0 0 20 14.8">
											<path d="M2.5,4.9l7.5,7.4l-2.5,2.5L0,7.4L2.5,4.9z M17.5,0L20,2.5L7.5,14.8L5,12.3L17.5,0z"/>
										</svg></span>Dolor</a></li>
								</ul>
								<ul class="list-actions list-unstyled">
									<li><a href="#" class="show-more">Show More</a></li>
									<li><a href="#" class="clear-all">Clear All</a></li>
								</ul>
							</div>
							<div class="filter">
								<h3>Filter</h3>
								<ul class="list-links list-unstyled">
									<li><a href="#"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20px" height="14.8px" viewBox="0 0 20 14.8">
											<path d="M2.5,4.9l7.5,7.4l-2.5,2.5L0,7.4L2.5,4.9z M17.5,0L20,2.5L7.5,14.8L5,12.3L17.5,0z"/>
										</svg></span>Mollis</a></li>
									<li><a href="#"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20px" height="14.8px" viewBox="0 0 20 14.8">
											<path d="M2.5,4.9l7.5,7.4l-2.5,2.5L0,7.4L2.5,4.9z M17.5,0L20,2.5L7.5,14.8L5,12.3L17.5,0z"/>
										</svg></span>Pharetra</a></li>
									<li><a href="#"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20px" height="14.8px" viewBox="0 0 20 14.8">
											<path d="M2.5,4.9l7.5,7.4l-2.5,2.5L0,7.4L2.5,4.9z M17.5,0L20,2.5L7.5,14.8L5,12.3L17.5,0z"/>
										</svg></span>Adipiscing</a></li>
									<li><a href="#"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20px" height="14.8px" viewBox="0 0 20 14.8">
											<path d="M2.5,4.9l7.5,7.4l-2.5,2.5L0,7.4L2.5,4.9z M17.5,0L20,2.5L7.5,14.8L5,12.3L17.5,0z"/>
										</svg></span>Bidendum</a></li>
								</ul>
								<ul class="list-actions list-unstyled">
									<li><a href="#" class="show-more">Show More</a></li>
									<li><a href="#" class="clear-all">Clear All</a></li>
								</ul>
							</div>
						</div>
					</aside><!-- END SIDEBAR -->
						<div class="view-bar">
							<ul class="flex list-inline">
								<li class="view-options">
									<ul class="list-inline">
										<li>View
										<button type="button" data-option="grid" class="btn btn-icon active">
											<svg width="66" height="66" viewBox="0 0 66 66">
											<text x="0" y="0">Grid view</text>
											<path id="grid" d="M5,0h19c2.8,0,5,2.2,5,5v19c0,2.8-2.2,5-5,5H5c-2.8,0-5-2.2-5-5V5C0,2.2,2.2,0,5,0z M42,0h19c2.8,0,5,2.2,5,5v19
												c0,2.8-2.2,5-5,5H42c-2.8,0-5-2.2-5-5V5C37,2.2,39.2,0,42,0z M5,37h19c2.8,0,5,2.2,5,5v19c0,2.8-2.2,5-5,5H5c-2.8,0-5-2.2-5-5V42
												C0,39.2,2.2,37,5,37z M42,37h19c2.8,0,5,2.2,5,5v19c0,2.8-2.2,5-5,5H42c-2.8,0-5-2.2-5-5V42C37,39.2,39.2,37,42,37z"/>
											</svg>
										</button>
										<button type="button" data-option="list" class="btn btn-icon">
											<svg width="66" height="66" viewBox="0 0 66 66">
											<text x="0" y="0">List view</text>
											<path d="M3,0h60c1.7,0,3,1.3,3,3v6c0,1.7-1.3,3-3,3H3c-1.7,0-3-1.3-3-3V3C0,1.3,1.3,0,3,0z M3,18h60c1.7,0,3,1.3,3,3v6
												c0,1.7-1.3,3-3,3H3c-1.7,0-3-1.3-3-3v-6C0,19.4,1.3,18,3,18z M3,54h60c1.7,0,3,1.3,3,3v6c0,1.7-1.3,3-3,3H3c-1.7,0-3-1.3-3-3v-6
												C0,55.3,1.3,54,3,54z M3,36h60c1.7,0,3,1.3,3,3v6c0,1.7-1.3,3-3,3H3c-1.7,0-3-1.3-3-3v-6C0,37.3,1.3,36,3,36z"/>
											</svg>
										</button>
										</li>										
									</ul>
								</li>
								<li><label for="show-gst">Show GST <input type="checkbox" id="show-gst" /><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20px" height="14.8px" viewBox="0 0 20 14.8">
											<path d="M2.5,4.9l7.5,7.4l-2.5,2.5L0,7.4L2.5,4.9z M17.5,0L20,2.5L7.5,14.8L5,12.3L17.5,0z"/>
										</svg></span></label></li>
								<li>
								<select id="price-option" data-default="Show price">
										<option value="my" data-content="<span class='text-label'>Show: </span>My Price">My Price</option>
										<option value="cmp" data-content="<span class='text-label'>Show: </span>CMP Price">CMP Price</option>
										<option value="both" data-content="<span class='text-label'>Show: </span>Both">Both</option>
									</select>
									</li>
								<li>
									<span class="one-option dropdown-option span-block">
										<select id="sort-by-option" data-default="Sort">
											<option value="popularity" data-content="<span class='text-label'>Sort: </span>Popularity">Popularity</option>
											<option value="product-code" data-content="<span class='text-label'>Sort: </span>Product Code">Product Code</option>
											<option value="description" data-content="<span class='text-label'>Sort: </span>Description">Description</option>
										</select>
									</span>
									<span class="clear-fix"></span>
								</li>
							</ul>

						</div>					
						<div id="products" class="products">
							
						</div>
						<nav class="pagination-wrap">
							<ul class="pagination">
								<li>
						      <a href="#" aria-label="Previous">
						        <span aria-hidden="true">&laquo;</span>
						      </a>
						    </li>
						    <li><a href="#">1</a></li>
						    <li><span>...</span></li>
						    <li><a href="#">5</a></li>
						    <li class="active"><a href="#">6 <span class="sr-only">(current)</span></a></li>
						    <li><a href="#">7</a></li>
						    <li><span>...</span></li>
						    <li><a href="#">10</a></li>
						    <li>
						      <a href="#" aria-label="Next">
						        <span aria-hidden="true">&raquo;</span>
						      </a>
						    </li>
							</ul>
						</nav>
						<div class="results">
							<ul class="list-inline">
								<li><span class="total-results">10,086</span> Products found</li>
								<li>View 
									<select name="products_per_page" id="products-per-page">
										<option value="12">12</option>
										<option value="24">24</option>
										<option value="36">36</option>
										<option value="48">48</option>
									</select>
									Product per page
								</li>								
							</ul>
						</div>
					</section><!-- END MAIN -->
				</div><!-- END CONTENT WRAPPER -->
			</div>
		</div>
		<!--END PRODUCT HERO SECTION -->
	</div>
</div>
<!--END PRODUCTS CATEGORY -->