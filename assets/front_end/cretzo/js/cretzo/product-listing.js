var price_filter_enabled = false;

// Function to get base URL without page index
function getBaseURL() {
    var currentURL = window.location.href;
    var baseURL = currentURL.split('?')[0]; // Remove query string
    var baseURLParts = baseURL.split('/'); // Split by '/'
    var lastPart = baseURLParts[baseURLParts.length - 1];
    if (!isNaN(lastPart)) {
        // If last part is a number (page index), remove it
        baseURLParts.pop();
        baseURL = baseURLParts.join('/');
    }
    return baseURL;
}

// Function to update the URL with modified GET parameters
function updateURL() {
    // Initialize an empty array to store the selected category IDs
    var selectedCategories = [];
    // Get all the checked category checkboxes
    $('.filter-section.fs-category .filter-list-item input[type="checkbox"]:checked').each(function() {
        selectedCategories.push($(this).data('value'));
    });

    // Initialize an empty array to store the selected brand slugs
    var selectedBrands = [];
    // Get all the checked brand checkboxes
    $('.filter-section.fs-brand .filter-list-item input[type="checkbox"]:checked').each(function() {
        selectedBrands.push($(this).data('value'));
    });

    // Initialize an empty object to store the selected attribute values
    var selectedAttributes = {};
    // Get all the checked attribute checkboxes
    $('.filter-section.fs-attr .filter-list-item input[type="checkbox"]:checked').each(function() {
        var attributeName = $(this).closest('.filter-section').find('.filter-heading').text().trim().toLowerCase();
        //var attributeValue = $(this).siblings('.filter-name').text().trim().toLowerCase();
        if (!selectedAttributes[attributeName]) {
            selectedAttributes[attributeName] = [];
        }
        // selectedAttributes[attributeName].push(attributeValue);
        selectedAttributes[attributeName].push($(this).data('value'));

        $(this).data('value')
    });

    // Construct the updated URL
    var url = getBaseURL();
    // var url = window.location.origin + window.location.pathname;

    /* Construct the params for URL */
    var params = [];
    if (selectedCategories.length > 0) {
        params.push('category=' + selectedCategories.join('|'));
    }
    if (selectedBrands.length > 0) {
        params.push('brand=' + selectedBrands.join('|'));
    }
    $.each(selectedAttributes, function(attributeName, attributeValues) {
        params.push('filter-' + attributeName.replace(/\s+/g, '-') + '=' + attributeValues.join('|'));
    });

    /* var minPrice = $('#price-range-input').val()[0];
    var maxPrice = $('#price-range-input').val()[1];
    params.push('min-price=' + minPrice);
    params.push('max-price=' + maxPrice); */

    if(price_filter_enabled){
        const priceInput = document.querySelectorAll(".price-input input");
        var minPrice = priceInput[0].value;
        var maxPrice = priceInput[1].value;
        params.push('min-price=' + minPrice);
        params.push('max-price=' + maxPrice);
    }

    var urlParams = new URLSearchParams(window.location.search); //get all parameters
    var seller = urlParams.get('seller');
    if(seller){
        params.push('seller=' + seller);
    }

    if (params.length > 0) {
        url += '?' + params.join('&');
    }

    // Update the page URL
    window.history.replaceState({}, '', url);

    // Reload the page to apply the changes
    location.reload();
}

$(document).ready(function() {

    // Add event listeners for checkbox change events
    $('.filter-list-item input[type="checkbox"]').change(function() {
        updateURL();
    });

    // Add event listener for 'Filter Price' button click
    $('#filter-price-btn').click(function() {
        price_filter_enabled = true;
        updateURL();
    });
    $('#clear-filter-price-btn').click(function() {
        price_filter_enabled = false;
        updateURL();
    });

    // Add event listener for 'Filter Price' button click
    $('#clear-all-filters-btn').click(function() {
        price_filter_enabled = false;
        var url = getBaseURL();
        window.history.replaceState({}, '', url);
        location.reload();
    });

    /* Set state of price filter and related button */
    var urlParams = new URLSearchParams(window.location.search); //get all parameters
    var min_price_param = urlParams.get('min-price');
    var max_price_param = urlParams.get('max-price');
    price_filter_enabled = min_price_param || max_price_param;
    $('#clear-filter-price-btn').attr("disabled", !price_filter_enabled);

    /* Get seller details if seller param available */
    /* var seller = urlParams.get('seller');
    if(seller){
        getSellerDetails(seller);
    } */

    // Add event listener for tapping on .filter-container
    $('.filter-container').on('click', function() {
        // Check if screen size is less than or equal to 1000px
        if ($(window).width() <= 1000) {
            // Add active class to filter-container
            $(this).addClass('active');

            // Show background overlay
            // $('#bg-overlay').css('display', 'block');
            $('#bg-overlay').addClass('active');
        }
    });

    // Add event listener for tapping on #bg-overlay
    $('#bg-overlay').on('click', function() {
        // Hide background overlay
        // $(this).css('display', 'none');
        $(this).removeClass('active');

        // Remove active class from filter-container
        $('.filter-container').removeClass('active');
    });

    /* Setup Price Filter */
    const rangeInput = document.querySelectorAll(".range-input input"),
    priceInput = document.querySelectorAll(".price-input input"),
    range = document.querySelector(".slider .progress");
    let priceGap = 1000;

    priceInput.forEach((input) => {
        input.addEventListener("input", (e) => {
            let minPrice = parseInt(priceInput[0].value),
            maxPrice = parseInt(priceInput[1].value);

            if (maxPrice - minPrice >= priceGap && maxPrice <= rangeInput[1].max) {
            if (e.target.className === "input-min") {
                rangeInput[0].value = minPrice;
                range.style.left = (minPrice / rangeInput[0].max) * 100 + "%";
            } else {
                rangeInput[1].value = maxPrice;
                range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
            }
            }
        });
    });

    rangeInput.forEach((input) => {
        input.addEventListener("input", (e) => {
            let minVal = parseInt(rangeInput[0].value),
            maxVal = parseInt(rangeInput[1].value);

            if (maxVal - minVal < priceGap) {
            if (e.target.className === "range-min") {
                rangeInput[0].value = maxVal - priceGap;
            } else {
                rangeInput[1].value = minVal + priceGap;
            }
            } else {
            priceInput[0].value = minVal;
            priceInput[1].value = maxVal;
            range.style.left = (minVal / rangeInput[0].max) * 100 + "%";
            range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
            }
        });
    });

});

/* function getSellerDetails(seller_slug){
    $.ajax({
        type: "POST",
        url: base_url + "sellers/get_seller_details",
        data: {
            [csrfName]: csrfHash,
            'seller_slug': seller_slug,
        },
        dataType: "json",
        success: function (e) {
            csrfName = e.csrfName;
            csrfHash = e.csrfHash;
            if (e.error == false) {
                $('#seller-store-name').text(e.data[0]['store_name']);

                // Extract the seller's category IDs
                let allowedCategories = e.data[0]['seller_categories'].map(cat => String(cat.id));

                // Loop through all category checkboxes
                $('.filter-list-item').each(function () {
                    let categoryId = $(this).find('input[type="checkbox"]').data('value');

                    // Hide the category if not in the allowed categories
                    if (!allowedCategories.includes(String(categoryId))) {
                        $(this).hide(); // or .remove() if you want to completely remove it
                    }
                });
            }
        }
    });
} */

function removeSellerFilter() {
    // Remove 'seller' query parameter from the URL
    const url = new URL(window.location.href);
    url.searchParams.delete('seller');
    window.location.href = url.toString();
}