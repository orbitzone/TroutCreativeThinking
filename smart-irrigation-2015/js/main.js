$( document ).ready(function() {
  $('.product-list .divide-1-4 .inner-content').matchHeight();
  $('.inspiration-articles .divide-1-3 .inner-content').matchHeight();
  $('.smart-thinking-articles .divide-1-4 .inner-content').matchHeight();
  $('.smart-thinking-articles .divide-1-2 .inner-content').matchHeight();
  $('.si-product-list .divide-1-4 .inner-content').matchHeight();
  $('.inspiration-product-list .divide-1-4 .inner-content').matchHeight();

  $('.display-plans').click(function(){
    $('.inspiration-plans .plans-wrapper').slideToggle();
    $(this).toggleClass("active");
  });

  $('.si-myth-section .one-myth').click(function(){
    if($(this).hasClass("active") == true){
      $('.si-myth-section').find('.one-myth').removeClass("active");
      $('.si-myth-section').find('.info-box').removeClass("active");
      $('.si-myth-section').find('.info-box').removeClass("myth1").removeClass("myth2").removeClass("myth3").removeClass("myth4");
    }
    else{
      $('.si-myth-section').find('.one-myth').removeClass("active");
      $(this).addClass("active");
      $('.si-myth-section').find('.info-box').removeClass("active");
      $('.si-myth-section').find('.info-box').removeClass("myth1").removeClass("myth2").removeClass("myth3").removeClass("myth4");
      $('.si-myth-section').find('.info-box').addClass($(this).attr("data-myth"));
      $('.si-myth-section').find('.info-box').addClass("active");
    }

    $(this).attr("data-myth");

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
    focusOnSelect: true
  });

  $('.slider').slick({
    infinite: true,
    prevArrow: '<span class="fa fa-chevron-left slick-prev large-icon"></span>',
    nextArrow: '<span class="fa fa-chevron-right slick-next large-icon"></span>',
    dots: true,
    autoplay: true,
    responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
      }
    }
    ]
  });
  $('.preview-slide-image').slick({
    dots: false,
    arrows: true,
    autoplay: false
  });
  $('.vertical-slider').slick({
    dots: true,
    fade: true,
    arrows: false,
    autoplay: true,
    speed:800 
  });

  $('.sidebarsubnav').collapse('hide');
  $('.sidebarnav h6').click(function(e){
    e.preventDefault();
    $this= $(this);
    $parentLi = $this.closest('li');
    $parentLi.toggleClass('active');
    $this.next('.sidebarsubnav').collapse('toggle');
  })

  if($('#thinking-list').length){
    postLoadThinking();
    $('#thinking-list').loadMore({
      url: 'article-list.php',
      resultWrap: '#results-thinking',
      loadBtn: '#load-thinking',
      sourceTemplate: "#load-template",
      callback: postLoadThinking
    });
  }

  if($('#inspiration-list').length){
    postLoadInspiration();
    $('#inspiration-list').loadMore({
      url: 'article-list.php',
      resultWrap: '#results-inspiration',
      loadBtn: '#load-inspiration',
      sourceTemplate: "#load-template",
      callback: postLoadInspiration
    });
  }

  $(".gallery-thumb .slick-slide").click(function(){
    $(".article-gallery .gallery-main").slick("slickGoTo", parseInt($(this).attr("data-slick-index")) );
  });


});

function postLoadThinking(){
  $('.match-height img').load(function(){
    $('.match-height .divide-1-3').matchHeight();
  });
}

function postLoadInspiration(){
  $('.match-height img').load(function(){
      $('.match-height .divide-1-3').matchHeight();
  });

  $('.slide-thumbnail img').load(function(){
      $('.slide-thumbnail.new-slide').slick({
        dots: false,
        arrows: true,
        autoplay: false,
        prevArrow: '<span class="fa fa-chevron-left slick-prev"></span>',
        nextArrow: '<span class="fa fa-chevron-right slick-next"></span>'
      });
      $('.slide-thumbnail.new-slide').removeClass("new-slide");
  });
}
