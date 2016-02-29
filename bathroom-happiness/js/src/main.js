'use strict';
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
        var height = $('.blocks .water-therapy .content').height();
        var width = 16 * height/9;
        $('#water-therapy-video').width(width);
        $('#water-therapy-video').height(height + 200);
        // When the player is ready, add listeners for pause, finish, and playProgress

        var onPlay = function(){
          $('#water-therapy-video').addClass('ready');
        };
        player.addEvent('ready', function() {
            player.api('play');
          $('#water-therapy-video').addClass('ready');  
            //player.addEvent('play', onPlay);
            //player.addEvent('finish', onFinish);
            //player.addEvent('playProgress', onPlayProgress);
        });
    }
  });
})(jQuery);
