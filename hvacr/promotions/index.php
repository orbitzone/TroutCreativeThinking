
	<?php include_once($_SERVER['DOCUMENT_ROOT']."/includes/variables/variables.php"); ?>

	<?php
		$cssScriptPaths = [
			"/assets/css/reece-hvac-r.css",
			"/assets/css/reece-promotions.css"
		];
		include_once($serverBase."/includes/head/head-generic.php");
	?>

	<body>
		<div class="ocmain-wrapper">

			<?php
				$genericNavActiveMenuItem = "HVAC-R";
				include_once($serverBase."/includes/nav/nav-generic.php");
			?>

			<?php
				$tradeSubNavigationItem = "Promotions";
				include_once($serverBase."/includes/nav/nav-subnavbar.php");
			?>

			<div class="content-container">
				<div class="inner-wrapper">

					<ul class="breadcrumb">
						<li><a class="active" href="#">Promotions</a></li>
					</ul>

					<div class="row-fluid hitachi-bg">
						<div class="span6">
							<img src="/assets/images/promotions/hitachi-win.png" />
						</div>
						<div class="span6">
							<img src="/assets/images/promotions/hitachi-product.png" />
						</div>
					</div>

					<div class="row-fluid hitachi-intro">
					<h3>Congratulations on buying a Hitachi air conditioner. Simply fill in your details and tell us why you like Hitachi for your opportunity to win.</h3>
					</div>

					<form class="form-stacked hitachi-form" action="submit.php" method="POST">

					<div class="row-fluid">
						<div class="span12">
							<fieldset>
							<legend>Entry Form</legend>
							</fieldset>
						</div>
					</div>

					<div class="row-fluid">
						<div class="span6">
							<fieldset>
								<div class="control-group">
									<label class="control-label" for="customer-name">Customer Name</label>
									<div class="controls">
									<input id="customer-name" name="customer-name" type="text" placeholder="" class="input-xlarge">
									</div>
								</div>
																<div class="control-group">
									<label class="control-label" for="account-name">Account Name</label>
									<div class="controls">
									<input id="account-name" name="account-name" type="text" placeholder="" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="reece-account-number">Reece Account Number</label>
									<div class="controls">
									<input id="reece-account-number" name="reece-account-number" type="text" placeholder="" class="input-xlarge">
									</div>
								</div>

								<div class="control-group">
									<label class="control-label" for="contact-number">Contact Number</label>
									<div class="controls">
									<input id="contact-number" name="contact-number" type="text" placeholder="" class="input-xlarge">
									</div>
								</div>

								<div class="control-group">
									<label class="control-label" for="favourite-feature">Tell us your favourite Hitachi Air Conditioner Feature and why.</label>
									<div class="controls">
										<textarea class="field span12" rows="4" id="favourite-feature" name="favourite-feature"></textarea>
									</div>
								</div>
							</fieldset>
						</div>
						<div class="span6">
							<fieldset>
								<label class="control-label"><h5>What do you and your customers consider important when selecting a unit.<br>Please give a rating from 1-5, with 5 being the most important and 1 the least.</h5></label>

								<div class="control-group hitachi-select">
									<div class="row-fluid">
										<div class="span2">
											<label class="control-label" for="warranty">Warranty</label>
										</div>
										<div class="span2">
											<select id="warranty" name="warranty" class="input-mini"><option>-</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option></select>
										</div>
										<div class="span2">
											<label class="control-label" for="stock-availability">Stock Availability</label>
										</div>
										<div class="span2">
											<select id="stock-availability" name="stock-availability" class="input-mini"><option>-</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option></select>
										</div>
										<div class="span2">
											<label class="control-label" for="ease-installation">Ease of Installation</label>
										</div>
										<div class="span2">
											<select id="ease-installation" name="ease-installation" class="input-mini"><option>-</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option></select>
										</div>
									</div>
									<div class="row-fluid">
										<div class="span2">
											<label class="control-label" for="look-feel">Look &amp; Feel</label>
										</div>
										<div class="span2">
											<select id="look-feel" name="look-feel" class="input-mini"><option>-</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option></select>
										</div>
										<div class="span2">
											<label class="control-label" for="sound-level">Sound Level</label>
										</div>
										<div class="span2">
											<select id="sound-level" name="sound-level" class="input-mini"><option>-</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option></select>
										</div>
										<div class="span2">
											<label class="control-label" for="price">Price</label>
										</div>
										<div class="span2">
											<select id="price" name="price" class="input-mini"><option>-</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option></select>
										</div>
									</div>
									<div class="row-fluid">
										<div class="span2">
											<label class="control-label" for="reliability">Reliability</label>
										</div>
										<div class="span2">
											<select id="reliability" name="reliability" class="input-mini"><option>-</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option></select>
										</div>
										<div class="span2">
											<label class="control-label" for="brand">Brand</label>
										</div>
										<div class="span2">
											<select id="brand" name="brand" class="input-mini"><option>-</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option></select>
										</div>
									</div>
								</div>
							</fieldset>
							<br>
							<fieldset>
								<label class="control-label"><h5>What other brands of air-conditioners do you regularly install?</h5></label>
								<div class="control-group hitachi-select">
									<div class="controls">
										<label class="checkbox inline" for="brands-dalkin">
										<input type="checkbox" name="brands" id="brands-dalkin" value="Dalkin">
										Dalkin
										</label>
										<label class="checkbox inline" for="brands-mitsubishi-heavy">
										<input type="checkbox" name="brands" id="brands-mitsubishi-heavy" value="Mitsubishi Heavy">
										Mitsubishi Heavy
										</label>
										<label class="checkbox inline" for="brands-mitsubishi-electric">
										<input type="checkbox" name="brands" id="brands-mitsubishi-electric" value="Mitsubishi Electric">
										Mitsubishi Electric
										</label>
										<br class="clear">

										<label class="checkbox inline" for="brands-panasonic">
										<input type="checkbox" name="brands" id="brands-panasonic" value="Panasonic">
										Panasonic
										</label>
										<label class="checkbox inline" for="brands-samsung">
										<input type="checkbox" name="brands" id="brands-samsung" value="Samsung">
										Samsung
										</label>
										<br>
										<label class="control-label" for="other-brand">Other brand? <input id="other-brand" name="other-brand" type="text" placeholder="" class="input-medium"></label>
									</div>
								</div>


								<div class="control-group">
								<div class="span8">
								<div class="controls">
									<label class="checkbox" for="terms-agree">
									<input type="checkbox" name="terms-agree" id="terms-agree" value="I Agree">
									I agree to the <a href="terms.php" class="terms">terms and conditions</a> of this offer.
									</label>
								</div>
								</div>
								</div>
								<div class="span4">
								<div class="control-group">
								<label class="control-label" for="submit"></label>
								<div class="controls">
									<button id="submit" name="submit" class="btn btn-primary pull-right">Submit Entry</button>
								</div>
								</div>

							</fieldset>
						</div>
						</form>
					</div>
					<div class="row-fluid">
						<img src="/assets/images/promotions/hitachi-logo.png" width="200" class="pull-right" />
					</div>
				</div>
			</div>

		<?php
			include_once($serverBase."/includes/foot/foot-generic.php");
		?>

	</div>

	<?php
		$mobileNavActiveMenu = array(
			"activeMenu" => ""
		);
		include_once($serverBase."/includes/nav/nav-mobile.php");
	?>

	<?php
		$jsScriptPaths = [
			"/assets/js/jquery.lazyload.min.js",
			"/assets/js/jquery.mobile.custom.min.js",
			"/assets/js/reece-ocnav.js",
			"/assets/js/reece-carousel.js",
			"/assets/js/reece-popover.js"
		];
		include_once($serverBase."/includes/foot/scripts.php");
	?>

	</body>
</html>