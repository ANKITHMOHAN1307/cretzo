$(document).ready(function() {
    function setContainerMaxHeights() {
        $('.card-container-one').each(function() {
            let $cards = $(this).find('.cretzo-card'); // Store the card selection

            if ($cards.length === 0) { // Check if any cards exist
                return; // Skip to the next container if no cards are found
            }

            let maxHeight = 0;

            $cards.each(function() {
              maxHeight = Math.max(maxHeight, $(this).outerHeight()); // Use outerHeight() to include padding and border
            });
            $(this).css('max-height', maxHeight+24 + 'px');  // Set max-height, important to add 'px'
        });
    }

    setContainerMaxHeights(); // Call initially on document ready

    $(window).resize(setContainerMaxHeights); // Call on window resize
});