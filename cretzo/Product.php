<?php include 'header.php'; ?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <!-- <div class="col-lg-12">
            <div class="mx-2"><a href="" class="aTag">HOME</a> > <a href="" class="active aTag">EARRINGS</a></div>
        </div> -->
        <div class="col-lg-2 D-none">
            <div class="my-2">
                <div class="categories">
                    <h5 class="textUpper">Filter</h5>
                    <hr>
                    <h6 class="textUpper">categories</h6>
                    <hr>
                    <div><a href="" class="aTag textCapital" style="line-height:30px;">fashionware (10)</a></div>
                    <div><a href="" class="aTag textCapital"style="line-height:30px;">kitchenware (5)</a></div>
                    <div><a href="" class="aTag textCapital"style="line-height:30px;">electronics (8)</a></div>
                    <div><a href="" class="aTag textCapital"style="line-height:30px;">accessories (4)</a></div>
                    <div><a href="" class="aTag textCapital"style="line-height:30px;">shoe (5)</a></div>
                    <div><a href="" class="aTag textCapital"style="line-height:30px;">toys (2)</a></div>
                </div>
                <div class="price">
                    <hr>
                    <h6 class="textUpper">Price</h6>
                    <hr>
                    <input type="range" id="priceRange" min="1" max="1000" onchange="updatePrice(this.value)">
                    <p class="aTag">Price: <i class="bi bi-currency-rupee"></i><span id="priceValue">1</span> - <i class="bi bi-currency-rupee"></i>1000</p>
                </div>
                <div class="brand">
                    <hr>
                    <h6 class="textUpper">Brand</h6>
                    <hr>
                    <div class="checkbox-wrapper">
                        <input type="checkbox" id="checkbox-1" class="checkbox-custom">
                        <label for="checkbox-1" class="checkbox-label textCapital">Studio (3)</label>
                    </div>

                    <div class="checkbox-wrapper">
                        <input type="checkbox" id="checkbox-2" class="checkbox-custom">
                        <label for="checkbox-2" class="checkbox-label textCapital">Hastech (4)</label>
                    </div>

                    <div class="checkbox-wrapper">
                        <input type="checkbox" id="checkbox-3" class="checkbox-custom">
                        <label for="checkbox-3" class="checkbox-label textCapital">Quickiin (15)</label>
                    </div>
                    <div class="checkbox-wrapper">
                        <input type="checkbox" id="checkbox-3" class="checkbox-custom">
                        <label for="checkbox-3" class="checkbox-label textCapital">Graphic corner (10)</label>
                    </div>
                    <div class="checkbox-wrapper">
                        <input type="checkbox" id="checkbox-3" class="checkbox-custom">
                        <label for="checkbox-3" class="checkbox-label textCapital">devItems (12)</label>
                    </div>
                </div>
                <div>
                    <hr>
                    <h6 class="textUpper">Color</h6>
                    <hr>
                    <div class="">
                        <span class="dot-1 mx-1" onclick="toggleIcon(this)"></span>
                        <span class="dot-2 mx-1" onclick="toggleIcon(this)"></span>
                        <span class="dot-3 mx-1" onclick="toggleIcon(this)"></span>
                        <span class="dot-4 mx-1" onclick="toggleIcon(this)"></span>
                        <span class="dot-5 mx-1" onclick="toggleIcon(this)"></span>
                        <span class="dot-6 mx-1" onclick="toggleIcon(this)"></span>
                        <span class="dot-7 mx-1" onclick="toggleIcon(this)"></span>
                        <span class="dot-8 mx-1" onclick="toggleIcon(this)"></span>
                    </div>
                </div>
                <div class="Size">
                    <hr>
                    <h6 class="textUpper">Size</h6>
                    <hr>
                    <div class="checkbox-wrapper">
                        <input type="checkbox" id="checkbox-1" class="checkbox-custom">
                        <label for="checkbox-1" class="checkbox-label">S (3)</label>
                    </div>

                    <div class="checkbox-wrapper">
                        <input type="checkbox" id="checkbox-2" class="checkbox-custom">
                        <label for="checkbox-2" class="checkbox-label">M (4)</label>
                    </div>

                    <div class="checkbox-wrapper">
                        <input type="checkbox" id="checkbox-3" class="checkbox-custom">
                        <label for="checkbox-3" class="checkbox-label">L (15)</label>
                    </div>
                    <div class="checkbox-wrapper">
                        <input type="checkbox" id="checkbox-3" class="checkbox-custom">
                        <label for="checkbox-3" class="checkbox-label"> xl (10)</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-10">
            <div>
                <div class="row justify-content-between my-2">
                    <div class="col-lg-4 col-6">
                        <span class="text-secondary">Showing 1-16 of 50</span>
                    </div>

                    <div class="col-lg-4 col-6 text-end d-lg-none">
                        <i class="bi bi-filter fs-2" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling" style="cursor: pointer;"></i>
                    </div>
                    <div class="col-lg-2 col-6 D-none">
                        <!-- <span for="">Sort by:</span> -->
                        <select name="" id="" class="form-control input-custom">
                            <option value="">Sort by</option>
                            <option value="">Popularity</option>
                            <option value="">Newest</option>
                            <option value="">Oldest</option>
                            <option value="">Rating (low to High)</option>
                            <option value="">Rating (High to low)</option>

                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-6 position-relative my-2">
                        <div>
                            <a href="productDetails.php"><img src="assets/img//il_300x300.4245808662_a3x4.jpg.png" class="img-fluid rounded-3" alt=""></a>
                        </div>
                        <div class="text-center p-3">
                            <span>Mony</span>
                            <h6>Product Name</h6>
                            <span class="active">Rs. 2500 <del class="text-secondary">Rs. 2500</del> (60%)</span> <br>
                        </div>
                        <div class="position-absolute top-0 start-0 mx-3">
                            
                            <div class="new my-2"><i class="bi bi-star"></i> 4.5</div>
                        </div>
                        <div class="position-absolute top-0 end-0 mx-3 active">
                        <i class="bi bi-heart fs-4"></i>

                        </div>
                    </div>
                    <div class="col-lg-3 col-6 position-relative my-2">
                        <div>
                            <a href="productDetails.php"><img src="assets/img//il_300x300.4245808662_a3x4.jpg.png" class="img-fluid rounded-3" alt=""></a>
                        </div>
                        <div class="text-center p-3">
                            <span>Mony</span>
                            <h6>Product Name</h6>
                            <span class="active">Rs. 2500 <del class="text-secondary">Rs. 2500</del> (60%)</span> <br>
                        </div>
                        <div class="position-absolute top-0 start-0 mx-3">
                            
                            <div class="new my-2"><i class="bi bi-star"></i> 4.5</div>
                        </div>
                        <div class="position-absolute top-0 end-0 mx-3 active">
                        <i class="bi bi-heart fs-4"></i>

                        </div>
                    </div>
                    <div class="col-lg-3 col-6 position-relative my-2">
                        <div>
                            <a href="productDetails.php"><img src="assets/img//il_300x300.4245808662_a3x4.jpg.png" class="img-fluid rounded-3" alt=""></a>
                        </div>
                        <div class="text-center p-3">
                            <span>Mony</span>
                            <h6>Product Name</h6>
                            <span class="active">Rs. 2500 <del class="text-secondary">Rs. 2500</del> (60%)</span> <br>
                        </div>
                        <div class="position-absolute top-0 start-0 mx-3">
                            
                            <div class="new my-2"><i class="bi bi-star"></i> 4.5</div>
                        </div>
                        <div class="position-absolute top-0 end-0 mx-3 active">
                        <i class="bi bi-heart fs-4"></i>

                        </div>
                    </div>
                    <div class="col-lg-3 col-6 position-relative my-2">
                        <div>
                            <a href="productDetails.php"><img src="assets/img//il_300x300.4245808662_a3x4.jpg.png" class="img-fluid rounded-3" alt=""></a>
                        </div>
                        <div class="text-center p-3">
                            <span>Mony</span>
                            <h6>Product Name</h6>
                            <span class="active">Rs. 2500 <del class="text-secondary">Rs. 2500</del> (60%)</span> <br>
                        </div>
                        <div class="position-absolute top-0 start-0 mx-3">
                            
                            <div class="new my-2"><i class="bi bi-star"></i> 4.5</div>
                        </div>
                        <div class="position-absolute top-0 end-0 mx-3 active">
                        <i class="bi bi-heart fs-4"></i>

                        </div>
                    </div>
                    <div class="col-lg-3 col-6 position-relative my-2">
                        <div>
                            <a href="productDetails.php"><img src="assets/img//il_300x300.4245808662_a3x4.jpg.png" class="img-fluid rounded-3" alt=""></a>
                        </div>
                        <div class="text-center p-3">
                            <span>Mony</span>
                            <h6>Product Name</h6>
                            <span class="active">Rs. 2500 <del class="text-secondary">Rs. 2500</del> (60%)</span> <br>
                        </div>
                        <div class="position-absolute top-0 start-0 mx-3">
                            
                            <div class="new my-2"><i class="bi bi-star"></i> 4.5</div>
                        </div>
                        <div class="position-absolute top-0 end-0 mx-3 active">
                        <i class="bi bi-heart fs-4"></i>

                        </div>
                    </div>
                    <div class="col-lg-3 col-6 position-relative my-2">
                        <div>
                            <a href="productDetails.php"><img src="assets/img//il_300x300.4245808662_a3x4.jpg.png" class="img-fluid rounded-3" alt=""></a>
                        </div>
                        <div class="text-center p-3">
                            <span>Mony</span>
                            <h6>Product Name</h6>
                            <span class="active">Rs. 2500 <del class="text-secondary">Rs. 2500</del> (60%)</span> <br>
                        </div>
                        <div class="position-absolute top-0 start-0 mx-3">
                            
                            <div class="new my-2"><i class="bi bi-star"></i> 4.5</div>
                        </div>
                        <div class="position-absolute top-0 end-0 mx-3 active">
                        <i class="bi bi-heart fs-4"></i>

                        </div>
                    </div>
                    <div class="col-lg-3 col-6 position-relative my-2">
                        <div>
                            <a href="productDetails.php"><img src="assets/img//il_300x300.4245808662_a3x4.jpg.png" class="img-fluid rounded-3" alt=""></a>
                        </div>
                        <div class="text-center p-3">
                            <span>Mony</span>
                            <h6>Product Name</h6>
                            <span class="active">Rs. 2500 <del class="text-secondary">Rs. 2500</del> (60%)</span> <br>
                        </div>
                        <div class="position-absolute top-0 start-0 mx-3">
                            
                            <div class="new my-2"><i class="bi bi-star"></i> 4.5</div>
                        </div>
                        <div class="position-absolute top-0 end-0 mx-3 active">
                        <i class="bi bi-heart fs-4"></i>

                        </div>
                    </div>
                    <div class="col-lg-3 col-6 position-relative my-2">
                        <div>
                            <a href="productDetails.php"><img src="assets/img//il_300x300.4245808662_a3x4.jpg.png" class="img-fluid rounded-3" alt=""></a>
                        </div>
                        <div class="text-center p-3">
                            <span>Mony</span>
                            <h6>Product Name</h6>
                            <span class="active">Rs. 2500 <del class="text-secondary">Rs. 2500</del> (60%)</span> <br>
                        </div>
                        <div class="position-absolute top-0 start-0 mx-3">
                            
                            <div class="new my-2"><i class="bi bi-star"></i> 4.5</div>
                        </div>
                        <div class="position-absolute top-0 end-0 mx-3 active">
                        <i class="bi bi-heart fs-4"></i>

                        </div>
                    </div>
                    <div class="col-lg-3 col-6 position-relative my-2">
                        <div>
                            <a href="productDetails.php"><img src="assets/img//il_300x300.4245808662_a3x4.jpg.png" class="img-fluid rounded-3" alt=""></a>
                        </div>
                        <div class="text-center p-3">
                            <span>Mony</span>
                            <h6>Product Name</h6>
                            <span class="active">Rs. 2500 <del class="text-secondary">Rs. 2500</del> (60%)</span> <br>
                        </div>
                        <div class="position-absolute top-0 start-0 mx-3">
                            
                            <div class="new my-2"><i class="bi bi-star"></i> 4.5</div>
                        </div>
                        <div class="position-absolute top-0 end-0 mx-3 active">
                        <i class="bi bi-heart fs-4"></i>

                        </div>
                    </div>
                    <div class="col-lg-3 col-6 position-relative my-2">
                        <div>
                            <a href="productDetails.php"><img src="assets/img//il_300x300.4245808662_a3x4.jpg.png" class="img-fluid rounded-3" alt=""></a>
                        </div>
                        <div class="text-center p-3">
                            <span>Mony</span>
                            <h6>Product Name</h6>
                            <span class="active">Rs. 2500 <del class="text-secondary">Rs. 2500</del> (60%)</span> <br>
                        </div>
                        <div class="position-absolute top-0 start-0 mx-3">
                            
                            <div class="new my-2"><i class="bi bi-star"></i> 4.5</div>
                        </div>
                        <div class="position-absolute top-0 end-0 mx-3 active">
                        <i class="bi bi-heart fs-4"></i>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- offcanvas for mobile -->
<div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
    <div class="offcanvas-header">
        <h6 class="offcanvas-title" id="offcanvasScrollingLabel">Filter</h6>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
    <div class="my-2">
                <div class="categories">
                    <h5 class="textUpper">Filter</h5>
                    <h6 class="textUpper">categories</h6>
                    <hr>
                    <p><a href="" class="aTag textCapital">fashionware (10)</a></p>
                    <p><a href="" class="aTag textCapital">kitchenware (5)</a></p>
                    <p><a href="" class="aTag textCapital">electronics (8)</a></p>
                    <p><a href="" class="aTag textCapital">accessories (4)</a></p>
                    <p><a href="" class="aTag textCapital">shoe (5)</a></p>
                    <p><a href="" class="aTag textCapital">toys (2)</a></p>
                </div>
                <div class="price">
                    <h6 class="textUpper">Price</h6>
                    <hr>
                    <input type="range" id="priceRange" min="1" max="1000" onchange="updatePrice(this.value)">
                    <p class="aTag">Price: <i class="bi bi-currency-rupee"></i><span id="priceValue">1</span> - <i class="bi bi-currency-rupee"></i>1000</p>
                </div>
                <div class="brand">
                    <h6 class="textUpper">Brand</h6>
                    <hr>
                    <div class="checkbox-wrapper">
                        <input type="checkbox" id="checkbox-1" class="checkbox-custom">
                        <label for="checkbox-1" class="checkbox-label textCapital">Studio (3)</label>
                    </div>

                    <div class="checkbox-wrapper">
                        <input type="checkbox" id="checkbox-2" class="checkbox-custom">
                        <label for="checkbox-2" class="checkbox-label textCapital">Hastech (4)</label>
                    </div>

                    <div class="checkbox-wrapper">
                        <input type="checkbox" id="checkbox-3" class="checkbox-custom">
                        <label for="checkbox-3" class="checkbox-label textCapital">Quickiin (15)</label>
                    </div>
                    <div class="checkbox-wrapper">
                        <input type="checkbox" id="checkbox-3" class="checkbox-custom">
                        <label for="checkbox-3" class="checkbox-label textCapital">Graphic corner (10)</label>
                    </div>
                    <div class="checkbox-wrapper">
                        <input type="checkbox" id="checkbox-3" class="checkbox-custom">
                        <label for="checkbox-3" class="checkbox-label textCapital">devItems (12)</label>
                    </div>
                </div>
                <div>
                    <h6 class="textUpper">Color</h6>
                    <hr>
                    <div class="">
                        <span class="dot-1 mx-1" onclick="toggleIcon(this)"></span>
                        <span class="dot-2 mx-1" onclick="toggleIcon(this)"></span>
                        <span class="dot-3 mx-1" onclick="toggleIcon(this)"></span>
                        <span class="dot-4 mx-1" onclick="toggleIcon(this)"></span>
                        <span class="dot-5 mx-1" onclick="toggleIcon(this)"></span>
                        <span class="dot-6 mx-1" onclick="toggleIcon(this)"></span>
                        <span class="dot-7 mx-1" onclick="toggleIcon(this)"></span>
                        <span class="dot-8 mx-1" onclick="toggleIcon(this)"></span>
                    </div>
                </div>
                <div class="Size">
                    <h6 class="textUpper">Size</h6>
                    <hr>
                    <div class="checkbox-wrapper">
                        <input type="checkbox" id="checkbox-1" class="checkbox-custom">
                        <label for="checkbox-1" class="checkbox-label">S (3)</label>
                    </div>

                    <div class="checkbox-wrapper">
                        <input type="checkbox" id="checkbox-2" class="checkbox-custom">
                        <label for="checkbox-2" class="checkbox-label">M (4)</label>
                    </div>

                    <div class="checkbox-wrapper">
                        <input type="checkbox" id="checkbox-3" class="checkbox-custom">
                        <label for="checkbox-3" class="checkbox-label">L (15)</label>
                    </div>
                    <div class="checkbox-wrapper">
                        <input type="checkbox" id="checkbox-3" class="checkbox-custom">
                        <label for="checkbox-3" class="checkbox-label"> xl (10)</label>
                    </div>
                </div>
            </div>
    </div>
</div>

<?php include 'footer.php'; ?>