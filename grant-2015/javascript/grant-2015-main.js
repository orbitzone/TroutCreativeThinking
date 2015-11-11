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
	// Find all YouTube videos
var $allVideos = $("iframe[src^='//www.youtube.com']"),

	    // The element that is fluid width
	    $fluidEl = $(".individual-video");

	// Figure out and save aspect ratio for each video
	$allVideos.each(function() {

	  $(this)
	    .data('aspectRatio', 9 / 16)

	    // and remove the hard coded width/height
	    .removeAttr('height')
	    .removeAttr('width');

	});

	// When the window is resized
	$(window).resize(function() {

	  var newWidth = $fluidEl.width();

	  // Resize all videos according to their own aspect ratio
	  $allVideos.each(function() {

	    var $el = $(this);
	    $el
	      .width(newWidth)
	      .height(newWidth * $el.data('aspectRatio'));

	  });

	// Kick off one resize to fix all videos on page load
	}).resize();
});