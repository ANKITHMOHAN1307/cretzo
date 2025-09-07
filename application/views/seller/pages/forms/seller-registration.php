<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Sign Up </title>
    <style>
        .main{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            
        }
        .row{
            display: flex;
            width: 100%;
            padding: 20px;
            background-color: #f4f4f4;
        }
    
        .left{
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .right{
            flex: 1/4;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 32rem;
            padding: 20px 32px;
        }
        .form_box{
            width: 75%;;
        }
        .form{
            display: flex;
            flex-direction: column; 
            justify-content: center;
            align-items: center;
            width: 100%;
        }
        .form_group{
            width: 100%;
            margin: 10px 0;
        }
        .form input{
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
    </style>
</head>

<body>
    <div class="main">
        <div class="row">
            <div class='left'>
                <img src="<?php echo base_url()?>/assets/admin/images/eshop_img.jpg" alt="side-image brand" style="width: 100%; height: 100%;">
            </div>
            <div class='right'>
                <div class='form_box'>
                    <form class='form' method="post">
                        <h2>Sign Up</h2>
                        <div class="form_group">
                            <label for="mobile">Mobile</label>
                            <input type="text" id="mobile" name="mobile" class="form-control" placeholder="Enter your mobile number" required>
                            <button type="button" class="btn btn-secondary" id="send_otp">Send OTP</button>
                        </div>
                        <div class="form_group">
                            <label for="otp">OTP</label>
                            <input type="text" id="otp" name="otp" class="form-control" placeholder="Enter the OTP" required>
                        </div>
                        <div class="form_group">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
                        </div>
                        <div class="form_group">
                            <label for="confirm_password">Confirm Password</label>
                            <input type="password" id="confirm_password" name="confirm_password" class="form-control" placeholder="Confirm your password" required>
                        </div>
                        <button class="btn btn-primary">Sign up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>