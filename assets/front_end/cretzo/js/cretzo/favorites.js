$(".wishlist-card .remove-from-wishlist-btn").on("click", function (e) {
    e.preventDefault();
    var t = new FormData,
        a = $(this).data("product-id"),
        r = $(this);
    t.append(csrfName, csrfHash), t.append("product_id", a), $.ajax({
        type: "POST",
        url: base_url + "my-account/manage-favorites",
        data: t,
        cache: !1,
        contentType: !1,
        processData: !1,
        dataType: "json",
        success: function (e) {
            csrfName = e.csrfName;
            csrfHash = e.csrfHash;
            if (e.error == true) {
                Toast.fire({
                    icon: "error",
                    title: e.message
                });
            } else {

                // fade out card then remove card
                $(r).closest('.wishlist-card').fadeOut(300, function(){ 
                    // remove the card
                    $(this).remove();

                    // update total wishlist items count text
                    let newCount = $(".wishlist-card-container > .wishlist-card").length;
                    $(".wishlist .no-of-item-text > span").text(newCount);
                });
                

                /* if (r.hasClass("fa-heart-o")) {
                    r.removeClass("fa-heart-o");
                    r.addClass("fa-heart").css("color", "red");
                } else if (r.hasClass("fa-heart")) {
                    // r.hasClass("fa-heart");
                    r.removeClass("fa-heart");
                    r.addClass("fa-heart-o").css("color", "black");
                } */

            }
        }
    })
});