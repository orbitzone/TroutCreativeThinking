		    
		    <div class="row-fluid main-header">
				<div class="header-container">
				    <div class="span6">
					<div class="title-wrapper">
					    <h1><a href="happiness-zone" title="Reece Happiness Zone"><img src="/assets/images/title-happiness-zone.png" alt="Happiness Zone" /></a></h1>
					    <p>All the tools and resources you need to create your perfect bathroom.</p>
					</div>
				    </div>
				    <div class="span6 visible-desktop">
					<ul class="nav nav-pills-span3">

						<?php foreach ($happyzoneNavigationItems as $item) : ?>

							<?php if ($item == $happyZoneNavActiveMenuItem) : ?>
								<li class="active"><a href="#"><?php print $item; ?></a></li>
							<?php else : ?>
								<li><a href="#" title="Products"><?php print $item; ?></a></li>
							<?php endif; ?>

						<?php endforeach; ?>						

					</ul>
				    </div>
				</div>
			<div class="top-highlight"></div>
		    </div>