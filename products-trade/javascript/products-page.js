$(document).ready(function() {
    product_pages.init();
});

var product_pages = {
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
    widget: function(){
        $(window).on('scroll', function(){
            if($(window).scrollTop() > $('.main-section').offset().top){
                $('#shopping-cart-widget').addClass('fixed');
            }else{
                $('#shopping-cart-widget').removeClass('fixed');
            }
        }); 
        $('#shopping-cart-widget').find('button').on('click', function(){
            $('#shopping-cart-widget').toggleClass('open');
        });
    },
    productDetail: function(){
        //
        // INIITALISE VIDEO SLIDER
        //
        $(".video-slider").slick({
            dots: true,
          infinite: true,
          slidesToShow: 3,
          slidesToScroll: 3,
          prevArrow: '<span type="button" class="slick-prev">Previous</span>',
          nextArrow: '<span type="button" class="slick-next">Next</span>',
            responsive: [
                {
                    breakpoint: 767,
                    settings:{
                        infinite: true,
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 576,
                    settings:{
                        infinite: true,
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                ]
        });
        //
        // INIITALISE PRODUCT SUGGESTION SLIDER
        //
        $(".product-suggestion-slider").slick({
          infinite: true,
          slidesToShow: 4,
          slidesToScroll: 4,
          prevArrow: '<span type="button" class="slick-prev">Previous</span>',
          nextArrow: '<span type="button" class="slick-next">Next</span>',
          dots: true,
            responsive: [
                {
                    breakpoint: 767,
                    settings:{
                        infinite: true,
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 576,
                    settings:{
                        infinite: true,
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                ]




        });
        //
        // INIITALISE HERO GALLERY SLIDER
        //
        $(".hero-gallery-slider").slick({
          infinite: true,
          slidesToShow: 1,
          slidesToScroll: 1,
          prevArrow: '<button type="button" class="slick-prev"><svg viewBox="0 0 26 46" id="shape-arrow-left"><title>arrow-left</title> <g id="arrow-left-arrow-left"> <path d="M24.4,0.6C24.1,0.2,23.5,0,23,0c-0.5,0-1,0.2-1.4,0.6l-21,21c-0.8,0.8-0.8,2.1,0,2.8l21,21c0.8,0.8,2.1,0.8,2.8,0c0.8-0.8,0.8-2.1,0-2.8L4.9,23L24.4,3.4C25.2,2.6,25.2,1.4,24.4,0.6z"/> </g> </svg></button>',
          nextArrow: '<button type="button" class="slick-next"><svg viewBox="0 0 26 46" id="shape-arrow-right"><title>arrow-right</title> <g id="arrow-right-arrow-right"> <path d="M1.6,45.4C2,45.8,2.5,46,3,46c0.5,0,1-0.2,1.4-0.6l21-21c0.8-0.8,0.8-2.1,0-2.8l-21-21c-0.8-0.8-2.1-0.8-2.8,0c-0.8,0.8-0.8,2.1,0,2.8L21.2,23L1.6,42.6C0.8,43.4,0.8,44.7,1.6,45.4z"/> </g> </svg></button>',
          responsive: [
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                arrows: false
              }
            }
          ]
        });
        //
        // INITIALISE FILE LIST AS SLIDER OF MOBILE
        // 
        if($(window).width() <= 767){
            $(".file-download-list").slick({
                prevArrow: '<button type="button" class="slick-prev"><svg viewBox="0 0 26 46" id="shape-arrow-left"><title>arrow-left</title> <g id="arrow-left-arrow-left"> <path d="M24.4,0.6C24.1,0.2,23.5,0,23,0c-0.5,0-1,0.2-1.4,0.6l-21,21c-0.8,0.8-0.8,2.1,0,2.8l21,21c0.8,0.8,2.1,0.8,2.8,0c0.8-0.8,0.8-2.1,0-2.8L4.9,23L24.4,3.4C25.2,2.6,25.2,1.4,24.4,0.6z"/> </g> </svg></button>',
                nextArrow: '<button type="button" class="slick-next"><svg viewBox="0 0 26 46" id="shape-arrow-right"><title>arrow-right</title> <g id="arrow-right-arrow-right"> <path d="M1.6,45.4C2,45.8,2.5,46,3,46c0.5,0,1-0.2,1.4-0.6l21-21c0.8-0.8,0.8-2.1,0-2.8l-21-21c-0.8-0.8-2.1-0.8-2.8,0c-0.8,0.8-0.8,2.1,0,2.8L21.2,23L1.6,42.6C0.8,43.4,0.8,44.7,1.6,45.4z"/> </g> </svg></button>',
                responsive: [
                {
                    breakpoint: 767,
                    settings:{
                        infinite: true,
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 576,
                    settings:{
                        infinite: true,
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                }
                ]
            });
        }
        //
        // SECTION EXPAND AND COLLAPES
        // The name for (.action-expand-button)"data-expandbutton" and (.expand-section)"data-expandsection" needs to be the same
        //
        $(".action-expand-button").click(function(){
            var thisobject = $(this);
            var thisname = thisobject.data("expandbutton");
            var expandsection = $(".expand-section[data-expandsection='" + thisname + "']");

            if(expandsection.hasClass("opened")){
                expandsection.slideUp("slow",
                    function(){
                        expandsection.removeClass("opened");
                        thisobject.removeClass("opened");
                });
            }
            else{
                expandsection.slideDown("slow",
                    function(){
                        expandsection.addClass("opened");
                        thisobject.addClass("opened");
                });
            }

        });
        // SECTION EXPAND AND COLLAPES ON LOAD
        $(".expand-section").each(
            function(){
                if($(this).hasClass("opened") === false){
                    $(this).hide();
                }
            });


        //CHECK SLICK ON WINDOW RESIZE
        $( window ).resize(function() {
          if($(".file-download-list").hasClass('slick-initialized')){
                if($(window).width() > 767){
                    $(".file-download-list").slick('unslick');
                }
          }
          else{
                if($(window).width() <= 767){
                    $(".file-download-list").slick({
                        infinite: true,
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        responsive: [
                        {
                            breakpoint: 767,
                            settings:{
                                infinite: true,
                                slidesToShow: 3,
                                slidesToScroll: 3
                            }
                        },
                        {
                            breakpoint: 576,
                            settings:{
                                infinite: true,
                                slidesToShow: 2,
                                slidesToScroll: 2
                            }
                        }
                        ]
                    });
                }
          }
        });


    }
};














