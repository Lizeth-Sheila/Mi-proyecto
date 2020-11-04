
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Incos Nocturno </b>
    </div>
</footer>
<!-- jQuery 3 -->
<script src="<?php echo base_url('assets/template_dashboard/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/template_dashboard/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url('assets/template_dashboard/bower_components/jquery-slimscroll/jquery.slimscroll.min.js'); ?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets/template_dashboard/bower_components/fastclick/lib/fastclick.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/template_dashboard/dist/js/adminlte.min.js'); ?>"></script>

<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url('assets/template_dashboard/plugins/iCheck/icheck.min.js'); ?>"></script>
<!-- DataTable -->
<script src="<?php echo base_url(); ?>assets/template_dashboard/datatables.net-bs/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/template_dashboard/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url('assets/template_dashboard/bower_components/select2/dist/js/select2.full.min.js'); ?>"></script>
<!-- Jquery UI -->
<script src="<?php echo base_url('assets/template_dashboard/bower_components/jquery-ui/jquery-ui.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/template_dashboard/jquery/jquery-migrate-3.0.0.min.js'); ?>"></script>

</body>

</html>
<script type="text/javascript">
    $(document).ready(function() {
        //cargar pluyin del data table
        $('#example1').DataTable({
            "language": {
                "lengthMenu": "Mostrar _MENU_registrosb  por pagina",

            }
        })

    })
</script>