$(document).ready(function() {
    setupReadMoreLinks();
});

function moneyFormatIndia(num) {
    let explrestunits = '';
    num = num.toString(); // Convert the number to a string

    // Check if the number has more than 3 digits
    if (num.length > 3) {
        let lastthree = num.slice(num.length - 3); // Extract the last three digits
        let restunits = num.slice(0, num.length - 3); // Extract the rest of the digits

        // Pad the rest of the digits with a zero if necessary to maintain grouping
        restunits = restunits.length % 2 === 1 ? '0' + restunits : restunits;

        // Split the restunits into chunks of two
        let expunit = restunits.match(/.{1,2}/g); // Match every 2 characters
        
        // Concatenate the parts with commas
        for (let i = 0; i < expunit.length; i++) {
            explrestunits += (i === 0) ? parseInt(expunit[i], 10) + ',' : expunit[i] + ',';
        }

        // Concatenate the formatted parts
        return explrestunits + lastthree;
    } else {
        // If number is less than or equal to 3 digits, return it as is
        return num;
    }
}

function setupReadMoreLinks(){
    /* Implement height limit and read more text for elements with .readMore */
    var max = 450;
    $(".readMore").each(function() {

        if($(this).data('readMoreLength')){
            max = $(this).data('read-more-length');
        }

        var str = $(this).text();
        if ($.trim(str).length > max) {
            var subStr = str.substring(0, max);
            var hiddenStr = str.substring(max, $.trim(str).length);
            $(this).empty().html(subStr);
            $(this).append(' <a href="javascript:void(0);" class="readMoreLink">Read more…</a>');
            $(this).append('<span class="addText">' + hiddenStr + '</span>');
        }
    });
    $(".readMoreLink").click(function() {
        $(this).siblings(".addText").contents().unwrap();
        $(this).remove();

        // re-create and re-initialize the scroll magic effect
        setupScrollMagicEffect();
    });
}