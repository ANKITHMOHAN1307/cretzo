<?php include 'header.php'; ?>
<div class="container-fluid my-3">
    <div class="row justify-content-evenly">
        <?php include 'sidebar.php'; ?>
        <div class="col-lg-9">
            <div class="border p-3">
                <div class="py-2" style="border-bottom:1px dotted grey;">
                    <span class="fw-bold">My Booking</span>
                </div>
                <div class="py-2 text-center">
                    <h4>Add Product</h4>
                </div>
                <div class="border-color p-3 rounded">
                    <div><i class="bi bi-check-circle active"></i> <span class="fw-bold">Handmade Jewellery</span></div>
                    <div><i class="bi bi-check-circle text-white"></i> <span> <b>Quantity : </b> 10</span></div>
                    <div class="d-flex justify-content-between">
                        <div>
                        <i class="bi bi-check-circle text-white"></i> <span> <b>Budget : </b> 300</span>
                        </div>
                        <div>
                           <a href="bookingDetails.php" class="active">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php'; ?>