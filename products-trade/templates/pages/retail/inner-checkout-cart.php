<!--START BREAD CRUMB -->
<div class="breadcrumb-section bg-mid-grey section">
	<div class="breadcrumb-inner">
		<ul class="breadcrumbs">
			<li><a href="#">Checkout</a></li>
		</ul>
	</div>
</div>
<!--END BREAD CRUMB -->
<!--START OF PAGE SECTION -->
<div class="main-section section" id="checkout-cart-section">
	<div class="container-fluid section-container">
		<div class="row">
			<!--START OF SIDEBAR SECTION -->
			<div class="col-sm-5 col-sm-push-7 bg-dark-grey">
				<?php include "templates/includes/retail/checkout-sidebar.php" ?>
			</div>
			<!--END OF SIDEBAR SECTION -->
			<!--START OF MAIN FORM SECTION -->
			<div class="col-sm-7 col-sm-pull-5 section">
				<div id="order-form" class="padding-top">
					<header class="main-heading">
						
						<div class="left-col">
							<h1>Secure Checkout</h1>
						</div>
						<div class="right-col">
							<div id="steps-indicator">
								<span id="steps-indicator1" class="indicator-button action-goto-step1 clickable">1</span>
								<span class="dots">....</span>
								<span id="steps-indicator2" class="indicator-button action-goto-step2">2</span>
								<span class="dots">....</span>
								<span id="steps-indicator3" class="indicator-button action-goto-step3">3</span>

							</div>
						</div>
						<div class="clear-fix"></div>
					</header>
					<form id="checkout-cart" action="retail-checkout-cart-success.php">
						<!--START OF STEP 1 - DETAILS SECTION -->
						<section id="order-details" class="section-box">
							
							<div class="form-section">
								<div class="form-group-wrap">
									<header class="header-section active">
										<h3>1. Details</h3>
									</header>
									<div class="form-group gen-error gen-error1">
										<div class="info">
											Please check that all fields are filled in correctly.
										</div>
									</div>
									<div class="clear-fix"></div>
									<div class="form-group half sm-full">
										<label for="details_firstname">First Name</label>
										<input name="details_firstname" type="text" class="" id="details_firstname" required tabindex="1">
									</div>
									<div class="form-group half sm-full">
										<label for="details_lastname">Last Name</label>
										<input name="details_lastname" type="text" class="" id="details_lastname"  required tabindex="2">
									</div>
									<div class="clear-fix"></div>
									<div class="form-group half sm-full">
										<label for="details_phone">Phone Number</label>
										<input name="details_phone" type="text" class="" id="details_phone"  required tabindex="3">
									</div>
									<div class="form-group full">
										<label for="details_email">Email Address</label>
										<input name="details_email" type="email" class="" id="details_email" required tabindex="4">
									</div>
									<div class="form-group full">
										<label for="details_address">Street Address</label>
										<input name="details_address" type="text" class="" id="details_address" required tabindex="5">
									</div>
									<div class="form-group half sm-full">
										<label for="details_suburb">Suburb</label>
										<input name="details_suburb" type="text" class="" id="details_suburb"  required tabindex="6">
									</div>
									<div class="form-group quarter-big" >
										<label for="details_state">State</label>
										<select name="details_state" id="details_state" class="" tabindex="7">
											<option value="ACT">ACT</option>
											<option value="NT">NT</option>
											<option value="NSW">NSW</option>
											<option value="QLD">QLD</option>
											<option value="SA">SA</option>
											<option value="TAS">TAS</option>
											<option value="VIC" selected>VIC</option>
											<option value="WA">WA</option>
										</select>
									</div>
									<div class="form-group quarter-small">
										<label for="details_postcode">Postcode</label>
										<input name="details_postcode" type="number" class="" id="details_postcode" min="1000" max="9999" required tabindex="8">
									</div>
									<div class="form-group full text-right">
										<button type="button" class="btn next-button main-button action-goto-step2 clickable" id="step1next" tabindex="9">Next</button>
									</div>
									<div class="clear-fix"></div>
								</div>
							</div>
						</section>
						<!--END OF STEP 1 - DETAILS SECTION -->
						<!--START OF STEP 2 - RECEIVING GOODS SECTION -->
						<section id="receiving-goods" class="section-box">
							
							<div class="form-section">
								<div class="form-group-wrap">
									<header class="header-section">
										<h3>2. Receiving Goods</h3>
									</header>
									<div class="form-group gen-error gen-error2">
										<div class="info">
											Please check that all fields are filled in correctly.
										</div>
									</div>
									<div class="clear-fix"></div>
									<div class="form-group full">
										<div class="info">
											<h6>How would you like to recieve the goods? </h6>
										</div>
										<div class="inner-half left text-center">
											<div class="delivery-button picture-button">
												<label for="receiving_receivegoods_delivery" class="btn-bhv">
													<span class="icon icon-delivery" >
														<svg width="159.1px" height="80px" viewBox="0 0 159.1 80">
															<path d="M130.3,47.9v23h-10.6c-0.6,5.1-5.2,9.2-10.5,9.2c-5.3,0-9.8-4.1-10.5-9.2h-2.8h-3.1H57.2
															C56.6,75.9,52,80,46.8,80c-5.3,0-9.8-4.1-10.5-9.2h-7.5V14.6h67.2V24h16.4L130.3,47.9z M54.2,69.4c0-4.3-3.3-7.5-7.5-7.5
															s-7.5,3.3-7.5,7.5s3.4,7.5,7.5,7.5S54.2,73.6,54.2,69.4z M92.8,17.7H31.9v50h4.5c0.8-5,5.2-8.8,10.3-8.8s9.5,3.8,10.3,8.8h35.7V24
															L92.8,17.7L92.8,17.7z M115.5,33.3h-10.1v7.8h16.1L115.5,33.3z M116.7,69.4c0-4.3-3.3-7.5-7.5-7.5s-7.5,3.3-7.5,7.5s3.4,7.5,7.5,7.5
															S116.7,73.6,116.7,69.4z M127.2,55.8c-0.9,0.5-1.6,1.6-1.6,2.6c0,1.1,0.7,2.2,1.6,2.6V55.8z M127.2,48.9l-3.4-4.7h-21.6V30.2h11
															l-2.4-3.1H95.9v40.7h2.9c0.8-5,5.2-8.8,10.3-8.8s9.6,3.8,10.3,8.8h7.7v-3.1c-2.6-0.8-4.7-3.1-4.7-6.1c0-2.9,2-5.5,4.7-6.1V48.9z"/>
														</svg>
													</span>
													<br>Delivery<br><span class="radio-button"></span>
												</label>
											</div>
										</div>
										<div class="inner-half right text-center">
											<div class="pickup-button picture-button">
												<label for="receiving_receivegoods_pickup" class="btn-bhv">
													<span class="icon icon-pickup">
														<svg width="159.1px" height="80px" viewBox="0 0 159.1 80">
															<path d="M158.1,80H1v-2h157.2V80z M147.5,77.9h-2V37.3h-23.6v40.1h-2V35.4h25.6v-10H13.7v10h77.3v42.1h-2V37.3H13.7
															v40.1h-2V25.4H0V13.5h48.4V0h62.5v13.5h48.3v11.9h-11.6V77.9z M110.9,23.4h46.3v-8h-46.3V23.4z M50.3,23.4h58.6V2H50.3V23.4z
															 M2,23.4h46.4v-8H2V23.4z"/>
														</svg>
													</span>
													<br>Pick up<br><span class="radio-button"></span>
												</label>
											</div>
										</div>
										<div class="clear-fix"></div>
										<div class="radio-inputs">
											<input type="radio" name="receiving_receivegoods" id="receiving_receivegoods_pickup" value="pickup" required tabindex="10"><input type="radio" name="receiving_receivegoods" id="receiving_receivegoods_delivery" value="delivery" required tabindex="10">
										</div>
									</div>
									<div class="clear-fix"></div>
									<!-- START: DELIVERY DETAILS -->
									<div id="delivery-details">
										<div class="form-group full no-space-top">
											<div class="info text-light-grey">
												<p>Your delivery will attract a cartage fee of $5.30</p>
											</div>
										</div>
									<header><h3>Delivery Details</h3></header>
									<div class="form-group full">
										<div class="info delivery-requirements">
											<div class="info-icon">
												<svg width="33px" height="33px" viewBox="0 0 33 33">
													<path d="M16.5,2C24.5,2,31,8.5,31,16.5S24.5,31,16.5,31S2,24.5,2,16.5S8.5,2,16.5,2 M16.5,0
													C7.4,0,0,7.4,0,16.5S7.4,33,16.5,33S33,25.6,33,16.5S25.6,0,16.5,0L16.5,0z"/>
													<path d="M13.7,21.4c0.1-0.2,0.1-0.6,0.2-1l1.5-5.4c0-0.1,0-0.1,0-0.2s0-0.1,0-0.2c0-0.3-0.1-0.5-0.3-0.6s-0.6-0.1-1.1-0.2
													v-0.6c0.5,0,1.1-0.1,2-0.2s1.5-0.2,1.8-0.3l1-0.2L17,19.5c-0.2,0.6-0.3,1-0.3,1.2c-0.1,0.6-0.2,1-0.2,1.1s0,0.3,0.1,0.3
													s0.2,0.1,0.3,0.1c0.2,0,0.5-0.2,0.9-0.6s0.7-0.8,1-1.3l0.5,0.3c-0.8,1.1-1.4,1.9-1.8,2.3c-0.7,0.7-1.4,1-2.2,1
													c-0.4,0-0.8-0.1-1.2-0.4c-0.3-0.3-0.5-0.7-0.5-1.2C13.6,22.1,13.6,21.8,13.7,21.4z M19.4,7.8c0.3,0.3,0.5,0.7,0.5,1.1
													s-0.2,0.8-0.5,1.1s-0.7,0.5-1.1,0.5s-0.8-0.2-1.1-0.5c-0.3-0.3-0.5-0.7-0.5-1.1s0.2-0.8,0.5-1.1c0.3-0.3,0.7-0.5,1.1-0.5
													S19.1,7.5,19.4,7.8z"/>
												</svg>
											</div>
											<h6>Delivery Requirements</h6>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque cum doloremque, necessitatibus et vero reiciendis voluptates dicta eos inventore blanditiis tempora soluta aut minima ullam voluptatem, unde, fugiat provident quidem nisi perspiciatis nihil incidunt! Natus, quas hic voluptatem delectus nobis.</p>
										</div>
									</div>
									<div class="form-group half-big">
										<label for="receiving_date">Required By</label>
										<div class="datepicker-wrap">
											<input name="receiving_date" type="text" class="" id="receiving_date" placeholder="Select date" value="" readonly="readonly" required tabindex="14">
											<button type="button" id="receiving_date_icon">
												<svg width="74.9px" height="70px" viewBox="0 0 74.9 70">
													<path d="M72.6,8.9H57V2.2C57,1,56,0,54.8,0c-1.2,0-2.2,1-2.2,2.2v6.6H22.1V2.2c0-1.2-1-2.2-2.2-2.2s-2.2,1-2.2,2.2v6.6H2.2
													C1,8.9,0,9.9,0,11.1v56.7C0,69,1,70,2.2,70h70.5c1.2,0,2.2-1,2.2-2.2V11.1C74.8,9.9,73.8,8.9,72.6,8.9z M70.5,38.3H57v-8.7h13.5
													V38.3z M52.6,38.3h-13v-8.7h13V38.3z M35.3,38.3H22.2v-8.7h13L35.3,38.3L35.3,38.3z M17.8,38.3H4.3v-8.7h13.5V38.3z M4.3,42.7h13.5
													v8.7H4.3V42.7z M22.2,42.7h13v8.7h-13V42.7z M35.3,55.8v9.9H22.2v-9.9H35.3z M39.6,55.8h13v9.9h-13V55.8z M39.6,51.4v-8.7h13v8.7
													L39.6,51.4z M57,42.7h13.5v8.7H57V42.7z M17.8,13.2v4.1c0,1.2,1,2.2,2.2,2.2s2.2-1,2.2-2.2v-4.1h30.5v4.1c0,1.2,1,2.2,2.2,2.2
													s2.2-1,2.2-2.2v-4.1h13.5v12.1H4.3V13.2H17.8z M4.3,55.8h13.5v9.9H4.3V55.8z M57,65.6v-9.8h13.5v9.9L57,65.6L57,65.6z"/>
												</svg>
											</button>
										</div>
									</div>
									<div class="form-group half-small">
										<label for="receiving_time">Time</label>
										<select name="receiving_time" class="" id="receiving_time" tabindex="12">
											<option value="9:30am" selected>9:30AM</option>
											<option value="10am">10:00AM</option>
											<option value="10:30am">10:30AM</option>
											<option value="11am">11:00AM</option>
											<option value="11:30am">11:30AM</option>
											<option value="12pm">12:00PM</option>
											<option value="12:30pm">12:30PM</option>
											<option value="1pm">1:00PM</option>
											<option value="1:30">1:30PM</option>
											<option value="2pm">2:00PM</option>
											<option value="2:30">2:30PM</option>
											<option value="3pm">3:00PM</option>
											<option value="3:30">3:30PM</option>
											<option value="4pm">4:00PM</option>
											<option value="4:30">4:30PM</option>
											<option value="5pm">5:00PM</option>
											<option value="5:30">5:30PM</option>
											<option value="6pm">6:00PM</option>
											<option value="6:30">6:30PM</option>
											
										</select>
									</div>
									<div class="form-group full">
										<label for="receiving_previousaddress">Delivery Address</label>
									</div>
									<div class="form-group half full-sm select-previous-address no-space-top">
										<select name="receiving_previousaddress" class="" id="receiving_previousaddress" required tabindex="13">
											<option value="">Select previous address</option>
										</select>
										<div class="clear-fix"></div>
									</div>
									<div class="form-group half full-sm text-right enter-new-address no-space-top enter-new-address-bottom">
										<span class="or">OR</span>
										<button type="button" class="btn main-button new-address action-enter-new-address" tabindex="14">Enter new address</button>
										<div class="clear-fix"></div>
									</div>
									<div class="clear-fix"></div>
									<div id="delivery-address">
										<div class="inner-form-section">
											<div class="form-group full">
												<label for="receiving_address">Street Address</label>
												<input name="receiving_address" type="text" class="" id="receiving_address"  required tabindex="15">
											</div>
											<div class="form-group half sm-full">
												<label for="receiving_suburb">Suburb</label>
												<input name="receiving_suburb" type="text" class="" id="receiving_suburb"  required tabindex="16">
											</div>
											<div class="form-group quarter-big" >
												<label for="receiving_state">State</label>
												<select name="receiving_state" class="" id="receiving_state" tabindex="17">
													<option value="ACT">ACT</option>
													<option value="NT">NT</option>
													<option value="NSW">NSW</option>
													<option value="QLD">QLD</option>
													<option value="SA">SA</option>
													<option value="TAS">TAS</option>
													<option value="VIC" selected>VIC</option>
													<option value="WA">WA</option>
												</select>
											</div>
											<div class="form-group quarter-small">
												<label for="receiving_postcode">Postcode</label>
												<input name="receiving_postcode" type="number" class="" id="receiving_postcode" required tabindex="18" min="1000" max="9999">
											</div>
											<div class="clear-fix"></div>
											<div class="form-group half sm-full">
												<label for="receiving_name">Site Contact Name</label>
												<input name="receiving_name" type="text" class="" id="receiving_name"  required tabindex="19">
											</div>
											<div class="form-group half sm-full">
												<label for="receiving_phone">Site Contact Phone</label>
												<input name="receiving_phone" type="text" class="" id="receiving_phone"  required tabindex="20">
											</div>
											<div class="clear-fix"></div>
										</div>
									</div>
									<div class="clear-fix"></div>
								</div>
								<!-- END: DELIVERY DETAILS -->
								<!-- START: PICK UP DETAILS -->
								<div id="pickup-details">
									<header>
										<h3>Pick Up Details</h3>
										<p>Your order has been assigned to:</p>
									</header>
									<div class="inner-section transition-height">
										<div class="form-group full transition-height">
											<div class="info branch-info-autofill transition-height">
												<div id="branchinfo-details" class="inner-half left text-left">
													<h6 class="branch-name">Reece Collingwood</h6>
													<p>2 Collingwood St, Collingwood VIC 3025</p>
													<p>(03) 1234 5678</p>
												</div>
												<div id="branch-info-actions" class="inner-half right text-right">
													<span class="action-pickup-address action-pickup-address-change active">Change</span>
													<span class="action-pickup-address action-pickup-address-cancel">Cancel <i class="fa fa-times"></i>   </span>
												</div>
												<div class="clear-fix"></div>
											</div>
											<div class="branch-info-autocomplete">
												<label for="pickup_branch">Pick Up Branch</label>
												<input name="pickup_branch" type="text" class="pickup_branch search-box" id="pickup_branch" autocomplete="off" tabindex="21">
												<div class="clear-fix"></div>
												<div id="pickupbranch-results" class="transition-height">
												</div>
											</div>
										</div>
										<div class="clear-fix"></div>
									</div>
									<div class="form-group full no-space-bottom space-above">
										<label>Pick Up Contact</label>
									</div>
									<div class="clear-fix"></div>
									<div class="form-group half full-sm select-previous-address no-space-top">
										<select name="pickup_previouscontact" class="" id="pickup_previouscontact" required tabindex="22">
											<option value="">Select previous contact</option>
										</select>
										<div class="clear-fix"></div>
									</div>
									<div class="form-group half full-sm text-right enter-new-contact no-space-top">
										<span class="or">OR</span>
									<button type="button" class="btn main-button new-contact action-enter-new-contact" tabindex="23">Enter new contact
									</button>
									<div class="clear-fix"></div>
									</div>
									<div class="clear-fix"></div>
									<div class="inner-section">
										<div class="form-group half full-sm">
											<label for="pickup_name">Name</label>
											<input name="pickup_name" type="text" class="" id="pickup_name"  required tabindex="24">
										</div>
										<div class="form-group half full-sm">
											<label for="pickup_phone">Phone</label>
											<input name="pickup_phone" type="text" class="" id="pickup_phone"  required tabindex="25">
										</div>
										<div class="clear-fix"></div>
									</div>
								</div>
								<div id="order-comments">
									<div class="form-group full space-above">
										<label for="pickup_ordercomments">Order Comments</label>
										<textarea name="pickup_ordercomments" rows="8" id="pickup_ordercomments" placeholder="e.g. If I'm not at home, please leave goods in garage." tabindex="26"></textarea>
									</div>
								</div>
								<div class="form-group half text-left">
									<button type="button" class="btn prev-button next-button secondary-button action-goto-step1 clickable" id="step2previous" tabindex="27">Previous</button>
								</div>
								<div class="form-group half text-right">
									<button type="button" class="btn prev-button next-button main-button action-goto-step3 clickable" id="step3next" tabindex="28">Next</button>
								</div>
								<div class="clear-fix"></div>
							</div>
						</div>
					</section>
					<!--END OF STEP 2 - RECEIVING GOODS SECTION -->













					<!--START OF STEP 3. PAYMENT - RECEIVING GOODS SECTION -->
					<section id="payment-checkout" class="section-box">
						
						<div class="form-section">
							<div class="form-group-wrap">
								<header class="header-section btn-bhv">
									<h3>3. Payment</h3>
								</header>
								<div class="form-group gen-error gen-error3">
									<div class="info">
										Please check that all fields are filled in correctly.
									</div>
								</div>
								<div class="clear-fix"></div>
								<div class="form-group full no-space-bottom space-above">
									<label>Payment Type</label>
								</div>
								<div class="clear-fix"></div>
								<div class="form-group half full-sm select-previous-address no-space-top">
									<select name="payment_paymenttype" class="" id="payment_paymenttype" tabindex="29">
										<option value="creditcard" selected>Credit Card</option>
										<option value="directdebit">Direct Credit</option>
									</select>
									<div class="clear-fix"></div>
								</div>
								<div class="clear-fix"></div>
								<!-- START: DELIVERY DETAILS -->
								<div id="credit-card-choice">
								<div class="form-group full">
									<div class="inner-third left text-center half-sm">
										<div class="visa-button picture-button">
											<label for="payment_card_visa" class="btn-bhv">
												<span class="icon-visa icon" >
													<svg width="136.4px" height="80px" viewBox="0 0 136.4 80">
														<path class="rectangle" d="M136.4,5.2v69.6c0,2.9-2.3,5.2-5.2,5.2H5.2C2.3,80,0,77.7,0,74.8V5.2
														C0,2.3,2.3,0,5.2,0h126C134,0,136.4,2.3,136.4,5.2z"/>
														<path class="brand" d="M84.9,44c0,4.8-4.4,7.9-11,7.9c-2.8,0-5.6-0.6-7-1.2l0.9-5.2l0.8,0.4c2.1,0.9,3.4,1.2,5.9,1.2
														c1.8,0,3.8-0.7,3.8-2.3c0-1-0.8-1.7-3.3-2.9c-2.4-1.1-5.6-3-5.5-6.3c0-4.5,4.4-7.6,10.7-7.6c2.4,0,4.4,0.5,5.7,1L85,34l-0.6-0.3
														c-1.2-0.5-2.7-0.9-4.7-0.9c-2.5,0-3.6,1-3.6,2c0,1.1,1.3,1.8,3.5,2.9C83.3,39.4,85,41.4,84.9,44z M56.7,51.6H63l3.9-23.1h-6.3
														L56.7,51.6z M51.4,28.5l-6.2,15.8L44.5,41l-2.2-10.6c-0.4-1.5-1.5-1.9-2.9-2H29.3l-0.1,0.5c2.5,0.6,4.7,1.5,6.6,2.5l5.6,20.1l6.7,0
														l9.9-23.1H51.4z M107.1,51.6h-5.9c0,0-0.6-2.7-0.8-3.5c-0.9,0-7.4,0-8.1,0c-0.2,0.6-1.3,3.5-1.3,3.5h-6.6l9.4-21.2
														c0.7-1.5,1.8-1.9,3.3-1.9h4.9L107.1,51.6z M99.5,43.4c-0.3-1.2-1.5-6.7-1.5-6.7l-0.4-2c-0.3,0.9-0.9,2.3-0.8,2.2c0,0-2,5.1-2.5,6.5
														H99.5z"/>													
													</svg>
												</span>
												<br>Visa<br><span class="radio-button"></span>
											</label>
										</div>
									</div>
									<div class="inner-third middle text-center half-sm">
										<div class="mastercard-button picture-button">
											<label for="payment_card_mastercard" class="btn-bhv">
											<span class="icon-mastercard icon">
												<svg width="136.4px" height="80px" viewBox="0 0 136.4 80">
													<path class="rectangle" d="M136.4,5.2v69.6c0,2.9-2.3,5.2-5.2,5.2H5.2C2.3,80,0,77.7,0,74.8V5.2
													C0,2.3,2.3,0,5.2,0h126C134,0,136.4,2.3,136.4,5.2z"/>
													<path class="brand" d="M68,37.9h-2.7c0-0.2,0.3-1.7,1.6-1.7C68.3,36.2,68,37.8,68,37.9z M85.7,40.9
													c0,0.3,0.2,0.9,0.9,0.9c1.5,0,1.8-1.9,1.7-2.3c-0.1,0-0.1-0.1-0.5-0.1C86,39.5,85.7,40.3,85.7,40.9z M99.8,36.5
													c-1.1,0-1.9,1.2-1.9,3.1c0,1.1,0.4,1.9,1.3,1.9c1.3,0,1.9-1.7,1.9-3C101.1,37.1,100.7,36.5,99.8,36.5z M46.5,40.9
													c0,0.3,0.2,0.9,0.9,0.9c1.5,0,1.8-1.9,1.7-2.3c-0.1,0-0.1-0.1-0.5-0.1C46.8,39.5,46.5,40.3,46.5,40.9z M105.6,50.2
													c0.1,0.1,0.1,0.2,0.1,0.4c0,0.1,0,0.3-0.1,0.4c-0.1,0.1-0.2,0.2-0.3,0.3c-0.1,0.1-0.2,0.1-0.4,0.1c-0.1,0-0.2,0-0.4-0.1
													c-0.1-0.1-0.2-0.2-0.3-0.3c-0.1-0.1-0.1-0.2-0.1-0.4c0-0.1,0-0.2,0.1-0.4c0.1-0.1,0.2-0.2,0.3-0.3c0.1-0.1,0.2-0.1,0.4-0.1
													c0.1,0,0.2,0,0.4,0.1C105.4,49.9,105.5,50,105.6,50.2z M105.3,50.9l-0.1-0.2c-0.1-0.1-0.1-0.1-0.1-0.2c0,0,0,0-0.1,0
													c0.1,0,0.1,0,0.2-0.1c0,0,0.1-0.1,0.1-0.2c0,0,0-0.1,0-0.1c0,0-0.1-0.1-0.1-0.1c0,0-0.1,0-0.2,0h-0.3v0.8h0.1v-0.3h0.1
													c0,0,0.1,0,0.1,0c0,0,0.1,0.1,0.1,0.2l0.1,0.1H105.3z M105.1,50.4C105.1,50.3,105.1,50.3,105.1,50.4C105.1,50.3,105,50.3,105.1,50.4
													c-0.1-0.1-0.1-0.1-0.2-0.1h-0.1v0.2h0.2C105,50.5,105,50.5,105.1,50.4C105.1,50.4,105.1,50.4,105.1,50.4z M105.2,42.7
													c0.1,0.1,0.1,0.2,0.1,0.3c0,0.1,0,0.2-0.1,0.3c-0.1,0.1-0.1,0.2-0.2,0.2c-0.1,0.1-0.2,0.1-0.3,0.1c-0.1,0-0.2,0-0.3-0.1
													c-0.1-0.1-0.2-0.1-0.2-0.2c-0.1-0.1-0.1-0.2-0.1-0.3c0-0.1,0-0.2,0.1-0.3c0.1-0.1,0.1-0.2,0.2-0.2c0.1-0.1,0.2-0.1,0.3-0.1
													c0.1,0,0.2,0,0.3,0.1C105,42.5,105.1,42.6,105.2,42.7z M105,43.4l-0.1-0.2c0-0.1-0.1-0.1-0.1-0.2c0,0,0,0-0.1,0c0.1,0,0.1,0,0.2-0.1
													c0,0,0.1-0.1,0.1-0.1c0,0,0-0.1,0-0.1c0,0-0.1-0.1-0.1-0.1c0,0-0.1,0-0.2,0h-0.3v0.8h0.1v-0.3h0.1c0,0,0.1,0,0.1,0
													c0,0,0.1,0.1,0.1,0.2l0.1,0.1H105z M104.8,42.8C104.8,42.8,104.8,42.8,104.8,42.8c0-0.1-0.1-0.1-0.1-0.1c0,0-0.1,0-0.1,0h-0.1V43
													h0.2C104.7,43,104.7,43,104.8,42.8C104.8,42.9,104.8,42.9,104.8,42.8z M107.2,37.9L107.2,37.9c0,12.6-10.2,22.7-22.7,22.7
													c-5.9,0-11.2-2.2-15.2-5.9c0,0,0,0,0.1,0c0,0,0,0,0,0h0c0.8-0.7,1.6-1.6,2.3-2.4h-4.7c0.7,0.9,1.5,1.7,2.3,2.5
													c-4,3.6-9.4,5.9-15.2,5.9c-12.5,0-22.7-10.2-22.7-22.7c0-12.5,10.1-22.6,22.6-22.7H54c5.9,0,11.2,2.2,15.2,5.9
													c4-3.6,9.4-5.9,15.2-5.9C97,15.2,107.2,25.4,107.2,37.9z M65.6,25.8h7.7c-0.5-0.9-1.1-1.7-1.8-2.4h-4.3C66.6,24.2,66.1,25,65.6,25.8
													z M63,30.7h12.6c-0.3-0.8-0.6-1.6-1-2.4H64.2C63.6,29.5,63.1,30.4,63,30.7z M43.1,43.7L45,32.2h-3.8l-2.4,7.1l-0.1-7.1h-3.5
													l-1.9,11.5h2.3L37,35l0.2,8.7h1.7L42,35l-1.4,8.7H43.1z M51,43.7l0.9-6.7c0-2.8-2.5-2.9-3.3-2.9c-1.7,0-2.9,0.5-2.9,0.5l-0.4,2.1
													c0,0,1-0.4,2.6-0.4c0.9,0,1.6,0.1,1.6,0.8c0,0.4-0.1,0.6-0.1,0.6s-0.7-0.1-1-0.1c-2.1,0-4.3,0.9-4.3,3.6c0,2.1,1.4,2.6,2.3,2.6
													c1.7,0,2.4-1.1,2.5-1.1l-0.1,0.9H51z M55,37.1c0-0.6,0.5-0.8,1.3-0.8c0.3,0,1.6,0.1,1.6,0.1l0.3-2.1c0,0-0.9-0.2-2.2-0.2
													c-1.8,0-3.6,0.7-3.6,3.2c0,2.8,3,2.5,3,3.7c0,0.8-0.8,0.8-1.5,0.8c-1.1,0-2.2-0.4-2.2-0.4l-0.3,2.1c0.1,0,0.7,0.3,2.7,0.3
													c0.5,0,3.7,0.1,3.7-3.1C57.8,37.7,55,38.3,55,37.1z M60.7,40.8l0.7-4.2h1.3l0.3-2.3h-1.2l0.2-1.4h-2.4c-0.1,0.1-1.4,8-1.4,8.9
													c0,1.4,0.8,2.1,1.9,2.1c0.9,0,1.6-0.3,1.8-0.3l0.3-2.1c-0.2,0-0.4,0.1-0.6,0.1C60.7,41.6,60.6,41.1,60.7,40.8z M62.7,39.7
													c0,3.4,2.3,4.2,4.2,4.2c1.8,0,2.6-0.4,2.6-0.4l0.4-2.3c0,0-1.4,0.6-2.6,0.6c-2.6,0-2.1-1.9-2.1-1.9H70c0,0,0.3-1.6,0.3-2.2
													c0-1.6-0.8-3.5-3.5-3.5C64.5,34.1,62.7,36.7,62.7,39.7z M74.6,47.5H63.9c0.4,0.8,0.9,1.6,1.3,2.4h8.1C73.8,49.2,74.2,48.3,74.6,47.5
													z M75.3,37.1c0.3-1.5,0.6-2.2,0.9-2.8c0,0-0.2,0-0.5,0c-1.1,0-1.9,1.5-1.9,1.5l0.2-1.4h-2.3l-1.5,9.4h2.5
													C73.5,39.7,73.6,36.5,75.3,37.1z M82.7,40.9c0,0-1.2,0.6-2,0.6c-1.7,0-2.4-1.3-2.4-2.7c0-2.9,1.5-4.4,3.1-4.4c1.2,0,2.2,0.7,2.2,0.7
													l0.4-2.6c0,0-1.5-0.6-2.7-0.6c-2.8,0-5.5,2.4-5.5,7c0,3,1.5,5,4.4,5c0.8,0,2.1-0.3,2.1-0.3L82.7,40.9z M90.2,43.7l0.9-6.7
													c0-2.8-2.5-2.9-3.3-2.9c-1.7,0-2.9,0.5-2.9,0.5l-0.4,2.1c0,0,1-0.4,2.6-0.4c0.9,0,1.6,0.1,1.6,0.8c0,0.4-0.1,0.6-0.1,0.6
													s-0.7-0.1-1-0.1c-2.1,0-4.3,0.9-4.3,3.6c0,2.1,1.4,2.6,2.3,2.6c1.7,0,2.4-1.1,2.5-1.1L88,43.7H90.2z M95.6,37.1
													c0.3-1.5,0.6-2.2,0.9-2.8c0,0-0.2,0-0.5,0c-1.1,0-1.9,1.5-1.9,1.5l0.2-1.4h-2.3l-1.5,9.4h2.5C93.8,39.7,93.9,36.5,95.6,37.1z
													 M102.8,43.7l1.9-11.5l-2.4,0l-0.5,3.2c0,0-0.9-1.3-2.3-1.3c-2.2,0-4.1,2.7-4.1,5.7c0,2,1,3.9,3,3.9c1.4,0,2.2-1,2.2-1l-0.1,0.9
													H102.8z M105.4,43c0-0.1,0-0.3-0.1-0.4c-0.1-0.1-0.2-0.2-0.3-0.3c-0.1-0.1-0.2-0.1-0.4-0.1c-0.1,0-0.2,0-0.4,0.1
													c-0.1,0.1-0.2,0.2-0.3,0.3c-0.1,0.1-0.1,0.2-0.1,0.4c0,0.1,0,0.2,0.1,0.4c0.1,0.1,0.2,0.2,0.3,0.3c0.1,0.1,0.2,0.1,0.4,0.1
													c0.1,0,0.2,0,0.4-0.1c0.1-0.1,0.2-0.2,0.3-0.3C105.3,43.3,105.4,43.1,105.4,43z"/>
												</svg>
											</span>
											<br>Mastercard<br><span class="radio-button"></span></label>
										</div>
									</div>
									<div class="inner-third right text-center half-sm">
										<div class="amex-button picture-button">
											<label for="payment_card_amex" class="btn-bhv">
												<span class="icon-amex icon">
													<svg width="136.4px" height="80px" viewBox="0 0 136.4 80">
														<path class="rectangle" d="M136.4,5.2v69.6c0,2.9-2.3,5.2-5.2,5.2H5.2C2.3,80,0,77.7,0,74.8V5.2
														C0,2.3,2.3,0,5.2,0h126C134,0,136.4,2.3,136.4,5.2z"/>
														<path class="brand" d="M44.6,32.1h2.2L45,36.3h-2.5l-2.9-7.1v7.1h-2.4v-9.4
														h3.6l2.9,7.3L44.6,32.1L44.6,32.1z M48.1,32.1h2.4v4.2h-2.4V32.1L48.1,32.1z M52.9,32.1h7.3v0.2h-5.1v2.1h6v1.8h-8.2V32.1L52.9,32.1
														z M62.1,32.1h8.1c-0.1,0-0.2,0.1-0.3,0.1c0.4,0.1,0.8,0.3,1,0.4c0.2,0.1,0.4,0.4,0.6,0.6c0.1,0.2,0.2,0.4,0.3,0.6
														c0.1,0.2,0.1,0.5,0.1,0.9c0.1,0.7,0.2,1.1,0.3,1.4h-2.6c-0.1-0.2-0.2-0.7-0.2-1.3c-0.1-0.6-0.2-1-0.4-1.3c-0.2-0.3-0.4-0.5-0.8-0.7
														c-0.4-0.2-1-0.3-1.9-0.3h-1.9v3.6h-2.3V32.1L62.1,32.1z M73.5,32.1h2v4.2h-2V32.1L73.5,32.1z M76.8,32.1h2.3c0.1,1,0.3,1.7,0.8,2
														c0.4,0.3,1,0.5,1.8,0.5h1.7l1.1-2.5h2.2l-0.1,0.3h2.7l-0.1-0.3h2.2l1.8,4.2h-2.4l-0.9-2.2H86l-0.9,2.2h-0.5h-1.9h-1.4
														c-0.6,0-1.1,0-1.5-0.1c-1.2-0.2-2-0.9-2.5-1.9C77,33.6,76.8,32.9,76.8,32.1L76.8,32.1z M94.1,32.1h2v4.2h-2V32.1L94.1,32.1z
														 M97.7,32.1h2l1,1.8v-1.8h2v4.2H100L97.7,32.1L97.7,32.1z M102.6,32.1h-2v-5.3h2V32.1L102.6,32.1z M99.6,32.1h-2l-1.6-2.7v2.7h-2
														v-5.3h2.6L99.6,32.1L99.6,32.1z M91.3,32.1h-2.2l-1.2-3l-1.3,3h-2.2l2.2-5.3h2.4L91.3,32.1L91.3,32.1z M79.1,32.1h-2.3
														c0-0.2,0-0.3,0-0.5c0-1.3,0.3-2.3,0.8-3.1c0.4-0.6,0.8-1,1.5-1.2c0.6-0.3,1.4-0.4,2.4-0.4h3.3v1.7h-3c-0.9,0-1.6,0.2-2,0.7
														c-0.4,0.4-0.5,1.1-0.5,2.2C79,31.7,79.1,31.9,79.1,32.1L79.1,32.1z M75.6,32.1h-2v-5.3h2V32.1L75.6,32.1z M70.3,32.1h-8.1v-5.3h5.4
														c1.5,0,2.6,0.2,3.2,0.5c0.4,0.2,0.7,0.5,1,0.9c0.2,0.4,0.3,0.8,0.3,1.2c0,0.9-0.3,1.6-0.8,2.1C71,31.8,70.7,32,70.3,32.1L70.3,32.1z
														 M60.2,32.1h-7.3v-5.3h8v1.8h-5.8v1.9h5.1V32.1L60.2,32.1z M50.4,32.1h-2.4v-2.9l-1.3,2.9h-2.2l2.2-5.3h3.6V32.1L50.4,32.1z
														 M92.8,53.1v-1.7h4.2c0.7,0,1.1-0.1,1.3-0.2c0.3-0.2,0.5-0.5,0.5-0.9c0-0.5-0.2-0.8-0.6-1c-0.2-0.1-0.6-0.2-1-0.2h-1.7
														c-1,0-1.8-0.2-2.2-0.6c-0.3-0.2-0.5-0.6-0.7-0.9c-0.2-0.4-0.2-0.8-0.2-1.2c0-0.7,0.2-1.3,0.6-1.8c0.4-0.5,0.9-0.8,1.8-0.9
														c0.3,0,0.7,0,1.2,0h4.5v1.7h-4.1c-0.6,0-1,0-1.2,0.1c-0.4,0.1-0.6,0.4-0.6,1c0,0.4,0.2,0.8,0.5,0.9c0.2,0.1,0.6,0.2,1.1,0.2h1.5
														c0.7,0,1.3,0.1,1.7,0.2c0.6,0.2,1.1,0.6,1.3,1.2c0.2,0.5,0.3,0.9,0.3,1.5c0,0.6-0.1,1.1-0.4,1.5c-0.4,0.6-0.9,1-1.6,1.2
														c-0.3,0.1-0.9,0.1-1.6,0.1H92.8L92.8,53.1z M83,43.7h8v1.8h-5.8v1.9h5.1v1.8h-5.1v2.1h6v1.8H83V43.7L83,43.7z M44.6,43.7H52l0,0h3
														l2.2,3.1l2.4-3.1h2.2h0.8h4.4c1,0,1.6,0.1,2,0.2c0.7,0.2,1.2,0.6,1.6,1.3c0.3,0.5,0.4,1,0.4,1.6c0,0.5-0.1,0.9-0.3,1.4
														c-0.2,0.4-0.5,0.8-0.8,1.1c-0.3,0.2-0.6,0.4-1,0.5c-0.4,0.1-0.8,0.1-1.4,0.1h-3.6v3.3h-1.4h-0.8h-2.1l-2.5-3.2l-2.5,3.2h-2h-0.9
														h-7.3V43.7L44.6,43.7z M52.6,44.5v1h-5.8v1.9h5.1v1.8h-5.1v2.1h6l0.6,0l2.4-3L52.6,44.5L52.6,44.5z M102.1,53.1v-1.7h4.2
														c0.7,0,1.1-0.1,1.3-0.2c0.3-0.2,0.5-0.5,0.5-0.9c0-0.5-0.2-0.8-0.6-1c-0.2-0.1-0.6-0.2-1-0.2h-1.7c-1,0-1.8-0.2-2.2-0.6
														c-0.3-0.2-0.5-0.6-0.7-0.9c-0.2-0.4-0.2-0.8-0.2-1.2c0-0.7,0.2-1.3,0.6-1.8c0.4-0.5,0.9-0.8,1.8-0.9c0.3,0,0.7,0,1.2,0h4.5v1.7h-4.1
														c-0.6,0-1,0-1.2,0.1c-0.4,0.1-0.6,0.4-0.6,1c0,0.4,0.2,0.8,0.5,0.9c0.2,0.1,0.6,0.2,1.1,0.2h1.5c0.7,0,1.3,0.1,1.7,0.2
														c0.6,0.2,1.1,0.6,1.3,1.2c0.2,0.5,0.3,0.9,0.3,1.5c0,0.6-0.1,1.1-0.4,1.5c-0.4,0.6-0.9,1-1.6,1.2c-0.3,0.1-0.9,0.1-1.6,0.1H102.1
														L102.1,53.1z M74.9,47.9h2.9c0.5,0,0.8-0.1,1-0.2c0.3-0.2,0.5-0.6,0.5-1.1c0-0.6-0.2-0.9-0.7-1.1c-0.2-0.1-0.4-0.1-0.8-0.1h-2.9
														V47.9L74.9,47.9z M74.9,49.6v3.6h-2.1v-9.4h4.8c1.4,0,2.3,0.2,2.9,0.5c0.4,0.2,0.7,0.5,0.9,0.9c0.2,0.4,0.3,0.8,0.3,1.2
														c0,0.9-0.2,1.6-0.7,2.1c-0.3,0.3-0.7,0.5-1.2,0.7c0.4,0.1,0.7,0.3,0.9,0.4c0.2,0.1,0.4,0.4,0.5,0.6c0.1,0.2,0.2,0.4,0.3,0.6
														c0,0.2,0.1,0.5,0.1,0.9c0.1,0.7,0.1,1.1,0.2,1.4h-2.4c-0.1-0.2-0.1-0.7-0.2-1.3c-0.1-0.6-0.2-1-0.3-1.3c-0.2-0.3-0.4-0.5-0.7-0.7
														c-0.4-0.2-0.9-0.3-1.7-0.3H74.9L74.9,49.6z M61.8,44.7l-3.1,3.7l3.1,3.8V44.7L61.8,44.7z M64.1,48.2h3c0.5,0,0.9-0.1,1.1-0.2
														c0.3-0.2,0.5-0.6,0.5-1.2c0-0.6-0.2-1-0.7-1.2c-0.2-0.1-0.5-0.1-0.8-0.1h-3.1V48.2L64.1,48.2z M31.3,29.1l-1.4,3.3h2.8L31.3,29.1
														L31.3,29.1z M26.1,36.3l4-9.4h2.4l4,9.4h-2.4l-0.9-2.2h-3.7l-0.9,2.2H26.1L26.1,36.3z M64.5,31h3.3c0.5,0,0.9-0.1,1.2-0.2
														c0.3-0.2,0.5-0.6,0.5-1.1c0-0.6-0.3-0.9-0.8-1.1c-0.2-0.1-0.5-0.1-0.9-0.1h-3.3V31L64.5,31z"/>
													</svg>
												</span>
												<br>AMEX<br><span class="radio-button"></span>
											</label>
										</div>
									</div>
									<div class="clear-fix"></div>
									<div class="radio-inputs">
										<input type="radio" name="payment_card" id="payment_card_visa" value="visa" required tabindex="30">
										<input type="radio" name="payment_card" id="payment_card_mastercard" value="mastercard" required tabindex="30">
										<input type="radio" name="payment_card" id="payment_card_amex" value="amex" required tabindex="30">
									</div>
									<div class="clear-fix"></div>
									</div>

									<div class="form-group full">
										<label for="payment_cardholdername">Cardholder Name</label>
										<input  name="payment_cardholdername"  type="text" class="" id="payment_cardholdername"  required tabindex="31">
									</div>
									<div class="form-group full">
										<label for="payment_cardnumber">Cardholder Number</label>
										<input  name="payment_cardnumber"  type="number" class="" id="payment_cardnumber"  required tabindex="32">
									</div>

								<div class="form-group full">
									<div class="inner-third-third left text-left">
										<label for="creditcard_month">Expiry Month</label>
										<select name="creditcard_month" class="" id="creditcard_month" tabindex="33">
											<option value="01" selected>01</option>
											<option value="02">02</option>
											<option value="03">03</option>
											<option value="04">04</option>
											<option value="05">05</option>
											<option value="06">06</option>
											<option value="07">07</option>
											<option value="08">08</option>
											<option value="09">09</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
										</select>
										<div class="clear-fix"></div>
									</div>

									<div class="inner-third-third middle text-left">
										<label for="creditcard_year">Expiry Year</label>
										<select name="creditcard_year" class="" id="creditcard_year" tabindex="34">
											<option value="2016" selected>2016</option>
											<option value="2017">2017</option>
											<option value="2018">2018</option>
											<option value="2019">2019</option>
											<option value="2020">2020</option>
											<option value="2021">2021</option>
											<option value="2022">2022</option>
											<option value="2023">2023</option>
											<option value="2024">2024</option>
											<option value="2025">2025</option>
											<option value="2026">2026</option>
											<option value="2027">2027</option>
										</select>
										<div class="clear-fix"></div>
									</div>

									<div class="inner-third-third right text-left">
										<label class="nowrap" for="payment_cvv">CVV <a class="small-link" href="">What is this?</a></label>
										
									<input  name="payment_cvv"  type="number" class="" id="payment_cvv"  required tabindex="35">


										<div class="clear-fix"></div>
									</div>
								</div>




								</div>
								<!-- END CREDIT CARD CHOICE -->


								<!-- START: DELIVERY DETAILS -->
								<div id="direct-debit-choice">
								<div class="form-group full">
								<div class="direct-debit-info-box">
									
									<p><strong>Direct Debit Details</strong></p>
									<table class="direct-debit-details">
									<tr><td class="item-name">ACC:</td><td class="item-detail">123 456</td></tr>
									<tr><td class="item-name">BSB:</td><td class="item-detail">7897 7898</td></tr>
									<tr><td class="item-name">REF #</td><td class="item-detail">7888887</td></tr>
									</table>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste minus, labore est vero, mollitia odio modi quas atque praesentium veniam fugiat, beatae incidunt rem recusandae suscipit.</p>
								</div>

								</div>
								</div>

								<div class="form-group half text-left">
									<button type="button" class="btn prev-button next-button secondary-button action-goto-step2 clickable go-back" id="step3previous" tabindex="36">Previous</button>
								</div>
								<div class="form-group half text-right">
									<button type="submit" class="btn next-button main-button" id="final-submit-button" tabindex="37">Submit Order</button>
								</div>
								<div class="clear-fix"></div>
							</div>
						</div>
					</section>
					<!--END OF STEP 3.PAYMENT - RECEIVING GOODS SECTION -->

				</form>
			</div>
		</div>
		<!--END OF MAIN FORM SECTION -->
	</div>
</div>
</div>
<!--END OF PAGE SECTION -->