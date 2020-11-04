<div class="content">
    <section>
        <center>
            <h1 style="font-family:courier,arial,helvética;">Registrar Nueva Cuota por cobrar</h1>
        </center>
    </section>
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <form action="<?php echo base_url(); ?>admin/CuentaCobrar/Add/save" class="mt-4" method="POST">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="examplenombre">CI Propietario</label>
                                        <div class="input-group">
                                            <input type="hidden" id="idPropietario" name="idPropietario" class="form-control <?php echo form_error('idPropietario') ? 'is-invalid' : ''; ?>" placeholder="" value="<?php echo set_value('idPropietario'); ?>">
                                            <input type="text" id="propietario" name="propietario" class="form-control
                                                <?php echo form_error('propietario') ? 'is-invalid' : ''; ?>" placeholder="CI del Propietario " id="propietario" value="<?php echo set_value('propietario'); ?>">
                                            <span class="input-group-btn">
                                                <button id="buscarPropietario" name="buscarPropietario" class="btn btn-primary" type="button" onclick="buscar()"><span class="fa fa-search"></span> Buscar</button>
                                            </span>
                                            <div class="invalid-feedback">
                                                <?php echo form_error('propietario'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="montoTotal">Monto Total</label>
                                        <input type="text" name="montoTotal" class="form-control <?php echo form_error('montoTotal') ? 'is-invalid' : ''; ?>" placeholder="Monto Total(BS)" value="<?php echo set_value('montoTotal'); ?>">
                                        <div class="invalid-feedback">
                                            <?php echo form_error('montoTotal'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="exampleInputfechaCobro">Fecha cobro</label>
                                        <input type="date" name="fechaCobro" class="form-control <?php echo form_error('fechaCobro') ? 'is-invalid' : ''; ?>" placeholder="Fecha De Cobro" value="<?php echo set_value('fechaCobro'); ?>">
                                        <div class="invalid-feedback">
                                            <?php echo form_error('fechaCobro'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <select id="inmueblePropietario" name="inmueblePropietario" class="form-control browser-default dropdown-primary">
                                            <option value="" disabled selected>Selecciona tu inmueble</option>
                                        </select>
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
<script>
    function load_data(propietario) {
        $.ajax({
            url: "<?php echo base_url(); ?>admin/CuentaCobrar/Add/buscarPropietario",
            method: "POST",
            data: {
                ciPropietario: propietario
            },
            success: function(data) {
                var resultado = jQuery.parseJSON(data);
                $('#inmueblePropietario').children().remove();//remueve los options del componente select
                $('#inmueblePropietario').append('<option value="" disabled selected>Selecciona tu inmueble</option>');//agrega por defecto
                $('#idPropietario').val('');
                if (resultado.length > 0) {
                    $.each(resultado, function( index, value ) {
                        var option = $("<option></option>");
                        $(option).val(value.idInmueble);
                        $(option).html('tipo: ' +value.tipoInmueble + ' NroDocumento:' + value.nroDocumento + ' NroManzano: ' + value.numManzano);
                        $('#inmueblePropietario').append(option);
                    });
                    $('#idPropietario').val(resultado[0].idPropietario);
                }
            }
        })
    }

    function buscar() {
        var entradaCiPropietario = $('#propietario').val();
        if (entradaCiPropietario != "") {
            load_data(entradaCiPropietario);
        }
    }
</script>
