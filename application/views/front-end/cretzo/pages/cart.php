<?php 
$cart_count = isset($cart[0]['cart_count']) && !empty($cart[0]['cart_count']) ? $cart[0]['cart_count'] : 0;

// echo '<pre>';
// print_r(var_dump($cart));
// print_r($cart[0]['product_variants'][0]['variant_image'] ?? $cart[0]['image']);
// die;
?>

<!-- INPUTS TO STORE VALUES TO BE USED IN JS -->
<input type="hidden" id="input_cart_count" value="<?= $cart_count ?>">

<input type="hidden" name="promo_set" id="promo_set" value="" />
<input type="hidden" name="promo_code_amount" id="promo_code_amount" value="0" />

<!-- main container starts -->
<section class="cart-container">
    <!-- <h1 class="heading-n ta-c">Cart</h1> -->

    <!-- card indicator -->
    <div class="cart-indicator-container">
        <div class="company-logo">
            <?php $logo = get_settings('web_logo'); ?>
            <a href="<?= base_url() ?>"><img src="<?= base_url($logo) ?>" data-src="<?= base_url($logo) ?>" class="main-logo" alt="site-logo image"></a>
        </div>
        <div class="cart-indicator cart-indicator-active rounded-end">
            <p class="text-n">Cart</p>
        </div>
        <div class="completion-line active"></div>
        <div class="cart-indicator">
            <a class="text-decoration-none" href="<?= base_url('cart/checkout') ?>"><p class="text-n">Address</p></a>
        </div>
        <div class="completion-line"></div>
        <div class="cart-indicator">
            <a class="text-decoration-none" href="<?= base_url('cart/checkout') ?>"><a class="text-decoration-none" href="<?= base_url('cart/checkout') ?>"><p class="text-n">Payment</p></a>
        </div>
        <div class="quality-assured-container">
            <img class="quality-assured-img" src="<?= base_url('assets/front_end/cretzo/img/new_cretzo/orange-tick.png') ?>">
            <span class="text-s quality-assured-text">100% Quality Assured</p>
        </div>
    </div>

    <!-- cart -->
    <div class="cart">
        <div class="cart-left">

            <a href="<?= base_url('products') ?>" class="cretzo small-btn text-decoration-none px-0 text-s btn-nav-prev"><i class="fa fa-arrow-left mr-1"></i>Find more products</a>

            <div class="cart-left-one mt-2">
                <p class="text-n">Check delivery time & services</p>
            </div>

            <div class="cart-left-two">
                <p class="text-n">Available Offers</p>
                <p class="text-s">20% instant discount on Kotak Credit Card EMI transaction on min spend of ₹3,500.</p>
                <p class="text-s c-p show-more-text">Show More<img class="show-more-img" src="<?= base_url('assets/front_end/cretzo/img/new_cretzo/orange-arrow.png') ?>"></p>
            </div>

            <div class="cart-left-three">
                <?php $cart_empty = $cart_count <= 0 ?>
                <div>
                    <input type="checkbox" id="select-all-checkbox" <?php echo $cart_empty ? 'disabled' : '' ?> >
                    <label class="text-n"><span class="cart-count-checked">0</span>/<span class="cart-count"><?=$cart_count?></span> Items selected</label>
                </div>
                <div>
                    <a href="javascript:void(0)" id="clear_cart" class="selected-items-action-btn disabled">
                        <span class="text-s cart-left-three-btn">Remove</span>
                    </a>
                    <span class="text-n spacer">|</span>
                    <a href="javascript:void(0)" id="wishlist-all" class="selected-items-action-btn disabled">
                        <span class="text-s cart-left-three-btn">Add to wishlist</span>
                    </a>
                </div>
            </div>

            <ul class="cart-items-container">
                <!-- <li class="cart-item">
                    <div class="cart-item-img-container">
                        <img class="cart-item-img" src="../images/cart-item1.png">
                    </div>
                    <div class="cart-item-detail-container">
                        <h1 class="text-n">Ray-Ban Junior</h1>
                        <p class="text-s">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum dolore nostrum velit.</p>
                        <p class="text-es">Lorem ipsum dolor sit.</p>
                        <div class="cart-item-detail-dropdown-container">
                            <select class="cart-item-detail-dropdown"> name="Size:">
                                <option>Size:</option>
                                <option>M</option>
                                <option>L</option>
                                <option>Xl</option>
                            </select>
                            <select class="cart-item-detail-dropdown" name="Qty:">
                                <option>Qty:</option>
                                <option>1</option>
                                <option>2</option>
                            </select>
                        </div>
                        <p class="text-b"><span class="actual-price">₹7080</span><span class="discounted-price"> ₹3000 </span><span class="discount">40% OFF</span></p>
                    </div>
                    <img class="cross-icon" src="../images/cross-icon1.png">
                </li> -->

                <?php 
                    // $total_mrp = 0;
                    // $total_discount_on_mrp = 0;
                
                    foreach ($cart as $key => $row) {

                    if (isset($row['qty']) && $row['qty'] != 0) {
                        $price = $row['special_price'] != '' && $row['special_price'] != null && $row['special_price'] > 0 ? $row['special_price'] : $row['price'];
                ?>

                        <li class="cart-item cart-product" data-product-id="<?= $row['product_id']; ?>">
                            <div class="cart-item-img-container">
                                <a href="<?= base_url('products/details/' . $row['slug']) ?>">
                                    <img class="cart-item-img" src="<?= $row['product_variants'][0]['variant_image'] ?? $row['image'] ?>" alt="<?= $row['name']; ?>" style="object-fit: cover;" />
                                </a>
                                <!-- <img class="cart-item-img" src="../images/cart-item1.png"> -->
                            </div>
                            <div class="id">
                                <input type="hidden" name="<?= 'id[' . $key . ']' ?>" id="id" value="<?= $row['id'] ?>">
                            </div>
                            <div class="cart-item-detail-container">
                                <h1 class="text-n">
                                    <a class="text-decoration-none text-dark" href="<?= base_url('products/details/' . $row['slug']) ?>" target="_blank">
                                        <?= output_escaping(str_replace('\r\n', '&#13;&#10;', $row['name'])); ?>
                                    </a>
                                </h1>
                                <!-- <p class="text-s"><?= preg_replace('/((\w+\W*){'.(20-1).'}(\w+))(.*)/', '${1}', (output_escaping(str_replace('\r\n', '&#13;&#10;', $row['short_description'])))); ?></p> -->
                                
                                <?php
                                    if(isset($row['product_variants'][0]['attr_name']) && isset($row['product_variants'][0]['variant_values'])){
                                        $attr_names = explode(',', $row['product_variants'][0]['attr_name']);
                                        $attr_values = explode(',', $row['product_variants'][0]['variant_values']);
                                        echo '<p class="text-s product-variant-detail px-1">';
                                        for($i = 0; $i < sizeof($attr_names); $i++){
                                            echo '<span class="mr-1">';
                                            echo $attr_names[$i].': ';
                                            echo $attr_values[$i];
                                            echo '</span>';
                                        }
                                        echo '</p>';
                                    }
                                ?>

                                <p class="text-s mt-1"><?= word_limit(output_escaping(str_replace('\r\n', '&#13;&#10;', $row['short_description'])), 100); ?></p>
                                <p class="text-es"><?= output_escaping(str_replace('\r\n', '&#13;&#10;', $row['store_name'])) ?></p>

                                <div class="cart-item-detail-span mt-1">

                                    <!-- <td class="item-quantity"> -->
                                        <!-- <div class="num-block skin-2 product-quantity">
                                            <?php $check_current_stock_status = validate_stock([$row['id']], [$row['qty']]); ?>
                                            <?php if (isset($check_current_stock_status['error'])  && $check_current_stock_status['error'] == TRUE) { ?>
                                                <div><span class='text text-danger'> Out of Stock </span></div>
                                            <?php } else { ?>
                                                <div class="num-in form-control d-flex align-items-center">
                                                    <?php $price = $row['special_price'] != '' && $row['special_price'] != null && $row['special_price'] > 0 ? $row['special_price'] : $row['price']; ?>
                                                    <span class="minus dis" data-min="<?= (isset($row['minimum_order_quantity']) && !empty($row['minimum_order_quantity'])) ? $row['minimum_order_quantity'] : 1 ?>" data-step="<?= (isset($row['minimum_order_quantity']) && !empty($row['quantity_step_size'])) ? $row['quantity_step_size'] : 1 ?>"></span>
                                                    <input type="text" class="in-num itemQty" data-page="cart" data-id="<?= $row['id']; ?>" value="<?= $row['qty'] ?>" data-price="<?= $price ?>" data-step="<?= (isset($row['minimum_order_quantity']) && !empty($row['quantity_step_size'])) ? $row['quantity_step_size'] : 1 ?>" data-min="<?= (isset($row['minimum_order_quantity']) && !empty($row['minimum_order_quantity'])) ? $row['minimum_order_quantity'] : 1 ?>" data-max="<?= (isset($row['total_allowed_quantity']) && !empty($row['total_allowed_quantity'])) ? $row['total_allowed_quantity'] : '' ?>">
                                                    <span class="plus" data-max="<?= (isset($row['total_allowed_quantity']) && !empty($row['total_allowed_quantity'])) ? $row['total_allowed_quantity'] : '0' ?> " data-step="<?= (isset($row['minimum_order_quantity']) && !empty($row['quantity_step_size'])) ? $row['quantity_step_size'] : 1 ?>"></span>
                                                </div>
                                            <?php } ?>
                                        </div> -->

                                        <div class="num-block skin-2 product-quantity">
                                            <?php $check_current_stock_status = validate_stock([$row['id']], [$row['qty']]); ?>
                                            <?php if (isset($check_current_stock_status['error'])  && $check_current_stock_status['error'] == TRUE) { ?>
                                                <div><span class='text text-danger'> Out of Stock </span></div>
                                            <?php } else { ?>
                                                <div class="num-in form-control d-flex align-items-center mr-2">
                                                    <?php $price = $row['special_price'] != '' && $row['special_price'] != null && $row['special_price'] > 0 ? $row['special_price'] : $row['price']; ?>
                                                    <?php $original_price = $row['price']; ?>

                                                    <!-- <span class="minus dis" data-min="<?= (isset($row['minimum_order_quantity']) && !empty($row['minimum_order_quantity'])) ? $row['minimum_order_quantity'] : 1 ?>" data-step="<?= (isset($row['minimum_order_quantity']) && !empty($row['quantity_step_size'])) ? $row['quantity_step_size'] : 1 ?>"></span>
                                                    <input type="text" class="in-num itemQty" data-page="cart" data-id="<?= $row['id']; ?>" value="<?= $row['qty'] ?>" data-price="<?= $price ?>" data-original-price="<?= $original_price ?>" data-step="<?= (isset($row['minimum_order_quantity']) && !empty($row['quantity_step_size'])) ? $row['quantity_step_size'] : 1 ?>" data-min="<?= (isset($row['minimum_order_quantity']) && !empty($row['minimum_order_quantity'])) ? $row['minimum_order_quantity'] : 1 ?>" data-max="<?= (isset($row['total_allowed_quantity']) && !empty($row['total_allowed_quantity'])) ? $row['total_allowed_quantity'] : '' ?>">
                                                    <span class="plus" data-max="<?= (isset($row['total_allowed_quantity']) && !empty($row['total_allowed_quantity'])) ? $row['total_allowed_quantity'] : '0' ?> " data-step="<?= (isset($row['minimum_order_quantity']) && !empty($row['quantity_step_size'])) ? $row['quantity_step_size'] : 1 ?>"></span> -->

                                                    <span class="minus dis" style="background-image: url('<?= base_url('assets/front_end/cretzo/img/new_cretzo/minus.png') ?>');" data-min="<?= (isset($row['minimum_order_quantity']) && !empty($row['minimum_order_quantity'])) ? $row['minimum_order_quantity'] : 1 ?>" data-step="<?= (isset($row['minimum_order_quantity']) && !empty($row['quantity_step_size'])) ? $row['quantity_step_size'] : 1 ?>">
                                                        <!-- <i class="fa fa-minus"></i> -->
                                                    </span>
                                                    <input type="text" class="in-num itemQty" data-page="cart" data-id="<?= $row['id']; ?>" value="<?= $row['qty'] ?>" data-price="<?= $price ?>" data-original-price="<?= $original_price ?>" data-step="<?= (isset($row['minimum_order_quantity']) && !empty($row['quantity_step_size'])) ? $row['quantity_step_size'] : 1 ?>" data-min="<?= (isset($row['minimum_order_quantity']) && !empty($row['minimum_order_quantity'])) ? $row['minimum_order_quantity'] : 1 ?>" data-max="<?= (isset($row['total_allowed_quantity']) && !empty($row['total_allowed_quantity'])) ? $row['total_allowed_quantity'] : '' ?>">
                                                    <span class="plus" style="background-image: url('<?= base_url('assets/front_end/cretzo/img/new_cretzo/plus.png') ?>');" data-max="<?= (isset($row['total_allowed_quantity']) && !empty($row['total_allowed_quantity'])) ? $row['total_allowed_quantity'] : '0' ?> " data-step="<?= (isset($row['minimum_order_quantity']) && !empty($row['quantity_step_size'])) ? $row['quantity_step_size'] : 1 ?>">
                                                        <!-- <i class="fa fa-plus"></i> -->
                                                    </span>
                                                    
                                                    <!-- <span class="minus dis" data-min="<?= (isset($product['product'][0]['minimum_order_quantity']) && !empty($product['product'][0]['minimum_order_quantity'])) ? $product['product'][0]['minimum_order_quantity'] : 1 ?>" data-step="<?= (isset($product['product'][0]['minimum_order_quantity']) && !empty($product['product'][0]['quantity_step_size'])) ? $product['product'][0]['quantity_step_size'] : 1 ?>"></span>
                                                    <input type="text" name="qty" class="in-num" value="<?= (isset($product['product'][0]['minimum_order_quantity']) && !empty($product['product'][0]['minimum_order_quantity'])) ? $product['product'][0]['minimum_order_quantity'] : 1 ?>" data-step="<?= (isset($product['product'][0]['minimum_order_quantity']) && !empty($product['product'][0]['quantity_step_size'])) ? $product['product'][0]['quantity_step_size'] : 1 ?>" data-min="<?= (isset($product['product'][0]['minimum_order_quantity']) && !empty($product['product'][0]['minimum_order_quantity'])) ? $product['product'][0]['minimum_order_quantity'] : 1 ?>" data-max="<?= (isset($product['product'][0]['total_allowed_quantity']) && !empty($product['product'][0]['total_allowed_quantity'])) ? $product['product'][0]['total_allowed_quantity'] : '' ?>">
                                                    <span class="plus" data-max="<?= (isset($product['product'][0]['total_allowed_quantity']) && !empty($product['product'][0]['total_allowed_quantity'])) ? $product['product'][0]['total_allowed_quantity'] : '' ?> " data-step="<?= (isset($product['product'][0]['minimum_order_quantity']) && !empty($product['product'][0]['quantity_step_size'])) ? $product['product'][0]['quantity_step_size'] : 1 ?>"></span> -->
                                                </div>
                                            <?php } ?>
                                        </div>
                                    <!-- </td> -->

                                    <?php 
                                        $original_price = $row['price'];
                                        $is_special_price = $row['special_price'] != '' && $row['special_price'] != null && $row['special_price'] > 0;
                                        $price = $is_special_price ? $row['special_price'] : $original_price; 
                                        
                                        // add up Total Discount on MRP
                                        // $discount_on_mrp = ($original_price * $row['qty']) - ($price * $row['qty']);
                                        // $total_discount_on_mrp += $discount_on_mrp;

                                        // add up Total MRP
                                        // $total_mrp += ($original_price * $row['qty']);
                                    ?>



                                    <?php if($price == $original_price){?>
                                        <p class="text-b total-price"><span class="actual-price product-line-price"><?= $settings['currency'] . '' . number_format(($row['qty'] * $price), 0) ?></span></p>
                                    <?php }
                                    else{ ?>
                                        <p class="text-b total-price"><span class="discounted-price product-line-price"><?= $settings['currency'] . '' . number_format(($row['qty'] * $price), 0) ?></span><span class="actual-price product-line-price"><?= $settings['currency'] . '' . number_format(($row['qty'] * $original_price), 0) ?></span><span class="discount"><?= number_format((($original_price - $price)/$original_price)*100, 0); ?>% OFF</span></p>
                                    <?php } ?>
                                    
                                    <!-- <p class="text-b"><span class="actual-price">₹7080</span><span class="discounted-price"> ₹3000 </span><span class="discount">40% OFF</span></p> -->

                                </div>

                            </div>
                            <a class="product-removal link_cursor">
                                <i class="remove-product" name="remove_inventory" id="remove_inventory" data-id="<?= $row['id']; ?>" title="Remove from Cart">
                                    <img class="cross-icon" src="<?= base_url('assets/front_end/cretzo/img/new_cretzo/cross-icon1.png') ?>">
                                </i>
                            </a>
                        </li>

                        <tr class="cart-product-desc-list">
                            <td class="option text-start d-flex flex-row align-items-center ps-0" title="<?= $row['name']; ?>">
                                <!-- <figure class="rounded cart-img">
                                    <a href="<?= base_url('products/details/' . $row['slug']) ?>">
                                        <img src="<?= $row['image'] ?>" alt="<?= $row['name']; ?>" style="object-fit: cover;" /></a>
                                </figure> -->
                                
                                <!-- <div class="id">
                                    <input type="hidden" name="<?= 'id[' . $key . ']' ?>" id="id" value="<?= $row['id'] ?>">
                                </div> -->

                                <!-- <div class="w-100 ms-4">
                                    <h3 class="post-title h6 lh-xs mb-1" title="<?= $row['name']; ?>">
                                        <a class="text-decoration-none text-dark" href="<?= base_url('products/details/' . $row['slug']) ?>" target="_blank">
                                            <?= output_escaping(str_replace('\r\n', '&#13;&#10;', $row['name'])); ?>
                                        </a>
                                        <?php if (!empty($row['product_variants'])) { ?>
                                            <br><?= str_replace(',', ' | ', $row['product_variants'][0]['variant_values']) ?>
                                        <?php } ?>
                                    </h3>
                                </div> -->

                            </td>
                            <!-- <td>
                                <p class="price"><span class="amount"><?= $settings['currency'] . '' . number_format($price, 2) ?></span></p>
                            </td> -->
                            <!-- <td>
                                <?= isset($row['tax_percentage']) && !empty($row['tax_percentage']) ? $row['tax_percentage'] : '-' ?>
                            </td>
                            <td class="item-quantity">
                                <div class="num-block skin-2 product-quantity">
                                    <?php $check_current_stock_status = validate_stock([$row['id']], [$row['qty']]); ?>
                                    <?php if (isset($check_current_stock_status['error'])  && $check_current_stock_status['error'] == TRUE) { ?>
                                        <div><span class='text text-danger'> Out of Stock </span></div>
                                    <?php } else { ?>
                                        <div class="num-in form-control d-flex align-items-center">
                                            <?php $price = $row['special_price'] != '' && $row['special_price'] != null && $row['special_price'] > 0 ? $row['special_price'] : $row['price']; ?>
                                            <span class="minus dis" data-min="<?= (isset($row['minimum_order_quantity']) && !empty($row['minimum_order_quantity'])) ? $row['minimum_order_quantity'] : 1 ?>" data-step="<?= (isset($row['minimum_order_quantity']) && !empty($row['quantity_step_size'])) ? $row['quantity_step_size'] : 1 ?>"></span>
                                            <input type="text" class="in-num itemQty" data-page="cart" data-id="<?= $row['id']; ?>" value="<?= $row['qty'] ?>" data-price="<?= $price ?>" data-step="<?= (isset($row['minimum_order_quantity']) && !empty($row['quantity_step_size'])) ? $row['quantity_step_size'] : 1 ?>" data-min="<?= (isset($row['minimum_order_quantity']) && !empty($row['minimum_order_quantity'])) ? $row['minimum_order_quantity'] : 1 ?>" data-max="<?= (isset($row['total_allowed_quantity']) && !empty($row['total_allowed_quantity'])) ? $row['total_allowed_quantity'] : '' ?>">
                                            <span class="plus" data-max="<?= (isset($row['total_allowed_quantity']) && !empty($row['total_allowed_quantity'])) ? $row['total_allowed_quantity'] : '0' ?> " data-step="<?= (isset($row['minimum_order_quantity']) && !empty($row['quantity_step_size'])) ? $row['quantity_step_size'] : 1 ?>"></span>
                                        </div>
                                    <?php } ?>
                                </div>
                            </td> -->
                            <!-- <td class="text-center p-0 total-price"><span class="product-line-price"> <?= $settings['currency'] . '' . number_format(($row['qty'] * $price), 2) ?></span></td> -->
                            <!-- <td class="d-flex gap-2 align-items-center border-0">
                                <a class="product-removal link_cursor">
                                    <i class="remove-product uil uil-trash-alt fs-23 text-danger" name="remove_inventory" id="remove_inventory" data-id="<?= $row['id']; ?>" title="Remove from Cart"></i>
                                </a>
                                <a class="save-for-later remove-product link_cursor" data-id="<?= $row['id']; ?>">
                                    <i class="uil uil-bag-alt fs-23 text-blue" title="Save for Later"></i>
                                </a>
                            </td> -->
                        </tr>
                <?php }
                } ?>
            </ul>
        </div>
        <div class="cart-right">

            <div class="cart-right-one">
                <h1 class="text-b">COUPONS</h1>
                <div>
                    <p class="text-b flex-1"><img class="coupon-tag-icon" src="<?= base_url('assets/front_end/cretzo/img/new_cretzo/tag-icon.png') ?>">Apply Coupons</p>
                    <button class="cretzo btn btn-light text-n apply-btn" data-bs-toggle="modal" data-bs-target="#promo-code-modal">APPLY</button>
                </div>
                <!-- <p class="text-es"><span>Login</span> to get upto 500 off on first order</p> -->
                <p class="text-s">Show Your Support For Our Artisans By Purchasing Their Handcrafted Artworks.</p>
            </div>

            <div class="cart-right-two">
                <h1 class="text-b"><img class="delivery-icon" src="<?= base_url('assets/front_end/cretzo/img/new_cretzo/delivery-icon.png') ?>"> Delivery Estimates</h1>
                <ul class="list delivery-list pt-2">
                
                <?php 
                    foreach ($cart as $key => $row) {
                        if (isset($row['qty']) && $row['qty'] != 0) {

                            // Calculate the current date and add 7 days to it
                            $currentDate = new DateTime(); // Gets the current date
                            $startDate = $currentDate->modify('+7 day')->format('j M Y'); // 7 days from now
                            $endDate = $currentDate->modify('+7 day')->format('j M Y'); // 14 days from now
                        ?>
                        
                        <li class="delivery-list-item" id="delivery-p-<?= $row['id']; ?>">
                            <div>
                                <img class="delivery-list-item-img" src="<?= $row['product_variants'][0]['variant_image'] ?? $row['image'] ?>">
                            </div>
                            <div>
                                <!-- <p class="text-n">Estimated delivery by <span class="fw-b">1 Sep 2024</span></p> -->
                                <p class="text-n">Estimated delivery: <span class="fw-b"><?= $startDate ?> - <?= $endDate ?></span></p>
                            </div>
                        </li>

                <?php   }
                    } ?>
                </ul>
            </div>

            <?php 
                $delivery_charge = !empty($cart['sub_total']) ? $cart['delivery_charge'] : 0;
                $subtotal = !empty($cart['sub_total']) ? ($cart['overall_amount'] - $cart['delivery_charge']) : 0;
                $total = !empty($cart['sub_total']) ? $cart['overall_amount'] : 0;
                $total_mrp = !empty($cart['total_mrp']) ? $cart['total_mrp'] : 0;
                $total_discount_on_mrp = !empty($cart['discount_on_mrp']) ? $cart['discount_on_mrp'] : 0;

                $total = $total - $delivery_charge; // ! overriding this since we will not display shipping fee until address is selected on checkout page
            ?>

            <div class="cart-right-three">
                <h1 class="text-b">PRICE DETAIL (<span class="fw-n cart-count"><?=$cart_count?></span> Items)</h1>
                <table class="bill-container">
                    <tr class="bill-row">
                        <td class="text-s bill-column">Total MRP</td>
                        <td class="text-s bill-column" id="final_total_mrp">₹<?= moneyFormatIndia(round($total_mrp)) ?></td>
                    </tr>
                    <tr class="bill-row">
                        <td class="text-s bill-column">Discount on MRP</td>
                        <td class="text-s bill-column" id="final_discount_mrp">- ₹<?= moneyFormatIndia(round($total_discount_on_mrp)) ?></td>
                    </tr>
                    <tr class="bill-row">
                        <td class="text-s bill-column">Subtotal</td>
                        <td class="text-s bill-column" id="final_subtotal">₹<?= moneyFormatIndia(round($subtotal)) ?></td>
                    </tr>
                    <tr class="bill-row">
                        <td class="text-s bill-column">Coupon Discount</td>
                        <td class="text-s bill-column">
                            <span class="final-promocode-amount d-none" style="color: var(--color-success);"></span>
                            <span class="final-promocode d-none" style="color: var(--color-success);">₹<?= moneyFormatIndia(0) ?></span>
                            <a href="#" class="mb-4 pl-3 text-decoration-none text-blue fw-bold see-offers-btn" data-bs-toggle="modal" data-bs-target="#promo-code-modal" style="color: var(--color-orange) !important;">
                                See Offers
                            </a>
                        </td>
                    </tr>
                    <tr class="bill-row">
                        <td class="text-s bill-column">Platform Free</td>
                        <td class="text-s bill-column">FREE</td>
                    </tr>
                    <!-- We have decided to hide shipping fee until address is selected on checkout page -->
                    <!-- <tr class="bill-row">
                        <td class="text-s bill-column">Shipping Fee</td>
                        <td class="text-s bill-column" id="final_shipping_fee">₹<?= moneyFormatIndia(round($delivery_charge)) ?></td>
                    </tr> -->
                    <tr class="bill-row bill-row-last">
                        <td class="text-n bill-column fw-b">Total Amount</td>
                        <td class="text-n bill-column fw-b" id="final_total">₹<?= moneyFormatIndia(round($total)) ?></td>
                    </tr>
                </table>

                <div class="input-group my-4 mt-0">
                    <input type="text" class="form-control promocode_input" placeholder="Promo code">
                    <div class="input-group-append">
                        <button class="cretzo btn btn-dark btn-primary rounded-end py-1 redeem_btn"><?= !empty($this->lang->line('redeem')) ? $this->lang->line('redeem') : 'Redeem' ?></button>
                        <button class="cretzo btn btn-dark btn-danger d-none py-1 clear_promo_btn" style="border-color: var(--color-fail); background-color: var(--color-fail);"><?= !empty($this->lang->line('clear')) ? $this->lang->line('clear') : 'Clear' ?></button>
                    </div>
                </div>
                
                <!-- <button class="cretzo btn btn-dark place-order-btn">PLACE ORDER</button> -->
                
                <button class="cretzo btn btn-dark w-100" id="place-order-btn" data-url="<?= base_url('cart/checkout') ?>">Go To Checkout
                    <!-- <a href="<?= base_url('cart/checkout') ?>" id="checkout"></a> -->
                </button>
                
                
            </div>
        </div>
    </div>
</section>
<!-- main container ends -->

<!-- Modal for Coupon Codes -->
<div class="modal fade" id="promo-code-modal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content text-center">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <section id="promo_code_form">
                    <div class="h4"><?= !empty($this->lang->line('promocodes')) ? $this->lang->line('promocodes') : 'Promocodes' ?></div>
                    <ul id="promocode-list" class="p-0"></ul>
                </section>
            </div>
            <!--/.modal-content -->
        </div>
        <!--/.modal-body -->
    </div>
    <!--/.modal-dialog -->
</div>
<!--/.modal -->