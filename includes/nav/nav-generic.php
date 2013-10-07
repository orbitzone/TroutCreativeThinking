		    
		    <div class="navbar navbar-fixed-top">
				<div id="navbar-inner" class="navbar-inner">
				    <div class="navbar-container">
						<a class="btn btn-navbar hidden-desktop">
						    <span class="icon-bar"></span>
						    <span class="icon-bar"></span>
						    <span class="icon-bar"></span>
						</a>
						<a class="brand hidden-desktop" href="#">Reece</a>
						<div class="visible-desktop">
								<div class="row-fluid">
								<div class="span6">
									<a class="brand" href="#" title="Reece">Reece</a>

									<div id="product-search-form">
										<input type="search" placeholder="Search Products...">
									</div>
								</div>
								<div class="span6">
									<div id="account-tools" class="accountTools">
										<a href="#cart"><i class="icon-shopping-cart"></i> Shopping Cart (8 Items)</a> | <a href="#myaccount"><i class="icon-user"></i> My Account</a>
									</div>
								</div>
							</div>
								<div class="row-fluid">
										<div class="span12">
												<ul class="nav">
												<?php foreach ($navigationItems as $item) : ?>
				
													<?php if ($item == $genericNavActiveMenuItem) : ?>
														<li class="active"><a href="#"><?php print $item; ?></a></li>
													<?php else : ?>
														<li><a href="#"><?php print $item; ?></a></li>
													<?php endif; ?>
				
												<?php endforeach; ?>
												</ul>												
										</div>
							</div>
						</div>
				    </div>
				</div>
		    </div>