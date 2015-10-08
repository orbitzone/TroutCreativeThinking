$( document ).ready(function() {
    




$('.one-article-section.start-closed .expand-article').slideUp();






$( ".one-article-section .read-more-button.expand-button" ).click(function() {

	$(this).closest('.one-article-section').find('.expand-article').first().slideToggle();
  	$( this ).closest('.one-article-section').toggleClass("active");
});
































});