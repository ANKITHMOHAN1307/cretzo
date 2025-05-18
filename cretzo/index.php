<?php include 'header.php'; ?>
<style>
    .read-more {
        border: none;
        border-radius: 30px;
        padding: .6rem 1.5rem .6rem 1.5rem;
        background-color: #fbc9c4;
    }
</style>
<!-- banner -->
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="./assets/img/clayya (1).png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="./assets/img/clayya (2).png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="./assets/img/clayya (3).png" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- banner end -->
<!-- trending deals -->
<div class="container-fluid my-3">
    <div class="row">
        <div class="text-center">
            <h3>Trending deals</h3>
            <span style="font-size:small;">Add featured products to weekly lineup</span>
            <div class="text-center">
                <img src="./assets//img//arrow.png" class="img-fluid" alt="">
            </div>
        </div>
        <div id="banner" class="owl-carousel owl-theme my-2">
            <div class="item">
                <div class="rounded-4 border position-relative">
                    <img src="./assets/img//il_300x300.4245808662_a3x4.jpg.png" class="img-fluid rounded-top-4" alt="">
                     <div class="position-absolute bottom-40 start-0 mx-2">
                       <a href="#"><i class="bi bi-heart-fill"></i></a>
                     </div>
                     <div class="position-absolute bottom-40 end-0 mx-2">
                       <a href="#"><i class="bi bi-handbag-fill"></i></a>
                     </div>
                    <div class="p-2 text-center">
                        <div class="text-secondary">Gold</div>

                        <span>Rs. 2500 <del class="text-secondary">Rs. 2500</del></span>
                    </div>
                    <div class="position-absolute top-0 start-0 mx-2">
                        <div class="sale my-2">Sale</div>
                        <div class="new"><i class="bi bi-star-fill"></i> 3.5</div>
                    </div>
                    <!-- <div class="position-absolute top-0 end-0 mx-2">
                        <div class="sale my-2"><i class="bi bi-star-fill"></i> 3.5</div>
                    </div> -->
                </div>
            </div>
            <div class="item">
                <div class="rounded-4 border position-relative">
                    <img src="./assets/img//il_300x300.4304865964_iout.jpg.png" class="img-fluid rounded-top-4" alt="">
                    <div class="p-2 text-center">
                        <div class="text-secondary">Gold</div>

                        <span>Rs. 2500 <del class="text-secondary">Rs. 2500</del></span>
                    </div>
                    <div class="position-absolute top-0 start-0 mx-2">
                        <div class="sale my-2">Sale</div>
                        <div class="new"><i class="bi bi-star-fill"></i> 3.5</div>
                    </div>
                    <!-- <div class="position-absolute top-0 end-0 mx-2">
                        <div class="sale my-2"><i class="bi bi-star-fill"></i> 3.5</div>
                    </div> -->
                </div>
            </div>
            <div class="item">
                <div class="rounded-4 border position-relative">
                    <img src="./assets/img//image 12.png" class="img-fluid rounded-top-4" alt="">
                    <div class="p-2 text-center">
                        <div class="text-secondary">Gold</div>

                        <span>Rs. 2500 <del class="text-secondary">Rs. 2500</del></span>
                    </div>
                    <div class="position-absolute top-0 start-0 mx-2">
                        <div class="sale my-2">Sale</div>
                        <div class="new">New</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- category -->
<div class="container-fluid my-5">
    <div class="row justify-content-evenly">
        <div class="text-center">
            <h3>Categories</h3>
            <img src="assets/img/arrow.png" class="img-fluid" alt="">
        </div>
        <div class="col-lg-2 col-4 my-3">
            <div class="rounded-3 border">
                <img src="assets/img//ring.jpg" class="img-fluid rounded-top-3" alt="">
                <div class="text-center my-3">
                    <h5>Earring</h5>

                </div>
            </div>
        </div>
        <div class="col-lg-2 col-4 my-3">
            <div class="rounded-3 border">
                <img src="assets/img//ring.jpg" class="img-fluid rounded-top-3" alt="">
                <div class="text-center my-3">
                    <h5>Earring</h5>

                </div>
            </div>
        </div>
        <div class="col-lg-2 col-4 my-3">
            <div class="rounded-3 border">
                <img src="assets/img//ring.jpg" class="img-fluid rounded-top-3" alt="">
                <div class="text-center my-3">
                    <h5>Earring</h5>

                </div>
            </div>
        </div>
        <div class="col-lg-2 col-4 my-3">
            <div class="rounded-3 border">
                <img src="assets/img//ring.jpg" class="img-fluid rounded-top-3" alt="">
                <div class="text-center my-3">
                    <h5>Earring</h5>

                </div>
            </div>
        </div>
        <div class="col-lg-2 col-4 my-3">
            <div class="rounded-3 border">
                <img src="assets/img//ring.jpg" class="img-fluid rounded-top-3" alt="">
                <div class="text-center my-3">
                    <h5>Earring</h5>

                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-evenly">
        <div class="col-lg-2 col-4 my-3">
            <div class="rounded-3 border">
                <img src="assets/img//ring.jpg" class="img-fluid rounded-top-3" alt="">
                <div class="text-center my-3">
                    <h5>Earring</h5>

                </div>
            </div>
        </div>
        <div class="col-lg-2 col-4 my-3">
            <div class="rounded-3 border">
                <img src="assets/img//ring.jpg" class="img-fluid rounded-top-3" alt="">
                <div class="text-center my-3">
                    <h5>Earring</h5>

                </div>
            </div>
        </div>
        <div class="col-lg-2 col-4 my-3">
            <div class="rounded-3 border">
                <img src="assets/img//ring.jpg" class="img-fluid rounded-top-3" alt="">
                <div class="text-center my-3">
                    <h5>Earring</h5>

                </div>
            </div>
        </div>
        <div class="col-lg-2 col-4 my-3">
            <div class="rounded-3 border">
                <img src="assets/img//ring.jpg" class="img-fluid rounded-top-3" alt="">
                <div class="text-center my-3">
                    <h5>Earring</h5>

                </div>
            </div>
        </div>
        <div class="col-lg-2 col-4 my-3">
            <div class="rounded-3 border">
                <img src="assets/img//ring.jpg" class="img-fluid rounded-top-3" alt="">
                <div class="text-center my-3">
                    <h5>Earring</h5>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Best Seller -->
<div class="container-fluid my-5">
    <div class="row justify-content-center">
        <div class="text-center">
            <h3>Best Seller</h3>
            <img src="assets/img/arrow.png" class="img-fluid" alt="">
        </div>
        <div id="bestSeller" class="owl-carousel owl-theme my-2">
            <div class="item my-2">
                <div class="rounded-3 border">
                    <div class="row">
                        <div class="col-lg-8">
                            <div>
                                <img src="assets/img//store.jpg" class="img-fluid rounded-3">
                            </div>
                        </div>
                        <div class="col-lg-4 content-center-lg">
                            <div class="p-2">
                                <h5>Seller Brand Name</h5>
                                <a href="">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item my-2">
                <div class="rounded-3 border">
                    <div class="row">
                        <div class="col-lg-8">
                            <div>
                                <img src="assets/img//store.jpg" class="img-fluid rounded-3">
                            </div>
                        </div>
                        <div class="col-lg-4 content-center-lg">
                            <div class="p-2">
                                <h5>Seller Brand Name</h5>
                                <a href="">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item my-2">
                <div class="rounded-3 border">
                    <div class="row">
                        <div class="col-lg-8">
                            <div>
                                <img src="assets/img//store.jpg" class="img-fluid rounded-3">
                            </div>
                        </div>
                        <div class="col-lg-4 content-center-lg">
                            <div class="p-2">
                                <h5>Seller Brand Name</h5>
                                <a href="">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item my-2">
                <div class="rounded-3 border">
                    <div class="row">
                        <div class="col-lg-8">
                            <div>
                                <img src="assets/img//store.jpg" class="img-fluid rounded-3">
                            </div>
                        </div>
                        <div class="col-lg-4 content-center-lg">
                            <div class="p-2">
                                <h5>Seller Brand Name</h5>
                                <a href="">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item my-2">
                <div class="rounded-3 border">
                    <div class="row">
                        <div class="col-lg-8">
                            <div>
                                <img src="assets/img//store.jpg" class="img-fluid rounded-3">
                            </div>
                        </div>
                        <div class="col-lg-4 content-center-lg">
                            <div class="p-2">
                                <h5>Seller Brand Name</h5>
                                <a href="">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- feature product -->
<div class="container-fluid my-5">
    <div class="row justify-content-center">
        <div class="text-center py-3">
            <h3>Feature Product</h3>
            <img src="assets/img/arrow.png" class="img-fluid" alt="">
        </div>
        <div class="col-lg-2 col-6  my-2">
            <div>
                <img src="assets/img//il_300x300.4245808662_a3x4.jpg.png" class="img-fluid rounded-3" alt="">
            </div>
            <div class="text-center p-3">
                <span>Mony</span>
                <div class="">
                    <span class="dot-1 mx-1" onclick="toggleIcon(this)"></span>
                    <span class="dot-2 mx-1" onclick="toggleIcon(this)"></span>
                    <span class="dot-3 mx-1" onclick="toggleIcon(this)"></span>
                    <span class="dot-4 mx-1" onclick="toggleIcon(this)"></span>
                </div>
                <h6>Product Name</h6>
                <span class="active">Rs. 2500 <del class="text-secondary">Rs. 2500</del></span>

            </div>
        </div>
        <div class="col-lg-2 col-6  my-2">
            <div>
                <img src="assets/img//il_300x300.4245808662_a3x4.jpg.png" class="img-fluid rounded-3" alt="">
            </div>
            <div class="text-center p-3">
                <span>Mony</span>
                <h6>Product Name</h6>
                <span class="active">Rs. 2500 <del class="text-secondary">Rs. 2500</del></span>

            </div>
        </div>
        <div class="col-lg-2 col-6  my-2">
            <div>
                <img src="assets/img//il_300x300.4245808662_a3x4.jpg.png" class="img-fluid rounded-3" alt="">
            </div>
            <div class="text-center p-3">
                <span>Mony</span>
                <h6>Product Name</h6>
                <span class="active">Rs. 2500 <del class="text-secondary">Rs. 2500</del></span>

            </div>
        </div>
        <div class="col-lg-2 col-6  my-2">
            <div>
                <img src="assets/img//il_300x300.4245808662_a3x4.jpg.png" class="img-fluid rounded-3" alt="">
            </div>
            <div class="text-center p-3">
                <span>Mony</span>
                <h6>Product Name</h6>
                <span class="active">Rs. 2500 <del class="text-secondary">Rs. 2500</del></span>

            </div>
        </div>
        <div class="col-lg-2 col-6  my-2">
            <div>
                <img src="assets/img//il_300x300.4245808662_a3x4.jpg.png" class="img-fluid rounded-3" alt="">
            </div>
            <div class="text-center p-3">
                <span>Mony</span>
                <h6>Product Name</h6>
                <span class="active">Rs. 2500 <del class="text-secondary">Rs. 2500</del></span>

            </div>
        </div>
        <div class="col-lg-2 col-6  my-2">
            <div>
                <img src="assets/img//il_300x300.4245808662_a3x4.jpg.png" class="img-fluid rounded-3" alt="">
            </div>
            <div class="text-center p-3">
                <span>Mony</span>
                <h6>Product Name</h6>
                <span class="active">Rs. 2500 <del class="text-secondary">Rs. 2500</del></span>

            </div>
        </div>
        <div class="col-lg-2 col-6  my-2">
            <div>
                <img src="assets/img//il_300x300.4245808662_a3x4.jpg.png" class="img-fluid rounded-3" alt="">
            </div>
            <div class="text-center p-3">
                <span>Mony</span>
                <h6>Product Name</h6>
                <span class="active">Rs. 2500 <del class="text-secondary">Rs. 2500</del></span>

            </div>
        </div>
        <div class="col-lg-2 col-6  my-2">
            <div>
                <img src="assets/img//il_300x300.4245808662_a3x4.jpg.png" class="img-fluid rounded-3" alt="">
            </div>
            <div class="text-center p-3">
                <span>Mony</span>
                <h6>Product Name</h6>
                <span class="active">Rs. 2500 <del class="text-secondary">Rs. 2500</del></span>

            </div>
        </div>
        <div class="col-lg-2 col-6  my-2">
            <div>
                <img src="assets/img//il_300x300.4245808662_a3x4.jpg.png" class="img-fluid rounded-3" alt="">
            </div>
            <div class="text-center p-3">
                <span>Mony</span>
                <h6>Product Name</h6>
                <span class="active">Rs. 2500 <del class="text-secondary">Rs. 2500</del></span>

            </div>
        </div>
        <div class="col-lg-2 col-6  my-2">
            <div>
                <img src="assets/img//il_300x300.4245808662_a3x4.jpg.png" class="img-fluid rounded-3" alt="">
            </div>
            <div class="text-center p-3">
                <span>Mony</span>
                <h6>Product Name</h6>
                <span class="active">Rs. 2500 <del class="text-secondary">Rs. 2500</del></span>

            </div>
        </div>
        <div class="col-lg-2 col-6  my-2">
            <div>
                <img src="assets/img//il_300x300.4245808662_a3x4.jpg.png" class="img-fluid rounded-3" alt="">
            </div>
            <div class="text-center p-3">
                <span>Mony</span>
                <h6>Product Name</h6>
                <span class="active">Rs. 2500 <del class="text-secondary">Rs. 2500</del></span>

            </div>
        </div>
        <div class="col-lg-2 col-6  my-2">
            <div>
                <img src="assets/img//il_300x300.4245808662_a3x4.jpg.png" class="img-fluid rounded-3" alt="">
            </div>
            <div class="text-center p-3">
                <span>Mony</span>
                <h6>Product Name</h6>
                <span class="active">Rs. 2500 <del class="text-secondary">Rs. 2500</del></span>

            </div>
        </div>
    </div>
</div>
<!-- new arrival -->
<div class="container-fluid my-5">
    <div class="row justify-content-center">
        <div class="text-center py-3">
            <h3>New Arrival</h3>
            <img src="assets/img/arrow.png" class="img-fluid" alt="">
        </div>
        <div class="col-lg-4 my-3 col-6 d-flex content-center">
            <div class="row">
                <div class="col-lg-5 col-12 content-center">
                    <img src="assets/img//ring.jpg" class="rounded img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-12">
                    <span class="">
                        <div>Handmade Golden ring</div>
                        <div> <span class="active">Rs. 2500 <del class="text-secondary">Rs. 2500</del></span>
                        </div>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-lg-4 my-3 col-6 d-flex content-center">
            <div class="row">
                <div class="col-lg-5 col-12 content-center">
                    <img src="assets/img//ring.jpg" class="rounded img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-12">
                    <span class="">
                        <div>Handmade Golden ring</div>
                        <div> <span class="active">Rs. 2500 <del class="text-secondary">Rs. 2500</del></span>
                        </div>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-lg-4 my-3 col-6 d-flex content-center">
            <div class="row">
                <div class="col-lg-5 col-12 content-center">
                    <img src="assets/img//ring.jpg" class="rounded img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-12">
                    <span class="">
                        <div>Handmade Golden ring</div>
                        <div> <span class="active">Rs. 2500 <del class="text-secondary">Rs. 2500</del></span>
                        </div>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-lg-4 my-3 col-6 d-flex content-center">
            <div class="row">
                <div class="col-lg-5 col-12 content-center">
                    <img src="assets/img//ring.jpg" class="rounded img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-12">
                    <span class="">
                        <div>Handmade Golden ring</div>
                        <div> <span class="active">Rs. 2500 <del class="text-secondary">Rs. 2500</del></span>
                        </div>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-lg-4 my-3 col-6 d-flex content-center">
            <div class="row">
                <div class="col-lg-5 col-12 content-center">
                    <img src="assets/img//ring.jpg" class="rounded img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-12">
                    <span class="">
                        <div>Handmade Golden ring</div>
                        <div> <span class="active">Rs. 2500 <del class="text-secondary">Rs. 2500</del></span>
                        </div>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-lg-4 my-3 col-6 d-flex content-center">
            <div class="row">
                <div class="col-lg-5 col-12 content-center">
                    <img src="assets/img//ring.jpg" class="rounded img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-12">
                    <span class="">
                        <div>Handmade Golden ring</div>
                        <div> <span class="active">Rs. 2500 <del class="text-secondary">Rs. 2500</del></span>
                        </div>
                    </span>
                </div>
            </div>
        </div>

        <div class="col-lg-4 my-3 col-6 d-flex content-center">
            <div class="row">
                <div class="col-lg-5 col-12 content-center">
                    <img src="assets/img//ring.jpg" class="rounded img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-12">
                    <span class="">
                        <div>Handmade Golden ring</div>
                        <div> <span class="active">Rs. 2500 <del class="text-secondary">Rs. 2500</del></span>
                        </div>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-lg-4 my-3 col-6 d-flex content-center">
            <div class="row">
                <div class="col-lg-5 col-12 content-center">
                    <img src="assets/img//ring.jpg" class="rounded img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-12">
                    <span class="">
                        <div>Handmade Golden ring</div>
                        <div> <span class="active">Rs. 2500 <del class="text-secondary">Rs. 2500</del></span>
                        </div>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-lg-4 my-3 col-6 d-flex content-center">
            <div class="row">
                <div class="col-lg-5 col-12 content-center">
                    <img src="assets/img//ring.jpg" class="rounded img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-12">
                    <span class="">
                        <div>Handmade Golden ring</div>
                        <div> <span class="active">Rs. 2500 <del class="text-secondary">Rs. 2500</del></span>
                        </div>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- src collection -->
<div class="container-fluid my-5">
    <div class="row justify-content-center">
        <div class="text-center py-3">
            <h3>Chikankari Collection</h3>
            <img src="assets/img/arrow.png" class="img-fluid" alt="">
        </div>
        <div class="col-lg-4 my-3 col-6 d-flex content-center">
            <div class="row">
                <div class="col-lg-5 col-12 content-center">
                    <img src="assets/img//ring.jpg" class="rounded img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-12">
                    <span class="">
                        <div>Handmade Golden ring</div>
                        <div> <span class="active">Rs. 2500 <del class="text-secondary">Rs. 2500</del></span>
                        </div>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-lg-4 my-3 col-6 d-flex content-center">
            <div class="row">
                <div class="col-lg-5 col-12 content-center">
                    <img src="assets/img//ring.jpg" class="rounded img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-12">
                    <span class="">
                        <div>Handmade Golden ring</div>
                        <div> <span class="active">Rs. 2500 <del class="text-secondary">Rs. 2500</del></span>
                        </div>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-lg-4 my-3 col-6 d-flex content-center">
            <div class="row">
                <div class="col-lg-5 col-12 content-center">
                    <img src="assets/img//ring.jpg" class="rounded img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-12">
                    <span class="">
                        <div>Handmade Golden ring</div>
                        <div> <span class="active">Rs. 2500 <del class="text-secondary">Rs. 2500</del></span>
                        </div>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-lg-4 my-3 col-6 d-flex content-center">
            <div class="row">
                <div class="col-lg-5 col-12 content-center">
                    <img src="assets/img//ring.jpg" class="rounded img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-12">
                    <span class="">
                        <div>Handmade Golden ring</div>
                        <div> <span class="active">Rs. 2500 <del class="text-secondary">Rs. 2500</del></span>
                        </div>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-lg-4 my-3 col-6 d-flex content-center">
            <div class="row">
                <div class="col-lg-5 col-12 content-center">
                    <img src="assets/img//ring.jpg" class="rounded img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-12">
                    <span class="">
                        <div>Handmade Golden ring</div>
                        <div> <span class="active">Rs. 2500 <del class="text-secondary">Rs. 2500</del></span>
                        </div>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-lg-4 my-3 col-6 d-flex content-center">
            <div class="row">
                <div class="col-lg-5 col-12 content-center">
                    <img src="assets/img//ring.jpg" class="rounded img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-12">
                    <span class="">
                        <div>Handmade Golden ring</div>
                        <div> <span class="active">Rs. 2500 <del class="text-secondary">Rs. 2500</del></span>
                        </div>
                    </span>
                </div>
            </div>
        </div>

        <div class="col-lg-4 my-3 col-6 d-flex content-center">
            <div class="row">
                <div class="col-lg-5 col-12 content-center">
                    <img src="assets/img//ring.jpg" class="rounded img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-12">
                    <span class="">
                        <div>Handmade Golden ring</div>
                        <div> <span class="active">Rs. 2500 <del class="text-secondary">Rs. 2500</del></span>
                        </div>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-lg-4 my-3 col-6 d-flex content-center">
            <div class="row">
                <div class="col-lg-5 col-12 content-center">
                    <img src="assets/img//ring.jpg" class="rounded img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-12">
                    <span class="">
                        <div>Handmade Golden ring</div>
                        <div> <span class="active">Rs. 2500 <del class="text-secondary">Rs. 2500</del></span>
                        </div>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-lg-4 my-3 col-6 d-flex content-center">
            <div class="row">
                <div class="col-lg-5 col-12 content-center">
                    <img src="assets/img//ring.jpg" class="rounded img-fluid" alt="">
                </div>
                <div class="col-lg-7 col-12">
                    <span class="">
                        <div>Handmade Golden ring</div>
                        <div> <span class="active">Rs. 2500 <del class="text-secondary">Rs. 2500</del></span>
                        </div>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- instagram -->
<div class="container-fluid my-5">
    <div class="row justify-content-center newRow">
        <div class="text-center py-3">
            <h3>Instagram</h3>
            <div>Displays an Instagram feed of your photos from your Instagram account on your website.</div>
            <img src="assets/img/arrow.png" class="img-fluid" alt="">
        </div>
        <div id="instagram" class="owl-carousel owl-theme my-2">
            <div class="item">
                <img src="assets/img/il_300x300.4304865964_iout.jpg.png" class="img-fluid" alt="">
            </div>
            <div class="item">
                <img src="assets/img//image 12.png" class="img-fluid" alt="">
            </div>
            <div class="item">
                <img src="assets/img//il_300x300.4245808662_a3x4.jpg.png" class="img-fluid" alt="">
            </div>
            <div class="item">
                <img src="assets/img//image 12.png" class="img-fluid" alt="">
            </div>
            <div class="item">
                <img src="assets/img//il_300x300.4245808662_a3x4.jpg.png" class="img-fluid" alt="">
            </div>
            <div class="item">
                <img src="assets/img//image 12.png" class="img-fluid" alt="">
            </div>
            <div class="item">
                <img src="assets/img//image 12.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</div>
<style>
    .newRow>* {
        padding-right: calc(var(--bs-gutter-x) * .0) !important;
        padding-left: calc(var(--bs-gutter-x) * .0) !important;
    }
</style>
<!-- js -->
<script>
    function toggleIcon(spanElement) {
        var iElement = spanElement.querySelector("i");
        if (iElement) {
            spanElement.removeChild(iElement);
        } else {
            var newIElement = document.createElement("i");
            newIElement.className = "bi bi-check";
            spanElement.appendChild(newIElement);
        }
    }
</script>
<?php include 'footer.php'; ?>