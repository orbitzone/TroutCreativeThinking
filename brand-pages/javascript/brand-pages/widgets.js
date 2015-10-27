var player = {
	autoplay: false,
	active: '',
	obj:{},
	init: function(container, videoId){
		if (typeof(YT) == 'undefined' || typeof(YT.Player) == 'undefined') {
			window.onYouTubeIframeAPIReady = function() {
				player.obj[container] = player.loadPlayer(container, videoId);					
      };
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
  				if(player.autoplay){
    				player.play(container);
    			}
    		}
    	}else{
      	player.obj[container] = player.loadPlayer(container, videoId)	;     
    	}
    }
	},
	loadPlayer: function(container, videoId, autoplay){
	if(typeof autoplay === "undefined"){
		autoplay = false;
		player.autoplay = false;
	}else{
		player.autoplay = true;
	}
	 
	 player.active = container;
	 return new YT.Player(container, {
      videoId: videoId,
      width: 790,
      height: 444,
      playerVars: {
        autoplay: player.autoplay,
        rel: 0
        /*controls: 0,
        modestbranding: 1,
        rel: 0,
        showInfo: 0*/
      },
      events: {
      	'onReady': function(event){
      		console.log(player.autoplay);
      		if(player.autoplay == true){
      			player.play(container);
      		}
      		$(window).on('resize', function(){
      			var $iframe = $('#'+container);
    				$iframe.width($('#'+container).parent().width());
    				$iframe.height($('#'+container).parent().width()* 9/16);
      		}).resize();
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
		video.playVideo();
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
			$('.widget-video-tabs').each(function(){
				$(this).find('.tab-block').each(function(){
					var player_container = 'widget-player-'+m;
					$(this).find('.player').attr('id',player_container);

					$(this).find('.video').on('click', function(){
						var video = $(this).find('figure').data('video');
						player.init(player_container,video);
					});	
					m=m+1;				
				});
				var container = $(this);
				$(this).find('.tabs-list a').on('click', function(){
					player.stop();
					container.find('.tabs-list a').removeClass('active');
					container.find('.tab-block').removeClass('active');
					$(this).addClass('active');
					$($(this).attr('href')).addClass('active');
					var current = $($(this).attr('href')).find('.video').first().trigger('click');
					container.find('.tabs-videos-slider').slick('setPosition');
					//container.find('.tabs-videos-slider').get(0).slick.setPosition();
					$(window).resize();
					return false;
				});			
			});
			$('.widget-video-tabs').find('.tab-block.active').find('.video').first().trigger('click');
		}
	};
	widgets.init();