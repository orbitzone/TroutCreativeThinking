<div class="navbar-container">	
	<a class="btn btn-navbar hidden-desktop">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</a>
	<a class="brand hidden-desktop mobile-logo" href="#">Reece</a>
	<div class=" visible-desktop">
		<div class="row-fluid navHeader">
			<a class="brand" href="#" title="Reece">Reece</a>
			<div class="headerUtilityBar">
				<form class="headerNavSearchForm">
					<label for="headerSearchInput"><i class="icon-search icon">&nbsp;</i></label>
					<input type="search" id="headerSearchInput" placeholder="Search">
				</form>
				<ul class="headerUtilityLink">
					<li class="dropdown locationDropDown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
							<i class="icon-map-marker icon">&nbsp;</i>
							<span class="location">Collingwood 3066</span>
							<span class="caret"></span>
						</a>
						<div class="dropdown-menu">
							<form>
								<input type="text" placeholder="New Location">
							</form>
							<ul>
								<li><a href="#">Collingwood</a></li>
								<li><a href="#">Richmond</a></li>
								<li><a href="#">Hawthorn</a></li>
								<li><a href="#">Toorak</a></li>
							</ul>						
						</div>
						
					</li>
					<li>
						<a href="#">
							<i class="icon-shopping-cart">&nbsp;</i> Shopping Cart (0)
						</a>						
					</li>
					<li>
						<a href="#">
							<i class="icon-user">&nbsp;</i> My Account
						</a>						
					</li>					
				</ul>
			</div>
		</div>
		<nav class="navWrap">
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