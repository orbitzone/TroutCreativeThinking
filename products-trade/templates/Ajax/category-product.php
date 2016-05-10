<?php 
	$units = array(
		'EA'=>'EACH',
		'ROLL'=>'ROLL',
		'PKT'=>'PACKET',
		'PR'=>'PAIR',
		'CARD'=>'CARD',
		'KIT'=>'KIT'
	);
    $string = file_get_contents("../../data/productscategory.json");
    $products = json_decode($string, true);  
?>
<?php foreach($products as $product){ 
	$pack_info = '';
	?>
<div class="product">
	<div class="product-content">
		<div class="product-image">
			<?php if(count($product['images'])>1){?>
					<div class="product-images-slider">
				<?php }?>
			<?php foreach($product['images'] as $image):?>
			<img src="<?php echo $image['url']; ?>" alt="<?php echo (isset($image['alt']))?$image['alt']:$product['name']; ?>"/>	
			<?php endforeach;?>		
			<?php if(count($product['images'])>1){?>
			</div>
			<?php }?>
		</div>
		<div class="product-details-wrap">
			<div class="product-details">
				<h3><?php echo $product['name']; ?></h3>
				<div class="product-code"><?php echo $product['code']; ?></div>
				<div class="product-description"><?php echo $product['description']; ?></div>	
			</div>
			<div class="product-price">
					<?php $p = 0; foreach($product['price'] as $key => $price): ?>
						<div class="product-price-my price-<?php echo $price['unit']; ?> <?php if($p>0){ echo 'hide'; }?>" title="<?php echo $units[$price['unit']];?> price">My Price <span class="value"><?php echo $price['value']; ?><small>inc.</small></span></div>
						<div class="product-price-cmp price-<?php echo $price['unit']; ?> <?php if($p>0){ echo 'hide'; }?>" title="<?php echo $units[$price['unit']];?> compare price">CMP <span class="value"><?php echo $product['cmp'][$key]['value']; ?><small>inc.</small></span></div>	
					<?php $p=$p+1; endforeach;?>				
			</div>
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
				<div class="quantity-units quantity-set <?php if(count($product['price'])==1 && $pack_info != '' ){?>unit-with-desc<?php }?> <?php if(count($product['price'])>1){ echo 'multiple-units';}?>">
					<?php if(count($product['price'])>1){?><span class="radiolabel-set span-block"><?php }?>
					<?php
						 $n = 0;
						 foreach($product['price'] as $price): 
					 		?>
							<input id="<?php echo "set-".$product['code'].'-'.$price['unit'];?>" class="quantity-radio" type="radio" name="<?php echo "set-".$product['code'];?>" value="<?php echo $price['unit'];?>" <?php if($n == 0){ ?>checked=""<?php }?>/>
							<label for="<?php echo "set-".$product['code'].'-'.$price['unit'];?>" title="<?php echo $units[$price['unit']];?>" class="radio-button <?php if($n == 0){ ?>active<?php }?>"><?php echo $price['unit'];?></label>
							<?php if(count($product['price'])==1 && $pack_info != '' ){?><?php echo $pack_info;?><?php }?>		
						 <?php 						 
						 $n = $n+1; 
						endforeach;
						?>					
					<?php if(count($product['price'])>1){?></span><?php }?>					
				</div>
			</div>
			<?php if(count($product['price'])>1 && $pack_info != '' ){
			 echo $pack_info;
			 }?>
			 <div class="product-add-to-cart">
			 	<div class="progress-button">
					<!-- button with text -->
					<button type="button" class="btn add-to-cart full-width" data-code="<?php echo $product['code'];?>">
						<span class="add-to-cart-text">add to cart </span>
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