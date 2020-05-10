const ele = '.profile';
const $window = $(window);
const viewportHeight = $window.height();

let ui = {
    promo: ele + ' .grid',
    promoText: ele + ' .promo-text',
    navigationItems: '.navigation a'
};


function isOnScreen(el) {
    const viewport = {
        top: $window.scrollTop()
    };


    viewport.bottom = viewport.top + viewportHeight;

    const bounds = el.offset();
    bounds.bottom = el.offset().top + el.outerHeight();

    return !(viewport.bottom < bounds.top || viewport.top > bounds.bottom);
}

$(document).ready(main);

$(window).load(function() {
    $('.post-module').hover(function() {
        $(this).find('.description').stop().animate({
            height: "toggle",
            opacity: "toggle"
        }, 300);
    });
});