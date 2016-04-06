<!--START BREAD CRUMB -->
<div class="breadcrumb-section bg-mid-grey section">
	<div class="breadcrumb-inner">
		<ul class="breadcrumbs">
			<li><a href="#">Shopping Cart</a></li>
		</ul>
	</div>
</div>
<!--END BREAD CRUMB -->
<!--START SHOPPING CART -->
<section class="main-section" id="shopping-cart">
	<!--START PAGE TITLE -->
	<div class="section page-title">
		<div class="container-fluid section-container">
			<div class="row">
				<div class="col-xs-12">
					<div class="inner-wrap border-bottom border-light padding-top">
						<h1 class="text-blue">Shopping Cart</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--END PAGE TITLE -->
	<!--START SHOPPING CART LIST -->
	<div class="section shopping-cart-list">
		<form id="shopping-cart-form" action="checkout-cart.php">
			<!--START SHOPPING CART OPTIONS -->
			<div class="shopping-cart-options">
				<div class="container-fluid section-container">
					<div class="row">
						<div class="col-xs-4">
							<div class="inner-wrap">
								cmp
								gst
							</div>
						</div>
						<div class="col-xs-8 hidden-xs">
							<div class="inner-wrap text-right">
								<a href="#" class="btn grey-button small-width"><i class="fa fa-chevron-left"></i> Continue shopping</a>
								<input type="submit" value="Submit order" class="btn blue-button small-width">
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--END SHOPPING CART OPTIONS -->
			<!--START SHOPPING CART HEADING -->
			<div class="shopping-cart-listing shopping-cart-heading bg-table-header-grey hidden-xs">
				<div class="container-fluid section-container">
					<div class="row">
						<div class="col-xs-12">
							<div class="inner-wrap item-heading">
								<div class="item-data item-thumbnail">Item</div>
								<div class="item-data item-details"></div>
								<div class="item-data item-quantity">Qty</div>
								<div class="item-data item-unitprice">Unit price</div>
								<div class="item-data item-subtotal">Subtotal</div>
								<div class="item-data item-remove"></div>
								<div class="clear-fix"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--END SHOPPING CART HEADING -->
			<!--START SHOPPING CART LISTING -->
			<div class="shopping-cart-listing">
				<div class="container-fluid section-container">
					<div class="row">
						<div class="col-xs-12">
							<div class="inner-wrap item-listing">
								<?php for($i=0;$i<4;$i++){ ?>
								<div class="one-product border-bottom border-light">
									
									<div class="item-data item-thumbnail xs-left"><div class="item-inner"><div class="product-thumbnail"><img src="templates/images/product1.jpg"></div></div></div>
									
									<div class="item-data item-details xs-left">
										<div class="item-inner">
											<span class="product-code">45454545<?php echo $i ?></span>
											<span class="product-name">Thermann Electric Storage</span>
											<span class="product-description">Lorem ipsum dolor sit amet, consectetur adipisicing.</span>
										</div>
									</div>
									
									<div class="item-data item-quantity xs-left">
										<div class="item-inner">
											<span class="quantity-input">
												<input class="quantity-number" type="number" name="quantity-<?php echo $i ?>" min="1">
											</span>
											<span class="quantity-set">
												<input class="quantity-radio" type="radio" name="<?php echo $i ?>" value="EA">
												<input class="quantity-radio" type="radio" name="<?php echo $i ?>" value="PKT">
												<span class="quatity-details">Packet <span>12</span> Units</span>
											</span>
										</div>
									</div>
									
									<div class="item-data item-unitprice xs-right"><div class="item-inner"><div class="sub-heading visible-xs-block">Unit price</div>$444.99<span>inc</span></div></div>
									
									<div class="item-data item-subtotal xs-right"><div class="item-inner"><div class="sub-heading visible-xs-block">Subtotal</div>$888.99<span>inc</span></div></div>
									
									<div class="item-data item-remove hidden-xs"><div class="item-inner"><span class="remove-button action-remove-<?php echo $i ?>"> <i class="fa fa-times"></i> </span></div></div>
									
									<div class="clear-fix"></div>
								</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--END SHOPPING CART LISTING -->
			<!--START PRODUCT SUGGESTION -->
			<section class="product-suggestion hidden-xs bg-mid-grey">
				<div class="container-fluid section-container">
					<div class="row">
						<div class="col-sm-10 col-sm-offset-1">
							<div class="inner-wrap text-center">
								<h2>You may also need</h2>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-10 col-sm-offset-1">
							<div class="inner-wrap">
								<div class="row">
									<div class="col-xs-3">
										<div class="one-recommendation">
											<div class="product-thumbnail">
												<img src="templates/images/product1.jpg">
											</div>
											<div class="product-details">
												<span class="product-code">45454545</span>
												<span class="product-name">Thermann Electric Storage</span>
												<span class="product-description">Lorem ipsum dolor sit amet, consectetur adipisicing.</span>
											</div>
											<div class="add-button-wrap">
												<span class="action-add-product"><i class="fa fa-plus"></i></span>
											</div>
										</div>
									</div>
									<div class="col-xs-3">
										<div class="one-recommendation">
											<div class="product-thumbnail">
												<img src="templates/images/product1.jpg">
											</div>
											<div class="product-details">
												<span class="product-code">45454545</span>
												<span class="product-name">Thermann Electric Storage</span>
												<span class="product-description">Lorem ipsum dolor sit amet, consectetur adipisicing.</span>
											</div>
											<div class="add-button-wrap">
												<span class="action-add-product"><i class="fa fa-plus"></i></span>
											</div>
										</div>
									</div>
									<div class="col-xs-3">
										<div class="one-recommendation">
											<div class="product-thumbnail">
												<img src="templates/images/product1.jpg">
											</div>
											<div class="product-details">
												<span class="product-code">45454545</span>
												<span class="product-name">Thermann Electric Storage</span>
												<span class="product-description">Lorem ipsum dolor sit amet, consectetur adipisicing.</span>
											</div>
											<div class="add-button-wrap">
												<span class="action-add-product"><i class="fa fa-plus"></i></span>
											</div>
										</div>
									</div>
									<div class="col-xs-3">
										<div class="one-recommendation">
											<div class="product-thumbnail">
												<img src="templates/images/product1.jpg">
											</div>
											<div class="product-details">
												<span class="product-code">45454545</span>
												<span class="product-name">Thermann Electric Storage</span>
												<span class="product-description">Lorem ipsum dolor sit amet, consectetur adipisicing.</span>
											</div>
											<div class="add-button-wrap text-right">
												<span class="action-add-product"><i class="fa fa-plus"></i></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--END PRODUCT SUGGESTION -->
			<!--START SAVE AND TOTAL -->
			<div class="shopping-cart-listing">
				<div class="container-fluid section-container">
					<div class="row">
						<div class="col-xs-6">
							<div class="inner-wrap">
SAVE AS
							</div>
						</div>
						<div class="col-xs-6">
							<div class="inner-wrap">
SUB TOTAL
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--END SAVE AND TOTAL -->
		</form>
	</div>
	<!--END SHOPPING CART LIST -->
</section>
<!--END SHOPPING CART -->