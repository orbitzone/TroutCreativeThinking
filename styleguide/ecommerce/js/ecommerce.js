(function($) {
	$('.reeceAccordion').on('hide.bs.collapse', function (e) {
		$(e.target).parent('.panel').removeClass('active');
	})
	$('.reeceAccordion').on('show.bs.collapse', function (e) {
		$(e.target).parent('.panel').addClass('active');
	})
})(jQuery);