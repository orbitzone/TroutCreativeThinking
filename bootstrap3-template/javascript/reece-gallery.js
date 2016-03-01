$(function() {
  $(".carousel").swipe( {
    swipe:function(event, direction, distance, duration, fingerCount, fingerData) {
      if(direction === 'right') $(this).carousel('prev');
      else $(this).carousel('next');
    }
  });
});