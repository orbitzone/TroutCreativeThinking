<!--START BREAD CRUMB -->
<div class="breadcrumb-section bg-mid-grey section">
	<div class="breadcrumb-inner">
		<ul class="breadcrumbs">
			<li><a href="#">Products</a></li>
            <li><a href="#">Pumps</a></li>
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
	<?php include "templates/includes/trade/Widget.php" ?>
		<!--START PRODUCT HERO SECTION -->
		<div class="product-category-wrap">
			<div class="container-fluid section-container">
				<div class="content-wrapper with-filters">
						<form action="" id="search">
							<input type="text" name="search" placeholder="Search Product">
							<button type="button" class="btn blue-button">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="20px" height="20px"><title>search</title> <circle fill-rule="evenodd" clip-rule="evenodd" fill="none" stroke="#000000" stroke-width="2.5" stroke-miterlimit="10" cx="14.6" cy="14.6" r="13.3"/> <line fill-rule="evenodd" clip-rule="evenodd" fill="none" stroke="#000000" stroke-width="2.5" stroke-linecap="round" stroke-miterlimit="10" x1="24.1" y1="24" x2="38.8" y2="38.8"/></svg>
							</button>
						</form>
						<div class="banner">
							<img src="templates/images/trade/products-category/banner.jpg" alt="reece"/>
						</div>
						<div class="intro">
							<p>Introduction to product category copy. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam gravida sodales aliquet. Proin nec risus sit amet nunc sollicitudin ultrices ut vel nulla. Curabitur eu dignissim velit.</p>
							<a href="#">Learn More</a>
						</div>					
						<?php include 'templates/includes/trade/filters.php';?>
						<div class="view-bar">
							<div class="view-bar-right">
								<ul class="list-inline">
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
							<div class="view-bar-left">
								<ul class="list-inline">
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
									<li class="show-gst">
										<label for="show-gst">Show GST <input type="checkbox" id="show-gst" checked="checked" /><span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20px" height="14.8px" viewBox="0 0 20 14.8">
												<path d="M2.5,4.9l7.5,7.4l-2.5,2.5L0,7.4L2.5,4.9z M17.5,0L20,2.5L7.5,14.8L5,12.3L17.5,0z"/>
											</svg></span>
										</label>
									</li>								
								</ul>
							</div>							
						</div>				
						<div id="products" class="products">
							
						</div>
						<?php include('templates/includes/Pagination.php');?>
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
				</div><!-- END CONTENT WRAPPER -->
			</div>
		<!--END PRODUCT HERO SECTION -->
	</div>
</div>
<!--END PRODUCTS CATEGORY -->