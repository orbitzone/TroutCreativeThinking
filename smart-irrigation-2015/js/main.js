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
	  vertical: true,
	  dots: true,
	  arrows: false,
	  autoplay: true,
	  responsive: [
	    {
	      breakpoint: 768,
	      settings: {
	      	vertical: false,
	        arrows: false
	      }
	    }
	  ]
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

    $('.same-height').matchHeight();
});