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
  $('.sidebarsubnav').collapse('hide');
	$('.sidebarnav h6').click(function(e){
		e.preventDefault();
		$this= $(this);
		$parentLi = $this.closest('li');
		$parentLi.toggleClass('active');
		$this.next('.sidebarsubnav').collapse('toggle');
	})

    $('.match-height .divide-1-3').matchHeight();
});


var reeceIrrigation = {
	onReady: function() {
		reeceIrrigation.loadMoreListeners();
		reeceIrrigation.loadClicked();
	},
	loadMoreListeners: function (){
		start = 0;
		$('#load-more').click(reeceIrrigation.loadClicked);
	},
	loadClicked: function(e){
		if(e){
			e.preventDefault();
		}
		$.getJSON("results.php",function(data){
			var source = $("#load-template").html();
			var template = Handlebars.compile(source);
			var html = template(data);
			$('#load-result').append(html);
			if (data.remaining<0){
				$('#load-more').remove();
			}
		});
	}

}
$( document ).ready( reeceIrrigation.onReady );