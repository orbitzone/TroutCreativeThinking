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
var deviceMobile = isMobile.any();
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
var ieV = isIE();
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
  holdingList: [],
  active: '',
  status: '',
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
  addHoldingList: function(settings){
    this.holdingList.push(settings);
  },
  getNextHoldingList: function(){
    if(this.holdingList.length > 0){
      return this.holdingList[0];
    }else{
      return false;
    }
  },
  removeHoldingList: function(){
    this.holdingList.shift();
  },
  loadNext: function(){
    var next = this.getNextHoldingList();
    if(next !== false){
      var nextPlayer = new player();
      nextPlayer.init(next);
      this.removeHoldingList();
      console.log(next.container);
    }
  },
  update: function(container, settings){
    this.players[settings.container].settings = settings;
  },
  play: function(container, mute){
    if(this.exists(container)){
      playerManager.activate(container);
      var video = this.players[container].player;
      var settings = this.players[container].settings;
      if(typeof video.playVideo !== "undefined"){
        if(mute == 1){
          video.mute();
        }
        video.playVideo();      
      }
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
    }
  },
  mute: function(container){
    if(this.exists(container)){
      var video = this.players[container].player;
      video.mute();
    }
  },
  unmute: function(container){
    if(this.exists(container)){
      var video = this.players[container].player;
      video.unmute();
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
/*
var player = {
  settings: {
    container: '',
    videoId: '',
    playerVars: {
      showinfo: 0,
      modestbranding: 0,
      rel: 0,
      origin: 'reece-responsive.trout.com.au'
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
        playerManager.update(this.settings.container, settings);
        if(settings.autoplay){
          playerManager.play(this.settings.container);
        }
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
          if(current.settings.autoplay && !isMobile.any()){
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
};*/
var player = function(){
  this.settings = {
    container: '',
    videoId: '',
    playerVars: {
      showinfo: 0,
      modestbranding: 0,
      rel: 0,
      origin: 'reece-responsive.trout.com.au'
    },
    autoplay: false,
    loop: false,
    mute: false,
    onReady: function(){},
    onEnded: function(){},
    onPaused: function(){},
    onBuffering: function(){},
    onPlaying: function(){}
  };
  this.ready= false;
  this.obj = {};
  this.init = function(settings){
    if(playerManager.status == 'loading'){
      playerManager.addHoldingList(settings);
    }else{
      this.settings = $.extend({}, this.settings, settings);
      var initialPlayer =  this;
      if (typeof(YT) == 'undefined' || typeof(YT.Player) == 'undefined') {
        playerManager.status = 'loading';
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
          playerManager.status = 'loading';
          playerManager.add(this.loadPlayer(), settings);
        }else{
          playerManager.update(this.settings.container, settings);
          if(settings.autoplay){
            playerManager.play(this.settings.container);
          }
        }
      }
    }
  };
  this.loadPlayer= function(){
   playerManager.activate(this.settings.container);
   var container = this.settings.container;
   var thisSettings = this.settings;
   var defaults = {
      videoId: this.settings.videoId,
      width: 790,
      height: 444,
      playerVars: this.settings.playerVars,
      events: {
        onReady: function(event){
          //console.log('The container is '+container);
          //var id = event.target.c.id;
          var current = playerManager.players[container];
          if(thisSettings.autoplay && !deviceMobile){
            if(typeof thisSettings.mute !== 'undefined'){
              playerManager.play(container, thisSettings.mute);
            }else{
              playerManager.play(container);
            }
          }
          if(typeof thisSettings.onReady === 'function'){
            var ready = thisSettings.onReady;
            setTimeout(function(){ ready(container); },500);
          }
          playerManager.status = 'ready';
          playerManager.loadNext();
          $(window).resize();     
        },
        onStateChange: function(event){
          playerManager.onChangeState(event);
        }
      }
    };
   return new YT.Player(this.settings.container, defaults);
  };
  this.play= function(id, mute){
    var video = player.obj[id].player;
    if(typeof video.playVideo !== "undefined"){
      if(typeof mute !== 'undefined'){
        if(mute){
          video.mute();
        }
      }
      video.playVideo();      
    }
  };
  this.stop= function(id){
    var $this = this;
    if(typeof id !== "undefined"){
      var video = player.obj[id].player;
      if(typeof video.stopVideo !== "undefined"){
        video.stopVideo();              
      }else{
        $this.autoplay = false;
      }
    }else{
      $.each($this.obj, function(key){
        if(typeof $this.obj[key].player.stopVideo !== "undefined"){
          $this.obj[key].player.stopVideo();              
        }       
      });
    }
  };
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
        var inspPlayer = new player();
        inspPlayer.init({
          container: player_container,
          videoId: video,
          autoplay: 1,
          mute: 1,
          loop: 1,
          onReady: function(){
            $('#water-therapy-video').parent().parent().parent().addClass('ready');  
            $('#water-therapy-video').parent().addClass('ready');
          },
          playerVars: vars
        });            
      }           
    }else{
      $('#water-therapy-video').parent().addClass('ready');
      if(isMobile.any()){
        $('#water-therapy-video').remove();
      }
    }
  },
  trends: function(){
    $('.bathroom-gallery').on('mouseover', function(){
      var img = $(this).find('.image img').attr('src');
      $(this).find('.image img').attr('src', img.replace('png','gif'));
    }).on('mouseout', function(){
      var img = $(this).find('.image img').attr('src');
      $(this).find('.image img').attr('src', img.replace('gif','png'));
    });
  },
  waterTherapy: function(){
    // When the player is ready, add listeners for pause, finish, and playProgress
    var windowWidth = $(window).width();
    if(!isMobile.any()){
      var initialVideoLoad = ['water-therapy','water-therapy-therapeutic','water-therapy-relaxation','water-therapy-rejuvenation','st-waterfall'];
      for(var k = 0; k < initialVideoLoad.length; k++){
        var player_container = initialVideoLoad[k]+'-video';
        var video = $('#'+initialVideoLoad[k]+'-video-wrap').data('video');
        if(video){
          var vars = {
            showinfo: 0,
            modestbranding: 0,
            rel: 0,
            controls: 0
          };
          var autoplay = 1;
          var mute = 1;
          if(initialVideoLoad[k] == 'st-waterfall'){
            autoplay= 0;            
          }
          if(initialVideoLoad[k] == 'water-therapy-therapeutic'){
            mute = 0;
          }
          var introPlayer = new player();
          introPlayer.init({
            container: player_container,
            videoId: video,
            autoplay: autoplay,
            loop: 1,
            mute: mute, 
            onReady: function(container){
              if(container !== 'st-waterfall'){
                $('#'+container).parent().parent().addClass('ready');  
                $('#'+container).parent().addClass('ready');
              }
            },
            playerVars: vars
          });
        }   
      }
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
    $('#banner .stop-full-video').on('click', function(){
      var player_container = 'water-therapy-full-video';
      playerManager.stop(player_container);
      if(deviceMobile){
        $.magnificPopup.close();
      }
      $('#banner .stop-full-video').removeClass('show');
      $('#banner .play-full-video').removeClass('paused playing');
      $('#water-therapy-full-video').fadeOut(300, 0);
    });
    $('#banner .play-full-video').on('click', function(){
      var player_container = 'water-therapy-full-video';
      if($(this).hasClass('playing')){
        $(this).removeClass('playing');
        $(this).addClass('paused');
        playerManager.pause(player_container);
      }else{
         $('#banner .stop-full-video').addClass('show');
         $(this).addClass('playing');
         $('#water-therapy-full-video').show();
         if($(window).width()<768 || deviceMobile){
          $.magnificPopup.open({
            mainClass: 'mfp-water-therapy-full-video',
            items: {
              type: 'inline',
              src:'#full-video-popup',              
            },
            callbacks: {
              afterClose: function(){
                $('#banner .stop-full-video').removeClass('show');
                $('#banner .play-full-video').removeClass('paused playing');
                $('#full-video-popup').addClass('hide');
                player.stop('water-therapy-full-video');
              }
            }
          });
         }
        var video = $(this).data('video');
        if(video){
          var vars = {
            showinfo: 0,
            modestbranding: 0,
            rel: 0         
          };
          var autoplay= 1;
          if($(window).width()<768 || deviceMobile){
            autoplay= 0;          
          }
          var bannerVideo = new player();
          bannerVideo.init({
            container: player_container,
            videoId: video, 
            autoplay: autoplay,
            loop: false,
            onReady: function(){  
              $('#water-therapy-full-video').parent().addClass('ready');        
            },
            onPlaying: function(){  
              $('#banner .play-full-video').addClass('playing');
              $('#full-video-popup').removeClass('hide'); 
            },
            onEnded: function(){
              if(deviceMobile){
                $.magnificPopup.close();
              }
              $('#banner .stop-full-video').removeClass('show');
              $('#banner .play-full-video').removeClass('paused playing');
              $('#full-video-popup').addClass('hide');
            },
            onPaused: function(){
              $('#banner .play-full-video').removeClass('paused playing');
              $('#banner .play-full-video').addClass('paused');
            },
            playerVars: vars
          });
          $('#full-video-popup').removeClass('hide');
        }
      }       
    }); 
    $('.submenu button').on('click', function(){
      $('.submenu li').removeClass('active');
      $(this).parent().addClass('active');
      var section = $(this).text().toLowerCase();
      $('#water-therapy').attr('class',section);

      if(!deviceMobile){
        var player_container = 'water-therapy-'+section+'-video';
        var video = $('#'+player_container+'-wrap').data('video');
        if(video){
          var vars = {
            showinfo: 0,
            modestbranding: 0,
            rel: 0,
            controls: 0
          };
          playerManager.play(player_container);          
        }
        setTimeout(function(){ 
          var sections = ['therapeutic', 'relaxation','rejuvenation'];
          $.each(sections, function(key, val){
            if(val !== section){
              playerManager.pause('water-therapy-'+val+'-video');
            }
          });
        },10); 
      }
      $('html, body').animate({scrollTop: $('#intro .video-wrap').offset().top},500);     
    });
    $('#water-therapy .slides').slick({
      arrows: false,
      dots: true
    });
    $('.panel-slideshow').each(function () {
      var $arrows = $(this).find('.slideshow-buttons');
      if($(this).find('.grid-module-slider').length > 0){
        $(this).find('.grid-module-slider').slick({
          arrows: true,
          dots: false,
          appendArrows: $arrows
        });
      }
      if($(this).find('.slideshow-container').length > 0){
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
      }
    });
    
    $('#shower-technology .shower-technology-menu a').on('click', function(){
      $('#shower-technology .shower-technology-menu a').removeClass('active');
      $('#shower-technology .shower-technology-description').removeClass('active');
      $(this).addClass('active');
      var section = $(this).data('section');
      $('#shower-technology .shower-technology-card').removeClass('active');
      $('#shower-technology .st-'+section).addClass('active'); 
      if(windowWidth){
        $('html, body').animate({scrollTop: $('#shower-technology .shower-technology-cards').offset().top - 20},500);         
      }
      if(playerManager.active.substring(0,2) == 'st'){
        playerManager.stop(playerManager.active);
      }
      if(playerManager.exists()){
        playerManager.play('st-'+section+'video');
      }else{
        var video =$('#st-'+section+'-video-wrap').data('video');
        var container = 'st-'+section+'-video';
        var vars = {
          showinfo: 0,
          modestbranding: 0,
          rel: 0,
          controls: 0
        };
        var showerTechPlayer = new player();
        showerTechPlayer.init({
          container: container,
          videoId: video, 
          autoplay: 0,
          loop: false,
          onReady: function(container){  
            playerManager.play(container);
          },
          onPlaying: function(){  
          },
          onEnded: function(){
            
          },
          onPaused: function(){
            
          },
          playerVars: vars
        });
      }      
      return false;
    });
    $('#shower-technology .st-waterfall').addClass('active');
    $('#shower-technology .view-video').on('click', function(){
      var section = $(this).data('section');
      $('#shower-technology .st-'+section+' .shower-technology-description').toggleClass('active');
      playerManager.play('st-'+section+'-video');
      return false;
    });
    $('#shower-technology .close-video').on('click', function(){
      var section = $(this).data('section');
      $('#shower-technology .st-'+section+' .shower-technology-description').toggleClass('active');
      playerManager.stop('st-'+section+'-video');
      return false;
    });    
    var currentSection = 1;
    $(window).on('resize', function(){
      $('.panel-slideshow').each(function () {
        var $arrows = $(this).find('.slideshow-buttons');
        if($(this).find('.slide-image').length > 0){
          var top = $(this).find('.slide-image').first().position().top + 10 + $(this).find('.slide-image').first().outerHeight();
          $arrows.css({
            top: top
          });
        }
      });
      var width = $('#banner .banner').width();
      var height = 9 * width/16;
      $('#water-therapy-video').width(width);
      $('#water-therapy-video').height(height);          
      //height = $('#banner .banner').height();
      //var width = 16 * height/9;
      if(deviceMobile){
        width = $(window).width();
        height = $(window).height();
        $('#water-therapy-full-video').height(height);
        $('#water-therapy-full-video').width(width);
      }else{
        $('#water-therapy-full-video').height(height);
        $('#water-therapy-full-video').width(width);            
      }

      var width = $('#water-therapy .videos').width();
      var height = 9 * width / 16;
      $('#water-therapy .videos iframe').width(width);
      $('#water-therapy .videos iframe').height(height);

      windowWidth = $(window).width();
      var containerWidth = $('.grid-module-intro-wrap').width();
      
      if(windowWidth < 768){
        var sections = $('.grid-module-zones-section').length;
        $('.grid-module-zones-sections').width(containerWidth * sections);
        $('.grid-module-zones-section').width(containerWidth);

        height = $('#shower-technology .shower-technology-description .front').outerHeight();
        $('#shower-technology .shower-technology-cards, #shower-technology .shower-technology-description .shower-technology-flip, #shower-technology .shower-technology-description .back').height(height);
      }else{
        $('.grid-module-zones-sections').width('');
        $('.grid-module-zones-section').width('');
      }
      $('.grid-module-zones-sections').each(function(){
        var s = 0;
        $(this).find('.grid-module-zones-section').each(function(){
          $(this).find('.grid-module-zone-1 .grid-module-slider img').width(containerWidth);
          if(ieV <= 9){
            $(this).css({
              transform: 'translate('+(-1 * (s) * containerWidth )+'px,0)'        
            });
          }else{
            $(this).css({
              transform: 'translate3d('+(-1 * (s) * containerWidth )+'px,0,0)'        
            });  
          }
          
          s=s+1;
          $(this).find('.grid-module-zone-4, .grid-module-zone-5').height('auto');
          var sectionBottomHeight = $(this).find('.grid-module-zone-4').outerHeight();
          if(sectionBottomHeight < $(this).find('.grid-module-zone-5').outerHeight()){
            sectionBottomHeight = $(this).find('.grid-module-zone-5').outerHeight();
          }
          $(this).find('.grid-module-zone-4, .grid-module-zone-5').outerHeight(sectionBottomHeight);
        });
      });
    }).resize();
    
    if(ieV){
      var lt = "";
      if(ieV <= 9){
        lt = "ie-lt";
      }
      $('.grid-module-zones-section, .grid-module-zone-1, .grid-module-zone-2, .grid-module-zone-3, .shower-technology-card').addClass('ie '+lt);
    }
    $('.grid-module').each(function(){
      var $module = $(this);
      $(this).find('.grid-module-menu a, .scrolling-menu-list a').on('click', function(){
        var section = $(this).data('section');
        $module.find('.grid-module-menu a, .scrolling-menu-list a').removeClass('active');
        $module.find('.scrolling-menu-list, .scrolling-menu-wrap').removeClass('active');
        $module.find('.grid-module-menu a[data-section='+section+'], .scrolling-menu-list a[data-section='+section+']').addClass('active');
        $module.find('.grid-module-description .box-content').removeClass('active');
        $module.find('.grid-module-description .box-content-'+section).addClass('active');
        currentSection = section;
        var next = (section * 1) + 1;
        var prev = (section * 1) - 1;
        if(next > $module.find('.grid-module-zones-section').length){
          next = 1;
        }
        if(prev == 0){
          prev = $module.find('.grid-module-zones-section').length;
        }
        var containerWidth = $module.find('.grid-module-intro-wrap').width();
        
        $('html, body').animate({
          scrollTop: $module.find('.grid-module-description').offset().top - 29,
        },500, function(){
          $module.find('.grid-module-zones-section').removeClass('current prev next');
          $module.find('.grid-module-zones-section-'+section).addClass('current');
          $module.find('.grid-module-zones-section-'+next).addClass('next');
          $module.find('.grid-module-zones-section-'+prev).addClass('prev');          
        });
        return false;
      });
      $(this).find('.scrolling-menu-wrap .scrolling-menu').on('click', function(){
        $('.scrolling-menu-wrap .scrolling-menu-list, .scrolling-menu-wrap').toggleClass('active');
      });
    });
    $(window).on('scroll', function(){
      var scrollTop = $(window).scrollTop();
      if(deviceMobile){
        if(scrollTop >= $('.submenu-wrap').offset().top){
          if(scrollTop <= $('#water-therapy-content .shower-image').offset().top){
            $('.submenu-wrap').height($('.submenu').height());
            $('.submenu').addClass('fixed');  
          }else{
            $('.submenu-wrap').height('');
            $('.submenu').removeClass('fixed');
          }          
        }else{
          $('.submenu-wrap').height('');
          $('.submenu').removeClass('fixed');
        }
      }else{
        if(scrollTop >= ($('#water-therapy-video-wrap').offset().top + $('#water-therapy-video-wrap').height() - 20)){
          if(!$('#water-therapy-video-wrap').hasClass('paused')){
            $('#water-therapy-video-wrap').addClass('paused');
            playerManager.pause('water-therapy-video');
          }
        }else{
          if($('#water-therapy-video-wrap').hasClass('paused')){
            $('#water-therapy-video-wrap').removeClass('paused');
            playerManager.play('water-therapy-video');
          }
        }
        if(scrollTop >= ($('#water-therapy .videos').offset().top + $('#water-therapy .videos').height() - 20)){
          if(!$('#water-therapy .videos').hasClass('paused')){
            $('#water-therapy .videos').addClass('paused');
            playerManager.pause('water-therapy-therapeutic-video');
            playerManager.pause('water-therapy-relaxation-video');
            playerManager.pause('water-therapy-rejuvenation-video');
          }
        }else{
          if($('#water-therapy .videos').hasClass('paused')){
            $('#water-therapy .videos').removeClass('paused');
            var section = $('#water-therapy').attr('class');
            playerManager.play('water-therapy-'+section+'-video');
          }
        }
      }
      $('.grid-module').each(function(){
        var menuTopOffset = $(this).find('.grid-module-menu').offset().top + $(this).find('.grid-module-menu').height();
        var maxScroll = ($(this).offset().top - 90 + $(this).outerHeight() );
        if(scrollTop >= menuTopOffset){
          if(scrollTop >= maxScroll){
            $(this).find('.scrolling-menu-wrap').removeClass('fixed');
            $(this).find('.scrolling-menu-list, .scrolling-menu-wrap').removeClass('active');
          }else{
            $(this).find('.scrolling-menu-wrap').addClass('fixed');
          }
        }else{
          $(this).find('.scrolling-menu-wrap').removeClass('fixed');
          $(this).find('.scrolling-menu-list, .scrolling-menu-wrap').removeClass('active');
        }
      });      
    });
  }
};
(function ($) {
  $(function () {
    bathroomHappiness.init();
  });
})(jQuery);
