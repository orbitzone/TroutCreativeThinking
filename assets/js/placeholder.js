jQuery(function() {
    jQuery.support.placeholder = false;
    test = document.createElement('input');
    if('placeholder' in test) jQuery.support.placeholder = true;
});

jQuery(function() {
    if(!jQuery.support.placeholder) { 
	var active = document.activeElement;
	jQuery('input textarea').focus(function () {
	    if (jQuery(this).attr('placeholder') !== '' && jQuery(this).val() == jQuery(this).attr('placeholder')) {
		jQuery(this).val('').removeClass('hasPlaceholder');
	    }
	}).blur(function () {
	    if (jQuery(this).attr('placeholder') !== '' && (jQuery(this).val() == '' || jQuery(this).val() == jQuery(this).attr('placeholder'))) {
		jQuery(this).val(jQuery(this).attr('placeholder')).addClass('hasPlaceholder');
	    }
	});
	jQuery('input').blur();
	jQuery(active).focus();
	jQuery('form').submit(function () {
	    jQuery(this).find('.hasPlaceholder').each(function() {
		jQuery(this).val('');
	    });
	});
    }
});