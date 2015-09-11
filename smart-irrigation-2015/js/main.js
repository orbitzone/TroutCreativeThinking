$( document ).ready(function() {
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
	$('.sidebarnav h6').click(function(e){
		e.preventDefault();
		$this= $(this);
		$parentLi = $this.closest('li');
		$parentLi.toggleClass('active');
		$parentLi.find('.sidebarsubnav').collapse('toggle');
	})

    $('.match-height .divide-1-3').matchHeight();
});