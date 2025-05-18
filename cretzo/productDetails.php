<?php include 'header.php'; ?>
<div class="container-fluid">
    <div class="row justify-content-center">
            <!-- <div class="col-lg-12">
                <div class="mx-2"><a href="" class="aTag">HOME</a> > <a href="" class="aTag">Earring</a> > <a href="" class="active aTag">Products Details</a></div>
            </div> -->
        <div class="col-lg-5 my-3">
            <div id="selectedImage"></div>
            <div class="my-2 d-flex justify-content-between">
                <!-- <div class="col-lg-2"> -->
                <img src="assets/img/image 27.png" width="60px" height="60px" class="rounded activeImg" alt="" onclick="handleImageClick(this)">
                <!-- </div> -->
                <!-- <div class="col-lg-2"> -->
                <img src="assets/img//image 12.png" width="60px" height="60px" class="rounded" alt="" onclick="handleImageClick(this)">
                <!-- </div> -->
                <!-- <div class="col-lg-2"> -->
                <img src="assets/img/ring.jpg" width="60px" height="60px" class="rounded" alt="" onclick="handleImageClick(this)">
                <!-- </div> -->
                <!-- <div class="col-lg-2"> -->
                <img src="assets/img/store.jpg" width="60px" height="60px" class="rounded" alt="" onclick="handleImageClick(this)">
                <!-- </div> -->
                <!-- <div class="col-lg-2"> -->
                <img src="assets/img//banner.jpg" width="60px" height="60px" class="rounded" alt="" onclick="handleImageClick(this)">
                <!-- </div> -->
            </div>
        </div>
        <div class="col-lg-6 content-center my-3">
            <div>
                <span>lorem</span>
                <h5>Handmade Golden Necklace Full Family Package</h5>
                <div>
                    <i class="bi bi-star text-warning"></i>
                    <i class="bi bi-star text-warning"></i>
                    <i class="bi bi-star text-warning"></i>
                    <i class="bi bi-star text-warning"></i>
                    <i class="bi bi-star text-warning"></i>
                </div>
                <p><i class="bi bi-currency-rupee"></i><span class="active">70.00</span> <del><i class="bi bi-currency-rupee"></i>90.00</del>  <span class="text-success" style="font-size: small;"> 10% discount</span> </p>
                <p> <i class="bi bi-check-circle-fill text-success"></i> 200 in stock</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore pariatur nemo unde? Iusto alias dolorem consectetur laboriosam, rem optio quaerat.</p>
                <div class="d-flex">
                    <div class="mt-1">
                        <span style="font-weight: 400;">Qty :</span>
                        <span class="qtyDiv">
                            <button class="btn" onclick="decreaseQty()">-</button>
                            <span id="quantity">1</span>
                            <button class="btn" onclick="increaseQty()">+</button>
                        </span>
                    </div>
                    <div class="mx-2">
                        <a href="addToCart.php"><button class="btnAddToCard">Add to cart</button></a>
                    </div>
                </div>
                <div class="my-4">
                    <span style="font-weight: 400;">Size :</span>
                    <span>
                        <span class="p-2 border rounded mx-1">
                            M
                        </span>
                        <span class="p-2 border rounded mx-1">
                            L
                        </span>
                        <span class="p-2 border rounded mx-1">
                            Xl
                        </span>  <span class="p-2 border rounded mx-1">
                            XXL
                        </span>
                        <!-- <select name="" id="" class="sizeSelector form-control">
                            <option value="">s</option>
                            <option value="">M</option>
                            <option value="">L</option>
                            <option value="">Xl</option>
                            <option value="">XXl</option>
                        </select> -->
                    </span>
                </div>
                <div class="my-3">
                    <span>Color:</span>
                    <span class="dot-1 mx-1" onclick="toggleIcon(this)"></span>
                    <span class="dot-2 mx-1" onclick="toggleIcon(this)"></span>
                    <span class="dot-3 mx-1" onclick="toggleIcon(this)"></span>
                    <span class="dot-4 mx-1" onclick="toggleIcon(this)"></span>
                </div>
                <div class="d-flex">
                    <button class="btnStyle">Customization</button>
                    <button class="btnStyle mx-3"><a href="wishlist.php" class="aTag active">Add to Wishlist</a></button>
                </div>
                <hr>
                <div class="d-flex justify-content-evenly text-center">
                    <span><span class="bi bi-truck fs-3" style="line-height:1px;"></span>
                        <div style="line-height:3px;font-size:small">Free Ship</div>
                    </span>
                    <span><span class="bi bi-truck fs-3" style="line-height:1px;"></span>
                        <div style="line-height:3px;font-size:small">1-2 day delivery</div>
                    </span>
                    <span><span class="bi bi-truck fs-3" style="line-height:1px;"></span>
                        <div style="line-height:3px;font-size:small">Free Ship</div>
                    </span>
                    <span><span class="bi bi-truck fs-3" style="line-height:1px;"></span>
                        <div style="line-height:3px;font-size:small">Free Ship</div>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center my-5">
        <div class="col-lg-11">
            <h5>Description</h5>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni velit tempora ipsa quo est aliquam nemo officiis dolorem id possimus, tenetur error repellendus totam sunt, rem quod quis enim odit laudantium voluptas laboriosam veritatis! Saepe laboriosam commodi perferendis harum qui reiciendis minus dolorum consequatur placeat dolorem magni, voluptatum molestias enim?</p>
        </div>
        <div class="col-lg-11">
            <div>
                <h5>Information</h5>
                <table class="table">
                    <tr>
                        <td style="font-weight:500">Brand</td>
                        <td style="font-weight:500">Brand</td>
                        <td style="font-weight:500">Brand</td>
                        <td style="font-weight:500">Brand</td>

                    </tr>
                    <tr>
                        <td>Brand Name</td>
                        <td>Brand Name</td>
                        <td>Brand Name</td>
                        <td>Brand Name</td>



                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- More products form this seller
 -->
<div class="container-fluid my-3">
    <div class="row justify-content-center">
        <div class="col-lg-11">
            <div class="text-center">
                <h3>More products form this seller</h3>
                <span style="font-size:small;"><a href="sellerProfile.php" class="active">View Seller Profile</a></span>
                <div class="text-center">
                    <img src="./assets//img//arrow.png" class="img-fluid" alt="">
                </div>
            </div>
            <div id="MoreProductSeller" class="owl-carousel owl-theme my-2">
                <div class="item">
                    <div class="rounded-4 position-relative">
                        <div>
                            <a href="productDetails.php"><img src="assets/img//il_300x300.4245808662_a3x4.jpg.png" class="img-fluid rounded-3" alt=""></a>
                        </div>
                        <div class="text-center p-3">
                            <span class="text-dark">Platinum</span>
                            <h6 class="text-dark">Product Name</h6>
                            <span class="active">Rs. 2500 <del class="text-secondary">Rs. 2500</del></span>
                        </div>
                        <div class="position-absolute top-0 start-0 mx-3">
                            <div class="sale my-2">New</div>
                            <div class="new"><i class="bi bi-star"></i> 4.5</div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="rounded-4 position-relative">
                        <div>
                            <a href="productDetails.php"><img src="assets/img//il_300x300.4245808662_a3x4.jpg.png" class="img-fluid rounded-3" alt=""></a>
                        </div>
                        <div class="text-center p-3">
                            <span class="text-dark">Platinum</span>
                            <h6 class="text-dark">Product Name</h6>
                            <span class="active">Rs. 2500 <del class="text-secondary">Rs. 2500</del></span>
                        </div>
                        <div class="position-absolute top-0 start-0 mx-3">
                            <div class="sale my-2">New</div>
                            <div class="new"><i class="bi bi-star"></i> 4.5</div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="rounded-4 position-relative">
                        <div>
                            <a href="productDetails.php"><img src="assets/img//il_300x300.4245808662_a3x4.jpg.png" class="img-fluid rounded-3" alt=""></a>
                        </div>
                        <div class="text-center p-3">
                            <span class="text-dark">Platinum</span>
                            <h6 class="text-dark">Product Name</h6>
                            <span class="active">Rs. 2500 <del class="text-secondary">Rs. 2500</del></span>
                        </div>
                        <div class="position-absolute top-0 start-0 mx-3">
                            <div class="sale my-2">New</div>
                            <div class="new"><i class="bi bi-star"></i> 4.5</div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="rounded-4 position-relative">
                        <div>
                            <a href="productDetails.php"><img src="assets/img//il_300x300.4245808662_a3x4.jpg.png" class="img-fluid rounded-3" alt=""></a>
                        </div>
                        <div class="text-center p-3">
                            <span class="text-dark">Platinum</span>
                            <h6 class="text-dark">Product Name</h6>
                            <span class="active">Rs. 2500 <del class="text-secondary">Rs. 2500</del></span>
                        </div>
                        <div class="position-absolute top-0 start-0 mx-3">
                            <div class="sale my-2">New</div>
                            <div class="new"><i class="bi bi-star"></i> 4.5</div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="rounded-4 position-relative">
                        <div>
                            <a href="productDetails.php"><img src="assets/img//il_300x300.4245808662_a3x4.jpg.png" class="img-fluid rounded-3" alt=""></a>
                        </div>
                        <div class="text-center p-3">
                            <span class="text-dark">Platinum</span>
                            <h6 class="text-dark">Product Name</h6>
                            <span class="active">Rs. 2500 <del class="text-secondary">Rs. 2500</del></span>
                        </div>
                        <div class="position-absolute top-0 start-0 mx-3">
                            <div class="sale my-2">New</div>
                            <div class="new"><i class="bi bi-star"></i> 4.5</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- similar product -->
<div class="container-fluid my-3">
    <div class="row justify-content-center">
        <div class="col-lg-11">
            <div class="text-center">
                <h3>similar Products</h3>
                <span style="font-size:small;">Add related products to weekly lineup</span>
                <div class="text-center">
                    <img src="./assets//img//arrow.png" class="img-fluid" alt="">
                </div>
            </div>
            <div id="SimilarProduct" class="owl-carousel owl-theme my-2">
                <div class="item">
                    <div class="rounded-4 position-relative">
                        <div>
                            <a href="productDetails.php"><img src="assets/img//il_300x300.4245808662_a3x4.jpg.png" class="img-fluid rounded-3" alt=""></a>
                        </div>
                        <div class="text-center p-3">
                            <span class="text-dark">Platinum</span>
                            <h6 class="text-dark">Product Name</h6>
                            <span class="active">Rs. 2500 <del class="text-secondary">Rs. 2500</del></span>
                        </div>
                        <div class="position-absolute top-0 start-0 mx-3">
                            <div class="sale my-2">New</div>
                            <div class="new"><i class="bi bi-star"></i> 4.5</div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="rounded-4 position-relative">
                        <div>
                            <a href="productDetails.php"><img src="assets/img//il_300x300.4245808662_a3x4.jpg.png" class="img-fluid rounded-3" alt=""></a>
                        </div>
                        <div class="text-center p-3">
                            <span class="text-dark">Platinum</span>
                            <h6 class="text-dark">Product Name</h6>
                            <span class="active">Rs. 2500 <del class="text-secondary">Rs. 2500</del></span>
                        </div>
                        <div class="position-absolute top-0 start-0 mx-3">
                            <div class="sale my-2">New</div>
                            <div class="new"><i class="bi bi-star"></i> 4.5</div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="rounded-4 position-relative">
                        <div>
                            <a href="productDetails.php"><img src="assets/img//il_300x300.4304865964_iout.jpg.png" class="img-fluid rounded-3" alt=""></a>
                        </div>
                        <div class="text-center p-3">
                            <span class="text-dark">Platinum</span>
                            <h6 class="text-dark">Product Name</h6>
                            <span class="active">Rs. 2500 <del class="text-secondary">Rs. 2500</del></span>
                        </div>
                        <div class="position-absolute top-0 start-0 mx-3">
                            <div class="sale my-2">New</div>
                            <div class="new"><i class="bi bi-star"></i> 4.5</div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="rounded-4 position-relative">
                        <div>
                            <a href="productDetails.php"><img src="assets/img//il_300x300.4304865964_iout.jpg.png" class="img-fluid rounded-3" alt=""></a>
                        </div>
                        <div class="text-center p-3">
                            <span class="text-dark">Platinum</span>
                            <h6 class="text-dark">Product Name</h6>
                            <span class="active">Rs. 2500 <del class="text-secondary">Rs. 2500</del></span>
                        </div>
                        <div class="position-absolute top-0 start-0 mx-3">
                            <div class="sale my-2">New</div>
                            <div class="new"><i class="bi bi-star"></i> 4.5</div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="rounded-4 position-relative">
                        <div>
                            <a href="productDetails.php"><img src="assets/img//il_300x300.4304865964_iout.jpg.png" class="img-fluid rounded-3" alt=""></a>
                        </div>
                        <div class="text-center p-3">
                            <span class="text-dark">Platinum</span>
                            <h6 class="text-dark">Product Name</h6>
                            <span class="active">Rs. 2500 <del class="text-secondary">Rs. 2500</del></span>
                        </div>
                        <div class="position-absolute top-0 start-0 mx-3">
                            <div class="sale my-2">New</div>
                            <div class="new"><i class="bi bi-star"></i> 4.5</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>