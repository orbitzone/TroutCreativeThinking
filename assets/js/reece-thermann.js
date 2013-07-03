
$(document).ready(function(){

    if ('ontouchstart' in document) {
	$('body').removeClass('no-touch');
    }

    //Carousel
    $('#mobCarousel').carousel();
    
    var slider = $("#headCarousel") 
	    .carousel({ 
	    	interval: false
		}) 
		.bind('slid', function() { 
			var index = $(this).find(".active").index(); 
			$(this).find(".slider-pager a").removeClass('pager-active').eq(index).addClass('pager-active'); 
			$(this).find(".slider-content-panel").hide().eq(index).fadeIn(); 
    }); 

    $(".slider-pager a").click(function(e){ 
        var index = $(this).index(); 
        slider.carousel(index); 
        e.preventDefault(); 
    }); 

    
    $('#productDetails a').click(function (e) {
	  e.preventDefault();
	  $(this).tab('show');
	});
	
	$('#productDetailsList a').click(function (e) {
	  e.preventDefault();
	  $(this).tab('show');
	}).on('shown', function (e) {
		var tabname = $(this).text();
		$('.activeTab').text(tabname);
	});

    $('.video-wrapper').hover(
	function(){
	    $(this).parent().find('.caption').hide();
	},
	function(){
	    $(this).parent().find('.caption').show();
	}).each(function(){
	if ($(this).is(':visible')) {
	    $(this).find('video').attr('autoplay','autoplay').mediaelementplayer({
		startVolume: 0,
		loop: true,
		enableAutosize: false
	    });
	}
    });

    $('.media-player video').each(function(){
		$(this).mediaelementplayer({
		    success:  function (mediaElement, domObject) {
			mediaElement.addEventListener('ended', function(e){
			    // Revert to the poster image when ended
			    var thisMediaElement = (mediaElement.id) ? jQuery('#'+mediaElement.id) : jQuery(mediaElement);
			    thisMediaElement.parents('.mejs-inner').find('.mejs-poster').show();
			});
		    },
		    enableAutosize: false
		});
    });


    $('#MediaLaunch a.thumbnail').live('click', function(e){
	e.preventDefault();
	$MediaView = $('#MediaView');
	$MediaLoading = $('<div />').attr('id', 'MediaLoading');
	$MediaView.append($MediaLoading);
	$MediaLoading.show();
	$MediaView.find('.inner-content').html(
	    '<img src="'+$('img',this).attr('data-original')+'" alt="thumb" />'+
	    '<div class="caption"><p>'+$('img',this).attr('alt')+'</p></div>'
	    );
	$MediaLoading.fadeOut(function(){
	    $(this).remove();
	});

    });
    /*
    $('#MediaLaunch a.thumbnail').live('click', function(e){
	e.preventDefault();
	$MediaView = $('#MediaView');
	$MediaLoading = $('<div />').attr('id', 'MediaLoading');
	$MediaView.append($MediaLoading);
	$MediaLoading.show();
	$MediaView.find('.inner-content').load($(this).attr('href'), function(){
	    $MediaLoading.fadeOut(function(){
		$(this).remove();
	    });
	});
    });
    */

    if ($("img.lazy").length > 0) $("img.lazy").lazyload();

    //MS - clean up layout on Safari after rendering
    //$(window).load(function(){
    //if ($container.length > 0) $container.isotope('reLayout');
    //});

    // Equalize the heights of grid items
    $('.item-row').each(function(){
	$(this).imagesLoaded(function(){
	    maxHeight = 0;
	    $(this).find('.main-item').each(function(){
		if ($(this).innerHeight() > maxHeight) maxHeight = $(this).innerHeight();
	    });
	    $(this).find('.main-item').css('min-height', maxHeight+'px');
	});
    });

    // Equalize the heights of thumbnails
    $('.thumbnails').each(function(){
	$(this).imagesLoaded(function(){
	    maxHeight = 0;
	    $(this).find('.thumbnail').parent('li').each(function(){
		if ($(this).innerHeight() > maxHeight) maxHeight = $(this).innerHeight();
	    });
	    $(this).find('.thumbnail').parent('li').css('min-height', maxHeight+'px');
	});
    });


    // AJAX PAGE LOAD ANIMATION
    $('a.ajax-slide').live('click', function(e){
	e.preventDefault();
	var $content = $('#MainContentContainer').find('.inner-wrapper').first();
	var $content2 = $content.clone();
	var containerWidth = $('#MainContentContainer').width();
	$content2.css({
	    position: 'relative',
	    left: containerWidth+'px',
	    opacity: 0
	}).hide().appendTo('#MainContentContainer');
	$content.css({
	    position: 'relative'
	}).animate({
	    left: '-'+containerWidth+'px',
	    opacity: 0
	}, 500, function(){
	    $content2.show(function(){
		$content.remove();
		$content2.animate({
		    left: '0px',
		    opacity: 1
		}, 700, function(){
		    $content2.css({
			position: '',
			width: 'auto'
		    });
		});

	    });
	});
    });


    // Fix for the bootstrap dropdown menu failing on touch devices
    $('a.dropdown-toggle, .dropdown-menu a').live('touchstart', function(e) {
	e.stopPropagation();
    });

});