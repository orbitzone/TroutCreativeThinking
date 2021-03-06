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
				<?php if($product['we_love']){?>
					<div class="we-love">
					<span class="sr-only">We love</span>
						<svg viewBox="0 0 50 50" enable-background="new 0 0 50 50">
								<path d="M34.8,27.8c-0.2,0-1.1,1.1-1.2,1.4c-0.1,0.3-0.1,0.6-0.2,0.8c0,0,0,0,0,0.1c0,0.1,0,0.1,0,0.2c0,0.1,0,0.1,0.1,0.1
									c0.2,0,0.2-0.2,0.4-0.3c0.6-0.5,1.2-0.9,1.2-1.8C35.1,28,35.1,27.8,34.8,27.8z"/>
									<path d="M47.7,2.1C43.6-3.2,35.9,2.6,31,8C26.4,0,9.5,0.9,4.1,8C-7.4,23.3,17.2,36.4,23.6,46.8c0.7,1.2,2.8,0.9,4.2,0.1
										c-0.1,0.6-0.1,1.1-0.2,1.7C27.4,51,32.9,50,33,48c0.6-9.8,8.5-15.5,11.9-24.2C46.7,19.4,51.1,6.6,47.7,2.1z M16.7,33.6
										c0,0.4,0,0.8-0.3,1.1c-0.4-0.1-0.7-0.2-0.7-0.6c0-0.1,0.1-0.3,0.1-0.5c0.1-0.3,0.1-0.5,0.1-0.8c0-0.7-0.1-1.4-0.2-2.2
										c-0.1-1.4-0.1-2.8-0.3-4.2c-0.1-0.4-0.1-0.9-0.1-1.3c-0.1-1.4-0.1-2.8-0.2-4.2c0-0.1,0-0.2,0-0.3c0-0.5,0.2-0.7,0.7-0.7
										c0.4,0,0.5,0.3,0.6,0.6c0.1,0.7,0.2,1.1,0.2,1.8c0,0.7-0.1,1.4-0.1,2.2c0,0.4,0,0.7,0.1,1.1c0.2,1.7,0.2,3.5,0.3,5.2
										c0,0.4,0.1,0.8,0.1,1.3C16.9,32.7,16.7,33,16.7,33.6z M22.3,30.4l-0.1,0.1c-0.1,0.3-0.1,0.6-0.2,0.9c-0.2,0.8-1.1,2-2,2
										c-0.3,0-0.6-0.1-0.8-0.3c-0.2-0.1-0.3-0.2-0.5-0.3c-0.2-0.3-0.2-0.9-0.2-1.2c0-0.9,0.2-2.4,0.5-3.2c0.1-0.3,0.3-0.5,0.4-0.8
										c0.1-0.3,0-0.7,0.1-1c0.2-0.3,1.2-0.8,1.5-0.8c0.2,0,0.5,0.1,0.7,0.3c0.4,0.7,0.5,2.8,0.5,3.6c0,0.2,0,0.4,0,0.6
										C22.4,30.2,22.4,30.3,22.3,30.4z M23.3,21.1c-1.3-1.3-1.5-3.2-1.9-4.9l-0.1,0.1c-0.1,0.4-0.2,0.9-0.2,1.3c0,0.3,0,0.6,0.1,0.9
										c0,0,0,0.2,0,0.2c0,0.7-0.3,1.3-0.3,2c0,0.1,0,0.3,0,0.4c0,0.1-0.6,0.5-0.7,0.5c-0.2,0-0.3-0.1-0.4-0.2c-0.2-0.2-0.2-0.5-0.3-0.8
										c-0.1-0.4-0.3-0.7-0.4-1c-0.3-0.9-0.4-1.9-0.7-2.8c-0.1-0.4-0.4-0.7-0.5-1.2c-0.1-0.4-0.2-0.8-0.4-1.2c-0.2-0.3-0.3-0.3-0.3-0.7
										c0-0.3,0.2-0.6,0.6-0.6c0.3,0,0.5,0.2,0.6,0.4l0.1,0c0.2,0.4,0.2,0.9,0.4,1.3c0.2,0.6,0.5,1.2,0.7,1.8c0.1,0.5,0.3,0.9,0.5,1.3
										c0.2-0.9,0.2-1.7,0.4-2.6c0.1-0.6,0.3-0.9,0.3-1.6c0-0.4,0.3-0.6,0.6-0.6c0.2,0,0.5,0.1,0.6,0.3c0.2,0.4,0.3,1,0.4,1.4
										c0.2,0.6,0.5,1.3,0.7,1.9c0,0.1,0,0.2,0,0.2c0,0.2,0.2,0.5,0.2,0.8c0.1,0.4,0.1,0.8,0.2,1.2l0.1,0c0.1-0.7,0.1-1.5,0.2-2.2
										c0.1-0.7,0.3-1.3,0.3-2c0-0.4,0.5-2.7,0.7-3c0.1-0.1,0.2-0.2,0.2-0.3c0.1-0.2,0.1-0.4,0.3-0.7l0.2,0.2l0,0l0,0.1
										c0,0.3-0.2,0.6-0.3,0.9c-0.1,0.4,0,1-0.1,1.4C25,13.9,25,14.5,25,15v0v0.2v0.1c0,0.3-0.1,0.6-0.1,0.9c0,0,0,0.1,0,0.1
										c0,0.1,0,0.2,0,0.3c0,0.1,0,0.2,0,0.2c-0.1,1.1,0,3.2-0.3,4.1c-0.1,0.3-0.4,0.5-0.7,0.5C23.6,21.4,23.5,21.2,23.3,21.1z
										 M28.4,44.2c-0.3-0.5-0.6-1-1-1.4c0.5-0.2,1.1-0.4,1.7-0.6C28.8,42.8,28.6,43.5,28.4,44.2z M30,25.1c-0.5,1.4-1,3.3-1,4.8
										c0,0.3,0.1,0.6,0.1,0.9c0,0.3-0.2,0.6-0.2,1c0,0.4,0,0.5-0.1,0.8c-0.2,0.4-0.3,0.9-0.3,1.4c0,0.4-0.4,0.8-0.8,0.8
										c-0.1,0-0.5-0.2-0.6-0.3c-0.1-0.2-0.1-0.4-0.2-0.6c-0.2-0.6-0.7-1.2-1-1.8c-0.2-0.4-0.2-0.8-0.4-1.2c-0.1-0.1-0.2-0.2-0.3-0.3
										C25,30.2,25,29.8,25,29.6c-0.2-0.8-0.5-1.5-0.7-2.2c-0.1-0.3-0.1-0.6-0.2-0.9c0-0.1-0.1-0.2-0.1-0.4c0-0.3,0.3-0.5,0.6-0.5
										c0.8,0,0.8,0.9,1,1.4c0.1,0.2,0.2,0.3,0.3,0.5c0.3,0.7,0.3,1.4,0.5,2.1c0.1,0.2,0.2,0.4,0.3,0.7c0.2,0.7,0.3,1.6,0.8,2.1
										c0.4-0.8,0.3-1.9,0.5-2.8c0.3-1.6,0.8-3.1,1.5-4.6c0.1-0.2,0.1-0.3,0.4-0.3c0.1,0,0.2,0.1,0.2,0.2C30,24.9,30,25,30,25.1z
										 M29.7,21.7c-1,0-2.1-0.8-2.1-1.9c0-0.3,0-0.5,0-0.8c0-0.1,0-0.2-0.1-0.4c-0.1-0.2-0.8-0.3-0.8-0.8c0-0.4,0.6-0.9,1-1
										c0.1,0,0.4,0,0.4-0.1c0.1-0.2,0.2-0.7,0.3-0.9C29,15,30,13.8,31,13.8c0.8,0,1.2,1,1.2,1.7c0,0.1,0,0.2,0,0.4
										c-0.1,0.6-1.4,2-2,2.3c-0.3,0.2-1.1,0.3-1.2,0.6c-0.1,0.1-0.1,0.3-0.1,0.4c0,0.3,0.1,0.5,0.1,0.8c0.1,0.5,0.5,0.7,0.9,0.7
										c0.8,0,1.3-1,2.1-1c0,0,0.1,0,0.1,0c0,0,0,0.1,0,0.1c0,0.5-1.3,1.7-1.7,1.8C30.2,21.7,30,21.7,29.7,21.7z M36.2,28.7
										c-0.1,0.6-1.4,2-2,2.3c-0.3,0.2-1.1,0.3-1.2,0.6c-0.1,0.1-0.1,0.3-0.1,0.4c0,0.3,0.1,0.5,0.1,0.8c0.1,0.5,0.5,0.7,0.9,0.7
										c0.8,0,1.3-1,2.1-1c0,0,0.1,0,0.1,0c0,0,0,0.1,0,0.1c0,0.5-1.3,1.7-1.7,1.8c-0.2,0.1-0.4,0.1-0.7,0.1c-1,0-2.1-0.8-2.1-1.9
										c0-0.3,0-0.5,0-0.8c0-0.1,0-0.2-0.1-0.3c-0.1-0.2-0.8-0.3-0.8-0.8c0-0.4,0.6-0.9,1-1c0.1,0,0.4,0,0.4-0.1
										c0.1-0.2,0.2-0.7,0.3-0.9c0.4-0.8,1.4-1.9,2.4-1.9c0.8,0,1.2,1,1.2,1.7C36.2,28.5,36.2,28.6,36.2,28.7z"/>
									<path d="M19.6,31.1c0,0.1,0,0.3,0,0.4c0,0.3,0,0.9,0.4,0.9c0.2,0,0.3-0.2,0.4-0.3l0.2,0c0.5-0.6,0.8-2.2,0.8-3
										c0-0.6-0.1-1.4-0.5-1.8C20.1,28.2,19.8,29.9,19.6,31.1z"/>
								<path d="M29.4,17.5c0.2,0,0.2-0.2,0.4-0.3c0.6-0.5,1.2-0.9,1.2-1.8c0-0.2,0-0.4-0.2-0.4c-0.2,0-1.1,1.1-1.2,1.4
									c-0.1,0.3-0.1,0.6-0.2,0.8c0,0,0,0,0,0.1C29.3,17.3,29.3,17.3,29.4,17.5C29.3,17.5,29.4,17.5,29.4,17.5z"/>
						</svg>
					</div>
				<?php }?>	
				<?php if(count($product['images'])>1){?>
						<div class="product-images-slider">
				<?php }?>
				<?php $lazy_img=0; foreach($product['images'] as $image):?>
				<a href="retail-product-detail.php" tabindex="-1">
					<?php if($lazy_img == 0){?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo (isset($image['alt']))?$image['alt']:$product['name']; ?>"/>	
					<?php }else{?>
						<img data-lazy="<?php echo $image['url']; ?>" alt="<?php echo (isset($image['alt']))?$image['alt']:$product['name']; ?>"/>	
					<?php }?>
				</a>
				<?php $lazy_img++; if($lazy_img == 3){ break;} endforeach;?>		
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
						<div class="product-price-my price-<?php echo $price['unit']; ?> <?php if($p>0){ echo 'hide'; }?>" title="<?php echo $units[$price['unit']];?> price"><span class="value">$<?php echo $price['value']; ?><small></small></span></div>
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