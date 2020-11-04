<style type="">
	.cruds {
        background-color:#3C8DBC;
    }
</style>

<div class="content">
	<section class="content-header">
		<center>
			<h1 style="font-family:courier,arial,helvética;">Lista de cuotas por cobrar</h1>
		</center>
	</section>

	<section class="content-header">
		<a href="<?php echo base_url(); ?>admin/CuentaCobrar/Add" class="btn btn-info">
			<ion-icon name="Add" href="CuentaCobrar/Add"></ion-icon>
		</a>
	</section>

	<section class="content">

		<div class="box box-solid">
			<div class="box-body">

				<table class="table table-striped table-inverse table-responsive" id="example1">
					<thead class="thead-inverse">
						<tr class="cruds">
							<th scope="col">N°</th>
							<th scope="col">Monto Total</th>
							<th scope="col">Propietario</th>
							<th scope="col">Tipo Inmueble</th>
							<th scope="col">Fecha de Cobro</th>
							<th scope="col">Estado</th>
						</tr>
					</thead>
					<tbody>
						<?php $number = 1;
						foreach ($data as $key => $value) : ?>
							<tr>
								<th class="cruds" scope="row"><?php echo $number++; ?></th>
								<td><?php echo $value->montoTotal; ?></td>
								<td><?php echo $value->nombres . " " . $value->primerApellido . " " . $value->segundoApellido  ?></td>
								<td><?php echo $value->tipoInmueble; ?></td>
								<td><?php echo $value->mes; ?></td>
								<td><?php echo $value->estado; ?></td>
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