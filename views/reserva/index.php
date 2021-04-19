<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Reservas</h1>
				</div>
			</div>
		</div>
	</div>

<div class="container">
			<div class="row table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>IdReserva</th>
							<th>Actividad</th>
                            <th>Personas</th>
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Nombre</th>
							<th>Email</th>
						</tr>
					</thead>
					
					<tbody>
						<?php foreach($viewmodel as $item) : ?>
							<tr>
								<td><?php echo $item['IdReserva']; ?></td>
								<td><?php echo $item['Titulo']; ?></td>
								<td><?php echo $item['numpersonas']; ?></td>
								<td><?php echo $item['fecha']; ?></td>
                                <td><?php echo $item['hora']; ?></td>
                                <td><?php echo $item['nomusuario']; ?></td>
                                <td><?php echo $item['emailusu']; ?></td>
								<td><?php if(isset($_SESSION['is_logged_in']) && $_SESSION['user_data']['rol']=='admin') : ?>
								<form method="post" action="reserva/delete">
							    <input type="hidden" name="delete_id" value="<?php echo $item['IdReserva']; ?>">
							    <input class="btn btn-common" type="submit" name="delete" value="Eliminar" />
							    </form><?php endif; ?>
								</td>
							</tr>
						<?php endforeach ; ?>
					</tbody>
				</table>
		    </div>

        <?php if(isset($_SESSION['is_logged_in'])) : ?>
				<div class="inner-column">
				<a class="btn btn-lg btn-circle btn-outline-new-white" href="<?php echo ROOT_PATH; ?>reserva/add">Hacer Reserva</a>
				</div>
				<?php endif; ?>


</div>
		
