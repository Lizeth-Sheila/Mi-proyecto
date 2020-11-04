<div class="content">
    <section>
        <center>
            <h1 style="font-family:courier,arial,helvética;">Registrar Nueva Cuota </h1>
        </center>
    </section>


    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <form action="<?php echo base_url(); ?>admin/Cuota/Add/save" class="mt-4" method="POST">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="examplenombre">Nombre Del Propietario</label>
                                        <div class="input-group">
                                            <input type="hidden" name="idPropietario" class="form-control <?php echo form_error('idPropietario') ? 'is-invalid' : ''; ?>" placeholder="" value="<?php echo set_value('idPropietario'); ?>">

                                            <input type="hidden" name="idCuentaxCobrar" class="form-control <?php echo form_error('idCuentaxCobrar') ? 'is-invalid' : ''; ?>" placeholder=" " id="idCuentaxCobrar" value="<?php echo set_value('idCuentaxCobrar'); ?>">

                                            <input type="text" name="propietario" class="form-control <?php echo form_error('propietario') ? 'is-invalid' : ''; ?>" placeholder=" Nombre del Propietario " id="propietario" value="<?php echo set_value('propietario'); ?>">

                                            <span class="input-group-btn">
                                                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modal-defaulo"><span class="fa fa-search"></span> Buscar</button>
                                            </span>

                                            <div class="invalid-feedback">
                                                <?php echo form_error('propietario'); ?>
                                            </div>

                                        </div>

                                    </div>
                                </div>



                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="valor">Cuota</label>
                                        <input type="text" name="valor" class="form-control <?php echo form_error('valor') ? 'is-invalid' : ''; ?>" placeholder="Escribir...." value="<?php echo set_value('valor'); ?>">
                                        <div class="invalid-feedback">
                                            <?php echo form_error('valor'); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="exampleInputfechaPago">Fecha De Pago</label>

                                        <input type="date" name="fechaPago" class="form-control <?php echo form_error('fechaPago') ? 'is-invalid' : ''; ?>" placeholder="Fecha De Pago" value="<?php echo set_value('fechaPago'); ?>">

                                        <div class="invalid-feedback">
                                            <?php echo form_error('fechaPago'); ?>
                                        </div>
                                    </div>
                                </div>




                                <div class="col-lg-12">
                                    <center>
                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                    </center>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>


<!-- <div class="modal fade" id="modal-defaulo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Lista de Propietarios</h4>
            </div>
            <div class="modal-body">
                <table  class="table table-bordered table-striped table-hover" id="example1">
                   <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre De Propietario</th>
                            <th>C.I.</th>
                            <th>Telefono</th>
                             <th>Dirección</th>
                            <th>OPCIÓN</th>
                        </tr>
                    </thead>
                     <tbody>
                         <?php
                      /*  $indice=1;
                        foreach ($paciente->result() as $row) {
                        ?>
                    <tr>
                    <td> <?php echo $indice;?></td>

                    <td><?php echo $row->nombres.' '.$row->primerApellido.' '.$row->segundoApellido;?></td>
                     <td><?php echo $row->Telefono;?></td>
                      <td><?php echo $row->direccion;?></td>
                    <td><?php echo $row->ci;?></td>
                   
                    <?php 
                     $datapaciente = $row->idPersona."*".$row->nombres."*".$row->primerApellido."*".$row->segundoApellido."*".$row->idCuentaxCobrar;?>


                      <td>
                        <button type="button" class="btn btn-success btn-checkko" value="<?php echo $datapaciente;?>"><span class="fa fa-check"></span></button>
                      </td>


                    </tr>

                    
                    <?php
                      $indice++;
                      }
                      ?>   
                    </tbody>*/
//                 </table>
//             </div>
//             <div class="modal-footer">
//                 <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Salir</button>
//             </div>
//         </div>
//         <!-- /.modal-content -->
//     </div>
//     <!-- /.modal-dialog -->
// </div> -->
