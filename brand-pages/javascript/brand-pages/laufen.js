(function($){
	$(function(){
			$('.slides').slick({
					slidesToShow: 3,
				 arrows: true,
				 dots: false,
				 infinite: false,
				 responsive: [
				 {
				 	breakpoint: 768,
				 	settings: {
				 		arrows: false,
				 		dots: true
				 	}
				 }]
			});
		});
})(jQuery);