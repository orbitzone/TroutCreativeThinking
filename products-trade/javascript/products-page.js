$(document).ready(function() {
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
    /*
    PICK UP BRACH SEARCH AUTO COMPLETE
    */
    $("#pickup_branch").keyup(function() {
        if ($(this).val().length > 2) {
            var searchField = $('#pickup_branch').val();
            var regex = new RegExp(searchField, "i");
            var output = '';
            var totalresults = 0;
            $.getJSON('data/pickupbranch.json', function(data) {
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
                    $("#branchinfo-details").html("<h6>" + $(this).children(".branch-name").html() +  "</h6>" + $(this).children(".branch-address").html());
                    $("#branchinfo-actions").addClass("action-change");
                    $("#pickup_branch").val($(this).children(".branch-name").html());
                    $(".branch-info-autofill").addClass("active");
                    $('#pickupbranch-results').html("");
                    $('#pickupbranch-results').removeClass("active");
                });
            });
        }
        else if ($(this).val().length == 0) {
            $('#pickupbranch-results').removeClass("active");
        }

         else {
            $("#pickupbranch-results").html("<header>Min. 3 characters required</header>");
            $('#pickupbranch-results').addClass("active");
        }
    });
    /*
    INIT DATE PICKER
    */
    $("#receiving_date").datepicker({
        dateFormat: "DD, dd M yy"
    });
    $("#anim").change(function() {
        $("#receiving_date").datepicker("option", "showAnim", "fadeIn");
    });
    /*
    INIT ALL DROP DOWN MENUS
    */
    $('#product-pages select').selectric();
    /*
    POPULATE DROP DOWN MENU - PICK UP CONTACT
    */
    $.getJSON('data/pickupcontacts.json', function(data) {
        var alloptions = "";
        $.each(data, function(key, val) {
            alloptions += "<option value='" + val.value + "' data-name='" + val.name + "' data-phone='" + val.phone + "'>";
            alloptions += val.name;
            alloptions += "</option>";

        });
        $("#pickup_previouscontact").append(alloptions).selectric();
    });
    /*
    RECEIVING GOODS SECTION - HANDLE SELECT - PICK UP CONTACT
    */
    $("#pickup_previouscontact").change(
        function() {
            $("#pickup_name").val($(this).find(':selected').data('name'));
            $("#pickup_phone").val($(this).find(':selected').data('phone'));
        }

    );
    /*
    RECEIVING GOODS SECTION - CLEAR VALUES WHEN "ENTER NEW CONTACT" IS CLICKED
    */
    $(".action-enter-new-contact").click(function() {
        $("#pickup_name").val("");
        $("#pickup_phone").val("");
    });

    /*
    POPULATE DROP DOWN MENU - PICK UP CONTACT
    */
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


    /*
    HANDLE SELECT - PREVIOUS DELIVERY ADDRESS
    */
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
    /*
    JQUERY VALIDATE
    */
    $("#checkout-cart").validate({
        errorElement: "span"
    });
    /* 
    CLOSE STEP 1 AND OPEN STEP 2 
    */
    $(".action-goto-step2").click(function() {
        //if($("#checkout-cart").valid()){
        $("#order-details .form-section").slideUp(
            "slow",
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
        //}
    });
    /* 
    CLOSE STEP 2 AND OPEN STEP 1 
    */
    $(".action-goto-step1").click(function() {

        $("#order-details .form-section").slideDown("slow", function() {
            $("#receiving-goods .form-section").slideUp("slow",           
             function() {
                $("#receiving-goods .form-section").slideUp("slow",
                    function() {
                        $('html, body').animate({
                            scrollTop: $("#order-details").offset().top
                        }, 500);
                    }
                );
            });
        });
        $("#order-details .header-section").addClass("active");
        $("#receiving-goods .header-section").removeClass("active");
    });
    /*
    RECEIVING GOODS SECTION - CLEAR VALUES WHEN "ENTER NEW ADDRESS" IS CLICKED
    */
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
    /*
    RECEIVING GOODS SECTION - PREVIOUS ADDRESS
    */
    $("#receiving_previousaddress").change(function() {
        $(".select-previous-address").addClass("active");
        $(".enter-new-address").removeClass("active");
        $("#delivery-address .previous-address-text").addClass("active");
        $("#delivery-address .enter-new-address-text").removeClass("active");
        $("#delivery-address .pop-title").fadeIn("slow");
        $("#delivery-address .inner-form-section").fadeIn("slow");
    });
    /*
    RECEIVING GOOD SECTION - RADIO BUTTON - DELIVERY OR ORDER
    */
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
    /*
    SET UP WHEN SCREEN RESIZES
    */
    $(window).resize(function() {
        if ($(window).width() > 767) {
            $(".order-item-wrap").show();
        } else {
            $(".order-item-wrap").hide();
            $(this).removeClass("active");
        }
    });
});