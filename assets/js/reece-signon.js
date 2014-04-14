/**
 * Created by dominic on 25/02/2014.
 */
$(document).ready(function() {
    $("#no-account").bind('click', function(){
        $('.dropdown-menu > .login').hide();
        $('.dropdown-menu > .register').show();
        return false;
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

    // Code for location dropdown

    $('#headerLocationList').hide();
    $('#headerStoreSearchInput').focus(function(){
        $('#headerLocationList').show();
    });
    $('#headerLocationList a').click(function(e){
        $('#headerLocationDropDown .location').html($(e.target).attr('data-location'));
        $('#headerLocationDropDown .newLocation').hide();
        $('#headerLocationList').hide();
        $('#headerLocationDropDown .locationSelected').show();
        $('#headerLocationList').dropdown('toggle');
    });
    $('#changeStoreLocation').click(function(){
        $('#headerLocationDropDown .newLocation').show();
        $('#headerLocationDropDown .locationSelected').hide();
        $('#headerLocationDropDown .location').html('Select Store');
    });
});

