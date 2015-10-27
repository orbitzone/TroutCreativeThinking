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
			$('.video-slides').slick({
				 arrows: false,
				 dots: false,
				 infinite: false
			});
			
			$('button.play').on('click', function(){
				$(this).parent().parent().parent().parent().slick('slickNext');
			});
			$('button.close').on('click', function(){
				$(this).parent().parent().parent().parent().slick('slickPrev');
			});
		});
})(jQuery);