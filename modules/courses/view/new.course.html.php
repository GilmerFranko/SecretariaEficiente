<section class="container">
	<blockquote class="flow-text">Registra un nuevo docente</strong></blockquote>
	<form action="<?php echo $extra->generateUrl('courses', 'new.course', NULL, array('new-course' => true)); ?>" class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
		<div class="row">

			<!-- Nombre -->
			<div class="col l6 form-group">
				<label for="name" class="col-sm-2 control-label">
					Asignatura <span class="text-red">*</span>
				</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="name" name="name" value="<?php echo $course->name ?>">
				</div>
			</div>

			<!-- Nivel Academico -->
			<div class="col l6 form-group">
				<label for="level">
					Nivel Academico
				</label>
				<select name="level" id="status" class="browser-default select2 select2-offscreen" tabindex="-1">
					<option value="all" selected="">Todos los niveles</option>
					<option value="1">Primer Año</option>
					<option value="2">Segundo Año</option>
					<option value="3">Tercer Año</option>
					<option value="4">Cuarto Año</option>
					<option value="5">Quinto Año</option>
				</select>
			</div>

			<!-- Estado -->
			<div class="col l6 form-group">
				<label for="status">
					Estado
				</label>
				<select name="status" id="status" class="browser-default select2 select2-offscreen" tabindex="-1">
					<option value="1" selected="">Activo</option>
					<option value="0">Inactivo</option>
				</select>
			</div>

			<div class="col l6 form-group">
			</div>
			<br>

			<!-- Enviar -->
			<div class="col l6 form-group">
				<input type="submit" class="btn btn-success" value="Agregar Docente">
			</div>


		</div>
	</form>
</section>
