;
(function($) {

    // Move modals so ocmain-wrapper's z-index
    // doesn't break the modal.

    var $modals = $("#myModal,#sysReqModal,#disclaimer");
    $modals.remove();
    $("body").append($modals);

    $(".showWindow").on("click",function(e){
        e.preventDefault();
        $("#myModal .modal-body").html("<img src='"+$(this).data('large')+"'>");
        $("#myModal").modal();
    });

})(jQuery);