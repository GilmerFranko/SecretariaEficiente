<section class="container">
	<blockquote class="flow-text"><?php echo $page['name'] ?></strong></blockquote>

	<a class="btn btn-success" href="<?php echo $extra->generateUrl('collective', 'new.enrollment') ?>"><i class="fa fa-plus"></i>Agregar nuevo estudiante</a>
</h5>

<div id="hide-table">
	<div id="example1_wrapper" class="dataTables_wrapper form-inline no-footer"><div class="dt-buttons"><a class="dt-button buttons-copy buttons-html5" tabindex="0" aria-controls="example1"><span>Copy</span></a><a class="dt-button buttons-excel buttons-html5" tabindex="0" aria-controls="example1"><span>Excel</span></a><a class="dt-button buttons-csv buttons-html5" tabindex="0" aria-controls="example1"><span>CSV</span></a><a class="dt-button buttons-pdf buttons-html5" tabindex="0" aria-controls="example1"><span>PDF</span></a></div><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1"></label></div><table id="example1" class="table table-striped table-bordered table-hover dataTable no-footer" role="grid" aria-describedby="example1_info">
		<thead>
			<tr role="row">
				<th class="col-sm-2 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="DNI/CI: activate to sort column ascending" style="width: 165px;">DNI/CI</th>
				<th class="col-sm-2 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Nombre: activate to sort column ascending" style="width: 165px;">Periodo</th>
				<th class="col-sm-2 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 165px;">Clase</th>
				<th class="col-sm-1 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Estado: activate to sort column ascending" style="width: 73px;">Estado</th>
				<th class="col-sm-5 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Acción: activate to sort column ascending" style="width: 165px;">Acción</th>
			</tr>
		</thead>
		<tbody>

			<?php foreach ($enrollments as $enrollment): ?>
				<tr role="row" class="odd">
					<td data-title="#" class="sorting_1"><?php echo $enrollment['student']['dni']?></td>
					<td data-title="DNI/CI"><?php echo $enrollment['student']['names'] ?></td>
					<td data-title="Periodo"><?php echo $enrollment['period_id'] ?></td>
					<td data-title="Clase"><?php echo $enrollment['class_id'] ?></td>
					<td data-title="Acción">
						<a href="" class="btn btn-success btn-xs mrg" data-placement="top" data-toggle="tooltip" data-original-title="Ver"><i class="fa fa-check-square-o"></i></a>
						<a href="" class="btn btn-warning btn-xs mrg" data-placement="top" data-toggle="tooltip" data-original-title="Editar">
							<i class="fa fa-edit"></i>
						</a>
						<a href="" onclick="" class="btn btn-danger btn-xs mrg" data-placement="top" data-toggle="tooltip" data-original-title="Borrar"><i class="fa fa-trash-o"></i></a>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>
</div>

