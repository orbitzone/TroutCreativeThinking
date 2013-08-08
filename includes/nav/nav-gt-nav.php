
					
							<img src="/assets/images/gastrack_2013/gas-track-logo.png">
							<h2 class="headline tagline">The quick & easy way to track all your refrigerant gas purchases</h2>
							<ul class="gt-navigation nav nav-pills nav-stacked">

								<?php foreach ($gtNavigationItems as $item) : ?>

									<?php if ($item == $gtNavActiveMenuItem) : ?>
										<li class="active"><a href="#"><?php print $item; ?></a></li>
									<?php else : ?>
										<li><a href="#"><?php print $item; ?></a></li>
									<?php endif; ?>

								<?php endforeach; ?>

							</ul>	