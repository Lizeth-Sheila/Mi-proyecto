<div class="content">
    <section class=" ">
        <center>
            <h1 style="font-family:courier,arial,helvética;">Un Nuevo Registro De Propietario</h1>
        </center>
    </section>
    <section class="content">
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="<?php echo base_url(); ?>admin/Propietario/Add/save" method="POST">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputNombre1">Nombres</label>
                                    <input type="text" name="nombres" class="form-control <?php echo form_error('nombres') ? 'is-invalid' : ''; ?>" placeholder="Nombre completo" value="<?php echo set_value('nombres'); ?>">
                                    <div class="invalid-feedback">
                                        <?php echo form_error('nombres'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="PrimerApellido">Primer Apellido</label>
                                    <input type="text" name="primerApellido" class="form-control <?php echo form_error('primerApellido') ? 'is-invalid' : ''; ?>" placeholder="Primer Apellido" value="<?php echo set_value('primerApellido'); ?>">
                                    <div class="invalid-feedback">
                                        <?php echo form_error('primerApellido'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="SegundoApellido">Segundo Apellido</label>
                                    <input type="text" name="segundoApellido" class="form-control <?php echo form_error('segundoApellido') ? 'is-invalid' : ''; ?>" placeholder="Segundo Apellido" value="<?php echo set_value('segundoApellido'); ?>">
                                    <div class="invalid-feedback">
                                        <?php echo form_error('segundoApellido'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="Telefono">Telefono</label>
                                    <input type="text" name="telefono" class="form-control <?php echo form_error('telefono') ? 'is-invalid' : ''; ?>" placeholder="Telefono" value="<?php echo set_value('telefono'); ?>">
                                    <div class="invalid-feedback">
                                        <?php echo form_error('telefono'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="Direccion">Dirección</label>
                                    <input type="text" name="direccion" class="form-control <?php echo form_error('direccion') ? 'is-invalid' : ''; ?>" placeholder="Direccion" value="<?php echo set_value('direccion'); ?>">
                                    <div class="invalid-feedback">
                                        <?php echo form_error('direccion'); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="Ci">C.I.</label>
                                    <input type="text" name="ci" class="form-control <?php echo form_error('ci') ? 'is-invalid' : ''; ?>" placeholder="C.I." value="<?php echo set_value('ci'); ?>">
                                    <div class="invalid-feedback">
                                        <?php echo form_error('ci'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="CantidadInmueble">Cant. Inmueble</label>
                                    <input type="text" name="cantidadInmueble" class="form-control <?php echo form_error('cantidadInmueble') ? 'is-invalid' : ''; ?>" placeholder="Cantidad Inmueble" value="<?php echo set_value('cantidadInmueble'); ?>">
                                    <div class="invalid-feedback">
                                        <?php echo form_error('cantidadInmueble'); ?>
                                    </div>
                                </div>
                            </div>

                            <section>
                                <center>
                                    <div class="col-lg-12">

                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                    </div>
                                </center>
                            </section>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
<script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>