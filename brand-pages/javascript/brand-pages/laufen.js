(function($){
	$(function(){
			$('.slides').slick({
				 slidesToShow: 3,
				 slidesToScroll: 3,
				 arrows: true,
				 dots: false,
				 infinite: false,
				 responsive: [
				 {
				 	breakpoint: 768,
				 	settings: {
				 		slidesToShow: 2,
				 		slidesToScroll: 2,
				 		arrows: false,
				 		dots: true
				 	}
				 }]
			});			
		});
})(jQuery);