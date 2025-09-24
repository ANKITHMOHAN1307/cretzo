<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Sign Up </title>
    <style>
    .main {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .row {
        display: flex;
        width: 100%;
        padding: 20px;
        background-color: #f4f4f4;
        height: 100vh;
    }

    .left {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .right {
        display: flex;
        flex: 1/4;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 32rem;
        padding: 20px 32px;
    }

    .form_box {
        width: 100%;
        height: 100%;
        /* background-color: red; */
        padding: 20px;
    }

    .form {
        width: 100%;
        height: 100%;
    }


    .steps {
        width: 100%;
        height: 100%;
        padding: 20px;
        overflow: hidden;
        position: relative;
    }

    .step {
        width: 100%;
        padding: 20px;
        box-sizing: border-box;
        position: absolute;
        top: 0;
        left: 0;
        transition: transform 0.2s ease-in-out;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .step-2 {
        transform: translateX(150%);
    }

    .form_group {
        width: 100%;
        margin: 10px 0;
    }

    .form input {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .link {
        text-decoration: underline;
        color: var(--color-primary);
        cursor: pointer;
        font-size: 0.9rem;
    }

    .link:hover {
        color: var(--color-orange-dark);
    }

    .btn-primary {
        background-color: var(--color-primary);
        border: none;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 10px 0;
        cursor: pointer;
        border-radius: 4px;
    }

    .btn-primary:hover {
        background-color: var(--color-orange-dark);
    }
    </style>
</head>

<body>
    <div class="main">
        <div class="row">
            <div class='left'>
                <img src="<?php echo base_url()?>/assets/admin/images/eshop_img.jpg" alt="side-image brand"
                    style="width: 100%; height: 100%;">
            </div>
            <div class='right'>
                <form class='form' method="post">
                    <div class='form_box'>
                        <div class="steps">
                            <div class="step step-1">
                                <h2>Sign Up</h2>
                                <div class="form_group">
                                    <label for="mobile">Mobile</label>
                                    <input type="text" id="mobile" name="mobile" class="form-control"
                                        placeholder="Enter your mobile number" required>
                                    <a href="#" class="link" id="send_otp">Send OTP</a>
                                    <p class='error'></p>
                                    <p class='success'></p>
                                </div>
                                <div class="form_group">
                                    <label for="otp">OTP</label>
                                    <input type="text" id="otp" name="otp" class="form-control"
                                        placeholder="Enter the OTP" required>
                                </div>
                                <button type="button" class="btn btn-primary" id="verify_otp">Verify OTP</button>
                            </div>

                            <div class="step step-2">
                                 <h2>Set Up Your Password</h2>
                                <div class="form_group">
                                    <label for="password">Password</label>
                                    <input type="password" id="password" name="password" class="form-control"
                                        placeholder="Enter your password" required>
                                </div>
                                <div class="form_group">
                                    <label for="confirm_password">Confirm Password</label>
                                    <input type="password" id="confirm_password" name="confirm_password"
                                        class="form-control" placeholder="Confirm your password" required>
                                </div>
                                <p class='error'></p>
                                <button class="btn btn-primary">Sign up</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>


    <script>
    $(document).ready(function() {

        // Send OTP button click
        $("#send_otp").click(function() {
            let mobile = $("#mobile").val();

            if (mobile === "" || mobile.length !== 10) {
                alert("Enter a valid 10-digit mobile number");
                return;
            }
            const base_url = "<?= base_url('') ?>"

            $.ajax({
                url: base_url + "seller/auth/send_otp",
                type: "POST",
                data: {
                    mobile: mobile
                },
                dataType: "json",
                success: function(res) {
                    $('.step-1 .form_group .success').text('OTP sent successfully');
                    $("#send_otp").text('Resend OTP');
                },
                error: function(err) {
                    console.log(err);
                    $('.error').text('Failed to send OTP. Try again.');
                }
            });
        });

        // Verify OTP button click
        $('#verify_otp').click(function() {

            console.log("clicked");
            const base_url = "<?= base_url('') ?>"
            let mobile = $("#mobile").val();
            let otp = $("#otp").val();

            if (mobile === "" || mobile.length !== 10) {
                alert("Enter a valid 10-digit mobile number");
                return;
            }
            if (otp === "" || otp.length !== 6) {
                $('.error').text("Enter a valid OTP");
                return;
            }

            $.ajax({
                url: base_url + "seller/auth/verify_otp",
                type: "POST",
                data: {
                    mobile: mobile,
                    otp: otp
                },
                dataType: "json",
                success: function(res) {
                    console.log(res);
                    $('.step-1 .form_group .success').text('OTP verified successfully');
                    $("#send_otp").text('Resend OTP');
                    $('.step-1').css('transform', 'translateX(-100%)');
                    $('.step-2').css('transform', 'translateX(0%)');
                },
            });
        })

        // Signup form submit via AJAX
        $(".form").submit(function(e) {
            e.preventDefault();
            const base_url = "<?= base_url('') ?>"
            $.ajax({
                url: base_url + "seller/auth/ajax_signup",
                type: "POST",
                data: $(this).serialize(),
                dataType: "json",
                success: function(res) {
                    if (res.status === 'success') {
                        alert(res.message);
                        $(".form")[0].reset();
                        window.location.href = base_url + 'seller/home';
                    } else {
                        console.log(res);
                        alert(res.message);
                    }
                },
                error: function(err) {
                    console.log(err);
                }
            });
        });

    });
    </script>
</body>

</html>