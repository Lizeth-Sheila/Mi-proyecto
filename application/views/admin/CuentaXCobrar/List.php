 <style type="">
            .cruds{
             background-color: #33BC57;
             }
        </style>
        <div class="content-wrapper">          
            <section class="content-header">
                 <center><h2 class="Bangers">
                LISTA DE CUENTAS POR COBRAR
                </h2></center>
            </section>       
             <section class="content-header">
                <?php echo form_open_multipart('paciente/cuentacobrar/agregar'); ?>
                <button type="submit" class="btn btn-oval btn-primary">Agregar <i class="fa fa-user "></i></button>
            </section>     

             <section class="content">
                <!-- Default box -->
                <div class="box box-solid">
                    <div class="box-body">
                   
                        <div class="row">
                            <div class="col-md-12">
                            </div>
                        </div>
                        
                        <table class="table table-striped table-inverse table-responsive" id="example1">
                            
                            <thead class="thead-inverse">
                                 <tr class="cruds">
                                    <th>No.</th>
                                    <th>PACIENTE</th>
                                    <th>PAGO TOTAL</th>
                                    <th>DESCUENTO</th>                             
                                    <th>OPCIONES</th>                                                                 
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $indice=1;
                                foreach ($cuentaporcobrar->result() as $row) {
                                ?>
                                    <tr>
                                    <td><?php echo $indice; ?></td>
                                    <td><?php echo $row->nombres.' '.$row->primerApellido.' '.$row->segundoApellido; ?></td>
                                    <td><?php echo $row->pagoTotal; ?></td>
                                    <td><?php echo $row->descuento; ?></td>                        
                                                                       
                                    <td>
                                            <div class="btn-group">
                                                <?php echo form_open_multipart('paciente/cuentacobrar/modificar'); ?>
                                                <input type="hidden" name="idCuentaPorCobrar" value="<?php echo $row->idCuentaPorCobrar; ?>">
                                                <button class="btn btn-warning  " type="submit" name="action"><i class="fa fa-pencil"></i></button>
                                                <?php echo form_close(); ?>
                                            </div>

                                            <div class="btn-group">
                                                <?php echo form_open_multipart('paciente/cuentacobrar/eliminardb'); ?>
                                                    <input type="hidden" name="idCuentaPorCobrar" value="<?php echo $row->idCuentaPorCobrar; ?>">
                                                    <input type="hidden" name="pagoTotal" value="<?php echo $row->pagoTotal; ?>"></input>
                                                    <input type="hidden" name="descuento" value="<?php echo $row->descuento; ?>"></input>
                                                    <input type="hidden" name="idTratamiento" value="<?php echo $row->idTratamiento; ?>"></input>
                                                    <input type="hidden" name="idPaciente" value="<?php echo $row->idPaciente; ?>"></input>
                                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                                <?php echo form_close(); ?>
                                            </div> 

                                                                           
                                        </td>
                                    </tr>
                                        
                                <?php
                                $indice++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    </div> 
                    </div> 
                </div>      
            </section>

             </div>  
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Tratamientos</h4>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success pull-left" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->     
                         
                                      
                                            
                                        