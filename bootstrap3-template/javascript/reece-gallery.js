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
  
  
  
  
  $('.article-gallery .gallery-main').slick({
    infinite: true,
    prevArrow: '<span class="fa fa-chevron-left slick-prev large-icon"></span>',
    nextArrow: '<span class="fa fa-chevron-right slick-next large-icon"></span>',
    dots: false,
    autoplay: false,
    slidesToShow: 1,
    slidesToScroll: 1
    });

  $('.article-gallery .gallery-thumb').slick({
    infinite: true,
    prevArrow: '<span class="fa fa-chevron-left slick-prev"></span>',
    nextArrow: '<span class="fa fa-chevron-right slick-next"></span>',
    dots: false,
    autoplay: false,
    centerMode: false,
    slidesToShow: 4,
    slidesToScroll: 2,
    focusOnSelect: false
  });

  $(".gallery-thumb .slick-slide").click(function(){
    $(".article-gallery .gallery-main").slick("slickGoTo", parseInt($(this).attr("data-slick-index")) );
  });
  
  
  
  
  
});