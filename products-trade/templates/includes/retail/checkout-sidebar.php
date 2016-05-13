<!--START OF SHOPPING CART SIDEBAR -->
<div id="cart-sidebar" class="padding-top section">
	<!--START OF MAIN HEADER -->
	<header class="mobile-open-cart-item">
		<div class="info-wrap">
			<div class="left-col">
				<h3 class="text-green">Shopping cart <span class="fa fa-angle-down"></span><span class="fa fa-angle-up"></span></h3>
			</div>
			<div class="right-col">
				<div class="edit-link hidden-xs">
					<a href="#">Edit</a>
				</div>
				<div class="total-price-header visible-xs-block">
					<p>Total: $1155.00</p>
				</div>
			</div>
			<div class="clear-fix"></div>
		</div>
	</header>
	<!--END OF MAIN HEADER -->
	<!--START OF MAIN BODY OF ORDER ITEMS -->
	<div class="order-item-wrap section">
		<div class="orders-wrap">
			<ul class="order-items">
				<!--LOOP THROUGH ITEMS-->
				<?php for($i=0;$i<4;$i++){ ?>
				<li>
					<div class="info-wrap">
						<div class="left-col">
								<div class="cart-thumbnail"><img src="templates/images/retail/shopping-cart/product1.jpg" alt="item"></div>
						</div>
						<div class="right-col">
							<div class="inner-right-col text-right">
								
							</div>
							<div class="inner-left-col text-left">
								<div class="quantity">x1</div>
								<div class="product-code">123456789</div>
								<div class="name">Lorem ipsum dolor sit amet</div>
								<div class="description">Lorem ipsum dolor sit amet</div>
							</div>
							<div class="inner-right-col text-right">
								<div class="price">$3458.45</div>
							</div>
							<div class="clear-fix"></div>
						</div>
						<div class="clear-fix"></div>
					</div>
				</li>
				<?php } ?>
				<!--END LOOP THROUGH ITEMS-->
			</ul>
		</div>
		<!--START OF SUMMARY SECTION -->
		<div class="total-section section">
			<div class="info-wrap">
				<div class="delivery">
					<div class="left-col">
						<div class="heading-text">Delivery fee</div>
					</div>
					<div class="right-col">
						<div class="heading-price text-right">$5.00</div>
					</div>
					<div class="clear-fix"></div>
				</div>
				<div class="gst">
					<div class="left-col">
						<div class="heading-text">GST</div>
					</div>
					<div class="right-col">
						<div class="heading-price text-right">$44.00</div>
					</div>
					<div class="clear-fix"></div>
				</div>
				<div class="total">
					<div class="left-col">
						<div class="heading-total">Total<span>inc. GST</span></div>
					</div>
					<div class="right-col">
						<div class="total text-right">$1155.00</div>
					</div>
					<div class="clear-fix"></div>
				</div>
			</div>
		</div>
		<!--END OF SUMMARY SECTION -->
		<!--START OF FOOTER INFO -->
		<footer>
			<div class="info-wrap">
				<div class="one-icon-info">
					<div class="icon">
						<svg width="56.4" height="80" viewBox="0 0 56.4 80">
							<path d="M28.2,80C14.2,80,0,76.4,0,68.4C0,64,2.7,41.8,14.9,35.3c-4.2-3.8-6.6-9.2-6.6-15C8.3,9.1,17.4,0,28.5,0
							c11.2,0,20.3,9.1,20.3,20.3c0,5.9-2.5,11.3-6.8,15.2c13.1,7.3,14.5,32.7,14.5,33C56.4,76.4,42.3,80,28.2,80z M28.5,3.3
							c-9.3,0-16.9,7.6-16.9,16.9c0,5.6,2.8,10.9,7.4,14.1l2.8,1.9l-3.3,1C11.9,39.3,8.2,47,6.2,53.1c-2.4,7.4-2.9,14.3-2.9,15.4
							c0,4.6,10.9,8.3,24.9,8.3c14,0,24.9-3.6,24.9-8.3c0-1-0.5-7.9-2.8-15.1c-1.9-6.1-5.6-13.8-12.1-15.9L35,36.3l2.9-1.9
							c4.8-3.2,7.6-8.5,7.6-14.2C45.5,10.9,37.9,3.3,28.5,3.3z M40.4,20h-3.3c0,5-3.9,8.7-8.7,8.7S19.6,25,19.6,20h-3.3
							c0,7,5.4,12.1,12.1,12.1S40.4,27,40.4,20z"/>
						</svg>
					</div>
					<p>A Reece consultant will be in touch within one working day.</p>
				</div>
				<div class="one-icon-info">
					<div class="icon">
						<svg width="80" height="80" viewBox="0 0 80 80">
							<path d="M40,80C17.9,80,0,62.1,0,40S17.9,0,40,0c22.1,0,40,17.9,40,40S62.1,80,40,80z M40,3.5C19.9,3.5,3.5,19.9,3.5,40
							c0,20.1,16.4,36.5,36.5,36.5c20.1,0,36.5-16.4,36.5-36.5C76.5,19.9,60.1,3.5,40,3.5z M63.9,38.4H41.6V12.1h-3.5v29.8h25.8V38.4z"/>
						</svg>
					</div>
					<p>Time frames will differ depending on product/s ordered.</p>
				</div>
				<div class="clear-fix"></div>
				<div class="one-icon-info">
					<div class="icon">
						<svg width="93.7px" height="80px" viewBox="0 0 93.7 80">
							<path d="M14.1,41.6c0-0.5,0-1,0-1.5c0-16,9.5-30.5,24.3-36.9c14.9-6.4,32.2-3,43.5,8.5C97.6,27.3,97.6,52.6,82,68.2
							C74.5,75.7,64.4,80,53.8,80c-5.3,0-10.6-1.1-15.5-3.1c-4.7-2-9-4.9-12.6-8.6c-0.8-0.8-0.8-2.2,0-3.1c0.8-0.8,2.2-0.8,3,0
							c0,0,0,0,0,0c13.7,13.8,36,13.9,49.8,0.2c0.1-0.1,0.2-0.2,0.2-0.2c13.8-14,13.9-36.5,0-50.4C65.2,0.9,42.9,0.9,29,14.6
							c-0.1,0.1-0.2,0.2-0.2,0.2C22.1,21.5,18.4,30.6,18.4,40c0,0.8,0,1.6,0.1,2.3l0,0l11.4-11.5c0.9-0.8,2.2-0.8,3.1,0c0,0,0,0,0,0
							c0.9,0.8,0.9,2.2,0.1,3.1L19,48.1c-0.2,0.7-0.9,1.3-1.6,1.4c-0.8,0.1-1.6-0.1-2.2-0.6L0.6,34.3c-0.8-0.9-0.8-2.3,0.1-3.1
							c0.8-0.9,2.2-0.9,3.1-0.1c0,0,0,0,0,0L14.1,41.6z"/>
						</svg>
					</div>
					<p><strong>EASY RETURNS</strong><br>400 locations</p>
				</div>
				<div class="one-icon-info">
					<div class="icon">
						<svg width="80.2px" height="80px" viewBox="0 0 80.2 80">
							<path d="M75.8,75.7c-3,3-7.5,5.3-13.7,4c-0.6-0.2-14.7-3.9-31.3-20.5l0,0c-3.2-3.2-9.7-9.7-9.7-9.7
							C4.5,32.9,0.7,18.8,0.4,18.3C-2,7.4,6.5,1.6,11.4,0.1C11.7,0,12,0,12.3,0c0.2,0,15.4,3.4,17.2,17.9c0,0.5-0.2,0.9-0.5,1.3
							c-2.8,3.1-6.1,7-6.9,8.6c1.7,2.2,7.3,9.2,9,10.9c0.1,0.1,7.1,7.6,10.1,10.1c1.8,1.5,9,7.2,11.1,9c3-2,5.8-4.3,8.5-6.8
							c0.4-0.3,0.9-0.5,1.4-0.4c14.6,1.8,18,17,18,17.2c0.1,0.3,0.1,0.6-0.1,0.9C79.2,71.2,77.8,73.7,75.8,75.7z M33.1,56.8
							c15.9,15.9,29.6,19.6,29.8,19.6c9.4,1.9,13.4-6.5,14.1-8.5c-0.6-2.2-3.8-12.2-14.3-14c-9.1,8.3-10.5,7.6-11.3,7.2
							C51.2,61,51.1,61,51,60.9c0,0-9.5-7.6-11.8-9.5c-3.1-2.6-10.1-10.1-10.4-10.4c-2.1-2.1-9.3-11.4-9.7-11.8c-0.1-0.1-0.2-0.2-0.2-0.3
							c-0.4-0.9-1.1-2.2,7.2-11.3C24.2,7,14.3,3.8,12,3.2C9.9,4,1.5,7.9,3.5,17.4c0,0,3.8,13.7,19.7,29.6l0,0
							C23.3,47.2,29.8,53.6,33.1,56.8L33.1,56.8L33.1,56.8z"/>
						</svg>
					</div>
					<p><strong>NEED ASSISTANCE?</strong><br>Call 1800 032 566</p>
				</div>
				<div class="clear-fix"></div>





			</div>
		</footer>
		<!--END OF FOOTER INFO -->
	</div>
	<!--END OF MAIN BODY OF ORDER ITEMS -->
</div>
<!--END OF SHOPPING CART SIDEBAR -->
