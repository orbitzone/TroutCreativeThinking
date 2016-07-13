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
<!--START PRODUCTS CATEGORY -->
<div class="main-section" id="products-category">
	<?php include "templates/includes/retail/Widget.php" ?>
		<!--START PRODUCT HERO SECTION -->
		<div class="section product-category-wrap">
			<div class="container-fluid section-container">
				<div class="content-wrapper with-filters">
					<section class="category-content" role="main">
						<form action="" id="search">
							<input type="text" name="search" placeholder="Search Product">
							<button type="button" class="btn blue-button">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="20px" height="20px"><title>search</title> <circle fill-rule="evenodd" clip-rule="evenodd" fill="none" stroke="#000000" stroke-width="2.5" stroke-miterlimit="10" cx="14.6" cy="14.6" r="13.3"/> <line fill-rule="evenodd" clip-rule="evenodd" fill="none" stroke="#000000" stroke-width="2.5" stroke-linecap="round" stroke-miterlimit="10" x1="24.1" y1="24" x2="38.8" y2="38.8"/></svg>
							</button>
						</form>
						<div class="banner">
							<img src="templates/images/retail/products-category/banner.jpg" alt="Banner"/>
						</div>
						<div class="intro">
							<p>Introduction to product category copy. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam gravida sodales aliquet. Proin nec risus sit amet nunc sollicitudin ultrices ut vel nulla. Curabitur eu dignissim velit.</p>
							<a href="#">Learn More</a>
						</div>					
						<?php include "templates/includes/retail/filters.php"; ?>
						<div class="view-bar">
							<div class="view-bar-right">
								<ul class="list-inline">
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
					</section><!-- END MAIN -->
				</div><!-- END CONTENT WRAPPER -->
			</div>
		<!--END PRODUCT HERO SECTION -->
	</div>
</div>
<!--END PRODUCTS CATEGORY -->