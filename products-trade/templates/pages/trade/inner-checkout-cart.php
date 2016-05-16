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
				<?php include "templates/includes/trade/checkout-sidebar.php" ?>
			</div>
			<!--END OF SIDEBAR SECTION -->
			<!--START OF MAIN FORM SECTION -->
			<div class="col-sm-7 col-sm-pull-5 section">
				<div id="order-form" class="padding-top">
					<header class="main-heading">
						<h1>Order Summary</h1>
					</header>
					<form id="checkout-cart" action="trade-checkout-cart-success.php">
						<!--START OF STEP 1 - DETAILS SECTION -->
						<section id="order-details" class="section-box">
							<header class="header-section btn-bhv action-goto-step1 active">
								<h3>1. Details <span class="fa fa-angle-down"></span><span class="fa fa-angle-up"></span></h3>
							</header>
							<div class="form-section">
								<div class="form-group-wrap">
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
										<button type="button" class="btn next-button main-button action-goto-step2" id="step1next" tabindex="9">Next</button>
									</div>
									<div class="clear-fix"></div>
								</div>
							</div>
						</section>
						<!--END OF STEP 1 - DETAILS SECTION -->
						<!--START OF STEP 2 - RECEIVING GOODS SECTION -->
						<section id="receiving-goods" class="section-box">
							<header class="header-section btn-bhv action-goto-step2">
								<h3>2. Receiving Goods <span class="fa fa-angle-down"></span><span class="fa fa-angle-up"></span></h3>
							</header>
							<div class="form-section">
								<div class="form-group-wrap">
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
												<br>Delivery<br><span class="radio-button"></span></label>
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
										<select name="receiving_time" class="" id="receiving_time" tabindex="15">
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
										<button type="button" class="btn main-button new-address action-enter-new-address" tabindex="17">Enter new address</button>
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
											<input name="pickup_branch" type="text" class="pickup_branch search-box" id="pickup_branch" autocomplete="off" tabindex="24">
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
									<button type="button" class="btn main-button new-contact action-enter-new-contact" tabindex="26">Enter new contact
									</button>
									<div class="clear-fix"></div>

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
									<label for="pickup_ordercomments"><span class="h3">Order Comments</span></label>
									<textarea name="pickup_ordercomments" rows="8" id="pickup_ordercomments" placeholder="e.g. If I'm not at home, please leave goods in garage." tabindex="29"></textarea>
								</div>
								<div class="form-group full space-below">
									<label>Order Notification</label>
									<ul class="radio-list">
										<li> <label for="pickup_notification_none"><span class="radio-button"><input type="radio" name="pickup_notification" id="pickup_notification_none" value="none" checked tabindex="30"></span>None</label></li>
										<li> <label for="pickup_notification_email"><span class="radio-button"><input type="radio" name="pickup_notification" id="pickup_notification_email" value="email" tabindex="30"></span>Email</label></li>
										<li><label for="pickup_notification_sms"><span class="radio-button"><input type="radio" name="pickup_notification" id="pickup_notification_sms" value="sms" tabindex="30"> </span>SMS</label></li>
									</ul>
								</div>
							</div>
							<div class="form-group half text-left">
								<button type="button" class="btn prev-button next-button secondary-button action-goto-step1" id="step2previous" tabindex="31">Previous</button>
							</div>
							<div class="form-group half text-right">
								<button type="submit" class="btn next-button main-button" id="final-submit-button" tabindex="32">Submit Order</button>
							</div>
							<div class="clear-fix"></div>
						</div>
					</div>
				</section>
				<!--END OF STEP 2 - RECEIVING GOODS SECTION -->
			</form>
		</div>
	</div>
	<!--END OF MAIN FORM SECTION -->
</div>
</div>
</div>
<!--END OF PAGE SECTION -->