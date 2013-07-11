
		<div class="ocnav-wrapper">
		    <h3>Menu</h3>
		    <ul class="nav">

				<?php foreach ($mobileNavigationItems as $key => $item) : ?>

					<?php if ($mobileNavActiveMenu["activeMenu"] == $key) : ?>

						<li class="active"><a href="#"><?php print $key; ?></a>
							<ul class="nav">
								<?php foreach ($item as $subItem) : ?>							
									<?php if ($subItem == $mobileNavActiveMenu["activeMenuItem"]) : ?>

										<?php if ($subItem == "Happiness Zone") : ?>
											<?php $class = "icon-th"; ?>
										<?php else : ?>
											<?php $class = "icon-caret-right"; ?>
										<?php endif; ?>
								
										<li class="active"><a href="bathroom-moments" title=""><i class="<?php print $class; ?>"></i> <?php print $subItem; ?></a></li>
									<?php else : ?>	

										<?php if ($subItem == "Happiness Zone") : ?>
											<?php $class = "icon-th"; ?>
										<?php else : ?>
											<?php $class = "icon-caret-right"; ?>
										<?php endif; ?>

										<li><a href="#" title=""><i class="<?php print $class; ?>"></i> <?php print $subItem; ?></a></li>
									<?php endif; ?>
								<?php endforeach; ?>
							</ul>
					<?php else : ?>
						<li><a href="#"><?php print $key; ?></a></li>
					<?php endif; ?>

				<?php endforeach; ?>

		    </ul>
		</div>