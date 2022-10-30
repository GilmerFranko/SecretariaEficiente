<section class="container">
	<blockquote class="flow-text"><?php echo $page['name'] ?></strong></blockquote>

	<a class="btn btn-success" href="<?php echo $extra->generateUrl('collective', 'new.student') ?>"><i class="fa fa-plus"></i>Agregar nuevo estudiante</a>
</h5>

<div id="hide-table">
	<div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1"></label></div><table id="example1" class="table table-striped table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="example1_info">
		<thead>
			<tr role="row">
				<th class="col-sm-1 sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending" style="width: 73px;">#</th><th class="col-sm-1 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Foto: activate to sort column ascending" style="width: 73px;">Foto</th>
				<th class="col-sm-2 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="DNI/CI: activate to sort column ascending" style="width: 165px;">DNI/CI</th>
				<th class="col-sm-2 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Nombre: activate to sort column ascending" style="width: 165px;">Nombre</th>
				<th class="col-sm-2 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 165px;">Email</th>
				<th class="col-sm-1 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Rol de Usuarios: activate to sort column ascending" style="width: 73px;">Rol de Usuarios</th>
				<th class="col-sm-1 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Estado: activate to sort column ascending" style="width: 73px;">Estado</th>
				<th class="col-sm-5 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Acción: activate to sort column ascending" style="width: 165px;">Acción</th>
			</tr>
		</thead>
		<tbody>

			<?php foreach ($students as $student): ?>
				<tr role="row" class="odd">
					<td data-title="#" class="sorting_1"><?php echo $student['id']?></td>
					<td data-title="Foto">
						<img src="https://www.socialavisos.com/sistemas/sys-escolar/uploads/images/defualt.png" width="35px" height="35px" class="img-rounded" alt="">
					</td>
					<td data-title="DNI/CI"><?php echo $student['dni'] ?></td>
					<td data-title="Nombre"><?php echo $student['names'] ?></td>
					<td data-title="Email"><?php echo $student['email'] ?></td>
					<td data-title="Rol de Usuarios">
						Estudiante
					</td>
					<td data-title="Rol de Usuarios">
						<?php echo $student['status'] ?>
					</td>
					<td data-title="Acción">
						<i class="material-icons notranslate">menu</i>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>

