<!-- jQuery -->
<script src="<?= assets('plugins/jquery/jquery.min.js') ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= assets('plugins/jquery-ui/jquery-ui.min.js') ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Alert -->
<script type="text/javascript">
$(document).ready(function() {
	$("[auto-close-alert]").fadeTo(3000, 500).slideUp(300, function(){
	    $("[auto-close-alert]").slideUp(300);
	});
});
</script>
<!-- Bootstrap 4 -->
<script src="<?= assets('plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- Sparkline -->
<script src="<?= assets('plugins/sparklines/sparkline.js') ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?= assets('plugins/jquery-knob/jquery.knob.min.js') ?>"></script>
<!-- daterangepicker -->
<script src="<?= assets('plugins/moment/moment.min.js') ?>"></script>
<script src="<?= assets('plugins/daterangepicker/daterangepicker.js') ?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= assets('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') ?>"></script>
<!-- overlayScrollbars -->
<script src="<?= assets('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') ?>"></script>
<!-- dataTable -->
<script src="<?= assets('plugins/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?= assets('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?= assets('js/adminlte.js') ?>"></script>

<!-- Custom JS -->
<script src="<?= assets('js/custom.js') ?>"></script>
