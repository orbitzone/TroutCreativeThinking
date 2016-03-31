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
                    output = '<header>' + totalresults + ' location/s found</header>' + output;
                } else {
                    output = '<header>Nothing found</header>';
                }
                $('#pickupbranch-results').html(output);
                $(".one-result").click(function() {
                    $("#branchinfo-address").html("<h6>Branch Address</h6>" + $(this).children(".branch-address").html());
                    $("#branchinfo-phone").html("<h6>Branch Phone</h6>" + $(this).children(".branch-phone").html());
                    $("#pickup_branch").val($(this).children(".branch-name").html());
                    $(".branch-info-autofill").addClass("active");
                    $('#pickupbranch-results').html("");
                });
            });
        } else {
            $("#pickupbranch-results").html("min 3 characters required");
        }
    });
    /*
    INIT DATE PICKER
    */
    $("#receiving_date").datepicker({
        dateFormat: "dd/mm/yy"
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
	HANDLE SELECT - PICK UP CONTACT
	*/
	$("#pickup_previouscontact").change(
		function(){
			$("#pickup_name").val($(this).find(':selected').data('name'));
			$("#pickup_phone").val($(this).find(':selected').data('phone'));
		}
		
	);
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
        $("#receiving-goods .form-section").slideDown();
        $("#order-details .form-section").slideUp();
        $("#order-details .header-section").removeClass("active");
        $("#receiving-goods .header-section").addClass("active");
        //}
    });
    /* 
    CLOSE STEP 2 AND OPEN STEP 1 
    */
    $(".action-goto-step1").click(function() {
        $("#receiving-goods .form-section").slideUp();
        $("#order-details .form-section").slideDown();
        $("#order-details .header-section").addClass("active");
        $("#receiving-goods .header-section").removeClass("active");
    });
    /*
    CLEAR VALUES 
    */
    $(".action-enter-new-address").click(function() {
        $(".enter-new-address").addClass("active");
        $(".select-previous-address").removeClass("active");
        $("#delivery-address .enter-new-address-text").addClass("active");
        $("#delivery-address .previous-address-text").removeClass("active");
        $("#delivery-address .inner-form-section").slideDown();
        $("#delivery-address .pop-title").slideDown();
        $("#receiving_previousaddress,#receiving_address,#receiving_suburb,#receiving_postcode,#receiving_name,#receiving_phone").val("").removeClass("valid").removeClass("error");
        $("#receiving_state").val("VIC").selectric('refresh').removeClass("valid").removeClass("error");
        $("#receiving_previouscontact").val("").selectric('refresh').removeClass("valid").removeClass("error");
        if ($(window).width() < 768) {
            $(".enter-new-address-bottom").slideDown();
            $(".enter-new-address-top").slideUp();
        }
    });
    $("#receiving_previousaddress").change(function() {
        $(".select-previous-address").addClass("active");
        $(".enter-new-address").removeClass("active");
        $("#delivery-address .previous-address-text").addClass("active");
        $("#delivery-address .enter-new-address-text").removeClass("active");
        $("#delivery-address .pop-title").slideDown();
        $("#delivery-address .inner-form-section").slideDown();
        if ($(window).width() < 768) {
            $(".enter-new-address-bottom").slideUp();
            $(".enter-new-address-top").slideDown();
        }
    });
    $("input[name=receiving_receivegoods]").click(function() {
        if (this.value == 'delivery') {
            $("#pickup-details").slideUp();
            $("#delivery-details").slideDown();
            $("#order-comments").slideDown();
            $(".delivery-button").addClass("active");
            $(".pickup-button").removeClass("active");
        }
        if (this.value == 'pickup') {
            $("#pickup-details").slideDown();
            $("#delivery-details").slideUp();
            $("#order-comments").slideDown();
            $(".delivery-button").removeClass("active");
            $(".pickup-button").addClass("active");
        }
    });
    $(".mobile-open-cart-item").click(function() {
        if ($(window).width() < 768) {
            $(".order-item-wrap").slideToggle();
            $(this).toggleClass("active");
        }
    });
    /*
    SET UP WHEN SCREEN RESIZES
    */
    $(window).resize(function() {
        if ($(window).width() > 757 && $(window).width() < 777) {
            if ($(window).width() > 767) {
                $(".order-item-wrap").show();
            } else {
                $(".order-item-wrap").hide();
                $(this).removeClass("active");
            }
        }
        if ($(window).width() > 767) {
            $(".enter-new-address-bottom").slideDown();
            $(".enter-new-address-top").slideUp();
        }
    });
});