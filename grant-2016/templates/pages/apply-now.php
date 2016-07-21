<div id="apply-intro" class="container first">
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
<div id="apply-form" class="container grey form">
	<div class="loading">
		<svg version="1.1" id="loader-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	   width="40px" height="40px" viewBox="0 0 40 40" enable-background="new 0 0 40 40" xml:space="preserve">
	  <path opacity="0.2" fill="#000" d="M20.201,5.169c-8.254,0-14.946,6.692-14.946,14.946c0,8.255,6.692,14.946,14.946,14.946
	    s14.946-6.691,14.946-14.946C35.146,11.861,28.455,5.169,20.201,5.169z M20.201,31.749c-6.425,0-11.634-5.208-11.634-11.634
	    c0-6.425,5.209-11.634,11.634-11.634c6.425,0,11.633,5.209,11.633,11.634C31.834,26.541,26.626,31.749,20.201,31.749z"/>
	  <path fill="#000" d="M26.013,10.047l1.654-2.866c-2.198-1.272-4.743-2.012-7.466-2.012h0v3.312h0
	    C22.32,8.481,24.301,9.057,26.013,10.047z">
	    <animateTransform attributeType="xml"
	      attributeName="transform"
	      type="rotate"
	      from="0 20 20"
	      to="360 20 20"
	      dur="0.5s"
	      repeatCount="indefinite"/>
	    </path>
	  </svg>
	</div>
	<div class="container-small the-form">
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
						<p>View the <a href="#">Terms and conditions</a></p>
						<input type="checkbox" name="accept-terms" value="1" class="checkbox" id="accept-terms" required="required" aria-required="true"><label class="right" for="accept-terms">I accept the Terms and Conditions</label>
					</div>
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
<div class="container" id="thank-you">
	<div class="container-small">
		<div class="thank-you-intro">
			<h2>Thank you</h2>
			<h3>for applying for the Reece Grant</h3>
		</div>		
		<div class="card">
			<div class="card-header">
				<div class="row">
					<div class="image col-2">
						<svg width="59px" height="57px" viewBox="0 0 59 57" enable-background="new 0 0 59 57" xml:space="preserve">
						<g>
							<path fill="#ECF0F1" d="M18.6,41.6l-7.9,4.3c-0.5,0.3-0.9,0.6-1.3,0.9C14,50.7,20,53,26.5,53s12.4-2.3,17-6.1
								c-0.4-0.4-0.9-0.7-1.4-0.9l-8.5-4.2c-1.1-0.5-1.8-1.7-1.8-2.9v-3.3c0.2-0.3,0.5-0.6,0.8-1c1.2-1.6,2-3.4,2.6-5.3
								c1.1-0.3,1.9-1.3,1.9-2.5v-3.5c0-0.8-0.3-1.5-0.9-2V16c0,0,1.1-8-9.8-8s-9.8,8-9.8,8v5.1c-0.5,0.5-0.9,1.2-0.9,2v3.5
								c0,0.9,0.5,1.8,1.2,2.2c0.9,3.9,3.2,6.6,3.2,6.6v3.2C20.3,39.9,19.6,41,18.6,41.6z"/>
							<path fill="#003964" d="M27,0C12.3-0.2,0.3,11.4,0,26c-0.1,8.3,3.6,15.8,9.4,20.7c0.4-0.3,0.8-0.6,1.3-0.9l7.9-4.3
								c1-0.6,1.7-1.7,1.7-2.8v-3.2c0,0-2.3-2.8-3.2-6.6c-0.7-0.5-1.2-1.3-1.2-2.2v-3.5c0-0.8,0.3-1.5,0.9-2V16c0,0-1.1-8,9.8-8
								s9.8,8,9.8,8v5.1c0.5,0.5,0.9,1.2,0.9,2v3.5c0,1.2-0.8,2.2-1.9,2.5c-0.6,1.9-1.5,3.7-2.6,5.3c-0.3,0.4-0.6,0.8-0.8,1v3.3
								c0,1.2,0.7,2.3,1.8,2.9l8.5,4.2c0.5,0.3,1,0.6,1.4,0.9C49.2,42.1,52.9,35,53,27C53.2,12.3,41.6,0.3,27,0z"/>
							<circle fill="#009CB4" cx="47" cy="45" r="12"/>
							<path fill="#FFFFFF" d="M53.6,39.2c-0.5-0.3-1.1-0.2-1.4,0.2l-5.6,8l-3.9-3.2c-0.4-0.4-1.1-0.3-1.4,0.1c-0.4,0.4-0.3,1.1,0.1,1.4
								l4.8,3.9c0.2,0.1,0.4,0.2,0.6,0.2h0.1c0.3,0,0.5-0.2,0.7-0.4l6.2-8.9C54.1,40.1,54,39.5,53.6,39.2z"/>
						</g>
					</svg>
				</div>
				<div class="details col-6">
					<ul class="row list-unstyled">
						<li class="col-3">
							First name
							<div class="data-item details-first-name">Mark</div>
						</li>
						<li class="col-5">
							Account Number
							<div class="data-item details-account-number">1223456</div>
						</li>
						<li class="col-3">
							Last name
							<div class="data-item details-last-name">Buchanan</div>
						</li>
						<li class="col-5">
							Email Address
							<div class="data-item details-email">marckbuchanan@gmail.com</div>
						</li>
					</ul>
				</div>
			</div>
			</div>
			<div class="card-body">
				<div class="data-item">
					<h4>Describe the name and location of your project</h4>
					<div class="details-name-and-location"></div>	
				</div>
				<div class="data-item">
					<h4>Describe the beneficiaries of the project</h4>
					<div class="details-beneficiaries-of-the-project"></div>
				</div>
				<div class="data-item">
					<h4>Date of planned work and length</h4>
					<div class="details-date-of-planned-work"></div>
				</div>
				<div class="data-item">
					<h4>Reason for the project?</h4>
					<div class="details-reason-for-the-project"></div>
				</div>
				<div class="data-item">
					<h4>What is the desired outcome?</h4>
					<div class="details-what-is-the-desired-outcome"></div>
				</div>
			</div>			
		</div>
		<div class="thank-you-footer">
			<div class="row">
				<div class="col-4">
					<b>Files uploaded</b>
					<ul class="list-unstyled">
						<li class="details-file-1">file document name.txt</li>
						<li class="details-file-2"></li>
						<li class="details-file-3"></li>
						<li class="details-file-4"></li>
					</ul>
				</div>
				<div class="col-4">
					View the <a href="#">Terms and Conditions</a>
				</div>
			</div>
		</div>
	</div>
</div>