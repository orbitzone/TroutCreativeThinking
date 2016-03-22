$( document ).ready(function() {

var pickUpBranch = [
      "ActionScript",
      "AppleScript",
      "Asp",
      "BASIC",
      "C",
      "C++",
      "Clojure",
      "COBOL",
      "ColdFusion",
      "Erlang",
      "Fortran",
      "Groovy",
      "Haskell",
      "Java",
      "JavaScript",
      "Lisp",
      "Perl",
      "PHP",
      "Python",
      "Ruby",
      "Scala",
      "Scheme"
    ];
$( "#pickup_branch" ).autocomplete({
  source: pickUpBranch
});






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

$(".action-enter-new-address").click(function(){
	$(".enter-new-address").addClass("active");
	$(".select-previous-address").removeClass("active");
	$("#delivery-address .enter-new-address-text").addClass("active");
	$("#delivery-address .previous-address-text").removeClass("active");
	$("#delivery-address .inner-form-section").slideDown();
	$("#delivery-address .pop-title").slideDown();
	$("#receiving_previousaddress").val("");
	if($( window ).width() < 768){
		$(".enter-new-address-bottom").slideDown();
		$(".enter-new-address-top").slideUp();		
	}

});

$("#receiving_previousaddress").change(function(){
	$(".select-previous-address").addClass("active");
	$(".enter-new-address").removeClass("active");
	$("#delivery-address .previous-address-text").addClass("active");
	$("#delivery-address .enter-new-address-text").removeClass("active");
	$("#delivery-address .pop-title").slideDown();
	$("#delivery-address .inner-form-section").slideDown();
	if($( window ).width() < 768){
		$(".enter-new-address-bottom").slideUp();
		$(".enter-new-address-top").slideDown();
	}
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

$(".mobile-open-cart-item").click(function(){
	if($( window ).width() < 768){
	$(".order-item-wrap").slideToggle();
	}
});

$( window ).resize(function() {
 if($( window ).width() > 767){
 	$(".enter-new-address-bottom").slideDown();
	$(".enter-new-address-top").slideUp();
	$(".order-item-wrap").show();
 }
 else{
	$(".order-item-wrap").hide();
 }
});




});