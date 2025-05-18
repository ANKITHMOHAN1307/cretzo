<?php include 'header.php'; ?>
<div class="container">
    <div class="row justify-content-center">
        <!-- <div class="col-lg-12">
            <div class="mx-2"><a href="" class="aTag">HOME</a> > <a href="" class="active aTag">Checkout</a></div>
        </div> -->

        <!-- <div class="col-lg-12 my-3 bg-light py-3 borderTop">
            <p class="aTag my-2">Returning Customer? <a href="" class="aTag active">Click Here To Login</a></p>
        </div> -->

        <!-- <div class="col-lg-12 my-3 bg-light py-3 borderTop">
            <p class="aTag my-2">Have A Coupon? <a href="" class="aTag active">Click To Enter Your Code</a></p>
        </div> -->

        <div class="col-lg-12 my-3">
            <h5>Add New Address</h5>
            <hr>
            <form action="">
            <div class="row">
                <div class="col-lg-6 my-2">
                    <label for="" class="aTag">Full Name</label>
                    <input type="text" class="form-control new-form" name="" placeholder="Enter Full Name" id="">
                </div>
                <!-- <div class="col-lg-6 my-2">
                    <label for="" class="aTag">Last Name<span class="text-danger">*</span></label>
                    <input type="text" class="form-control new-form" name="" placeholder="Enter Last Name" id="">
                </div> -->
                <div class="col-lg-6 my-2">
                    <label for="" class="aTag">Phone<span class="text-danger">*</span></label>
                    <input type="number" required class="form-control new-form" name="" placeholder="Enter Phone" id="">
                </div>
                <div class="col-lg-6 my-2">
                    <label for="" class="aTag">Email Address</label>
                    <input type="text" class="form-control new-form" name="" placeholder="Enter Email" id="">
                </div>
                <!-- <div class="col-lg-6 my-2">
                    <label for="" class="aTag">Company Name<span class="text-danger">*</span></label>
                    <input type="text" class="form-control new-form" name="" placeholder="Enter Company Name" id="">
                </div> -->
                <div class="col-lg-6 my-2">
                    <label for="" class="aTag">Country</label>
                    <input type="text" class="form-control new-form" name="" placeholder="Enter Country Name" id="">
                </div>
                <div class="col-lg-6 my-2">
                    <label for="" class="aTag">Street Address </label>
                    <input type="text" class="form-control new-form" name="" placeholder="Enter Address" id="">
                    <!-- <input type="text" class="form-control new-form my-2" name="" placeholder="Street Address 2 (Optional)" id=""> -->
                </div>
                <div class="col-lg-6 my-2">
                    <label for="" class="aTag">Town/City</label>
                    <input type="text" class="form-control new-form" name="" placeholder="Enter City Name" id="">
                </div>
                <div class="col-lg-6 my-2">
                    <label for="" class="aTag">State / Division></label>
                    <input type="text" class="form-control new-form" name="" placeholder="Enter State/Division" id="">
                </div>
                <div class="col-lg-6 my-2">
                    <label for="" class="aTag">Postcode / ZIP</label>
                    <input type="number" class="form-control new-form" name="" placeholder="Enter Postcode / ZIP" id="">
                </div>
               
                <!-- <div class="col-lg-12 my-2">
                    <div class="aTag"><input type="checkbox"> &nbsp; Create An Account?</div>
                    <div class="aTag"><input type="checkbox" class="my-2"> &nbsp; Ship To A Different Address?</div>
                </div> -->
                <div class="col-lg-12 my-2">
                    <label for="" class="aTag">Order Note<span class="text-danger"></span></label>
                    <textarea class="form-control new-form" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                </div>
            </div>
              <div class="text-center">
              <div class="my-3">
                <button class="btnAddToCard"><a href="checkOutt.php" class="text-white aTag">Add New Address</a></button>
            </div>
              </div>
            </form>
        </div>
        <!-- <div class="col-lg-6">
            <h5>Your Order Summary</h5>
            <hr>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col" class="aTag">Product</th>
                        <th scope="col" class="aTag">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
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
                    <td class="aTag">Sub Total</td>
                    <td class="aTag"><i class="currency-rupee"></i>15000.00</td>
                    </tr>
                    <td class="aTag">Shipping</td>
                    <td class="aTag"><i class="currency-rupee"></i>41.00</td>
                    </tr>
                    <tr>
                        <td class="aTag active">Total Amount</td>
                        <td class="aTag active"><i class="currency-rupee"></i>15041.00</td>
                    </tr>
                </tbody>
            </table>
            <div class="my-2">
                <div class="form-check aTag my-2">
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
                        Direct Bank Transfer
                    </label>
                </div>
                <div class="form-check aTag  my-2">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Pay pal
                    </label>
                </div>
                <div>
                    <img src="assets/img/icons/pay.png" class="img-fluid" alt="">
                </div>
                <div class="aTag  my-2"><input type="checkbox"> I have read and agree to the website terms and conditions.</div>

                <div class="my-2">
                    <button class="btnAddToCard"><a href="" class="text-white aTag">Proceed Order</a></button>
                </div>
            </div>
        </div> -->
    </div>
</div>

<?php include 'footer.php'; ?>