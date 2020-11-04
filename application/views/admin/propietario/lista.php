 <style type="">
            .cruds{
             background-color:#22A7F2;
             }
        </style>      
      

<div class="content">
     <section>
            <center>
             <h1 style="font-family:courier,arial,helvética;" >Registro De Propietario</h1>
            </center>
        </section>

      <section>
            <a href="<?php echo base_url(); ?>admin/Propietario/Add" class="btn btn-info">
            <ion-icon name="add"></ion-icon>
        </a>
    </section>

       <section class=" ">
           <div class="box box-solid"> 
               <div  class="box-body">
                        <table class="table table-striped table-inverse table-responsive" >
        <thead class="thead-inverse">
            <tr class="cruds">
                <th scope="col">N°</th>
                <th scope="col">Nombres</th>
                <th scope="col">Primer Apellido</th>
                <th scope="col">Segundo Apellido</th>
                <th scope="col">Telefono</th>
                <th scope="col">Dirección</th>
                <th scope="col">C.I.</th>
                <th scope="col">Fecha Registro</th>
                <th scope="col">Cantidad Inmueble</th>
                <th scope="col">Editar/Eliminar</th>
              
            </tr>
        </thead>
        <tbody>
            <?php $number = 1;
            foreach ($data as $key => $value) : ?>
                <tr>
                    <th class="cruds" scope="row"><?php echo $number++; ?></th>
                    <td><?php echo $value->nombres; ?></td>
                    <td><?php echo $value->primerApellido; ?></td>
                    <td><?php echo $value->segundoApellido; ?></td>
                    <td><?php echo $value->telefono; ?></td>
                    <td><?php echo $value->direccion; ?></td>
                    <td><?php echo $value->ci; ?></td>
                    <td><?php echo $value->fechaRegistro; ?></td>
                    <td><?php echo $value->cantidadInmueble; ?></td>
                    <td>
                        <a href="<?php echo base_url(); ?>admin/Propietario/Edit/update/<?php echo $value->idPropietario; ?>" class="btn btn-primary">
                            <ion-icon name="pencil"></ion-icon>
                        </a>
                        <a href="<?php echo base_url(); ?>admin/Propietario/Lista/delete/<?php echo $value->idPropietario; ?>" class="btn btn-danger">
                            <ion-icon name="remove"></ion-icon>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
               </div>
           </div>
       </section>
</div>

<script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script>
    <?php if ($this->session->flashdata("success")) : ?>

        Swal.fire({
            icon: 'success',
            title: 'Good...',
            text: '<?php echo $this->session->flashdata("success"); ?>',
        });
    <?php endif; ?>
</script>
