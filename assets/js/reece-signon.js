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
});

