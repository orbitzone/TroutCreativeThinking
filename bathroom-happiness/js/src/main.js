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
  init: function(container, videoId, onReady, playerVars){
    if (typeof(YT) == 'undefined' || typeof(YT.Player) == 'undefined') {
      window.onYouTubeIframeAPIReady = function() {
        player.obj[container] = {
          player: player.loadPlayer(container, videoId, onReady, playerVars),
          vars: playerVars 
        };
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
          player.obj[container].player.loadVideoById(videoId);     
          if(player.autoplay && !isMobile.any()){
            player.play(container);
          }
        }else{
          if(player.autoplay && !isMobile.any()){
            player.play(container);
          }
        }
      }else{
        player.obj[container] = {
          player: player.loadPlayer(container, videoId, onReady, playerVars),
          vars: playerVars 
        };        
      }
    }
  },
  loadPlayer: function(container, videoId, onReady, playerVars){
   player.active = container;
   if(typeof playerVars === 'undefined'){
      playerVars = {
        showinfo: 0,
        modestbranding: 0,
        rel: 0
        /*'loop': 1,
        'mute':1
        /*controls: 0,
        modestbranding: 1,
        rel: 0,
        showInfo: 0*/
      };
   }
   var defaults = {
      videoId: videoId,
      width: 790,
      height: 444,
      playerVars: playerVars,
      events: {
        onReady: function(event){
          if(player.autoplay == true  && !isMobile.any()){
            console.log(defaults.playerVars.mute)
            if(typeof defaults.playerVars.mute !== 'undefined'){
              player.play(container,defaults.playerVars.mute);
            }else{
              player.play(container);
            }
          }
          if(typeof onReady === 'function'){
            setTimeout(function(){onReady();},500);
          }
          $(window).resize();     
        },
        onStateChange: function(event){
          if(event.data == YT.PlayerState.PLAYING){                        
            $.each(player.obj, function(key){
              if(key != event.target.c.id){
                if(typeof player.obj[key].player.stopVideo !== "undefined"){
                  if(typeof player.obj[key].playerVars.loop !== 'undefined'){
                    player.obj[key].player.stopVideo();
                  }
                }
              }
            });
          }
          if (event.data === YT.PlayerState.ENDED && playerVars.loop == 1) {
            player.obj[container].player.playVideo(); 
          }
        }
      }
    };
    if(typeof playerVars !== 'undefined'){
      defaults.playerVars = playerVars;
    }
   return new YT.Player(container, defaults);
  },
  play: function(id, mute){
    var video = player.obj[id].player;
    if(typeof video.playVideo !== "undefined"){
      if(typeof mute !== 'undefined'){
        if(mute){
          video.mute();
        }
      }
      video.playVideo();      
    }
  },
  stop: function(id){
    if(typeof id !== "undefined"){
      var video = player.obj[id].player;
      if(typeof video.stopVideo !== "undefined"){
        video.stopVideo();              
      }else{
        player.autoplay = false;
      }
    }else{
      $.each(player.obj, function(key){
        if(typeof player.obj[key].player.stopVideo !== "undefined"){
          player.obj[key].player.stopVideo();              
        }       
      });
    }
  }
};
var bathroomHappiness = {
  init: function(){
    if(isMobile.any() == true){
      $('body').addClass('mobile');
    }else{
      $('body').addClass('desktop');
    }
    if($('body').hasClass('homepage')){
      this.homepage();
    }
    if($('body').hasClass('inspiration')){
      this.inspiration();
    }
    if($('body').hasClass('trends')){
      this.trends();
    }
    if($('body').hasClass('water-therapy')){
      this.waterTherapy();
    }
  },
  homepage: function(){
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
  },
  inspiration: function(){
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
        var vars = {
          showinfo: 0,
          modestbranding: 0,
          rel: 0,
          loop: 1,
          mute: 1
        };
        player.autoplay = true;
        player.init(player_container,video, function(){
          $('#water-therapy-video').parent().parent().addClass('ready');  
          $('#water-therapy-video').addClass('ready');
        }, vars);            
      }           
    }else{
      $('#water-therapy-video').addClass('ready');
      if(isMobile.any()){
        $('#water-therapy-video').remove();
      }
    }
  },
  trends: function(){

  },
  waterTherapy: function(){
    $('#water-therapy .slides').slick({
      arrows: false,
      dots: true
    });
    $('.submenu button').on('click', function(){
      $('.submenu li').removeClass('active');
      $(this).parent().addClass('active');
      var section = $(this).text().toLowerCase();
      $('#water-therapy-content').attr('class',section);
    });
  }
};
(function ($) {
  $(function () {
    bathroomHappiness.init();
  });
})(jQuery);
