<section class="container">
	<blockquote class="flow-text"><?php echo $page['name'] ?></strong></blockquote>

	<a class="btn btn-success" href="<?php echo $extra->generateUrl('courses', 'new.period') ?>"><i class="fa fa-plus"></i>Agregar nuevo Periodo Académico</a>
</h5>

<table class="centered">
	<thead>
		<tr>
			<th>#</th>
			<th>Periodo</th>
			<th>Fecha Inicio</th>
			<th>Fecha Fin</th>
			<th></th>
		</tr>
	</thead>
	<tbody>

		<?php foreach ($periods as $period): ?>
			<tr role="row" class="odd">
				<td><?php echo $period['id'] ?></td>
				<td><?php echo $period['name'] ?></td>
				<td><?php echo $period['date_start'] ?></td>
				<td><?php echo $period['date_end'] ?></td>
				<td><button></button></td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>
</div>
</div>

