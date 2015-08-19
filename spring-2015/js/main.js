var loveFamily = {};
var loveLuxury = {};
var loveCalm = {};
var homePage = {};
$.fn.imagesLoaded = function () {

    $imgs = this.find('img[src!=""]');
    // if there's no images, just return an already resolved promise
    if (!$imgs.length) {return $.Deferred.resolve().promise();}

    // for each image, add a deferred object to the array which resolves when the image is loaded
    var dfds = [];  
    $imgs.each(function(){

        var dfd = $.Deferred();
        dfds.push(dfd);
        var img = new Image();
        img.onload = function(){dfd.resolve();}
        img.src = this.src;

    });

    // return a master promise object which will resolve when all the deferred objects have resolved
    // IE - when all the images are loaded
    return $.when.apply($,dfds);

};
jQuery(function($){

	homePage = {
		init: function(){
			$.ajax({
				cache: false,
				url:'pages/homepage.html',
				success: function(data){
					$('#main-content').html(data);					
				}
			});
		}
	};
	loveFamily = {
		init: function(){
			$.ajax({
				cache: false,
				url:'pages/family/collection-intro.html',
				success: function(data){
					$('#main-content').html(data);
					loveFamily.bathroomsForInspiration();
				}
			});
			$('#main-content img').load(function(){
				$(window).resize();
			});
			$(document).on('click','.share',function(e){
				loveFamily.showShareBoard(this);
			});
		},
		bathroomsForInspiration: function(){
			$.ajax({
				cache: false,
				url: 'pages/family/bathrooms-for-inspiration.html',
				success: function(data){
					$('#main-content').append(data);
					
					$('#bathrooms-for-inspiration .products-slide').slick({
						slidesToShow: 4,
  					slidesToScroll: 4,
  					infinite: false,
  					prevArrow: "<button type=\"button\" class=\"arrow-prev\"><i class=\"iconr-arrow-left\"></i></button>",
  					nextArrow: "<button type=\"button\" class=\"arrow-next\"><i class=\"iconr-arrow-right\"></i></button>",
					 	responsive: [
					    {
					      breakpoint: 768,
					      settings: {
					        arrows: false,
					        slidesToShow: 2,
					        slidesToScroll: 2
					      }
					    },
					    {
					      breakpoint: 480,
					      settings: {
					        arrows: false,
					        slidesToShow: 1,
					        slidesToScroll: 1
					      }
					    }
					  ]
					});
					TweenMax.to($('#share-hex'),0,{ scale: 0});
					TweenMax.to($('#share-hex .share-button').not('.share-close'),0,{ scale: 0});
					$(window).on('resize',function(){
						$('#bathrooms-for-inspiration .part').matchHeight();
						$('#bathrooms-for-inspiration button.circular').matchHeight();
					});
					$(window).resize();
					loveFamily.circularGallery();
				}
			});
		},
		circularGallery: function(){
			$.ajax({
				cache: false,
				url: 'pages/family/circular-gallery.html',
				success: function(data){
					$('#main-content').append(data);
					loveFamily.smartStorage();
				}
			});
		},
		smartStorage: function(){
			$.ajax({
				cache: false,
				url: 'pages/family/smart-storage.html',
				success: function(data){
					$('#main-content').append(data);
					$('#smart-storage .products-slide').slick({
						slidesToShow: 3,
  					slidesToScroll: 3,
  					infinite: false,
  					prevArrow: "<button type=\"button\" class=\"arrow-prev\"><i class=\"iconr-arrow-left\"></i></button>",
  					nextArrow: "<button type=\"button\" class=\"arrow-next\"><i class=\"iconr-arrow-right\"></i></button>",
					 	responsive: [
					    {
					      breakpoint: 768,
					      settings: {
					        arrows: false,
					        slidesToShow: 2,
					        slidesToScroll: 2
					      }
					    },
					    {
					      breakpoint: 480,
					      settings: {
					        arrows: false,
					        slidesToShow: 1,
					        slidesToScroll: 1
					      }
					    }
					  ]
					});
					loveFamily.relationshipBliss();
				}
			});
		},
		relationshipBliss: function(){
			$.ajax({
				cache: false,
				url: 'pages/family/relationship-bliss.html',
				success: function(data){
					$('#main-content').append(data);
					$('#relationship-bliss .slides').slick({
						slidesToShow: 1,
  					slidesToScroll: 1,
  					infinite: false,
  					prevArrow: "<button type=\"button\" class=\"arrow-prev\"><i class=\"iconr-arrow-left\"></i></button>",
  					nextArrow: "<button type=\"button\" class=\"arrow-next\"><i class=\"iconr-arrow-right\"></i></button>",
					 	responsive: [
					    {
					      breakpoint: 768,
					      settings: {
					        arrows: false,
					        slidesToShow: 1,
					        slidesToScroll: 1
					      }
					    }
					  ]
					});
					loveFamily.showerSettings();
				}
			});
		},
		showerSettings: function(){
			$.ajax({
				cache: false,
				url: 'pages/family/shower-settings.html',
				success: function(data){
					$('#main-content').append(data);
					loveFamily.favourites();
				}
			});
		},
		favourites: function(){
			$.ajax({
				cache: false,
				url: 'pages/family/favourites.html',
				success: function(data){
					$('#main-content').append(data);
					$('#favourites .product-wrap').matchHeight();
					$('#favourites .product-wrap img').on('load', function(){
						$(window).resize();
					});
					loveFamily.footer();
				}
			});
		},
		footer: function(){
			$.ajax({
				cache: false,
				url: 'pages/family/footer-ads.html',
				success: function(data){
					$('#main-content').append(data);
				}
			});
		},
		showHotspotData: function(obj){
			var spot = $(obj).data("spot");
			$(obj).toggleClass('active');
			if($(obj).hasClass('active')){
				var top = $(obj).position().top + $(obj).outerHeight()+10;
				var left = $(obj).position().left - ($('.hotspot-data.spot-'+spot).outerWidth()/2) + ($(obj).outerHeight()/2);
				$('.hotspot-data.spot-'+spot).css(
				{
					top: top,
					left: left
				})
				$('.hotspot-data.spot-'+spot).fadeIn();
			}else{
				$('.hotspot-data.spot-'+spot).fadeOut();
			}
		},
		showShareBoard: function(obj){
			var $panel = $('#share-hex');
			var data = {
				url: $(obj).data('url'),
				encodedUrl: encodeURIComponent($(obj).data('url')),
				img: $(obj).data('img'),
				title: $(obj).data('title'),
				via: $(obj).data('via'),
				hashtags: $(obj).data('url')
			};

			$panel.find('.share-button.facebook').attr('href','http://www.facebook.com/sharer.php?u='+data.encodedUrl+'&title='+data.title);
			$panel.find('.share-button.twitter').attr('href','https://twitter.com/share?url='+data.encodedUrl+'&text='+data.title+'&via='+data.via+'&hashtags='+data.hashtags);
			$panel.find('.share-button.pinterest').attr('href','https://pinterest.com/pin/create/bookmarklet/?media='+data.img+'&url='+data.encodedUrl+'&is_video='+data.is_video+'&description='+data.title);
			$panel.find('.share-button.email').attr('href','mailto:?subject='+data.title+'&body=Check this out: '+data.url);

			var top = $(obj).offset().top + $(obj).outerHeight()/2 - $panel.outerHeight()/2;
			var left = $(obj).offset().left + ($(obj).outerWidth()/2) - $panel.outerWidth()/2;
			if(left + ($panel.outerWidth()/2) > $(window).width()){
				left = $(window).width() - $panel.outerWidth() - 30;
			}
			if(left < 0){
				left = 30;	
			}
			TweenMax.to($panel,0,{ scale: 0, top: top, left: left });
			TweenMax.to($panel,0.5,{ display:'block', scale: 1, ease: Back.easeOut});
			TweenMax.to($panel.find('.share-close'),1,{ scale: 1, ease: Elastic.easeOut});	
			TweenMax.staggerTo($panel.find('.share-button').not('.share-close'),1,{ scale: 1, ease: Elastic.easeOut},0.1);
		},
		closeShareBoard: function(obj){
			var $panel = $(obj).parent();
			TweenMax.to($panel.find('.share-close'),0.2,{ scale: 0, ease: Back.easeOut});	
			TweenMax.staggerTo($panel.find('.share-button').not('.share-close'),0.4,{ scale: 0, ease:Back.easeIn},0.1, function(){
				TweenMax.to($panel,0.2,{ scale: 0});	
			});					
		},
		showerSetting: function(obj){
			var type = $(obj).data('type');
			$('#shower-settings .shower-image').removeClass('soft-rain intense-rain massage');
			if($(obj).hasClass('active')){
				$(obj).removeClass('active');
			}else{
				$('#shower-settings .shower_rain').removeClass('active');
				$(obj).addClass('active');
				$('#shower-settings .shower-image').addClass(type);
			}
		},
		startBathTalk: function(){
			$('#relationship-bliss .slides').slick('slickNext');
		}
	}
	loveLuxury = {
		init: function(){
			$.ajax({
				cache: false,
				url:'pages/luxury/collection-intro.html',
				success: function(data){
					$('#main-content').html(data);
					loveLuxury.bathroomsForInspiration();
				}
			});
			$('#main-content img').load(function(){
				$(window).resize();
			});
			$(document).on('click','.share',function(e){
				loveFamily.showShareBoard(this);
			});
		},
		bathroomsForInspiration: function(){
			$.ajax({
				cache: false,
				url: 'pages/luxury/bathrooms-for-inspiration.html',
				success: function(data){
					$('#main-content').append(data);
					
					$('#bathrooms-for-inspiration .products-slide').slick({
						slidesToShow: 4,
  					slidesToScroll: 4,
  					infinite: false,
  					prevArrow: "<button type=\"button\" class=\"arrow-prev\"><i class=\"iconr-arrow-left\"></i></button>",
  					nextArrow: "<button type=\"button\" class=\"arrow-next\"><i class=\"iconr-arrow-right\"></i></button>",
					 	responsive: [
					    {
					      breakpoint: 768,
					      settings: {
					        arrows: false,
					        slidesToShow: 2,
					        slidesToScroll: 2
					      }
					    },
					    {
					      breakpoint: 480,
					      settings: {
					        arrows: false,
					        slidesToShow: 1,
					        slidesToScroll: 1
					      }
					    }
					  ]
					});
					TweenMax.to($('#share-hex'),0,{ scale: 0});
					TweenMax.to($('#share-hex .share-button').not('.share-close'),0,{ scale: 0});
					$(window).on('resize',function(){
						$('#bathrooms-for-inspiration .part').matchHeight();
						$('#bathrooms-for-inspiration button.circular').matchHeight();
					});
					$(window).resize();
					//loveFamily.circularGallery();
				}
			});
		}
	};
	loveCalm = {
		init: function(){
			$.ajax({
				cache: false,
				url:'pages/calm/collection-intro.html',
				success: function(data){
					$('#main-content').html(data);
					loveCalm.bathroomsForInspiration();
				}
			});
			$('#main-content img').load(function(){
				$(window).resize();
			});
			$(document).on('click','.share',function(e){
				loveFamily.showShareBoard(this);
			});
		},
		bathroomsForInspiration: function(){
			$.ajax({
				cache: false,
				url: 'pages/calm/bathrooms-for-inspiration.html',
				success: function(data){
					$('#main-content').append(data);
					
					$('#bathrooms-for-inspiration .products-slide').slick({
						slidesToShow: 4,
  					slidesToScroll: 4,
  					infinite: false,
  					prevArrow: "<button type=\"button\" class=\"arrow-prev\"><i class=\"iconr-arrow-left\"></i></button>",
  					nextArrow: "<button type=\"button\" class=\"arrow-next\"><i class=\"iconr-arrow-right\"></i></button>",
					 	responsive: [
					    {
					      breakpoint: 768,
					      settings: {
					        arrows: false,
					        slidesToShow: 2,
					        slidesToScroll: 2
					      }
					    },
					    {
					      breakpoint: 480,
					      settings: {
					        arrows: false,
					        slidesToShow: 1,
					        slidesToScroll: 1
					      }
					    }
					  ]
					});
					TweenMax.to($('#share-hex'),0,{ scale: 0});
					TweenMax.to($('#share-hex .share-button').not('.share-close'),0,{ scale: 0});
					$(window).on('resize',function(){
						$('#bathrooms-for-inspiration .part').matchHeight();
						$('#bathrooms-for-inspiration button.circular').matchHeight();
					});
					$(window).resize();
					loveCalm.waterTherapy();
				}
			});
		},
		waterTherapy: function(){
			$.ajax({
				cache: false,
				url: 'pages/calm/water-therapy.html',
				success: function(data){
					$('#main-content').append(data);
					loveCalm.tips();
				}
			});
		},
		tips: function(){
			$.ajax({
				cache: false,
				url: 'pages/calm/tips.html',
				success: function(data){
					$('#main-content').append(data);
					loveCalm.colourPicker();
				}
			});
		},
		colourPicker: function(){
			$.ajax({
				cache: false,
				url: 'pages/calm/colour-picker.html',
				success: function(data){
					$('#main-content').append(data);
					$('#colour-picker .slider').slick({
						slidesToShow: 1,
  					slidesToScroll: 1,
  					infinite: false,
  					swipe: false,
  					prevArrow: "<button type=\"button\" class=\"arrow-prev\"><i class=\"iconr-arrow-left\"></i></button>",
  					nextArrow: "<button type=\"button\" class=\"arrow-next\"><i class=\"iconr-arrow-right\"></i></button>"					 	
					});
					loveCalm.favourites();
				}
			});
		},
		favourites: function(){
			$.ajax({
				cache: false,
				url: 'pages/calm/favourites.html',
				success: function(data){
					$('#main-content').append(data).imagesLoaded().then(function(){
						$('#favourites .product-wrap').matchHeight();
						$(window).resize();
					});
					loveCalm.footer();
				}
			});
		},
		footer: function(){
			$.ajax({
				cache: false,
				url: 'pages/calm/footer-ads.html',
				success: function(data){
					$('#main-content').append(data);
				}
			});
		}
	};
	if($('body').hasClass('homepage')){
		homePage.init();	
	}
	if($('body').hasClass('love-family')){
		loveFamily.init();
	}
	if($('body').hasClass('love-luxury')){
		loveLuxury.init();
	}
	if($('body').hasClass('love-calm')){
		loveCalm.init();
	}	

	$(document).on('click','.load_page',function(){
		var data = { section: $(this).data('section')};
		var url = $(this).attr('href');
		history.pushState(data, null, url);
		requestContent($(this).data('section'));
		return false;
	});
	function requestContent(section) {
		if(section == "homepage"){
			homePage.init();
		}
	  if(section == 'love-family'){
	  	loveFamily.init();
	  }
	  if(section == 'love-luxury'){
	  	loveLuxury.init();
	  }
	  if(section == 'love-calm'){
	  	loveCalm.init();
	  }
	  $('body').attr('class','spring-2015 '+section);
	}
	window.addEventListener('popstate', function(e) {
	  var section = e.state;
	  if(section !== null){
	  	section = e.state.section;
	  	requestContent(section);
	    document.title = 'Title';
	  }
	});
	$(document).on('load',function(){
		$(window).resize();
	});
	$(document).on('mouseover','.hex',function(){
		TweenMax.to($(this),0.5,{scale: 1.2});
	});
	$(document).on('mouseout','.hex',function(){
		TweenMax.to($(this),0.5,{scale: 1});
	});
	$('body .ocmain-wrapper').append('<div id="share-hex" class="share-hex">'
		+'<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"'
+'			 viewBox="0 0 52 52" enable-background="new 0 0 52 52" xml:space="preserve" width="245" height="265">'
+'		 	<path class="bg" d="M3.2,17.3c0-2.4,1.7-5.4,3.8-6.6L22.2,2c2.1-1.2,5.6-1.2,7.7,0L45,10.7c2.1,1.2,3.8,4.2,3.8,6.6v17.4'
+'c0,2.4-1.7,5.4-3.8,6.6L29.8,50c-2.1,1.2-5.6,1.2-7.7,0L7,41.3c-2.1-1.2-3.8-4.2-3.8-6.6V17.3z"/>'
+'			<path class="border" d="M26,51.5c-1.5,0-3-0.3-4.1-1L6.8,41.8c-2.2-1.3-4.1-4.4-4.1-7V17.3c0-2.6,1.8-5.8,4.1-7l15.1-8.7c1.1-0.6,2.5-1,4.1-1'
+'s3,0.3,4.1,1l15.1,8.7c2.2,1.3,4.1,4.5,4.1,7v17.4c0,2.6-1.8,5.8-4.1,7l-15.1,8.7C29,51.1,27.5,51.5,26,51.5z M26,1.5'
+'c-1.4,0-2.6,0.3-3.6,0.8L7.3,11.1c-1.9,1.1-3.6,3.9-3.6,6.2v17.4c0,2.2,1.6,5.1,3.6,6.2l15.1,8.7c0.9,0.5,2.2,0.8,3.6,0.8'
+'s2.6-0.3,3.6-0.8l15.1-8.7c1.9-1.1,3.6-3.9,3.6-6.2V17.3c0-2.2-1.6-5.1-3.6-6.2L29.6,2.4C28.6,1.8,27.4,1.5,26,1.5z"/>							'
+'		</svg>'
+'		<a href="#" target="_blank" class="share-button facebook"><div class="circle"><i class="iconr-facebook"></i></div></a>'
+'		<a href="#" target="_blank" class="share-button twitter"><div class="circle"><i class="icon-twitter"></i></div></a>'
+'		<button type="button" class="share-button share-close" onclick="loveFamily.closeShareBoard(this)"><i class="iconr-minus-dotted"></i></button>'
+'		<a href="#" target="_blank" class="share-button pinterest"><div class="circle"><i class="iconr-pinterest"></i></div></a>'
+'		<a href="#" class="share-button email"><div class="circle"><i class="iconr-email"></i></div></a>'
+'	</div>'
+'</div>');
TweenMax.to($('#share-hex'),0,{ scale: 0, opacity:1});
});