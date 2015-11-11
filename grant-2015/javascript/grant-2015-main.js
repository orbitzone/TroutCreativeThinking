var player = {
	autoplay: false,
	active: '',
	obj:{},
	init: function(container, videoId){
		if (typeof(YT) == 'undefined' || typeof(YT.Player) == 'undefined') {
			window.onYouTubeIframeAPIReady = function() {
				player.obj[container] = player.loadPlayer(container, videoId);				
				if(player.autoplay){
  				player.play(container);
  			}
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
  				if(player.autoplay){
    				player.play(container);
    			}
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
	loadPlayer: function(container, videoId){
	 player.active = container;
	 return new YT.Player(container, {
      videoId: videoId,
      width: 790,
      height: 444,
      playerVars: {
        autoplay: player.autoplay,
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
      			player.play(container);
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
$( document ).ready(function() {
	$('.one-article-section.start-closed .expand-article').slideUp();
	$( ".one-article-section .read-more-button.expand-button" ).click(function() {
		$(this).closest('.one-article-section').find('.expand-article').first().slideToggle();
		$( this ).closest('.one-article-section').toggleClass("active");
	});
	$('.homepage-video .landing-video').hide();
	$(".homepage-video .cta-video").click(function(){
		$('.homepage-video .landing-video').fadeIn();
		$('.grant2015-video').attr("src",$('.grant2015-video').attr("data-videoID"));
	});
	$(".homepage-video .close-button").click(function(){
		$('.homepage-video .landing-video').fadeOut();
		$('.grant2015-video').removeAttr("src");
	});
	$('.person-video').slick();
	$('.person-video .play-button-wrapper').on('click', function(){
		$('.person-video').slick('slickNext');
		var player_container = $('#the-player');
		var video = player_container.data('video');
		console.log(video);
		if(video){
			player.autoplay = true;
			player.init('the-player',video);
		}
	});
});

