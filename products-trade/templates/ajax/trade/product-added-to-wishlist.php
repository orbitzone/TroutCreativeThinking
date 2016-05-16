<?php 
    $string = file_get_contents("../../../data/trade/product-info.json");
    $product = json_decode($string, true);    
?>
<li>
						<div class="product">
							<div class="product-thumbnail">
								<img class="img-responsive" src="<?php echo $product['image'];?>" alt="item">
							</div>
							<div class="product-details">
								<div class="product-name"><?php echo $product['name'];?></div>
								<div class="product-code"><?php echo $product['code'];?>></div>
								<div class="product-description"><?php echo $product['description'];?></div>
								<div class="product-price">$<?php echo $product['price'];?></div>
							</div>
							<button class="remove" type="button" data-code="<?php echo $product['code'];?>"><svg width="10px" height="10px" viewBox="0 0 10 10">
	<path d="M9.8,8.6L8.6,9.8C8.5,9.9,8.3,10,8,10c-0.2,0-0.4-0.1-0.6-0.2L5,7.3L2.5,9.8C2.4,9.9,2.2,10,2,10S1.5,9.9,1.4,9.8L0.2,8.6
		C0.1,8.5,0,8.3,0,8c0-0.2,0.1-0.4,0.2-0.6L2.7,5L0.2,2.5C0.1,2.4,0,2.2,0,2s0.1-0.4,0.2-0.6l1.1-1.1C1.5,0.1,1.7,0,2,0
		s0.4,0.1,0.6,0.2L5,2.7l2.5-2.5C7.6,0.1,7.8,0,8,0c0.2,0,0.4,0.1,0.6,0.2l1.1,1.1C9.9,1.5,10,1.7,10,2S9.9,2.4,9.8,2.5L7.3,5
		l2.5,2.5C9.9,7.6,10,7.8,10,8C10,8.3,9.9,8.5,9.8,8.6z"/>
</svg><span class="sr-only">close</span></button>
							<button type="button" class="btn add-to-cart-btn" data-code="<?php echo $product['code'];?>">ADD</button>							
						</div>
					</li>