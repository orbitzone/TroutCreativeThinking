var moodboard = {};
var hotspots = {};
var homePage = {};
var loveFamily = {};
var loveLuxury = {};
var loveCalm = {};
var shareBoard = {};
var bathroomsWeLove = {};
var bathroomDestinationMakeovers = {};
var becJudd = {};
var mrJasonGrant = {};
var player = {};
var isMobile = (function(a){return /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))})(navigator.userAgent||navigator.vendor||window.opera);

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
	player = {
		obj:{},
		init: function(container, videoId){
			if (typeof(YT) == 'undefined' || typeof(YT.Player) == 'undefined') {
				window.onYouTubeIframeAPIReady = function() {
					player.obj[container] = player.loadPlayer(container, videoId);					
        };
        //This code loads the IFrame Player API code asynchronously.
				var tag = document.createElement('script');
				tag.src = "https://www.youtube.com/iframe_api";
				var firstScriptTag = document.getElementsByTagName('script')[0];
				firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
      } else {
      	if(typeof player.obj[container] !== 'undefined'){
      		player.play(container);
      	}else{
        	player.obj[container] = player.loadPlayer(container, videoId)	;     
      	}
      }
      console.log(player.obj);
		},
		loadPlayer: function(container, videoId){
		 return new YT.Player(container, {
        videoId: videoId,
        width: 356,
        height: 200,
        playerVars: {
          autoplay: 0,
          /*controls: 0,
          modestbranding: 1,
          rel: 0,
          showInfo: 0*/
        },
        events: {
        	'onReady': function(event){
        		player.play(container);
        	}
        }
      });
		},
		play: function(id){
			console.log(id);
			var video = player.obj[id];
			console.log(video);
			video.playVideo();
		},
		stop: function(id){
			console.log(id);
			var video = player.obj[id];
			console.log(video);
		  video.stopVideo();      
		}
	};
	shareBoard = {
		init: function(){
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
			+'		<button type="button" class="share-button share-close" onclick="shareBoard.close(this)"><i class="iconr-minus-dotted"></i></button>'
			+'		<a href="#" target="_blank" class="share-button pinterest"><div class="circle"><i class="iconr-pinterest"></i></div></a>'
			+'		<a href="#" class="share-button email"><div class="circle"><i class="iconr-email"></i></div></a>'
			+'	</div>'
			+'</div>');
			
			TweenMax.to($('#share-hex'),0,{ scale: 0, opacity:1});
			TweenMax.to($('#share-hex .share-button .circle'),0,{ scale: 0});
			
					
			$(document).on('click','.share',function(e){
				shareBoard.show(this);
			});
		},
		show: function(obj){
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
			if(left + $panel.outerWidth() > $(window).width()){
				left = $(window).width() - $panel.outerWidth() - 30;
			}
			if(left < 0){
				left = 30;	
			}
			TweenMax.to($panel,0,{ scale: 0, top: top, left: left });
			TweenMax.to($panel,0.5,{ display:'block', scale: 1, ease: Back.easeOut});
			TweenMax.to($panel.find('.share-close'),1,{ scale: 1, ease: Elastic.easeOut});	
			TweenMax.staggerTo($panel.find('.share-button .circle'),1,{ scale: 1, ease: Elastic.easeOut},0.1);
		},
		close: function(obj){
			var $panel = $(obj).parent();
			TweenMax.to($panel.find('.share-close'),0.2,{ scale: 0, ease: Back.easeOut});	
			TweenMax.staggerTo($panel.find('.share-button .circle'),0.4,{ scale: 0, ease:Back.easeIn},0.1, function(){
				TweenMax.to($panel,0.2,{ scale: 0});	
			});					
		},
	};
	moodboard = {
		init: function(){
			$.ajax({
				cache: false,
				url:'pages/destination-happiness.html',
				success: function(data){
					$('body .ocmain-wrapper').append(data);				
					$(document).on('click','.add-to-moodboard',function(){
						if($(this).hasClass('added')){
							moodboard.remove(this);
						}else{
							moodboard.add(this);
						}					
						return false;
					});
					$(document).on('click','.add-look-to-moodboard',function(){
						var button = this;
						var products = $(this).data('products').trim().split(',');
						
						if($(this).hasClass('added')){
							$(products).each(function(product){
								moodboard.remove(button, product);
							});
							$(this).find('.desc').html("Add to<br/>moodboard");
						}else{
							$(products).each(function(product){
								moodboard.add(button,product);								
							});							
							$(this).find('.desc').html("Added to<br/>moodboard");
						}									
						return false;
					});
					$(document).on('click','#destination-happiness',function(){
						if($(this).hasClass('active')){
							$(this).removeClass('active');
							moodboard.hide();
						}else{
							$(this).addClass('active');
							moodboard.show();
						}
						return false;
					});
					moodboard.resize();
					$(window).on('resize',function(){
						moodboard.resize();
					});
				}
			});			
		},
		products: 0,
		add: function(obj, product){
			moodboard.products += 1;
			$(obj).addClass('added');
			$('#destination-happiness .dh-items').removeClass('empty').find('.number').html(moodboard.products);
			$('#destination-links .dh-items').removeClass('empty').find('.number').html(moodboard.products);
		},
		remove: function(obj, product){
			moodboard.products -= 1;
			$(obj).removeClass('added');
			$('#destination-happiness .dh-items .number').html(moodboard.products);
			$('#destination-links .dh-items .number').html(moodboard.products);
			if(moodboard.products <= 0){
				$('#destination-happiness .dh-items').addClass('empty');
				$('#destination-links .dh-items').addClass('empty');
			}
		},
		show: function(){
			TweenMax.to($('#destination-happiness'),0.5,{ left: -($('#destination-happiness').width() * 0.637168142), ease: Back.easeIn });
			TweenMax.to($('#destination-happiness-content'),0.5,{ left: 0, ease: Power2.easeIn  });
		},
		hide: function(){
			TweenMax.to($('#destination-happiness'),0.5,{ left: 0, ease: Back.easeIn });
			TweenMax.to($('#destination-happiness-content'),0.5,{ left: -$('#destination-happiness-content').width()});
		},
		resize: function(){
			if($(window).width()> 1200){
				//Desktop
				$('#destination-happiness-content').width(900);
			}else{
					if($(window).width() > 992){
						//Tablet landscape
						$('#destination-happiness-content').width(800);
					}else{
						if($(window).width() > 768){
							//Tablet portrait
							$('#destination-happiness-content').width(600);
						}else{
							//Mobile
							$('#destination-happiness-content').width($(window).width());
						}
					}
			}
			if($('#destination-happiness').hasClass('active')){
				$('#destination-happiness').css(
				{
					left: -($('#destination-happiness').width() * 0.637168142)
				});
			}else{
				$('#destination-happiness-content').css({
					left: -$('#destination-happiness-content').width()
				});
			}
		}
	};
	hotsposts = {
		init: function(){
			$('#bathrooms-for-inspiration .hotspot').on('click',function(){
				hotsposts.showData(this);
			});
		},
		showData: function(obj){
			var spot = $(obj).data("spot");
			if($(obj).hasClass('active')){
				$(obj).removeClass('active');
				$('.hotspot-data.spot-'+spot).fadeOut();
			}else{
				$(obj).parent().find('.hotspot').removeClass('active');
				$('.hotspot-data').fadeOut();
				$(obj).addClass('active');
				
				var top = $(obj).position().top + $(obj).outerHeight()+10;
				var left = $(obj).position().left - ($('.hotspot-data.spot-'+spot).outerWidth()/2) + ($(obj).outerHeight()/2);
				var offset = top + $('.hotspot-data.spot-'+spot).outerHeight();
				if( offset > $('#bathrooms-for-inspiration .bathrooms-showcase-section').height()){
					top	= $(obj).position().top - $('.hotspot-data.spot-'+spot).outerHeight() - 10;
				}
				if(top < 0){
					top = 20;
					if($(obj).position().left - $('.hotspot-data.spot-'+spot).outerWidth() > 10){
						left = $(obj).position().left - $('.hotspot-data.spot-'+spot).outerWidth();
					}else{
						left = $(obj).position().left + $(obj).outerWidth() ;
					}
				}
				$('.hotspot-data.spot-'+spot).css(
				{
					top: top,
					left: left
				})
				$('.hotspot-data.spot-'+spot).fadeIn();
				;
			}
		}
	};
	homePage = {
		init: function(){
			$.ajax({
				cache: false,
				url:'pages/homepage.html',
				success: function(data){
					$('#main-content').html(data);
					$('#subscribe form').validate();
				}
			});
		}
	};
	bathroomDestinationMakeovers = {
		init: function(){
			$.ajax({
				cache: false,
				url:'pages/bathroom-destination-makeovers.html',
				success: function(data){
					$('#main-content').html(data);
					$('#bathroom-destination-makeovers .slider').slick({
						slidesToShow: 1,
  					slidesToScroll: 1,
  					infinite: true,
  					prevArrow: "<button type=\"button\" class=\"arrow-prev\"><i class=\"iconr-arrow-left\"></i></button>",
  					nextArrow: "<button type=\"button\" class=\"arrow-next\"><i class=\"iconr-arrow-right\"></i></button>",
					 	responsive: [
					 		{
					      breakpoint: 992,
					      settings: {
					      }
					    },
					    {
					      breakpoint: 768,
					      settings: {
					      }
					    },
					    {
					      breakpoint: 480,
					      settings: {
					      }
					    }
					  ]
					});					
				}
			});
		}
	};
	bathroomsWeLove = {
		init: function(){
			$.ajax({
				cache: false,
				url:'pages/bathrooms-we-love.html',
				success: function(data){
					$('#main-content').html(data);									
				}
			});
		}
	};
	becJudd = {
		init: function(){
			$.ajax({
				cache: false,
				url:'pages/bec-judd.html',
				success: function(data){
					$('#main-content').html(data);
					$('#bec_judd .slider').slick({
						slidesToShow: 1,
  					slidesToScroll: 1,
  					infinite: true,
  					dots: true,
  					prevArrow: "<button type=\"button\" class=\"arrow-prev\"><i class=\"iconr-arrow-left\"></i></button>",
  					nextArrow: "<button type=\"button\" class=\"arrow-next\"><i class=\"iconr-arrow-right\"></i></button>",					 	
					});									
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
		},
		bathroomsForInspiration: function(){
			$.ajax({
				cache: false,
				url: 'pages/family/bathrooms-for-inspiration.html',
				success: function(data){
					$('#main-content').append(data).imagesLoaded().then(function(){
						$('#bathrooms-for-inspiration .products-slide .product').matchHeight();
					});
					
					$('#bathrooms-for-inspiration .products-slide').slick({
						slidesToShow: 4,
  					slidesToScroll: 4,
  					infinite: false,
  					prevArrow: "<button type=\"button\" class=\"arrow-prev\"><i class=\"iconr-arrow-left\"></i></button>",
  					nextArrow: "<button type=\"button\" class=\"arrow-next\"><i class=\"iconr-arrow-right\"></i></button>",
					 	responsive: [
					 		{
					      breakpoint: 992,
					      settings: {
					        arrows: false,
					        slidesToShow: 3,
					        slidesToScroll: 3
					      }
					    },
					    {
					      breakpoint: 768,
					      settings: {
					        arrows: true,
					        slidesToShow: 2,
					        slidesToScroll: 2
					      }
					    },
					    {
					      breakpoint: 480,
					      settings: {
					        arrows: true,
					        slidesToShow: 1,
					        slidesToScroll: 1
					      }
					    }
					  ]
					});
					hotsposts.init();
					$(window).on('resize',function(){
						$('#bathrooms-for-inspiration .part').matchHeight();						
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

					if (isMobile) {
						$("#circular-gallery #circle").addClass("active");									
					}else{
						var controller = new ScrollMagic.Controller();
						var scene = new ScrollMagic.Scene({triggerElement: "#circle"})
										.setClassToggle("#circle", "active")
										.triggerHook(0.5)
										//.addIndicators()
										.addTo(controller);				

					}
					$('.circular-list .description').matchHeight();
					loveFamily.smartStorage();
				}
			});
		},
		smartStorage: function(){
			$.ajax({
				cache: false,
				url: 'pages/family/smart-storage.html',
				success: function(data){
					$('#main-content').append(data).imagesLoaded().then(function(){
						$('#smart-storage .products-slide .product').matchHeight();
					});
					$('#smart-storage .products-slide').slick({
						slidesToShow: 3,
  					slidesToScroll: 3,
  					infinite: false,
  					prevArrow: "<button type=\"button\" class=\"arrow-prev\"><i class=\"iconr-arrow-left\"></i></button>",
  					nextArrow: "<button type=\"button\" class=\"arrow-next\"><i class=\"iconr-arrow-right\"></i></button>",
					 	responsive: [
					 	{
					      breakpoint: 992,
					      settings: {
					        arrows: false,
					        slidesToShow: 3,
					        slidesToScroll: 3 
					      }
					    },
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
  					infinite: true,
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
					$('#main-content').append(data).imagesLoaded().then(function(){
						$('#favourites .product-wrap').matchHeight();
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
		},
		bathroomsForInspiration: function(){
			$.ajax({
				cache: false,
				url: 'pages/luxury/bathrooms-for-inspiration.html',
				success: function(data){
					$('#main-content').append(data).imagesLoaded().then(function(){
						$('#bathrooms-for-inspiration .products-slide .product').matchHeight();
					});
					$('#bathrooms-for-inspiration .slider').slick({
						slidesToShow: 1,
  					slidesToScroll: 1,
  					infinite: true,
  					arrows: false,
  					dots: true
  				});
					$('#bathrooms-for-inspiration .products-slide').slick({
						slidesToShow: 4,
  					slidesToScroll: 4,
  					infinite: false,
  					prevArrow: "<button type=\"button\" class=\"arrow-prev\"><i class=\"iconr-arrow-left\"></i></button>",
  					nextArrow: "<button type=\"button\" class=\"arrow-next\"><i class=\"iconr-arrow-right\"></i></button>",
					 	responsive: [
					 		{
					      breakpoint: 992,
					      settings: {
					        arrows: false,
					        slidesToShow: 3,
					        slidesToScroll: 3
					      }
					    },
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
					hotsposts.init();
					$(window).on('resize',function(){
						$('#bathrooms-for-inspiration .part').matchHeight();						
					});
					$(window).resize();
					loveLuxury.showers();
				}
			});
		},
		showers: function(){
			$.ajax({
				cache: false,
				url: 'pages/luxury/showers.html',
				success: function(data){
					$('#main-content').append(data);
					loveLuxury.circularGallery();
				}
			});			
		},
		circularGallery: function(){
			$.ajax({
				cache: false,
				url: 'pages/luxury/circular-gallery.html',
				success: function(data){
					$('#main-content').append(data);
					loveLuxury.products();
				}
			});						
		},
		products: function(){
			$.ajax({
				cache: false,
				url: 'pages/luxury/products.html',
				success: function(data){
					$('#main-content').append(data).imagesLoaded().then(function(){
						$('#products .featured-products .product').matchHeight();
					});
					$('#products .slider').slick({
						slidesToShow: 1,
  					slidesToScroll: 1,
  					infinite: false,
  					arrows: true,
  					dots: true,
  					prevArrow: "<button type=\"button\" class=\"arrow-prev\"><i class=\"iconr-arrow-left\"></i></button>",
  					nextArrow: "<button type=\"button\" class=\"arrow-next\"><i class=\"iconr-arrow-right\"></i></button>",
  					responsive: [
					 		{
					      breakpoint: 992,
					      settings: {
					        dots: false					        
					      }
					    }
					  ]
					});

					loveLuxury.hotelInspiredLook();
				}
			});				
		},
		hotelInspiredLook: function(){
			$.ajax({
				cache: false,
				url: 'pages/luxury/hotel-inspired-look.html',
				success: function(data){
					$('#main-content').append(data);
					$('#hotel-inspired-look .slider').slick({
						slidesToShow: 1,
  					slidesToScroll: 1,
  					infinite: false,
  					swipe: false,
  					prevArrow: "<button type=\"button\" class=\"arrow-prev\"><i class=\"iconr-arrow-left\"></i></button>",
  					nextArrow: "<button type=\"button\" class=\"arrow-next\"><i class=\"iconr-arrow-right\"></i></button>"					 	
					});
					$('#hotel-inspired-look .buttons-slider').slick({
						slidesToShow: 1,
  					slidesToScroll: 1,
  					infinite: true,
  					swipe: true,
  					prevArrow: "<button type=\"button\" class=\"arrow-prev\"><i class=\"iconr-arrow-left\"></i></button>",
  					nextArrow: "<button type=\"button\" class=\"arrow-next\"><i class=\"iconr-arrow-right\"></i></button>"					 	
					});
					$('#hotel-inspired-look .pans-slider').slick({
						slidesToShow: 1,
  					slidesToScroll: 1,
  					infinite: true,
  					swipe: true,
  					prevArrow: "<button type=\"button\" class=\"arrow-prev\"><i class=\"iconr-arrow-left\"></i></button>",
  					nextArrow: "<button type=\"button\" class=\"arrow-next\"><i class=\"iconr-arrow-right\"></i></button>"					 	
					});
					loveLuxury.favourites();
				}
			});			
		},
		favourites: function(){
			$.ajax({
				cache: false,
				url: 'pages/luxury/favourites.html',
				success: function(data){
					$('#main-content').append(data).imagesLoaded().then(function(){
						$('#favourites .product-wrap').matchHeight();
						$(window).resize();
					});
					loveLuxury.footer();
				}
			});
		},
		footer: function(){
			$.ajax({
				cache: false,
				url: 'pages/luxury/footer-ads.html',
				success: function(data){
					$('#main-content').append(data);
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
		},
		bathroomsForInspiration: function(){
			$.ajax({
				cache: false,
				url: 'pages/calm/bathrooms-for-inspiration.html',
				success: function(data){
					$('#main-content').append(data).imagesLoaded().then(function(){
						$('#bathrooms-for-inspiration .products-slide .product').matchHeight();
					});
					$('#bathrooms-for-inspiration .slider').slick({
						slidesToShow: 1,
  					slidesToScroll: 1,
  					infinite: true,
  					arrows: false,
  					dots: true
  				});
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
					        dots: true,
					        slidesToShow: 2,
					        slidesToScroll: 2
					      }
					    },
					    {
					      breakpoint: 480,
					      settings: {
					        arrows: false,
					        dots: true,
					        slidesToShow: 1,
					        slidesToScroll: 1
					      }
					    }
					  ]
					});
					hotsposts.init();
					$(window).on('resize',function(){
						$('#bathrooms-for-inspiration .part').matchHeight();						
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
					$('#main-content').append(data).imagesLoaded().then(function(){
						$('#water-therapy .product').matchHeight();
					});;
					$('#water-therapy .video-slider').slick({
						slidesToShow: 1,
  					slidesToScroll: 1,
  					infinite: false,
  					arrows: false,
  					swipe: false
					})
					$('#water-therapy .video .play').on('click', function(){
						$('#water-therapy .video-slider').slick('slickNext');
						player.init('methven-video','9SMTB_xeuM0');
					});
					$('#water-therapy .close-video').on('click', function(){
						player.stop('methven-video');
						$('#water-therapy .video-slider').slick('slickPrev');
					});					
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
					$('#footer-ads .video-slider').slick({
						slidesToShow: 1,
  					slidesToScroll: 1,
  					infinite: false,
  					arrows: false,
  					swipe: false
					})
					$('#footer-ads .video .play').on('click', function(){
						$('#footer-ads .video-slider').slick('slickNext');
						player.init('working-display-video','01fdc5wkep8');
					});
					$('#footer-ads .close-video').on('click', function(){
						player.stop('working-display-video');
						$('#footer-ads .video-slider').slick('slickPrev');
					});
					
				}
			});
		}
	};
	mrJasonGrant = {
		init: function(){
			$.ajax({
				cache: false,
				url:'pages/mr-jason-grant.html',
				success: function(data){
					$('#main-content').html(data);									
					$('.products-slide').slick({
						slidesToShow: 4,
						slidesToScroll: 4,
						infinite: false,
						prevArrow: "<button type=\"button\" class=\"arrow-prev\"><i class=\"iconr-arrow-left\"></i></button>",
						nextArrow: "<button type=\"button\" class=\"arrow-next\"><i class=\"iconr-arrow-right\"></i></button>",
						responsive: [
						{

						}
						]
					});
				}
			});			
		}
	};
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
	  if(section == 'mr-jason-grant'){
	  	mrJasonGrant.init();
	  }
	  if(section == undefined){
	  	homePage.init();
	  }
	  $('body').attr('class','spring-2015 '+section);
	};
	/*window.addEventListener('popstate', function(e) {
	  var section = e.state;
	  if( section == null){
	  	section = "homepage";
	  }else{
  	section = e.state.section;
  	}
  	requestContent(section);
    document.title = 'Title';
	  
	});*/
	$(document).on('load',function(){
		$(window).resize();
	});
	$(document).on('mouseover','.hex',function(){
		TweenMax.to($(this),0.5,{scale: 1.2});
	});
	$(document).on('mouseout','.hex',function(){
		TweenMax.to($(this),0.5,{scale: 1});
	});
	
	function init(){
		$('html').addClass('spring-2015');
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
		if($('body').hasClass('bathroom-destination-makeovers')){
			bathroomDestinationMakeovers.init();
		}
		if($('body').hasClass('bathrooms-we-love')){
			bathroomsWeLove.init();
		}
		if($('body').hasClass('bec-judd')){
			becJudd.init();
		}
		if($('body').hasClass('mr-jason-grant')){
			mrJasonGrant.init();
		}
		$(document).on('touchstart','#destination-happiness-content a, #main-content a, #main-content button', function(){
			TweenMax.to($(this),0.5,{ scale: 0.9, ease: Power2.easeOut });
		}).on('touchend','#destination-happiness-content a, #main-content a, #main-content button', function(){
			TweenMax.to($(this),0.5,{ scale: 1, ease: Elastic.easeOut });
		});
		moodboard.init();	
		shareBoard.init();				
	};
	init();
});