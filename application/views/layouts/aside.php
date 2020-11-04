<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <img src="<?php echo base_url('assets/template_dashboard/dist/img/logo.png'); ?>" class="logo" height="200" alt="">
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user-circle-o"></i> <span>Propietario
                    </span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= base_url('admin/Propietario/Lista'); ?>"><i class="fa fa-circle-o"></i> Ver datos Propietario</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-photo"></i> <span>Inmueble</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url(); ?>admin/Inmueble/Main"><i class="fa fa-circle-o"></i> Ver Datos Inmbueble</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-money"></i> <span>Cuotas</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>

                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url(); ?>admin/Cuota/Lista"><i class="fa fa-circle-o"></i>Registro De Cuotas</a></li>
                    <li><a href="<?php echo base_url(); ?>admin/CuentaCobrar/Lista"><i class="fa fa-circle-o"></i>Cuentas Por Cobrar</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-print"></i> <span>Reportes</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>

                <ul class="treeview-menu">
                    <li><a href="../../index.html"><i class="fa fa-circle-o"></i>Cuotas</a></li>
                </ul>
            </li>
            <ul class="treeview-menu">
                <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Tipo Documentos</a></li>
                <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Usuarios</a></li>
            </ul>
            </li>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> VER INVITADOS </a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> REGISTRAR INVITADOS </a></li>
            </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>