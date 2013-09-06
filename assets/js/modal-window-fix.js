;
(function($) {

    // Move modals so ocmain-wrapper's z-index
    // doesn't break the modal.

    var $modals = $("#myModal,#sysReqModal,#disclaimer");
    $modals.remove();
    $("body").append($modals);


    
    $(".showWindow").on("click",function(e){
        if (matchMedia('(min-width: 480px)').matches) {
        e.preventDefault();
        $("#myModal .modal-body").html("<img src='"+$(this).data('large')+"'>");
        $("#myModal").modal();
        }
        else {
            e.preventDefault();
        }
    });
    

})(jQuery);