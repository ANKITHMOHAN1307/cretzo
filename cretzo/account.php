<?php include 'header.php'; ?>
<div class="container-fluid my-3">
    <div class="row justify-content-evenly">
        <?php include 'sidebar.php'; ?>
        <div class="col-lg-9">
            <div class="border p-3">
                <div class="py-2" style="border-bottom:1px dotted grey;">
                    <span class="fw-bold">Account Details</span>
                </div>
                <form action="">
                    <div class="row my-2">
                        <div class="col-lg-6 my-2">
                            <label for="" class="aTag">First Name</label>
                            <input type="text" class="form-control new-form" name="" placeholder="Enter First Name" id="">
                        </div>
                        <div class="col-lg-6 my-2">
                            <label for="" class="aTag">Last Name</label>
                            <input type="text" class="form-control new-form" name="" placeholder="Enter Last Name" id="">
                        </div>

                        <div class="col-lg-6 my-2">
                            <label for="" class="aTag">display Name<span class="text-danger">*</span></label>
                            <input type="number" required class="form-control new-form" name="" placeholder="display Name" id="">
                        </div>
                        <div class="col-lg-6 my-2">
                            <label for="" class="aTag">Email Address</label>
                            <input type="text" class="form-control new-form" name="" placeholder="Enter Last Name" id="">
                        </div>

                        <div class="py-2" style="border-bottom:1px dotted grey;">
                            <span class="fw-bold">Password</span>
                        </div>
                        <div class="col-lg-12 my-2">
                            <label for="" class="aTag">Current Password<span class="text-danger">*</span></label>
                            <input type="password" required class="form-control new-form" name="" placeholder="Current Password" id="">
                        </div>
                        <div class="col-lg-6 my-2">
                            <label for="" class="aTag">New Password<span class="text-danger">*</span></label>
                            <input type="password" required class="form-control new-form" name="" placeholder="New Password" id="">
                        </div>
                        <div class="col-lg-6 my-2">
                            <label for="" class="aTag">Confirm Password<span class="text-danger">*</span></label>
                            <input type="password" required class="form-control new-form" name="" placeholder="Confirm Password" id="">
                        </div>
                       

                    </div>
                    <div class="text-center">
                        <div class="my-3">
                            <button class="btnAddToCard"><a href="checkOutt.php" class="text-white aTag">Save Changes</a></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <?php include 'footer.php'; ?>