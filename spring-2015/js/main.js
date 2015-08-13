var loveFamily = {};
jQuery(function($){

	loveFamily = {
		init: function(){
			$.ajax({
				cache: false,
				url:'pages/family/collection-intro.html',
				success: function(data){
					$('#main-content').html(data);
					loveFamily.bathroomsForInspiration();
				}
			});
		},
		bathroomsForInspiration: function(){
			$.ajax({
				cache: false,
				url: 'pages/family/bathrooms-for-inspiration.html',
				success: function(data){
					$('#main-content').append(data);
					
					$('.products-slide').slick({
						slidesToShow: 4,
  					slidesToScroll: 4,
  					infinite: false,
					 	responsive: [
					    {
					      breakpoint: 768,
					      settings: {
					        arrows: false,
					        slidesToShow: 2,
					        slidesToScroll: 2
					      }
					    },
					    {
					      breakpoint: 480,
					      settings: {
					        arrows: false,
					        slidesToShow: 1,
					        slidesToScroll: 1
					      }
					    }
					  ]
					});
					$(window).on('resize',function(){
						$('.part').matchHeight();
						$('button.circular').matchHeight();
					});
					$('#main-content img').load(function(){
						$(window).resize();
					});
				}
			});
		},
		showHotspotData: function(obj){
			var spot = $(obj).data("spot");
			$(obj).toggleClass('active');
			if($(obj).hasClass('active')){
				var top = $(obj).position().top + $(obj).height()+10;
				var left = $(obj).position().left - ($('.hotspot-data.spot-'+spot).width()/2) + ($(obj).height()/2);
				$('.hotspot-data.spot-'+spot).css(
				{
					top: top,
					left: left
				})
				$('.hotspot-data.spot-'+spot).fadeIn();
			}else{
				$('.hotspot-data.spot-'+spot).fadeOut();
			}
		}
	}
	var homePage = {
		init: function(){
			$.ajax({
				cache: false,
				url:'pages/homepage.html',
				success: function(data){
					$('#main-content').html(data);					
				}
			});
		}
	}
	if($('body').hasClass('homepage')){
		homePage.init();	
	}
	if($('body').hasClass('love-family')){
		loveFamily.init();
	}	

	$(document).on('click','.load_page',function(){
		var data = { section: $(this).data('section')};
		var url = $(this).attr('href');
		history.pushState(data, null, url);
		$('body').attr('class','spring-2015 '+$(this).data('section'));
		requestContent($(this).data('section'));
		return false;
	});
	function requestContent(section) {
		if(section == null){
			homePage.init();
		}
	  if(section == 'love-family'){
	  	loveFamily.init();
	  }
	}
	window.addEventListener('popstate', function(e) {
	  var section = e.state.section;
    requestContent(section);
    document.title = 'Title';
	});
	$(document).on('mouseover','.hex',function(){
		TweenMax.to($(this),0.5,{scale: 1.2});
	});
	$(document).on('mouseout','.hex',function(){
		TweenMax.to($(this),0.5,{scale: 1});
	});
});