    <div class="content-wrapper">
            <section class="content-header">
                <center><h2 class="Bangers">
                  MODIFICANDO                
                </h2></center>
            </section>
            <a href="<?php echo base_url();?>index.php/paciente/cuentacobrar/listaCuentaCobrar">Ir a listas</a>
            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="box box-solid">
                    <div class="box-body">  
                        <div class="row">
                            <div class="col-md-12">
                                <?php
                                foreach ($pagoTotal->result() as $row) {
                                ?>
                                <?php echo form_open_multipart('paciente/CuentaCobrar/modificardb'); ?>
                            
                                <form action="/action_page.php">
                                    <div class=form-group>
                                    <input type="hidden" name="idCuentaPorCobrar" value="<?php echo $row->idCuentaPorCobrar; ?>">
                                     </div >

                                     <div class="col-md-6">
                                     <div class=form-group>
                                        <label for="pagoTotal">Pago Total: </label>
                                        <input type="text" name="pagoTotal" class="form-control" id="pagoTotal" value="<?php echo $row->pagoTotal;?>" pattern="[0-9.]+" required placeholder=""  ></input>                   
                                    </div >
                                    </div>



                                    <div class="col-md-6">
                                    <div class=form-group>
                                        <label for="descuento">Descuento: </label>
                                        <input type="text" name="descuento" pattern="[0-9.]+" required  class="form-control" id="descuento" value="<?php echo $row->descuento; ?>" ></input>
                                    </div >
                                    </div>
                                   
                                   <div class="col-md-12">
                                    <center><div>
                                        <button type="submit" class="btn btn-primary">Modificar</button>
                                        <button type="submit" class="btn btn-success">Cancelar</button>
                                        <?php echo validation_errors(); ?>
                                    </div></center>
                                   </div>
                                   
                                    <?php echo form_close(); ?>
                                    <?php
                                    }
                                    ?>
                                 </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </section>
            <!-- /.content -->
        </div>
       

