// Check for support
var Timeline = function() {
	window.TT = this;
	TT.hasTouch = Modernizr.touch;
	TT.smallScreen = $(window).width() < 800;
	TT.minHeight = 800;
	TT.maxHeight = 1050;
	TT.container = '#timeline';
	TT.html = '';
	TT.ajax = {
		full: 'history/ajax-history-full.php',
		small: 'history/ajax-history-images.php'
	};
	TT.skrollrConfig = {
		smoothScrolling : true,
		smoothScrollingDuration: 2000,
		mobileCheck : function() {
			return false; // disable for mobile
		}
	};
};
Timeline.prototype.SkrollrSetup = function () {
	if (TT.smallScreen || TT.hasTouch) return;
	TT.skrollr = skrollr.init(TT.skrollrConfig).refresh();
};
Timeline.prototype.SetHeights = function () {
	var win_height = $(window).height()*0.8;
	if (win_height > TT.minHeight && win_height < TT.maxHeight) {
		$(TT.container).find('section').css('min-height', win_height);
	}
};
Timeline.prototype.GetHTML = function() {
	if (TT.hasTouch || TT.smallScreen) {
		$.get(TT.ajax.small)
			.done(
					function (data, textStatus, jqXHR) {
						$(TT.container).empty().html(data);
						// $('body').css('overflow', 'auto');
						// console.log(skrollr);
				}
			);
	}
	else {
		$.get(TT.ajax.full)
			.done(
				function (data, textStatus, jqXHR) {
					$(TT.container).empty().html(data);
				}
			)
			.then(
				function() {
					TT.SetHeights();
				}
			)
			.then(
				function() {
					//TT.SkrollrSetup();
				}
			);
	}
};

$(document).on('ready', function() {

	// Init timeline object
	var timeline = new Timeline();
	timeline.GetHTML();

});


$(document).ready(function(){

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

