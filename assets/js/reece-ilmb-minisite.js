$(document).ready(function(){
/*
   // ILMB AJAX Navigation

    $('a.ajax-load').live('click', function(e){
	e.preventDefault();
	var $link = $(this);
	var $target = $('#AjaxTarget');
	var $wrapper = $('#AjaxTargetWrapper');
	$link.parents('ul').find('li').removeClass('active');
	$link.parent().addClass('active');
	$wrapper.css({
	    position: 'relative',
	    height: $target.innerHeight()+'px',
	    overflow: 'hidden'
	});
	$target.fadeOut(function(){
	    $target.load($link.attr('href')+'?load='+Math.random(), function(){
		$('.device-sub-menu').collapse('hide');
		$target.fadeIn(function(){
		    $wrapper.animate({
			height: $target.innerHeight()+'px'
		    }, 500, function(){
			$wrapper.css({
			    position: '',
			    overflow: '',
			    height: ''
			});
		    });
		});
	    });
	});
    });*/

    //$(".triggerme").trigger("click");

    $(".entry-details .thumbs a").live('click', function(e)
    {
    	e.preventDefault();
    	tg = $(this).parent().parent().find(".details-target");
    	tg.attr("src",$(this).attr("href"));
    });

    $(".winnerImages .thumbs a").live('click', function(e)
    {
    	e.preventDefault();

    	tg = $("#winner-target");

    	tg.attr("src",$(this).attr("href"));
	});

});