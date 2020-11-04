<style type="">
            .cruds{
             background-color:#3C8DBC;
             }
        </style>

<div class="content">
<section  class="content-header">
    <center>
        <h1 style="font-family:courier,arial,helvética;" >Lista De Cuotas A Pagar</h1>
    </center>
</section>
    

<section class="content-header">    
        <a href="<?php echo base_url(); ?>admin/Cuota/Add" class="btn btn-info">
            <ion-icon name="Add" href="Cuota/Add"></ion-icon>
        </a>    
</section>
    
<section class="content">
    
<div class="box box-solid">
    <div class="box-body">
       
    <table class="table table-striped table-inverse table-responsive" id="example1">
        <thead  class="thead-inverse">
            <tr class="cruds">
                <th scope="col">N°</th>
                 <th scope="col">Precio de Pago</th>
                <th scope="col">Nombre Del Cliente</th>
                <th scope="col">Fecha de Pago</th>
                 <th scope="col">Opciones</th>
               
            </tr>
        </thead>
        <tbody>            
            <?php $number = 1;
            foreach ($data as $key => $value) : ?>
                <tr>
                    <th class="cruds" scope="row"><?php echo $number++; ?></th>
                    <td><?php echo $value->valor; ?></td>
                    <td><?php echo $value->nombre; ?></td>
                      <td><?php echo $value->fechaPago; ?></td>
                   
                    
                    <td>
                     
                        <a href="<?php echo base_url(); ?>admin/Cuota/Edit/update/<?php echo $value->idCuota; ?>" class="btn btn-primary">
                            <ion-icon name="pencil"></ion-icon>
                        </a>
                        <a href="<?php echo base_url(); ?>admin/Cuota/Lista/delete/<?php echo $value->idCuota; ?>" class="btn btn-danger">
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
