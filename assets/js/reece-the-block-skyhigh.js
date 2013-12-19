$(document).ready(function()
{

    $('.room-thumbs a.thumbnail').live('click', function(e)
    {
		e.preventDefault();
		$MediaView = $(this).closest('.theBlockShadowBlocksInner').find('.MediaView');
		$MediaLoading = $('<div />').attr('id', 'MediaLoading');
		$MediaView.append($MediaLoading);
		$MediaLoading.show();

		$MediaView.find('.heroImage').attr("src",$(this).attr("href"));
		/*$MediaView.find('.caption').text($(this).attr("title"));*/

		/*
		$MediaView.find('.inner-content').html
		(
	    	'<img src="'+$('img',this).attr('data-original')+'" alt="thumb" />'+
	    	'<div class="caption"><p>'+$('img',this).attr('alt')+'</p></div>'
	    );
	*/
		$MediaLoading.fadeOut(function(){
		    $(this).remove();
		});

	});
});