<section class="container">
	<blockquote class="flow-text">Registra un nuevo docente</strong></blockquote>
	<form action="<?php echo $extra->generateUrl('collective', 'new.teacher', NULL, array('new-teacher' => true)); ?>" class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
		<div class="row">

			<!-- DNI -->
			<div class="col l6 form-group">
				<label for="dni" class="col-sm-2 control-label">
					DNI/CI <span class="text-red">*</span>
				</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="dni" name="dni" value="<?php echo $teacher->dni ?>">
				</div>
			</div>

			<!-- Nombres -->
			<div class="col l6 form-group">
				<label for="names" class="col-sm-2 control-label">
					Nombres <span class="text-red">*</span>
				</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="names" name="names" value="<?php echo $teacher->names ?>">
				</div>
			</div>

			<!-- Apellidos -->
			<div class="col l6 form-group">
				<label for="surnames" class="col-sm-2 control-label">
					Apellidos <span class="text-red">*</span>
				</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="surnames" name="surnames" value="<?php echo $teacher->surnames ?>">
				</div>
			</div>

			<!-- Designación -->
			<div class="col l6 form-group">
				<label for="designation" class="col-sm-2 control-label">
					Designacion <span class="text-red">*</span>
				</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="designation" name="designation" value="<?php echo $teacher->designation ?>">
				</div>
			</div>

			<!-- Fecha De Nacimiento -->
			<div class="col l6 form-group">
				<label for="dob" class="col-sm-2 control-label">
					<span class="text-red">*</span>
				</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="dob" name="dob" value="<?php echo $teacher->dob ?>">
				</div>
			</div>

			<!-- Género -->
			<div class="col l6 form-group">
				<label for="gender">
					Género
				</label>

				<select name="gender" id="gender" class="browser-default select2 select2-offscreen" tabindex="-1">
					<option value="0" selected="">Masculino</option>
					<option value="1">Femenino</option>
				</select>

			</div>

			<!-- Email -->
			<div class="col l6 form-group">
				<label for="email" class="col-sm-2 control-label">
					Email <span class="text-red">*</span>
				</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="email" name="email" value="<?php echo $teacher->email ?>">
				</div>
			</div>

			<!-- Teléfono -->
			<div class="col l6 form-group">
				<label for="num_phone" class="col-sm-2 control-label">
					Teléfono
				</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="num_phone" name="num_phone" value="<?php echo $teacher->num_phone ?>">
				</div>
			</div>

			<!-- Dirección -->
			<div class="col l6 form-group">
				<label for="address" class="col-sm-2 control-label">
					Dirección
				</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="address" name="address" value="<?php echo $teacher->address ?>">
				</div>
			</div>

			<!-- Día de ingreso -->
			<div class="col l6 form-group">
				<label for="jod" class="col-sm-2 control-label">
					Día De Ingreso <span class="text-red">*</span>
				</label>
				<input type="text" class="form-control" id="jod" name="jod" value="<?php echo $teacher->jod ?>">
			</div>

			<!-- Nombre de usuario -->
			<div class="col l6 form-group">
				<label for="username" class="col-sm-2 control-label">
					Nombre De Usuario <span class="text-red">*</span>
				</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="username" name="username" value="<?php echo $teacher->dni ?>">
				</div>
			</div>

			<!-- Contraseña -->
			<div class="col l6 form-group">
				<label for="password" class="col-sm-2 control-label">
					Contraseña <span class="text-red">*</span>
				</label>
				<div class="col-sm-6">
					<input type="password" class="form-control" id="password" name="password" value="<?php echo $teacher->dni ?>">
				</div>
			</div>

			<br>

			<!-- Volver -->
			<div class="col l6 form-group">
				<a class="btn green" href="<?php echo $extra->generateUrl('collective', 'view.teachers'); ?>">Volver</a>
			</div>
			<!-- Enviar -->
			<div class="col l6 form-group">
				<input type="submit" class="btn btn-success" value="Agregar Docente">
			</div>

			<!-- Foto
			<div class="col l6 form-group">
				<div class="btn file-field waves-effect waves-light green darken-3 w50">
					<i class="material-icons">camera</i>
					<input name="images[]" id="file1" type="file" accept="image/jpeg, image/png" disabled="" onchange="previewFile(1)">
				</div>
			</div>-->

		</div>
	</form>
</section>
