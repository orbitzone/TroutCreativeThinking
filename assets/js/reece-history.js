$(document).ready(function(){
	var s = skrollr.init();

	function goToByScroll(id){
        $('html,body').animate({scrollTop: $("#"+id).offset().top}, 1500);
	}
	$('.nav-history a').click(function(e){
		var id = $(this).attr("href").substring(1);
		goToByScroll(id);
		e.preventDefault();
	});

	$('body').scrollspy({ target: '.nav-history' });


});
