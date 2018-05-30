jQuery(document).ready(function () {

    // SERVICES ACCORDION
    function close_accordion_section() {
        jQuery('.accordion .accordion-section-title').removeClass('active');
        jQuery('.accordion .accordion-section-content').slideUp(150).removeClass('open');
    }

    jQuery('.accordion-section-title').click(function (e) {
        // Grab current anchor value
        var currentAttrValue = jQuery(this).attr('href');
        var self = $(this);
        var clickedTitle = jQuery('.accordion .accordion-section-title').not(jQuery(this));
        var clickedContent = jQuery('.accordion .accordion-section-title').not(jQuery(this)).next();

        if (jQuery(e.target).is('.active')) {

            close_accordion_section();

        } else {

            jQuery(clickedTitle).removeClass('active');
            jQuery(clickedContent).slideUp(150).removeClass('open');

            setTimeout(function () {
                $('html, body').animate({
                    scrollTop: self.offset().top
                }, 300);
            }, 200);

            // Add active class to section title
            jQuery(this).addClass('active');

            // Open up the hidden content panel
            jQuery('.accordion ' + currentAttrValue).slideDown(180).addClass('open');
        }

        e.preventDefault();
    });

    var url = window.location.href;
    var newUrl = url.slice(-1);

    if (newUrl === newUrl) {
        // Add active class to section title
        jQuery('.' + newUrl).addClass('active').stop();

        // Open up the hidden content panel
        jQuery('#accordion-' + newUrl).slideDown(150).addClass('open');

        $('html, body').animate({
            scrollTop: $('.' + newUrl).offset().top
        }, 300);
    }
});


//get question index passed via query parameter

// Get current Url


