$(document).ready(function() {
    product_pages.init();
});
var isMobile = {
    Windows: function() {
        return /IEMobile/i.test(navigator.userAgent);
    },
    Android: function() {
        return /Android/i.test(navigator.userAgent);
    },
    BlackBerry: function() {
        return /BlackBerry/i.test(navigator.userAgent);
    },
    iOS: function() {
        return /iPhone|iPad|iPod/i.test(navigator.userAgent);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Windows());
    }
};

var isIE = function(){
  var sAgent = window.navigator.userAgent;
  var Idx = sAgent.indexOf("MSIE");

  // If IE, return version number.
  if (Idx > 0){
    return parseInt(sAgent.substring(Idx+ 5, sAgent.indexOf(".", Idx)));
  }
  // If IE 11 then look for Updated user agent string.
  else if (!!navigator.userAgent.match(/Trident\/7\./)){
    return 11;
  }
  else{
    return false; //It is not IE
  }
};
var sameHeight = function(obj){
  var currentTallest = 0,
   currentRowStart = 0,
   rowDivs = new Array(),
   $el,
   topPosition = 0;
   $(obj).height('auto');
   $(obj).each(function() {
    $el = $(this);
    topPosition = $el.offset().top;
     
    if (currentRowStart != topPosition) {
      for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
        rowDivs[currentDiv].height(currentTallest);
      }
      rowDivs.length = 0;
      currentRowStart = topPosition;
      currentTallest = $el.height();
      rowDivs.push($el);
    } else {
     rowDivs.push($el);
     currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
    }
    for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
     rowDivs[currentDiv].height(currentTallest);
    }            
  });    
};
var ieV = isIE();

/* Youtube API code for channel page */
// 1. This code gets GET parameters for us (in case we wish a
// specific video to autoplay.
var $_GET = {};

document.location.search.replace(/\??(?:([^=]+)=([^&]*)&?)/g, function () {
    function decode(s) {
        return decodeURIComponent(s.split("+").join(" "));
    }

    $_GET[decode(arguments[1])] = decode(arguments[2]);
});

// 2. This code loads the IFrame Player API code asynchronously.
var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// 3. This function creates an <iframe> (and YouTube player)
//    after the API code downloads.
var player;
function onYouTubeIframeAPIReady() {
    playerDivID = 'video-lightbox-container';
    player = new YT.Player(playerDivID, {
        height: '500',
        width: '640',
        videoId: '',
        playerVars: {
            'showinfo': 0,
            'rel': 0,
            'controls': 1,
            'modestbranding': 1,
            'color': 'white',
            'theme': 'light',
            'autohide': 1,
            'wmode':'opaque'
        },
        events: {
            'onReady': onPlayerReady
        }
    });
}

// 4. The API will call this function when the video player is ready.
function onPlayerReady(event) {
    
}

var scrollAnimation = {
  element: $('html, body'),
  animate: function(top){
    scrollAnimation.animating= true;
    scrollAnimation.element.on("scroll mousedown wheel DOMMouseScroll mousewheel keyup touchmove", function(){
        scrollAnimation.animating= false;
       scrollAnimation.element.stop();
    });
    scrollAnimation.element.stop().animate({
      scrollTop: top
    }, 500, function(){
      scrollAnimation.element.off("scroll mousedown wheel DOMMouseScroll mousewheel keyup touchmove");
      scrollAnimation.animating= false;
    });

  },
  animating: false
};

var deviceMobile = isMobile.any();
var product_pages = {
    itemsInCart: 0,
    itemsInWishlist: 0,
    init: function() {
        var section = $('#product-pages').data('section');
        if (typeof this[section] === 'function') {
            this[section]();
        }
        if($('#shopping-cart-widget').length > 0){
            this.widget();
        }
    },
    checkoutCart: function() {
        //======================================================================
        //======================================================================
        //START CHECKOUT CART
        //======================================================================
        //======================================================================
        //RADIO BUTTONS - ON LOAD
        $("input[type=radio]:checked").each(
            function() {
                $("label[for='" + $(this).attr("id") + "']").addClass("selected");
            });
        //RADIO BUTTON - ON SELECTED
        $("input[type=radio]").change(
            function() {
                $("input[type=radio][name=" + $(this).attr("name") + "]").each(
                    function() {
                        if ($(this).is(':checked')) {
                            $("label[for='" + $(this).attr("id") + "']").addClass("selected");
                        } else {
                            $("label[for='" + $(this).attr("id") + "']").removeClass("selected");
                        }
                    });
            });
        //
        //BRING UP PICK UP AUTO COMPLETE INPUT FIELD
        //
        $(".action-pickup-address-change").click(function() {
            $(".action-pickup-address-change").fadeOut("fast",
                function() {
                    $(".action-pickup-address-cancel").fadeIn("fast");
                    $(".action-pickup-address-cancel").addClass("active");
                    $(".action-pickup-address-change").removeClass("active");
                });
            $(".branch-info-autocomplete").fadeIn("fast");
        });
        $(".action-pickup-address-cancel").click(function() {
            $(".action-pickup-address-cancel").fadeOut("fast",
                function() {
                    $(".action-pickup-address-change").fadeIn("fast");
                    $(".action-pickup-address-change").addClass("active");
                    $(".action-pickup-address-cancel").removeClass("active");
                });
            $(".branch-info-autocomplete").fadeOut("slow",
                function() {
                    $("#pickupbranch-results").html("");
                });
        });
        //
        //PICK UP BRACH SEARCH AUTO COMPLETE
        //
        $("#pickup_branch").focusin(function() {
            if ($(this).val().length == 0) {
                var searchField = $('#pickup_branch').val();
                var regex = new RegExp(searchField, "i");
                var output = '';
                var totalresults = 0;
                $("#pickup_branch").removeClass("error");
                $.getJSON('data/nearestpickupbranch.json', function(data) {
                    $.each(data, function(key, val) {
                        if ((val.branchname.search(regex) != -1)) {
                            output += '<div class="one-result">';
                            output += '<span class="branch-name">';
                            output += val.branchname;
                            output += '</span>';
                            output += '<span class="branch-address">';
                            output += val.address;
                            output += '</span>';
                            output += '<span class="branch-phone">';
                            output += val.phone;
                            output += '</span>';
                            output += '</div>';
                            totalresults++;
                        }
                    });
                    if (totalresults) {
                        output = '<header>Nearest Stores</header>' + output;
                    } else {
                        output = '<header>Nothing found</header>';
                    }
                    $('#pickupbranch-results').html(output);
                    $('#pickupbranch-results').addClass("active");
                    $(".one-result").click(function() {
                        $("#branchinfo-details").html("<h6 class=\"branch-name\">" + $(this).children(".branch-name").html() + "</h6><p>" + $(this).children(".branch-address").html() + "</p><p>" + $(this).children(".branch-phone").html() + "</p>");
                        $("#branchinfo-actions").addClass("action-change");
                        $("#pickup_branch").val($(this).children(".branch-name").html());
                        $(".branch-info-autofill").addClass("active");
                        $('#pickupbranch-results').html("");
                        $('#pickupbranch-results').removeClass("active");
                        $(".branch-info-autocomplete").fadeOut("slow");
                        $(".action-pickup-address-cancel").fadeOut("fast",
                            function() {
                                $(".action-pickup-address-change").fadeIn("fast");
                                $(".action-pickup-address-change").addClass("active");
                                $(".action-pickup-address-cancel").removeClass("active");
                            });
                    });
                });
            }
        });
        $("#pickup_branch").keyup(function() {
            if ($(this).val().length > 0) {
                var searchField = $('#pickup_branch').val();
                var regex = new RegExp(searchField, "i");
                var output = '';
                var totalresults = 0;
                $("#pickup_branch").removeClass("error");
                $.getJSON('data/searchpickupbranch.json', function(data) {
                    $.each(data, function(key, val) {
                        if ((val.branchname.search(regex) != -1)) {
                            output += '<div class="one-result">';
                            output += '<span class="branch-name">';
                            output += val.branchname;
                            output += '</span>';
                            output += '<span class="branch-address">';
                            output += val.address;
                            output += '</span>';
                            output += '<span class="branch-phone">';
                            output += val.phone;
                            output += '</span>';
                            output += '</div>';
                            totalresults++;
                        }
                    });
                    if (totalresults) {
                        output = '<header>Nearest Stores</header>' + output;
                    } else {
                        output = '<header>Nothing found</header>';
                    }
                    $('#pickupbranch-results').html(output);
                    $('#pickupbranch-results').addClass("active");
                    $(".one-result").click(function() {
                        $("#branchinfo-details").html("<h6 class=\"branch-name\">" + $(this).children(".branch-name").html() + "</h6><p>" + $(this).children(".branch-address").html() + "</p><p>" + $(this).children(".branch-phone").html() + "</p>");
                        $("#branchinfo-actions").addClass("action-change");
                        $("#pickup_branch").val($(this).children(".branch-name").html());
                        $(".branch-info-autofill").addClass("active");
                        $('#pickupbranch-results').html("");
                        $('#pickupbranch-results').removeClass("active");
                        $(".branch-info-autocomplete").fadeOut("slow");
                        $(".action-pickup-address-cancel").fadeOut("fast",
                            function() {
                                $(".action-pickup-address-change").fadeIn("fast");
                                $(".action-pickup-address-change").addClass("active");
                                $(".action-pickup-address-cancel").removeClass("active");
                            });
                    });
                });
            } else if ($(this).val().length == 0) {
                $('#pickupbranch-results').removeClass("active");
                $('#pickupbranch-results').html("");
            } else {
                $('#pickupbranch-results').addClass("active");
                $('#pickupbranch-results').html("");
            }
        });
        //
        //INIT DATE PICKER
        //
        $("#receiving_date").datepicker({
            dateFormat: "DD, dd M yy",
            minDate: 0
        });
        $("#anim").change(function() {
            $("#receiving_date").datepicker("option", "showAnim", "fadeIn");
        });
        //
        //INIT ALL DROP DOWN MENUS
        //
        $('#product-pages select').selectric();
        //
        //POPULATE DROP DOWN MENU - PICK UP CONTACT
        //
        $.getJSON('data/pickupcontacts.json', function(data) {
            var alloptions = "";
            $.each(data, function(key, val) {
                alloptions += "<option value='" + val.value + "' data-name='" + val.name + "' data-phone='" + val.phone + "'>";
                alloptions += val.name;
                alloptions += "</option>";
            });
            $("#pickup_previouscontact").append(alloptions).selectric();
        });
        //
        //RECEIVING GOODS SECTION - HANDLE SELECT - PICK UP CONTACT
        //
        $("#pickup_previouscontact").change(
            function() {
                $("#pickup_name").val($(this).find(':selected').data('name'));
                $("#pickup_phone").val($(this).find(':selected').data('phone'));
            }
        );
        //
        //RECEIVING GOODS SECTION - CLEAR VALUES WHEN "ENTER NEW CONTACT" IS CLICKED
        //
        $(".action-enter-new-contact").click(function() {
            $("#pickup_name").val("");
            $("#pickup_phone").val("");
        });
        //
        //POPULATE DROP DOWN MENU - PICK UP CONTACT
        //
        $.getJSON('data/deliveryaddress.json', function(data) {
            var alloptions = "";
            $.each(data, function(key, val) {
                alloptions += "<option value='" + val.value + "' ";
                alloptions += "data-name='" + val.name + "' ";
                alloptions += "data-streetaddress='" + val.streetaddress + "' ";
                alloptions += "data-suburb='" + val.suburb + "' ";
                alloptions += "data-state='" + val.state + "' ";
                alloptions += "data-postcode='" + val.postcode + "' ";
                alloptions += "data-contactname='" + val.contactname + "' ";
                alloptions += "data-phone='" + val.phone + "' ";
                alloptions += ">";
                alloptions += val.name;
                alloptions += "</option>";
            });
            $("#receiving_previousaddress").append(alloptions).selectric();
        });
        //
        //HANDLE SELECT - PREVIOUS DELIVERY ADDRESS
        //
        $("#receiving_previousaddress").change(
            function() {
                $("#receiving_address").val($(this).find(':selected').data('streetaddress'));
                $("#receiving_suburb").val($(this).find(':selected').data('suburb'));
                $("#receiving_state").val($(this).find(':selected').data('state')).selectric("refresh");;
                $("#receiving_postcode").val($(this).find(':selected').data('postcode'));
                $("#receiving_name").val($(this).find(':selected').data('contactname'));
                $("#receiving_phone").val($(this).find(':selected').data('phone'));
                $("#receiving_address,#receiving_suburb,#receiving_state,#receiving_postcode,#receiving_name,#receiving_phone").addClass("valid").removeClass("error")
            });
        //
        //JQUERY VALIDATE
        //
        $("#checkout-cart").validate({
            errorElement: "span",
            rules: {
                details_postcode: {
                    required: true,
                    minlength: 4,
                    maxlength: 4
                },
                receiving_postcode: {
                    required: true,
                    minlength: 4,
                    maxlength: 4
                }
            },
            messages: {
                details_postcode: {
                    required: "This field is required.",
                    minlength: jQuery.validator.format("Requires 4 digits."),
                    maxlength: jQuery.validator.format("Requires 4 digits.")
                },
                receiving_postcode: {
                    required: "This field is required.",
                    minlength: jQuery.validator.format("Requires 4 digits."),
                    maxlength: jQuery.validator.format("Requires 4 digits.")
                }
            }
        });
        //
        //CLOSE STEP 1 AND OPEN STEP 2 
        //
        $(".action-goto-step2").click(function() {
            if ($("#checkout-cart").valid()) {
                $("#order-details .form-section").slideUp("slow",
                    function() {
                        $("#receiving-goods .form-section").slideDown("slow",
                            function() {
                                $('html, body').animate({
                                    scrollTop: $("#receiving-goods").offset().top
                                }, 500);
                            }
                        );
                    }
                );
                $("#order-details .header-section").removeClass("active");
                $("#receiving-goods .header-section").addClass("active");
                $(".gen-error.gen-error1").fadeOut();
            } else {
                $(".gen-error.gen-error1").fadeIn();
                    $('html, body').animate({
                        scrollTop: $("#order-details").offset().top
                    }, 500);

            }
        });
        //
        //SUBMIT FORM
        //
        $("#final-submit-button").click(function() {
            if ($("#checkout-cart").valid()) {
                $(".gen-error.gen-error2").fadeOut();
            } else {
                $(".gen-error.gen-error2").fadeIn();
                    $('html, body').animate({
                        scrollTop: $("#receiving-goods").offset().top
                    }, 500);
            }
        });
        //
        //CLOSE STEP 2 AND OPEN STEP 1 
        //
        $(".action-goto-step1").click(function() {
            $('html, body').animate({
                scrollTop: $("#order-details").offset().top
            }, 500, function() {
                $("#receiving-goods .form-section").slideUp("slow", function() {
                    $("#order-details .form-section").slideDown("slow",
                        function() {
                            $('html, body').animate({
                                scrollTop: $("#order-details").offset().top
                            }, 500, function() {
                                $("#order-details .header-section").addClass("active");
                                $("#receiving-goods .header-section").removeClass("active");
                            });
                        });
                });
            });
        });
        //
        //RECEIVING GOODS SECTION - CLEAR VALUES WHEN "ENTER NEW ADDRESS" IS CLICKED
        //
        $(".action-enter-new-address").click(function() {
            $(".enter-new-address").addClass("active");
            $(".select-previous-address").removeClass("active");
            $("#delivery-address .enter-new-address-text").addClass("active");
            $("#delivery-address .previous-address-text").removeClass("active");
            $("#delivery-address .inner-form-section").fadeIn("slow");
            $("#delivery-address .pop-title").fadeIn("slow");
            $("#receiving_previousaddress,#receiving_address,#receiving_suburb,#receiving_postcode,#receiving_name,#receiving_phone").val("").removeClass("valid").removeClass("error");
            $("#receiving_state").val("VIC").selectric('refresh').removeClass("valid").removeClass("error");
            $("#receiving_previouscontact").val("").selectric('refresh').removeClass("valid").removeClass("error");
        });
        //
        //RECEIVING GOODS SECTION - PREVIOUS ADDRESS
        //
        $("#receiving_previousaddress").change(function() {
            $(".select-previous-address").addClass("active");
            $(".enter-new-address").removeClass("active");
            $("#delivery-address .previous-address-text").addClass("active");
            $("#delivery-address .enter-new-address-text").removeClass("active");
            $("#delivery-address .pop-title").fadeIn("slow");
            $("#delivery-address .inner-form-section").fadeIn("slow");
        });
        //
        //RECEIVING GOOD SECTION - RADIO BUTTON - DELIVERY OR ORDER
        //
        $("input[name=receiving_receivegoods]").click(function() {
            if (this.value == 'delivery') {
                $("#pickup-details").fadeOut("normal", function() {
                    $("#delivery-details").fadeIn("normal");
                });
                $("#order-comments").fadeIn("slow");
                $(".delivery-button").addClass("active");
                $(".pickup-button").removeClass("active");
            }
            if (this.value == 'pickup') {
                $("#delivery-details").fadeOut("normal", function() {
                    $("#pickup-details").fadeIn("normal");
                });
                $("#order-comments").fadeIn("slow");
                $(".delivery-button").removeClass("active");
                $(".pickup-button").addClass("active");
            }
        });
        $(".mobile-open-cart-item").click(function() {
            if ($(window).width() < 768) {
                $(".order-item-wrap").fadeToggle("slow");
                $(this).toggleClass("active");
            }
        });
        //
        //SET UP WHEN SCREEN RESIZES
        //
        $(window).resize(function() {
            if ($(window).width() > 767) {
                $(".order-item-wrap").show();
                $(this).removeClass("active");
            } else {
                if ($(window).width() > 747) {
                    if (!$(this).hasClass("active")) {
                        $(".order-item-wrap").hide();
                    }
                }
            }
        });
        //======================================================================
        //======================================================================
        //END CHECKOUT CART
        //======================================================================
        //======================================================================
    },
    shoppingCart: function() {
        //
        //RADIO BUTTONS
        //
        $(".radio-button").click(
            function() {
                $(this).parent(".radiolabel-set").find(".radio-button").removeClass("active");
                $(this).addClass("active");
            });
        //
        //
        //
        //INIT ALL DROP DOWN MENUS
        //
        $('#product-pages select').selectric();
        //
        //ADD RECOMMENDED PRODUCT
        //
        $(".demo-recommendation").hide();
        $(".action-add-product").click(
            function() {
                var thisobject = $(this);
                if (!thisobject.hasClass("added")) {
                    thisobject.find(".fa-plus").fadeOut("fast",
                        function() {
                            thisobject.find(".fa-check").fadeIn("fast",
                                function() {
                                    thisobject.addClass("added");
                                    //IMPLEMENT ADD ITEM TO CART FUNCTION AND REFRESH WITH NEW SET
                                    //THIS IS A DEMO ONLY
                                    if(thisobject.hasClass("demo-item1")){
                                        $(".demo-recommendation1").fadeIn("slow");
                                    }
                                    else if(thisobject.hasClass("demo-item2")){
                                        $(".demo-recommendation2").fadeIn("slow");
                                    }
                                    else if(thisobject.hasClass("demo-item3")){
                                        $(".demo-recommendation3").fadeIn("slow");
                                    }
                                    else if(thisobject.hasClass("demo-item4")){
                                        $(".demo-recommendation4").fadeIn("slow");
                                    }
                                });
                        });
                }
            });
        //REMOVE A PRODUCT
        $(".action-remove-item").click(
            function() {
                var productCode = $(this).data("productcode");
                $(".one-product-wrapper[data-productcode='" + productCode + "']").fadeOut("slow",
                    function() {
                        $(".one-product-wrapper[data-productcode='" + productCode + "']").remove();
                    }
                );
            }
        );
        //SAVE AS BUTTON
        $("#save-as-section .save-as-main").click(function() {
            if ($("#save-as-section").hasClass("opened")) {
                $("#save-as-section .list-form").slideUp("fast");
                $("#save-as-section .list-group-wrap").slideUp("slow");
                $("#save-as-section").removeClass("opened");
            } else {
                $("#save-as-section .list-form").hide();
                $("#save-as-section .list-group-wrap").slideDown("slow");
                $("#save-as-section").addClass("opened");
            }
        });
        $("#save-as-section .list-open").click(function() {
            var thisobject = $(this);
            thisobject.parent(".list-group-wrap").children(".list-form").addClass("current",
                function() {
                    $("#save-as-section .list-form").each(
                        function() {
                            if ($(this).hasClass("current")) {
                                thisobject.parent(".list-group-wrap").children(".list-form").slideToggle("slow");
                                thisobject.parent(".list-group-wrap").children(".list-form").removeClass("current");
                            } else {
                                $(this).parent(".list-group-wrap").children(".list-form").slideUp("slow");
                            }
                        });
                }
            );
        });
        //
        //MATCH HEIGHT FOR PRODUCT RECOMMENDATION
        //
        $(".one-recommendation .product-details").matchHeight();
        //'YOU MAY ALSO NEED' CLOSE BUTTON
        //
        $(".product-suggestion .open-close-button").click(
            function() {
                if ($(this).hasClass("opened")) {
                    $(".product-suggestion .suggestion-item-content").slideUp();
                    $(".product-suggestion .open-close-button .fa-minus").fadeOut("fast",
                        function() {
                            $(".product-suggestion .open-close-button .fa-plus").fadeIn("fast",
                                function() {
                                    $(".product-suggestion .open-close-button").removeClass("opened");
                                });
                        }
                    );
                } else {
                    $(".product-suggestion .suggestion-item-content").slideDown();
                    $(".product-suggestion .open-close-button .fa-plus").fadeOut("fast",
                        function() {
                            $(".product-suggestion .open-close-button .fa-minus").fadeIn("fast",
                                function() {
                                    $(".product-suggestion .open-close-button").addClass("opened");
                                });
                        }
                    );
                }
            }
        );
    },
    animateAddToCart: function(element, img, items, section){
        var $added = $('<div class="added-to-cart" style="background-image:url('+img+')"></div>');
        var top = element.offset().top - $(window).scrollTop();
        var left = element.offset().left;
        $added.css({
            top: top,
            left: left,
            zIndex: 99
        });
        var finaltop = $('#shopping-cart-widget aside '+section+' .cart-items').offset().top  - $(window).scrollTop() - 20;
        var finalleft = $('#shopping-cart-widget aside '+section+' .cart-items').offset().left -20;
        TweenMax.to($added, 0.6, {bezier:{type:"cubic", values:[{x:0, y:0}, {x:0, y: finaltop - top}, {x: finalleft - left, y: finaltop - top}, {x: finalleft - left, y: finaltop - top }], autoRotate:["x","y","rotation", 0, true]}, scale:0.5, ease:Power1.easeInOut, onComplete: function(){ 
            TweenMax.to($added, 0.4,{ scale: 0, ease: Back.easeIn, onComplete: function(){
                $(section+' .cart-items-wrap').removeClass('no-items');
                $(section+' .cart-items').text(items);
                $added.remove();
            }});
        }});
        $('.main-section').append($added);
        $added.addClass('loaded');
    },
    addToCart: function(code,quantity, element, img){
        if(!$('#scw-wishlist-section').hasClass('open')){
            $('#scw-shopping-cart-section').addClass('open');
        }
        $.ajax({
            url: 'templates/Ajax/product-added-to-cart.php',
            data: {
                product: '2259656',
                quantity: quantity
            },
            dataType: 'html',
            success:function(data){
                if($('#scw-shopping-cart-section').hasClass('open')){
                    $('#shopping-cart-widget .shopping-cart-view').removeClass('in').addClass('out');
                    $('#shopping-cart-widget .take-a-tour-box').removeClass('out').addClass('in');
                    $('#shopping-cart-widget .shopping-cart-product-list').removeClass('out').addClass('in');
                }
                $('#shopping-cart-widget .shopping-cart-product-list .list-totals').show();
                element.parent().toggleClass('success');
                setTimeout(function(){
                    element.parent().removeClass('loading success');
                    element.blur();                        
                },1600);                     

                $('#shopping-cart-widget .shopping-cart-product-list .itemlist-section .item-list').append(data);

                product_pages.itemsInCart = (product_pages.itemsInCart * 1) + (quantity * 1);
                product_pages.animateAddToCart(element, img, product_pages.itemsInCart, '#scw-shopping-cart-section');
            },
            error: function(){
            }
        });
    },
    addToWishlist: function(code,quantity, element, img){
        quantity = 1;
         $.ajax({
            url: 'templates/Ajax/product-added-to-wishlist.php',
            data: {
                product: '2259656'                
            },
            dataType: 'html',
            success:function(data){
                if($('#scw-wishlist-section').hasClass('open')){
                    $('#shopping-cart-widget .shopping-cart-view').removeClass('in').addClass('out');
                    $('#shopping-cart-widget .take-a-tour-box').removeClass('out').addClass('in');
                    $('#shopping-cart-widget .shopping-cart-wishlist').removeClass('out').addClass('in');
                }
                $('#shopping-cart-widget .shopping-cart-wishlist .actions').show();
                element.parent().toggleClass('success');
                setTimeout(function(){
                    element.parent().removeClass('loading success');
                    element.blur();                        
                },1600); 
                $('#shopping-cart-widget .shopping-cart-wishlist .itemlist-section .item-list').append(data);
                product_pages.itemsInWishlist = (product_pages.itemsInWishlist * 1) + (quantity * 1);
                product_pages.animateAddToCart(element, img, product_pages.itemsInWishlist, '#scw-wishlist-section'); 
            },
            error: function(){
            }
        });     
    },
    widget: function(){
        $('body').addClass('widget');
        //Add classes to add hacks on browsers
        var event = 'click';
        if(deviceMobile){
            event = 'touchend';
            $('#shopping-cart-widget').addClass('mobile');            
            $('html').addClass('mobile');
        }
        if(ieV == 9){
            $('#shopping-cart-widget aside, #shopping-cart-widget .shopping-cart-content').addClass('ie');
        }
        //Disable scolling on elements width class disable-scrolling.
        document.ontouchmove = function ( event ) {
            var isTouchMoveAllowed = true, target = event.target;
            while ( target !== null ) {
                if ( target.classList && target.classList.contains( 'disable-scrolling' ) ) {
                    isTouchMoveAllowed = false;
                    break;
                }
                target = target.parentNode;
            }
            if ( !isTouchMoveAllowed ) {
                event.preventDefault();
            }
        };
         //Prevent rubber effec on touch devices when scrolling on elements with class scrollable.
        function removeIOSRubberEffect( element ) {
            element.addEventListener( "touchstart", function () {
                var top = element.scrollTop, totalScroll = element.scrollHeight, currentScroll = top + element.offsetHeight;
                if ( top === 0 ) {
                    element.scrollTop = 1;
                } else if ( currentScroll === totalScroll ) {
                    element.scrollTop = top - 1;
                }
            } );
        }
        removeIOSRubberEffect( document.querySelector( ".scrollable" ));
        //Prevent body scroll when scrolling on widget on touch devices.
        $('#shopping-cart-widget').on('touchmove', function(e) {
            if($(e.target).parents('#shopping-cart-widget .shopping-cart-content').length == 0 && $(e.target).attr('id')!='shopping-cart-widget' && !$(e.target).hasClass('shopping-cart-content')){
                e.preventDefault();
            }else{                
                var height = window.innerHeight ? window.innerHeight : $(window).height();
                if($(window).width() < 768){
                    height = height - $('#shopping-cart-widget aside').height();
                }
                var visible_elements_height = 0;
                $('#shopping-cart-widget .shopping-cart-content .in').each(function(){
                    visible_elements_height = visible_elements_height + $(this).outerHeight();
                });
             if(visible_elements_height < height){
                 e.preventDefault();
                
                }
            }

        });
        //Prevent body scroll when mouse over the widget on desktop.
        if(!deviceMobile){
            var scrollTopOnHover = 0;
            /*$('#shopping-cart-widget').on('mouseover', function(){
                if(!ieV || ieV > 9){
                    $('html,body').addClass('overflow-hidden');
                }
                scrollTopOnHover = $(window).scrollTop();
            }).on('mouseout', function(){
                if(!ieV || ieV > 9){
                    $('html,body').removeClass('overflow-hidden');
                }
                setTimeout( function(){ $(window).scrollTop(scrollTopOnHover)}, 100);
            });*/
        }

        //Animate Widget when open and close.
        function toggleWidget(){
            var diff = $('.main-section').offset().top;
            var top = $(window).scrollTop() - diff;
            var width = $(window).width();
            var windowHeight = $(window).height();
            var height = windowHeight;
            
            $('#shopping-cart-widget').toggleClass('open');
            if($('#shopping-cart-widget').hasClass('open')){
                 //Close widget when click outside
                 if(!deviceMobile){
                    $('.main-section').on('click', clickOutsideWidget);
                }
                $('html,body').addClass('overflow-hidden');
                $('#shopping-cart-widget .shopping-cart-content').height('');
                $('#shopping-cart-widget .shopping-cart-content').css({
                    display: 'block'
                });
                height = $('#shopping-cart-widget').height();
                TweenMax.to($('#shopping-cart-widget'),0.5,{right: 0});
                $('.product-detail-wrap, aside').addClass('disable-scrolling');
                if(width < 768){
                    height = window.innerHeight ? window.innerHeight : $(window).height();
                    height = height - $('#shopping-cart-widget aside').height();
                    $('#shopping-cart-widget .shopping-cart-content').height(0);
                    TweenMax.to($('#shopping-cart-widget .shopping-cart-content'),0.5,{x: 0, opacity: 1, height: height});
                }else{
                    TweenMax.to($('#shopping-cart-widget .shopping-cart-content'),0.5,{x: 0, opacity: 1});
                }
            }else{
                if(!deviceMobile){
                    $('.main-section').off('click', clickOutsideWidget);
                }
                $('html,body').removeClass('overflow-hidden');
                var right = -535;
                if($(window).width()> 1199){
                    right = -502;
                }
                TweenMax.to($('#shopping-cart-widget'),0.5,{right: right});
                TweenMax.to($('#shopping-cart-widget .shopping-cart-content'),0.5,{x: 100, opacity: 0});
                if(width < 768){
                    TweenMax.to($('#shopping-cart-widget'),0.5,{right: right, height: ''});
                    TweenMax.to($('#shopping-cart-widget .shopping-cart-content'),0.5,{x: 100, opacity: 0, height: 0});                    
                }else{
                    TweenMax.to($('#shopping-cart-widget'),0.5,{right: right});
                    TweenMax.to($('#shopping-cart-widget .shopping-cart-content'),0.5,{x: 100, opacity: 0});                    
                }
                $('.product-detail-wrap, aside').removeClass('disable-scrolling');                
            }
        }
        function resizeWidget(){
            var diff = $('.main-section').offset().top;
            var top = $(window).scrollTop() - diff;
            var width = $(window).width();
            var windowHeight = $(window).height();
            var height = windowHeight;
            if($('#shopping-cart-widget').hasClass('open')){
                $('#shopping-cart-widget .shopping-cart-content').height('');
                $('#shopping-cart-widget .shopping-cart-content').css({
                    display: 'block'
                });
                height = $('#shopping-cart-widget').height();
                if(width < 768){
                    height = window.innerHeight ? window.innerHeight : $(window).height();
                    height = height - $('#shopping-cart-widget aside').height();
                    //$('#shopping-cart-widget .shopping-cart-content').height(height);
                }
            }
        }
        //Close widget when click on body
        function clickOutsideWidget(e){
            console.log($(e.target).parents('#shopping-cart-widget .shopping-cart-content').length);
            console.log($(e.target).attr('id'));
            console.log($(e.target).hasClass('shopping-cart-content'));
            if($(e.target).parents('#shopping-cart-widget .shopping-cart-content').length == 0 && $(e.target).attr('id') != 'shopping-cart-widget' && !$(e.target).hasClass('shopping-cart-content')){
                toggleWidget();
                e.preventDefault();
            }
        }

        //START INITIALIZATION AND ASIDE ACTIONS

        //Add custom style to dropdown menus using bootstrap-select libray
        $('#shopping-cart-widget select').selectpicker();

        //Trigger action on close button
        $('#shopping-cart-widget').find('.close-widget').on(event, function(e){
            $('#shopping-cart-widget').find('aside').trigger(event);
            e.preventDefault();
            e.stopPropagation();
        });

        //Actions when click on the Widget bar and icons.
        $('#shopping-cart-widget').find('aside').on(event, function(e){
           if($('#scw-wishlist-section').hasClass('open')){
                $('#scw-wishlist-section').trigger(event);
            }else{
                $('#scw-shopping-cart-section').trigger(event);                    
            }
            e.stopPropagation();                      
        });
        //Actions when click on shopping cart icon
        $('#scw-shopping-cart-section').on(event, function(e){
            $('.add-to-cart').removeClass('add-to-wishlist');
            if(product_pages.itemsInCart > 0){
                $('#shopping-cart-widget .shopping-cart-view').removeClass('in').addClass('out');
                $('#shopping-cart-widget .take-a-tour-box').removeClass('out').addClass('in');
                $('#shopping-cart-widget .shopping-cart-product-list').removeClass('out').addClass('in');
            }else{
                $('#shopping-cart-widget .shopping-cart-view').removeClass('in').addClass('out');
                $('#shopping-cart-widget .tour-info').removeClass('out').addClass('in');
            }
            $('#scw-wishlist-section').removeClass('open');
            if($(this).hasClass('open')){
                toggleWidget();
            }
            $(this).addClass('open');
            e.stopPropagation();                        
        });
        //Actions when click on wishlist icon
        $('#scw-wishlist-section').on(event, function(e){
            $('.add-to-cart').addClass('add-to-wishlist');
            if(product_pages.itemsInWishlist > 0){
                $('#shopping-cart-widget .shopping-cart-view').removeClass('in').addClass('out');
                $('#shopping-cart-widget .take-a-tour-box').removeClass('out').addClass('in');
                $('#shopping-cart-widget .shopping-cart-wishlist').removeClass('out').addClass('in');
            }else{
                $('#shopping-cart-widget .shopping-cart-view').removeClass('in').addClass('out');
                $('#shopping-cart-widget .tour-info').removeClass('out').addClass('in');
            }
            $('#scw-shopping-cart-section').removeClass('open');
            if($(this).hasClass('open')){
                toggleWidget();
            }
            $(this).addClass('open');
            e.stopPropagation();                        
        });

        //END INITIALIZATION AND ASIDE ACTIONS

        //START SHOPPING CART SECTION

        //The following actions will be added to any async element added
        //Edit item action
        $(document).on('click','#shopping-cart-widget .edit-item, #shopping-cart-widget .product-thumbnail, #shopping-cart-widget .item-details, #shopping-cart-widget .info-state',function(e){
            if($(this).parent().parent().parent().hasClass('editing')){
                $('#shopping-cart-widget .one-item').removeClass('editing');
                $(this).parent().parent().parent().removeClass('editing');
            }else{
                $('#shopping-cart-widget .one-item').removeClass('editing');
                $(this).parent().parent().parent().addClass('editing');
                $(this).parent().parent().parent().find('.quantity-number').focus();                
            }        
        });

        //Delete item action
        $(document).on('click','#shopping-cart-widget .remove-from-list',function(e){
            var $elem = $(this).parent().parent().parent();
            if($('#shopping-cart-widget .shopping-cart-product-list .item-list li').length == 1){
                $('#shopping-cart-widget .shopping-cart-product-list .list-totals').slideUp('slow');
            }
            $elem.slideUp('slow', function(){
                $elem.remove();                
            });
        }); 

        //Place cursor at the end of the input field
        $(document).on('focus', '#shopping-cart-widget input.quantity-number', function(){
            $(this).val($(this).val());
        });
        //Actions when edit the quantity of a product in the shopping cart.
        $(document).on('change', '#shopping-cart-widget input.quantity-number', function(){
            //Do your action here

            //Do the following when the quantity has been updated on the database
            var $updated = $(this).parent().parent().find('.quantity-updated');
            $(this).parent().parent().parent().parent().parent().find('.info-state .quantity .number').text($(this).val());
            $updated.addClass('show');
            setTimeout(function(){
                $updated.removeClass('show');
            }, 1200);
        });
        
        //Action on Switch Product List button        
        $('#shopping-cart-widget .shopping-cart-product-list .switch-btn').on('click', function(){
            $('#shopping-cart-widget .shopping-cart-product-list').addClass('out').removeClass('in');
            $('#shopping-cart-widget .shopping-cart-search-list').removeClass('out').addClass('in');
        });
        
        //END SHOPPING CART SECTION


        //START SEARCH LIST SECTION

        //Populate autocomplete options for Product lists saved
        $.get('data/productlists.json', function(data){
            $("#shopping-cart-widget input[name=search-list]").typeahead({ source:data });
        },'json');

        //Actions to edit Shopping list title when click on text.
        $('#shopping-cart-widget .shopping-cart-product-list .editable-text').on('click',function(){
            $(this).hide();
            var text = $(this).text();
            $(this).parent().find('.editable-text-field').val(text).show().focus();            
        });
        $('#shopping-cart-widget .shopping-cart-product-list .editable-text-field').on('change focusout', function(){
            $(this).hide();
            var text = $(this).val();
            $(this).parent().find('.editable-text').text(text).show(); 
        });
        //Action on Switch icon and Title
        $('#shopping-cart-widget .shopping-cart-search-list .switch-btn').on('click', function(){
            $('#shopping-cart-widget .shopping-cart-product-list').removeClass('out').addClass('in');
            $('#shopping-cart-widget .shopping-cart-search-list').addClass('out').removeClass('in');
        });
        
        //Action to add wishlist item into cart
        $(document).on('click','#shopping-cart-widget .shopping-cart-wishlist .add-to-cart-btn', function(){
            var code = $(this).data('code');
            var img = $(this).parent().find('.product-thumbnail img').attr('src');
            product_pages.addToCart(code,1,$(this), img);            
            return false;
        });

        //Action to add all wishlist item into the cart
        $('#shopping-cart-widget .shopping-cart-wishlist  .add-all-to-cart').on('click', function(){
            $('#shopping-cart-widget .shopping-cart-wishlist .add-to-cart-btn').each(function(){
                var code = $(this).data('code');
                var img = $(this).parent().find('.product-thumbnail img').attr('src');
                product_pages.addToCart(code,1,$(this), img);
            });
            return false;
        });

        //Action to remove item from list
        $(document).on('click','#shopping-cart-widget .remove',function(e){
            var $elem = $(this).parent().parent();
            if($('#shopping-cart-widget .shopping-cart-wishlist .item-list li').length == 1){
                $('#shopping-cart-widget .shopping-cart-wishlist .actions').slideUp('slow');
            }
            $elem.slideUp('slow', function(){
                $elem.remove();
            });
        });  

        //END SEARCH LIST SECTION

        //START TAKE A TOUR SECTION
        $('.take-a-tour-box .close').on('click', function(){
            $('.take-a-tour-box').slideUp('slow', function(){
                $('.take-a-tour-box').remove();
            })
        });
        //END TAKE A TOUR SECTION
        $(window).on('resize', function(){
            if(!$('#shopping-cart-widget').hasClass('open')){
                $('#shopping-cart-widget').css('right','');
            }
        });
        $(window).on('scroll', function(){
            if(!scrollAnimation.animating){
                if($(window).scrollTop() > $('.main-section').offset().top){
                    $('#shopping-cart-widget').addClass('fixed');
                    $('.back-to-top').fadeIn();
                }else{
                    $('#shopping-cart-widget').removeClass('fixed');
                    $('.back-to-top').fadeOut();
                }
            }
        });        
    },
    productsCategory: function(){
        function updateSliders(){
            $('#products .product-images-slider').slick({
                slidesToShow:1,
                slidesToScroll:1,
                'dots': true,
                'arrows':false
            });
            $('#products .product-images-slider').on('setPosition', function(){
                $(window).resize();
            });
        }
        $.ajax({
            url: 'templates/Ajax/category-product.php',
            dataType: 'html',
            success: function(data){
                $('#products').append(data);
                updateSliders();
            },
            error: function(){

            }
        });
        //Initialise select dropdowns styles
        $('.view-bar select').selectpicker({
            noneSelectedText: 'Select an option',
            showContent: true,
            template:{caret:'<svg width="28" height="15" viewBox="0 0 28 15"><path d="M0.4,0.4c-0.5,0.5-0.5,1.2,0,1.7c0,0,0,0,0,0l12.8,12.6c0.5,0.5,1.2,0.5,1.7,0L27.6,2.1c0.5-0.5,0.5-1.2,0-1.7c-0.5-0.5-1.2-0.5-1.7,0L14,12.1L2.1,0.4C1.6-0.1,0.8-0.1,0.4,0.4z"/></svg>'}
        });

        $('.view-bar .btn-icon').on('click', function(){
            $('.view-bar .btn-icon').removeClass('active');
            var obj = $(this);
            obj.addClass('active');
            obj.blur();
            TweenMax.staggerTo($('#products .product'),0.1,{y: 100, opacity: 0},0.03,function(){
                $('#products').attr('class','products');
                $('#products').addClass(obj.data('option'));
                $(window).resize();
                $('#products .product-images-slider').slick('setPosition');
                TweenMax.staggerFromTo($('#products .product'),0.3,{y:100, opacity:0},{y: 0, opacity: 1},0.03,function(){
                });
            });            
        });
        $('#price-option').on('change', function(){
            var option = $(this).val();
            if(option == 'both'){
                $('#products .product-price-my, #products .product-price-cmp').show();
            }else{
                $('#products .product-price-my, #products .product-price-cmp').hide();
                $('#products .product-price-'+option).show();
            }
            $(window).resize();
        });
        $('#show-gst').on('change', function(){
            if($(this).is(':checked')){
                $('#products .product-price small').text('exc.');
            }else{
                $('#products .product-price small').text('incl.');
            }
        });
        //Initialise radio button
        $(document).on('click','.quantity-units.multiple-units .radio-button', function() {
            $(this).parent(".radiolabel-set").find(".radio-button").removeClass("active");
            $(this).addClass("active");
            var id = $(this).attr('for');
            var unit = $('#'+id).val();
            $(this).parents(".product-content").find('.product-price-cmp, .product-price-my').addClass('hide');
            $(this).parents(".product-content").find('.price-'+unit).removeClass('hide');
        });

        $(document).on('click','.product .add-to-cart', function(){
            var obj = $(this).parent();
            var quantity = obj.parents('.product-content').find('input.quantity-number').val();
                            
            if(!obj.hasClass('loading')){
                obj.toggleClass('loading');

                    var img = obj.parents('.product-content').find('.product-image img').first().attr("src");
                    var code = $(this).data('code');
                    if($('#scw-wishlist-section').hasClass('open')){
                        
                        //THIS TIMEOUT IT JUST TO SHOW THE LOADING ON DEMO PLEASE REMOVE 
                        //BUT LEAVE ITS CONTENT

                        setTimeout(function(){                 
                            product_pages.addToWishlist(code,quantity,obj.find('button'), img);    
                        }, 1200);                                
                    }else{
                        
                        //THIS TIMEOUT IT JUST TO SHOW THE LOADING ON DEMO PLEASE REMOVE 
                        //BUT LEAVE ITS CONTENT

                        setTimeout(function(){                                         
                        product_pages.addToCart(code,quantity,obj.find('button'), img);
                        }, 1200);                                
                    }
                
            }
        });
        $(window).on('resize', function(){
            sameHeight('#products .product-image');
            sameHeight('#products .product-details');
            sameHeight('#products .product');
        }).resize();
    },
    productDetail: function(){
        //Detect if device is mobile to use touch event in some actions for a fast load.
        var event = 'click';
        if(deviceMobile){
            event = 'touchend';
        }
        
        //Add action to back to top button
        $('.back-to-top').hide();
        $('.back-to-top').on('click', function(e){
            $('.back-to-top').fadeOut();
            $('#shopping-cart-widget').removeClass('fixed');
            e.preventDefault();
            scrollAnimation.animate(0);
            return;
        });

        //Add action to availability and variations dropdowns
        $('.product-availability-variations .options-dropdown').on('click', function(e){
            $(this).toggleClass('open');
            e.stopPropagation();
        });
        //Close dropdowns on click outside
        $('#product-detail').on('click', function(){
            $('.product-availability-variations .options-dropdown').removeClass('open');    
        });
        
        //Smooth scrolling on anchor links
        $('.main-anchor-list a[href*=#]').on('click', function(e) {
            e.preventDefault(); //prevent the "normal" behaviour which would be a "hard" jump
            var target = $(this).attr("href"); //Get the target
            scrollAnimation.animate($(target).offset().top);
            window.location.hash = $(this).attr("href");
            return false;
        });

        //Copy Product Images slider into the lightbox
        var slider = $('.product-images').clone();
        $('#slider-lightbox .lightbox-content').append(slider);
        function updatePostcode(val){
            $('.postcode-input input, .postcode-input .enter-your-postcode').hide();
            $('.postcode-input .postcode-text').text(val);
            $('.postcode-input .postcode-text-wrap').show();
            $('.product-price').html('$942.99<small>gst inc.</small>');
            $('.product-prices, .product-code').removeClass('hidden');
            $('.product-postcode-input').slideUp();
            $('button.add-to-cart').removeAttr('disabled');
        }

        //Actions to the postcode input to show prices.
        $('input[name=userpostcode]').on('change blur', function(){
            var val = $(this).val();
            if(val != ""){
                updatePostcode(val);
            }else{
                if($('.postcode-input .postcode-text').text()!=""){
                  updatePostcode($('.postcode-input .postcode-text').text());  
                }
            }
            //TO_UPDATE: This needs to be updated with your code to load the real information of the product
           
        });
         $('input[name=userpostcode]').on('keyup', function(e){
            var val = $(this).val();
            if(val != "" && e.keyCode == 13){
                updatePostcode(val);
            }
         });
        $('.postcode-input .postcode-link a').on('click', function(){
            $('.postcode-input input, .postcode-input .enter-your-postcode').show();
            $('.postcode-input .postcode-text-wrap').hide();
            $('.postcode-input input').focus();
            $('.postcode-input input').val($('.postcode-input input').val());            
            return false;
        });

        //Fire lighbox with video from elements with the lightbox-video class.
        $('.lightbox-video').on('click', function(){
            var video = $(this).data('video');
            if(!deviceMobile){
                player.loadVideoById(
                    {'videoId': video,
                   'suggestedQuality': 'large'
                });
            }else{
                player.cueVideoByUrl('http://www.youtube.com/v/'+video+'?version=3',0,"medium");                
            }
            $('#video-lightbox').addClass('show');
            return false;
        });
        
        
        //Initialize product images sliders
        $(".product-images-wrap").each(function(){
            var $mainSlider = $(this).find('.product-images-slider');
            $mainSlider.slick({
              infinite: true,
              slidesToShow: 1,
              slidesToScroll: 1,
              //swipe: false,
              asNavFor: '.product-images-wrap .product-images .product-thumbs-slider',
              prevArrow: '<button type="button" class="slick-prev"><svg viewBox="0 0 26 46" id="shape-arrow-left"><title>arrow-left</title> <g id="arrow-left-arrow-left"> <path d="M24.4,0.6C24.1,0.2,23.5,0,23,0c-0.5,0-1,0.2-1.4,0.6l-21,21c-0.8,0.8-0.8,2.1,0,2.8l21,21c0.8,0.8,2.1,0.8,2.8,0c0.8-0.8,0.8-2.1,0-2.8L4.9,23L24.4,3.4C25.2,2.6,25.2,1.4,24.4,0.6z"/> </g> </svg></button>',
              nextArrow: '<button type="button" class="slick-next"><svg viewBox="0 0 26 46" id="shape-arrow-right"><title>arrow-right</title> <g id="arrow-right-arrow-right"> <path d="M1.6,45.4C2,45.8,2.5,46,3,46c0.5,0,1-0.2,1.4-0.6l21-21c0.8-0.8,0.8-2.1,0-2.8l-21-21c-0.8-0.8-2.1-0.8-2.8,0c-0.8,0.8-0.8,2.1,0,2.8L21.2,23L1.6,42.6C0.8,43.4,0.8,44.7,1.6,45.4z"/> </g> </svg></button>',
              responsive: [
                {
                  breakpoint: 768,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    swipe: true,
                    dots: true,
                    arrows: false
                  }
                }
              ]
            });
            var $thumbsSlider = $(this).find('.product-thumbs-slider');
            $thumbsSlider.slick({
              infinite: true,
              slidesToShow: 4,
              slidesToScroll: 1,
              prevArrow: '<button type="button" class="slick-prev"><svg viewBox="0 0 26 46" id="shape-arrow-left"><title>arrow-left</title> <g id="arrow-left-arrow-left"> <path d="M24.4,0.6C24.1,0.2,23.5,0,23,0c-0.5,0-1,0.2-1.4,0.6l-21,21c-0.8,0.8-0.8,2.1,0,2.8l21,21c0.8,0.8,2.1,0.8,2.8,0c0.8-0.8,0.8-2.1,0-2.8L4.9,23L24.4,3.4C25.2,2.6,25.2,1.4,24.4,0.6z"/> </g> </svg></button>',
              nextArrow: '<button type="button" class="slick-next"><svg viewBox="0 0 26 46" id="shape-arrow-right"><title>arrow-right</title> <g id="arrow-right-arrow-right"> <path d="M1.6,45.4C2,45.8,2.5,46,3,46c0.5,0,1-0.2,1.4-0.6l21-21c0.8-0.8,0.8-2.1,0-2.8l-21-21c-0.8-0.8-2.1-0.8-2.8,0c-0.8,0.8-0.8,2.1,0,2.8L21.2,23L1.6,42.6C0.8,43.4,0.8,44.7,1.6,45.4z"/> </g> </svg></button>',
              dots: false,
              arrows: true,
              asNavFor: '.product-images-wrap .product-images .product-images-slider',
              focusOnSelect: true,
              responsive: [
                {
                  breakpoint: 768,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: false,
                    arrows: true
                  }
                }
              ]
            })
        });
        //Initialize product images on lightbox slider.
        $(".slider-lightbox").each(function(){
            var $mainSlider = $(this).find('.product-images-slider');
            $mainSlider.slick({
              infinite: true,
              slidesToShow: 1,
              slidesToScroll: 1,
              asNavFor: '.slider-lightbox .product-images .product-thumbs-slider',
              prevArrow: '<button type="button" class="slick-prev"><svg viewBox="0 0 26 46" id="shape-arrow-left"><title>arrow-left</title> <g id="arrow-left-arrow-left"> <path d="M24.4,0.6C24.1,0.2,23.5,0,23,0c-0.5,0-1,0.2-1.4,0.6l-21,21c-0.8,0.8-0.8,2.1,0,2.8l21,21c0.8,0.8,2.1,0.8,2.8,0c0.8-0.8,0.8-2.1,0-2.8L4.9,23L24.4,3.4C25.2,2.6,25.2,1.4,24.4,0.6z"/> </g> </svg></button>',
              nextArrow: '<button type="button" class="slick-next"><svg viewBox="0 0 26 46" id="shape-arrow-right"><title>arrow-right</title> <g id="arrow-right-arrow-right"> <path d="M1.6,45.4C2,45.8,2.5,46,3,46c0.5,0,1-0.2,1.4-0.6l21-21c0.8-0.8,0.8-2.1,0-2.8l-21-21c-0.8-0.8-2.1-0.8-2.8,0c-0.8,0.8-0.8,2.1,0,2.8L21.2,23L1.6,42.6C0.8,43.4,0.8,44.7,1.6,45.4z"/> </g> </svg></button>',
              responsive: [
                {
                  breakpoint: 768,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    swipe: true,
                    dots: true,
                    arrows: false
                  }
                }
              ]
            });
            var $thumbsSlider = $(this).find('.product-thumbs-slider');
            $thumbsSlider.slick({
              infinite: true,
              slidesToShow: 8,
              slidesToScroll: 1,
              prevArrow: '<button type="button" class="slick-prev"><svg viewBox="0 0 26 46" id="shape-arrow-left"><title>arrow-left</title> <g id="arrow-left-arrow-left"> <path d="M24.4,0.6C24.1,0.2,23.5,0,23,0c-0.5,0-1,0.2-1.4,0.6l-21,21c-0.8,0.8-0.8,2.1,0,2.8l21,21c0.8,0.8,2.1,0.8,2.8,0c0.8-0.8,0.8-2.1,0-2.8L4.9,23L24.4,3.4C25.2,2.6,25.2,1.4,24.4,0.6z"/> </g> </svg></button>',
              nextArrow: '<button type="button" class="slick-next"><svg viewBox="0 0 26 46" id="shape-arrow-right"><title>arrow-right</title> <g id="arrow-right-arrow-right"> <path d="M1.6,45.4C2,45.8,2.5,46,3,46c0.5,0,1-0.2,1.4-0.6l21-21c0.8-0.8,0.8-2.1,0-2.8l-21-21c-0.8-0.8-2.1-0.8-2.8,0c-0.8,0.8-0.8,2.1,0,2.8L21.2,23L1.6,42.6C0.8,43.4,0.8,44.7,1.6,45.4z"/> </g> </svg></button>',
              dots: false,
              arrows: true,
              asNavFor: '.slider-lightbox .product-images .product-images-slider',
              //centerMode: true,
              focusOnSelect: true,
              responsive: [
                {
                  breakpoint: 768,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: false,
                    arrows: true
                  }
                }
              ]
            })
        });

        //Add class loaded to product images after slider initilized to prevent jumping images.
        $('.product-images').addClass('loaded');

        //Actions on the zoom icon. Open lightbox with product images slider.       
        $('.product-images-slider-wrap .zoom').on('click', function(e){

            //Update lightbox current image to match the product images on the page.
            var current = $(".product-images-wrap .product-images-slider").slick('slickCurrentSlide');
            $(".slider-lightbox .product-images-slider").slick('slickGoTo',current, true);
            $(".slider-lightbox .product-thumbs-slider").slick('slickGoTo',current, true);
            if($(".slider-lightbox .product-thumb.slick-cloned").length == 0){
                $(".slider-lightbox .product-thumb").removeClass('slick-current');
                $(".slider-lightbox .product-thumb:eq("+current+")").addClass('slick-current');
            }
            $('.slider-lightbox').addClass('show');
        });
        $('.product-images-slider-wrap .product-images-slider .image').on('click', function(e){
            if($(window).width()>767){
                
                //Update main product images with the lightbox current image.
                var current = $(".product-images-wrap .product-images-slider").slick('slickCurrentSlide');
                $(".slider-lightbox .product-images-slider").slick('slickGoTo',current, true);
                $(".slider-lightbox .product-thumbs-slider").slick('slickGoTo',current, true);
                if($(".slider-lightbox .product-thumb.slick-cloned").length == 0){
                    $(".slider-lightbox .product-thumb").removeClass('slick-current');
                    $(".slider-lightbox .product-thumb:eq("+current+")").addClass('slick-current');
                }
                $('.slider-lightbox').addClass('show');
            }
        });

        //Actions to close the lightbox (video and slider) when click on background or X icon.
        $('.lightbox').on(event, function(e){
            if($('.slider-lightbox').hasClass('show')){
                var current = $(".slider-lightbox .product-images-slider").slick('slickCurrentSlide');
                $(".product-images-wrap .product-images-slider").slick('slickGoTo',current, true);
                $(".product-images-wrap .product-thumbs-slider").slick('slickGoTo',current, true);
                if($(".product-images-wrap .product-thumb.slick-cloned").length == 0){
                    $(".product-images-wrap .product-thumb").removeClass('slick-current');
                    $(".product-images-wrap .product-thumb:eq("+current+")").addClass('slick-current');
                }
            }
            if($('#video-lightbox').hasClass('show')){
                player.stopVideo();
            }
            if($(e.target).parents('.lightbox-content').length == 0){
                if($(e.target).parents('.slider-lightbox').length > 0 || $(e.target).hasClass('slider-lightbox')){
                    $('#slider-lightbox').removeClass('show');
                }else{
                    $('#video-lightbox').removeClass('show');
                }
                
            }            
        });


        //Initialise video slider
        $(".video-slider").slick({
            arrows: true,
            dots: false,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3,
            prevArrow: '<button type="button" class="slick-prev"><svg viewBox="0 0 26 46" id="shape-arrow-left"><title>arrow-left</title> <g id="arrow-left-arrow-left"> <path d="M24.4,0.6C24.1,0.2,23.5,0,23,0c-0.5,0-1,0.2-1.4,0.6l-21,21c-0.8,0.8-0.8,2.1,0,2.8l21,21c0.8,0.8,2.1,0.8,2.8,0c0.8-0.8,0.8-2.1,0-2.8L4.9,23L24.4,3.4C25.2,2.6,25.2,1.4,24.4,0.6z"/> </g> </svg></button>',
            nextArrow: '<button type="button" class="slick-next"><svg viewBox="0 0 26 46" id="shape-arrow-right"><title>arrow-right</title> <g id="arrow-right-arrow-right"> <path d="M1.6,45.4C2,45.8,2.5,46,3,46c0.5,0,1-0.2,1.4-0.6l21-21c0.8-0.8,0.8-2.1,0-2.8l-21-21c-0.8-0.8-2.1-0.8-2.8,0c-0.8,0.8-0.8,2.1,0,2.8L21.2,23L1.6,42.6C0.8,43.4,0.8,44.7,1.6,45.4z"/> </g> </svg></button>',
            responsive: [
            {
                    breakpoint: 1200,
                    settings:{
                        arrows: false,
                        dots: true,
                        infinite: true,
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 767,
                    settings:{
                        infinite: true,
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        arrows: false,
                        dots: true
                    }
                },
                {
                    breakpoint: 576,
                    settings:{
                        infinite: true,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false,
                        dots: true
                    }
                }
            ]
        });

        //Initialise radio button
        $(".radio-button").on('click', function() {
            $(this).parent(".radiolabel-set").find(".radio-button").removeClass("active");
            $(this).addClass("active");
        });
        
        // Initialise product suggestion slider
        $(".product-suggestion-slider").slick({
          infinite: true,
          slidesToShow: 4,
          slidesToScroll: 4,
          prevArrow: '<button type="button" class="slick-prev"><svg viewBox="0 0 26 46" id="shape-arrow-left"><title>arrow-left</title> <g id="arrow-left-arrow-left"> <path d="M24.4,0.6C24.1,0.2,23.5,0,23,0c-0.5,0-1,0.2-1.4,0.6l-21,21c-0.8,0.8-0.8,2.1,0,2.8l21,21c0.8,0.8,2.1,0.8,2.8,0c0.8-0.8,0.8-2.1,0-2.8L4.9,23L24.4,3.4C25.2,2.6,25.2,1.4,24.4,0.6z"/> </g> </svg></button>',
          nextArrow: '<button type="button" class="slick-next"><svg viewBox="0 0 26 46" id="shape-arrow-right"><title>arrow-right</title> <g id="arrow-right-arrow-right"> <path d="M1.6,45.4C2,45.8,2.5,46,3,46c0.5,0,1-0.2,1.4-0.6l21-21c0.8-0.8,0.8-2.1,0-2.8l-21-21c-0.8-0.8-2.1-0.8-2.8,0c-0.8,0.8-0.8,2.1,0,2.8L21.2,23L1.6,42.6C0.8,43.4,0.8,44.7,1.6,45.4z"/> </g> </svg></button>',
          dots: false,
          arrows: true,
            responsive: [
             {
                    breakpoint: 990,
                    settings:{
                        infinite: true,
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        dots: true,
                        arrows: false
                    }
                },
                {
                    breakpoint: 767,
                    settings:{
                        infinite: true,
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        dots: true,
                        arrows: false
                    }
                },
                {
                    breakpoint: 576,
                    settings:{
                        infinite: true,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: true,
                        arrows: false
                    }
                }
            ]
        });

        //Main Add to cart action
        $('.product-addbutton button').on('click', function(){
            var quantity = $('.quantity-input input[name=quantity]').val();
                            
            var obj = $(this).parent();
            if(!obj.hasClass('loading')){
                obj.toggleClass('loading');

                    var img = $('.product-images-slider .slick-current img').attr("src");
                    var code = $(this).data('code');
                    if($('#scw-wishlist-section').hasClass('open')){
                        
                        //THIS TIMEOUT IT JUST TO SHOW THE LOADING ON DEMO PLEASE REMOVE 
                        //BUT LEAVE ITS CONTENT

                        setTimeout(function(){                 
                            product_pages.addToWishlist(code,quantity,obj.find('button'), img);    
                        }, 1200);                                
                    }else{
                        
                        //THIS TIMEOUT IT JUST TO SHOW THE LOADING ON DEMO PLEASE REMOVE 
                        //BUT LEAVE ITS CONTENT

                        setTimeout(function(){                                         
                        product_pages.addToCart(code,quantity,obj.find('button'), img);
                        }, 1200);                                
                    }
                
            }
        });

        //Actions for any products on the page with a + button to add to cart.
        $('a.add-to-cart').on('click', function(){
            var img = $(this).parent().parent().find('.product-thumbnail img').attr('src');
            if($('#scw-wishlist-section').hasClass('open')){
                var code = $(this).data('code');
                product_pages.addToWishlist(code,1,$(this), img);    
            }else{
                var code = $(this).data('code');
                product_pages.addToCart(code,1,$(this), img);
            }
            return false;
        });
        
        //Filtering all documents
        $('.downloads-section .filter').on('click', function(){
            if($(this).hasClass('filtered')){
                $('.downloads-section .filter').removeClass('filtered');
                $('.all-downloads').find('.one-file').removeClass('hide').addClass('show');
                if($(window).width() < 768){
                    $('.all-downloads').slick('slickUnfilter');                    
                }
            }else{
                $('.downloads-section .filter').removeClass('filtered');
                $(this).addClass('filtered');
                var filter = $(this).data('filter');
                if($(window).width() > 767){
                    $('.all-downloads').find('.one-file').addClass('hide').removeClass('show');
                    $('.all-downloads').find('[data-group='+filter+']').removeClass('hide').addClass('show');
                }else{
                    $('.all-downloads').slick('slickUnfilter');      
                    $('.all-downloads').slick('slickFilter','[data-group='+filter+']');
                }
            }            
            return false;
        });
        
        //Actions to Expandable section
        // The name for (.action-expand-button)"data-expandbutton" and (.expand-section)"data-expandsection" needs to be the same
        $(".action-expand-button").on('click',function(e){
            var thisobject = $(this);
            var thisname = thisobject.data("expandbutton");
            var expandsection = $(".expand-section[data-expandsection='" + thisname + "']");
            var open = true;
            if($(window).width() > 767 && $(this).hasClass('section-title')){
                open = false;
            }else{
                open = true;
            }
            if(open){
                if(expandsection.hasClass("opened")){
                    thisobject.removeClass('opened');
                    expandsection.removeClass("opened");
                    expandsection.slideUp("slow");
                }
                else{
                    thisobject.addClass('opened');
                    expandsection.css({
                        display: 'block'
                    });
                    if(thisobject.parent().find('.slick-slider').hasClass('slick-initialized')){
                        thisobject.parent().find('.slick-slider').slick('setPosition');
                    }
                    expandsection.css({
                        display: 'none'
                    });
                    expandsection.addClass("opened");
                    expandsection.slideDown("slow");
                }
            }
        });
        
        //Collapse exandable boxes that need to be hidden on first load.
        $(".internal-expand-body").each(function(){
            if($(this).hasClass("opened") === false){
                $(this).hide();
            }
        });


        //Add/Remove slick slider to file-download-list elements depending on the screen width.
        $( window ).resize(function() {
          if($(window).width()< 768){
            $('.expand-section').not('.opened').not('.internal-expand-body').hide();
          }else{
            $('.expand-section').not('.opened').not('.internal-expand-body').show();
          }
          if($(".file-download-list").hasClass('slick-initialized')){
                if($(window).width() > 767){
                    $(".file-download-list").slick('slickUnfilter');
                    $(".file-download-list").slick('unslick');
                    var filter = $('.downloads-section .filters .filtered').data('filter');
                    if(filter){
                        $('.all-downloads').find('.one-file').addClass('hide').removeClass('show');
                        $('.all-downloads').find('[data-group='+filter+']').removeClass('hide').addClass('show');
                    }
                }
          }
          else{
                if($(window).width() < 768){
                    $(".file-download-list").slick({
                        infinite: true,
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        dots: true,
                        arrows: false,
                        responsive: [
                        {
                            breakpoint: 767,
                            settings:{
                                infinite: true,
                                slidesToShow: 3,
                                slidesToScroll: 3,
                                dots: true,
                                arrows: false,
                            }
                        },
                        {
                            breakpoint: 576,
                            settings:{
                                infinite: true,
                                slidesToShow: 2,
                                slidesToScroll: 2,
                                dots: true,
                                arrows: false
                            }
                        }
                        ]
                    });
                }
          }
        }).resize();
    }
};