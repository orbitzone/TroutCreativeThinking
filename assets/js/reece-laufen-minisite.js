$(document).ready(function(){
   
    // Activate any carousels
    $('.carousel').carousel();
    
    // Initiate the Lightbox
    $('.video-link').fancybox({
	maxWidth	: 800,
	maxHeight	: 450,
	minHeight	: 180,
	fitToView	: false,
	width		: '85%',
	height		: '65%',
	autoSize	: false,
	closeClick	: false
    });
   
    // AJAX Product Navigation
    // This is TEMPORARY
    // Just used to simulate a dynamic template environment
    // This code can be removed, and any references to .ajax-load in the HTML also
    
    $('a.ajax-load').live('click', function(e){
	e.preventDefault();
	var $link = $(this);
	var $target = $link.parents('.tab-pane');//('#laufen-products');
	var $wrapper = $('#TabContent');
	$wrapper.css({
	    position: 'relative', 
	    height: $target.innerHeight()+'px', 
	    overflow: 'hidden'
	});
	$target.fadeOut(function(){
	    $target.load($link.attr('href'), function(){
		$target.fadeIn(function(){
		    $wrapper.animate({
			height: $target.innerHeight()+'px'
		    }, 500, function(){
			$wrapper.css({
			    position: '', 
			    overflow: '', 
			    height: ''
			});
			$target.css({
			    display: '' 
			});
		    });
		});
	    });
	});
    });
    
});