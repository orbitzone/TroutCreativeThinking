$( document ).ready(function() {
    $('.slider').slick({
	  infinite: true,
	  prevArrow: '<span class="icon-chevron-left slick-prev"></span>',
	  nextArrow: '<span class="icon-chevron-right slick-next"></span>',

	});
    $('.vertical-slider').slick({
	  vertical: true
	});
    $('.same-height').matchHeight();
});