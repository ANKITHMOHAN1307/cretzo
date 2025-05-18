<?php include 'header.php'; ?>
<div class="container">
    <div class="row justify-content-center">
        <h4 class="fw-bold">Check Out</h4>

        <!-- <div class="col-lg-12">
            <div class="mx-2"><a href="" class="aTag">HOME</a> > <a href="" class="active aTag">Checkout</a></div>
        </div> -->
        <!-- <div class="col-lg-12 my-3 bg-light py-3 borderTop">
            <p class="aTag my-2">Returning Customer? <a href="" class="aTag active">Click Here To Login</a></p>
        </div> -->
        <!-- <div class="col-lg-12 my-3 bg-light py-3 borderTop">
            <p class="aTag my-2">Have A Coupon? <a href="" class="aTag active">Click To Enter Your Code</a></p>
        </div> -->

        <div class="col-lg-6">
            <h5>Billing Details</h5>
            <hr>

            <div class="p-2 rounded-5 border-color">
                <span>Amit Kumar</span> <span class="mx-1">+91 870028172</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda voluptatum !</p>
                <div class="d-flex justify-content-end">
                    <!-- <div>
                        <span><a href="" class="aTag active" style="font-size:small;">Add New Address</a></span>
                    </div> -->
                    <div>
                        <span><a href="" class="aTag active" style="font-size:small;">Edit</a></span>
                        <span class="mx-2" style="font-size:small;cursor:pointer">Remove</span>
                    </div>
                </div>

            </div>
            <div class="my-3 text-center d-grid">
                <button class="btnAddToCard"><a href="addAddress.php" class="aTag text-white"><i class="bi bi-plus"></i> Add New Address</a></button>

            </div>

        </div>
        <div class="col-lg-5">
            <h5>Your Order Summary</h5>
            <hr>
            <div class="p-2 rounded-5 border-color">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" class="aTag">Product</th>
                            <th scope="col" class="aTag">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="">
                            <td class="aTag text-secondary">Product-1</td>
                            <td class="aTag text-secondary">2000.00</td>
                        </tr>
                        <tr>
                            <td class="aTag text-secondary">Product-1</td>
                            <td class="aTag text-secondary">3000.00</td>
                        </tr>
                        <tr>
                            <td class="aTag text-secondary">Product-1</td>
                            <td class="aTag text-secondary">10000.00</td>

                        </tr>
                        <!-- this is fixed -->
                    </tbody>
                    <div>
                            <tr class="border-top">
                                <td class="aTag">Sub Total</td>
                                <td class="aTag"><i class="currency-rupee"></i>15000.00</td>
                            </tr>
                            <tr class="border-top">
                            <td class="aTag">Shipping</td>
                            <td class="aTag"><i class="currency-rupee"></i>41.00</td>
                            </tr>
                            <tr>
                                <td class="aTag active">Total Amount</td>
                                <td class="aTag active"><i class="currency-rupee"></i>15041.00</td>
                            </tr>
                        </div>
                </table>
            </div>
            <div class="my-3 rounded-5 border-color px-3">
                <div class="form-check aTag my-2">
                     <h6 class="fw-bold my-2">Select Payment Method</h6>
                     <hr>
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Cash On Delivery
                    </label>
                </div>
                <div class="p-2 bg-light aTag text-secondary">
                    Pay with Cash on Delivery
                </div>
                <div class="form-check aTag  my-2">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        debit/credit card
                    </label>
                </div>
                <div class="form-check aTag  my-2">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        UPI
                    </label>
                </div>
                <div class="form-check aTag  my-2">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Pay pal
                    </label>
                </div>
                <!-- <div>
                    <img src="assets/img/icons/pay.png" class="img-fluid" alt="">
                </div> -->
                <div class="aTag  my-2"><input type="checkbox"> I have read and agree to the website terms and conditions.</div>

                <div class="my-2">
                    <button class="btnAddToCard"><a href="" class="text-white aTag">Proceed Order</a></button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>