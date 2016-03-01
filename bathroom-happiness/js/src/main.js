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
  var ua = window.navigator.userAgent;
  var msie = ua.indexOf("MSIE ");

  if (msie > 0) {
    return true;
  }
  else{
    return false;
  }
};
(function ($) {
  $(function () {
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
        var iframe = $('#water-therapy-video')[0];
        var player = $f(iframe);
        $(window).on('resize', function(){
          var height = $('.blocks .water-therapy .content').height();
          var width = 16 * height/9;
          $('#water-therapy-video').width(width);
          $('#water-therapy-video').height(height + 200);          
        }).resize();
        // When the player is ready, add listeners for pause, finish, and playProgress
        console.log(isIE());
        console.log(isMobile.any());
        if(!isIE() && !isMobile.any()){
          var onPlay = function(){
            $('#water-therapy-video').addClass('ready');
          };
          player.addEvent('ready', function() {
             // player.api('play');
              player.addEvent('play', onPlay);
              //player.addEvent('finish', onFinish);
              //player.addEvent('playProgress', onPlayProgress);
          });
        }else{
          console.log('done');
          $('#water-therapy-video').addClass('ready');
          if(isMobile.any()){
            $('#water-therapy-video').remove();
          }
        }
    }
  });
})(jQuery);
