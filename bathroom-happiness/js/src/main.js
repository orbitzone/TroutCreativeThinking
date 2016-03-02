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
        var iframe = $('#water-therapy-video')[0];
        $(window).on('resize', function(){
          var height = $('.blocks .water-therapy .content').height();
          var width = 16 * height/9;
          $('#water-therapy-video').width(width);
          $('#water-therapy-video').height(height + 200);          
        }).resize();
        // When the player is ready, add listeners for pause, finish, and playProgress
        if(isIE() < 11 && !isMobile.any()){
           var player = $f(iframe);
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
          $('#water-therapy-video').addClass('ready');
          if(isMobile.any()){
            $('#water-therapy-video').remove();
          }
        }
    }
  });
})(jQuery);
