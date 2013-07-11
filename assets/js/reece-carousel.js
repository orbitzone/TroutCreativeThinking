
!function ($) {

  "use strict"; // jshint ;_;

  $(document).on('click.carousel-slide.data-api', '[data-carousel-slide]', function (e) {
    e.preventDefault();
    var $clicked = $(e.currentTarget), href;
    var $target = $($clicked.attr('data-target') || (href = $clicked.attr('href')) && href.replace(/.*(?=#[^\s]+$)/, '')); //strip for ie7
    var id_selector = $clicked.data("carouselSlide"),
        id = parseInt(id_selector);
    $target.carousel(id);
  });

}(window.jQuery);
