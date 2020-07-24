$(document).ready(function(){
  // data table
  $("[data-table]").DataTable({
    "scrollX": true
  });

  // data table
  $("[data-table-no-ordering]").DataTable({
    "scrollX": true,
    "ordering": false
  });

  // delete confirmation
  $("[data-delete]").on('click', function() {
    var $myModal = $("#delete-popup");
    var action = $(this).data('action');

    $myModal.modal('show');

    $myModal.find("form").attr("action", action);
  });

  // input money format
  $("[data-money]").mask('0.000.000.000', {reverse: true});
});
