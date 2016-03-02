<?php
  $title = "Reece - The Powder Room";
 include_once('templates/includes/reece-head.php');?>
  <body class="the_powder_room">
     <div class="ocmain-wrapper">
      <?php include_once("templates/includes/reece-header.php");?>
      <div class="main" role="main">
	      <section id="powder-room-header">
	      	<div class="container-fluid">
	      		<div class="row">
	      			<div class="col-xs-12">
	      				<div class="subscribe-wrapper">
	      					<h2 class="prLogoLarge">
										<a href="#powder-room" class="logo">
											<img src="images/the_powder_room/the-powder-room-logo.png" width="220" height="220"/>
										</a>
									</h2>
		      				<div class="subscribe-content">
		      				<div class="row">
		      					<div class="col-sm-3">
		      						<div class="text">The latest trends brought to you by Reece.</div>
		      					</div>
		      					<div class="col-sm-9">
		      						<div class="subscribe-box">
					      				<h3>Subscribe for weekly updates</h3>
					      				<form action="/" class="subscribe-form">
					      					<div class="row">
					      						<div class="col-md-6">
					      							<div class="input-group">
					      								<input type="text" class="form-control" name="name" placeholder="Name" required="required" />
					      							</div>
					      						</div>
					      						<div class="col-md-6">
					      							<div class="input-group">
													      <input type="email" name="email" class="form-control" placeholder="Email" required="required"/>
													      <span class="input-group-btn">
													        <button class="btn btn-default" type="submit"><i class="icon-arrow-right"></i></button>
													      </span>
													    </div>
					      						</div>
					      					</div>
					      				</form>
					      			</div> 
		      					</div>
		      				</div>     				
		      				</div> 
	      				</div>     				
	      			</div>
	      		</div>      		
	      	</div>
	      </section>
	      <?php include_once("templates/includes/reece-footer.php");?>    
	      </div>
  </body>
</html>