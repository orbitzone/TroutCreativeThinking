$( document ).ready(function() {



$('#product-pages select').selectric();


$("#checkout-cart").validate({
		errorElement: "span"
	});

/* Close step 1 and open step 2 */
$(".action-goto-step2").click(function(){
	//if($("#checkout-cart").valid()){
		$("#receiving-goods .form-section").slideDown();
		$("#order-details .form-section").slideUp();
		$("#order-details .header-section").removeClass("active");
		$("#receiving-goods .header-section").addClass("active");

	//}
});

$(".action-goto-step1").click(function(){
		$("#receiving-goods .form-section").slideUp();
		$("#order-details .form-section").slideDown();
		$("#order-details .header-section").addClass("active");
		$("#receiving-goods .header-section").removeClass("active");
});

$("#enter-new-address").click(function(){
	$(".enter-new-address").addClass("active");
	$(".select-previous-address").removeClass("active");
	$("#delivery-address .enter-new-address-text").addClass("active");
	$("#delivery-address .previous-address-text").removeClass("active");
	$("#delivery-address .inner-form-section").slideDown();
	$("#delivery-address .pop-title").slideDown();
	$("#receiving_previousaddress").val("");
});

$("#receiving_previousaddress").change(function(){
	$(".select-previous-address").addClass("active");
	$(".enter-new-address").removeClass("active");
	$("#delivery-address .previous-address-text").addClass("active");
	$("#delivery-address .enter-new-address-text").removeClass("active");
	$("#delivery-address .pop-title").slideDown();
	$("#delivery-address .inner-form-section").slideDown();
});

$("#receiving_receivegoods_pickup").click(function(){
	$("#pickup-details").slideDown();
	$("#delivery-details").slideUp();
	$("#order-comments").slideDown();
});

$("#receiving_receivegoods_delivery").click(function(){
	$("#pickup-details").slideUp();
	$("#delivery-details").slideDown();
	$("#order-comments").slideDown();
});




});