var removeClass = true;
jQuery("#menu-icon").click(function () {
    jQuery("body").toggleClass('mobile-nav');
    removeClass = false;
});

jQuery("#menu-icon").click(function() {
    removeClass = false;
});

jQuery("#menu-icon").click(function () {
    if (removeClass) {
        jQuery("body").removeClass('.mobile-nav');
    }
    removeClass = true;
});