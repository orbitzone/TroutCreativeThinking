<section class="breadcrumbs bg-mid-grey">
	<div class="container-fluid section-container">
		<div class="row">
			<div class="col-xs-12">
				<p>Checkout</p>
			</div>
		</div>
	</div>
</section>
<section class="main-section" id="checkout-cart-section">
	<div class="container-fluid section-container">
		<div class="row">
			<div class="col-sm-5 col-sm-push-7 bg-dark-grey bg-sm-blue">
				<?php include "templates/Includes/checkout-sidebar.php" ?>
			</div>
			<div class="col-sm-7 col-sm-pull-5">
				<div id="order-form" class="padding-top">
				<header class="main-heading">
					<h1>Order Summary</h1>
				</header>
					<form id="checkout-cart" action="checkout-cart-success.php">
						<section id="order-details" class="section-box">
							<header class="header-section btn-bhv action-goto-step1 active"><h3>1. Details <span class="fa fa-angle-down"></span><span class="fa fa-angle-up"></span></h3></header>
							<div class="form-section">
								<div class="form-group-wrap">
									<div class="form-group half">
										<label for="details_firstname">First Name</label>
										<input name="details_firstname" type="text" class="" id="details_firstname" required>
									</div>
									<div class="form-group half">
										<label for="details_lastname">Last Name</label>
										<input name="details_lastname" type="text" class="" id="details_lastname"  required>
									</div>
									<div class="clear-fix"></div>
									<div class="form-group half">
										<label for="details_phone">Phone Number</label>
										<input name="details_phone" type="text" class="" id="details_phone"  required>
									</div>
									<div class="form-group full">
										<label for="details_email">Email Address</label>
										<input name="details_email" type="email" class="" id="details_email" required>
									</div>
									<div class="form-group full">
										<label for="details_address">Street Address</label>
										<input name="details_address" type="text" class="" id="details_address" required>
									</div>
									<div class="form-group half sm-full">
										<label for="details_suburb">Suburb</label>
										<input name="details_suburb" type="text" class="" id="details_suburb"  required>
									</div>
									<div class="form-group quarter-big" >
										<label for="details_state">State</label>
										<select name="details_state" id="details_state" class="" required>
											<option value="ACT">ACT</option>
											<option value="NT">NT</option>
											<option value="NSW">NSW</option>
											<option value="Qld">Qld</option>
											<option value="SA">SA</option>
											<option value="Tas">Tas</option>
											<option value="VIC" selected>VIC</option>
											<option value="WA">WA</option>
										</select>
									</div>
									<div class="form-group quarter-small">
										<label for="details_postcode">Postcode</label>
										<input name="details_postcode" type="text" class="" id="details_postcode"  required>
									</div>
									<div class="form-group full text-right">
										<div class="btn next-button blue-button action-goto-step2" id="step1next">Next</div>
									</div>
									<div class="clear-fix"></div>
								</div>
							</div>
						</section>
						<section id="receiving-goods" class="section-box">
							<header class="header-section btn-bhv action-goto-step2"><h3>2. Receiving Goods <span class="fa fa-angle-down"></span><span class="fa fa-angle-up"></span></h3></header>
							<div class="form-section">
								<div class="form-group-wrap">
									<div class="form-group half">
										<label for="receiving_jobname">Job Name</label>
										<input  name="receiving_jobname"  type="text" class="" id="receiving_jobname"  required>
									</div>
									<div class="form-group half">
										<label for="receiving_ordernumber">Order Number</label>
										<input  name="receiving_ordernumber"  type="text" class="" id="receiving_ordernumber"  required>
									</div>
									<div class="form-group full">
										<div class="info">
											<h6>How would you like to recieve the goods? </h6>
											<p>A Reece consultant will call you within 1 business day to confirm your delivery or pickup time frame. Time frames will differ depending on the type of product/s ordered.</p>
										</div>
										<div class="inner-half left text-center">
										<div class="delivery-button picture-button">
											<label for="receiving_receivegoods_delivery" class="btn-bhv"><div class="icon-delivery"></div><br>Delivery<br><span class="radio-button"></span></label>
											</div>
										</div>
										<div class="inner-half right text-center">
										<div class="pickup-button picture-button">
											<label for="receiving_receivegoods_pickup" class="btn-bhv"><div class="icon-pickup"></div><br>Pick up<br><span class="radio-button"></span></label>
											</div>
										</div>
										<div class="radio-inputs clear-fix">
											<input type="radio" name="receiving_receivegoods" id="receiving_receivegoods_pickup" value="pickup" required><input type="radio" name="receiving_receivegoods" id="receiving_receivegoods_delivery" value="delivery" required>
										</div>
									</div>
									<div class="clear-fix"></div>
									<!-- START: DELIVERY DETAILS -->
									<div id="delivery-details">
										<header><h3>Delivery Details</h3></header>
										<div class="form-group full">
											<div class="info bg-info-icon">
												<h6>Delivery Requirements</h6>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque cum doloremque, necessitatibus et vero reiciendis voluptates dicta eos inventore blanditiis tempora soluta aut minima ullam voluptatem, unde, fugiat provident quidem nisi perspiciatis nihil incidunt! Natus, quas hic voluptatem delectus nobis.</p>
											</div>
										</div>
										<div class="form-group half-big">
											<label for="receiving_date">Required By</label>
											<input name="receiving_date" type="text" class="" id="receiving_date" placeholder="dd/mm/yyyy" value="" readonly="readonly" required>
										</div>
										<div class="form-group half-small">
											<label for="receiving_time">Time</label>
											<select name="receiving_time" class="" id="receiving_time" required>
												<option value="9:30" selected>9:30PM</option>
												<option value="10:30">10:30PM</option>
												<option value="11:30">11:30PM</option>
												<option value="12:30">12:30PM</option>
												<option value="etc">etc</option>
											</select>
										</div>
										<div class="form-group full">
											<label for="receiving_previousaddress">Delivery Address</label>
										</div>
										<div class="form-group half text-right enter-new-address no-space-bottom enter-new-address-top">
											<div class="btn blue-button new-address action-enter-new-address">Enter new address</div>
											<div class="clear-fix"></div>
											<div class="arrow-triangle"></div>
											<div class="clear-fix"></div>
										</div>
										<div class="form-group half select-previous-address no-space-bottom">
											<select name="receiving_previousaddress" class="" id="receiving_previousaddress" required>
												<option value="">Select previous address</option>
											</select>
											<div class="clear-fix"></div>
											<div class="arrow-triangle"></div>
											<div class="clear-fix"></div>
										</div>
										<div class="form-group half text-right enter-new-address no-space-bottom enter-new-address-bottom">
											<span class="or hidden-xs hidden-sm">OR</span>
											<div class="btn blue-button new-address action-enter-new-address">Enter new address</div>
											<div class="clear-fix"></div>
											<div class="arrow-triangle"></div>
											<div class="clear-fix"></div>
										</div>
									<div id="delivery-address">
										<div class="inner-form-header form-group full">
											<div class="pop-title">
												<h6 class="enter-new-address-text">Enter New Address</h6>
												<h6 class="previous-address-text">Previous Address</h6>
											</div>
										</div>
										<div class="clear-fix"></div>
										<div class="inner-form-section">
											<div class="form-group full">
												<label for="receiving_address">Street Address</label>
												<input name="receiving_address" type="text" class="" id="receiving_address"  required>
											</div>
											<div class="form-group half sm-full">
												<label for="receiving_suburb">Suburb</label>
												<input name="receiving_suburb" type="text" class="" id="receiving_suburb"  required>
											</div>
											<div class="form-group quarter-big" >
												<label for="receiving_state">State</label>
												<select name="receiving_state" class="" id="receiving_state" required>
													<option value="ACT">ACT</option>
													<option value="NT">NT</option>
													<option value="NSW">NSW</option>
													<option value="Qld">Qld</option>
													<option value="SA">SA</option>
													<option value="Tas">Tas</option>
													<option value="VIC" selected>VIC</option>
													<option value="WA">WA</option>
												</select>
											</div>
											<div class="form-group quarter-small">
												<label for="receiving_postcode">Postcode</label>
												<input name="receiving_postcode" type="text" class="" id="receiving_postcode" required>
											</div>
											<div class="form-group full">
												<label for="receiving_previouscontact">Site Contact</label>
												<select name="receiving_previouscontact" class="" id="receiving_previouscontact" required>
													<option value="">Select previous contact</option>
													<option value="johnsmith">John Smith</option>
													<option value="janesmith">Jame Smith</option>
													<option value="etc">Etc</option>
												</select>
											</div>
											<div class="form-group half">
												<label for="receiving_name">Name</label>
												<input name="receiving_name" type="text" class="" id="receiving_name"  required>
											</div>
											<div class="form-group half">
												<label for="receiving_phone">Phone</label>
												<input name="receiving_phone" type="text" class="" id="receiving_phone"  required>
											</div>
											<div class="clear-fix"></div>
										</div>
									</div>
										<div class="clear-fix">
										</div>
									</div>
									<!-- END: DELIVERY DETAILS -->
									<!-- START: PICK UP DETAILS -->
									<div id="pickup-details">
										<header><h3>Pick Up Details</h3></header>
<div class="inner-section">
	<div class="form-group full">
		
		<div class="info branch-info-autofill">
			<div id="branchinfo-address" class="inner-half left text-left">
			</div>
			<div id="branchinfo-phone" class="inner-half right text-left">
			</div>
			<div class="clear-fix"></div>
		</div>

		<label for="pickup_branch">Pick Up Branch</label>
		<input name="pickup_branch" type="text" class="pickup_branch search-box" id="pickup_branch" required>
		<div class="clear-fix"></div>
		<div id="pickupbranch-results">
		</div>
	</div>
	<div class="clear-fix"></div>
</div>
										<div class="form-group full">
											<label for="pickup_previouscontact">Pick Up Contact</label>
											<select name="pickup_previouscontact" class="" id="pickup_previouscontact" required>
												<option value="">Select previous contact</option>
											</select>
										</div>
										<div class="form-group half">
											<label for="pickup_name">Name</label>
											<input name="pickup_name" type="text" class="" id="pickup_name"  required>
										</div>
										<div class="form-group half">
											<label for="pickup_phone">Phone</label>
											<input name="pickup_phone" type="text" class="" id="pickup_phone"  required>
										</div>
										<div class="clear-fix"></div>
									</div>
								<div id="order-comments">	
									<div class="form-group full space-above">
											<label for="pickup_ordercomments"><h3>Order Comments</h3></label>
											<textarea name="pickup_ordercomments" rows="8" id="pickup_ordercomments"></textarea>
										</div>
										<div class="form-group full space-below">
											<ul class="radio-list">
												<li> <label for="pickup_notification_none"><span class="radio-button"><input type="radio" name="pickup_notification" id="pickup_notification_none" value="none" checked></span>None</label></li>
												<li> <label for="pickup_notification_email"><span class="radio-button"><input type="radio" name="pickup_notification" id="pickup_notification_email" value="email"></span>Email</label></li>
												<li><label for="pickup_notification_sms"><span class="radio-button"><input type="radio" name="pickup_notification" id="pickup_notification_sms" value="sms"> </span>SMS</label></li>
											</ul>
										</div>
								</div>
									<div class="form-group half text-left">
										<div class="btn next-button grey-button action-goto-step1" id="step2previous">Previous</div>
									</div>
									<div class="form-group half text-right">
										<button class="btn next-button blue-button">Submit Order</button>
									</div>
									<div class="clear-fix"></div>
								</div>
							</div>
						</section>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
