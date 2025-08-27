<!DOCTYPE html>
<html>
<?php $this->load->view('admin/include-head.php'); ?>

<body class="hold-transition login-page  bg-admin">
	<?php $this->load->view('seller/pages/' . $main_page); ?>
	<!-- Footer -->
	<?php // $this->load->view('admin/include-script.php'); ?>
</body>


<script>
$(document).ready(function(){

    // Send OTP button click
    $("#send_otp").click( function(){
        console.log('clicked')
        let mobile = $("#mobile").val();

        if(mobile === "" || mobile.length !== 10){
            alert("Enter a valid 10-digit mobile number");
            return;
        }
        const base_url = "<?= base_url('') ?>"
        console.log(base_url)
        $.ajax({
            url: base_url + "/seller/auth/send_otp",
            type: "POST",
            data: { mobile: mobile },
            dataType: "json",
            success: function(res){
                alert(res.message);
            }
        });
    });

    // Signup form submit via AJAX
    $(".form").submit(function(e){
        e.preventDefault();

        const base_url = "<?= base_url('') ?>"
        $.ajax({
            url: base_url + "seller/auth/ajax_signup",
            type: "POST",
            data: $(this).serialize(),
            dataType: "json",
            success: function(res){
                if(res.status === 'success'){
                    alert(res.message);
                    $(".form")[0].reset();
                    redirect(base_url + '/seller/home')
                } else {
                    alert(res.message);
                }
            }
        });
    });

});
</script>

</html>