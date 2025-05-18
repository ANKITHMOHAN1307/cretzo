<!-- edit profile -->
<div class="overview-side-container">
            <h1 class="heading-b">Account</h1>
            <p class="text-n"><?= $users->username ?></p>
            <div class="overview-container">
                
                <?php $this->load->view('front-end/' . THEME . '/partials/my-account-sidebar', ['active_menu' => $main_page]); ?>

                <div class="overview-right">
                    
                    <div class="card p-7 rounded-0">

                        <h1 class="heading-n overview-right-heading">Edit Details</h1>

                        <hr class="mt-5 mb-5">

                        <form class="form-submit-event" method="POST" action="<?= base_url('login/update_user') ?>">
                            <div class="form-row">

                                <div class="form-group col-md-6">
                                    <label for="username" class="col-sm-12 col-form-label"><?= !empty($this->lang->line('username')) ? $this->lang->line('username') : 'Username' ?>*</label>
                                    <input type="text" class="form-control" id="username" placeholder="Type Username here" name="username" value="<?= $users->username ?>">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="mobile" class="col-sm-12 col-form-label"><?= !empty($this->lang->line('mobile')) ? $this->lang->line('mobile') : 'Mobile' ?>*</label>
                                    <div>
                                        <input type="phone" class="form-control" id="mobile" placeholder="Type Mobile No. here" name="mobile" value="<?= $users->mobile ?>" <?= isset($users->type) && ($users->type == 'phone' || $users->type == '') && ($system_settings['login_with_email'] == 0 || $system_settings['login_with_email'] == '0') ? 'readonly' : '' ?>>
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="email" class="col-sm-12 col-form-label"><?= !empty($this->lang->line('email')) ? $this->lang->line('email') : 'Email' ?>*</label>
                                    <input type="text" class="form-control" id="email" placeholder="Type Email here" name="email" value="<?= $users->email ?>" <?= (isset($users->type) && !empty($users->type) && ($users->type == 'google' || ($users->type == 'facebook') && $users->type != '' && !empty($users->email))) || ($system_settings['login_with_email'] == 1 || $system_settings['login_with_email'] == '1') ? 'readonly' : '' ?>>
                                </div>
                            </div>

                            <div class="form-group <?= isset($users->type) && !empty($users->type) && $users->type != 'phone' ? 'd-none' : '' ?>">
                                <label for="old" class="col-sm-12 col-form-label"><?= !empty($this->lang->line('old_password')) ? $this->lang->line('old_password') : 'Old Password' ?></label>
                                <input type="password" class="form-control" id="old" placeholder="Type Old Password here" name="old">
                            </div>
                            <div class="form-row <?= isset($users->type) && !empty($users->type) && $users->type != 'phone' ? 'd-none' : '' ?>">
                                <div class="form-group col-md-6">
                                    <label for="new" class="col-sm-12 col-form-label"><?= !empty($this->lang->line('new_password')) ? $this->lang->line('new_password') : 'New Password' ?></label>
                                    <input type="password" class="form-control" id="new" placeholder="Type New Password here" name="new">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="new_confirm" class="col-sm-12 col-form-label"><?= !empty($this->lang->line('confirm_new_password')) ? $this->lang->line('confirm_new_password') : 'Confirm New Password' ?></label>
                                    <input type="password" class="form-control" id="new_confirm" placeholder="Type Confirm Password here" name="new_confirm">
                                </div>
                            </div>
                            
                            <div class="logout-btn-container">
                                <button type="submit" class="cretzo btn btn-dark logout-btn submit_btn">Save Details</button>
                            </div>

                            <div class="d-flex justify-content-center mt-3">
                                <div class="form-group" id="error_box">
                                </div>
                            </div>
                        </form>
                        <!--end profile -->
                        <div>
                        </div>
                        <!--end col-->
                    </div>
                    
                </div>
            </div>
        </div>