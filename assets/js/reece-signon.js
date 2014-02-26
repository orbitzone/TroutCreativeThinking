/**
 * Created by dominic on 25/02/2014.
 */
$(document).ready(function() {
    $("#no-account").bind('click', function(){
        $('.dropdown-menu > .login').hide();
        $('.dropdown-menu > .register').show();
        return false;
        //$('.locationDropDown').addClass('open')
    });

    $("#sign-in").bind('click', function(){
        $('.dropdown-menu > .register').hide();
        $('.dropdown-menu > .login').show();
        return false;
    });

    //Don't close dropdown if it's body is clicked
    $('.dropdown-menu').click(function(e) {
        e.stopPropagation();
    });

    //Show hide fields for trade or retail
    $("input[name='accType']").change(function() {
        var value = $(this).val();
        if(value === "trade") {
            $('.trade-form').show();
            $('.retail-form').hide();
        }
        else if(value === "retail") {
            $('.retail-form').show();
            $('.trade-form').hide();
        }
    });
    $("#retail-radio").prop('checked', true);
});

