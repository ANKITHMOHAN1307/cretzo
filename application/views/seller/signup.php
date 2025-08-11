<!DOCTYPE html>
<html>
<?php $this->load->view('admin/include-head.php'); ?>

<body class="hold-transition login-page  bg-admin">
	<?php $this->load->view('seller/pages/' . $main_page); ?>
	<!-- Footer -->
	<?php $this->load->view('admin/include-script.php'); ?>
</body>


<script>
$(document).ready(function(){

    // Send OTP button click
    $("#send_otp").click(function(){
        let mobile = $("#mobile").val();

        if(mobile === "" || mobile.length !== 10){
            alert("Enter a valid 10-digit mobile number");
            return;
        }

        $.ajax({
            url: "<?= base_url('auth/send_otp') ?>",
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

        $.ajax({
            url: "<?= base_url('auth/ajax_signup') ?>",
            type: "POST",
            data: $(this).serialize(),
            dataType: "json",
            success: function(res){
                if(res.status === 'success'){
                    alert(res.message);
                    $(".form")[0].reset();
                } else {
                    alert(res.message);
                }
            }
        });
    });

});
</script>

</html>