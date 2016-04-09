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
				<?php include "templates/Includes/checkout-sidebar.php" ?>
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
								<span class="dots"></span>
								<span id="steps-indicator2" class="indicator-button action-goto-step2">2</span>
								<span class="dots"></span>
								<span id="steps-indicator3" class="indicator-button">3</span>

							</div>
						</div>
						<div class="clear-fix"></div>
					</header>
					<form id="checkout-cart" action="checkout-cart-success.php">
						<!--START OF STEP 1 - DETAILS SECTION -->
						<section id="order-details" class="section-box">
							
							<div class="form-section">
								<div class="form-group-wrap">
									<header class="header-section">
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
										<button type="button" class="btn next-button green-button action-goto-step2 clickable" id="step1next" tabindex="9">Next</button>
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
									<div class="form-group half sm-full">
										<label for="receiving_jobname">Job Name</label>
										<input  name="receiving_jobname"  type="text" class="" id="receiving_jobname"  required tabindex="10">
									</div>
									<div class="form-group half sm-full">
										<label for="receiving_ordernumber">Order Number</label>
										<input  name="receiving_ordernumber"  type="text" class="" id="receiving_ordernumber"  required tabindex="11">
									</div>
									<div class="form-group full">
										<div class="info">
											<h6>How would you like to recieve the goods? </h6>
										</div>
										<div class="inner-half left text-center">
											<div class="delivery-button picture-button">
												<label for="receiving_receivegoods_delivery" class="btn-bhv"><span class="icon-delivery div" ></span><br>Delivery<br><span class="radio-button"></span></label>
											</div>
										</div>
										<div class="inner-half right text-center">
											<div class="pickup-button picture-button">
												<label for="receiving_receivegoods_pickup" class="btn-bhv"><span class="icon-pickup div"></span><br>Pick up<br><span class="radio-button"></span></label>
											</div>
										</div>
										<div class="clear-fix"></div>
										<div class="radio-inputs">
											<input type="radio" name="receiving_receivegoods" id="receiving_receivegoods_pickup" value="pickup" required tabindex="12"><input type="radio" name="receiving_receivegoods" id="receiving_receivegoods_delivery" value="delivery" required tabindex="12">
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
										<div class="info bg-info-icon">
											<h6>Delivery Requirements</h6>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque cum doloremque, necessitatibus et vero reiciendis voluptates dicta eos inventore blanditiis tempora soluta aut minima ullam voluptatem, unde, fugiat provident quidem nisi perspiciatis nihil incidunt! Natus, quas hic voluptatem delectus nobis.</p>
										</div>
									</div>
									<div class="form-group half-big">
										<label for="receiving_date">Required By</label>
										<input name="receiving_date" type="text" class="" id="receiving_date" placeholder="Select date" value="" readonly="readonly" required tabindex="14">
									</div>
									<div class="form-group half-small">
										<label for="receiving_time">Time</label>
										<select name="receiving_time" class="" id="receiving_time" required tabindex="15">
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
										<select name="receiving_previousaddress" class="" id="receiving_previousaddress" required tabindex="16">
											<option value="">Select previous address</option>
										</select>
										<div class="clear-fix"></div>
									</div>
									<div class="form-group half full-sm text-right enter-new-address no-space-top enter-new-address-bottom">
										<span class="or">OR</span>
										<button type="button" class="btn green-button new-address action-enter-new-address" tabindex="17">Enter new address</button>
										<div class="clear-fix"></div>
									</div>
									<div class="clear-fix"></div>
									<div id="delivery-address">
										<div class="inner-form-section">
											<div class="form-group full">
												<label for="receiving_address">Street Address</label>
												<input name="receiving_address" type="text" class="" id="receiving_address"  required tabindex="18">
											</div>
											<div class="form-group half sm-full">
												<label for="receiving_suburb">Suburb</label>
												<input name="receiving_suburb" type="text" class="" id="receiving_suburb"  required tabindex="19">
											</div>
											<div class="form-group quarter-big" >
												<label for="receiving_state">State</label>
												<select name="receiving_state" class="" id="receiving_state" tabindex="20">
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
												<input name="receiving_postcode" type="number" class="" id="receiving_postcode" required tabindex="21" min="1000" max="9999">
											</div>
											<div class="clear-fix"></div>
											<div class="form-group half sm-full">
												<label for="receiving_name">Site Contact Name</label>
												<input name="receiving_name" type="text" class="" id="receiving_name"  required tabindex="22">
											</div>
											<div class="form-group half sm-full">
												<label for="receiving_phone">Site Contact Phone</label>
												<input name="receiving_phone" type="text" class="" id="receiving_phone"  required tabindex="23">
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
													<h6 class="branch-name">Plumbing Collingwood</h6>
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
												<input name="pickup_branch" type="text" class="pickup_branch search-box" id="pickup_branch" autocomplete="false" tabindex="24">
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
										<select name="pickup_previouscontact" class="" id="pickup_previouscontact" required tabindex="25">
											<option value="">Select previous contact</option>
										</select>
										<div class="clear-fix"></div>
									</div>
									<div class="form-group half full-sm text-right enter-new-contact no-space-top">
										<span class="or">OR</span>
									<button type="button" class="btn green-button new-contact action-enter-new-contact" tabindex="26">Enter new contact</div>
									<div class="clear-fix"></button>
									</div>
									<div class="clear-fix"></div>
									<div class="inner-section">
										<div class="form-group half full-sm">
											<label for="pickup_name">Name</label>
											<input name="pickup_name" type="text" class="" id="pickup_name"  required tabindex="27">
										</div>
										<div class="form-group half full-sm">
											<label for="pickup_phone">Phone</label>
											<input name="pickup_phone" type="text" class="" id="pickup_phone"  required tabindex="28">
										</div>
										<div class="clear-fix"></div>
									</div>
								</div>
								<div id="order-comments">
									<div class="form-group full space-above">
										<label for="pickup_ordercomments">Order Comments</label>
										<textarea name="pickup_ordercomments" rows="8" id="pickup_ordercomments" placeholder="e.g. If I'm not at home, please leave goods in garage." tabindex="29"></textarea>
									</div>
								</div>
								<div class="form-group half text-left">
									<button type="button" class="btn prev-button next-button grey-button action-goto-step1 clickable" id="step2previous" tabindex="31">Previous</button>
								</div>
								<div class="form-group half text-right">
									<button type="button" class="btn prev-button next-button green-button action-goto-step3 clickable" id="step3next" tabindex="31">Next</button>
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
									<select name="payment_paymenttype" class="" id="payment_paymenttype" required tabindex="25">
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
											<label for="payment_card_visa" class="btn-bhv"><span class="icon-visa div" ></span><br>Visa<br><span class="radio-button"></span></label>
										</div>
									</div>
									<div class="inner-third middle text-center half-sm">
										<div class="mastercard-button picture-button">
											<label for="payment_card_mastercard" class="btn-bhv"><span class="icon-mastercard div"></span><br>Mastercard<br><span class="radio-button"></span></label>
										</div>
									</div>
									<div class="inner-third right text-center half-sm">
										<div class="amex-button picture-button">
											<label for="payment_card_amex" class="btn-bhv"><span class="icon-amex div"></span><br>AMEX<br><span class="radio-button"></span></label>
										</div>
									</div>
									<div class="clear-fix"></div>
									<div class="radio-inputs">
										<input type="radio" name="payment_card" id="payment_card_visa" value="visa" required tabindex="12">
										<input type="radio" name="payment_card" id="payment_card_mastercard" value="mastercard" required tabindex="12">
										<input type="radio" name="payment_card" id="payment_card_amex" value="amex" required tabindex="12">
									</div>
									<div class="clear-fix"></div>
									</div>

									<div class="form-group full">
										<label for="payment_cardholdername">Cardholder Name</label>
										<input  name="payment_cardholdername"  type="text" class="" id="payment_cardholdername"  required tabindex="10">
									</div>
									<div class="form-group full">
										<label for="payment_cardnumber">Cardholder Number</label>
										<input  name="payment_cardnumber"  type="number" class="" id="payment_cardnumber"  required tabindex="10">
									</div>

								<div class="form-group full">
									<div class="inner-third-third left text-left">
										<label for="creditcard_month">Expiry Month</label>
										<select name="creditcard_month" class="" id="creditcard_month" required tabindex="25">
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
										<select name="creditcard_year" class="" id="creditcard_year" required tabindex="25">
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

									<div class="inner-third-small right text-left">
										<label class="nowrap" for="payment_cvv">CVV <a class="small-link" href="">What is this?</a></label>
										
									<input  name="payment_cvv"  type="number" class="" id="payment_cvv"  required tabindex="10">


										<div class="clear-fix"></div>
									</div>
								</div>




								</div>
								<!-- END CREDIT CARD CHOICE -->


								<!-- START: DELIVERY DETAILS -->
								<div id="direct-debit-choice">
								<div class="form-group full">
									
									<p><strong>Direct Debit Details</strong></p>
									<table class="direct-debit-details">
									<tr><td class="item-name">ACC:</td><td class="item-detail">123 456</td></tr>
									<tr><td class="item-name">BSB:</td><td class="item-detail">7897 7898</td></tr>
									<tr><td class="item-name">REF #</td><td class="item-detail">7888887</td></tr>
									</table>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste minus, labore est vero, mollitia odio modi quas atque praesentium veniam fugiat, beatae incidunt rem recusandae suscipit.</p>

								</div>
								</div>

								<div class="form-group half text-left">
									<button type="button" class="btn prev-button next-button grey-button action-goto-step2 clickable go-back" id="step3previous" tabindex="31">Previous</button>
								</div>
								<div class="form-group half text-right">
									<button type="submit" class="btn next-button green-button" id="final-submit-button" tabindex="32">Submit Order</button>
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