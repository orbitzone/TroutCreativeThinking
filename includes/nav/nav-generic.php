<div class="navbar navbar-fixed-top topNav">
	<div class="navbar-container">
		<a class="btn btn-navbar hidden-desktop">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</a>
		<a class="brand hidden-desktop" href="#">Reece</a>
		<div class="visible-desktop">
			<div class="row-fluid navHeader">
				<div class="span5">
					<a class="brand" href="#" title="Reece">Reece</a>
				</div>
				<div class="span7">
					<div class="headerUtilityLinks">
					<form class="headerNavSearchForm">
						<label for="headerSearchInput"><i class="icon-search icon">&nbsp;</i></label>
						<input type="search" placeholder="Search Products..." id="headerSearchInput">
					</form>
						
						
						<i class="icon-map-marker icon">&nbsp;</i>
						Collingwood
						|
						<a href="#">
							<i class="icon-shopping-cart">&nbsp;</i> Shopping Cart (0)
						</a>
						|
						<a href="#">
							<i class="icon-user">&nbsp;</i> My Account
						</a>
					</div>
				</div>
			</div>
			<nav>
				<ul class="nav">
				<?php foreach ($navigationItems as $item) : ?>
					<?php if ($item == $genericNavActiveMenuItem) : ?>
						<li class="active"><a href="#"><?php print $item; ?></a></li>
					<?php else : ?>
						<li><a href="#"><?php print $item; ?></a></li>
					<?php endif; ?>

				<?php endforeach; ?>
				</ul>
			</nav>
		</div>	
	</div>
</div>
