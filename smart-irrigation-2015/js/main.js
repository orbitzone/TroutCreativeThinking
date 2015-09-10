$( document ).ready(function() {
    $('.slider').slick({
	  infinite: true,
	  prevArrow: '<span class="fa fa-chevron-left slick-prev"></span>',
	  nextArrow: '<span class="fa fa-chevron-right slick-next"></span>',
	  dots: true,
	  responsive: [
	    {
	      breakpoint: 768,
	      settings: {
	        arrows: false,
	      }
	    }
	  ]

	});
    $('.vertical-slider').slick({
	  vertical: true,
	  dots: true,
	  arrows: false
	});
    $('.same-height').matchHeight();
});