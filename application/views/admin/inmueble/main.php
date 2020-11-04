 <style type="">
            .cruds{
             background-color:#3C8DBC;
             }
        </style>

<div class="content">
<section  class="content-header">
    <center>
        <h1 style="font-family:courier,arial,helvética;" >Lista de Inmuebles</h1>
    </center>
</section>
    

<section class="content-header">    
        <a href="<?php echo base_url(); ?>admin/Inmueble/Add" class="btn btn-info">
            <ion-icon name="add" href="Inmueble/Add"></ion-icon>
        </a>    
</section>
    
<section class="content">
    
<div class="box box-solid">
    <div class="box-body">
       
    <table class="table table-striped table-inverse table-responsive" id="example1">
        <thead  class="thead-inverse">
            <tr class="cruds">
                <th scope="col">N°</th>
                 <th scope="col">Tipo Inmueble</th>
                <th scope="col">Numero Documento</th>
                <th scope="col">Numero Manzano</th>
                <th scope="col">Precio</th>
                <th scope="col">Area Terreno</th>
                 <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>            
            <?php $number = 1;
            foreach ($data as $key => $value) : ?>
                <tr>
                    <th scope="row"><?php echo $number++; ?></th>
                    <td><?php echo $value->tipoInmueble; ?></td>
                    <td><?php echo $value->nroDocumento; ?></td>
                    <td><?php echo $value->numManzano; ?></td>
                    <td><?php echo $value->precio; ?></td>
                    <td><?php echo $value->areaTerreno; ?></td>
                    <td>
                     
                        <a href="<?php echo base_url(); ?>admin/Inmueble/Edit/update/<?php echo $value->idInmueble; ?>" class="btn btn-primary">
                            <ion-icon name="pencil"></ion-icon>
                        </a>
                        <a href="<?php echo base_url(); ?>admin/Inmueble/Main/delete/<?php echo $value->idInmueble; ?>" class="btn btn-danger">
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
