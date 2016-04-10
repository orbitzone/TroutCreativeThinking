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
						<h1 class="text-blue">Shopping Cart <span class="job-name">86 Castles Rd</span></h1>
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
								<span class="xs-left-col">
									<div class="one-option dropdown-option">
										<select id="cmp-option">
											<option value="cmp1">CMP</option>
											<option value="cmp2">MP</option>
										</select>
									</div>
									<div class="clear-fix"></div>
								</span>
								<span class="xs-right-col">
									<div class="one-option checkbox-option">
										GST <input type="checkbox" name="gst" value"gst">
									</div>
									<div class="clear-fix"></div>
									</span>
									<div class="clear-fix"></div>
								</div>
							</div>
						</div>
						<div class="col-sm-7 hidden-xs">
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
					<!--START CART ITEMS 1-->
					<div class="row border-bottom border-light one-product-wrapper" data-productcode="123123123">
						<div class="col-xs-12 col-xs-offset-0 col-sm-12 col-sm-offset-0">
							<div class="inner-wrap item-listing">
								<div class="one-product">
									<div class="item-data item-thumbnail xs-left xxs-full"><div class="item-inner"><div class="product-thumbnail"><img src="templates/images/product1.jpg"></div></div></div>
									<div class="item-data item-details xs-left xxs-full">
										<div class="item-inner">
											<span class="product-code">123123123</span>
											<span class="product-name">Thermann Electric Storage</span>
											<span class="product-description">Electric Hot Water Unit 250L</span>
										</div>
									</div>
									<div class="item-data item-quantity xs-left">
										<div class="item-inner">
											<div class="quantity-wrap">
												<span class="quantity-input">
													<input class="quantity-number" data-productcode="123123123" type="number" name="quantity-123123123" min="1" value="1">
												</span>
												<span class="quantity-set no-choice">
													<span class="set-name">EA</span>
													<span class="quantity-details">Packet <span>12</span> Units</span>
												</span>
											</div>
										</div>
									</div>
									<div class="item-data item-unitprice xs-right"><div class="item-inner"><div class="sub-heading visible-xs-block">Unit price</div><span class="update-price">$444.99</span><span class="gst">inc</span></div></div>
									<div class="item-data item-subtotal xs-right"><div class="item-inner"><div class="sub-heading visible-xs-block">Subtotal</div><span class="update-price">$888.99</span><span class="gst">inc</span></div></div>
									<div class="item-data item-remove"><div class="item-inner"><span class="remove-button action-remove-item" data-productcode="123123123"> <i class="fa fa-times"></i> </span></div></div>
									<div class="clear-fix"></div>
								</div>
							</div>
						</div>
					</div>
					<!--END CART ITEMS 1-->
					<!--START CART ITEMS 2-->
					<div class="row border-bottom border-light one-product-wrapper" data-productcode="7845123">
						<div class="col-xs-12 col-xs-offset-0 col-sm-12 col-sm-offset-0">
							<div class="inner-wrap item-listing">
								<div class="one-product">
									<div class="item-data item-thumbnail xs-left xxs-full"><div class="item-inner"><div class="product-thumbnail"><img src="templates/images/product2.jpg"></div></div></div>
									<div class="item-data item-details xs-left xxs-full">
										<div class="item-inner">
											<span class="product-code">7845123</span>
											<span class="product-name">Duopex Gas</span>
											<span class="product-description">Duopex Jaw to suit Compact Press Tool</span>
										</div>
									</div>
									<div class="item-data item-quantity xs-left">
										<div class="item-inner">
											<div class="quantity-wrap">
												<span class="quantity-hidden">
													<input class="quantity-radio" type="radio" id="set-7845123-ea" name="set-7845123" value="EA" checked>
													<input class="quantity-radio" data-productcode="7845123" type="radio" id="set-7845123-pkt" name="set-7845123" value="PKT">
												</span>
												<span class="quantity-input">
													<input class="quantity-number" data-productcode="7845123" type="number" name="quantity-7845123" min="1" value="1">
												</span>
												<span class="quantity-set">
													<div class="radiolabel-set">
														<label for="set-7845123-ea" class="radio-button active">EA</label>
														<label for="set-7845123-pkt" class="radio-button">PKT</label>
														<div class="clear-fix"></div>
													</div>
													<span class="quantity-details">Packet <span>12</span> Units</span>
												</span>
											</div>
										</div>
									</div>
									<div class="item-data item-unitprice xs-right"><div class="item-inner"><div class="sub-heading visible-xs-block">Unit price</div><span class="update-price">$444.99</span><span class="gst">inc</span></div></div>
									<div class="item-data item-subtotal xs-right"><div class="item-inner"><div class="sub-heading visible-xs-block">Subtotal</div><span class="update-price">$888.99</span><span class="gst">inc</span></div></div>
									<div class="item-data item-remove"><div class="item-inner"><span class="remove-button action-remove-item" data-productcode="7845123"> <i class="fa fa-times"></i> </span></div></div>
									<div class="clear-fix"></div>
								</div>
							</div>
						</div>
					</div>
					<!--END CART ITEMS 2-->
					<!--START CART ITEMS 3-->
					<div class="row border-bottom border-light one-product-wrapper" data-productcode="67564534">
						<div class="col-xs-12 col-xs-offset-0 col-sm-12 col-sm-offset-0">
							<div class="inner-wrap item-listing">
								<div class="one-product">
									<div class="item-data item-thumbnail xs-left xxs-full"><div class="item-inner"><div class="product-thumbnail"><img src="templates/images/product3.jpg"></div></div></div>
									<div class="item-data item-details xs-left xxs-full">
										<div class="item-inner">
											<span class="product-code">67564534</span>
											<span class="product-name">Vada</span>
											<span class="product-description">V60-J Jet Pump</span>
										</div>
									</div>
									<div class="item-data item-quantity xs-left">
										<div class="item-inner">
											<div class="quantity-wrap">
												<span class="quantity-hidden">
													<input class="quantity-radio" type="radio" id="set-67564534-ea" name="set-67564534" value="EA" checked>
													<input class="quantity-radio" data-productcode="67564534" type="radio" id="set-67564534-pkt" name="set-67564534" value="PKT">
												</span>
												<span class="quantity-input">
													<input class="quantity-number" data-productcode="67564534" type="number" name="quantity-67564534" min="1" value="1">
												</span>
												<span class="quantity-set">
													<div class="radiolabel-set">
														<label for="set-67564534-ea" class="radio-button active">EA</label>
														<label for="set-67564534-pkt" class="radio-button">PKT</label>
														<div class="clear-fix"></div>
													</div>
													<span class="quantity-details">Packet <span>12</span> Units</span>
												</span>
											</div>
										</div>
									</div>
									<div class="item-data item-unitprice xs-right"><div class="item-inner"><div class="sub-heading visible-xs-block">Unit price</div><span class="update-price">$444.99</span><span class="gst">inc</span></div></div>
									<div class="item-data item-subtotal xs-right"><div class="item-inner"><div class="sub-heading visible-xs-block">Subtotal</div><span class="update-price">$888.99</span><span class="gst">inc</span></div></div>
									<div class="item-data item-remove"><div class="item-inner"><span class="remove-button action-remove-item" data-productcode="67564534"> <i class="fa fa-times"></i> </span></div></div>
									<div class="clear-fix"></div>
								</div>
							</div>
						</div>
					</div>
					<!--END CART ITEMS 3-->
					<!--START CART ITEMS 4-->
					<div class="row border-bottom border-light last-item one-product-wrapper" data-productcode="2698362">
						<div class="col-xs-12 col-xs-offset-0 col-sm-12 col-sm-offset-0">
							<div class="inner-wrap item-listing">
								<div class="one-product">
									<div class="item-data item-thumbnail xs-left xxs-full"><div class="item-inner"><div class="product-thumbnail"><img src="templates/images/product4.jpg"></div></div></div>
									<div class="item-data item-details xs-left xxs-full">
										<div class="item-inner">
											<span class="product-code">2698362</span>
											<span class="product-name">Duopex Gas</span>
											<span class="product-description">Duopex Jaw to suit Compact Press Tool</span>
										</div>
									</div>
									<div class="item-data item-quantity xs-left">
										<div class="item-inner">
											<div class="quantity-wrap">
												<span class="quantity-hidden">
													<input class="quantity-radio" type="radio" id="set-2698362-ea" name="set-2698362" value="EA" checked>
													<input class="quantity-radio" data-productcode="2698362" type="radio" id="set-2698362-pkt" name="set-2698362" value="PKT">
												</span>
												<span class="quantity-input">
													<input class="quantity-number" data-productcode="2698362" type="number" name="quantity-2698362" min="1" value="1">
												</span>
												<span class="quantity-set">
													<div class="radiolabel-set">
														<label for="set-2698362-ea" class="radio-button active">EA</label>
														<label for="set-2698362-pkt" class="radio-button">PKT</label>
														<div class="clear-fix"></div>
													</div>
													<span class="quantity-details">Packet <span>12</span> Units</span>
												</span>
											</div>
										</div>
									</div>
									<div class="item-data item-unitprice xs-right"><div class="item-inner"><div class="sub-heading visible-xs-block">Unit price</div><span class="update-price">$444.99</span><span class="gst">inc</span></div></div>
									<div class="item-data item-subtotal xs-right"><div class="item-inner"><div class="sub-heading visible-xs-block">Subtotal</div><span class="update-price">$888.99</span><span class="gst">inc</span></div></div>
									<div class="item-data item-remove"><div class="item-inner"><span class="remove-button action-remove-item" data-productcode="2698362"> <i class="fa fa-times"></i> </span></div></div>
									<div class="clear-fix"></div>
								</div>
							</div>
						</div>
					</div>
					<!--END CART ITEMS 4-->
				</div>
			</div>
			<!--END SHOPPING CART LISTING -->
			<!--START PRODUCT SUGGESTION -->
			<section class="product-suggestion hidden-xs bg-mid-grey">
				<div class="container-fluid section-container">
					<div class="row">
						<div class="col-sm-12">
							<div class="inner-wrap text-center">
								<h3>You may also need <span class="open-close-button opened"><i class="fa fa-plus"></i><i class="fa fa-minus"></i></span></h3>
							</div>
						</div>
					</div>
					<div class="row" >
						<div class="col-sm-10 col-sm-offset-1">
							<div class="inner-wrap suggestion-item-content">
								<div class="row">
									<!--START ITEM 1-->
									<div class="col-xs-3">
										<div class="one-recommendation">
											<div class="product-thumbnail">
												<img src="templates/images/product5.jpg">
											</div>
											<div class="product-details">
												<span class="product-code">78787878</span>
												<span class="product-name">2TUFF Safety Gear</span>
												<span class="product-description">Ear Muffs</span>
											</div>
											<div class="add-button-wrap">
												<span class="action-add-product demo-item1">
												<i class="fa fa-plus"></i><i class="fa fa-check"></i></span>
											</div>
										</div>
									</div>
									<!--END ITEM 1-->
									<!--START ITEM 2-->
									<div class="col-xs-3">
										<div class="one-recommendation">
											<div class="product-thumbnail">
												<img src="templates/images/product6.jpg">
											</div>
											<div class="product-details">
												<span class="product-code">63636363</span>
												<span class="product-name">2TUFF Safety Gear</span>
												<span class="product-description">Safety Vest</span>
											</div>
											<div class="add-button-wrap">
												<span class="action-add-product demo-item2">
												<i class="fa fa-plus"></i><i class="fa fa-check"></i></span>
											</div>
										</div>
									</div>
									<!--END ITEM 2-->
									<!--START ITEM 3-->
									<div class="col-xs-3">
										<div class="one-recommendation">
											<div class="product-thumbnail">
												<img src="templates/images/product7.jpg">
											</div>
											<div class="product-details">
												<span class="product-code">52525252</span>
												<span class="product-name">Walraven</span>
												<span class="product-description">BIS Starquick Pipe Clamp</span>
											</div>
											<div class="add-button-wrap">
												<span class="action-add-product demo-item3">
												<i class="fa fa-plus"></i><i class="fa fa-check"></i></span>
											</div>
										</div>
									</div>
									<!--END ITEM 3-->
									<!--START ITEM 4-->
									<div class="col-xs-3">
										<div class="one-recommendation">
											<div class="product-thumbnail">
												<img src="templates/images/product8.jpg">
											</div>
											<div class="product-details">
												<span class="product-code">14141414</span>
												<span class="product-name">Duopex Gas</span>
												<span class="product-description">Duopex Jaw to suit Compact Press Tool</span>
											</div>
											<div class="add-button-wrap">
												<span class="action-add-product demo-item4">
												<i class="fa fa-plus"></i><i class="fa fa-check"></i></span>
											</div>
										</div>
									</div>
									<!--END ITEM 4-->
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
						<div class="col-sm-6 col-xs-12 col-sm-push-6">
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
									<div class="submit-button-wrap">
										<input type="submit" value="Submit order" class="btn blue-button small-width">
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-xs-12 col-sm-pull-6">
							<div class="inner-wrap" id="save-as-section">
								<a href="#" class="btn grey-button small-width continue-shopping-button"><i class="fa fa-chevron-left"></i> Continue shopping</a>
								<div class="save-as-wrap">
									<div class="save-as-main">
										<span class="btn light-blue-button full-width save-as-main-button">Save as</span>
									</div>
									<div class="save-inner-wrapper">
										<div class="save-as-list list-group-wrap">
											<span class="btn light-grey-button full-width list-open">List</span>
											<div class="save-as-list-form list-form">
												<label for="save-as-list-name">List Name</label>
												<input type="text" name="save-as-list-name">
												<label for="save-as-list-number">Order Number</label>
												<input type="text" name="save-as-list-number">
												<button type="button" class="btn blue-button">Save</button>
											</div>
										</div>
										<div class="save-as-draft list-group-wrap">
											<span class="btn light-grey-button full-width list-open">Draft order</span>
											<div class="save-as-draft-form list-form">
												<label for="save-as-draft-name">Order Name</label>
												<input type="text" name="save-as-draft-name">
												<label for="save-as-draft-number">Order Number</label>
												<input type="text" name="save-as-draft-number">
												<button type="button" class="btn blue-button">Save</button>
											</div>
										</div>
										<div class="save-as-quote list-group-wrap">
											<span class="btn light-grey-button full-width list-open">Quote</span>
											<div class="save-as-quote-form list-form">
												<label for="save-as-quote-name">Quote Name</label>
												<input type="text" name="save-as-quote-name">
												<label for="save-as-quote-number">Order Number</label>
												<input type="text" name="save-as-quote-number">
												<button type="button" class="btn blue-button">Save</button>
											</div>
										</div>
									</div>
								</div>
								<div class="clear-fix"></div>
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