$( document ).ready(function() {
	$('.one-article-section.start-closed .expand-article').slideUp();
	$( ".one-article-section .read-more-button.expand-button" ).click(function() {
		$(this).closest('.one-article-section').find('.expand-article').first().slideToggle();
		$( this ).closest('.one-article-section').toggleClass("active");
	});
	$('.homepage-video .landing-video').hide();
	$(".homepage-video .cta-video").click(function(){
		$('.homepage-video .landing-video').fadeIn();
		$('.grant2015-video').attr("src",$('.grant2015-video').attr("data-videoID"));
	});
	$(".homepage-video .close-button").click(function(){
		$('.homepage-video .landing-video').fadeOut();
		$('.grant2015-video').removeAttr("src");
	});
	$('.person-video').slick();
	$('.person-video .play-button-wrapper').on('click', function(){
		$('.person-video').slick('slickNext');
	});
});