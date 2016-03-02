var isMobile = {
    Windows: function() {
        return /IEMobile/i.test(navigator.userAgent);
    },
    Android: function() {
        return /Android/i.test(navigator.userAgent);
    },
    BlackBerry: function() {
        return /BlackBerry/i.test(navigator.userAgent);
    },
    iOS: function() {
        return /iPhone|iPad|iPod/i.test(navigator.userAgent);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Windows());
    }
};
var isIE = function(){
  var sAgent = window.navigator.userAgent;
  var Idx = sAgent.indexOf("MSIE");

  // If IE, return version number.
  if (Idx > 0){
    return parseInt(sAgent.substring(Idx+ 5, sAgent.indexOf(".", Idx)));
  }
  // If IE 11 then look for Updated user agent string.
  else if (!!navigator.userAgent.match(/Trident\/7\./)){
    return 11;
  }
  else{
    return false; //It is not IE
  }
};
var player = {
  autoplay: false,
  active: '',
  ready: false,
  obj:{},
  init: function(container, videoId, onReady){
    if (typeof(YT) == 'undefined' || typeof(YT.Player) == 'undefined') {
      window.onYouTubeIframeAPIReady = function() {
        player.obj[container] = player.loadPlayer(container, videoId, onReady);        
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
          if(player.autoplay && !isMobile.any()){
            player.play(container);
          }
        }else{
          if(player.autoplay && !isMobile.any()){
            player.play(container);
          }
        }
      }else{
        player.obj[container] = player.loadPlayer(container, videoId, onReady) ;     
      }
    }
  },
  loadPlayer: function(container, videoId, onReady){
   player.active = container;
   return new YT.Player(container, {
      videoId: videoId,
      width: 790,
      height: 444,
      playerVars: {
        showinfo: 0,
        modestbranding: 0,
        rel: 0,
        'loop': 1,
        'mute':1
        /*controls: 0,
        modestbranding: 1,
        rel: 0,
        showInfo: 0*/
      },
      events: {
        onReady: function(event){
          if(player.autoplay == true  && !isMobile.any()){
            player.play(container);
          }
          if(typeof onReady === 'function'){
            setTimeout(function(){onReady();},500);
          }
          $(window).resize();         
        },
        onStateChange: function(event){
          console.log(event.data);
          if(event.data == YT.PlayerState.PLAYING){                        
            $.each(player.obj, function(key){
              if(key != event.target.c.id){
                if(typeof player.obj[key].stopVideo !== "undefined"){
                  player.obj[key].stopVideo();              
                }
              }
            });
          }
          if (event.data === YT.PlayerState.ENDED) {
            player.obj[container].playVideo(); 
          }
        }
      }
    });
  },
  play: function(id){
    var video = player.obj[id];
    if(typeof video.playVideo !== "undefined"){
      video.mute();
      video.playVideo();      
    }
  },
  stop: function(id){
    console.log('stop');
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
(function ($) {
  $(function () {
    if(isMobile.any() == true){
      $('body').addClass('mobile');
    }else{
      $('body').addClass('desktop');
    }
    $('.subscribe-form').validate();

    $('.panel-slideshow').each(function () {
      var $arrows = $(this).find('.slideshow-buttons');
      $(this).find('.slideshow-container').slick({
        appendArrows: $arrows,
        responsive:[
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            infinite: true
          }
        },
        {
          breakpoint: 460,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true
          }
        }]
      });
    });
    $('.panel-slideshow').each(function(){
        var section= $(this).data('section');
        $(this).find('.slideshow-container a').on('mouseover', function(){
          $('.'+section).addClass('hover');
        }).on('mouseout', function(){
          $('.'+section).removeClass('hover');
        });
    });
    if($('body').hasClass('inspiration')){
        var video = $('.block.water-therapy .video').data('video');
        $(window).on('resize', function(){
          var height = $('.blocks .water-therapy .content').height();
          var width = 16 * height/9;
          $('#water-therapy-video').width(width);
          $('#water-therapy-video').height(height + 200);          
        }).resize();
        // When the player is ready, add listeners for pause, finish, and playProgress
        if(!isMobile.any()){
          var player_container = 'water-therapy-video';
          if(video){
            player.autoplay = true;
            player.init(player_container,video, function(){
              $('#water-therapy-video').parent().parent().addClass('ready');  
              $('#water-therapy-video').addClass('ready');
            });            
          }           
        }else{
          $('#water-therapy-video').addClass('ready');
          if(isMobile.any()){
            $('#water-therapy-video').remove();
          }
        }
    }
  });
})(jQuery);
