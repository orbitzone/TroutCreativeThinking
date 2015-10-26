(function($){
	$(function(){
		$('.slides').slick({
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
		$('.video-slides').slick({
			 arrows: false,
			 dots: false,
			 infinite: false
		});		
		$(window).load(function(){
			$('.widget-big-button').matchHeight();			
			$(window).resize();
		});
		$('.slide').each(function(){
			var ratio = $('.brand-pages .container').first().outerWidth()/1170;
			var $text = $(this).find('.text');
			$text.data('font-size',$(this).find('.text').css('font-size'));
			$text.data('width',$(this).find('.text').outerWidth() / ratio);
			var $icon = $(this).find('i');
			$icon.each(function(){
				$(this).data('font-size',$(this).css('font-size'));
			});
		});
		//$(window).resize();
		$(window).on('resize',function(){
			$('.slide').each(function(){
				var ratio = $('.brand-pages .container').first().outerWidth()/1170;
				var $text = $(this).find('.text');
				if($text.length > 0){
					var fontSize = parseInt($text.data('font-size')) * ratio;
					$(this).find('.text').css({
						'font-size': fontSize							
					}).width(parseInt($text.data('width')) * ratio);									
				}
				var $icon = $(this).find('i');
					$icon.each(function(){
						$(this).css({'font-size':parseInt($(this).data('font-size')) * ratio});
					});
			});
			$('[data-height]').each(function(){
				var ratio = $('.brand-pages .container').first().outerWidth()/1170;
				$(this).height($(this).data('height') * ratio);
			});
		
		});
		$('button.play').on('click', function(){
			$(this).parent().parent().parent().parent().slick('slickNext');
		});
		$('button.close').on('click', function(){
			$(this).parent().parent().parent().parent().slick('slickPrev');
		});
    var $allVideos = $("iframe[src^='//player.vimeo.com'], iframe[src^='//www.youtube.com'], object, embed"),
    $fluidEl = $("figure");
		$allVideos.each(function() {
		  $(this)
		    // jQuery .data does not work on object/embed elements
		    .attr('data-aspectRatio', this.width / this.height)
		    .removeAttr('height')
		    .removeAttr('width');

		});
		$(window).resize(function() {
			$fluidEl.height('100%');
		  var newHeight = $fluidEl.height();
		  $allVideos.each(function() {
		    var $el = $(this);
		    $el
		        .height(newHeight)
		        .width(newHeight * $el.attr('data-aspectRatio'));
		  });
		}).resize();
	});
})(jQuery);