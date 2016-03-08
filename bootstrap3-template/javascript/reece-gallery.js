$(function() {
  //console.log($("#thumbcarousel .item").length);
  if($("#thumbcarousel .item").length < 2) $("#thumbcarousel .carousel-control").addClass('hide');
  $(".carousel").swipe( {
    swipe:function(event, direction, distance, duration, fingerCount, fingerData) {
      if(direction === 'right') $(this).carousel('prev');
      else $(this).carousel('next');
    }
  });
  
  $('.display-plans').on('click', function(event){
    console.log("dfg");
    event.preventDefault();
    $('.inspiration-plans .plans-wrapper').slideToggle();
    $(this).toggleClass("active");
  });
  
});