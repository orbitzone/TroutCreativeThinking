
	$(document).ready(function() {

     //TODO: Rewrite this to be more modular and namespace

		var $carousel = $('[data-bs-carousel]');

		if ($carousel.length != 0) {
			$carousel.swiperight(function() {  
				$carousel.carousel('prev');  
			});
			$carousel.swipeleft(function() {
				$carousel.carousel('next');
			});		

			$.each($carousel, function(index) {
				var interval = $(this).data('bs-carousel-interval'),
					undefined;
				if (interval === undefined) {
					console.log('undefined');
					$(this).carousel();
				}
				else {
					console.log('defined' + interval);
					$(this).carousel({
						interval: parseInt(interval)
					});					
				}
			});
		}

		$(document).on('click.carousel-slide.data-api', '[data-carousel-slide]', function (e) {
			e.preventDefault();
			var $clicked = $(e.currentTarget), href,
				$target = $($clicked.attr('data-target') || (href = $clicked.attr('href')) && href.replace(/.*(?=#[^\s]+$)/, '')),
				id_selector = $clicked.data("carouselSlide");
			   
			id = parseInt(id_selector);
			$target.carousel(id);
		});		

	});  