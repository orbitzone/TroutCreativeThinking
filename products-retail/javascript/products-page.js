$(document).ready(function() {
    product_pages.init();
});
var product_pages = {
    init: function() {
        var section = $('#product-pages').data('section');
        if (typeof this[section] === 'function') {
            this[section]();
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
$(".action-pickup-address-change").click(function(){
    $(".action-pickup-address-change").fadeOut("fast",
        function(){
            $(".action-pickup-address-cancel").fadeIn("fast");
            $(".action-pickup-address-cancel").addClass("active");
            $(".action-pickup-address-change").removeClass("active");
        });
    $(".branch-info-autocomplete").fadeIn("fast");
});
$(".action-pickup-address-cancel").click(function(){
    $(".action-pickup-address-cancel").fadeOut("fast",
        function(){
            $(".action-pickup-address-change").fadeIn("fast");
            $(".action-pickup-address-change").addClass("active");
            $(".action-pickup-address-cancel").removeClass("active");
        });
    $(".branch-info-autocomplete").fadeOut("slow",
        function(){
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
                    function(){
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
                    function(){
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
            maxlength:4
        },
        receiving_postcode: {
            required: true,
            minlength: 4,
            maxlength:4
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
//GO TO STEP 1.
//
$(".action-goto-step1.clickable").click(function() {
    $("#order-details .form-section").fadeIn("slow",
        function(){
            $('html, body').animate({
                scrollTop: $("#checkout-cart").offset().top
            }, 500);
        });
    $("#receiving-goods .form-section").hide();
    $("#payment-checkout .form-section").hide();
     $("#steps-indicator2").removeClass("clickable");
      $("#steps-indicator3").removeClass("clickable");
});
//
//GO TO STEP 2
//
$(".action-goto-step2.clickable").click(function() {

    if($(this).hasClass("go-back")){

        $("#order-details .form-section").hide();
        $("#receiving-goods .form-section").fadeIn("slow",
            function(){
                $('html, body').animate({
                    scrollTop: $("#checkout-cart").offset().top
                }, 500);
            }
            );
        $("#payment-checkout .form-section").hide();
        $("#steps-indicator2").addClass("clickable");
        $("#steps-indicator3").removeClass("clickable");
        $(".gen-error").fadeOut();

    }
    else if($("#checkout-cart").valid()){
        $("#order-details .form-section").hide();
        $("#receiving-goods .form-section").fadeIn("slow",
            function(){
                $('html, body').animate({
                    scrollTop: $("#checkout-cart").offset().top
                }, 500);
            }
            );
        $("#payment-checkout .form-section").hide();
        $("#steps-indicator2").addClass("clickable");
        $("#steps-indicator3").removeClass("clickable");
        $(".gen-error").fadeOut();
    }
    else{
        $(".gen-error.gen-error1").fadeIn();
        $('html, body').animate({
            scrollTop: $("#order-details").offset().top
        }, 500);
    }
});
//
//GO TO STEP 3
//
$(".action-goto-step3.clickable").click(function() {
    if($("#checkout-cart").valid()){
        $("#order-details .form-section").hide();
        $("#receiving-goods .form-section").hide();
        $("#payment-checkout .form-section").fadeIn("slow",
            function(){
                $('html, body').animate({
                    scrollTop: $("#checkout-cart").offset().top
                }, 500);
            });
        $("#steps-indicator3").addClass("clickable");
        $(".gen-error").fadeOut();
          $("#steps-indicator2").addClass("clickable");
          $("#steps-indicator2").addClass("go-back");
          $("#steps-indicator3").addClass("clickable");
    }
    else{
        $(".gen-error.gen-error2").fadeIn();
        $('html, body').animate({
            scrollTop: $("#order-details").offset().top
        }, 500);
    }
});
//
//PAYMENT TYPE CHANGE
$("#payment_paymenttype").change(function(){
    if($(this).find(':selected').val() === 'directdebit'){
        $("#credit-card-choice").hide();
        $("#direct-debit-choice").fadeIn("slow")
    }
    else if($(this).find(':selected').val() === 'creditcard'){
        $("#direct-debit-choice").hide();
        $("#credit-card-choice").fadeIn("slow")
    }
});
//
//SUBMIT FORM
//
$("#final-submit-button").click(function(){
    if($("#checkout-cart").valid()){
        $(".gen-error.gen-error3").fadeOut();
    }
    else{
        $(".gen-error.gen-error3").fadeIn();
        $('html, body').animate({
            scrollTop: $("#receiving-goods").offset().top
        }, 500);
    }
});

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
        if($(window).width() > 747){
            if(!$(this).hasClass("active")){
                $(".order-item-wrap").hide();
            }
        }
    }
});
//
//PAYMENT SECTION - RADIO BUTTON - CARD TYPE
//
$("input[name=payment_card]").click(function() {
    if (this.value == 'visa') {
        $(".mastercard-button").removeClass("active");
        $(".amex-button").removeClass("active");
        $(".visa-button").addClass("active");
    }
    if (this.value == 'mastercard') {
        $(".mastercard-button").addClass("active");
        $(".amex-button").removeClass("active");
        $(".visa-button").removeClass("active");
    }
    if (this.value == 'amex') {
        $(".mastercard-button").removeClass("active");
        $(".amex-button").addClass("active");
        $(".visa-button").removeClass("active");
    }
});
//======================================================================
//======================================================================
//END CHECKOUT CART
//======================================================================
//======================================================================
},
shoppingCart: function(){
//
//RADIO BUTTONS
//
$(".radio-button").click(
    function(){
        $(this).parent(".radiolabel-set").find(".radio-button").removeClass("active");
        $(this).addClass("active");
    });
//
//
//
//INIT ALL DROP DOWN MENUS
//
$('#product-pages select').selectric();
}
};