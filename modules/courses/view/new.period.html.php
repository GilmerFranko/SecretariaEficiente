<section class="container">
	<blockquote class="flow-text">Registra un nuevo periodo académico</blockquote>
	<form action="<?php echo $extra->generateUrl('courses', 'new.period', NULL, array('new-period' => true)); ?>" class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
		<div class="row">

			<!-- Fecha de inicio -->
			<div class="col l6 form-group">
				<label for="date_start">
					Fecha de inicio
				</label>
				<input id="date_start" type="date" name="date_start">
			</div>

			<!-- Fecha de finalización -->
			<div class="col l6 form-group">
				<label for="date_end">
					Fecha de finalización
				</label>
				<input id="date_end" type="date" name="date_end">
			</div>
			<br>

			<!-- Volver -->
			<div class="col l6 form-group">
				<a class="btn green" href="<?php echo $extra->generateUrl('courses', 'view.periods'); ?>">Volver</a>
			</div>
			<!-- Enviar -->
			<div class="col l6 form-group">
				<input type="submit" class="btn btn-success" value="Agregar Docente">
			</div>


		</div>
	</form>
</section>
