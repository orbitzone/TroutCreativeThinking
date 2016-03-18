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
					<form>
						<section id="order-details" class="section-box">
						<header class="expand-collapse"><h3>1. Details</h3></header>
						<div class="one-section">
							<div class="form-group-wrap">
								<div class="form-group half">
									<label for="">First Name</label>
									<input type="text" class="form-control" id="" placeholder="First Name">
								</div>
								<div class="form-group half">
									<label for="">Last Name</label>
									<input type="text" class="form-control" id="" placeholder="Last Name">
								</div>
								<div class="form-group half">
									<label for="">Phone Number</label>
									<input type="text" class="form-control" id="" placeholder="Phone Number">
								</div>
								<div class="form-group full">
									<label for="">Email Address</label>
									<input type="email" class="form-control" id="" placeholder="Email Address">
								</div>
								<div class="form-group full">
									<label for="">Street Address</label>
									<input type="text" class="form-control" id="" placeholder="Street Address">
								</div>
								<div class="form-group half">
									<label for="">Suburb</label>
									<input type="text" class="form-control" id="" placeholder="Suburb">
								</div>
								<div class="form-group quarter-big" >
									<label for="">State</label>
									<select class="form-control">
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
									<label for="">Postcode</label>
									<input type="text" class="form-control" id="" placeholder="Postcode">
								</div>
								<div class="form-group full text-right">
									<div class="btn next-button blue-button">Next</div>
								</div>
								<div class="clear-fix"></div>
							</div>
						</div>
					</section>
					<section id="delivery-details" class="section-box">
					<header class="expand-collapse"><h3>2. Receiving Goods</h3></header>
					<div class="one-section">
						<div class="form-group-wrap">
							<div class="form-group half">
								<label for="">Job Name</label>
								<input type="text" class="form-control" id="" placeholder="Job Name">
							</div>
							<div class="form-group half">
								<label for="">Order Number</label>
								<input type="text" class="form-control" id="" placeholder="Order Number">
							</div>
							<div class="form-group full">
								<div class="info">
									<h6>How would you like to recieve the goods? </h6>
									<p>A Reece consultant will call you within 1 business day to confirm you delivery or  pickup time frame.Time frames will differ depending onthe type of product/s ordered.</p>
								</div>
								<div class="inner-half left text-center">
									[image]<br>
									<label for="">Delivery</label><br>
									<input type="radio" name="receive-goods" value="delivery" checked>
								</div>
								<div class="inner-half right text-center">
									[image]<br>
									<label for="">Pick up</label><br>
									<input type="radio" name="receive-goods" value="pickup">
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
								<label for="">Required By</label>
								<input type="date" class="form-control" id="" placeholder="dd/mm/yyyy">
							</div>
							<div class="form-group half-small">
								<label for="">Time</label>
								<select class="form-control">
									<option value="">8:30PM</option>
									<option value="">9:30PM</option>
									<option value="">10:30PM</option>
									<option value="">11:30PM</option>
									<option value="">12:30PM</option>
									<option value="">etc</option>
								</select>
							</div>
							<div class="form-group full">
								<label for="">Delivery Address</label>
							</div>
							<div class="form-group half">
								<select class="form-control">
									<option value="">Select previous address</option>
									<option value="">114 Burwood Hwy</option>
									<option value="">434 Burwood Hwy</option>
									<option value="">545 Burwood Hwy</option>
									<option value="">656 Burwood Hwy</option>
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
							<div class="inner-form-section">
								<div class="form-group full">
									<label for="">Street Address</label>
									<input type="text" class="form-control" id="" placeholder="Street Address">
								</div>
								<div class="form-group half">
									<label for="">Suburb</label>
									<input type="text" class="form-control" id="" placeholder="Suburb">
								</div>
								<div class="form-group quarter-big" >
									<label for="">State</label>
									<select class="form-control">
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
									<label for="">Postcode</label>
									<input type="text" class="form-control" id="" placeholder="Postcode">
								</div>
								<div class="form-group full">
									<label for="">Site Contact</label>
									<select class="form-control">
										<option value="">Select previous contact</option>
										<option value="johnsmith">John Smith</option>
										<option value="janesmith">Jame Smith</option>
										<option value="etc">Etc</option>
									</select>
								</div>
								<div class="form-group half">
									<label for="">Name</label>
									<input type="text" class="form-control" id="" placeholder="Name">
								</div>
								<div class="form-group half">
									<label for="">Phone</label>
									<input type="text" class="form-control" id="" placeholder="Phone">
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
							<label for="">Pick Up Branch</label>
							<select class="form-control">
								<option value="">--select--</option>
								<option value="burwood">Plumbing Burwood</option>
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
							<label for="">Pick Up Contact</label>
							<select class="form-control">
								<option value="">Select previous contact</option>
								<option value="johnsmith">John Smith</option>
								<option value="janesmith">Jame Smith</option>
								<option value="etc">Etc</option>
							</select>
						</div>
						<div class="form-group half">
							<label for="">Name</label>
							<input type="text" class="form-control" id="" placeholder="Name">
						</div>
						<div class="form-group half">
							<label for="">Phone</label>
							<input type="text" class="form-control" id="" placeholder="Phone">
						</div>
						<div class="form-group full">
							<label for="">Order Comments</label>
							<textarea rows="8"></textarea>
						</div>
						<div class="form-group full">
							<ul class="radio-list">
								<li><input type="radio" name="notification" value="none"> <label for="">None</label></li>
								<li><input type="radio" name="notification" value="email"> <label for="">Email</label></li>
								<li><input type="radio" name="notification" value="sms"> <label for="">SMS</label></li>
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