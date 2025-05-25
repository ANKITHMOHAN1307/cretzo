<link rel="stylesheet" href="<?= base_url('assets/seller/css/cretzo/form.css') ?>">

    <section class="content w-100 seller-form">
        <div class="container-fluid">
          <div class="form-parent">
            <div class="form-container-main">

                <div class="form-header w-100">
                    
                    <div class="login-logo ">
                      <a href="<?= base_url() . 'seller/login' ?>">
                        <img class='w-50' src="<?= base_url() . $logo ?>">
                      </a>
                    </div>

                    <div class="slider d-flex w-100 justify-content-between  align-items-center">
                                <div class="form-indicator form-indicator-1  active">
                                    <p class="text-n text-capitalize">personal details</p>
                                </div>
                                <div class="completion-line completion-line-1"></div>
                                <div class="form-indicator form-indicator-2">
                                    
                                        <p class="text-n text-capitalize">store details</p>
                                    
                                </div>
                                <div class="completion-line completion-line-2"></div>
                                <div class="form-indicator form-indicator-3">
                                  
                                            <p class="text-n text-capitalize">account details</p>
                                      
                                </div>
                    </div>
                </div>
                <div class="form-container">
                  <form> 
                      <div class="form-step form1">
                        <div class="row gap-xl-5">
                          <div class="col-md-6 mb-3">
                            <label class="form-label">First Name <span class="text-danger">*</span></label>
                            <input type="text" class="input" placeholder="Seller name" required>
                          </div>
                          <div class="col-md-6 mb-3">
                            <label class="form-label">Last Name <span class="text-danger">*</span></label>
                            <input type="text" class="input" placeholder="Last Name" required>
                          </div>
                          <div class="col-md-6 mb-3">
                            <label class="form-label">Phone Number <span class="text-danger">*</span></label>
                            <input type="text" class="input" placeholder="Enter Phone Number" required>
                          </div>
                          <div class="col-md-6 mb-3">
                            <label class="form-label">Email ID <span class="text-danger">*</span></label>
                            <input type="email" class="input" placeholder="Enter Email ID" required>
                          </div>
                          <div class="col-md-6 mb-3">
                            <label class="form-label">Address</label>
                            <input type="text" class="input" placeholder="Street 1">
                          </div>
                          <div class="col-md-6 mb-3">
                            <label class="form-label">&nbsp;</label>
                            <input type="text" class="input" placeholder="Street 2">
                          </div>
                          <div class="col-md-6 mb-3">
                            <label class="form-label">District</label>
                            <input type="text" class="input" placeholder="Enter District">
                          </div>
                          <div class="col-md-6 mb-3">
                            <label class="form-label">City</label>
                            <input type="text" class="input" placeholder="Enter City"> 
                          </div>
                          <div class="col-md-6 mb-3">
                            <label class="form-label">State</label>
                            <input type="text" class="input" placeholder="Enter State">
                          </div>
                          <div class="col-md-6 mb-3">
                            <label class="form-label">PIN Code</label>
                            <input type="text" class="input" placeholder="Enter PIN Code">
                          </div>
                        
                        </div>
                          
                          <div class="text-center mt-3">
                            <button type="button" class="btn btn-next-1 ">Next</button>
                          </div>
                      </div>

                      

                      <div class="form-step form2">

                          <div class="photo-upload d-flex gap-4 justify-content-between align-items-center mb-3">
                            
                            <input type="file" class="hidden" id="photoInput" accept="image/*">
                            <div class="preview-container ">
                              <svg class="profile-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                              </svg>
                              <img id="photoPreview" src="" class="shop-logo hidden" style="margin-top: 1rem;">
                          </div>
                          <label for="photoInput">Shop Logo</label>
                      </div>
                        <div class="row">

                          <div class="col-md-6 mb-3">
                            <label class="form-label">Shop Name <span class="text-danger">*</span></label>
                            <input type="text" class="input" placeholder="Shop Name" required>
                          </div>
                          <div class="col-md-6 mb-3">
                            <label class="form-label">Social Media Handle <span class="text-danger">*</span></label>
                            <input type="text" class="input" placeholder="Enter Social Media" required>
                          </div>
                          <div class="col-md-6 mb-3">
                            <label class="form-label">Shop Phone Number <span class="text-danger">*</span></label>
                            <input type="text" class="input" placeholder="Enter shop  Phone Number" required>
                          </div>
                          <div class="col-md-6 mb-3">
                            <label class="form-label">Pickup Address <span class="text-danger">*</span></label>
                            <input type="email" class="input" placeholder="Address Lane 1" required>
                          </div>
                          <div class="col-md-6 mb-3">
                            
                            <input type="text" class="input" placeholder="Address Lane 1">
                          </div>
                          <div class="col-md-6 mb-3">
                            <label class="form-label">City</label>
                            <input type="text" class="input" placeholder="Enter City">
                          </div>
                          <div class="col-md-6 mb-3">
                            <label class="form-label">District</label>
                            <input type="text" class="input" placeholder="Enter District">
                          </div>
                          
                          <div class="col-md-6 mb-3">
                            <label class="form-label">State</label>
                            <input type="text" class="input" placeholder="Enter State">
                          </div>
                          <div class="col-md-6 mb-3">
                            <label class="form-label">PIN Code</label>
                            <input type="text" class="input" placeholder="Enter PIN Code">
                          </div>
                        </div>
                        
                        <div class=" mt-3 w-100 d-flex justify-content-between align-items-center">
                          <button type="button" class="btn btn-back-1 ">Back</button>
                          <button type="button" class="btn btn-next-2 ">Next</button>
                        </div>

                      </div>

                      <div class="form-step form3">

                        <div class="row">
                          <div class="col-md-6 mb-3">
                            <label class="form-label">Entity Type <span class="text-danger">*</span></label>
                            <input type="text" class="input" placeholder="Entity Type *" required>
                          </div>
                          <div class="col-md-6 mb-3">
                            <label class="form-label">PAN Number<span class="text-danger">*</span></label>
                            <input type="text" class="input" placeholder="Enter PAN Number" required>
                          </div>
                          <div class="col-md-6 mb-3">
                            <label class="form-label">GST Number <span class="text-danger">*</span></label>
                            <input type="text" class="input" placeholder="22ABCDE0000A1Z5" required>
                          </div>
                          <div class="col-md-6 mb-3">
                            <label class="form-label">Pickup Address <span class="text-danger">*</span></label>
                            <input type="email" class="input" placeholder="Address Lane 1" required>
                          </div>
                          <div class="col-md-6 mb-3">
                            
                            <input type="text" class="input" placeholder="Address Lane 1">
                          </div>
                          <div class="col-md-6 mb-3">
                            <label class="form-label">City</label>
                            <input type="text" class="input" placeholder="Enter City">
                          </div>
                          <div class="col-md-6 mb-3">
                            <label class="form-label">District</label>
                            <input type="text" class="input" placeholder="Enter District">
                          </div>
                          
                          <div class="col-md-6 mb-3">
                            <label class="form-label">State</label>
                            <input type="text" class="input" placeholder="Enter State">
                          </div>
                          <div class="col-md-6 mb-3">
                            <label class="form-label">PIN Code</label>
                            <input type="text" class="input" placeholder="Enter PIN Code">
                          </div>
                      
                        </div>
                        
                        <div class=" mt-3 w-100 d-flex justify-content-between align-items-center">
                          <button type="button" class="btn btn-back-2 ">Back</button>
                          <button type="submit" class="btn ">Submit</button>
                        </div>

                      </div>
                    
                  </form>
                </div>
                
            </div>
          </div>
        </div>
        
    </section>
    

    <script src="<?= base_url('assets/seller/js/cretzo/form.js') ?>"></script>