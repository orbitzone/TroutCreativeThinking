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
	<div class="section page-title bg-light-grey">
		<div class="container-fluid section-container">
			<div class="row">
				<div class="col-xs-12">
					<div class="inner-wrap border-bottom border-light padding-top">
						<h1 class="text-green">Shopping Cart</h1>
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
			<div class="shopping-cart-options bg-light-grey">
				<div class="container-fluid section-container">
					<div class="row">
						<div class="col-xs-12 col-sm-5">
							<div class="inner-wrap">
								<div id="cart-view-options">

<div class="one-option dropdown-option">
									<select id="cmp-option">
										<option value="cmp1">CMP1</option>
										<option value="cmp2">CMP2</option>
									</select>
</div>
<div class="one-option checkbox-option">

									GST <input type="checkbox" name="gst" value"gst">
</div>
<div class="clear-fix"></div>

								</div>
							</div>
						</div>
						<div class="col-sm-7 hidden-xs">
							<div class="inner-wrap text-right">
								<a href="#" class="btn grey-button small-width"><i class="fa fa-chevron-left"></i> Continue shopping</a>
								<input type="submit" value="Submit order" class="btn green-button small-width">
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
					<!--START LOOP CART ITEMS -->
					<?php for($i=0;$i<4;$i++){ ?>
					<div class="row border-bottom border-light">
						<div class="col-xs-12 col-xs-offset-0 col-sm-12 col-sm-offset-0">
							<div class="inner-wrap item-listing">
								<div class="one-product">
									<div class="item-data item-thumbnail xs-left xxs-full"><div class="item-inner"><div class="product-thumbnail"><img src="templates/images/product1.jpg"></div></div></div>
									<div class="item-data item-details xs-left xxs-full">
										<div class="item-inner">
											<span class="product-code">45454545<?php echo $i ?></span>
											<span class="product-name">Thermann Electric Storage</span>
											<span class="product-description">DWV 4 way riser M&F 555x22x22x333x22</span>
										</div>
									</div>
									<div class="item-data item-quantity xs-left">
										<div class="item-inner">



											<div class="quantity-wrap">







											<span class="quantity-hidden">
											<input class="quantity-radio" type="radio" id="set-<?php echo $i ?>-ea" name="set-<?php echo $i ?>" value="EA" checked>
													<input class="quantity-radio" type="radio" id="set-<?php echo $i ?>-pkt" name="set-<?php echo $i ?>" value="PKT">
											</span>
												<span class="quantity-input">
													<input class="quantity-number" type="number" name="quantity-<?php echo $i ?>" min="1" value="1">
												</span>

												<span class="quantity-set">
													<div class="radiolabel-set">
														<label for="set-<?php echo $i ?>-ea" class="radio-button active">EA</label>
														<label for="set-<?php echo $i ?>-pkt" class="radio-button">PKT</label>
														<div class="clear-fix"></div>
													</div>
													<span class="quantity-details">Packet <span>12</span> Units</span>
												</span>









											</div>
										</div>
									</div>
									<div class="item-data item-unitprice xs-right"><div class="item-inner"><div class="sub-heading visible-xs-block">Unit price</div>$444.99<span>inc</span></div></div>
									<div class="item-data item-subtotal xs-right"><div class="item-inner"><div class="sub-heading visible-xs-block">Subtotal</div>$888.99<span>inc</span></div></div>
									<div class="item-data item-remove"><div class="item-inner"><span class="remove-button action-remove-<?php echo $i ?>"> <i class="fa fa-times"></i> </span></div></div>
									<div class="clear-fix"></div>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
					<!--END LOOP CART ITEMS -->
				</div>
			</div>
			<!--END SHOPPING CART LISTING -->
			<!--START PRODUCT SUGGESTION -->
			<section class="product-suggestion hidden-xs bg-mid-grey">
				<div class="container-fluid section-container">
					<div class="row">
						<div class="col-sm-10 col-sm-offset-1">
							<div class="inner-wrap text-center">
								<h3>You may also need</h3>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-10 col-sm-offset-1">
							<div class="inner-wrap">
								<div class="row">
									<?php for($i=0;$i<4;$i++){ ?>
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
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--END PRODUCT SUGGESTION -->
			<!--START SAVE AND TOTAL -->
			<div class="shopping-cart-summary padding-top padding-bottom">
				<div class="container-fluid section-container">
					<div class="row">
						<div class="col-sm-6 col-xs-12">
							<div class="inner-wrap" id="save-as-section">
								<a href="#" class="btn grey-button small-width"><i class="fa fa-chevron-left"></i> Continue shopping</a>
								<div class="save-as-wrap">
									<div class="save-as-main">
										<span class="btn light-green-button full-width">Save as</span>
									</div>
									<div class="save-as-list">
										<span class="btn light-grey-button full-width">List</span>
										<div class="save-as-list-form">
											<span class="btn light-grey-button full-width">Draft order</span>
											<label for="save-as-list-name">Job Name</label>
											<input type="text" name="save-as-list-name">
											<label for="save-as-list-number">Order Number</label>
											<input type="text" name="save-as-list-number">
											<span class="btn green-button">Save</span>
										</div>
									</div>
									<div class="save-as-draft">
										<span class="btn light-grey-button full-width">Draft order</span>
										<div class="save-as-draft-form">
											<label for="save-as-draft-name">Job Name</label>
											<input type="text" name="save-as-draft-name">
											<label for="save-as-draft-number">Order Number</label>
											<input type="text" name="save-as-draft-number">
											<span class="btn green-button">Save</span>
										</div>
									</div>
									<div class="save-as-quote">
										<span class="btn light-grey-button full-width">Quote</span>
										<div class="save-as-quote-form">
											<label for="save-as-quote-name">Job Name</label>
											<input type="text" name="save-as-quote-name">
											<label for="save-as-quote-number">Order Number</label>
											<input type="text" name="save-as-quote-number">
											<span class="btn green-button">Save</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-xs-12">
							<div class="inner-wrap" id="total-summary-section">
								<div class="shopping-cart-total">
									<div class="left-col"><span class="subtotal-text">Subtotal</span></div>
									<div class="right-col"><span class="subtotal-value">$1000.00</span></div>
									<div class="clear-fix"></div>
									<div class="left-col"><span class="deliveryfee-text">Delivery Fee</span></div>
									<div class="right-col"><span class="deliveryfee-value">$85.00</span></div>
									<div class="clear-fix"></div>
									<div class="left-col"><span class="deliveryinfo-text"><a href="#" target="_blank">Delivery Information</a></span></div>
									<div class="clear-fix"></div>
									<div class="left-col"><span class="gst-text">GST</span></div>
									<div class="right-col"><span class="gst-value">$8.50</span></div>
									<div class="clear-fix"></div>
									<div class="grey-ruler"></div>
									<div class="clear-fix"></div>
									<div class="left-col"><span class="grandtotal-text">Total <span>inc. GST</span></span></div>
									<div class="right-col"><span class="grandtotal-value">$1093.50</span></div>
									<div class="clear-fix"></div>
									<input type="submit" value="Submit order" class="btn green-button small-width">
								</div>
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