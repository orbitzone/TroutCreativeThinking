<?php 
	$units = array(
		'EA'=>'EACH',
		'ROLL'=>'ROLL',
		'PKT'=>'PACKET',
		'PR'=>'PAIR',
		'CARD'=>'CARD',
		'KIT'=>'KIT'
	);
    $string = file_get_contents("../../../data/retail/products-category.json");
    $products = json_decode($string, true);  
    $n = 0;
?>
<?php foreach($products as $product){ 
	$pack_info = '';
	$n = $n + 1;
	if($n == 4){
		echo '<figure class="banner visible-md-block visible-sm-block"><img src="templates/images/retail/products-category/banner.png" alt="banner"/></figure>';
	}
	if($n == 5){
		echo '<figure class="banner visible-xs-block hidden-md hidden-sm visible-lg-block"><img src="templates/images/retail/products-category/banner.png" alt="banner"/></figure>';
	}
	?>
<div class="product">
	<div class="product-content">
			<div class="product-image">
				<?php if(count($product['images'])>1){?>
						<div class="product-images-slider">
					<?php }?>
				<?php foreach($product['images'] as $image):?>
				<a href="retail-product-detail.php" tabindex="-1">
					<img src="<?php echo $image['url']; ?>" alt="<?php echo (isset($image['alt']))?$image['alt']:$product['name']; ?>"/>	
				</a>
				<?php endforeach;?>		
				<?php if(count($product['images'])>1){?>
				</div>
				<?php }?>
			</div>
		<div class="product-details-wrap">
			<a href="retail-product-detail.php">
				<div class="product-details">
					<h3><?php echo $product['name']; ?></h3>
					<div class="product-code"><?php echo $product['code']; ?></div>
					<div class="product-description"><?php echo $product['description']; ?></div>	
				</div>
			</a>
			<div class="product-quantity">
				<span class="quantity-input">
					<input class="quantity-number" data-productcode="<?php echo $product['code'];?>" type="number" name="quantity-<?php echo $product['code'];?>" min="1" value="1"/>
				</span>
				<?php 
				//Get pack info text
				foreach($product['price'] as $price): 
					 	if($price['unit'] == "PKT"){
					 		$pack_info = '<span class="product-unit-details">Packet Contains <span>'.$product['pack'].'</span> units</span>';
					 	}
				 endforeach;
			 	?>				
			 	<div class="product-price">
					<?php $p = 0; foreach($product['price'] as $key => $price): ?>
						<div class="product-price-my price-<?php echo $price['unit']; ?> <?php if($p>0){ echo 'hide'; }?>" title="<?php echo $units[$price['unit']];?> price"><span class="value">$<?php echo $price['value']; ?><small>inc.</small></span></div>
					<?php $p=$p+1; endforeach;?>				
				</div>
			</div>
			
			 <div class="product-add-to-cart">
			 	<div class="progress-button">
					<!-- button with text -->
					<button type="button" class="btn add-to-cart" data-code="<?php echo $product['code'];?>">
						<span class="add-to-cart-text">add 
													<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 34" id="shape-cart"><title>cart</title> <path d="M34.2,33.5c2,0,3.7-1.7,3.7-3.7c0-2.1-1.7-3.7-3.7-3.7c-2,0-3.7,1.7-3.7,3.7S32.2,33.5,34.2,33.5"/> <path d="M13.8,33.5c2,0,3.7-1.7,3.7-3.7c0-2.1-1.7-3.7-3.7-3.7c-2,0-3.7,1.7-3.7,3.7S11.8,33.5,13.8,33.5"/> <path d="M13.8,28h20.4c0.5,0,0.9-0.4,0.9-0.9s-0.4-0.9-0.9-0.9H14.6L8.8,1.2C8.7,0.8,8.3,0.5,7.9,0.5H1.4c-0.5,0-0.9,0.4-0.9,0.9
			c0,0.5,0.4,0.9,0.9,0.9h5.8l5.7,24.9C13,27.7,13.4,28,13.8,28z"/> <path d="M12.9,24.2H37c0.4,0,0.8-0.3,0.9-0.6l5.6-16.8c0.1-0.3,0-0.6-0.1-0.8c-0.2-0.2-0.5-0.4-0.8-0.4H9.2C8.7,5.6,8.3,6,8.3,6.6
			c0,0.5,0.4,0.9,0.9,0.9h32.1l-4.9,14.9H12.9c-0.5,0-0.9,0.4-0.9,0.9C12,23.8,12.4,24.2,12.9,24.2z"/></svg></span>
														<span class="add-to-wishlist-text">add 
															<svg width="71.68" height="53.124" viewBox="0 0 71.68 53.124">
	  <path d="M1644.29,629.674a1.048,1.048,0,0,0-1.12,1.107v4.43a1.047,1.047,0,0,0,1.12,1.1h4.48a1.052,1.052,0,0,0,1.12-1.1v-4.43a1.053,1.053,0,0,0-1.12-1.107h-4.48Zm12.31,0v6.641h58.23v-6.641H1656.6Zm-12.31,15.5a1.048,1.048,0,0,0-1.12,1.107v4.429a1.048,1.048,0,0,0,1.12,1.106h4.48a1.053,1.053,0,0,0,1.12-1.106V646.28a1.053,1.053,0,0,0-1.12-1.107h-4.48Zm12.31,0v6.642h44.8v-6.642h-44.8Zm-12.31,15.5a1.048,1.048,0,0,0-1.12,1.107v4.427a1.049,1.049,0,0,0,1.12,1.109h4.48a1.054,1.054,0,0,0,1.12-1.109v-4.427a1.053,1.053,0,0,0-1.12-1.107h-4.48Zm12.31,0v6.643h58.23v-6.643H1656.6Zm-12.31,15.5a1.046,1.046,0,0,0-1.12,1.1v4.43a1.048,1.048,0,0,0,1.12,1.107h4.48a1.053,1.053,0,0,0,1.12-1.107v-4.43a1.052,1.052,0,0,0-1.12-1.1h-4.48Zm12.31,0v6.642h53.75v-6.642H1656.6Z" transform="translate(-1643.16 -629.688)"/>
	</svg>
														</span>
						</button>

					<!-- svg circle for progress indication -->
					<svg class="progress-circle" width="70" height="70"  viewBox="0 0 70 70">
						<path d="m35,2.5c17.955803,0 32.5,14.544199 32.5,32.5c0,17.955803 -14.544197,32.5 -32.5,32.5c-17.955803,0 -32.5,-14.544197 -32.5,-32.5c0,-17.955801 14.544197,-32.5 32.5,-32.5z"/>
					</svg>

					<!-- checkmark to show on success -->
					<svg class="check" width="51.4px" height="38.5px" viewBox="0 0 51.4 38.5">
						<path class="short" fill="none" stroke="#010202" stroke-width="2" stroke-miterlimit="10" d="M0.7,23.7l14.1,14.1"/>
						<path class="long" fill="none" stroke="#010202" stroke-width="2" stroke-miterlimit="10" d="M13.5,37.8L50.7,0.7"/>
					</svg>

					<!-- cross to show on error -->
					<svg class="cross" width="70" height="70">
						<path d="m35,35l-9.3,-9.3"/>
						<path d="m35,35l9.3,9.3"/>
						<path d="m35,35l-9.3,9.3"/>
						<path d="m35,35l9.3,-9.3"/>
					</svg>

				</div><!-- /progress-button -->		
			 </div>
					
		</div>
	</div>
</div>
<?php }?>