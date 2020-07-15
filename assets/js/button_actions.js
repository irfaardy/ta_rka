
$(document).ready(function(){
  // delete confirmation
  $("[data-delete]").on('click', function() {
    var $myModal = $("#delete-popup");
    var action = $(this).data('action');

    $myModal.modal('show');

    $myModal.find("form").attr("action", action);
  })
});
