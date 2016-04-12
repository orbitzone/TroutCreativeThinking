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
						<h1>Order Summary</h1>
					</header>
					<form id="checkout-cart" action="checkout-cart-success.php">
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
										<button type="button" class="btn next-button blue-button action-goto-step2" id="step1next" tabindex="9">Next</button>
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
										<button type="button" class="btn blue-button new-address action-enter-new-address" tabindex="17">Enter new address</button>
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
									<button type="button" class="btn blue-button new-contact action-enter-new-contact" tabindex="26">Enter new contact
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
								<button type="button" class="btn prev-button next-button grey-button action-goto-step1" id="step2previous" tabindex="31">Previous</button>
							</div>
							<div class="form-group half text-right">
								<button type="submit" class="btn next-button blue-button" id="final-submit-button" tabindex="32">Submit Order</button>
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