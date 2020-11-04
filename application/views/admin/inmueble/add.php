<div class="content">
    <section>
        <center>
            <h1 style="font-family:courier,arial,helvética;">Registrar un Nuevo Inmueble</h1>
        </center>
    </section>
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <form action="<?php echo base_url(); ?>admin/Inmueble/Add/save" class="mt-4" method="POST">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="exampleTipoInmueble">Tipo Inmueble</label>
                                        <input type="text" name="tipoInmueble" class="form-control <?php echo form_error('tipoInmueble') ? 'is-invalid' : ''; ?>" placeholder="Tipo Inmueble" value="<?php echo set_value('tipoInmueble'); ?>">
                                        <div class="invalid-feedback">
                                            <?php echo form_error('tipoInmueble'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="exampleInputnroDocumento">N° Documento</label>
                                        <input type="text" name="nroDocumento" class="form-control <?php echo form_error('nroDocumento') ? 'is-invalid' : ''; ?>" placeholder="Numero Documento" value="<?php echo set_value('nroDocumento'); ?>">
                                        <div class="invalid-feedback">
                                            <?php echo form_error('nroDocumento'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="exampleInputNumMan">N° Manzano</label>
                                        <input type="text" name="numManzano" class="form-control <?php echo form_error('numManzano') ? 'is-invalid' : ''; ?>" placeholder="Numero de Manzano" value="<?php echo set_value('numManzano'); ?>">
                                        <div class="invalid-feedback">
                                            <?php echo form_error('numManzano'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="exampleInputPrecio">Precio</label>
                                        <input type="text" name="precio" class="form-control <?php echo form_error('precio') ? 'is-invalid' : ''; ?>" placeholder="Precio" value="<?php echo set_value('precio'); ?>">
                                        <div class="invalid-feedback">
                                            <?php echo form_error('precio'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="areaTerreno">Area Terreno</label>
                                        <input type="text" name="areaTerreno" class="form-control <?php echo form_error('areaTerreno') ? 'is-invalid' : ''; ?>" placeholder="area Terreno" value="<?php echo set_value('areaTerreno'); ?>">
                                        <div class="invalid-feedback">
                                            <?php echo form_error('areaTerreno'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Propietario CI</label>
                                        <input type="hidden" id="idPropietario" name="idPropietario" <?php echo form_error('idPropietario') ? 'is-invalid' : ''; ?>" placeholder="" value="0">
                                        <input type="text" name="ci" id="ci" class="form-control" placeholder="Ingresar CI" style="width:500px;">
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

<script src="<?php echo base_url('assets/template_dashboard/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/template_dashboard/bower_components/jquery-ui/jquery-ui.min.js'); ?>"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $("#ci").autocomplete({
            source: function(request, response) {
                $.ajax({
                    url: "<?= base_url() ?>admin/Inmueble/Add/getAutocomplete",
                    method: "POST",
                    data: {
                        search: request.term
                    },
                    success: function(data) {
                        var resultado = JSON.parse(data);
                        response(resultado);
                    }
                });
            },
            select: function(event, ui) {
                $('#ci').val(ui.item.label); // display the selected text
                $('#idPropietario').val(ui.item.value); // save selected id to input
                return false;
            }
        });
    });
</script>