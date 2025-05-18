<?php include 'header.php'; ?>
<div class="container-fluid my-5">
    <form action="">
        <div class="row mx-3">
        <div class="col-lg-12">
            <h3>Account Details</h3>
            <hr>
            <div class="position-relative circleDiv">
                <img src="assets/img/icons/Male.png" class="circleDiv" he alt="">
                <div class="position-absolute bottom-0 end-0"><i class="bi bi-plus-circle-fill fw-bold active fs-3"></i></div>
            </div>
        </div>
            <div class="col-lg-6 my-2">
                <label for="" class="aTag">First Name</label>
                <input type="text" class="form-control new-form" name="" placeholder="Enter Full Name" id="">
            </div>
            <div class="col-lg-6 my-2">
                    <label for="" class="aTag">Last Name<span class="text-danger">*</span></label>
                    <input type="text" class="form-control new-form" name="" placeholder="Enter Last Name" id="">
                </div>
            <div class="col-lg-6 my-2">
                <label for="" class="aTag">Date of Birth<span class="text-danger">*</span></label>
                <input type="date" required class="form-control new-form" name="" placeholder="Enter Phone" id="">
            </div>
            <div class="col-lg-6 my-2">
                <label for="" class="aTag">Phone Number<span class="text-danger">*</span></label>
                <input type="number" required class="form-control new-form" name="" placeholder="Enter Phone" id="">
            </div>
            <div class="col-lg-6 my-2">
                <label for="" class="aTag">Email</label>
                <input type="text" class="form-control new-form" name="" placeholder="Enter Email" id="">
            </div>
            <div class="col-lg-6 my-2">
                    <label for="" class="aTag">Social Media Handle<span class="text-danger">*</span></label>
                    <input type="text" class="form-control new-form" name="" placeholder="Enter Social Media Link" id="">
                </div>
            <div class="col-lg-6 my-2">
                <label for="" class="aTag">Studio Name</label>
                <input type="text" class="form-control new-form" name="" placeholder="Studio Name" id="">
            </div>
            <div class="col-lg-6 my-2">
                <label for="" class="aTag">Address </label>
                <input type="text" class="form-control new-form" name="" placeholder="Enter Address" id="">
                <!-- <input type="text" class="form-control new-form my-2" name="" placeholder="Street Address 2 (Optional)" id=""> -->
            </div>
            <div class="col-lg-6 my-2">
                <label for="" class="aTag">District</label>
                <input type="text" class="form-control new-form" name="" placeholder="Enter District Name" id="">
            </div>
            <div class="col-lg-6 my-2">
                <label for="" class="aTag">City</label>
                <input type="text" class="form-control new-form" name="" placeholder="Enter City Name" id="">
            </div>
            <div class="col-lg-6 my-2">
                <label for="" class="aTag">State</label>
                <input type="text" class="form-control new-form" name="" placeholder="Enter State" id="">
            </div>
            <div class="col-lg-6 my-2">
                <label for="" class="aTag">Postcode / ZIP</label>
                <input type="number" class="form-control new-form" name="" placeholder="Enter Postcode / ZIP" id="">
            </div>
            <div class="col-lg-6 my-2">
                <label for="" class="aTag">Pan Of Company</label>
                <input type="number" class="form-control new-form" name="" placeholder="Enter Company pan Number" id="">
            </div>
            <div class="col-lg-6 my-2">
                <label for="" class="aTag">GST Number</label>
                <input type="number" class="form-control new-form" name="" placeholder="Enter GST Number" id="">
                <div class="aTag" style="font-size: small;"><input type="checkbox"> &nbsp; <a href="termAndCondition"> We are not GST register</a></div>
            </div>
            <div class="col-lg-6 my-2">
                <label for="" class="aTag">Pan Number</label>
                <input type="number" class="form-control new-form" name="" placeholder="Enter Pan Number" id="">
            </div>
            <div class="col-lg-6 my-2">
                <label for="" class="aTag">Select Category</label>
                <select name="" class="form-control new-form" id="">
                    <option value="">Category-1</option>
                    <option value="">Category-2</option>
                    <option value="">Category-3</option>
                    <option value="">Category-4</option>
                    <option value="">Category-5</option>
                </select>


            </div>

            <div class="col-lg-12 my-2">
                    <div class="aTag"><input type="checkbox"> &nbsp; <a href="termAndCondition"> I agree Term And condition</a></div>
                </div>
           
        </div>
        <div class="text-center">
            <div class="my-3">
                <button class="btnAddToCard"><a href="checkOutt.php" class="text-white aTag">Submit</a></button>
            </div>
        </div>
    </form>
</div>
<style>
    .circleDiv {
        height: 110px;
        width: 110px;
        border-radius: 50%;
    }
</style>
<?php include 'footer.php'; ?>