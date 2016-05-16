<?php 
    $string = file_get_contents("../../../data/retail/product-info.json");
    $product = json_decode($string, true);    
    $quantity = $_GET['quantity'];
?>
<li class="one-item">
    <div class="item-block">
        <div class="item-info">
            <span class="edit-item">
                <svg xmlns="http://www.w3.org/2000/svg" width="24.9px" height="24.1px" viewBox="0 0 24.9 24.1">
                    <path d="M0.6,22.4c0.6-0.2,5.9-1.6,7.4-2c0.3-0.1,0.5-0.2,0.7-0.4l3.2-3.4l8.7-9.1l0,0l0,0c0.9-1,0.9-2.7,0-3.7l-2.8-2.9
                        c-1-1-2.5-1-3.5,0l0,0l0,0L5.5,9.9l-3.2,3.4C2.1,13.5,2,13.7,1.9,14c-0.3,1.6-1.7,7.1-1.9,7.8c0,0.1,0,0.2,0,0.2
                        C0.1,22.3,0.3,22.4,0.6,22.4z M18.2,6.4c0.2-0.2,0.4-0.2,0.6,0l0.1,0.1C19,6.7,19,7,18.9,7.1L8.6,17.9c-0.2,0.2-0.4,0.2-0.6,0
                        l-0.1-0.1c-0.2-0.2-0.2-0.5,0-0.6L18.2,6.4z M16.3,4.5c0.2-0.2,0.4-0.2,0.6,0L17,4.6c0.2,0.2,0.2,0.5,0,0.6L6.8,16
                        c-0.2,0.2-0.4,0.2-0.6,0l-0.1-0.1c-0.2-0.2-0.2-0.5,0-0.6L16.3,4.5z M4.2,13.3L14.5,2.6c0.2-0.2,0.4-0.2,0.6,0l0.1,0.1
                        c0.2,0.2,0.2,0.5,0,0.6L4.9,14.1c-0.2,0.2-0.4,0.2-0.6,0L4.2,14C4.1,13.8,4.1,13.5,4.2,13.3z M2.7,14.8l4.5,4.7l-3.4,0.9l-2-2.1
                        L2.7,14.8z"></path>
                    <rect x="0.2" y="22.8" width="24.7" height="1.3"></rect>
                </svg>
            </span>
            <span class="product-thumbnail">
                <img class="img-responsive" src="<?php echo $product['image'];?>" alt="<?php echo $product['name'];?>">
            </span>
            <span class="item-details">
                <span class="product-code"><?php echo $product['code'];?></span>
                <span class="product-name"><?php echo $product['name'];?></span>
                <span class="product-description"><?php echo $product['description'];?></span>
            </span>
            <button class="remove-from-list">
                <svg xmlns="http://www.w3.org/2000/svg" width="35.5px" height="50px" viewBox="0 0 35.5 50">
                    <path d="M11.6,0h12.2v2.1H11.6V0z"></path>
                    <path d="M33.3,4.4h-31H0v2.1h2.2V50h31V6.5h2.2V4.4H33.3z M13.8,38h-2.1V14.9h2.1V38z M23.8,38h-2.1V14.9h2.1V38z"></path>
                </svg>
            </button>
            <div class="clear-fix"></div>
        </div>
        <footer class="item-footer">
            <div class="info-state">
                <span class="quantity left-col">
                    <span class="set">Qty</span> <span class="number"><?php echo $quantity; ?></span>
                </span>
                <span class="price right-col">
                    $<?php echo $quantity * $product['price'];?> <small>inc. GST</small>
                </span>
                <div class="clear-fix"></div>
            </div>
            <div class="edit-state">
                <div class="edit-set left-col">
                    <div class="quantity-wrap">
                        <div class="quantity-hidden">
                            <input class="quantity-radio" type="radio" id="set-<?php echo $product['code'];?>-ea" name="set-<?php echo $product['code'];?>" value="EA" checked="">
                            <input class="quantity-radio" data-productcode="<?php echo $product['code'];?>" type="radio" id="set-<?php echo $product['code'];?>-pkt" name="set-<?php echo $product['code'];?>" value="PKT">
                        </div>
                        <div class="quantity-input">
                            <input class="quantity-number" data-productcode="<?php echo $product['code'];?>" type="number" name="quantity-<?php echo $product['code'];?>" min="1" value="<?php echo $quantity;?>">
                        </div>
                        <div class="quantity-updated">
                            <svg class="check" width="51.4px" height="38.5px" viewBox="0 0 51.4 38.5">
                                <path class="short" fill="none" stroke="#010202" stroke-width="2" stroke-miterlimit="10" d="M0.7,23.7l14.1,14.1"></path>
                                <path class="long" fill="none" stroke="#010202" stroke-width="2" stroke-miterlimit="10" d="M13.5,37.8L50.7,0.7"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="prices right-col">
                    <div class="price price-only"><span class="value">$<?php echo $quantity * $product['price'];?> <small>inc. GST</small></span></div>                                      
                </div>
                <div class="clear-fix"></div>
            </div>
        </footer>
    </div>
</li>