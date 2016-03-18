$( document ).ready(function() {
    

$('.expand-collapse').click(function(){
	$(this).parents('.section-box').toggleClass('active');
	$(this).parents('.section-box').children('.one-section').slideToggle();

});




});