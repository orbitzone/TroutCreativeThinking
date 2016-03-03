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
/*playerVars = {
        showinfo: 0,
        modestbranding: 0,
        rel: 0
        'loop': 1,
        'mute':1
        controls: 0,
        modestbranding: 1,
        rel: 0,
        showInfo: 0
      };*/
var playerManager = {
  players: {},
  active: '',
  activate: function(container){
    this.active = container;
  },
  getActive: function(){
    return this.players[this.active];
  },
  add: function(player, settings){
    this.players[settings.container] = {
      player: player,
      settings: settings
    };
  },
  play: function(container){
   /* if(typeof this.players[container] !== 'undefined'){
      var player = this.players[container].player;
      if(player.getVideoData().video_id != player.settings.videoId){
        this.players[container].player.loadVideoById(player.settings.videoId);     
        if(player.settings.autoplay && !isMobile.any()){
          player.play(player.settings.container);
        }
      }else{
        if(player.settings.autoplay && !isMobile.any()){
          player.play(container);
        }
      }
      return true;
    }else{
      return false;
    }*/
    var video = this.players[container].player;
    var settings = this.players[container].settings;
    if(typeof video.playVideo !== "undefined"){
      if(settings.mute){
        video.mute();
      }
      video.playVideo();      
    }
  },
  pause: function(container){
    if(this.exists(container)){
      var video = this.players[container].player;
      if(typeof video.pauseVideo !== "undefined"){
        video.pauseVideo();              
      }
    }
  },
  stop: function(container){
    if(this.exists(container)){
      var video = this.players[container].player;
      if(typeof video.stopVideo !== "undefined"){
        video.stopVideo();              
      }else{
        this.getActive().settings.autoplay = false;
      }
    }else{
     /* var $this = this;
      $.each(this.players, function(key){
        if(typeof $this.players[key].player.stopVideo !== "undefined"){
          $this.players[key].player.stopVideo();             
        }       
      });*/
    }
  },
  onChangeState: function(event){
    var id = event.target.c.id;
    var current = this.players[id];
    if (event.data === YT.PlayerState.ENDED && current.settings.loop == 1) {
      this.players[current.settings.container].player.playVideo(); 
    }
    if (event.data === YT.PlayerState.PLAYING){
      if(typeof current.settings.onPlaying === 'function'){
        current.settings.onPlaying();
      }
    }
    if (event.data === YT.PlayerState.PAUSED){
      if(typeof current.settings.onPaused === 'function'){
        current.settings.onPaused();            
      }
    }
    if (event.data === YT.PlayerState.BUFFERING){
      if(typeof current.settings.onBuffering === 'function'){
        current.settings.onBuffering();            
      }
    }
    if (event.data === YT.PlayerState.ENDED){
      if(typeof current.settings.onEnded === 'function'){
        current.settings.onEnded();
      }
    }
  },
  exists: function(container){
    if(typeof this.players[container] !== 'undefined'){
      return true;
    }else{
      return false;
    }
  },
  remove: function(container){

  }
};
var player = {
  settings: {
    container: '',
    videoId: '',
    playerVars: {
      showinfo: 0,
      modestbranding: 0,
      rel: 0
    },
    autoplay: false,
    loop: false,
    mute: false,
    onReady: function(){},
    onEnded: function(){},
    onPaused: function(){},
    onBuffering: function(){},
    onPlaying: function(){}
  },
  ready: false,
  obj:{},
  init: function(settings){
    this.settings = $.extend({}, this.settings, settings);
    var initialPlayer =  this;
    if (typeof(YT) == 'undefined' || typeof(YT.Player) == 'undefined') {
      window.onYouTubeIframeAPIReady = function() {
        playerManager.add(initialPlayer.loadPlayer(), settings);        
      };
      //This code loads the IFrame Player API code asynchronously.
      var tag = document.createElement('script');
      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
    } else {
      if(!playerManager.exists(this.settings.container)){
        playerManager.add(this.loadPlayer(), settings);
      }else{
        playerManager.play(this.settings.container);
      }
    }
  },
  loadPlayer: function(){
   playerManager.activate(this.settings.container);
   var defaults = {
      videoId: this.settings.videoId,
      width: 790,
      height: 444,
      playerVars: this.settings.playerVars,
      events: {
        onReady: function(event){
          var id = event.target.c.id;
          var current = playerManager.players[id];
          if(current.settings.autoplay == true  && !isMobile.any()){
            if(typeof current.settings.mute !== 'undefined'){
              playerManager.play(current.settings.container,current.settings.mute);
            }else{
              playerManager.play(current.settings.container);
            }
          }
          if(typeof current.settings.onReady === 'function'){
            var ready = current.settings.onReady;
            setTimeout(function(){ ready(); },500);
          }
          $(window).resize();     
        },
        onStateChange: function(event){
           playerManager.onChangeState(event);
        }
      }
    };
   return new YT.Player(player.settings.container, defaults);
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
        };
        player.init({
          container: player_container,
          videoId: video,
          autoplay: 1,
          mute: 1,
          loop: 1,
          onReady: function(){
            $('#water-therapy-video').parent().parent().addClass('ready');  
            $('#water-therapy-video').addClass('ready');
          },
          playerVars: vars
        });            
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
      $('#water-therapy').attr('class',section);

      var player_container = 'water-therapy-'+section+'-video';
      var video = $('#'+player_container+'-wrap').data('video');
      if(video){
        var vars = {
          showinfo: 0,
          modestbranding: 0,
          rel: 0,
          controls: 0
        };
        player.init({
          container: player_container,
          videoId: video,
          autoplay: 1,
          loop: 1,
          mute: 1,
          onReady: function(){
            $('#'+player_container).parent().parent().addClass('ready');  
            $('#'+player_container).addClass('ready');
          },
          playerVars: vars
        });
      }
      setTimeout(function(){ 
        var sections = ['therapeutic', 'relaxation','rejuvenation'];
        $.each(sections, function(key, val){
          if(val !== section){
            playerManager.pause('water-therapy-'+val+'-video');
          }
        });
      },1000);      
    });
    $(window).on('resize', function(){
      var width = $('#banner .banner').width();
      var height = 9 * width/16;
      $('#water-therapy-video').width(width);
      $('#water-therapy-video').height(height);          
      //height = $('#banner .banner').height();
      //var width = 16 * height/9;
      $('#water-therapy-full-video').height(height);
      $('#water-therapy-full-video').width(width);          

      var width = $('#water-therapy .videos').width();
      var height = 9 * width / 16;
      $('#water-therapy .videos figure').width(width);
      $('#water-therapy .videos figure').height(height);
    }).resize();
    // When the player is ready, add listeners for pause, finish, and playProgress

    var initialVideoLoad = ['water-therapy','water-therapy-therapeutic','water-therapy-relaxation','water-therapy-rejuvenation'];
    var loadNext = function(key){
      if(key < initialVideoLoad.length){
        var player_container = initialVideoLoad[key]+'-video';
        var video = $('#'+initialVideoLoad[key]+'-video-wrap').data('video');
        key++;
        if(video){
          var vars = {
            showinfo: 0,
            modestbranding: 0,
            rel: 0,
            controls: 0
          };
          player.init({
            container: player_container,
            videoId: video,
            autoplay: 1,
            loop: 1,
            mute: 1, 
            onReady: function(){
              $('#'+player_container).parent().parent().addClass('ready');  
              $('#'+player_container).addClass('ready');

              loadNext(key);
            },
            playerVars: vars
          });
        }     
      }
      
    };
    if(!isMobile.any()){
      loadNext(0);
    }else{
      $('#water-therapy-video').addClass('ready');
      if(isMobile.any()){
        $('#water-therapy-video').remove();
      }
      $('#water-therapy-therapeutic-video').addClass('ready');
      if(isMobile.any()){
        $('#water-therapy-therapeutic-video').remove();
      }
    }
    $('#banner .play-full-video').on('click', function(){
       $('#water-therapy-full-video').show();
      var video = $(this).data('video');
      var player_container = 'water-therapy-full-video';
      if(video){
        var vars = {
          showinfo: 0,
          modestbranding: 0,
          rel: 0         
        };
        player.init({
          container: player_container,
          videoId: video, 
          autoplay: 1,
          loop: false,
          onReady: function(){  
            $('#water-therapy-full-video').addClass('ready');        
          },
          onPlaying: function(){  
            $('#water-therapy-full-video').show();
            console.log('PLAYING');
          },
          onEnded: function(){
            $('#water-therapy-full-video').fadeOut(0);
            console.log('ended');
          },
          onPaused: function(){
            $('#water-therapy-full-video').fadeOut(0);
            console.log('paused');
          },
          playerVars: vars
        });
        $('#water-therapy-full-video').show();
      }
    }); 

  }
};
(function ($) {
  $(function () {
    bathroomHappiness.init();
  });
})(jQuery);
