$(document).ready(function() {
    startChatIfSellerSelected();
});

function startChatIfSellerSelected() {
    var urlParams = new URLSearchParams(window.location.search); //get all parameters
    var sellerID = urlParams.get('seller-id');
    var sellerUsername = urlParams.get('seller-username');

    if(sellerID){
        // Manually set a value and trigger the change event
        let option = new Option(sellerUsername, sellerID, true, true);
        $('#chat_user').append(option).trigger('change');
        $("#chat_user").val([sellerID]).trigger('change');
    }
};