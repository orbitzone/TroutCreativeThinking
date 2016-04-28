<div id="shopping-cart-widget">
	<aside>
		<button type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 34" id="shape-cart"><title>cart</title> <path d="M34.2,33.5c2,0,3.7-1.7,3.7-3.7c0-2.1-1.7-3.7-3.7-3.7c-2,0-3.7,1.7-3.7,3.7S32.2,33.5,34.2,33.5"/> <path d="M13.8,33.5c2,0,3.7-1.7,3.7-3.7c0-2.1-1.7-3.7-3.7-3.7c-2,0-3.7,1.7-3.7,3.7S11.8,33.5,13.8,33.5"/> <path d="M13.8,28h20.4c0.5,0,0.9-0.4,0.9-0.9s-0.4-0.9-0.9-0.9H14.6L8.8,1.2C8.7,0.8,8.3,0.5,7.9,0.5H1.4c-0.5,0-0.9,0.4-0.9,0.9
	c0,0.5,0.4,0.9,0.9,0.9h5.8l5.7,24.9C13,27.7,13.4,28,13.8,28z"/> <path d="M12.9,24.2H37c0.4,0,0.8-0.3,0.9-0.6l5.6-16.8c0.1-0.3,0-0.6-0.1-0.8c-0.2-0.2-0.5-0.4-0.8-0.4H9.2C8.7,5.6,8.3,6,8.3,6.6
	c0,0.5,0.4,0.9,0.9,0.9h32.1l-4.9,14.9H12.9c-0.5,0-0.9,0.4-0.9,0.9C12,23.8,12.4,24.2,12.9,24.2z"/></svg></button>
	</aside>
	<section class="shopping-cart-content">
		<header><h3 class="main-title">Your List Toolbar</h3></header>


		<!--START TAKE A TOUR SECTION -->
		<div class="tour-info">
			<div class="tour-intro">
				<p>Welcome to the new product toolbar where you can create and add to product lists seamlessly from one place.</p>
			</div>
			<div class="tour-popout">
				<h4>Take a tour</h4>
				<p>There's a whole lot of new stuff we would love to show you</p>
				<a class="btn tour-button" href="#">Take a tour</a>
			</div>
			<div class="tour-extra">
				<p>Add products from the search results to create your first list.</p>
			</div>
		</div>
		<!--END TAKE A TOUR SECTION -->



<!--START TOOL BAR ITEMLIST-->
<div class="itemlist-section">
<ul class="item-list">
<?php for($i=1;$i<5;$i++){ ?>

<li class="one-item">
	<div class="item-block">
		<div class="item-info">
			<span class="edit-item">
				[e]
			</span>
			<span class="product-thumbnail">
				<img class="img-responsive" src="templates/images/product-detail/product-image<?php echo $i ?>.jpg" alt="item">
			</span>
			<span class="item-details">
				<p class="product-code">0000000<?php echo $i ?></p>
				<p class="product-name">Thermann Electical Storage</p>
				<p class="product-description">Electric Hot Water Unit 250L</p>
			</span>
			<span class="remove-from-list">
				[d]
			</span>
			<div class="clear-fix"></div>
		</div>
		<footer class="item-footer">
			<div class="info-state">
				<span class="quantity left-col">
					1 <span class="set">Pkt</span>
				</span>
				<span class="price right-col">
					$406.32
				</span>
				<div class="clear-fix"></div>
			</div>
			<div class="edit-state">
				<div class="edit-set left-col">
					left
				</div>
				<div class="price right-col">
					right
				</div>
				<div class="clear-fix"></div>
			</div>
		</footer>
	</div>
</li>


<?php } ?>
</ul>
</div>
<!--END TOOL BAR ITEMLIST-->


		<!--START TAKE A TOUR FOOTER-->
		<footer>
			<div class="tour-info-small">
				[compass image]
				<h5>Take a tour</h5>
				<p>There's a whole lot of new stuff we would love to show you</p>

			</div>
		</footer>
		<!--END TAKE A TOUR FOOTER-->





	</section>
</div>