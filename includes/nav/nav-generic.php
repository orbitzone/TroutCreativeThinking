		    
		    <div class="navbar navbar-fixed-top">
				<div class="navbar-inner">
				    <div class="navbar-container">
						<a class="btn btn-navbar hidden-desktop">
						    <span class="icon-bar"></span>
						    <span class="icon-bar"></span>
						    <span class="icon-bar"></span>
						</a>
						<a class="brand" href="#">Reece</a>
						<div class="visible-desktop">
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