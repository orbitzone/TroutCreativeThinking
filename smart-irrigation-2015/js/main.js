$( document ).ready(function() {
	$('.product-list .divide-1-4 .inner-content').matchHeight();
	$('.inspiration-articles .divide-1-3 .inner-content').matchHeight();
	$('.smart-thinking-articles .divide-1-4 .inner-content').matchHeight();
	$('.smart-thinking-articles .divide-1-2 .inner-content').matchHeight();

	$('.smart-tips-masonary').masonry({
	  itemSelector: '.one-box-item'
	});

	$('.si-myth-section .one-myth').click(function(){
		$('.si-myth-section').find('.one-myth').removeClass("active");
		$(this).addClass("active");
	});
	

    $('.slider').slick({
	  infinite: true,
	  prevArrow: '<span class="fa fa-chevron-left slick-prev"></span>',
	  nextArrow: '<span class="fa fa-chevron-right slick-next"></span>',
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

    $('.vertical-slider').slick({
	  dots: true,
	  fade: true,
	  arrows: false,
	  autoplay: true,
	  speed:800	
	});

    $('.preview-slide-image').slick({
	  dots: false,
	  arrows: true,
	  autoplay: false
	});
  $('.sidebarsubnav').collapse('hide');
	$('.sidebarnav h6').click(function(e){
		e.preventDefault();
		$this= $(this);
		$parentLi = $this.closest('li');
		$parentLi.toggleClass('active');
		$this.next('.sidebarsubnav').collapse('toggle');
	})

  matchLoaded();
  $('#thinking-list').loadMore({
    url: 'results.php',
    resultWrap: '#results1',
    loadBtn: '#load1',
    sourceTemplate: "#load-template",
    callback: matchLoaded
  });
});

function matchLoaded(){
	$('.match-height img').load(function(){
		$('.match-height .divide-1-3').matchHeight();
	});
}
