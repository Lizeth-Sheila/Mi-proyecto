<div class="content">

    <section>
        <center>
             <h1  style="font-family:courier,arial,helvética;">Editar Cuotas De: <?php echo $nombre; ?></h1>
        </center>
    </section>
   
   <section>
         <div class="box box-solid">
        <div class="box-body">  
             <div class="row">
                 <div class="col-md-11">
                   
                    <form action="<?php echo base_url(); ?>admin/Cuota/Edit/update/<?php echo $idCuota; ?>"method="POST">
                
                <div class="col-lg-4">
                <div class="form-group">
                    <label for="examplevalor">Precio A Pagar</label>
                    <input type="text" id="valor" name="valor" class="form-control <?php echo form_error('valor') ? 'is-invalid' : ''; ?>" placeholder="Precio" value="<?php echo $valor ?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('valor'); ?>
                    </div>
                 </div>
              </div>

               <div class="col-lg-4">
                <div class="form-group">
                    <label for="exampleInputnombre">Nombre del Cliente</label>
                    <input type="text" name="nombre" class="form-control <?php echo form_error('nombre') ? 'is-invalid' : ''; ?>" placeholder="Nombre del Cliente" value="<?php echo $nombre ?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('nombre'); ?>
                    </div>
                 </div>
              </div>

                <div class="col-lg-4">
                  <div class="form-group">
                    <label for="NumManzano">Fecha De Pago</label>
                    <input type="date" name="fechaPago" class="form-control <?php echo form_error('fechaPago') ? 'is-invalid' : ''; ?>" placeholder="Fecha de Pago" value="<?php echo $fechaPago ?>">
                    <div class="invalid-feedback">
                        <?php echo form_error('fechaPago'); ?>
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
