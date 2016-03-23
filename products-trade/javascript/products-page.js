$( document ).ready(function() {





 	// PICKUP BRANCH AUTO COMPLETE
 	//
    // $( "#pickup_branch" ).autocomplete({
    //   minLength: 0,
    //   source: "http://reece-products-trade.local/data/pickupbranch.json",
    //   focus: function( event, ui ) {
    //     $( "#pickup_branch" ).val( ui.item.label );
    //     return false;
    //   },
    //   select: function( event, ui ) {
    //     $( "#pickup_branch" ).val( ui.item.label );
    //     $( "#pickup_branch_address" ).val("<h6>Branch Address</h6>" + ui.item.address ); 
    //     $( "#pickup_branch_phone" ).val("<h6>Branch Phone</h6>" + ui.item.phone ); 
    //     return false;
    //   }
    // })
    // .autocomplete( "instance" )._renderItem = function( ul, item ) {
    //   return $( "<li class='searchresults'>" )
    //     .append( "<a><h6>" 
    //     	+ item.label 
    //     	+ "</h6><div class='item-details'><span class='item-address'>" 
    //     	+ item.address 
    //     	+ "</span><span class='item-phone'>"
    //     	+ item.phone 
    //     	+ "</span></div></a>" )
    //     .appendTo( ul );
    // };



// $.get('http://reece-products-trade.local/data/state.json', function(data) {
//   $('#product-pages select #details_state').append(data).selectric();
// });








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



$("input[name=receiving_receivegoods]").change(function(){

if(this.value == 'delivery'){
	$("#pickup-details").slideUp();
	$("#delivery-details").slideDown();
	$("#order-comments").slideDown();
	$(".delivery-button").addClass("active");
	$(".pickup-button").removeClass("active");
}
if(this.value == 'pickup'){
	$("#pickup-details").slideDown();
	$("#delivery-details").slideUp();
	$("#order-comments").slideDown();
	$(".delivery-button").removeClass("active");
	$(".pickup-button").addClass("active");
}



});






$(".mobile-open-cart-item").click(function(){
	if($( window ).width() < 768){
	$(".order-item-wrap").slideToggle();
	$(this).toggleClass("active");

	}
});

$( window ).resize(function() {

 if($( window ).width() > 757 && $( window ).width() < 777){
 if($( window ).width() > 767){
 	$(".enter-new-address-bottom").slideDown();
	$(".enter-new-address-top").slideUp();
	$(".order-item-wrap").show();
 }
 else{
 	$(".order-item-wrap").hide();
	$(this).removeClass("active");
 }
}


});




});