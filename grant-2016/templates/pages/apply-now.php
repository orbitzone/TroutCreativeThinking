<div class="container first">
	<div class="container-small">
		<div class="intro">
			<h1>Apply for the Reece Grant</h1>
			<div class="row">
				<div class="col-3">
					<div class="apply-reece-grant">
						<div class="top-section">
							<div class="content">
								<h3>Time left to apply</h3>
							</div>
						</div>
						<div class="wave"></div>
						<div class="bottom-section">
							<div class="countdown">
								<?php include_once('templates/includes/countdown.php');?>
							</div>
						</div>								
					</div>
				</div>
				<div class="col-5">
					<div class="right-content">
						<h4>Are you passionate about making a difference?</h4>
						<p>If you’re a Reece account customer and you want to make a difference through a water related project, then we can help you make it happen. The Reece Grant awards $25,000 to support community water projects here and abroad. The grant can take the form of funds or products. So, if you have a worthy water project in mind, then it’s time to apply.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container grey form">
	<div class="container-small">
		<form action="#" method="post">
			<div class="steps-list">
				<ul class="list-inline">
					<li><button type="button" class="btn active" data-step="1">01</button></li>
					<li><button type="button" class="btn" data-step="2">02</button></li>
					<li><button type="button" class="btn" data-step="3">03</button></li>
				</ul>
			</div>
			<div class="steps">
				<div class="step step1 active">
					<div class="field">
						<label for="first-name">First Name</label>
						<input type="text" name="first-name" id="first-name" class="form-control" placeholder="First name" required/>
					</div>
					<div class="field">
						<label for="last-name">Last Name</label>
						<input type="text" name="last-name" id="last-name" class="form-control" placeholder="Last name" required/>
					</div>
					<div class="field">
						<label for="account-number">Reece Account Number</label>
						<input type="text" name="account-number" id="account-number" class="form-control" placeholder="Reece Account Number" required/>
					</div>
					<div class="field">
						<label for="email">Email</label>
						<input type="email" name="email" id="email"  class="form-control" placeholder="Email Address" required/>	
					</div>					
				</div>
				<div class="step step2">
					<div class="field">
						<label for="name-and-location">Describe the name and location of your project</label>
						<textarea rows="3" class="form-control" name="name-and-location" id="name-and-location" required></textarea>
					</div>
					<div class="field">
						<label for="beneficiaries-of-the-project">Decribe the beneficiaries of the project</label>
						<textarea rows="3" class="form-control" name="beneficiaries-of-the-project" id="beneficiaries-of-the-project" required></textarea>
					</div>
					<div class="field">
						<label for="date-of-planned-work">Date of planned work and length</label>
						<textarea rows="3" class="form-control" name="date-of-planned-work" id="date-of-planned-work" required></textarea>
					</div>
					<div class="field">
						<label for="reason-for-the-project">Reason for the project?</label>
						<textarea rows="3" class="form-control" name="reason-for-the-project" id="reason-for-the-project" required></textarea>
					</div>
					<div class="field">
						<label for="what-is-the-desired-outcome">What is the desired outcome?</label>
						<textarea rows="3" class="form-control" name="what-is-the-desired-outcome" id="what-is-the-desired-outcome" required></textarea>	
					</div>
				</div>
				<div class="step step3">
					<div class="field">
						<div class="upload-input added"><input type="file" name="inputFile[]" class="inputFile"><span class="upload-filename"></span><button type="button" class="upload-button">Browse</button></div>	
					</div>
					<div class="field">
						<div class="upload-input added"><input type="file" name="inputFile[]" class="inputFile"><span class="upload-filename"></span><button type="button" class="upload-button">Browse</button></div>	
					</div>
					<div class="field">
						<div class="upload-input added"><input type="file" name="inputFile[]" class="inputFile"><span class="upload-filename"></span><button type="button" class="upload-button">Browse</button></div>	
					</div>
					<div class="field">
						<div class="upload-input added"><input type="file" name="inputFile[]" class="inputFile"><span class="upload-filename"></span><button type="button" class="upload-button">Browse</button></div>	
					</div>
					<div class="field checkbox requiredField">
	<input type="checkbox" name="accept-terms" value="1" class="checkbox" id="accept-terms" required="required" aria-required="true"><label class="right" for="accept-terms">I accept the Terms and Conditions</label></div>
				</div>
			</div>
			<div class="steps-navigation">
				<button type="button" class="btn previous">Previous</button>			
				<button type="button" class="btn next">Next</button>			
				<button type="submit" class="btn submit">Submit</button>
			</div>			
		</form>
	</div>
</div>