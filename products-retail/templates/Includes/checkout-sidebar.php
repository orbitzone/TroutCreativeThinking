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
								<div class="cart-thumbnail"><img src="templates/images/product1.jpg" alt="item"></div>
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
					<div class="icon-image"><img src="templates/images/icon-person.png" alt="icon"></div>
					<p>A Reece consultant will be in touch within one working day.</p>
				</div>
				<div class="one-icon-info">
					<div class="icon-image"><img src="templates/images/icon-clock.png" alt="icon"></div>
					<p>Time frames will differ depending on product/s ordered.</p>
				</div>
				<div class="clear-fix"></div>
				<div class="one-icon-info">
					<div class="icon-image"><img src="templates/images/icon-return.png" alt="icon"></div>
					<p><strong>EASY RETURNS</strong><br>400 locations</p>
				</div>
				<div class="one-icon-info">
					<div class="icon-image"><img src="templates/images/icon-phone.png" alt="icon"></div>
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
