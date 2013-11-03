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
				<a class="brand" href="#" title="Reece">Reece</a>
				<div class="headerUtilityBar">
					<form class="headerNavSearchForm">
						<label for="headerSearchInput"><i class="icon-search icon">&nbsp;</i></label>
						<input type="search" id="headerSearchInput">
					</form>
					<ul class="headerUtilityLink">
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="icon-map-marker icon">&nbsp;</i>
								<span class="location">Collingwood 3066</span>
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
								<li><a href="#">Collingwood</a></li>
								<li><a href="#">Richmond</a></li>
								<li><a href="#">Hawthorn</a></li>
								<li><a href="#">Sprinvale</a></li>
								<li><a href="#">Toorak</a></li>
							</ul>						
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
