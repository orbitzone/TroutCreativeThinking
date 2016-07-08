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
        player.obj[container] = player.loadPlayer(container, videoId) ;     
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
var grant = {
	init: function(){
		this.countdown();
    if($('#grant').hasClass('news')){
      this.news();
    }
    if($('#grant').hasClass('homepage')){
      this.homepage();
    }
    if($('#grant').hasClass('projects')){
      this.projects();
    }
    if($('#grant').hasClass('apply-now')){
      this.applyNow();
    }
    if($('.winners-slider').length> 0){
      this.winnersSlider();
    }    
	},
  homepage: function(){
    
    if($('.grid').length > 0){
      var masonry = new Masonry( '.grid', {
        itemSelector: '.grid-item',
        transitionDuration: 0        
      });
    }
    $(window).resize();
    $('#feed').imagesLoaded()
      .always( function( instance ) {
        $(window).resize();         
      }
    );
    if($('.homepage-video').length > 0){
      $('.homepage-video').slick({
        swipe: false,
        swipeToSlide: false,
        touchMove: false
      });
      $('.video .play-pause-video').on('click', function(){
        $('.homepage-video').parent().toggleClass('active');
        if($('.homepage-video').parent().hasClass('active')){
          $('.homepage-video').slick('slickGoTo',1);
          var player_container = $('#the-player');
          var video = player_container.data('video');
          if(video){
            player.autoplay = true;
            player.init('the-player',video);
          }  
        }else{
          $('.homepage-video').slick('slickGoTo',0);
          player.stop();          
        }
        
      });
      $('.video-slider-wrap').css({ opacity: 1});
    }
    $(window).on('resize', function(){
      var doubleS = 0;
      var single = 0;
      $('#feed .item').height('');
      $('#feed .item').each(function(){
        if($(this).hasClass('double')){
          if($(this).outerHeight() > doubleS){
            doubleS = $(this).outerHeight();
          }
        }else{
          if($(this).outerHeight() > single){
            single = $(this).outerHeight();
          }
        }
      });
      if(doubleS > (single * 2)){
        $('#feed .item.double').outerHeight(doubleS);
        $('#feed .item.single').outerHeight(doubleS/2);
      }else{
        $('#feed .item.double').outerHeight(single*2);
        $('#feed .item.single').outerHeight(single);
      }
      masonry.layout();
    });       
  },
  projects: function(){
    this.news();
    /*$('aside a.top-link').on('click', function(){
      //$(this).parent().addClass('active');
      if($(this).hasClass('open')){
        $(this).removeClass('open');
        $(this).parent().find('ul').slideUp();
      }else{
        $(this).addClass('open');
        $(this).parent().find('ul').slideDown();  
      }      
      return false;
    });*/
    $('.map svg .dot').each(function(){
      var $circle = $(this).find('circle');
      var cx = $circle.attr('cx');
      var cy = $circle.attr('cy');
      $(this).find('g,circle,path').css({
        '-webkit-transform-origin':   cx+'px '+cy+'px',
        '-moz-transform-origin':       cx+'px '+cy+'px',
        '-ms-transform-origin':     cx+'px '+cy+'px',
        '-o-transform-origin':     cx+'px '+cy+'px',
        'transform-origin':       cx+'px '+cy+'px'  
      });
    });
    $('.map svg .dot.active').each(function(){
      var cx = $(this).find('circle').attr('cx');
      var cy = $(this).find('circle').attr('cy');
      $(this).find('circle').attr('transform','translate('+cx+' '+cy+') scale(2) translate(-'+cx+' -'+cy+')');
    });
    $('.cards-slider').imagesLoaded()
      .always( function( instance ) {
        $(window).resize();         
      }
    );
    if($('.person-video').length > 0){
      $('.person-video').slick({
        swipe: false,
        swipeToSlide: false,
        touchMove: false
      });
      $('.video .play-pause-video').on('click', function(){
        $('.person-video').parent().toggleClass('active');
        if($('.person-video').parent().hasClass('active')){
          $('.person-video').slick('slickGoTo',1);
          var player_container = $('#the-player');
          var video = player_container.data('video');
          if(video){
            player.autoplay = true;
            player.init('the-player',video);
          }  
        }else{
          $('.person-video').slick('slickGoTo',0);
          player.stop();          
        }
        
      });
    }
    $(document).on('click','.map .dot', function(){
      var person = $(this).data('person');
      show_person(person);
      $('.map .dot').attr('class','dot');
      $('.map .dot circle').attr('transform','');
      $(this).attr('class','dot active');
      var cx = $(this).find('circle').attr('cx');
      var cy = $(this).find('circle').attr('cy');
      $(this).find('circle').attr('transform','translate('+cx+' '+cy+') scale(2) translate(-'+cx+' -'+cy+')');
    });
    var filtered = false
    $(window).on('resize', function(){
      if($(window).width()<768){
        if (filtered === false) {
          $('.winners-slider').slick('slickFilter','.item-slide');
          filtered = true;
        }
      }else{
        $('.winners-slider').slick('slickUnfilter');
        filtered = false;
      }
      $('.card').height('');
      var maxheight = 0;
      $('.card').each(function(){
        if($(this).outerHeight() > maxheight){
          maxheight = $(this).outerHeight();
        }
      });
      $('.card').outerHeight(maxheight);
    });
    $('.winners-slider').imagesLoaded()
      .always( function( instance ) {
        $(window).resize();
      }
    );
    $('.winners-slider .slide').on('click', function(){
      $('.winners-slider .slide').removeClass('active');
      $(this).addClass('active');
      var person = $(this).data('person');
      if(person){
        show_person(person);
        $('.map .dot').attr('class','dot');
        $('.map .dot[data-person='+person+']').attr('class','dot active');
      }
    });
    var timeout1 = null;
    var timeout2 = null;
    function show_person(person){
      $('.cards-slider .card.active,.cards-slider .card.show').addClass('leave').removeClass('active').removeClass('show');
        clearTimeout(timeout1);
        clearTimeout(timeout2);
        timeout1 = setTimeout(function(){
          $('.cards-slider .card.leave').removeClass('leave');
          $('.cards-slider .'+person).addClass('show');
          timeout2 = setTimeout(function(){
            $('.cards-slider .show').addClass('active').removeClass('show');
          },300);
        },300);
    }
  },
  news: function(){
    $('.slider-thumbs').slick({
      prevArrow: '<button type="button" class="slick-prev"><svg viewBox="0 0 26 46" id="shape-arrow-left"><title>arrow-left</title> <g id="arrow-left-arrow-left"> <path d="M24.4,0.6C24.1,0.2,23.5,0,23,0c-0.5,0-1,0.2-1.4,0.6l-21,21c-0.8,0.8-0.8,2.1,0,2.8l21,21c0.8,0.8,2.1,0.8,2.8,0c0.8-0.8,0.8-2.1,0-2.8L4.9,23L24.4,3.4C25.2,2.6,25.2,1.4,24.4,0.6z"/> </g> </svg></button>',
      nextArrow: '<button type="button" class="slick-next"><svg viewBox="0 0 26 46" id="shape-arrow-right"><title>arrow-right</title> <g id="arrow-right-arrow-right"> <path d="M1.6,45.4C2,45.8,2.5,46,3,46c0.5,0,1-0.2,1.4-0.6l21-21c0.8-0.8,0.8-2.1,0-2.8l-21-21c-0.8-0.8-2.1-0.8-2.8,0c-0.8,0.8-0.8,2.1,0,2.8L21.2,23L1.6,42.6C0.8,43.4,0.8,44.7,1.6,45.4z"/> </g> </svg></button>',
      slidesToScroll:4,
      slidesToShow:4,
      asNavFor: '.slider-main',
      focusOnSelect: true
    });
    $('.slider-main').slick({
      prevArrow: '<button type="button" class="slick-prev"><svg viewBox="0 0 26 46" id="shape-arrow-left"><title>arrow-left</title> <g id="arrow-left-arrow-left"> <path d="M24.4,0.6C24.1,0.2,23.5,0,23,0c-0.5,0-1,0.2-1.4,0.6l-21,21c-0.8,0.8-0.8,2.1,0,2.8l21,21c0.8,0.8,2.1,0.8,2.8,0c0.8-0.8,0.8-2.1,0-2.8L4.9,23L24.4,3.4C25.2,2.6,25.2,1.4,24.4,0.6z"/> </g> </svg></button>',
      nextArrow: '<button type="button" class="slick-next"><svg viewBox="0 0 26 46" id="shape-arrow-right"><title>arrow-right</title> <g id="arrow-right-arrow-right"> <path d="M1.6,45.4C2,45.8,2.5,46,3,46c0.5,0,1-0.2,1.4-0.6l21-21c0.8-0.8,0.8-2.1,0-2.8l-21-21c-0.8-0.8-2.1-0.8-2.8,0c-0.8,0.8-0.8,2.1,0,2.8L21.2,23L1.6,42.6C0.8,43.4,0.8,44.7,1.6,45.4z"/> </g> </svg></button>',
      focusOnSelect: true
    });
    if($('.slider-thumbs').length>0){
      $(window).on('resize', function(){
        var height = $('.slider-thumbs .slide').width()/ 189 * 144;
        $('.slider-thumbs .slide').height(height);
      }).resize();
    }
  },
  winnersSlider: function(){
    $('.winners-slider').slick({
      prevArrow: '<button type="button" class="slick-prev"><svg viewBox="0 0 26 46" id="shape-arrow-left"><title>arrow-left</title> <g id="arrow-left-arrow-left"> <path d="M24.4,0.6C24.1,0.2,23.5,0,23,0c-0.5,0-1,0.2-1.4,0.6l-21,21c-0.8,0.8-0.8,2.1,0,2.8l21,21c0.8,0.8,2.1,0.8,2.8,0c0.8-0.8,0.8-2.1,0-2.8L4.9,23L24.4,3.4C25.2,2.6,25.2,1.4,24.4,0.6z"/> </g> </svg></button>',
      nextArrow: '<button type="button" class="slick-next"><svg viewBox="0 0 26 46" id="shape-arrow-right"><title>arrow-right</title> <g id="arrow-right-arrow-right"> <path d="M1.6,45.4C2,45.8,2.5,46,3,46c0.5,0,1-0.2,1.4-0.6l21-21c0.8-0.8,0.8-2.1,0-2.8l-21-21c-0.8-0.8-2.1-0.8-2.8,0c-0.8,0.8-0.8,2.1,0,2.8L21.2,23L1.6,42.6C0.8,43.4,0.8,44.7,1.6,45.4z"/> </g> </svg></button>',
      slidesToShow: 5,
      slidesToScroll: 4,
      infinite: true,
      variableWidth: true,
      responsive:[
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
       {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
          variableWidth: false
        }
      },
      ]
    });
  },
  applyNow: function(){
    function validateStep1(){
        var errors = false;
        $('.step1 .error').remove();
        $('.step1 input[required]').each(function(){
          if($(this).val() == ""){
            $(this).parent().append('<div class="error">This field is required</div>');
            errors = true;
          }
        });
        return !errors;
    }
    function validateStep2(){
        var errors = false;
        $('.step2 .error').remove();
        $('.step2 textarea[required]').each(function(){
          if($(this).val() == ""){
            $(this).parent().append('<div class="error">This field is required</div>');
            errors = true;
          }
        });
        return !errors;
    }
    function validateStep3(){
        var errors = false;
        $('.step3 .error').remove();
        $('.step3 input[required]').each(function(){
          if($(this).val() == ""){
            $(this).parent().append('<div class="error">This field is required</div>');
            errors = true;
          }
        });
        return !errors;
    }
    function gotoStep(step){
      var prev_step = (step * 1) -1;
      var validated = false;
      if(prev_step == 1){
        validated = validateStep1();
      }else{
        if(prev_step == 2){
          validated = validateStep2();
        }else{
          validated = validateStep3(); 
        }
      }
      if(validated){
        $('.steps-list button, .steps .step').removeClass('active');
        $('.steps-list button[data-step='+step+']').addClass('active');
        $('.steps-navigation .previous').hide();
        $('.steps-navigation .next').hide();
        $('.steps-navigation .submit').hide();
        
        if(step == 1){
            $('.steps-navigation .next').show();        
        }else{
          if(step == 2){
              $('.steps-navigation .previous').show();
              $('.steps-navigation .next').show();
          }else{
            $('.steps-navigation .previous').show();
            $('.steps-navigation .submit').show();
          }
        }
        $('.steps .step'+step).addClass('active'); 
      }      
    }
    $(document).on('click','.upload-button', function(){
      $(this).parent().find('input').focus().trigger('click');
    });

    var app={};
    $(document).on('change','.upload-input input',function(e) {
          // reset
        $(this).parent().parent().find('.error').remove();
        app.fileName = null;
        // file type?
        if($('html').hasClass('lt-ie9') || $('html').hasClass('lt-ie8') || (navigator.appVersion.indexOf("MSIE 9.")!=-1))
        {
          $(this).parent().find('.upload-filename').text('Image added');
          app.fileType = "image";
          $(this).addClass('uploaded');
        }
        else
        {
              // video or image or invalid file type
            app.fileType = $(this)[0].files[0].type;
            app.fileName = $(this)[0].files[0].name;
            
            //if(app.fileType.indexOf("video") > -1) app.fileType = "video";
            if(app.fileType.indexOf("image") > -1) app.fileType = "image";
            else app.fileType = "invalid";
            if(app.fileType != "invalid")
            {
              $(this).parent().find('.upload-filename').text(app.fileName );
              $(this).addClass('uploaded');
            }
            else
            {
              $(this).parent().parent().append('<div class="error" style="display:block;" data-num="'+app.numberFiles+'">Invalid file type selected: ' + app.fileName + '</div>');              
            }             
        }
    });
    $('.steps-list button').on('click', function(){
      var step=$(this).data('step');
      gotoStep(step);
    });
    $('.steps-navigation button[type=button]').on('click', function(){
      var step = $('.steps-list button.active').data('step');
      if($(this).hasClass('previous')){
        step = step - 1;
      }else{
        step = step + 1;
      }
      gotoStep(step);
    });
  },
	countdown: function(){
		var labels = ['days', 'hours', 'minutes', 'seconds'],
			date = $('#countdown').data('date'),      
      currDate = '00:00:00:00:00',
      nextDate = '00:00:00:00:00',
      parser = /([0-9]{2})/gi;
      
  	// Parse countdown string to an object
    function strfobj(str) {
      var parsed = str.match(parser),
        obj = {};
      labels.forEach(function(label, i) {
        obj[label] = parsed[i]
      });
      return obj;
    }
    // Return the time components that diffs
    function diff(obj1, obj2) {
      var diff = [];
      labels.forEach(function(key) {
        if (obj1[key] !== obj2[key]) {
          diff.push(key);
        }
      });
      return diff;
    }
		// Build the layout
    var initData = strfobj(currDate);
    labels.forEach(function(label, i) {
    	$('#countdown').find('.'+label+' .curr span').text(initData[label]);
      $('#countdown').find('.'+label+' .next span').text(initData[label]);
      $('#countdown').find('.'+label+' .label span').text(label);
    });
    $('#countdown').css({
    	opacity: 1
    });
    $('#countdown').countdown(date, function(event) {
    	var newDate = event.strftime('%D:%H:%M:%S'),
        data;
      if (newDate !== nextDate) {
        currDate = nextDate;
        nextDate = newDate;
        // Setup the data
        data = {
          'curr': strfobj(currDate),
          'next': strfobj(nextDate)
        };
        // Apply the new values to each node that changed
        diff(data.curr, data.next).forEach(function(label) {
          var selector = '.%s'.replace(/%s/, label),
          $node = $('#countdown').find(selector);
          // Update the node
          $node.removeClass('flip');
          $node.find('.curr span').text(data.curr[label]);
          $node.find('.next span').text(data.next[label]);
          // Wait for a repaint to then flip
          setTimeout(function() {
            $node.addClass('flip');
          }, 50);
        });
      }
		});
	}
};
(function($) {
	$(function(){
		grant.init();
	});
})(jQuery);