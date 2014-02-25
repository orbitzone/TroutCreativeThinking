$(document).ready(function(){
    
    $('.ocmain-wrapper').unbind('swiperight').bind('swiperight', function(){
	$('body').removeClass('off-canvas-open');
    });
    
    $(".navbar .btn-navbar").unbind('click').bind('click',function(){
	if ($('body').hasClass('off-canvas-open')) {
	    $('body').removeClass('off-canvas-open');
	} else {
	    $('body').addClass('off-canvas-open');
	}
    });
    
});
