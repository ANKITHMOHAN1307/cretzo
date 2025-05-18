function razorpay_setup(
    key,
    amount,
    app_name,
    logo,
    razorpay_order_id,
    order_id,
    username,
    user_email,
    user_contact
) {

    var options = {

        key: key, // Enter the Key ID generated from the Dashboard
        amount: amount * 100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
        currency: 'INR',
        name: app_name,
        description: 'Product Purchase',
        image: logo,
        order_id: razorpay_order_id, //This is a sample Order ID. Pass the `id` obtained in the response of Step 1

        handler: function (response) {
            $('#razorpay_payment_id').val(response.razorpay_payment_id)
            $('#razorpay_signature').val(response.razorpay_signature)


            setTimeout(function () {
                location.href = base_url + 'payment/wallet_success'
            }, 3000)

        },
        prefill: {
            name: username,
            email: user_email,
            contact: user_contact
        },
        notes: {
            order_id: order_id
        },
        theme: {
            color: '#3399cc'
        },
        escape: false,
        modal: {
            ondismiss: function () {
                $('#place_order_btn').attr('disabled', false).html('Place Order')
            }
        }
    }
    var rzp = new Razorpay(options)
    return rzp
}

function onPaymentSuccessHandler(response) {
    console.log('Payment Success Response', response);
    // $('#instamojo_payment_id').val(response.paymentId);
    if (response.status == "success") {
        setTimeout(function () {
            location.href = base_url + 'payment/wallet_success'
        }, 3000)
    } else {
        location.href = base_url + 'payment/cancel';
    }
}
function onPaymentFailureHandler(response) {
    alert('Payment Failure');
    if (response.status == "failure") {
        location.href = base_url + 'payment/cancel';
    }
}

function wallet_refill() {
    let myForm = document.getElementById('wallet_form')
    var formdata = new FormData(myForm)
    formdata.append(csrfName, csrfHash)
    var latitude =
        sessionStorage.getItem('latitude') === null ?
            '' :
            sessionStorage.getItem('latitude')
    var longitude =
        sessionStorage.getItem('longitude') === null ?
            '' :
            sessionStorage.getItem('longitude')
    formdata.append('latitude', latitude)
    formdata.append('longitude', longitude)
    return $.ajax({
        type: 'POST',
        data: formdata,
        url: base_url + 'cart/wallet_refill',
        dataType: 'json',
        cache: false,
        processData: false,
        contentType: false,
        beforeSend: function () {
            $('#place_order_btn').attr('disabled', true).html('Please Wait...')
        },
        success: function (data) {
            csrfName = data.csrfName
            csrfHash = data.csrfHash
            $('#place_order_btn').attr('disabled', false).html('Place Order')
            if (data.error == false) {
                Toast.fire({
                    icon: 'success',
                    title: data.message
                })
            } else {
                Toast.fire({
                    icon: 'error',
                    title: data.message
                })
            }
        }
    })
}


$(document).on('click', '#wallet_refill', function () {
    var order_id = $('#order_id').val()
    var amount = $('#amount').val()
    var payment_methods = $("input[name='payment_method']:checked").val()

    /* if (amount == "") {
        Toast.fire({
            icon: 'error',
            title: 'You need to add amount'
        })
    }
    else { */
        if (payment_methods == 'Razorpay') {
            $.post(
                base_url + 'cart/wallet_refill', {
                [csrfName]: csrfHash,
                payment_method: 'Razorpay',
                amount: amount,
                order_id: order_id,
            },
                function (data) {
                    csrfName = data.csrfName
                    csrfHash = data.csrfHash
                    if (data.error == false) {
                        $('#razorpay_order_id').val(data.order_id)
                        var key = $('#razorpay_key_id').val()
                        var app_name = $('#app_name').val()
                        var logo = $('#logo').val()
                        var razorpay_order_id = $('#razorpay_order_id').val()
                        var username = $('#username').val()
                        var user_email = $('#user_email').val()
                        var user_contact = $('#user_contact').val()
                        var order_id = $('#order_id').val()
                        var rzp1 = razorpay_setup(
                            key,
                            amount,
                            app_name,
                            logo,
                            razorpay_order_id,
                            order_id,
                            username,
                            user_email,
                            user_contact
                        )
                        rzp1.open()
                        rzp1.on('payment.failed', function (response) {
                            location.href = base_url + 'payment/cancel'
                        })
                    } else {
                        Toast.fire({
                            icon: 'error',
                            title: data.message
                        })
                    }
                },
                'json'
            )
        }
    // }
})


$("input[name='payment_method']").on('change', function (e) {
    e.preventDefault()
    var payment_method = $('input[name=payment_method]:checked').val()
    if (payment_method == 'Stripe') {
        stripe1 = stripe_setup($('#stripe_key_id').val())
        $('#stripe_div').slideDown()
    } else {
        $('#stripe_div').slideUp()
    }

})


$(document).on('click', '#withdraw_amount', function () {
    var user_id = $('#user_id').val()
    var payment_address = $('#payment_address').val()
    var amount = $('#withdrawal_amount').val()

    $.ajax({
        type: 'POST',
        data: {
            user_id: user_id,
            payment_address: payment_address,
            amount: amount,
            [csrfName]: csrfHash
        },
        dataType: 'json',
        url: base_url + 'my_account/withdraw_money',
        success: function (result) {

            csrfName = result['csrfName'];
            csrfHash = result['csrfHash'];
            if (result.error == false) {
                Toast.fire({
                    icon: 'success',
                    title: result.message
                })
                setTimeout(function () {
                    location.reload()
                }, 600)


            } else {
                Toast.fire({
                    icon: 'error',
                    title: result.message
                })
            }
        }
    })

})