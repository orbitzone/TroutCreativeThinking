$(document).ready(function(){
    //Carousel
    $('.carousel').carousel({
        interval: 3000,
        pause: 'hover'
    });

    //Swipe for mobile carousel
    $("#about-us-carousel-mobile").swiperight(function() {
          $(this).carousel('prev');
    });
    $("#about-us-carousel-mobile").swipeleft(function() {
      $(this).carousel('next');
    });
});
