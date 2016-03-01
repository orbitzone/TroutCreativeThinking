var player = {
	autoplay: false,
	active: '',
	obj:{},
	init: function(container, videoId){
		window.onYouTubeIframeAPIReady = function() {
			player.obj[container] = player.loadPlayer(container, videoId);				
		};
		if (typeof(YT) == 'undefined' || typeof(YT.Player) == 'undefined') {
			//This code loads the IFrame Player API code asynchronously.
			var tag = document.createElement('script');
			tag.src = "https://www.youtube.com/iframe_api";
			var firstScriptTag = document.getElementsByTagName('script')[0];
			firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
    } else {
    	if(typeof player.obj[container] !== 'undefined'){
    		var video = player.obj[container];
  			if(video.getVideoData().video_id != videoId){
  				player.obj[container].loadVideoById(videoId);  				
  			}else{
  				if(player.autoplay == true){
    				player.play(container);
    			}
    		}
    	}else{
      	player.obj[container] = player.loadPlayer(container, videoId)	;     
    	}
    }
	},
	loadPlayer: function(container, videoId){
	 player.active = container;
	 return new YT.Player(container, {
      videoId: videoId,
      width: 790,
      height: 444,
      playerVars: {
        showinfo: 0,
        modestbranding: 0,
        rel: 0
        /*controls: 0,
        modestbranding: 1,
        rel: 0,
        showInfo: 0*/
      },
      events: {
      	'onReady': function(event){
      		if(player.autoplay == true){
      			setTimeout(function(){
							player.play(container);
      			},500);      			
      		}
      		$(window).resize();      		
      	},
      	'onStateChange': function(event){
      		if(event.data == YT.PlayerState.PLAYING){
    				$.each(player.obj, function(key){
    					if(key != event.target.m.id){
								if(typeof player.obj[key].stopVideo !== "undefined"){
							  	player.obj[key].stopVideo();		  	      
								}
							}
						});
    			}
      	}
      }
    });
	},
	play: function(id){
		var video = player.obj[id];
		if(typeof video.playVideo !== "undefined"){
			video.playVideo();
		}
	},
	stop: function(id){
		if(typeof id !== "undefined"){
			var video = player.obj[id];
			if(typeof video.stopVideo !== "undefined"){
		  	video.stopVideo();		  	      
			}else{
				player.autoplay = false;
			}
		}else{
			$.each(player.obj, function(key){
				if(typeof player.obj[key].stopVideo !== "undefined"){
			  	player.obj[key].stopVideo();		  	      
				}				
			});
		}
	}
};
var widgets = {
	init: function(){
		widgets.videoWidget();
		widgets.videoCollectionWidget();
		widgets.tabsWidget();
		widgets.sliderWidget();
		widgets.bigButtonWidget();

		$('.widget-slider, .widget-video, .widget-video-tabs').each(function(){
			var $text = $(this).find('.text');
			$text.data('font-size',$(this).find('.text').css('font-size'));
			$text.attr('data-width',$(this).find('.text').width());
			var $icon = $(this).find('i');
			if($icon.length > 0){
				$icon.each(function(){
					$(this).data('font-size',$(this).css('font-size'));
				});
			}
			var $label = $(this).find('.label');
			if($label.length > 0){
				$label.each(function(){
					$(this).data('font-size', $(this).css('font-size'));
				});
			}
		});
		$(window).on('resize', function(){
			var ratio = $('.brand-pages .container').first().outerWidth()/1170;
			$('.widget-slider, .widget-video-tabs').not('.carousel').each(function(){
				var $text = $(this).find('.text');
				if($text.length > 0){
					var fontSize = parseInt($text.data('font-size')) * ratio;
					if(fontSize < 12){
						fontSize = 12;
					}
					$(this).find('.text').css({
						'font-size': fontSize							
					});
					if($(this).hasClass('widget-slider widget-video')){
						if($(this).find('.text').parent().prop('tagName').toLowerCase() != "button"){
							$(this).find('.text').width(parseInt($text.data('width')) * ratio);					
						}				
					}
				}
				var $icon = $(this).find('i');
				if($icon.length > 0){
					$icon.each(function(){
						var fontSize = (parseInt($(this).data('font-size')) * ratio);
						if(fontSize < 12){
							fontSize = 12;
						}
						$(this).css({'font-size':fontSize});	
					});
				}
				var $label = $(this).find('.label');
				if($label.length > 0){
					$label.each(function(){
						var fontSize = (parseInt($(this).data('font-size')) * ratio);
						if(fontSize < 12){
							fontSize = 12;
						}
						$(this).css({'font-size':fontSize});	
					});
				}
			});
		}).resize();		
	},
	bigButtonWidget: function(){
			$('.widget-big-button').matchHeight();			
			$(window).resize();		
	},
	sliderWidget: function(){
		$('.slides').each(function(){
			$(this).slick({
				 slidesToShow: $(this).data('slides-to-show') ? $(this).data('slides-to-show'): 1,
				 slidesToScroll: $(this).data('slides-to-scroll') ? $(this).data('slides-to-scroll'): 1,
				 arrows: true,
				 dots: false,
				 infinite: false,
				 responsive: [
				 {
				 	breakpoint: 768,
				 	settings: {
				 		slidesToShow: ($(this).data('slides-to-show') == 1) ? 1: 2,
				 		slidesToScroll: ($(this).data('slides-to-scroll') == 1) ? 1: 2,
				 		arrows: false,
				 		dots: true
				 	}
				 }]
			});			
		});		
	},
	videoWidget: function(){
		$('.video-slides').slick({
			 arrows: false,
			 dots: false,
			 infinite: false,
			 swipe: false,
			 adaptiveHeight: true
		});
		var m = 0;
		$('.widget-video').each(function(){
		var player_container = 'widget-video-player-'+m;
			$(this).find('.player').attr('id', player_container);
			var parent = $(this).find('.video-slides');
			$(this).find('.play').on('click', function(){
				var video = $(this).data('video');
				parent.slick('slickNext');
				if(video){
					player.autoplay = true;
					player.init(player_container,video);
				}
			});
			
			$(this).find('.video-slides').on('setPosition', function(slick){
				$(this).find('.slide-video').height('auto');
				var mainHeight = $(this).find('.slide-front').height();
				if(mainHeight > $(this).find('.slide-video').height()){
					$(this).find('.slide-video').height(mainHeight);
					$(this).find('.video-wrapper').addClass('centered');
				}else{
					$(this).find('.video-wrapper').removeClass('centered');
				}				
			});
			$(this).find('.close').on('click', function(){
				player.stop();
				parent.slick('slickPrev');
			});
			m=m+1;
		});		
	},
	videoCollectionWidget: function(){
		$('.video-collection-slides').slick({
			 arrows: true,
			 dots: false,
			 infinite: false,
			 swipe: true,
			 adaptiveHeight: true
		});
		var vc = 0;
		$('.widget-video-collection').each(function(){
			var slider = $(this).find('.video-collection-slides');
			var totalSlides = $(this).find('.slide').length;
			$(this).find('.slide').each(function(){
				var player_container = 'widget-video-collection-player-'+vc;	
				vc++;
				$(this).find('.player').attr('id', player_container);
				$(this).find('.play').on('click', function(){
					var video = $(this).data('video');
					if(video){
						player.autoplay = true;
						player.init(player_container,video);
						$(this).parent().parent().find('.image').fadeTo(300,0);
						$(this).parent().parent().find('.close').slideDown(300);
						$(this).fadeTo(300,0);
					}
				});

				$(this).find('.close').on('click', function(){
					player.stop();
					$(this).parent().parent().parent().find('.image').fadeTo(300,1);
					$(this).parent().parent().parent().find('.play').fadeTo(300,1);
					$(this).slideUp(300);
				});
			});
			slider.on('beforeChange', function(){
				player.stop();	
				$('.video-collection-slides .image').fadeTo(300,1);
				$('.video-collection-slides .play').fadeTo(300,1);
				$('.video-collection-slides .close').slideUp(300);
			});
			
			
			/*$(this).find('.play').on('click', function(){
				var video = $(this).data('video');
				parent.slick('slickNext');
				if(video){
					player.autoplay = true;
					player.init(player_container,video);
				}
			});*/
			
		});
		$(window).on('resize', function(){
			$('.widget-video-collection').each(function(){
				var height = $(this).find('.video-collection-slides .rte').outerHeight();
				$(this).find('.slick-arrow').css({
					marginTop: (height/2)+"px"
				});
			});
		});
	},
	tabsWidget: function(){
		var m = 1;
		$('.tabs-videos-slider').slick({
			arrows:false,
			dots: true,
			infinite: false,
			slidesToShow: 3,
			slidesToScroll: 3,
			responsive: [
			{
					breakpoint: 768,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 2
					}
				}	
				]			
		});
		var timeout;
		$(window).resize(function() {
		  $('.tabs-videos-slider').slick('slickGoTo', 0);
		});

		$('.widget-video-tabs').each(function(){
			var container = $(this);
			$(this).find('.tab-block').each(function(){
				var player_container = 'widget-video-tabs-player-'+m;
				$(this).find('.player').attr('id',player_container);
				$(this).find('.video').on('click', function(){
					if($(this).hasClass('active')){
						player.autoplay = false;
						player.stop();
						container.find('.video').removeClass('active');
						$('.icon-play').show();
						$('.icon-playing').hide();
						$('.widget-video-tabs').find('.main').hide();
						$('.widget-video-tabs').find('.moodboard').show();
					}else{
						player.autoplay = true;
						container.find('.moodboard').hide();
						container.find('.main').show();
						$('.icon-play').show();
						$('.icon-playing').hide();
						container.find('.video').removeClass('active');
						$(this).addClass('active');
						$(this).find('.icon-play').hide();
						$(this).find('.icon-playing').show();
						var video = $(this).find('figure').data('video');
						player.init(player_container,video);
					}
				});	
				m=m+1;				
			});
			$(this).find('.active-menu .show-more').on('click',function(){
				$(this).toggleClass('active');
				$(this).parent().parent().find('ul').slideToggle();
			});
			$(this).find('.tabs-list a').on('click', function(){
				player.stop();
				player.autoplay = false;
				$('.widget-video-tabs').find('.main').hide();
				$('.widget-video-tabs').find('.moodboard').show();
				container.find('.tabs-list a').removeClass('active');
				container.find('.tab-block').removeClass('active');
				var text = $(this).text();
				$(this).parent().parent().parent().find('.text').text(text);
				if($(window).width() < 768){
					$(this).parent().parent().slideUp();
				}
				$('.icon-play').show();
				$('.icon-playing').hide();
				$(this).addClass('active');
				$($(this).attr('href')).addClass('active');
				//var current = $($(this).attr('href')).find('.video').first().trigger('click');
				container.find('.tabs-videos-slider').slick('setPosition');
				//container.find('.tabs-videos-slider').get(0).slick.setPosition();
				$(window).resize();
				return false;
			});			
		});
		//$('.widget-video-tabs').find('.tab-block.active').find('.video').first().trigger('click');
	}
};
$(function(){
	widgets.init();
});	