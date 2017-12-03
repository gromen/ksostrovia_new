/**
 * File scripts.js.
 *
 * global functionality for Ks Ostrovia theme
 *
 */
(function ($) {
    $(document).ready(function () {

      var mySwiper = new Swiper('.swiper-container', {
        // Optional parameters
        loop: true,
        autoplay: 6000,
        parallax: true,

        // If we need pagination
        pagination: '.swiper-pagination',

        // Navigation arrows
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev'
      });
    });
})(jQuery);
