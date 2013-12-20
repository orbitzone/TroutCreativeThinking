$(document).ready(function()
{
    $('.room-thumbs a.thumbnail').live('click', function(e)
    {
		e.preventDefault();
		$parent = $(this).closest('.theBlockShadowBlocksInner')
		$parent.find('a.thumbnail').removeClass('active');
		$(this).addClass('active');
		$MediaView = $parent.find('.MediaView');
		$MediaLoading = $('<div />').attr('id', 'MediaLoading');
		$MediaView.append($MediaLoading);
		$MediaLoading.show();
		$MediaView.find('.heroImage').attr("src",$(this).attr("href"));
		$MediaLoading.fadeOut(function(){
		    $(this).remove();
		});

	});
});