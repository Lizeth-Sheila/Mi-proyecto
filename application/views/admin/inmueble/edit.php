<div class="content">

    <section>
        <center>
             <h1  style="font-family:courier,arial,helvética;">Editar  Datos de Inmueble: <?php echo $tipoInmueble; ?></h1>
        </center>
    </section>
   
   <section>
         <div class="box box-solid">
        <div class="box-body">  
             <div class="row">
                 <div class="col-md-11">
                    <div>
                    <form action="<?php echo base_url(); ?>admin/Inmueble/Edit/update/<?php echo $idInmueble; ?>"method="POST">
                
                <div class="col-lg-4">
                <div class="form-group">
                    <label for="exampleTipoInmueble">Tipo Inmueble</label>
                    <input type="text" id="tipoInmueble" name="tipoInmueble" class="form-control <?php echo form_error('tipoInmueble') ? 'is-invalid' : ''; ?>" placeholder="Tipo Inmueble" value="<?php echo $tipoInmueble ?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('tipoInmueble'); ?>
                    </div>
                 </div>
              </div>



               <div class="col-lg-4">
                <div class="form-group">
                    <label for="exampleInputNroDocuemto">N° Documento</label>
                    <input type="text" name="nroDocumento" class="form-control <?php echo form_error('nroDocumento') ? 'is-invalid' : ''; ?>" placeholder="Num.Documento" value="<?php echo $nroDocumento ?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('nroDocumento'); ?>
                    </div>
                 </div>
              </div>

                <div class="col-lg-4">
                  <div class="form-group">
                    <label for="NumManzano">N° Manzano</label>
                    <input type="text" name="numManzano" class="form-control <?php echo form_error('numManzano') ? 'is-invalid' : ''; ?>" placeholder="Num. Manzano" value="<?php echo $numManzano ?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('numManzano'); ?>
                    </div>
                 </div>
                </div>

                <div class="col-lg-4">
                <div class="form-group">
                    <label for="exampleInputPrecio">Precio</label>
                    <input type="text" name="precio" class="form-control <?php echo form_error('precio') ? 'is-invalid' : ''; ?>" placeholder="Precio" value="<?php echo $precio ?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('precio'); ?>
                    </div>
                 </div>
              </div>


                <div class="col-lg-4">
                <div class="form-group">
                    <label for="AreaTerreno">Area De Terreno</label>
                    <input type="text" name="areaTerreno" class="form-control <?php echo form_error('areaTerreno') ? 'is-invalid' : ''; ?>" placeholder="Area Terreno" value="<?php echo $areaTerreno ?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('areaTerreno'); ?>
                    </div>

                  </div>
              </div>  

         
            <div class="col-lg-12">
                <center>
                      <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </center>              
            </div>  

        </form>
        
        <div>
        </div>

         </div>
        </div>
   </section>

</div>

<script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
