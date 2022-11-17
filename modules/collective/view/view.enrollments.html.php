<section class="container">
	<blockquote class="flow-text"><?php echo $page['name'] ?></strong></blockquote>
	<a class="btn btn-success" href="<?php echo $extra->generateUrl('collective', 'new.enrollment') ?>"><i class="fa fa-plus"></i>Agregar nueva inscripción</a>



	<h5>Filtrar Por</h5>
	<form action="<?php echo $extra->generateUrl('collective', 'view.enrollments'); ?>" class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="row">
				<div class="col l6 form-group">

					<!-- Filtrado por periodo -->
					<div class="row <?php echo ($filter_period['status']) ? 'filtered' : '' ?>" style="display: flex; align-items: center;">
						<div class="col s6">
							<label for="s2id_autogen5" class="	 control-label">
								Periodos <span class="text-red">*</span>
							</label>
							<select name="filter_period" id="filter_period" class="browser-default select2 select2-offscreen" tabindex="-1">
								<?php foreach ($periods as $period): ?>
									<?php if ($filter_period AND $period['id'] == $filter_period['data']){ ?>
										<option value="<?php echo $period['id'] ?>" selected><?php echo $period['name'] ?></option>
									<?php }else{ ?>
										<option value="<?php echo $period['id'] ?>"><?php echo $period['name'] ?></option>
									<?php } ?>

								<?php endforeach ?>
							</select>
						</div>
						<div class="col s4">
							<label>
								<input id="checkbox_filter_period" type="checkbox" <?php echo ($filter_period['status']) ? 'checked' : '' ?>>
								<span></span>
							</label>
						</div>
					</div>
					<!-- -->

				</div>
				<div class="col l3 form-group">
					<input id="apply_filter" class="btn" type="submit" name="" value="Filtrar">
				</div>
			</div>
		</div>
	</form>
	<h4><?php echo $filter_name ?></h4>
	<table class="centered">
		<thead>
			<tr>
				<th>#</th>
				<th>DNI</th>
				<th>Nombre</th>
				<th>Periodo</th>
				<th>Clase</th>
				<th>Accion</th>
				<th></th>
			</tr>
		</thead>
		<tbody>

			<?php foreach ($enrollments as $enrollment): ?>
				<tr role="row" class="odd">
					<td><?php echo $enrollment['id']?></td>
					<td><?php echo $enrollment['student']['dni']?></td>
					<td><?php echo $enrollment['student']['names'] ?></td>
					<td><?php echo $enrollment['period']['name'] ?></td>
					<td><?php echo $enrollment['class_id'] ?></td>
					<td><button></button></td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>
</div>
