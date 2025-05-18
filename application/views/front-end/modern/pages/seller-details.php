<!-- breadcrumb -->
<div class="content-wrapper">
    <section class="wrapper bg-soft-grape">
        <div class="container py-3 py-md-5">
            <nav class="d-inline-block" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 bg-transparent">
                    <li class="breadcrumb-item"><a href="<?= base_url() ?>" class="text-decoration-none"><?= !empty($this->lang->line('home')) ? $this->lang->line('home') : 'Home' ?></a></li>
                    <?php if (isset($right_breadcrumb) && !empty($right_breadcrumb)) {
                        foreach ($right_breadcrumb as $row) {
                    ?>
                            <li class="breadcrumb-item"><?= $row ?></li>
                    <?php }
                    } ?>
                    <li class="breadcrumb-item active" aria-current="page"><?= !empty($this->lang->line('seller')) ? $this->lang->line('seller') : 'Seller' ?></li>
                    <?php
                    if (isset($sellers) && !empty($sellers)) { ?>
                        <li class="breadcrumb-item active text-muted" aria-current="page"><?= $sellers[0]['store_name'] ?></li>
                    <?php } ?>
                </ol>
            </nav>
            <!-- /nav -->
        </div>
        <!-- /.container -->
    </section>
</div>
<!-- end breadcrumb -->


<section class="container listing-page mb-15">
    <div class="product-listing card-solid py-4">
        <div class="mx-0">
            <div class="pt-3 pb-3">
                <?php
                // echo "<pre>";
                // print_r($seller_details);
                // print_r($sellers);
                // print_r($sellers[0]['store_description']);
                // print_r($seller_products);
                ?>
                <?php foreach ($seller_details as $row) { ?>
                    <div class="card p-4">
                        <div class="d-flex gap-1 justify-content-between">
                            <div class="d-flex gap-4 align-items-center">
                                <div class="d-flex">
                                    <i class="fs-60 text-blue uil uil-store"></i>
                                </div>
                                <div class="d-flex flex-column">
                                    <h1 class="h1"><?= $row['username'] ?></h1>
                                    <ul class="d-flex gap-4 pl-0">
                                        <li class="d-inline-block">
                                            <i class="text-warning uil uil-star"></i>
                                            <?= $sellers[0]['rating'] ?> Ratings
                                        </li>
                                        <li class="d-inline-block">
                                            <i class="text-success uil uil-check-circle"></i>
                                            <?= $total_orders ?> Orders
                                        </li>
                                        <li class="d-inline-block">
                                            <i class="text-sky uil uil-cube"></i>
                                            <?= $seller_products_count ?> Products
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-flex gap-1">
                                <?php foreach ($sellers as $seller) { ?>
                                    <div class="seller-profile-card">
                                        <div class="d-flex">
                                            <a href="">
                                                <img class="pic-1 lazy" src="<?= base_url('assets/front_end/modern/img/product-placeholder.jpg') ?>" data-src="<?= base_url($seller['logo']) ?>">
                                            </a>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>

                <div class="card p-5 mt-5">
                    <h3>About Seller</h3>
                    <p><?= $sellers[0]['store_description'] ?></p>
                </div>


                <div class="card mt-5 p-5">

                    <h2 class="display-6 mb-1"><?= !empty($this->lang->line('products')) ? $this->lang->line('products') : 'Products' ?></h2>

                    <hr class="my-5">

                    <div class="grid grid-view projects-masonry shop">
                        <div class="row gx-md-8 gy-10 gy-md-13 isotope">
                            <?php foreach ($seller_products as $seller_product) {
                            ?>
                                <div class="project item col-md-6 col-xl-3" title="<?= $seller_product['name']; ?>">
                                    <figure class="rounded mb-6">
                                        <a href="<?= base_url('products/details/' . $seller_product['slug']) ?>">
                                            <img class="pic-1 lazy" src="<?= base_url('assets/front_end/modern/img/product-placeholder.jpg') ?>" data-src="<?= $seller_product['image_sm'] ?>" style="object-fit: cover;">
                                        </a>
                                        <a class="item-like text-decoration-none add-to-fav-btn 
                                                        <?= ($seller_product['is_favorite'] == 1) ? 'fa fa-heart' : 'fa fa-heart-o' ?>  
                                                        " href="#" data-bs-toggle="white-tooltip" title="Add to wishlist" data-product-id="<?= $seller_product['id'] ?>" style="color: <?= ($seller_product['is_favorite'] == 1) ? 'red' : '' ?>">
                                            <i class=""></i>
                                        </a>

                                        <a href="#" class="quick-view-btn item-view text-decoration-none" data-bs-toggle="white-tooltip" title="Quick View" data-tip="Quick View" data-product-id="<?= $seller_product['id'] ?>" data-product-variant-id="<?= $seller_product['variants'][0]['id'] ?>" data-izimodal-open="#quick-view">
                                            <i class="uil uil-eye"></i>
                                        </a>
                                        <?php
                                        if (count($seller_product['variants']) <= 1) {
                                            $variant_id = $seller_product['variants'][0]['id'];
                                            $modal = "";
                                        } else {
                                            $variant_id = "";
                                            $modal = "#quick-view";
                                        }
                                        ?>

                                        <?php
                                        if (count($seller_product['variants']) <= 1) {
                                            $variant_id = $seller_product['variants'][0]['id'];
                                        } else {
                                            $variant_id = "";
                                        }
                                        ?>
                                        <a href="#" class="compare item-compare text-decoration-none" data-bs-toggle="white-tooltip" title="Compare" data-tip="Compare" data-product-id="<?= $seller_product['id'] ?>" data-product-variant-id="<?= $variant_id ?>">
                                            <i class="uil uil-exchange-alt"></i>
                                        </a>

                                        <?php if (isset($seller_product['min_max_price']['special_price']) && $seller_product['min_max_price']['special_price'] != '' && $seller_product['min_max_price']['special_price'] != 0 && $seller_product['min_max_price']['special_price'] < $seller_product['min_max_price']['min_price']) { ?>
                                            <span class="avatar bg-pink text-white w-10 h-10 position-absolute text-uppercase fs-13" style="top: 1rem; left: 1rem;">
                                                <span class="d-flex mt-3 ms-2"><?= !empty($this->lang->line('sale')) ? $this->lang->line('sale') : 'Sale' ?></span>
                                            </span>
                                        <?php } ?>

                                        <?php $variant_price = ($seller_product['variants'][0]['special_price'] > 0 && $seller_product['variants'][0]['special_price'] != '') ? $seller_product['variants'][0]['special_price'] : $seller_product['variants'][0]['price'];
                                        $data_min = (isset($seller_product['minimum_order_quantity']) && !empty($seller_product['minimum_order_quantity'])) ? $seller_product['minimum_order_quantity'] : 1;
                                        $data_step = (isset($seller_product['minimum_order_quantity']) && !empty($seller_product['quantity_step_size'])) ? $seller_product['quantity_step_size'] : 1;
                                        $data_max = (isset($seller_product['total_allowed_quantity']) && !empty($seller_product['total_allowed_quantity'])) ? $seller_product['total_allowed_quantity'] : 0;
                                        ?>
                                        <a href="#" class="add_to_cart item-cart text-decoration-none" data-product-id="<?= $seller_product['id'] ?>" data-product-variant-id="<?= $variant_id ?>" data-product-title="<?= $seller_product['name'] ?>" data-product-image="<?= $seller_product['image']; ?>" data-product-price="<?= $variant_price; ?>" data-min="<?= $data_min; ?>" data-step="<?= $data_step; ?>" data-product-description="<?= short_description_word_limit(output_escaping(str_replace('\r\n', '&#13;&#10;', strip_tags($seller_product['short_description'])))); ?>" data-izimodal-open="<?= $modal ?>">
                                            <i class="uil uil-shopping-cart-alt"></i>&nbsp;<?= !empty($this->lang->line('add_to_cart')) ? $this->lang->line('add_to_cart') : 'Add To Cart' ?></a>

                                    </figure>
                                    <div class="post-header">
                                        <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                                            <input id="input" name="rating" class="rating rating-loading d-none" data-size="xs" value="<?= $seller_product['rating'] ?>" data-show-clear="false" data-show-caption="false" readonly>
                                        </div>
                                        <h4 class="post-title title" title="<?= $seller_product['name']; ?>">
                                            <a href="<?= base_url('products/details/' . $seller_product['slug']) ?>" class="link-dark text-decoration-none"><?= short_description_word_limit(output_escaping(str_replace('\r\n', '&#13;&#10;', strip_tags($seller_product['name']))), 20); ?></a>
                                        </h4>
                                        <?php if (($seller_product['variants'][0]['special_price'] < $seller_product['variants'][0]['price']) && ($seller_product['variants'][0]['special_price'] != 0)) { ?>
                                            <p class="mb-0 mt-2 price text-muted">
                                                <span id="price" style='font-size: 20px;'>
                                                    <?php echo $settings['currency'] ?>
                                                    <?php
                                                    $price = $seller_product['variants'][0]['special_price'];
                                                    echo number_format($price, 2);
                                                    ?>
                                                </span>
                                                <sup>
                                                    <span class="special-price striped-price text-danger" id="product-striped-price-div">
                                                        <s id="striped-price">
                                                            <?php echo $settings['currency'] ?>
                                                            <?php $price = $seller_product['variants'][0]['price'];
                                                            echo number_format($price, 2);
                                                            // echo $price;
                                                            ?>
                                                        </s>
                                                    </span>
                                                </sup>
                                            </p>
                                        <?php } else { ?>
                                            <p class="mb-0 mt-2 price text-muted">
                                                <span id="price" style='font-size: 20px;'>
                                                    <?php echo $settings['currency'] ?>
                                                    <?php
                                                    $price = $seller_product['variants'][0]['price'];
                                                    echo number_format($price, 2);
                                                    ?>
                                                </span>
                                            </p>
                                        <?php } ?>
                                    </div>
                                    <!-- /.post-header -->
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <nav class="mt-14 page-link text-center" aria-label="pagination">
                        <?= (isset($links)) ? $links : '' ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>