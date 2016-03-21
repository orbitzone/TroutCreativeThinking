<section class="breadcrumbs bg-mid-grey">
	<div class="container-fluid section-container">
		<div class="row">
			<div class="col-xs-12">
				<p>Checkout</p>
			</div>
		</div>
	</div>
</section>
<section class="main-section">
	<div class="container-fluid section-container">
		<div class="row">
			<div class="col-sm-5 col-sm-push-7 bg-light-grey bg-sm-blue">
				<?php include "templates/Includes/checkout-sidebar.php" ?>
			</div>
			<div class="col-sm-7 col-sm-pull-5">
				<div id="order-form" class="padding-top">
					<h1>Order Summary</h1>
					<form id="checkout-cart">
						<section id="order-details" class="section-box">
							<header class="expand-collapse"><h3>1. Details</h3></header>
							<div class="one-section">
								<div class="form-group-wrap">
									<div class="form-group half">
										<label for="details_firstname">First Name</label>
										<input name="details_firstname" type="text" class="" id="details_firstname" placeholder="First Name" required>
									</div>
									<div class="form-group half">
										<label for="details_lastname">Last Name</label>
										<input name="details_lastname" type="text" class="" id="details_lastname" placeholder="Last Name" required>
									</div>
									<div class="clear-fix"></div>
									<div class="form-group half">
										<label for="details_phone">Phone Number</label>
										<input name="details_phone" type="text" class="" id="details_phone" placeholder="Phone Number" required>
									</div>
									<div class="form-group full">
										<label for="details_email">Email Address</label>
										<input name="details_email" type="email" class="" id="details_email" placeholder="Email Address" required>
									</div>
									<div class="form-group full">
										<label for="details_address">Street Address</label>
										<input name="details_address" type="text" class="" id="details_address" placeholder="Street Address" required>
									</div>
									<div class="form-group half">
										<label for="details_suburb">Suburb</label>
										<input name="details_suburb" type="text" class="" id="details_suburb" placeholder="Suburb" required>
									</div>
									<div class="form-group quarter-big" >
										<label for="details_state">State</label>
										<select name="details_state" id="details_state" class="" required>
											<option value="">--select--</option>
											<option value="ACT">ACT</option>
											<option value="NT">NT</option>
											<option value="NSW">NSW</option>
											<option value="Qld">Qld</option>
											<option value="SA">SA</option>
											<option value="Tas">Tas</option>
											<option value="VIC">VIC</option>
											<option value="WA">WA</option>
										</select>
									</div>
									<div class="form-group quarter-small">
										<label for="details_postcode">Postcode</label>
										<input name="details_postcode" type="text" class="" id="details_postcode" placeholder="Postcode" required>
									</div>
									<div class="form-group full text-right">
										<div class="btn next-button blue-button">Next</div>
									</div>
									<div class="clear-fix"></div>
								</div>
							</div>
						</section>
						<section id="receiving-goods" class="section-box">
							<header class="expand-collapse"><h3>2. Receiving Goods</h3></header>
							<div class="one-section">
								<div class="form-group-wrap">
									<div class="form-group half">
										<label for="receiving_jobname">Job Name</label>
										<input  name="receiving_jobname"  type="text" class="" id="receiving_jobname" placeholder="Job Name" required>
									</div>
									<div class="form-group half">
										<label for="receiving_ordernumber">Order Number</label>
										<input  name="receiving_ordernumber"  type="text" class="" id="receiving_ordernumber" placeholder="Order Number" required>
									</div>
									<div class="form-group full">
										<div class="info">
											<h6>How would you like to recieve the goods? </h6>
											<p>A Reece consultant will call you within 1 business day to confirm you delivery or  pickup time frame.Time frames will differ depending onthe type of product/s ordered.</p>
										</div>
										<div class="inner-half left text-center">
											
											<label for="receiving_receivegoods_delivery">[image]<br>Delivery</label><br>
											<input type="radio" name="receiving_receivegoods" id="receiving_receivegoods_delivery" value="delivery" checked required>
										</div>
										<div class="inner-half right text-center">
											
											<label for="receiving_receivegoods_pickup">[image]<br>Pick up</label><br>
											<input type="radio" name="receiving_receivegoods" id="receiving_receivegoods_pickup" value="pickup" required>
										</div>
										<div class="clear-fix">
										</div>
									</div>
									<div class="clear-fix"></div>
									<!-- START: DELIVERY DETAILS -->
									<div id="delivery-details">
										<header><h3>Delivery Details</h3></header>
										<div class="form-group full">
											<div class="info">
												<h6>Delivery Requirements</h6>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque cum doloremque, necessitatibus et vero reiciendis voluptates dicta eos inventore blanditiis tempora soluta aut minima ullam voluptatem, unde, fugiat provident quidem nisi perspiciatis nihil incidunt! Natus, quas hic voluptatem delectus nobis.</p>
											</div>
										</div>
										<div class="form-group half-big">
											<label for="receiving_date">Required By</label>
											<input name="receiving_date" type="date" class="" id="receiving_date" placeholder="dd/mm/yyyy" required>
										</div>
										<div class="form-group half-small">
											<label for="receiving_time">Time</label>
											<select name="receiving_time" class="" id="receiving_time" required>
												<option value="">--Select--</option>
												<option value="9:30">9:30PM</option>
												<option value="10:30">10:30PM</option>
												<option value="11:30">11:30PM</option>
												<option value="12:30">12:30PM</option>
												<option value="etc">etc</option>
											</select>
										</div>
										<div class="form-group full">
											<label for="receiving_previousaddress">Delivery Address</label>
										</div>
										<div class="form-group half">
											<select name="receiving_previousaddress" class="" id="receiving_previousaddress" required>
												<option value="">Select previous address</option>
												<option value="114">114 Burwood Hwy</option>
												<option value="434">434 Burwood Hwy</option>
												<option value="545">545 Burwood Hwy</option>
												<option value="656">656 Burwood Hwy</option>
											</select>
										</div>
										<div class="form-group half text-right enter-new-address">
											<span class="or hidden-xs">OR</span>
											<div class="btn blue-button new-address">Enter new address</div>
										</div>
										<div class="form-group full">
											<div class="inner-form-section pop-title">
												<h6 class="enter-new-address-text active">Enter New Address</h6>
												<h6 class="previous-address-text active">Previous Address</h6>
											</div>
										</div>
										<div class="clear-fix">
										<div class="inner-form-section">
											<div class="form-group full">
												<label for="receiving_address">Street Address</label>
												<input name="receiving_address" type="text" class="" id="receiving_address" placeholder="Street Address" required>
											</div>
											<div class="form-group half">
												<label for="receiving_suburb">Suburb</label>
												<input name="receiving_suburb" type="text" class="" id="receiving_suburb" placeholder="Suburb" required>
											</div>
											<div class="form-group quarter-big" >
												<label for="receiving_state">State</label>
												<select name="receiving_state" class="" id="receiving_state" required>
													<option value="">--select--</option>
													<option value="ACT">ACT</option>
													<option value="NT">NT</option>
													<option value="NSW">NSW</option>
													<option value="Qld">Qld</option>
													<option value="SA">SA</option>
													<option value="Tas">Tas</option>
													<option value="VIC">VIC</option>
													<option value="WA">WA</option>
												</select>
											</div>
											<div class="form-group quarter-small">
												<label for="receiving_postcode">Postcode</label>
												<input name="receiving_postcode" type="text" class="" id="receiving_postcode" placeholder="Postcode" required>
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
												<input name="receiving_name" type="text" class="" id="receiving_name" placeholder="Name" required>
											</div>
											<div class="form-group half">
												<label for="receiving_phone">Phone</label>
												<input name="receiving_phone" type="text" class="" id="receiving_phone" placeholder="Phone" required>
											</div>
											<div class="clear-fix"></div>
										</div>
										<div class="clear-fix">
										</div>
									</div>
									<!-- END: DELIVERY DETAILS -->
									<!-- START: PICK UP DETAILS -->
									<div id="pickup-details">
										<header><h3>Pick Up Details</h3></header>
										<div class="form-group full">
											<label for="pickup_branch">Pick Up Branch</label>
											<select name="pickup_branch" class="" id="pickup_branch" required>
												<option value="">Select</option>
												<option value="collingwood">Plumbing Collingwood</option>
												<option value="melbourne">Plumbing Melbourne</option>
												<option value="etc">Etc</option>
											</select>
											<div class="info">
												<div class="inner-half left text-left">
													<h6>Branch Address</h6>
													2 Millicent St,<br>Burwood VIC 3125
												</div>
												<div class="inner-half right text-left">
													<h6>Branch Phone</h6>
													(03) 9270 1966
												</div>
											</div>
										</div>
										<div class="form-group full">
											<label for="pickup_previouscontact">Pick Up Contact</label>
											<select name="pickup_previouscontact" class="" id="pickup_previouscontact" required>
												<option value="">Select previous contact</option>
												<option value="johnsmith">John Smith</option>
												<option value="janesmith">Jame Smith</option>
												<option value="etc">Etc</option>
											</select>
										</div>
										<div class="form-group half">
											<label for="pickup_name">Name</label>
											<input name="pickup_name" type="text" class="" id="pickup_name" placeholder="Name" required>
										</div>
										<div class="form-group half">
											<label for="pickup_phone">Phone</label>
											<input name="pickup_phone" type="text" class="" id="pickup_phone" placeholder="Phone" required>
										</div>
										<div class="form-group full">
											<label for="pickup_ordercomments">Order Comments</label>
											<textarea name="pickup_ordercomments" rows="8" id="pickup_ordercomments" required></textarea>
										</div>
										<div class="form-group full">
											<ul class="radio-list">
												<li><input type="radio" name="pickup_notification" id="pickup_notification_none" value="none" checked> <label for="pickup_notification_none">None</label></li>
												<li><input type="radio" name="pickup_notification" id="pickup_notification_email" value="email"> <label for="pickup_notification_email">Email</label></li>
												<li><input type="radio" name="pickup_notification" id="pickup_notification_sms" value="sms"> <label for="pickup_notification_sms">SMS</label></li>
											</ul>
										</div>
										<div class="clear-fix"></div>
									</div>
									<div class="form-group half text-left">
										<div class="btn next-button grey-button">Previous</div>
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